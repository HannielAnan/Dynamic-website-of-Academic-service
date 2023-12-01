-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 02:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theexperts`
--

-- --------------------------------------------------------

--
-- Table structure for table `index`
--

CREATE TABLE `index` (
  `table` varchar(250) NOT NULL,
  `id` int(11) NOT NULL,
  `box` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `index`
--

INSERT INTO `index` (`table`, `id`, `box`) VALUES
('Table of Contents', 1, 'Best Dissertation Writing Help UK'),
('The 1st Choice for Help with Dissertation', 2, 'Free & Well Researched Topics'),
('What Makes Us The Best\r\nDissertation Help Service UK?', 3, 'UK Dissertation Native Writers'),
('How To Place Your Order?', 4, 'Unlimited FREE Revisions'),
('Subject Area Expertise and Samples', 5, 'Get 25% OFF On your 1st Order'),
('Quality Head Profile', 6, ''),
('Chapters in a Dissertation', 7, ''),
('What do we offer?', 8, ''),
('Dissertation Writing Help Reviews', 9, ''),
('FAQS', 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `index2`
--

CREATE TABLE `index2` (
  `3boxes` varchar(250) NOT NULL,
  `reviews` varchar(250) NOT NULL,
  `id` int(11) NOT NULL,
  `para` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `index2`
--

INSERT INTO `index2` (`3boxes`, `reviews`, `id`, `para`) VALUES
('Data Confidentiality', 'God knows how astounding it was when I decided to take help from DWH and their amazing writers! My 4-year academic journey has been made flawless.', 1, '100% Compliance of UK Data security’s Rule & Regulation, We are highly compliant writing company in London managing data security of our clients.'),
('Ph.D. Dissertation Specialists Writer', 'Struggling from heavy expense I wanted to buy affordable dissertation UK based and luckily I crossed my path here. No extra expenses.', 2, '100% Compliance of UK Data security’s Rule & Regulation, We are highly compliant writing company in London managing data security of our clients.'),
('24/7 Customer Support', 'No doubt that these people have such big fan following because recently I’ve also been a part of it. What is not to like? All in favor of us!', 3, 'Being UK Best Writing Company we assure availability of customer support functioning 24-hours to assist you in any query faced regarding any complication.');

-- --------------------------------------------------------

--
-- Table structure for table `index3`
--

CREATE TABLE `index3` (
  `id` int(11) NOT NULL,
  `heading` varchar(150) NOT NULL,
  `text` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `index3`
--

INSERT INTO `index3` (`id`, `heading`, `text`) VALUES
(1, 'Why We Are Always The First Choice For Dissertation Help UK?', 'Dig out the reasons why we are the most authentic platform for online help for dissertation shared by our clients.');

-- --------------------------------------------------------

--
-- Table structure for table `index4`
--

CREATE TABLE `index4` (
  `id` int(11) NOT NULL,
  `heading1` varchar(120) NOT NULL,
  `subheading1` varchar(120) NOT NULL,
  `text1` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `index4`
--

INSERT INTO `index4` (`id`, `heading1`, `subheading1`, `text1`) VALUES
(1, 'What Makes Us The Best Dissertation Help Service UK Is Proud To Carry!', 'Your Order Is Our Priority', 'Your orders are processed as soon as they reach us, no queues and no more waiting.'),
(2, '', 'Everything Goes Through Field Experts First', 'Your orders are processed as soon as they reach us, no queues and no more waiting.'),
(3, '', 'We Have the Best Ph.D. Writers From UK’s Top Universities', 'Your orders are processed as soon as they reach us, no queues and no more waiting.'),
(4, '', 'Don’t Worry About Plagiarism', 'Your orders are processed as soon as they reach us, no queues and no more waiting.'),
(5, '', 'Quality and Safety Assurance\r\n', 'Your orders are processed as soon as they reach us, no queues and no more waiting.'),
(6, '', 'Your Order Is Our Priority', 'Order Anytime Using Any Device');

-- --------------------------------------------------------

--
-- Table structure for table `index5`
--

CREATE TABLE `index5` (
  `id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `subheading` varchar(50) NOT NULL,
  `para` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `index5`
--

INSERT INTO `index5` (`id`, `heading`, `subheading`, `para`) VALUES
(1, 'Easily Place Your Order', '1. Tell Us What You Need', 'Our talented writers are waiting to ace your dissertations in every subject with'),
(2, '', '2. Pay The Way You Want To', 'We have hassle-free payment methods you can pay upfront using credit/debit card and PayPal.'),
(3, '', '3. Get In Touch With The Best Writer For You!', 'We will let you get in touch with the best writer according to the subject you need dissertation help with immediately after payment method.'),
(4, '', '4. Get Your Dissertation Back At You ASAP!', 'You will receive your high-quality dissertation as soon as it passes through our quality assurance & check for plagiarisms and mistakes.'),
(5, '', '5. Slay The Grades!', 'Now that we have done your dissertation, you can sit back and chill because everyone who has taken dissertation help service has gotten the top grades!');

-- --------------------------------------------------------

--
-- Table structure for table `index6`
--

CREATE TABLE `index6` (
  `id` int(11) NOT NULL,
  `tab1` varchar(50) NOT NULL,
  `heading1` varchar(150) NOT NULL,
  `para1` varchar(250) NOT NULL,
  `li1` varchar(250) NOT NULL,
  `li2` varchar(250) NOT NULL,
  `li3` varchar(250) NOT NULL,
  `li4` varchar(250) NOT NULL,
  `li5` varchar(250) NOT NULL,
  `li6` varchar(250) NOT NULL,
  `li7` varchar(250) NOT NULL,
  `li8` varchar(250) NOT NULL,
  `li9` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `index6`
--

INSERT INTO `index6` (`id`, `tab1`, `heading1`, `para1`, `li1`, `li2`, `li3`, `li4`, `li5`, `li6`, `li7`, `li8`, `li9`) VALUES
(1, 'Management & Marketing', 'Dissertation Assignment Writing Help Online', 'Our Marketing & Management specialists are providing help writing a dissertation, covering multiple aspects of each course. Their expertise is widely ranged including:', 'Marketing Mix with 4P’s', 'BCG Matrix along with 5 Marketing Concepts', 'Product Growth Cycle', 'SWOT Analysis', 'Strategic Human Resource Management Tools', 'High-Performance Work Systems (HPWS)', 'Performance Management & Tactics with Retention Strategies', 'Business Process Reengineering & Succession Planning', 'Gantt Chart & Hawthorne Effect'),
(2, 'Nursing', 'Nursing Dissertation Help Online', 'Our panel of highly experienced nursing specialists are keen to provide help for dissertation writing with expertise in all nursing fields including:', 'Anatomy', 'Physiology\r\n', 'Biochemistry\r\n', 'Nutrition\r\n', 'Pathology & Genetics', 'Midwifery and Obstetrical Nursing\r\n', 'Nursing Research and Statistics\r\n', 'Medical-Surgical Nursing\r\n', 'First Aid with Applied Science and Pharmacology'),
(3, 'Law', 'Law', 'Only the law experts are handling your dissertations and solving each query with a perfectly drawn solution for your help with dissertation in any field of law.', 'Bankruptcy Taxation', 'Civil & Criminal Law\r\n', 'State & Local Taxation\r\n', 'Contact Law & Violation Terms\r\n', 'Constitutional Law', 'Law of Evidence\r\n', 'Civil & Criminal Procedures\r\n', 'Alternate Dispute Resolution\r\n', 'Administrative Law & Procedures'),
(4, 'Statistics', 'Statistics', 'Expert Statisticians are working to fulfil “I need help with my dissertation” need of all statistics course and sub-fields with years of experience regarding:', 'Probability Distributions\r\n', 'Mathematical Methods & Probability Theory\r\n', 'Statistical Inference\r\n', 'Multivariate Analysis & Large Samples\r\n', 'Linear Algebra', 'Descriptive Statistics I-II\r\n', 'Quantitative Analysis\r\n', 'Programming Language C\r\n', 'Data Interpretation'),
(5, 'Accounting', 'Accounting Dissertation Writing Services', 'Our team of expert Ph.D. writers are always ready to help you with your accounting assignments 24-hours 7 days a week! Our writers are capable of providing every accounting dissertation service help such as:', 'Principals of Accounting\r\n', 'Financial Accounting\r\n', 'Cost Analysis\r\n', 'Managerial Accounting\r\n', 'Budgeting', 'Forensic Accounting\r\n', 'Internal Auditing\r\n', 'Tax Accounting\r\n', 'Cost Accounting'),
(6, 'Engineering', 'Engineering Dissertation Writing Help', 'If you need help writing dissertation for engineering subjects then look no more because our team of experts guarantee you all kind of top engineering dissertations ranging but not limited to:\r\n\r\n', 'Mechanical Engineering\r\n', 'Civil Engineering\r\n', 'Biochemical Engineering\r\n', 'Electrical Engineering\r\n', 'Biomedical Engineering', 'Architectural Engineering\r\n', 'Computer Engineering\r\n', 'Mechatronics Engineering\r\n', 'Environmental Engineering'),
(7, 'Information Technology ', 'Information Technology Dissertation', 'Stop asking “I need help with my dissertation” to other people, contact our Ph.D. qualified team of writers and get your IT dissertations done the best way you can imagine. Our writers’ expertise ranges to a variety of different topics such as:', 'Artificial Intelligence\r\n', 'Compliance Software\r\n', 'Computational Mathematics\r\n', 'Data Analysis\r\n', 'Mass Communication', 'Automation\r\n', 'Gamification Techniques\r\n', 'Health Software\r\n', 'Cyber Security'),
(8, 'Economics', 'Economics', 'We are the best help dissertation writing service for your economics dissertations because our writers are Ph.Ds. from the top universities of UK and are always available to help you with all of your economic dissertations varying to:', 'Microeconomics\r\n', 'Macroeconomics\r\n', 'Financial Economics\r\n', 'Health, Education, and Welfare\r\n', 'Law and Economics', 'Agricultural and Natural Resource Economics\r\n', 'Economic History\r\n', 'Business Administration and\r\n', 'Experimental Economics');

-- --------------------------------------------------------

--
-- Table structure for table `index7`
--

CREATE TABLE `index7` (
  `id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `heading2` varchar(50) NOT NULL,
  `para1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `index7`
--

INSERT INTO `index7` (`id`, `heading`, `heading2`, `para1`) VALUES
(1, 'Quality Assurance Head', '5609+ Qualified Dissertations', 'With over 1900 quality checked dissertations resulting in perfection of each dissertation and different requirements. Leading all the Ph.D. qualified writers with a carefully designed set of instructions for quality assurance from multiple techniques to reach the standard for Excellency.\r\n<br>\r\n<br>\r\nWe are making sure your dissertation is up to the mark with all your specifications strictly met under the mutually agreed terms.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `index8`
--

CREATE TABLE `index8` (
  `id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `para` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `index8`
--

INSERT INTO `index8` (`id`, `heading`, `para`) VALUES
(1, 'Introduction', 'Covering Background, Problem Statement, Research Objective & Question, Limitations, Significance.'),
(2, 'METHODOLOGY', 'Research Approach, Purpose, Design, Data Source, Population, Size, Techniques, Hypothesis Model'),
(3, 'DATA <br>ANALYSIS', 'Introduction, Pilot Study, Data Screening, Demographic Analysis, Validity Check, Path Coefficient, Summary'),
(4, 'LITERATURE<br>Review', 'Authentic Literature Reviews, Theoretical Background, Empirical Evidence, Hypothesis Development'),
(5, 'CONCLUSION & <br>RECOMMENDATION', 'Conclusion, Recommendation for Managers, Direction for Future Studies');

-- --------------------------------------------------------

--
-- Table structure for table `index10`
--

CREATE TABLE `index10` (
  `id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `subheading` varchar(50) NOT NULL,
  `para` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `index10`
--

INSERT INTO `index10` (`id`, `heading`, `subheading`, `para`) VALUES
(1, 'Our Clients Get Perfect Results', 'Marketing Dissertation', 'I’m highly impressed with the prompt services of Dissertation Writing Help and how quickly they managed to write my dissertation from scratch to perfection. This has to be the best dissertation help service you will cross paths with. Thumbs up!');

-- --------------------------------------------------------

--
-- Table structure for table `index11`
--

CREATE TABLE `index11` (
  `id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `question1` varchar(150) NOT NULL,
  `answer1` text NOT NULL,
  `question2` varchar(150) NOT NULL,
  `answer2` text NOT NULL,
  `question3` varchar(150) NOT NULL,
  `answer3` text NOT NULL,
  `question4` varchar(150) NOT NULL,
  `answer4` text NOT NULL,
  `question5` varchar(150) NOT NULL,
  `answer5` text NOT NULL,
  `question6` varchar(150) NOT NULL,
  `answer6` text NOT NULL,
  `question7` varchar(150) NOT NULL,
  `answer7` text NOT NULL,
  `question8` varchar(150) NOT NULL,
  `answer8` text NOT NULL,
  `question9` varchar(150) NOT NULL,
  `answer9` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `index11`
--

INSERT INTO `index11` (`id`, `heading`, `question1`, `answer1`, `question2`, `answer2`, `question3`, `answer3`, `question4`, `answer4`, `question5`, `answer5`, `question6`, `answer6`, `question7`, `answer7`, `question8`, `answer8`, `question9`, `answer9`) VALUES
(1, 'Frequently Asked Questions', 'How do I track my dissertation order?', 'Our live chat support is available 7 days a week, 365 days a year. You can get in touch with our writers though email, live-chat and even on WhatsApp as well!\r\n\r\n\r\n', 'Why should I get dissertation help from you?', 'We have a team of Ph.D. writers from the top universities in UK to help you with your dissertations and assure you the best grades! When you feel the need of British dissertation help near me to get quick assistance, you will always find DissertationWritingHelp near you.\r\n\r\n\r\n', 'What makes your dissertation services in UK the most reliable?', 'We have a reputation of never letting a single student down with our amazing dissertation writing services! Providing each student with the best quali', 'What if I am not satisfied with the services your dissertation company provided?', 'Customer satisfaction is our first priority with money back guarantee if you are not satisfied with our services.', 'What can make my dissertation better?\r\n', 'A dissertation in a good format that includes all the chapters with references and no plagiarized content with a relevant topic is the best dissertation and our writers are expert at creating the best dissertation.', '', '', '', '', '', '', '', ''),
(2, 'Frequently Asked Questions', 'How do I track my dissertation order?', 'Our live chat support is available 7 days a week, 365 days a year. You can get in touch with our writers though email, live-chat and even on WhatsApp as well!\r\n\r\n\r\n', 'Why should I get dissertation help from you?', 'We have a team of Ph.D. writers from the top universities in UK to help you with your dissertations and assure you the best grades! When you feel the need of British dissertation help near me to get quick assistance, you will always find DissertationWritingHelp near you.\r\n\r\n\r\n', 'What makes your dissertation services in UK the most reliable?', 'We have a reputation of never letting a single student down with our amazing dissertation writing services! Providing each student with the best quality and creatively drawn dissertation according to their specifications by field experts. Whenever someone approaches us saying ‘I need help writing my dissertation’ we never back down. Our sole purpose revolves around serving each student with best help in dissertation making us the most reliable choice.', 'What if I am not satisfied with the services your dissertation company provided?', 'Customer satisfaction is our first priority with money back guarantee if you are not satisfied with our services.', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'hannielanan123@gmail.com', '$2y$10$9vQ2mIyEAzUJgTHzSJgvqOW03v9GGS09s/e/cJx8vGG61lw0xh1F.'),
(2, 'hannielanan2001@gmail.com', '$2y$10$QhtzlJEMQoCReqpJvRvgzuByZ6PY.4PDtuRJEanSz7EKxDK6Z/RHi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `index`
--
ALTER TABLE `index`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index2`
--
ALTER TABLE `index2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index3`
--
ALTER TABLE `index3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index4`
--
ALTER TABLE `index4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index5`
--
ALTER TABLE `index5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index6`
--
ALTER TABLE `index6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index7`
--
ALTER TABLE `index7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index8`
--
ALTER TABLE `index8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index10`
--
ALTER TABLE `index10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index11`
--
ALTER TABLE `index11`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `index`
--
ALTER TABLE `index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `index2`
--
ALTER TABLE `index2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `index3`
--
ALTER TABLE `index3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `index4`
--
ALTER TABLE `index4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `index5`
--
ALTER TABLE `index5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `index6`
--
ALTER TABLE `index6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `index7`
--
ALTER TABLE `index7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `index8`
--
ALTER TABLE `index8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `index10`
--
ALTER TABLE `index10`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `index11`
--
ALTER TABLE `index11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
