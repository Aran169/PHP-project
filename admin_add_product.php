<?php
session_start();
include './includes/db.php';
include './navbar.php';
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category = $_POST['category'];
    $subcategory = $_POST['subcategory'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $target_dir = "uploads/"; 
    $image_name = basename($_FILES["image"]["name"]);
    $image_name = preg_replace("/[^a-zA-Z0-9.]/", "_", $image_name); 
    $target_file = $target_dir . $image_name;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        exit;
    }
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $table = strtolower($category); 
        $stmt = $conn->prepare("INSERT INTO $table (subcategory, name, price, description, image_path) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssdss", $subcategory, $name, $price, $description, $target_file);
        if ($stmt->execute()) {
            echo "<script>alert('Product added successfully.');</script>";
        } else {
            echo "Error adding product: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script>
        function updateSubcategory() {
            const category = document.getElementById('category').value;
            const subcategorySelect = document.getElementById('subcategory');
            subcategorySelect.innerHTML = ''; // Clear existing options
            let options = [];
            if (category === 'Men' || category === 'Women') {
                options = ['Shirt/T_Shirt', 'Pant','Trouser', 'Shoe','Slipper','Accessory'];
            } else if (category === 'Electronics') {
                options = ['Mobile Phones', 'TV', 'Laptops', 'Kitchen Electronics', 'Air Conditioners', 'Accessories'];
            } else if (category === 'Groceries') {
                options = ['Fruits', 'Vegetables', 'Food Grains', 'Beverages', 'Cooking Utensils'];
            }
            options.forEach(subcat => {
                const option = document.createElement('option');
                option.value = subcat;
                option.textContent = subcat;
                subcategorySelect.appendChild(option);
            });
        }
    </script>
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Add Product</h2>
        <form action="admin_add_product.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-control" name="category" id="category" onchange="updateSubcategory()" required>
                    <option value="">Select Category</option>
                    <option value="Men">Men</option>
                    <option value="Women">Women</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Groceries">Groceries</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="subcategory" class="form-label">Subcategory</label>
                <select class="form-control" name="subcategory" id="subcategory" required>
                    <option value="">Select Subcategory</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" required step="0.01">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" required></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Product Image</label>
                <input type="file" class="form-control" name="image" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
</body>
</html>
