<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Basic styling (you can customize this) */
        .profile-card {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }

    /* Reset some default styling */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f9;
    }

    /* Profile card styling */
    .profile-card {
        background-color: #fff;
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 8px;
        margin: 20px auto;
        width: 300px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .profile-card h3 {
        margin: 0;
        font-size: 24px;
        color: #333;
    }

    .profile-card p {
        font-size: 14px;
        color: #666;
        margin: 5px 0;
    }

    .profile-card button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 15px;
    }

    .profile-card button:hover {
        background-color: #45a049;
    }

    /* Edit Profile card styling */
    #editProfileCard {
        background-color: #fff;
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 8px;
        width: 300px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
    }

    #editProfileCard form {
        display: flex;
        flex-direction: column;
    }

    #editProfileCard input[type="text"],
    #editProfileCard input[type="email"] {
        padding: 10px;
        margin: 10px 0;
        border-radius: 4px;
        border: 1px solid #ddd;
        font-size: 14px;
    }

    #editProfileCard button[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 10px;
    }

    #editProfileCard button[type="submit"]:hover {
        background-color: #45a049;
    }

    #editProfileCard button[type="button"] {
        background-color: #f44336;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 10px;
    }

    #editProfileCard button[type="button"]:hover {
        background-color: #e53935;
    }

    /* For better alignment on larger screens */
    @media screen and (min-width: 768px) {
        .profile-card, #editProfileCard {
            width: 400px;
        }
    }
</style>
</head>
<body>

    <div class="profile-card">
        <h3 id="name">Loading...</h3>
        <p id="role">Loading...</p>
        <p id="email">Loading...</p>
        <p id="dob">Loading...</p>
        <button onclick="editProfile()">Edit Profile</button>
    </div>

    <div class="profile-card" id="editProfileCard" style="display:none;">  </div>

    <script>
        $(document).ready(function() {
            fetchProfile();
        });

        function fetchProfile() {
            $.ajax({
                url: '../api/profile.php', // Your PHP script URL
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
                    $("#email").text(response.data.email|| "Not Provided");
                    $("#dob").text(response.data.dob || "Not Provided");
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
                      <input type="text" name="name" value="${response.data.name}"><br>
                      <input type="text" name="role" value="${response.data.designation}"><br>
                      <input type="email" name="email" value="${response.data.email}"><br>
                      <input type="text" name="dob" value="${response.data.dob}"><br>
                      <button type="submit">Save</button>
                      <button type="button" onclick="$('#editProfileCard').hide(); $('.profile-card:first').show();">Cancel</button>
                    </form>
                  `;

                  $("#editProfileCard").html(formHtml).show();
                  $(".profile-card:first").hide(); // Hide the display card

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
                              if (response.status === 'error') {
                                  console.error("Error:", response.message);
                                  alert(response.message);
                                  return;
                              }
                              fetchProfile(); // Refresh the profile display
                              $("#editProfileCard").hide();
                              $(".profile-card:first").show();// Show the display card
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
    </script>

</body>
</html>