<?php
  //start session

    session_start();

    // Creating constants to store non-repeating values
    define('SITEURL', 'http://localhost/food_order/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'food-order');

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); // Database connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); // Selecting the database
<<<<<<< HEAD
=======
    if($db_select){
        echo "success";
    } 
>>>>>>> 503c9c6b62eac7821d362d63ff86fa1d857716a5

?>
