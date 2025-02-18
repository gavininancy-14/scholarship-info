<?php
$connection = new mysqli("localhost", "root", "", "scholarship");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if a category is selected
if (isset($_GET['category'])) {
    $category = urldecode($_GET['category']); 
    $category = $connection->real_escape_string($category); // Prevent SQL injection

    // Use JOIN to get scholarships along with category image
    $sql = "SELECT d.*, c.image
            FROM detailed_articles d
            JOIN articals c ON d.Category_name = c.scholarship_title
            WHERE d.Category_name = '$category'";

    $result = $connection->query($sql);
} else {
    die("No category selected.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(45deg,rgb(154, 248, 255) 0%, #fad0c4 99%, #fad0c4 100%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 70%;
            max-width: 1200px;
            background-color: rgb(249, 249, 249);
            font-size: 18px;
            line-height: 28px;
            padding: 20px;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .scholarship {
            border-bottom: 1px solid #ddd;
            padding: 20px 0;
        }

        .scholarship:last-child {
            border-bottom: none;
        }

        .scholarship h2 {
            font-size: 28px;
            color: #0073e6;
            margin-bottom: 10px;
        }

        .scholarship p {
            margin: 5px 0;
        }

        .amount {
            font-weight: bold;
            color: #008000;
        }

        .deadline {
            font-weight: bold;
            color: #d9534f;
        }

        .description {
            font-size: 22px;
            color: #555;
        }

        .scholarship img {
            width: 100%;
            max-width: 400px;
            height: auto;
            border-radius: 8px;
            display: block;
            margin: 10px auto;
        }

        /* Make it responsive */
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }

            .scholarship h2 {
                font-size: 22px;
            }

            .description {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Scholarships in "<?php echo htmlspecialchars($category); ?>"</h2>

    <?php
    if ($result->num_rows > 0) {
        $first_row = true;
        while ($row = $result->fetch_assoc()) {
            // Display category image only once
            if ($first_row && !empty($row['image'])) {
                // Correct way to display the image:
                echo "<img src='images/" . htmlspecialchars($row['image']) . "' alt='Scholarship Image' style='width:100%;'>"; // Added styling
                $first_row = false;
            }
        
            echo "<div class='scholarship'>";
            echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
            echo "<p><strong>Amount:</strong> " . htmlspecialchars($row['award_amount']) . "</p>";
            echo "<p><strong>Deadline:</strong> " . htmlspecialchars($row['deadline']) . "</p>";
            echo "<p><strong>Description:</strong> " . htmlspecialchars($row['description']) . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>No scholarships found in this category.</p>";
    }

    $connection->close();
    ?>
</div>

</body>
</html>
