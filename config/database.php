<?php
// Define database credentials
define('DB_HOST', 'localhost'); // 'localhost' should be lowercase
define('DB_USER', 'planado'); // Replace with your MySQL username
define('DB_PASS', '123456'); // Replace with your MySQL password
define('DB_NAME', 'items'); // The name of the database you want to use

try {
    // Create a PDO instance and connect to MySQL server, including the database name in the DSN
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // echo "Connected successfully to the database '" . DB_NAME . "'<br>";
} catch (PDOException $e) {
    echo "Error connecting to the database: " . $e->getMessage();
}

