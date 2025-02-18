<?php
session_start();
include('db.php'); // Your database connection

if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $query = "SELECT name, role, email, dob, password FROM signup WHERE id = ?"; 
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
                    'password' => $user['password'] // Plain text password
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
        $password = $_POST['password']; // Plain text password

        if (!empty($password)) {
            $query = "UPDATE signup SET name = ?, role = ?, email = ?, dob = ?, password = ? WHERE id = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("sssssi", $name, $role, $email, $dob, $password, $userId);
        } else {
            $query = "UPDATE signup SET name = ?, role = ?, email = ?, dob = ? WHERE id = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ssssi", $name, $role, $email, $dob, $userId);
        }

        if ($stmt->execute()) {
            echo json_encode([
                'status' => 'success',
                'message' => 'Profile updated successfully',
                'data' => [
                    'name' => $name,
                    'role' => $role,
                    'email' => $email,
                    'dob' => $dob,
                    'password' => $password // Returning plain text password
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
