<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <title>Submit Scholarship Article</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background-color: rgb(206, 235, 243);
    display: flex;
    height: 100vh;
    overflow: hidden;
}

/* Navbar Styling */
.navbar {
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}

/* Sidebar Styling */
.sidebar {
    width: 280px;
    height: 100vh;
    position: fixed;
    top: 56px; /* Height of the navbar */
    left: 0;
    background-color: rgb(150, 199, 251);
    padding-top: 20px;
    transition: transform 0.3s ease-in-out;
}

.sidebar .nav-link {
    color: white;
    padding: 12px;
    font-weight: 500;
}

.sidebar .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 4px;
}
/* Main Content */
.content {
    margin-left: 280px; /* Adjust to match sidebar width */
    padding: 90px;
    overflow-x: auto;
    width: calc(100% - 280px); /* Adjust width accordingly */
    box-sizing: border-box;
}

/* Content Area */
.content, .section-total {
    margin-left: 280px; /* Start content right after sidebar */
    width: calc(100% - 280px); /* Occupy remaining space */
    padding: 20px;
    box-sizing: border-box;
    overflow-x: auto; /* Enable horizontal scrolling if needed */
}

/* Sidebar */

/* Responsive Fixes */
@media (max-width: 768px) {
    .sidebar {
        transform: translateX(-100%);
        position: absolute;
    }

    .content, .section-total {
        margin-left: 0;
        width: 100%;
    }
}

/* Section for table */
.section-total {
    
    padding-top: 40px;


    margin-top: 60px;
    width: 100%;
    padding: 20px;
    background-color: #f8f9fa;
    overflow-x: auto; /* Enables scrolling when necessary */
    display: block;
    position: relative;
}

/* Table Styling */
#studentTable {
    width: 100%;
    min-width: 1000px; /* Ensures visibility */
    border-collapse: collapse;
    background: #fff;
    box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1);
    overflow-x: auto;
    display: block;
}

/* Responsive fixes */
@media (max-width: 768px) {
    
    .content {
        margin-left: 0;
        width: 100%;
    }

    .section-total {
        overflow-x: auto;
    }

    #studentTable {
        width: 100%;
        min-width: 1000px; /* Ensures visibility */
        display: block;
    }
}



#studentTable thead {
    background-color: #007bff;
    color: white;
}

#studentTable th,
#studentTable td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
    white-space: nowrap; /* Prevents text from wrapping */
}
h2 {
    position: relative;
    z-index: 10;
}

/* Alternate row color */
#studentTable tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Row hover effect */
#studentTable tbody tr:hover {
    background-color: #d1e7fd;
    transition: 0.3s;
}

/* Responsive fixes */
@media (max-width: 768px) {
    .sidebar {
        transform: translateX(-100%);
        position: absolute;
    }

    .content {
        margin-left: 0;
        width: 100%;
    }

    /* Make table scrollable on small screens */
    .section-total {
        overflow-x: auto;
    }

    #studentTable {
        width: 100%;
        min-width: 800px;
    }
}
</style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-warning fs-4 fw-bold" href="#">StudySponsor</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="admindashboard.php">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Scholarships
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="featuredscholarship.php">Featured Scholarships</a></li>
                            <li><a class="dropdown-item" href="articles.php">Scholarship News</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../main.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column p-3">
        <h4 class="text-white text-center">Menu</h4>
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


<section class="section-total">
<h2>Student Details</h2>
    <table id="studentTable">
        
        <thead>
            
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Category</th>
                <th>Contact Number</th>
                <th>Parent Name</th>
                <th>Parent Occupation</th>
                <th>Annual Income</th>
                <th>Current Studying</th>
                <th>CGPA Percentage</th>
            </tr>
        </thead>
        <tbody>
            <!-- Student details will be loaded here -->
        </tbody>
    </table>

    <script>
        $(document).ready(function () {
            fetchStudents();
        });

        function fetchStudents() {
            $.ajax({
                url: "../api/studentsdetail.php",
                type: "GET",
                dataType: "json",
                success: function (response) {
                    if (response.status === "error") {
                        console.error("Error:", response.message);
                        alert(response.message);
                        return;
                    }

                    let rows = "";
                    response.data.forEach(function (student) {
                        rows += `
                            <tr>
                                <td>${student.id}</td>
                                <td>${student.name}</td>
                                <td>${student.email}</td>
                                <td>${student.category}</td>
                                <td>${student.contact_number}</td>
                                <td>${student.parent_name}</td>
                                <td>${student.parent_occupation}</td>
                                <td>${student.annual_income}</td>
                                <td>${student.current_studying}</td>
                                <td>${student.cgpa_percentage}</td>
                            </tr>
                        `;
                    });

                    $("#studentTable tbody").html(rows);
                },
                error: function (xhr, status, error) {
                    console.error("AJAX Error:", status, error);
                    alert("Error fetching student details");
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</section>
</body>
</html>
