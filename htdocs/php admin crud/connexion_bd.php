<?php
$host = "localhost"; 
$username = "root"; 
$password = "folklore@1989"; 
$database = "house"; 

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Optionally, you can output a success message
    // echo "Connexion réussie à la base de données.";
} catch(PDOException $e) {
    // Output an error message if connection fails
    echo "Connexion échouée à la base de données: " . $e->getMessage();
    // Terminate script execution if connection fails
    die();
}
?>
