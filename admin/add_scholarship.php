<?php
// Database connection
$host = 'localhost';
$username = 'root'; // Change if needed
$password = ''; // Change if needed
$database = 'scholarship';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $award = $_POST['award'];
    $deadline = $_POST['deadline'];
    $description = $_POST['description'];
    $provided_by = $_POST['provided_by'];
    $website = $_POST['website'];

    // Handle image upload
    $target_dir = "../images/";  // Folder where the image will be stored
    $uploadOk = 1;

    if (isset($_FILES["logo"]) && $_FILES["logo"]["error"] == 0) {
        $imageFileType = strtolower(pathinfo($_FILES["logo"]["name"], PATHINFO_EXTENSION));
        $newFileName = uniqid() . "." . $imageFileType; // Generate a unique file name
        $target_file = $target_dir . $newFileName;

        $check = getimagesize($_FILES["logo"]["tmp_name"]);
        if ($check === false) {
            echo "<div class='alert alert-danger'>File is not an image.</div>";
            $uploadOk = 0;
        }

        if ($_FILES["logo"]["size"] > 500000) {
            echo "<div class='alert alert-danger'>Sorry, your file is too large.</div>";
            $uploadOk = 0;
        }

        if (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
            echo "<div class='alert alert-danger'>Only JPG, JPEG, PNG & GIF files allowed.</div>";
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
                echo "<div class='alert alert-success'>The file has been uploaded.</div>";
            } else {
                echo "<div class='alert alert-danger'>Error uploading file.</div>";
                $uploadOk = 0;
            }
        }
    }

    if ($uploadOk == 1) {
        $stmt = $conn->prepare("INSERT INTO add_scholarship (scholarship_name, award, deadline, description, provided_by, image_logo, website_url) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $name, $award, $deadline, $description, $provided_by, $target_file, $website);

        if ($stmt->execute()) {
            echo "<div class='alert alert-success'>Scholarship added successfully!</div>";
            header("Location: featuredscholarship.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
        }
        

        $stmt->close();
    }

    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Scholarship</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
    body {
        background-color:rgb(206, 235, 243);
        font-family: Arial, sans-serif;
    }

        
       .sidebar {
            min-width: 290px;
            max-width: 280px;
            height: 100vh;
            background-color:rgb(150, 199, 251);
    position: relative;
    top: 55px; 
}
        .sidebar .nav-link {
            color: #333;
            padding: 10px;
            font-weight: 500;
            color: white; 
        }

        .sidebar .nav-link:hover {
            border-radius: 4px;
            background-color: rgba(255, 255, 255, 0.2);

        }
        canvas{
            width: 1186px !important;
        }

    .container {
        max-width: 800px;
        margin: auto;
    }

    .card {
        background: rgb(185, 220, 238);
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #333;
        font-weight: bold;
    }

    .form-label {
        font-weight: bold;
        color: #555;
    }

    .form-control {
        border-radius: 5px;
        border: 1px solid #ced4da;
        padding: 10px;
        font-size: 16px;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        padding: 10px;
        font-size: 18px;
        font-weight: bold;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .shadow {
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1) !important;
    }

    .mt-5 {
        margin-top: 50px !important;
    }
    .navbar-collapse {
            flex-grow: 0 !important;
        }
        .navbar {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            z-index: 1000;
        }
        body {
            display: flex;
        }
        @media (max-width: 768px) {
            .sidebar {
                display: none !important;
            }
        }
        @media (min-width: 769px) {
            .navbar {
                width: 100%;
            }
        }
</style>


<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand text-warning fs-4 fw-bold" href="#">StudySponsor</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="admindashboard.php">Home</a>
        </li>
        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../main.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="sidebar d-flex flex-column p-3">
        <h4>Menu</h4>
        <nav class="nav flex-column">
            <a class="nav-link" href="admindashboard.php">Home</a>
            <a class="nav-link" href="add_scholarship.php">Add Featured Scholarships</a>
            <a class="nav-link" href="add_articles.php">Add Scholarship Articles</a>
            <a class="nav-link" href="add_detailed_articles.php">Add Detailed Articles</a>
            <a class="nav-link" href="profile.php">Profile</a>
            <a class="nav-link" href="totalstudentsdetials.php">Total Users</a>
            <a class="nav-link" href="../main.php">Logout</a>
        </nav>
    </div>

    <div class="container mt-5" style="padding: 30px 0px;">
        <div class="card shadow p-4">
            <h2 class="text-center mb-4">Insert New Scholarship</h2>

            <form action="add_scholarship.php" method="POST" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Scholarship Name" required>
                            <label for="name">Scholarship Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="award" name="award" placeholder="Award" required>
                            <label for="award">Award</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="deadline" name="deadline" placeholder="Deadline" required>
                            <label for="deadline">Deadline</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="provided_by" name="provided_by" placeholder="Provided By" required>
                            <label for="provided_by">Provided By</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="url" class="form-control" id="website" name="website" placeholder="Website URL" required>
                            <label for="website">Website URL</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo (Image)</label>
                            <input type="file" class="form-control" id="logo" name="logo" accept="image/*" required>
                        </div>
                    </div>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" id="description" name="description" placeholder="Description" style="height: 100px;" required></textarea>
                    <label for="description">Description</label>
                </div>

                <button type="submit" class="btn btn-primary w-100">Insert Scholarship</button>

            </form>

        </div>
    </div>
    <?php include('footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>