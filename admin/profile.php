<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(206, 235, 243);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        #editForm {
    display: flex;
    flex-direction: column;
    width: 300px;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    background-color: #f9f9f9;
    font-family: Arial, sans-serif;
}

#editForm h3 {
    text-align: center;
    color: #333;
    margin-bottom: 15px;
}

#editForm input {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

#editForm input:focus {
    border-color: #007bff;
    outline: none;
}

#editForm button {
    margin-top: 10px;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
}

#editForm button[type="submit"] {
    background-color: #007bff;
    color: white;
}

#editForm button[type="submit"]:hover {
    background-color: #0056b3;
}

#editForm button[type="button"] {
    background-color: #ccc;
    color: black;
}

#editForm button[type="button"]:hover {
    background-color: #999;
}

        .profile-container {
    width: 300px;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    background-color: #f9f9f9;
    text-align: center;
    font-family: Arial, sans-serif;
}

.profile-container h3 {
    color: #333;
    margin-bottom: 10px;
}

.profile-container p {
    color: #555;
    margin: 5px 0;
}

.profile-container button {
    margin-top: 10px;
    padding: 8px 12px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: white;
    font-size: 14px;
    cursor: pointer;
}

.profile-container button:hover {
    background-color: #0056b3;
}
        .sidebar {
            min-width: 290px;
            max-width: 280px;
            height: 100vh;
            background-color: rgb(150, 199, 251);
            position: fixed;
            left: 0;
            top: 55px;
        }
        .sidebar .nav-link {
            color: white;
            padding: 10px;
            font-weight: 500;
        }
        .sidebar .nav-link:hover {
            border-radius: 4px;
            background-color: rgba(255, 255, 255, 0.2);
        }
        .navbar {
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            z-index: 1000;
        }
        @media (max-width: 768px) {
            .sidebar {
                display: none !important;
            }
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
        @media (min-width: 769px) {
            .navbar {
                width: 100%;
            }
        }
    </style>
</head>
<body>
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Scholarships
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="featuredscholarship.php">Featured Scholarships</a></li>
            <li><a class="dropdown-item" href="articles.php">Scholarship News</a></li>
          </ul>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
