<!-- db.php -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// men table

$conn->query("CREATE TABLE IF NOT EXISTS men (
    id INT AUTO_INCREMENT PRIMARY KEY,
    subcategory VARCHAR(255),
    name VARCHAR(255),
    price DECIMAL(10, 2),
    description TEXT,
    image_path VARCHAR(255)  -- New column for image
)");

// women table

$conn->query("CREATE TABLE IF NOT EXISTS women (
    id INT AUTO_INCREMENT PRIMARY KEY,
    subcategory VARCHAR(255),
    name VARCHAR(255),
    price DECIMAL(10, 2),
    description TEXT,
    image_path VARCHAR(255)  -- New column for image
)");


$conn->query("CREATE TABLE IF NOT EXISTS electronics (
    id INT AUTO_INCREMENT PRIMARY KEY,
    subcategory VARCHAR(255),
    name VARCHAR(255),
    price DECIMAL(10, 2),
    description TEXT,
    image_path VARCHAR(255)  -- New column for image
)");

// groceries table

$conn->query("CREATE TABLE IF NOT EXISTS groceries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    subcategory VARCHAR(255),
    name VARCHAR(255),
    price DECIMAL(10, 2),
    description TEXT,
    image_path VARCHAR(255)  -- New column for image
)");




?>
