-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 13, 2025 at 06:27 AM
-- Server version: 10.11.10-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u346521377_maindatrix`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_login` varchar(250) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 2 COMMENT '1=Master-admin;2=Sub Admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `last_login`, `type`) VALUES
(9, 'admin', '0e7517141fb53f21ee439b355b5a1d0a', NULL, 1),
(10, 'rakhi', '6626e260667a71f6c164c0ee59054ac5', NULL, 2),
(11, 'admin123', '0e7517141fb53f21ee439b355b5a1d0a', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `online_status`
--

CREATE TABLE `online_status` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(25) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `project_id` varchar(100) NOT NULL,
  `member_id` varchar(100) NOT NULL,
  `resp_id` varchar(50) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `register_date` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `project_id`, `member_id`, `resp_id`, `ip_address`, `register_date`, `end_time`, `status`) VALUES
(1, '123645', '87987', '', '2405:201:4026:f0e4:8161:7ca:fee4:225e', '2025-06-05 05:54:41', '2025-06-05 05:54:41', 'Complete'),
(2, 'xxx', 'xxxx', '', '2401:4900:8843:7303:4201:1cc6:ca96:cfeb', '2025-06-05 06:05:20', '2025-06-05 06:05:20', 'Complete'),
(3, 'xxx', 'xxxx', '', '2401:4900:8843:7303:4201:1cc6:ca96:cfeb', '2025-06-05 06:05:28', '2025-06-05 06:05:28', 'Terminated'),
(4, 'xxx', 'xxxx', '', '2401:4900:8843:7303:4201:1cc6:ca96:cfeb', '2025-06-05 06:05:31', '2025-06-05 06:05:31', 'Quotafull'),
(5, 'xxx', 'xxxx', '', '2401:4900:8843:7303:4201:1cc6:ca96:cfeb', '2025-06-05 06:37:17', '2025-06-05 06:37:17', 'Complete'),
(6, 'xxx', 'xxxx', '', '2401:4900:8843:7303:4201:1cc6:ca96:cfeb', '2025-06-05 06:37:20', '2025-06-05 06:37:20', 'Terminated'),
(7, 'xxx', 'xxxx', '', '2401:4900:8843:7303:4201:1cc6:ca96:cfeb', '2025-06-05 06:37:23', '2025-06-05 06:37:23', 'Quotafull'),
(8, 'Test', 'hYpKCoGYUNR', '', '106.219.156.241', '2025-06-05 07:10:46', '2025-06-05 07:10:46', 'Complete');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_status`
--
ALTER TABLE `online_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `online_status`
--
ALTER TABLE `online_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
