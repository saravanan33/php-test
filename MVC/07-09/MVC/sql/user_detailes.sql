-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 09, 2021 at 06:21 PM
-- Server version: 5.7.35-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_detailes`
--

CREATE TABLE `user_detailes` (
  `emp_id` int(100) NOT NULL,
  `emp_name` varchar(20) NOT NULL,
  `emp_password` varchar(50) NOT NULL,
  `emp_mobile` varchar(10) NOT NULL,
  `emp_email` varchar(30) NOT NULL,
  `emp_address` text NOT NULL,
  `emp_tag` enum('A','E') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detailes`
--

INSERT INTO `user_detailes` (`emp_id`, `emp_name`, `emp_password`, `emp_mobile`, `emp_email`, `emp_address`, `emp_tag`) VALUES
(2000101, 'saravana', '12345', '8148377612', 'saravanan@gmail.com', 'no:john st kargil nagar tvt ch 19 ', 'A'),
(2000102, 'vignesh', '54321', '9094229533', 'vignesh@gmail.com', 'no1 ram st ,sundar nagar,tvt ch 19', 'E');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_detailes`
--
ALTER TABLE `user_detailes`
  ADD PRIMARY KEY (`emp_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
