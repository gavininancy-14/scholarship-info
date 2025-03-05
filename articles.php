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

// Fetch all articles
$sql = "SELECT * FROM articals";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Articles</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(209, 247, 250) ;
            margin: 0;
            font-size: 18px;
            padding: 20px;
        }

        .container {
            max-width: 1300px;
            background-color: rgb(209, 247, 250) ;
            margin: auto;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
        }

        .articles {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            margin-top: 20px;
        }

        .card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .card img {
            width: 120%;
            height: 300px;
            object-fit: cover;
        }

        .card-content {
            padding: 15px;
            font-size: 26px;
        }

        .category {
            color: orange;
            font-weight: bold;
        }

        h2 {
            font-size: 25px;
            margin: 10px 0;
        }

        .date {
            color: blue;
            font-size: 18px;
        }
        .section-articles{
            padding: 90px 0px;
        }
    </style>
</head>

<body>
<?php include('navbar.php'); ?>

    <section class="section-articles">
    <div class="container">
        <h1>Scholarship Articles</h1>
        <p>Experienced in the higher education field, the StudySponsr team ensures students and parents have access to current student life news. Get the latest information on student loans and student loan news, and the college application process. Find lists of scholarships for college students and for high school seniors, including tips on how to get a scholarship and advice on how to write a scholarship essay</p>
        <div class="articles">
            <?php if ($result->num_rows > 0) { ?>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <div class="card">
                        <img src="images/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
                        <div class="card-content">
                            <h2><?php echo htmlspecialchars($row['name']); ?></a></h2>

                            <a href="categoryname.php?category=<?php echo urlencode($row['scholarship_title']); ?>"
                                style="text-decoration: none; color: inherit;">
                                <div class="category" style="margin-bottom:5px">
                                    <?php echo htmlspecialchars($row['scholarship_title']); ?>
                                </div>
                            </a>
                            <div class="date"><?php echo htmlspecialchars($row['date']); ?></div>
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <h2 class="text-center mb-4">No Articles Available</h2>
                <p class="text-center">Currently, there are no articles available. Please check back later.</p>
            <?php } ?>
        </div>
    </div>
    </section>
</body>
</html>