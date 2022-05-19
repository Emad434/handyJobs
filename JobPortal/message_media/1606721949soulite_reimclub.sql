-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2020 at 01:44 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soulite_reimclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_settings`
--

CREATE TABLE `admin_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `welcome_text` varchar(200) NOT NULL,
  `welcome_subtitle` text NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `result_request` int(10) UNSIGNED NOT NULL COMMENT 'The max number of shots per request',
  `status_page` enum('0','1') NOT NULL DEFAULT '1' COMMENT '0 Offline, 1 Online',
  `email_verification` enum('0','1') NOT NULL COMMENT '0 Off, 1 On',
  `email_no_reply` varchar(200) NOT NULL,
  `email_admin` varchar(200) NOT NULL,
  `captcha` enum('on','off') NOT NULL DEFAULT 'on',
  `file_size_allowed` int(11) UNSIGNED NOT NULL COMMENT 'Size in Bytes',
  `google_analytics` text NOT NULL,
  `paypal_account` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `googleplus` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `google_adsense` text NOT NULL,
  `currency_symbol` char(10) NOT NULL,
  `currency_code` varchar(20) NOT NULL,
  `min_donation_amount` int(11) UNSIGNED NOT NULL,
  `min_campaign_amount` int(11) UNSIGNED NOT NULL,
  `max_campaign_amount` int(11) UNSIGNED NOT NULL,
  `payment_gateway` enum('Paypal','Stripe') NOT NULL DEFAULT 'Paypal',
  `paypal_sandbox` enum('true','false') NOT NULL DEFAULT 'true',
  `min_width_height_image` varchar(100) NOT NULL,
  `fee_donation` int(10) UNSIGNED NOT NULL,
  `auto_approve_campaigns` enum('0','1') NOT NULL DEFAULT '1',
  `stripe_secret_key` varchar(255) NOT NULL,
  `stripe_public_key` varchar(255) NOT NULL,
  `max_donation_amount` int(10) UNSIGNED NOT NULL,
  `enable_paypal` enum('0','1') NOT NULL DEFAULT '0',
  `enable_stripe` enum('0','1') NOT NULL DEFAULT '0',
  `enable_bank_transfer` enum('0','1') NOT NULL DEFAULT '0',
  `bank_swift_code` varchar(250) NOT NULL,
  `account_number` varchar(250) NOT NULL,
  `branch_name` varchar(250) NOT NULL,
  `branch_address` varchar(250) NOT NULL,
  `account_name` varchar(250) NOT NULL,
  `iban` varchar(250) NOT NULL,
  `date_format` varchar(200) NOT NULL,
  `link_privacy` varchar(200) NOT NULL,
  `link_terms` varchar(200) NOT NULL,
  `currency_position` enum('left','right') NOT NULL DEFAULT 'left',
  `facebook_login` enum('on','off') NOT NULL DEFAULT 'off',
  `google_login` enum('on','off') NOT NULL DEFAULT 'off',
  `decimal_format` enum('comma','dot') NOT NULL DEFAULT 'dot',
  `registration_active` enum('on','off') NOT NULL DEFAULT 'on',
  `color_default` varchar(100) NOT NULL,
  `version` varchar(5) NOT NULL,
  `captcha_on_donations` enum('on','off') NOT NULL DEFAULT 'on'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_settings`
--

INSERT INTO `admin_settings` (`id`, `title`, `description`, `welcome_text`, `welcome_subtitle`, `keywords`, `result_request`, `status_page`, `email_verification`, `email_no_reply`, `email_admin`, `captcha`, `file_size_allowed`, `google_analytics`, `paypal_account`, `twitter`, `facebook`, `googleplus`, `instagram`, `google_adsense`, `currency_symbol`, `currency_code`, `min_donation_amount`, `min_campaign_amount`, `max_campaign_amount`, `payment_gateway`, `paypal_sandbox`, `min_width_height_image`, `fee_donation`, `auto_approve_campaigns`, `stripe_secret_key`, `stripe_public_key`, `max_donation_amount`, `enable_paypal`, `enable_stripe`, `enable_bank_transfer`, `bank_swift_code`, `account_number`, `branch_name`, `branch_address`, `account_name`, `iban`, `date_format`, `link_privacy`, `link_terms`, `currency_position`, `facebook_login`, `google_login`, `decimal_format`, `registration_active`, `color_default`, `version`, `captcha_on_donations`) VALUES
(1, 'REIM Real Estate Investing Milennials', 'The one and only Millennial club for real estate.', 'Invest for a piece of mind', 'REIM Real Estate Investing Milennials', 'Crowdfunding,crowfund,fundme,campaign', 3, '1', '1', 'no-reply@yousite.com', 'admin@admin.com', 'off', 2048, '', 'paypal@yousite.com', 'https://www.twitter.com/', 'https://www.facebook.com/fundme', 'https://plus.google.com/', 'https://www.instagram.com/', '', '$', 'USD', 5, 100, 4294967295, 'Paypal', 'true', '800x400', 5, '1', '', '', 1000000000, '0', '0', '0', '', '', '', '', '', '', 'M d, Y', 'https://yousite.com/page/privacy', 'https://yousite.com/page/terms-of-service', 'left', 'on', 'on', 'dot', 'on', '#02cef4', '4.0', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` int(11) NOT NULL,
  `small_image` varchar(255) NOT NULL,
  `large_image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('active','pending') NOT NULL DEFAULT 'active',
  `token_id` varchar(255) NOT NULL,
  `goal` int(11) UNSIGNED NOT NULL,
  `location` varchar(200) NOT NULL,
  `finalized` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0 No 1 Yes',
  `categories_id` int(10) UNSIGNED NOT NULL,
  `featured` enum('0','1') NOT NULL DEFAULT '0',
  `deadline` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `small_image`, `large_image`, `title`, `description`, `user_id`, `date`, `status`, `token_id`, `goal`, `location`, `finalized`, `categories_id`, `featured`, `deadline`) VALUES
(1, '11606313717onewhnnjj7oeimq95jk8kf0l8vcdu9x5yrecijge.jpg', '116063137173zfvar2ayhs848hrtmytjbomfuriy7zgz1fbr7za.jpg', 'Seremban Private Resort', 'Private Resort<br>2 acres<br>Orchard with fish pond<br>Freehold<br>With nice bungalow house<br>Flat land', 1, '2020-11-25 20:15:17', 'active', 'zorwH0uUkyrmO6j5EXjNk0vfqvvXikykn0MtODQvQdETRU7ap0wYzzfbO8tRcGI4zWlJaZ1VueyXMFAZuoQgXVbiCwCJu8ZpBXPutYH4P9xWBBrnWYPcgAd7STGBHutfVk2FRR5AncJZWUa60oc8L1FHdsxD7TqieOp0WKfnEOMyQmFHJdhvykDjOF8n2TK8dWcMaHdx', 300000, 'Malaysia', '1', 17, '0', '07-08-2021'),
(2, '21606313936uhp9keifopkfhefaoxmh3groh0u2fpqokhv5sls1.jpg', '216063139364hjwsgohfr7nfhhvj3ghjufgdcyyiubnd2gr2cnd.jpg', 'Serene Heights', 'Near city centre, busy area', 2, '2020-11-25 20:18:56', 'active', '0uoAuzGTMnCQjglecbQrVnLVmYOlYJWG7KuzZuLBQFB55vZNEEszMSed0QHuZQBs5vMIZmfyj5afnA04jQDwozKyQ1pTGtmevLYREWpXIkJdMzPvBtGEKwNb0qRSvwY9EQJH7DrzQSePSN0pC16V4zQKpyVGNkFd7xgY4FQKtHJOsYQq0piUuPeR7H1I8a8sjLxuQgkI', 1000000, 'Sunway', '0', 1, '0', '16-12-2021'),
(3, '11606314135sods4uo698l5tcy4y4ntouexgwwcbnywjslcutig.jpg', '116063141353zntt1xabgivhcxpc4hrvsszrewtotlnjhgam9ju.jpg', 'Jalan Ampang Embassy Land', 'This is the more quiet part of Ampang Embassy area. The land is leasehold 99 years. Suitable for apartments projects. 2 Acres.', 1, '2020-11-25 20:22:15', 'active', 'mDyKwPnpKsWVutatN1Awz7wkgUTgkSZIl6OFaxkrqK9EksmPUT6zx6wU4oHMawVhHfPkudLg3FL2EkKSUEXiyWnKwRD9GK1KzGcbO9ufHsN41FGAaxkUmCfELZZlPq97McqxaMjXZg37MWUPfvICjxeLjgV6XTfPU4iI1GSxdLuUbOwlOEEjYEgi2XLM5484WsfpoS4v', 1000000, 'Malaysia', '0', 18, '0', '10-07-2021');

-- --------------------------------------------------------

--
-- Table structure for table `campaigns_reported`
--

CREATE TABLE `campaigns_reported` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `campaigns_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `mode` enum('on','off') NOT NULL DEFAULT 'on',
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `mode`, `image`) VALUES
(1, 'Project Development', 'ProjectDevelopment', 'on', 'ProjectDevelopment-UcWaiEq8IySuv7q7qxqyUkvpxrouIQPk.jpg'),
(2, 'Real Estate Company', 'RealEstateCompany', 'on', 'RealEstateCompany-En2QzvKHXiJxHi4ZqmEGf2s06HrKNXQT.png'),
(3, 'Investment Courses', 'InvestmentCourses', 'on', 'InvestmentCourses-OIYaiMI0GcPyCLsNbGRcpijoEyo3N8TV.png'),
(7, 'Investment Events', 'InvestmentEvents', 'on', 'InvestmentEvents-MeYBBDlFbcOfiqoiDXr3B2Ro4nDdh0o0.png'),
(10, 'Group Travel Viewing', 'GroupTravelViewing', 'on', 'GroupTravelViewing-DXRIAvwbQ9wNMP8jNfi8S78QzIMYPRSn.jpeg'),
(17, 'House Flipping', 'HouseFlipping', 'on', 'HouseFlipping-FVAc995FTKt2o6fpj9YKWiGh23vNoHcP.png'),
(18, 'Land', 'Land', 'on', 'Land-t4gTlIeS8wLekWuQKebzjVA7EMD5MvDN.jpg'),
(19, 'Buy To Rent', 'BuyToRent', 'on', 'BuyToRent-5QkzmdyY5JFhLukToZHhgHKzuVCa7Yfo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `conversation_point`
--

CREATE TABLE `conversation_point` (
  `id` int(11) NOT NULL,
  `convo_start_from` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `message` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'US', 'United States'),
(2, 'CA', 'Canada'),
(3, 'AF', 'Afghanistan'),
(4, 'AL', 'Albania'),
(5, 'DZ', 'Algeria'),
(6, 'DS', 'American Samoa'),
(7, 'AD', 'Andorra'),
(8, 'AO', 'Angola'),
(9, 'AI', 'Anguilla'),
(10, 'AQ', 'Antarctica'),
(11, 'AG', 'Antigua and/or Barbuda'),
(12, 'AR', 'Argentina'),
(13, 'AM', 'Armenia'),
(14, 'AW', 'Aruba'),
(15, 'AU', 'Australia'),
(16, 'AT', 'Austria'),
(17, 'AZ', 'Azerbaijan'),
(18, 'BS', 'Bahamas'),
(19, 'BH', 'Bahrain'),
(20, 'BD', 'Bangladesh'),
(21, 'BB', 'Barbados'),
(22, 'BY', 'Belarus'),
(23, 'BE', 'Belgium'),
(24, 'BZ', 'Belize'),
(25, 'BJ', 'Benin'),
(26, 'BM', 'Bermuda'),
(27, 'BT', 'Bhutan'),
(28, 'BO', 'Bolivia'),
(29, 'BA', 'Bosnia and Herzegovina'),
(30, 'BW', 'Botswana'),
(31, 'BV', 'Bouvet Island'),
(32, 'BR', 'Brazil'),
(33, 'IO', 'British lndian Ocean Territory'),
(34, 'BN', 'Brunei Darussalam'),
(35, 'BG', 'Bulgaria'),
(36, 'BF', 'Burkina Faso'),
(37, 'BI', 'Burundi'),
(38, 'KH', 'Cambodia'),
(39, 'CM', 'Cameroon'),
(40, 'CV', 'Cape Verde'),
(41, 'KY', 'Cayman Islands'),
(42, 'CF', 'Central African Republic'),
(43, 'TD', 'Chad'),
(44, 'CL', 'Chile'),
(45, 'CN', 'China'),
(46, 'CX', 'Christmas Island'),
(47, 'CC', 'Cocos (Keeling) Islands'),
(48, 'CO', 'Colombia'),
(49, 'KM', 'Comoros'),
(50, 'CG', 'Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'ID', 'Indonesia'),
(101, 'IR', 'Iran (Islamic Republic of)'),
(102, 'IQ', 'Iraq'),
(103, 'IE', 'Ireland'),
(104, 'IL', 'Israel'),
(105, 'IT', 'Italy'),
(106, 'CI', 'Ivory Coast'),
(107, 'JM', 'Jamaica'),
(108, 'JP', 'Japan'),
(109, 'JO', 'Jordan'),
(110, 'KZ', 'Kazakhstan'),
(111, 'KE', 'Kenya'),
(112, 'KI', 'Kiribati'),
(113, 'KP', 'Korea, Democratic People\'s Republic of'),
(114, 'KR', 'Korea, Republic of'),
(115, 'XK', 'Kosovo'),
(116, 'KW', 'Kuwait'),
(117, 'KG', 'Kyrgyzstan'),
(118, 'LA', 'Lao People\'s Democratic Republic'),
(119, 'LV', 'Latvia'),
(120, 'LB', 'Lebanon'),
(121, 'LS', 'Lesotho'),
(122, 'LR', 'Liberia'),
(123, 'LY', 'Libyan Arab Jamahiriya'),
(124, 'LI', 'Liechtenstein'),
(125, 'LT', 'Lithuania'),
(126, 'LU', 'Luxembourg'),
(127, 'MO', 'Macau'),
(128, 'MK', 'Macedonia'),
(129, 'MG', 'Madagascar'),
(130, 'MW', 'Malawi'),
(131, 'MY', 'Malaysia'),
(132, 'MV', 'Maldives'),
(133, 'ML', 'Mali'),
(134, 'MT', 'Malta'),
(135, 'MH', 'Marshall Islands'),
(136, 'MQ', 'Martinique'),
(137, 'MR', 'Mauritania'),
(138, 'MU', 'Mauritius'),
(139, 'TY', 'Mayotte'),
(140, 'MX', 'Mexico'),
(141, 'FM', 'Micronesia, Federated States of'),
(142, 'MD', 'Moldova, Republic of'),
(143, 'MC', 'Monaco'),
(144, 'MN', 'Mongolia'),
(145, 'ME', 'Montenegro'),
(146, 'MS', 'Montserrat'),
(147, 'MA', 'Morocco'),
(148, 'MZ', 'Mozambique'),
(149, 'MM', 'Myanmar'),
(150, 'NA', 'Namibia'),
(151, 'NR', 'Nauru'),
(152, 'NP', 'Nepal'),
(153, 'NL', 'Netherlands'),
(154, 'AN', 'Netherlands Antilles'),
(155, 'NC', 'New Caledonia'),
(156, 'NZ', 'New Zealand'),
(157, 'NI', 'Nicaragua'),
(158, 'NE', 'Niger'),
(159, 'NG', 'Nigeria'),
(160, 'NU', 'Niue'),
(161, 'NF', 'Norfork Island'),
(162, 'MP', 'Northern Mariana Islands'),
(163, 'NO', 'Norway'),
(164, 'OM', 'Oman'),
(165, 'PK', 'Pakistan'),
(166, 'PW', 'Palau'),
(167, 'PA', 'Panama'),
(168, 'PG', 'Papua New Guinea'),
(169, 'PY', 'Paraguay'),
(170, 'PE', 'Peru'),
(171, 'PH', 'Philippines'),
(172, 'PN', 'Pitcairn'),
(173, 'PL', 'Poland'),
(174, 'PT', 'Portugal'),
(175, 'PR', 'Puerto Rico'),
(176, 'QA', 'Qatar'),
(177, 'RE', 'Reunion'),
(178, 'RO', 'Romania'),
(179, 'RU', 'Russian Federation'),
(180, 'RW', 'Rwanda'),
(181, 'KN', 'Saint Kitts and Nevis'),
(182, 'LC', 'Saint Lucia'),
(183, 'VC', 'Saint Vincent and the Grenadines'),
(184, 'WS', 'Samoa'),
(185, 'SM', 'San Marino'),
(186, 'ST', 'Sao Tome and Principe'),
(187, 'SA', 'Saudi Arabia'),
(188, 'SN', 'Senegal'),
(189, 'RS', 'Serbia'),
(190, 'SC', 'Seychelles'),
(191, 'SL', 'Sierra Leone'),
(192, 'SG', 'Singapore'),
(193, 'SK', 'Slovakia'),
(194, 'SI', 'Slovenia'),
(195, 'SB', 'Solomon Islands'),
(196, 'SO', 'Somalia'),
(197, 'ZA', 'South Africa'),
(198, 'GS', 'South Georgia South Sandwich Islands'),
(199, 'ES', 'Spain'),
(200, 'LK', 'Sri Lanka'),
(201, 'SH', 'St. Helena'),
(202, 'PM', 'St. Pierre and Miquelon'),
(203, 'SD', 'Sudan'),
(204, 'SR', 'Suriname'),
(205, 'SJ', 'Svalbarn and Jan Mayen Islands'),
(206, 'SZ', 'Swaziland'),
(207, 'SE', 'Sweden'),
(208, 'CH', 'Switzerland'),
(209, 'SY', 'Syrian Arab Republic'),
(210, 'TW', 'Taiwan'),
(211, 'TJ', 'Tajikistan'),
(212, 'TZ', 'Tanzania, United Republic of'),
(213, 'TH', 'Thailand'),
(214, 'TG', 'Togo'),
(215, 'TK', 'Tokelau'),
(216, 'TO', 'Tonga'),
(217, 'TT', 'Trinidad and Tobago'),
(218, 'TN', 'Tunisia'),
(219, 'TR', 'Turkey'),
(220, 'TM', 'Turkmenistan'),
(221, 'TC', 'Turks and Caicos Islands'),
(222, 'TV', 'Tuvalu'),
(223, 'UG', 'Uganda'),
(224, 'UA', 'Ukraine'),
(225, 'AE', 'United Arab Emirates'),
(226, 'GB', 'United Kingdom'),
(227, 'UM', 'United States minor outlying islands'),
(228, 'UY', 'Uruguay'),
(229, 'UZ', 'Uzbekistan'),
(230, 'VU', 'Vanuatu'),
(231, 'VA', 'Vatican City State'),
(232, 'VE', 'Venezuela'),
(233, 'VN', 'Vietnam'),
(234, 'VG', 'Virgin Islands (British)'),
(235, 'VI', 'Virgin Islands (U.S.)'),
(236, 'WF', 'Wallis and Futuna Islands'),
(237, 'EH', 'Western Sahara'),
(238, 'YE', 'Yemen'),
(239, 'YU', 'Yugoslavia'),
(240, 'ZR', 'Zaire'),
(241, 'ZM', 'Zambia'),
(242, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(10) UNSIGNED NOT NULL,
  `campaigns_id` int(11) UNSIGNED NOT NULL,
  `txn_id` varchar(255) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `country` varchar(100) NOT NULL,
  `postal_code` varchar(100) NOT NULL,
  `donation` int(11) UNSIGNED NOT NULL,
  `payment_gateway` varchar(100) NOT NULL,
  `oauth_uid` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `anonymous` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0 No, 1 Yes',
  `rewards_id` int(10) UNSIGNED NOT NULL,
  `bank_swift_code` varchar(250) NOT NULL,
  `account_number` varchar(250) NOT NULL,
  `branch_name` varchar(250) NOT NULL,
  `branch_address` varchar(250) NOT NULL,
  `account_name` varchar(250) NOT NULL,
  `iban` varchar(250) NOT NULL,
  `approved` enum('0','1') NOT NULL DEFAULT '1',
  `bank_transfer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `campaigns_id` int(10) UNSIGNED NOT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `campaigns_id`, `status`, `date`) VALUES
(1, 1, 2, '1', '2020-11-25 14:25:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(100) NOT NULL,
  `show_navbar` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0 No, 1 Yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `slug`, `show_navbar`) VALUES
(3, 'Privacy Policy', '<p>Privacy Policy</p>\r\n\r\n<p>INTRODUCTION</p>\r\n\r\n<p>REIM Sdn.&nbsp;Bhd. operates iproperty.com.my (&ldquo;Website&rdquo;) across desktop, mobile, tablet and apps (including any subdomains) whilst REA Group Ltd operates the website located at rea-group.com (&ldquo;REA Group Website&rdquo;). iProperty.com Malaysia Sdn Bhd is a subsidiary of REA Group Ltd&rsquo;s group of companies (&ldquo;REA Group&rdquo;).&nbsp;REIM Sdn.&nbsp;Bhd.&nbsp; and REA Group are together known as &ldquo;REA&rdquo; or &ldquo;we&rdquo;, &ldquo;our&rdquo; and &ldquo;us&rdquo; in this Privacy Policy (unless the context requires).</p>\r\n\r\n<p>The Website is not intended for use by any persons who have not reached their legal age (e.g. minors) or, persons who are incapable of managing their own affairs or mentally incapacitated. If you fall within any of these categories then please exit the Website, immediately.&nbsp; By your continued use of the Website you warrant that you are of legal age and of sound mind to access the services/products on the Website.</p>\r\n\r\n<p>This Privacy Policy sets out the manner in which we collect, use, disclose, store, process and manage personal information. By visiting or using the Website and the REA Group Website, subscribing to our services or entering into an agreement with us in relation to the Website, you are taken to have read, and agreed to the collection, use, disclosure, storage, processing and handling of your personal information in accordance with this Privacy Policy.</p>\r\n\r\n<p>We may modify this Privacy Policy at any time. You should review this Privacy Policy periodically so that you are updated on any changes.</p>\r\n\r\n<p>RESPECTING INFORMATION PRIVACY</p>\r\n\r\n<p>We recognise the importance of protecting personal information in accordance with the Malaysia Personal Data Protection Act 2010 and any other applicable local personal data protection laws, regulations, codes of practice, guidelines or guidance notes as may be issued from time to time (as the case may be) (&ldquo;Privacy Laws&rdquo;).</p>\r\n\r\n<p>In collecting and handling personal information, we are bound by the Privacy Laws, including the personal data protection principles/ obligations in Malaysia and applicable privacy regulations.</p>\r\n\r\n<p>THE PERSONAL INFORMATION WE COLLECT ABOUT YOU</p>\r\n\r\n<p>We may collect personal information about you including, but not limited to your name, address, phone number, email, gender, occupation, personal interests and any other information provided. For some services and products, we may also collect your personal information to enable verification of your identity, including information from your passport, driver&rsquo;s licence, and health care and concession cards. If you access any of our services through a social network site&nbsp;or login to the Website using your social network credentials such as Facebook, we will collect limited information provided to us by that social network site, such as user name, site ID, profile photo and email address.</p>\r\n\r\n<p>It is mandatory for you to provide us with your name, contact information and other details marked as mandatory as requested by us. If you choose not to furnish any mandatory personal data requested or wish to withdraw your consent or significantly limit the processing of your personal data, you agree that (notwithstanding any agreement between you and us) we may not be able to provide you with our services and products.</p>\r\n\r\n<p>If you are a shareholder of REA Group, REA Group (or its services providers) may collect information about your shareholdings, banking details and tax file numbers for payment of dividends and other amounts. If you subscribe to alert services on the REA Group Website, we may collect your name and email address.</p>\r\n\r\n<p>If you submit personal information to us in relation to an employment opportunity, we may also collect information about your employment and academic history.</p>\r\n\r\n<p>We may also collect non-personal information about you including, but not limited to, data relating to your activities on the Website and REA Group Website (including IP addresses) via tracking technologies such as cookies, web beacons and measurement software or data relating to survey responses.</p>\r\n\r\n<p>You acknowledge that the personal information you provide us and which we collect from you, is your own information or information which you have been authorised to provide to us.</p>\r\n\r\n<p>HOW WE COLLECT YOUR PERSONAL INFORMATION</p>\r\n\r\n<p>We may collect personal information about you from a variety of sources including, but not limited to:</p>\r\n\r\n<p>(a) registering to use the Website or parts of them through your account on the Website;</p>\r\n\r\n<p>(b) logging in to use the Website via your social networking site (&ldquo;SNS&ldquo;) account;</p>\r\n\r\n<p>(c) subscribing to receive Alerts/e-brochures and filling in forms, applications surveys or research, participating in promotions and competitions on the Website or websites of our service providers;</p>\r\n\r\n<p>(d) contacting us or our service providers for any reason including, but not limited to, reporting a problem with the Website, requesting further services or seeking our assistance;</p>\r\n\r\n<p>(e) posting or contributing material on the Website;</p>\r\n\r\n<p>(f)&nbsp; by disclosing the information to debt collection agencies to recover any amounts you owe us; and</p>\r\n\r\n<p>(g) applying for an employment opportunity with us directly, via an SNS site (eg. LinkedIn) or through your nominated referees.</p>\r\n\r\n<p>REA Group may collect personal information about you if you:</p>\r\n\r\n<p>(a) are a shareholder of REA Group Ltd, then REA Group may collect personal information about you from third parties (including, for example, collection of information from its share or share plan registrar); and</p>\r\n\r\n<p>(b) subscribe to receive email alerts, media releases and other news relating to REA Group through the REA Group Website.</p>\r\n\r\n<p>We may also collect your personal information through our related bodies corporate, our service providers and third parties so that we may provide a better or more relevant service or product to you.</p>\r\n\r\n<p>HOW WE USE YOUR PERSONAL INFORMATION</p>\r\n\r\n<p>We use the personal information we have collected largely for the purpose of providing you with products and services that you have requested, responding to your inquiries, creating and maintaining your account and ensuring you comply and adhere to our website terms of use.</p>\r\n\r\n<p>More specifically, we may use personal information which it has collected to:</p>\r\n\r\n<p>(a) ensure that content from the Websites s presented in the most effective manner for you and for your computer;</p>\r\n\r\n<p>(b) provide a better or more relevant service or product to you, for instance by automatically populating forms on the Website when you make enquiries of selected estate agents;</p>\r\n\r\n<p>(c) combine your personal information with information that we have collected from its service providers, third parties, cookies or web beacons in order to provide you with a better or more relevant and personalised experience and to improve the quality of its products and services and the services of third parties. This includes using the information to report statistics, analyse trends, administer our services and diagnose problems.&nbsp; For example, we may combine behavioural data we have collected about you through the use of cookies or web beacons and combine it with your personal information from requests you send to us or third parties through the Website;</p>\r\n\r\n<p>(d) personalise and customise your services, experience, advertising and content that you view and engage with on the Website or the websites of our service providers and business partners;</p>\r\n\r\n<p>(e) respond to or provide you with service, products, information and assistance that you request from us;</p>\r\n\r\n<p>(f)&nbsp; contact you to conduct surveys, research and feedback about our products, services or the Website;</p>\r\n\r\n<p>(g) verify your identity when you register or log into the Website via your SNS account and remind you of your password and username;</p>\r\n\r\n<p>(h) allow you to participate in interactive features of our service, when you choose to do so;</p>\r\n\r\n<p>(i)&nbsp; help carry out our obligations arising from any contracts entered into between you and us;</p>\r\n\r\n<p>(j)&nbsp; notify you about changes to our products and services; and</p>\r\n\r\n<p>(k) use your personal information in direct marketing and/or provide your personal information to another person for gain and/or for use by that person in direct marketing as set out in the USING AND DISCLOSING YOUR PERSONAL INFORMATION FOR MARKETING PURPOSES section below.</p>\r\n\r\n<p>If all or part of this information is not provided, we may not be able to provide these services.</p>\r\n\r\n<p>If you are a shareholder of REA Group Ltd, REA Group may also use your personal information to:</p>\r\n\r\n<p>(a) communicate with, and comply with REA Group&rsquo;s legal obligations to, its shareholders, and to process payments to them; and</p>\r\n\r\n<p>(b) enable its service providers to provide it with services relating to REA Group&rsquo;s share register and group employee share plan.</p>\r\n\r\n<p>If you submit personal information to us in relation to an employment opportunity with us, we may also use your personal information to:</p>\r\n\r\n<p>(a) consider you for the position for which you have submitted your personal information to us or any other positions that are or become available in the future;</p>\r\n\r\n<p>(b) respond to you in relation to any future application you make for an employment opportunity with us; and</p>\r\n\r\n<p>(c) contact your referees in order to collect the information you have consented to us collecting about you in order to consider you for employment opportunities with us.</p>\r\n\r\n<p>USING AND DISCLOSING YOUR PERSONAL INFORMATION FOR MARKETING PURPOSES</p>\r\n\r\n<p>We may:</p>\r\n\r\n<p>(a) use your personal information (ie. your name, residential address, mobile phone number, residential phone number and email address) to provide you with information about offers, promotions, goods or services and for direct marketing real estate, investment and/or financial products/ services (and we may not so use your personal information unless we have received your consent), which we believe may be of interest to you; and</p>\r\n\r\n<p>(b) provide your personal information (including your name, residential address, mobile phone number, residential phone number and email address) to (i) real estate agents or agencies, property developers, builders, retirement community operators, landlords, financial and investment providers that have listings or advertising on the Website and which you have requested information from by submitting an enquiry; and (ii) our service providers (so that they can provide you with products or services on our behalf or products or services that you have requested directly from them, or to help us to provide you with our products or services) for gain and/or for use by that person in direct marketing real estate, investment and/or financial products/services (and we may not so provide the data unless we have received your written consent to the intended provision); and</p>\r\n\r\n<p>(c) share your information (ie. your name, residential address, mobile phone number, residential phone number and email address) with REA Group, our service providers and other third parties (who are our clients or financial services companies, investment service providers and telecommunications services providers) so that they can provide you with products or services on our behalf or help us to provide you with the requested products or services including contacting you in relation to the products or services.</p>\r\n\r\n<p>We may not so use your personal information for direct marketing or share your information with others for direct marketing unless we have received your consent. Further, we will give you the opportunity to request that your information not be used for further direct marketing in the future in our communications with you.</p>\r\n\r\n<p>WHO WE DISCLOSE YOUR PERSONAL INFORMATION TO</p>\r\n\r\n<p>We may disclose personal information to REA Group, our related bodies corporate, service providers or business partners.</p>\r\n\r\n<p>We may also disclose your personal information:</p>\r\n\r\n<p>(a) to real estate agents or agencies, property developers, builders, retirement community operators, landlords, financial and investment providers that have listings or advertising on the Website and which you have requested information from by submitting an enquiry;</p>\r\n\r\n<p>(b) to our service providers (who are our clients or financial services companies, investment service providers and telecommunications services providers), so that they can provide you with products or services on our behalf or products or services that you have requested directly from them, or to help us to provide you with our products or services (including if you are a shareholder, to share registrar and share plan management service providers). If you have subscribed to a service through the operating system on your mobile device (including, but not limited to Google&rsquo;s &ldquo;Google Now&rdquo; service), we will disclose information such as your search history to Google. You can opt out of us providing such information to Google through the operating system on your mobile device;</p>\r\n\r\n<p>(c) to third parties where you have requested information, services or products from them;</p>\r\n\r\n<p>(d) in conjunction with a sale or similar transfer of a business;</p>\r\n\r\n<p>(e) relevant public, government or regulatory authorities, our legal representatives or other concerned parties, in special situations where we have reason to believe that disclosing your personal information is necessary to help identify, contact or bring legal action against anyone damaging, injuring, or interfering (intentionally or unintentionally) with our rights or property, users or anyone else who could be harmed by such activities; and</p>\r\n\r\n<p>(f)&nbsp; where we are otherwise authorised or required by law to do so.</p>\r\n\r\n<p>If you request information from any organisation through the Website, you will need to check their privacy policy to find out how they handle your personal information. We are not responsible for the way these organisations collect, use, disclose, store, process or handle personal information you provide to them through the Website.</p>\r\n\r\n<p>DISCLOSURE AND STORAGE OF PERSONAL INFORMATION OUTSIDE YOUR COUNTRY OF RESIDENCE</p>\r\n\r\n<p>Personal information submitted by REA&rsquo;s customers and visitors to the Website and the REA Group Website may be held on servers located in in your country of residence or in the data centres of REA&rsquo;s outsourced data processors with data centres in Australia, the United States of America, Europe and Asia. We transfer data outside of your country of residence to our service providers in order to obtain secure storage, back-up and data retrieval services and to provide services. REA has implemented policies and procedures to safeguard the secure storage and processing of data with its related companies and has verified the security arrangements of its outsourced data processors. When you provide us with your personal information you give us your consent to store your personal information outside of your country of residence for the purposes described above.</p>\r\n\r\n<p>Where we have obtained your consent or taken other measures to do so, we may also share your personal information with our service providers and other third parties (who are our clients or financial services companies, investment service providers and telecommunications services providers) located outside your country of residence in accordance with the Privacy Laws so that they can provide you with any products or services requested by you, including contacting you in relation to the products or services.</p>\r\n\r\n<p>SECURITY</p>\r\n\r\n<p>We strive to ensure the security, integrity and privacy of personal information we collect. We have established safeguards and use reasonable security measures to protect your personal information from unauthorised access, modification and disclosure. Our employees, contractors, agents and service providers who provide services related to our information systems, are obliged to respect the confidentiality of any personal information held by us. We review and update our security measures in light of current technologies. Unfortunately, no data transmission over the internet can be guaranteed to be totally secure.</p>\r\n\r\n<p>CORRECTION AND ACCESS</p>\r\n\r\n<p>We will endeavour to take all reasonable steps to keep accurate and up to date, any information which we hold about you. If, at any time, you discover that information held about you is incorrect or you would like to review and confirm the accuracy of your personal information, you can contact us.</p>\r\n\r\n<p>You can also gain access to the personal information we hold about you, subject to certain exceptions provided for by law. To request access to your personal information, please contact us.</p>\r\n\r\n<p>You can also notify us to limit the processing or to cease processing of your personal information. To exercise this right, please contact us.</p>\r\n\r\n<p>COMPLAINTS RESOLUTION</p>\r\n\r\n<p>We are committed to providing its customers with a fair and responsible system for the handling of complaints.</p>\r\n\r\n<p>If at any time you have any concerns, complaints or questions in relation to your privacy or the operation of REA, please contact our Privacy Officer at +603-xxxx&nbsp;xxxx&nbsp;or&nbsp;<a href=\"mailto:privacyofficer_asia@rea-group.com\">privacyofficer_asia@rea-group.com</a>&nbsp;so that we may resolve your concerns.</p>\r\n\r\n<p>Our Privacy Officer will consider your query and endeavour to respond to you promptly.</p>\r\n\r\n<p>For more information about privacy issues and protecting your privacy</p>\r\n\r\n<ul>\r\n	<li>in Australia, visit the&nbsp;<a href=\"http://www.privacy.gov.au/\">Office of the Australian Information Commissioner&rsquo;s</a>&nbsp;website;</li>\r\n	<li>in Malaysia, visit the&nbsp;<a href=\"http://www.pdp.gov.my/index.php/en/\">Department of Personal Data Protection&rsquo;s</a></li>\r\n</ul>\r\n\r\n<p>COOKIES AND WEB BEACONS</p>\r\n\r\n<p>We use cookies, web beacons and measurement software and tools on the Website and REA Group Website and so do our services providers and third parties such as our analytics, advertising or ad serving partners. We use and disclose the information collected through the use of cookies, web beacons and measurement software and tools in accordance with this Privacy Policy. This includes using the information to report statistics, analyse trends, administer our services, diagnose problems and target and improve the quality of our products and services. We may allow other third parties to use their own cookies and web beacons to collect information about your visits to the Website and REA Group Website. We have no control over such cookies and their use.</p>\r\n\r\n<p>We may combine our cookies, information collected through the cookies and web beacons on the Website and REA Group Website with other information (including information collected by third parties using their own cookies and web beacons and providing our cookies and information to third parties) and use analytics services &ndash; to provide better or more relevant services and advertising to you on the Website, the REA Group Website and third party websites. Our service providers and other third parties may do the same in order to provide more relevant services and advertising to you through other websites that you may visit.</p>\r\n\r\n<p>COOKIE CHOICES</p>\r\n\r\n<p>If you do not want information collected through the use of cookies, web beacons or measurement software and tools, you may be able to delete or reject Cookies or some of the measurement software features through your browser or the settings section of your mobile or tablet device. Disabling these features may cause some of the functions on the Website and REA Group Website, or products and services not to work properly.</p>\r\n\r\n<p>To learn more about how we use Cookies and similar technologies, and how you can manage your preferences, visit our&nbsp;<a href=\"https://www.iproperty.com.my/cookie-policy\">Cookie Policy</a>.</p>\r\n\r\n<p>APPLICATIONS, WIDGETS OR LINKS TO OTHER WEBSITES</p>\r\n\r\n<p>We provide links to websites outside of the Website and REA Group Website, as well as to third party websites. We also allow some third parties to display widgets and applications on the Website that allow you to interact and share content including social media buttons such as Facebook share and like, Twitter, Pinterest and Google. These linked sites, applications and widgets are not under our control, and we cannot accept responsibility for the conduct of companies linked to the Website and REA Group Website, or their collection of information through these third party applications or widgets. Before disclosing your personal information on any other website, or using these applications or widgets we advise you to examine the terms and conditions of using that website and the relevant third party&rsquo;s data collection practices and controls in their privacy policy.</p>\r\n\r\n<p>USERS BASED IN THE EUROPEAN ECONOMIC AREA</p>\r\n\r\n<p>If you access the Website from the European Economic Area (&ldquo;EEA&rdquo;), you may have additional rights under the General Data Protection Regulation, being Regulation 2016/679 (&ldquo;GDPR&rdquo;) in relation to the handling of your Personal Data (as defined in Article 4 of the GDPR).</p>\r\n\r\n<p>In providing our services to you, we may monitor your activity on the Website using automated processes, including for the purposes of counting usage of the Website and creating audience profiles. We do this to provide you with more tailored and relevant services, including to show you more relevant properties.</p>\r\n\r\n<p>In addition to other rights set out in this Privacy Policy, in certain circumstances you may:</p>\r\n\r\n<p>(a) request access to Personal Data that we hold about you;</p>\r\n\r\n<p>(b) request a copy of Personal Data that that you have provided to us, in a structured electronic format;</p>\r\n\r\n<p>(c) request that we update any inaccurate Personal Data that we hold about you;</p>\r\n\r\n<p>(d) request that we restrict the processing of Personal Data that we hold about you. This enables you to ask us to suspend the processing of Personal Data, for example if you want us to establish its accuracy or the reason for processing it;</p>\r\n\r\n<p>(e) object to our processing of your Personal Data;</p>\r\n\r\n<p>(f)&nbsp; request that we delete any Personal Data that we hold about you, subject to any legal obligations we have to retain your Personal Data; and</p>\r\n\r\n<p>(g) withdraw your consent to the processing of the Personal Data that we hold about you. Once you have withdrawn your consent, we will no longer process your Personal Data for the purpose(s) you originally agreed to, unless we are required to do so by law. This will not affect the lawfulness of any processing of Personal Data based on your consent before its withdrawal.</p>\r\n\r\n<p>Where your Personal Data is transferred outside of the EEA, it will only be transferred to countries that have been identified as providing adequate protection for Personal Data, or to a third party where we have approved transfer mechanisms in place to protect your Personal Data &ndash; i.e., by entering into the European Commission&rsquo;s Standard Contractual Clauses, or by ensuring the entity is Privacy Shield certified (for transfers to US-based third parties).</p>\r\n\r\n<p>For further information or to exercise any of your rights as a EEA data subject under the GDPR, please contact&nbsp;<a href=\"mailto:privacyofficer_asia@rea-group.com\">privacyofficer_asia@rea-group.com</a>.</p>\r\n\r\n<p>&copy;REA Group Ltd</p>\r\n\r\n<p>Last updated in November 2020</p>', 'privacy', '0'),
(5, 'About us', '<p>REIM was kickstarted in the year of 2020 during times of the Covid-19 Pandamic...</p>\r\n\r\n<p>At REIM, we believe that throughout times like this. Many are&nbsp;living off their savings and struggling to survive on rent and daily expenses. At a time where our economy is flooded with job losses and stagnant cashflow. It can&nbsp;be harder to regain momentum to escape from this state for many. The founders with house flipping backgrounds, were interested to look into the area of real estate and investment.&nbsp;How do we put the both together? How do we look for investors who are interest in what we are doing? Looking at the two main issues: The high barriers&nbsp;of entry&nbsp;to invest in real estate and through harder times for developers to loan from banks.&nbsp;</p>\r\n\r\n<p>Our founders came up with this&nbsp;easy access intelligent tool, used to increase the growth&nbsp;of the real estate industry alongside investments. With the mission to help, by matching investors to campaign owners that best suit their interest and types of investments in real estate.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 'about', '0'),
(8, 'How it works', '<p>How REIM works is through this online platform, allowing access to individuals to invest within their affordable range. Meanwhile, house flippers, real estate developers of projects involving real estate can be listed in order to gather potential investors.&nbsp;</p>\r\n\r\n<p>After a campaign has been deemed to be successful, our members within the REIM platform can collaborate investment projects to further monitor their progress and update their investors in real time to ensure transparency in their investment.&nbsp;</p>', 'how-it-works', '1');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(10) UNSIGNED NOT NULL,
  `token` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment_gateways`
--

CREATE TABLE `payment_gateways` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `sandbox` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `fee` decimal(3,1) NOT NULL,
  `fee_cents` decimal(2,2) NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key_secret` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_info` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_gateways`
--

INSERT INTO `payment_gateways` (`id`, `name`, `type`, `enabled`, `sandbox`, `fee`, `fee_cents`, `email`, `token`, `key`, `key_secret`, `bank_info`) VALUES
(1, 'PayPal', 'normal', '0', 'true', 5.4, 0.30, 'paypal@yoursite.com', '12bGGfD9bHevK3eJN06CdDvFSTXsTrTG44yGdAONeN1R37jqnLY1PuNF0mJRoFnsEygyf28yePSCA1eR0alQk4BX89kGG9Rlha2D2KX55TpDFNR5o774OshrkHSZLOFo2fAhHzcWKnwsYDFKgwuaRg', '', '', ''),
(2, 'Stripe', 'card', '0', 'true', 2.9, 0.30, '', 'asfQSGRvYzS1P0X745krAAyHeU7ZbTpHbYKnxI2abQsBUi48EpeAu5lFAU2iBmsUWO5tpgAn9zzussI4Cce5ZcANIAmfBz0bNR9g3UfR4cserhkJwZwPsETiXiZuCixXVDHhCItuXTPXXSA6KITEoT', '', '', ''),
(3, 'Bank Transfer', 'bank', '0', 'true', 0.0, 0.00, '', 'zzzdH5811lZSjioHrg3zLD69DAAMvPLiwdzTouAdc7HbtaqgujPEZjH3i7RGeRtFKrY2baT7rXd6CaBtsRpo4XtgHvqCyCWiW5BlCrg1uSMCOSdi1tzPjCPx8px280YEyLvNtiRzWHJJk8WRegfTms', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reserved`
--

CREATE TABLE `reserved` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reserved`
--

INSERT INTO `reserved` (`id`, `name`) VALUES
(14, 'account'),
(31, 'api'),
(2, 'app'),
(30, 'bootstrap'),
(37, 'campaigns'),
(34, 'categories'),
(36, 'collections'),
(29, 'comment'),
(42, 'config'),
(25, 'contact'),
(41, 'database'),
(35, 'featured'),
(32, 'freebies'),
(45, 'gallery'),
(9, 'goods'),
(1, 'gostock1'),
(11, 'jobs'),
(21, 'join'),
(16, 'latest'),
(20, 'login'),
(33, 'logout'),
(27, 'members'),
(13, 'messages'),
(19, 'notifications'),
(15, 'popular'),
(6, 'porn'),
(26, 'programs'),
(12, 'projects'),
(3, 'public'),
(23, 'register'),
(40, 'resources'),
(39, 'routes'),
(17, 'search'),
(7, 'sex'),
(44, 'storage'),
(8, 'tags'),
(38, 'tests'),
(24, 'upgrade'),
(28, 'upload'),
(4, 'vendor'),
(5, 'xxx');

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `id` int(10) UNSIGNED NOT NULL,
  `campaigns_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `delivery` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `campaigns_id` int(10) UNSIGNED NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `token_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `countries_id` char(25) NOT NULL,
  `password` char(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `avatar` varchar(70) NOT NULL,
  `status` enum('pending','active','suspended','delete') NOT NULL DEFAULT 'active',
  `role` enum('normal','admin') NOT NULL DEFAULT 'normal',
  `remember_token` varchar(100) NOT NULL,
  `token` varchar(80) NOT NULL,
  `confirmation_code` varchar(125) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `paypal_account` varchar(200) NOT NULL,
  `payment_gateway` varchar(50) NOT NULL,
  `bank` text NOT NULL,
  `oauth_uid` varchar(200) NOT NULL,
  `oauth_provider` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` int(10) UNSIGNED NOT NULL,
  `street` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `countries_id`, `password`, `email`, `date`, `avatar`, `status`, `role`, `remember_token`, `token`, `confirmation_code`, `updated_at`, `created_at`, `paypal_account`, `payment_gateway`, `bank`, `oauth_uid`, `oauth_provider`, `username`, `phone`, `street`) VALUES
(1, 'Soulite', '192', '$2y$10$XzUZMAN.KUwPkpg0xSIDi.GOvyF1JDeciikz.lZJvwgMVzQqKP6uu', 'litneo@icloud.com', '2020-05-18 11:04:42', '11606309639ohusya9voqqkkct.png', 'active', 'admin', '33OoKwdOfjb7TWhBMOzCw3UY6XuURKXOos6JXNc5vYkalkY8XOTJHM7AjlgE', 'Wy4VkAl2dxHb9WHoXjTowSGPXFPnEQHca6RBe2yeqqmRafs0hSbCEobhNkZZAbCDIru60ceLzAAOI3fj', '', '2020-11-25 20:16:06', '2016-09-09 15:34:42', '', '', '', '', '', '', 0, ''),
(2, 'Nicole VX', '131', '$2y$10$9e071uhRr4.N3WguugMzQu8ZFhZnZlsZ22Lj328Zsbm9YSyYybWA2', 'nicole@ljltongle.com', '2020-11-25 12:44:10', '21606323157vu8wk4rht1lzcgl.jpeg', 'active', 'admin', '', 'CQb9B47BdXR207b5LRsNQm1zWcpHehElqgKnBqnlDkqYstRaUjv9fHSSLjmoYfhHVmTUIIkLQza2UprY', '', '2020-11-25 22:57:41', '2020-11-25 18:44:10', '', '', '', '', '', '', 0, ''),
(3, 'ABC', '99', '$2y$10$j.WrALlLLQq1W.eYCHU38O80y7FfwU0.olP7LOP2AFNehdv77dQHG', 'extramail.299@gmail.com', '2020-11-28 07:38:16', 'default.jpg', 'active', 'normal', 'yvTdpiFiD5DUCWbTkIv5M3wBWwFyNXlX6XKDSv5bZiMnYZa3gyfIhq10QQv8', 'aMRRI7GeLpTvJjpJy8tqWrcZ0ODBrWWDf3Tes2PkRhNs4M22ilUGi6fxOvkHELbMPcCbfadiCsc', '', '2020-11-28 16:51:11', '2020-11-28 13:38:16', '', '', '', '', '', '', 0, ''),
(4, 'shahzad', '165', '$2y$10$Rm35j5RzDfa5Xpe9B1G2Q.Od71ujPVUQOancoJ42DuvQZboufrjTG', 'babyfun24@gmail.com', '2020-11-28 13:31:01', 'default.jpg', 'pending', 'normal', '', 'o7hJC0Rg6F0pQkeiL14t3hVdAyyYkS5Un2K0TvSvuFeZKnwDUnGTG9FccsSsFi4PWbif2ePlrMt', 'mqfad4Dot6Za09xXLdWUsCKZ0aUHuY8Xc2CsXvog0UvAZeM2w4rL9baGAlMFGx3TQcVPEq9Od2oSS3U1YsjldTmrcs6p2779Hoyq', '2020-11-28 19:31:01', '2020-11-28 19:31:01', '', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` int(10) UNSIGNED NOT NULL,
  `campaigns_id` int(10) UNSIGNED NOT NULL,
  `status` enum('pending','paid') NOT NULL DEFAULT 'pending',
  `amount` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gateway` varchar(100) NOT NULL,
  `account` text NOT NULL,
  `date_paid` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `txn_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_settings`
--
ALTER TABLE `admin_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `max_campaign_amount` (`max_campaign_amount`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token_id` (`token_id`),
  ADD KEY `author_id` (`user_id`,`status`,`token_id`),
  ADD KEY `image` (`small_image`),
  ADD KEY `goal` (`goal`),
  ADD KEY `categories_id` (`categories_id`);

--
-- Indexes for table `campaigns_reported`
--
ALTER TABLE `campaigns_reported`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `conversation_point`
--
ALTER TABLE `conversation_point`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campaigns_id` (`campaigns_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_hash` (`token`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserved`
--
ALTER TABLE `reserved`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`) USING BTREE;

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token_id` (`token_id`),
  ADD KEY `author_id` (`token_id`),
  ADD KEY `image` (`image`),
  ADD KEY `category_id` (`campaigns_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `username` (`status`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campaings_id` (`campaigns_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_settings`
--
ALTER TABLE `admin_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `campaigns_reported`
--
ALTER TABLE `campaigns_reported`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `conversation_point`
--
ALTER TABLE `conversation_point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_gateways`
--
ALTER TABLE `payment_gateways`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reserved`
--
ALTER TABLE `reserved`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
