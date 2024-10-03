<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'planado');
define('DB_PASS', '123456'); 
define('DB_NAME', 'items'); 

try {
    // Create a PDO instance and connect to MySQL 
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // echo "Connected successfully to the database '" . DB_NAME . "'<br>";
} catch (PDOException $e) {
    echo "Error connecting to the database: " . $e->getMessage();
}

