<?php
$hostname = "localhost"; 
$username = "cas"; 
$password = "hulyo1505"; 
$database = "cart_db"; 

$conn = mysqli_connect($hostname, $username, $password, $database); // Corrected variable names
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
