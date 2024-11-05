<?php
session_start();
require './includes/db.php'; // Database connection
include './navbar.php';

// Get product ID and category from the URL
$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$category = isset($_GET['category']) ? $_GET['category'] : '';
echo "Received category: " . htmlspecialchars($category) . "<br>";
// Validate category
switch ($category) {
    case 'men':
        $table = 'men';
        break;
    case 'women':
        $table = 'women';
        break;
    case 'electronics':
        $table = 'electronics';
        break;
    case 'groceries':
        $table = 'groceries';
        break;
    default:
        die("Invalid category.");
}

// Prepare statement to fetch product details
$stmt = $conn->prepare("SELECT * FROM $table WHERE id = ?");
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if product exists
if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
} else {
    die("Product not found.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['name']; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $product['image_path']; ?>" class="img-fluid" alt="<?php echo $product['name']; ?>">
            </div>
            <div class="col-md-6">
                <h1><?php echo $product['name']; ?></h1>
                <p><strong>Price:</strong> Rs. <?php echo number_format($product['price'], 2); ?></p>
                <p><strong>Description:</strong></p>
                <p><?php echo $product['description']; ?></p>
                
                <form action="addtocart.php" method="POST">
                    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                    <input type="hidden" name="category" value="<?php echo $category; ?>">
                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>
                <a href="checkout.php?id=<?php echo $product['id']; ?>&category=<?php echo $category; ?>" class="btn btn-success">Buy Now</a>

            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    
</body>
</html>
