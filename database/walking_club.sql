-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 02:48 PM
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
-- Database: `walking_club`
--

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
(4, 'Team Meeting', '2022-05-13', 'Call to member', '17:06:00.000000', 'Tronto');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` int(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT 'User',
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `payment_method` varchar(255) DEFAULT NULL,
  `consent_to_recieve_emails` varchar(255) NOT NULL DEFAULT 'No',
  `join_request` varchar(255) NOT NULL DEFAULT 'Not Approved'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone`, `role`, `status`, `payment_method`, `consent_to_recieve_emails`, `join_request`) VALUES
(1, 'Admin', 'admin@gmail.com', '12345', 12345678, 'Admin', 'Active', 'Cash', 'Yes', 'Approved'),
(2, 'User', 'user@gmail.com', '12345', 2147483647, 'User', 'Active', 'Cash', 'No', 'Approved'),
(3, 'Umar Habib', 'umarhaabib98@gmail.com', '12345', 2147483647, 'Admin', 'Active', 'Card', 'Yes', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `walk_events`
--

CREATE TABLE `walk_events` (
  `id` int(255) NOT NULL,
  `walk_event_name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `start_time` time(6) DEFAULT NULL,
  `end_time` time(6) DEFAULT NULL,
  `meeting_point` varchar(255) DEFAULT NULL,
  `distance` int(255) DEFAULT NULL,
  `leader_name` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Proposed',
  `user_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `walk_events`
--

INSERT INTO `walk_events` (`id`, `walk_event_name`, `date`, `start_time`, `end_time`, `meeting_point`, `distance`, `leader_name`, `comments`, `status`, `user_id`) VALUES
(1, 'Watcombe to Sheldon', '2022-05-13', '02:08:00.000000', '02:09:00.000000', 'Lahore', 12, 'Umar', ' Grade A walk with steep hills', 'Rejected', NULL),
(3, 'New Walk Event', '2022-05-19', '16:46:00.000000', '16:46:00.000000', 'Lahore', 45, 'AliAzaib', 'Its great', 'Approved', NULL),
(4, 'User proposed event', '2022-05-19', '16:50:00.000000', '16:50:00.000000', 'UAE', 23, 'Ali', 'Okay', 'Proposed', NULL),
(5, 'New Walk Event', '2022-05-12', '16:02:00.000000', '18:59:00.000000', 'Lahore', 34, 'Umar', 'Good', 'Approved', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `other_events`
--
ALTER TABLE `other_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `walk_events`
--
ALTER TABLE `walk_events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `other_events`
--
ALTER TABLE `other_events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `walk_events`
--
ALTER TABLE `walk_events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
