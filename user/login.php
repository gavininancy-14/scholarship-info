<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudySponsr Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* ... (Your existing CSS styles) ... */
        /* Background Image */
        body {
            background: url('images/login.png.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            background: rgba(188, 243, 247, 0.1);
            padding: 30px;
            border-radius: 15px;
            box-shadow: rgba(209, 248, 244, 0.3);
            text-align: center;
            width: 400px;
        }

        h2 {
            color: white;
            margin-bottom: 20px;
        }

        /* Floating Label Input */
        .form-floating input {
            background: rgba(212, 242, 245, 0.3);
            border: none;
            color: white;
        }

        .form-floating label {
            color: rgb(0 0 0 / 80%);
        }

        .form-floating input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        /* Show Password Button */
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
            color: white;
        }

        /* Login Button */
        .login-btn {
            width: 100%;
            padding: 12px;
            background-color: #E87E24;
            border: none;
            border-radius: 20px;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }

        .login-btn:hover {
            background-color: #d36a1e;
        }

        /* Sign-up link */
        .signup {
            margin-top: 15px;
            font-size: 16px;
            color: white;
        }

        .signup a {
            color: cyan;
            text-decoration: none;
            font-weight: bold;
        }

        .signup a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h2>Log in to StudySponsr</h2>

        <form id="loginForm">  <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" required>
                <label for="email">Email Address</label>
            </div>

            <div class="form-floating mb-3 password-container">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                <label for="password">Password</label>
                <button class="show-password" type="button" onclick="togglePassword()">👁️</button>
            </div>

            <button type="submit" class="login-btn">LOG IN</button> </form>  <p class="signup">Don't have an account? <a href="registration.php">Sign up</a></p>
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
                            // Redirect based on role
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
                                    window.location.href = "login.php"; // Default
                            }
                        } else {
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