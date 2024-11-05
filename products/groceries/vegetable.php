<?php
require '../../includes/db.php'; // Ensure this path is correct for your setup
include '../../navbar.php';

$subcategory = 'vegetables'; // Use the correct subcategory name as it appears in the database
$sql = "SELECT * FROM groceries WHERE subcategory = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die('Prepare failed: ' . htmlspecialchars($conn->error));
}

$stmt->bind_param("s", $subcategory);
$stmt->execute();
$result = $stmt->get_result();

if ($result === false) {
    die('Execute failed: ' . htmlspecialchars($stmt->error));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegetables</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .row{
                margin-left: 60px;
        }
    .product-card img {
            height: 200px; /* Set a fixed height for product images */
            object-fit: cover; /* Ensures images maintain aspect ratio and fill the space */
            width: 100%; /* Ensure images fill the card width */
        }

        .product-card {
            margin: 20px;
        }
        </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Vegetables</h1>
        <div class="row">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="col-md-3 mb-4 product-card">
                        <div class="card">
                        <img src="<?php echo '../../'.$row['image_path']; ?>" class="card-img-top" alt="<?php echo $row['name']; ?>">

                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                <p class="card-text">Price: Rs. <?php echo number_format($row['price'], 2); ?></p>
                                <p class="card-text"><?php echo $row['description']; ?></p>
                                <div class="d-flex justify-content-between">   
                            <a href="http://localhost/project1/view.php?id=<?php echo $row['id']?>;&category=groceries" class="btn btn-primary">View</a>
                            <form action="../../addtocart.php" method="POST">
                                <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                                <input type="hidden" name="category" value="groceries"> <!-- or dynamically set this based on your product -->
                                <button class="btn btn-success">Add to Cart</button>
                            </form>
                            </div>
                                </div>

                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No products found in this category.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>

<?php
$stmt->close(); // Close the stategroceriest
$conn->close(); // Close the database connection
include '../../footer.php';
?>
