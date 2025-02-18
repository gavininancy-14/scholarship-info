<?php
session_start();
include('db.php'); // Your database connection

if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $query = "SELECT name,role, email, dob FROM signup WHERE id = ?"; // Corrected column names (important!)
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            echo json_encode([
                'status' => 'success',
                'data' => [
                    'name' => $user['name'],
                    'role' => $user['role'],
                    'email' => $user['email'],
                    'dob' => $user['dob'],
                ]
            ]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'User not found']);
        }
    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $role = $_POST['role'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];

        
        $query = "UPDATE register SET name = ?, role = ?, email = ?, dob= ? WHERE id = ?"; // Corrected column names
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssssssi", $name, $role, $email, $dob);

        if ($stmt->execute()) {
            echo json_encode([
                'status' => 'success',
                'data' => [
                    'name' => $name,
                    'role' => $role,
                    'email' => $email,
                    'dob' => $dob
                ]
            ]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to update profile: ' . $stmt->error]);
        }
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'User not logged in']);
}

$conn->close(); // Close the database connection
?>