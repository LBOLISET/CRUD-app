-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 31, 2024 at 02:00 PM
-- Server version: 10.3.39-MariaDB-0ubuntu0.20.04.2
-- PHP Version: 7.4.3-4ubuntu2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lboliset_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `position_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `job_description` text NOT NULL,
  `department` varchar(255) NOT NULL,
  `required_skills` text NOT NULL,
  `hourly_rate` decimal(10,2) NOT NULL,
  `application_instructions` text NOT NULL,
  `contact_information` varchar(255) NOT NULL,
  `job_status` enum('Open','Closed') DEFAULT 'Open'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`position_id`, `title`, `job_description`, `department`, `required_skills`, `hourly_rate`, `application_instructions`, `contact_information`, `job_status`) VALUES
(2, 'staff_assist', 'assisting', 'luddy', 'communication', '15.00', 'contact dept office', '123456789', 'Closed'),
(3, 'staff_tech', 'technician', 'luddy', 'communication', '17.00', 'contact dept office', '345678', 'Closed'),
(4, 'TECHNICAL_ COORDINATOR', 'COORDINATING IN TECH', 'LILLY', 'TECHNOLOGY', '20.00', 'APPLY IN LILLY DEPT OFFICE', '87654345', 'Closed'),
(5, 'ferg', 'erf', 'wf', 'fv', '23.00', 'fer', 'wfvf', 'Open'),
(6, 'title', 'desc', 'dept', 'skill', '12.00', 'instructions', 'info', 'Open'),
(7, 'Assist analyst', 'Analysis of health data', 'Applied data science ', 'Python ', '30.00', 'NA', 'xyz@iu.edu', 'Closed'),
(8, 'Assist analyst', 'Analysis of health data', 'Applied data science ', 'Python ', '30.00', 'NA', 'xyz@iu.edu', 'Open');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`position_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
