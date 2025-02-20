<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(45deg, rgb(154, 248, 255) 0%, #fad0c4 100%);
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
            font-size: 26px;
            color: #666;
            margin: 8px 0;
        }
        .profile-container button {
            background: #6a11cb;
            color: white;
            padding: 10px 15px;
            border: none;
            font-size: 24px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
            transition: background 0.3s;
        }
        .profile-container button:hover {
            background: #4c00a4;
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
            font-size: 16px;
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
    <div class="profile-container">
        <div id="profileCard">
            <h3 id="name">Loading...</h3>
            <p id="role">Loading...</p>
            <p id="email">Loading...</p>
            <p id="dob">Loading...</p>
            <p id="password">Loading...</p>
            <button onclick="editProfile()">Edit Profile</button>
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
