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
            background-color: #f8f8f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
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
    </style>
    
</head>
<body>
<?php include('navbar.php'); ?>
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
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="detailed_scholarships" name="detailed_scholarships" placeholder="Detailed Scholarships" required>
                <label for="detailed_scholarships">Detailed Scholarships</label>
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
