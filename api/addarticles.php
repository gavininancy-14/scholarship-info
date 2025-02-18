<?php
header('Content-Type: application/json');

$response = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('db.php');

    $name = $_POST['name'] ?? '';
    $scholarship_title = $_POST['scholarship_title'] ?? '';
    $date = $_POST['date'] ?? '';

    if (empty($date)) {
        $response['status'] = 'error';
        $response['message'] = 'Date cannot be empty.';
        echo json_encode($response);
        exit;
    }

    $category_name = $_POST['category_name'] ?? '';
    $detailed_scholarships = $_POST['detailed_scholarships'] ?? '';

    // Image upload handling
    $imagePath = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = "../images/";
        $imageFileType = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        $newFileName = uniqid() . "." . $imageFileType;
        $target_file = $target_dir . $newFileName;

        $check = getimagesize($_FILES['image']['tmp_name']);
        if (!$check) {
            $response['status'] = 'error';
            $response['message'] = 'File is not an image.';
            echo json_encode($response);
            exit;
        }

        if ($_FILES['image']['size'] > 500000) {
            $response['status'] = 'error';
            $response['message'] = 'File size too large.';
            echo json_encode($response);
            exit;
        }

        if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
            $response['status'] = 'error';
            $response['message'] = 'Invalid file type.';
            echo json_encode($response);
            exit;
        }

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $imagePath = $target_file;
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Error uploading file.';
            echo json_encode($response);
            exit;
        }
    }

    if (empty($imagePath)) {
        $response['status'] = 'error';
        $response['message'] = 'Image is required.';
        echo json_encode($response);
        exit;
    }

    $query = "INSERT INTO articals (name, scholarship_title, date, category_name, detailed_scholarships, image) 
              VALUES (?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("ssssss", $name, $scholarship_title, $date, $category_name, $detailed_scholarships, $imagePath);

        if ($stmt->execute()) {
            $response['status'] = 'success';
            $response['message'] = 'Scholarship article added successfully.';
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Error executing query: ' . $stmt->error;
        }
        $stmt->close();
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Error preparing statement: ' . $conn->error;
    }

    $conn->close();
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method. Please use POST.';
}

echo json_encode($response);
?>