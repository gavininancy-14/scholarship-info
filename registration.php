<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | StudySponsr</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    display: flex;
    flex-direction: column;
    background: url('images/signup.png') no-repeat center center fixed;
    background-size: cover;
    margin: 0;
    padding: 0;
}

header {
    background-color: #ffffff;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 2px solid #dddddd;
}

header h1 {
    color:orange ;
    font-size: 24px;
    margin: 0;
}

header nav a {
    text-decoration: none;
    margin-right: 20px;
    color: #333;
    font-weight: bold;
}

main {
    margin-top: 30px;
    flex-grow: 1; /* Ensures it takes available space */
}

h2 {
    background-color: #87CEFA;
    padding: 10px;
    color: white;
    margin: 0 auto;
    width: fit-content;
    border-radius: 5px;
}

form {
    margin-top: 20px;
    background-color: white;
    padding:45px;
    width: 60%;
    margin: auto;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

form label {
    display: block;
    margin: 15px 0 5px;
    /* font-weight: bold; */
}

form input, form select, form button {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

form button {
    background-color: #FF7F50;
    color: white;
    border: none;
    cursor: pointer;
    font-size: 16px;
    transition: 0.3s;
}

form button:hover {
    background-color: #e06b45;
}

footer {
    margin-top: 20px;
    font-size: 22px;
    text-align: center;
}

    </style>
</head>
<body>
<header class="sticky-top bg-white shadow-sm">
    <h1 class="text-warning">StudySponsr</h1>
    <nav>
        <a href="main.php" class="text-dark fw-bold text-decoration-none me-3">Home</a>
        <!-- <a href="students.php" class="text-dark fw-bold text-decoration-none me-3">Students</a>
        <a href="parents/parent.php" class="text-dark fw-bold text-decoration-none">Parents</a> -->
    </nav>
</header>
    <main>
        <h2>REGISTRATION</h2>
        <form id="registration-form">

        <label>YOUR NAME:</label>
        <input type="text" name="name" required>

            <label>I AM A:</label>
            <div style="display:flex">
                <div style="display:flex;align-items:center"><input type="radio" name="role" value="student" required><label> Student</label></div>
                <div style="display:flex;align-items:center"><input type="radio" name="role" value="parent" required><label> Parent/Guardian of a Student</label></div>
            </div>

            <label>YOUR BIRTHDAY:</label>
            <input type="date" name="dob" required>

            <label>ACCOUNT</label>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>

            <label class="optional">HOW DID YOU HEAR ABOUT STUDYSPONSR</label>
            <select name="referral">
                <option value="" disabled selected>Please select (optional)</option>
                <option value="ad">Advertisement</option>
                <option value="friend">Friend</option>
                <option value="search">Search Engine</option>
            </select>

            <button type="submit">Create</button>

            <footer>
            Already have an account? <a href="login.php">LOGIN</a>
        </footer>
        </form>
       
    </main>
</body>
</html>

<script>
document.getElementById('registration-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    let formData = new FormData(this);

    fetch('api/register.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log("API Response:", data); // Log the response for debugging
        alert(data.message);
        if (data.success) {
            window.location.href = "login.php";  // Redirect if success is true
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert("An error occurred while submitting the form.");
    });
});

</script>
