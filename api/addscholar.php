<?php
// Database connection (Modify these variables with your actual database details)
$host = "localhost"; // Change if your database is hosted elsewhere
$username = "root"; // Your database username
$password = ""; // Your database password
$database = "scholarship"; // Your database name

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Fetch scholarship details from the 'add_scholarships' table
$sql = "SELECT scholarship_name, award, deadline, description, provided_by, image_logo,website_url FROM add_scholarship";
$result = $conn->query($sql);

if (!$result) {
    die("Error: " . $conn->error);
}
?>