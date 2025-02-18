<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applying for Scholarships</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body{
        background-image: linear-gradient(45deg,rgb(154, 248, 255) 0%, #fad0c4 99%, #fad0c4 100%);
    }
    </style>
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
            <div class="row">
    <div class="col-md-6">
        <div class="form-floating mb-3">
            <input type="tel" class="form-control" id="contact" name="contact" placeholder=" " 
                   pattern="[0-9]{10}" maxlength="10" required oninput="validateContact(this)">
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $("#scholarshipForm").submit(function(event) {
            event.preventDefault(); // Prevent default form submission

            var formData = {
                name: $("#name").val().trim(),
                email: $("#email").val().trim(),
                contact_number: $("#contact").val().trim(),
                parent_name: $("#parent-name").val().trim(),
                parent_occupation: $("input[name='occupation']:checked").val() || "", // Prevent undefined
                annual_income: $("#income").val().trim(),
                current_studying: $("#studying").val().trim(),
                cgpa_percentage: $("#cgpa").val().trim(),
                category: $("input[name='category']:checked").val() || "" // Prevent undefined
            };

            // Validation: Ensure no empty fields
            for (const key in formData) {
                if (!formData[key]) {
                    alert("Please fill in all required fields.");
                    console.log("Missing field:", key);
                    return;
                }
            }

            console.log("Sending Data: ", formData); // Debugging Log

            $.ajax({
                type: "POST",
                url: "api/studentdetails.php",
                data: JSON.stringify(formData), // Convert to JSON format
                contentType: "application/json",
                dataType: "json",
                success: function(response) {
                    console.log("Server Response: ", response); // Debugging Log
                    if (response && response.success) { // Ensure response exists
    alert(response.message); // Show success message
    
    setTimeout(function() {
        window.location.href = "featuredscholarship.php"; // Redirect after refresh
    }, 1000); // Delay redirect for 1 second

    // Store a flag in sessionStorage before refreshing
    sessionStorage.setItem("redirectAfterRefresh", "true");
    window.location.reload(); // Refresh the page
}

// Check if we need to redirect after refresh
if (sessionStorage.getItem("redirectAfterRefresh") === "true") {
    sessionStorage.removeItem("redirectAfterRefresh"); // Remove flag
    window.location.href = "featuredscholarship.php"; // Redirect to next page
}

 else {
                        alert(response.message || "Invalid input. Please check your details.");
                    }
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error:", status, error, xhr.responseText); // Log full error details
                    alert("Error processing your request. Please try again.");
                }
            });
        });
    });
</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
