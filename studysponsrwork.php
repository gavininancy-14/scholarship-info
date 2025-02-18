<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudySponsor Scholarships</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(45deg,rgb(154, 248, 255) 0%, #fad0c4 99%, #fad0c4 100%);
            margin: 0;
            padding: 0;
            font-size: 16px;
            line-height: 20px;
        }
        .container {
            max-width: 1300px;
            background-color:rgb(227, 239, 245);
            padding: 20px;
            margin: 20px auto;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .text-content {
            width: 100%;
        }
        h1 {
            color: black;
        }
        h1 span {
            color: blue;
        }
        .content h2 {
            color: black;
        }
        .content p {
            color: #333;
        }
        .highlight {
            font-weight: bold;
        }
        .image-container {
            width: 100%;
            text-align: center;
        }
        .image-container img {
            width: 100%;
            border-radius: 10px;
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .button {
            display: inline-block;
            background-color: #ff9900;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 22px;
            font-weight: bold;
            border-radius: 25px;
        }
        .section-study{
            padding: 90px 0px;
        }
    </style>
</head>
<body>
<?php include('navbar.php'); ?>

    <section class="section-study">
    <div class="container">
        <div class="text-content">
            <h1><centre>StudySponsor <span>does the work</span> for you</centre></h1>
            <div class="content">
                <h2>Scholarship Research Team</h2>
                <p>What sets StudySponsor apart from other scholarship search sites is our team of researchers. Every scholarship in our database has been researched and vetted by a team of real people.</p>
                <p class="highlight">1. HUMAN-VETTED SCHOLARSHIPS</p>
                <p>Unlike other platforms that rely on automated web scraping, StudySponsor employs real researchers to manually verify every scholarship in its database. This ensures that students only see legitimate opportunities and avoid scams or expired listings.</p>
                <p class="highlight">2. SCAM-FREE SCHOLARSHIP LISTINGS</p>
                <p>StudySponsor guarantees that all listings are authentic and trustworthy by cross-checking sources, eligibility criteria, deadlines, and funding organizations before adding them to the platform.</p>
                <p class="highlight">3. PERSONALIZED SCHOLARSHIP SUPPORT</p>
                <p>Users get their own team of researchers who curate scholarships based on their profile, qualifications, and interests—completely free of charge.</p>
                <p class="highlight">4. EXTENSIVE AND UP-TO-DATE DATABASE</p>
                <p>We maintain a huge and continuously updated database to ensure students have access to the latest scholarship opportunities.</p>
                <p class="highlight">5. ZERO COST FOR STUDENTS</p>
                <p>Unlike some services that charge for premium access, StudySponsor provides all its research-backed scholarship information at no cost to users.</p>
            </div>
        </div>
        <div class="image-container">
            <img src="images/ssponsr.png" alt="Research Scholarships">
        </div>
    </div>
    </section>
    <div class="button-container">
        <a href="articles.php" class="button">Find Scholarships Now</a>
    </div>
</body>
</html>
