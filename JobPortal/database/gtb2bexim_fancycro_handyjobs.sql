-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2021 at 01:40 PM
-- Server version: 10.3.25-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gtb2bexim_fancycro_handyjobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_status`
--

CREATE TABLE `active_status` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_seen` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `active_status`
--

INSERT INTO `active_status` (`id`, `user_id`, `last_seen`, `updated_at`, `created_at`) VALUES
(8, 4, '2021-04-01 12:26 PM', '2021-04-01 16:26:03', '2021-04-01 12:26:03'),
(9, 283, '2021-06-07 10:37 AM', '2021-06-07 14:37:46', '2021-04-01 12:46:58'),
(10, 282, '2021-06-05 01:14 PM', '2021-06-05 17:14:14', '2021-04-01 12:49:53'),
(11, 287, '2021-04-12 02:30 PM', '2021-04-12 18:30:32', '2021-04-02 13:13:01'),
(12, 289, '2021-04-03 12:40 PM', '2021-04-03 16:40:56', '2021-04-03 12:39:46'),
(13, 294, '2021-05-22 08:05 PM', '2021-05-23 00:05:40', '2021-04-06 12:06:54'),
(14, 302, '2021-04-06 02:12 PM', '2021-04-06 18:12:22', '2021-04-06 14:04:48'),
(15, 293, '2021-04-24 01:18 PM', '2021-04-24 17:18:41', '2021-04-08 17:11:12'),
(16, 320, '2021-04-09 11:57 AM', '2021-04-09 15:57:44', '2021-04-09 11:57:44'),
(17, 321, '2021-04-09 12:14 PM', '2021-04-09 16:14:56', '2021-04-09 12:14:56'),
(18, 329, '2021-04-24 01:50 PM', '2021-04-24 17:50:19', '2021-04-10 16:28:14'),
(19, 332, '2021-04-14 12:53 PM', '2021-04-14 16:53:43', '2021-04-14 12:28:59'),
(20, 334, '2021-05-06 01:31 PM', '2021-05-06 17:31:16', '2021-04-15 09:39:59'),
(21, 336, '2021-04-17 10:55 AM', '2021-04-17 14:55:29', '2021-04-17 10:55:29'),
(22, 337, '2021-04-17 12:13 PM', '2021-04-17 16:13:29', '2021-04-17 12:13:29'),
(23, 286, '2021-04-23 12:37 PM', '2021-04-23 16:37:45', '2021-04-23 12:37:10'),
(24, 360, '2021-05-26 10:33 AM', '2021-05-26 14:33:12', '2021-04-24 13:48:23'),
(25, 370, '2021-04-29 09:21 AM', '2021-04-29 13:21:09', '2021-04-29 09:21:09'),
(26, 371, '2021-04-29 09:29 AM', '2021-04-29 13:29:33', '2021-04-29 09:29:33'),
(27, 372, '2021-04-29 01:04 PM', '2021-04-29 17:04:28', '2021-04-29 13:04:28'),
(28, 373, '2021-04-29 01:06 PM', '2021-04-29 17:06:56', '2021-04-29 13:06:56'),
(29, 375, '2021-05-06 02:03 PM', '2021-05-06 18:03:47', '2021-05-06 13:37:10'),
(30, 359, '2021-05-06 01:38 PM', '2021-05-06 17:38:03', '2021-05-06 13:37:43'),
(31, 357, '2021-05-06 02:35 PM', '2021-05-06 18:35:10', '2021-05-06 13:41:26'),
(32, 376, '2021-05-06 01:50 PM', '2021-05-06 17:50:51', '2021-05-06 13:41:30'),
(33, 377, '2021-05-06 02:50 PM', '2021-05-06 18:50:39', '2021-05-06 14:11:49'),
(34, 331, '2021-05-09 01:17 AM', '2021-05-09 05:17:55', '2021-05-07 00:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `amounts`
--

CREATE TABLE `amounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` bigint(20) NOT NULL DEFAULT 0,
  `currency_img` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_type` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_symbol` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_logo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `bid_amount` bigint(20) DEFAULT NULL,
  `social_is_active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amounts`
--

INSERT INTO `amounts` (`id`, `amount`, `currency_img`, `currency_type`, `currency_symbol`, `site_logo`, `is_active`, `bid_amount`, `social_is_active`, `created_at`, `updated_at`) VALUES
(1, 45, 'Danish-Krone-514.png', 'Danish krone', 'Kr', '1613808594simple.png', 0, 45, 1, NULL, '2021-04-23 16:38:41');

-- --------------------------------------------------------

--
-- Table structure for table `amount_statuses`
--

CREATE TABLE `amount_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `contract_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amount_statuses`
--

INSERT INTO `amount_statuses` (`id`, `provider_id`, `contract_id`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(85, 282, 334, 21, 'Contrcat_cancel', '2021-04-01 12:41:42', '2021-04-01 12:41:42'),
(86, 282, 335, 32, 'available', '2021-04-01 12:59:50', '2021-04-01 13:44:04'),
(87, 282, 337, 21, 'Contrcat_cancel', '2021-04-02 10:05:53', '2021-04-02 10:46:22'),
(88, 282, 335, 20, NULL, '2021-04-06 12:18:41', '2021-04-06 12:18:41'),
(89, 282, 335, 20, NULL, '2021-04-06 12:20:57', '2021-04-06 12:20:57'),
(90, 282, 335, 20, NULL, '2021-04-06 12:28:18', '2021-04-06 12:28:18'),
(91, 282, 335, 20, NULL, '2021-04-06 12:28:39', '2021-04-06 12:28:39'),
(92, 283, 339, 2262, 'available', '2021-04-06 13:10:45', '2021-04-06 13:13:55'),
(93, 283, 341, 21, 'Contrcat_cancel', '2021-04-07 11:26:45', '2021-04-08 09:12:18'),
(94, 282, 335, 20, NULL, '2021-04-07 13:30:56', '2021-04-07 13:30:56'),
(95, 283, 344, 12, 'Contrcat_cancel', '2021-04-08 08:59:16', '2021-04-08 09:11:22'),
(97, 283, 346, 12, NULL, '2021-04-08 09:30:11', '2021-04-08 09:30:11'),
(99, 287, 340, 15, 'Contrcat_cancel', '2021-04-09 11:25:33', '2021-04-09 12:33:02'),
(100, 287, 348, 45, 'Contrcat_cancel', '2021-04-12 11:19:47', '2021-04-12 11:21:37'),
(101, 287, 349, 98, 'available', '2021-04-12 11:23:41', '2021-04-12 11:33:49'),
(102, 334, 353, 21, NULL, '2021-04-15 09:30:15', '2021-04-15 09:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `swift_code` varchar(100) NOT NULL,
  `account_no` varchar(500) NOT NULL,
  `i_ban_no` varchar(100) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `branch_addrs` varchar(500) NOT NULL,
  `bank_account_type` varchar(100) NOT NULL,
  `postal_code` varchar(100) NOT NULL,
  `user__name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `name_of_account` varchar(200) NOT NULL,
  `addrs` varchar(550) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`id`, `user_id`, `swift_code`, `account_no`, `i_ban_no`, `branch_name`, `branch_addrs`, `bank_account_type`, `postal_code`, `user__name`, `dob`, `name_of_account`, `addrs`, `city`, `country`, `phone`, `created_at`, `updated_at`) VALUES
(17, 283, '', 'KLS7S78A78DDD78S78', '74554', 'KSKSNQ', '', '', '', 'Seller', '', '', '', '', '', '', '2021-04-06 09:13:50', '2021-04-06 13:13:50'),
(18, 282, '', '0029929929920029', 'asdasd', 'sdsa', '', '', '', 'Seller', '', '', '', '', '', '', '2021-04-07 06:53:31', '2021-04-07 10:53:31'),
(19, 287, '', 'KLS7S78A78DDD78S78', '74554', 'KSKSN', '', '', '', 'Mobsellertesting', '', '', '', '', '', '', '2021-04-12 07:33:42', '2021-04-17 14:14:21'),
(20, 332, '', '123456987', '123456987', 'gulshan lohari bank', '', '', '', 'sudo bee', '', '', '', '', '', '', '2021-04-14 07:34:10', '2021-04-14 11:34:39'),
(21, 334, '', '32132132', '21321321', 'sda', '', '', '', 'koya amok', '', '', '', '', '', '', '2021-04-15 05:07:22', '2021-04-15 09:07:22'),
(22, 1, '', '8787887', '484848', 'Alhabib', '', '', '', 'Emad', '', '', '', '', '', '', '2021-04-17 07:56:14', '2021-04-17 11:56:14'),
(23, 337, '', '234234234', '234234', 'dfsdf', '', '', '', 'sdfs', '', '', '', '', '', '', '2021-04-17 07:56:20', '2021-04-17 11:56:20'),
(24, 285, '', '0029929929920029', '21321321', 'sadaas', '', '', '', 'sad', '', '', '', '', '', '', '2021-04-28 07:09:48', '2021-04-28 11:09:48'),
(25, 294, '', '3233232', '23332', 'df', '', '', '', 'hihihiieeeerrrtttttddd', '', '', '', '', '', '', '2021-04-30 04:29:41', '2021-04-30 08:29:41'),
(26, 377, '', '32132132', '21321321', 'sadassadasd', '', '', '', 'demo', '', '', '', '', '', '', '2021-05-06 09:20:26', '2021-05-06 13:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `commenter_id` bigint(20) UNSIGNED NOT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `blog_id`, `commenter_id`, `comments`, `created_at`, `updated_at`) VALUES
(4, 8, 282, 'xn', '2021-04-15 10:53:11', '2021-04-15 10:53:11'),
(5, 9, 282, 'okk', '2021-04-15 10:59:55', '2021-04-15 10:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `blog_details`
--

CREATE TABLE `blog_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) NOT NULL,
  `blog_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_ids` bigint(20) UNSIGNED NOT NULL,
  `is_active` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_details`
--

INSERT INTO `blog_details` (`id`, `admin_id`, `blog_title`, `slug`, `blog_text`, `tag_ids`, `is_active`, `created_at`, `updated_at`) VALUES
(8, 284, 'Two ways to build dynamic charts in Excel', 'Two ways to build dynamic charts in Excel', 'Users will appreciate a chart that updates right before their eyes. In Microsoft Excel 2007 and Excel 2010, it\'s as easy as creating a table. In earlier versions, you\'ll need the formula method.', 5, 'deactivate', '2021-04-15 10:19:40', '2021-05-03 09:38:51'),
(9, 284, 'Two ways to build dynamic charts in Excel', 'Two ways to build dynamic charts in Excel', 'Users will appreciate a chart that updates right before their eyes. In Microsoft Excel 2007 and Excel 2010, it\'s as easy as creating a table. In earlier versions, you\'ll need the formula method.', 7, 'active', '2021-04-15 10:32:29', '2021-04-15 10:52:35'),
(10, 284, 'abc', 'ssdd', 'asdasdas', 5, 'active', '2021-05-03 09:38:23', '2021-05-03 09:38:23');

-- --------------------------------------------------------

--
-- Table structure for table `blog_replies`
--

CREATE TABLE `blog_replies` (
  `id` int(11) NOT NULL,
  `parent_comment` int(11) NOT NULL,
  `replier_id` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_replies`
--

INSERT INTO `blog_replies` (`id`, `parent_comment`, `replier_id`, `comment`, `created_at`, `updated_at`) VALUES
(4, 5, 282, 'NB', '2021-04-15 07:00:10', '2021-04-15 11:00:10');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`id`, `tag_name`, `created_at`, `updated_at`) VALUES
(5, 'IT', '2021-04-15 10:13:06', '2021-04-15 10:13:06'),
(7, 'Edutation', '2021-04-15 10:13:57', '2021-04-15 10:13:57'),
(8, 'Education', '2021-04-15 10:15:52', '2021-04-15 10:15:52');

-- --------------------------------------------------------

--
-- Table structure for table `blog_views`
--

CREATE TABLE `blog_views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `viewer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_views`
--

INSERT INTO `blog_views` (`id`, `blog_id`, `viewer_id`, `created_at`, `updated_at`) VALUES
(66, 8, 282, '2021-04-15 10:19:53', '2021-04-15 10:19:53'),
(67, 8, 282, '2021-04-15 10:22:17', '2021-04-15 10:22:17'),
(68, 8, 282, '2021-04-15 10:52:55', '2021-04-15 10:52:55'),
(69, 8, 282, '2021-04-15 10:53:11', '2021-04-15 10:53:11'),
(70, 9, 282, '2021-04-15 10:54:30', '2021-04-15 10:54:30'),
(71, 9, 282, '2021-04-15 10:57:48', '2021-04-15 10:57:48'),
(72, 9, 282, '2021-04-15 10:58:14', '2021-04-15 10:58:14'),
(73, 9, 282, '2021-04-15 10:59:42', '2021-04-15 10:59:42'),
(74, 9, 282, '2021-04-15 10:59:55', '2021-04-15 10:59:55'),
(75, 9, 282, '2021-04-15 11:00:10', '2021-04-15 11:00:10'),
(76, 9, 282, '2021-04-15 11:00:35', '2021-04-15 11:00:35'),
(77, 9, 282, '2021-04-15 11:01:53', '2021-04-15 11:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `bookmarks`
--

CREATE TABLE `bookmarks` (
  `id` int(11) NOT NULL,
  `gig_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookmarks`
--

INSERT INTO `bookmarks` (`id`, `gig_id`, `user_id`, `created_at`, `updated_at`) VALUES
(39, 58, 286, '2021-04-01 08:13:14', '2021-04-01 12:13:14'),
(40, 58, 283, '2021-04-01 19:48:39', '2021-04-01 23:48:39'),
(41, 60, 294, '2021-04-06 08:48:34', '2021-04-06 12:48:34'),
(44, 72, 282, '2021-04-15 05:41:39', '2021-04-15 09:41:39'),
(45, 73, 286, '2021-04-28 06:40:07', '2021-04-28 10:40:07'),
(46, 72, 286, '2021-04-28 06:41:25', '2021-04-28 10:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `cancel_requests`
--

CREATE TABLE `cancel_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `req_from` bigint(20) UNSIGNED NOT NULL,
  `reciever_id` bigint(20) UNSIGNED NOT NULL,
  `contract_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cancel_requests`
--

INSERT INTO `cancel_requests` (`id`, `req_from`, `reciever_id`, `contract_id`, `description`, `created_at`, `updated_at`) VALUES
(90, 282, 334, 353, 'sdsd', '2021-04-15 11:29:31', '2021-04-15 11:29:31'),
(91, 334, 282, 353, 'xbbn', '2021-04-15 11:37:04', '2021-04-15 11:37:04'),
(92, 282, 334, 353, 'gffff', '2021-04-15 11:43:42', '2021-04-15 11:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `client_requests`
--

CREATE TABLE `client_requests` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `request_category` int(11) NOT NULL,
  `request_details` varchar(5000) NOT NULL,
  `amount` int(11) NOT NULL,
  `start_from` varchar(1000) DEFAULT NULL,
  `end_to` varchar(1000) DEFAULT NULL,
  `location` int(11) DEFAULT NULL,
  `image_id` varchar(1000) DEFAULT NULL,
  `days` int(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `pick_location` varchar(5000) DEFAULT NULL,
  `diliver_location` varchar(5000) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_requests`
--

INSERT INTO `client_requests` (`id`, `client_id`, `request_category`, `request_details`, `amount`, `start_from`, `end_to`, `location`, `image_id`, `days`, `status`, `pick_location`, `diliver_location`, `created_at`, `updated_at`) VALUES
(26, 286, 5, 'abcdefghijklmnopqrstuvwxyz', 10, '10/10/10', '10/10/10', NULL, NULL, 10, 'active', NULL, NULL, '2021-04-03 08:39:52', '2021-04-08 08:46:45'),
(27, 283, 5, 'sasadsa', 21, NULL, NULL, 398, '457,458', 1, 'active', NULL, NULL, '2021-04-05 08:19:29', '2021-04-05 08:20:07'),
(28, 282, 6, 'wqdasd', 21, NULL, NULL, 423, '479,480', 12, 'active', NULL, NULL, '2021-04-08 08:43:30', '2021-04-08 08:46:13'),
(29, 286, 7, 'hahahaa', 12, '12/12/12', '12/12/12', NULL, NULL, 12, 'active', NULL, NULL, '2021-04-08 08:52:43', '2021-04-08 10:12:40'),
(30, 282, 6, 'sadasdas', 23, '20/2/21', '20/2/21', 2, NULL, 30, 'pending', NULL, NULL, '2021-04-08 08:59:19', '2021-04-08 12:59:19'),
(31, 282, 5, 'sad', 21, NULL, NULL, 423, '482,483', 12, 'active', NULL, NULL, '2021-04-08 09:19:40', '2021-04-08 09:20:05'),
(32, 286, 6, 'asdasd', 10, '10/10/10', '1/21/12', NULL, NULL, 10, 'active', NULL, NULL, '2021-04-08 10:09:35', '2021-04-08 10:12:45'),
(33, 286, 6, 'asdasd', 10, '10/10/10', '1/21/12', NULL, NULL, 10, 'active', NULL, NULL, '2021-04-08 10:10:13', '2021-04-08 10:12:48'),
(34, 294, 8, 'zb nxbc bn', 40, NULL, NULL, 423, '494,495', 45, 'pending', NULL, NULL, '2021-04-10 08:27:56', '2021-04-10 12:27:56'),
(35, 282, 7, 'jjjj', 32, NULL, NULL, 423, '497,499,498', 23, 'pending', NULL, NULL, '2021-04-10 09:23:24', '2021-04-10 13:23:24'),
(36, 282, 9, '123456a', 56, NULL, NULL, 402, '507', 8, 'pending', NULL, NULL, '2021-04-14 08:03:45', '2021-04-14 12:03:45'),
(37, 282, 15, 'skldasldjsa', 20, NULL, NULL, 398, '533,534', 7, 'pending', NULL, NULL, '2021-05-10 12:04:42', '2021-05-10 16:04:42'),
(38, 282, 15, 'slkdjaldkjdlsadjlklsajdasldkjaslas', 30, NULL, NULL, 398, '535,536', 13, 'pending', NULL, NULL, '2021-05-10 12:07:00', '2021-05-10 16:07:00'),
(39, 282, 5, 'asdas', 20, NULL, NULL, 398, '562', 2, 'pending', 'Sindh, Pakistan Sindh, 475682, India Sindh, Mahidpur Tahsil, Nagda, Madhya Pradesh, India sindh, Samaro, Sindh, 69350, Pakistan', 'Sindh, Pakistan Sindh, 475682, India Sindh, Mahidpur Tahsil, Nagda, Madhya Pradesh, India sindh, Samaro, Sindh, 69350, Pakistan', '2021-05-17 07:01:57', '2021-05-17 11:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `has_company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvr_number` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_amount_of_employer` bigint(20) DEFAULT NULL,
  `from_which_department_you_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bussines_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_intro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_adres` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_addres1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_addres2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `client_id`, `has_company`, `cvr_number`, `total_amount_of_employer`, `from_which_department_you_from`, `bussines_number`, `company_intro`, `company_adres`, `home_addres1`, `home_addres2`, `personal_phone`, `created_at`, `updated_at`) VALUES
(1, 43, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-03 21:26:14', '2020-12-03 21:26:14'),
(2, 43, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-03 21:32:20', '2020-12-03 21:32:20'),
(3, 43, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-03 21:32:34', '2020-12-03 21:32:34'),
(4, 43, 'for_home', NULL, NULL, NULL, NULL, NULL, NULL, 'ZMsoftware', '1212@gmail.com', '+923402717629', '2020-12-03 21:33:49', '2020-12-03 21:33:49'),
(5, 43, 'for_company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-03 21:35:05', '2020-12-03 21:35:05'),
(6, 44, 'for_company', NULL, 11, '2222', '2222', '2222', 'nmnm', NULL, NULL, NULL, '2020-12-03 21:37:45', '2020-12-03 21:37:45'),
(7, 47, 'for_home', NULL, NULL, NULL, NULL, NULL, NULL, 'ZMsoftware', 'xxx@gmail.com', '+923402717629', '2020-12-07 17:33:32', '2020-12-07 17:33:32'),
(8, 54, 'for_home', NULL, NULL, NULL, NULL, NULL, NULL, 'nm', 'n@gmail.cim', '5545454', '2020-12-12 15:30:53', '2020-12-12 15:30:53'),
(9, 2, 'for_home', NULL, NULL, NULL, NULL, NULL, NULL, 'ZMsoftware', 'xxx@gmail.com', '+923402717629', '2020-12-29 14:20:15', '2020-12-29 14:20:15'),
(10, 68, 'for_company', NULL, 45, '45', '54', 'nsmnsmsnmn', '54snmsnmn', NULL, NULL, NULL, '2021-01-12 00:41:12', '2021-01-12 00:41:12'),
(11, 78, 'for_home', NULL, NULL, NULL, NULL, NULL, NULL, 'nm', 'xxx@gmail.com', '5545454', '2021-01-12 21:16:34', '2021-01-12 21:16:34'),
(12, 101, 'for_home', NULL, NULL, NULL, NULL, NULL, NULL, 'asadsadsad', 'asadsa@gmail.com', '09091209120912', '2021-01-16 16:29:16', '2021-01-16 16:29:16'),
(13, 102, 'for_home', NULL, NULL, NULL, NULL, NULL, NULL, 'dsfdsfsdfds', 'saddasdasdasdsad@gmail.com', '2323232323', '2021-01-27 14:18:41', '2021-01-27 14:18:41'),
(14, 102, 'for_home', NULL, NULL, NULL, NULL, NULL, NULL, 'dsfdsfsdfds', 'saddasdasdasdsad@gmail.com', '2323232323', '2021-01-27 14:19:21', '2021-01-27 14:19:21'),
(15, 104, 'for_home', NULL, NULL, NULL, NULL, NULL, NULL, 'sd', 'saddasdasdasdsad@gmail.com', '2323232323', '2021-01-28 13:14:28', '2021-01-28 13:14:28'),
(16, 104, 'for_home', NULL, NULL, NULL, NULL, NULL, NULL, 'sadsad', 'saddasdasdasdsad@gmail.com', '2323232323', '2021-01-28 13:17:35', '2021-01-28 13:17:35'),
(17, 114, 'for_company', NULL, 1, '1', '1', 'xnxmbxnb', '1bnbnbs', NULL, NULL, NULL, '2021-02-19 14:31:37', '2021-02-19 14:31:37'),
(18, 283, 'for_company', NULL, 8, 'shsdhh@gmail.com', '2323232323', 'sdsdsd', 'sdsadwaad', NULL, NULL, NULL, '2021-04-01 11:46:57', '2021-04-01 11:46:57'),
(19, 294, 'for_company', '123345', 78, '78', '7878', 'KMC#251 Touheed colony Sector#11 Block-L', 'ssmbsnb', NULL, NULL, NULL, '2021-04-06 11:06:53', '2021-04-17 09:30:51'),
(20, 302, 'for_home', NULL, NULL, NULL, NULL, NULL, NULL, 'nm', 'n@gmail.cim', '+927402717629', '2021-04-06 13:04:47', '2021-04-06 13:04:47'),
(25, 296, 'for_company', '123345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-17 09:32:24', '2021-04-17 09:33:31'),
(26, 286, 'solo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-17 11:35:27', '2021-04-17 11:35:27'),
(27, 282, 'company', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-17 12:56:13', '2021-04-28 10:24:54'),
(28, 344, 'solo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-17 13:15:14', '2021-04-17 13:15:14'),
(29, 346, 'solo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-17 13:19:32', '2021-04-17 13:19:32'),
(30, 347, 'solo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-17 13:21:33', '2021-04-17 13:21:33'),
(31, 348, 'solo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-17 13:24:09', '2021-04-17 13:24:09'),
(32, 350, 'solo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-17 13:29:18', '2021-04-17 13:29:18'),
(33, 351, 'solo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-17 13:29:26', '2021-04-17 13:29:26'),
(34, 352, 'solo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-17 13:29:57', '2021-04-17 13:29:57'),
(35, 353, 'solo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-17 13:30:08', '2021-04-17 13:30:08'),
(36, 356, 'company', '6464646464', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-21 16:31:58', '2021-04-21 16:32:53'),
(39, 375, 'solo', NULL, NULL, NULL, NULL, NULL, NULL, 'sasad', 'asdasd', '213123', '2021-05-06 12:37:09', '2021-05-06 12:37:09'),
(40, 359, 'solo', NULL, NULL, NULL, NULL, NULL, NULL, 'abc', 'abc@acs.com', '123123123', '2021-05-06 12:37:42', '2021-05-06 12:37:42'),
(41, 384, 'solo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-14 11:42:55', '2021-06-14 11:42:55'),
(42, 385, 'solo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-14 11:43:20', '2021-06-14 11:43:20');

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contract_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract_type` int(11) NOT NULL,
  `contract_amount` int(11) NOT NULL,
  `time_duration` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buyer_id` bigint(20) UNSIGNED NOT NULL,
  `sellers_id` bigint(20) UNSIGNED NOT NULL,
  `contract_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buyer_signature` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seller_signature` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_send_in` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'waiting_for_provider_approval',
  `cancel_by_admin` int(11) NOT NULL DEFAULT 0,
  `gig` int(11) DEFAULT NULL,
  `comment` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tip_amount` int(11) DEFAULT 0,
  `due_on` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `contract_name`, `contract_type`, `contract_amount`, `time_duration`, `buyer_id`, `sellers_id`, `contract_description`, `order_no`, `buyer_signature`, `seller_signature`, `contract_send_in`, `status`, `cancel_by_admin`, `gig`, `comment`, `tip_amount`, `due_on`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(161, 'new Contract', 5, 78, '7', 282, 287, 'Briefly Explain About Your Contract', '332648493', NULL, NULL, NULL, 'completed', 0, 66, 'erwe', 20, '2021-04-12 07:22:26', '2021-04-12', '2021-12-09', '2021-04-12 11:22:26', '2021-04-13 12:43:50'),
(335, 'sasad', 5, 12, '21', 283, 282, 'Briefly Explain About Your Contract', '888275266', NULL, NULL, NULL, 'active', 0, 58, NULL, 20, '2021-04-01 08:59:17', '2021-04-07', '2020-12-09', '2021-04-01 12:59:17', '2021-04-07 13:30:56'),
(336, 'sasad', 6, 21, '21', 283, 282, 'Briefly Explain About Your Contract', '330196109', NULL, NULL, NULL, 'cancelled', 0, 58, NULL, 0, '2021-04-02 06:02:26', '2020-12-09', '2020-12-09', '2021-04-02 10:02:26', '2021-04-07 13:03:35'),
(337, 'sasad', 6, 21, '21', 283, 282, 'Briefly Explain About Your Contract', '915138796', NULL, NULL, NULL, 'cancel_req', 0, NULL, NULL, 0, '2021-04-02 06:04:33', '2021-04-02', '2020-12-09', '2021-04-02 10:04:33', '2021-04-02 10:51:24'),
(338, 'Testingcontract', 5, 150, '10', 286, 286, 'I want a Website named handy', '1262930374', NULL, NULL, NULL, 'waiting_for_provider_approval', 0, NULL, NULL, 0, '2021-04-06 08:08:35', '12/12/12', '13/12/15', '2021-04-06 12:08:35', '2021-04-06 12:08:35'),
(339, 'nm', 5, 2222, '45', 302, 283, 'Briefly Explain About Your Contract', '1783066054', NULL, NULL, NULL, 'completed', 0, 60, 'xxmnxbn', 40, '2021-04-06 09:09:30', '2021-04-06', '2020-12-09', '2021-04-06 13:09:30', '2021-04-06 13:12:21'),
(340, 'Testing2.0', 5, 15, '10', 286, 287, 'Testing contract', '733127773', NULL, NULL, NULL, 'cancel_req', 0, NULL, NULL, 0, '2021-04-06 10:25:15', '2021-04-09', '2021-12-11', '2021-04-06 14:25:15', '2021-04-09 14:26:04'),
(341, 'sadsads', 5, 21, '21', 282, 283, 'Briefly Explain About Your Contract', '166002636', NULL, NULL, 'conversation', 'cancelled', 1, NULL, NULL, 0, '2021-04-07 07:25:15', '2021-04-07', NULL, '2021-04-07 11:25:15', '2021-04-08 09:12:18'),
(342, 'Street Wall Painting', 8, 21, '21', 282, 283, 'Briefly Explain About Your Contract', '246468195', NULL, NULL, NULL, 'cancelled', 0, 60, NULL, 0, '2021-04-07 09:00:27', '2021-04-09', '2020-12-09', '2021-04-07 13:00:27', '2021-04-14 12:07:38'),
(343, 'sadsads', 6, 12, '21', 282, 287, 'Briefly Explain About Your Contract', '396178102', NULL, NULL, NULL, 'waiting_fro_payment', 0, 59, NULL, 0, '2021-04-07 09:43:36', '2021-12-12', '2021-12-14', '2021-04-07 13:43:36', '2021-04-07 14:16:10'),
(344, 'sada', 6, 12, '21', 282, 283, 'Briefly Explain About Your Contract', '976723046', NULL, NULL, NULL, 'cancel_req', 1, 60, NULL, 0, '2021-04-08 04:58:21', '2021-04-08', '2020-12-09', '2021-04-08 08:58:21', '2021-04-09 12:54:08'),
(346, 'new Contract', 5, 78, '7', 282, 287, 'Briefly Explain About Your Contract', '332648493', NULL, NULL, NULL, 'completed', 0, 66, 'xbnxbn', 20, '2021-04-12 07:22:26', '2021-04-15', '2021-12-18', '2021-04-12 11:22:26', '2021-04-12 11:24:32'),
(347, 'New test', 5, 10, '10', 286, 286, 'asdasd', '872161663', NULL, NULL, NULL, 'waiting_for_provider_approval', 0, NULL, NULL, 0, '2021-04-09 13:58:24', '1/1/12', '2/12/12', '2021-04-09 17:58:24', '2021-04-09 17:58:24'),
(348, 'nm', 5, 45, '54', 282, 287, 'Briefly Explain About Your Contract', '2136359993', NULL, NULL, 'conversation', 'cancelled', 0, NULL, NULL, 0, '2021-04-12 07:18:48', '2021-04-19', '2021-12-21', '2021-04-12 11:18:48', '2021-04-12 11:21:37'),
(349, 'new Contract', 5, 78, '7', 282, 287, 'Briefly Explain About Your Contract', '332648493', NULL, NULL, NULL, 'completed', 0, 66, 'xbnxbn', 20, '2021-04-12 07:22:26', '2021-04-22', '2021-12-24', '2021-04-12 11:22:26', '2021-04-12 11:24:32'),
(350, 'new Contract45\r\n', 5, 78, '7', 282, 287, 'Briefly Explain About Your Contract', '332648493', NULL, NULL, NULL, 'completed', 0, 66, 'xbnxbn', 20, '2021-04-12 07:22:26', '2021-04-25', '2021-12-28', '2021-04-12 11:22:26', '2021-04-12 11:24:32'),
(352, 'sadsads', 5, 21, '21', 282, 283, 'Briefly Explain About Your Contractsdsa', '2022419939', NULL, NULL, 'conversation', 'waiting_for_provider_approval', 0, NULL, NULL, 0, '2021-04-15 04:16:37', NULL, NULL, '2021-04-15 08:16:37', '2021-04-15 08:16:37'),
(353, 'sadsads', 5, 21, '21', 282, 334, 'Briefly Explain About Your Contract', '390733717', NULL, NULL, NULL, 'cancel_req', 0, 72, 'qwds', 0, '2021-04-15 05:16:28', '2021-04-15', '2020-12-23', '2021-04-15 09:16:28', '2021-04-15 11:43:42'),
(354, 'New testing contract', 7, 50, '10', 286, 329, 'New testing contract', '1576819878', NULL, NULL, NULL, 'waiting_for_provider_approval', 0, NULL, NULL, 0, '2021-04-24 08:20:01', '12/12/2021', '1/2/2022', '2021-04-24 12:20:01', '2021-04-24 12:20:01'),
(359, 'sadsads', 5, 25, '21', 294, 282, 'Briefly Explain About Your Contract', '1588689735', NULL, NULL, NULL, 'waiting_for_provider_approval', 0, 58, NULL, 0, '2021-04-30 08:04:46', '2020-12-09', '2020-12-09', '2021-04-30 12:04:46', '2021-04-30 12:04:46'),
(363, 'sadsads', 5, 25, '21', 282, 334, 'Briefly Explain About Your Contract', '274583599', NULL, NULL, 'conversation', 'waiting_for_provider_approval', 0, NULL, NULL, 0, '2021-05-01 05:54:04', NULL, NULL, '2021-05-01 09:54:04', '2021-05-01 09:54:04'),
(364, 'sadsads', 5, 20, '21', 282, 334, 'Briefly Explain About Your Contract', '1646133040', NULL, NULL, 'conversation', 'waiting_for_provider_approval', 0, NULL, NULL, 0, '2021-05-01 05:54:38', NULL, NULL, '2021-05-01 09:54:38', '2021-05-01 09:54:38'),
(365, 'sada', 6, 15, '2', 282, 283, 'Briefly Explain About Your Contract', '2100274981', NULL, NULL, NULL, 'waiting_for_provider_approval', 0, 60, NULL, 0, '2021-05-11 08:18:29', '09/05/2020', '09/03/2020', '2021-05-11 12:18:29', '2021-05-11 12:18:29'),
(366, 'sad', 7, 25, '12', 282, 283, 'Briefly Explain About Your Contractsdsa', '54298736', NULL, NULL, NULL, 'waiting_for_provider_approval', 0, 60, NULL, 0, '2021-05-11 08:20:06', '09/24/2020', '09/12/2020', '2021-05-11 12:20:06', '2021-05-11 12:20:06');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `reciever_id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `files` varchar(800) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_seen` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unread',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`id`, `sender_id`, `reciever_id`, `message`, `files`, `is_seen`, `created_at`, `updated_at`) VALUES
(234, 286, 287, 'oka', '', 'read', '2021-02-24 12:45:03', '2021-04-12 13:31:25'),
(315, 286, 287, 'HI', NULL, 'read', '2021-04-09 18:33:17', '2021-04-12 13:31:25'),
(316, 283, 302, 'HI', NULL, 'unread', '2021-04-10 13:28:29', '2021-04-10 13:28:29'),
(317, 283, 283, 'Hi', NULL, 'read', '2021-04-10 13:28:41', '2021-05-20 11:46:57'),
(318, 283, 283, 'Contract', NULL, 'read', '2021-04-10 13:29:06', '2021-05-20 11:46:57'),
(319, 283, 283, 'Huh', NULL, 'read', '2021-04-10 13:29:18', '2021-05-20 11:46:57'),
(321, 286, 287, 'hellowwwwwwww', NULL, 'read', '2021-04-12 11:17:01', '2021-04-12 13:31:25'),
(322, 282, 287, 'Proposal Accepted! Lets talk about my work. ', '', 'read', '2021-04-12 11:17:58', '2021-04-12 13:31:25'),
(323, 287, 282, 'HI', NULL, 'read', '2021-04-12 13:11:42', '2021-05-20 11:53:14'),
(326, 282, 287, 'HW@@@HA', '', 'unread', '2021-04-14 16:58:30', '2021-04-14 16:58:30'),
(327, 282, 287, 'Proposal Accepted! Lets talk about my work. ', '', 'unread', '2021-04-14 12:01:27', '2021-04-14 12:01:27'),
(328, 282, 287, 'Proposal Accepted! Lets talk about my work. ', '', 'unread', '2021-04-14 12:02:23', '2021-04-14 12:02:23'),
(329, 282, 283, 'zain RR', '', 'read', '2021-04-14 17:05:15', '2021-05-20 11:46:57'),
(330, 282, 334, 'fff', '', 'unread', '2021-04-15 14:15:49', '2021-04-15 14:15:49'),
(331, 287, 287, 'Hi', NULL, 'unread', '2021-04-23 10:51:49', '2021-04-23 10:51:49'),
(332, 287, 287, 'Okk', NULL, 'unread', '2021-04-23 10:51:58', '2021-04-23 10:51:58'),
(333, 287, 287, 'Nice', NULL, 'unread', '2021-04-23 10:52:21', '2021-04-23 10:52:21'),
(334, 287, 282, 'HI', NULL, 'read', '2021-04-23 11:08:02', '2021-05-20 11:53:14'),
(335, 287, 286, 'HI', NULL, 'read', '2021-04-23 11:09:50', '2021-04-23 12:32:37'),
(336, 287, 287, 'Oohv', NULL, 'unread', '2021-04-23 11:10:16', '2021-04-23 11:10:16'),
(337, 287, 282, 'HI', NULL, 'read', '2021-04-23 11:12:15', '2021-05-20 11:53:14'),
(338, 287, 287, 'Nice 1', NULL, 'unread', '2021-04-23 11:12:25', '2021-04-23 11:12:25'),
(339, 286, 329, 'Proposal Accepted! Lets talk about my work. ', '', 'read', '2021-04-23 11:38:06', '2021-04-24 11:54:45'),
(341, 359, 332, 'HI', NULL, 'unread', '2021-04-23 17:29:02', '2021-04-23 17:29:02'),
(342, 359, 283, 'HI', NULL, 'read', '2021-04-23 17:29:29', '2021-05-20 11:46:57'),
(343, 359, 334, 'HI', NULL, 'unread', '2021-04-24 10:33:55', '2021-04-24 10:33:55'),
(344, 359, 334, 'HI', NULL, 'unread', '2021-04-24 10:33:57', '2021-04-24 10:33:57'),
(345, 359, 334, 'HI', NULL, 'unread', '2021-04-24 10:33:57', '2021-04-24 10:33:57'),
(346, 359, 332, 'HI', NULL, 'unread', '2021-04-24 10:34:50', '2021-04-24 10:34:50'),
(347, 359, 332, 'HI', NULL, 'unread', '2021-04-24 10:35:13', '2021-04-24 10:35:13'),
(348, 359, 283, 'Kuch bhi', NULL, 'read', '2021-04-24 10:35:49', '2021-05-20 11:46:57'),
(349, 359, 325, 'HI', NULL, 'unread', '2021-04-24 10:38:59', '2021-04-24 10:38:59'),
(350, 359, 325, 'HI', NULL, 'unread', '2021-04-24 10:39:00', '2021-04-24 10:39:00'),
(351, 286, 287, 'hi', NULL, 'unread', '2021-04-28 08:26:17', '2021-04-28 08:26:17'),
(352, 286, 287, 'hello', NULL, 'unread', '2021-04-28 09:02:30', '2021-04-28 09:02:30'),
(353, 286, 334, 'HI', NULL, 'unread', '2021-04-28 10:41:58', '2021-04-28 10:41:58'),
(354, 294, 282, 'sadasd', '', 'read', '2021-04-30 16:18:30', '2021-05-20 11:53:14'),
(355, 287, 287, 'HI', NULL, 'unread', '2021-04-30 12:01:32', '2021-04-30 12:01:32'),
(356, 287, 286, 'Hi how are you', NULL, 'unread', '2021-04-30 12:01:48', '2021-04-30 12:01:48'),
(357, 331, 283, 'HI', NULL, 'unread', '2021-05-21 03:02:05', '2021-05-21 03:02:05'),
(358, 331, 283, 'HI', NULL, 'unread', '2021-05-21 03:02:06', '2021-05-21 03:02:06');

-- --------------------------------------------------------

--
-- Table structure for table `conversation_points`
--

CREATE TABLE `conversation_points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `conversation_start_from` bigint(20) UNSIGNED NOT NULL,
  `reciever_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conversation_points`
--

INSERT INTO `conversation_points` (`id`, `conversation_start_from`, `reciever_id`, `created_at`, `updated_at`) VALUES
(94, 283, 282, '2021-04-01 12:30:41', '2021-04-01 12:30:41'),
(95, 282, 286, '2021-04-01 12:34:04', '2021-04-01 12:34:04'),
(96, 287, 282, '2021-04-03 15:25:59', '2021-04-03 15:25:59'),
(97, 286, 287, NULL, NULL),
(98, 294, 283, '2021-04-06 12:59:43', '2021-04-06 12:59:43'),
(99, 302, 283, '2021-04-06 13:06:18', '2021-04-06 13:06:18'),
(100, 359, 334, '2021-04-23 17:28:35', '2021-04-23 17:28:35'),
(101, 331, 283, '2021-05-21 03:01:58', '2021-05-21 03:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feed_backs`
--

CREATE TABLE `feed_backs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gigs`
--

CREATE TABLE `gigs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `service_category` bigint(20) UNSIGNED NOT NULL,
  `region` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_time_dureation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(1200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `available_on` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `available_end` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` int(11) NOT NULL,
  `lat` float DEFAULT NULL,
  `lon` float DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `active_by_admin` int(11) DEFAULT 0,
  `gig_rating` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gigs`
--

INSERT INTO `gigs` (`id`, `user_id`, `service_category`, `region`, `total_time_dureation`, `rate`, `title`, `thumbnail`, `description`, `available_on`, `available_end`, `postal_code`, `lat`, `lon`, `status`, `active_by_admin`, `gig_rating`, `created_at`, `updated_at`) VALUES
(58, 282, 5, 'Saudi Arabia Saudi, Holy Field, Santa Ana, Taytay, Rizal, Calabarzon, 1920, Philippines Saudi, V&G Subdivision, Barangay 109-A, Tacloban, Leyte, Eastern Visayas, 6500, Philippines Saudi, Abulgasim Hashim Street, Nasir Extension, Khartoum, Khartoum State, 00249, Sudan Saudi, Jaser St., Tall as Sultan, Tall as-Sultan, Rafah, Rafah Governorate, Gaza Strip, 00172, Palestinian Territory Embassy of Saudi Arabia, Görogly (2009) köçesi, Kosmos, Bagtyýarlyk etraby, Ashgabat, Büzmeýin etraby, 744020, Turkmenistan Faiz ullah deera, 10, Khamis Mushayt, \'Asir Region, 62462, Saudi Arabia saudi, Jalan Lingkungan, DUSUN MUJUR, Desa Lanci Jaya, West Nusa Tenggara, Indonesia', '26', '50', 'I will be your frontend web developer, html css javascript jquery', '1617264166be-your-frontend-web-developer-html-css-javascript-jquery.jpg', '<div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, \"Helvetica Neue\", Helvetica, Arial, sans-serif;\"><b style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><span style=\"background: rgb(255, 236, 209);\">★Please send me a message before placing any orders.★</span><br><br></b></div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, \"Helvetica Neue\", Helvetica, Arial, sans-serif;\">                 Hi, I am Ehtisham I have been working as a front-end web developer, having strong command on PSD to HTML, HTML5, CSS3, Bootstrap, Javascript, Ajax and JQUERY. I do clean and error-free code with a proper commendation for each step\'s clarification</div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, \"Helvetica Neue\", Helvetica, Arial, sans-serif;\"><br></div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(98, 100, 106); font-family: Macan, \"Helvetica Neue\", Helvetica, Arial, sans-serif;\">Feel free to share your projects it will be an honor to work with you...<br><br><b style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\">★My Expertise★<br></b><br><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"> - PSD To HTML (HTML5, CSS3, Bootstrap 3/4)</div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><br></div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"> - Responsive Layouts.</div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><br></div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"> - Material Design with Bootstrap.</div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><br></div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"> - Expert in Resolving Cross Browser Compatibility Issues.</div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><br></div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"> - W3C Standard.</div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><br></div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"> - Fast Delivery Time.</div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><br></div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"> - Source File.</div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><br></div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"> - Revision For Free.</div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><br></div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"> - Web Security.</div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><br></div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"> - Web Hosting.</div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><br></div><div style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"> - Web Domain<br><br><b style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\">- </b><b style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\">I can also fix responsive websites if you are facing any issue with it.<br></b><p style=\"margin-bottom: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: 0px 0px;\"><b style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"> - 100% Customer satisfaction.</b></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: 0px 0px;\"><b style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"> </b><b style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\">- 24/7 availability</b><b style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\">.</b></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: 0px 0px;\"><b style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><br></b></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: 0px 0px;\"><b style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\">NOTE:</b> If you have any question feel free to ask.</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: 0px 0px;\"><br></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: 0px 0px;\">Looking forward to the opportunity of working with you and establishing a</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: 0px 0px;\">long-term working relationship.</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: 0px 0px;\"></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: 0px 0px;\">thanks!</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: 0px 0px;\"><b style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\">★Please send me a message before placing any orders.★</b></p></div></div>', '2021-04-02', '2021-04-15', 78555, 25.6243, 42.3528, 'active', 1, NULL, '2021-04-01 12:01:44', '2021-04-06 11:03:39'),
(59, 287, 7, 'Aptech, Wyra Road, Nizampet, Khammam, Khammam_Urban mandal, Khammam, Telangana, 507002, India Aptech, thanon klongren 1, Hat Yai, Songkhla Province, 90112, Thailand Aptech, NH66, Porvorim, 403500, India Les Ateliers Pilotes de Technologie, Route Départementale # 402, 1re Ravine-Normande, Cayes Jacmel, Commune Cayes-Jacmel, Arrondissement de Jacmel, South-East, WI, Haiti', '1', '78', 'nmn', '1617447535be-your-frontend-web-developer-html-css-javascript-jquery.jpg', 'xxbnbn', '2021-04-25', '2021-04-30', 55558, 17.2491, 80.1474, 'active', 1, NULL, '2021-04-03 14:58:55', '2021-04-06 10:51:36'),
(61, 286, 5, 'Saudi Arabia Saudi, Holy Field, Santa Ana, Taytay,...', '20', '122', 'snbn sbsbn bnab a', '456a507739c657eac20bb5c8cc0c9238.jpg\"\n}]', 'Illuminate\\Database\\QueryException: SQLSTATE[23000]: Integrity constraint violation: 1048 Column \'service_category\' cannot be null (SQL: insert into `gigs` (`user_id`, `service_category`, `total_time_dureation`, `rate`, `title`, `region`, `description`, `available_on`, `available_end`, `postal_code`, `thumbnail`, `updated_at`, `created_at`) values (286, ?, ?, ?, ?, ?, ?, ?, ?, ?, e87dea07328b0601b29703e759389772.jpg&quot;\n}], 2021-04-08 13:13:06, 2021-04-08 13:13:06)) in file /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Database/Connection.php on line 671\n\n#0 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Database/Connection.php(631): Illuminate\\Database\\Connection-&gt;runQueryCallback(\'insert into `gi...\', Array, Object(Closure))\n#1 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Database/Connection.php(465): Illuminate\\Database\\Connection-&gt;run(\'insert into `gi...\', Array, Object(Closure))\n#2 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Database/Connection.php(417): Illuminate\\Database\\Connection-&gt;statement(\'insert into `gi...\', Array)\n#3 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Database/Query/Processors/Processor.php(32): Illuminate\\Database\\Connection-&gt;insert(\'insert into `gi...\', Array)\n#4 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Database/Query/Builder.php(2829): Illuminate\\Database\\Query\\Processors\\Processor-&gt;processInsertGetId(Object(Illuminate\\Database\\Query\\Builder), \'insert into `gi...\', Array, \'id\')\n#5 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php(1422): Illuminate\\Database\\Query\\Builder-&gt;insertGetId(Array, \'id\')\n#6 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Model.php(902): Illuminate\\Database\\Eloquent\\Builder-&gt;__call(\'insertGetId\', Array)\n#7 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Model.php(867): Illuminate\\Database\\Eloquent\\Model-&gt;insertAndSetId(Object(Illuminate\\Database\\Eloquent\\Builder), Array)\n#8 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Model.php(730): Illuminate\\Database\\Eloquent\\Model-&gt;performInsert(Object(Illuminate\\Database\\Eloquent\\Builder))\n#9 /home1/gtb2bexim/public_html/handyjob/JobPortal/app/Http/Controllers/ApiController.php(1884): Illuminate\\Database\\Eloquent\\Model-&gt;save()\n#10 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Routing/Controller.php(54): App\\Http\\Controllers\\ApiController-&gt;make_service(Object(Illuminate\\Http\\Request), \'286\')\n#11 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php(45): Illuminate\\Routing\\Controller-&gt;callAction(\'make_service\', Array)\n#12 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Routing/Route.php(239): Illuminate\\Routing\\ControllerDispatcher-&gt;dispatch(Object(Illuminate\\Routing\\Route), Object(App\\Http\\Controllers\\ApiController), \'make_service\')\n#13 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Routing/Route.php(196): Illuminate\\Routing\\Route-&gt;runController()\n#14 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Routing/Router.php(685): Illuminate\\Routing\\Route-&gt;run()\n#15 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(128): Illuminate\\Routing\\Router-&gt;Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))\n#16 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php(41): Illuminate\\Pipeline\\Pipeline-&gt;Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#17 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(167): Illuminate\\Routing\\Middleware\\SubstituteBindings-&gt;handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#18 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php(59): Illuminate\\Pipeline\\Pipeline-&gt;Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#19 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(167): Illuminate\\Routing\\Middleware\\ThrottleRequests-&gt;handle(Object(Illuminate\\Http\\Request), Object(Closure), 60, \'1\')\n#20 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(103): Illuminate\\Pipeline\\Pipeline-&gt;Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#21 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Routing/Router.php(687): Illuminate\\Pipeline\\Pipeline-&gt;then(Object(Closure))\n#22 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Routing/Router.php(662): Illuminate\\Routing\\Router-&gt;runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))\n#23 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Routing/Router.php(628): Illuminate\\Routing\\Router-&gt;runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))\n#24 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Routing/Router.php(617): Illuminate\\Routing\\Router-&gt;dispatchToRoute(Object(Illuminate\\Http\\Request))\n#25 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(165): Illuminate\\Routing\\Router-&gt;dispatch(Object(Illuminate\\Http\\Request))\n#26 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(128): Illuminate\\Foundation\\Http\\Kernel-&gt;Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))\n#27 /home1/gtb2bexim/public_html/handyjob/JobPortal/app/Http/Middleware/Localization.php(22): Illuminate\\Pipeline\\Pipeline-&gt;Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#28 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(167): App\\Http\\Middleware\\Localization-&gt;handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#29 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline-&gt;Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#30 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(167): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest-&gt;handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#31 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline-&gt;Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#32 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(167): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest-&gt;handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#33 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline-&gt;Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#34 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(167): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize-&gt;handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#35 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/CheckForMaintenanceMode.php(63): Illuminate\\Pipeline\\Pipeline-&gt;Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#36 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(167): Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode-&gt;handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#37 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/fruitcake/laravel-cors/src/HandleCors.php(57): Illuminate\\Pipeline\\Pipeline-&gt;Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#38 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(167): Fruitcake\\Cors\\HandleCors-&gt;handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#39 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/fideloper/proxy/src/TrustProxies.php(57): Illuminate\\Pipeline\\Pipeline-&gt;Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#40 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(167): Fideloper\\Proxy\\TrustProxies-&gt;handle(Object(Illuminate\\Http\\Request), Object(Closure))\n#41 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php(103): Illuminate\\Pipeline\\Pipeline-&gt;Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))\n#42 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(140): Illuminate\\Pipeline\\Pipeline-&gt;then(Object(Closure))\n#43 /home1/gtb2bexim/public_html/handyjob/JobPortal/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php(109): Illuminate\\Foundation\\Http\\Kernel-&gt;sendRequestThroughRouter(Object(Illuminate\\Http\\Request))\n#44 /home1/gtb2bexim/public_html/handyjob/index.php(55): Illuminate\\Foundation\\Http\\Kernel-&gt;handle(Object(Illuminate\\Http\\Request))\n#45 {main}\n-->\n\n<head>\n	<!-- Hide dumps asap -->\n	<style>\n		pre.sf-dump {\n			display: none !important;\n		}\n	</style>\n\n	<meta charset=\"UTF-8\">\n	<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n	<meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">\n	<meta name=\"robots\" content=\"noindex, nofollow\">\n\n	<title>🧨 SQLSTATE[23000]: Integrity constraint violation: 1048 Column \'service_category\' cannot be null (SQL:\n		insert into `gigs` (`user_id`, `service_category`, `total_time_dureation`, `rate`, `title`, `region`,\n		`description`, `available_on`, `available_end`, `postal_code`, `thumbnail`, `updated_at`, `created_at`) values\n		(286, ?, ?, ?, ?, ?, ?, ?, ?, ?, e87dea07328b0601b29703e759389772.jpg&quot;\n		}], 2021-04-08 13:13:06, 2021-04-08 13:13:06))</title>\n\n\n</head>\n\n<body class=\"scrollbar-lg\">\n\n	<script>\n		window.data = {\"report\":{\"notifier\":\"Laravel Client\",\"language\":\"PHP\",\"framework_version\":\"7.30.0\",\"language_version\":\"7.2.34\",\"exception_class\":\"Illuminate\\\\Database\\\\QueryException\",\"seen_at\":1617887586,\"message\":\"SQLSTATE[23000]: Integrity constraint violation: 1048 Column \\u0027service_category\\u0027 cannot be null (SQL: insert into `gigs` (`user_id`, `service_category`, `total_time_dureation`, `rate`, `title`, `region`, `description`, `available_on`, `available_end`, `postal_code`, `thumbnail`, `updated_at`, `created_at`) values (286, ?, ?, ?, ?, ?, ?, ?, ?, ?, e87dea07328b0601b29703e759389772.jpg\\u0022\\n}], 2021-04-08 13:13:06, 2021-04-08 13:13:06))\",\"glows\":[],\"solutions\":[],\"stacktrace\":[{\"line_number\":671,\"method\":\"runQueryCallback\",\"class\":\"Illuminate\\\\Database\\\\Connection\",\"code_snippet\":{\"656\":\"     * @throws \\\\Illuminate\\\\Database\\\\QueryException\",\"657\":\"     *\\/\",\"658\":\"    protected function runQueryCallback($query, $bindings, Closure $callback)\",\"659\":\"    {\",\"660\":\"        \\/\\/ To execute the statement, we\\u0027ll simply call the callback, which will actually\",\"661\":\"        \\/\\/ run the SQL against the PDO connection. Then we can calculate the time it\",\"662\":\"        \\/\\/ took to execute and log the query SQL, bindings and time in our memory.\",\"663\":\"        try {\",\"664\":\"            $result = $callback($query, $bindings);\",\"665\":\"        }\",\"666\":\"\",\"667\":\"        \\/\\/ If an exception occurs when attempting to run a query, we\\u0027ll format the error\",\"668\":\"        \\/\\/ message to include the bindings with SQL, which will make this exception a\",\"669\":\"        \\/\\/ lot more helpful to the developer instead of just the database\\u0027s errors.\",\"670\":\"        catch (Exception $e) {\",\"671\":\"            throw new QueryException(\",\"672\":\"                $query, $this-\\u003EprepareBindings($bindings), $e\",\"673\":\"            );\",\"674\":\"        }\",\"675\":\"\",\"676\":\"        return $result;\",\"677\":\"    }\",\"678\":\"\",\"679\":\"    \\/**\",\"680\":\"     * Log a query in the connection\\u0027s query log.\",\"681\":\"     *\",\"682\":\"     * @param  string  $query\",\"683\":\"     * @param  array  $bindings\",\"684\":\"     * @param  float|null  $time\",\"685\":\"     * @return void\",\"686\":\"     *\\/\"},\"file\":\"\\/home1\\/gtb2bexim\\/public_html\\/handyjob\\/JobPortal\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Database\\/Connection.php\",\"is_application_frame\":false},{\"line_number\":631,\"method\":\"run\",\"class\":\"Illuminate\\\\Database\\\\Connection\",\"code_snippet\":{\"616\":\"     * @param  \\\\Closure  $callback\",\"617\":\"     * @return mixed\",\"618\":\"     *\",\"619\":\"     * @throws \\\\Illuminate\\\\Database\\\\QueryException\",\"620\":\"     *\\/\",\"621\":\"    protected function run($query, $bindings, Closure $callback)\",\"622\":\"    {\",\"623\":\"        $this-\\u003EreconnectIfMissingConnection();\",\"624\":\"\",\"625\":\"        $start = microtime(true);\",\"626\":\"\",\"627\":\"        \\/\\/ Here we will run this query. If an exception occurs we\\u0027ll determine if it was\",\"628\":\"        \\/\\/ caused by a connection that has been lost. If that is the cause, we\\u0027ll try\",\"629\":\"        \\/\\/ to re-establish connection and re-run the query with a fresh connection.\",\"630\":\"        try {\",\"631\":\"            $result = $this-\\u003ErunQueryCallback($query, $bindings, $callback);\",\"632\":\"        } catch (QueryException $e) {\",\"633\":\"            $result = $this-\\u003EhandleQueryException(\",\"634\":\"                $e, $query, $bindings, $callback\",\"635\":\"            );\",\"636\":\"        }\",\"637\":\"\",\"638\":\"        \\/\\/ Once we have run the query we will calculate the time that it took to run and\",\"639\":\"        \\/\\/ then log the query, bindings, and execution time so we will report them on\",\"640\":\"        \\/\\/ the event that the developer needs them. We\\u0027ll log time in milliseconds.\",\"641\":\"        $this-\\u003ElogQuery(\",\"642\":\"            $query, $bindings, $this-\\u003EgetElapsedTime($start)\",\"643\":\"        );\",\"644\":\"\",\"645\":\"        return $result;\",\"646\":\"    }\"},\"file\":\"\\/home1\\/gtb2bexim\\/public_html\\/handyjob\\/JobPortal\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Database\\/Connection.php\",\"is_application_frame\":false},{\"line_number\":465,\"method\":\"statement\",\"class\":\"Illuminate\\\\Database\\\\Connection\",\"code_snippet\":{\"450\":\"     *\\/\",\"451\":\"    public function statement($query, $bindings = [])\",\"452\":\"    {\",\"453\":\"        return $this-\\u003Erun($query, $bindings, function ($query, $bindings) {\",\"454\":\"            if ($this-\\u003Epretending()) {\",\"455\":\"                return true;\",\"456\":\"            }\",\"457\":\"\",\"458\":\"            $statement = $this-\\u003EgetPdo()-\\u003Eprepare($query);\",\"459\":\"\",\"460\":\"            $this-\\u003EbindValues($statement, $this-\\u003EprepareBindings($bindings));\",\"461\":\"\",\"462\":\"            $this-\\u003ErecordsHaveBeenModified();\",\"463\":\"\",\"464\":\"            return $statement-\\u003Eexecute();\",\"465\":\"        });\",\"466\":\"    }\",\"467\":\"\",\"468\":\"    \\/**\",\"469\":\"     * Run an SQL statement and get the number of rows affected.\",\"470\":\"     *\",\"471\":\"     * @param  string  $query\",\"472\":\"     * @param  array  $bindings\",\"473\":\"     * @return int\",\"474\":\"     *\\/\",\"475\":\"    public function affectingStatement($query, $bindings = [])\",\"476\":\"    {\",\"477\":\"        return $this-\\u003Erun($query, $bindings, function ($query, $bindings) {\",\"478\":\"            if ($this-\\u003Epretending()) {\",\"479\":\"                return 0;\",\"480\":\"            }\"},\"file\":\"\\/home1\\/gtb2bexim\\/public_html\\/handyjob\\/JobPortal\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Database\\/Connection.php\",\"is_application_frame\":false},{\"line_number\":417,\"method\":\"insert\",\"class\":\"Illuminate\\\\Database\\\\Connection\",\"code_snippet\":{\"402\":\"     *\\/\",\"403\":\"    protected function getPdoForSelect($useReadPdo = true)\",\"404\":\"    {\",\"405\":\"        return $useReadPdo ? $this-\\u003EgetReadPdo() : $this-\\u003EgetPdo();\",\"406\":\"    }\",\"407\":\"\",\"408\":\"    \\/**\",\"409\":\"     * Run an insert statement against the database.\",\"410\":\"     *\",\"411\":\"     * @param  string  $query\",\"412\":\"     * @param  array  $bindings\",\"413\":\"     * @return bool\",\"414\":\"     *\\/\",\"415\":\"    public function insert($query, $bindings = [])\",\"416\":\"    {\",\"417\":\"        return $this-\\u003Estatement($query, $bindings);\",\"418\":\"    }\",\"419\":\"\",\"420\":\"    \\/**\",\"421\":\"     * Run an update statement against the database.\",\"422\":\"     *\",\"423\":\"     * @param  string  $query\",\"424\":\"     * @param  array  $bindings\",\"425\":\"     * @return int\",\"426\":\"     *\\/\",\"427\":\"    public function update($query, $bindings = [])\",\"428\":\"    {\",\"429\":\"        return $this-\\u003EaffectingStatement($query, $bindings);\",\"430\":\"    }\",\"431\":\"\",\"432\":\"    \\/**\"},\"file\":\"\\/home1\\/gtb2bexim\\/public_html\\/handyjob\\/JobPortal\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Database\\/Connection.php\",\"is_application_frame\":false},{\"line_number\":32,\"method\":\"processInsertGetId\",\"class\":\"Illuminate\\\\Database\\\\Query\\\\Processors\\\\Processor\",\"code_snippet\":{\"17\":\"    {\",\"18\":\"        return $results;\",\"19\":\"    }\",\"20\":\"\",\"21\":\"    \\/**\",\"22\":\"     * Process an  \\u0022insert get ID\\u0022 query.\",\"23\":\"     *\",\"24\":\"     * @param  \\\\Illuminate\\\\Database\\\\Query\\\\Builder  $query\",\"25\":\"     * @param  string  $sql\",\"26\":\"     * @param  array  $values\",\"27\":\"     * @param  string|null  $sequence\",\"28\":\"     * @return int\",\"29\":\"     *\\/\",\"30\":\"    public function processInsertGetId(Builder $query, $sql, $values, $sequence = null)\",\"31\":\"    {\",\"32\":\"        $query-\\u003EgetConnection()-\\u003Einsert($sql, $values);\",\"33\":\"\",\"34\":\"        $id = $query-\\u003EgetConnection()-\\u003EgetPdo()-\\u003ElastInsertId($sequence);\",\"35\":\"\",\"36\":\"        return is_numeric($id) ? (int) $id : $id;\",\"37\":\"    }\",\"38\":\"\",\"39\":\"    \\/**\",\"40\":\"     * Process the results of a column listing query.\",\"41\":\"     *\",\"42\":\"     * @param  array  $results\",\"43\":\"     * @return array\",\"44\":\"     *\\/\",\"45\":\"    public function processColumnListing($results)\",\"46\":\"    {\",\"47\":\"        return $results;\"},\"file\":\"\\/home1\\/gtb2bexim\\/public_html\\/handyjob\\/JobPortal\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Database\\/Query\\/Processors\\/Processor.php\",\"is_application_frame\":false},{\"line_number\":2829,\"method\":\"insertGetId\",\"class\":\"Illuminate\\\\Database\\\\Query\\\\Builder\",\"code_snippet\":{\"2814\":\"    }\",\"2815\":\"\",\"2816\":\"    \\/**\",\"2817\":\"     * Insert a new record and get the value of the primary key.\",\"2818\":\"     *\",\"2819\":\"     * @param  array  $values\",\"2820\":\"     * @param  string|null  $sequence\",\"2821\":\"     * @return int\",\"2822\":\"     *\\/\",\"2823\":\"    public function insertGetId(array $values, $sequence = null)\",\"2824\":\"    {\",\"2825\":\"        $sql = $this-\\u003Egrammar-\\u003EcompileInsertGetId($this, $values, $sequence);\",\"2826\":\"\",\"2827\":\"        $values = $this-\\u003EcleanBindings($values);\",\"2828\":\"\",\"2829\":\"        return $this-\\u003Eprocessor-\\u003EprocessInsertGetId($this, $sql, $values, $sequence);\",\"2830\":\"    }\",\"2831\":\"\",\"2832\":\"    \\/**\",\"2833\":\"     * Insert new records into the table using a subquery.\",\"2834\":\"     *\",\"2835\":\"     * @param  array  $columns\",\"2836\":\"     * @param  \\\\Closure|\\\\Illuminate\\\\Database\\\\Query\\\\Builder|string  $query\",\"2837\":\"     * @return int\",\"2838\":\"     *\\/\",\"2839\":\"    public function insertUsing(array $columns, $query)\",\"2840\":\"    {\",\"2841\":\"        [$sql, $bindings] = $this-\\u003EcreateSub($query);\",\"2842\":\"\",\"2843\":\"        return $this-\\u003Econnection-\\u003EaffectingStatement(\",\"2844\":\"            $this-\\u003Egrammar-\\u003EcompileInsertUsing($this, $columns, $sql),\"},\"file\":\"\\/home1\\/gtb2bexim\\/public_html\\/handyjob\\/JobPortal\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Database\\/Query\\/Builder.php\",\"is_application_frame\":false},{\"line_number\":1422,\"method\":\"__call\",\"class\":\"Illuminate\\\\Database\\\\Eloquent\\\\Builder\",\"code_snippet\":{\"1407\":\"        if (static::hasGlobalMacro($method)) {\",\"1408\":\"            $callable = static::$macros[$method];\",\"1409\":\"\",\"1410\":\"            if ($callable instanceof Closure) {\",\"1411\":\"                $callable = $callable-\\u003EbindTo($this, static::class);\",\"1412\":\"            }\",\"1413\":\"\",\"1414\":\"            return $callable(...$parameters);\",\"1415\":\"        }\",\"1416\":\"\",\"1417\":\"        if ($this-\\u003EhasNamedScope($method)) {\",\"1418\":\"            return $this-\\u003EcallNamedScope($method, $parameters);\",\"1419\":\"        }\",\"1420\":\"\",\"1421\":\"        if (in_array($method, $this-\\u003Epassthru)) {\",\"1422\":\"            return $this-\\u003EtoBase()-\\u003E{$method}(...$parameters);\",\"1423\":\"        }\",\"1424\":\"\",\"1425\":\"        $this-\\u003EforwardCallTo($this-\\u003Equery, $method, $parameters);\",\"1426\":\"\",\"1427\":\"        return $this;\",\"1428\":\"    }\",\"1429\":\"\",\"1430\":\"    \\/**\",\"1431\":\"     * Dynamically handle calls into the query instance.\",\"1432\":\"     *\",\"1433\":\"     * @param  string  $method\",\"1434\":\"     * @param  array  $parameters\",\"1435\":\"     * @return mixed\",\"1436\":\"     *\",\"1437\":\"     * @throws \\\\BadMethodCallException\"},\"file\":\"\\/home1\\/gtb2bexim\\/public_html\\/handyjob\\/JobPortal\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Database\\/Eloquent\\/Builder.php\",\"is_application_frame\":false},{\"line_number\":902,\"method\":\"insertAndSetId\",\"class\":\"Illuminate\\\\Database\\\\Eloquent\\\\Model\",\"code_snippet\":{\"887\":\"\",\"888\":\"        $this-\\u003EfireModelEvent(\\u0027created\\u0027, false);\",\"889\":\"\",\"890\":\"        return true;\",\"891\":\"    }\",\"892\":\"\",\"893\":\"    \\/**\",\"894\":\"     * Insert the given attributes and set the ID on the model.\",\"895\":\"     *\",\"896\":\"     * @param  \\\\Illuminate\\\\Database\\\\Eloquent\\\\Builder  $query\",\"897\":\"     * @param  array  $attributes\",\"898\":\"     * @return void\",\"899\":\"     *\\/\",\"900\":\"    protected function insertAndSetId(Builder $query, $attributes)\",\"901\":\"    {\",\"902\":\"        $id = $query-\\u003EinsertGetId($attributes, $keyName = $this-\\u003EgetKeyName());\",\"903\":\"\",\"904\":\"        $this-\\u003EsetAttribute($keyName, $id);\",\"905\":\"    }\",\"906\":\"\",\"907\":\"    \\/**\",\"908\":\"     * Destroy the models for the given IDs.\",\"909\":\"     *\",\"910\":\"     * @param  \\\\Illuminate\\\\Support\\\\Collection|array|int|string  $ids\",\"911\":\"     * @return int\",\"912\":\"     *\\/\",\"913\":\"    public static function destroy($ids)\",\"914\":\"    {\",\"915\":\"        \\/\\/ We\\u0027ll initialize a count here so we will return the total number of deletes\",\"916\":\"        \\/\\/ for the operation. The developers can then check this number as a boolean\",\"917\":\"        \\/\\/ type value or get this total count of records deleted for logging, etc.\"},\"file\":\"\\/home1\\/gtb2bexim\\/public_html\\/handyjob\\/JobPortal\\/vendor\\/laravel\\/framework\\/src\\/Illuminate\\/Database\\/Eloquent\\/Model.php\",\"is_application_frame\":false},{\"line_number\":867,\"method\":\"performInsert\",\"class\":\"Illuminate\\\\Databa', '2021-04-02', '2021-04-15', 78888, NULL, NULL, 'active', 0, NULL, '2021-04-08 17:16:14', '2021-04-08 17:16:14'),
(62, 287, 6, '416', '14', '23', 'asd', '9c026cd77134829ddb9cb377ca4eec6c.jpg', 'asd', '23/23/23', '23/23/23', 234234, NULL, NULL, 'active', 0, NULL, '2021-04-08 17:16:25', '2021-04-08 17:16:25'),
(63, 287, 8, '402', '4', '23', 'ZX', 'aefbe0d9e522c0da9b5ede7a755b44a6.', 'asdasd', '23/23/23', '23/23/23', 232323, NULL, NULL, 'active', 0, NULL, '2021-04-08 17:18:06', '2021-04-08 17:18:06'),
(64, 287, 5, '416', '2', '23', 'asd', 'e8e3ddea5a5c80d55d2513b5a889ce51.jpg', 'asdasd', '23/23/23', '34/34/34', 3424234, NULL, NULL, 'active', 0, NULL, '2021-04-08 17:25:32', '2021-04-08 17:25:32'),
(65, 287, 6, '423', '3', '45', 'sdf', '9f14f60bd10a1bde94616afbd611658d.jpg', 'sdfsdf', '45/45/45', '34/34/34', 345345, 47.3861, -1.03175, 'active', 0, NULL, '2021-04-08 17:26:54', '2021-04-08 18:08:55'),
(66, 287, 5, '398', '1', '878989', 'sskn sjskjk', '61a5c135b43c0b4acaaf2f58586a66d7.jpg', 'sjaksjkjas', '12/8/21', '2/8/21', 87898979, 49.2333, 6.99524, 'active', 0, 2, '2021-04-08 18:04:52', '2021-04-13 12:43:50'),
(67, 287, 8, '423', '4', '23', 'zain', 'e5a666639c9762643385494a7faa31e9.jpg', 'asdasdasd', '23/23/23', '23/23/23', 123456, 49.2333, 6.99524, 'active', 0, NULL, '2021-04-08 18:11:07', '2021-04-08 18:11:54'),
(68, 287, 6, '419', '17', '34', 'sd', '4360797878888df22e4ce84e1bfe315f.jpg', 'asd', '45/45/45', '34/34/34', 345345, 47.3861, 1.03175, 'active', 0, NULL, '2021-04-08 18:14:18', '2021-04-08 18:14:38'),
(69, 325, 7, '398', '3', '20', 'Video creater', '7fd09f4c756ed5606eebc582c3dc6b87.jpg', 'Lorem IP sum jsjsusnwta hstsg', '04/10/2021', '04/18/2021', 75800, 23.79, 90.4116, 'active', 0, NULL, '2021-04-10 12:18:54', '2021-04-10 12:20:34'),
(70, 283, 5, '402', '1', '30', 'New service', '18038bc8a08f7b32719345f4c97cdb02.jpg', 'Gggg', '5/04/21', '05/04/21', 754820, NULL, NULL, 'active', 0, NULL, '2021-04-10 13:31:23', '2021-04-10 13:31:23'),
(71, 332, 8, 'APTE, 19, Fröschengasse, St. Johanner Markt, Sankt Johann, Bezirk Mitte, Saarbrücken, Regionalverband Saarbrücken, Saarland, 66111, Germany Association Partage Travail Entraide, Allée de Knighton, Le Clos de l\'Arche, La Vilhouette, Varades, Loireauxence, Châteaubriant-Ancenis, Loire-Atlantique, Pays de la Loire, Metropolitan France, 44370, France', '5', '09', 'dfgdfgdfg', '1618386222unnamed.jpg', 'dzsfgdfgdfg', '2021-04-22', '2021-03-29', 24, 49.2333, 6.99524, 'active', 0, NULL, '2021-04-14 11:43:42', '2021-04-14 11:43:42'),
(72, 334, 7, 'Sindh, Pakistan Sind, Kalayat, Kaithal, Haryana, India Sind, Sonamarg, Kangan, Ganderbal District, Jammu and Kashmir, India Sind, Rabtar Gundi Roshan, Srinagar (South), Srinagar District, Jammu and Kashmir, 191131, India Sind, Mukaralri, Kangan, Ganderbal District, Jammu and Kashmir, 191201, India Sind, Kullan, Kangan, Ganderbal District, Jammu and Kashmir, India Sind, Sumbal, Kangan, Ganderbal District, Jammu and Kashmir, 191202, India Sind, Kangan, Ganderbal District, Jammu and Kashmir, 191203, India Sind, Gagangir, Kangan, Ganderbal District, Jammu and Kashmir, India Sind, Yamkeshwar, Pauri Garhwal, India Sind, Anaitha, Chakarnagar, Etawah, Uttar Pradesh, India Mala Sino, الجزرونية, Maabatli Subdistrict, Afrin District, Aleppo Governorate, Syria Radin, Rua Raimundo Corrêa, São Gonçalo do Sapucaí, Microrregião de Santa Rita do Sapucaí, Região Geográfica Intermediária de Varginha, Minas Gerais, Southeast Region, 37490-000, Brazil', '7', '21', 'sa', '161846338301-prometeo-business-financial-consulting.__large_preview.jpg', 'sasa', '2021-04-30', '2021-04-14', 75840, 25.5, 69, 'active', 1, NULL, '2021-04-15 09:09:43', '2021-04-15 09:09:43'),
(73, 329, 10, 'park deira duabi, Al Rigga, Deira, Dubai, United Arab Emirates Citymax Hotel Bur Duabi, 19a Street, Al Mankhool, Deira, Dubai, 111695, United Arab Emirates MINILAND (LEGOLAND Dubai), Dubai Parks Street, Dubai Techno Park, Dubai, 000000, United Arab Emirates', '3', '200', '1000+ YOUTUBE LIKES NON DROP AND REAL ORGANIC WITH LIFE TIME GUARANTEED', '1619251756want41513-1kZGov1470778184-600x405.v1-600x405.jpg', '<p style=\"box-sizing: inherit; margin-bottom: 1em; line-height: 1.4285em; font-size: 14px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.25); color: rgb(51, 52, 53); font-family: &quot;Open Sans&quot;;\"><b>1000+ YOUTUBE LIKES&nbsp; NON DROP AND REAL ORGANIC</b></p><p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; line-height: 1.4285em; font-size: 14px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.25); color: rgb(51, 52, 53); font-family: &quot;Open Sans&quot;;\"><b>WITH LIFE TIME GUARANTEED&nbsp;</b></p><p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; line-height: 1.4285em; font-size: 14px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.25); color: rgb(51, 52, 53); font-family: &quot;Open Sans&quot;;\"></p><p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; line-height: 1.4285em; font-size: 14px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.25); color: rgb(51, 52, 53); font-family: &quot;Open Sans&quot;;\">Hi everyone,</p><p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; line-height: 1.4285em; font-size: 14px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.25); color: rgb(51, 52, 53); font-family: &quot;Open Sans&quot;;\"><i style=\"box-sizing: inherit; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.25);\">We are offering high quality YOUTUBE&nbsp;</i>&nbsp;LIKES<i style=\"box-sizing: inherit; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.25);\">&nbsp;-</i><i style=\"box-sizing: inherit; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.25);\">&nbsp; promotion in very cheapest price. Our promotion is 100% organic and genuine. We are not using kind of bots / any software. So why you late order now and promote your video.</i></p><p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; line-height: 1.4285em; font-size: 14px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.25); color: rgb(51, 52, 53); font-family: &quot;Open Sans&quot;;\"><i style=\"box-sizing: inherit; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.25);\">Features:</i></p><p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; line-height: 1.4285em; font-size: 14px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.25); color: rgb(51, 52, 53); font-family: &quot;Open Sans&quot;;\"><i style=\"box-sizing: inherit; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.25);\"><br style=\"box-sizing: inherit; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.25);\"></i></p><p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; line-height: 1.4285em; font-size: 14px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.25); color: rgb(51, 52, 53); font-family: &quot;Open Sans&quot;;\">✔&nbsp; Lifetime warranty Youtube&nbsp; LIKES&nbsp;</p><p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; line-height: 1.4285em; font-size: 14px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.25); color: rgb(51, 52, 53); font-family: &quot;Open Sans&quot;;\">✔ 100% Satisfaction guaranteed.<br style=\"box-sizing: inherit; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.25);\">✔ Best Price Guarantee<br style=\"box-sizing: inherit; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.25);\">✔ Different Ips and Profiles<br style=\"box-sizing: inherit; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.25);\">✔ 100% Human Social User✔ High Retention Rate<br style=\"box-sizing: inherit; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.25);\">✔ Instant Work Start<br style=\"box-sizing: inherit; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.25);\">✔ Express Delivery.</p><p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; line-height: 1.4285em; font-size: 14px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0.25); color: rgb(51, 52, 53); font-family: &quot;Open Sans&quot;;\">✔ 24/7 Customer Support</p>', '2021-04-11', '2021-04-22', 55558, 25.2637, 55.311, 'active', 0, NULL, '2021-04-24 12:09:16', '2021-04-24 12:09:16'),
(78, 283, 6, '21', '5', '80', 'dsaasdasdas', 'ca8eab42efc0b280691be0360d4ad486.', 'sadjksdaskjdhaskjdkhsa', '21/2/2021', '22/2/2021', 22344, NULL, NULL, 'active', 0, NULL, '2021-04-30 10:37:55', '2021-04-30 10:37:55'),
(79, 283, 6, 'Sindh, Pakistan Sindh, 475682, India Sindh, Mahidpur Tahsil, Nagda, Madhya Pradesh, India sindh, Samaro, Sindh, 69350, Pakistan', '2', '22', 'jhhkhj', '16198464021_IoXdis5_jg-8kQFqc0J__Q.png', 'sadsadfasdf', '2021-05-07', '2021-05-21', 75819, 25.5, 69, 'active', 0, NULL, '2021-05-01 09:20:02', '2021-05-01 09:20:02'),
(80, 283, 6, 'Sindh, Pakistan Sindh, 475682, India Sindh, Mahidpur Tahsil, Nagda, Madhya Pradesh, India sindh, Samaro, Sindh, 69350, Pakistan', '1', '16', 'sadsadsa', '16198464923.jpg', 'sadsadsaasd', '2021-05-15', '2021-05-26', 75822, 25.5, 69, 'active', 0, NULL, '2021-05-01 09:21:32', '2021-05-01 09:21:32'),
(81, 283, 7, 'Sindh, Pakistan Sindh, 475682, India Sindh, Mahidpur Tahsil, Nagda, Madhya Pradesh, India sindh, Samaro, Sindh, 69350, Pakistan', '1', '6', 'jhhkhj', '16198469810_U6SDa-3SH6O_vyGW_.png', 'sdasdasdasd', '2021-05-20', '2021-05-18', 75810, 25.5, 69, 'active', 0, NULL, '2021-05-01 09:29:41', '2021-05-01 09:29:41'),
(82, 377, 6, 'Sindh, Pakistan Sindh, 475682, India Sindh, Mahidpur Tahsil, Nagda, Madhya Pradesh, India sindh, Samaro, Sindh, 69350, Pakistan', '4', '25', 'sasad', '16202929053.jpg', 'ekjfwekjfrwe', '2021-05-19', '2021-05-25', 338847, 25.5, 69, 'active', 0, NULL, '2021-05-06 13:21:45', '2021-05-06 13:21:45'),
(83, 283, 6, 'Sindh, Pakistan Sind, Kalayat, Kaithal, Haryana, India Sind, Sonamarg, Kangan, Ganderbal District, Jammu and Kashmir, India Sind, Rabtar Gundi Roshan, Srinagar (South), Srinagar District, Jammu and Kashmir, 191131, India Sind, Gagangir, Kangan, Ganderbal District, Jammu and Kashmir, India Sind, Kullan, Kangan, Ganderbal District, Jammu and Kashmir, India Sind, Sumbal, Kangan, Ganderbal District, Jammu and Kashmir, 191202, India Sind, Mukaralri, Kangan, Ganderbal District, Jammu and Kashmir, 191201, India Sind, Kangan, Ganderbal District, Jammu and Kashmir, 191203, India Sind, Yamkeshwar, Pauri Garhwal, India Sind, Anaitha, Chakarnagar, Etawah, Uttar Pradesh, India Mala Sino, الجزرونية, Maabatli Subdistrict, Afrin District, Aleppo Governorate, Syria Radin, Rua Raimundo Corrêa, São Gonçalo do Sapucaí, Microrregião de Santa Rita do Sapucaí, Região Geográfica Intermediária de Varginha, Minas Gerais, Southeast Region, 37490-000, Brazil', '1', '25', 'sadaad', '16207226530_U6SDa-3SH6O_vyGW_.png', 'asdsad', '05/13/2021', '05/20/2021', 7776744, 25.5, 69, 'active', 0, NULL, '2021-05-11 12:44:13', '2021-05-11 12:44:13'),
(86, 283, 5, 'Sindh, Pakistan Sindh, 475682, India Sindh, Mahidpur Tahsil, Nagda, Madhya Pradesh, India sindh, Samaro, Sindh, 69350, Pakistan', '2', '25', 'ssa', '162149766501-prometeo-business-financial-consulting.__large_preview.jpg', 'sadsad', '05/18/2021', '05/13/2021', 77383, 25.5, 69, 'active', 0, NULL, '2021-05-20 12:01:05', '2021-05-20 12:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `gig_clicks`
--

CREATE TABLE `gig_clicks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `click_by` bigint(20) UNSIGNED NOT NULL,
  `gig_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gig_clicks`
--

INSERT INTO `gig_clicks` (`id`, `click_by`, `gig_id`, `created_at`, `updated_at`) VALUES
(461, 282, 58, '2021-04-01 12:01:51', '2021-04-01 12:01:51'),
(462, 282, 58, '2021-04-01 12:11:50', '2021-04-01 12:11:50'),
(463, 282, 58, '2021-04-01 12:13:02', '2021-04-01 12:13:02'),
(464, 283, 58, '2021-04-01 12:13:28', '2021-04-01 12:13:28'),
(465, 283, 58, '2021-04-01 12:16:03', '2021-04-01 12:16:03'),
(466, 283, 58, '2021-04-01 12:19:51', '2021-04-01 12:19:51'),
(467, 283, 58, '2021-04-01 12:20:12', '2021-04-01 12:20:12'),
(468, 282, 58, '2021-04-01 12:20:33', '2021-04-01 12:20:33'),
(469, 283, 58, '2021-04-01 12:23:04', '2021-04-01 12:23:04'),
(470, 282, 58, '2021-04-01 12:27:30', '2021-04-01 12:27:30'),
(471, 283, 58, '2021-04-01 12:30:23', '2021-04-01 12:30:23'),
(472, 283, 58, '2021-04-01 12:32:31', '2021-04-01 12:32:31'),
(473, 282, 58, '2021-04-01 12:38:18', '2021-04-01 12:38:18'),
(474, 287, 59, '2021-04-03 14:59:02', '2021-04-03 14:59:02'),
(475, 282, 59, '2021-04-03 15:01:31', '2021-04-03 15:01:31'),
(476, 283, 58, '2021-04-05 11:01:22', '2021-04-05 11:01:22'),
(481, 282, 58, '2021-04-07 10:32:05', '2021-04-07 10:32:05'),
(482, 282, 58, '2021-04-07 10:32:47', '2021-04-07 10:32:47'),
(484, 282, 58, '2021-04-07 10:35:35', '2021-04-07 10:35:35'),
(485, 282, 58, '2021-04-07 10:36:12', '2021-04-07 10:36:12'),
(486, 282, 58, '2021-04-07 10:38:07', '2021-04-07 10:38:07'),
(487, 282, 58, '2021-04-07 10:38:59', '2021-04-07 10:38:59'),
(489, 282, 58, '2021-04-12 11:13:47', '2021-04-12 11:13:47'),
(490, 332, 71, '2021-04-14 11:43:58', '2021-04-14 11:43:58'),
(491, 282, 58, '2021-04-14 12:10:20', '2021-04-14 12:10:20'),
(492, 282, 58, '2021-04-14 12:11:04', '2021-04-14 12:11:04'),
(493, 282, 72, '2021-04-15 09:11:19', '2021-04-15 09:11:19'),
(494, 282, 72, '2021-04-15 09:11:47', '2021-04-15 09:11:47'),
(495, 282, 72, '2021-04-15 09:15:41', '2021-04-15 09:15:41'),
(496, 282, 58, '2021-04-15 09:42:29', '2021-04-15 09:42:29'),
(497, 329, 73, '2021-04-24 12:09:47', '2021-04-24 12:09:47'),
(498, 329, 73, '2021-04-24 12:09:47', '2021-04-24 12:09:47'),
(499, 294, 73, '2021-04-24 12:15:21', '2021-04-24 12:15:21'),
(500, 294, 73, '2021-04-24 12:15:21', '2021-04-24 12:15:21'),
(501, 329, 73, '2021-04-24 12:30:54', '2021-04-24 12:30:54'),
(502, 329, 73, '2021-04-24 12:30:54', '2021-04-24 12:30:54'),
(505, 329, 73, '2021-04-24 12:32:23', '2021-04-24 12:32:23'),
(506, 329, 73, '2021-04-24 12:32:23', '2021-04-24 12:32:23'),
(507, 329, 73, '2021-04-24 12:32:53', '2021-04-24 12:32:53'),
(508, 329, 73, '2021-04-24 12:32:54', '2021-04-24 12:32:54'),
(509, 329, 73, '2021-04-24 12:33:51', '2021-04-24 12:33:51'),
(510, 329, 73, '2021-04-24 12:33:52', '2021-04-24 12:33:52'),
(511, 329, 73, '2021-04-24 12:37:54', '2021-04-24 12:37:54'),
(512, 329, 73, '2021-04-24 12:38:08', '2021-04-24 12:38:08'),
(513, 329, 73, '2021-04-24 12:38:17', '2021-04-24 12:38:17'),
(514, 329, 73, '2021-04-24 12:38:18', '2021-04-24 12:38:18'),
(515, 329, 73, '2021-04-24 12:40:03', '2021-04-24 12:40:03'),
(516, 329, 73, '2021-04-24 12:40:03', '2021-04-24 12:40:03'),
(517, 329, 73, '2021-04-24 12:42:14', '2021-04-24 12:42:14'),
(518, 329, 73, '2021-04-24 12:42:14', '2021-04-24 12:42:14'),
(519, 329, 73, '2021-04-24 12:42:51', '2021-04-24 12:42:51'),
(520, 329, 73, '2021-04-24 12:42:52', '2021-04-24 12:42:52'),
(526, 282, 72, '2021-05-01 12:45:28', '2021-05-01 12:45:28'),
(527, 282, 72, '2021-05-01 12:45:28', '2021-05-01 12:45:28'),
(528, 282, 72, '2021-05-01 12:46:29', '2021-05-01 12:46:29'),
(529, 282, 72, '2021-05-03 11:11:50', '2021-05-03 11:11:50'),
(530, 377, 82, '2021-05-06 13:21:58', '2021-05-06 13:21:58'),
(531, 283, 86, '2021-05-20 12:02:50', '2021-05-20 12:02:50');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entity_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity_id` bigint(20) UNSIGNED DEFAULT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature_type` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `entity_type`, `entity_id`, `file_name`, `file_path`, `signature_type`, `created_at`, `updated_at`) VALUES
(448, 'App\\Contract', 334, '0687530b0a58114fab1a5d38c2501402.png', 'doc_signs', 'Buyer Signature', '2021-04-01 12:35:07', '2021-04-01 12:35:07'),
(449, 'App\\Contract', 334, 'd9adda5d4f155e3042a60ce64a01d39a.png', 'doc_signs', 'Seller Signature', '2021-04-01 12:35:46', '2021-04-01 12:35:46'),
(450, 'App\\Contract', 335, '99707345ebc4cd9ee13770ee1c810df6.png', 'doc_signs', 'Buyer Signature', '2021-04-01 12:59:17', '2021-04-01 12:59:17'),
(451, 'App\\Contract', 335, '71d0711ba601a85ed559ddaa972333d9.png', 'doc_signs', 'Seller Signature', '2021-04-01 12:59:35', '2021-04-01 12:59:35'),
(452, 'App\\Contract', 336, 'eec51f1e33866d0fe47846cb4d4847c4.png', 'doc_signs', 'Buyer Signature', '2021-04-02 10:02:26', '2021-04-02 10:02:26'),
(453, 'App\\Contract', 337, 'eb2392cdfff3b06bf79fc257ef9edee4.png', 'doc_signs', 'Buyer Signature', '2021-04-02 10:04:33', '2021-04-02 10:04:33'),
(454, 'App\\Contract', 337, 'a0863bd2edca590776bb5113127310c3.png', 'doc_signs', 'Seller Signature', '2021-04-02 10:05:22', '2021-04-02 10:05:22'),
(455, 'App\\ClientRequest', 26, '6fd289f10fcd073a5da2f47c079b957b284.jpg', 'post_request_image', NULL, '2021-04-03 12:39:52', '2021-04-03 12:39:52'),
(456, 'App\\ClientRequest', 26, '6fd289f10fcd073a5da2f47c079b957b752.jpg', 'post_request_image', NULL, '2021-04-03 12:39:52', '2021-04-03 12:39:52'),
(457, 'App\\ClientRequest', 27, '161761076503201-prometeo-business-financial-consulting.__large_preview.jpg', 'post_request_image', NULL, '2021-04-05 12:19:26', '2021-04-05 12:19:29'),
(458, 'App\\ClientRequest', 27, '16176107650300_U6SDa-3SH6O_vyGW_.png', 'post_request_image', NULL, '2021-04-05 12:19:26', '2021-04-05 12:19:29'),
(459, 'App\\Contract', 338, 'e514d20c376bc4d4b6ae798e497f5d2e.png', 'doc_signs', 'Buyer Signature', '2021-04-06 12:08:35', '2021-04-06 12:08:35'),
(460, 'App\\Contract', 339, '25df40b2dcff43b5f521a72dbc6c5b3b.png', 'doc_signs', 'Buyer Signature', '2021-04-06 13:09:30', '2021-04-06 13:09:30'),
(461, 'App\\Contract', 339, '463ef493f7cfbd6ed43248a701e7e966.png', 'doc_signs', 'Seller Signature', '2021-04-06 13:09:48', '2021-04-06 13:09:48'),
(462, 'App\\Contract', 340, 'cb61b62909ab6aee0a2f8b070f66bb1d.png', 'doc_signs', 'Buyer Signature', '2021-04-06 14:25:15', '2021-04-06 14:25:15'),
(463, 'App\\Contract', 341, 'f9b5232ae7668163d511e1b7449afe35.png', 'doc_signs', 'Buyer Signature', '2021-04-07 11:25:15', '2021-04-07 11:25:15'),
(464, 'App\\Contract', 341, 'f95b570e38894905e207911aa9841cb5.png', 'doc_signs', 'Seller Signature', '2021-04-07 11:25:38', '2021-04-07 11:25:38'),
(465, 'App\\Contract', 340, 'efb08bd2042af586f1e3c0aa16aff970.png', 'doc_signs', 'Seller Signature', '2021-04-07 12:37:40', '2021-04-07 12:37:40'),
(466, 'App\\Contract', 286, '7bae8ddda56cc8ad5f2f26bbe8a0e1da.png', 'doc_signs', 'Seller Signature', '2021-04-07 12:47:05', '2021-04-07 12:47:05'),
(467, 'App\\Contract', 335, '0e8d17da2fa6764c756865678fee64da.png', 'doc_signs', 'Seller Signature', '2021-04-07 12:47:58', '2021-04-07 12:47:58'),
(468, 'App\\Contract', 335, '36f407c8ed8318f194284714f935df0c.png', 'doc_signs', 'Seller Signature', '2021-04-07 12:54:15', '2021-04-07 12:54:15'),
(469, 'App\\Contract', 342, '43e7ec5cfdc7646965d4ef9f722b3fea.png', 'doc_signs', 'Buyer Signature', '2021-04-07 13:00:27', '2021-04-07 13:00:27'),
(470, 'App\\Contract', 343, 'bd3477a79773d333cb6b8c6d8b3a12ef.png', 'doc_signs', 'Buyer Signature', '2021-04-07 13:43:36', '2021-04-07 13:43:36'),
(471, 'App\\Contract', 343, '06843b1219b313446787187077d0a9f4.png', 'doc_signs', 'Seller Signature', '2021-04-07 14:16:10', '2021-04-07 14:16:10'),
(472, 'App\\Contract', 344, '19b7054b58643429d1cb4e89749a6c6d.png', 'doc_signs', 'Buyer Signature', '2021-04-08 08:58:21', '2021-04-08 08:58:21'),
(473, 'App\\Contract', 344, 'a91882e850b6612943eb6e10443c2a03.png', 'doc_signs', 'Seller Signature', '2021-04-08 08:58:45', '2021-04-08 08:58:45'),
(474, 'App\\Contract', 345, '6de975f3a5d4764b154f8e43aac0d039.png', 'doc_signs', 'Buyer Signature', '2021-04-08 09:16:33', '2021-04-08 09:16:33'),
(475, 'App\\Contract', 345, '89451cd30a8448a108cdc3d11b5e7205.png', 'doc_signs', 'Seller Signature', '2021-04-08 09:16:59', '2021-04-08 09:16:59'),
(476, 'App\\Contract', 345, '394f50c78e9d7fb92d1edd5087a163c3.png', 'doc_signs', 'Seller Signature', '2021-04-08 09:22:46', '2021-04-08 09:22:46'),
(477, 'App\\Contract', 346, '30318e749b75eff9451590fe791a82b9.png', 'doc_signs', 'Buyer Signature', '2021-04-08 09:29:27', '2021-04-08 09:29:27'),
(478, 'App\\Contract', 346, '6d461663aad2b8d76cf57b8350f46a95.png', 'doc_signs', 'Seller Signature', '2021-04-08 09:29:48', '2021-04-08 09:29:48'),
(479, 'App\\ClientRequest', 28, '16178714056140_U6SDa-3SH6O_vyGW_.png', 'post_request_image', NULL, '2021-04-08 12:43:27', '2021-04-08 12:43:30'),
(480, 'App\\ClientRequest', 28, '161787140561801-prometeo-business-financial-consulting.__large_preview.jpg', 'post_request_image', NULL, '2021-04-08 12:43:27', '2021-04-08 12:43:30'),
(481, 'App\\ClientRequest', 29, 'd1d45d5652d5f4b50176aaf0544c19e0832.jpg', 'post_request_image', NULL, '2021-04-08 12:52:43', '2021-04-08 12:52:43'),
(482, 'App\\ClientRequest', 31, '161787357473201-prometeo-business-financial-consulting.__large_preview.jpg', 'post_request_image', NULL, '2021-04-08 13:19:36', '2021-04-08 13:19:40'),
(483, 'App\\ClientRequest', 31, '16178735747280_U6SDa-3SH6O_vyGW_.png', 'post_request_image', NULL, '2021-04-08 13:19:37', '2021-04-08 13:19:40'),
(484, 'App\\Proposal', 50, '008fc247eaf6fb099e6e7c133b0ef604716.jpg', 'proposal_images', NULL, '2021-04-08 13:44:37', '2021-04-08 13:44:37'),
(485, 'App\\Proposal', 50, '008fc247eaf6fb099e6e7c133b0ef604678.jpg', 'proposal_images', NULL, '2021-04-08 13:44:37', '2021-04-08 13:44:37'),
(486, 'App\\ClientRequest', 32, '4b4474c66f7b50cf15cf6a875c5f6e46572.jpg', 'post_request_image', NULL, '2021-04-08 14:09:35', '2021-04-08 14:09:35'),
(487, 'App\\ClientRequest', 33, 'e8a2ca91f3daddde3a0b36081d3c7154744.jpg', 'post_request_image', NULL, '2021-04-08 14:10:13', '2021-04-08 14:10:13'),
(488, 'App\\Proposal', 51, '4177ea247c025d0959450cb59fdabdbe421.jpg', 'proposal_images', NULL, '2021-04-08 14:16:52', '2021-04-08 14:16:52'),
(489, 'App\\Proposal', 51, '4177ea247c025d0959450cb59fdabdbe670.jpg', 'proposal_images', NULL, '2021-04-08 14:16:52', '2021-04-08 14:16:52'),
(490, 'App\\Proposal', 52, '4177ea247c025d0959450cb59fdabdbe447.jpg', 'proposal_images', NULL, '2021-04-08 14:16:52', '2021-04-08 14:16:52'),
(491, 'App\\Proposal', 52, '4177ea247c025d0959450cb59fdabdbe770.jpg', 'proposal_images', NULL, '2021-04-08 14:16:52', '2021-04-08 14:16:52'),
(492, 'App\\Contract', 342, 'da288f287af1280734c5b74135092fd4.png', 'doc_signs', 'Seller Signature', '2021-04-09 11:16:50', '2021-04-09 11:16:50'),
(493, 'App\\Contract', 347, '8703ef0643e14796195ee4e94cbc908f.png', 'doc_signs', 'Buyer Signature', '2021-04-09 17:58:24', '2021-04-09 17:58:24'),
(494, 'App\\ClientRequest', 34, '1618043251787WhatsApp Image 2021-04-01 at 2.43.22 PM.jpeg', 'post_request_image', NULL, '2021-04-10 12:27:35', '2021-04-10 12:27:56'),
(495, 'App\\ClientRequest', 34, '1618043251791WhatsApp Image 2021-04-01 at 2.43.20 PM.jpeg', 'post_request_image', NULL, '2021-04-10 12:27:36', '2021-04-10 12:27:56'),
(496, 'App\\Proposal', 53, '483b95b6754410a3341afef8fccd5790318.jpg', 'proposal_images', NULL, '2021-04-10 12:29:59', '2021-04-10 12:29:59'),
(497, 'App\\ClientRequest', 35, '161804659362101-prometeo-business-financial-consulting.__large_preview.jpg', 'post_request_image', NULL, '2021-04-10 13:23:14', '2021-04-10 13:23:24'),
(498, 'App\\ClientRequest', 35, '16180465936190_U6SDa-3SH6O_vyGW_.png', 'post_request_image', NULL, '2021-04-10 13:23:15', '2021-04-10 13:23:24'),
(499, 'App\\ClientRequest', 35, '16180465936221_IoXdis5_jg-8kQFqc0J__Q.png', 'post_request_image', NULL, '2021-04-10 13:23:15', '2021-04-10 13:23:24'),
(500, 'App\\Proposal', 54, '91d526d06772d24aa761deb02dcceaab825.jpg', 'proposal_images', NULL, '2021-04-10 13:35:54', '2021-04-10 13:35:54'),
(501, 'App\\Contract', 348, 'f2d82cfc9131c4e239e2a7e28a7b480e.png', 'doc_signs', 'Buyer Signature', '2021-04-12 11:18:48', '2021-04-12 11:18:48'),
(502, 'App\\Contract', 348, 'fc9577769ea044d3fdffa29bc3583213.png', 'doc_signs', 'Seller Signature', '2021-04-12 11:19:08', '2021-04-12 11:19:08'),
(503, 'App\\Contract', 349, 'c625d11f287507c41c70a0d7636de5ac.png', 'doc_signs', 'Buyer Signature', '2021-04-12 11:22:26', '2021-04-12 11:22:26'),
(504, 'App\\Contract', 349, 'b116cc9b1a5b7ac28de19648ec9a476f.png', 'doc_signs', 'Seller Signature', '2021-04-12 11:22:56', '2021-04-12 11:22:56'),
(505, 'App\\Contract', 351, '2109125a2a011681076e0f1a6cdc596c.png', 'doc_signs', 'Buyer Signature', '2021-04-14 11:28:50', '2021-04-14 11:28:50'),
(506, 'App\\Proposal', 55, '1618386616953unnamed.jpg', 'post_request_image', NULL, '2021-04-14 11:50:17', '2021-04-14 11:50:32'),
(507, 'App\\ClientRequest', 36, '1618387422582unnamed.jpg', 'post_request_image', NULL, '2021-04-14 12:03:42', '2021-04-14 12:03:45'),
(508, 'App\\ClientRequest', NULL, '1618455660651pp.jpg', 'post_request_image', NULL, '2021-04-15 07:01:02', '2021-04-15 07:01:02'),
(509, 'App\\ClientRequest', NULL, '1618455670051WhatsApp Image 2021-04-01 at 2.43.20 PM.jpeg', 'post_request_image', NULL, '2021-04-15 07:01:12', '2021-04-15 07:01:12'),
(510, 'App\\ClientRequest', NULL, '161845590830301-prometeo-business-financial-consulting.__large_preview.jpg', 'post_request_image', NULL, '2021-04-15 07:05:08', '2021-04-15 07:05:08'),
(511, 'App\\ClientRequest', NULL, '16184559083010_U6SDa-3SH6O_vyGW_.png', 'post_request_image', NULL, '2021-04-15 07:05:09', '2021-04-15 07:05:09'),
(512, 'App\\Contract', 352, '6d817853aedfaa05732fc4becfbfdfe3.png', 'doc_signs', 'Buyer Signature', '2021-04-15 08:16:37', '2021-04-15 08:16:37'),
(513, 'App\\Contract', 353, '9b92f38d30241336501781a01766c1d9.png', 'doc_signs', 'Buyer Signature', '2021-04-15 09:16:28', '2021-04-15 09:16:28'),
(514, 'App\\Contract', 353, '69d0b084ea4ca59056ddd665b5e78c87.png', 'doc_signs', 'Seller Signature', '2021-04-15 09:29:41', '2021-04-15 09:29:41'),
(515, 'App\\BlogDetail', 8, '1620020331united-states.png', '1620020331united-states.png', NULL, '2021-04-15 10:19:40', '2021-05-03 09:38:51'),
(516, 'App\\BlogDetail', 9, '1618469546WhatsApp Image 2021-04-01 at 2.43.20 PM.jpeg', '1618469546WhatsApp Image 2021-04-01 at 2.43.20 PM.jpeg', NULL, '2021-04-15 10:32:29', '2021-04-15 10:52:35'),
(517, 'App\\Proposal', 56, 'd1bd4229fea68d22b5a3259147c369c613.jpg', 'proposal_images', NULL, '2021-04-17 14:14:04', '2021-04-17 14:14:04'),
(518, 'App\\Proposal', 56, 'd1bd4229fea68d22b5a3259147c369c6613.jpg', 'proposal_images', NULL, '2021-04-17 14:14:04', '2021-04-17 14:14:04'),
(519, 'App\\Proposal', 57, '1619162670435a.PNG', 'post_request_image', NULL, '2021-04-23 11:24:37', '2021-04-23 11:24:55'),
(520, 'App\\Proposal', 57, '1619162672966error2.PNG', 'post_request_image', NULL, '2021-04-23 11:24:37', '2021-04-23 11:24:55'),
(521, 'App\\Contract', 354, '008bbf556893242b251eb559e67b2c8c.png', 'doc_signs', 'Buyer Signature', '2021-04-24 12:20:01', '2021-04-24 12:20:01'),
(522, 'App\\Contract', 355, '981f0fa437e32991c72390d7de21b3f5.png', 'doc_signs', 'Buyer Signature', '2021-04-30 11:20:25', '2021-04-30 11:20:25'),
(523, 'App\\Contract', 356, 'a56c248278974e851102a105d803b67f.png', 'doc_signs', 'Buyer Signature', '2021-04-30 11:21:41', '2021-04-30 11:21:41'),
(524, 'App\\Contract', 357, '07f9b2de0f41d20698598dd5fb8ca06a.png', 'doc_signs', 'Buyer Signature', '2021-04-30 11:24:51', '2021-04-30 11:24:51'),
(525, 'App\\Contract', 358, 'add587d449bb6adc0398089e5879a90f.png', 'doc_signs', 'Buyer Signature', '2021-04-30 11:26:05', '2021-04-30 11:26:05'),
(526, 'App\\Contract', 359, '903565647b148aeed7477b5701196537.png', 'doc_signs', 'Buyer Signature', '2021-04-30 12:04:46', '2021-04-30 12:04:46'),
(527, 'App\\Contract', 360, '60cbb33ee5b4eac4b2c7108d60a4fc11.png', 'doc_signs', 'Buyer Signature', '2021-04-30 12:05:24', '2021-04-30 12:05:24'),
(528, 'App\\Contract', 361, '916f0b2dbe7dd61cdb9975e7bf5f57b5.png', 'doc_signs', 'Buyer Signature', '2021-04-30 14:04:53', '2021-04-30 14:04:53'),
(529, 'App\\Contract', 362, 'e85e3f06711db937b8a645d535552ff0.png', 'doc_signs', 'Buyer Signature', '2021-04-30 14:05:33', '2021-04-30 14:05:33'),
(530, 'App\\Contract', 363, 'f2808c0203907370fc8747cd7a4b82ec.png', 'doc_signs', 'Buyer Signature', '2021-05-01 09:54:04', '2021-05-01 09:54:04'),
(531, 'App\\Contract', 364, 'f5ea3854416326802d0551f0d6e6bd96.png', 'doc_signs', 'Buyer Signature', '2021-05-01 09:54:38', '2021-05-01 09:54:38'),
(532, 'App\\BlogDetail', 10, '/tmp/php0FfKDL', '1620020303denmark.png', NULL, '2021-05-03 09:38:23', '2021-05-03 09:38:23'),
(533, 'App\\ClientRequest', 37, '16206482778610_U6SDa-3SH6O_vyGW_.png', 'post_request_image', NULL, '2021-05-10 16:04:39', '2021-05-10 16:04:42'),
(534, 'App\\ClientRequest', 37, '162064827786401-prometeo-business-financial-consulting.__large_preview.jpg', 'post_request_image', NULL, '2021-05-10 16:04:39', '2021-05-10 16:04:42'),
(535, 'App\\ClientRequest', 38, '162064841614001-prometeo-business-financial-consulting.__large_preview.jpg', 'post_request_image', NULL, '2021-05-10 16:06:57', '2021-05-10 16:07:00'),
(536, 'App\\ClientRequest', 38, '16206484161380_U6SDa-3SH6O_vyGW_.png', 'post_request_image', NULL, '2021-05-10 16:06:57', '2021-05-10 16:07:00'),
(537, 'App\\ClientRequest', NULL, '16206485102810_U6SDa-3SH6O_vyGW_.png', 'post_request_image', NULL, '2021-05-10 16:08:30', '2021-05-10 16:08:30'),
(538, 'App\\ClientRequest', NULL, '16206487348940_U6SDa-3SH6O_vyGW_.png', 'post_request_image', NULL, '2021-05-10 16:12:16', '2021-05-10 16:12:16'),
(539, 'App\\ClientRequest', NULL, '16206487867521_IoXdis5_jg-8kQFqc0J__Q.png', 'post_request_image', NULL, '2021-05-10 16:13:10', '2021-05-10 16:13:10'),
(540, 'App\\ClientRequest', NULL, '162064884872101-prometeo-business-financial-consulting.__large_preview.jpg', 'post_request_image', NULL, '2021-05-10 16:14:11', '2021-05-10 16:14:11'),
(541, 'App\\ClientRequest', NULL, '16206488487231_IoXdis5_jg-8kQFqc0J__Q.png', 'post_request_image', NULL, '2021-05-10 16:14:11', '2021-05-10 16:14:11'),
(542, 'App\\ClientRequest', NULL, '16206489275050_U6SDa-3SH6O_vyGW_.png', 'post_request_image', NULL, '2021-05-10 16:15:29', '2021-05-10 16:15:29'),
(543, 'App\\ClientRequest', NULL, '16206490042020_U6SDa-3SH6O_vyGW_.png', 'post_request_image', NULL, '2021-05-10 16:16:46', '2021-05-10 16:16:46'),
(544, 'App\\ClientRequest', NULL, '162064922543501-prometeo-business-financial-consulting.__large_preview.jpg', 'post_request_image', NULL, '2021-05-10 16:20:26', '2021-05-10 16:20:26'),
(545, 'App\\ClientRequest', NULL, '162064930147101-prometeo-business-financial-consulting.__large_preview.jpg', 'post_request_image', NULL, '2021-05-10 16:21:42', '2021-05-10 16:21:42'),
(546, 'App\\ClientRequest', NULL, '16206493014731_IoXdis5_jg-8kQFqc0J__Q.png', 'post_request_image', NULL, '2021-05-10 16:21:43', '2021-05-10 16:21:43'),
(547, 'App\\ClientRequest', NULL, '162064939372901-prometeo-business-financial-consulting.__large_preview.jpg', 'post_request_image', NULL, '2021-05-10 16:23:15', '2021-05-10 16:23:15'),
(548, 'App\\ClientRequest', NULL, '162064953218901-prometeo-business-financial-consulting.__large_preview.jpg', 'post_request_image', NULL, '2021-05-10 16:25:35', '2021-05-10 16:25:35'),
(549, 'App\\ClientRequest', NULL, '16206496267860_U6SDa-3SH6O_vyGW_.png', 'post_request_image', NULL, '2021-05-10 16:27:13', '2021-05-10 16:27:13'),
(550, 'App\\ClientRequest', NULL, '162064979235283296c641e534bc612a3852b2544de2b.jpg', 'post_request_image', NULL, '2021-05-10 16:29:53', '2021-05-10 16:29:53'),
(551, 'App\\Contract', 365, '3d9f2d9331397cd1f6456f1adb958b8e.png', 'doc_signs', 'Buyer Signature', '2021-05-11 12:18:29', '2021-05-11 12:18:29'),
(552, 'App\\Contract', 366, '2ec3180bf155815ad908fc69cf07cc40.png', 'doc_signs', 'Buyer Signature', '2021-05-11 12:20:06', '2021-05-11 12:20:06'),
(553, 'App\\ClientRequest', NULL, '16207239751780_U6SDa-3SH6O_vyGW_.png', 'post_request_image', NULL, '2021-05-11 13:06:16', '2021-05-11 13:06:16'),
(554, 'App\\ClientRequest', NULL, '16207248309460_U6SDa-3SH6O_vyGW_.png', 'post_request_image', NULL, '2021-05-11 13:20:32', '2021-05-11 13:20:32'),
(555, 'App\\ClientRequest', NULL, '16207250165190_U6SDa-3SH6O_vyGW_.png', 'post_request_image', NULL, '2021-05-11 13:23:39', '2021-05-11 13:23:39'),
(556, 'App\\ClientRequest', NULL, '16207251018250_U6SDa-3SH6O_vyGW_.png', 'post_request_image', NULL, '2021-05-11 13:25:04', '2021-05-11 13:25:04'),
(557, 'App\\ClientRequest', NULL, '16208403751440_U6SDa-3SH6O_vyGW_.png', 'post_request_image', NULL, '2021-05-12 21:26:18', '2021-05-12 21:26:18'),
(558, 'App\\ClientRequest', NULL, '16212343495520_U6SDa-3SH6O_vyGW_.png', 'post_request_image', NULL, '2021-05-17 10:52:31', '2021-05-17 10:52:31'),
(559, 'App\\ClientRequest', NULL, '16212344591810_U6SDa-3SH6O_vyGW_.png', 'post_request_image', NULL, '2021-05-17 10:54:20', '2021-05-17 10:54:20'),
(560, 'App\\ClientRequest', NULL, '16212345932790_U6SDa-3SH6O_vyGW_.png', 'post_request_image', NULL, '2021-05-17 10:56:34', '2021-05-17 10:56:34'),
(561, 'App\\ClientRequest', NULL, '162123475437601-prometeo-business-financial-consulting.__large_preview.jpg', 'post_request_image', NULL, '2021-05-17 10:59:15', '2021-05-17 10:59:15'),
(562, 'App\\ClientRequest', 39, '16212349137460_U6SDa-3SH6O_vyGW_.png', 'post_request_image', NULL, '2021-05-17 11:01:55', '2021-05-17 11:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `invitations`
--

CREATE TABLE `invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invite_from` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sent',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invitations`
--

INSERT INTO `invitations` (`id`, `invite_from`, `email`, `link`, `status`, `created_at`, `updated_at`) VALUES
(86, 325, 'hassan1901f@aptechorangi.com', '1521006818', 'sent', '2021-04-10 12:24:30', '2021-04-10 12:24:30'),
(87, 283, 'emadakbar3@gmail.com', '420807883', 'sent', '2021-04-10 13:34:39', '2021-04-10 13:34:39'),
(88, 287, 'Emaad@gamil.com', '1840881156', 'sent', '2021-04-14 11:41:33', '2021-04-14 11:41:33'),
(89, 332, 'Mazharchota@gmail.com', '2099868903', 'sent', '2021-04-14 11:52:48', '2021-04-14 11:52:48');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `buyer_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(255) NOT NULL,
  `tip_amount` int(11) DEFAULT NULL,
  `contract_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `user_id`, `buyer_id`, `payment_method`, `amount`, `tip_amount`, `contract_id`, `created_at`, `updated_at`) VALUES
(150, 282, 283, 'Stripe', 12, NULL, 335, '2021-04-01 12:59:50', '2021-04-01 12:59:50'),
(151, 282, 283, 'Stripe', 21, NULL, 337, '2021-04-02 10:05:53', '2021-04-02 10:05:53'),
(152, 282, 283, 'Stripe', 20, NULL, 335, '2021-04-06 12:18:41', '2021-04-06 12:18:41'),
(153, 282, 283, 'Stripe', 20, NULL, 335, '2021-04-06 12:20:57', '2021-04-06 12:20:57'),
(154, 282, 283, 'Stripe', 20, NULL, 335, '2021-04-06 12:28:18', '2021-04-06 12:28:18'),
(155, 282, 283, 'Stripe', 20, NULL, 335, '2021-04-06 12:28:39', '2021-04-06 12:28:39'),
(156, 283, 302, 'Stripe', 2222, NULL, 339, '2021-04-06 13:10:45', '2021-04-06 13:10:45'),
(157, 283, 282, 'Stripe', 21, NULL, 341, '2021-04-07 11:26:45', '2021-04-07 11:26:45'),
(158, 282, 283, 'Stripe', 20, NULL, 335, '2021-04-07 13:30:56', '2021-04-07 13:30:56'),
(159, 283, 282, 'Stripe', 12, NULL, 344, '2021-04-08 08:59:16', '2021-04-08 08:59:16'),
(161, 283, 282, 'Stripe', 12, NULL, 346, '2021-04-08 09:30:11', '2021-04-08 09:30:11'),
(163, 287, 286, 'Stripe', 15, NULL, 340, '2021-04-09 11:25:33', '2021-04-09 11:25:33'),
(164, 287, 282, 'Stripe', 45, NULL, 348, '2021-04-12 11:19:47', '2021-04-12 11:19:47'),
(165, 287, 282, 'Stripe', 78, NULL, 349, '2021-04-12 11:23:41', '2021-04-12 11:23:41'),
(166, 334, 282, 'Stripe', 21, NULL, 353, '2021-04-15 09:30:15', '2021-04-15 09:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_locations` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_type` enum('Country','State','City','Area') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `parent_locations`, `name`, `postal_code`, `location_type`, `created_at`, `updated_at`) VALUES
(398, NULL, 'PK', '59201', 'Country', '2021-04-01 11:32:25', '2021-04-01 11:32:25'),
(399, 398, 'Karachi', '59201', 'City', '2021-04-01 11:32:25', '2021-04-01 11:32:25'),
(400, 398, 'Karachi', '59201', 'City', '2021-04-01 11:32:33', '2021-04-01 11:32:33'),
(401, 398, 'Karachi', '59201', 'City', '2021-04-01 11:36:15', '2021-04-01 11:36:15'),
(402, NULL, 'pppp', NULL, 'Country', '2021-04-01 11:45:36', '2021-04-01 11:45:36'),
(403, 402, 'jjjjddd', NULL, 'City', '2021-04-01 11:45:36', '2021-04-01 11:45:36'),
(404, NULL, 'DK', NULL, 'Country', '2021-04-01 11:46:13', '2021-04-01 11:46:13'),
(405, 404, 'Karachi', NULL, 'City', '2021-04-01 11:46:13', '2021-04-01 11:46:13'),
(406, 404, 'Karachi', NULL, 'City', '2021-04-01 11:46:51', '2021-04-01 11:46:51'),
(407, 404, 'Karachi', NULL, 'City', '2021-04-01 12:22:37', '2021-04-01 12:22:37'),
(410, 398, 'Karachi', '59201', 'City', '2021-04-01 22:11:34', '2021-04-01 22:11:34'),
(411, NULL, 'Dubai', NULL, 'City', '2021-04-03 11:37:52', '2021-04-03 11:37:52'),
(412, 398, 'Karachi', NULL, 'City', '2021-04-03 11:37:52', '2021-04-03 11:37:52'),
(413, 398, 'Karachi', NULL, 'City', '2021-04-03 11:56:06', '2021-04-03 11:56:06'),
(414, 398, 'Karachi', NULL, 'City', '2021-04-03 11:57:34', '2021-04-03 11:57:34'),
(415, 398, 'Karachi', NULL, 'City', '2021-04-03 11:57:59', '2021-04-03 11:57:59'),
(416, NULL, 'UK', NULL, 'Country', '2021-04-03 14:37:42', '2021-04-03 14:37:42'),
(417, 416, 'N/A', NULL, 'City', '2021-04-03 14:37:42', '2021-04-03 14:37:42'),
(418, 398, 'Karachi', NULL, 'City', '2021-04-03 14:38:04', '2021-04-03 14:38:04'),
(419, NULL, 'pppqloqqllq', NULL, 'Country', '2021-04-05 09:31:58', '2021-04-05 09:31:58'),
(420, 419, 'llaodjsajdj', NULL, 'City', '2021-04-05 09:31:58', '2021-04-05 09:31:58'),
(421, NULL, 'Pakistan', NULL, 'Country', '2021-04-05 09:36:22', '2021-04-05 09:36:22'),
(422, 421, 'Lahore', NULL, 'City', '2021-04-05 09:36:22', '2021-04-05 09:36:22'),
(423, NULL, 'Japan', NULL, 'Country', '2021-04-05 09:43:38', '2021-04-05 09:43:38'),
(424, 423, 'Wohan', NULL, 'City', '2021-04-05 09:45:18', '2021-04-05 09:45:18'),
(425, 423, 'ffa', NULL, 'City', '2021-04-05 09:47:59', '2021-04-05 09:47:59'),
(430, 404, 'jk', NULL, 'City', '2021-04-10 13:05:41', '2021-04-10 13:05:41'),
(431, 398, 'Hh', NULL, 'City', '2021-04-10 13:48:32', '2021-04-10 13:48:32'),
(432, 398, 'Quetta', NULL, 'City', '2021-04-10 13:50:57', '2021-04-10 13:50:57'),
(435, 404, 'hhhhh', NULL, 'City', '2021-04-12 15:55:03', '2021-04-12 15:55:03'),
(436, 404, 'Copenhagen', NULL, 'City', '2021-04-12 16:49:34', '2021-04-12 16:49:34'),
(439, 404, 'AFK', NULL, 'City', '2021-04-17 11:12:43', '2021-04-17 11:12:43'),
(440, 404, 'kjkjnk', NULL, 'City', '2021-04-17 13:13:12', '2021-04-17 13:13:12'),
(441, NULL, 'AS', NULL, 'Country', '2021-04-17 13:15:14', '2021-04-17 13:15:14'),
(442, 441, 'kjkjh', NULL, 'City', '2021-04-17 13:15:14', '2021-04-17 13:15:14'),
(443, 441, 'jjdjjdjjddj', NULL, 'City', '2021-04-17 13:16:59', '2021-04-17 13:16:59'),
(444, NULL, 'DZ', NULL, 'Country', '2021-04-17 13:19:32', '2021-04-17 13:19:32'),
(445, 444, 'sdfsdf', NULL, 'City', '2021-04-17 13:19:32', '2021-04-17 13:19:32'),
(446, NULL, 'BE', NULL, 'Country', '2021-04-17 13:21:33', '2021-04-17 13:21:33'),
(447, 446, 'asdasdasd', NULL, 'City', '2021-04-17 13:21:33', '2021-04-17 13:21:33'),
(448, NULL, 'US', NULL, 'Country', '2021-04-17 13:24:09', '2021-04-17 13:24:09'),
(449, 448, 'Karachi', NULL, 'City', '2021-04-17 13:24:09', '2021-04-17 13:24:09'),
(450, NULL, 'AR', NULL, 'Country', '2021-04-17 13:29:18', '2021-04-17 13:29:18'),
(451, 450, 'asdasdasd', NULL, 'City', '2021-04-17 13:29:18', '2021-04-17 13:29:18'),
(452, NULL, 'China', NULL, 'Country', '2021-04-17 13:29:26', '2021-04-17 13:29:26'),
(453, 452, 'Karachi', NULL, 'City', '2021-04-17 13:29:26', '2021-04-17 13:29:26'),
(454, NULL, 'GL', NULL, 'Country', '2021-04-17 13:32:52', '2021-04-17 13:32:52'),
(455, 454, 'fgfreen', NULL, 'City', '2021-04-17 13:32:52', '2021-04-17 13:32:52'),
(456, NULL, 'AF', NULL, 'Country', '2021-04-17 14:11:22', '2021-04-17 14:11:22'),
(457, 456, 'Karachi', NULL, 'City', '2021-04-17 14:11:22', '2021-04-17 14:11:22'),
(462, 398, 'Surab', '89101', 'City', '2021-05-10 11:50:55', '2021-05-10 11:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `manual_bonuses`
--

CREATE TABLE `manual_bonuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manual_notifications`
--

CREATE TABLE `manual_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `worker_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noti_header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noti_body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2020_11_07_134918_create_contracts_table', 2),
(4, '2020_11_07_130803_create_feed_backs_table', 4),
(5, '2020_11_07_130828_create_blog_tags_table', 5),
(6, '2020_11_07_130845_create_blog_images_table', 6),
(7, '2020_11_07_130902_create_blog_details_table', 7),
(8, '2020_11_07_144915_create_images_table', 8),
(9, '2020_11_07_130933_create_blog_comments_table', 9),
(10, '2020_11_07_130949_create_manual_bonuses_table', 10),
(11, '2020_11_07_131029_create_manual_notifications_table', 11),
(12, '2014_10_12_100000_create_password_resets_table', 12),
(13, '2019_08_19_000000_create_failed_jobs_table', 12),
(14, '2020_11_07_130745_create_invoices_table', 13),
(15, '2020_05_28_135529_create_locations_table', 14),
(16, '2020_11_07_130919_create_blog_views_table', 15),
(17, '2020_11_18_120719_create_user_details_table', 15),
(18, '2020_11_19_074615_create_services_table', 16),
(19, '2020_11_20_121805_create_gigs_table', 17),
(21, '2020_11_23_132438_create_gig_clicks_table', 19),
(22, '2020_11_25_080955_create_conversations_table', 20),
(23, '2020_11_26_072226_create_conversation_points_table', 21),
(24, '2020_11_28_123044_create_cancel_request_contracts_table', 22),
(25, '2020_11_21_125004_create_cancel_requests_table', 23),
(27, '2020_12_01_082516_create_reviews_table', 24),
(28, '2020_12_02_085909_create_replies_table', 25),
(29, '2020_12_03_121222_create_company_details_table', 26),
(30, '2020_12_04_134038_create_invitations_table', 27),
(31, '2020_12_05_124715_create_amounts_table', 28),
(32, '2020_12_09_094019_create_support_inboxes_table', 29);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ubaidkh32@gmail.com', '$2y$10$xoeNJb27jUT2AVEf77qEZ.MgYG8JmmylFN2HKzzvgJlbtrOL6UMlO', '2021-01-13 18:43:28'),
('admin@admin.com', '$2y$10$fvn8lRppWiB2rS8LH9GD/u5LDh00Me.qWqgRxL1GAKcZNL7XqmDvu', '2021-03-02 13:17:18'),
('ubasadsad@gmail.com', '$2y$10$xY64qqn9SornmxqqE19m3evas7zPs5DPs.wWx1AYughGah0ZZTKe6', '2021-03-02 13:18:01'),
('zain1706e@aptechorangi.com', '$2y$10$MUbjVQnoEo8ASINfAmsLKeVTHUb2bxnjvshx6MbhGICZSad9x2o8e', '2021-03-02 13:31:44');

-- --------------------------------------------------------

--
-- Table structure for table `payouts`
--

CREATE TABLE `payouts` (
  `id` int(11) NOT NULL,
  `contract_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payouts`
--

INSERT INTO `payouts` (`id`, `contract_id`, `buyer_id`, `invoice_id`, `amount`, `created_at`, `updated_at`) VALUES
(94, 341, 282, 157, 21, '2021-04-12 09:32:20', '2021-04-12 13:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `proposal_amount` int(11) NOT NULL,
  `proposal_days` int(11) NOT NULL,
  `proposal_details` varchar(5000) NOT NULL,
  `bid_amount` int(11) NOT NULL,
  `image_id` varchar(1000) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`id`, `provider_id`, `request_id`, `proposal_amount`, `proposal_days`, `proposal_details`, `bid_amount`, `image_id`, `status`, `created_at`, `updated_at`) VALUES
(30, 287, 27, 21, 2, 'sadsadasd', 45, NULL, 'pending', '2021-04-08 08:48:54', '2021-04-08 12:48:54'),
(31, 287, 27, 21, 2, 'sadsadasd', 45, NULL, 'pending', '2021-04-08 08:49:03', '2021-04-08 12:49:03'),
(32, 287, 27, 21, 2, 'sadsadasd', 45, NULL, 'pending', '2021-04-08 08:49:31', '2021-04-08 12:49:31'),
(33, 287, 27, 21, 2, 'sadsadasd', 45, NULL, 'pending', '2021-04-08 08:49:49', '2021-04-08 12:49:49'),
(34, 287, 27, 21, 2, 'sadsadasd', 45, NULL, 'pending', '2021-04-08 08:50:29', '2021-04-08 12:50:29'),
(35, 287, 27, 21, 2, 'sadsadasd', 45, NULL, 'pending', '2021-04-08 08:51:01', '2021-04-08 12:51:01'),
(36, 287, 28, 10, 10, 'mmmmm', 45, NULL, 'pending', '2021-04-08 08:54:10', '2021-04-08 12:54:10'),
(37, 287, 28, 10, 10, 'mmmmm', 45, NULL, 'Active', '2021-04-08 08:54:14', '2021-04-14 12:02:23'),
(38, 287, 27, 21, 2, 'sadsadasd', 45, NULL, 'pending', '2021-04-08 08:54:55', '2021-04-08 12:54:55'),
(39, 287, 28, 10, 10, 'mmmmm', 45, NULL, 'Active', '2021-04-08 09:01:52', '2021-04-12 11:17:58'),
(40, 287, 26, 41, 14, 'ggygygy', 45, NULL, 'pending', '2021-04-08 09:02:31', '2021-04-08 13:02:31'),
(41, 287, 27, 21, 2, 'sadsadasd', 45, NULL, 'pending', '2021-04-08 09:19:02', '2021-04-08 13:19:02'),
(42, 287, 27, 21, 2, 'sadsadasd', 45, NULL, 'pending', '2021-04-08 09:22:12', '2021-04-08 13:22:12'),
(43, 287, 27, 21, 2, 'sadsadasd', 45, NULL, 'pending', '2021-04-08 09:23:08', '2021-04-08 13:23:08'),
(44, 287, 27, 21, 2, 'sadsadasd', 45, NULL, 'pending', '2021-04-08 09:36:12', '2021-04-08 13:36:12'),
(45, 287, 31, 1, 10, 'asd', 45, NULL, 'pending', '2021-04-08 09:36:54', '2021-04-08 13:36:54'),
(46, 287, 31, 1, 10, 'asd', 45, NULL, 'pending', '2021-04-08 09:37:29', '2021-04-08 13:37:29'),
(47, 287, 27, 21, 2, 'sadsadasd', 45, NULL, 'pending', '2021-04-08 09:38:32', '2021-04-08 13:38:32'),
(48, 287, 27, 30, 10, 'Sdsdd', 45, NULL, 'pending', '2021-04-08 09:40:39', '2021-04-08 13:40:39'),
(49, 287, 27, 30, 10, 'Sdsdd', 45, NULL, 'pending', '2021-04-08 09:41:43', '2021-04-08 13:41:43'),
(50, 287, 27, 30, 10, 'Sdsdd', 45, NULL, 'pending', '2021-04-08 09:44:37', '2021-04-08 13:44:37'),
(51, 287, 33, 10, 10, 'lkjlkj', 45, NULL, 'pending', '2021-04-08 10:16:52', '2021-04-08 14:16:52'),
(52, 287, 33, 10, 10, 'lkjlkj', 45, NULL, 'pending', '2021-04-08 10:16:52', '2021-04-08 14:16:52'),
(53, 325, 26, 5, 2, 'Jsjshsyw-hhhhhhhhhhh', 45, NULL, 'pending', '2021-04-10 08:29:59', '2021-04-10 12:29:59'),
(54, 283, 26, 50, 30, 'Tgg', 45, NULL, 'pending', '2021-04-10 09:35:54', '2021-04-10 13:35:54'),
(55, 332, 26, 0, 0, 'abcd', 45, '506', 'pending', '2021-04-14 07:50:32', '2021-04-14 11:50:32'),
(56, 287, 29, 10, 18, 'Hdhdbdb', 45, NULL, 'pending', '2021-04-17 10:14:04', '2021-04-17 14:14:04'),
(57, 329, 26, 40, 8, 'opopc ncb nbd nb dba bn ansnbasnbanb a bs nsbnsnb bnabns\r\ndnbd nb d n bdd\r\ndbnd bn dsbn dsbnbdb bnd bnd sbn mndmndsmnd bn dbn dbn nbds\r\nd', 45, '519,520', 'Active', '2021-04-23 07:24:55', '2021-04-23 11:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `provider_details`
--

CREATE TABLE `provider_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schol_end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobstart_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobend_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_size_pic` varchar(2550) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume` varchar(2550) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `busines_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cvr_number` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpr_number` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provider_details`
--

INSERT INTO `provider_details` (`id`, `user_id`, `profession`, `location`, `minimum_rate`, `resume_category`, `skills`, `city`, `intro`, `school_name`, `qualification`, `school_start_date`, `schol_end_date`, `employer`, `job_title`, `jobstart_date`, `jobend_date`, `passport_size_pic`, `resume`, `busines_type`, `cvr_number`, `cpr_number`, `created_at`, `updated_at`) VALUES
(32, 282, 'Devloper', NULL, '50', '6', 'Web Developer', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'demo', 'demo', 'demo', 'demo', 'demo', 'demo', 'demo', 'demo', '1617263392OIP (1).jpg', '1617263392OIP.jpg', 'company', NULL, NULL, '2021-04-01 11:49:52', '2021-04-01 11:49:52'),
(33, 287, 'sad', NULL, '21', '9', 'sasadas', NULL, 'sadas', 'asdas', 'asdas', '21212', '12212', 'asdas', 'asdas', '2021-04-05', '2021-04-14', '16173520590_U6SDa-3SH6O_vyGW_.png', '16173520590_U6SDa-3SH6O_vyGW_.png', 'company', '92234234234', '9999666555222', '2021-04-02 12:27:39', '2021-04-17 14:11:50'),
(34, 289, 'developer', NULL, '12', '6', 'laravel', NULL, 'nmn n nmsn snmsn nmwnm wnmm wnw mnw', 'blah blah school name', 'etc etc', '2015', '2020', 'develoepr', 'nan', '2021-04-08', '2021-04-02', '1617435656be-your-frontend-web-developer-html-css-javascript-jquery.jpg', '1617435656be-your-frontend-web-developer-html-css-javascript-jquery.jpg', 'company', NULL, NULL, '2021-04-03 11:40:56', '2021-04-03 11:40:56'),
(35, 283, 'sadsa', NULL, '20', '7', 'sdadsa', NULL, 'asdsa', '', '', '', '', '', '', '', '', '16203653511_IoXdis5_jg-8kQFqc0J__Q.png', '1620364181AI.pdf', 'company', NULL, NULL, '2021-04-07 10:46:16', '2021-05-07 09:29:11'),
(36, 293, 'developer', NULL, 'mn', '5', 'laravel', NULL, 'nmxn xnxnmzn mnz nzm znmz nzmnz nzmn nnnznz nznzn', 'blah blah school name', 'etc etc', '2015', '2020', 'develoepr', 'nm', '2021-04-08', '2021-04-17', '1617867016OIP (1).jpg', '1617867016pp.jpg', 'solo', NULL, NULL, '2021-04-08 11:30:16', '2021-04-08 11:30:16'),
(38, 329, 'fdf', NULL, 'dfg', '7', 'dfg', NULL, 'nbvnbv', 'nbmn', 'mnn', '2021-04-20', '2021-04-20', 'jj', 'vyjhg', '2021-03-30', '2021-04-13', '1618054093handyservicefinal.png', '1618054093handyservicefinal.png', 'company', NULL, NULL, '2021-04-10 15:28:14', '2021-04-10 15:28:14'),
(39, 332, '123', NULL, '321', '8', '3251', NULL, '321', '321', '321', '2021-04-15', '2021-04-01', '132', '1321', '2021-04-28', '2021-04-01', '1618386745unnamed.jpg', '1618385339unnamed.jpg', 'solo', NULL, NULL, '2021-04-14 11:28:59', '2021-04-14 11:52:25'),
(40, 334, 'sdsa', NULL, '21', '7', 'saksa', NULL, 'sadas', 'sads', 'asd', '2021-04-16', '2021-04-15', 'sadsa', 'asdd', '2021-04-22', '2021-04-30', '16184615971_IoXdis5_jg-8kQFqc0J__Q.png', '1618461597AI.pdf', 'solo', NULL, NULL, '2021-04-15 08:39:57', '2021-04-15 08:39:57'),
(43, 328, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'solo', NULL, '123345', '2021-04-17 08:40:16', '2021-04-17 09:26:38'),
(44, 301, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'solo', NULL, '123345', '2021-04-17 09:27:11', '2021-04-17 09:27:11'),
(45, 336, 'sad', NULL, 'asd', '6', 'sad', NULL, 'asdsa', 'sad', 'sadsad', '2021-04-29', '2021-04-22', 'sadssadsa', 'sadas', '2021-04-22', '2021-04-05', '16186389270_U6SDa-3SH6O_vyGW_.png', '1618638927AI.pdf', 'company', NULL, NULL, '2021-04-17 09:55:27', '2021-04-17 09:55:27'),
(46, 337, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'company', '123345', '123345', '2021-04-17 11:38:11', '2021-04-17 12:59:10'),
(47, 340, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'solo', NULL, NULL, '2021-04-17 12:22:44', '2021-04-17 12:22:44'),
(48, 341, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'solo', NULL, NULL, '2021-04-17 12:23:28', '2021-04-17 12:23:28'),
(49, 342, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'solo', NULL, NULL, '2021-04-17 12:25:40', '2021-04-17 12:25:40'),
(50, 343, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'solo', NULL, NULL, '2021-04-17 13:13:12', '2021-04-17 13:13:12'),
(51, 345, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'solo', NULL, NULL, '2021-04-17 13:16:59', '2021-04-17 13:16:59'),
(52, 349, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'solo', NULL, NULL, '2021-04-17 13:26:33', '2021-04-17 13:26:33'),
(53, 354, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'solo', NULL, NULL, '2021-04-17 13:32:52', '2021-04-17 13:32:52'),
(54, 360, '122', NULL, '45', '8', 'laravel', NULL, 'nxnmx', 'n', 'mn', '2021-04-09', '2021-04-06', 'bnb', 'nb', '2021-04-09', '2021-04-19', '1619254102do-bug-fixing-in-php-mysql-html-css-js-jquery.jpg', '1619254102pp.jpg', NULL, NULL, NULL, '2021-04-24 12:48:22', '2021-04-24 12:48:22'),
(55, 372, 'asdsad', NULL, '232', '6', 'sakdljjaw', NULL, 'asdasdasd', '', '', '', '', '', '', '', '', '1619683467590_coffee.__large_preview.jpg.jpg', '1619683467AI.pdf', NULL, '', '882882', '2021-04-29 12:04:27', '2021-04-29 12:04:27'),
(56, 373, 'dsad', NULL, '23', '7', 'sadasdsa', NULL, 'sadasdasdasd', 'asdasdas', 'sadas', '2021-03-30', '', 'asdsadasda', '', '2021-04-16', '', '1619683614590_coffee.__large_preview.jpg.jpg', '1619683614AI.pdf', NULL, '', '21321', '2021-04-29 12:06:54', '2021-04-29 12:06:54'),
(57, 357, 'furniture assembler', NULL, '385kr', '9', 'Painter', NULL, 'thanks for visiting my profile. Hi I am  my clients call me assembling specialist I am experienced with the following skills, such as Ikea Jyks Johnson & Johnson and other Product. I have all the tools necessary to use for my assembling services.', 'Johnny Bravo', 'Masters', '2019-04-01', '2021-05-30', 'Ikea', 'assemling service department', '2020-01-01', '2020-12-25', '1620290485IMG_1892.jpg', '1620290485Tilbud+Almindelig+bolig+m_blanket+(Ansøger) (9).pdf', NULL, '27558471', '', '2021-05-06 12:41:26', '2021-05-06 12:41:26'),
(58, 376, 'something', NULL, '20', '9', 'something', NULL, 'qweqweqwe', '', '', '', '', '', '', '', '', '1620290490WhatsApp Image 2021-04-19 at 2.22.52 PM.jpeg', '1620290490Untitled document.docx', NULL, '', '123', '2021-05-06 12:41:30', '2021-05-06 12:41:30'),
(59, 377, 'sad', NULL, '20', '6', 'sadas', NULL, 'sadsad', '', '', '', '', '', '', '', '', '16202923070_U6SDa-3SH6O_vyGW_.png', '1620292307AI.pdf', NULL, '123455', '', '2021-05-06 13:11:47', '2021-05-06 13:11:47');

-- --------------------------------------------------------

--
-- Table structure for table `remebers`
--

CREATE TABLE `remebers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip_address` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remebers`
--

INSERT INTO `remebers` (`id`, `user_id`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, 283, '59.103.122.203', '2021-05-17 08:03:11', '2021-05-17 12:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `replys` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_comment` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `provider_id`, `replys`, `parent_comment`, `created_at`, `updated_at`) VALUES
(17, 283, 'ok thanks', 33, '2021-04-06 13:12:32', '2021-04-06 13:12:32'),
(18, 283, 'asasdsas', 34, '2021-04-09 08:58:53', '2021-04-09 08:58:53'),
(19, 334, 'zx', 37, '2021-04-15 09:41:19', '2021-04-15 09:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `buyer_id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` bigint(20) UNSIGNED NOT NULL,
  `contract_id` bigint(20) UNSIGNED NOT NULL,
  `stars` bigint(20) UNSIGNED NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `buyer_id`, `provider_id`, `contract_id`, `stars`, `review`, `created_at`, `updated_at`) VALUES
(33, 302, 283, 339, 5, 'xxmnxbn', '2021-04-06 13:12:21', '2021-04-06 13:12:21'),
(34, 282, 283, 346, 3, 'assadasd', '2021-04-09 08:57:32', '2021-04-09 08:57:32'),
(35, 282, 287, 349, 5, 'xbnxbn', '2021-04-12 11:24:32', '2021-04-12 11:24:32'),
(36, 282, 287, 161, 2, 'erwe', '2021-04-13 12:43:50', '2021-04-13 12:43:50'),
(37, 282, 334, 353, 2, 'qwds', '2021-04-15 09:30:43', '2021-04-15 09:30:43');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iconns` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `iconns`, `is_active`, `created_at`, `updated_at`) VALUES
(5, 'Web Developer', '<i class=\"fa fa-code\"></i>', '0', NULL, '2021-05-20 11:57:12'),
(6, 'Painting Service', '<i class=\"fa fa-code\"></i>', '1', NULL, '2021-05-20 12:27:02'),
(7, 'Graphic Designer', '<i class=\"fa fa-code\"></i>', '1', NULL, NULL),
(8, 'Wall Paineter', '<i class=\"fa fa-code\"></i>', '1', NULL, NULL),
(9, 'Mechanic', '<i class=\"fa fa-code\"></i>', '1', NULL, NULL),
(10, 'Architecturer', '<i class=\"fa fa-code\"></i>', '1', NULL, NULL),
(11, 'Electricion', '<i class=\"fa fa-code\"></i>', '1', NULL, NULL),
(15, 'Transportation Service', '<i class=\"fa fa-code\"></i>', '1', '2021-05-10 14:23:07', '2021-05-10 14:23:07');

-- --------------------------------------------------------

--
-- Table structure for table `site_balance`
--

CREATE TABLE `site_balance` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `recieved_from` int(11) NOT NULL,
  `reference` varchar(200) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `support_inboxes`
--

CREATE TABLE `support_inboxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `files` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `support_inboxes`
--

INSERT INTO `support_inboxes` (`id`, `user_id`, `message`, `files`, `created_at`, `updated_at`) VALUES
(248, 282, 'Hi', '', '2021-04-01 12:36:55', '2021-04-01 12:36:55'),
(249, 284, 'Hi', '', '2021-04-01 12:38:54', '2021-04-01 12:38:54'),
(250, 282, 'Fine', '', '2021-04-01 12:39:28', '2021-04-01 12:39:28'),
(251, 284, 'ok', '', '2021-04-01 12:39:41', '2021-04-01 12:39:41'),
(252, 284, 'how may i help you?', '', '2021-04-01 12:39:49', '2021-04-01 12:39:49'),
(253, 284, 'ope', '', '2021-04-01 12:40:11', '2021-04-01 12:40:11'),
(254, 284, 'smnm', '1617266429be-your-frontend-web-developer-html-css-javascript-jquery.jpg', '2021-04-01 12:40:29', '2021-04-01 12:40:29'),
(255, 283, 'hI', '', '2021-04-01 13:13:49', '2021-04-01 13:13:49'),
(256, 284, 'Hi', '', '2021-04-01 13:14:08', '2021-04-01 13:14:08'),
(257, 284, 'anbs', '1617268457be-your-frontend-web-developer-html-css-javascript-jquery.jpg', '2021-04-01 13:14:17', '2021-04-01 13:14:17'),
(258, 284, 'ok', '', '2021-04-01 13:14:23', '2021-04-01 13:14:23'),
(259, 284, 'ok', '', '2021-04-01 13:14:25', '2021-04-01 13:14:25'),
(260, 283, 'bb', '', '2021-04-01 13:22:22', '2021-04-01 13:22:22'),
(261, 283, 'njh', '', '2021-04-01 13:22:27', '2021-04-01 13:22:27'),
(262, 283, 'nb', '', '2021-04-01 13:22:33', '2021-04-01 13:22:33'),
(263, 284, 'dsdd', '16173399870_U6SDa-3SH6O_vyGW_.png', '2021-04-02 09:06:27', '2021-04-02 09:06:27'),
(264, 284, 'sadas', '161734048283296c641e534bc612a3852b2544de2b.jpg', '2021-04-02 09:14:42', '2021-04-02 09:14:42'),
(265, 284, 'sas', '161734116901-prometeo-business-financial-consulting.__large_preview.jpg', '2021-04-02 09:26:09', '2021-04-02 09:26:09'),
(266, 284, 'ssad', '1617341501590_coffee.__large_preview.jpg.jpg', '2021-04-02 09:31:41', '2021-04-02 09:31:41'),
(267, 284, 'asdsa', '161734721083296c641e534bc612a3852b2544de2b.jpg', '2021-04-02 11:06:50', '2021-04-02 11:06:50'),
(268, 284, 'm', '', '2021-04-05 13:51:00', '2021-04-05 13:51:00'),
(269, 284, 'm', '', '2021-04-05 13:51:01', '2021-04-05 13:51:01'),
(270, 284, 'mm', '', '2021-04-05 13:51:05', '2021-04-05 13:51:05'),
(271, 284, 'mm', '', '2021-04-05 13:51:06', '2021-04-05 13:51:06'),
(272, 284, 'jj', '', '2021-04-05 13:51:14', '2021-04-05 13:51:14'),
(273, 284, 'jj', '', '2021-04-05 13:51:14', '2021-04-05 13:51:14'),
(274, 284, 'jj', '', '2021-04-05 13:51:15', '2021-04-05 13:51:15'),
(275, 284, 'jj', '', '2021-04-05 13:51:15', '2021-04-05 13:51:15'),
(276, 284, 'jj', '', '2021-04-05 13:51:15', '2021-04-05 13:51:15'),
(277, 284, 'jj', '', '2021-04-05 13:51:15', '2021-04-05 13:51:15'),
(278, 284, 'jj', '', '2021-04-05 13:51:16', '2021-04-05 13:51:16'),
(279, 284, 'jj', '', '2021-04-05 13:51:16', '2021-04-05 13:51:16'),
(280, 284, 'jj', '', '2021-04-05 13:51:17', '2021-04-05 13:51:17'),
(281, 284, 'jj', '', '2021-04-05 13:51:17', '2021-04-05 13:51:17'),
(282, 284, 'jj', '', '2021-04-05 13:51:17', '2021-04-05 13:51:17'),
(283, 284, 'jj', '', '2021-04-05 13:51:17', '2021-04-05 13:51:17'),
(284, 284, 'jj', '', '2021-04-05 13:51:17', '2021-04-05 13:51:17'),
(285, 284, 'jj', '', '2021-04-05 13:51:18', '2021-04-05 13:51:18'),
(286, 284, 'jj', '', '2021-04-05 13:51:19', '2021-04-05 13:51:19'),
(287, 284, 'jj', '', '2021-04-05 13:51:19', '2021-04-05 13:51:19'),
(288, 284, 'jj', '', '2021-04-05 13:51:19', '2021-04-05 13:51:19'),
(289, 284, 'jj', '', '2021-04-05 13:51:19', '2021-04-05 13:51:19'),
(290, 284, 'jj', '', '2021-04-05 13:51:20', '2021-04-05 13:51:20'),
(291, 284, 'jj', '', '2021-04-05 13:51:20', '2021-04-05 13:51:20'),
(292, 284, 'jj', '', '2021-04-05 13:51:20', '2021-04-05 13:51:20'),
(293, 284, 'jj', '', '2021-04-05 13:51:21', '2021-04-05 13:51:21'),
(294, 284, 'jj', '', '2021-04-05 13:51:21', '2021-04-05 13:51:21'),
(295, 284, 'jj', '', '2021-04-05 13:51:21', '2021-04-05 13:51:21'),
(296, 284, 'jj', '', '2021-04-05 13:51:21', '2021-04-05 13:51:21'),
(297, 284, 'jj', '', '2021-04-05 13:51:21', '2021-04-05 13:51:21'),
(298, 284, 'jj', '', '2021-04-05 13:51:22', '2021-04-05 13:51:22'),
(299, 284, 'jj', '', '2021-04-05 13:51:22', '2021-04-05 13:51:22'),
(300, 284, 'jj', '', '2021-04-05 13:51:23', '2021-04-05 13:51:23'),
(301, 284, 'jj', '', '2021-04-05 13:51:23', '2021-04-05 13:51:23'),
(302, 282, 'm,z', '', '2021-04-12 11:14:54', '2021-04-12 11:14:54'),
(303, 282, 'xnmnx', '', '2021-04-12 11:15:00', '2021-04-12 11:15:00'),
(304, 287, 'oi', '', '2021-04-12 11:23:13', '2021-04-12 11:23:13'),
(305, 287, 'hi', '', '2021-04-12 11:23:17', '2021-04-12 11:23:17'),
(306, 282, 'aby', '', '2021-04-14 12:08:03', '2021-04-14 12:08:03'),
(307, 282, 'sdsa', '', '2021-04-15 09:31:24', '2021-04-15 09:31:24'),
(308, 282, 'xzcxzczx', '', '2021-04-15 09:31:31', '2021-04-15 09:31:31'),
(309, 282, 'dsdf', '', '2021-04-15 09:31:36', '2021-04-15 09:31:36'),
(310, 282, 'sdaasd', '', '2021-04-15 09:38:01', '2021-04-15 09:38:01'),
(311, 283, 'xx', '', '2021-04-29 10:00:50', '2021-04-29 10:00:50'),
(312, 283, 'xxdd', '', '2021-04-29 10:00:56', '2021-04-29 10:00:56');

-- --------------------------------------------------------

--
-- Table structure for table `used_amounts`
--

CREATE TABLE `used_amounts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `used_amounts`
--

INSERT INTO `used_amounts` (`id`, `user_id`, `request_id`, `amount`, `created_at`, `updated_at`) VALUES
(17, 287, 39, 45, '2021-04-12 07:17:58', '2021-04-12 11:17:58'),
(18, 287, 37, 45, '2021-04-14 08:01:27', '2021-04-14 12:01:27'),
(19, 287, 37, 45, '2021-04-14 08:02:23', '2021-04-14 12:02:23'),
(20, 329, 57, 45, '2021-04-23 07:38:06', '2021-04-23 11:38:06'),
(21, 329, 57, 45, '2021-04-23 07:38:06', '2021-04-23 11:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `widthdrwal_amount` int(11) DEFAULT NULL,
  `profile_image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `gender` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bitrth_day` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_social` int(11) NOT NULL DEFAULT 0,
  `img_url` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_addres` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `internet` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addres` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contacts` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_without_code` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `driver_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lience_number` bigint(20) DEFAULT NULL,
  `is_account_setup_completed` int(11) NOT NULL DEFAULT 0,
  `step_1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'uncompleted',
  `step_2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'uncompleted',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `is_online` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'online',
  `category` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` int(11) NOT NULL DEFAULT 0,
  `confirmation_code` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_confirm` int(11) DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `widthdrwal_amount`, `profile_image`, `profile_token`, `account_type`, `gender`, `bitrth_day`, `country`, `city`, `is_social`, `img_url`, `ip_addres`, `region`, `postal`, `timezone`, `internet`, `language`, `addres`, `contacts`, `contact_without_code`, `driver_name`, `lience_number`, `is_account_setup_completed`, `step_1`, `step_2`, `email_verified_at`, `password`, `is_active`, `is_online`, `category`, `is_featured`, `confirmation_code`, `phone_confirm`, `remember_token`, `app_token`, `created_at`, `updated_at`) VALUES
(282, 'Wasif', 'ubaidksssh32@gmail.com', 32, '1620722028590_coffee.__large_preview.jpg.jpg', '996670513', 'buyer', NULL, '05/22/2021', '398', '432', 0, NULL, '59.103.126.124', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, 'sadsadsss', '2323232233322', '22221213213', NULL, NULL, 1, 'completed', 'completed', NULL, '$2y$10$1nuuDuxM1FglRsdq/mM1jui8.1e/wxbC4AbI/DXZK9tPtSxc8xipa', 'active', 'online', NULL, 0, NULL, 1, 'JegZaCpKGQf6Kop0j2LWtehMotmT2AqdOffa4tr1KfyEv4JqhZPvMTKqUxym', 'ez8ohFDDQy-ss0TPpnIunr:APA91bEQyKeFLYxWHYolk4SVt5SpalRyqIeRQmL_QRePnC2VjlFsGP26zPxIABUkHKXECKPS8TtaoU7zoaM0-bDtSx0OBaVsl1DgGlllv6N4f6RVR8LGFo1chjcVEylN_DQo9bcZIkjH', '2021-04-01 11:32:25', '2021-05-21 09:51:57'),
(283, 'Seller', 'emaad1706e@aptechorangi.com', 2366, '162036570901-prometeo-business-financial-consulting.__large_preview.jpg', '1122299795', 'seller', NULL, NULL, '398', '415', 0, NULL, '59.103.122.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, 'Abc@gmail.com', NULL, '3408691255', NULL, NULL, 1, 'completed', 'completed', NULL, '$2y$10$1nuuDuxM1FglRsdq/mM1jui8.1e/wxbC4AbI/DXZK9tPtSxc8xipa', 'active', 'online', NULL, 0, NULL, 1, 'FvcXyuFVaf7tCUjfRldWDmwsIek1DHhywUltejk6FWqmOVnhMOVD6aqFkgMX', NULL, '2021-04-01 11:32:33', '2021-06-07 09:37:45'),
(284, 'Admin', 'super_admin@gmail.com', NULL, 'avatar.png', '438056491', 'admin', NULL, NULL, '398', '399', 0, NULL, '59.103.126.124', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, NULL, '+453402717629', '3402717629', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$1nuuDuxM1FglRsdq/mM1jui8.1e/wxbC4AbI/DXZK9tPtSxc8xipa', 'active', 'online', NULL, 0, 'HANDYjOBS398230', 0, '471965507', NULL, '2021-04-01 11:36:15', '2021-05-20 15:25:02'),
(285, 'hihihiieeeerrrtttttddd', 'dddd@gmail.com', NULL, 'avatar.png', '1806859895', 'buyer', NULL, '2021-04-08', '402', '403', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '3408691255', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$krmkzn4JJcKFdDyuSsJbqepTWIHsIpkWd7Auc0mAV3pIqMf29DwWe', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-01 11:45:36', '2021-04-28 11:19:46'),
(286, 'Mobtesting', 'Testing@123.com', NULL, '50f1047dcd5906aaedb0f6b62f49216f.jpg', '2013245384', 'buyer', NULL, '21/2/20', '398', '432', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sadsadsss', '+9222221213213', '22221213213', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$ZVksaWSqnogZvdj/aeXYreaMW/I7qa9di7jQEHlNRKpQt4qWqE.eu', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-01 11:46:13', '2021-06-05 11:25:38'),
(287, 'Mobsellertesting', 'sellertesting@123.com', 110057, '10b7bec531e855d0fe30bfbe05621e3f.jpg', '941769448', 'seller', NULL, '12/12/1999', '456', '457', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Gulshan', '12345678', '12345678', NULL, NULL, 1, 'completed', 'completed', NULL, '$2y$10$PiBkDyLaMrQPmPPDmRcfc.mOIEE8ppiMsvQPLQbyXWuI2pUjEu/.a', 'active', 'online', NULL, 0, NULL, 1, NULL, NULL, '2021-04-01 12:22:37', '2021-05-01 08:37:54'),
(288, 'hihihiieeeerrrtttttddd', 'aposaa@gmail.com', NULL, 'avatar.png', '1806859895', 'user', NULL, '2021-04-08', '398', '399', 0, NULL, '119.159.203.204', 'Sindh', '59201', 'Asia/Karachi', 'AS17557 Pakistan Telecommunication Company Limited', NULL, 'sdaasssssssadsa', '32131321', '3408691255', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$I5p03OxSyhh/ThX5xqJRdej.4nM1g4tu5XZUYXi0jsvzvTmMUY2NK', 'active', 'online', NULL, 0, NULL, 1, NULL, NULL, '2021-04-01 22:11:34', '2021-04-28 11:19:46'),
(289, 'hihihiieeeerrrtttttddd', 'test123@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '411', '412', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '03408691255', NULL, NULL, 1, 'completed', 'completed', NULL, '$2y$10$1nuuDuxM1FglRsdq/mM1jui8.1e/wxbC4AbI/DXZK9tPtSxc8xipa', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-03 11:37:52', '2021-04-28 11:19:46'),
(290, 'hihihiieeeerrrtttttddd', 'te123@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '398', '413', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '03408691255', NULL, NULL, 1, 'completed', 'uncompleted', NULL, '$2y$10$Y.f/pPlyaEYiTr/MLwAxzuU3OT9CqwQQI9WVdGyiR296uDQgJk8RS', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-03 11:56:06', '2021-04-28 11:19:46'),
(291, 'hihihiieeeerrrtttttddd', 'te7123@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '398', '414', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '03408691255', NULL, NULL, 1, 'completed', 'uncompleted', NULL, '$2y$10$KGcJDF4I2rPdUecn50ppwekIpJZ6BaCl/q1hYTevphXuV.ewIsu2S', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-03 11:57:34', '2021-04-28 11:19:46'),
(292, 'hihihiieeeerrrtttttddd', 'tess7123@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '398', '415', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '03408691255', NULL, NULL, 1, 'completed', 'uncompleted', NULL, '$2y$10$vZVlxZ1nnNV1hiodKSHtMu4sKD1b/qmeQpv8wo/Xka9aPivYvZ9Gq', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-03 11:57:59', '2021-04-28 11:19:46'),
(293, 'hihihiieeeerrrtttttddd', 'zainmalik28978@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '398', '415', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', NULL, NULL, NULL, 1, 'completed', 'completed', NULL, NULL, 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-03 12:36:53', '2021-04-28 11:19:46'),
(294, 'hihihiieeeerrrtttttddd', 'zaynmalikvevo19@gmail.com', NULL, 'avatar.png', '294880691', 'buyer', NULL, '2021-04-08', '398', '432', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '22221213213', NULL, NULL, 1, 'completed', 'completed', NULL, '$2y$10$1nuuDuxM1FglRsdq/mM1jui8.1e/wxbC4AbI/DXZK9tPtSxc8xipa', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-03 13:04:51', '2021-04-30 08:29:21'),
(295, 'hihihiieeeerrrtttttddd', 'llai@aptechorangi.com', NULL, 'avatar.png', '1806859895', 'user', NULL, '2021-04-08', '398', '432', 0, NULL, '59.103.122.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, 'sdaasssssssadsa', '32131321', '22221213213', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$mBsgakHBb0rokPmGvQOhBuMHD6ME3YDGQdgeadic64OkReagxQGJ2', 'active', 'online', NULL, 0, 'HANDYjOBS368334', 0, NULL, NULL, '2021-04-05 09:22:51', '2021-04-28 11:19:46'),
(296, 'hihihiieeeerrrtttttddd', 'sadsadaa@gmail.com', NULL, 'avatar.png', '1806859895', 'buyer', NULL, '2021-04-08', '398', '432', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '22221213213', NULL, NULL, 1, 'completed', 'uncompleted', NULL, '$2y$10$mndD77jB.p0pnMPX3bz0UeF/HSdg0D6u7z0An9fxfjCkkxTv6f7AO', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-05 09:25:38', '2021-04-28 11:19:46'),
(297, 'hihihiieeeerrrtttttddd', 'asasasssaq@gmail.com', NULL, 'avatar.png', '1806859895', 'buyer', NULL, '2021-04-08', '402', '403', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '3408691255', NULL, NULL, 1, 'completed', 'uncompleted', NULL, '$2y$10$sZZ/tQHFW8.4HFVskk3jw.DVJ1dI3sqqo0K5kvc4BWCsv6SNMi29m', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-05 09:27:17', '2021-04-28 11:19:46'),
(298, 'hihihiieeeerrrtttttddd', 'sadsaddda@gmail.com', NULL, 'avatar.png', '1806859895', 'buyer', NULL, '2021-04-08', '421', '422', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '22221213213', NULL, NULL, 1, 'completed', 'uncompleted', NULL, '$2y$10$RIDKoyxhkDLyyN78IrKiPOFfRgC2wWAjJ7fU5DDQroYkIZPixqgES', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-05 09:32:50', '2021-04-28 11:19:46'),
(299, 'hihihiieeeerrrtttttddd', 'sadasdddda@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '423', '424', 0, 'wqwqewq.png', NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '3408691255', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, NULL, 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-05 09:45:18', '2021-04-28 11:19:46'),
(300, 'hihihiieeeerrrtttttddd', 'aaasdddadasdww@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '423', '424', 0, 'wqwqewq.png', NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '3408691255', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, NULL, 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-05 09:45:49', '2021-04-28 11:19:46'),
(301, 'hihihiieeeerrrtttttddd', 'aaaddddd@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '398', '432', 0, 'wqwqewq.png', NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '22221213213', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, NULL, 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-05 09:47:59', '2021-04-28 11:19:46'),
(302, 'hihihiieeeerrrtttttddd', 'sbnsb@gmail.com', NULL, 'avatar.png', '1806859895', 'buyer', NULL, '2021-04-08', '398', '399', 0, NULL, '59.103.126.124', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, 'sdaasssssssadsa', '32131321', '8775144455', NULL, NULL, 1, 'completed', 'completed', NULL, '$2y$10$Q7WRetyoYGkR5sWFkPwMmemtWZI7QVfs8dyA.OPetCceEiLorayg6', 'active', 'online', NULL, 0, NULL, 1, NULL, NULL, '2021-04-06 13:03:35', '2021-04-28 11:19:46'),
(303, 'hihihiieeeerrrtttttddd', '1726203764251574@fb.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '416', '418', 0, 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=1726203764251574&height=50&width=50&ext=1620387296&hash=AeTbomDKZ_l9OC_OwPU', NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '123456789', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, NULL, 'active', 'online', NULL, 0, 'HANDYjOBS585059', 0, NULL, NULL, '2021-04-07 15:35:33', '2021-04-28 11:19:46'),
(304, 'hihihiieeeerrrtttttddd', 't4tehreemfatima@gmail.com', 60, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '404', '407', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '3253645454', NULL, NULL, 1, 'completed', 'uncompleted', NULL, '$2y$10$hRj9HsgIemmp5iyyczowtOHdwyMQ5wrrvBZAT.YBqQIMN3JidbiWy', 'active', 'online', NULL, 0, NULL, 0, NULL, 'ct85EMK3TEGAjzB9u-L1Z0:APA91bFz4Jfn94yRKYHohzyBvRgqBWK__Eww7iC2UFQha1Rr3adPQAUzaaGTIFkOJ16gTSvSMgVCcA26X4HlKoUHRjp4qb_DZwfS8ouyWZx3SykZLhTn8BlWMSwNe-muwig1Bj3alZEO', '2021-04-07 15:38:14', '2021-04-28 11:19:46'),
(319, 'hihihiieeeerrrtttttddd', 'abc123@gmail.com', NULL, 'avatar.png', '1806859895', 'user', NULL, '2021-04-08', '398', '399', 0, NULL, '59.103.122.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, 'sdaasssssssadsa', '32131321', '3408691255', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$QMhQuT4/kNt6EPqmxfcxUOingVzlgCeOOLOcXI1N3fiby2g6pOtV2', 'active', 'online', NULL, 0, NULL, 1, NULL, NULL, '2021-04-09 10:36:48', '2021-04-28 11:19:46'),
(325, 'hihihiieeeerrrtttttddd', 'hr1938082@gmail.com', 20000, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '398', '415', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '3491841692', NULL, NULL, 1, 'completed', 'uncompleted', NULL, '$2y$10$QYos3T70KeuBoUS3y9iuNupLRMoosRVBfH/M7AhXHReNVMyRyZySC', 'active', 'online', NULL, 0, 'HANDYjOBS123456', 0, NULL, 'eD-5fADARZyWSR5SDr5BwB:APA91bFXBHXCQp5XMNeZorp7iVFotBFtKNEWfCQebvr0gqFgV08z47Q1I3wzyOjUQIEsIpPWxeSBPOB_LTHX05C7NvWHYI2wm9_JTXm-metUEnZ6X60r78DEMB6eU8LzLsh1XnkmiZAz', '2021-04-10 12:00:14', '2021-04-28 11:19:46'),
(326, 'hihihiieeeerrrtttttddd', 'nmnm@gmail.com', NULL, 'avatar.png', '1806859895', 'buyer', NULL, '2021-04-08', '398', '415', 0, 'https://lh3.googleusercontent.com/a-/AOh14GjVg4PkkSKTCaJ09OYWeLQbWtgCpqARgrYy6B29=s96-c', NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '491841692', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, NULL, 'active', 'online', NULL, 0, 'HANDYjOBS123456', 1, NULL, NULL, '2021-04-10 12:37:04', '2021-04-28 11:19:46'),
(327, 'hihihiieeeerrrtttttddd', '1843757419123062@fb.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '404', '430', 0, 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=1843757419123062&height=50&width=50&ext=1620637524&hash=AeTcI_IdwYfY8r_2cGw', NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '666666', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, NULL, 'active', 'online', NULL, 0, 'HANDYjOBS78512', 0, NULL, NULL, '2021-04-10 13:05:41', '2021-04-28 11:19:46'),
(328, 'hihihiieeeerrrtttttddd', 'emadakbar3@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '398', '432', 0, 'https://lh6.googleusercontent.com/-OtJFPmIYO28/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuckiLQ489aJyKij31AA69MN71FGWkg/s96-c/photo.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '22221213213', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, NULL, 'active', 'online', NULL, 0, 'HANDYjOBS224265', 0, NULL, NULL, '2021-04-10 13:38:43', '2021-04-28 11:19:46'),
(329, 'hihihiieeeerrrtttttddd', 'zain1706e@aptechorangi.com', 710, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '398', '399', 0, 'https://lh3.googleusercontent.com/a-/AOh14Gglu_rXTg0ELWzmRKcuVkbXAtY_UKg6H96KU-SWIA=s96-c', '59.103.122.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, 'sdaasssssssadsa', '32131321', NULL, NULL, NULL, 1, 'completed', 'completed', NULL, NULL, 'active', 'online', NULL, 0, NULL, 1, NULL, NULL, '2021-04-10 15:25:49', '2021-04-28 11:19:46'),
(330, 'hihihiieeeerrrtttttddd', 'iambrainless100@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '404', '435', 0, 'https://lh3.googleusercontent.com/a-/AOh14GhbyyAvp8iDnYW-5GbShc_7WChwZ6B0oGsBo1Xuaw=s96-c', NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '33333333', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, NULL, 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-12 15:55:03', '2021-04-28 11:19:46'),
(331, 'Matthew', 'akumatt2@gmail.com', NULL, 'avatar.png', '325615923', 'buyer', NULL, '1985', '404', '436', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Grøftehuset  2', '93841333', '93841333', NULL, NULL, 1, 'completed', 'uncompleted', NULL, '$2y$10$k3lICvzv80lRZoTUZ7FMFOhR6u5QwtUMpr75RSiKsDlD3LMa.fNEO', 'active', 'online', NULL, 0, 'HANDYjOBS224265', 1, NULL, 'f1ZFLIT0S0-0TaFOsNNM_1:APA91bHu5uFv-V7Y-u1ZpGa7p1Yux6Wzap9acCfYjWeeJ0tABCWAW9ssOdrewNDa5JRYEcd2nL2xIkpdNlz8LKNjTTrIYIZBG5SDvOOoVoIZm28MDc850URoKA5dH0MJudd4JT0Sevb_', '2021-04-12 16:49:34', '2021-06-09 01:25:23'),
(332, 'hihihiieeeerrrtttttddd', 'sudobee7@gmail.com', 10023, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '398', '399', 0, 'https://lh3.googleusercontent.com/-33oURxXYFvc/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucnJeB9p4COMkp37dbU6phh3jKApzA/s96-c/photo.jpg', '59.103.122.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, 'sdaasssssssadsa', '32131321', NULL, NULL, NULL, 1, 'completed', 'completed', NULL, NULL, 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-14 11:16:24', '2021-04-28 11:19:46'),
(333, 'hihihiieeeerrrtttttddd', 'newemail@gmail.com', NULL, 'avatar.png', '1806859895', 'user', NULL, '2021-04-08', '398', '399', 0, NULL, '59.103.122.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, 'sdaasssssssadsa', '32131321', '3408691255', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$3L3wU9Ukciqp6CDsBMkezOgpbEBVFDZTumMrPQUfSaz81jCaOwYwu', 'active', 'online', NULL, 0, NULL, 1, NULL, NULL, '2021-04-15 08:24:19', '2021-04-28 11:19:46'),
(334, 'hihihiieeeerrrtttttddd', 'koyaamok88@gmail.com', 21, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '398', '399', 0, 'https://lh3.googleusercontent.com/-uE2VkrmBNPs/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucmJkFfVct8jj_UfjB7UUXvltk8fpw/s96-c/photo.jpg', '59.103.122.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, 'sdaasssssssadsa', '32131321', NULL, NULL, NULL, 1, 'completed', 'completed', NULL, NULL, 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-15 08:37:59', '2021-04-28 11:19:46'),
(335, 'hihihiieeeerrrtttttddd', 'ubaidbbvkh32@gmail.com', NULL, 'avatar.png', '1806859895', 'user', NULL, '2021-04-08', '398', '399', 0, NULL, '175.107.225.31', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, 'sdaasssssssadsa', '32131321', '467878955454', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$oAMSiTBRklaMuzdiN8Cfs.Ugn0Lau3yDxoof4iGQXY18Y4/aRdUXm', 'active', 'online', NULL, 0, NULL, 1, NULL, NULL, '2021-04-16 11:14:12', '2021-04-28 11:19:46'),
(336, 'hihihiieeeerrrtttttddd', 'llaa@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '398', '399', 0, NULL, '59.103.122.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, 'sdaasssssssadsa', '32131321', '34088691255', NULL, NULL, 1, 'completed', 'completed', NULL, '$2y$10$wBGwwzlylZ1886zwnj/wh.GnenCQn52Ikx3h.1h2ptLQphwEPCCvG', 'active', 'online', NULL, 0, NULL, 1, NULL, NULL, '2021-04-17 09:48:14', '2021-04-28 11:19:46'),
(337, 'hihihiieeeerrrtttttddd', 'Wasif@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '398', '432', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '22221213213', NULL, NULL, 1, 'completed', 'uncompleted', NULL, '$2y$10$3kwsh4gX4hEzi/yqtur8B.a9orP8KVBFkj0hiGVgIIMba5tEZn9u2', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-17 11:12:43', '2021-04-28 11:19:46'),
(338, 'hihihiieeeerrrtttttddd', 'sjjjsjjs@gmail.com', NULL, 'avatar.png', '1806859895', 'user', NULL, '2021-04-08', '398', '399', 0, NULL, '59.103.122.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, 'sdaasssssssadsa', '32131321', '3408691255', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$rkJN6suoBqgnhO14wN1e1edToL0HAxM7YcPlmcq08AUd7Rqafcnf.', 'active', 'online', NULL, 0, NULL, 1, NULL, NULL, '2021-04-17 12:05:40', '2021-04-28 11:19:46'),
(339, 'hihihiieeeerrrtttttddd', 'vvv@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '398', '399', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', NULL, NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$Wd3es.qr5jctkLUK8jKhnO4xYewlsC//vt7HnACpsrzn3dPaw9.Le', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-17 12:20:29', '2021-04-28 11:19:46'),
(340, 'hihihiieeeerrrtttttddd', 'vvssssv@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '398', '399', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', NULL, NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$2diAxWLC7.5ITKe9KPrU8uEos2feXfgiPgHYEemOz8xbIwB1smTcG', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-17 12:22:44', '2021-04-28 11:19:46'),
(341, 'hihihiieeeerrrtttttddd', 'ssssaqqq@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '398', '399', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', NULL, NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$XoR3rXEZA6O8jXP9DS1Q/.3/7ArsoEkFyeDJxol8Fmlaynm7fVoki', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-17 12:23:28', '2021-04-28 11:19:46'),
(342, 'hihihiieeeerrrtttttddd', 'llaoola@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '398', '399', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', NULL, NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$PMfza.dC/.0HpJXfhRgKFOccAh/a8Xm9sePIMaMpw4uxJQQFYHyoi', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-17 12:25:40', '2021-04-28 11:19:46'),
(343, 'hihihiieeeerrrtttttddd', 'abc@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '404', '405', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '234234234', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$SAs.Iz84ZZNZYdcn.tTE9uTN71oraFdSQjN7O89oCXAUT0.kKQqbG', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-17 13:13:12', '2021-04-28 11:19:46'),
(344, 'hihihiieeeerrrtttttddd', 'asd@gmail.com', NULL, 'avatar.png', '1806859895', 'buyer', NULL, '2021-04-08', '441', '442', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '234234234', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$zwumlYcWuOCH1Z/A3yd18Odu.vcjLTKsaNS5wZy8IEWG9GWi097Sa', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-17 13:15:14', '2021-04-28 11:19:46'),
(345, 'hihihiieeeerrrtttttddd', 'llsooosk@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '441', '442', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', NULL, NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$M4CFol9nJrhwi4ncgiokLOEQMkjyrwJrI7MW/f0uozVqeN.4jpq92', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-17 13:16:59', '2021-04-28 11:19:46'),
(346, 'hihihiieeeerrrtttttddd', 'asdasd@gmail.com', NULL, 'avatar.png', '1806859895', 'buyer', NULL, '2021-04-08', '444', '445', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '234234234', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$rRjmjIPtr0zh4nYa7OCuIO1wLQYMvshPTiIpQrbiBuqsup6iG1A/C', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-17 13:19:32', '2021-04-28 11:19:46'),
(347, 'hihihiieeeerrrtttttddd', 'zain@gmail.com', NULL, 'avatar.png', '1806859895', 'buyer', NULL, '2021-04-08', '446', '447', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '123123', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$RQakJKZId0lIkqMGu3foXuhfmUHkycqwMzeaeUpTNTThmV5Zbo8cW', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-17 13:21:33', '2021-04-28 11:19:46'),
(348, 'hihihiieeeerrrtttttddd', 'mn@mnb.com', NULL, 'avatar.png', '1806859895', 'buyer', NULL, '2021-04-08', '448', '449', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '12345', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$E.AzpGpUnokJvOzs0W2vC.NOynRMJ.S5/q.tja1YpKOaw0uxSa4ly', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-17 13:24:09', '2021-04-28 11:19:46'),
(349, 'hihihiieeeerrrtttttddd', 'dsdddd@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '441', '442', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', NULL, NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$bQb.tTh.0N9TsnS8xGcYUudg5d5BAfmW8H1.s9ExvyvI.VNMfCria', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-17 13:26:33', '2021-04-28 11:19:46'),
(350, 'hihihiieeeerrrtttttddd', 'zain1@gmail.com', NULL, 'avatar.png', '1806859895', 'buyer', NULL, '2021-04-08', '450', '451', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '123123', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$iPZrIzQGu.o0QtBQIkNtoeToHoRRpMnuylWwGl1eYvee9qunvEJCy', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-17 13:29:18', '2021-04-28 11:19:46'),
(351, 'hihihiieeeerrrtttttddd', 'mn1@mnb.com', NULL, 'avatar.png', '1806859895', 'buyer', NULL, '2021-04-08', '452', '453', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '12345', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$okVlyu7ZPUm/jt6K42BS0.7FLVKXZknwbd.QV88W3nQoKKwZFXKQq', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-17 13:29:26', '2021-04-28 11:19:46'),
(352, 'hihihiieeeerrrtttttddd', 'mn2@mnb.com', NULL, 'avatar.png', '1806859895', 'buyer', NULL, '2021-04-08', '450', '451', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '12345', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$9YLgGoMxhFaYi5nKFGmEHebhox1ZnG9/CsyGc/Fm9WFMYetJeTHf6', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-17 13:29:57', '2021-04-28 11:19:46'),
(353, 'hihihiieeeerrrtttttddd', 'zain2@gmail.com', NULL, 'avatar.png', '1806859895', 'buyer', NULL, '2021-04-08', '450', '451', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '123123', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$NtGNj3wh43m2Ap3c6oAv8uqh2WV3jlwE7gOrnHGgQWNGYRNDlHEla', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-17 13:30:08', '2021-04-28 11:19:46'),
(354, 'hihihiieeeerrrtttttddd', 'maaz@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '454', '455', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '234234234', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$f7Xw6GVoUz3Qf2lZQEvqFeLOAxuZJUqdaJyICEQnUH9xvCj.kbGuC', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-17 13:32:52', '2021-04-28 11:19:46'),
(355, 'hihihiieeeerrrtttttddd', 'texerect@gmail.com', NULL, 'avatar.png', '1806859895', 'buyer', NULL, '2021-04-08', '404', '440', 0, 'https://lh3.googleusercontent.com/a-/AOh14Gg1aAtBpVSPULfYbw7iwN_mhJidoZREftepc_iB=s96-c', NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '3438908201', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, NULL, 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-21 15:22:00', '2021-04-28 11:19:46'),
(356, 'hihihiieeeerrrtttttddd', 'hasan@gmail.com', NULL, 'avatar.png', '1806859895', 'buyer', NULL, '2021-04-08', '398', '432', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '546312004', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$EBD.P7PAlsfHjI104JC/o.SkBE0jUclGfnALUDQiqPy9l9/nDjcbu', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-21 16:31:58', '2021-04-28 11:19:46'),
(357, 'hihihiieeeerrrtttttddd', 'getitallservice@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '404', '405', 0, 'https://graph.facebook.com/v3.3/1642115972845150/picture?type=normal', '77.241.128.154', 'Capital Region', '0917', 'Europe/Copenhagen', 'AS44034 Hi3G Access AB', NULL, 'sdaasssssssadsa', '32131321', NULL, NULL, NULL, 1, 'completed', 'completed', NULL, NULL, 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-21 16:50:14', '2021-05-06 12:41:26'),
(358, 'hihihiieeeerrrtttttddd', 'maazkaalam@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '404', '440', 0, 'https://lh3.googleusercontent.com/a-/AOh14GjjIFLWQ8-xjjYpL3ZZoSVMyxj2lJZaG3n8__ITQA=s96-c', NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '3464395', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, NULL, 'active', 'online', NULL, 0, NULL, 0, NULL, 'ez8ohFDDQy-ss0TPpnIunr:APA91bEQyKeFLYxWHYolk4SVt5SpalRyqIeRQmL_QRePnC2VjlFsGP26zPxIABUkHKXECKPS8TtaoU7zoaM0-bDtSx0OBaVsl1DgGlllv6N4f6RVR8LGFo1chjcVEylN_DQo9bcZIkjH', '2021-04-23 10:38:04', '2021-04-28 11:19:46'),
(359, 'hihihiieeeerrrtttttddd', 'syedmaisam978@gmail.com', NULL, 'avatar.png', '1806859895', 'buyer', NULL, '2021-04-08', '398', '432', 0, 'https://lh3.googleusercontent.com/a-/AOh14GjVg4PkkSKTCaJ09OYWeLQbWtgCpqARgrYy6B29=s96-c', NULL, NULL, NULL, NULL, NULL, NULL, 'sdaasssssssadsa', '32131321', '123456', NULL, NULL, 1, 'completed', 'completed', NULL, NULL, 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-23 16:53:15', '2021-05-06 12:37:42'),
(360, 'hihihiieeeerrrtttttddd', 'ubaidkh32@gmail.com', NULL, 'avatar.png', '1806859895', 'seller', NULL, '2021-04-08', '398', '399', 0, 'https://lh4.googleusercontent.com/-uDnv9AgIHFo/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuck7u1821jlepcXLbN7_kHNx4yAIVw/s96-c/photo.jpg', '59.103.122.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, 'sdaasssssssadsa', '32131321', NULL, NULL, NULL, 1, 'completed', 'completed', NULL, NULL, 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-04-24 12:45:45', '2021-04-28 11:19:46'),
(361, 'hihihiieeeerrrtttttddd', 'ubaidkh32@gmxxail.com', NULL, 'avatar.png', '1806859895', 'user', NULL, '2021-04-08', '398', '399', 0, NULL, '59.103.122.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, 'sdaasssssssadsa', '32131321', '1212121', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$0LlJBTrzwfK1yn0QAKwZ8OH//AltA/.uk.ceFLfFiPk5Z/2qssOUq', 'active', 'online', NULL, 0, 'HANDYjOBS454985', 0, NULL, NULL, '2021-04-24 13:13:23', '2021-04-28 11:19:46'),
(362, 'hihihiieeeerrrtttttddd', 'xyz@gmail.com', NULL, 'avatar.png', '1806859895', 'user', NULL, '2021-04-08', '398', '399', 0, NULL, '59.103.122.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, 'sdaasssssssadsa', '32131321', '3408691255', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$E99k7Gt2QMnKAg27ENnbJ.SKIXvAg13hqNIQRi5b0tRWJ5a5feg7O', 'active', 'online', NULL, 0, NULL, 1, NULL, NULL, '2021-04-28 10:34:05', '2021-04-28 11:19:46'),
(368, 'shhs', 'liil@gmail.com', NULL, 'avatar.png', '1571861539', 'user', NULL, NULL, '398', '399', 0, NULL, '59.103.122.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, NULL, '+923408691255', '3408691255', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$Qy6cyJo9eRQuELwIZEzKqOeaLKQGoYmTfNQKk0AssRhfesiRLMWLG', 'active', 'online', NULL, 0, NULL, 1, NULL, NULL, '2021-04-28 12:47:40', '2021-04-28 12:48:06'),
(372, 'hhsj', 'jkh@gmail.com', NULL, 'avatar.png', '701370628', 'seller', NULL, NULL, '398', '399', 0, NULL, '59.103.122.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, NULL, '+923408691255', '3408691255', NULL, NULL, 1, 'completed', 'completed', NULL, '$2y$10$g14SYGFJEvI4uNH652NUZeenwh1Pe51mtsYQlMikj2999IBBcQhqG', 'active', 'online', NULL, 0, NULL, 1, NULL, NULL, '2021-04-29 11:32:10', '2021-04-29 12:04:27'),
(373, 'jjsk', 'kkai@gmail.com', NULL, 'avatar.png', '950965404', 'seller', NULL, NULL, '398', '399', 0, NULL, '59.103.122.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, NULL, '+923408691255', '3408691255', NULL, NULL, 1, 'completed', 'completed', NULL, '$2y$10$7BrA/jI2ny2ZKoKi00TCcOErkfit5h/MDkgHzHYEV3VJ2ILD5vOxu', 'active', 'online', NULL, 0, NULL, 1, NULL, NULL, '2021-04-29 12:05:28', '2021-04-29 12:06:54'),
(374, 'emad', 'avc@gmail.com', NULL, 'avatar.png', '750716555', 'user', NULL, NULL, '398', '399', 0, NULL, '59.103.122.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, NULL, '+453408691255', '3408691255', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$btpkkc157lvhm2AHFNVPcelo03M4PPMzMhwKf0amQ7XSQZITPlzUG', 'active', 'online', NULL, 0, NULL, 1, NULL, NULL, '2021-05-03 10:38:32', '2021-05-03 10:38:59'),
(375, 'assd', 'ssasd@gmail.com', NULL, 'avatar.png', '1248374488', 'buyer', NULL, NULL, '398', '399', 0, NULL, '59.103.122.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, NULL, '+453408691255', '3408691255', NULL, NULL, 1, 'completed', 'completed', NULL, '$2y$10$OphdsTnQmNUtm7WtCVpU4OoarWpTmLXhl/mAdqUtOG.ydY5XyiJru', 'active', 'online', NULL, 0, NULL, 1, NULL, NULL, '2021-05-06 12:31:45', '2021-05-06 13:00:29'),
(376, 'Syed Meh Sam Naqvi', 'syedmaisam97@gmail.com', NULL, NULL, NULL, 'seller', NULL, NULL, '398', '399', 0, 'https://graph.facebook.com/v3.3/1759281170904021/picture?type=normal', '59.103.122.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'completed', 'completed', NULL, NULL, 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-05-06 12:40:17', '2021-05-06 12:41:30'),
(377, 'demo', 'bbah@gmail.com', 74, 'avatar.png', '453700790', 'seller', NULL, NULL, '398', '399', 0, NULL, '59.103.122.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, NULL, '+453408691255', '3408691255', NULL, NULL, 1, 'completed', 'completed', NULL, '$2y$10$R76gILTNahfaFwVGyBYDJeyFZtXCZoV.qWPwuburYAf47o1WuCpzW', 'active', 'online', NULL, 0, NULL, 1, NULL, NULL, '2021-05-06 13:10:18', '2021-05-06 13:42:13'),
(378, 'jjs', 'jjs@gmail.com', NULL, 'avatar.png', '1759492148', 'user', NULL, NULL, '460', '461', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '+4534008691255', '34008691255', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$nQhhjhffsam53Eo.mFz5oODMF5rWbVDlYQoJorLzfeYihSs0FwdgW', 'active', 'online', NULL, 0, NULL, 1, NULL, NULL, '2021-05-07 08:29:02', '2021-05-07 08:29:50'),
(379, 'emad', 'admin@admin.com', NULL, 'avatar.png', '1736481344', 'user', NULL, NULL, '398', '399', 0, NULL, '119.157.249.219', 'Balochistan', '89101', 'Asia/Karachi', 'AS17557 Pakistan Telecommunication Company Limited', NULL, NULL, '+453408691255', '3408691255', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$tjvjHw0DDegEw2aSn1x2EuVD3yuJ76qAYqzhLRHG2MoJbx7NmoTKG', 'active', 'online', NULL, 0, NULL, 1, 'atgqMcxEd8sgdo6fU5gsgGXko6T9TPx9ScbkFSEl82QYv0CKcXjd3WSDJg3L', NULL, '2021-05-10 11:50:55', '2021-05-10 14:31:00'),
(381, 'asdsa', 'sadas@gmail.com', NULL, 'avatar.png', '668407051', 'user', NULL, NULL, '398', '399', 0, NULL, '59.103.122.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, NULL, '+45340929321', '340929321', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$4u9b3FCp2WQ8t53pzEPBKu0kd9PvH9/u9OubC1DWZ4B27C1BH04c2', 'active', 'online', NULL, 0, 'HANDYjOBS16715', 0, NULL, NULL, '2021-05-19 10:54:14', '2021-05-19 10:54:14'),
(382, 'emad', 'jjshh@gmail.com', NULL, 'avatar.png', '1974747302', 'user', NULL, NULL, '398', '399', 0, NULL, '59.103.122.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, NULL, '+453408691255', '3408691255', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$LtuL4sfWEWtHOC3xxxgKMuuuumvcxE/jQJXr8FX7XhOcyK8Y03DDe', 'active', 'online', NULL, 0, 'HANDYjOBS489321', 0, NULL, NULL, '2021-05-24 13:53:33', '2021-05-24 13:53:33'),
(383, 'bnbnb', 'bnbbn@gmail.com', NULL, 'avatar.png', '102433535', 'user', NULL, NULL, '398', '399', 0, NULL, '175.107.219.203', 'Sindh', '59201', 'Asia/Karachi', 'AS9541 Cyber Internet Services (Pvt) Ltd.', NULL, NULL, '+923402717629', '3402717629', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$dexG059/DUjfjZj2shTTzek.PeyHjZ5n3rnU3vdFLxKRzbctxxdq2', 'active', 'online', NULL, 0, 'HANDYjOBS533903', 0, NULL, NULL, '2021-06-08 13:20:03', '2021-06-08 13:20:03'),
(384, 'hihihiieeeerrrtttttddd', 'kka@gmail.com', NULL, 'avatar.png', NULL, 'buyer', NULL, NULL, '419', '420', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3408691255', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$qVw/NHJZCsga2cMExZnQZOfe5WYkNzKqEwz7J.TxgyLHZkBfeEVg6', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-06-14 11:42:55', '2021-06-14 11:42:55'),
(385, 'hihihiieeeerrrtttttddd', 'kks@gmail.com', NULL, 'avatar.png', NULL, 'buyer', NULL, NULL, '419', '420', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3408691255', NULL, NULL, 0, 'uncompleted', 'uncompleted', NULL, '$2y$10$epW6jvcljtRwNAQLN//W3uq3BxAfQimBo/.Xq8y1El3arxqBy1QYC', 'active', 'online', NULL, 0, NULL, 0, NULL, NULL, '2021-06-14 11:43:20', '2021-06-14 11:43:20');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details`
--

CREATE TABLE `vehicle_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vehicle_type` varchar(500) NOT NULL,
  `number_plate` varchar(500) NOT NULL,
  `vehicle_brand` varchar(500) NOT NULL,
  `vehicle_model` varchar(100) DEFAULT NULL,
  `vehicle_color` varchar(500) NOT NULL,
  `vehicle_status` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_status`
--
ALTER TABLE `active_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amounts`
--
ALTER TABLE `amounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amount_statuses`
--
ALTER TABLE `amount_statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `amount_statuses_provider_id_foreign` (`provider_id`),
  ADD KEY `amount_statuses_contract_id_foreign` (`contract_id`);

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_comments_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_comments_commenter_id_foreign` (`commenter_id`);

--
-- Indexes for table `blog_details`
--
ALTER TABLE `blog_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_details_tag_ids_foreign` (`tag_ids`);

--
-- Indexes for table `blog_replies`
--
ALTER TABLE `blog_replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_views`
--
ALTER TABLE `blog_views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_views_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_views_viewer_id_foreign` (`viewer_id`);

--
-- Indexes for table `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancel_requests`
--
ALTER TABLE `cancel_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cancel_requests_req_from_foreign` (`req_from`),
  ADD KEY `cancel_requests_reciever_id_foreign` (`reciever_id`),
  ADD KEY `cancel_requests_contract_id_foreign` (`contract_id`);

--
-- Indexes for table `client_requests`
--
ALTER TABLE `client_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_details_client_id_foreign` (`client_id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contracts_buyer_id_foreign` (`buyer_id`),
  ADD KEY `contracts_sellers_id_foreign` (`sellers_id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conversations_sender_id_foreign` (`sender_id`),
  ADD KEY `conversations_reciever_id_foreign` (`reciever_id`);

--
-- Indexes for table `conversation_points`
--
ALTER TABLE `conversation_points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conversation_points_conversation_start_from_foreign` (`conversation_start_from`),
  ADD KEY `conversation_points_reciever_id_foreign` (`reciever_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed_backs`
--
ALTER TABLE `feed_backs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feed_backs_user_id_foreign` (`user_id`);

--
-- Indexes for table `gigs`
--
ALTER TABLE `gigs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gigs_user_id_foreign` (`user_id`),
  ADD KEY `gigs_service_category_foreign` (`service_category`);

--
-- Indexes for table `gig_clicks`
--
ALTER TABLE `gig_clicks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gig_clicks_click_by_foreign` (`click_by`),
  ADD KEY `gig_clicks_gig_id_foreign` (`gig_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invitations`
--
ALTER TABLE `invitations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invitations_invite_from_foreign` (`invite_from`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_user_id_foreign` (`user_id`),
  ADD KEY `invoices_buyer_id_foreign` (`buyer_id`),
  ADD KEY `invoices_contract_id_foreign` (`contract_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locations_parent_locations_foreign` (`parent_locations`);

--
-- Indexes for table `manual_bonuses`
--
ALTER TABLE `manual_bonuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manual_bonuses_user_id_foreign` (`user_id`);

--
-- Indexes for table `manual_notifications`
--
ALTER TABLE `manual_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payouts`
--
ALTER TABLE `payouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provider_details`
--
ALTER TABLE `provider_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_details_user_id_foreign` (`user_id`);

--
-- Indexes for table `remebers`
--
ALTER TABLE `remebers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `replies_provider_id_foreign` (`provider_id`),
  ADD KEY `replies_parent_comment_foreign` (`parent_comment`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_buyer_id_foreign` (`buyer_id`),
  ADD KEY `reviews_provider_id_foreign` (`provider_id`),
  ADD KEY `reviews_contract_id_foreign` (`contract_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_inboxes`
--
ALTER TABLE `support_inboxes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `support_inboxes_user_id_foreign` (`user_id`);

--
-- Indexes for table `used_amounts`
--
ALTER TABLE `used_amounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_status`
--
ALTER TABLE `active_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `amounts`
--
ALTER TABLE `amounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `amount_statuses`
--
ALTER TABLE `amount_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_details`
--
ALTER TABLE `blog_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_replies`
--
ALTER TABLE `blog_replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_views`
--
ALTER TABLE `blog_views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `bookmarks`
--
ALTER TABLE `bookmarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `cancel_requests`
--
ALTER TABLE `cancel_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `client_requests`
--
ALTER TABLE `client_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=367;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=359;

--
-- AUTO_INCREMENT for table `conversation_points`
--
ALTER TABLE `conversation_points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feed_backs`
--
ALTER TABLE `feed_backs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gigs`
--
ALTER TABLE `gigs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `gig_clicks`
--
ALTER TABLE `gig_clicks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=532;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=563;

--
-- AUTO_INCREMENT for table `invitations`
--
ALTER TABLE `invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=463;

--
-- AUTO_INCREMENT for table `manual_bonuses`
--
ALTER TABLE `manual_bonuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manual_notifications`
--
ALTER TABLE `manual_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `payouts`
--
ALTER TABLE `payouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `provider_details`
--
ALTER TABLE `provider_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `remebers`
--
ALTER TABLE `remebers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `support_inboxes`
--
ALTER TABLE `support_inboxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT for table `used_amounts`
--
ALTER TABLE `used_amounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=386;

--
-- AUTO_INCREMENT for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `amount_statuses`
--
ALTER TABLE `amount_statuses`
  ADD CONSTRAINT `amount_statuses_contract_id_foreign` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`id`),
  ADD CONSTRAINT `amount_statuses_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD CONSTRAINT `blog_comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blog_details` (`id`),
  ADD CONSTRAINT `blog_comments_commenter_id_foreign` FOREIGN KEY (`commenter_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `blog_details`
--
ALTER TABLE `blog_details`
  ADD CONSTRAINT `blog_details_tag_ids_foreign` FOREIGN KEY (`tag_ids`) REFERENCES `blog_tags` (`id`);

--
-- Constraints for table `blog_views`
--
ALTER TABLE `blog_views`
  ADD CONSTRAINT `blog_views_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blog_details` (`id`),
  ADD CONSTRAINT `blog_views_viewer_id_foreign` FOREIGN KEY (`viewer_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cancel_requests`
--
ALTER TABLE `cancel_requests`
  ADD CONSTRAINT `cancel_requests_contract_id_foreign` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`id`),
  ADD CONSTRAINT `cancel_requests_reciever_id_foreign` FOREIGN KEY (`reciever_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `cancel_requests_req_from_foreign` FOREIGN KEY (`req_from`) REFERENCES `users` (`id`);

--
-- Constraints for table `company_details`
--
ALTER TABLE `company_details`
  ADD CONSTRAINT `company_details_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `contracts`
--
ALTER TABLE `contracts`
  ADD CONSTRAINT `contracts_buyer_id_foreign` FOREIGN KEY (`buyer_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `contracts_sellers_id_foreign` FOREIGN KEY (`sellers_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `conversations`
--
ALTER TABLE `conversations`
  ADD CONSTRAINT `conversations_reciever_id_foreign` FOREIGN KEY (`reciever_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `conversations_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `conversation_points`
--
ALTER TABLE `conversation_points`
  ADD CONSTRAINT `conversation_points_conversation_start_from_foreign` FOREIGN KEY (`conversation_start_from`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `conversation_points_reciever_id_foreign` FOREIGN KEY (`reciever_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `feed_backs`
--
ALTER TABLE `feed_backs`
  ADD CONSTRAINT `feed_backs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `gigs`
--
ALTER TABLE `gigs`
  ADD CONSTRAINT `gigs_service_category_foreign` FOREIGN KEY (`service_category`) REFERENCES `services` (`id`),
  ADD CONSTRAINT `gigs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `gig_clicks`
--
ALTER TABLE `gig_clicks`
  ADD CONSTRAINT `gig_clicks_click_by_foreign` FOREIGN KEY (`click_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `gig_clicks_gig_id_foreign` FOREIGN KEY (`gig_id`) REFERENCES `gigs` (`id`);

--
-- Constraints for table `invitations`
--
ALTER TABLE `invitations`
  ADD CONSTRAINT `invitations_invite_from_foreign` FOREIGN KEY (`invite_from`) REFERENCES `users` (`id`);

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_buyer_id_foreign` FOREIGN KEY (`buyer_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `invoices_contract_id_foreign` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`id`),
  ADD CONSTRAINT `invoices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `locations_parent_locations_foreign` FOREIGN KEY (`parent_locations`) REFERENCES `locations` (`id`);

--
-- Constraints for table `manual_bonuses`
--
ALTER TABLE `manual_bonuses`
  ADD CONSTRAINT `manual_bonuses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `provider_details`
--
ALTER TABLE `provider_details`
  ADD CONSTRAINT `user_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_parent_comment_foreign` FOREIGN KEY (`parent_comment`) REFERENCES `reviews` (`id`),
  ADD CONSTRAINT `replies_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_buyer_id_foreign` FOREIGN KEY (`buyer_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reviews_contract_id_foreign` FOREIGN KEY (`contract_id`) REFERENCES `contracts` (`id`),
  ADD CONSTRAINT `reviews_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `support_inboxes`
--
ALTER TABLE `support_inboxes`
  ADD CONSTRAINT `support_inboxes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
