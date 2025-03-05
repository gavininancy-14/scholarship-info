<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Scholarships and Grants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: rgb(209, 247, 250) ;
            font-size: 18px;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .title-box {
            background: #ffffff;
            padding: 20px;
            margin: 20px auto;
            width: 95%;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            text-align: center;
            animation: fadeIn 1s;
        }
        .title-box h1 {
            color: #12b6db;
            text-transform: uppercase;
            font-weight: bold;
            margin: 0;
        }
        .banner {
            background:rgb(253, 253, 253);
            padding: 60px;
            margin: 20px auto;
            font-size: 22px;
            width: 95%;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            animation: slideIn 1s;
        }
        .join-button {
            background: #00c000;
            color: white;
            padding: 12px 25px;
            font-size: 22px;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
            transition: 0.3s;
        }
        .join-button:hover {
            background: #009000;
        }
        .content {
            width: 90%;
            margin: 20px auto;
            background: white;
            padding: 40px;
            font-size: 20px;
            line-height: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            text-align: left;
            animation: fadeIn 1.5s;
        }
        .content h2 {
            text-align: center;
            font-weight: bold;
            color: #12b6db;
        }
        .columns {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .column {
            flex: 1;
            min-width: 320px;
            background:rgb(255, 255, 255);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .highlight {
            font-weight: bold;
            text-transform: uppercase;
            font-size: 20px;
            color:rgb(245, 161, 16);
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideIn {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .section-students
        {
            padding : 50px;
        }
    </style>
</head>
<body>
<?php include('navbar.php'); ?>
<section class="section-students">
    <div class="title-box">
        <h1>College Scholarships and Grants</h1>
    </div>
    <div class="banner">
        <h2>Find the money you need to pay for college with Studysponsr.</h2><br>
        <h3>Find unique college scholarships, grants, internships, college tips, and more — 100% FREE.</h3><br>
        <a href="works.php" class="join-button">JOIN FOR FREE</a>
    </div>
</section>
<div class="content">
    <h2>What are Scholarships?</h2><br>
    <div class="columns">
        <div class="column">
            <p>Many high school students, parents, and current college students are shocked to hear there are thousands upon thousands of college scholarships available to college students in the United States.</p>
            <p><strong>Types of Scholarships:</strong></p><br>
            <p class="highlight">Merit-Based</p>
            <p>Awarded based on academic achievements, leadership, talents, or extracurricular activities.</p>
            <p class="highlight">Need-Based</p>
            <p>Given to students with financial need to help cover tuition and expenses.</p>
            <p class="highlight">Athletic</p>
            <p>For students who excel in sports and plan to play at the college level.</p>
            <p class="highlight">Minority</p>
            <p>For underrepresented students.</p>
            <p class="highlight">Field-Specific</p>
            <p>Awarded to students pursuing careers in STEM, healthcare, education, or the arts.</p>
        </div>
        <div class="column">
            <p>Scholarships are free money that does not need to be repaid, unlike student loans.</p>
            <p><strong>Tips for Winning Scholarships:</strong></p>
            <p class="highlight">Apply Early & Often</p>
            <p>There is no limit to the number of scholarships you can apply for.</p>
            <p class="highlight">Write Strong Essays</p>
            <p>Many scholarships require a personal essay; make sure yours is compelling and well-written.</p>
            <p class="highlight">Meet Deadlines</p>
            <p>Missing deadlines can disqualify you from consideration.</p>
            <p class="highlight">Stay Organized</p>
            <p>Keep track of scholarship applications, requirements, and deadlines.</p>
            <h3>Maximizing Scholarship Opportunities for College Students:</h3>
            <p>Scholarships can help cover not only tuition but also room and board, textbooks, supplies, and other college-related expenses.<br> Since college costs can add up quickly, securing scholarships can significantly reduce financial stress.</p>
        </div>
    </div>
</div>
    </section>
</body>
</html>
