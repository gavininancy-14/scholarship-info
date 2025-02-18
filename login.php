<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudySponsr Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url('images/login.png.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            /* Semi-transparent white background */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            /* Subtle shadow */
            width: 400px;
        }

        h2 {
            color: #333;
            /* Darker heading color */
            margin-bottom: 30px;
        }

        .form-floating input {
            border: 1px solid #ced4da;
            /* Light gray border */
            color: #333;
            /* Darker text color */
            background-color: white;
            /* White background for input */
        }

        .form-floating label {
            color: #777;
            /* Slightly lighter label color */
        }

        .form-floating input::placeholder {
            color: #aaa;
            /* Lighter placeholder color */
        }

        .password-container {
            position: relative;
        }

        .show-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            background: none;
            border: none;
            color: #777;
            /* Gray color for eye icon */
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background-color: #E87E24;
            border: none;
            border-radius: 20px;
            color: white;
            font-size: 16px;
            /* Slightly smaller font size */
            cursor: pointer;
            transition: background-color 0.3s ease;
            /* Smooth transition for hover effect */
        }

        .login-btn:hover {
            background-color: #d36a1e;
        }

        .signup {
            margin-top: 20px;
            font-size: 16px;
            color: #555;
            /* Darker sign-up text */
        }

        .signup a {
            color: #E87E24;
            /* Orange link color */
            text-decoration: none;
            font-weight: bold;
        }

        .signup a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
<?php include('navbar.php'); ?>

    <div class="login-container">
        <h2>Log in to StudySponsr</h2>

        <form id="loginForm">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" required>
                <label for="email">Email Address</label>
            </div>

            <div class="form-floating mb-3 password-container">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                <label for="password">Password</label>
                <button class="show-password" type="button" onclick="togglePassword()">👁️</button>
            </div>

            <button type="submit" class="login-btn">LOG IN</button>
        </form>
        <p class="signup">Don't have an account? <a href="registration.php">Sign up</a></p>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
                    $("#loginForm").submit(function(event) { // Use the form ID
                            event.preventDefault();

                            var email = $("#email").val();
                            var password = $("#password").val();

                            $.ajax({
                                    type: "POST",
                                    url: "api/login.php",
                                    data: {
                                        email: email,
                                        password: password
                                    },
                                    dataType: "json",
                                    success: function(data) {
                                        if (data.status === "success") {
                                            // Display the success message in an alert
                                            alert(data.message);

                                            // Redirect AFTER the alert is closed (important!)
                                            switch (data.role) {
                                                case "student":
                                                    window.location.href = "students.php";
                                                    break;
                                                case "admin":
                                                    window.location.href = "admin/admindashboard.php";
                                                    break;
                                                case "parent":
                                                    window.location.href = "parents/parent.php";
                                                    break;
                                                default:
                                                    window.location.href = "login.php";
                                            } }else {
                                                alert(data.message);
                                            }
                                        },
                                        error: function(error) {
                                            console.error("Error:", error);
                                            alert("An error occurred during login.");
                                        }
                                    });
                            });
                    });

                function togglePassword() {
                    var passwordInput = document.getElementById("password");
                    var showPasswordButton = document.querySelector(".show-password");

                    if (passwordInput.type === "password") {
                        passwordInput.type = "text";
                        showPasswordButton.textContent = "👁️‍🗨️"; // Change icon or text
                    } else {
                        passwordInput.type = "password";
                        showPasswordButton.textContent = "👁️"; // Change back
                    }
                }
    </script>
</body>

</html>