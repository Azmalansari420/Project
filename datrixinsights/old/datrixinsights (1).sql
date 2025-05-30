-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2025 at 07:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datrixinsights`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` varchar(12) DEFAULT NULL,
  `password` varchar(500) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_login` timestamp NULL DEFAULT NULL,
  `login_info` mediumtext DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `status` int(10) NOT NULL,
  `projects` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email`, `mobile`, `password`, `created`, `last_login`, `login_info`, `role`, `status`, `projects`, `image`) VALUES
(1, 'Admin User', 'admin@admin.com', '9876543210', 'Admin@123', '2025-05-28 11:41:32', '2025-05-27 19:30:00', '{\n  \"ip\": \"49.36.144.75\",\n  \"city\": \"Delhi\",\n  \"region\": \"Delhi\",\n  \"country\": \"IN\",\n  \"loc\": \"28.6519,77.2315\",\n  \"org\": \"AS55836 Reliance Jio Infocomm Limited\",\n  \"postal\": \"110001\",\n  \"timezone\": \"Asia/Kolkata\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', 'admin', 1, '', 'user.png'),
(2, 'Shahrukh Joy', 'test@gmail.com', NULL, '123456', '2022-06-23 15:40:19', '2022-06-23 03:30:00', '{\n  \"ip\": \"103.146.176.61\",\n  \"hostname\": \"static-103-146-176-61.hostingraja.in\",\n  \"city\": \"Mumbai\",\n  \"region\": \"Maharashtra\",\n  \"country\": \"IN\",\n  \"loc\": \"19.0728,72.8826\",\n  \"org\": \"AS135822 Ovi Hosting Pvt Ltd\",\n  \"postal\": \"400070\",\n  \"timezone\": \"Asia/Kolkata\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', 'subadmin', 1, '', '254733.png'),
(3, 'Test', 'test1@gmail.com', NULL, '123', '2022-06-13 12:15:36', '2022-06-12 23:30:00', '{\n  \"ip\": \"103.146.176.61\",\n  \"hostname\": \"static-103-146-176-61.hostingraja.in\",\n  \"city\": \"Mumbai\",\n  \"region\": \"Maharashtra\",\n  \"country\": \"IN\",\n  \"loc\": \"19.0728,72.8826\",\n  \"org\": \"AS135822 Ovi Hosting Pvt Ltd\",\n  \"postal\": \"400070\",\n  \"timezone\": \"Asia/Kolkata\",\n  \"readme\": \"https://ipinfo.io/missingauth\"\n}', 'subadmin', 1, '16,21,22', 'user.png');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `pic` mediumtext DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NULL DEFAULT NULL,
  `login_info` mediumtext NOT NULL,
  `verified` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `mobile`, `password`, `pic`, `address`, `designation`, `created`, `last_login`, `login_info`, `verified`) VALUES
(1, 'Shahrukh Joy', 'admin1@admin.com', '1234568790', 'Admin@123', NULL, NULL, NULL, '2022-06-13 13:09:54', NULL, '', 0),
(2, 'abhijeet', 'abhi@admin.com', '6767676767', 'Admin@123', NULL, NULL, NULL, '2023-03-25 13:33:50', NULL, '', 1),
(3, 'Azmal', 'azmal@gmail.com', '9874563210', '123456', NULL, NULL, NULL, '2025-05-28 11:41:55', NULL, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `notify_id` int(10) NOT NULL,
  `send_by` varchar(500) NOT NULL,
  `send_to` mediumtext NOT NULL,
  `send_time` varchar(100) NOT NULL,
  `url` mediumtext DEFAULT NULL,
  `subject` mediumtext DEFAULT NULL,
  `msg` longtext DEFAULT NULL,
  `icon` mediumtext DEFAULT NULL,
  `notify` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`notify_id`, `send_by`, `send_to`, `send_time`, `url`, `subject`, `msg`, `icon`, `notify`) VALUES
(1, '{\"type\": \"Super\",\"id\": \"1\",\"name\": \"Administrator\"}', '[{\"type\":\"admin\",\"id\":\"1\",\"seen\":\"0\"},{\"type\":\"admin\",\"id\":\"2\",\"seen\":\"0\"}]', '1591833600', NULL, 'Welcome Message', 'Welcome to first login', '<img src=\'https://www.clipartmax.com/png/middle/171-1717870_stockvader-predicted-cron-for-may-user-profile-icon-png.png\' class=\'img img-responsive img-notify\'/>', 0),
(2, '{\"type\": \"Super\",\"id\": \"1\",\"name\": \"Administrator\"}', '[{\"type\":\"admin\",\"id\":\"1\",\"seen\":\"0\"},{\"type\":\"user\",\"id\":\"2\",\"seen\":\"0\"}]', '1604750457 ', NULL, 'Welcome Message', 'Welcome to first login', '<span data-letters=\"AD\"></span>', 0),
(3, '{\"type\": \"user\",\"id\": \"35\",\"name\": \"Shailendra\"}', '[{\"type\":\"employer\",\"id\":\"11\",\"seen\":\"1\"}]', '1604750457 ', 'http://localhost/gifgor/employer/employer/applied_canidates/15', 'Shailendra applied to your job post', 'Shailendra applied to developer job post. click here to view full details.', '<span data-letters=\"SH\"></span>', 1),
(4, '{\"type\": \"user\",\"id\": \"35\",\"name\": \"Shailendra\"}', '[{\"type\":\"employer\",\"id\":\"11\",\"seen\":\"1\"}]', '1604750457 ', 'http://localhost/gifgor/employer/employer/applied_canidates/15', 'Shailendra applied to your job post', 'Shailendra applied to developer job post. click here to view full details.', '<span data-letters=\"SH\"></span>', 1),
(5, '{\"type\": \"user\",\"id\": \"35\",\"name\": \"Shailendra\"}', '[{\"type\":\"employer\",\"id\":\"11\",\"seen\":\"1\"}]', '1604750457 ', 'http://localhost/gifgor/employer/employer/applied_canidates/15', 'sdklfjsl', 'Shailendra applied to developer job post. click here to view full details.', '<span data-letters=\"SH\"></span>', 1),
(6, '{\"type\": \"user\",\"id\": \"35\",\"name\": \"Shailendra\"}', '[{\"type\":\"employer\",\"id\":\"11\",\"seen\":\"1\"}]', '1604750457 ', 'http://localhost/gifgor/employer/employer/invitation_list', 'SHailendra accepted your job request', 'Shailendra applied to developer job post. click here to view full details.', '<span data-letters=\"SH\"></span>', 1),
(7, '{\"type\": \"user\",\"id\": \"35\",\"name\": \"Shailendra SIngh Patel\"}', '[{\"type\":\"employer\",\"id\":\"11\",\"seen\":\"1\"}]', '1621789999', 'http://localhost/gifgor/employer/employer/invitation_list', 'Shailendra SIngh Patel accpeted your interview invitation ', 'Shailendra SIngh Patel accept your interview invitation and interview scheduled for 23 May 2021 at 17:20-17:40', '<span data-letters=\"Sh\"></span>', 1),
(8, '{\"type\": \"admin\",\"id\": \"1\",\"name\": \"Administrator\"}', '[{\"type\":\"partner\",\"id\":\"6\",\"seen\":\"0\"}]', '1629208788', 'wallet_load', 'Administrator credited amount ?10 in your wallet', 'sample test', '<span data-letters=\"?\"></span>', 1),
(9, '{\"type\": \"admin\",\"id\": \"1\",\"name\": \"Administrator\"}', '[{\"type\":\"partner\",\"id\":\"5\",\"seen\":\"0\"}]', '1629209010', 'wallet_load', 'Administrator credited amount ?10 in your wallet', 'askdfjakl', '<span data-letters=\"?\"></span>', 1),
(10, '{\"type\": \"admin\",\"id\": \"1\",\"name\": \"Administrator\"}', '[{\"type\":\"partner\",\"id\":\"6\",\"seen\":\"0\"}]', '1629209010', 'wallet_load', 'Administrator credited amount ?10 in your wallet', 'askdfjakl', '<span data-letters=\"?\"></span>', 1),
(11, '{\"type\": \"admin\",\"id\": \"1\",\"name\": \"Administrator\"}', '[{\"type\":\"partner\",\"id\":\"6\",\"seen\":\"0\"}]', '1629209158', 'wallet_load', 'Administrator credited amount ?10 in your wallet', '', '<span data-letters=\"?\"></span>', 1),
(12, '{\"type\": \"admin\",\"id\": \"1\",\"name\": \"Administrator\"}', '[{\"type\":\"partner\",\"id\":\"6\",\"seen\":\"0\"}]', '1629209201', 'wallet_load', 'Administrator debited amount ?30 in your wallet', 'kljkljkl', '<span data-letters=\"?\"></span>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `mobile` varchar(12) NOT NULL DEFAULT '0',
  `complete` longtext DEFAULT NULL,
  `terminate` longtext DEFAULT NULL,
  `quotafull` longtext DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `name`, `join_date`, `mobile`, `complete`, `terminate`, `quotafull`, `email`) VALUES
(1, 'Rahul Verma', '2021-09-05 05:55:43', '98765432', 'http://rahul.com?status=complete', '', '', ''),
(2, 'Kumar', '2021-09-05 05:56:37', '999999999', NULL, NULL, NULL, NULL),
(3, 'RK Corp', '2021-09-06 17:01:28', '2147483647', 'htttps://rkcorp.com?status=complete', 'https://rk.com?status=terminate', 'https://rk.com?status=quotafull', 'rk@rk.com'),
(4, 'KWR', '2021-09-08 06:02:29', '2147483647', 'https://www.kwalityresearch.com/redirect/complete?pid=VL41849&uid=xxx', 'https://www.kwalityresearch.com/redirect/terminate?pid=VL41849&uid=xxx', 'https://www.kwalityresearch.com/redirect/quotafull?pid=VL41849&uid=xxx', 'business@kwalityresearch.com'),
(5, 'lcs', '2021-09-12 19:53:28', '2147483647', 'https://dashboard.lupincritiqueservices.com/redirect/complete?pid=VL41849&uid=XXX', 'https://dashboard.lupincritiqueservices.com/redirect/terminate?pid=VL41849&uid=XXX', 'https://dashboard.lupincritiqueservices.com/redirect/quotafull?pid=VL41849&uid=XXX', 'sacasc@gmail.vom'),
(6, 'SKY CONSULTING', '2021-09-13 22:01:54', '2147483647', 'https://skyresearchandconsulting.com/project-response/complete/uid/XXXX/pid/SRC110921/SKYNjQ3SKY', 'https://skyresearchandconsulting.com/project-response/terminated/uid/XXXX/pid/SRC110921/SKYNjQ3SKY', 'https://skyresearchandconsulting.com/project-response/quota-full/uid/XXXX/pid/SRC110921/SKYNjQ3SKY', 'SKY@CONSULTING.COM'),
(7, 'Abhi Khushwah ', '2022-06-01 15:51:37', '8851557768', 'https://eurekamarketresearch.com/survey?projectId=xxxx&status=completed&userId=xxxx', 'https://eurekamarketresearch.com/survey?projectId=xxxx&status=terminated&userId=xxxx', 'https://eurekamarketresearch.com/survey?projectId=xxxx&status=quotaFull&userId=xxxx', 'abhishek@eurekamarketresearch.com'),
(8, 'DreamlockMR Private Limited', '2024-04-04 16:53:06', '9354090805', 'https://app.dreamlocksolutions.com/thanks?status=c&guid=XXXX', 'https://app.dreamlocksolutions.com/thanks?status=t&guid=XXXX', 'https://app.dreamlocksolutions.com/thanks?status=q&guid=XXXX', 'sales@dreamlocksolutions.com'),
(9, 'Himanshu Malik', '2024-06-27 12:59:07', '08882234695', 'http://www.ciertopoll.com/redirect/complete?pid=AZ439HESU0823&uid=[identifier]', 'http://www.ciertopoll.com/redirect/terminate?pid=AZ439HESU0823&uid=[identifier]', 'http://www.ciertopoll.com/redirect/quotafull?pid=AZ43HESU0823&uid=[identifier]', 'thehimanshumafffflik@icloud.com'),
(10, 'Azmal', '2025-05-28 11:43:51', '785412369', 'http://localhost/datrixinsights/final/redirect/complete?pid=AZ439HESU0823&uid=[identifier]', 'http://localhost/datrixinsights/final/terminate?pid=AZ439HESU0823&uid=[identifier]', 'http://localhost/datrixinsights/final/redirect/quotafull?pid=AZ43HESU0823&uid=[identifier]', 'azmal123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `pid` varchar(100) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `client` varchar(100) DEFAULT NULL,
  `cpi` decimal(10,2) NOT NULL,
  `link` longtext DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `payroll` int(10) NOT NULL DEFAULT 0,
  `team` mediumtext DEFAULT NULL,
  `partner` varchar(100) DEFAULT NULL,
  `complete` longtext DEFAULT NULL,
  `terminate` longtext DEFAULT NULL,
  `quotafull` longtext DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Active',
  `cid` varchar(150) NOT NULL,
  `auto_id` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `pid`, `uid`, `client`, `cpi`, `link`, `description`, `created`, `payroll`, `team`, `partner`, `complete`, `terminate`, `quotafull`, `status`, `cid`, `auto_id`) VALUES
(21, 'genpop', 'QLB002910272021', '', 'question lab', 3.00, 'https://vault.questionlab.com/audience?oref=oach1-uesb-18-tf-2&initial=VS&UID=', 'Target: Consumer Gen Pop age 18-64 \r\n20% gen pop incidence  \r\nHigher incidence and everyone will qualify if you can target consumers interested/considering their own website in the next 6 months using a company like GoDaddy, Shopify, WordPress, SQSP, Weebly, Wix, Square, Universe, Milkshake \r\n10 minutes \r\n', '2021-10-05 19:16:20', 0, NULL, '4', 'https://www.kwalityresearch.com/redirect/complete?pid=QLB002910272021&uid=xxxx', 'https://www.kwalityresearch.com/redirect/terminate?pid=QLB002910272021&uid=xxxx', 'https://www.kwalityresearch.com/redirect/quotafull?pid=QLB002910272021&uid=xxxx', 'Active', '', ''),
(22, 'testpro', 'QLB002910272021', '130', 'cli', 12.00, 'https://google.com?s=abc&uid=', 'descripiton about project', '2021-10-30 17:28:08', 0, NULL, '6', 'https://skyresearchandconsulting.com/project-response/complete/uid/XXXX/pid/SRC110921/SKYNjQ3SKY', 'https://skyresearchandconsulting.com/project-response/terminated/uid/XXXX/pid/SRC110921/SKYNjQ3SKY', 'https://skyresearchandconsulting.com/project-response/quota-full/uid/XXXX/pid/SRC110921/SKYNjQ3SKY', 'Active', '', ''),
(25, 'TEs project', 'CRPTEST', '', 'Shah', 123.00, 'https://test.com', 'msd', '2022-06-13 12:25:09', 0, NULL, NULL, NULL, NULL, NULL, 'Active', '', ''),
(26, 'hh', '1', '130', 'kjhjkh', 5.00, 'jkhjkh', 'k', '2022-06-13 12:39:11', 0, NULL, NULL, NULL, NULL, NULL, 'Active', '2', ''),
(27, 'sfsdfs', '22', '1302', 'dfsd', 43.00, 'fxsdf', 'sfdfsd', '2022-06-13 12:42:38', 0, NULL, NULL, NULL, NULL, NULL, 'Active', '2', ''),
(28, 'fds', '23', '130', 'sdfsd', 543.00, 'fgfd', 'gdfg', '2022-06-13 12:50:16', 0, NULL, NULL, NULL, NULL, NULL, 'Active', '2', '62a73288aad0b'),
(29, 'sds', '24', '130', 'gsdgfd', 52.00, 'sdgfd', 'gfdg', '2022-06-13 12:54:01', 0, NULL, NULL, NULL, NULL, NULL, 'Active', '2', '998828545'),
(30, 'fghfgh', '25', '130', 'fghfg', 545.00, 'fhfg', 'hfgh', '2022-06-13 13:00:40', 0, NULL, NULL, NULL, NULL, NULL, 'Active', '2', '1389026605'),
(31, 'dsfsdf', '26', '1301', 'sdgf', 5.00, 'gfdgdf', 'gfdg', '2022-06-13 13:01:38', 0, NULL, NULL, NULL, NULL, NULL, 'Active', '2', '7349-eb97-a3ff-1dc5-b3f3'),
(32, 'test', '333', '135', 'test', 123.00, 'yuyerw', 'erete', '2023-03-25 13:26:15', 0, NULL, NULL, NULL, NULL, NULL, 'Active', '', '1edc-2018-7c86-7e15-c919'),
(33, 'store', 'AZ387_CSOP_0723_o', '', 'az', 99.00, 'http://www.globalresearchstudy.com/projects/AZ387_CSOP_0723_o/pstart_page.asp?PG=DLS&trans_ID=XXXX&CO=US', '', '2023-07-18 01:24:11', 0, NULL, NULL, NULL, NULL, NULL, 'Active', '', 'dfa2-1088-d8f5-0c8a-02ed'),
(34, 'DLM0455', '', '130', 'JC', 1.00, 'https://survey.jaspercolin.com/survey/selfserve/54e/240304?list=6&hgin=2&guid=XXXX', '', '2024-04-04 16:56:09', 0, NULL, '8,8', 'https://app.dreamlocksolutions.com/thanks?status=c&guid=XXXX,https://app.dreamlocksolutions.com/thanks?status=c&guid=XXXX', 'https://app.dreamlocksolutions.com/thanks?status=t&guid=XXXX,https://app.dreamlocksolutions.com/thanks?status=t&guid=XXXX', 'https://app.dreamlocksolutions.com/thanks?status=q&guid=XXXX,https://app.dreamlocksolutions.com/thanks?status=q&guid=XXXX', 'Active', '1', '62aa-f629-86d6-a2de-dc98'),
(35, 'DLM0445_1', '240304', '', 'JC', 1.00, 'https://survey.jaspercolin.com/survey/selfserve/54e/240304?list=6&hgin=2&guid=XXXX&uid=xxxx', '', '2024-04-04 17:24:43', 0, NULL, NULL, NULL, NULL, NULL, 'Active', '', 'c80c-7488-0818-fb85-ac03'),
(36, 'DLM0455', 'DLM0455', '', 'JC', 1.00, 'https://survey.jaspercolin.com/survey/selfserve/54e/240304?list=6&hgin=2&guid=https://survey.jaspercolin.com/survey/selfserve/54e/240304?list=6&hgin=2&guid=[identifier]https://survey.jaspercolin.com/survey/selfserve/54e/240304?list=6&hgin=2&guid=XXXX', '', '2024-04-04 17:41:30', 0, NULL, '8', 'https://app.dreamlocksolutions.com/thanks?status=c&guid=XXXX', 'https://app.dreamlocksolutions.com/thanks?status=t&guid=XXXX', 'https://app.dreamlocksolutions.com/thanks?status=q&guid=XXXX', 'Active', '1', 'edf1-5aac-9d35-6c52-e54a'),
(38, 'SS', 'QP3VHHR3J', '0', 'QP3VHHR3J', 1.00, 'https://take.supersurvey.com/QP3VHHR3J', '', '2024-07-24 23:06:15', 0, NULL, '8', 'https://app.dreamlocksolutions.com/thanks?status=c&guid=XXXX', 'https://app.dreamlocksolutions.com/thanks?status=t&guid=XXXX', 'https://app.dreamlocksolutions.com/thanks?status=q&guid=XXXX', 'Active', '2', '40b2-70a2-4fbe-241c-023b'),
(39, 'sdfdsf', '123432', '13023434', 'sdfdsf', 32.00, 'gfdg', 'gfd', '2025-05-28 09:38:16', 0, '2', NULL, NULL, NULL, NULL, 'Close', '132424', '6de4-c585-154d-6a37-bb5f'),
(40, 'Azmal', 'QLB002910272021123', '130100', 'Azmal', 250.00, 'https://take.supersurvey.com/QP3VHHR3J', 'test', '2025-05-28 11:51:49', 0, NULL, NULL, NULL, NULL, NULL, 'Active', '1', 'b27a-70db-5351-3eb9-ac04');

-- --------------------------------------------------------

--
-- Table structure for table `redirects`
--

CREATE TABLE `redirects` (
  `id` int(10) NOT NULL,
  `pid` varchar(100) DEFAULT NULL,
  `uid` varchar(100) DEFAULT NULL,
  `partner_id` int(10) NOT NULL DEFAULT 0,
  `status` varchar(50) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `info` mediumtext DEFAULT NULL,
  `validate` int(2) NOT NULL DEFAULT 0,
  `action_by` varchar(100) DEFAULT NULL,
  `reason` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `value` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`) VALUES
(1, 'sms_setup', 'off'),
(2, 'sms_key', 'V823KKJK98989uN');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(10) NOT NULL,
  `partner_id` int(10) NOT NULL,
  `action` varchar(10) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `updated_amount` decimal(10,2) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `transaction_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL DEFAULT '0',
  `status_date` timestamp NULL DEFAULT NULL,
  `msg` mediumtext DEFAULT NULL,
  `reason` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `partner_id`, `action`, `amount`, `updated_amount`, `type`, `transaction_date`, `status`, `status_date`, `msg`, `reason`) VALUES
(1, 6, 'credit', 10.00, 260.00, 'manual', '2021-08-17 13:59:48', '1', '2021-08-17 10:29:48', 'sample test', NULL),
(2, 5, 'credit', 10.00, 110.00, 'cash', '2021-08-17 14:03:29', '0', '2021-08-17 10:33:29', 'askdfjakl', NULL),
(3, 6, 'debit', 10.00, 260.00, 'wallet', '2021-08-17 14:03:30', '0', '2021-08-17 10:33:30', 'askdfjakl', NULL),
(4, 6, 'credit', 10.00, 270.00, 'api', '2021-08-17 14:05:58', '1', '2021-08-17 10:35:58', '', NULL),
(5, 6, 'debit', 30.00, 240.00, 'manual', '2021-08-17 14:06:41', '1', '2021-08-17 10:36:41', 'kljkljkl', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`notify_id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redirects`
--
ALTER TABLE `redirects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `notify_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `redirects`
--
ALTER TABLE `redirects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
