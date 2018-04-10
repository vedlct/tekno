-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 09:05 AM
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
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `bannerId` int(11) NOT NULL,
  `jobId` int(11) DEFAULT NULL,
  `bannerSize` varchar(45) DEFAULT NULL,
  `headLine` varchar(45) DEFAULT NULL,
  `bannerType` varchar(45) DEFAULT NULL,
  `tText` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`bannerId`, `jobId`, `bannerSize`, `headLine`, `bannerType`, `tText`) VALUES
(1, 6, 'Banner', 'Banner', 'WebsiteBanner', 'Banner');

-- --------------------------------------------------------

--
-- Table structure for table `brochure`
--

CREATE TABLE `brochure` (
  `brochureId` int(11) NOT NULL,
  `jobId` int(11) DEFAULT NULL,
  `size` varchar(45) DEFAULT NULL,
  `page` varchar(45) DEFAULT NULL,
  `themeColor` varchar(45) DEFAULT NULL,
  `tagline` varchar(45) DEFAULT NULL,
  `mainFocus` varchar(45) DEFAULT NULL,
  `tText` varchar(45) DEFAULT NULL,
  `socialMediaUrl` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brochure`
--

INSERT INTO `brochure` (`brochureId`, `jobId`, `size`, `page`, `themeColor`, `tagline`, `mainFocus`, `tText`, `socialMediaUrl`) VALUES
(2, 3, 'Brochure size', 'PanelFold', 'dfdfdf', 'dfdfd', 'ProductShowcase', 'dfd', 'dfdfdfd'),
(3, 12, 'fgfg', NULL, 'gfg', 'fgfg', NULL, 'fgfg', 'fgfgf'),
(5, 14, '65', 'HalfFold', '656', 'wew', 'ProductShowcase', 'dfdf', 'dfdfd'),
(7, 18, 'gfgf', 'HalfFold', 'fgfg', 'gfgf', NULL, 'fgf', 'fgf'),
(8, 19, '656', 'HalfFold', 'test tor 4/4/2018', 'test tor 4/4/2018', 'ProductShowcase', 'test tor 4/4/2018', 'test tor 4/4/2018'),
(9, 21, '65', 'HalfFold', 'gfg', 'fgfg', 'ProductShowcase', 'fgf', 'fgf'),
(10, 22, '656', 'TriFold', 'green', 'lol', 'ProductShowcase', 'dfd', 'dfd');

-- --------------------------------------------------------

--
-- Table structure for table `corporate-cl`
--

CREATE TABLE `corporate-cl` (
  `corporate-ciId` int(11) NOT NULL,
  `jobId` int(11) DEFAULT NULL,
  `themeColor` varchar(45) DEFAULT NULL,
  `tagline` varchar(45) DEFAULT NULL,
  `nameAndDesignation` varchar(45) DEFAULT NULL,
  `qrCode` tinyint(4) DEFAULT NULL,
  `ciType` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corporate-cl`
--

INSERT INTO `corporate-cl` (`corporate-ciId`, `jobId`, `themeColor`, `tagline`, `nameAndDesignation`, `qrCode`, `ciType`) VALUES
(1, 8, 'Corporate-CI', 'Corporate-CI', 'Corporate-CI', 1, 'Corporate-CI');

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `user_id` int(255) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `user_type` varchar(50) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `short_name` varchar(50) DEFAULT NULL,
  `contact_person` varchar(100) DEFAULT NULL,
  `contact_no` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `webaddress` varchar(100) DEFAULT NULL,
  `client_status` varchar(20) DEFAULT 'Deactive'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`user_id`, `username`, `password`, `user_type`, `company_name`, `short_name`, `contact_person`, `contact_no`, `email`, `address`, `webaddress`, `client_status`) VALUES
(1, 'admin', '$2y$10$iZulWAQ1e/CVhqnnajUZS.GeoNAk2cb6UioJ0f9d1mTchtItfcYaW', 'Admin', 'TCL', 'TCL', 'forhad', '01616404404', 'fcml44@gmail.com', 'baridhara', 'errorsworld.com', 'Active'),
(2, 'test', '$2y$10$sWHQUlT5YI0gXlUGPRkOyuKOT9I3AngZAsGijpjv4jc9Fxdvs8fYS', 'User', 'TCL1', 'TCL1', 'test1', '444', 'test1@test.com', 'test1', 'test1', 'Active'),
(5, 'chandan', '$2y$10$Zmb28A845j.HIPIpaSw/he.B.G40bA6NTtfrrdMydWW.VOGk3OdDa', 'User', 'Tecno ERP', 'TE', 'Me', '01722504422', 'fcml44@gmail.com', 'baridhara', 'errorsworld.com', 'Active'),
(4, 'sgdj', '$2y$10$4O7RQn71cVjvUQF1YGC5.Oqi4DV34cNqWrmqKMuv31JrLUGKgPSv2', 'User', 'Sangini Gold & Diamond Jewellery', 'SG&DJ', 'test', '014444', 'test@404.com', 'sss', 'ddd', 'Active'),
(6, 'farzad', '$2y$10$B2n0T6EVHICBjna8BxtsZexTuCuJqJL6zMV83n5n2y/b2PAacentC', 'User', 'fdsfsd', 'f', 'dfdf', '01656565', 'farzad@yahoo.com', NULL, NULL, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `imageId` int(11) NOT NULL,
  `jobId` int(11) NOT NULL,
  `path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`imageId`, `jobId`, `path`) VALUES
(4, 14, 'public/teknovisual/Client_File/2018-03-31Tech Cloud/head-659651_960_720.png'),
(5, 14, 'public/teknovisual/Client_File/2018-03-31Tech Cloud/profile-icon-male-emotion-avatar-man-cartoon-portrait-happy-smiling-face-sing-vector-illustration-94159259.jpg'),
(6, 14, 'public/teknovisual/Client_File/2018-03-31Tech Cloud/ProfileImage.jpg'),
(10, 16, 'public/teknovisual/Client_File/2018-03-31/website company/9cpz9bKxi.png'),
(11, 16, 'public/teknovisual/Client_File/2018-03-31/website company/head-659651_960_720.png'),
(12, 19, 'public/teknovisual/Client_File/2018-04-04/test tor 4/4/2018/9cpz9bKxi.png'),
(13, 19, 'public/teknovisual/Client_File/2018-04-04/test tor 4/4/2018/head-659651_960_720.png'),
(14, 21, 'public/teknovisual/Client_File/2018-04-04/brochure-test/9cpz9bKxi.png'),
(15, 21, 'public/teknovisual/Client_File/2018-04-04/brochure-test/bg14.jpg'),
(16, 22, 'public/teknovisual/Client_File/2018-04-07/test brochure/9cpz9bKxi.png');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jobId` int(11) NOT NULL,
  `companyName` varchar(45) DEFAULT NULL,
  `reference` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `comments` varchar(45) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `companyWebsiteUrl` varchar(45) DEFAULT NULL,
  `businessArea` varchar(45) DEFAULT NULL,
  `EstimatedTime` varchar(45) DEFAULT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobId`, `companyName`, `reference`, `email`, `phoneNumber`, `address`, `comments`, `category`, `companyWebsiteUrl`, `businessArea`, `EstimatedTime`, `status`, `created_at`) VALUES
(3, 'Brochure company', 'dfdfd', NULL, NULL, NULL, NULL, 'brochure', NULL, 'area', NULL, 'pending', '2018-03-31 11:35:56'),
(4, 'website', 'sdsd', NULL, NULL, NULL, 'sadasd', 'website', NULL, NULL, NULL, 'pending', '2018-03-31 11:35:56'),
(5, 'Leaflet', 'Leaflet', 'Leaflet@dfdf.com', 'Leaflet', 'Leaflet', NULL, 'leaflet', 'Leaflet', 'Leaflet', NULL, 'pending', '2018-03-31 11:35:56'),
(6, 'Banner', 'Banner', NULL, NULL, NULL, 'Banner', 'banner', NULL, 'Banner', NULL, 'pending', '2018-03-31 11:35:56'),
(8, 'Corporate-CI', NULL, 'Corporate-CI', 'Corporate-CI', 'Corporate-CI', NULL, 'corporate', NULL, 'Corporate-CI', NULL, 'pending', '2018-03-31 11:35:56'),
(10, 'Logo', NULL, NULL, NULL, NULL, 'Logo', 'logo', NULL, NULL, NULL, 'pending', '2018-03-31 11:35:56'),
(12, 'fgf', 'fgfgfg', NULL, NULL, NULL, NULL, 'brochure', NULL, 'gfg', NULL, 'pending', '2018-03-31 11:35:56'),
(14, 'Tech Cloud', 'dfd', NULL, NULL, NULL, NULL, 'brochure', NULL, '656', NULL, 'pending', '2018-03-31 11:35:56'),
(16, 'website company', 'website company', NULL, NULL, NULL, 'website company', 'website', NULL, NULL, NULL, 'on going', '2018-03-31 11:35:56'),
(17, 'gfgfgf', 'dfd', NULL, NULL, NULL, 'dfdf', 'website', NULL, NULL, NULL, 'done', '2018-03-31 11:35:56'),
(18, 'fgf', 'fgfg', NULL, NULL, NULL, NULL, 'brochure', NULL, 'fgf', NULL, 'done', '2018-03-31 11:35:56'),
(19, 'test tor 4/4/2018', '6565', NULL, NULL, NULL, NULL, 'brochure', NULL, 'test tor 4/4/2018', '564', 'done', '2018-04-04 06:30:37'),
(20, 'leaflet test', 'dsdsd', 'sdsd@dsd.dsd', '5456', 'sds.@dsd.dd', NULL, 'leaflet', 'sds', 'dsd', NULL, 'done', '2018-04-04 06:32:17'),
(21, 'brochure-test', 'gf', NULL, NULL, NULL, NULL, 'brochure', NULL, 'fgfg', 'gfg', 'done', '2018-04-04 06:35:31'),
(22, 'test brochure', 'fdf', NULL, NULL, NULL, NULL, 'brochure', NULL, '500', 'dfd', 'on going', '2018-04-07 10:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `job_request`
--

CREATE TABLE `job_request` (
  `job_id` int(100) NOT NULL,
  `client_id` varchar(50) DEFAULT NULL,
  `service` varchar(500) DEFAULT NULL,
  `instruction` varchar(10000) DEFAULT NULL,
  `job_status` varchar(50) DEFAULT 'Pending'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_request`
--

INSERT INTO `job_request` (`job_id`, `client_id`, `service`, `instruction`, `job_status`) VALUES
(1, '5', 'test', 'www', 'Done'),
(2, '5', 'test', 'www', 'Done'),
(3, '2', 'rumi', 'adas', 'Done'),
(4, '2', 'test', '<p><span style=\"font-family: sans-serif; font-size: 13.12px; font-weight: bold; white-space: nowrap;\">service</span><br></p>', 'Done'),
(5, '2', 'test', '<p>huge summery</p>', 'Done'),
(6, '2', 'rumi', '<p>as</p>', 'Done'),
(7, '2', 'rumi', '<p><u>jji</u>ujii</p>', 'Done'),
(10, '2', 'test', '<p>test sdf&nbsp;</p>', 'On Going');

-- --------------------------------------------------------

--
-- Table structure for table `leaflet`
--

CREATE TABLE `leaflet` (
  `leafletId` int(11) NOT NULL,
  `jobId` int(11) DEFAULT NULL,
  `leafletSize` varchar(45) DEFAULT NULL,
  `mainFocus` varchar(45) DEFAULT NULL,
  `tagline` varchar(45) DEFAULT NULL,
  `tText` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaflet`
--

INSERT INTO `leaflet` (`leafletId`, `jobId`, `leafletSize`, `mainFocus`, `tagline`, `tText`) VALUES
(1, 5, 'Leaflet', 'Product showcase', 'Leaflet', 'Leaflet'),
(2, 20, 'ds', 'Product showcase', 'sdsd', 'dsd');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `logoId` int(11) NOT NULL,
  `jobId` int(11) DEFAULT NULL,
  `logoShape` varchar(45) DEFAULT NULL,
  `preferedColor` varchar(45) DEFAULT NULL,
  `businessType` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logoId`, `jobId`, `logoShape`, `preferedColor`, `businessType`) VALUES
(1, 10, 'Rectangular', 'Logo', 'Logo');

-- --------------------------------------------------------

--
-- Table structure for table `log_info`
--

CREATE TABLE `log_info` (
  `id` int(10) NOT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `login_details` varchar(100) DEFAULT NULL,
  `logout_details` varchar(100) DEFAULT NULL,
  `login_ip` varchar(20) DEFAULT NULL,
  `login_status` varchar(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log_info`
--

INSERT INTO `log_info` (`id`, `company_name`, `login_details`, `logout_details`, `login_ip`, `login_status`) VALUES
(1, 'TCL', '2017-05-08 17:15', '2017-05-18 15:31', '::1', '0'),
(2, 'TCL', '2017-05-10 18:51', '2017-05-18 15:31', '::1', '0'),
(3, 'TCL', '2017-05-11 12:34', '2017-05-18 15:31', '::1', '0'),
(4, 'TCL', '2017-05-11 18:07', '2017-05-18 15:31', '::1', '0'),
(5, 'TCL', '2017-05-18 16:05', '2017-05-18 17:03', '::1', '0'),
(6, '', '2017-05-18 16:11', '2017-05-18 19:20', '::1', '0'),
(7, '', '2017-05-18 17:25', '2017-05-18 19:20', '::1', '0'),
(8, '', '2017-05-18 19:13', '2017-05-18 19:20', '::1', '0'),
(9, '', '2017-05-18 19:27', '2017-05-18 19:32', '::1', '0'),
(10, '', '2017-05-18 19:30', '2017-05-18 19:32', '::1', '0'),
(11, '', '2017-05-18 19:32', '2017-05-18 19:32', '::1', '0'),
(12, '', '2017-05-18 19:33', '2017-05-18 20:12', '::1', '0'),
(13, '', '2017-05-18 19:39', '2017-05-18 20:12', '::1', '0'),
(14, '', '2017-05-18 19:39', '2017-05-18 20:12', '::1', '0'),
(15, '', '2017-05-18 20:12', '2017-05-18 20:40', '::1', '0'),
(16, '', '2017-05-18 20:40', '2017-07-06 15:17', '::1', '0'),
(17, '', '2017-07-05 17:58', '2017-07-06 15:17', '::1', '0'),
(18, '', '2017-07-05 18:44', '2017-07-06 15:17', '::1', '0'),
(19, '', '2017-07-06 15:29', '2017-07-12 14:09', '::1', '0'),
(20, '', '2017-07-10 15:15', '2017-07-12 14:09', '::1', '0'),
(21, '', '2017-07-11 17:51', '2017-07-12 14:09', '::1', '0'),
(22, '', '2017-07-12 12:29', '2017-07-12 14:09', '::1', '0'),
(23, '', '2017-07-12 14:26', '2017-07-12 17:26', '::1', '0'),
(24, 'TCL', '2017-07-12 16:19:59', '2017-07-12 17:07:02', '127.0.0.1', '0'),
(25, 'TCL', '2017-07-12 17:15:45', '2017-07-12 17:19:14', '127.0.0.1', '0'),
(26, 'TCL', '2017-07-12 17:20:14', '2017-07-16 13:34:32', '127.0.0.1', '0'),
(27, '', '2017-07-12 17:27', '2017-07-12 17:42', '::1', '0'),
(28, 'TCL', '2017-07-13 11:12:20', '2017-07-16 13:34:32', '127.0.0.1', '0'),
(29, '', '2017-07-13 11:45', '2017-07-16 12:57', '::1', '0'),
(30, 'TCL', '2017-07-15 11:41:52', '2017-07-16 13:34:32', '127.0.0.1', '0'),
(31, '', '2017-07-15 11:43', '2017-07-16 12:57', '::1', '0'),
(32, 'TCL', '2017-07-15 14:59:20', '2017-07-16 13:34:32', '127.0.0.1', '0'),
(33, '', '2017-07-15 15:26', '2017-07-16 12:57', '::1', '0'),
(34, 'TCL', '2017-07-16 10:24:22', '2017-07-16 13:34:32', '127.0.0.1', '0'),
(35, '', '2017-07-16 10:26', '2017-07-16 12:57', '::1', '0'),
(36, '', '2017-07-16 12:57', NULL, '::1', '1'),
(37, 'TCL', '2017-07-16 13:34:41', '2017-07-17 12:18:38', '127.0.0.1', '0'),
(38, 'TCL', '2017-07-16 16:22:34', '2017-07-17 12:18:38', '127.0.0.1', '0'),
(39, 'TCL', '2017-07-17 10:13:32', '2017-07-17 12:18:38', '127.0.0.1', '0'),
(40, '', '2017-07-17 10:15', NULL, '::1', '1'),
(41, 'TCL', '2017-07-17 12:18:47', '2017-07-17 12:25:05', '127.0.0.1', '0'),
(42, 'TCL', '2017-07-17 12:32:01', '2017-07-17 12:35:48', '127.0.0.1', '0'),
(43, 'TCL', '2017-07-17 12:35:56', '2017-07-17 12:37:44', '127.0.0.1', '0'),
(44, 'TCL', '2017-07-17 12:37:51', '2017-07-17 13:12:47', '127.0.0.1', '0'),
(45, 'TCL', '2017-07-17 13:12:55', '2017-07-17 13:13:20', '127.0.0.1', '0'),
(46, 'TCL', '2017-07-17 13:13:29', '2017-07-17 13:15:12', '127.0.0.1', '0'),
(47, 'TCL', '2017-07-17 13:15:19', '2017-07-17 13:55:43', '127.0.0.1', '0'),
(48, 'TCL', '2017-07-17 13:56:05', '2017-07-17 15:39:17', '127.0.0.1', '0'),
(49, 'TCL', '2017-07-17 15:39:29', '2017-07-17 15:40:18', '127.0.0.1', '0'),
(50, 'TCL', '2017-07-17 15:40:28', '2017-07-17 16:05:47', '127.0.0.1', '0'),
(51, 'TCL', '2017-07-17 16:05:54', '2017-07-17 16:09:43', '127.0.0.1', '0'),
(52, 'TCL', '2017-07-17 16:09:53', '2017-07-17 16:10:51', '127.0.0.1', '0'),
(53, 'TCL', '2017-07-17 16:10:58', '2017-07-19 13:15:32', '127.0.0.1', '0'),
(54, 'TCL', '2017-07-17 22:20:03', '2017-07-19 13:15:32', '127.0.0.1', '0'),
(55, 'TCL', '2017-07-17 23:28:40', '2017-07-19 13:15:32', '127.0.0.1', '0'),
(56, 'TE', '2017-07-19 13:15:53', '2017-07-19 13:16:43', '127.0.0.1', '0'),
(57, 'TCL', '2017-07-19 13:16:49', '2017-07-19 16:44:38', '127.0.0.1', '0'),
(58, 'TCL', '2017-07-19 16:13:22', '2017-07-19 16:44:38', '127.0.0.1', '0'),
(59, 'TCL', '2017-07-19 16:45:25', '2017-07-19 17:18:39', '127.0.0.1', '0'),
(60, 'TCL', '2017-07-19 17:18:56', '2017-07-20 11:10:10', '127.0.0.1', '0'),
(61, 'TCL1', '2017-07-19 17:30:40', '2017-07-20 10:33:05', '127.0.0.1', '0'),
(62, 'TCL1', '2017-07-20 10:30:56', '2017-07-20 10:33:05', '127.0.0.1', '0'),
(63, 'TCL', '2017-07-20 10:33:30', '2017-07-20 11:10:10', '127.0.0.1', '0'),
(64, 'TCL1', '2017-07-20 11:10:18', '2017-07-20 11:38:04', '127.0.0.1', '0'),
(65, 'TCL1', '2017-07-20 11:14:46', '2017-07-20 11:38:04', '127.0.0.1', '0'),
(66, 'TCL', '2017-07-20 11:38:31', '2017-07-20 12:49:18', '127.0.0.1', '0'),
(67, 'TCL', '2017-07-20 12:49:30', '2017-07-20 12:51:28', '127.0.0.1', '0'),
(68, 'TCL1', '2017-07-20 12:51:37', '2017-07-20 13:01:16', '127.0.0.1', '0'),
(69, 'TCL', '2017-07-20 13:01:26', '2017-07-20 13:07:10', '127.0.0.1', '0'),
(70, 'TCL1', '2017-07-20 13:13:35', '2017-07-24 16:11:41', '127.0.0.1', '0'),
(71, 'TCL', '2017-07-22 11:59:51', '2017-07-24 16:10:41', '127.0.0.1', '0'),
(72, 'TCL1', '2017-07-22 12:00:29', '2017-07-24 16:11:41', '127.0.0.1', '0'),
(73, 'TCL', '2017-07-23 12:21:35', '2017-07-24 16:10:41', '127.0.0.1', '0'),
(74, 'TCL1', '2017-07-23 12:30:20', '2017-07-24 16:11:41', '127.0.0.1', '0'),
(75, 'TCL', '2017-07-24 15:24:16', '2017-07-24 16:10:41', '127.0.0.1', '0'),
(76, 'TCL1', '2017-07-24 16:10:47', '2017-07-24 16:11:41', '127.0.0.1', '0'),
(77, 'TCL', '2017-07-24 16:12:41', '2017-07-24 16:28:06', '127.0.0.1', '0'),
(78, 'TCL1', '2017-07-24 16:29:11', '2018-03-13 14:35:41', '127.0.0.1', '0'),
(79, 'TCL', '2017-07-24 16:29:43', '2018-03-13 14:35:02', '127.0.0.1', '0'),
(80, 'TCL', '2018-03-13 14:34:22', '2018-03-13 14:35:02', '127.0.0.1', '0'),
(81, 'TCL1', '2018-03-13 14:35:06', '2018-03-13 14:35:41', '127.0.0.1', '0'),
(82, 'TCL', '2018-03-13 14:35:43', '2018-03-13 14:41:33', '127.0.0.1', '0'),
(83, 'TCL1', '2018-03-13 14:41:42', NULL, '127.0.0.1', '1'),
(84, 'TCL', '2018-03-13 14:42:08', '2018-04-03 13:55:47', '127.0.0.1', '0'),
(85, 'TCL', '2018-03-14 12:49:45', '2018-04-03 13:55:47', '127.0.0.1', '0'),
(86, 'TCL', '2018-03-31 16:37:53', '2018-04-03 13:55:47', '127.0.0.1', '0'),
(87, 'TCL', '2018-03-31 17:17:22', '2018-04-03 13:55:47', '::1', '0'),
(88, 'TCL', '2018-04-02 05:12:05', '2018-04-03 13:55:47', '::1', '0'),
(89, 'TCL', '2018-04-02 11:14:25', '2018-04-03 13:55:47', '::1', '0'),
(90, 'TCL', '2018-04-02 13:25:31', '2018-04-03 13:55:47', '::1', '0'),
(91, 'TCL', '2018-04-02 13:58:19', '2018-04-03 13:55:47', '::1', '0'),
(92, 'TCL', '2018-04-02 13:58:54', '2018-04-03 13:55:47', '::1', '0'),
(93, 'TCL', '2018-04-02 14:00:06', '2018-04-03 13:55:47', '::1', '0'),
(94, 'TCL', '2018-04-02 14:20:28', '2018-04-03 13:55:47', '::1', '0'),
(95, 'TCL', '2018-04-02 14:21:06', '2018-04-03 13:55:47', '::1', '0'),
(96, 'TCL', '2018-04-02 14:21:20', '2018-04-03 13:55:47', '::1', '0'),
(97, 'TCL', '2018-04-02 15:01:27', '2018-04-03 13:55:47', '::1', '0'),
(98, 'TCL', '2018-04-03 10:44:18', '2018-04-03 13:55:47', '::1', '0'),
(99, 'TCL', '2018-04-03 13:03:10', '2018-04-03 13:55:47', '::1', '0'),
(100, 'TCL', '2018-04-03 13:54:53', '2018-04-03 13:55:47', '::1', '0'),
(101, 'TCL', '2018-04-04 10:48:09', '2018-04-07 11:02:29', '::1', '0'),
(102, 'TCL', '2018-04-05 10:43:29', '2018-04-07 11:02:29', '::1', '0'),
(103, 'TCL', '2018-04-05 11:44:56', '2018-04-07 11:02:29', '::1', '0'),
(104, 'TCL', '2018-04-05 12:17:10', '2018-04-07 11:02:29', '::1', '0'),
(105, 'TCL', '2018-04-06 12:32:05', '2018-04-07 11:02:29', '::1', '0'),
(106, 'TCL', '2018-04-07 10:59:06', '2018-04-07 11:02:29', '::1', '0'),
(107, 'TCL', '2018-04-07 10:59:06', '2018-04-07 11:02:29', '::1', '0'),
(108, 'TCL', '2018-04-07 10:59:19', '2018-04-07 11:02:29', '::1', '0'),
(109, 'TCL', '2018-04-07 11:02:55', '2018-04-07 11:02:57', '::1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(10) NOT NULL,
  `sender` varchar(100) DEFAULT NULL,
  `receiver` varchar(100) DEFAULT NULL,
  `sms` text,
  `job` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `inserted_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `sender`, `receiver`, `sms`, `job`, `status`, `inserted_time`) VALUES
(1, 'Admin', 'TCL', 'hey', '18', 'unseen', '2018-04-05 07:47:11'),
(2, 'Admin', 'TCL', '....', '17', 'unseen', '2018-04-09 06:24:27'),
(3, 'Admin', 'TCL', 'hey there', '17', 'unseen', '2018-04-06 06:36:06'),
(4, 'Admin', 'TCL', 'fgfg', '17', 'unseen', '2018-04-07 05:51:32'),
(5, 'Admin', 'TCL', 'ok', '16', 'unseen', '2018-04-09 06:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(100) NOT NULL,
  `service_name` varchar(1000) DEFAULT NULL,
  `service_type` varchar(500) DEFAULT NULL,
  `service_status` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `service_type`, `service_status`) VALUES
(1, 'test', 'web', 'Active'),
(8, 'a', 'a', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `websiteId` int(11) NOT NULL,
  `jobId` int(11) DEFAULT NULL,
  `websiteType` varchar(45) DEFAULT NULL,
  `numberOfPage` varchar(45) DEFAULT NULL,
  `portfolioPage` tinyint(4) DEFAULT NULL,
  `contentManagementType` varchar(20) DEFAULT NULL,
  `socialMediaUrl` varchar(45) DEFAULT NULL,
  `existingWebsite` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`websiteId`, `jobId`, `websiteType`, `numberOfPage`, `portfolioPage`, `contentManagementType`, `socialMediaUrl`, `existingWebsite`) VALUES
(1, 4, 'Business', '6', 1, 'Static', 'sadas', 'asdasdas'),
(2, 16, 'Personal', '6', 1, 'Static', 'website company', 'website company'),
(3, 17, NULL, '56', 1, NULL, 'fdfd', 'dfdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`bannerId`),
  ADD KEY `fk_banner_jobid_idx` (`jobId`);

--
-- Indexes for table `brochure`
--
ALTER TABLE `brochure`
  ADD PRIMARY KEY (`brochureId`),
  ADD KEY `fk_brochure_jobid_idx` (`jobId`);

--
-- Indexes for table `corporate-cl`
--
ALTER TABLE `corporate-cl`
  ADD PRIMARY KEY (`corporate-ciId`),
  ADD KEY `fk_corporate_jobid_idx` (`jobId`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`imageId`),
  ADD KEY `fk_image_job_id` (`jobId`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jobId`);

--
-- Indexes for table `job_request`
--
ALTER TABLE `job_request`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `leaflet`
--
ALTER TABLE `leaflet`
  ADD PRIMARY KEY (`leafletId`),
  ADD KEY `fk_leaflet_jobid_idx` (`jobId`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`logoId`),
  ADD KEY `fk_logo_jobid_idx` (`jobId`);

--
-- Indexes for table `log_info`
--
ALTER TABLE `log_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`websiteId`),
  ADD KEY `fk_website_jobid_idx` (`jobId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `bannerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brochure`
--
ALTER TABLE `brochure`
  MODIFY `brochureId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `corporate-cl`
--
ALTER TABLE `corporate-cl`
  MODIFY `corporate-ciId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `job_request`
--
ALTER TABLE `job_request`
  MODIFY `job_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `leaflet`
--
ALTER TABLE `leaflet`
  MODIFY `leafletId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `logoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_info`
--
ALTER TABLE `log_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `websiteId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banner`
--
ALTER TABLE `banner`
  ADD CONSTRAINT `fk_banner_jobid` FOREIGN KEY (`jobId`) REFERENCES `job` (`jobId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `brochure`
--
ALTER TABLE `brochure`
  ADD CONSTRAINT `fk_brochure_jobid` FOREIGN KEY (`jobId`) REFERENCES `job` (`jobId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `corporate-cl`
--
ALTER TABLE `corporate-cl`
  ADD CONSTRAINT `fk_corporate_jobid` FOREIGN KEY (`jobId`) REFERENCES `job` (`jobId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `fk_image_job_id` FOREIGN KEY (`jobId`) REFERENCES `job` (`jobId`);

--
-- Constraints for table `leaflet`
--
ALTER TABLE `leaflet`
  ADD CONSTRAINT `fk_leaflet_jobid` FOREIGN KEY (`jobId`) REFERENCES `job` (`jobId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `logo`
--
ALTER TABLE `logo`
  ADD CONSTRAINT `fk_logo_jobid` FOREIGN KEY (`jobId`) REFERENCES `job` (`jobId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `website`
--
ALTER TABLE `website`
  ADD CONSTRAINT `fk_website_jobid` FOREIGN KEY (`jobId`) REFERENCES `job` (`jobId`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
