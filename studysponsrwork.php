<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudySponsor Scholarships</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(209, 247, 250) ;
            margin: 0;
            padding: 0;
            font-size: 18px;
        }

        /* Navbar Spacing Fix */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background: white; /* Ensure navbar is visible */
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Title Styling */
        .title-container {
            text-align: center;
            padding-top: 100px; /* Push title down so it's visible */
            margin-bottom: 20px;
        }

        .title-container h1 {
            font-size: 52px;
            font-weight: bold;
            color: black;
        }

        .title-container h1 span {
            color: blue;
        }

        /* Container Styling */
        .container-box {
            max-width: 1400px;
            background-color: rgb(255, 255, 255);
            padding: 30px;
            margin: 20px auto;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .text-content {
            width: 55%;
        }

        .image-container {
            width: 50%;
            text-align: center;
        }

        .image-container img {
            width: 100%;
            border-radius: 10px;
        }

        .content h2 {
            color: black;
        }

        .content p {
            color: #333;
            line-height: 1.5;
        }

        .highlight {
            font-weight: bold;
            color: #007bff;
        }

        /* Button Styling */
        .button-wrapper {
            text-align: center;
            margin-top: 20px;
        }

        .button {
            display: inline-block;
            background-color: #ff9900;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            border-radius: 30px;
            transition: background 0.3s ease-in-out;
        }

        .button:hover {
            background-color: #e68a00;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .container-box {
                flex-direction: column;
                text-align: center;
            }
            .text-content, .image-container {
                width: 100%;
            }
        }
        .section-study{
            padding:20px;

        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <!-- Centered Title -->
    <div class="title-container">
        <h2>  What makes StudySponsr better</h2>
        <h1>StudySponsor <span>does the work</span> for you</h1>
    </div>

    <!-- Main Content Section -->
    <section class="section-study">
        <div class="container-box">
            <div class="text-content">
                <h2>Scholarship Research Team</h2>
                <p>What sets StudySponsor apart from other scholarship search sites is our team of researchers. Every scholarship in our database has been researched and vetted by a team of real people.</p>
                <p class="highlight">1. HUMAN-VETTED SCHOLARSHIPS</p>
                <p>Unlike other platforms that rely on automated web scraping, StudySponsor employs real researchers to manually verify every scholarship in its database.</p>
                <p class="highlight">2. SCAM-FREE SCHOLARSHIP LISTINGS</p>
                <p>We cross-check sources, eligibility criteria, deadlines, and funding organizations before adding them to our platform.</p>
                <p class="highlight">3. PERSONALIZED SCHOLARSHIP SUPPORT</p>
                <p>Users get their own team of researchers who curate scholarships based on their profile, qualifications, and interests.</p>
                <p class="highlight">4. EXTENSIVE AND UP-TO-DATE DATABASE</p>
                <p>We maintain a huge and continuously updated database to ensure students have access to the latest scholarship opportunities.</p>
                <p class="highlight">5. ZERO COST FOR STUDENTS</p>
                <p>Unlike some services that charge for premium access, StudySponsor provides all its research-backed scholarship information at no cost to users.</p>

                <!-- Find Scholarships Button -->
                <div class="button-wrapper">
                    <a href="articles.php" class="button">Find Scholarships Now</a>
                </div>
            </div>

            <!-- Image Section -->
            <div class="image-container">
                <img src="images/ssponsr.png" alt="Research Scholarships">
            </div>
        </div>
    </section>

</body>
</html>
