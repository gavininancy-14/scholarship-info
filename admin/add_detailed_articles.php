<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(206, 235, 243);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .detailedarticles .container {
            background: #fff;
            width:130%;
            padding: 20px;
            font-size: 5px;
            line-height: 40px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        #responseMessage {
            margin-top: 10px;
            padding: 10px;
            display: none;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
        .detailedarticles{
            width:80%;
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
<!-- Navbar -->
 <section>
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
    </section>
<br>
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

<section class="detailedarticles">
    
    <div class="card p-4 shadow-lg">
        <h2 class="text-center mb-4">Scholarship Form</h2>
        <form id="scholarshipForm" enctype="multipart/form-data">
            
            <div class="form-floating mb-3">
                <select id="category" name="category_name" class="form-select">
                    <option value="5 Scholarships to Apply for in 2025">5 Scholarships to Apply for in 2025</option>
                    <option value="Scholarships for College Students">Scholarships for College Students</option>
                    <option value="10 plus College Scholarships You Can Apply for Today">10 plus College Scholarships You Can Apply for Today</option>
                    <option value="Scholarships We Love and You Will Too">Scholarships We Love and You Will Too</option>
                    <option value="Top Biology Scholarships for 2025 ">Top Biology Scholarships for 2025 </option>
                    <option value="Top Nursing Scholarships for 2025 ">Top Nursing Scholarships for 2025 </option>

                </select>
                <label for="category">Category Name</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" id="title" name="title" class="form-control" placeholder="Title" required>
                <label for="title">Title</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" id="award" name="award_amount" class="form-control" placeholder="Award Amount" step="any" required>
                <label for="award">Award Amount</label>
            </div>

            <div class="form-floating mb-3">
                <input type="date" id="deadline" name="deadline" class="form-control" placeholder="Deadline" required>
                <label for="deadline">Deadline</label>
            </div>

            <div class="form-floating mb-3">
                <textarea id="description" name="description" class="form-control" placeholder="Description" style="height: 100px;" required></textarea>
                <label for="description">Description</label>
            </div>
            <div class="row">
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="url" class="form-control" id="website" name="website" placeholder="Website URL" required>
                            <label for="website">Website URL</label>
                        </div>
                    </div>
            <button type="submit" class="btn btn-primary w-100">Add Detailed Articles</button>
        </form>
        <div id="responseMessage" class="mt-3 text-center"></div>
    </div>
</section>

<script>
    $(document).ready(function () {
        $("#scholarshipForm").on("submit", function (event) {
            event.preventDefault(); // Prevent default form submission

            let formData = new FormData(this);

            $.ajax({
                url: "../api/add_detailed_articles.php",  // Ensure the PHP file path is correct
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                dataType: "json", // Ensure response is handled as JSON
                success: function (response) {
                    $("#responseMessage").hide().removeClass();

                    if (response.status === "success") {
                        $("#responseMessage").addClass("success").text(response.message).show();
                        $("#scholarshipForm")[0].reset();
                    } else {
                        $("#responseMessage").addClass("error").text(response.message).show();
                    }
                },
                error: function () {
                    $("#responseMessage").addClass("error").text("Error submitting the form. Please try again.").show();
                }
            });
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php include('footer.php') ?>
</body>
</html>
