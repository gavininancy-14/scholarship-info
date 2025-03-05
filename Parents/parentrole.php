<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parent Loan Information</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap');

            body {
    font-family: Arial, sans-serif;
    font-size: 24px;
    margin: 0;
    padding: 0;
    background-color: rgb(209, 247, 250) !important;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            width: 80%;
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
        }
        .header-box {
            background-color:rgb(60, 230, 213);
            color: white;
            padding: 40px;
            text-align: center;
            border-radius: 20px;
            font-size: 26px;
            font-weight: 600;
        }
        h2 {
            text-align: center;
            color: #222;
            font-weight: 600;
        }
        p, ul {
            color: #444;
            line-height: 1.8;
            font-size: 18px;
        }
        .btns {
            display: block;
            width: 180px;
            text-align: center;
            background-color:rgb(14, 235, 25);
            color: white;
            padding: 12px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 800;
            margin: 20px auto;
            transition: 0.3s;
        }
        .btn:hover {
            background-color: #005ecb;
        }
        .content-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 20px;
        }
        .text-content {
            width: 55%;
        }
        .image-container {
            width: 40%;
            text-align: center;
        }
        .image-container img {
            width: 100%;
            border-radius: 10px;
        }
        .section-parent{
            padding: 70px 0px;
        }
        
    </style>
</head>
<body>
<?php include('navbar.php'); ?>

<section class="section-parent">
<div class="container">
    <div class="header-box">
        Parents Play a Big Role in Paying for College.
    </div>

    <h2>What is a Parent Loan?</h2>
    <p>A parent education loan is borrowed money used to cover any student-related college expenses not covered by parent savings, scholarships, and/or the financial aid package your child receives from their school.</p>

    <h2>Features of a Parent Loan</h2>
    <ul>
        <li>The loan is taken by parents or legal guardians on behalf of their child.</li>
        <li>It helps cover education-related expenses that are not covered by other sources.</li>
        <li>Repayment usually begins immediately, although some lenders offer deferment options.</li>
        <li>Interest rates vary depending on the lender and loan type.</li>
    </ul>

    <a href="Pstudentsloan.php" class="btns">Student Loans</a>

    <div class="content-container">
        <div class="text-content">
            <p>Paying for college involves more than just tuition; students also need to cover expenses like textbooks, room and board, and technology. While college savings plans and financial aid from the Free Application for Federal Student Aid (FAFSA) can help, there may still be a financial gap that families need to address. Fortunately, there are several options available to help bridge this gap.One of the best ways to reduce college costs is through scholarships and grants. Many organizations, colleges, and nonprofits offer merit-based and need-based financial aid that does not need to be repaid. Websites like Fastweb and Scholarships.com provide extensive databases of scholarships students can apply for. Grants, such as the Pell Grant, are available for students with financial need and can significantly reduce the overall cost of college.</p>
            <p>By combining scholarships, work opportunities, payment plans, loans, and smart financial strategies, families can make higher education more affordable. Planning ahead and exploring all available resources can help ensure that students can pursue their college education without overwhelming financial burdens.</p>
        </div>
        <div class="image-container">
            <img src="../images/parent.png" alt="Parent and Child">
        </div>
    </div>
</div>
</section>

</body>
</html>
