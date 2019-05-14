-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2019 at 10:07 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ins`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
`user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `adharnumber` varchar(10) NOT NULL,
  `ssc` varchar(10) NOT NULL,
  `hsc` varchar(10) NOT NULL,
  `currenteduandyear` varchar(10) NOT NULL,
  `marksheetnumber` varchar(10) NOT NULL,
  `familyincome` varchar(20) NOT NULL,
  `incomecertificatenumber` varchar(20) NOT NULL,
  `approvalstatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`user_id`, `name`, `dob`, `type`, `adharnumber`, `ssc`, `hsc`, `currenteduandyear`, `marksheetnumber`, `familyincome`, `incomecertificatenumber`, `approvalstatus`) VALUES
(1, 'Debashree Sarkar', '08101997', 'merit', '123', '98', '94', 'btech_ly', '772', '300000', '556', 'no'),
(2, 'Mansi Mota', '22121997', 'income', '456', '94', '90', 'btech_ly', '898', '200000', '661', 'no'),
(3, 'Khusbu Shah', '13071997', 'income', '789', '95', '91', 'btech_ly', '658', '400000', '786', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `system_details`
--

CREATE TABLE IF NOT EXISTS `system_details` (
`user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `adharnumber` varchar(10) NOT NULL,
  `ssc` varchar(10) NOT NULL,
  `hsc` varchar(10) NOT NULL,
  `currenteduandyear` varchar(10) NOT NULL,
  `marksheetnumber` varchar(10) NOT NULL,
  `familyincome` varchar(20) NOT NULL,
  `incomecertificatenumber` varchar(20) NOT NULL,
  `approvalstatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_details`
--

INSERT INTO `system_details` (`user_id`, `name`, `dob`, `type`, `adharnumber`, `ssc`, `hsc`, `currenteduandyear`, `marksheetnumber`, `familyincome`, `incomecertificatenumber`, `approvalstatus`) VALUES
(1, 'Debashree Sarkar', '08101997', 'merit', '123', '98', '94', 'btech_ly', '772', '300000', '556', 'no'),
(2, 'Mansi Mota', '22121997', 'income', '456', '94', '90', 'btech_ly', '898', '200000', '661', 'no'),
(3, 'Khusbu Shah', '1307997', 'income', '789', '95', '91', 'btech_ly', '658', '400000', '789', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `password`, `role`) VALUES
(1, 'Debashree Sarkar', 'debashree.s', '1a7b7a8f08c46b5b9b68fbe6e2f0de5dd7307d6a', 'student'),
(2, 'Mansi Mota', 'mansi.m', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 'student'),
(3, 'Khusbu Shah', 'khusbu.s', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 'student'),
(4, 'Era Johri', 'era.j', '701b389b848a2b1cfab867093101d8d5ac56addd', 'sponsor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `system_details`
--
ALTER TABLE `system_details`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `system_details`
--
ALTER TABLE `system_details`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
