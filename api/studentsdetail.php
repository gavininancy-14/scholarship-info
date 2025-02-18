<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('db.php');

// Fetch student details
$sql = "SELECT id, name, email, category, contact_number, parent_name, parent_occupation, annual_income, current_studying, cgpa_percentage FROM  studentdetails";
$result = $conn->query($sql);

$students = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $students[] = $row;
    }
    echo json_encode(["status" => "success", "data" => $students]);
} else {
    echo json_encode(["status" => "error", "message" => "No students found"]);
}

$conn->close();
?>
