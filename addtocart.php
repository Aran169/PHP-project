
<?php
session_start();
require './includes/db.php'; // Database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $category = $_POST['category'];
    // Fetch product details based on category
    switch ($category) {
        case 'men':
            $table = 'men'; // Adjust table names as per your schema
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
      
    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
        // Create a cart item array
        $cart_item = [
            'id' => $product['id'],
            'name' => $product['name'],
            'price' => $product['price'],
            'quantity' => 1, // default quantity
            'image_path' => $product['image_path']
        ];

        // Add product to cart
        $_SESSION['cart'][] = $cart_item;
        header("Location: http://localhost/project1/cart.php"); // Redirect to cart page
    } else {
        echo "Product not found.";
    }
}
?>
