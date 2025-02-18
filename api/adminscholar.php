<?php
    include('db.php'); // Include your database connection file
    header('Content-Type: application/json');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        // Check if all required fields are set
        if (
            isset($_POST['scholarship_name']) &&
            isset($_POST['sponsored_by']) &&
            isset($_POST['deadline']) &&
            isset($_POST['award_amount']) &&
            isset($_POST['description'])
        ) 
        {
            // Sanitize and assign POST variables
            $scholarship_name = $_POST['scholarship_name'];
            $sponsored_by = $_POST['sponsored_by'];
            $deadline = $_POST['deadline'];
            $award_amount = $_POST['award_amount'];
            $description = $_POST['description'];

            // Insert data into the database
            $sql = "INSERT INTO admin 
                (scholarship_name, sponsored_by, deadline, award_amount, description) 
                VALUES 
                ('$scholarship_name', '$sponsored_by', '$deadline', '$award_amount', '$description')";

            if ($conn->query($sql)) 
            {
                $last_id = $conn->insert_id;
                $result = $conn->query("SELECT * FROM admin WHERE id = $last_id");

                if ($result && $row = $result->fetch_assoc()) 
                {
                    echo json_encode(["message" => "Scholarship added successfully.", "data" => $row]);
                } 
                else 
                {
                    echo json_encode(["message" => "Error fetching inserted data."]);
                }
            } 
            else 
            {
                echo json_encode(["message" => "Error: " . $conn->error]);
            }
        } 
        else 
        {
            echo json_encode(["message" => "Invalid input or missing required fields."]);
        }
    }
?>
