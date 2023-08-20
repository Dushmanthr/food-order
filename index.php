<?php include('partials-front/menu.php');  ?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="containersearch">
            
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/bg1.png" class="d-block w-100" alt="...">

          
    </div>
    <div class="carousel-item">
      <img src="../images/bg2.jpg" class="d-block w-200" alt="...">

       
    </div>
    <div class="carousel-item">

      <img src="../images/bg3.jpg" class="d-block w-200" alt="...">
   </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>


        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <?php 
            //create sql query to display categories from database
            $sql= "SELECT * from tbl_category where active='yes' AND featured='yes' LIMIT 3";
            //execute query
            $res = mysqli_query($conn, $sql);
            //count rows to check whether category is available
            $count = mysqli_num_rows($res);

            if($count>0)
            {
                //category available
                while($row = mysqli_fetch_assoc($res))
                {
                    //need to get id,title,image_name
                    $id= $row['id'];
                    $title= $row['title'];
                    $image_name= $row['image_name'];
                    ?>
                        <a href="category-foods.html">
                        <div class="box-3 float-container">
                            <?php 
                                if($image_name=="")
                                {
                                    //display
                                    echo "<div class= 'error'>image not available</div>";
                                }
                                else{
                                    //image available
                                    ?>
                                     <img src="<?php echo SITEURL;?>images/<?php echo $image_name; ?>" alt="Burger" class="img-responsive img-curve">
                                    <?php

                                }
                            ?>


                           

                            <h3 class="float-text text-white"><?php echo $title; ?></h3>
                        </div>
                        </a>

                        <a href="#">
                        <div class="box-3 float-container">
                            <img src="images/pizza.jpg" alt="Pizza" class="img-responsive img-curve">

                            <h3 class="float-text text-white">Pizza</h3>
                        </div>
                        </a>

                        <a href="#">
                        <div class="box-3 float-container">
                            <img src="images/Kottu.jpg" alt="Kottu" class="img-responsive img-curve">

                            <h3 class="float-text text-white">Kottu</h3>
                        </div>
                        </a>

                    <?php
                }
            }
            else{
                //not available
                echo "<div class='error' >Category not added</div>";
            }
            
            ?>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

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

        <p class="text-center">
            <a href="#">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

    <?php include('partials-front/footer.php');  ?>