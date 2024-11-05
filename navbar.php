
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="../../index.php">PHP STORE</a>  
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="menDropdown" role="button" data-bs-toggle="dropdown">Men</a>
          <ul class="dropdown-menu" aria-labelledby="menDropdown">
            <li><a class="dropdown-item" href="http://localhost/project1/products/men/men_shirt.php">Shirt/T-Shirt</a></li>
            <li><a class="dropdown-item" href="http://localhost/project1/products/men/men_pant.php">Pant</a></li>
            <li><a class="dropdown-item" href="http://localhost/project1/products/men/trousers.php">Trousers</a></li>
            <li><a class="dropdown-item" href="http://localhost/project1/products/men/men_shoe.php">Shoes</a></li>
            <li><a class="dropdown-item" href="http://localhost/project1/products/men/slipper.php">Slippers</a></li>
            <li><a class="dropdown-item" href="http://localhost/project1/products/men/men_acc.php">Accessories</a></li>
          </ul>
        </li>      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="womenDropdown" role="button" data-bs-toggle="dropdown">Women</a>
          <ul class="dropdown-menu" aria-labelledby="womenDropdown">
            <li><a class="dropdown-item" href="http://localhost/project1/products/women/women_shirt.php">Shirt/T-Shirt</a></li>
            <li><a class="dropdown-item" href="http://localhost/project1/products/women/women_pant.php">Pant</a></li>
            <li><a class="dropdown-item" href="http://localhost/project1/products/women/women_trousers.php">Dresses</a></li>
            <li><a class="dropdown-item" href="http://localhost/project1/products/women/women_shoe.php">Shoes</a></li>
            <li><a class="dropdown-item" href="http://localhost/project1/products/women/women_slipper.php">Slippers</a></li>
            <li><a class="dropdown-item" href="http://localhost/project1/products/women/women_acc.php">Accessories</a></li>
          </ul>
        </li>       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="electronicsDropdown" role="button" data-bs-toggle="dropdown">Electronics</a>
          <ul class="dropdown-menu" aria-labelledby="electronicsDropdown">
            <li><a class="dropdown-item" href="http://localhost/project1/products/electronics/mobile.php">Mobile Phones</a></li>
            <li><a class="dropdown-item" href="http://localhost/project1/products/electronics/tv.php">TV</a></li>
            <li><a class="dropdown-item" href="http://localhost/project1/products/electronics/laptop.php">Laptops</a></li>
            <li><a class="dropdown-item" href="http://localhost/project1/products/electronics/kitchen.php">Kitchen Electronics</a></li>
            <li><a class="dropdown-item" href="http://localhost/project1/products/electronics/ac.php">Air Conditioners</a></li>
            <li><a class="dropdown-item" href="http://localhost/project1/products/electronics/acc.php">Accessories</a></li>
          </ul>
        </li>       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="groceriesDropdown" role="button" data-bs-toggle="dropdown">Groceries</a>
          <ul class="dropdown-menu" aria-labelledby="groceriesDropdown">
            <li><a class="dropdown-item" href="http://localhost/project1/products/groceries/fruits.php">Fruits</a></li>
            <li><a class="dropdown-item" href="http://localhost/project1/products/groceries/vegetable.php">Vegetables</a></li>
            <li><a class="dropdown-item" href="http://localhost/project1/products/groceries/Food_grains.php">Food Grains</a></li>
            <li><a class="dropdown-item" href="http://localhost/project1/products/groceries/beverages.php">Beverages</a></li>
            <li><a class="dropdown-item" href="http://localhost/project1/products/groceries/cooking.php">Cooking Utensils</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div>     
<form class="d-flex me-3" action="http://localhost/project1/search.php" method="GET">
    <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
</form>
</div>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link" href="https://localhost/project1/admin_login.php">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/project1/cart.php">Cart</a>
      </li>
      <?php if (isset($_SESSION['user'])): ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
            Hello, <?php echo $_SESSION['user']; ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
            <li><a class="dropdown-item" href="index.php">Logout</a></li>
            <?php 
          session_unset();
          session_destroy();?>
          </ul>
        </li>
      <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/project1/login.php">Login</a>
         
        </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
