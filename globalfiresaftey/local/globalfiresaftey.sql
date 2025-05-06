-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2025 at 08:27 AM
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
-- Database: `globalfiresaftey`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_records`
--

CREATE TABLE `activity_records` (
  `id` int(11) NOT NULL,
  `ip_addreass` text NOT NULL,
  `url` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_records`
--

INSERT INTO `activity_records` (`id`, `ip_addreass`, `url`, `date`, `time`, `admin_id`, `admin_username`, `admin_password`) VALUES
(1, '::1', 'http://localhost/globalfiresaftey/admin/dashboard', '2025-04-21', '11:26:54', 2, 'admin', 'admin'),
(2, '::1', 'http://localhost/globalfiresaftey/admin_con/site_setting/edit/1', '2025-04-21', '11:27:14', 2, 'admin', 'admin'),
(3, '::1', 'http://localhost/globalfiresaftey/admin_con/site_setting/edit/1', '2025-04-21', '11:27:27', 2, 'admin', 'admin'),
(4, '::1', 'http://localhost/globalfiresaftey/admin_con/slider/listing', '2025-04-21', '11:28:30', 2, 'admin', 'admin'),
(5, '::1', 'http://localhost/globalfiresaftey/admin_con/slider/edit/4', '2025-04-21', '11:28:31', 2, 'admin', 'admin'),
(6, '::1', 'http://localhost/globalfiresaftey/admin_con/slider/listing', '2025-04-21', '11:28:41', 2, 'admin', 'admin'),
(7, '::1', 'http://localhost/globalfiresaftey/admin/dashboard', '2025-04-21', '11:33:46', 3, 'azmal', 'azmal'),
(8, '::1', 'http://localhost/globalfiresaftey/admin_con/slider/listing', '2025-04-21', '11:36:00', 3, 'azmal', 'azmal'),
(9, '::1', 'http://localhost/globalfiresaftey/admin_con/testimonials/listing', '2025-04-21', '11:37:25', 3, 'azmal', 'azmal'),
(10, '::1', 'http://localhost/globalfiresaftey/admin_con/testimonials/edit/1', '2025-04-21', '11:37:26', 3, 'azmal', 'azmal'),
(11, '::1', 'http://localhost/globalfiresaftey/admin_con/testimonials/edit/1', '2025-04-21', '11:37:46', 3, 'azmal', 'azmal'),
(12, '::1', 'http://localhost/globalfiresaftey/admin_con/testimonials/listing', '2025-04-21', '11:38:05', 3, 'azmal', 'azmal'),
(13, '::1', 'http://localhost/globalfiresaftey/admin_con/testimonials/edit/1', '2025-04-21', '11:38:30', 3, 'azmal', 'azmal'),
(14, '::1', 'http://localhost/globalfiresaftey/admin_con/testimonials/listing', '2025-04-21', '11:38:39', 3, 'azmal', 'azmal'),
(15, '::1', 'http://localhost/globalfiresaftey/admin_con/testimonials/edit/1', '2025-04-21', '11:38:40', 3, 'azmal', 'azmal'),
(16, '::1', 'http://localhost/globalfiresaftey/admin_con/testimonials/listing', '2025-04-21', '11:38:56', 3, 'azmal', 'azmal'),
(17, '::1', 'http://localhost/globalfiresaftey/admin_con/testimonials/edit/1', '2025-04-21', '11:38:58', 3, 'azmal', 'azmal'),
(18, '::1', 'http://localhost/globalfiresaftey/admin_con/testimonials/edit/1', '2025-04-21', '11:39:14', 3, 'azmal', 'azmal'),
(19, '::1', 'http://localhost/globalfiresaftey/admin_con/testimonials/edit/1', '2025-04-21', '11:45:17', 3, 'azmal', 'azmal'),
(20, '::1', 'http://localhost/globalfiresaftey/admin_con/testimonials/listing', '2025-04-21', '11:45:19', 3, 'azmal', 'azmal'),
(21, '::1', 'http://localhost/globalfiresaftey/admin_con/testimonials/listing', '2025-04-21', '11:56:31', 3, 'azmal', 'azmal'),
(22, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '11:56:59', 3, 'azmal', 'azmal'),
(23, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '11:57:12', 3, 'azmal', 'azmal'),
(24, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/add', '2025-04-21', '11:57:15', 3, 'azmal', 'azmal'),
(25, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/add', '2025-04-21', '11:58:00', 3, 'azmal', 'azmal'),
(26, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '11:59:02', 3, 'azmal', 'azmal'),
(27, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/1', '2025-04-21', '11:59:05', 3, 'azmal', 'azmal'),
(28, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '11:59:06', 3, 'azmal', 'azmal'),
(29, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/add', '2025-04-21', '11:59:14', 3, 'azmal', 'azmal'),
(30, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '11:59:15', 3, 'azmal', 'azmal'),
(31, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/add', '2025-04-21', '11:59:19', 3, 'azmal', 'azmal'),
(32, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '11:59:20', 3, 'azmal', 'azmal'),
(33, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/add', '2025-04-21', '11:59:24', 3, 'azmal', 'azmal'),
(34, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '11:59:25', 3, 'azmal', 'azmal'),
(35, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/add', '2025-04-21', '11:59:29', 3, 'azmal', 'azmal'),
(36, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '11:59:30', 3, 'azmal', 'azmal'),
(37, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/add', '2025-04-21', '11:59:34', 3, 'azmal', 'azmal'),
(38, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '11:59:35', 3, 'azmal', 'azmal'),
(39, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/add', '2025-04-21', '11:59:39', 3, 'azmal', 'azmal'),
(40, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '11:59:41', 3, 'azmal', 'azmal'),
(41, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/add', '2025-04-21', '11:59:44', 3, 'azmal', 'azmal'),
(42, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '11:59:46', 3, 'azmal', 'azmal'),
(43, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '12:00:34', 3, 'azmal', 'azmal'),
(44, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '12:54:54', 3, 'azmal', 'azmal'),
(45, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/1', '2025-04-21', '12:57:54', 3, 'azmal', 'azmal'),
(46, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '12:58:00', 3, 'azmal', 'azmal'),
(47, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '13:00:40', 3, 'azmal', 'azmal'),
(48, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '13:05:25', 3, 'azmal', 'azmal'),
(49, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/1', '2025-04-21', '13:05:28', 3, 'azmal', 'azmal'),
(50, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '13:05:44', 3, 'azmal', 'azmal'),
(51, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/add', '2025-04-21', '13:05:47', 3, 'azmal', 'azmal'),
(52, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '13:06:12', 3, 'azmal', 'azmal'),
(53, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/1', '2025-04-21', '13:06:26', 3, 'azmal', 'azmal'),
(54, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '13:06:44', 3, 'azmal', 'azmal'),
(55, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/1', '2025-04-21', '13:06:46', 3, 'azmal', 'azmal'),
(56, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/1', '2025-04-21', '13:06:48', 3, 'azmal', 'azmal'),
(57, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '13:07:06', 3, 'azmal', 'azmal'),
(58, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/add', '2025-04-21', '13:07:17', 3, 'azmal', 'azmal'),
(59, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '13:07:28', 3, 'azmal', 'azmal'),
(60, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/9', '2025-04-21', '13:07:31', 3, 'azmal', 'azmal'),
(61, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '13:07:36', 3, 'azmal', 'azmal'),
(62, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/add', '2025-04-21', '13:07:46', 3, 'azmal', 'azmal'),
(63, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '13:08:23', 3, 'azmal', 'azmal'),
(64, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/1', '2025-04-21', '13:08:34', 3, 'azmal', 'azmal'),
(65, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '13:08:39', 3, 'azmal', 'azmal'),
(66, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/10', '2025-04-21', '13:08:55', 3, 'azmal', 'azmal'),
(67, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-21', '13:08:57', 3, 'azmal', 'azmal'),
(68, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-22', '10:36:20', 3, 'azmal', 'azmal'),
(69, '::1', 'http://localhost/globalfiresaftey/admin_con/slider/listing', '2025-04-22', '10:54:27', 3, 'azmal', 'azmal'),
(70, '::1', 'http://localhost/globalfiresaftey/admin_con/slider/listing', '2025-04-22', '10:55:46', 3, 'azmal', 'azmal'),
(71, '::1', 'http://localhost/globalfiresaftey/admin_con/slider/edit/4', '2025-04-22', '10:55:47', 3, 'azmal', 'azmal'),
(72, '::1', 'http://localhost/globalfiresaftey/admin_con/slider/listing', '2025-04-22', '10:55:48', 3, 'azmal', 'azmal'),
(73, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/listing', '2025-04-22', '10:56:25', 3, 'azmal', 'azmal'),
(74, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/listing', '2025-04-22', '10:56:39', 3, 'azmal', 'azmal'),
(75, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/add', '2025-04-22', '10:56:41', 3, 'azmal', 'azmal'),
(76, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/listing', '2025-04-22', '10:56:47', 3, 'azmal', 'azmal'),
(77, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/edit/1', '2025-04-22', '10:56:48', 3, 'azmal', 'azmal'),
(78, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/listing', '2025-04-22', '10:56:49', 3, 'azmal', 'azmal'),
(79, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/add', '2025-04-22', '10:56:53', 3, 'azmal', 'azmal'),
(80, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/add', '2025-04-22', '10:56:53', 3, 'azmal', 'azmal'),
(81, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/add', '2025-04-22', '10:56:54', 3, 'azmal', 'azmal'),
(82, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/add', '2025-04-22', '10:56:54', 3, 'azmal', 'azmal'),
(83, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/add', '2025-04-22', '10:56:54', 3, 'azmal', 'azmal'),
(84, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/add', '2025-04-22', '10:56:54', 3, 'azmal', 'azmal'),
(85, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/add', '2025-04-22', '10:56:54', 3, 'azmal', 'azmal'),
(86, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/add', '2025-04-22', '10:56:54', 3, 'azmal', 'azmal'),
(87, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/add', '2025-04-22', '10:56:55', 3, 'azmal', 'azmal'),
(88, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/add', '2025-04-22', '10:56:55', 3, 'azmal', 'azmal'),
(89, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/add', '2025-04-22', '10:56:55', 3, 'azmal', 'azmal'),
(90, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/listing', '2025-04-22', '10:57:00', 3, 'azmal', 'azmal'),
(91, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/listing', '2025-04-22', '10:57:06', 3, 'azmal', 'azmal'),
(92, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/listing', '2025-04-22', '10:57:08', 3, 'azmal', 'azmal'),
(93, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/listing', '2025-04-22', '10:57:15', 3, 'azmal', 'azmal'),
(94, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/listing', '2025-04-22', '10:57:19', 3, 'azmal', 'azmal'),
(95, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/listing', '2025-04-22', '10:57:23', 3, 'azmal', 'azmal'),
(96, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/listing', '2025-04-22', '10:57:27', 3, 'azmal', 'azmal'),
(97, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/listing', '2025-04-22', '10:57:32', 3, 'azmal', 'azmal'),
(98, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/listing', '2025-04-22', '10:57:37', 3, 'azmal', 'azmal'),
(99, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/listing', '2025-04-22', '10:57:41', 3, 'azmal', 'azmal'),
(100, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/listing', '2025-04-22', '10:57:46', 3, 'azmal', 'azmal'),
(101, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/listing', '2025-04-22', '10:57:53', 3, 'azmal', 'azmal'),
(102, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/add', '2025-04-22', '10:57:56', 3, 'azmal', 'azmal'),
(103, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/add', '2025-04-22', '10:57:56', 3, 'azmal', 'azmal'),
(104, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/add', '2025-04-22', '10:57:56', 3, 'azmal', 'azmal'),
(105, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/add', '2025-04-22', '10:57:56', 3, 'azmal', 'azmal'),
(106, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/add', '2025-04-22', '10:57:57', 3, 'azmal', 'azmal'),
(107, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/listing', '2025-04-22', '10:58:02', 3, 'azmal', 'azmal'),
(108, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/listing', '2025-04-22', '10:58:06', 3, 'azmal', 'azmal'),
(109, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/listing', '2025-04-22', '10:58:16', 3, 'azmal', 'azmal'),
(110, '::1', 'http://localhost/globalfiresaftey/admin_con/partner/listing', '2025-04-22', '11:04:23', 3, 'azmal', 'azmal'),
(111, '::1', 'http://localhost/globalfiresaftey/admin_con/product/listing', '2025-04-22', '11:04:25', 3, 'azmal', 'azmal'),
(112, '::1', 'http://localhost/globalfiresaftey/admin_con/product/add', '2025-04-22', '11:04:26', 3, 'azmal', 'azmal'),
(113, '::1', 'http://localhost/globalfiresaftey/admin_con/product/add', '2025-04-22', '11:05:06', 3, 'azmal', 'azmal'),
(114, '::1', 'http://localhost/globalfiresaftey/admin_con/product/add', '2025-04-22', '11:05:14', 3, 'azmal', 'azmal'),
(115, '::1', 'http://localhost/globalfiresaftey/admin_con/product/listing', '2025-04-22', '11:05:38', 3, 'azmal', 'azmal'),
(116, '::1', 'http://localhost/globalfiresaftey/admin_con/product/edit/1', '2025-04-22', '11:05:40', 3, 'azmal', 'azmal'),
(117, '::1', 'http://localhost/globalfiresaftey/admin_con/product/edit/1', '2025-04-22', '11:05:48', 3, 'azmal', 'azmal'),
(118, '::1', 'http://localhost/globalfiresaftey/admin_con/product/listing', '2025-04-22', '11:05:49', 3, 'azmal', 'azmal'),
(119, '::1', 'http://localhost/globalfiresaftey/admin_con/product/add', '2025-04-22', '11:06:04', 3, 'azmal', 'azmal'),
(120, '::1', 'http://localhost/globalfiresaftey/admin_con/product/add', '2025-04-22', '11:06:04', 3, 'azmal', 'azmal'),
(121, '::1', 'http://localhost/globalfiresaftey/admin_con/product/add', '2025-04-22', '11:06:05', 3, 'azmal', 'azmal'),
(122, '::1', 'http://localhost/globalfiresaftey/admin_con/product/add', '2025-04-22', '11:06:05', 3, 'azmal', 'azmal'),
(123, '::1', 'http://localhost/globalfiresaftey/admin_con/product/listing', '2025-04-22', '11:06:10', 3, 'azmal', 'azmal'),
(124, '::1', 'http://localhost/globalfiresaftey/admin_con/product/listing', '2025-04-22', '11:06:28', 3, 'azmal', 'azmal'),
(125, '::1', 'http://localhost/globalfiresaftey/admin_con/product/add', '2025-04-22', '11:06:38', 3, 'azmal', 'azmal'),
(126, '::1', 'http://localhost/globalfiresaftey/admin_con/product/listing', '2025-04-22', '11:06:42', 3, 'azmal', 'azmal'),
(127, '::1', 'http://localhost/globalfiresaftey/admin_con/product/listing', '2025-04-22', '11:07:04', 3, 'azmal', 'azmal'),
(128, '::1', 'http://localhost/globalfiresaftey/admin_con/product/add', '2025-04-22', '11:07:21', 3, 'azmal', 'azmal'),
(129, '::1', 'http://localhost/globalfiresaftey/admin_con/product/listing', '2025-04-22', '11:07:25', 3, 'azmal', 'azmal'),
(130, '::1', 'http://localhost/globalfiresaftey/admin_con/product/listing', '2025-04-22', '11:14:51', 3, 'azmal', 'azmal'),
(131, '::1', 'http://localhost/globalfiresaftey/admin_con/product/edit/1', '2025-04-22', '11:21:40', 3, 'azmal', 'azmal'),
(132, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-22', '11:21:44', 3, 'azmal', 'azmal'),
(133, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/8', '2025-04-22', '11:21:46', 3, 'azmal', 'azmal'),
(134, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-22', '11:21:47', 3, 'azmal', 'azmal'),
(135, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/7', '2025-04-22', '11:21:49', 3, 'azmal', 'azmal'),
(136, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-22', '11:21:50', 3, 'azmal', 'azmal'),
(137, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/6', '2025-04-22', '11:21:52', 3, 'azmal', 'azmal'),
(138, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-22', '11:21:53', 3, 'azmal', 'azmal'),
(139, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/4', '2025-04-22', '11:21:56', 3, 'azmal', 'azmal'),
(140, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-22', '11:21:57', 3, 'azmal', 'azmal'),
(141, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/5', '2025-04-22', '11:22:00', 3, 'azmal', 'azmal'),
(142, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-22', '11:22:01', 3, 'azmal', 'azmal'),
(143, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/4', '2025-04-22', '11:22:03', 3, 'azmal', 'azmal'),
(144, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-22', '11:22:04', 3, 'azmal', 'azmal'),
(145, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/3', '2025-04-22', '11:22:07', 3, 'azmal', 'azmal'),
(146, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-22', '11:22:08', 3, 'azmal', 'azmal'),
(147, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/2', '2025-04-22', '11:22:09', 3, 'azmal', 'azmal'),
(148, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-22', '11:22:10', 3, 'azmal', 'azmal'),
(149, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/1', '2025-04-22', '11:22:12', 3, 'azmal', 'azmal'),
(150, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-22', '11:22:13', 3, 'azmal', 'azmal'),
(151, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-22', '11:23:10', 3, 'azmal', 'azmal'),
(152, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/1', '2025-04-22', '11:26:39', 3, 'azmal', 'azmal'),
(153, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-22', '11:26:52', 3, 'azmal', 'azmal'),
(154, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/1', '2025-04-22', '11:27:19', 3, 'azmal', 'azmal'),
(155, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-22', '11:27:42', 3, 'azmal', 'azmal'),
(156, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/1', '2025-04-22', '11:28:02', 3, 'azmal', 'azmal'),
(157, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-22', '11:28:43', 3, 'azmal', 'azmal'),
(158, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/1', '2025-04-22', '11:28:44', 3, 'azmal', 'azmal'),
(159, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-22', '11:28:48', 3, 'azmal', 'azmal'),
(160, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/edit/1', '2025-04-22', '11:29:23', 3, 'azmal', 'azmal'),
(161, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-22', '11:29:29', 3, 'azmal', 'azmal'),
(162, '::1', 'http://localhost/globalfiresaftey/admin_con/categories/listing', '2025-04-22', '11:40:37', 3, 'azmal', 'azmal'),
(163, '::1', 'http://localhost/globalfiresaftey/admin_con/content/edit/1', '2025-04-22', '11:40:40', 3, 'azmal', 'azmal'),
(164, '::1', 'http://localhost/globalfiresaftey/admin_con/content/edit/1', '2025-04-22', '11:41:48', 3, 'azmal', 'azmal'),
(165, '::1', 'http://localhost/globalfiresaftey/admin_con/content/edit/1', '2025-04-22', '11:41:57', 3, 'azmal', 'azmal'),
(166, '::1', 'http://localhost/globalfiresaftey/admin_con/content/edit/1', '2025-04-22', '11:42:19', 3, 'azmal', 'azmal'),
(167, '::1', 'http://localhost/globalfiresaftey/admin_con/content/edit/1', '2025-04-22', '11:42:32', 3, 'azmal', 'azmal'),
(168, '::1', 'http://localhost/globalfiresaftey/admin_con/content/edit/2', '2025-04-22', '11:42:34', 3, 'azmal', 'azmal'),
(169, '::1', 'http://localhost/globalfiresaftey/admin_con/content/edit/2', '2025-04-22', '11:42:37', 3, 'azmal', 'azmal'),
(170, '::1', 'http://localhost/globalfiresaftey/admin_con/content/edit/3', '2025-04-22', '11:42:40', 3, 'azmal', 'azmal'),
(171, '::1', 'http://localhost/globalfiresaftey/admin_con/content/edit/3', '2025-04-22', '11:42:42', 3, 'azmal', 'azmal'),
(172, '::1', 'http://localhost/globalfiresaftey/admin_con/content/edit/3', '2025-04-22', '11:49:36', 3, 'azmal', 'azmal'),
(173, '::1', 'http://localhost/globalfiresaftey/admin_con/content/edit/4', '2025-04-22', '11:49:38', 3, 'azmal', 'azmal'),
(174, '::1', 'http://localhost/globalfiresaftey/admin_con/content/edit/4', '2025-04-22', '11:49:50', 3, 'azmal', 'azmal'),
(175, '::1', 'http://localhost/globalfiresaftey/admin_con/content/edit/5', '2025-04-22', '11:49:52', 3, 'azmal', 'azmal'),
(176, '::1', 'http://localhost/globalfiresaftey/admin_con/content/edit/5', '2025-04-22', '11:50:00', 3, 'azmal', 'azmal'),
(177, '::1', 'http://localhost/globalfiresaftey/admin_con/content/edit/4', '2025-04-22', '11:50:43', 3, 'azmal', 'azmal'),
(178, '::1', 'http://localhost/globalfiresaftey/admin_con/content/edit/4', '2025-04-22', '11:50:49', 3, 'azmal', 'azmal'),
(179, '::1', 'http://localhost/globalfiresaftey/admin_con/contact/listing', '2025-04-22', '11:55:47', 3, 'azmal', 'azmal'),
(180, '::1', 'http://localhost/globalfiresaftey/admin_con/contact/view/2', '2025-04-22', '11:55:49', 3, 'azmal', 'azmal'),
(181, '::1', 'http://localhost/globalfiresaftey/admin_con/contact/listing', '2025-04-22', '11:55:51', 3, 'azmal', 'azmal');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `multiple_image_json` text NOT NULL,
  `content` longblob NOT NULL,
  `show_home` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` date NOT NULL,
  `modifieddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `image`, `name`, `slug`, `multiple_image_json`, `content`, `show_home`, `status`, `addeddate`, `modifieddate`) VALUES
(1, '1745220479.webp', 'Fire Extinguishers Refilling', 'fire-extinguishers-refilling', '[\"istockphoto-626943970-612x612-1.webp\",\"istockphoto-2176090090-612x612-1.webp\"]', 0x3c703e54686520496d706f7274616e6365206f66204669726520457874696e6775697368657220526566696c6c696e673a20576879204974e280997320457373656e7469616c20666f72205361666574793c2f703e3c703e466972652073616665747920697320616e20657373656e7469616c20617370656374206f66206d61696e7461696e696e672061207361666520616e642073656375726520656e7669726f6e6d656e7420696e20616e79206275696c64696e67206f7220666163696c6974792e205768696c6520686176696e67206669726520657874696e6775697368657273206f6e2068616e64206973206372756369616c2c206b6e6f77696e67207768656e20616e642077687920746f20726566696c6c207468656d206973206a75737420617320696d706f7274616e742e2041206669726520657874696e677569736865722069732061206c6966652d736176696e6720746f6f6c2c20627574206f6e6c792069662069742069732066756c6c79206368617267656420616e642066756e6374696f6e616c207768656e20616e20656d657267656e6379206172697365732e20496e207468697320626c6f6720706f73742c207765e280996c6c20646973637573732074686520696d706f7274616e6365206f66206669726520657874696e6775697368657220726566696c6c696e672c20686f77206f6674656e2069742073686f756c6420626520646f6e652c20616e64207768792069742073686f756c642062652070617274206f6620796f757220726567756c617220666972652073616665747920726f7574696e653c2f703e3c703e3c62723e3c2f703e3c703e576879204669726520457874696e6775697368657220526566696c6c696e67204973204372756369616c3c2f703e3c703e41206669726520657874696e6775697368657220697320796f7572206669727374206c696e65206f6620646566656e736520616761696e7374206120666972652e2049662061206669726520627265616b73206f75742c20796f75206e65656420746f206b6e6f77207468617420796f757220657874696e677569736865722077696c6c20776f726b2e204f7665722074696d652c206669726520657874696e6775697368657273206c6f73652070726573737572652c20616e6420746865206368656d6963616c7320696e736964652063616e2064656772616465206f72206265636f6d6520696e6566666563746976652e2054686973206973207768657265206669726520657874696e6775697368657220726566696c6c696e6720636f6d657320696e2e20497420656e737572657320746861742074686520657874696e677569736865722077696c6c20706572666f726d206f7074696d616c6c79207768656e20796f75206e65656420697420746865206d6f73742e3c2f703e3c703e3c62723e3c2f703e3c703e486572652061726520736f6d65206b657920726561736f6e7320776879206669726520657874696e6775697368657220726566696c6c696e67206973206e65636573736172793a3c2f703e3c703e3c62723e3c2f703e3c703e456e73757265732050726f7065722046756e6374696f6e616c6974793a20546865207072696d6172792066756e6374696f6e206f662061206669726520657874696e6775697368657220697320746f20707574206f757420666972657320717569636b6c792e204966206974e2809973206e6f742070726f7065726c79206d61696e7461696e65642c20796f75206d61792066696e642069742065697468657220746f6f207765616b20746f20707574206f7574207468652066697265206f7220636f6d706c6574656c79207573656c657373207768656e20796f75206e6565642069742e204120726566696c6c656420657874696e677569736865722077696c6c20726573746f726520746865206e656365737361727920707265737375726520616e642063686172676520746f20656e7375726520697420706572666f726d73206566666563746976656c792e3c2f703e3c703e436f6d706c69657320776974682053616665747920526567756c6174696f6e733a204669726520657874696e67756973686572732061726520726571756972656420746f2062652066756c6c79206368617267656420616e6420726561647920666f7220757365206163636f7264696e6720746f2073616665747920636f6465732e20496e206d616e7920726567696f6e732c20666972652073616665747920726567756c6174696f6e732072657175697265206669726520657874696e677569736865727320746f20626520696e7370656374656420616e6420726566696c6c656420616e6e75616c6c792e204b656570696e67207570207769746820746865736520696e7370656374696f6e7320616e6420726566696c6c7320656e737572657320636f6d706c69616e636520616e642061766f696473206c6567616c206973737565732e3c2f703e3c703e50726576656e747320436f72726f73696f6e20616e642044616d6167653a204f7665722074696d652c206669726520657874696e67756973686572732063616e207375666665722066726f6d20636f72726f73696f6e2c206c65616b732c206f722064616d6167652066726f6d20656e7669726f6e6d656e74616c20666163746f72732e204576656e20696620616e20657874696e67756973686572206c6f6f6b7320696e746163742c20696e7465726e616c207061727473206d617920626520636f6d70726f6d697365642e20526567756c617220726566696c6c696e6720636865636b732063616e20636174636820746865736520697373756573206561726c79206265666f726520746865792072656e6465722074686520657874696e6775697368657220696e6566666563746976652e3c2f703e3c703e5065616365206f66204d696e643a204b6e6f77696e6720796f7572206669726520657874696e677569736865722069732066756c6c79206368617267656420616e6420726561647920746f207573652063616e2070726f76696465207065616365206f66206d696e6420666f7220796f7520616e642074686f73652061726f756e6420796f752e20496e20746865206576656e74206f66206120666972652c20686176696e6720612066756c6c792066756e6374696f6e616c20657874696e6775697368657220636f756c642062652074686520646966666572656e6365206265747765656e20636f6e74726f6c6c696e672074686520626c617a6520616e6420686176696e6720612066756c6c2d7363616c6520656d657267656e63793c62723e3c62723e3c2f703e3c703e54686520526566696c6c696e672050726f636573733a205768617420746f204578706563743c2f703e3c703e5768656e20796f75206861766520796f7572206669726520657874696e6775697368657220726566696c6c65642c207468652070726f63657373207479706963616c6c7920696e766f6c7665732074686520666f6c6c6f77696e672073746570733a3c2f703e3c703e3c62723e3c2f703e3c703e496e7370656374696f6e3a204120746563686e696369616e2077696c6c20696e737065637420746865206669726520657874696e6775697368657220666f7220616e79207369676e73206f6620776561722c20636f72726f73696f6e2c206f722064616d6167652e20546865792077696c6c20636865636b207468652070726573737572652067617567652c206e6f7a7a6c652c20616e64206f766572616c6c20636f6e646974696f6e2e3c2f703e3c703e44697363686172676520616e6420526566696c6c3a2054686520657874696e67756973686572206973206469736368617267656420746f20656d7074792069742c20616e6420746865206167656e7420696e7369646520287375636820617320647279206368656d6963616c2c20434f322c206f7220776174657229206973207265706c616365642077697468206672657368206d6174657269616c2e205468652063796c696e646572206973207468656e2070726573737572697a656420746f207468652070726f706572206c6576656c2e3c2f703e3c703e54657374696e673a20416674657220726566696c6c696e672c2074686520657874696e677569736865722069732074657374656420666f722066756e6374696f6e616c69747920616e64207072657373757265206c6576656c7320746f20656e73757265206974e280997320726561647920666f72207573652e3c2f703e3c703e446f63756d656e746174696f6e3a20596f75e280996c6c207479706963616c6c7920726563656976652061207365727669636520746167206f72207265636f726420746861742073686f77732074686520657874696e6775697368657220686173206265656e20726566696c6c656420616e6420696e737065637465642e205468697320656e737572657320796f7520686176652070726f6f66206f6620636f6d706c69616e636520696e2063617365206f6620616e206175646974206f7220696e7370656374696f6e3c2f703e, 1, 1, '2025-04-21', '2025-04-22'),
(2, '', 'Fire Hydrant Accessories', 'fire-hydrant-accessories', '[]', '', 0, 1, '2025-04-21', '2025-04-22'),
(3, '', 'Fire Sprinkler Installation', 'fire-sprinkler-installation', '[]', '', 0, 1, '2025-04-21', '2025-04-22'),
(4, '', 'Fire Alarm System', 'fire-alarm-system', '[]', '', 0, 1, '2025-04-21', '2025-04-22'),
(5, '', 'Kitchen Suppression System', 'kitchen-suppression-system', '[]', '', 0, 1, '2025-04-21', '2025-04-22'),
(6, '', 'Fire Tube Suppression System', 'fire-tube-suppression-system', '[]', '', 0, 1, '2025-04-21', '2025-04-22'),
(7, '', 'CO2 Flooding System', 'co2-flooding-system', '[]', '', 0, 1, '2025-04-21', '2025-04-22'),
(8, '', 'CCTV INSTALLATION', 'cctv-installation', '[]', '', 0, 1, '2025-04-21', '2025-04-22'),
(9, '1745221056.27', 'FIRE FIGHTING EQUIPMENTS', 'fire-fighting-equipments', '[\"istockphoto-475785208-612x612-1.webp\",\"istockphoto-1006581470-612x612-1.webp\",\"WhatsApp-Image-2025-02-07-at-12.27.20-AM-70.webp\"]', '', 1, 1, '2025-04-21', '2025-04-21'),
(10, '1745221102.png', 'NEW FIRE EXTINGUISHER', 'new-fire-extinguisher', '[\"download (1).png\",\"download.png\"]', '', 1, 1, '2025-04-21', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `state_id`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 32, 'North and Middle Andaman', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 32, 'South Andaman', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 32, 'Nicobar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 'Adilabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 'Anantapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 'Chittoor', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 'East Godavari', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 1, 'Guntur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 1, 'Hyderabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 1, 'Kadapa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 1, 'Karimnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 1, 'Khammam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 1, 'Krishna', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 1, 'Kurnool', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 1, 'Mahbubnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 1, 'Medak', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 1, 'Nalgonda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 1, 'Nellore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 1, 'Nizamabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 1, 'Prakasam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 1, 'Rangareddi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 1, 'Srikakulam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 1, 'Vishakhapatnam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 1, 'Vizianagaram', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 1, 'Warangal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 1, 'West Godavari', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 3, 'Anjaw', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 3, 'Changlang', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 3, 'East Kameng', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 3, 'Lohit', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 3, 'Lower Subansiri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 3, 'Papum Pare', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 3, 'Tirap', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 3, 'Dibang Valley', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 3, 'Upper Subansiri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 3, 'West Kameng', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 2, 'Barpeta', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 2, 'Bongaigaon', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 2, 'Cachar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 2, 'Darrang', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 2, 'Dhemaji', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 2, 'Dhubri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 2, 'Dibrugarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 2, 'Goalpara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 2, 'Golaghat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 2, 'Hailakandi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 2, 'Jorhat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 2, 'Karbi Anglong', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 2, 'Karimganj', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 2, 'Kokrajhar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 2, 'Lakhimpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 2, 'Marigaon', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 2, 'Nagaon', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 2, 'Nalbari', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 2, 'North Cachar Hills', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 2, 'Sibsagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 2, 'Sonitpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 2, 'Tinsukia', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 4, 'Araria', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 4, 'Aurangabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 4, 'Banka', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 4, 'Begusarai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 4, 'Bhagalpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 4, 'Bhojpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 4, 'Buxar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 4, 'Darbhanga', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 4, 'Purba Champaran', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 4, 'Gaya', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 4, 'Gopalganj', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 4, 'Jamui', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 4, 'Jehanabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 4, 'Khagaria', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 4, 'Kishanganj', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 4, 'Kaimur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 4, 'Katihar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 4, 'Lakhisarai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 4, 'Madhubani', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 4, 'Munger', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 4, 'Madhepura', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 4, 'Muzaffarpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 4, 'Nalanda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 4, 'Nawada', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 4, 'Patna', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 4, 'Purnia', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 4, 'Rohtas', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 4, 'Saharsa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 4, 'Samastipur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 4, 'Sheohar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 4, 'Sheikhpura', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 4, 'Saran', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 4, 'Sitamarhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 4, 'Supaul', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 4, 'Siwan', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 4, 'Vaishali', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 4, 'Pashchim Champaran', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 36, 'Bastar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 36, 'Bilaspur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 36, 'Dantewada', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 36, 'Dhamtari', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 36, 'Durg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 36, 'Jashpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 36, 'Janjgir-Champa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 36, 'Korba', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 36, 'Koriya', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 36, 'Kanker', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 36, 'Kawardha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 36, 'Mahasamund', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 36, 'Raigarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 36, 'Rajnandgaon', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 36, 'Raipur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 36, 'Surguja', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 29, 'Diu', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 29, 'Daman', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 25, 'Central Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 25, 'East Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 25, 'New Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 25, 'North Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 25, 'North East Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 25, 'North West Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 25, 'South Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 25, 'South West Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 25, 'West Delhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 26, 'North Goa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 26, 'South Goa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 5, 'Ahmedabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 5, 'Amreli District', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 5, 'Anand', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 5, 'Banaskantha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 5, 'Bharuch', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 5, 'Bhavnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 5, 'Dahod', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 5, 'The Dangs', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 5, 'Gandhinagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 5, 'Jamnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 5, 'Junagadh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 5, 'Kutch', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 5, 'Kheda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 5, 'Mehsana', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 5, 'Narmada', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 5, 'Navsari', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 5, 'Patan', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 5, 'Panchmahal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 5, 'Porbandar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 5, 'Rajkot', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 5, 'Sabarkantha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 5, 'Surendranagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 5, 'Surat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 5, 'Vadodara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 5, 'Valsad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 6, 'Ambala', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 6, 'Bhiwani', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 6, 'Faridabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 6, 'Fatehabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 6, 'Gurgaon', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 6, 'Hissar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 6, 'Jhajjar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 6, 'Jind', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, 6, 'Karnal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 6, 'Kaithal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, 6, 'Kurukshetra', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 6, 'Mahendragarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, 6, 'Mewat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 6, 'Panchkula', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 6, 'Panipat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, 6, 'Rewari', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, 6, 'Rohtak', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, 6, 'Sirsa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, 6, 'Sonepat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, 6, 'Yamuna Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 6, 'Palwal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, 7, 'Bilaspur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, 7, 'Chamba', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, 7, 'Hamirpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(174, 7, 'Kangra', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(175, 7, 'Kinnaur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, 7, 'Kulu', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, 7, 'Lahaul and Spiti', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, 7, 'Mandi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, 7, 'Shimla', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, 7, 'Sirmaur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, 7, 'Solan', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, 7, 'Una', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, 8, 'Anantnag', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, 8, 'Badgam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, 8, 'Bandipore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(186, 8, 'Baramula', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, 8, 'Doda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, 8, 'Jammu', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, 8, 'Kargil', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, 8, 'Kathua', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, 8, 'Kupwara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, 8, 'Leh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(193, 8, 'Poonch', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, 8, 'Pulwama', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, 8, 'Rajauri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, 8, 'Srinagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, 8, 'Samba', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, 8, 'Udhampur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, 34, 'Bokaro', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, 34, 'Chatra', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(201, 34, 'Deoghar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(202, 34, 'Dhanbad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(203, 34, 'Dumka', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(204, 34, 'Purba Singhbhum', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(205, 34, 'Garhwa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(206, 34, 'Giridih', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(207, 34, 'Godda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(208, 34, 'Gumla', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(209, 34, 'Hazaribagh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(210, 34, 'Koderma', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(211, 34, 'Lohardaga', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(212, 34, 'Pakur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(213, 34, 'Palamu', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(214, 34, 'Ranchi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(215, 34, 'Sahibganj', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(216, 34, 'Seraikela and Kharsawan', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(217, 34, 'Pashchim Singhbhum', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(218, 34, 'Ramgarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(219, 9, 'Bidar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(220, 9, 'Belgaum', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(221, 9, 'Bijapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(222, 9, 'Bagalkot', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(223, 9, 'Bellary', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(224, 9, 'Bangalore Rural District', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(225, 9, 'Bangalore Urban District', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(226, 9, 'Chamarajnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(227, 9, 'Chikmagalur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(228, 9, 'Chitradurga', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(229, 9, 'Davanagere', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(230, 9, 'Dharwad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(231, 9, 'Dakshina Kannada', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(232, 9, 'Gadag', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(233, 9, 'Gulbarga', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(234, 9, 'Hassan', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(235, 9, 'Haveri District', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(236, 9, 'Kodagu', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(237, 9, 'Kolar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(238, 9, 'Koppal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(239, 9, 'Mandya', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(240, 9, 'Mysore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(241, 9, 'Raichur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(242, 9, 'Shimoga', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(243, 9, 'Tumkur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(244, 9, 'Udupi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(245, 9, 'Uttara Kannada', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(246, 9, 'Ramanagara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(247, 9, 'Chikballapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(248, 9, 'Yadagiri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(249, 10, 'Alappuzha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(250, 10, 'Ernakulam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(251, 10, 'Idukki', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(252, 10, 'Kollam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(253, 10, 'Kannur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(254, 10, 'Kasaragod', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(255, 10, 'Kottayam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(256, 10, 'Kozhikode', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(257, 10, 'Malappuram', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(258, 10, 'Palakkad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(259, 10, 'Pathanamthitta', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(260, 10, 'Thrissur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(261, 10, 'Thiruvananthapuram', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(262, 10, 'Wayanad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(263, 11, 'Alirajpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(264, 11, 'Anuppur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(265, 11, 'Ashok Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(266, 11, 'Balaghat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(267, 11, 'Barwani', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(268, 11, 'Betul', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(269, 11, 'Bhind', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(270, 11, 'Bhopal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(271, 11, 'Burhanpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(272, 11, 'Chhatarpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(273, 11, 'Chhindwara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(274, 11, 'Damoh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(275, 11, 'Datia', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(276, 11, 'Dewas', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(277, 11, 'Dhar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(278, 11, 'Dindori', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(279, 11, 'Guna', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(280, 11, 'Gwalior', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(281, 11, 'Harda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(282, 11, 'Hoshangabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(283, 11, 'Indore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(284, 11, 'Jabalpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(285, 11, 'Jhabua', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(286, 11, 'Katni', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(287, 11, 'Khandwa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(288, 11, 'Khargone', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(289, 11, 'Mandla', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(290, 11, 'Mandsaur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(291, 11, 'Morena', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(292, 11, 'Narsinghpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(293, 11, 'Neemuch', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(294, 11, 'Panna', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(295, 11, 'Rewa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(296, 11, 'Rajgarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(297, 11, 'Ratlam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(298, 11, 'Raisen', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(299, 11, 'Sagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(300, 11, 'Satna', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(301, 11, 'Sehore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(302, 11, 'Seoni', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(303, 11, 'Shahdol', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(304, 11, 'Shajapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(305, 11, 'Sheopur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(306, 11, 'Shivpuri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(307, 11, 'Sidhi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(308, 11, 'Singrauli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(309, 11, 'Tikamgarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(310, 11, 'Ujjain', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(311, 11, 'Umaria', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(312, 11, 'Vidisha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(313, 12, 'Ahmednagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(314, 12, 'Akola', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(315, 12, 'Amrawati', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(316, 12, 'Aurangabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(317, 12, 'Bhandara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(318, 12, 'Beed', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(319, 12, 'Buldhana', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(320, 12, 'Chandrapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(321, 12, 'Dhule', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(322, 12, 'Gadchiroli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(323, 12, 'Gondiya', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(324, 12, 'Hingoli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(325, 12, 'Jalgaon', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(326, 12, 'Jalna', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(327, 12, 'Kolhapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(328, 12, 'Latur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(329, 12, 'Mumbai City', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(330, 12, 'Mumbai suburban', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(331, 12, 'Nandurbar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(332, 12, 'Nanded', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(333, 12, 'Nagpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(334, 12, 'Nashik', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(335, 12, 'Osmanabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(336, 12, 'Parbhani', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(337, 12, 'Pune', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(338, 12, 'Raigad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(339, 12, 'Ratnagiri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(340, 12, 'Sindhudurg', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(341, 12, 'Sangli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(342, 12, 'Solapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(343, 12, 'Satara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(344, 12, 'Thane', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(345, 12, 'Wardha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(346, 12, 'Washim', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(347, 12, 'Yavatmal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(348, 13, 'Bishnupur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(349, 13, 'Churachandpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(350, 13, 'Chandel', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(351, 13, 'Imphal East', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(352, 13, 'Senapati', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(353, 13, 'Tamenglong', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(354, 13, 'Thoubal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(355, 13, 'Ukhrul', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(356, 13, 'Imphal West', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(357, 14, 'East Garo Hills', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(358, 14, 'East Khasi Hills', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(359, 14, 'Jaintia Hills', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(360, 14, 'Ri-Bhoi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(361, 14, 'South Garo Hills', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(362, 14, 'West Garo Hills', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(363, 14, 'West Khasi Hills', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(364, 15, 'Aizawl', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(365, 15, 'Champhai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(366, 15, 'Kolasib', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(367, 15, 'Lawngtlai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(368, 15, 'Lunglei', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(369, 15, 'Mamit', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(370, 15, 'Saiha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(371, 15, 'Serchhip', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(372, 16, 'Dimapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(373, 16, 'Kohima', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(374, 16, 'Mokokchung', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(375, 16, 'Mon', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(376, 16, 'Phek', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(377, 16, 'Tuensang', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(378, 16, 'Wokha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(379, 16, 'Zunheboto', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(380, 17, 'Angul', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(381, 17, 'Boudh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(382, 17, 'Bhadrak', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(383, 17, 'Bolangir', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(384, 17, 'Bargarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(385, 17, 'Baleswar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(386, 17, 'Cuttack', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(387, 17, 'Debagarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(388, 17, 'Dhenkanal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(389, 17, 'Ganjam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(390, 17, 'Gajapati', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(391, 17, 'Jharsuguda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(392, 17, 'Jajapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(393, 17, 'Jagatsinghpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(394, 17, 'Khordha', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(395, 17, 'Kendujhar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(396, 17, 'Kalahandi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(397, 17, 'Kandhamal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(398, 17, 'Koraput', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(399, 17, 'Kendrapara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(400, 17, 'Malkangiri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(401, 17, 'Mayurbhanj', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(402, 17, 'Nabarangpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(403, 17, 'Nuapada', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(404, 17, 'Nayagarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(405, 17, 'Puri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(406, 17, 'Rayagada', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(407, 17, 'Sambalpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(408, 17, 'Subarnapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(409, 17, 'Sundargarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(410, 27, 'Karaikal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(411, 27, 'Mahe', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(412, 27, 'Puducherry', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(413, 27, 'Yanam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(414, 18, 'Amritsar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(415, 18, 'Bathinda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(416, 18, 'Firozpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(417, 18, 'Faridkot', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(418, 18, 'Fatehgarh Sahib', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(419, 18, 'Gurdaspur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(420, 18, 'Hoshiarpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(421, 18, 'Jalandhar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(422, 18, 'Kapurthala', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(423, 18, 'Ludhiana', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(424, 18, 'Mansa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(425, 18, 'Moga', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(426, 18, 'Mukatsar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(427, 18, 'Nawan Shehar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(428, 18, 'Patiala', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(429, 18, 'Rupnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(430, 18, 'Sangrur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(431, 19, 'Ajmer', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(432, 19, 'Alwar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(433, 19, 'Bikaner', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(434, 19, 'Barmer', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(435, 19, 'Banswara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(436, 19, 'Bharatpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(437, 19, 'Baran', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(438, 19, 'Bundi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(439, 19, 'Bhilwara', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(440, 19, 'Churu', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(441, 19, 'Chittorgarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(442, 19, 'Dausa', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(443, 19, 'Dholpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(444, 19, 'Dungapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(445, 19, 'Ganganagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(446, 19, 'Hanumangarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(447, 19, 'Juhnjhunun', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(448, 19, 'Jalore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(449, 19, 'Jodhpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(450, 19, 'Jaipur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(451, 19, 'Jaisalmer', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(452, 19, 'Jhalawar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(453, 19, 'Karauli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(454, 19, 'Kota', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(455, 19, 'Nagaur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(456, 19, 'Pali', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(457, 19, 'Pratapgarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(458, 19, 'Rajsamand', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(459, 19, 'Sikar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(460, 19, 'Sawai Madhopur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(461, 19, 'Sirohi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(462, 19, 'Tonk', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(463, 19, 'Udaipur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(464, 20, 'East Sikkim', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(465, 20, 'North Sikkim', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(466, 20, 'South Sikkim', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(467, 20, 'West Sikkim', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(468, 21, 'Ariyalur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(469, 21, 'Chennai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(470, 21, 'Coimbatore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(471, 21, 'Cuddalore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(472, 21, 'Dharmapuri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(473, 21, 'Dindigul', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(474, 21, 'Erode', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(475, 21, 'Kanchipuram', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(476, 21, 'Kanyakumari', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(477, 21, 'Karur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(478, 21, 'Madurai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(479, 21, 'Nagapattinam', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(480, 21, 'The Nilgiris', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(481, 21, 'Namakkal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(482, 21, 'Perambalur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(483, 21, 'Pudukkottai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(484, 21, 'Ramanathapuram', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(485, 21, 'Salem', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(486, 21, 'Sivagangai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(487, 21, 'Tiruppur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(488, 21, 'Tiruchirappalli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(489, 21, 'Theni', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(490, 21, 'Tirunelveli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(491, 21, 'Thanjavur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(492, 21, 'Thoothukudi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(493, 21, 'Thiruvallur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(494, 21, 'Thiruvarur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(495, 21, 'Tiruvannamalai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(496, 21, 'Vellore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(497, 21, 'Villupuram', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(498, 22, 'Dhalai', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(499, 22, 'North Tripura', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(500, 22, 'South Tripura', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(501, 22, 'West Tripura', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(502, 33, 'Almora', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(503, 33, 'Bageshwar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(504, 33, 'Chamoli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(505, 33, 'Champawat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(506, 33, 'Dehradun', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(507, 33, 'Haridwar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(508, 33, 'Nainital', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(509, 33, 'Pauri Garhwal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(510, 33, 'Pithoragharh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(511, 33, 'Rudraprayag', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(512, 33, 'Tehri Garhwal', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(513, 33, 'Udham Singh Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(514, 33, 'Uttarkashi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(515, 23, 'Agra', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(516, 23, 'Allahabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(517, 23, 'Aligarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(518, 23, 'Ambedkar Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(519, 23, 'Auraiya', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(520, 23, 'Azamgarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(521, 23, 'Barabanki', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(522, 23, 'Badaun', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(523, 23, 'Bagpat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(524, 23, 'Bahraich', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(525, 23, 'Bijnor', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(526, 23, 'Ballia', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(527, 23, 'Banda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(528, 23, 'Balrampur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(529, 23, 'Bareilly', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(530, 23, 'Basti', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(531, 23, 'Bulandshahr', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(532, 23, 'Chandauli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(533, 23, 'Chitrakoot', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(534, 23, 'Deoria', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(535, 23, 'Etah', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(536, 23, 'Kanshiram Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(537, 23, 'Etawah', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(538, 23, 'Firozabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(539, 23, 'Farrukhabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(540, 23, 'Fatehpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(541, 23, 'Faizabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(542, 23, 'Gautam Buddha Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(543, 23, 'Gonda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(544, 23, 'Ghazipur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(545, 23, 'Gorkakhpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(546, 23, 'Ghaziabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(547, 23, 'Hamirpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(548, 23, 'Hardoi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(549, 23, 'Mahamaya Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(550, 23, 'Jhansi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(551, 23, 'Jalaun', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(552, 23, 'Jyotiba Phule Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(553, 23, 'Jaunpur District', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(554, 23, 'Kanpur Dehat', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(555, 23, 'Kannauj', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(556, 23, 'Kanpur Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(557, 23, 'Kaushambi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(558, 23, 'Kushinagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(559, 23, 'Lalitpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(560, 23, 'Lakhimpur Kheri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(561, 23, 'Lucknow', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(562, 23, 'Mau', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(563, 23, 'Meerut', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(564, 23, 'Maharajganj', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(565, 23, 'Mahoba', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(566, 23, 'Mirzapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(567, 23, 'Moradabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(568, 23, 'Mainpuri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(569, 23, 'Mathura', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(570, 23, 'Muzaffarnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(571, 23, 'Pilibhit', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(572, 23, 'Pratapgarh', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(573, 23, 'Rampur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(574, 23, 'Rae Bareli', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(575, 23, 'Saharanpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(576, 23, 'Sitapur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(577, 23, 'Shahjahanpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(578, 23, 'Sant Kabir Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(579, 23, 'Siddharthnagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(580, 23, 'Sonbhadra', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(581, 23, 'Sant Ravidas Nagar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(582, 23, 'Sultanpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(583, 23, 'Shravasti', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(584, 23, 'Unnao', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(585, 23, 'Varanasi', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(586, 24, 'Birbhum', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(587, 24, 'Bankura', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(588, 24, 'Bardhaman', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(589, 24, 'Darjeeling', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(590, 24, 'Dakshin Dinajpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(591, 24, 'Hooghly', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(592, 24, 'Howrah', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(593, 24, 'Jalpaiguri', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(594, 24, 'Cooch Behar', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(595, 24, 'Kolkata', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(596, 24, 'Malda', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(597, 24, 'Midnapore', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(598, 24, 'Murshidabad', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(599, 24, 'Nadia', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(600, 24, 'North 24 Parganas', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(601, 24, 'South 24 Parganas', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(602, 24, 'Purulia', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(603, 24, 'Uttar Dinajpur', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `addeddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `addeddate`) VALUES
(1, 'wol 1', 'wol1@gmail.com', '123456789', 'Test', 'teste ete st', '2024-08-24 14:18:28'),
(2, 'Shri Ganesh', 'wolverine@gmail.com', '12346456546', 'Enquiry', 'dddd', '2025-04-22 11:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `content` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `name`, `content`) VALUES
(1, 'About Us', 0x3c703e3c7370616e207374796c653d22636f6c6f723a207267622832322c20302c2030293b20666f6e742d66616d696c793a2053616e6368657a2c2073616e732d73657269663b20666f6e742d73697a653a20313670783b20746578742d616c69676e3a2063656e7465723b223e466972652073616665747920697320616e20657373656e7469616c20617370656374206f66206d61696e7461696e696e672061207361666520616e642073656375726520656e7669726f6e6d656e7420696e20616e79206275696c64696e67206f7220666163696c6974792e205768696c6520686176696e67206669726520657874696e6775697368657273206f6e2068616e64206973206372756369616c2c206b6e6f77696e67207768656e20616e642077687920746f20726566696c6c207468656d206973206a75737420617320696d706f7274616e742e2041206669726520657874696e677569736865722069732061206c6966652d736176696e6720746f6f6c2c20627574206f6e6c792069662069742069732066756c6c79206368617267656420616e642066756e6374696f6e616c207768656e20616e20656d657267656e6379206172697365732e20496e207468697320626c6f6720706f73742c207765e280996c6c20646973637573732074686520696d706f7274616e6365206f66206669726520657874696e6775697368657220726566696c6c696e672c20686f77206f6674656e2069742073686f756c6420626520646f6e652c20616e64207768792069742073686f756c642062652070617274206f6620796f757220726567756c617220666972652073616665747920726f7574696e653c2f7370616e3e3c2f703e),
(2, 'Privacy Policy', 0x3c703e3c7370616e207374796c653d22636f6c6f723a207267622832322c20302c2030293b20666f6e742d66616d696c793a2053616e6368657a2c2073616e732d73657269663b20666f6e742d73697a653a20313670783b20746578742d616c69676e3a2063656e7465723b223e466972652073616665747920697320616e20657373656e7469616c20617370656374206f66206d61696e7461696e696e672061207361666520616e642073656375726520656e7669726f6e6d656e7420696e20616e79206275696c64696e67206f7220666163696c6974792e205768696c6520686176696e67206669726520657874696e6775697368657273206f6e2068616e64206973206372756369616c2c206b6e6f77696e67207768656e20616e642077687920746f20726566696c6c207468656d206973206a75737420617320696d706f7274616e742e2041206669726520657874696e677569736865722069732061206c6966652d736176696e6720746f6f6c2c20627574206f6e6c792069662069742069732066756c6c79206368617267656420616e642066756e6374696f6e616c207768656e20616e20656d657267656e6379206172697365732e20496e207468697320626c6f6720706f73742c207765e280996c6c20646973637573732074686520696d706f7274616e6365206f66206669726520657874696e6775697368657220726566696c6c696e672c20686f77206f6674656e2069742073686f756c6420626520646f6e652c20616e64207768792069742073686f756c642062652070617274206f6620796f757220726567756c617220666972652073616665747920726f7574696e653c2f7370616e3e3c2f703e),
(3, 'Terms & Conditions', 0x3c703e3c7370616e207374796c653d22636f6c6f723a207267622832322c20302c2030293b20666f6e742d66616d696c793a2053616e6368657a2c2073616e732d73657269663b20666f6e742d73697a653a20313670783b20746578742d616c69676e3a2063656e7465723b223e466972652073616665747920697320616e20657373656e7469616c20617370656374206f66206d61696e7461696e696e672061207361666520616e642073656375726520656e7669726f6e6d656e7420696e20616e79206275696c64696e67206f7220666163696c6974792e205768696c6520686176696e67206669726520657874696e6775697368657273206f6e2068616e64206973206372756369616c2c206b6e6f77696e67207768656e20616e642077687920746f20726566696c6c207468656d206973206a75737420617320696d706f7274616e742e2041206669726520657874696e677569736865722069732061206c6966652d736176696e6720746f6f6c2c20627574206f6e6c792069662069742069732066756c6c79206368617267656420616e642066756e6374696f6e616c207768656e20616e20656d657267656e6379206172697365732e20496e207468697320626c6f6720706f73742c207765e280996c6c20646973637573732074686520696d706f7274616e6365206f66206669726520657874696e6775697368657220726566696c6c696e672c20686f77206f6674656e2069742073686f756c6420626520646f6e652c20616e64207768792069742073686f756c642062652070617274206f6620796f757220726567756c617220666972652073616665747920726f7574696e653c2f7370616e3e3c2f703e),
(4, 'Home Page About us', 0x3c703e3c623e476c6f62616c20466972652026616d703b20536166657479206769766520657870657269656e63656420616e642067756172616e746565642070726f66696369656e7420746563686e696369616e20746f20796f757220646f6f727374657020617420706f636b657420616d696361626c6520636f737420666f7220616e7920736f7274206f662062696379636c652061646d696e697374726174696f6e20617420686f6d652e2052656d61696e20617420796f757220686f6d6520616e642067657420796f75722062696379636c652061646a757374656420696e20612073696e676c65207469636b2062792070726f66696369656e7420616e6420657870657269656e636564207370656369616c69737420696e2044656c6869204e43522042696b6520536572766963696e6720617420446f6f727374657020666162726963617465207468617420736f7274206f66205452555354207768656e20636c69656e7473207365652065766572797468696e67206265666f72652068697320657965732e20476c6f62616c20466972652026616d703b205361666574792073686f77207570207769746820726571756972656420696e737472756d656e74732c20457373656e7469616c20506172747320616e6420456e67696e65204f696c2e2042696379636c65206f7665726861756c696e6720617420686f6d6520636861726765206368616e6765732079657420776520696e20616c6c2061637475616c69747920646f2066696e6973682061646a757374696e6720616e6420667572746865726d6f72652067756172616e74656520656e73757265206f6e20706172747320776869636820776520737570706c616e742e2e3c2f623e3c2f703e),
(5, 'Bottom Content', 0x3c703e3c7370616e207374796c653d22666f6e742d73697a653a20313770783b223e476c6f62616c20466972652026616d703b205361666574792070726f706f736974696f6e2077656220626173656420626f6f6b696e672061646d696e697374726174696f6e7320666f722042696b652061646a757374696e6720616e6420666978696e6720617420636c69656e74206661766f72656420617265612077686574686572206974277320686f6d65206f72206f66666963652e3c2f7370616e3e3c2f703e);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `device_id` text NOT NULL,
  `ip_address` text NOT NULL,
  `login_date` date NOT NULL,
  `login_time` time NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `logout_date` date DEFAULT NULL,
  `logout_time` time DEFAULT NULL,
  `login_status` int(11) NOT NULL COMMENT '0=login,1=logout,'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `user_id`, `device_id`, `ip_address`, `login_date`, `login_time`, `username`, `password`, `logout_date`, `logout_time`, `login_status`) VALUES
(14, '2', '6805ddead3c36::1', '::1', '2025-04-21', '11:25:54', 'admin', 'admin', NULL, NULL, 0),
(15, '2', '6805ddfb9aa3c::1', '::1', '2025-04-21', '11:26:11', 'admin', 'admin', NULL, NULL, 0),
(16, '2', '6805de2618a2b::1', '::1', '2025-04-21', '11:26:54', 'admin', 'admin', NULL, NULL, 0),
(17, '2', '6805de31bb823::1', '::1', '2025-04-21', '11:27:05', 'admin', 'admin', NULL, NULL, 0),
(18, '3', '6805dfc29e464::1', '::1', '2025-04-21', '11:33:46', 'azmal', 'azmal', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `meta_tags`
--

CREATE TABLE `meta_tags` (
  `id` int(11) NOT NULL,
  `page_name` varchar(150) DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_auther` varchar(150) DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `add_date_time` datetime DEFAULT NULL,
  `update_date_time` datetime DEFAULT NULL,
  `update_history` text DEFAULT NULL,
  `is_delete` int(2) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `type` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meta_tags`
--

INSERT INTO `meta_tags` (`id`, `page_name`, `meta_title`, `meta_auther`, `meta_keyword`, `meta_description`, `slug`, `add_date_time`, `update_date_time`, `update_history`, `is_delete`, `status`, `type`) VALUES
(12, NULL, NULL, NULL, NULL, NULL, 'dfr', NULL, NULL, NULL, NULL, NULL, 0),
(25, NULL, NULL, NULL, NULL, NULL, 'fire-fighting-equipments', NULL, NULL, NULL, NULL, NULL, 0),
(26, NULL, NULL, NULL, NULL, NULL, 'new-fire-extinguisher', NULL, NULL, NULL, NULL, NULL, 0),
(29, NULL, NULL, NULL, NULL, NULL, 'conventional-electronic-sounder-only', NULL, NULL, NULL, NULL, NULL, 0),
(30, NULL, NULL, NULL, NULL, NULL, 'fire-first-aid-fire-swinging-hose-reel-drum', NULL, NULL, NULL, NULL, NULL, 0),
(31, NULL, NULL, NULL, NULL, NULL, 'hydrant-valve-parts-blanking-cap-with-chain', NULL, NULL, NULL, NULL, NULL, 0),
(32, NULL, NULL, NULL, NULL, NULL, 'gun-metal-isi-marked-fire-hose-delivery-coupling', NULL, NULL, NULL, NULL, NULL, 0),
(33, NULL, NULL, NULL, NULL, NULL, '63-mm-make-four-way-suction-collection-head', NULL, NULL, NULL, NULL, NULL, 0),
(34, NULL, NULL, NULL, NULL, NULL, 'isi-double-outlet-hydrant-valves-stainless-steel', NULL, NULL, NULL, NULL, NULL, 0),
(35, NULL, NULL, NULL, NULL, NULL, 'cctv-installation', NULL, NULL, NULL, NULL, NULL, 0),
(36, NULL, NULL, NULL, NULL, NULL, 'co2-flooding-system', NULL, NULL, NULL, NULL, NULL, 0),
(37, NULL, NULL, NULL, NULL, NULL, 'fire-tube-suppression-system', NULL, NULL, NULL, NULL, NULL, 0),
(39, NULL, NULL, NULL, NULL, NULL, 'kitchen-suppression-system', NULL, NULL, NULL, NULL, NULL, 0),
(40, NULL, NULL, NULL, NULL, NULL, 'fire-alarm-system', NULL, NULL, NULL, NULL, NULL, 0),
(41, NULL, NULL, NULL, NULL, NULL, 'fire-sprinkler-installation', NULL, NULL, NULL, NULL, NULL, 0),
(42, NULL, NULL, NULL, NULL, NULL, 'fire-hydrant-accessories', NULL, NULL, NULL, NULL, NULL, 0),
(48, NULL, NULL, NULL, NULL, NULL, 'fire-extinguishers-refilling', NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `multipleimage`
--

CREATE TABLE `multipleimage` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `multiple_image_json` text NOT NULL,
  `single_image` text NOT NULL,
  `multiple_images` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` text NOT NULL,
  `modifieddate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `image`, `status`, `addeddate`, `modifieddate`) VALUES
(1, '1745299607.webp', 1, '2025-04-22 10:56:47', '2025-04-22 10:56:49'),
(2, '1745299620.webp', 1, '2025-04-22 10:57:00', '0000-00-00 00:00:00'),
(3, '1745299626.webp', 1, '2025-04-22 10:57:06', '0000-00-00 00:00:00'),
(4, '1745299635.webp', 1, '2025-04-22 10:57:15', '0000-00-00 00:00:00'),
(5, '1745299639.webp', 1, '2025-04-22 10:57:19', '0000-00-00 00:00:00'),
(6, '1745299642.webp', 1, '2025-04-22 10:57:22', '0000-00-00 00:00:00'),
(7, '1745299647.webp', 1, '2025-04-22 10:57:27', '0000-00-00 00:00:00'),
(8, '1745299651.webp', 1, '2025-04-22 10:57:31', '0000-00-00 00:00:00'),
(9, '1745299657.webp', 1, '2025-04-22 10:57:37', '0000-00-00 00:00:00'),
(10, '1745299661.webp', 1, '2025-04-22 10:57:41', '0000-00-00 00:00:00'),
(11, '1745299666.webp', 1, '2025-04-22 10:57:46', '0000-00-00 00:00:00'),
(12, '1745299673.webp', 1, '2025-04-22 10:57:53', '0000-00-00 00:00:00'),
(13, '1745299682.webp', 1, '2025-04-22 10:58:02', '0000-00-00 00:00:00'),
(14, '1745299686.webp', 1, '2025-04-22 10:58:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `image`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(1, '1745300138.webp', 'Conventional Electronic Sounder Only', 'conventional-electronic-sounder-only', 1, '2025-04-22 11:05:38', '2025-04-22 11:05:49'),
(2, '1745300170.webp', 'Fire First Aid Fire Swinging Hose Reel Drum', 'fire-first-aid-fire-swinging-hose-reel-drum', 1, '2025-04-22 11:06:10', '0000-00-00 00:00:00'),
(3, '1745300188.webp', 'Hydrant Valve Parts – Blanking Cap With Chain', 'hydrant-valve-parts-blanking-cap-with-chain', 1, '2025-04-22 11:06:28', '0000-00-00 00:00:00'),
(4, '1745300202.webp', 'Gun Metal ISI Marked Fire Hose Delivery Coupling', 'gun-metal-isi-marked-fire-hose-delivery-coupling', 1, '2025-04-22 11:06:42', '0000-00-00 00:00:00'),
(5, '1745300224.webp', '63 Mm Make Four Way Suction Collection Head', '63-mm-make-four-way-suction-collection-head', 1, '2025-04-22 11:07:04', '0000-00-00 00:00:00'),
(6, '1745300245.webp', 'Isi Double Outlet Hydrant Valves Stainless Steel', 'isi-double-outlet-hydrant-valves-stainless-steel', 1, '2025-04-22 11:07:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL COMMENT '1=hospital,2=physician,3=ambulance,4=pathlogy,5=user',
  `username` text NOT NULL,
  `slug` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `dob` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zipcode` text NOT NULL,
  `country` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `opning_time` text NOT NULL,
  `overview` blob NOT NULL,
  `location` blob NOT NULL,
  `bussiness_hour` blob NOT NULL,
  `logo` text NOT NULL,
  `total_bed` text NOT NULL,
  `avaliable_bed` text NOT NULL,
  `image` text NOT NULL,
  `ambulance_status` float NOT NULL COMMENT '1=active,0=deactive',
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `role_access` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `slug`, `role_access`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 'HR TEAM', 'hr-team', '{\"main_access\":[\"0\",\"1\",\"2\",\"4\",\"5\"],\"inner_access\":[[\"3\"],[\"3\"],[\"3\"],[],[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\",\"4\"]]}', 1, '2024-07-30 13:20:06', '2024-07-31 13:01:40'),
(2, 'NATIONAL SALE MANAGER', 'national-sale-manager', '{\"main_access\":[\"2\"],\"inner_access\":[[],[],[\"3\",\"4\"]]}', 1, '2024-07-30 13:20:42', '2024-07-30 16:17:25'),
(3, 'MIS ADMIN', 'mis-admin', '{\"main_access\":[\"1\"],\"inner_access\":[[],[\"2\",\"3\"],[]]}', 1, '2024-07-30 13:20:54', '2024-07-30 16:17:21'),
(4, 'ACCOUNTS TEAM', 'accounts-team', '{\"main_access\":[\"0\"],\"inner_access\":[[\"2\",\"4\"],[],[]]}', 1, '2024-07-30 13:21:07', '2024-07-30 16:17:16'),
(5, 'PRODUCTION TEAM', 'production-team', '{\"main_access\":[\"0\",\"1\",\"2\"],\"inner_access\":[[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\",\"4\"]]}', 1, '2024-07-30 13:21:20', '2024-07-30 17:42:01'),
(7, 'test', 'test', '{\"main_access\":[\"0\",\"1\",\"2\",\"7\"],\"inner_access\":[[\"1\",\"3\"],[\"1\",\"2\",\"3\",\"4\"],[\"1\",\"2\",\"3\"],[],[],[],[],[\"3\"]]}', 1, '2024-07-30 17:44:07', '2024-08-20 13:08:46'),
(8, 'Azmal Ansari', 'azmal-ansari', '{\"main_access\":[\"0\",\"1\",\"2\",\"3\"],\"inner_access\":[[\"1\",\"2\",\"3\",\"4\"],[\"1\"],[\"4\"],[\"1\"],[],[]]}', 1, '2024-08-24 17:03:02', '2024-09-06 17:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `alt_mobile` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alt_email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `youtube` text NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`id`, `logo`, `mobile`, `alt_mobile`, `email`, `alt_email`, `address`, `facebook`, `twitter`, `instagram`, `youtube`, `map`) VALUES
(1, '1745215047.12', '9856472360', '9586741023', 'email2@gmail.com', 'altemail2@gmail.com', 'your address', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30767295.116023116!2d60.946027684017714!3d19.722272265144735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1713167102172!5m2!1sen!2sin\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `slug` text NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `sub_title`, `slug`, `image`, `content`, `status`, `addeddate`, `modifieddate`) VALUES
(4, 'dfr', 'wer', 'dfr', '1745215121.avif', '<p>ewr</p>', 1, '2024-11-13 13:03:03', '2025-04-22 10:55:48');

-- --------------------------------------------------------

--
-- Table structure for table `slugs`
--

CREATE TABLE `slugs` (
  `id` int(11) NOT NULL,
  `slug` text NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `page_name` varchar(150) NOT NULL,
  `controller_name` varchar(150) NOT NULL,
  `p_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slugs`
--

INSERT INTO `slugs` (`id`, `slug`, `table_name`, `page_name`, `controller_name`, `p_id`) VALUES
(293, 'dfr', 'slider', 'slider.php', 'slider', 4),
(306, 'fire-fighting-equipments', 'categories', 'service-details.php', 'categories', 9),
(307, 'new-fire-extinguisher', 'categories', 'service-details.php', 'categories', 10),
(310, 'conventional-electronic-sounder-only', 'product', 'product-details.php', 'product', 1),
(311, 'fire-first-aid-fire-swinging-hose-reel-drum', 'product', 'product-details.php', 'product', 2),
(312, 'hydrant-valve-parts-blanking-cap-with-chain', 'product', 'product-details.php', 'product', 3),
(313, 'gun-metal-isi-marked-fire-hose-delivery-coupling', 'product', 'product-details.php', 'product', 4),
(314, '63-mm-make-four-way-suction-collection-head', 'product', 'product-details.php', 'product', 5),
(315, 'isi-double-outlet-hydrant-valves-stainless-steel', 'product', 'product-details.php', 'product', 6),
(316, 'cctv-installation', 'categories', 'service-details.php', 'categories', 8),
(317, 'co2-flooding-system', 'categories', 'service-details.php', 'categories', 7),
(318, 'fire-tube-suppression-system', 'categories', 'service-details.php', 'categories', 6),
(320, 'kitchen-suppression-system', 'categories', 'service-details.php', 'categories', 5),
(321, 'fire-alarm-system', 'categories', 'service-details.php', 'categories', 4),
(322, 'fire-sprinkler-installation', 'categories', 'service-details.php', 'categories', 3),
(323, 'fire-hydrant-accessories', 'categories', 'service-details.php', 'categories', 2),
(329, 'fire-extinguishers-refilling', 'categories', 'service-details.php', 'categories', 1);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `country_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`, `slug`, `country_id`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 'ANDHRA PRADESH', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'ASSAM', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'ARUNACHAL PRADESH', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'BIHAR', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'GUJRAT', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'HARYANA', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'HIMACHAL PRADESH', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'JAMMU & KASHMIR', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'KARNATAKA', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'KERALA', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'MADHYA PRADESH', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'MAHARASHTRA', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'MANIPUR', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'MEGHALAYA', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'MIZORAM', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'NAGALAND', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'ORISSA', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'PUNJAB', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'RAJASTHAN', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'SIKKIM', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'TAMIL NADU', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'TRIPURA', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'UTTAR PRADESH', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'WEST BENGAL', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'DELHI', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'GOA', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'PONDICHERY', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'LAKSHDWEEP', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'DAMAN & DIU', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'DADRA & NAGAR', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'CHANDIGARH', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'ANDAMAN & NICOBAR', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'UTTARANCHAL', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'JHARKHAND', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'CHATTISGARH', '', 105, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1=admin,2=subadmin',
  `role` int(11) NOT NULL,
  `access` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `gender` text NOT NULL,
  `dob` text NOT NULL,
  `martial` text NOT NULL,
  `age` text NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL,
  `hash_key` text DEFAULT NULL,
  `hash_expiry` datetime DEFAULT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `type`, `role`, `access`, `first_name`, `last_name`, `username`, `password`, `email`, `mobile`, `address`, `image`, `gender`, `dob`, `martial`, `age`, `country`, `state`, `hash_key`, `hash_expiry`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 1, 0, '', 'Azmal', 'Ansari', 'azmal123', 'azmal123', 'admin@gmail.com', '46546', 'sfsfsdf sdefdsfs fsdf sdf', 'user2.jpg', 'male', '01/01/2022', 'single', '22', 'india', 'elhi', NULL, NULL, 1, NULL, NULL),
(2, 1, 0, '', 'Admin', 'Admin', 'admin', 'admin', 'admin123@gmail.com', '95822980123', 'delhi', '1724412456.png', 'male', '01/01/2022', 'single', '22', 'india', 'delhi', '6ef5a86a72d307d9d2df14306a26534f64236ca1887fb9ba0cff55e6e0a26390', '2024-08-30 13:34:00', 1, NULL, NULL),
(3, 1, 0, '', 'Wolverine', 'logen', 'azmal', 'azmal', 'wolverine@gmail.com', '897989', 'sfsfsdf sdefdsfs fsdf sdf', 'user3.jpg', 'male', '01/01/2022', 'single', '22', 'india', 'delhi', NULL, NULL, 1, NULL, NULL),
(4, 2, 8, '{\"main_access\":[\"0\",\"1\",\"2\",\"3\"],\"inner_access\":[[\"1\",\"2\",\"3\",\"4\"],[\"1\"],[\"4\"],[\"1\"],[],[]]}', '', '', 'azmal12345', 'azmal12345', '', '', '', '', '', '', '', '', '', '', NULL, NULL, 1, '2024-08-24 17:23:45', '2024-11-13 15:44:20');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `position` text NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `image`, `name`, `position`, `content`, `status`, `addeddate`, `modifieddate`) VALUES
(1, '1731493179.png', 'Spiderman', 'Client', '<p><span style=\"background-color: rgb(26, 26, 26); color: rgb(191, 191, 191); font-size: 12px;\">Global Fire & Safety</span> give experienced and guaranteed proficient technician to your doorstep at pocket amicable cost for any sort of bicycle administration at home</p>', 1, '2024-08-24 18:07:24', '2025-04-21 11:38:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_records`
--
ALTER TABLE `activity_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_tags`
--
ALTER TABLE `meta_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multipleimage`
--
ALTER TABLE `multipleimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_setting`
--
ALTER TABLE `site_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slugs`
--
ALTER TABLE `slugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_records`
--
ALTER TABLE `activity_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=604;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `meta_tags`
--
ALTER TABLE `meta_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `multipleimage`
--
ALTER TABLE `multipleimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slugs`
--
ALTER TABLE `slugs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
