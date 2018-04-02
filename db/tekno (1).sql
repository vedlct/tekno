-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2018 at 08:44 AM
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
(4, 13, 'fgfg', NULL, 'gfg', 'fgfg', NULL, 'fgfg', 'fgfgf'),
(5, 14, '65', 'HalfFold', '656', 'wew', 'ProductShowcase', 'dfdf', 'dfdfd'),
(6, 15, '5454', 'HalfFold', 'sdsd', 'sdsd', NULL, 'sds', 'sdsd'),
(7, 18, 'gfgf', 'HalfFold', 'fgfg', 'gfgf', NULL, 'fgf', 'fgf');

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
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 'TCL', 'TCL', 'forhad', '01616404404', 'fcml44@gmail.com', 'baridhara', 'errorsworld.com', 'Active'),
(2, 'test', 'e10adc3949ba59abbe56e057f20f883e', 'User', 'TCL1', 'TCL1', 'test1', '444', 'test1@test.com', 'test1', 'test1', 'Active'),
(5, 'chandan', '123', 'User', 'Tecno ERP', 'TE', 'Me', '01722504422', 'fcml44@gmail.com', 'baridhara', 'errorsworld.com', 'Active'),
(4, 'sgdj', 'sgdj@123', 'User', 'Sangini Gold & Diamond Jewellery', 'SG&DJ', 'test', '014444', 'test@404.com', 'sss', 'ddd', 'Active');

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
(1, 13, 'public/teknovisual/Client_File/2018-03-31/head-659651_960_720.png.png'),
(2, 13, 'public/teknovisual/Client_File/2018-03-31/profile-icon-male-emotion-avatar-man-cartoon-portrait-happy-smiling-face-sing-vector-illustration-94159259.jpg.jpg'),
(3, 13, 'public/teknovisual/Client_File/2018-03-31/ProfileImage.jpg.jpg'),
(4, 14, 'public/teknovisual/Client_File/2018-03-31Tech Cloud/head-659651_960_720.png'),
(5, 14, 'public/teknovisual/Client_File/2018-03-31Tech Cloud/profile-icon-male-emotion-avatar-man-cartoon-portrait-happy-smiling-face-sing-vector-illustration-94159259.jpg'),
(6, 14, 'public/teknovisual/Client_File/2018-03-31Tech Cloud/ProfileImage.jpg'),
(7, 15, 'public/teknovisual/Client_File/2018-03-31/Tech Cloud/head-659651_960_720.png'),
(8, 15, 'public/teknovisual/Client_File/2018-03-31/Tech Cloud/profile-icon-male-emotion-avatar-man-cartoon-portrait-happy-smiling-face-sing-vector-illustration-94159259.jpg'),
(9, 15, 'public/teknovisual/Client_File/2018-03-31/Tech Cloud/ProfileImage.jpg'),
(10, 16, 'public/teknovisual/Client_File/2018-03-31/website company/9cpz9bKxi.png'),
(11, 16, 'public/teknovisual/Client_File/2018-03-31/website company/head-659651_960_720.png');

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobId`, `companyName`, `reference`, `email`, `phoneNumber`, `address`, `comments`, `category`, `companyWebsiteUrl`, `businessArea`, `EstimatedTime`, `created_at`) VALUES
(3, 'Brochure company', 'dfdfd', NULL, NULL, NULL, NULL, 'brochure', NULL, 'area', NULL, '2018-03-31 11:35:56'),
(4, 'website', 'sdsd', NULL, NULL, NULL, 'sadasd', 'website', NULL, NULL, NULL, '2018-03-31 11:35:56'),
(5, 'Leaflet', 'Leaflet', 'Leaflet@dfdf.com', 'Leaflet', 'Leaflet', NULL, 'leaflet', 'Leaflet', 'Leaflet', NULL, '2018-03-31 11:35:56'),
(6, 'Banner', 'Banner', NULL, NULL, NULL, 'Banner', 'banner', NULL, 'Banner', NULL, '2018-03-31 11:35:56'),
(8, 'Corporate-CI', NULL, 'Corporate-CI', 'Corporate-CI', 'Corporate-CI', NULL, 'corporate', NULL, 'Corporate-CI', NULL, '2018-03-31 11:35:56'),
(10, 'Logo', NULL, NULL, NULL, NULL, 'Logo', 'logo', NULL, NULL, NULL, '2018-03-31 11:35:56'),
(11, 'Vector', NULL, NULL, NULL, NULL, 'Vector', 'vector', NULL, NULL, NULL, '2018-03-31 11:35:56'),
(12, NULL, 'fgfgfg', NULL, NULL, NULL, NULL, 'brochure', NULL, 'gfg', NULL, '2018-03-31 11:35:56'),
(13, NULL, 'fgfgfg', NULL, NULL, NULL, NULL, 'brochure', NULL, 'gfg', NULL, '2018-03-31 11:35:56'),
(14, 'Tech Cloud', 'dfd', NULL, NULL, NULL, NULL, 'brochure', NULL, '656', NULL, '2018-03-31 11:35:56'),
(15, 'Tech Cloud', 'dsd', NULL, NULL, NULL, NULL, 'brochure', NULL, 'sds', NULL, '2018-03-31 11:35:56'),
(16, 'website company', 'website company', NULL, NULL, NULL, 'website company', 'website', NULL, NULL, NULL, '2018-03-31 11:35:56'),
(17, NULL, 'dfd', NULL, NULL, NULL, 'dfdf', 'website', NULL, NULL, NULL, '2018-03-31 11:35:56'),
(18, 'fgf', 'fgfg', NULL, NULL, NULL, NULL, 'brochure', NULL, 'fgf', NULL, '2018-03-31 11:35:56');

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
(1, 5, 'Leaflet', 'Product showcase', 'Leaflet', 'Leaflet');

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
(84, 'TCL', '2018-03-13 14:42:08', NULL, '127.0.0.1', '1'),
(85, 'TCL', '2018-03-14 12:49:45', NULL, '127.0.0.1', '1'),
(86, 'TCL', '2018-03-31 16:37:53', NULL, '127.0.0.1', '1'),
(87, 'TCL', '2018-03-31 17:17:22', NULL, '::1', '1'),
(88, 'TCL', '2018-04-02 05:12:05', NULL, '::1', '1'),
(89, 'TCL', '2018-04-02 11:14:25', NULL, '::1', '1');

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
(16, 'Admin', 'TCL1', 'aaa', '', 'Seen', '2017-07-22 06:00:39'),
(17, 'TCL1', 'Admin', 'user msg', '', 'Seen', '2017-07-22 06:01:06'),
(18, 'Techno Erp', 'Admin', 'techno', '', 'Seen', '2017-07-22 06:34:15'),
(19, 'Admin', 'TCL1', 'new msg', '', 'Seen', '2017-07-22 06:00:39'),
(20, 'Admin', 'TCL1', 's', '', 'Seen', '2017-07-22 06:00:39'),
(21, 'Admin', 'TCL1', 'reply from admin', '', 'Seen', '2017-07-22 06:00:39'),
(22, 'Admin', 'Techno Erp', 'reply to techno', '', 'unseen', '2017-07-20 06:50:47'),
(23, 'TCL1', 'Admin', 'but tcl can see this', '', 'Seen', '2017-07-22 06:01:06'),
(24, 'TCL1', 'Admin', 'tcl replied', '', 'Seen', '2017-07-22 06:01:06'),
(25, 'Admin', 'TCL1', 'tcl msg seen from admin', '', 'Seen', '2017-07-22 06:00:39'),
(26, 'TCL1', 'Admin', 'huu', '', 'Seen', '2017-07-22 06:01:06'),
(27, 'TCL1', 'Admin', 're ydftydy', '', 'Seen', '2017-07-22 06:37:26'),
(28, 'TCL1', 'Admin', 'sadasd', '', 'Seen', '2017-07-22 06:37:26'),
(29, 'TCL1', 'Admin', 'dsfsf', '', 'Seen', '2017-07-22 08:07:57'),
(30, 'TCL1', 'Admin', 'sad', '', 'Seen', '2017-07-22 08:07:57'),
(31, 'TCL1', 'Admin', 'sadasdads', '', 'Seen', '2017-07-22 08:07:57'),
(32, 'TCL1', 'Admin', 'asd', '', 'Seen', '2017-07-22 08:07:57'),
(33, 'TCL1', 'Admin', 'sad', '', 'Seen', '2017-07-22 08:07:57'),
(34, 'TCL1', 'Admin', 'sad', '', 'Seen', '2017-07-22 08:07:57'),
(35, 'TCL1', 'Admin', 'sadasd', '', 'Seen', '2017-07-22 08:07:57'),
(36, 'TCL1', 'Admin', 'ass', '', 'Seen', '2017-07-22 08:07:57'),
(37, 'TCL1', 'Admin', 'dsfsdf', '', 'Seen', '2017-07-22 08:07:57'),
(38, 'TCL1', 'Admin', 'a', '', 'Seen', '2017-07-22 08:07:57'),
(39, 'TCL1', 'Admin', 'as', '', 'Seen', '2017-07-22 08:07:57'),
(40, 'TCL1', 'Admin', 'asd', '', 'Seen', '2017-07-22 08:07:57'),
(41, 'TCL1', 'Admin', 'asd', '', 'Seen', '2017-07-22 08:07:57'),
(42, 'TCL1', 'Admin', 'asd', '', 'Seen', '2017-07-22 08:07:57'),
(43, 'TCL1', 'Admin', 'asd', '', 'Seen', '2017-07-22 08:07:57'),
(44, 'TCL1', 'Admin', 'new msg1', '', 'Seen', '2017-07-22 08:07:57'),
(45, 'TCL1', 'Admin', 'newmsg2', '', 'Seen', '2017-07-22 08:07:57'),
(46, 'TCL1', 'Admin', 'jk', '', 'Seen', '2017-07-23 06:29:36'),
(47, 'TCL1', 'Admin', 'jk', '', 'Seen', '2017-07-23 06:29:36'),
(48, 'TCL1', 'Admin', 'ui', '', 'Seen', '2017-07-23 06:29:36'),
(49, 'Admin', 'TCL1', 'asd', NULL, 'Seen', '2017-07-23 06:32:21'),
(50, 'Admin', 'TCL1', 'hii', NULL, 'Seen', '2017-07-23 06:33:25'),
(51, 'TCL1', 'Admin', 'hg', NULL, 'Seen', '2017-07-23 06:33:40'),
(52, 'Admin', 'TCL1', 'jo', NULL, 'Seen', '2017-07-23 06:33:57'),
(53, 'TCL1', 'Admin', 'hh', NULL, 'Seen', '2017-07-23 06:34:49'),
(54, 'TCL1', 'Admin', 'jkk', NULL, 'Seen', '2017-07-23 06:35:03'),
(55, 'TCL1', 'Admin', 'okk', NULL, 'Seen', '2017-07-23 06:45:49'),
(56, 'Admin', 'TCL1', 'kkkkkk', NULL, 'Seen', '2017-07-23 06:46:09'),
(57, 'TCL1', 'Admin', 'hi admin', NULL, 'Seen', '2017-07-23 06:46:23'),
(58, 'Admin', 'TCL1', 'a1', NULL, 'Seen', '2017-07-23 06:46:46'),
(59, 'Admin', 'TCL1', 'a2', NULL, 'Seen', '2017-07-23 06:47:04'),
(60, 'Admin', 'TCL1', 'a3', NULL, 'Seen', '2017-07-23 06:47:04'),
(61, 'Admin', 'TCL1', '1', NULL, 'Seen', '2017-07-23 06:47:40'),
(62, 'Admin', 'TCL1', '2', NULL, 'Seen', '2017-07-23 06:47:40'),
(63, 'Admin', 'TCL1', '3', NULL, 'Seen', '2017-07-23 06:47:40'),
(64, 'Admin', 'TCL1', 'a', NULL, 'Seen', '2017-07-23 06:52:17'),
(65, 'Admin', 'TCL1', '1', NULL, 'Seen', '2017-07-23 06:53:44'),
(66, 'Admin', 'TCL1', 'q', NULL, 'Seen', '2017-07-23 06:53:56'),
(67, 'Admin', 'TCL1', 'w', NULL, 'Seen', '2017-07-23 06:54:12'),
(68, 'Admin', 'TCL1', 'rsad', NULL, 'Seen', '2017-07-23 06:54:39'),
(69, 'Admin', 'TCL1', 'ddd', NULL, 'Seen', '2017-07-23 06:54:49'),
(70, 'Admin', 'TCL1', 'tttt', NULL, 'Seen', '2017-07-23 06:55:01'),
(71, 'Admin', 'TCL1', 'as', NULL, 'Seen', '2017-07-23 08:27:42'),
(72, 'Admin', 'TCL1', 'as', NULL, 'Seen', '2017-07-23 08:28:18'),
(73, 'Admin', 'TCL1', 'fff', NULL, 'Seen', '2017-07-23 08:28:55'),
(74, 'Admin', 'TCL1', 'asd', NULL, 'Seen', '2017-07-23 08:43:35'),
(75, 'Admin', 'TCL1', 'asdff', NULL, 'Seen', '2017-07-23 08:44:43'),
(76, 'Admin', 'TCL1', 'sad', NULL, 'Seen', '2017-07-23 08:46:27'),
(77, 'Admin', 'TCL1', 'asdsadf', NULL, 'Seen', '2017-07-23 08:49:58'),
(78, 'Admin', 'TCL1', 'asss', NULL, 'Seen', '2017-07-23 08:52:53'),
(79, 'Admin', 'TCL1', 'asdf', NULL, 'Seen', '2017-07-23 08:54:22'),
(80, 'Admin', 'TCL1', 'hi', NULL, 'Seen', '2017-07-23 09:04:21'),
(81, 'Admin', 'TCL1', 'aaaa', NULL, 'Seen', '2017-07-23 09:04:59'),
(82, 'Admin', 'TCL1', 'din', NULL, 'Seen', '2017-07-23 09:21:06'),
(83, 'Admin', 'TCL1', 'islam', NULL, 'Seen', '2017-07-23 09:21:51'),
(84, 'Admin', 'TCL1', 'bachao', NULL, 'Seen', '2017-07-23 09:22:34'),
(85, 'Admin', 'TCL1', 'aaa', NULL, 'Seen', '2017-07-23 09:35:57'),
(86, 'Admin', 'TCL1', 'bbbb', NULL, 'Seen', '2017-07-23 09:44:33'),
(87, 'Admin', 'TCL1', 'ass', NULL, 'Seen', '2017-07-23 09:48:48'),
(88, 'Admin', 'TCL1', 'grr', NULL, 'Seen', '2017-07-23 09:49:41'),
(89, 'Admin', 'TCL1', 'asdffdsf dsf  sdf', NULL, 'Seen', '2017-07-23 09:50:15'),
(90, 'Admin', 'TCL1', 'aaav', NULL, 'Seen', '2017-07-23 09:56:34'),
(91, 'Admin', 'TCL1', 'p[', NULL, 'Seen', '2017-07-23 10:01:50'),
(92, 'Admin', 'TCL1', 'aaaaaavgfdg', NULL, 'Seen', '2017-07-23 10:03:34'),
(93, 'Admin', 'TCL1', 'a', NULL, 'Seen', '2017-07-23 10:10:26'),
(94, 'Admin', 'TCL1', 'aaa', NULL, 'Seen', '2017-07-23 10:10:38'),
(95, 'Admin', 'TCL1', 'gb', NULL, 'Seen', '2017-07-23 10:10:51'),
(96, 'Admin', 'TCL1', 'fgfg', NULL, 'Seen', '2017-07-23 10:11:03'),
(97, 'Admin', 'TCL1', 'qwer', NULL, 'Seen', '2017-07-23 10:13:11'),
(98, 'Admin', 'TCL1', 'av', NULL, 'Seen', '2017-07-23 10:15:04'),
(99, 'Admin', 'TCL1', 'bbb', NULL, 'Seen', '2017-07-23 10:16:11'),
(100, 'Admin', 'TCL1', 'gggg', NULL, 'Seen', '2017-07-23 10:17:23'),
(101, 'Admin', 'TCL1', 'cccc', NULL, 'Seen', '2017-07-23 10:19:27'),
(102, 'Admin', 'TCL1', 'nnn', NULL, 'Seen', '2017-07-23 10:33:01'),
(103, 'Admin', 'TCL1', 'bbb', NULL, 'Seen', '2017-07-23 10:33:54'),
(104, 'Admin', 'TCL1', 'dsf', NULL, 'Seen', '2017-07-23 10:34:12'),
(105, 'TCL1', 'Admin', 'gh', NULL, 'Seen', '2017-07-23 10:35:01'),
(106, 'Admin', 'TCL1', 'p', NULL, 'Seen', '2017-07-23 10:36:47'),
(107, 'Admin', 'TCL1', 'pp', NULL, 'Seen', '2017-07-23 10:37:32'),
(108, 'Admin', 'TCL1', 'oo', NULL, 'Seen', '2017-07-23 10:39:54'),
(109, 'Admin', 'TCL1', 'aaer', NULL, 'Seen', '2017-07-23 10:41:21'),
(110, 'Admin', 'TCL1', 'vbvv', NULL, 'Seen', '2017-07-23 10:44:05'),
(111, 'Admin', 'TCL1', 'asdada', NULL, 'Seen', '2017-07-23 10:47:23'),
(112, 'Admin', 'TCL1', 'aaaaa', NULL, 'Seen', '2017-07-23 10:48:25'),
(113, 'Admin', 'TCL1', 'bbbb', NULL, 'Seen', '2017-07-23 10:52:56'),
(114, 'Admin', 'TCL1', 'vb', NULL, 'Seen', '2017-07-23 10:53:36'),
(115, 'Admin', 'TCL1', 'bv', NULL, 'Seen', '2017-07-23 10:54:04'),
(116, 'Admin', 'TCL1', 'pppp', NULL, 'Seen', '2017-07-23 10:57:22'),
(117, 'Admin', 'TCL1', 'y', NULL, 'Seen', '2017-07-23 10:59:02'),
(118, 'Admin', 'TCL1', 'sdd', NULL, 'Seen', '2017-07-23 11:00:26'),
(119, 'Admin', 'TCL1', 'y', NULL, 'Seen', '2017-07-23 11:03:10'),
(120, 'Admin', 'TCL1', 'bbb', NULL, 'Seen', '2017-07-23 11:04:21'),
(121, 'Admin', 'TCL1', 'xfhdf', NULL, 'Seen', '2017-07-23 11:04:51'),
(122, 'Admin', 'TCL1', 'p', NULL, 'Seen', '2017-07-23 11:07:27'),
(123, 'Admin', 'TCL1', 'ppo', NULL, 'Seen', '2017-07-23 11:12:18'),
(124, 'Admin', 'TCL1', 'ppo', NULL, 'Seen', '2017-07-23 11:13:13'),
(125, 'Admin', 'TCL1', 'qwer', NULL, 'Seen', '2017-07-23 11:13:47'),
(126, 'Admin', 'TCL1', 'asdad', NULL, 'Seen', '2017-07-23 11:14:24'),
(127, 'Admin', 'TCL1', 'asd', NULL, 'Seen', '2017-07-23 11:15:10'),
(128, 'Admin', 'TCL1', 'sadfg', NULL, 'Seen', '2017-07-23 11:18:16'),
(129, 'Admin', 'TCL1', 'ggg', NULL, 'Seen', '2017-07-23 11:18:28'),
(130, 'Admin', 'TCL1', 'bnn', NULL, 'Seen', '2017-07-23 11:20:51'),
(131, 'Admin', 'TCL1', 'asffd', NULL, 'Seen', '2017-07-23 11:21:46'),
(132, 'Admin', 'TCL1', 't', NULL, 'Seen', '2017-07-23 11:22:53'),
(133, 'Admin', 'TCL1', 'asdfaf', NULL, 'Seen', '2017-07-23 11:24:58'),
(134, 'Admin', 'TCL1', 'asdad', NULL, 'Seen', '2017-07-23 11:26:04'),
(135, 'Admin', 'TCL1', 'ddd', NULL, 'Seen', '2017-07-23 11:26:15'),
(136, 'Admin', 'TCL1', 'adasd', NULL, 'Seen', '2017-07-23 11:27:31'),
(137, 'Admin', 'TCL1', 'a', NULL, 'Seen', '2017-07-23 11:32:01'),
(138, 'Admin', 'TCL1', 'asdads', NULL, 'Seen', '2017-07-23 11:32:48'),
(139, 'Admin', 'TCL1', 'dsaf', NULL, 'Seen', '2017-07-23 11:33:22'),
(140, 'Admin', 'TCL1', 'asdafafd', NULL, 'Seen', '2017-07-23 11:34:55'),
(141, 'Admin', 'TCL1', 's', NULL, 'Seen', '2017-07-23 11:35:22'),
(142, 'Admin', 'TCL1', 'df', NULL, 'Seen', '2017-07-23 11:35:52'),
(143, 'Admin', 'TCL1', 'df', NULL, 'Seen', '2017-07-23 11:36:39'),
(144, 'Admin', 'TCL1', 'asdf', NULL, 'Seen', '2017-07-23 11:37:11'),
(145, 'Admin', 'TCL1', 'sadfsad', NULL, 'Seen', '2017-07-23 11:37:57'),
(146, 'Admin', 'TCL1', 'ds', NULL, 'Seen', '2017-07-23 12:00:33'),
(147, 'Admin', 'TCL1', 'asd', NULL, 'Seen', '2017-07-23 12:03:49'),
(148, 'Admin', 'TCL1', 'b', NULL, 'Seen', '2017-07-23 12:05:41'),
(149, 'Admin', 'TCL1', 'dsf', NULL, 'Seen', '2017-07-23 12:08:08'),
(150, 'Admin', 'TCL1', 'fds', NULL, 'Seen', '2017-07-23 12:08:47'),
(151, 'Admin', 'TCL1', 'g', NULL, 'Seen', '2017-07-23 12:09:34'),
(152, 'TCL1', 'Admin', 'fd', NULL, 'Seen', '2017-07-23 12:09:51'),
(153, 'Admin', 'TCL1', 'yy', NULL, 'Seen', '2017-07-23 12:12:24'),
(154, 'Admin', 'TCL1', 'aa', NULL, 'Seen', '2017-07-23 12:13:31'),
(155, 'Admin', 'TCL1', 'asd', NULL, 'Seen', '2017-07-23 12:14:48'),
(156, 'TCL1', 'Admin', 'ds', NULL, 'Seen', '2017-07-23 12:15:05'),
(157, 'Admin', 'TCL1', 'ab', NULL, 'Seen', '2017-07-23 12:15:43'),
(158, 'Admin', 'TCL1', 'asfd', NULL, 'Seen', '2017-07-23 12:16:53'),
(159, 'Admin', 'TCL1', 'b', NULL, 'Seen', '2017-07-23 12:18:00'),
(160, 'Admin', 'TCL1', 'mmm', NULL, 'Seen', '2017-07-23 12:18:22'),
(161, 'Admin', 'TCL1', 'ab', NULL, 'Seen', '2017-07-23 12:20:21'),
(162, 'Admin', 'TCL1', 'as', NULL, 'Seen', '2017-07-23 12:21:33'),
(163, 'TCL1', 'Admin', 'hi', '3', 'Seen', '2017-07-24 10:12:48'),
(164, 'Admin', 'TCL1', 'ffff', NULL, 'Seen', '2017-07-24 10:30:00'),
(165, 'TCL1', 'Admin', 'sadf', NULL, 'Seen', '2017-07-24 10:31:00'),
(166, 'Admin', 'TCL1', 'sd', NULL, 'Seen', '2017-07-24 10:31:23'),
(167, 'Admin', 'TCL1', 'asd', NULL, 'Seen', '2018-03-13 08:35:33'),
(168, 'Admin', 'TCL1', 'dsd', NULL, 'Seen', '2018-03-13 08:41:45'),
(169, 'Admin', 'TCL1', 'hey can you hear me??', NULL, 'Seen', '2018-03-13 08:41:45'),
(170, 'Admin', 'TCL1', 'hle', NULL, 'Seen', '2018-03-13 08:42:24'),
(171, 'Admin', 'TCL1', 'lol', NULL, 'Seen', '2018-03-13 08:42:31'),
(172, 'TCL1', 'Admin', 'lol2', NULL, 'Seen', '2018-03-13 08:44:59');

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
  MODIFY `brochureId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `corporate-cl`
--
ALTER TABLE `corporate-cl`
  MODIFY `corporate-ciId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `job_request`
--
ALTER TABLE `job_request`
  MODIFY `job_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `leaflet`
--
ALTER TABLE `leaflet`
  MODIFY `leafletId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `logoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_info`
--
ALTER TABLE `log_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
