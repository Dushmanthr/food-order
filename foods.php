<?php include('partials-front/menu.php');  ?>

<br><br><br>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

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
                    <img src="images/pizza.jpg" alt="pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Italian Pizza</h4>
                    <p class="food-price">$2.99</p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Hawain Pizza</h4>
                    <p class="food-price">$2.99</p>
                    <p class="food-detail">
                        Made with tomato Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/Kottu.jpg" alt="Chicke Hawain Kottu" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Chicken Kottu
                    </h4>
                    <p class="food-price">$3.99</p>
                    <p class="food-detail">
                        Made with tomato Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/rice.jpg" alt="Chicke Hawain rice" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Chicken Rice</h4>
                    <p class="food-price">$3.99</p>
                    <p class="food-detail">
                        Made with tomato Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php include('partials-front/footer.php');  ?>