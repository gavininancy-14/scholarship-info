<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Scholarship Article</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(188, 236, 250);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .sidebar {
            min-width: 290px;
            max-width: 280px;
            height: 100vh;
            background-color:rgb(150, 199, 251);
    position: relative;
    top: 55px; /* Adjust as needed */
}
        .sidebar .nav-link {
            color: #333;
            padding: 10px;
            font-weight: 500;
            color: white; /* Ensure text is visible */
        }

        .sidebar .nav-link:hover {
            border-radius: 4px;
            background-color: rgba(255, 255, 255, 0.2);

        }
        canvas{
            width: 1186px !important;
        }

        .add-articals .container {
            width: 90%;
            /* max-width: 800px; */
            background: white;
            padding: 20px;
            /* border-radius: 15px; */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .message {
            margin-top: 15px;
            padding: 10px;
            border-radius: 5px;
        }
        .message.success {
            background-color: #d4edda;
            color: #155724;
        }
        .message.error {
            background-color: #f8d7da;
            color: #721c24;
        }
        .add-articals{
            width: 90%;
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
    
</head>
<body>
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

    <section class="add-articals">
    <div class="container">
        <h2 class="text-center">Submit Scholarship Articles</h2>
        <form id="scholarshipForm" enctype="multipart/form-data">
            <div class="form-floating mb-3">
                <input type="file" class="form-control" id="image" name="image" required>
                <label for="image">Upload Image</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                <label for="name">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="scholarship_title" name="scholarship_title" placeholder="Scholarship Title" required>
                <label for="scholarship_title">Scholarship Title</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="deadline" name="date" required>
                <label for="deadline">Deadline</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Category Name" required>
                <label for="category_name">Category Name</label>
            </div>
           
            <button type="submit" class="btn btn-primary w-100">Add Article</button>
        </form>
        <div class="message" id="responseMessage" style="display: none;"></div>
    </div>
    
    </section><script>
    $(document).ready(function () {
        $("#scholarshipForm").on("submit", function (event) {
            event.preventDefault();
            let formData = new FormData(this);
            $.ajax({
                url: "../api/addarticles.php",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function (response) {
                    $("#responseMessage").hide().removeClass();
                    if (response.status === "success") {
                        $("#responseMessage").addClass("message success").text(response.message).show();
                        $("#scholarshipForm")[0].reset();
                    } else {
                        $("#responseMessage").addClass("message error").text(response.message).show();
                    }
                },
                error: function () {
                    $("#responseMessage").addClass("message error").text("Error submitting the form. Please try again.").show();
                }
            });
        });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php include('footer.php') ?>
</body>
</html>
