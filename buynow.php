<?php
session_start();
require './includes/db.php'; // Database connection


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $category = $_POST['category'];

    // Fetch product details based on category
    switch ($category) {
        case 'men':
            $table = 'men_products';
            break;
        case 'women':
            $table = 'women_products';
            break;
        case 'electronics':
            $table = 'electronics_products';
            break;
        case 'groceries':
            $table = 'groceries_products';
            break;
        default:
            die("Invalid category.");
    }

    // Prepare statement to fetch product details
    $stmt = $conn->prepare("SELECT * FROM $table WHERE id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
        // You can now display the product details for purchasing
        // Here you can implement the buy now functionality
    } else {
        echo "Product not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Now</title>
</head>
<body>
    <div class="container">
        <h1><?php echo $product['name']; ?></h1>
        <img src="<?php echo $product['image_path']; ?>" alt="<?php echo $product['name']; ?>">
        <p>Price: $<?php echo number_format($product['price'], 2); ?></p>
        <p><?php echo $product['description']; ?></p>
        
        <form method="POST" action="addtocart.php">
            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
            <input type="hidden" name="category" value="<?php echo $category; ?>">
            <button type="submit">Add to Cart</button>
        </form>

        <form method="POST" action="checkout.php"> <!-- Add checkout page -->
            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
            <input type="hidden" name="category" value="<?php echo $category; ?>">
            <button type="submit">Buy Now</button>
        </form>
    </div>
</body>
</html>
