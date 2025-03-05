<?php
// Database connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'scholarship';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all scholarship details
$sql = "SELECT * FROM add_scholarship";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Featured Scholarships</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(209, 247, 250) ;
            font-size: 17px;
        }

        .scholarship-card {
            background:rgb(252, 252, 252);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            width: 100%;
            height: 400px;
        }

        .deadline { 
            font-weight: bold;
            color: #ff4d4d;
        }

        .footer-btn {
            background-color: #FFA500;
            color: white;
            text-align: center;
            padding: 12px;
            border-radius: 5px;
            font-weight: bold;
        }

        .footer-btn:hover {
            background-color: #e69500;
        }

        .header {
            text-align: center;
            padding: 20px;
        }

        .apply-btn {
            background-color: #28a745;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            border: none;
            font-weight: bold;
            margin-top: 10px;
        }

        .apply-btn a {
            color: white;
            text-decoration: none;
        }
        .section-featured{
            padding: 40px;
        }
    </style>
</head>

<body>
<?php include('navbar.php'); ?>
<section class="section-featured">
    <div class="container mt-4">
        <!-- Header Section -->
        <div class="header">
            <h2><strong>Featured Scholarships</strong></h2>
            <p>
                Each month, StudySponsr highlights a list of new college scholarships available right here on
                StudySponsr’s Featured Scholarships page. These college scholarship opportunities are a great way to
                supplement your scholarship search because they are often quick and easy scholarships that are easy to
                apply for, allowing you to apply for more scholarships and, as a result, have even more opportunities
                to win college scholarships!
            </p>
            <h4 class="mt-4"><strong>Check out frequently updated featured scholarships – just for you.</strong></h4>
        </div>

        <!-- Scholarships Section -->
        <div class="container mt-5">
            <div class="row">
                <?php if ($result->num_rows > 0) { ?>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <div class="col-md-6 col-12">
                            <div class="card scholarship-card shadow p-4">
                                <h2 class="text-center mb-4" style="font-size: 24px;
  font-weight: bold;"><?php echo htmlspecialchars($row['scholarship_name']); ?></h2>

                                <div class="row">
                                    <div class="col-md-10">
                                        <p style="display: flex;gap: 10px;align-items: center;"><i class="fa-solid fa-award"></i><strong>Award:</strong> <?php echo htmlspecialchars($row['award']); ?></p>
                                        <p class="deadline">📅 <?php echo htmlspecialchars($row['deadline']); ?></p>
                                        <p><strong>Description:</strong> <?php echo nl2br(htmlspecialchars($row['description'])); ?></p>
                                    </div>

                                    <div class="col-md-2" >
                                        <?php if (!empty($row['image_logo'])) { ?>
                                            <img src="images/<?php echo htmlspecialchars($row['image_logo']); ?>" alt="Scholarship Logo" class="img-fluid mt-3" style="max-width: 80px;">
                                        <?php } ?>
                                        <p style="display: flex;
  flex-direction: column;
  font-size:12px;text-align:center;margin-top:12px"><strong>Provided By:</strong> <?php echo htmlspecialchars($row['provided_by']); ?></p>
                                    </div>
                                </div>

                                <p><a href="<?php echo htmlspecialchars($row['website_url']); ?>" class="btn btn-primary mt-3" target="_blank">Visit Website</a></p>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <h2 class="text-center mb-4">No Scholarships Available</h2>
                    <p class="text-center">Currently, there are no scholarships available. Please check back later.</p>
                <?php } ?>
            </div>
        </div>

        <!-- Footer Button -->
        <div class="text-center mt-4">
            <div class="footer-btn">
                🎓 <a href="articles.php" style="color: white; text-decoration: none;">Scholarship News</a>
            </div>
        </div>
    </div>
</section>
</body>

</html>