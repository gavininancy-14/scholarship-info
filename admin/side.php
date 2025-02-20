<style>
    @media (max-width:768px) {
            
            .sidebar{
                display: none !important;
            }
            body{
                display: block !important;
            }
        }

        @media (min-width:769px) {
            .offcanvas{
                display: none !important;
            }
            .navbar{
                display: none !important;
            }
            .sidebar{
                display:block ;
            }
        }
        
        .sidebar {
            min-width: 290px;
            max-width: 280px;
            background-color: #f8f9fa;
            height: 100vh;
        }

        .sidebar .nav-link {
            color: #333;
            padding: 10px;
            font-weight: 500;
        }

        .sidebar .nav-link:hover {
            background-color: #e9ecef;
            border-radius: 4px;
        }
        canvas{
            width: 1186px !important;
        }
 </style>   
    
<div class="sidebar d-flex flex-column p-3">
        <h4>Menu</h4>
        <nav class="nav flex-column">
            <a class="nav-link" href="admindashboard.php">Home</a>
            <a class="nav-link" href="add_scholarship.php">Add Scholarships</a>
            <a class="nav-link" href="add_articles.php">Add Articles</a>
            <a class="nav-link" href="add_detailed_articles.php">Add Detailed Articles</a>
            <a class="nav-link" href="profile.php">Profile</a>
            <a class="nav-link" href="totalstudentsdetials.php">Total Users</a>
            <a class="nav-link" href="../main.php">Logout</a>
        </nav>
    </div>