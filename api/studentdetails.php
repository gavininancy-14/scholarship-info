<?php
    include('db.php');
    header('Content-Type: application/json');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        // Read and decode JSON input
        $input_data = json_decode(file_get_contents("php://input"), true);

        // Check if all required fields are present
        if (
            isset($input_data['name']) &&
            isset($input_data['email']) &&
            isset($input_data['category']) &&
            isset($input_data['contact_number']) &&
            isset($input_data['parent_name']) &&
            isset($input_data['parent_occupation']) &&
            isset($input_data['annual_income']) &&
            isset($input_data['current_studying']) &&
            isset($input_data['cgpa_percentage'])
        ) 
        {
            // Sanitize input
            $name = $conn->real_escape_string($input_data['name']);
            $email = $conn->real_escape_string($input_data['email']);
            $category = $conn->real_escape_string($input_data['category']);
            $contact_number = $conn->real_escape_string($input_data['contact_number']);
            $parent_name = $conn->real_escape_string($input_data['parent_name']);
            $parent_occupation = $conn->real_escape_string($input_data['parent_occupation']);
            $annual_income = $conn->real_escape_string($input_data['annual_income']);
            $current_studying = $conn->real_escape_string($input_data['current_studying']);
            $cgpa_percentage = $conn->real_escape_string($input_data['cgpa_percentage']);

            // Use Prepared Statements to prevent SQL Injection
            $stmt = $conn->prepare("INSERT INTO studentdetails 
                (name, email, category, contact_number, parent_name, parent_occupation, annual_income, current_studying, cgpa_percentage) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            
            if ($stmt) 
            {
                $stmt->bind_param("sssssssss", 
                    $name, $email, $category, $contact_number, 
                    $parent_name, $parent_occupation, $annual_income, 
                    $current_studying, $cgpa_percentage
                );

                if ($stmt->execute()) 
                {
                    $last_id = $stmt->insert_id;
                    $stmt->close();

                    // Fetch inserted record
                    $result = $conn->query("SELECT * FROM studentdetails WHERE id = $last_id");

                    if ($result && $row = $result->fetch_assoc()) 
                    {
                        echo json_encode(["success" => true, "message" => "Record added successfully.", "data" => $row]);
                    } 
                    else 
                    {
                        echo json_encode(["success" => false, "message" => "Error fetching inserted data."]);
                    }
                } 
                else 
                {
                    echo json_encode(["success" => false, "message" => "Database insert error: " . $stmt->error]);
                }
            } 
            else 
            {
                echo json_encode(["success" => false, "message" => "Prepared statement error: " . $conn->error]);
            }
        } 
        else 
        {
            echo json_encode(["success" => false, "message" => "Invalid input or missing required fields."]);
        }
    }
?>
