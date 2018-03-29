-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2018 at 11:11 AM
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
(2, 3, 'Brochure size', 'PanelFold', 'dfdfdf', 'dfdfd', 'ProductShowcase', 'dfd', 'dfdfdfd');

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
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `imageId` int(11) NOT NULL,
  `jobId` int(11) NOT NULL,
  `path` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `businessArea` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobId`, `companyName`, `reference`, `email`, `phoneNumber`, `address`, `comments`, `category`, `companyWebsiteUrl`, `businessArea`) VALUES
(3, 'Brochure company', 'dfdfd', NULL, NULL, NULL, NULL, 'brochure', NULL, 'area'),
(4, 'website', 'sdsd', NULL, NULL, NULL, 'sadasd', 'website', NULL, NULL),
(5, 'Leaflet', 'Leaflet', 'Leaflet@dfdf.com', 'Leaflet', 'Leaflet', NULL, 'leaflet', 'Leaflet', 'Leaflet'),
(6, 'Banner', 'Banner', NULL, NULL, NULL, 'Banner', 'banner', NULL, 'Banner'),
(8, 'Corporate-CI', NULL, 'Corporate-CI', 'Corporate-CI', 'Corporate-CI', NULL, 'corporate', NULL, 'Corporate-CI'),
(10, 'Logo', NULL, NULL, NULL, NULL, 'Logo', 'logo', NULL, NULL),
(11, 'Vector', NULL, NULL, NULL, NULL, 'Vector', 'vector', NULL, NULL);

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
(1, 4, 'Business', '6', 1, 'Static', 'sadas', 'asdasdas');

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
  MODIFY `brochureId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `corporate-cl`
--
ALTER TABLE `corporate-cl`
  MODIFY `corporate-ciId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jobId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `websiteId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
