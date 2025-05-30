-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2025 at 09:41 AM
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
-- Database: `u346521377_datrixinsights`
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
(1, '123', '123456789456', '', '::1', '2025-05-29 11:03:10', '2025-05-29 11:03:10', 'Complete'),
(2, '123', '123456789456', '', '::1', '2025-05-29 11:04:24', '2025-05-29 11:04:24', 'Complete'),
(3, '123', '123456789456', '', '::1', '2025-05-29 11:04:37', '2025-05-29 11:04:37', 'Complete'),
(4, '123', '123456789456', '', '1231313', '2025-05-29 11:06:30', '2025-05-29 11:06:30', 'Complete'),
(5, '4566445', '123456789456', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 11:42:43', '2025-05-29 11:42:43', 'Complete'),
(6, '123', '123456789456', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 11:43:02', '2025-05-29 11:43:02', 'Complete'),
(7, '123', '123456789456', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 11:43:25', '2025-05-29 11:43:25', 'Terminated'),
(8, '123', '123456789456', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 11:43:56', '2025-05-29 11:43:56', 'Quotafull'),
(9, '123', '123456789456', '', '106.219.154.175', '2025-05-29 11:59:53', '2025-05-29 11:59:53', 'Complete'),
(10, '123', '123456789456', '', '2409:40d0:30b1:e814:9c86:81e9:61f5:c660', '2025-05-29 01:57:57', '2025-05-29 01:57:57', 'Complete'),
(11, '123', '123456789456', '', '2409:40d0:30b1:e814:9c86:81e9:61f5:c660', '2025-05-29 01:58:06', '2025-05-29 01:58:06', 'Terminated'),
(12, '123', '123456789456', '', '2409:40d0:30b1:e814:9c86:81e9:61f5:c660', '2025-05-29 01:58:09', '2025-05-29 01:58:09', 'Quotafull'),
(13, '123', '123456789456', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 02:36:27', '2025-05-29 02:36:27', 'Quotafull'),
(14, '123', '123456789456', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 02:38:57', '2025-05-29 02:38:57', 'Quotafull'),
(15, '123', '', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 02:39:04', '2025-05-29 02:39:04', 'Quotafull'),
(16, '123', 'xxx', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 02:39:06', '2025-05-29 02:39:06', 'Quotafull'),
(17, '', 'xxx', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 02:39:09', '2025-05-29 02:39:09', 'Quotafull'),
(18, 'xxxx', 'xxx', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 02:39:10', '2025-05-29 02:39:10', 'Quotafull'),
(19, '123', '123456789456', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 02:40:30', '2025-05-29 02:40:30', 'Quotafull'),
(20, 'xxx', 'xxxx', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 02:42:04', '2025-05-29 02:42:04', 'Complete'),
(21, 'OF0lYSmp9NRR', 'TEST', '', '106.219.154.175', '2025-05-29 05:31:54', '2025-05-29 05:31:54', 'Complete'),
(22, 'om123456', '1236456', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 05:38:59', '2025-05-29 05:38:59', 'Complete'),
(23, 'xxx', 'xxxx', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 05:39:24', '2025-05-29 05:39:24', 'Complete'),
(24, 'xxx', 'OF0lYSmp9NRR', '', '106.219.154.175', '2025-05-29 05:41:42', '2025-05-29 05:41:42', 'Complete'),
(25, 'TEST', 'BEhSnvTkhNRR', '', '106.219.154.175', '2025-05-29 05:41:59', '2025-05-29 05:41:59', 'Complete'),
(26, '123456789', 'sds56ds', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 05:50:59', '2025-05-29 05:50:59', 'Quotafull'),
(27, '123546', 'adas6556', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 05:55:17', '2025-05-29 05:55:17', 'Terminated'),
(28, '123546', 'adas6556', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 05:56:57', '2025-05-29 05:56:57', 'Terminated'),
(29, '123546', 'adas6556', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 05:58:05', '2025-05-29 05:58:05', 'Terminated'),
(30, '123546', 'adas6556', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 05:58:07', '2025-05-29 05:58:07', 'Terminated'),
(31, '123546', 'adas6556', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 05:58:33', '2025-05-29 05:58:33', 'Terminated'),
(32, '456123', '5466dd', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 06:00:10', '2025-05-29 06:00:10', 'Complete'),
(33, '456123', '5466dd', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 06:00:30', '2025-05-29 06:00:30', 'Complete'),
(34, 'om123456', '1236456', '', '2405:201:4026:f0c4:c5ce:8ae2:ae:93a', '2025-05-29 06:03:13', '2025-05-29 06:03:13', 'Complete');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
