<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Your Student Plan for College</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 24px;
            margin: 0;
            padding: 0;
            background-color: #eef5ff;
        }
        .container {
            width: 80%;
            margin: 40px auto;
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }
        .header {
            background-color:rgb(74, 224, 219);
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
            border-radius: 10px 10px 0 0;
        }
        .content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-top: 30px;
        }
        .text-content {
            width: 60%;
        }
        .image-content {
            width: 55%;
        }
        .image-content img {
            width: 100%;
            border-radius: 10px;
        }
        h2 {
            color: #003366;
            margin-top: 30px;
        }
        p {
            color: #333;
            line-height: 1.8;
            font-size: 18px;
        }
        ul {
            color: #333;
            line-height: 30px;
            padding-left: 30px;
            font-size: 18px;
        }
        .join-btn {
            display: block;
            width: 100%;
            text-align: center;
            background-color: #ff6600;
            color: white;
            padding: 15px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            margin-top: 30px;
        }
        .join-btn:hover {
            background-color: #cc5200;
        }
        .section-parent{
            padding: 90px 0px;
        }
    </style>
</head>
<body>
<?php include('navbar.php'); ?>
    <section class="section-parent">
    <div class="container">
        <div class="header">How to Help Your Student Plan for College</div>
        <div class="content">
            <div class="text-content">
                <p>Know What Your Family and College-Bound Student Should Do to Prepare for College with a Simplified College-Planning Process</p>
                <p>Studysponsor’s Parent Page provides scholarship information, financial aid tips, important dates, current events related to student life, an internship directory, and helpful articles for parents.</p>
            </div>
            <div class="image-content">
                <img src="../images/p2.png" alt="Students planning for college">
            </div>
        </div>
        <h2>What Your Family and College-Bound Student Should Do to Prepare for College</h2>
        <p>Studysponsor’s Parent Page is a valuable resource designed to support families and students as they navigate the journey to higher education. It provides:</p>
        <ul>
            <li><strong>Scholarship Information</strong> – Find a comprehensive list of scholarships, eligibility criteria, application deadlines, and tips on crafting strong applications to maximize financial aid opportunities.</li>
            <li><strong>Financial Aid Tips</strong> – Learn about FAFSA grants, student loans, and work-study programs to help reduce the cost of college. Get guidance on budgeting, understanding loan terms, and avoiding student debt pitfalls.</li>
            <li><strong>College Admissions Resources</strong> – Stay on top of college application timelines, financial aid submission deadlines, SAT/ACT test dates, and enrollment milestones.</li>
            <li><strong>Student Events & Health Resources</strong> – Keep up with trends in education, campus activities, mental health tips, and career-readiness programs affecting college students today.</li>
            <li><strong>Internship Directory</strong> – Access a curated list of internship opportunities across various fields, along with resume-building advice and application strategies to help students gain real-world experience.</li>
            <li><strong>Helpful Articles</strong> – Read expert advice on preparing your child for college life, adjusting to independence, supporting their academic success, and navigating challenges such as homesickness and time management.</li>
        </ul>
        <p>Studysponsor is more than a free program for all educators that supports your efforts to guide students in finding ways to pay for school. As a StudySponsor Educator, you will gain access to helpful student resources – all for FREE.</p>
        <a href="parentrole.php" class="join-btn">Join Today</a>
    </div>
    </section>
</body>
</html>
