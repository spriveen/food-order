<?php
// Start Session
session_start();

// Create Constants to Store Non Repeating Values
define('SITEURL','http://localhost/dashboard/food-order/') ;
define('LOCALHOST','localhost') ;
define('DB_USERNAME','riveen') ; 
define('DB_PASSWORD','admin') ;
define('DB_NAME','food-order') ;    
 
$conn = mysqli_connect('LOCALHOST', 'riveen', 'admin') or die(mysqli_error()); //Database connection
 $db_select = mysqli_select_db($conn, 'food-order') or die(mysqli_error()); //Selecting Database
?>