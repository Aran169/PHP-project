<!-- search.php -->
<?php
require './includes/db.php';
include './navbar.php';
if (isset($_GET['query'])) {
    $search = "%" . $_GET['query'] . "%";
    $stmt = $conn->prepare("
        SELECT * FROM men WHERE name LIKE ?
        UNION
        SELECT * FROM women WHERE name LIKE ?
        UNION
        SELECT * FROM electronics WHERE name LIKE ?
        UNION
        SELECT * FROM groceries WHERE name LIKE ?
    ");
    $stmt->bind_param("ssss", $search, $search, $search, $search);
    $stmt->execute();
    $result = $stmt->get_result();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .row{
                margin-left: 60px;
        }
    .product-card img {
            height: 200px;
            object-fit: cover; 
            width: 100%;
        }
        .product-card {
            margin: 20px;
        }
        </style>
    <title>Search Results</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Search Results</h1>
        <div class="row">
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="col-md-3 mb-4 product-card">
                        <div class="card">
                        <img src="<?php echo $row['image_path']; ?>" class="card-img-top" alt="<?php echo $row['name']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                <p class="card-text">Price: $<?php echo number_format($row['price'], 2); ?></p>
                                <p class="card-text"><?php echo $row['description']; ?></p>
                            <div class="d-flex justify-content-between">   
                            <a href="http://localhost/project1/view.php?id=<?php echo $row['id']?>;&category=men" class="btn btn-primary">View</a>
                            <form action="../../addtocart.php" method="POST">
                                <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                                <input type="hidden" name="category" value="men"> <!-- or dynamically set this based on your product -->
                                <button class="btn btn-success">Add to Cart</button>
                            </form>
                            </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No products found for "<?php echo htmlspecialchars($_GET['query']); ?>".</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
<?php include 'footer.php'; ?>
