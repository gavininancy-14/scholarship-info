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
            background-color: rgb(180, 237, 244);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .detailedarticles .container {
            background: #fff;
            width:120%;
            padding: 20px;
            font-size: 20px;
            line-height: 40px;
            border-radius: 8px;
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
            width:70%;
        }
    </style>
</head>
<body>
<?php include('navbar.php'); ?>
<section class="detailedarticles">
    
    <div class="card p-4 shadow-lg">
        <h2 class="text-center mb-4">Scholarship Form</h2>
        <form id="scholarshipForm" enctype="multipart/form-data">
            
            <div class="form-floating mb-3">
                <select id="category" name="category_name" class="form-select">
                    <option value="5 Scholarships to Apply for in 2025">5 Scholarships to Apply for in 2025</option>
                    <option value="Scholarships for College Students">Scholarships for College Students</option>
                    <option value="QUICK AND EASY SCHOLARSHIPS">QUICK AND EASY SCHOLARSHIPS</option>
                    <option value="Need-Based Scholarships: What You Need to Know">Need-Based Scholarships: What You Need to Know</option>
                    <option value="10+ College Scholarships You Can Apply for Today">10+ College Scholarships You Can Apply for Today</option>
                    <option value="Scholarships We Love and You Will Too">Scholarships We Love and You Will Too</option>

                </select>
                <label for="category">Category Name</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" id="title" name="title" class="form-control" placeholder="Title" required>
                <label for="title">Title</label>
            </div>

            <div class="form-floating mb-3">
                <input type="number" id="award" name="award_amount" class="form-control" placeholder="Award Amount" step="any" required>
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

<?php include('footer.php') ?>
</body>
</html>
