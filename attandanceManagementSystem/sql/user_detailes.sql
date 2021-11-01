-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 14, 2021 at 09:42 PM
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
  `user_id` int(11) NOT NULL,
  `user_code` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_mobile` varchar(10) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_address` text NOT NULL,
  `user_roll` enum('A','E') NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('A','IA','D') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detailes`
--

INSERT INTO `user_detailes` (`user_id`, `user_code`, `user_name`, `user_password`, `user_mobile`, `user_email`, `user_address`, `user_roll`, `created_by`, `created_at`, `updated_by`, `updated_at`, `status`) VALUES
(1, 2000101, 'saravana', '827ccb0eea8a706c4c34a16891f84e7b', '8148377612', 'saravanan@gmail.com', 'no:john st kargil nagar tvt ch 19 ', 'A', 0, '2021-09-13 15:56:05', 0, '2021-09-13 15:56:05', 'A'),
(2, 2000102, 'vignesh', '01cfcd4f6b8770febfb40cb906715822', '9094229533', 'vignesh1@gmail.com', 'no1 ram st ,sundar nagar,tvt ch 19', 'E', 0, '2021-09-13 15:56:09', 0, '2021-09-13 15:56:09', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_detailes`
--
ALTER TABLE `user_detailes`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_detailes`
--
ALTER TABLE `user_detailes`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
