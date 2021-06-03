-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 11:51 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `space`
--

-- --------------------------------------------------------

--
-- Table structure for table `uadmin`
--

CREATE TABLE `uadmin` (
  `u_id` int(11) NOT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uadmin`
--

INSERT INTO `uadmin` (`u_id`, `dob`) VALUES
(101, '1999-08-15'),
(102, '2021-06-03'),
(103, '2021-06-09'),
(104, '2021-06-24'),
(105, '1995-08-15'),
(106, '2021-06-18'),
(107, '1999-02-27'),
(108, '2021-06-30'),
(109, '2021-06-14'),
(110, '2021-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(20) DEFAULT NULL,
  `u_add` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `u_age` int(11) DEFAULT NULL,
  `u_gender` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_add`, `dob`, `u_age`, `u_gender`) VALUES
(101, 'Shubham', 'Camp, Pune', '1999-08-15', 21, 'Male'),
(102, 'Varad', 'ABC', '2021-06-03', 0, 'male'),
(103, 'Varad1', 'ABC1', '2021-06-09', 0, 'male'),
(104, 'Anu', 'VAVA', '2021-06-24', 0, 'male'),
(105, 'Vinod', 'Hyd', '1995-08-15', 25, 'male'),
(106, 'Vipul', 'Kharadi', '2021-06-18', 0, 'male'),
(107, 'Hello', 'Vadgaon', '1999-02-27', 22, 'male'),
(108, 'GOD', 'Pune', '2021-06-30', 0, 'male'),
(109, 'Godess', 'VAVA1', '2021-06-14', 0, 'female'),
(110, 'S1', 'Camp', '2021-06-23', 0, 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uadmin`
--
ALTER TABLE `uadmin`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uadmin`
--
ALTER TABLE `uadmin`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `uadmin` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
