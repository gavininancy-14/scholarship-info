-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2025 at 11:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholarship`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_scholarship`
--

CREATE TABLE `add_scholarship` (
  `id` int(11) NOT NULL,
  `scholarship_name` varchar(255) NOT NULL,
  `award` varchar(255) NOT NULL,
  `deadline` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `provided_by` varchar(255) NOT NULL,
  `image_logo` varchar(255) NOT NULL,
  `website_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_scholarship`
--

INSERT INTO `add_scholarship` (`id`, `scholarship_name`, `award`, `deadline`, `description`, `provided_by`, `image_logo`, `website_url`) VALUES
(24, '$2,000 No Essay Scholarship by Sallie', '$2,000', '2025-02-28', 'Sallie will award $2,000 each month to eligible entrants. No essay or account profiles required. ', 'sallie', '../images/67a4949b6974a.png', 'https://www.sallie.com/scholarships/no-essay?utm_source=fastweb&utm_medium=affiliatepc&utm_campaign=la_acq_swp_u_u_u_u_u'),
(25, 'The $25,000 \"Be Bold\" No-Essay Scholarship', '$25,000', '2025-03-01', 'The $25,000 \"Be Bold\" No-Essay Scholarship. All students eligible. Apply in just a few clicks. Deadline upcoming!', '  Bold.org', '../images/67a57d67e9f51.png', 'https://bold.org/scholarships/the-be-bold-no-essay-scholarship/?utm_source=fastweb&utm_medium=cpc&utm_campaign=SpotlightCarousel#ref=top-new-scholarships'),
(26, 'Niche $25,000 \"No Essay\" Scholarship', '$25,000', '2025-03-31', 'Niche can help with every step of the college search, including paying for it. We\'re giving one student $25,000 to help cover tuition, housing, books and other college expenses - no essay required!', 'Niche', '../images/67a57ea156f93.png', 'https://www.niche.com/colleges/scholarships/25k-no-essay-scholarship-202503/?utm_source=Fastweb&utm_medium=affiliate&utm_campaign=FW25k_202503'),
(27, 'Enter to win a $5,000 Discover® Scholarship Award – No Essay Required', '$5,000 ', '2025-02-28', 'Feb. entry deadline: 2/28/25. Enter for your chance to win a $5,000 Discover Scholarship Award. Discover will randomly select one winner every month between September 3, 2024 and August 31, 2025. The earlier you enter, the more chances you have to win. Op', 'Discover', '../images/67a580213b1b6.png', 'https://discover.promo.eprize.com/discoversweeps24/?cmpgnid=af-sch-pro-fw-fsp&affiliate_id=af-sch-pro-fw-fsp&IQ_ID=fw-fsp'),
(30, 'Edvisors $2,500 Monthly Scholarship', '$2,500', '2025-03-15', 'One $2,500 scholarship is awarded each month. No GPA, no essay, and no hassle needed to win this scholarship. Simply sign up to be automatically entered into the scholarship.', 'edvisors', '../images/67b6fb1ad6afc.png', 'https://tracking.edvisors.com/aff_c?offer_id=2047&aff_id=1106'),
(31, 'Goodwall #ScholarshipNow Challenge', '$2,500', '2025-02-28', 'Participate in the #ScholarshipNow challenge for a chance to win $2,500! To participate, download the Goodwall app and simply share a video telling us how winning this scholarship would help you achieve your educational goals, on the hashtag #ScholarshipN', 'Goodwall', '../images/67b6feb3930bd.png', 'https://scholarshipusa.goodwall.io/');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `scholarship_name` varchar(255) NOT NULL,
  `sponsored_by` varchar(255) NOT NULL,
  `deadline` date NOT NULL,
  `award_amount` int(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `scholarship_name`, `sponsored_by`, `deadline`, `award_amount`, `description`) VALUES
(1, 'vidhyadhaan scholarship program', 'sallie', '2025-02-08', 2000, 'this scholarship for the interested students\n'),
(2, 'vidhyadhaan scholarship program', 'sallie', '2025-02-08', 2000, 'this scholarship for the interested students\n');

-- --------------------------------------------------------

--
-- Table structure for table `articals`
--

CREATE TABLE `articals` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `scholarship_title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `Category_name` varchar(255) NOT NULL,
  `detailed_scholarships` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articals`
--

INSERT INTO `articals` (`id`, `image`, `name`, `scholarship_title`, `date`, `Category_name`, `detailed_scholarships`) VALUES
(1, '../images/67a5dfa9c5bb1.png', 'Scholarships', '5 Scholarships to Apply for in 2025', '2025-02-27', '5 Scholarships to Apply for in 2025', 'Truman Scholars Programs: Deadline: 2/4/25  Award Amount: $30,000  The Truman Scholars Program is open to full-time students in their penultimate year of school interested in pursuing any graduate degree, other than the MBA, in a field that will likely le'),
(2, '../images/67a6210b70538.png', 'Scholarships ', 'Scholarships for College Students', '2025-02-03', 'Scholarships for College Students', '1. Goodwall#ScholarshipNow Challenge Participate in the #ScholarshipNow challenge for a chance to win $2,500! To participate, download the Goodwall app and simply share a video telling us how winning this scholarship would help you achieve your educationa'),
(3, '../images/67a621bdd0cfe.png', 'Scholarships', 'Quick and Easy Scholarships', '2024-12-02', 'Quick and Easy Scholarships', '1. Niche $50,000 \"No Essay\" Scholarship Help cover the cost of college without writing a single essay! Niche is giving one student $50,000 to help pay for tuition, housing, books, and other college expenses – no essay required!  Deadline: 12/31/24  Award '),
(4, '../images/67a622524da32.png', 'Scholarships', 'Need-Based Scholarships: What You Need to Know', '2024-12-20', 'Need-Based Scholarships: What You Need to Know', '1. QUAD City Regional Auto Show Scholarship Deadline: 1/19/25  Award Amount: $5,000  The Quad City Regional Auto Show Scholarship is available to students from eastern Iowa and western Illinois. You must have worked or have a relative who has worked for a'),
(7, '../images/67adacf68d03e.png', 'Scholarships ', '10 College Scholarships You Can Apply for Today', '2025-02-11', '10 College Scholarships You Can Apply for Today', 'Deadline: 2/15/25 Award Amount: $2,500 One $2,500 scholarship is awarded each month. No GPA, no essay, and no hassle needed to win this scholarship. Simply sign up to be automatically entered into the scholarsh'),
(8, '../images/67adc7375ba87.png', 'Scholarships', 'Scholarships We Love and You Will Too', '2025-02-11', 'Scholarships We Love and You Will Too', '\"Frame My Future\" Scholarship');

-- --------------------------------------------------------

--
-- Table structure for table `detailed_articles`
--

CREATE TABLE `detailed_articles` (
  `id` int(11) NOT NULL,
  `Category_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `award_amount` varchar(255) NOT NULL,
  `deadline` date NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detailed_articles`
--

INSERT INTO `detailed_articles` (`id`, `Category_name`, `title`, `award_amount`, `deadline`, `description`) VALUES
(1, '5 Scholarships to Apply for in 2025', '1. Truman Scholars Program ', '$30,000 ', '2025-02-04', '\r\nThe Truman Scholars Program is open to full-time students in their penultimate year of school interested in pursuing any graduate degree, other than the MBA, in a field that will likely lead to a career in public service.'),
(2, '5 Scholarships to Apply for in 2025', '2.The Christophers Video Contest for te College Students', '$2,000 ', '2025-02-13', '\r\nThe Christophers Video Contest for College Students is open to students currently enrolled in an undergraduate or graduate program. To be considered, you must create a five-minute film or video on the following theme: \"One Person Can Make a Difference.\"'),
(3, '5 Scholarships to Apply for in 2025', '3.RealtyHop Scholarship', '$1,000', '2025-04-30', 'The RealtyHop Scholarship is available to high school seniors and current undergraduate students. To be considered, you must submit a 500-word essay on the following topic: \"Imagine yourself 10 years in the future after having graduated college and living'),
(4, '5 Scholarships to Apply for in 2025', '4.Thermo Fisher Scientific Antibody Scholarship', '$5,000 - $10,000', '2025-04-30', 'The Thermo Fisher Scientific Antibody Scholarship is available to undergraduate and graduate students majoring in biology, chemistry, biochemistry, or a related life science. You must have a minimum 3.0 GPA to be eligible for this award.\r\n '),
(5, '5 Scholarships to Apply for in 2025', '5.Creativity Leads to Success Scholarship', '$750 - $1,250', '2025-06-15', 'The Creativity Leads to Success Scholarship is available to high school, college, and graduate students who are 18 years or older. To be considered, you must submit a maximum of 500-word essay that answers the following question: \"How has creativity helpe'),
(6, 'Scholarships for College Students', ' 1 . Goodwall#ScholarshipNow challenge', '$2,500', '2025-02-28', 'Participate in the #ScholarshipNow challenge for a chance to win $2,500! To participate, download the Goodwall app and simply share a video telling us how winning this scholarship would help you achieve your educational goals, on the hashtag #ScholarshipN'),
(7, 'Scholarships for College Students', '2 . Unboxing Your Life Video Scholarship', '$3,000', '2025-03-01', 'The \"Unboxing Your Life\" Video Scholarship is available to high school seniors, undergraduate, and graduate students. To be considered for this award, you must create a five - minute video based on the following prompt: \"This Is Who I Am: Unboxing My Life'),
(8, 'Scholarships for College Students', '3 . Frame My Future Scholarship Contest ', '$2,000', '2025-03-15', 'The Frame My Future Scholarship Contest is open to full - time undergraduate and graduate students. To enter, you must create and upload a 30 - second video from TikTok, Instagram, YouTube showing how you plan to \"Frame Your Future\" and why you will frame'),
(9, 'Scholarships for College Students', '4 .  Kailee Mills Foundation Scholarship Program ', '$20,000', '2025-03-15', 'The Kailee Mills Foundation Scholarship Program is open to high school seniors and current undergraduate students. You must complete a seat belt awareness campaign in your school and / or community to be considered for this award. You must also locate, me'),
(10, 'Scholarships for College Students', '5 .   Creativity Leads to Success Scholarship', '$750 - $1,250', '2025-06-15', 'The Creativity Leads to Success Scholarship is available to high school, college, and graduate students who are 18 years or older. To be considered, you must submit a maximum 500 - word essay that answers the following question: \"How has creativity helped'),
(11, 'QUICK AND EASY SCHOLARSHIPS', '1.  Niche $50,000 “No Essay” Scholarship ', '$50,000', '2024-12-31', 'Help cover the cost of college without writing a single essay! Niche is giving one student $50,000 to help pay for tuition, housing, books and other college expenses — no essay required! '),
(12, 'QUICK AND EASY SCHOLARSHIPS', '2 . The $25,000 “Be-Bold” No Essay Scholarship ', '$25,000', '2025-01-01', 'Build a profile at Bold.org to showcase your goals, achievements, and drive. The $25,000 \"Be Bold\" Scholarship is a no-essay scholarship that will be awarded to the applicant with the boldest profile. To us, boldest does not mean \"best,\" or \"most accompli'),
(13, 'QUICK AND EASY SCHOLARSHIPS', '3. Enter the Discover  Scholarship  Award     Sweepstakes-No essay Required', '$5,000', '2025-08-31', 'Enter now for a chance to win a $5,000 scholarship. Discover will randomly select one winner every month between September 3, 2024 and August 31, 2025. The earlier you enter, the more chances you have to win. Open to students and parents. NO PURCHASE OR C'),
(14, 'QUICK AND EASY SCHOLARSHIPS', '4. Liberty University $10k No Essay Scholarship Giveaway', '$10,000', '2025-03-31', 'What could you do with a $10,000 scholarship to Liberty University? Go further in your career? Become a leader in your industry? Change the lives of those around you? We are giving away up to five $10,000 scholarships for residential students. No essay is'),
(15, 'Need-Based Scholarships: What You Need to Know', '1.QUAD city regional Auto show scholarship:', ' $5,000', '2025-01-19', 'The Quad City Regional Auto Show Scholarship is available to students from eastern Iowa and western Illinois. You must have worked or have a relative who has worked for at least one year at a new car dealership located in the Foundation service area. You '),
(16, 'Need-Based Scholarships: What You Need to Know', '2.IMEG Engineering Scholarship Program:', '$10,000 ', '2025-03-14', ' The IMEG Engineering Scholarship Program is open to full - time, underrepresented sophomore, junior, and senior students. You must be pursuing a degree in engineering and demonstrate financial need to be eligible for this award. '),
(17, 'Need-Based Scholarships: What You Need to Know', '3.Herbert Lehman Education Fund Scholarship:', '$3,000', '2025-04-10', 'The Herbert Lehman Education Fund Scholarship is available to undergraduate students. You must demonstrate a record of academic achievement, qualities of leadership, a commitment to public service, and financial need to be considered for this award.'),
(18, 'Need-Based Scholarships: What You Need to Know', '4.Oregon Opportunity Grant :', '$900 - $7,500 ', '2025-04-10', 'Deadline: Rolling\r\n Award Amount: $900 - $7,500 \r\nThe Oregon Opportunity Grant is available to students of all ages who are pursuing their first associate or bachelor\'s degree at an eligible public or private institution. To be eligible for this award, yo'),
(19, 'Need-Based Scholarships: What You Need to Know', '5 . GHF Emerge Scholarship :', ' $1,000', '2025-04-10', ' The GHF Emerge Scholarship is available to students interested in pursuing a career in Nursing. You must demonstrate financial need and be a U.S. citizen or eligible non-citizen to be considered for this award.'),
(20, '10 College Scholarships You Can Apply for Today', '1.Edvisors $2,500 Monthly Scholarship', '2500', '2025-02-15', 'One $2,500 scholarship is awarded each month. No GPA, no essay, and no hassle needed to win this scholarship. Simply sign up to be automatically entered into the scholarship.\r\n'),
(21, '10 College Scholarships You Can Apply for Today', 'Fastweb\'s $2,025 Scholarship Success Sweepstakes', '2025', '2025-03-18', 'What\'s your scholarship application goal? Let us know for a chance to win a $2,025 scholarship! How to Enter: Be a Fastweb member. Answer a multiple-choice question. There\'s no wrong answer. Submit your entry by March 18, 2025. You can, and should, enter '),
(22, 'Scholarships We Love and You Will Too', 'Love Your Career Scholarship', '1000', '2025-09-10', 'The Love Your Career Scholarship is available to students attending an accredited college or university. You must submit an essay of between 1,000 and 3,000 words describing at least three steps that you plan to take in the next year to start a path towar');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `referral` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `role`, `dob`, `email`, `password`, `referral`) VALUES
(1, '', 'student', '2003-07-14', 'nancy@gmail.com', '12345', 'friends'),
(2, '', 'student', '2003-07-15', 'gavininancy@gmail.com', '907856', 'college'),
(3, '', 'parent', '2005-05-26', 'joicy@gmail.com', '123457', 'friends'),
(4, '', 'student', '2004-07-21', 'stella@gmail.com', '123421', 'friends'),
(12, '', 'student', '2025-02-02', 'd@gmail.com', '12345', 'search'),
(13, 'Priyanka', 'admin', '2002-02-06', 'admin@gmail.com', 'admin', ''),
(19, '', 'parent', '1987-07-14', 'nissy@gmail.com', '9078', 'friend'),
(20, 'Nissy', 'parent', '1987-07-14', 'nissy@gmail.com', '9078', 'friend'),
(21, 'Dhatchayani', 'student', '2002-10-18', 'dhatchu@gmail.com', 'dmine123', 'friend'),
(22, '', 'parent', '2025-02-11', 'dha@gmail.com', '123', 'friend'),
(23, '', 'student', '2022-02-14', 'rinsy@gmail.com', 'rinsy', 'ad'),
(24, '', 'student', '2025-02-20', 'dhatri@gmail.com', 'dhatri', 'search'),
(25, 'Sharon', 'parent', '1970-02-14', 'sharon@gmail.com', 'sharon', 'friend'),
(26, '', 'student', '2003-07-14', 'nancygavini@gmail.com', 'namcy', 'ad'),
(27, 'Nancy Gavini', 'student', '2003-07-14', 'nancygav@gmail.com', '$2y$10$cg4kV2WajHybYuHzDP85GOvSaQnG3kUkrS2dmrpZYSj4q.YgyZIgu', 'ad'),
(28, 'Mercy Grace Yalagala', 'student', '1995-11-29', 'mercygrace29@gmail.com', '$2y$10$90gz4jn0m0eAJbCo4/cx5eznDQEzeV2O3hB.S1.WfV85JF/4yGR5u', 'ad'),
(29, 'Grace Mani', 'parent', '1970-09-15', 'gracemani@gmail.com', '$2y$10$zjUXS/d/5RbZo/fC7oZ4.u6GWjmJzYieaocTcP0BG/450.PwAhQq.', 'search'),
(30, 'Israel', 'parent', '1972-06-15', 'israel@gmail.com', '$2y$10$ClxXrohx0ls4ibtRknuVUu.2gvSxKj/TaoOrGtDE8oLgqriepL6TO', 'ad');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `parent_name` varchar(255) NOT NULL,
  `parent_occupation` varchar(255) NOT NULL,
  `annual_income` int(11) NOT NULL,
  `current_studying` varchar(255) NOT NULL,
  `cgpa_percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`id`, `name`, `email`, `category`, `contact_number`, `parent_name`, `parent_occupation`, `annual_income`, `current_studying`, `cgpa_percentage`) VALUES
(3, 'Nancy Gavini', 'gavininancy@gmail.com', 'OBC', 2147483647, 'israel', 'Private Sector', 2000000, '12th', 9),
(5, 'Beulah', 'gavininancy0285.sse@saveetha.com', 'OBC', 1236547890, 'venky', 'Private Sector', 40000, '12th', 10),
(7, 'jessy', 'j@gmail.com', 'OBC', 2147483647, 'israel', 'Private Sector', 4000000, '12th', 8),
(9, 'nicy', 'n@gmail.com', 'OBC', 2147483647, 'john', 'Private Sector', 345678, '12th', 10),
(10, 'Joicy', 'joicy@gmail.com', 'OBC', 2147483647, 'james', 'Government Sector', 789489, '12', 8),
(11, 'Joicy', 'joicy@gmail.com', 'OBC', 2147483647, 'james', 'Government Sector', 789489, '12', 8),
(12, 'Joicy', 'joicy@gmail.com', 'OBC', 2147483647, 'james', 'Government Sector', 789489, '12', 8),
(13, 'chelsy', 'chelsy@gmail.com', 'OC', 2147483647, 'john', 'Private Sector', 5000000, '12th', 9),
(14, 'chelsy', 'chelsy@gmail.com', 'OC', 2147483647, 'john', 'Private Sector', 5000000, '12th', 9),
(16, 'chelsy', 'chelsy@gmail.com', 'OBC', 2147483647, 'john', 'Private Sector', 4000000, '12th', 9),
(17, 'chelsy', 'chelsy@gmail.com', 'OBC', 2147483647, 'john', 'Private Sector', 4000000, '12th', 9),
(18, 'felsy', 'felsy@gmail.com', 'OBC', 2147483647, 'john', 'Private Sector', 480000, '12', 10),
(20, 'stacy', 'stacy@gmail.com', 'OC', 2147483647, 'kaleb', 'Government Sector', 480000, 'bsc', 10),
(21, 'nanu', 'nanc@gmail.com', 'OBC', 2147483647, 'israel', 'Government Sector', 1234567, '12', 10),
(22, 'Nicy Gavini', 'nicy@gmail.com', 'OC', 7, 'israel', 'Private Sector', 3456789, '12th', 10),
(23, 'stella', 'stella@gmail.com', 'BC', 789456987, 'dinakaran', 'Private Sector', 1236987, 'btech', 10),
(24, 'keerthana', 'keerthi@gmail.com', 'OBC', 345678098, 'rajesh', 'Private Sector', 7896321, '12', 10),
(25, 'keethana', 'keerthi@gmail.com', 'OBC', 2147483647, 'rajesh', 'Private Sector', 74136985, 'btech', 10),
(26, 'princy', 'princy@gmail.com', 'OBC', 789456987, 'kranthi', 'Private Sector', 7412369, 'btech', 10),
(27, 'Dhatri', 'dhatri@gmail.com', 'OC', 2147483647, 'krishna', 'Business', 7029745, '12th', 10),
(28, 'sresta', 'sresta@gmail.com', 'OC', 2147483647, 'paul', 'Private Sector', 789654, '12th', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_scholarship`
--
ALTER TABLE `add_scholarship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articals`
--
ALTER TABLE `articals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detailed_articles`
--
ALTER TABLE `detailed_articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_scholarship`
--
ALTER TABLE `add_scholarship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `articals`
--
ALTER TABLE `articals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `detailed_articles`
--
ALTER TABLE `detailed_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
