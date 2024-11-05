<!-- index.php -->
<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Navbar Test</title>
    <style>
        .carousel-inner img {
            width: 100%;
            height: 600px; 
            object-fit: cover;
            margin-top: 80px;
            margin-left: 100px;
        }

        .product-card img {
            height: 200px; 
            object-fit: content; 
            width: 50%; 
            display: flex;
            margin-left: 80px;
        }

        .product-card {
            margin: 20px;
        }

        h1, h2 {
            text-align: center; 
            font-family: 'Times New Roman', Times, serif; 
            margin-top: 50px;
        }

        .more-link {
            display: inline-block;
            margin-left: 10px;
            font-size: 14px;
        }

    </style>
</head>
<body>
    <div class="col-11">
        <div id="advertisementCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./images/ad1.png" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="./images/ad2.png" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="./images/ad3.png" class="d-block w-100" alt="Slide 3">
                </div>
                <div class="carousel-item">
                    <img src="./images/ad4.png" class="d-block w-100" alt="Slide 4">
                </div>
                <div class="carousel-item">
                    <img src="./images/ad5.png" class="d-block w-100" alt="Slide 5">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#advertisementCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#advertisementCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <h1>Today's Offers</h1>
    <div class="container">
        <div class="row justify-content-center">
            <!-- Product 1 -->
            <div class="col-md-4 product-card">
                <div class="card">
                    <img src="./images/p1.jpg" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Samsung S24 Ultra</h5>
                        <p class="card-text">Rs. 125000.00</p>
                        <div class="d-flex justify-content-between">   
                            <a href="http://localhost/project1/view.php?id=2&category=electronics" class="btn btn-primary">View</a>
                            <form action="./addtocart.php" method="POST">
                                <input type="hidden" name="product_id" value="2">
                                <input type="hidden" name="category" value="electronics">  
                                <button class="btn btn-success">Add to Cart</button>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
X            <div class="col-md-4 product-card">
                <div class="card">
                    <img src="./images/p6.jpg" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Apple 16 Pro Max</h5>
                        <p class="card-text">Rs. 115000.00</p>
                        <div class="d-flex justify-content-between">   
                            <a href="http://localhost/project1/view.php?id=1&category=electronics" class="btn btn-primary">View</a>
                            <form action="./addtocart.php" method="POST">
                                <input type="hidden" name="product_id" value="1">
                                <input type="hidden" name="category" value="electronics">  
                                <button class="btn btn-success">Add to Cart</button>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 product-card">
                <div class="card">
                    <img src="./images/p3.png" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Samsung Refrigerator</h5>
                        <p class="card-text">Rs. 100000.00</p>
                        <div class="d-flex justify-content-between">   
                            <a href="http://localhost/project1/view.php?id=3&category=electronics" class="btn btn-primary">View</a>
                            <form action="./addtocart.php" method="POST">
                                <input type="hidden" name="product_id" value="3">
                                <input type="hidden" name="category" value="electronics">  
                                <button class="btn btn-success">Add to Cart</button>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 product-card">
                <div class="card">
                    <img src="./images/p4.jpg" class="card-img-top" alt="Product 4">
                    <div class="card-body">
                        <h5 class="card-title">Linen Shirt</h5>
                        <p class="card-text">Rs. 2499.00</p>
                        <div class="d-flex justify-content-between">   
                            <a href="http://localhost/project1/view.php?id=4&category=men" class="btn btn-primary">View</a>
                            <form action="./addtocart.php" method="POST">
                                <input type="hidden" name="product_id" value="4">
                                <input type="hidden" name="category" value="men">  
                                <button class="btn btn-success">Add to Cart</button>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 product-card">
                <div class="card">
                    <img src="./images/p5.jpg" class="card-img-top" alt="Product 5">
                    <div class="card-body">
                        <h5 class="card-title">Deep Teal Chudidar Suit with Dupatta</h5>
                        <p class="card-text">Rs. 8000.00</p>
                        <div class="d-flex justify-content-between">   
                            <a href="http://localhost/project1/view.php?id=1&category=women" class="btn btn-primary">View</a>
                            <form action="./addtocart.php" method="POST">
                                <input type="hidden" name="product_id" value="1">
                                <input type="hidden" name="category" value="women">  
                                <button class="btn btn-success">Add to Cart</button>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2>Shop for Men <a href="./products/men/men_shirt.php" class="more-link">Click for more ></a></h2>
        <div class="row justify-content-center">
            <div class="col-md-3 product-card">
                <div class="card">
                    <img src="./images/shirt.png" class="card-img-top" alt="Men's Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Men's Shirt</h5>
                        <p class="card-text">Rs. 1999.00</p>
                        <div class="d-flex justify-content-between">   
                            <a href="http://localhost/project1/view.php?id=5&category=men" class="btn btn-primary">View</a>
                            <form action="./addtocart.php" method="POST">
                                <input type="hidden" name="product_id" value="5">
                                <input type="hidden" name="category" value="men"> 
                                <button class="btn btn-success">Add to Cart</button>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card">
                <div class="card">
                    <img src="./images/pantm.png" class="card-img-top" alt="Men's Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Men's Pant</h5>
                        <p class="card-text">Rs. 2999.00</p>
                        <div class="d-flex justify-content-between">   
                            <a href="http://localhost/project1/view.php?id=7&category=men" class="btn btn-primary">View</a>
                            <form action="./addtocart.php" method="POST">
                                <input type="hidden" name="product_id" value="7">
                                <input type="hidden" name="category" value="men">
                                <button class="btn btn-success">Add to Cart</button>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card">
                <div class="card">
                    <img src="./images/tshirtm.png" class="card-img-top" alt="Men's Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Men's T-Shirt</h5>
                        <p class="card-text">Rs. 899.00</p>
                        <div class="d-flex justify-content-between">   
                            <a href="http://localhost/project1/view.php?id=6&category=men" class="btn btn-primary">View</a>
                            <form action="./addtocart.php" method="POST">
                                <input type="hidden" name="product_id" value="6">
                                <input type="hidden" name="category" value="men"> 
                                <button class="btn btn-success">Add to Cart</button>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <h2>Shop for Women <a href="./products/women/women_shirt.php" class="more-link">Click for More > </a></h2>
        <div class="row justify-content-center">
            <div class="col-md-3 product-card">
                <div class="card">
                    <img src="./images/saree.png" class="card-img-top" alt="Women's Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Women's Saree</h5>
                        <p class="card-text">Rs. 2999.00</p>
                        <div class="d-flex justify-content-between">   
                            <a href="http://localhost/project1/view.php?id=4&category=women" class="btn btn-primary">View</a>
                            <form action="./addtocart.php" method="POST">
                                <input type="hidden" name="product_id" value="4">
                                <input type="hidden" name="category" value="women"> 
                                <button class="btn btn-success">Add to Cart</button>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card">
                <div class="card">
                    <img src="./images/tshirtw.png" class="card-img-top" alt="Women's Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Women's T-Shirt</h5>
                        <p class="card-text">Rs. 799.00</p>
                        <div class="d-flex justify-content-between">   
                            <a href="http://localhost/project1/view.php?id=2&category=women" class="btn btn-primary">View</a>
                            <form action="./addtocart.php" method="POST">
                                <input type="hidden" name="product_id" value="2">
                                <input type="hidden" name="category" value="women"> 
                                <button class="btn btn-success">Add to Cart</button>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card">
                <div class="card">
                    <img src="./images/pantw.png" class="card-img-top" alt="Women's Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Women's Pant</h5>
                        <p class="card-text">Rs. 2599.00</p>
                        <div class="d-flex justify-content-between">   
                            <a href="http://localhost/project1/view.php?id=3&category=women" class="btn btn-primary">View</a>
                            <form action="./addtocart.php" method="POST">
                                <input type="hidden" name="product_id" value="3">
                                <input type="hidden" name="category" value="women"> 
                                <button class="btn btn-success">Add to Cart</button>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <h2>Shop for Electronics <a href="./products/electronics/mobile.php" class="more-link">Click for More > </a></h2>
        <div class="row justify-content-center">
        <div class="col-md-3 product-card">
                <div class="card">
                    <img src="./images/earbuds.png" class="card-img-top" alt="Electronics Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Earbuds</h5>
                        <p class="card-text">Rs. 1799.00</p>
                        <div class="d-flex justify-content-between">   
                            <a href="http://localhost/project1/view.php?id=4&category=electronics" class="btn btn-primary">View</a>
                            <form action="./addtocart.php" method="POST">
                                <input type="hidden" name="product_id" value="4">
                                <input type="hidden" name="category" value="electronics"> 
                                <button class="btn btn-success">Add to Cart</button>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card">
                <div class="card">
                    <img src="./images/lap.png" class="card-img-top" alt="Electronics Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Laptop</h5>
                        <p class="card-text">Rs. 99999.00</p>
                        <div class="d-flex justify-content-between">   
                            <a href="http://localhost/project1/view.php?id=6&category=electronics" class="btn btn-primary">View</a>
                            <form action="./addtocart.php" method="POST">
                                <input type="hidden" name="product_id" value="6">
                                <input type="hidden" name="category" value="electronics"> 
                                <button class="btn btn-success">Add to Cart</button>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card">
                <div class="card">
                    <img src="./images/oven.png" class="card-img-top" alt="Electronics Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Oven</h5>
                        <p class="card-text">Rs. 17999.00</p>
                        <div class="d-flex justify-content-between">   
                            <a href="http://localhost/project1/view.php?id=5&category=electronics" class="btn btn-primary">View</a>
                            <form action="./addtocart.php" method="POST">
                                <input type="hidden" name="product_id" value="5">
                                <input type="hidden" name="category" value="electronics"> 
                                <button class="btn btn-success">Add to Cart</button>
                            </form>
                            </div>
                    </div>
                </div>
                
            </div>            
        </div>
        <h2>Shop for Groceries <a href="./products/groceries/fruits.php" class="more-link">Click for More > </a></h2>
        <div class="row justify-content-center">
            <div class="col-md-3 product-card">
                <div class="card">
                    <img src="./images/cauliflower.png" class="card-img-top" alt="Groceries Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Cauliflower</h5>
                        <p class="card-text">Rs. 59.00/pcs</p>
                        <div class="d-flex justify-content-between">   
                            <a href="http://localhost/project1/view.php?id=2&category=groceries" class="btn btn-primary">View</a>
                            <form action="./addtocart.php" method="POST">
                                <input type="hidden" name="product_id" value="2">
                                <input type="hidden" name="category" value="groceries">
                                <button class="btn btn-success">Add to Cart</button>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card">
                <div class="card">
                    <img src="./images/Rice.png" class="card-img-top" alt="Groceries Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Rice</h5>
                        <p class="card-text">Rs. 40.00/kg</p>
                        <div class="d-flex justify-content-between">   
                            <a href="http://localhost/project1/view.php?id=1&category=groceries" class="btn btn-primary">View</a>
                            <form action="./addtocart.php" method="POST">
                                <input type="hidden" name="product_id" value="1">
                                <input type="hidden" name="category" value="groceries">
                                <button class="btn btn-success">Add to Cart</button>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card">
                <div class="card">
                    <img src="./images/apple.png" class="card-img-top" alt="Groceries Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Apple</h5>
                        <p class="card-text">Rs. 199.00/kg</p>
                        <div class="d-flex justify-content-between">   
                            <a href="http://localhost/project1/view.php?id=4&category=groceries" class="btn btn-primary">View</a>
                            <form action="./addtocart.php" method="POST">
                                <input type="hidden" name="product_id" value="4">
                                <input type="hidden" name="category" value="groceries"> 
                                <button class="btn btn-success">Add to Cart</button>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>
</html>
<?php include 'footer.php'; ?>
