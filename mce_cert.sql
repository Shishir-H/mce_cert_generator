-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 06:23 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mce_cert`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('admin@devproject', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `usn` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `doc_type` int(50) NOT NULL,
  `document_name` varchar(255) NOT NULL,
  `cur_ac_year` varchar(255) NOT NULL,
  `cou_comp_year` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `start_year` varchar(255) NOT NULL,
  `completion_year` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `sem1` varchar(255) NOT NULL,
  `sem2` varchar(255) NOT NULL,
  `sem3` varchar(255) NOT NULL,
  `sem4` varchar(255) NOT NULL,
  `sem5` varchar(255) NOT NULL,
  `sem6` varchar(255) NOT NULL,
  `sem7` varchar(255) NOT NULL,
  `sem8` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`id`, `name`, `usn`, `email`, `branch`, `doc_type`, `document_name`, `cur_ac_year`, `cou_comp_year`, `year`, `start_year`, `completion_year`, `sem`, `college`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`, `date`) VALUES
(1, 'SHISHIR H', '4MC18CS128', 'shishirharikripa@gmail.com', 'Mechanical Engineering', 0, 'Study Certificate 1 ( General )', '2019-20', '', '2nd', '', '', '', '', '', '', '', '', '', '', '', '', '02/12/2020'),
(2, 'SHISHIR H', '4MC18CS128', 'shishirharikripa@gmail.com', 'Mechanical Engineering', 1, 'Study Certificate 2 ( purpose for Bank loan renewal)', '2019-20', '', '2nd', '', '', '', '', '', '', '', '', '', '', '', '', '02/12/2020'),
(3, 'SHISHIR H', '4MC18CS128', 'shishirharikripa@gmail.com', 'Mechanical Engineering', 2, 'Study Certificate ( for passed-out students )', '2019-20', '', '2nd', '2018-19', '2021-22', '', '', '', '', '', '', '', '', '', '', '02/12/2020'),
(4, 'SHISHIR H', '4MC18CS128', 'shishirharikripa@gmail.com', 'Electronics & Communication Engineering', 3, 'Course completion Certificate', '2019-20', '', '2nd', '2018-19', '2021-22', '', '', '', '', '', '', '', '', '', '', '02/12/2020'),
(5, 'SHISHIR H', '4MC18CS128', 'shishirharikripa@gmail.com', 'Computer Science & Engineering', 4, 'Character Certificate', '2019-20', '', '2nd', '2018-19', '2021-22', '', '', '', '', '', '', '', '', '', '', '02/12/2020'),
(6, 'SHISHIR H', '4MC18CS128', 'shishirharikripa@gmail.com', 'Civil Engineering', 5, 'No Objection Certificate', '2019-20', '', '2nd', '', '', '', 'JSS College of Science, Commerce & Arts, Mysore', '', '', '', '', '', '', '', '', '02/12/2020'),
(7, 'SHISHIR H', '4MC18CS128', 'shishirharikripa@gmail.com', 'Industrial Production & Engineering', 6, 'Expenditure Certificate', '2019-20', '', '2nd', '', '', '', '', '', '', '', '', '', '', '', '', '02/12/2020'),
(8, 'SHISHIR H', '4MC18CS128', 'shishirharikripa@gmail.com', 'Electricals & Electronics Engineering', 7, 'Provisional Degree Certificate', '2019-20', '2021-22', '', '', '', '', '', '7.44', '6.99', '6.79', '6.75', '6.92', '6.95', '7.06', '7.21', '02/12/2020'),
(9, 'SHISHIR H', '4MC18CS128', 'shishirharikripa@gmail.com', 'Electricals & Electronics Engineering', 8, 'CGPA Calculation Certificate', '2019-20', '', '', '', '', '', '', '7.44', '6.99', '6.79', '6.75', '', '', '', '', '02/12/2020'),
(10, 'SHISHIR H', '4MC18CS128', 'shishirharikripa@gmail.com', 'Mechanical Engineering', 9, 'SSLC PUC possession Certificate', '2019-20', '', '2nd', '', '', '', '', '', '', '', '', '', '', '', '', '02/12/2020'),
(11, 'SHISHIR H', '4MC18CS128', 'shishirharikripa@gmail.com', 'Mechanical Engineering', 0, 'Study Certificate 1 ( General )', '2019-20', '', '2nd', '', '', '', '', '', '', '', '', '', '', '', '', '02/12/2020'),
(12, 'SHISHIR H', '4MC18CS128', 'shishirharikripa@gmail.com', 'Mechanical Engineering', 0, 'Study Certificate 1 ( General )', '2019-20', '', '2nd', '', '', '', '', '', '', '', '', '', '', '', '', '02/12/2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
