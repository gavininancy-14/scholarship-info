<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Search</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(209, 247, 250) ;
            margin: 0;
            padding: 0;
            background-color:rgb(222, 245, 249);
            font-size: 18px;
            text-align: center;
        }
        .container {
            max-width: 1300px;
            margin: 70px auto;
            background-color:rgb(255, 255, 255);
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            color: #4a90e2;
            margin-bottom: 50px;
            font-size: 56px;
        }
        .content {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 30px;
        }
        .content div {
            flex: 1;
            text-align: left;
            line-height: 1.8;
        }
        .content div:first-child {
            border-right: 1px solid #ddd;
            padding-right: 20px;
        }
        .content div:last-child {
            padding-left: 20px;
        }
        p {
            color: #333;
            margin: 0 0 15px;
        }
        .cta {
            font-size: 26px;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .btn {
            display: inline-block;
            background-color: #ff6f00;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 28px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #e65c00;
        }
        .section-profile{
            padding: 20px 0px;
        }
    </style>
</head>
<body>
<?php include('navbar.php'); ?>

    <section class="section-profile">
    <div class="container">
        <h1>Create your FREE student profile.</h1>
        <div class="content">
            <div>
                <p>Gain access to the world’s largest and trusted scholarship database. Accessing a comprehensive scholarship database can significantly enhance your chances of securing financial aid for your studies. While StudySponsor offers an extensive collection of scholarships, there are other reputable platforms you might consider</p>
                <p>Use our free scholarship search to find real and generous awards, just like these past winners did! Whether you're a high school student, college undergraduate, or graduate student, there are countless scholarship opportunities waiting for you. These scholarships can help cover tuition, books, housing, and other education-related expenses, making your college journey more affordable.Log into your StudySponsor account daily to maximize your chances of securing financial aid. From your personalized dashboard, you can explore a wide range of scholarships tailored to your qualifications, track application deadlines, and receive alerts about new opportunities.</p>
                <p>Our platform makes it easy to apply, ensuring that you never miss out on funding that could help you achieve your academic and career goals.Don't let financial obstacles stand in your way—start searching for scholarships today and take control of your future. With thousands of awards available, you could be the next scholarship winner! Apply now and invest in your education with the support of StudySponsor.</p>
            </div>
            <div>
                <p>In addition to providing access to a vast database of scholarships, many platforms, including StudySponsor, offer features that allow users to customize their search and track their applications effectively.
              You can filter scholarships based on your academic background, field of study, location, financial need, and other criteria.</p>
                <p>Scholarship programs don’t just give away money for college—you must actively search for and apply to them to secure financial aid. Finding the right scholarship is just the first step; once you identify an opportunity that matches your academic achievements, background, or interests, it’s essential to carefully review the eligibility criteria, required documents, and deadlines. Each scholarship may have specific application requirements, such as essays, recommendation letters, transcripts, or proof of financial need. Clicking on a scholarship listing provides detailed information on how to apply, including submission instructions and links to official application portals.</p>
                <p>To maximize your chances of winning scholarships, it’s important to stay organized by preparing strong applications, and applying to multiple opportunities. StudySponsor provides tools to help students streamline this process, including personalized scholarship matching, and expert tips on crafting compelling applications. If you still have questions, StudySponsor offers additional resources and guides on how to navigate the scholarship application process, ensuring you have all the information needed to succeed in securing funding for your education.                </p>
            </div>
        </div>
        <div class="cta">Let your scholarship search begin.</div>
        <a href="featuredscholarship.php" class="btn">Find Scholarships</a>
    </div>
    </section>
</body>
</html>
