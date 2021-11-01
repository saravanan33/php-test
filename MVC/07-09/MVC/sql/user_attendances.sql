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
-- Table structure for table `user_attendances`
--

CREATE TABLE `user_attendances` (
  `emp_id1` int(20) NOT NULL,
  `emp_intime` datetime(6) NOT NULL,
  `emp_outtime` datetime(6) NOT NULL,
  `emp_shift` enum('1','2','3','G') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_attendances`
--

INSERT INTO `user_attendances` (`emp_id1`, `emp_intime`, `emp_outtime`, `emp_shift`) VALUES
(2000101, '2021-09-01 06:18:13.000000', '2021-09-01 14:34:28.000000', '1'),
(2000102, '2021-09-01 14:28:00.000000', '2021-09-01 21:57:00.000000', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_attendances`
--
ALTER TABLE `user_attendances`
  ADD PRIMARY KEY (`emp_id1`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
