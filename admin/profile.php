<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-image: linear-gradient(45deg,rgb(154, 248, 255) 0%, #fad0c4 99%, #fad0c4 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .profile-container {
            width: 500px;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            transition: transform 0.3s ease;
        }
        .profile-container:hover {
            transform: scale(1.05);
        }
        .profile-container h3 {
            margin-bottom: 10px;
            font-size: 28px;
            color: #333;
        }
        .profile-container p {
            font-size: 24px;
            color: #666;
            margin: 8px 0;
        }
        .profile-container button {
            background: #6a11cb;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
            transition: background 0.3s;
        }
        .profile-container button:hover {
            background:rgb(0, 164, 120);
        }
        #editProfileCard {
            display: none;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }
        #editProfileCard input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 24px;
        }
        #editProfileCard button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        #editProfileCard button[type="submit"] {
            background: #28a745;
            color: white;
        }
        #editProfileCard button[type="submit"]:hover {
            background: #218838;
        }
        #editProfileCard button[type="button"] {
            background: #dc3545;
            color: white;
        }
        #editProfileCard button[type="button"]:hover {
            background: #c82333;
        }
    </style>
</head>
<body>
<?php include('navbar.php'); ?>
<?php include('side.php'); ?>
    <div class="profile-container">
        <h3 id="name">Loading...</h3>
        <p id="role">Loading...</p>
        <p id="email">Loading...</p>
        <p id="dob">Loading...</p>
        <p id="password">Loading...</p>
        <button onclick="editProfile()">Edit Profile</button>
    </div>
    <div id="editProfileCard"></div>
    <script>
        $(document).ready(function() {
            fetchProfile();
        });

        function fetchProfile() {
            $.ajax({
                url: '../api/profile.php',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'error') {
                        alert(response.message);
                        return;
                    }
                    $("#name").text(response.data.name || "Not Provided");
                    $("#role").text(response.data.role || "Not Provided");
                    $("#email").text(response.data.email || "Not Provided");
                    $("#dob").text(response.data.dob || "Not Provided");
                    $("#password").text(response.data.password || "Not Provided");
                },
                error: function() {
                    alert("Error fetching profile");
                }
            });
        }

        function editProfile() {
            $.ajax({
                url: '../api/profile.php',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    let formHtml = `
                        <h3>Edit Profile</h3>
                        <form id="editForm">
                            <input type="text" name="name" value="${response.data.name}" required>
                            <input type="text" name="role" value="${response.data.role}" required>
                            <input type="email" name="email" value="${response.data.email}" required>
                            <input type="text" name="dob" value="${response.data.dob}" required>
                            <input type="password" name="password" placeholder="New Password (optional)">
                            <button type="submit">Save</button>
                            <button type="button" onclick="$('#editProfileCard').hide(); $('.profile-container').show();">Cancel</button>
                        </form>
                    `;
                    
                    $("#editProfileCard").html(formHtml).show();
                    $(".profile-container").hide();
                    
                    $("#editForm").submit(function(event) {
                        event.preventDefault();
                        let formData = new FormData(this);

                        $.ajax({
                            url: '../api/profile.php',
                            type: 'POST',
                            data: formData,
                            contentType: false,
                            processData: false,
                            dataType: 'json',
                            success: function(response) {
                                if (response.status === "success") {
                                    alert("Profile updated successfully!");
                                    fetchProfile();
                                    $("#editProfileCard").hide();
                                    $(".profile-container").show();
                                } else {
                                    alert("Failed to update profile: " + response.message);
                                }
                            },
                            error: function() {
                                alert("Error updating profile");
                            }
                        });
                    });
                },
                error: function() {
                    alert("Error fetching profile for edit");
                }
            });
        }
    </script>
</body>
</html>
