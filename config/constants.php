<?php
// Start session
session_start();

// Creating constants to store non-repeating values
define('SITEURL', 'http://localhost/food_order/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'food-order');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die(mysqli_connect_error()); // Database connection

if ($conn) {
    echo "Connected successfully";
} else {
    echo "Connection failed: " . mysqli_connect_error();
}
?>
