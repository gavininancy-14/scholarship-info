<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Aid Information</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(209, 247, 250) !important;
            display: flex;
            justify-content: center;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 95%;
            max-width: 1400px;
            margin-top: 30px;
        }
        .header {
            background-color:rgb(69, 246, 225);
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            font-size: 38px;
            font-weight: bold;
            color: #000;
        }
        .sub-header {
            font-size: 26px;
            font-weight: bold;
            text-align: center;
            margin-top: 10px;
        }
        .image-container {
            text-align: center;
            margin: 15px 0;
        }
        img {
            width: 80%;
            border-radius: 10px;
        }
        .content {
            display: flex;
            justify-content: space-between;
        }
        .column {
            width: 48%;
        }
        .pros, .cons {
            background-color: #f8f9fa;
            font-size: 18px;
            line-height: 26px;
            padding: 10px;
            border-radius: 5px;
        }
        p {
            color: #333;
            line-height: 1.6;
            font-size: 20px;
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .button {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 20px;
        }
        .section-finiancial{
            padding: 90px 0px;
        }
    </style>
</head>
<body>
<?php include('navbar.php'); ?>
    <section class="section-finiancial">
    <div class="container">
        <div class="header">Consider and evaluate the pros and cons of federal and private parent loans for college below:</div>
        
        <h2>Direct PLUS Loans</h2>
        <div class="content">
            <div class="column pros">
                <h3>Pros:</h3>
                <ul><style font-size:18px line-height:24px></style>
                    <li>Fixed interest rate for the loan term.</li>
                    <li>Variety of repayment options available, including payment deferment.</li>
                    <li>Eligible for Public Service Loan Forgiveness (PSLF) if consolidated under a Direct Consolidation Loan.</li>
                    <li>Borrow up to the cost of attendance after financial aid is applied.</li>
                    <li>Not income-dependent, but a credit check is required.</li>
                </ul>
            </div>
            <div class="column cons">
                <h3>Cons:</h3>
                <ul><style font-size:18px line-height:24px></style>
                    <li>Highest rates of any federal student loan.</li>
                    <li>Loan accrual while the student is in school unless payments begin immediately.</li>
                    <li>Loan origination fee upwards of 4% based on the loan amount.</li>
                    <li>Parents are responsible for repayment.</li>
                </ul>
            </div>
        </div>
        
        <h2>Private Parent Loans</h2>
        <div class="content">
            <div class="column pros">
                <h3>Pros:</h3>
                <ul><style font-size:18px line-height:24px></style>
                    <li>A completed FAFSA is not needed.</li>
                    <li>Loan interest rates are sometimes lower than federal Direct PLUS Loans.</li>
                    <li>You may be able to add your student as a cosigner.</li>
                    <li>Zero or low loan origination fees.</li>
                </ul>
            </div>
            <div class="column cons">
                <h3>Cons:</h3>
                <ul><style font-size:18px  line-height:24px></style>
                    <li>Parents typically need high credit scores.</li>
                    <li>A specific income level and/or cosigner may be required.</li>
                    <li>May only borrow up to the cost of attendance.</li>
                    <li>Variable interest rates.</li>
                </ul>
            </div>
        </div>
        
        <div class="sub-header">Financial Aid Information for Parents</div>
        <p>There are many options to help your family, or your child, pay for a college education. A final stage in the college decision process includes evaluating the financial aid award letters from the schools your child is considering attending. Many parents don’t know their child can appeal their financial aid package!</p>
        <div class="image-container">
            <img src="../images/p3.png" alt="Financial Aid Information">
        </div>
        
        <p>Student loans should be your last resort when paying for college, as they can lead to long-term debt that may take years to repay. Before considering student loans, students and parents should explore other financial aid options, such as scholarships, grants, and work-study programs, which do not require repayment.</p>
        <p>However, if student loans are necessary, federal student loans are typically a better option than private loans, as they offer lower interest rates, flexible repayment plans, and borrower protections like deferment and income-driven repayment options. Private loans, on the other hand, often have higher interest rates and less flexible repayment terms.</p>
        <p>Parents and students should avoid using credit cards to cover college expenses because credit cards usually have higher interest rates and no structured repayment options like student loans. Relying on credit cards can lead to high-interest debt that accumulates quickly, making it harder to manage finances after graduation.</p>
        <p>It’s essential to plan ahead by researching financial aid options, budgeting wisely, and seeking guidance from school financial aid offices to minimize the need for borrowing and reduce future financial burdens.</p>
        
        <div class="button-container">
            <a href="apply.php" class="button">Scholarships</a>
        </div>
    </div>
    </section>
</body>
</html>
