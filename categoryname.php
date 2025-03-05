<?php
// Establish a database connection
$connection = new mysqli("localhost", "root", "", "scholarship");

// Check for connection errors
if ($connection->connect_error) {
    die("Database Connection Failed: " . $connection->connect_error);
}

// Check if 'category' parameter is set in URL
if (!isset($_GET['category']) || empty($_GET['category'])) {
    die("No category selected.");
}

// Get and sanitize the category parameter
$category = urldecode($_GET['category']);
$category = $connection->real_escape_string($category);

// Debugging: Check if category is received correctly
// echo "Category: " . htmlspecialchars($category) . "<br>";

// SQL query: Use LOWER() for case-insensitive comparison
$sql = "SELECT d.*, c.image 
        FROM detailed_articles d 
        JOIN articals c 
        ON LOWER(d.Category_name) = LOWER(c.scholarship_title)
        WHERE LOWER(d.Category_name) = LOWER('$category')";

// Execute the query
$result = $connection->query($sql);

// Debugging: Check if the query runs properly
if (!$result) {
    die("Query Failed: " . $connection->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Details</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(209, 247, 250) ;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            background-color: rgb(255, 255, 255) ;
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

        /* Responsive Design */
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

        .section-category {
            padding: 80px 0px;
        }
    </style>
</head>
<body>

<?php include('navbar.php'); ?>

<section class="section-category">
    <div class="container">
        <h2>Scholarships in "<?php echo htmlspecialchars($category); ?>"</h2>

        <?php
        if ($result->num_rows > 0) {
            $first_row = true;
            while ($row = $result->fetch_assoc()) {
                // Display category image only once
                if ($first_row && !empty($row['image'])) {
                    echo "<img src='images/" . htmlspecialchars($row['image']) . "' alt='Scholarship Image' style='width:100%;'>";
                    $first_row = false;
                }

                echo "<div class='scholarship'>";
                echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
                echo "<p><strong>Amount:</strong> " . htmlspecialchars($row['award_amount']) . "</p>";
                echo "<p><strong>Deadline:</strong> " . htmlspecialchars($row['deadline']) . "</p>";
                echo "<p><strong>Description:</strong> " . htmlspecialchars($row['description']) . "</p>";

                // Validate and format website URL
                if (!empty($row['website'])) {
                    $website = filter_var($row['website'], FILTER_VALIDATE_URL) ? $row['website'] : '#';
                    echo "<p><a href='" . htmlspecialchars($website) . "' class='btn btn-primary mt-3' target='_blank'>Visit Website</a></p>";
                }

                echo "</div>";
            }
        } else {
            echo "<p>No scholarships found in this category.</p>";
        }

        // Close the database connection
        $connection->close();
        ?>
    </div>
</section>

</body>
</html>
