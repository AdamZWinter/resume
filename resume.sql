-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Generation Time: Nov 18, 2022 at 05:21 PM
-- Server version: 10.9.3-MariaDB-1:10.9.3+maria~ubu2204
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adam_resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE `guestbook` (
  `fname` varchar(64) NOT NULL,
  `lname` varchar(64) NOT NULL,
  `message` text NOT NULL,
  `link` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`fname`, `lname`, `message`, `link`) VALUES
('Adam', 'Winter', 'This is my message to you hoo hoo', 'http://orange.topsecondhost.com/adam/resume/guestbook.php');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `title` varchar(64) NOT NULL,
  `image` varchar(64) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`title`, `image`, `content`) VALUES
('DMARC Now', 'img/dmarc.jpg', '<li>Ingests and processes DMARC reports</li>\r\n<li>Presents DMARC reports in human-readable form</li>\r\n<li><a href=\"https://dmarc.topsecondhost.com/\">https://dmarc.topsecondhost.com/</a></li>'),
('GC Bookings', 'img/gcbookings.jpg', '<li>Provides plugin booking service to Google Calendar</li>\r\n<li>Manage bookings entire through yoour Google Calendar</li>\r\n<li>Customers pay for bookings through Paypal</li>\r\n<li>Google and Paypal API integration</li>\r\n<li><a href=\"https://gcbookings.com/\">https://gcbookings.com/</a></li>'),
('JACT', 'img/jactt.jpg', '<li>(Jenkins Azure/AWS Container Terraform)</li>\r\n<li>Template for creating Jenkins Pipelines for deploying contianers to AWS/Azure using Terraform</li>\r\n<li><a href=\"https://github.com/AdamZWinter/apachejact\">https://github.com/AdamZWinter/apachejact</a></li>'),
('SDEV 305', 'img/walnut.jpg', '<li>Built Dev server in AWS for use by all team members</li>\r\n<li>Each team member has their own dev environment</li>\r\n<li>Updates are pushed to GitHub, then pulled to live/production server from GitHub</li>\r\n<li><a href=\"https://github.com/AdamZWinter/weddingRentals\">https://github.com/AdamZWinter/weddingRentals</a></li>\r\n<li><a href=\"http://orange.topsecondhost.com/adam/weddingRentals/admin.php\">http://orange.topsecondhost.com/adam/weddingRentals/admin.php</a></li>'),
('TopSecondHost', 'img/topsecondhost.jpg', '<li>Originally, this was a set of installation scripts for configuring a CentOS server in AWS as a LAMP stack.</li>\r\n<li>That old version is still available as the \"oldMonolith\" branch in the GitHub repo.</li>\r\n<li>The new version creates a platform-agnostic LAMP stack using Docker-Compose.</li>\r\n<li><a href=\"https://github.com/AdamZWinter/TopSecondHost\">https://github.com/AdamZWinter/TopSecondHost</a></li>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
