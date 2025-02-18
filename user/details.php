<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applying for Scholarships</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="container bg-white p-4 rounded shadow" style="max-width: 1000px;">
        <div class="row mb-3">
            <div class="col text-center">
                <h2>Student Details</h2>
            </div>
        </div>
        <form id="scholarshipForm">
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder=" ">
                        <label for="name">Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder=" ">
                        <label for="email">Email Address</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="contact" name="contact" placeholder=" ">
                        <label for="contact">Contact Number</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="parent-name" name="parent-name" placeholder=" ">
                        <label for="parent-name">Parent Name</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="income" name="income" placeholder=" ">
                        <label for="income">Parents Annual Income</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="studying" name="studying" placeholder=" ">
                        <label for="studying">Current Studying</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="cgpa" name="cgpa" placeholder=" ">
                        <label for="cgpa">CGPA/Percentage</label>
                    </div>
                </div>
            </div>

            <div class="mb-3 position-relative">
                <label class="form-label">Category</label>
                <div class="d-flex flex-wrap gap-3 p-2 border rounded">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="category" id="category-oc" value="OC">
                        <label class="form-check-label" for="category-oc">OC</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="category" id="category-obc" value="OBC">
                        <label class="form-check-label" for="category-obc">OBC</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="category" id="category-bc" value="BC">
                        <label class="form-check-label" for="category-bc">BC</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="category" id="category-scst" value="SC/ST">
                        <label class="form-check-label" for="category-scst">SC/ST</label>
                    </div>
                </div>
            </div>

            <div class="mb-3 position-relative">
                <label class="form-label">Parent Occupation</label>
                <div class="d-flex flex-wrap gap-3 p-2 border rounded">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="occupation" id="occupation-farmer" value="Farmer">
                        <label class="form-check-label" for="occupation-farmer">Farmer</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="occupation" id="occupation-private" value="Private Sector">
                        <label class="form-check-label" for="occupation-private">Private Sector</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="occupation" id="occupation-govt" value="Government Sector">
                        <label class="form-check-label" for="occupation-govt">Government Sector</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="occupation" id="occupation-business" value="Business">
                        <label class="form-check-label" for="occupation-business">Business</label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-warning w-100">Submit</button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $("#scholarshipForm").submit(function(event) {
                event.preventDefault(); // Prevent default form submission

                var formData = {
                    name: $("#name").val(),
                    email: $("#email").val(),
                    contact_number: $("#contact").val(),
                    parent_name: $("#parent-name").val(),
                    parent_occupation: $("input[name='occupation']:checked").val(),
                    annual_income: $("#income").val(),
                    current_studying: $("#studying").val(),
                    cgpa_percentage: $("#cgpa").val(),
                };

                $.ajax({
                    type: "POST",
                    url: "api/studentdetails.php",
                    data: formData,
                    dataType: "json",
                    success: function(response) {
                        alert(response.message); // Show success message
                        if (response.data) {
                            console.log(response.data); // Log response data
                            window.location.href = "featuredscholarship.php";
                        }
                    },
                    error: function() {
                        alert("Error processing your request. Please try again.");
                    },
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
