<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* General Page Styling */
body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background-color: rgb(209, 247, 250);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Profile Card Styling */
.profile-container {
    width: 500px;
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
    text-align: center;
    transition: transform 0.3s ease-in-out;
}

.profile-container:hover {
    transform: scale(1.05);
}

.profile-container p {
    font-size: 18px;
    color: #555;
    margin: 8px 0;
}

.profile-container strong {
    color: #333;
}

.profile-container button {
    background: #6a11cb;
    color: white;
    padding: 10px 15px;
    border: none;
    font-size: 18px;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 15px;
    transition: background 0.3s ease-in-out;
}

.profile-container button:hover {
    background: #4c00a4;
}

/* Edit Profile Card Styling */
#editProfileCard {
    display: none;
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
    width: 350px;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 10;
}

#editProfileCard input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ddd;
    font-size: 16px;
    box-sizing: border-box;
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

/* Responsive Design */
@media (max-width: 600px) {
    .profile-container {
        width: 90%;
        padding: 20px;
    }

    #editProfileCard {
        width: 90%;
        padding: 15px;
    }
}

    </style>
</head>
<body>
<?php include('navbar.php'); ?>
<div class="profile-container">
    <div id="profileCard">
        <p><strong>Name:</strong> <span id="name">Loading...</span></p>
        <p><strong>Role:</strong> <span id="role">Loading...</span></p>
        <p><strong>Email:</strong> <span id="email">Loading...</span></p>
        <p><strong>Date of Birth:</strong> <span id="dob">Loading...</span></p>
        <p><strong>Password:</strong> <span id="password">Loading...</span></p>
        <button onclick="editProfile()">Edit Profile</button>
    </div>
</div>

        <div id="editProfileCard" style="display:none;"></div>
    </div>

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
                        console.error("Error:", response.message);
                        alert(response.message);
                        return;
                    }
                    $("#name").text(response.data.name || "Not Provided");
                    $("#role").text(response.data.role || "Not Provided");
                    $("#email").text(response.data.email || "Not Provided");
                    $("#dob").text(response.data.dob || "Not Provided");
                    $("#password").text(response.data.password || "Not Provided");
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error:", status, error);
                    alert("Error fetching profile: " + status);
                }
            });
        }

        function editProfile() {
            $.ajax({
                url: '../api/profile.php',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                  if (response.status === 'error') {
                      console.error("Error:", response.message);
                      alert(response.message);
                      return;
                  }

                  let formHtml = `
                    <h3>Edit Profile</h3>
                    <form id="editForm">
                      <input type="text" name="name" value="${response.data.name}" required><br>
                      <input type="text" name="role" value="${response.data.role}" required><br>
                      <input type="email" name="email" value="${response.data.email}" required><br>
                      <input type="date" name="dob" value="${response.data.dob}" required><br>
                      <input type="text" name="password" value="${response.data.password}" required><br>
                      <button type="submit">Save</button>
                      <button type="button" onclick="cancelEdit()">Cancel</button>
                    </form>
                  `;

                  $("#editProfileCard").html(formHtml).show();
                  $("#profileCard").hide();

                  $("#editForm").submit(function(event) {
                      event.preventDefault();
                      let formData = $(this).serialize();

                      $.ajax({
                          url: '../api/profile.php',
                          type: 'POST',
                          data: formData,
                          dataType: 'json',
                          success: function(response) {
                              if (response.status === 'error') {
                                  console.error("Error:", response.message);
                                  alert(response.message);
                                  return;
                              }
                              fetchProfile();
                              $("#editProfileCard").hide();
                              $("#profileCard").show();
                          },
                          error: function(xhr, status, error) {
                              console.error("AJAX Error:", status, error);
                              alert("Error updating profile: " + status);
                          }
                      });
                  });
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error:", status, error);
                    alert("Error fetching profile for edit: " + status);
                }
            });
        }

        function cancelEdit() {
            $("#editProfileCard").hide();
            $("#profileCard").show();
        }
    </script>
</body>
</html>
