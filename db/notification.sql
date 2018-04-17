-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2018 at 08:06 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tekno`
--

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notificationId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `seen` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `jobId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notificationId`, `name`, `seen`, `userId`, `jobId`) VALUES
(23, 'admin', 1, 1, 22),
(24, 'test', 1, 2, 22),
(25, 'farzad', 1, 6, 22),
(26, 'admin', 1, 1, 16),
(27, 'test', 1, 2, 16),
(28, 'farzad', 0, 6, 16),
(29, 'admin', 1, 1, 22),
(30, 'test', 1, 2, 22),
(31, 'farzad', 1, 6, 22),
(32, 'admin', 1, 1, 22),
(33, 'test', 0, 2, 22),
(34, 'farzad', 1, 6, 22),
(35, 'admin', 1, 1, 22),
(36, 'test', 0, 2, 22),
(37, 'farzad', 1, 6, 22),
(38, 'admin', 1, 1, 22),
(39, 'test', 0, 2, 22),
(40, 'farzad', 1, 6, 22),
(41, 'admin', 1, 1, 22),
(42, 'test', 0, 2, 22),
(43, 'farzad', 1, 6, 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notificationId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notificationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
