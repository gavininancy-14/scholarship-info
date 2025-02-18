<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>How Studysponsr Works</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: linear-gradient(45deg,rgb(154, 248, 255) 0%, #fad0c4 99%, #fad0c4 100%);
      margin: 0;
      padding: 0;
      background-color:rgb(152, 247, 236);
      display: flex;
      font-size: 20px;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .cta-button {
            padding: 10px 20px;
            font-size: 22px;
            background-color:rgb(57, 243, 88);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        

    .container {
      width: 90%;
      max-width: 1200px;
      text-align: center;
      font-size: 28px;
      line-height: 30px;
    }

    h1 {
      font-size: 32px;
      font-weight: bold;
      margin-bottom: 30px;
    }

    .steps {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 20px;
    }

    .step {
      flex: 1;
      max-width: 30%;
      text-align: center;
      background-color: #fff;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .step img {
      width: 80px;
      height: auto;
      margin-bottom: 15px;
    }

    .step h2 {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .step p {
      font-size: 14px;
      color: #555;
      line-height: 1.6;
    }

    .next {
      margin-top: 20px;
      text-align: right;
    }

    .next a {
      font-size: 14px;
      color: blue;
      text-decoration: none;
      font-weight: bold;
    }

    .next a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .steps {
        flex-direction: column;
        align-items: center;
      }

      .step {
        max-width: 100%;
      }
    }
  </style>
</head>
<body>
<?php include('navbar.php'); ?>
  <div class="container">
    <h1>How Studysponsr Works</h1>
    <div class="steps">
      <!-- Step 1 -->
      <div class="step">
        <img src="./images/w1.png" alt="Create Your Profile">
        <h2>Create Your Profile.</h2>
        <p>Use your strengths, skills, & background to create a profile in less than a minute. Your unique profile will be used to gather the scholarships best suited for you to apply for.</p>
      </div>
      <!-- Step 2 -->
      <div class="step">
        <img src="./images/w2.png" alt="See Your Scholarship Matches">
        <h2>See Your Scholarship Matches.</h2>
        <p>Merit-based, high school or college students, we find scholarships, match by interest, grade level, state, or ethnicity to help students reduce debt. Studysponsr covers all types of scholarships. Easily filter the portal for more custom matches. From this list, you'll know what scholarships you should apply for first.</p>
      </div>
      <!-- Step 3 -->
      <div class="step">
        <img src="./images/w3.png" alt="Apply. Get Money For College!">
        <h2>Apply. Get Money For College!</h2>
        <p>Studysponsr's advanced algorithm is designed to find you the right scholarships to apply for because your qualities matter. You stand the chance to save for college by increasing your chances of winning by applying early and often!</p>
      </div>
    </div>
    <div class="next">
      <a href="studentprofile.php" class="cta-button">Next</a>
    </div>
  </div>
</body>
</html>
