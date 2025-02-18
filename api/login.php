<?php
session_start();
include('db.php'); // Your database connection file

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        echo json_encode([
            "status" => "error",
            "message" => "Email and password are required."
        ]);
        exit();
    }

    $sql = $conn->prepare("SELECT * FROM signup WHERE email = ?");
    $sql->bind_param("s", $email);
    $sql->execute();
    $result = $sql->get_result();

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // ***NORMAL PASSWORD VERIFICATION (INSECURE - DO NOT USE IN PRODUCTION)***
        if ($password === $user['password']) { // DIRECT COMPARISON - INSECURE
            $role = $user['role'];
            $id = $user['id'];

            $_SESSION['user_id'] = $id;

            $response = [
                "status" => "success",
                "role" => $role,
                "id" => $id
            ];

            switch ($role) {
                case "admin":
                    $response["message"] = "Admin login successful.";
                    break;
                case "student":
                    $response["message"] = "Student login successful.";
                    break;
                case "faculty":
                    $response["message"] = "Faculty login successful.";
                    break;
                default:
                    $response["message"] = "Login successful.";
            }
        } else {
            $response = [
                "status" => "error",
                "message" => "Invalid email or password."
            ];
        }
    } else {
        $response = [
            "status" => "error",
            "message" => "Invalid email or password."
        ];
    }

    echo json_encode($response);
    $sql->close();
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Invalid request method."
    ]);
}

$conn->close();
?>