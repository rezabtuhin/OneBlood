-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 04:54 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oneblood`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_requests`
--

CREATE TABLE `blood_requests` (
  `req_id` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `phone_n` varchar(20) NOT NULL,
  `zilla` varchar(255) NOT NULL,
  `upazilla` varchar(255) NOT NULL,
  `bloodGroup` varchar(5) NOT NULL,
  `requestType` varchar(20) NOT NULL,
  `quantity` varchar(2) NOT NULL,
  `reason` varchar(10000) NOT NULL,
  `req_time` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_requests`
--

INSERT INTO `blood_requests` (`req_id`, `id`, `phone_n`, `zilla`, `upazilla`, `bloodGroup`, `requestType`, `quantity`, `reason`, `req_time`) VALUES
(5, 12, '01784120707', 'Manikganj', 'Savar', 'A+', 'Blood', '3', '', '2021-09-26 09:15:50'),
(6, 12, '01784120707', 'Manikganj', 'Savar', 'A+', 'Blood', '3', '', '2021-09-26 12:39:36'),
(7, 11, '01826366472', 'Mirpur', 'mirpur', 'B+', 'Blood', '3', '', '2021-09-26 12:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `bmi` varchar(255) NOT NULL,
  `had_accident` varchar(10) NOT NULL,
  `accident_kind` varchar(1000) NOT NULL,
  `had_disease` varchar(10) NOT NULL,
  `disease_kind` varchar(1000) NOT NULL,
  `had_operation` varchar(10) NOT NULL,
  `operation_type` varchar(1000) NOT NULL,
  `donation_time` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `weight`, `bmi`, `had_accident`, `accident_kind`, `had_disease`, `disease_kind`, `had_operation`, `operation_type`, `donation_time`) VALUES
(11, '70', '26.346494034401', 'None', '', 'Minor', '', 'Minor', '', '2021-09-25 09:06:21'),
(11, '70', '26.346494034401', 'None', '', 'None', '', 'None', '', '2021-09-25 23:57:39'),
(12, '60', '18.518518518519', 'None', '', 'None', '', 'None', '', '2021-09-26 12:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `questions` varchar(1000) NOT NULL,
  `answers` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`fullname`, `email`, `questions`, `answers`) VALUES
('Sabbir Ahmed', 'sabbirgg007@gmail.com', 'Can I donate blood if I am taking OTC medication?', 'Commonly taken medicines do not affect your eligibility for blood donation. For any other kind of medication, please consult your doctor prior to donating blood.'),
('Sr Shumon', 'shumonofficial@gmail.com', 'If I have recently had a vaccination can I donate?', 'As long as you are feeling well, donation is acceptable. People who have received the oral polio vaccine must wait 2-4 weeks after vaccination.'),
('Afia Sultana', 'asultana1996@yahoo.com', 'Should I do something before I donate?', 'You should eat a good nutritious meal and drink plenty of fluids before you donate.'),
('Atia Ananna', 'atananna99@gmail.com', 'Is it really safe to donate blood?', 'People should not be afraid of donating blood as it is a completely safe process.  Every donor’s blood is collected through an absolutely new sterile needle that is immediately discarded after a one-time use. Most people feel fine after donating blood but a few number of people tend to feel dizzy, have an upset stomach or experience a slight pain where the needle was inserted. Extremely rare cases are that of loss of consciousness, nerve damage or artery damage occur.'),
('Payel', 'payel173225@aiub.edu', 'Is it remotely possible to get HIV from donating blood?', 'Not at all. Absolute sterile and disposable equipment is allowed to be used.'),
('Rafia Tabassum Farin', 'rtabassumfarin05@gmail.com', 'Is there any problem if I recently had a tattoo or ear or body piercing?', 'Potential donors with tattoos or ear or body piercings need to speak to the present medical team at the site to determine eligibility.'),
('Sushmita Dey Riya', 'sriea191188@bscse.uiu.ac.bd', 'Will it hurt when you insert the needle?', 'Only for a moment. Pinch the fleshy, soft underside of your arm. That pinch is similar to what you will feel when the needle is inserted.'),
('Afsana Airin', 'aairin191172@bscse.uiu.ac.bd', 'How long does a blood donation take?', 'The entire process takes about one hour and 15 minutes; the actual donation of a pint of whole blood unit takes eight to 10 minutes. However, the time varies slightly with each person depending on several factors including the donor’s health history and attendance at the blood drive.'),
('Rezab Ud Dawla', 'rdawla191187@bscse.uiu.ac.bd', 'Minimum Age limit for donating blood?', 'Depends on donation type\r\nif you donate whole blood then you have to be at least 16 years old\r\nfor power red donation male: 17 female: 19\r\nfor platelets donation: 17 years  ');

-- --------------------------------------------------------

--
-- Table structure for table `personal_inventory`
--

CREATE TABLE `personal_inventory` (
  `id` int(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `Short_note` varchar(1000) NOT NULL,
  `Last_stored` varchar(10000) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_inventory`
--

INSERT INTO `personal_inventory` (`id`, `blood_group`, `quantity`, `Short_note`, `Last_stored`) VALUES
(11, 'B+', 4, 'Hudai', '2021-09-23 15:43:36'),
(11, 'A+', 2, 'Moja lage tai', '2021-09-23 23:52:23'),
(12, 'A+', 4, '', '2021-09-26 12:43:52');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `height` varchar(10) NOT NULL,
  `bg` varchar(4) NOT NULL,
  `add_zilla` varchar(50) NOT NULL,
  `add_upazilla` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `phone`, `email`, `age`, `gender`, `height`, `bg`, `add_zilla`, `add_upazilla`, `password`) VALUES
(3, 'admin', '', 0, '', 0, '', '', '', '', '', 'admin'),
(11, 'Sharita', 'Rahman', 1826366472, 'srahman09@gmail.com', 22, 'f', '1.63', 'B+', 'Manikganj', 'Savar', 'sharita2200'),
(12, 'Rezab', 'Dawla', 1784120707, 'rdawla191187@bscse.uiu.ac.bd', 23, 'm', '1.80', 'A+', 'Manikganj', 'Savar', 'rezabuddawla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_requests`
--
ALTER TABLE `blood_requests`
  ADD PRIMARY KEY (`req_id`),
  ADD KEY `fk_id3` (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD KEY `fk_id2` (`id`);

--
-- Indexes for table `personal_inventory`
--
ALTER TABLE `personal_inventory`
  ADD KEY `fk_id` (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_requests`
--
ALTER TABLE `blood_requests`
  MODIFY `req_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood_requests`
--
ALTER TABLE `blood_requests`
  ADD CONSTRAINT `fk_id3` FOREIGN KEY (`id`) REFERENCES `registration` (`id`);

--
-- Constraints for table `donors`
--
ALTER TABLE `donors`
  ADD CONSTRAINT `fk_id2` FOREIGN KEY (`id`) REFERENCES `registration` (`id`);

--
-- Constraints for table `personal_inventory`
--
ALTER TABLE `personal_inventory`
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`id`) REFERENCES `registration` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
