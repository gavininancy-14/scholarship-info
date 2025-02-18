<?php
header("Content-Type: application/json"); // Set header for JSON response

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scholarship";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Database connection failed: " . $conn->connect_error]));
}

// Ensure it's a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category_name = $_POST['category_name'];
    $title = $_POST['title'];
    $award_amount = $_POST['award_amount'];
    $deadline = $_POST['deadline'];
    $description = $_POST['description'];

    
    // Prepare and execute SQL query
    $sql = "INSERT INTO detailed_articles (Category_name, title, award_amount, deadline, description) VALUES (?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $category_name, $title, $award_amount, $deadline, $description);

    if ($stmt->execute()) {
        echo json_encode(["status" => "success", "message" => "Record added successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Error: " . $stmt->error]);
    }

    $stmt->close();
}

$conn->close();
?>
