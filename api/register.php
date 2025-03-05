<?php
header('Content-Type: application/json');
require 'db.php'; // Database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Trim and fetch form values safely
    $name = trim($_POST['name'] ?? '');
    $role = trim($_POST['role'] ?? '');
    $birthdate = trim($_POST['dob'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $referral = trim($_POST['referral'] ?? '');

    // Validate required fields
    if (empty($name) || empty($role) || empty($birthdate) || empty($email) || empty($password)) {
        echo json_encode(["success" => false, "message" => "All fields are required."]);
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["success" => false, "message" => "Invalid email format."]);
        exit;
    }

    // Check if the email is already registered
    $checkEmailStmt = mysqli_prepare($conn, "SELECT id FROM signup WHERE email = ?");
    mysqli_stmt_bind_param($checkEmailStmt, "s", $email);
    mysqli_stmt_execute($checkEmailStmt);
    mysqli_stmt_store_result($checkEmailStmt);

    if (mysqli_stmt_num_rows($checkEmailStmt) > 0) {
        echo json_encode(["success" => false, "message" => "Email already exists."]);
        exit;
    }
    mysqli_stmt_close($checkEmailStmt);

    // Store password as plain text (Not recommended for security reasons)
    $plain_password = $password;

    // Prepare SQL query
    $stmt = mysqli_prepare($conn, "INSERT INTO signup (name, role, dob, email, password, referral) VALUES (?, ?, ?, ?, ?, ?)");

    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ssssss", $name, $role, $birthdate, $email, $plain_password, $referral);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            echo json_encode(["success" => true, "message" => "Registration successful!"]);
        } else {
            echo json_encode(["success" => false, "message" => "Database error: " . mysqli_stmt_error($stmt)]);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to prepare the SQL statement."]);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
