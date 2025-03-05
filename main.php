<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Find Scholarships For Students</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(206, 235, 243);
        }
        header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    background-color: lightblue;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.logo {
    font-size: 24px;
    font-weight: bold;
    color: #FFA500;
}
        button {
    border: none;
    padding: 12px 20px;
    font-size: 16px;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s ease-in-out;
}

.btn-light-green {
    background-color: #32CD32;
    color: white;
}

.btn-light-green a {
    color: white;
    text-decoration: none;
}

.btn-light-green:hover {
    background-color: #2E8B57;
}

        .hero {
            background: url('images/scholarship-bg.jpg') no-repeat center center;
            background-size: cover;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero h1 {
            font-size: 3rem;
            animation: fadeInDown 1s ease-in-out;
        }

        .hero p {
            font-size: 1.2rem;
            animation: fadeInUp 1.5s ease-in-out;
        }

        .cta {
            background-color: #ffa500;
            color: white;
            padding: 15px 25px;
            border: none;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        a {
            text-decoration: none;
            color: #fff;
        }

        .rounded {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
    </style>
</head>

<body>

    <header class="d-flex justify-content-between align-items-center p-3 bg-white shadow-sm">
        <div class="logo text-warning fs-4 fw-bold">StudySponsor</div>
        <div>
        <button class="btn btn-light-green"><a href="registration.php">Sign up</a></button>
<button class="btn btn-light-green"><a href="login.php">Login</a></button>

        </div>

    </header>

    <section class="hero">
        <div>
            <h1>Find <span class="text-warning">Scholarships</span> for college</h1>
            <p>Finding college scholarships shouldn't be overwhelming. We make it simple and easy.</p>
            <button class="cta"><a href="details.php">Find Scholarships Now</a></button>
        </div>
    </section>

    <section class="container my-4 text-center bg-white p-4 shadow rounded">
        <h2>What is StudySponsor?</h2>
        <p>The leading scholarship database, our platform is designed to simplify the scholarship search for high school and college students. No more digging to find scholarships you qualify for. Students create a profile and get personalized scholarship recommendations.

StudySponsor isn't just for scholarships. We provide students and their parents with helpful information to help them navigate their educational journeys—from college or trade school, throughout college and/or graduate school, and into a career.</p><br>

<p>Our platform offers guidance on financial aid, college admissions, and career planning to help students make informed decisions about their future. We also provide tips on crafting winning scholarship applications, writing compelling essays, and preparing for interviews. Whether you're a first-time applicant or a returning student, StudySponsor makes the scholarship process easier and more accessible. Plus, we continuously update our database to ensure you never miss out on new opportunities!</p>
    </section>

    <section class="container my-4 text-center bg-white p-4 shadow rounded">
    <h2>How StudySponsor Works</h2>
    <div class="row d-flex align-items-stretch">
        <div class="col-md-4 d-flex">
            <div class="card h-100 d-flex flex-column" style="width: 25rem;">
                <img src="images/h1.png" class="card-img-top" alt="Create Profile">
                <div class="card-body d-flex flex-column">
                    <p class="card-text flex-grow-1">
                        <span style="font-weight:bold;text-transform:uppercase;font-size:22px">Create your profile </span><br> After signing up, you'll customize your profile by answering a few simple questions about your academic background, extracurricular activities, interests, and career goals. This helps us match you with scholarships that align with your achievements, skills, and aspirations. The more details you provide, the better your chances of finding scholarships tailored to you. 
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex">
            <div class="card h-100 d-flex flex-column" style="width: 25rem;">
                <img src="images/h 2.png" class="card-img-top" alt="Scholarship Matches">
                <div class="card-body d-flex flex-column">
                    <p class="card-text flex-grow-1">
                    <span style="font-weight:bold;text-transform:uppercase;font-size:22px">Get instant scholarship matches </span><br> Once you've completed your profile, our advanced matching system instantly scans our extensive scholarship database to find opportunities tailored to your strengths, interests,and skills. You'll receive a personalized list of scholarships that best match your qualifications, saving you hours of searching.We help you discover scholarships that recognize your unique talents.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 d-flex">
            <div class="card h-100 d-flex flex-column" style="width: 25rem;">
                <img src="images/h4.png" class="card-img-top" alt="Apply and Get Money">
                <div class="card-body d-flex flex-column">
                    <p class="card-text flex-grow-1">
                    <span style="font-weight:bold;text-transform:uppercase;font-size:22px">Apply and get money for college!</span><br> Each time you log in, you're greeted with new scholarship matches and the total value of the scholarships you qualify for. Filter through your list, save those you're interested in, and start applying for scholarships. Our platform provides direct links to application pages, deadlines, and eligibility requirements to make the process easier. Stay organized by tracking your applications, setting reminders for upcoming deadlines.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

    <footer class="text-center bg-primary text-white p-3">
    <button class="btn btn-light-green"><a href="studysponsrwork.php">Join For Free</a></button>

    </footer>
</body>

</html>