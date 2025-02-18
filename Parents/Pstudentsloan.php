<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types of Parent Student Loans</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6fbf7;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .container {
            width: 100%;
            max-width: 1400px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header-box {
            background-color:rgb(65, 243, 213);
            color: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 15px;
            width: 100%;
        }

        p {
            font-size: 18px;
            line-height: 1.8;
            color: #333;
        }

        .loan-type {
            display: flex;
            align-items: flex-start;
            margin-top: 20px;
        }

        .loan-type img {
            width: 50px;
            height: 50px;
            margin-right: 15px;
        }

        .loan-type h2 {
            margin: 0 0 10px 0;
            font-size: 22px;
            font-weight: bold;
            color: #000;
        }

        .sub-heading {
            font-size: 22px;
            font-weight: bold;
            margin-top: 30px;
            color: #004d40;
        }

        .info-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 10px;
        }

        .info-box {
            flex: 1;
            background: #f1f1f1;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            min-width: 45%;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .next-button {
            background-color: #00c853;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            text-decoration: none;
            display: inline-block;
        }

        .next-button:hover {
            background-color: #009624;
        }
.section-studnetlon{
    padding: 80px 0px;
}
    </style>
</head>
<body>
<?php include('navbar.php'); ?>
    <section class="section-studnetlon">
    <div class="header-box">Types of Parent Student Loans</div>
    <div class="container">
        <p>When it comes to finding the financial means to send their student to college, parents have student loan choices. There are two types of student loans available for parents—loans offered by the federal government and by private lenders:</p>

        <div class="loan-type">
            <img src="https://img.icons8.com/ios-filled/50/000000/university.png" alt="Direct PLUS Loans Icon">
            <div>
                <h2>Direct PLUS Loans</h2>
                <p>These parent loans Parent PLUS Loans are for eligible parents of dependent, undergraduate student(s) enrolled at least half-time. This parent-specific federal student loan is issued by the U.S. Department of Education.</p>
            </div>
        </div>

        <div class="loan-type">
            <img src="https://img.icons8.com/ios-filled/50/000000/bank.png" alt="Private Parent Loans Icon">
            <div>
                <h2>Private Parent Loans</h2>
                <p>Parents can seek supplemental education loans for their college student(s). Parents will need to shop for private Parent Student Loans, as interest rates and loan fees vary. A parent can apply for a private parent student loan through individual lenders.</p>
            </div>
        </div>

        <div class="sub-heading"><centre>Applying for Parent Student Loans</centre></div>
        <div class="info-container">
            <div class="info-box">
                <h3>Parent PLUS Student Loan Application Process</h3>
                <p>To apply for a Federal Parent PLUS loan, your student must file their FAFSA, and you will need a Parent Federal Student Aid ID (FSA ID). Most colleges accept the Parent PLUS online application form. Select your child’s school on the application to see if that school has an application process specific to parent loans.</p>
            </div>
            <div class="info-box">
                <h3>Private Parent Student Loan Application Process</h3>
                <p>The application process for private student loans varies by lender. Parents will need to apply for the private loan with the lender directly. Private loan options can be found on Studentaid.gov or from their school’s financial aid office.</p>
            </div>
        </div>

        <div class="sub-heading">How Do Parent Loans Fit into Your Financial Aid Plan?</div>
        <div class="info-container">
            <div class="info-box">
                <p>Families should have open conversations to evaluate how to pay for college. This process includes understanding how much money a parent and/or student will need to come up with to finance any costs not already covered by the student’s financial aid package.</p>
            </div>
            <div class="info-box">
                <p>Use financial aid and loan calculators to get clear insight into your financial situation and estimate your loan payments before accepting or declining components of your student’s financial aid award package.</p>
            </div>
        </div>

        <div class="button-container">
            <a href="financialaid.php" class="next-button">Next</a>
        </div>
    </div>
    </section>
</body>
</html>
