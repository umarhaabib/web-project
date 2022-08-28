-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 12:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `date_to_sent` date DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'not sent'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `subject`, `date_to_sent`, `attachment`, `status`) VALUES
(3, ' OU Walking Club, Announcemnt', '2022-05-14', 'Capture (2).png', 'not sent'),
(4, 'NOTICE - Commencement of Classes ', '2022-05-23', 'Capture (2).png', 'sent'),
(5, 'HEC Plagiarism Policy', '2022-05-23', 'Exam Entrance Slip.pdf', 'sent'),
(6, ' OU Walking Club, Announcemnt', '2022-05-23', 'Capture (2).png', 'sent'),
(7, ' OU Walking Club, Announcemnt', '2022-05-13', 'Capture (2).png', 'not sent'),
(8, ' OU Walking Club, Announcemnt', '2022-05-23', 'Capture (2).png', 'sent');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `query_type` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `query_type`, `message`, `user_id`) VALUES
(1, 'Watcombe to Sheldon', '2022-05-13', '02:08:00.000000', '02:09:00.000000', NULL),
(3, 'New Walk Event', '2022-05-19', '16:46:00.000000', '16:46:00.000000', NULL),
(4, 'User proposed event', '2022-05-19', '16:50:00.000000', '16:50:00.000000', NULL),
(5, 'New Walk Event', '2022-05-12', '16:02:00.000000', '18:59:00.000000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news_items`
--

CREATE TABLE `news_items` (
  `id` int(255) NOT NULL,
  `first_showing_date` date DEFAULT NULL,
  `last_showing_date` date DEFAULT NULL,
  `news_description` longtext DEFAULT NULL,
  `news_added_by` varchar(255) DEFAULT NULL,
  `added_by_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_items`
--

INSERT INTO `news_items` (`id`, `first_showing_date`, `last_showing_date`, `news_description`, `news_added_by`, `added_by_id`) VALUES
(1, '2022-05-14', '2022-05-28', 'ONE-TIME/SEMESTER ENROLLMENT RELAXATION - Enrollment in leftover courses for completing the study program for the students who completed maximum duration', 'Admin', 1),
(2, '2022-05-20', '2022-05-04', 'ONE-TIME/SEMESTER ENROLLMENT RELAXATION - Enrollment in leftover courses for completing the study program for the students who completed maximum duration ONE-TIME/SEMESTER ENROLLMENT RELAXATION - Enrollment in leftover courses for completing the study program for the students who completed maximum duration', 'Admin', 1),
(3, '2022-05-14', '2022-05-16', 'ANNOUNCEMENT FOR RE-OPENING OF ADMISSIONS – SPRING 2022', 'Admin', 1),
(4, '2022-05-05', '2022-06-11', 'ANNOUNCEMENT FOR RE-OPENING OF ADMISSIONS – SPRING 2022', 'Admin', 1),
(8, '2022-05-23', '2022-05-26', 'News description', 'Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `other_events`
--

CREATE TABLE `other_events` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `time` time(6) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other_events`
--

INSERT INTO `other_events` (`id`, `name`, `date`, `type`, `time`, `location`) VALUES
(3, ' Watcombe to Sheldon event', '2022-06-03', 'Call to member', '15:52:00.000000', 'Tronto'),
(4, 'Team Meeting', '2022-05-13', 'Call to member', '17:06:00.000000', 'Tronto'),
(5, '', '0000-00-00', '', '00:00:00.000000', ''),
(6, '', '0000-00-00', '', '00:00:00.000000', ''),
(7, '', '0000-00-00', '', '00:00:00.000000', ''),
(8, '', '0000-00-00', '', '00:00:00.000000', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `CaptchaString` varchar(255) DEFAULT NULL,
  `GroupNumber` varchar(255) DEFAULT 'User',
  `Role` varchar(255) NOT NULL DEFAULT 'Student',
  `consent_to_recieve_emails` varchar(255) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `email`, `password`, `CaptchaString`, `GroupNumber`, `Role`, `consent_to_recieve_emails`) VALUES
('112233441', 'umarhaabib98@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'V7V866', '10', 'Student', 'No'),
('123456789', 'umarhaabib98@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'N9Q672', '3', 'Student', 'ConsentEmail'),
('444444445', 'ff@gmail.com', 'kjhk', 'F6D389', '2', 'Admin', 'ConsentEmail'),
('457455215', 'gg@gmail.com', '23ac94c9a5905932ec65300aec756b82', 'N9X698', '3', 'Student', 'ConsentEmail'),
('555555554', 'rr@gmail.com', 'a67ef84afbf01ea3d84adda4fabc4adc', 'S5H080', '2', 'Student', 'ConsentEmail'),
('665577876', 'umarhaabib98@gmail.coma', '25f9e794323b453885f5181f1b624d0b', 'X6D005', '2', 'Student', 'No'),
('777777777', 'umarhaabib98@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'S6K131', '10', 'Student', 'No'),
('785478547', 'abc@gmail.com', 'e99a18c428cb38d5f260853678922e03', 'C0Y026', '3', 'Student', 'ConsentEmail'),
('987654319', 'umarhaabib98@gmail.com', '1bbd886460827015e5d605ed44252251', 'T6S834', '10', 'Student', 'No'),
('Admin', 'admin@gmail.com', '12345', '12345678', '1', 'Student', 'Yes'),
('manee', 'manee.n2a@gmail.com', '12345', '2147483647', '1', 'Student', 'Yes'),
('Umar Habib', 'umarhaabib98@gmail.com', '12345', '2147483647', '1', 'Student', 'Yes'),
('User', 'alifraz882@gmail.com', '12345', '2147483647', 'User', 'Student', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `user_comments`
--

CREATE TABLE `user_comments` (
  `UserId` varchar(255) NOT NULL,
  `Rating` varchar(255) DEFAULT NULL,
  `Message` varchar(300) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `edit_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_comments`
--

INSERT INTO `user_comments` (`UserId`, `Rating`, `Message`, `Image`, `edit_status`) VALUES
('457455215', '1', 'sd', '', ''),
('987654319', '7', 'hello', 'Capture.PNG', 'editable'),
('444444445', '7', 'all is fine', 'Capture - Copy.PNG', 'editable'),
('112233441', '5', 'kk', 'Capture.PNG', 'editable'),
('112233441', '3', 'hello', 'Capture.PNG', 'editable'),
('112233441', '3', 'sd', 'Capture - Copy.PNG', 'editable'),
('112233441', '2', 'd', 'Capture.PNG', 'editable'),
('112233441', '2', 'd', 'Capture.PNG', 'editable'),
('112233441', '3', 'ds', 'Capture.PNG', 'editable'),
('112233441', '6', 'sds', 'Capture.PNG', 'editable'),
('112233441', '6', 'sds', 'Capture.PNG', 'editable'),
('112233441', '6', 'fgfg', 'download (3).jpg', 'editable');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_items`
--
ALTER TABLE `news_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_events`
--
ALTER TABLE `other_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `user_comments`
--
ALTER TABLE `user_comments`
  ADD KEY `UserId` (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news_items`
--
ALTER TABLE `news_items`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `other_events`
--
ALTER TABLE `other_events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_comments`
--
ALTER TABLE `user_comments`
  ADD CONSTRAINT `user_comments_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
