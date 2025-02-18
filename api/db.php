<?php

// config.php - Database connection
$host = 'localhost';
$dbname = 'scholarship';
$username = 'root'; // Change as needed
$password = ''; // Change as needed

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die(json_encode(["status" => "error", "message" => "Connection failed: " . mysqli_connect_error()]));
}

?>
