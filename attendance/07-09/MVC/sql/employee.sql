-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 13, 2021 at 09:32 PM
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
  `id` int(11) NOT NULL,
  `user_code` int(11) NOT NULL,
  `user_intime` datetime(6) NOT NULL,
  `user_outtime` datetime(6) DEFAULT NULL,
  `user_shift` enum('1','2','3','G') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_attendances`
--

INSERT INTO `user_attendances` (`id`, `user_code`, `user_intime`, `user_outtime`, `user_shift`) VALUES
(1, 2000101, '2021-09-13 12:36:47.000000', '2021-09-01 14:34:28.000000', '1'),
(2, 2000102, '2021-09-01 14:28:00.000000', '2021-09-01 21:57:00.000000', '2'),
(3, 2000101, '2021-09-13 12:47:21.000000', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_detailes`
--

CREATE TABLE `user_detailes` (
  `user_id` int(11) NOT NULL,
  `user_code` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_mobile` varchar(10) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_address` text NOT NULL,
  `user_tag` enum('A','E') NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('A','I') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detailes`
--

INSERT INTO `user_detailes` (`user_id`, `user_code`, `user_name`, `user_password`, `user_mobile`, `user_email`, `user_address`, `user_tag`, `created_by`, `created_at`, `updated_by`, `updated_at`, `status`) VALUES
(1, 2000101, 'saravana', '827ccb0eea8a706c4c34a16891f84e7b', '8148377612', 'saravanan@gmail.com', 'no:john st kargil nagar tvt ch 19 ', 'A', 0, '2021-09-13 15:56:05', 0, '2021-09-13 15:56:05', 'A'),
(2, 2000102, 'vignesh', '01cfcd4f6b8770febfb40cb906715822', '9094229533', 'vignesh1@gmail.com', 'no1 ram st ,sundar nagar,tvt ch 19', 'E', 0, '2021-09-13 15:56:09', 0, '2021-09-13 15:56:09', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_attendances`
--
ALTER TABLE `user_attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_detailes`
--
ALTER TABLE `user_detailes`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_attendances`
--
ALTER TABLE `user_attendances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_detailes`
--
ALTER TABLE `user_detailes`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
