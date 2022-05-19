-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 08:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatting_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `id` int(11) NOT NULL,
  `block_from` int(11) NOT NULL,
  `block_to` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `comment_from` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `video_id`, `comment_from`, `comment`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'znmnz', '2020-09-28 19:37:00', '2020-09-29 02:37:00'),
(2, 3, 1, 'xnmnxm', '2020-09-28 19:37:22', '2020-09-29 02:37:22'),
(3, 3, 1, 'new', '2020-09-28 19:45:08', '2020-09-29 02:45:08'),
(4, 3, 1, 'znm', '2020-09-28 19:46:25', '2020-09-29 02:46:25'),
(5, 3, 1, 'znmnz', '2020-09-28 19:48:11', '2020-09-29 02:48:11'),
(6, 3, 1, 'nmnmn', '2020-09-28 19:56:57', '2020-09-29 02:56:57'),
(7, 3, 1, 'zbbnbz', '2020-09-28 20:00:11', '2020-09-29 03:00:11'),
(8, 3, 1, 'xnbnx', '2020-09-28 20:00:34', '2020-09-29 03:00:34'),
(9, 3, 1, 'xxnb', '2020-09-28 20:00:39', '2020-09-29 03:00:39'),
(10, 3, 1, 'zbnbz', '2020-09-28 20:02:20', '2020-09-29 03:02:20'),
(11, 3, 1, 'zbnbz', '2020-09-28 20:02:56', '2020-09-29 03:02:56'),
(12, 3, 1, 'xnmnnx', '2020-09-28 20:03:07', '2020-09-29 03:03:07'),
(13, 3, 1, 'xbnbnx', '2020-09-28 20:03:30', '2020-09-29 03:03:30'),
(14, 3, 1, 'xnmnmnx', '2020-09-28 20:05:03', '2020-09-29 03:05:03'),
(15, 3, 1, 'xnma', '2020-09-28 20:06:12', '2020-09-29 03:06:12'),
(16, 3, 1, 'xnmnx', '2020-09-28 20:21:11', '2020-09-29 03:21:11'),
(17, 3, 1, 'nmnm', '2020-09-28 20:22:14', '2020-09-29 03:22:14'),
(18, 3, 1, 'nmnmn', '2020-09-28 20:25:50', '2020-09-29 03:25:50'),
(19, 3, 1, 'bnbbnb', '2020-09-28 20:42:58', '2020-09-29 03:42:58'),
(20, 3, 1, 'bnbbnbbn', '2020-09-28 20:43:13', '2020-09-29 03:43:13'),
(21, 3, 1, 'vbvbbvbv', '2020-09-28 20:43:46', '2020-09-29 03:43:46'),
(22, 3, 1, 'nmn', '2020-09-28 20:46:50', '2020-09-29 03:46:50'),
(23, 3, 1, 'hja', '2020-09-29 05:58:00', '2020-09-29 12:58:00'),
(24, 3, 1, 'zbnbz', '2020-09-29 06:03:52', '2020-09-29 13:03:52'),
(25, 3, 1, 'zbnzbnbz', '2020-09-29 06:36:28', '2020-09-29 13:36:28'),
(26, 3, 1, 'hello', '2020-09-29 06:39:33', '2020-09-29 13:39:33'),
(27, 3, 1, 'bnb', '2020-09-29 06:42:20', '2020-09-29 13:42:20'),
(28, 3, 1, 'xnbx', '2020-09-29 06:43:12', '2020-09-29 13:43:12'),
(29, 3, 1, 'zain here', '2020-09-29 06:43:22', '2020-09-29 13:43:22'),
(30, 3, 1, 'ok', '2020-09-29 06:43:37', '2020-09-29 13:43:37'),
(31, 3, 1, 'bnbsnbs', '2020-09-29 07:56:22', '2020-09-29 14:56:22'),
(32, 3, 1, 'jsjjsjjs', '2020-09-29 08:04:36', '2020-09-29 15:04:36'),
(33, 3, 2, 'Ooo', '2020-09-29 08:06:54', '2020-09-29 15:06:54'),
(34, 2, 2, 'Nice', '2020-09-29 08:08:02', '2020-09-29 15:08:02'),
(35, 3, 2, 'Xm', '2020-09-29 13:42:39', '2020-09-29 20:42:39'),
(36, 3, 2, ',n', '2020-09-29 13:42:53', '2020-09-29 20:42:53'),
(37, 2, 1, 'sbn', '2020-09-30 13:35:49', '2020-09-30 20:35:49'),
(38, 2, 1, 'nmn', '2020-09-30 14:13:32', '2020-09-30 21:13:32'),
(39, 2, 1, 'znmnz', '2020-09-30 14:34:24', '2020-09-30 21:34:24'),
(40, 2, 2, 'Ok', '2020-10-01 08:50:15', '2020-10-01 15:50:15'),
(41, 2, 2, 'Ok', '2020-10-01 08:50:21', '2020-10-01 15:50:21'),
(42, 7, 1, 'nice videp', '2020-10-01 12:51:01', '2020-10-01 19:51:01'),
(43, 7, 1, 'wow', '2020-10-01 12:52:04', '2020-10-01 19:52:04'),
(44, 8, 1, 'OK', '2020-10-02 12:47:20', '2020-10-02 19:47:20'),
(45, 8, 1, 'SSS', '2020-10-02 12:47:26', '2020-10-02 19:47:26'),
(46, 2, 1, 'SGHHS', '2020-10-02 12:47:55', '2020-10-02 19:47:55'),
(47, 2, 1, 'SJYHJHS', '2020-10-02 12:47:58', '2020-10-02 19:47:58'),
(48, 10, 1, 'mm', '2020-10-03 16:53:04', '2020-10-03 23:53:04'),
(49, 10, 1, 'mm', '2020-10-03 16:53:19', '2020-10-03 23:53:19'),
(50, 3, 1, 'oo', '2020-10-04 08:08:38', '2020-10-04 15:08:38'),
(51, 4, 1, 'ok', '2020-10-04 08:08:47', '2020-10-04 15:08:47'),
(52, 4, 1, 'nm', '2020-10-04 08:09:01', '2020-10-04 15:09:01'),
(53, 4, 1, 'ok', '2020-10-04 08:13:26', '2020-10-04 15:13:26'),
(54, 4, 1, 'yes nice', '2020-10-04 08:13:36', '2020-10-04 15:13:36');

-- --------------------------------------------------------

--
-- Table structure for table `convertations`
--

CREATE TABLE `convertations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `mesage_for` int(11) NOT NULL,
  `message` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unread',
  `files` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `block_from` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `convertations`
--

INSERT INTO `convertations` (`id`, `user_id`, `mesage_for`, `message`, `message_status`, `files`, `block_from`, `remember_token`, `created_at`, `updated_at`) VALUES
(547, 2, 1, 'mmm', 'k', 'mm', 0, NULL, NULL, NULL),
(548, 1, 2, 'nmn', 'unread', '', NULL, NULL, '2020-10-07 02:44:57', '2020-10-07 02:44:57'),
(549, 1, 2, 'cc', 'unread', '', NULL, NULL, '2020-10-07 02:57:31', '2020-10-07 02:57:31'),
(550, 1, 2, 'nm', 'unread', '', NULL, NULL, '2020-10-07 02:58:35', '2020-10-07 02:58:35'),
(551, 1, 2, 'nm', 'unread', '', NULL, NULL, '2020-10-07 02:58:59', '2020-10-07 02:58:59'),
(552, 1, 2, 'nm', 'unread', '', NULL, NULL, '2020-10-07 02:59:03', '2020-10-07 02:59:03'),
(553, 1, 2, 'nxmn', 'unread', '', NULL, NULL, '2020-10-07 02:59:46', '2020-10-07 02:59:46'),
(554, 1, 2, 'nxmnx', 'unread', '', NULL, NULL, '2020-10-07 02:59:52', '2020-10-07 02:59:52'),
(555, 1, 2, 'xx', 'unread', '', NULL, NULL, '2020-10-07 02:59:59', '2020-10-07 02:59:59'),
(556, 1, 2, 'nmn', 'unread', '', NULL, NULL, '2020-10-07 03:03:44', '2020-10-07 03:03:44'),
(557, 2, 1, 'xnmnx', 'unread', '', NULL, NULL, '2020-10-07 03:07:20', '2020-10-07 03:07:20'),
(558, 2, 1, 'ndm', 'unread', '', NULL, NULL, '2020-10-07 03:07:32', '2020-10-07 03:07:32'),
(559, 1, 2, 'xnm', 'unread', '', NULL, NULL, '2020-10-07 03:07:58', '2020-10-07 03:07:58'),
(560, 1, 2, 'snm', 'unread', '', NULL, NULL, '2020-10-07 03:08:41', '2020-10-07 03:08:41'),
(561, 1, 2, 'bnb', 'unread', '', NULL, NULL, '2020-10-07 03:10:48', '2020-10-07 03:10:48'),
(562, 1, 2, 'snsm', 'unread', '', NULL, NULL, '2020-10-07 03:11:23', '2020-10-07 03:11:23'),
(563, 1, 2, 'nmnmn', 'unread', '', NULL, NULL, '2020-10-07 03:13:24', '2020-10-07 03:13:24'),
(564, 2, 1, 'nnmmn', 'unread', '', NULL, NULL, '2020-10-07 03:13:39', '2020-10-07 03:13:39'),
(565, 1, 2, 'bnbn', 'unread', '', NULL, NULL, '2020-10-07 03:13:43', '2020-10-07 03:13:43'),
(566, 1, 2, 'nmn', 'unread', '', NULL, NULL, '2020-10-07 03:18:35', '2020-10-07 03:18:35'),
(567, 1, 1, 'zbnzb', 'unread', '', NULL, NULL, '2020-10-16 20:03:26', '2020-10-16 20:03:26'),
(568, 1, 2, 'xbnbx', 'unread', '', NULL, NULL, '2020-10-16 20:03:36', '2020-10-16 20:03:36'),
(569, 1, 1, 'google.com', 'unread', '', NULL, NULL, '2020-10-18 00:17:00', '2020-10-18 00:17:00'),
(570, 1, 1, 'cmnc.com', 'unread', '', NULL, NULL, '2020-10-18 00:37:04', '2020-10-18 00:37:04'),
(571, 1, 1, 'google.com', 'unread', '', NULL, NULL, '2020-10-18 00:38:04', '2020-10-18 00:38:04'),
(572, 1, 1, 'google.com', 'unread', '', NULL, NULL, '2020-10-18 00:38:52', '2020-10-18 00:38:52'),
(573, 1, 1, 'google.com', 'unread', '', NULL, NULL, '2020-10-18 00:40:22', '2020-10-18 00:40:22'),
(574, 1, 1, 'google.com', 'unread', '', NULL, NULL, '2020-10-18 00:45:43', '2020-10-18 00:45:43'),
(575, 1, 1, 'google.com', 'unread', '', NULL, NULL, '2020-10-18 00:55:06', '2020-10-18 00:55:06'),
(576, 1, 1, 'xnbx', 'unread', '', NULL, NULL, '2020-10-18 00:56:26', '2020-10-18 00:56:26'),
(577, 1, 1, 'dnmdn google.com', 'unread', '', NULL, NULL, '2020-10-18 00:56:42', '2020-10-18 00:56:42'),
(578, 1, 1, 'nsmns', 'unread', '', NULL, NULL, '2020-10-18 00:57:52', '2020-10-18 00:57:52'),
(579, 1, 1, 'google.com', 'unread', '', NULL, NULL, '2020-10-18 00:57:58', '2020-10-18 00:57:58'),
(580, 1, 1, 'yhh', 'unread', '', NULL, NULL, '2020-10-22 15:21:54', '2020-10-22 15:21:54'),
(581, 1, 2, 'kk', 'unread', '1603354933user (1).png', NULL, NULL, '2020-10-22 15:22:13', '2020-10-22 15:22:13'),
(582, 1, 1, '.', 'unread', '', NULL, NULL, '2020-11-03 01:07:28', '2020-11-03 01:07:28'),
(583, 1, 1, 'the tbjbjnm', 'unread', '', NULL, NULL, '2020-11-03 01:08:27', '2020-11-03 01:08:27'),
(584, 1, 2, 'xnnbx', 'unread', '', NULL, NULL, '2020-11-03 01:27:08', '2020-11-03 01:27:08'),
(585, 1, 2, 'xbnbx', 'unread', '', NULL, NULL, '2020-11-03 01:28:54', '2020-11-03 01:28:54'),
(586, 1, 2, 'nmxnxm', 'unread', '', NULL, NULL, '2020-11-03 01:32:44', '2020-11-03 01:32:44'),
(587, 1, 2, 'xmnxmn', 'unread', '', NULL, NULL, '2020-11-03 01:33:08', '2020-11-03 01:33:08'),
(588, 1, 2, 'nxmnnmx', 'unread', '', NULL, NULL, '2020-11-03 01:35:34', '2020-11-03 01:35:34'),
(589, 1, 2, 'nxmnxmn', 'unread', '', NULL, NULL, '2020-11-03 01:36:02', '2020-11-03 01:36:02'),
(590, 1, 2, 'znbzn', 'unread', '', NULL, NULL, '2020-11-03 01:37:12', '2020-11-03 01:37:12'),
(591, 1, 2, 'cnmnmcn', 'unread', '', NULL, NULL, '2020-11-03 02:10:25', '2020-11-03 02:10:25'),
(592, 1, 2, 'cncnmnc', 'unread', '', NULL, NULL, '2020-11-03 02:12:06', '2020-11-03 02:12:06'),
(593, 1, 2, 'cncnmnc', 'unread', '', NULL, NULL, '2020-11-03 02:12:14', '2020-11-03 02:12:14'),
(594, 1, 2, 'zbzbnnbzzmnzmnz', 'unread', '', NULL, NULL, '2020-11-03 02:12:58', '2020-11-03 02:12:58'),
(595, 1, 2, 'xnmxn', 'unread', '', NULL, NULL, '2020-11-03 02:14:56', '2020-11-03 02:14:56'),
(596, 1, 2, 'xnmxnmxnxmnxmnmnx', 'unread', '', NULL, NULL, '2020-11-03 02:16:51', '2020-11-03 02:16:51'),
(597, 1, 2, 'nxbxnbnxbnbxn', 'unread', '', NULL, NULL, '2020-11-03 02:17:32', '2020-11-03 02:17:32'),
(598, 1, 2, 'sbsbsnbnsb', 'unread', '', NULL, NULL, '2020-11-03 02:18:36', '2020-11-03 02:18:36'),
(599, 1, 2, 'sbsbsnbnsb', 'unread', '', NULL, NULL, '2020-11-03 02:18:42', '2020-11-03 02:18:42'),
(600, 1, 2, 'sbsbsnbnsb', 'unread', '', NULL, NULL, '2020-11-03 02:19:24', '2020-11-03 02:19:24'),
(601, 1, 2, 'cncmnmnc', 'unread', '', NULL, NULL, '2020-11-03 02:20:17', '2020-11-03 02:20:17'),
(602, 1, 2, 'bnbnbnb', 'unread', '', NULL, NULL, '2020-11-03 02:20:56', '2020-11-03 02:20:56'),
(603, 1, 2, 'nzmnzmn', 'unread', '', NULL, NULL, '2020-11-03 02:21:57', '2020-11-03 02:21:57'),
(604, 1, 2, 'mnn', 'unread', '', NULL, NULL, '2020-11-03 02:22:46', '2020-11-03 02:22:46'),
(605, 1, 2, 'xxbxnmx', 'unread', '', NULL, NULL, '2020-11-03 02:23:11', '2020-11-03 02:23:11'),
(606, 1, 2, 'nmznmnzm', 'unread', '', NULL, NULL, '2020-11-03 02:24:19', '2020-11-03 02:24:19'),
(607, 1, 2, 'znmnzmnz', 'unread', '', NULL, NULL, '2020-11-03 02:24:28', '2020-11-03 02:24:28'),
(608, 1, 2, 'cnmcnmncnm', 'unread', '', NULL, NULL, '2020-11-03 02:24:57', '2020-11-03 02:24:57'),
(609, 1, 2, 'nmnxm', 'unread', '1604341552download (1).jfif', NULL, NULL, '2020-11-03 02:25:52', '2020-11-03 02:25:52'),
(610, 1, 2, 'xnmnx', 'unread', '', NULL, NULL, '2020-11-03 02:26:46', '2020-11-03 02:26:46'),
(611, 1, 2, 'znmznmzn', 'unread', '', NULL, NULL, '2020-11-03 02:27:12', '2020-11-03 02:27:12'),
(612, 1, 2, 'xbxnbnx', 'unread', '', NULL, NULL, '2020-11-03 02:27:23', '2020-11-03 02:27:23'),
(613, 1, 2, 'xnmxnxm', 'unread', '', NULL, NULL, '2020-11-03 02:27:43', '2020-11-03 02:27:43'),
(614, 1, 2, 'uyruyur', 'unread', '', NULL, NULL, '2020-11-03 02:28:09', '2020-11-03 02:28:09'),
(615, 1, 2, 'owpoe', 'unread', '', NULL, NULL, '2020-11-03 02:28:18', '2020-11-03 02:28:18'),
(616, 1, 2, 'xbnbx', 'unread', '1604341988download (1).jfif', NULL, NULL, '2020-11-03 02:33:08', '2020-11-03 02:33:08'),
(617, 1, 2, 'nnmmnm', 'unread', '1604343595download (1).jfif', NULL, NULL, '2020-11-03 02:59:55', '2020-11-03 02:59:55'),
(618, 1, 2, 'uuiu', 'unread', '', NULL, NULL, '2020-11-03 03:00:11', '2020-11-03 03:00:11'),
(619, 1, 2, 'hjhjhj', 'unread', '', NULL, NULL, '2020-11-03 03:00:18', '2020-11-03 03:00:18'),
(620, 1, 2, 'nnm', 'unread', '', NULL, NULL, '2020-11-03 04:20:52', '2020-11-03 04:20:52'),
(621, 1, 2, 'zain', 'unread', '', NULL, NULL, '2020-11-03 04:21:07', '2020-11-03 04:21:07'),
(622, 1, 1, 'nxbbnx', 'unread', '', NULL, NULL, '2020-11-04 01:51:46', '2020-11-04 01:51:46'),
(623, 1, 1, 'mnm', 'unread', '', NULL, NULL, '2020-11-04 01:55:02', '2020-11-04 01:55:02'),
(624, 1, 1, 'ukmnmn,', 'unread', '', NULL, NULL, '2020-11-04 01:55:10', '2020-11-04 01:55:10'),
(625, 1, 1, 'xnmnmx', 'unread', '', NULL, NULL, '2020-11-05 00:29:16', '2020-11-05 00:29:16'),
(626, 1, 2, 'hi', 'unread', '', NULL, NULL, '2020-11-07 14:23:03', '2020-11-07 14:23:03'),
(627, 1, 2, 'ok', 'unread', '', NULL, NULL, '2020-11-07 14:24:46', '2020-11-07 14:24:46'),
(628, 1, 2, 'k', 'unread', '', NULL, NULL, '2020-11-07 14:26:08', '2020-11-07 14:26:08'),
(629, 1, 2, 'OK', 'unread', '', NULL, NULL, '2020-11-07 14:44:37', '2020-11-07 14:44:37'),
(630, 1, 2, 'ok', 'unread', '', NULL, NULL, '2020-11-07 14:48:30', '2020-11-07 14:48:30'),
(631, 1, 2, 'kl', 'unread', '', NULL, NULL, '2020-11-07 14:49:08', '2020-11-07 14:49:08'),
(632, 1, 2, 'testing', 'unread', '', NULL, NULL, '2020-11-07 14:50:43', '2020-11-07 14:50:43'),
(633, 1, 2, 'okkkk', 'unread', '', NULL, NULL, '2020-11-07 14:50:51', '2020-11-07 14:50:51'),
(634, 1, 2, 'likkkk', 'unread', '', NULL, NULL, '2020-11-07 14:51:00', '2020-11-07 14:51:00'),
(635, 1, 2, 'akkk', 'unread', '', NULL, NULL, '2020-11-07 14:51:09', '2020-11-07 14:51:09'),
(636, 1, 2, 'ok', 'unread', '', NULL, NULL, '2020-11-07 16:33:38', '2020-11-07 16:33:38'),
(637, 1, 2, 'okkkk', 'unread', '', NULL, NULL, '2020-11-07 16:34:44', '2020-11-07 16:34:44'),
(638, 1, 2, 'ok', 'unread', '', NULL, NULL, '2020-11-07 19:57:55', '2020-11-07 19:57:55'),
(639, 1, 2, 'ok', 'unread', '', NULL, NULL, '2020-11-08 17:43:45', '2020-11-08 17:43:45'),
(640, 1, 2, 'nm', 'unread', '', NULL, NULL, '2020-11-08 17:50:46', '2020-11-08 17:50:46'),
(641, 1, 2, 'ok', 'unread', '', NULL, NULL, '2020-11-08 17:50:54', '2020-11-08 17:50:54'),
(642, 1, 2, 'nzmnm', 'unread', '', NULL, NULL, '2020-11-08 17:51:36', '2020-11-08 17:51:36'),
(643, 1, 2, 'ok', 'unread', '', NULL, NULL, '2020-11-08 17:52:46', '2020-11-08 17:52:46'),
(644, 1, 2, 'ok', 'unread', '', NULL, NULL, '2020-11-08 17:53:42', '2020-11-08 17:53:42'),
(645, 1, 2, 'okk', 'unread', '', NULL, NULL, '2020-11-08 17:55:05', '2020-11-08 17:55:05'),
(646, 1, 2, 'snmnms', 'unread', '', NULL, NULL, '2020-11-08 17:55:38', '2020-11-08 17:55:38'),
(647, 1, 2, 'okkk', 'unread', '', NULL, NULL, '2020-11-08 17:56:18', '2020-11-08 17:56:18'),
(648, 1, 2, 'nxmnm', 'unread', '', NULL, NULL, '2020-11-08 17:56:36', '2020-11-08 17:56:36'),
(649, 1, 2, 'akkk', 'unread', '', NULL, NULL, '2020-11-08 17:56:49', '2020-11-08 17:56:49'),
(650, 1, 2, 'nzmnmn', 'unread', '', NULL, NULL, '2020-11-08 17:57:10', '2020-11-08 17:57:10'),
(651, 1, 2, 'nmnnm', 'unread', '', NULL, NULL, '2020-11-08 20:15:41', '2020-11-08 20:15:41'),
(652, 1, 2, 'nmnnm', 'unread', '', NULL, NULL, '2020-11-08 20:15:45', '2020-11-08 20:15:45'),
(653, 1, 2, 'nmnnm', 'unread', '', NULL, NULL, '2020-11-08 20:15:49', '2020-11-08 20:15:49'),
(654, 1, 2, 'NNMNM', 'unread', '', NULL, NULL, '2020-11-08 20:16:32', '2020-11-08 20:16:32'),
(655, 1, 1, 'test', 'unread', '', NULL, NULL, '2020-11-08 20:59:28', '2020-11-08 20:59:28'),
(656, 1, 1, 'bnnnnnn', 'unread', '', NULL, NULL, '2020-11-08 21:00:17', '2020-11-08 21:00:17'),
(657, 1, 1, 'nmmmm', 'unread', '', NULL, NULL, '2020-11-08 21:00:32', '2020-11-08 21:00:32'),
(658, 1, 1, 'bnbnnn', 'unread', '', NULL, NULL, '2020-11-08 21:04:18', '2020-11-08 21:04:18'),
(659, 1, 1, 'Firebase evolved from Envolve, a prior startup founded by James Tamplin and Andrew Lee in 2011. Envolve provided developers an API that enables the integration of online chat functionality into their websites. After releasing the chat service, Tamplin and Lee found that it was being used to pass application data that were not chat messages. Developers were using Envolve to sync application data such as game state in real time across their users. Tamplin and Lee decided to separate the chat system and the real-time architecture that powered it.[3] They founded Firebase as a separate company in September 2011[4] and it launched to the public in April 2012.[5] Firebase\'s first product was the Firebase Realtime Database, an API that synchronizes application data across iOS, Android, and Web devices, and stores it on Firebase\'s cloud. The product assists software developers in building real-time, collaborative applications. In May 2012, a month after the beta launch, Firebase raised $1.1 million in seed funding from venture capitalists Flybridge Capital Partners, Greylock Partners, Founder Collective, and New Enterprise Associates.[6] In June 2013, the company further raised $5.6 million in Series A funding from Union Square Ventures and Flybridge Capital Partners.[7] In 2014, Firebase launched two products. Firebase Hosting[8] and Firebase Authentication.[9] This positioned the company as a mobile backend as a service.44444444444444444444444444444444444444', 'unread', '', NULL, NULL, '2020-11-08 21:06:16', '2020-11-08 21:06:16'),
(660, 1, 1, 'Firebase evolved from Envolve, a prior startup founded by James Tamplin and Andrew Lee in 2011. Envolve provided developers an API that enables the integration of online chat functionality into their websites. After releasing the chat service, Tamplin and Lee found that it was being used to pass application data that were not chat messages. Developers were using Envolve to sync application data such as game state in real time across their users. Tamplin and Lee decided to separate the chat system and the real-time architecture that powered it.[3] They founded Firebase as a separate company in September 2011[4] and it launched to the public in April 2012.[5] Firebase\'s first product was the Firebase Realtime Database, an API that synchronizes application data across iOS, Android, and Web devices, and stores it on Firebase\'s cloud. The product assists software developers in building real-time, collaborative applications. In May 2012, a month after the beta launch, Firebase raised $1.1 million in seed funding from venture capitalists Flybridge Capital Partners, Greylock Partners, Founder Collective, and New Enterprise Associates.[6] In June 2013, the company further raised $5.6 million in Series A funding from Union Square Ventures and Flybridge Capital Partners.[7] In 2014, Firebase launched two products. Firebase Hosting[8] and Firebase Authentication.[9] This positioned the company as a mobile backend as a service.44444444444444444444444444444444444444', 'unread', '', NULL, NULL, '2020-11-08 21:06:45', '2020-11-08 21:06:45'),
(661, 1, 1, 'bnbn', 'unread', '', NULL, NULL, '2020-11-08 21:08:02', '2020-11-08 21:08:02'),
(662, 1, 1, 'Firebase evolved from Envolve, a prior startup founded by James Tamplin and Andrew Lee in 2011. Envolve provided developers an API that enables the integration of online chat functionality into their websites. After releasing the chat service, Tamplin and Lee found that it was being used to pass application data that were not chat messages. Developers were using Envolve to sync application data such as game state in real time across their users. Tamplin and Lee decided to separate the chat system and the real-time architecture that powered it.[3] They founded Firebase as a separate company in September 2011[4] and it launched to the public in April 2012.[5] Firebase\'s first product was the Firebase Realtime Database, an API that synchronizes application data across iOS, Android, and Web devices, and stores it on Firebase\'s cloud. The product assists software developers in building real-time, collaborative applications. In May 2012, a month after the beta launch, Firebase raised $1.1 million in seed funding from venture capitalists Flybridge Capital Partners, Greylock Partners, Founder Collective, and New Enterprise Associates.[6] In June 2013, the company further raised $5.6 million in Series A funding from Union Square Ventures and Flybridge Capital Partners.[7] In 2014, Firebase launched two products. Firebase Hosting[8] and Firebase Authentication.[9] This positioned the company as a mobile backend as a service', 'unread', '', NULL, NULL, '2020-11-08 21:09:09', '2020-11-08 21:09:09'),
(663, 1, 1, 'test', 'unread', '', NULL, NULL, '2020-11-08 21:10:24', '2020-11-08 21:10:24'),
(664, 1, 1, 'tesy', 'unread', '', NULL, NULL, '2020-11-08 21:10:42', '2020-11-08 21:10:42'),
(665, 1, 1, 'nnmmm4', 'unread', '', NULL, NULL, '2020-11-08 21:11:32', '2020-11-08 21:11:32'),
(666, 1, 1, 'test', 'unread', '', NULL, NULL, '2020-11-08 21:16:24', '2020-11-08 21:16:24'),
(667, 1, 1, 'mnmnmn', 'unread', '', NULL, NULL, '2020-11-08 21:17:36', '2020-11-08 21:17:36'),
(668, 1, 1, 'test', 'unread', '', NULL, NULL, '2020-11-08 21:31:05', '2020-11-08 21:31:05'),
(669, 1, 1, 'test', 'unread', '', NULL, NULL, '2020-11-08 21:31:46', '2020-11-08 21:31:46'),
(670, 1, 1, 'bnbbnbn', 'unread', '', NULL, NULL, '2020-11-08 21:32:11', '2020-11-08 21:32:11'),
(671, 1, 1, 'bnbbnbn', 'unread', '', NULL, NULL, '2020-11-08 21:32:18', '2020-11-08 21:32:18'),
(672, 1, 1, 'test', 'unread', '', NULL, NULL, '2020-11-08 21:33:23', '2020-11-08 21:33:23'),
(673, 2, 1, 'snm', 'unread', '', NULL, NULL, '2020-11-14 02:57:10', '2020-11-14 02:57:10'),
(674, 2, 2, 'ssmnm', 'unread', '', NULL, NULL, '2020-11-19 02:36:21', '2020-11-19 02:36:21'),
(675, 2, 1, 'snsmnsmnsmnsmns', 'unread', '', NULL, NULL, '2020-11-19 02:38:31', '2020-11-19 02:38:31'),
(676, 2, 1, 'snsmnsmnsmnsmns', 'unread', '', NULL, NULL, '2020-11-19 02:38:36', '2020-11-19 02:38:36'),
(677, 2, 1, 'snsmnsmnsmnsmns', 'unread', '', NULL, NULL, '2020-11-19 02:38:41', '2020-11-19 02:38:41'),
(678, 2, 1, 'snsmnsmnsmnsmns', 'unread', '', NULL, NULL, '2020-11-19 02:38:46', '2020-11-19 02:38:46'),
(679, 2, 1, 'snsmnsmnsmnsmns', 'unread', '', NULL, NULL, '2020-11-19 02:38:51', '2020-11-19 02:38:51'),
(680, 2, 1, 'snsmnsmnsmnsmns', 'unread', '', NULL, NULL, '2020-11-19 02:38:56', '2020-11-19 02:38:56'),
(681, 2, 1, 'snsmnsmnsmnsmns', 'unread', '', NULL, NULL, '2020-11-19 02:39:02', '2020-11-19 02:39:02'),
(682, 2, 1, 'snsmnsmnsmnsmns', 'unread', '', NULL, NULL, '2020-11-19 02:39:08', '2020-11-19 02:39:08'),
(683, 2, 1, 'snsmnsmnsmnsmns', 'unread', '', NULL, NULL, '2020-11-19 02:39:13', '2020-11-19 02:39:13'),
(684, 2, 1, 'snsmnsmnsmnsmns', 'unread', '', NULL, NULL, '2020-11-19 02:39:19', '2020-11-19 02:39:19'),
(685, 2, 1, 'snsmnsmnsmnsmns', 'unread', '', NULL, NULL, '2020-11-19 02:39:23', '2020-11-19 02:39:23'),
(686, 2, 1, 'snsmnsmnsmnsmns', 'unread', '', NULL, NULL, '2020-11-19 02:39:29', '2020-11-19 02:39:29'),
(687, 2, 1, 'snsmnsmnsmnsmns', 'unread', '', NULL, NULL, '2020-11-19 02:39:34', '2020-11-19 02:39:34'),
(688, 2, 1, 'snsmnsmnsmnsmns', 'unread', '', NULL, NULL, '2020-11-19 02:39:39', '2020-11-19 02:39:39'),
(689, 2, 1, 'snsmnsmnsmnsmns', 'unread', '', NULL, NULL, '2020-11-19 02:39:44', '2020-11-19 02:39:44'),
(690, 2, 1, 'nmn', 'unread', '', NULL, NULL, '2020-11-19 02:39:57', '2020-11-19 02:39:57'),
(691, 2, 1, 'mnm', 'unread', '', NULL, NULL, '2020-11-19 02:40:06', '2020-11-19 02:40:06'),
(692, 2, 1, 'okk', 'unread', '', NULL, NULL, '2020-11-19 02:42:14', '2020-11-19 02:42:14'),
(693, 2, 1, 'nmn', 'unread', '', NULL, NULL, '2020-11-19 02:42:48', '2020-11-19 02:42:48'),
(694, 2, 1, 'nmm', 'unread', '', NULL, NULL, '2020-11-19 02:44:01', '2020-11-19 02:44:01'),
(695, 2, 1, 'nmn', 'unread', '', NULL, NULL, '2020-11-19 02:46:15', '2020-11-19 02:46:15'),
(696, 2, 1, 'nmn', 'unread', '', NULL, NULL, '2020-11-19 02:46:52', '2020-11-19 02:46:52'),
(697, 2, 1, 'anmn', 'unread', '', NULL, NULL, '2020-11-19 02:49:01', '2020-11-19 02:49:01'),
(698, 2, 1, 'nm', 'unread', '', NULL, NULL, '2020-11-19 02:55:03', '2020-11-19 02:55:03'),
(699, 2, 1, 'nmn', 'unread', '', NULL, NULL, '2020-11-19 02:55:37', '2020-11-19 02:55:37'),
(700, 2, 1, 'nm', 'unread', '', NULL, NULL, '2020-11-19 02:56:13', '2020-11-19 02:56:13'),
(701, 2, 1, 'nm', 'unread', '1605725804WhatsApp Image 2020-09-28 at 3.50.14 AM (1).jpeg', NULL, NULL, '2020-11-19 02:56:44', '2020-11-19 02:56:44'),
(702, 2, 2, '...', 'unread', '', NULL, NULL, '2020-11-22 01:32:20', '2020-11-22 01:32:20'),
(703, 2, 2, '...', 'unread', '', NULL, NULL, '2020-11-22 01:32:39', '2020-11-22 01:32:39'),
(704, 2, 1, 'test', 'unread', '', NULL, NULL, '2020-11-22 01:33:20', '2020-11-22 01:33:20'),
(705, 2, 2, 'test', 'unread', '', NULL, NULL, '2020-11-22 01:33:37', '2020-11-22 01:33:37');

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
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` int(11) NOT NULL,
  `follow_from` int(11) NOT NULL,
  `follow_to` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`id`, `follow_from`, `follow_to`, `created_at`, `updated_at`) VALUES
(4, 1, 1, '2020-09-16 18:06:25', '2020-09-17 01:06:25'),
(12, 1, 4, '2020-09-25 19:52:34', '2020-09-26 02:52:34'),
(13, 1, 2, '2020-09-26 11:55:23', '2020-09-26 18:55:23'),
(14, 6, 4, '2020-09-26 16:17:03', '2020-09-26 23:17:03'),
(15, 6, 1, '2020-09-27 14:51:24', '2020-09-27 21:51:24'),
(16, 1, 3, '2020-09-28 10:49:33', '2020-09-28 17:49:33');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator_id` bigint(11) NOT NULL,
  `group_privacy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invite_link` int(11) NOT NULL,
  `group_type` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Normal_group',
  `group_category` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `creator_id`, `group_privacy`, `group_profile_image`, `invite_link`, `group_type`, `group_category`, `created_at`, `updated_at`) VALUES
(88, 'GTA5', 8, 'public', 'gta5.jpg\r\n', 16613002, 'Normal_group', NULL, '2020-09-24 18:20:04', '2020-09-24 18:20:04'),
(154, 'PUBG', 8, 'public', 'OMEN-by-HP-Challenger-Series-Tournament-pubg-mobile.jpeg\r\n', 1506870034, 'Normal_group', NULL, '2020-09-24 19:39:42', '2020-09-24 19:39:42'),
(156, 'Fortinite', 8, 'public', 'fortnite.jpg\r\n', 242066235, 'Normal_group', NULL, '2020-09-24 19:41:19', '2020-09-24 19:41:19'),
(157, 'CallOfDuty', 6, 'public', 'OIP.jpg\r\n', 144853606, 'Normal_group', NULL, '2020-09-24 19:51:51', '2020-09-24 19:51:51'),
(158, 'test', 6, 'public', 'OMEN-by-HP-Challenger-Series-Tournament-pubg-mobile.jpeg\r\n', 1424292096, 'Normal_group', NULL, '2020-09-24 19:51:54', '2020-09-24 19:51:54'),
(159, 'test', 6, 'public', 'gta5.jpg\r\n', 582749933, 'Normal_group', NULL, '2020-09-24 19:51:58', '2020-09-24 19:51:58'),
(160, 'Fortnite', 1, 'public', 'fortnite.jpg\r\n', 1279375913, 'Game_group', 'Action', '2020-09-26 18:31:00', '2020-09-26 18:31:00'),
(161, 'Call-Of-Duty', 1, 'public', 'OIP.jpg\r\n', 591697889, 'Game_group', 'Shooter', '2020-09-29 13:44:49', '2020-09-29 13:44:49'),
(162, 'PUBG', 2, 'public', 'OMEN-by-HP-Challenger-Series-Tournament-pubg-mobile.jpeg\r\n', 712610747, 'Game_group', 'Shooter', '2020-09-29 20:39:59', '2020-09-29 20:39:59'),
(163, 'GTA5', 1, 'public', 'gta5.jpg\r\n\r\n', 47716579, 'Game_group', 'Shooter', '2020-10-02 19:49:41', '2020-10-02 19:49:41'),
(164, 'Fortnite', 1, 'public', 'fortnite.jpg', 731920449, 'Game_group', 'Shooter', '2020-10-03 20:15:13', '2020-10-03 20:15:13'),
(165, 'zbnzbnbnbnbz', 1, 'public', '1602852941food-shop-3.jpg', 1759806462, 'Normal_group', NULL, '2020-10-16 19:55:41', '2020-10-16 19:55:41'),
(166, 'first_group', 1, 'public', '1602852987gamepad.png', 893120196, 'Normal_group', NULL, '2020-10-16 19:56:27', '2020-10-16 19:56:27'),
(167, 'zbnzbnbnbnbz', 1, 'public', '1602853021food-shop-3.jpg', 640482351, 'Normal_group', NULL, '2020-10-16 19:57:01', '2020-10-16 19:57:01'),
(168, 'sjksj', 1, 'Public', '1603218873popup.jpeg', 95596031, 'Game_group', 'Shooter', '2020-10-21 01:34:33', '2020-10-21 01:34:33'),
(169, 'sjksj', 1, 'Public', '1603218909popup.jpeg', 1427202297, 'Game_group', 'Shooter', '2020-10-21 01:35:09', '2020-10-21 01:35:09'),
(170, 'a', 1, 'Public', '1603218961popup.jpeg', 583020191, 'Game_group', 'Shooter', '2020-10-21 01:36:01', '2020-10-21 01:36:01'),
(171, 'PUBG MOBILE LITE', 1, 'Public', '1603261899food-shop-4.jpg', 1422098436, 'Game_group', 'Shooter', '2020-10-21 13:31:39', '2020-10-21 13:31:39'),
(172, 'XMBX', 1, 'Public', '1603261948WhatsApp Image 2020-10-01 at 9.18.38 PM.jpeg', 586267974, 'Game_group', 'Shooter', '2020-10-21 13:32:28', '2020-10-21 13:32:28'),
(173, 'CALL OF DUTYYY 12', 1, 'Public', '1603261990WhatsApp Image 2020-10-01 at 9.18.37 PM (1).jpeg', 347581822, 'Game_group', 'Shooter', '2020-10-21 13:33:10', '2020-10-21 13:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `group_members`
--

CREATE TABLE `group_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_members` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_members`
--

INSERT INTO `group_members` (`id`, `group_id`, `group_members`, `created_at`, `updated_at`) VALUES
(185, '164', '1', '2020-10-03 20:15:13', '2020-10-03 20:15:13'),
(186, '161', '2', '2020-10-03 20:15:30', '2020-10-03 20:15:30'),
(187, '156', '1', '2020-10-04 20:54:05', '2020-10-04 20:54:05'),
(188, '165', '1', '2020-10-16 19:55:41', '2020-10-16 19:55:41'),
(189, '166', '1', '2020-10-16 19:56:27', '2020-10-16 19:56:27'),
(190, '167', '1', '2020-10-16 19:57:01', '2020-10-16 19:57:01'),
(191, '88', '1', '2020-10-22 15:46:12', '2020-10-22 15:46:12'),
(192, '161', '1', '2020-10-22 15:50:56', '2020-10-22 15:50:56'),
(193, '160', '1', '2020-11-03 00:22:18', '2020-11-03 00:22:18'),
(194, '171', '1', '2020-11-03 00:24:28', '2020-11-03 00:24:28'),
(195, '154', '2', '2020-11-16 00:34:39', '2020-11-16 00:34:39'),
(196, '161', '2', '2020-11-19 03:01:01', '2020-11-19 03:01:01'),
(197, '88', '2', '2020-11-22 00:54:33', '2020-11-22 00:54:33'),
(198, '160', '1', NULL, NULL),
(199, '161', '1', NULL, NULL),
(200, '162', '1', NULL, NULL),
(201, '163', '1', NULL, NULL),
(202, '164', '1', NULL, NULL),
(203, '165', '1', NULL, NULL),
(204, '166', '1', NULL, NULL),
(205, '167', '1', NULL, NULL),
(206, '168', '1', NULL, NULL),
(207, '169', '1', NULL, NULL),
(208, '170', '1', NULL, NULL),
(209, '171', '1', NULL, NULL),
(210, '172', '1', NULL, NULL),
(211, '173', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_messages`
--

CREATE TABLE `group_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `files` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_messages`
--

INSERT INTO `group_messages` (`id`, `group_id`, `sender_id`, `messages`, `created_at`, `updated_at`, `files`) VALUES
(1, '1', '1', 'zzjhjzh', '2020-09-07 20:09:58', '2020-09-07 20:09:58', ''),
(2, '1', '1', 'nmnmn', '2020-09-07 20:12:06', '2020-09-07 20:12:06', '');

-- --------------------------------------------------------

--
-- Table structure for table `group_wagers`
--

CREATE TABLE `group_wagers` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `event_date` varchar(100) NOT NULL,
  `game_mode` varchar(100) NOT NULL,
  `game_type` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `rounds` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_wagers`
--

INSERT INTO `group_wagers` (`id`, `group_id`, `sender_id`, `event_date`, `game_mode`, `game_type`, `description`, `rounds`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 88, 1, '2020-09-03', 'Either solo', 'pubg', 'zz', '1', '20', NULL, '2020-09-22 10:28:49', '2020-09-22 17:28:49'),
(2, 88, 1, '2020-09-03', 'Either solo', 'pubg', 'zz', '1', '20', NULL, '2020-09-22 10:30:29', '2020-09-22 17:30:29'),
(3, 88, 1, '2020-09-03', 'Either solo', 'pubg', 'zz', '1', '20', NULL, '2020-09-22 10:31:57', '2020-09-22 17:31:57'),
(4, 88, 1, '2020-09-03', 'Either solo', 'pubg', 'zz', '1', '20', NULL, '2020-09-22 10:32:10', '2020-09-22 17:32:10'),
(5, 156, 1, '2020-09-03', 'Either solo', 'pubg', 'zz', '1', '20', NULL, '2020-09-22 10:33:10', '2020-09-22 17:33:10'),
(6, 156, 1, '2020-09-14', 'Either solo', 'pubg', 'zzz', '1', '20', NULL, '2020-09-22 10:34:31', '2020-09-22 17:34:31'),
(7, 156, 1, '2020-09-06', 'Either solo', 'pubg', 'bbnbn', '1', '20', NULL, '2020-09-22 10:47:25', '2020-09-22 17:47:25'),
(8, 156, 1, '2020-10-07', 'Either solo', 'pubg', 'zz', '1', '20', NULL, '2020-09-22 10:49:34', '2020-09-22 17:49:34'),
(9, 156, 1, '2020-10-07', 'Either solo', 'pubg', 'xxxx', '1', '20', NULL, '2020-09-22 10:52:55', '2020-09-22 17:52:55'),
(10, 157, 1, '2020-09-24', 'Either solo', 'pubg', 'xx', '1', '20', NULL, '2020-09-22 11:01:37', '2020-09-22 18:01:37'),
(11, 157, 1, '2020-09-18', 'Either solo', 'pubg', 'xx', '1', '20', NULL, '2020-09-22 11:03:21', '2020-09-22 18:03:21'),
(12, 157, 1, '2020-09-26', 'Either solo', 'pubg', 'zzzz', '1', '20', NULL, '2020-09-22 11:04:37', '2020-09-22 18:04:37'),
(13, 157, 1, '2020-09-30', 'Either solo', 'pubg', 'xxx', '1', '20', NULL, '2020-09-22 11:06:30', '2020-09-22 18:06:30'),
(14, 157, 1, '2020-09-04', 'Either solo', 'pubg', 'znmnmnz', '1', '20', NULL, '2020-09-22 11:11:53', '2020-09-22 18:11:53'),
(15, 88, 1, '2020-09-11', 'Either solo', 'pubg', 'zzzz', '1', '20', NULL, '2020-09-22 11:14:00', '2020-09-22 18:14:00'),
(16, 88, 1, '2020-09-11', 'Either solo', 'Counter Strike', 'nmnmnmnmnz', '1', '100', NULL, '2020-09-22 16:08:42', '2020-09-22 23:08:42'),
(17, 88, 3, '2020-09-10', 'Either solo', 'Gta 5', 'znzmnzm', '1', '100', NULL, '2020-09-22 16:31:38', '2020-09-22 23:31:38'),
(18, 88, 1, '2020-09-24', 'Either solo', 'pubg', 'nmnmn', '3', '100', NULL, '2020-09-23 09:31:06', '2020-09-23 16:31:06'),
(19, 154, 8, '2020-09-26', 'Either solo', 'pubg', 'zzz', '1', '20', NULL, '2020-09-24 11:20:41', '2020-09-24 18:20:41'),
(20, 154, 1, '2020-10-01', 'Either solo', 'pubg', 'nmnm', '1', '20', NULL, '2020-09-24 18:00:43', '2020-09-25 01:00:43'),
(21, 164, 1, '2020-10-27', 'Either solo', 'pubg', 'kkskks', '1', '100', NULL, '2020-10-04 07:30:37', '2020-10-04 14:30:37'),
(22, 164, 1, '2020-10-17', 'Either solo', 'pubg', 'nmn', '1', '20', NULL, '2020-10-04 18:29:16', '2020-10-05 01:29:16'),
(23, 164, 1, '2020-10-28', 'Either solo', 'pubg', 'xx', '1', '20', NULL, '2020-10-16 13:02:21', '2020-10-16 20:02:21');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `like_by` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `video_id`, `like_by`, `created_at`, `updated_at`) VALUES
(34, 3, 1, '2020-09-28 08:55:08', '2020-09-28 15:55:08'),
(35, 4, 1, '2020-09-28 09:17:55', '2020-09-28 16:17:55'),
(36, 10, 1, '2020-09-28 10:52:27', '2020-09-28 17:52:27'),
(37, 7, 1, '2020-09-28 10:58:50', '2020-09-28 17:58:50'),
(38, 2, 1, '2020-09-28 11:02:20', '2020-09-28 18:02:20'),
(39, 6, 2, '2020-09-28 11:13:08', '2020-09-28 18:13:08'),
(40, 6, 3, '2020-09-28 11:14:27', '2020-09-28 18:14:27'),
(41, 6, 4, '2020-09-28 11:15:59', '2020-09-28 18:15:59'),
(42, 6, 5, '2020-09-28 11:17:11', '2020-09-28 18:17:11'),
(43, 6, 6, '2020-09-28 11:18:28', '2020-09-28 18:18:28'),
(54, 5, 1, '2020-09-28 11:40:25', '2020-09-28 18:40:25'),
(55, 6, 1, '2020-09-28 11:40:38', '2020-09-28 18:40:38'),
(56, 4, 6, '2020-09-28 16:08:51', '2020-09-28 23:08:51'),
(57, 2, 6, '2020-09-28 16:09:19', '2020-09-28 23:09:19'),
(58, 3, 6, '2020-09-28 16:09:30', '2020-09-28 23:09:30'),
(59, 5, 6, '2020-09-28 16:09:35', '2020-09-28 23:09:35'),
(60, 7, 6, '2020-09-28 16:09:41', '2020-09-28 23:09:41'),
(61, 3, 2, '2020-09-29 08:07:09', '2020-09-29 15:07:09'),
(62, 2, 2, '2020-09-29 08:07:40', '2020-09-29 15:07:40'),
(63, 8, 1, '2020-10-02 12:46:55', '2020-10-02 19:46:55');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_16_085915_chats', 2),
(5, '2020_09_03_143225_conversation', 3),
(6, '2020_09_05_202710_create_groups_table', 4),
(7, '2020_09_06_091818_create_groups_table', 5),
(8, '2020_09_06_092507_create_group_members_table', 6),
(9, '2020_09_06_100649_create_group_members_table', 7),
(10, '2020_09_07_125423_create_group_messages_table', 8);

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
('ubaidkh32@gmail.com', '$2y$10$HfmMgn4WrwjNwKAPALUA/OpbDfQWpg48yAMVkdNBpXk9Ga8ed8nQ.', '2020-10-03 16:02:16'),
('ubaidkh32@gmail.com', '$2y$10$HfmMgn4WrwjNwKAPALUA/OpbDfQWpg48yAMVkdNBpXk9Ga8ed8nQ.', '2020-10-03 16:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `replys`
--

CREATE TABLE `replys` (
  `id` bigint(20) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `reply_from` int(11) NOT NULL,
  `reply` varchar(5000) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replys`
--

INSERT INTO `replys` (`id`, `comment_id`, `reply_from`, `reply`, `created_at`, `updated_at`) VALUES
(3, 34, 1, 'nmn', '2020-09-30 18:31:25', '2020-10-01 01:31:25'),
(4, 36, 1, 'aaa', '2020-09-30 18:48:48', '2020-10-01 01:48:48'),
(5, 36, 1, 'wow another reply', '2020-09-30 19:01:34', '2020-10-01 02:01:34'),
(6, 34, 1, 'naa', '2020-09-30 19:03:03', '2020-10-01 02:03:03'),
(7, 36, 1, 'one more', '2020-09-30 19:12:37', '2020-10-01 02:12:37'),
(8, 39, 2, 'Ok', '2020-10-01 08:49:38', '2020-10-01 15:49:38'),
(9, 41, 1, 'yeah', '2020-10-01 12:52:38', '2020-10-01 19:52:38'),
(10, 41, 1, 'ok', '2020-10-01 12:52:47', '2020-10-01 19:52:47'),
(11, 36, 1, 'oii', '2020-10-04 08:08:27', '2020-10-04 15:08:27');

-- --------------------------------------------------------

--
-- Table structure for table `reportmessages`
--

CREATE TABLE `reportmessages` (
  `id` int(11) NOT NULL,
  `reporter_id` int(11) NOT NULL,
  `explain_message` varchar(5000) DEFAULT NULL,
  `flaged_message` varchar(5000) NOT NULL,
  `spammer_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'unread',
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reportmessages`
--

INSERT INTO `reportmessages` (`id`, `reporter_id`, `explain_message`, `flaged_message`, `spammer_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'ok', 'ok', 2, 'unread', '2020-11-07 11:58:18', '2020-11-07 19:58:18'),
(2, 2, 'snn', 'snm', 1, 'unread', '2020-11-13 18:57:20', '2020-11-14 02:57:20');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `poster_id` int(11) NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `poster_id`, `video`, `description`, `tags`, `status`, `created_at`, `updated_at`) VALUES
(2, 4, 'download (2).mp4', 'cbncbnb', 'bnb', '', '2020-09-12 12:06:12', '2020-09-12 12:06:12'),
(3, 4, 'download (3).mp4', 'Imut gak wkwk🤮😂', 'Pubg,GTA5,sghgshg,hsjhjhs,hjshjhjs,shjhs', '', '2020-09-12 12:45:58', '2020-09-12 12:45:58'),
(4, 4, 'download (4).mp4', 'djskdkjk', 'dsdsd', NULL, '2020-09-29 08:49:27', '2020-09-01 08:49:42'),
(5, 3, 'download (5).mp4', 'djskdkjk', 'dsdsd', '', '2020-09-06 08:49:32', '2020-09-14 08:50:12'),
(6, 3, 'download (6).mp4', 'djskdkjk', 'dsdsd', '', '2020-09-07 08:49:49', '2020-09-27 08:50:17'),
(7, 2, 'download (7).mp4', 'djskdkjk', 'dsdsd', NULL, '2020-09-15 08:49:53', '2020-11-13 08:50:23'),
(8, 1, 'download (8).mp4', 'djskdkjk', 'dsdsd', '', '2020-09-01 08:49:58', '2020-09-02 08:50:29'),
(9, 2, 'download (9).mp4', 'djskdkjk', 'dsdsd', '', '2020-09-12 08:50:02', '2020-09-30 08:50:35'),
(10, 5, 'download.mp4', 'djskdkjk', 'dsdsd', NULL, '2020-09-24 08:50:06', '2020-09-09 08:50:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mob_no` varchar(22) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addres` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkdin` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `profile_image`, `email_verified_at`, `password`, `mob_no`, `dob`, `addres`, `facebook`, `twitter`, `insta`, `linkdin`, `youtube`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zain malik', 'ubaidkh32@gmail.com', '1009202809.png', NULL, '$2y$10$NqCWpyJN90OVcjuxjNOB5ukreXFbXfPDF3Y3AthLA6Heaz6Ccwus.', '+925645645554', '2020-09-06', 'Karachi,PK', '@Facebook', 'https://twitter.com/Yourusername', '@Instagram', '@Linkedin', '0', 'Admin', 'apnHJnpLUSzSmHgAwzG8G6DRIB0m9UabN8GB5MLNwpUIWZHrK5sYVdFY17uU', '2020-08-15 19:02:14', '2020-09-28 17:09:53'),
(2, 'Ali khan', 'juhi@gmail.com', 'avatar.png', NULL, '$2y$10$pCKwlY9mfkRIYlV.7gUaD.L/dmkJal9BFHPJJJPsnIS2taHXSxKOy', '46433491', '2020-09-16', 'Karachi,PK', NULL, NULL, NULL, NULL, '0', 'user', 'bUmAQuMCQdWxfQP2P1do82A5vmbGw5H0LgzSq2vYKBAzoasGlYC4mq3TeZUb', '2020-08-16 01:10:35', '2020-09-19 18:49:51'),
(3, 'khan', 'khan@gmail.com', 'avatar.png', NULL, '$2y$10$.BVrCTYAkp.OVbgYLkUmWOOx3ZiqYwpYkXcR30Q6JwJ7w.9moGjoi', '0', '0', 'Karachi,PK', '0', '0', '0', '0', '0', 'user', 'NWyJqDFiY6KBcfiZ7mMkzCxTm2JfLZwZwBuZdhEolp8TdIOknVkqEOKJShrq', '2020-09-06 22:11:03', '2020-09-06 22:11:03'),
(4, 'zain', 'ubaidxnbxnbkh32@gmail.com', 'avatar.png', '2020-09-07 19:17:55', '$2y$10$k0CGm9IP3IVq3OSXULj5YuIfGqRCVNjjL5hOvvrBe7Ef9IzHXYiti', '034027455454', '0', 'Karachi,PK', '0', '0', '0', '0', '0', 'user', 'bn0ypNxIgEKWnhb1i0IzTfsGYYxIFeWOpT0anKtOoKxz11LlnAdSYMbjwrFW', '2020-09-14 14:35:54', '2020-09-14 14:35:54'),
(5, 'testin', 'testing@gmail.com', 'avatar.png', NULL, '$2y$10$1pIfOZLSqxDftWwv1KgIC.ZeGr.1K8nkCDnx2CpXWXkNkJYYwUxI.', NULL, NULL, 'Karachi,PK', NULL, NULL, NULL, NULL, NULL, 'user', NULL, '2020-09-16 14:33:13', '2020-09-16 14:33:13'),
(6, 'raph', 'sirsmith@gmail.com', 'avatar.png', NULL, '$2y$10$Zgc8II8oaDdkFJX13JhQ2O68zDqmrm84AtiK.KouBOYHFv72V3jKq', NULL, NULL, 'Nairobi,KE', NULL, NULL, NULL, NULL, NULL, 'user', 'MblvQA2ymcVUoVISd20GvyQk8AKjzWblo8k715fNYMYOxSCHmtIq5Dknd8li', '2020-09-16 14:43:42', '2020-09-23 15:24:12'),
(7, 'zain', 'ubaidkh32@tets.com', 'avatar.png', NULL, '$2y$10$BICLYS4aaqruygqGmvAZeOE.9cXFICrX1tiBYicFIsPrtL3OXNKC.', '034027455454', NULL, 'Karachi,PK', NULL, NULL, NULL, NULL, NULL, 'user', NULL, '2020-09-16 14:47:49', '2020-09-16 14:47:49'),
(8, 'new acc', 'ubaidzzkh32@gmail.com', 'avatar.png', NULL, '$2y$10$6uD0B5rWq9gZhCh8TeiY.OM0Pp6.rGRodvXKgXC8ikGfOMpApspdK', NULL, NULL, 'Karachi,PK', NULL, NULL, NULL, NULL, NULL, 'user', 'AbAwhq173iDP9Nxc3llj3RaKVXRWgUeqmwcVMehsS75Ol6teW9KdNy3dWaZY', '2020-09-24 17:07:54', '2020-09-24 17:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `wagers`
--

CREATE TABLE `wagers` (
  `id` int(11) NOT NULL,
  `creater_id` int(11) DEFAULT NULL,
  `reciever_id` int(11) DEFAULT NULL,
  `event_date` varchar(100) NOT NULL,
  `game_mode` varchar(100) NOT NULL,
  `game_type` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `random_id` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` varchar(100) NOT NULL,
  `rounds` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wagers`
--

INSERT INTO `wagers` (`id`, `creater_id`, `reciever_id`, `event_date`, `game_mode`, `game_type`, `description`, `status`, `random_id`, `created_at`, `updated_at`, `price`, `rounds`) VALUES
(45, 8, 1, '2020-09-07', 'Either solo', 'pubg', 'xnm', 'Decline', '1564337035', '2020-09-19 11:36:43', '2020-09-25 03:05:42', '', ''),
(46, 1, 8, '2020-09-18', 'Either solo', 'pubg', 'xbnx', 'Accept', '2085455225', '2020-09-19 11:46:07', '2020-09-25 02:54:30', '', ''),
(47, 8, 2, '2020-09-09', 'Duo', 'pubg', 'zzbnbz', NULL, '970449709', '2020-09-19 12:43:44', '2020-09-19 19:43:44', '', ''),
(48, 8, 5, '2020-09-23', 'Squad', 'Pubg', 'Hh', NULL, '676857163', '2020-09-19 12:44:20', '2020-09-19 19:44:20', '', ''),
(49, 0, 0, '2020-09-18', 'Either solo', 'Pubg', 'Aj', NULL, '602620274', '2020-09-19 12:44:52', '2020-09-19 19:44:52', '', ''),
(50, 0, 0, '2020-10-08', 'Trois', 'pubg', 'bnnbn', NULL, '1224920579', '2020-09-19 12:47:19', '2020-09-19 19:47:19', '', ''),
(51, 0, 0, '2020-10-01', 'Either solo', 'pubg', 'nmnmnm', NULL, '1981952388', '2020-09-19 12:47:41', '2020-09-19 19:47:41', '', ''),
(52, 0, 0, '2020-09-20', 'Either solo', 'pubg', 'bnbnb', NULL, '768254510', '2020-09-19 12:48:13', '2020-09-19 19:48:13', '', ''),
(53, 0, 0, '2020-09-20', 'Either solo', 'pubg', 'bnbnb', NULL, '669585919', '2020-09-19 12:48:20', '2020-09-19 19:48:20', '', ''),
(54, 0, 0, '2020-09-20', 'Either solo', 'pubg', 'bnbnb', NULL, '1624857177', '2020-09-19 12:48:48', '2020-09-19 19:48:48', '', ''),
(55, 0, 0, '2020-09-20', 'Either solo', 'pubg', 'bnbnb', NULL, '1771967865', '2020-09-19 12:49:01', '2020-09-19 19:49:01', '', ''),
(56, 0, 0, '2020-09-20', 'Either solo', 'pubg', 'bnbnb', NULL, '597159719', '2020-09-19 12:49:21', '2020-09-19 19:49:21', '', ''),
(57, 0, 0, '2020-09-16', 'Either solo', 'pubg', 'ssss', NULL, '1747093348', '2020-09-19 12:50:45', '2020-09-19 19:50:45', '', ''),
(58, 0, 0, '2020-09-03', 'Squad', 'pubg', 'nm', NULL, '1469906860', '2020-09-19 12:51:21', '2020-09-19 19:51:21', '', ''),
(59, 0, 0, '2020-09-03', 'Trois', 'pubg', 'nmn', 'Accepted', '1102767327', '2020-09-19 12:53:21', '2020-09-19 20:02:57', '', ''),
(60, NULL, NULL, '2020-09-03', 'Duo', 'pubg', 'xx', NULL, '781598509', '2020-09-19 16:40:18', '2020-09-19 23:40:18', '20', '1'),
(61, NULL, NULL, '2020-09-17', 'Either solo', 'pubg', 'nmnm', NULL, '906214630', '2020-09-19 16:47:20', '2020-09-19 23:47:20', '20', '1'),
(62, NULL, NULL, '2020-09-04', 'Either solo', 'pubg', 'znmnm', NULL, '2019616291', '2020-09-19 16:48:05', '2020-09-19 23:48:05', '20', '1'),
(63, NULL, NULL, '2020-09-03', 'Either solo', 'pubg', 'nxm', NULL, '751131488', '2020-09-19 16:49:02', '2020-09-19 23:49:02', '20', '1'),
(64, NULL, NULL, '2020-09-20', 'Either solo', 'Fortnite', 'Wager info', NULL, '1046475048', '2020-09-19 17:14:28', '2020-09-20 00:14:28', '2000 ksh', '2'),
(65, NULL, NULL, '2020-09-20', 'Either solo', 'Fortnite', 'Wager info', NULL, '829417912', '2020-09-19 17:14:32', '2020-09-20 00:14:32', '2000 ksh', '2'),
(66, NULL, NULL, '2020-09-20', 'Either solo', 'Fortnite', 'Wager info', NULL, '1500065453', '2020-09-19 17:14:33', '2020-09-20 00:14:33', '2000 ksh', '2'),
(67, NULL, NULL, '2020-09-20', 'Either solo', 'Fortnite', 'Wager info', NULL, '789642594', '2020-09-19 17:16:51', '2020-09-20 00:16:51', '2000 ksh', '2'),
(68, NULL, NULL, '2020-09-20', 'Either solo', 'Fortnite', 'Wager info', NULL, '901167828', '2020-09-19 17:17:02', '2020-09-20 00:17:02', '2000 ksh', '2'),
(69, NULL, NULL, '2020-09-20', 'Either solo', 'Fortnite', 'Fight my guy', NULL, '1519334536', '2020-09-19 17:19:41', '2020-09-20 00:19:41', '500', '1'),
(70, NULL, NULL, '2020-09-19', 'Either solo', 'Fortnite', 'Test', NULL, '928553003', '2020-09-19 17:57:54', '2020-09-20 00:57:54', '200', '1'),
(71, NULL, NULL, '2020-09-19', 'Either solo', 'Fortnite', 'Test', NULL, '1153429341', '2020-09-19 18:02:57', '2020-09-20 01:02:57', '200', '1'),
(72, NULL, NULL, '2020-09-17', 'Either solo', 'pubg', 'nmnnmnmn', NULL, '1602377461', '2020-09-19 18:12:47', '2020-09-20 01:12:47', '20', '1'),
(73, NULL, NULL, '2020-09-21', 'Either solo', 'Pubg', 'Wagers', NULL, '1455078138', '2020-09-19 18:20:13', '2020-09-20 01:20:13', '5', '1'),
(74, NULL, NULL, '2020-09-21', 'Either solo', 'Pubg h', 'Wagers', NULL, '2126429299', '2020-09-19 18:20:33', '2020-09-20 01:20:33', '5', '1'),
(75, NULL, NULL, '2020-09-24', 'Either solo', 'Fortnite', 'Tes', NULL, '389894548', '2020-09-23 04:09:25', '2020-09-23 11:09:25', '300', '1'),
(76, NULL, NULL, '2020-09-18', 'Either solo', 'pubg', 'nmnm', NULL, '1809340466', '2020-09-23 16:46:22', '2020-09-23 23:46:22', '20', '1'),
(77, NULL, NULL, '2020-10-07', 'Duo', 'pubg', 'nmnm', NULL, '104510769', '2020-09-23 16:47:36', '2020-09-23 23:47:36', '20', '1'),
(78, NULL, NULL, '2020-10-03', 'Either solo', 'pubg', 'mm', NULL, '62079334', '2020-09-23 16:52:42', '2020-09-23 23:52:42', '20', '1'),
(79, NULL, NULL, '2020-09-19', 'Either solo', 'pubg', 'xxx', NULL, '1023029724', '2020-09-23 16:54:51', '2020-09-23 23:54:51', '20', '1'),
(80, NULL, NULL, '2020-09-18', 'Either solo', 'pubg', 'Sss', NULL, '1354223074', '2020-09-24 17:28:27', '2020-09-25 00:28:27', '5', '1'),
(81, NULL, NULL, '2020-10-07', 'Either solo', 'pubg', 'nmn', NULL, '89354396', '2020-09-28 09:58:03', '2020-09-28 16:58:03', '20', '1'),
(82, NULL, NULL, '2020-10-04', 'Either solo', 'pubg', 'Test', NULL, '138274172', '2020-10-04 14:06:54', '2020-10-04 21:06:54', '20', '1'),
(83, NULL, NULL, '2020-10-23', 'Either solo', 'pubg', 'x', NULL, '1581134378', '2020-10-04 14:35:55', '2020-10-04 21:35:55', '100', '1'),
(84, NULL, NULL, '2020-10-11', 'Either solo', 'pubg', 'nmn', NULL, '2074404073', '2020-10-04 18:30:48', '2020-10-05 01:30:48', '20', '2'),
(85, NULL, NULL, '2020-09-29', 'Either solo', 'pubg', 'xxx', NULL, '1896758704', '2020-10-16 13:06:24', '2020-10-16 20:06:24', '20', '1'),
(86, 1, 1, '2020-11-05', 'Either solo', 'Fortnite', 'test', NULL, '727585564', '2020-11-02 17:10:50', '2020-11-03 01:10:50', '20', '1');

-- --------------------------------------------------------

--
-- Table structure for table `wager_actions`
--

CREATE TABLE `wager_actions` (
  `id` int(11) NOT NULL,
  `wager_id` int(11) NOT NULL,
  `action_from` bigint(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wager_actions`
--

INSERT INTO `wager_actions` (`id`, `wager_id`, `action_from`, `action`, `created_at`, `updated_at`) VALUES
(5, 19, 1, 'Accept', '2020-09-25 09:41:27', '2020-09-25 16:41:27'),
(6, 19, 6, 'Accept', '2020-09-26 05:02:02', '2020-09-26 12:02:02'),
(7, 21, 1, 'Accept', '2020-10-04 07:30:50', '2020-10-04 14:30:50'),
(8, 22, 1, 'Accept', '2020-10-04 18:29:38', '2020-10-05 01:29:38'),
(9, 23, 1, 'Accept', '2020-10-16 13:03:02', '2020-10-16 20:03:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `convertations`
--
ALTER TABLE `convertations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_members`
--
ALTER TABLE `group_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_messages`
--
ALTER TABLE `group_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_wagers`
--
ALTER TABLE `group_wagers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
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
-- Indexes for table `replys`
--
ALTER TABLE `replys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reportmessages`
--
ALTER TABLE `reportmessages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wagers`
--
ALTER TABLE `wagers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wager_actions`
--
ALTER TABLE `wager_actions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `block`
--
ALTER TABLE `block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `convertations`
--
ALTER TABLE `convertations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=706;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `group_members`
--
ALTER TABLE `group_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `group_messages`
--
ALTER TABLE `group_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `group_wagers`
--
ALTER TABLE `group_wagers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `replys`
--
ALTER TABLE `replys`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reportmessages`
--
ALTER TABLE `reportmessages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wagers`
--
ALTER TABLE `wagers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `wager_actions`
--
ALTER TABLE `wager_actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
