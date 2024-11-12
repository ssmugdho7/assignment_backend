-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2024 at 05:14 PM
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address_line1` varchar(100) NOT NULL,
  `address_line2` varchar(100) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `found_us` varchar(50) DEFAULT NULL,
  `feedback` text NOT NULL,
  `recommend_us` text NOT NULL,
  `ref1_first_name` varchar(50) DEFAULT NULL,
  `ref1_last_name` varchar(50) DEFAULT NULL,
  `ref1_email` varchar(100) DEFAULT NULL,
  `ref1_phone` varchar(20) DEFAULT NULL,
  `ref2_first_name` varchar(50) DEFAULT NULL,
  `ref2_last_name` varchar(50) DEFAULT NULL,
  `ref2_email` varchar(100) DEFAULT NULL,
  `ref2_phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `first_name`, `last_name`, `address_line1`, `address_line2`, `city`, `region`, `postal_code`, `country`, `email`, `phone`, `found_us`, `feedback`, `recommend_us`, `ref1_first_name`, `ref1_last_name`, `ref1_email`, `ref1_phone`, `ref2_first_name`, `ref2_last_name`, `ref2_email`, `ref2_phone`) VALUES
(1, 'Shah Maruf ', 'Siraj', 'D block ', 'Road 7', 'Dhaka', 'Dhaka', '1205', 'United States', 'shahmarufsiraj@gmail.com', '01758551245', 'facebook', 'No feedback', '1', 'x', 'y', 'x@gmail.com', '0175821215', 'x', 'y', 'y@gmail.com', '0175821215'),
(5, 'Shah Maruf ', 'Siraj', 'D block ', 'Road 7', 'Dhaka', 'Dhaka', '1205', 'United States', 'shahmarufsirajs@gmail.com', '01758551245', 'facebook', 'No feedback', '1', 'x', 'y', 'x@gmail.com', '0175821215', 'x', 'y', 'y@gmail.com', '0175821215'),
(6, 'Shah Maruf ', 'Siraj', 'D block ', 'Road 7', 'Dhaka', 'Dhaka', '1205', 'United States', 'shahmarufsiraju@gmail.com', '01758551245', 'facebook', 'No feedback', '1', 'x', 'y', 'x@gmail.com', '0175821215', 'x', 'y', 'y@gmail.com', '0175821215'),
(7, 'Shah Maruf ', 'Siraj', 'D block ', 'Road 7', 'Dhaka', 'Dhaka', '1205', 'United States', 'shahmarufsirajk@gmail.com', '01758551245', 'facebook', 'No feedback', '1', 'x', 'y', 'x@gmail.com', '0175821215', 'x', 'y', 'y@gmail.com', '0175821215'),
(8, 'Shah Maruf ', 'Siraj', 'D block ', 'Road 7', 'Dhaka', 'Dhaka', '1205', 'United States', 'shahmarufsirajkk@gmail.com', '01758551245', 'facebook', 'No feedback', '1', 'x', 'y', 'x@gmail.com', '0175821215', 'x', 'y', 'y@gmail.com', '0175821215'),
(9, 'Shah Maruf ', 'Siraj', 'D block ', 'Road 7', 'Dhaka', 'Dhaka', '1205', 'United States', 'shahmarufsirajkhjk@gmail.com', '01758551245', 'facebook', 'No feedback', '1', 'x', 'y', 'x@gmail.com', '0175821215', 'x', 'y', 'y@gmail.com', '0175821215'),
(10, 'Shah Maruf ', 'Siraj', 'D block ', 'Road 7', 'Dhaka', 'Dhaka', '1205', 'Bangladesh', 'shahmarufsirajmugdhos@gmail.com', '01758551245', 'reference', 'ss', '1', 'x', 's', 'x@gmail.com', '0175821215', 'x', 'y', 'y@gmail.com', '0175821215'),
(11, 'Shah Maruf ', 'Siraj', 'D block ', 'Road 7', 'Dhaka', 'Dhaka', '1205', 'Bangladesh', '22206edfs44@iub.edu.bd', '01758551245', 'facebook', 'asda', '1', 'x', 's', 'x@gmail.com', '0175821215', 'x', 'y', 'y@gmail.com', '0175821215');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
