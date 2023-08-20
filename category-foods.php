<<<<<<< HEAD:category-foods.php
<?php include('partials-front/menu.php');  ?>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="containernavbar">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="categories.html">Categories</a>
                    </li>
                    <li>
                        <a href="foods.html">Foods</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->
>>>>>>> 1a6f11417871f0e9534d2428f2626b85d21199e6:category-foods.html

<br><br><br>
<br><br>


    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="containersearch">
            
            <h1><a href="#" class="text-blue">- Burger -</a></h1>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

             <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/burger.jpg" alt="Chicke Hawain burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Chicken Burger</h4>
                    <p class="food-price">$1.99</p>
                    <p class="food-detail">
                        Made with tomato Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-burger.jpg" alt="Chicke Hawain burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Smoky Burger</h4>
                    <p class="food-price">$1.99</p>
                    <p class="food-detail">
                        Made with tomato Sauce and organice vegetables.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

             <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/top-burgers.jpg" alt="Chicke Hawain burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Top Burger</h4>
                    <p class="food-price">$1.99</p>
                    <p class="food-detail">
                        Made with tomato Sauce and organice vegetables.
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php include('partials-front/footer.php');  ?>