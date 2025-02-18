<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Find scholarships with Studysponsor and reduce the cost of college through a parent-student partnership.">
    <title>Applying for Scholarships</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f7f6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 1400px;
            width: 90%;
            text-align: left;
        }
        .header {
            background: #cce5ff;
            padding: 15px;
            font-size: 28px;
            font-weight: bold;
            border-radius: 10px;
            text-align: center;
        }
        .content {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 20px;
            margin-top: 20px;
        }
        .text {
            flex: 1;
            font-size: 18px;
            line-height: 1.5;
        }
        .image {
            flex: 1;
            display: flex;
            justify-content: center;
        }
        .image img {
            width: 100%;
            max-width: 600px;
            height: auto;
            border-radius: 10px;
            object-fit: cover;
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .button {
            display: inline-block;
            background-color: #ff9800;
            color: white;
            padding: 12px 25px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 22px;
            transition: 0.3s;
        }
        .button:hover {
            background-color: #e68900;
        }
        @media (max-width: 768px) {
            .content {
                flex-direction: column;
                text-align: center;
            }
            .image {
                width: 100%;
            }
        }
        .section-apply{
            padding: 90px 0px;
        }
    </style>
</head>
<body>
<?php include('navbar.php'); ?>
    <section class="section-apply">
    <div class="container">
        <div class="header">
            <h1>Applying for Scholarships</h1>
        </div>
        <div class="content">
            <div class="text">
                <p>There are many ways to help lower the cost of college for your student; start with the scholarship search. Create a Studysponsor parent profile and encourage your child to create their own Studysponsor profile too. A parent-student partnership is a fantastic way to support your student's scholarship-application efforts.</p>
                <p>Studysponsor simplifies the scholarship search by using the student’s profile to automatically match them with relevant opportunities. Instead of spending countless hours browsing through scholarships that may not be a good fit, students receive a curated list of scholarships they are eligible for. This smart matching process increases efficiency and helps students focus on applying rather than searching. By eliminating unnecessary guesswork, Studysponsor streamlines the path to securing financial aid.</p>
                <p>Another major advantage of Studysponsor is the time-saving nature of the platform. Searching for scholarships manually can be overwhelming, but Studysponsor makes it easy by presenting a customized selection of scholarships that align with the student's profile. This means students can apply to multiple scholarships without wasting time on those they don’t qualify for. With a more focused approach, students can maximize their chances of winning scholarship funds.</p>
                <p>Parental involvement in the scholarship process can make a significant difference in a student's success. When parents take an active role by monitoring available scholarships and encouraging their child to apply, students are more likely to stay on track with deadlines. A parent-student partnership creates a structured approach to scholarship applications, leading to more opportunities for financial support. With the help of Studysponsor, families can work together to reduce the financial burden of college and make higher education more affordable.</p>
            </div>
            <div class="image">
                <img src="../images/b3.png" alt="Scholarship Information">
            </div>
        </div>
        <div class="button-container">
            <a href="featuredscholarship.php" class="button">Find Scholarships</a>
        </div>
    </div>
    </section>
</body>
</html>
