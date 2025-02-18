<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Scholarships and Grants</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(45deg, rgb(154, 248, 255) 0%, #fad0c4 100%);
            font-size: 18px;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .header {
            padding: 20px 0;
        }
        .header h1 {
            color: #2a4d2a;
            text-transform: uppercase;
        }
        .banner {
            background-color: rgb(248, 248, 248);
            padding: 20px;
            margin: 20px auto;
            width: 80%;
            border-radius: 10px;
        }
        .join-button {
            background-color: #00c000;
            color: white;
            padding: 10px 20px;
            font-size: 22px;
            font-weight: bold;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }
        .content {
            width: 80%;
            margin: 20px auto;
            background-color: rgb(225, 244, 247);
            padding: 20px;
            font-size: 18px;
            line-height: 30px;
            border-radius: 10px;
            text-align: left;
        }
        .content h2 {
            text-align: center;
            font-weight: bold;
        }
        .columns {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }
        .column {
            flex: 1;
            min-width: 300px;
        }
        .highlight {
            font-weight: bold;
            text-transform: uppercase;
            font-size: 20px;
        }
        .section-header{
            padding: 62px 0px;
        }
    </style>
</head>
<body>
    <?php include('navbar.php'); ?>
    <section class="section-header">
    <div class="header">
        <h1>College Scholarships and Grants</h1>
    </div>
    <div class="banner">
        <p>Find the money you need to pay for college with Studysponsr.</p>
        <p>Find unique college scholarships, grants, internships, college tips, and more — 100% FREE.</p>
        <a href="works.php" class="join-button">JOIN FOR FREE</a>
    </div>
    </section>
    <div class="content">
        <h2>What are Scholarships?</h2><br>
        <div class="columns">
            <div class="column">
                <p>Many high school students, parents and current college students are shocked to hear there are thousands upon thousands of college scholarships available to college students in the United States.</p>
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
</body>
</html>
