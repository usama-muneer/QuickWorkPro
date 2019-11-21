-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2018 at 10:14 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qwp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `applybuyerrequest`
--

CREATE TABLE `applybuyerrequest` (
  `applyRequest_id` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `budget` int(10) NOT NULL,
  `duration` int(10) NOT NULL,
  `brequest_id` int(11) NOT NULL,
  `freelancer_id` int(11) NOT NULL,
  `gig_id` int(11) NOT NULL,
  `apply_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applybuyerrequest`
--

INSERT INTO `applybuyerrequest` (`applyRequest_id`, `description`, `budget`, `duration`, `brequest_id`, `freelancer_id`, `gig_id`, `apply_time`) VALUES
(1, 'I\'ll make your animation professionally for your business.', 40, 3, 24, 10, 24, '2018-07-28 14:52:59'),
(2, 'I\'ll do your work', 30, 4, 24, 10, 26, '2018-07-28 14:56:08'),
(3, 'asmd,nas,mndasd', 12, 5, 23, 10, 24, '2018-07-28 15:11:05'),
(4, 'abcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldkl', 333, 3, 20, 10, 24, '2018-07-28 15:12:11'),
(5, 'abcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldklabcabacabcavsvdwdjlkwlkfcldklklkdlkcldkl', 24, 1, 22, 10, 27, '2018-07-28 15:12:46'),
(6, 'hello world', 12, 4, 24, 9, 29, '2018-07-28 15:27:21'),
(7, 'asdnan,d', 12, 5, 23, 9, 30, '2018-07-28 15:27:39'),
(8, 'I\'ll do your qoekI\'ll do your qoekI\'ll do your qoekI\'ll do your qoekI\'ll do your qoekI\'ll do your qoekI\'ll do your qoekI\'ll do your qoekI\'ll do your qoekI\'ll do your qoekI\'ll do your qoekI\'ll do your qoekI\'ll do your qoekI\'ll do your qoekI\'ll do your qoekI\'ll do your qoekI\'ll do your qoekI\'ll do your qoekI\'ll do your qoekI\'ll do your qoekI\'ll do your qoekI\'ll do your qoekI\'ll do your qoek', 200, 4, 21, 9, 31, '2018-07-28 16:52:56'),
(9, 'Max length will not work with <input type=\"number\" the best way i know is to use oninput event to limit the maxlength. Please see the below code. Max length will not work with <input type=\"number\" the best way i know is to use oninput event to limit the maxlength. Please see the below code.Max length will not work with <input type=\"number\" the best way i know is to use oninput event to limit the maxlength. Please see the below code.Max length will not work with <input type=\"number\" the best way i know is to use oninput event to limit the maxlength. Please see the below code.', 120, 4, 21, 10, 28, '2018-07-28 16:59:32'),
(10, 'I\'ll do this ', 80, 1, 26, 15, 32, '2018-07-30 11:45:52'),
(11, 'I\'ll do this', 10, 1, 27, 15, 32, '2018-07-31 06:40:50'),
(12, 'pakistan', 500, 7, 27, 18, 33, '2018-07-31 11:55:31'),
(13, 'I\'ll d your work', 12, 1, 26, 18, 33, '2018-07-31 12:04:20'),
(14, 'kjnknlknl', 30, 5, 31, 15, 32, '2018-08-09 15:14:30'),
(15, 'hhgjhb k kkj', 10, 5, 19, 15, 35, '2018-08-09 15:20:36'),
(16, 'asdasd', 5, 5, 32, 10, 27, '2018-08-10 14:11:53'),
(17, 'I\'ll do this work', 10, 3, 31, 10, 27, '2018-08-11 10:26:40');

-- --------------------------------------------------------

--
-- Table structure for table `buyerrequest`
--

CREATE TABLE `buyerrequest` (
  `brequest_id` int(11) NOT NULL,
  `serviceCategory_name` int(11) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `request_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `budget` int(10) NOT NULL,
  `duration` int(10) NOT NULL,
  `brequest_status` varchar(20) NOT NULL,
  `buyer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyerrequest`
--

INSERT INTO `buyerrequest` (`brequest_id`, `serviceCategory_name`, `service_name`, `description`, `request_date`, `budget`, `duration`, `brequest_status`, `buyer_id`) VALUES
(13, 6, '388', 'Business Cards & StationeryBusiness Cards & StationeryBusiness Cards & StationeryBusiness Cards & StationeryBusiness Cards & Stationery', '2018-07-27 12:34:43', 10, 4, 'Active', 3),
(16, 2, '337', 'serviceCategory_name  serviceCategory_name serviceCategory_name', '2018-07-27 12:54:42', 30, 3, 'Active', 3),
(17, 6, '388', 'Describe the service you\'re looking to purchase. Please be as detailed as possible \r\nDescriptionDescribe the service you\'re looking to purchase. Please be as detailed as possible \r\nDescriptionDescribe the service you\'re looking to purchase. Please be as detailed as possible \r\nDescriptionDescribe the se', '2018-07-27 13:07:34', 6, 3, 'Active', 3),
(18, 7, 'Career Advice', 'escribe the service you\'re looking to purchase. Please be as detailed as possible \r\nDescription', '2018-07-27 13:11:36', 10, 3, 'Active', 3),
(19, 1, 'Illustration', 'Summarize what this gig offers buyers, and why you included these items in your gig', '2018-07-27 14:13:48', 5, 1, 'Active', 3),
(20, 2, 'Domain Research', 'Summarize what this gig offers buyers, and why you included these items in your gig', '2018-07-27 14:15:06', 50, 3, 'Active', 3),
(21, 0, 'Virtual Assistant', 'I need a virtual assistance for data entry work', '2018-07-27 17:11:44', 50, 4, 'Active', 2),
(22, 6, 'Website Builders & CMS', 'I need web developer to develop my company website', '2018-07-28 11:25:29', 100, 3, 'Active', 5),
(23, 2, 'Influencer Marketing', 'Select Your Payment Method\r\nCreated with bootsrap button and using radio buttonSelect Your Payment Method\r\nCreated with bootsrap button and using', '2018-07-28 13:08:57', 30, 3, 'Active', 2),
(24, 5, 'Sound Effects', 'eated with bootsrap button and using radio buttonSelect Your Payment Method\r\nCreated with bootsrap button and using radio buttonSelect Your Payment Methodeated with bootsrap button and using radio buttonSelect Your Payment Method\r\nCreated with bootsrap button and using radio buttonSelect Your Payment', '2018-07-28 13:12:59', 70, 6, 'Delete', 2),
(25, 1, 'Banner Ads', 'I need logo for my trading company. Colors should be gray and white.', '2018-07-29 05:49:11', 10, 3, 'Active', 2),
(26, 5, 'Singer-Songwriters', 'I need lyrics for a song', '2018-07-30 11:45:25', 20, 1, 'Active', 14),
(27, 1, '3D Models & Product Design', 'house decoration', '2018-07-31 06:23:20', 5, 1, 'Active', 17),
(28, 6, 'Support & IT', 'fastwpthemes	Looking for someone who can help me fix some issues/bugs on iOS / MacOS More details can be sent in DMs', '2018-08-09 12:52:54', 18, 1, 'Active', 14),
(29, 1, 'Infographics', 'I need a logo designer', '2018-08-09 13:00:57', 20, 2, 'Delete', 14),
(30, 1, 'Infographics', 'I need a logo designer for my company', '2018-08-09 13:02:07', 50, 3, 'Delete', 14),
(31, 6, 'Desktop applications', 'New Artificial intelligence language learning programming with voice interraction', '2018-08-09 13:04:04', 11, 2, 'Active', 14),
(32, 1, 'Flyers & Brochures', 'i NEED LOGO DESIGNER', '2018-08-10 11:15:15', 15, 3, 'Active', 11);

-- --------------------------------------------------------

--
-- Table structure for table `cardverification`
--

CREATE TABLE `cardverification` (
  `payment_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `card_no` bigint(17) NOT NULL,
  `expiry_date` varchar(12) NOT NULL,
  `CVV` int(3) NOT NULL,
  `balance` int(11) NOT NULL,
  `payment_method` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cardverification`
--

INSERT INTO `cardverification` (`payment_id`, `buyer_id`, `card_no`, `expiry_date`, `CVV`, `balance`, `payment_method`) VALUES
(1, 10, 123456789012345, '03/21', 455, 3000, 'Paypal'),
(2, 3, 123456789012346, '03/21', 355, 300, 'Paypal'),
(3, 2, 123456789012347, '03/21', 255, 4790, 'MasterCard'),
(4, 11, 123456789012349, '03/21', 455, 200, 'VISA'),
(5, 14, 1234123412341234, '03/21', 255, 9151, 'Paypal'),
(6, 11, 1234123412341235, '03/21', 255, 19400, 'MasterCard');

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
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'AF', 'Afghanistan'),
(52, 'AL', 'Albania'),
(53, 'DZ', 'Algeria'),
(54, 'DS', 'American Samoa'),
(55, 'AD', 'Andorra'),
(56, 'AO', 'Angola'),
(57, 'AI', 'Anguilla'),
(58, 'AQ', 'Antarctica'),
(59, 'AG', 'Antigua and Barbuda'),
(60, 'AR', 'Argentina'),
(61, 'AM', 'Armenia'),
(62, 'AW', 'Aruba'),
(63, 'AU', 'Australia'),
(64, 'AT', 'Austria'),
(65, 'AZ', 'Azerbaijan'),
(66, 'BS', 'Bahamas'),
(67, 'BH', 'Bahrain'),
(68, 'BD', 'Bangladesh'),
(69, 'BB', 'Barbados'),
(70, 'BY', 'Belarus'),
(71, 'BE', 'Belgium'),
(72, 'BZ', 'Belize'),
(73, 'BJ', 'Benin'),
(74, 'BM', 'Bermuda'),
(75, 'BT', 'Bhutan'),
(76, 'BO', 'Bolivia'),
(77, 'BA', 'Bosnia and Herzegovina'),
(78, 'BW', 'Botswana'),
(79, 'BV', 'Bouvet Island'),
(80, 'BR', 'Brazil'),
(81, 'IO', 'British Indian Ocean Territory'),
(82, 'BN', 'Brunei Darussalam'),
(83, 'BG', 'Bulgaria'),
(84, 'BF', 'Burkina Faso'),
(85, 'BI', 'Burundi'),
(86, 'KH', 'Cambodia'),
(87, 'CM', 'Cameroon'),
(88, 'CA', 'Canada'),
(89, 'CV', 'Cape Verde'),
(90, 'KY', 'Cayman Islands'),
(91, 'CF', 'Central African Republic'),
(92, 'TD', 'Chad'),
(93, 'CL', 'Chile'),
(94, 'CN', 'China'),
(95, 'CX', 'Christmas Island'),
(96, 'CC', 'Cocos (Keeling) Islands'),
(97, 'CO', 'Colombia'),
(98, 'KM', 'Comoros'),
(99, 'CG', 'Congo'),
(100, 'CK', 'Cook Islands'),
(101, 'AF', 'Afghanistan'),
(102, 'AL', 'Albania'),
(103, 'DZ', 'Algeria'),
(104, 'DS', 'American Samoa'),
(105, 'AD', 'Andorra'),
(106, 'AO', 'Angola'),
(107, 'AI', 'Anguilla'),
(108, 'AQ', 'Antarctica'),
(109, 'AG', 'Antigua and Barbuda'),
(110, 'AR', 'Argentina'),
(111, 'AM', 'Armenia'),
(112, 'AW', 'Aruba'),
(113, 'AU', 'Australia'),
(114, 'AT', 'Austria'),
(115, 'AZ', 'Azerbaijan'),
(116, 'BS', 'Bahamas'),
(117, 'BH', 'Bahrain'),
(118, 'BD', 'Bangladesh'),
(119, 'BB', 'Barbados'),
(120, 'BY', 'Belarus'),
(121, 'BE', 'Belgium'),
(122, 'BZ', 'Belize'),
(123, 'BJ', 'Benin'),
(124, 'BM', 'Bermuda'),
(125, 'BT', 'Bhutan'),
(126, 'BO', 'Bolivia'),
(127, 'BA', 'Bosnia and Herzegovina'),
(128, 'BW', 'Botswana'),
(129, 'BV', 'Bouvet Island'),
(130, 'BR', 'Brazil'),
(131, 'IO', 'British Indian Ocean Territory'),
(132, 'BN', 'Brunei Darussalam'),
(133, 'BG', 'Bulgaria'),
(134, 'BF', 'Burkina Faso'),
(135, 'BI', 'Burundi'),
(136, 'KH', 'Cambodia'),
(137, 'CM', 'Cameroon'),
(138, 'CA', 'Canada'),
(139, 'CV', 'Cape Verde'),
(140, 'KY', 'Cayman Islands'),
(141, 'CF', 'Central African Republic'),
(142, 'TD', 'Chad'),
(143, 'CL', 'Chile'),
(144, 'CN', 'China'),
(145, 'CX', 'Christmas Island'),
(146, 'CC', 'Cocos (Keeling) Islands'),
(147, 'CO', 'Colombia'),
(148, 'KM', 'Comoros'),
(149, 'CG', 'Congo'),
(150, 'CK', 'Cook Islands'),
(151, 'CR', 'Costa Rica'),
(152, 'HR', 'Croatia (Hrvatska)'),
(153, 'CU', 'Cuba'),
(154, 'CY', 'Cyprus'),
(155, 'CZ', 'Czech Republic'),
(156, 'DK', 'Denmark'),
(157, 'DJ', 'Djibouti'),
(158, 'DM', 'Dominica'),
(159, 'DO', 'Dominican Republic'),
(160, 'TP', 'East Timor'),
(161, 'EC', 'Ecuador'),
(162, 'EG', 'Egypt'),
(163, 'SV', 'El Salvador'),
(164, 'GQ', 'Equatorial Guinea'),
(165, 'ER', 'Eritrea'),
(166, 'EE', 'Estonia'),
(167, 'ET', 'Ethiopia'),
(168, 'FK', 'Falkland Islands (Malvinas)'),
(169, 'FO', 'Faroe Islands'),
(170, 'FJ', 'Fiji'),
(171, 'FI', 'Finland'),
(172, 'FR', 'France'),
(173, 'FX', 'France, Metropolitan'),
(174, 'GF', 'French Guiana'),
(175, 'PF', 'French Polynesia'),
(176, 'TF', 'French Southern Territories'),
(177, 'GA', 'Gabon'),
(178, 'GM', 'Gambia'),
(179, 'GE', 'Georgia'),
(180, 'DE', 'Germany'),
(181, 'GH', 'Ghana'),
(182, 'GI', 'Gibraltar'),
(183, 'GK', 'Guernsey'),
(184, 'GR', 'Greece'),
(185, 'GL', 'Greenland'),
(186, 'GD', 'Grenada'),
(187, 'GP', 'Guadeloupe'),
(188, 'GU', 'Guam'),
(189, 'GT', 'Guatemala'),
(190, 'GN', 'Guinea'),
(191, 'GW', 'Guinea-Bissau'),
(192, 'GY', 'Guyana'),
(193, 'HT', 'Haiti'),
(194, 'HM', 'Heard and Mc Donald Islands'),
(195, 'HN', 'Honduras'),
(196, 'HK', 'Hong Kong'),
(197, 'HU', 'Hungary'),
(198, 'IS', 'Iceland'),
(199, 'IN', 'India'),
(200, 'IM', 'Isle of Man'),
(201, 'ID', 'Indonesia'),
(202, 'IR', 'Iran (Islamic Republic of)'),
(203, 'IQ', 'Iraq'),
(204, 'IE', 'Ireland'),
(205, 'IL', 'Israel'),
(206, 'IT', 'Italy'),
(207, 'CI', 'Ivory Coast'),
(208, 'JE', 'Jersey'),
(209, 'JM', 'Jamaica'),
(210, 'JP', 'Japan'),
(211, 'JO', 'Jordan'),
(212, 'KZ', 'Kazakhstan'),
(213, 'KE', 'Kenya'),
(214, 'KI', 'Kiribati'),
(215, 'KP', 'Korea, Democratic People\'s Republic of'),
(216, 'KR', 'Korea, Republic of'),
(217, 'XK', 'Kosovo'),
(218, 'KW', 'Kuwait'),
(219, 'KG', 'Kyrgyzstan'),
(220, 'LA', 'Lao People\'s Democratic Republic'),
(221, 'LV', 'Latvia'),
(222, 'LB', 'Lebanon'),
(223, 'LS', 'Lesotho'),
(224, 'LR', 'Liberia'),
(225, 'LY', 'Libyan Arab Jamahiriya'),
(226, 'LI', 'Liechtenstein'),
(227, 'LT', 'Lithuania'),
(228, 'LU', 'Luxembourg'),
(229, 'MO', 'Macau'),
(230, 'MK', 'Macedonia'),
(231, 'MG', 'Madagascar'),
(232, 'MW', 'Malawi'),
(233, 'MY', 'Malaysia'),
(234, 'MV', 'Maldives'),
(235, 'ML', 'Mali'),
(236, 'MT', 'Malta'),
(237, 'MH', 'Marshall Islands'),
(238, 'MQ', 'Martinique'),
(239, 'MR', 'Mauritania'),
(240, 'MU', 'Mauritius'),
(241, 'TY', 'Mayotte'),
(242, 'MX', 'Mexico'),
(243, 'FM', 'Micronesia, Federated States of'),
(244, 'MD', 'Moldova, Republic of'),
(245, 'MC', 'Monaco'),
(246, 'MN', 'Mongolia'),
(247, 'ME', 'Montenegro'),
(248, 'MS', 'Montserrat'),
(249, 'MA', 'Morocco'),
(250, 'MZ', 'Mozambique'),
(251, 'MM', 'Myanmar'),
(252, 'NA', 'Namibia'),
(253, 'NR', 'Nauru'),
(254, 'NP', 'Nepal'),
(255, 'NL', 'Netherlands'),
(256, 'AN', 'Netherlands Antilles'),
(257, 'NC', 'New Caledonia'),
(258, 'NZ', 'New Zealand'),
(259, 'NI', 'Nicaragua'),
(260, 'NE', 'Niger'),
(261, 'NG', 'Nigeria'),
(262, 'NU', 'Niue'),
(263, 'NF', 'Norfolk Island'),
(264, 'MP', 'Northern Mariana Islands'),
(265, 'NO', 'Norway'),
(266, 'OM', 'Oman'),
(267, 'PK', 'Pakistan'),
(268, 'PW', 'Palau'),
(269, 'PS', 'Palestine'),
(270, 'PA', 'Panama'),
(271, 'PG', 'Papua New Guinea'),
(272, 'PY', 'Paraguay'),
(273, 'PE', 'Peru'),
(274, 'PH', 'Philippines'),
(275, 'PN', 'Pitcairn'),
(276, 'PL', 'Poland'),
(277, 'PT', 'Portugal'),
(278, 'PR', 'Puerto Rico'),
(279, 'QA', 'Qatar'),
(280, 'RE', 'Reunion'),
(281, 'RO', 'Romania'),
(282, 'RU', 'Russian Federation'),
(283, 'RW', 'Rwanda'),
(284, 'KN', 'Saint Kitts and Nevis'),
(285, 'LC', 'Saint Lucia'),
(286, 'VC', 'Saint Vincent and the Grenadines'),
(287, 'WS', 'Samoa'),
(288, 'SM', 'San Marino'),
(289, 'ST', 'Sao Tome and Principe'),
(290, 'SA', 'Saudi Arabia'),
(291, 'SN', 'Senegal'),
(292, 'RS', 'Serbia'),
(293, 'SC', 'Seychelles'),
(294, 'SL', 'Sierra Leone'),
(295, 'SG', 'Singapore'),
(296, 'SK', 'Slovakia'),
(297, 'SI', 'Slovenia'),
(298, 'SB', 'Solomon Islands'),
(299, 'SO', 'Somalia'),
(300, 'ZA', 'South Africa'),
(301, 'GS', 'South Georgia South Sandwich Islands'),
(302, 'ES', 'Spain'),
(303, 'LK', 'Sri Lanka'),
(304, 'SH', 'St. Helena'),
(305, 'PM', 'St. Pierre and Miquelon'),
(306, 'SD', 'Sudan'),
(307, 'SR', 'Suriname'),
(308, 'SJ', 'Svalbard and Jan Mayen Islands'),
(309, 'SZ', 'Swaziland'),
(310, 'SE', 'Sweden'),
(311, 'CH', 'Switzerland'),
(312, 'SY', 'Syrian Arab Republic'),
(313, 'TW', 'Taiwan'),
(314, 'TJ', 'Tajikistan'),
(315, 'TZ', 'Tanzania, United Republic of'),
(316, 'TH', 'Thailand'),
(317, 'TG', 'Togo'),
(318, 'TK', 'Tokelau'),
(319, 'TO', 'Tonga'),
(320, 'TT', 'Trinidad and Tobago'),
(321, 'TN', 'Tunisia'),
(322, 'TR', 'Turkey'),
(323, 'TM', 'Turkmenistan'),
(324, 'TC', 'Turks and Caicos Islands'),
(325, 'TV', 'Tuvalu'),
(326, 'UG', 'Uganda'),
(327, 'UA', 'Ukraine'),
(328, 'AE', 'United Arab Emirates'),
(329, 'GB', 'United Kingdom'),
(330, 'US', 'United States'),
(331, 'UM', 'United States minor outlying islands'),
(332, 'UY', 'Uruguay'),
(333, 'UZ', 'Uzbekistan'),
(334, 'VU', 'Vanuatu'),
(335, 'VA', 'Vatican City State'),
(336, 'VE', 'Venezuela'),
(337, 'VN', 'Vietnam'),
(338, 'VG', 'Virgin Islands (British)'),
(339, 'VI', 'Virgin Islands (U.S.)'),
(340, 'WF', 'Wallis and Futuna Islands'),
(341, 'EH', 'Western Sahara'),
(342, 'YE', 'Yemen'),
(343, 'ZR', 'Zaire'),
(344, 'ZM', 'Zambia'),
(345, 'ZW', 'Zimbabwe'),
(346, 'AF', 'Afghanistan'),
(347, 'AL', 'Albania'),
(348, 'DZ', 'Algeria'),
(349, 'DS', 'American Samoa'),
(350, 'AD', 'Andorra'),
(351, 'AO', 'Angola'),
(352, 'AI', 'Anguilla'),
(353, 'AQ', 'Antarctica'),
(354, 'AG', 'Antigua and Barbuda'),
(355, 'AR', 'Argentina'),
(356, 'AM', 'Armenia'),
(357, 'AW', 'Aruba'),
(358, 'AU', 'Australia'),
(359, 'AT', 'Austria'),
(360, 'AZ', 'Azerbaijan'),
(361, 'BS', 'Bahamas'),
(362, 'BH', 'Bahrain'),
(363, 'BD', 'Bangladesh'),
(364, 'BB', 'Barbados'),
(365, 'BY', 'Belarus'),
(366, 'BE', 'Belgium'),
(367, 'BZ', 'Belize'),
(368, 'BJ', 'Benin'),
(369, 'BM', 'Bermuda'),
(370, 'BT', 'Bhutan'),
(371, 'BO', 'Bolivia'),
(372, 'BA', 'Bosnia and Herzegovina'),
(373, 'BW', 'Botswana'),
(374, 'BV', 'Bouvet Island'),
(375, 'BR', 'Brazil'),
(376, 'IO', 'British Indian Ocean Territory'),
(377, 'BN', 'Brunei Darussalam'),
(378, 'BG', 'Bulgaria'),
(379, 'BF', 'Burkina Faso'),
(380, 'BI', 'Burundi'),
(381, 'KH', 'Cambodia'),
(382, 'CM', 'Cameroon'),
(383, 'CA', 'Canada'),
(384, 'CV', 'Cape Verde'),
(385, 'KY', 'Cayman Islands'),
(386, 'CF', 'Central African Republic'),
(387, 'TD', 'Chad'),
(388, 'CL', 'Chile'),
(389, 'CN', 'China'),
(390, 'CX', 'Christmas Island'),
(391, 'CC', 'Cocos (Keeling) Islands'),
(392, 'CO', 'Colombia'),
(393, 'KM', 'Comoros'),
(394, 'CG', 'Congo'),
(395, 'CK', 'Cook Islands');

-- --------------------------------------------------------

--
-- Table structure for table `deliverorder`
--

CREATE TABLE `deliverorder` (
  `delivery_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `attach_file` text NOT NULL,
  `order_id` int(11) NOT NULL,
  `delivery_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliverorder`
--

INSERT INTO `deliverorder` (`delivery_id`, `description`, `attach_file`, `order_id`, `delivery_time`) VALUES
(1, 'deliverorder deliverorder deliverorder  deliverorder deliverorderv  deliverorder bdeliverorder deliverorder deliverorder  deliverorder deliverorderv  deliverorder deliverorder deliverorder deliverorder  deliverorder deliverorderv  deliverorder deliverorder deliverorder deliverorder  deliverorder deliverorderv  deliverorder', 'deliveredfiles/87455b5e00d3d53b5.jpg', 16, '2018-07-29 18:00:51'),
(3, 'Your Delivery', 'deliveredfiles/26805b5e10a9aae5a.jpg', 16, '2018-07-29 19:08:25'),
(4, 'Your Delivery', 'deliveredfiles/185775b5e10c4a9562.jpg', 16, '2018-07-29 19:08:52'),
(5, 'your delivery your delivery your delivery your delivery your delivery your delivery your delivery your delivery your delivery your delivery your delivery your delivery ', 'deliveredfiles/172315b5e11b17243f.jpg', 16, '2018-07-29 19:12:49'),
(6, 'Order delivered successfully', 'deliveredfiles/273565b5e12e7884d7.jpg', 16, '2018-07-29 19:17:59'),
(7, 'Order delivered successfully', 'deliveredfiles/45345b5e16773e065.jpg', 16, '2018-07-29 19:33:11'),
(8, 'Order delivered successfully', 'deliveredfiles/119595b5e167ee37e6.jpg', 16, '2018-07-29 19:33:18'),
(9, 'Order delivered successfully', 'deliveredfiles/220525b5e16820afe1.jpg', 16, '2018-07-29 19:33:22'),
(10, 'an alternative would be repeatedly ajax calls to a controller who checks if there are new notificationsan alternative would be repeatedly ajax calls to a controller who checks if there are new notificationsan alternative would be repeatedly ajax calls to a controller who checks if there are new notificationsan alternative would be repeatedly ajax calls to a controller who checks if there are new notificationsan alternative would be repeatedly ajax calls to a controller who checks if there are new notificationsan alternative would be repeatedly ajax calls to a controller who checks if there are new notifications', 'deliveredfiles/80565b5e17681d613.jpg', 16, '2018-07-29 19:37:12'),
(11, 'delivered', 'deliveredfiles/123205b5e182e8e2b9.png', 16, '2018-07-29 19:40:30'),
(12, 'asdasdasd', 'deliveredfiles/219015b5e186c365cd.png', 16, '2018-07-29 19:41:32'),
(13, 'asdasdasdas das das d aa SD  D', 'deliveredfiles/98095b5e19954df1d.jpg', 16, '2018-07-29 19:46:29'),
(14, 'as,mdna,smdn,amsnd,masd', 'deliveredfiles/119585b5e1ae93469e.jpg', 16, '2018-07-29 19:52:09'),
(15, 'YOUR ORDER IS SUCCESSFULLY DELIVERED', 'deliveredfiles/304585b5e1f0f686b0.png', 16, '2018-07-29 20:09:51'),
(16, 'asdasd', 'deliveredfiles/173985b5e21584841f.jpg', 16, '2018-07-29 20:19:36'),
(17, 'Here is your delivery\r\nTHANKS FOR YOUR ORDER', 'deliveredfiles/22465b5e2c18a509b.jpg', 25, '2018-07-29 21:05:28'),
(18, 'YOUR DELIVERY', 'deliveredfiles/38645b5e2c7d7c0b1.png', 25, '2018-07-29 21:07:09'),
(19, 'ansdmasbdmnads', 'deliveredfiles/296555b5e2db5b913c.jpg', 25, '2018-07-29 21:12:21'),
(20, 'Delivered', 'deliveredfiles/315655b5e36cbe03fa.jpg', 25, '2018-07-29 21:51:07'),
(21, 'Delivered', 'deliveredfiles/665b5e3745b7cc9.jpg', 25, '2018-07-29 21:53:09'),
(22, 'Here is your delivery', 'deliveredfiles/237575b5ef607e4c02.png', 26, '2018-07-30 11:27:03'),
(23, 'Here is your revision file', 'deliveredfiles/160005b5ef62e960eb.jpg', 26, '2018-07-30 11:27:42'),
(24, 'Delivered', 'deliveredfiles/4245b5fa5cf5582d.jpg', 27, '2018-07-30 23:57:03'),
(25, 'Delivered', 'deliveredfiles/53135b5fa5dfb99bb.png', 28, '2018-07-30 23:57:19'),
(26, 'delivered', 'deliveredfiles/150675b5fa91e386ca.jpg', 29, '2018-07-31 00:11:10'),
(27, 'asdasd', 'deliveredfiles/206885b5fa96b672fe.png', 29, '2018-07-31 00:12:27'),
(28, 'delivery', 'deliveredfiles/309215b5ff59c78f94.jpg', 30, '2018-07-31 05:37:32'),
(29, '2nd delivery', 'deliveredfiles/132235b5ff5c64ea62.jpg', 30, '2018-07-31 05:38:14'),
(30, 'del;ivery', 'deliveredfiles/316055b6051938ccab.png', 33, '2018-07-31 12:09:55'),
(31, 'bvhgv', 'deliveredfiles/207225b6051c54a253.jpg', 33, '2018-07-31 12:10:45'),
(32, 'delivered', 'deliveredfiles/137925b6af4193a4fd.jpg', 34, '2018-08-08 13:46:01'),
(33, 'asda.sd', 'deliveredfiles/31265b6b0ec517d87.png', 31, '2018-08-08 15:39:49'),
(34, 'msnadbmansd', 'deliveredfiles/52845b6c1dee6e189.txt', 32, '2018-08-09 10:56:46'),
(35, 'zxcxzc', 'deliveredfiles/21175b6c1e546b493.doc', 32, '2018-08-09 10:58:28'),
(36, 'asda', 'deliveredfiles/268555b6c1eaa35085.pdf', 32, '2018-08-09 10:59:54'),
(37, 'delivered', 'deliveredfiles/204095b6c5321a7330.png', 27, '2018-08-09 14:43:45'),
(38, 'Here is your delivery', 'deliveredfiles/313245b6f2b9b78e4f.txt', 39, '2018-08-11 18:31:55'),
(39, 'HERE IS YOUR DELIVERY', 'deliveredfiles/126355b6f2d6812708.png', 39, '2018-08-11 18:39:36');

-- --------------------------------------------------------

--
-- Table structure for table `earnings`
--

CREATE TABLE `earnings` (
  `payment_id` int(11) NOT NULL,
  `complete_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `earn_amount` int(10) NOT NULL,
  `order_id` int(11) NOT NULL,
  `freelancer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `earnings`
--

INSERT INTO `earnings` (`payment_id`, `complete_date`, `earn_amount`, `order_id`, `freelancer_id`) VALUES
(1, '2018-07-29 20:58:44', 899, 16, 10),
(3, '2018-07-29 21:00:38', 13, 24, 9),
(4, '2018-07-29 21:07:22', 180, 25, 4),
(5, '2018-07-29 21:51:15', 180, 25, 4),
(6, '2018-07-29 21:51:41', 180, 25, 4),
(7, '2018-07-29 21:53:22', 180, 25, 4),
(8, '2018-07-29 21:54:43', 180, 25, 4),
(9, '2018-07-29 21:55:00', 180, 25, 4),
(10, '2018-07-29 21:55:17', 180, 25, 4),
(11, '2018-07-29 21:55:19', 180, 25, 4),
(12, '2018-07-29 21:55:26', 180, 25, 4),
(13, '2018-07-29 21:55:37', 180, 25, 4),
(14, '2018-07-30 11:27:50', 19, 26, 10),
(15, '2018-07-30 23:57:37', 180, 28, 15),
(16, '2018-07-30 23:57:47', 180, 28, 15),
(17, '2018-07-31 00:12:42', 180, 29, 15),
(18, '2018-07-31 05:39:05', 180, 30, 15),
(19, '2018-07-31 12:11:22', 49, 33, 18),
(20, '2018-08-08 15:41:20', 36, 31, 10),
(21, '2018-08-08 15:43:49', 36, 31, 10),
(22, '2018-08-08 15:44:11', 36, 31, 10),
(23, '2018-08-08 15:44:25', 36, 31, 10),
(24, '2018-08-08 15:46:09', 36, 31, 10),
(25, '2018-08-08 15:46:10', 36, 31, 10),
(26, '2018-08-08 15:59:10', 36, 31, 10),
(27, '2018-08-08 15:59:14', 36, 31, 10),
(28, '2018-08-09 14:44:20', 180, 32, 15),
(29, '2018-08-09 15:30:19', 72, 27, 15),
(30, '2018-08-09 15:40:03', 72, 27, 15),
(31, '2018-08-09 15:56:43', 72, 27, 15),
(32, '2018-08-11 18:00:23', 19, 34, 10),
(33, '2018-08-11 18:04:12', 19, 34, 10),
(34, '2018-08-11 18:33:27', 45, 39, 10),
(35, '2018-08-11 18:34:50', 45, 39, 10),
(36, '2018-08-11 18:37:56', 45, 39, 10),
(37, '2018-08-11 18:40:02', 45, 39, 10);

-- --------------------------------------------------------

--
-- Table structure for table `gigs`
--

CREATE TABLE `gigs` (
  `gig_id` int(11) NOT NULL,
  `serviceCategory_name` int(11) NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `gig_title` varchar(200) NOT NULL,
  `gig_description` text NOT NULL,
  `gig_package_desc` varchar(200) NOT NULL,
  `gig_price` int(10) NOT NULL,
  `gig_duration` int(10) NOT NULL,
  `gig_picture` longtext NOT NULL,
  `gig_status` varchar(40) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gigs`
--

INSERT INTO `gigs` (`gig_id`, `serviceCategory_name`, `service_name`, `gig_title`, `gig_description`, `gig_package_desc`, `gig_price`, `gig_duration`, `gig_picture`, `gig_status`, `user_id`) VALUES
(23, 0, 'Website Builders & CMS', 'I\'ll design professional website for your business', 'Delivery time is your deadline for delivering an order. Be sure to set a delivery time that you can easily meet!\r\nDelivery TimeDelivery time is your deadline for delivering an order. Be sure to set a delivery time that you can easily meet!\r\nDelivery TimeDelivery time is your deadline for delivering an order. Be sure to set a delivery time that you can easily meet!\r\nDelivery Time', 'Delivery time is your deadline for delivering an order. Be sure to set a delivery time that you can ', 50, 4, 'images/7915b5b24314c88e.jpg', 'Pause', 10),
(24, 0, 'Whiteboard & Animated Explainers', 'I\'ll do video animation for you', 'Summarize what this gig offers buyers, and why you included these items in your gig', 'Summarize Summawhat this gig offers buyers, and why you included these items in your gigvice_name\'];', 40, 3, 'images/239025b5b3011cdb2e.png', 'Pause', 10),
(25, 5, 'Singer-Songwriters', 'I\'ll design professional website for your business', 'Summarize what this gig offers buyers, and why you included these items in your gig\r\nPackage Description', 'display: inline-block;\r\n  position: relative;\r\n  width: 350px', 200, 6, 'images/180735b5b2bfd7d501.jpg', 'Active', 4),
(26, 0, 'Jingles & Drops', 'FUN & LIFESTYLEFUN & LIFESTYLEFUN & LIFESTYLEas', 'pforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpfornt', 'pforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpforntpfornt', 22, 6, 'images/192175b5c65bb9fe77.jpg', 'Delete', 10),
(27, 7, 'Career Advice', 'I\'ll do video animation', 'The following MySQL statement will return the sum of the \'mysum\', a temporary variable which counts number of books containing more than 200 pages from \'book_mast\' table. MySQL SUM() function retrieves the sum of a unique value of an expression if it is accompanied by DISTINCT clause. The following MySQL statement will return the sum of the \'mysum\', a temporary variable which counts number of books containing more than 200 pages from \'book_mast\' table. MySQL SUM() function retrieves the sum of a unique value of an expression if it is accompanied by DISTINCT clause. The following MySQL statement will return the sum of the \'mysum\', a temporary variable which counts number of books containing more than 200 pages from \'book_mast\' table. MySQL SUM() function retrieves the sum of a unique value of an expression if it is accompanied by DISTINCT clause.', 'The following MySQL statement will return the sum of the \'mysum\', a temporary variable which counts ', 999, 7, 'images/278005b6b69cdac72a.jpg', 'Active', 10),
(28, 6, 'Website Builders & CMS', 'I\'ll design professional website for your business companys', 'Summarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage Description', 'Summarize what this gig offers buyers, and why you included these items in your gig\r\nPackage Descript', 100, 5, 'images/189245b5d54780ce8f.png', 'Active', 10),
(29, 7, 'Presentations', 'I\'ll design professional powerpoint presentation for your business', 'Summarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage Description', 'Summarize what this gig offers buyers, and why you included these items in your gig\r\nPackage Descript', 15, 1, 'images/275855b5c1afe886d0.jpg', 'Active', 9),
(30, 4, 'Whiteboard & Animated Explainers', 'I\'ll do video animation', 'Summarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage Description', 'Summarize what this gig offers buyers, and why you included these items in your gig\r\nPackage Descript', 50, 3, 'images/244225b5c1b2414732.jpg', 'Active', 9),
(31, 6, 'WordPress', 'I\'ll design professional website for your Company', 'Summarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\nPackage DescriptionSummarize what this gig offers buyers, and why you included these items in your gig\r\n', 'Summarize what this gig offers buyers, and why you included these items in your gig\r\nPackage Descript', 250, 7, 'images/252555b5c1b5bc264e.jpg', 'Active', 9),
(32, 5, 'Singer-Songwriters', 'I\'ll write amazing song lyrics for your song', 'The remark \"in PHP the switch statement is considered a looping structure for the purposes of continue\" near the top of this page threw me off, so I experimented a little using the following code to figure out what the exact semantics of continue inside a switch is:The remark \"in PHP the switch statement is considered a looping structure for the purposes of continue\" near the top of this page threw me off, so I experimented a little using the following code to figure out what the exact semantics of continue inside a switch is:The remark \"in PHP the switch statement is considered a looping structure for the purposes of continue\" near the top of this page threw me off, so I experimented a little using the following code to figure out what the exact semantics of continue inside a switch is:The remark \"in PHP the switch statement is considered a looping structure for the purposes of continue\" near the top of this page threw me off, so I experimented a little using the following code to figure out what the exact semantics of continue inside a switch is:', 'The remark \"in PHP the switch statement is considered a looping structure for the purposes of contin', 20, 4, 'images/11315b6c891c7a0e2.jpg', 'Active', 15),
(33, 6, 'Databases', 'khana pul', 'pakistanalsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska pakistanalsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska pakistanalsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska pakistanalsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska pakistanalsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska pakistanalsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska pakistanalsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska pakistanalsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska pakistanalsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska pakistanalsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska pakistanalsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska pakistanalsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska pakistanalsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska pakistanalsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska pakistanalsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska pakistanalsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska pakistanalsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska pakistanalsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska pakistanalsdkaskdlsakdlska als', 'khanapul faizabad', 55, 1, 'images/153575b604dfe58536.jpg', 'Active', 18),
(34, 1, 'Illustration', 'I\'ll do graphic designing', 'In the example above, when a user types a character in the input field, a function called \"showHint()\" is executed.\r\nThe function is triggered by the onkeyup event.In the example above, when a user types a character in the input field, a function called \"showHint()\" is executed. The function is triggered by the onkeyup event.In the example above, when a user types a character in the input field, a function called \"showHint()\" is executed. The function is triggered by the onkeyup event.', 'ANY KIND OF Illustration WORK', 50, 4, 'images/59955b6afbb1a5b70.jpg', 'Active', 10),
(35, 7, 'Virtual Assistant', 'I\'ll be your virtual assistance', 'Rainbow Cash and Carry is urgently looking to hire HR Executive (Female) to be based at Lahore. Candidate must have experience in Training and Development.  Rainbow Cash and Carry is urgently looking to hire HR Executive (Female) to be based at Lahore. Candidate must have experience in Training and Development.  Rainbow Cash and Carry is urgently looking to hire HR Executive (Female) to be based at Lahore. Candidate must have experience in Training and Development.  Rainbow Cash and Carry is urgently looking to hire HR Executive (Female) to be based at Lahore. Candidate must have experience in Training and Development. ', 'Rainbow Cash and Carry is urgently looking to hire HR Executive (Female) to be based at Lahore. Cand', 60, 4, 'images/278935b6c8b7759552.jpg', 'Active', 15);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `user_id` int(11) NOT NULL,
  `language` varchar(200) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`user_id`, `language`, `level`) VALUES
(3, 'English', 'Intermediat'),
(3, 'Urdu', 'Expert'),
(4, 'Urdu', 'Intermediat'),
(5, 'English', 'Basic'),
(5, 'Hindi', 'Basic'),
(5, 'Urdu', 'Basic'),
(7, 'English', 'Expert'),
(7, 'French', 'Intermediat'),
(7, 'German', 'Intermediat'),
(8, 'English', 'Intermediat'),
(8, 'Hindi', 'Basic'),
(8, 'Urdu', 'Expert'),
(10, 'English', 'Intermediat'),
(10, 'Urdu', 'Expert'),
(11, 'Afghani', 'Expert'),
(13, 'English', 'Basic'),
(13, 'Urdu', 'Expert'),
(14, 'Hindi', 'Expert'),
(14, 'Urdu', 'Expert'),
(15, 'English', 'Intermediat'),
(15, 'French', 'Expert'),
(15, 'German', 'Intermediat'),
(17, 'English', 'Expert'),
(17, 'Urdu', 'Expert'),
(18, 'mooter', 'Expert'),
(18, 'nani', 'Expert'),
(18, 'Sonu', 'Basic');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `sender_id`, `recipient_id`, `message`, `status`, `date`) VALUES
(50, 4, 2, 'helo xyz', '', '2018-07-30 09:41:56'),
(51, 2, 4, 'ali', '', '2018-07-30 09:45:09'),
(52, 4, 2, 'usama', '', '2018-07-30 09:45:22'),
(53, 2, 4, 'ali', '', '2018-07-30 09:45:28'),
(54, 2, 4, 'how are you?', '', '2018-07-30 09:45:40'),
(55, 4, 2, 'I\'m good what abt you?', '', '2018-07-30 09:46:13'),
(56, 3, 4, 'Hello I need database design', '', '2018-07-30 10:15:30'),
(57, 2, 4, 'Great', '', '2018-07-30 10:56:16'),
(58, 2, 4, 'GREAT', '', '2018-07-30 10:56:40'),
(59, 4, 2, 'Awla', '', '2018-07-30 10:57:22'),
(60, 2, 10, 'hello bot', 'read', '2018-08-08 21:46:56'),
(61, 14, 10, 'Hello', 'read', '2018-08-08 21:32:10'),
(62, 10, 14, 'hi', 'read', '2018-08-08 21:28:26'),
(63, 14, 15, 'hello', 'read', '2018-08-07 10:57:28'),
(64, 15, 14, 'Hi', 'read', '2018-08-08 21:28:32'),
(65, 15, 14, 'how are you', 'read', '2018-08-07 10:57:28'),
(66, 15, 14, 'how are you', 'read', '2018-08-07 10:57:28'),
(67, 15, 14, 'how are you', 'read', '2018-08-07 10:57:28'),
(68, 15, 14, 'how are you', 'read', '2018-08-07 10:57:28'),
(69, 15, 14, 'how are you', 'read', '2018-08-07 10:57:28'),
(70, 15, 14, 'how are you', 'read', '2018-08-07 10:57:28'),
(71, 14, 10, 'How are you?', 'read', '2018-08-07 10:57:26'),
(72, 14, 10, '??', 'read', '2018-08-07 10:57:26'),
(73, 14, 15, 'I\'m good. what about you', 'read', '2018-08-07 10:57:28'),
(74, 15, 14, 'I\'m great. Thank you', 'read', '2018-08-07 10:57:28'),
(75, 15, 14, 'I need a website for my company.', 'read', '2018-08-07 10:57:28'),
(76, 14, 9, 'Hello', 'read', '2018-08-07 10:57:25'),
(77, 9, 14, 'Hi', 'read', '2018-08-07 10:57:25'),
(78, 14, 4, 'Hi', 'read', '2018-08-07 10:56:00'),
(79, 4, 14, 'Hello there', 'read', '2018-08-07 10:56:00'),
(80, 14, 4, 'hello', 'read', '2018-08-07 10:56:00'),
(81, 14, 4, 'hello', 'read', '2018-08-07 10:56:00'),
(82, 14, 4, 'Okay', 'read', '2018-08-07 10:56:00'),
(83, 14, 4, 'Ok', 'read', '2018-08-07 10:56:00'),
(84, 14, 4, 'Ok', 'read', '2018-08-07 10:56:00'),
(85, 14, 4, 'okay', 'read', '2018-08-07 10:56:00'),
(86, 14, 4, 'hello', 'read', '2018-08-07 10:56:00'),
(87, 14, 4, 'hello', 'read', '2018-08-07 10:56:00'),
(88, 14, 9, 'hello', 'read', '2018-08-07 10:57:25'),
(89, 14, 9, 'hello', 'read', '2018-08-07 10:57:25'),
(90, 14, 9, 'll', 'read', '2018-08-07 10:57:25'),
(91, 14, 9, 'll', 'read', '2018-08-07 10:57:25'),
(92, 14, 15, 'Hi', 'read', '2018-08-07 10:57:28'),
(93, 14, 15, 'Hi', 'read', '2018-08-07 10:57:28'),
(94, 14, 15, 'okay', 'read', '2018-08-07 10:57:28'),
(95, 14, 15, 'okay', 'read', '2018-08-07 10:57:28'),
(96, 4, 2, 'hi', '', '2018-07-30 20:46:57'),
(97, 11, 4, 'Hi', '', '2018-07-31 05:34:11'),
(98, 11, 14, 'Hi', 'read', '2018-08-08 21:28:22'),
(99, 7, 15, 'Hello', '', '2018-07-31 10:23:33'),
(100, 7, 15, 'Hello', '', '2018-07-31 10:24:40'),
(101, 7, 18, 'hi', '', '2018-07-31 12:00:33'),
(102, 18, 7, 'hello', '', '2018-07-31 12:00:51'),
(103, 14, 10, 'hello', 'read', '2018-08-08 10:30:39'),
(104, 10, 14, 'hi', 'read', '2018-08-08 10:33:55'),
(105, 10, 14, 'hi', 'read', '2018-08-08 10:35:05'),
(106, 14, 10, 'hello', 'read', '2018-08-08 10:35:33'),
(107, 14, 10, 'a', 'read', '2018-08-08 10:35:56'),
(108, 10, 14, 'b\r\n', 'read', '2018-08-08 10:42:01'),
(109, 10, 14, 'asd', 'read', '2018-08-08 10:52:50'),
(110, 10, 14, 'asd', 'read', '2018-08-08 10:53:13'),
(111, 10, 14, 'asd', 'read', '2018-08-08 10:53:38'),
(112, 10, 14, 'asd\r\n', 'read', '2018-08-08 10:53:47'),
(113, 10, 14, 'hola', 'read', '2018-08-08 11:01:06'),
(114, 10, 14, 'hola', 'read', '2018-08-08 11:01:27'),
(115, 14, 10, 'ok', 'read', '2018-08-08 11:01:40'),
(116, 14, 10, 'ok', 'read', '2018-08-08 11:06:16'),
(117, 14, 10, 'hello', 'read', '2018-08-08 11:06:53'),
(118, 14, 10, 'aa', 'read', '2018-08-08 11:07:10'),
(119, 10, 14, 'hello\r\n', 'read', '2018-08-08 11:56:22'),
(120, 10, 14, 'hello\r\n', 'read', '2018-08-08 11:57:20'),
(121, 10, 14, 'hi', 'read', '2018-08-08 12:07:11'),
(122, 10, 14, 'hi', 'read', '2018-08-08 12:07:53'),
(123, 10, 14, 'hello\r\n', 'read', '2018-08-08 12:26:12'),
(124, 10, 14, 'hi', 'read', '2018-08-08 12:28:40'),
(125, 10, 14, 'helo', 'read', '2018-08-08 12:56:28'),
(126, 10, 14, 'asdasd', 'read', '2018-08-08 12:57:00'),
(127, 10, 14, 'ans,dmnbas', 'read', '2018-08-08 12:57:17'),
(128, 10, 14, 'kjasndn', 'read', '2018-08-08 13:03:08'),
(129, 10, 14, 'asdna,s', 'read', '2018-08-08 13:06:38'),
(130, 10, 14, 'asdna,s', 'read', '2018-08-08 13:11:29'),
(131, 14, 10, 'aaa', 'read', '2018-08-08 13:31:23'),
(132, 14, 10, 'asdasdkj', 'read', '2018-08-08 13:32:53'),
(133, 10, 14, 'as,dsa', 'read', '2018-08-08 13:34:04'),
(134, 10, 14, 'as,dsa', 'read', '2018-08-08 13:35:23'),
(135, 14, 10, 'asd', 'read', '2018-08-08 13:35:37'),
(136, 10, 14, 'as,dsa', 'read', '2018-08-08 13:37:17'),
(137, 14, 10, 'asaasd', 'read', '2018-08-08 13:37:54'),
(138, 14, 10, 'asaasd', 'read', '2018-08-08 13:38:44'),
(139, 14, 10, 'asda', 'read', '2018-08-08 13:41:29'),
(140, 14, 10, 'asda', 'read', '2018-08-08 13:43:21'),
(141, 14, 10, 'aaaa', 'read', '2018-08-08 13:44:07'),
(142, 14, 10, 'as', 'read', '2018-08-08 13:44:36'),
(143, 14, 15, 'mnbm', 'read', '2018-08-08 13:51:22'),
(144, 14, 15, 'sad', 'read', '2018-08-08 14:49:25'),
(145, 14, 15, 'asd', 'read', '2018-08-08 13:54:06'),
(146, 14, 15, 'asd', 'read', '2018-08-08 13:54:11'),
(147, 14, 15, 'sds', 'read', '2018-08-08 13:56:34'),
(148, 14, 15, 'sds', 'read', '2018-08-08 13:56:38'),
(149, 14, 15, 'asda', 'read', '2018-08-08 14:49:25'),
(150, 14, 15, 'a.,sdmnm.,asd', 'read', '2018-08-08 15:46:15'),
(151, 14, 15, 'asd', 'read', '2018-08-08 15:46:15'),
(152, 14, 15, 'asdas', 'read', '2018-08-08 18:21:15'),
(153, 14, 15, 'zxcmaslsl', 'read', '2018-08-08 18:21:15'),
(154, 14, 15, 'aaaa', 'read', '2018-08-08 18:21:15'),
(155, 10, 2, 'ASD', 'read', '2018-08-10 17:32:54'),
(156, 10, 2, 'ASD', 'read', '2018-08-08 14:25:03'),
(157, 10, 14, 'asm,dn', 'read', '2018-08-08 14:30:53'),
(158, 14, 10, 'hello bot', 'read', '2018-08-08 21:32:10'),
(159, 10, 14, 'hi arslan', 'read', '2018-08-08 18:23:36'),
(160, 10, 14, 'hello', 'read', '2018-08-08 18:24:46'),
(161, 10, 14, 'hello', 'read', '2018-08-08 18:25:07'),
(162, 10, 14, 'hi', 'read', '2018-08-08 18:28:08'),
(163, 10, 14, 'hello', 'read', '2018-08-08 18:28:08'),
(164, 10, 14, 'hi', 'read', '2018-08-08 21:28:26'),
(165, 14, 10, 'gando oye', 'read', '2018-08-08 19:20:11'),
(166, 14, 10, 'sdf', 'read', '2018-08-08 19:21:00'),
(167, 10, 14, 'hello', 'read', '2018-08-08 21:28:26'),
(168, 14, 10, 'hello', 'read', '2018-08-08 19:31:15'),
(169, 14, 10, 'hello', 'read', '2018-08-08 19:34:02'),
(170, 14, 10, 'askdjasd', 'read', '2018-08-08 19:45:54'),
(171, 10, 2, 'helo', 'read', '2018-08-10 17:32:54'),
(172, 4, 14, 'hola', 'read', '2018-08-08 21:42:52'),
(173, 14, 10, 'hi', 'read', '2018-08-08 21:32:10'),
(174, 14, 10, 'aaa', 'read', '2018-08-08 21:32:10'),
(175, 10, 14, 'asda', 'read', '2018-08-08 21:42:56'),
(176, 10, 14, 'as,m,dmnas', 'read', '2018-08-08 21:42:56'),
(177, 10, 14, 'a,sm.dmm', 'read', '2018-08-08 21:46:53'),
(178, 14, 10, 'sadnas', 'read', '2018-08-08 21:49:32'),
(179, 10, 14, 'asdas', 'read', '2018-08-08 21:50:08'),
(180, 14, 10, 'asdfasd', 'read', '2018-08-08 21:50:12'),
(181, 10, 14, 'asdasd', 'read', '2018-08-08 21:52:50'),
(182, 14, 9, 'asdasd', 'unread', '2018-08-08 21:51:55'),
(183, 14, 9, 'asdasd', 'unread', '2018-08-08 21:52:10'),
(184, 14, 10, 'asdasd', 'read', '2018-08-08 21:53:01'),
(185, 10, 14, 'asdasd', 'read', '2018-08-08 21:53:33'),
(186, 14, 10, 'a.,.s,md', 'read', '2018-08-08 21:53:42'),
(187, 14, 18, 'asadh', 'unread', '2018-08-08 22:52:33'),
(188, 14, 15, 'Thank You.', 'read', '2018-08-09 14:44:47'),
(189, 15, 14, 'Welcome', 'read', '2018-08-09 14:45:22'),
(190, 14, 15, ';)', 'read', '2018-08-09 14:45:27'),
(191, 15, 14, 'saskaslkd', 'read', '2018-08-09 19:48:06'),
(192, 2, 10, 'Hi . I need a website.', 'read', '2018-08-10 17:33:15'),
(193, 10, 2, 'okay . Send me the requirements', 'read', '2018-08-10 17:33:27'),
(194, 14, 10, 'hello', 'read', '2018-08-11 18:31:02'),
(195, 10, 14, 'hi', 'read', '2018-08-11 18:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(16) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `recipient_id` int(11) DEFAULT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `freelancer_id` int(11) DEFAULT NULL,
  `gig_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `brequest_id` int(11) DEFAULT NULL,
  `notification_details` varchar(250) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notification_id`, `user_id`, `recipient_id`, `buyer_id`, `freelancer_id`, `gig_id`, `order_id`, `brequest_id`, `notification_details`, `status`, `time`) VALUES
(2, 14, NULL, NULL, NULL, NULL, NULL, NULL, 'Your request is now Live. Review your unread offers', 'unread', '2018-08-09 15:04:05'),
(3, 14, NULL, NULL, NULL, NULL, NULL, 26, 'Your request is updated successfully. Click here to review your request offers', 'unread', '2018-08-09 15:17:27'),
(4, 14, NULL, NULL, NULL, NULL, NULL, 26, 'Your request is now paused. Review your unread offers', 'unread', '2018-08-09 15:20:14'),
(5, 14, NULL, NULL, NULL, NULL, NULL, 26, 'Your request is successfully resume. Review your unread offers', 'unread', '2018-08-09 15:21:17'),
(9, 15, NULL, NULL, NULL, NULL, NULL, NULL, 'Your gig is now live. Click here to review your gig....', 'unread', '2018-08-09 16:29:49'),
(10, 15, NULL, NULL, NULL, 32, NULL, NULL, 'Your gig is successfully updated. Click here to review your gig....', 'unread', '2018-08-09 16:30:51'),
(11, 15, NULL, NULL, NULL, NULL, 27, NULL, 'Your order is delivered. Click here to review your delivery....', 'unread', '2018-08-09 16:43:45'),
(12, NULL, NULL, NULL, NULL, NULL, NULL, 31, 'Your have received an offer. Click here to review....', 'unread', '2018-08-09 17:14:30'),
(13, 15, NULL, NULL, NULL, 35, NULL, 19, 'Your have received an offer. Click here to review....', 'unread', '2018-08-09 17:20:36'),
(14, NULL, NULL, 14, 15, 32, NULL, NULL, 'Congrats! Your order is successfully completed. Click here to review....', 'unread', '2018-08-09 17:30:19'),
(15, NULL, NULL, 14, 15, 32, 27, NULL, 'Congrats! Your order is successfully completed. Click here to review....', 'unread', '2018-08-09 17:40:03'),
(16, 14, NULL, 14, 15, 32, 27, NULL, 'Congrats! Your order is successfully completed. Click here to review....', 'unread', '2018-08-09 17:56:43'),
(17, 15, NULL, NULL, NULL, 32, NULL, NULL, 'Your gig is successfully updated. Click here to review your gig....', 'unread', '2018-08-09 23:49:26'),
(18, 15, NULL, 14, 15, 32, NULL, NULL, 'Congrats! Your have a new order. Click here to review...', 'unread', '2018-08-09 23:49:32'),
(19, 15, NULL, NULL, NULL, 35, NULL, NULL, 'Your gig is successfully updated. Click here to review your gig....', 'unread', '2018-08-09 20:44:07'),
(20, 11, NULL, NULL, NULL, NULL, NULL, NULL, 'Your request is now Live. Review your unread offers', 'unread', '2018-08-10 13:15:15'),
(21, NULL, NULL, NULL, NULL, 27, NULL, 32, 'Your have received an offer. Click here to review....', 'unread', '2018-08-11 15:29:09'),
(22, NULL, NULL, NULL, NULL, 27, NULL, 31, 'Your have received an offer. Click here to review....', 'unread', '2018-08-11 12:26:40'),
(23, 14, NULL, 14, 10, 26, 34, NULL, 'Congrats! Your order is successfully completed. Click here to review....', 'unread', '2018-08-11 20:00:24'),
(24, 14, NULL, 14, 10, 26, 34, NULL, 'Congrats! Your order is successfully completed. Click here to review....', 'unread', '2018-08-11 20:04:12'),
(25, 14, NULL, 14, 10, 34, NULL, NULL, 'Congrats! Your have a new order. Click here to review...', 'unread', '2018-08-11 20:08:32'),
(26, 10, NULL, NULL, NULL, NULL, 39, NULL, 'Your order is delivered. Click here to review your delivery....', 'unread', '2018-08-11 20:31:55'),
(27, 14, NULL, 14, 10, 34, 39, NULL, 'Congrats! Your order is successfully completed. Click here to review....', 'unread', '2018-08-11 20:33:27'),
(28, 14, NULL, 14, 10, 34, 39, NULL, 'Congrats! Your order is successfully completed. Click here to review....', 'unread', '2018-08-11 20:34:50'),
(29, 14, NULL, 14, 10, 34, 39, NULL, 'Congrats! Your order is successfully completed. Click here to review....', 'unread', '2018-08-11 20:37:56'),
(30, 10, NULL, NULL, NULL, NULL, 39, NULL, 'Your order is delivered. Click here to review your delivery....', 'unread', '2018-08-11 20:39:36'),
(31, 14, NULL, 14, 10, 34, 39, NULL, 'Congrats! Your order is successfully completed. Click here to review....', 'unread', '2018-08-11 20:40:02'),
(32, 14, NULL, 14, 10, 28, NULL, NULL, 'Congrats! Your have a new order. Click here to review...', 'unread', '2018-08-11 20:43:46'),
(33, 14, NULL, 14, 10, 28, NULL, NULL, 'Congrats! Your have a new order. Click here to review...', 'unread', '2018-08-11 20:44:22'),
(34, 14, NULL, 14, 15, 32, NULL, NULL, 'Congrats! Your have a new order. Click here to review...', 'unread', '2018-08-11 20:49:38'),
(35, 14, NULL, 14, 9, 29, NULL, NULL, 'Congrats! Your have a new order. Click here to review...', 'unread', '2018-08-11 20:59:06');

-- --------------------------------------------------------

--
-- Table structure for table `orderrequirements`
--

CREATE TABLE `orderrequirements` (
  `requirement_id` int(11) NOT NULL,
  `requirements` text NOT NULL,
  `upload` text,
  `order_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderrequirements`
--

INSERT INTO `orderrequirements` (`requirement_id`, `requirements`, `upload`, `order_id`, `date`) VALUES
(32, 'I need a logo for my business. Requirements is: Use only 3 colors RED, GREEN, ORANGE. Final logo should be in triangle shape. Company name is LogoMasterCop', 'orderfiles/173035b5d7dfbc4716.jpg', 16, '2018-07-29 11:51:08'),
(33, 'Mar 21, 2018 - The first folder is the destination folder that would receive the uploaded files. Next, go to the root of the CI installation and create a folder named “uploads”. Go to the view folder (located at the root of the CI installation) and create two new “view”Mar 21, 2018 - The first folder is the destination folder that would receive the uploaded files. Next, go to the root of the CI installation and create a folder named “uploads”. Go to the view folder (located at the root of the CI installation) and create two new “view”Mar 21, 2018 - The first folder is the destination folder that would receive the uploaded files. Next, go to the root of the CI installation and create a folder named “uploads”. Go to the view folder (located at the root of the CI installation) and create two new “view”Mar 21, 2018 - The first folder is the destination folder that would receive the uploaded files. Next, go to the root of the CI installation and create a folder named “uploads”. Go to the view folder (located at the root of the CI installation) and create two new “view”', 'orderfiles/311085b5d7e81cc108.jpg', 24, '2018-07-29 08:44:49'),
(35, 'MY REQUIREMENTS ', 'orderfiles/242255b5e2ba8d269c.png', 25, '2018-07-29 21:03:36'),
(36, 'Here is your requirements file', 'orderfiles/202275b5ef5bebb2d7.jpg', 26, '2018-07-30 11:25:50'),
(37, 'Here is your requirements', 'orderfiles/106265b5efa999a802.jpg', 27, '2018-07-30 11:46:33'),
(38, 'Here is your requirements', 'orderfiles/185865b5fa3d6c1dee.png', 28, '2018-07-30 23:48:38'),
(39, 'require', 'orderfiles/216065b5fa8f6afb28.png', 29, '2018-07-31 00:10:30'),
(40, 'requirements', 'orderfiles/274745b5ff57e8258b.png', 30, '2018-07-31 05:37:02'),
(41, 'abcdefgh', 'orderfiles/308015b5fff57ebdf4.png', 31, '2018-07-31 06:19:03'),
(42, 'requirements', 'orderfiles/147195b6050f858cfb.png', 32, '2018-07-31 12:07:20'),
(43, 'dgfdhgfj', 'orderfiles/170685b6051634e4b0.jpg', 33, '2018-07-31 12:09:07'),
(44, 'aasjda', 'orderfiles/235025b617aceaf9d3.jpg', 34, '2018-08-01 09:18:06'),
(45, 'I need logo', 'orderfiles/149165b6b7a676c63e.jpg', 35, '2018-08-08 23:19:03'),
(46, 'asda', 'orderfiles/141255b6b7af2d1598.jpg', 36, '2018-08-08 23:21:22'),
(47, 'asdasd', 'orderfiles/198475b6b7ba0a1055.jpg', 37, '2018-08-08 23:24:16'),
(48, 'requirements', 'orderfiles/258465b6c8ae1427cc.txt', 38, '2018-08-09 18:41:37'),
(49, 'We are building our Enterprise Data Warehouse that combines over 50 data sources and uses a Hybrid - On-Premise SQL Server and Azure Services (Data Lake, Cosmos, Azure SQL Server and Analysis Services) approach. We are increasingly combining data from SAP and other Data Sources and as such, need to identify the optimal approach to combining SAP BW Data with other other data sources. Example Questions: 1. Is it better to extract SAP BW data required and bring it into our MS SQL/Azure Environment or to bring the other data sources into SAP BW and combine it there? 2. If we take SAP BW Data out of SAP BW, what is the best way to ensure SAP Security/Access Rights follow? 3. I am looking to use Power BI as a front-end in a Self-Service model, allowing users to access their SAP data and report on it from Power BI or SSRS. As such, what is the best approach? 4. If we should be building a pipeline between SAP BW and MSSQL/Azure, what is the best method (e.g. SSIS-connector?) Thank you, Grant', 'orderfiles/275475b6f2b0045977.docx', 39, '2018-08-11 18:29:20'),
(50, 'asdasd', NULL, 43, '2018-08-11 19:02:34');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_price` int(10) NOT NULL,
  `order_duration` int(10) NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `start_date` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `complete_date` datetime NOT NULL,
  `buyer_id` int(10) NOT NULL,
  `freelancer_id` int(10) NOT NULL,
  `gig_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_price`, `order_duration`, `order_status`, `start_date`, `due_date`, `complete_date`, `buyer_id`, `freelancer_id`, `gig_id`) VALUES
(16, 999, 7, 'Active', '2018-07-29 13:20:11', '0000-00-00 00:00:00', '2018-08-05 13:20:11', 2, 10, 27),
(24, 15, 1, 'Completed', '2018-07-29 13:44:12', '0000-00-00 00:00:00', '2018-07-30 13:44:12', 2, 9, 29),
(25, 200, 6, 'Completed', '2018-07-30 02:03:15', '0000-00-00 00:00:00', '2018-08-05 02:03:15', 2, 4, 25),
(26, 22, 6, 'Completed', '2018-07-30 16:25:22', '0000-00-00 00:00:00', '2018-08-05 16:25:22', 14, 10, 26),
(27, 80, 1, 'Completed', '2018-07-30 16:46:16', '0000-00-00 00:00:00', '2018-07-31 16:46:16', 14, 15, 32),
(28, 200, 4, 'Completed', '2018-07-31 04:48:19', '0000-00-00 00:00:00', '2018-08-04 04:48:19', 11, 15, 32),
(29, 200, 4, 'Completed', '2018-07-31 05:10:06', '0000-00-00 00:00:00', '2018-08-04 05:10:06', 11, 15, 32),
(30, 200, 4, 'Completed', '2018-07-31 10:36:48', '0000-00-00 00:00:00', '2018-08-04 10:36:48', 11, 15, 32),
(31, 40, 3, 'Completed', '2018-07-31 11:18:38', '0000-00-00 00:00:00', '2018-08-03 11:18:38', 14, 10, 24),
(32, 200, 4, 'Active', '2018-07-31 17:07:02', '0000-00-00 00:00:00', '2018-08-04 17:07:02', 14, 15, 32),
(33, 55, 1, 'Completed', '2018-07-31 17:08:57', '0000-00-00 00:00:00', '2018-08-01 17:08:57', 14, 18, 33),
(34, 22, 6, 'Completed', '2018-08-01 14:17:58', '0000-00-00 00:00:00', '2018-08-07 14:17:58', 14, 10, 26),
(35, 15, 1, 'Active', '2018-08-09 04:18:48', '0000-00-00 00:00:00', '2018-08-10 04:18:48', 14, 9, 29),
(36, 55, 1, 'Active', '2018-08-09 04:21:14', '0000-00-00 00:00:00', '2018-08-10 04:21:14', 14, 18, 33),
(37, 55, 1, 'Active', '2018-08-09 04:24:05', '0000-00-00 00:00:00', '2018-08-10 04:24:05', 14, 18, 33),
(38, 20, 4, 'Active', '2018-08-09 23:40:51', '0000-00-00 00:00:00', '2018-08-13 23:40:51', 14, 15, 32),
(39, 50, 4, 'Completed', '2018-08-11 23:08:30', '0000-00-00 00:00:00', '2018-08-15 23:08:30', 14, 10, 34),
(40, 100, 5, 'Active', '2018-08-11 23:43:45', '2018-08-16 23:43:45', '0000-00-00 00:00:00', 14, 10, 28),
(41, 100, 5, 'Active', '2018-08-11 23:43:45', '2018-08-16 23:43:45', '0000-00-00 00:00:00', 14, 10, 28),
(42, 20, 4, 'Active', '2018-08-11 23:49:37', '2018-08-15 23:49:37', '0000-00-00 00:00:00', 14, 15, 32),
(43, 15, 1, 'Active', '2018-08-11 23:59:05', '0000-00-00 00:00:00', '2018-08-12 23:59:05', 14, 9, 29);

-- --------------------------------------------------------

--
-- Table structure for table `qwp.countries`
--

CREATE TABLE `qwp.countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `qwpearnings`
--

CREATE TABLE `qwpearnings` (
  `earning_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `earn_amount` int(11) NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qwpearnings`
--

INSERT INTO `qwpearnings` (`earning_id`, `order_id`, `earn_amount`, `time`) VALUES
(1, 16, 100, '2018-07-29 20:58:44'),
(3, 24, 2, '2018-07-29 21:00:38'),
(4, 25, 20, '2018-07-29 21:07:21'),
(5, 25, 20, '2018-07-29 21:51:15'),
(6, 25, 20, '2018-07-29 21:51:41'),
(7, 25, 20, '2018-07-29 21:53:22'),
(8, 25, 20, '2018-07-29 21:54:43'),
(9, 25, 20, '2018-07-29 21:54:59'),
(10, 25, 20, '2018-07-29 21:55:17'),
(11, 25, 20, '2018-07-29 21:55:18'),
(12, 25, 20, '2018-07-29 21:55:26'),
(13, 25, 20, '2018-07-29 21:55:37'),
(14, 26, 3, '2018-07-30 11:27:50'),
(15, 28, 20, '2018-07-30 23:57:36'),
(16, 28, 20, '2018-07-30 23:57:47'),
(17, 29, 20, '2018-07-31 00:12:42'),
(18, 30, 20, '2018-07-31 05:39:05'),
(19, 33, 6, '2018-07-31 12:11:22'),
(20, 31, 4, '2018-08-08 15:41:20'),
(21, 31, 4, '2018-08-08 15:43:49'),
(22, 31, 4, '2018-08-08 15:44:11'),
(23, 31, 4, '2018-08-08 15:44:25'),
(24, 31, 4, '2018-08-08 15:46:09'),
(25, 31, 4, '2018-08-08 15:46:09'),
(26, 31, 4, '2018-08-08 15:59:10'),
(27, 31, 4, '2018-08-08 15:59:14'),
(28, 32, 20, '2018-08-09 14:44:20'),
(29, 27, 8, '2018-08-09 15:30:19'),
(30, 27, 8, '2018-08-09 15:40:03'),
(31, 27, 8, '2018-08-09 15:56:43'),
(32, 34, 3, '2018-08-11 18:00:23'),
(33, 34, 3, '2018-08-11 18:04:12'),
(34, 39, 5, '2018-08-11 18:33:27'),
(35, 39, 5, '2018-08-11 18:34:50'),
(36, 39, 5, '2018-08-11 18:37:56'),
(37, 39, 5, '2018-08-11 18:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `servicecategories`
--

CREATE TABLE `servicecategories` (
  `serviceCategory_id` int(11) NOT NULL,
  `serviceCategory_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicecategories`
--

INSERT INTO `servicecategories` (`serviceCategory_id`, `serviceCategory_name`) VALUES
(7, 'BUSINESS'),
(2, 'DIGITAL MARKETING'),
(8, 'FUN & LIFESTYLE'),
(1, 'GRAPHICS & DESIGN'),
(5, 'MUSIC & AUDIO'),
(6, 'PROGRAMMING & TECH'),
(4, 'VIDEO & ANIMATION'),
(3, 'WRITING & TRANSLATION');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `serviceCategory_id` int(11) NOT NULL,
  `serviceCategory_name` varchar(50) NOT NULL,
  `service_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `serviceCategory_id`, `serviceCategory_name`, `service_name`) VALUES
(319, 1, 'GRAPHICS & DESIGN', 'Business Cards & Stationery'),
(320, 1, 'GRAPHICS & DESIGN', 'Illustration'),
(321, 1, 'GRAPHICS & DESIGN', 'Cartoons & Caricatures'),
(322, 1, 'GRAPHICS & DESIGN', 'Flyers & Brochures'),
(323, 1, 'GRAPHICS & DESIGN', 'Book & Album Covers'),
(324, 1, 'GRAPHICS & DESIGN', 'Packaging Design'),
(325, 1, 'GRAPHICS & DESIGN', 'Web & Mobile Design'),
(326, 1, 'GRAPHICS & DESIGN', 'Social Media Design'),
(327, 1, 'GRAPHICS & DESIGN', 'Banner Ads'),
(328, 1, 'GRAPHICS & DESIGN', 'Photoshop Editing'),
(329, 1, 'GRAPHICS & DESIGN', '3D Models & Product Design'),
(330, 1, 'GRAPHICS & DESIGN', 'T-Shirts & Merchandise'),
(331, 1, 'GRAPHICS & DESIGN', 'Presentation Design'),
(332, 1, 'GRAPHICS & DESIGN', 'Infographics'),
(333, 1, 'GRAPHICS & DESIGN', 'Vector Tracing'),
(334, 1, 'GRAPHICS & DESIGN', 'Invitations'),
(335, 1, 'GRAPHICS & DESIGN', 'Other'),
(336, 2, 'DIGITAL MARKETING', 'Social Media Marketing'),
(337, 2, 'DIGITAL MARKETING', 'SEO'),
(338, 2, 'DIGITAL MARKETING', 'Content Marketing'),
(339, 2, 'DIGITAL MARKETING', 'Video Marketing'),
(340, 2, 'DIGITAL MARKETING', 'Email Marketing'),
(341, 2, 'DIGITAL MARKETING', 'Search & Display Marketing'),
(342, 2, 'DIGITAL MARKETING', 'Marketing Strategy'),
(343, 2, 'DIGITAL MARKETING', 'Web Analytics'),
(344, 2, 'DIGITAL MARKETING', 'Influencer Marketing'),
(345, 2, 'DIGITAL MARKETING', 'Local Listings'),
(346, 2, 'DIGITAL MARKETING', 'Domain Research'),
(347, 2, 'DIGITAL MARKETING', 'E-Commerce Marketing'),
(348, 2, 'DIGITAL MARKETING', 'Mobile Advertising'),
(349, 2, 'DIGITAL MARKETING', 'Music Promotion'),
(350, 2, 'DIGITAL MARKETING', 'Web Traffic'),
(351, 3, 'WRITING & TRANSLATION', 'Resumes & Cover Letters'),
(352, 3, 'WRITING & TRANSLATION', 'Proofreading & Editing'),
(353, 3, 'WRITING & TRANSLATION', 'Translation'),
(354, 3, 'WRITING & TRANSLATION', 'Creative Writing'),
(355, 3, 'WRITING & TRANSLATION', 'Business Copywriting'),
(356, 3, 'WRITING & TRANSLATION', 'Research & Summaries'),
(357, 3, 'WRITING & TRANSLATION', 'Articles & Blog Posts'),
(358, 3, 'WRITING & TRANSLATION', 'Press Releases'),
(359, 3, 'WRITING & TRANSLATION', 'Transcription'),
(360, 3, 'WRITING & TRANSLATION', 'Legal Writing'),
(361, 4, 'VIDEO & ANIMATION', 'Whiteboard & Animated Explainers'),
(362, 4, 'VIDEO & ANIMATION', 'Intros & Animated Logos'),
(363, 4, 'VIDEO & ANIMATION', 'Promotional Videos'),
(364, 4, 'VIDEO & ANIMATION', 'Editing & Post Production'),
(365, 4, 'VIDEO & ANIMATION', 'Lyric & Music Videos'),
(366, 4, 'VIDEO & ANIMATION', 'Spokesperson Videos'),
(367, 4, 'VIDEO & ANIMATION', 'Animated Characters & Modeling'),
(368, 4, 'VIDEO & ANIMATION', 'Short Video Ads'),
(369, 4, 'VIDEO & ANIMATION', 'Live Action Explainers'),
(370, 4, 'VIDEO & ANIMATION', 'Product Photography'),
(371, 5, 'MUSIC & AUDIO', 'Voice Over'),
(372, 5, 'MUSIC & AUDIO', 'Mixing & Mastering'),
(373, 5, 'MUSIC & AUDIO', 'Producers & Composers'),
(374, 5, 'MUSIC & AUDIO', 'Singer-Songwriters'),
(375, 5, 'MUSIC & AUDIO', 'Session Musicians & Singers'),
(376, 5, 'MUSIC & AUDIO', 'Jingles & Drops'),
(377, 5, 'MUSIC & AUDIO', 'Sound Effects'),
(378, 6, 'PROGRAMMING & TECH', 'WordPress'),
(379, 6, 'PROGRAMMING & TECH', 'Website Builders & CMS'),
(380, 6, 'PROGRAMMING & TECH', 'Web Programming'),
(381, 6, 'PROGRAMMING & TECH', 'Ecommerce'),
(382, 6, 'PROGRAMMING & TECH', 'Mobile Apps & Web'),
(383, 6, 'PROGRAMMING & TECH', 'Desktop applications'),
(384, 6, 'PROGRAMMING & TECH', 'Support & IT'),
(385, 6, 'PROGRAMMING & TECH', 'Chatbots'),
(386, 6, 'PROGRAMMING & TECH', 'Data Analysis & Reports'),
(387, 6, 'PROGRAMMING & TECH', 'Convert Files'),
(388, 6, 'PROGRAMMING & TECH', 'Databases'),
(389, 6, 'PROGRAMMING & TECH', 'User Testing'),
(390, 6, 'PROGRAMMING & TECH', 'QA'),
(391, 7, 'BUSINESS', 'Virtual Assistant'),
(392, 7, 'BUSINESS', 'Market Research'),
(393, 7, 'BUSINESS', 'Business Plans'),
(394, 7, 'BUSINESS', 'Branding Services'),
(395, 7, 'BUSINESS', 'Legal Consulting'),
(396, 7, 'BUSINESS', 'Financial Consulting'),
(397, 7, 'BUSINESS', 'Business Tips'),
(398, 7, 'BUSINESS', 'Presentations'),
(399, 7, 'BUSINESS', 'Career Advice'),
(400, 7, 'BUSINESS', 'Flyer Distribution'),
(401, 8, 'FUN & LIFESTYLE', 'Online Lessons'),
(402, 8, 'FUN & LIFESTYLE', 'Arts & Crafts'),
(403, 8, 'FUN & LIFESTYLE', 'Relationship Advice'),
(404, 8, 'FUN & LIFESTYLE', 'Health, Nutrition & Fitness'),
(405, 8, 'FUN & LIFESTYLE', 'Astrology & Readings'),
(406, 8, 'FUN & LIFESTYLE', 'Spiritual & Healing'),
(407, 8, 'FUN & LIFESTYLE', 'Family & Genealogy'),
(408, 8, 'FUN & LIFESTYLE', 'Gaming'),
(409, 8, 'FUN & LIFESTYLE', 'Greeting Cards & Videos'),
(410, 8, 'FUN & LIFESTYLE', 'Your Message On...'),
(411, 8, 'FUN & LIFESTYLE', 'Viral Videos'),
(412, 8, 'FUN & LIFESTYLE', 'Pranks & Stunts'),
(413, 8, 'FUN & LIFESTYLE', 'Celebrity Impersonators'),
(414, 8, 'FUN & LIFESTYLE', 'Collectibles'),
(415, 8, 'FUN & LIFESTYLE', 'Global Culture');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `user_id` int(11) NOT NULL,
  `skill` varchar(200) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`user_id`, `skill`, `level`) VALUES
(3, 'Graphic designer', 'Intermediat'),
(3, 'Web Developer', 'Expert'),
(4, 'Web designer', 'Expert'),
(5, 'Presentation Designer', 'Basic'),
(5, 'Software Engineer', 'Expert'),
(5, 'Web designer', 'Intermediat'),
(10, 'Graphic designer', 'Intermediat'),
(15, 'JAVASCRIPT', 'Intermediat'),
(15, 'MYSQL', 'Expert'),
(15, 'PHP', 'Intermediat'),
(18, '123', 'Basic'),
(18, '222', 'Intermediat'),
(18, '2222', 'Basic');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `profile_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `country` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `qualification` varchar(200) DEFAULT NULL,
  `picture` longtext,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`profile_id`, `description`, `country`, `gender`, `qualification`, `picture`, `join_date`, `user_id`) VALUES
(2, 'mzSbx', 'asmsndb', 'asndb', 'asnsmd', 'images/101355b53555b64398.jpg', '0000-00-00 00:00:00', 1),
(3, 'zmsm c.asd.,amsd.,aasdasdasdmbasvdmvasdvasmbdamsndbnbasvdnbvasdnb vansbdv nasvd nasvdnvasndvasnbdvasnsbdvasnasvdascdvbacsdvcasd avs dvasdvcasbvdcasbvdcvasdcvbasd', 'PK', 'Male', NULL, 'images/45335b5d54aab317e.png', '0000-00-00 00:00:00', 2),
(17, 'Hello world this is usama professional website developer Hello world this is usama professional website developer Hello world this is usama professional website developer Hello world this is usama professional website developer ', 'PK', 'Male', NULL, 'images/173975b5c5b0a35635.jpg', '2017-07-22 16:58:06', 5),
(25, 'tHIS IS MY DESCRIPTION tHIS IS MY DESCRIPTION tHIS IS MY DESCRIPTION tHIS IS MY DESCRIPTION tHIS IS MY DESCRIPTION tHIS IS MY DESCRIPTION tHIS IS MY DESCRIPTION tHIS IS MY DESCRIPTION  tHIS IS MY DESCRIPTION', 'NO', 'Male', 'BSCS     2020', 'images/125255b5b2f4241641.jpg', '2018-07-22 21:17:27', 4),
(26, 'This is my profile This is my profile This is my profile This is my profile This is my profile This is my profile This is my profile This is my profile This is my profile This is my profile This is my profile This is my profile This is my profile ', 'PK', 'Male', NULL, NULL, '2018-07-23 08:37:37', 3),
(27, 'Hello world this is usama professional website developer Hello world this is usama professional website developer Hello world this is usama professional website developer Hello world this is usama professional website developer', 'PK', 'Male', NULL, 'images/261525b57b1c952625.jpg', '2018-07-24 22:43:58', 8),
(28, 'I\'m professional website designer with 10 year of experience in web design and developing. I can built any kind of website with amazing and interactive design. I\'m professional website designer with 10 year of experience in web design and developing. I can built any kind of website with amazing and interactive design. I\'m professional website designer with 10 year of experience in web design and developing. I can built any kind of website with amazing and interactive design. I\'m professional website designer with 10 year of experience in web design and developing. I can built any kind of websi', 'US', 'Female', NULL, 'images/63265b6037f25d250.png', '2018-07-24 23:33:43', 7),
(29, 'profile description profile description profile description profile description profile description profile description profile description profile description profile description profile description profile description profile description profile description profile description profile description profile description ', 'AF', 'Female', NULL, 'images/224025b57c35bf355b.jpg', '2018-07-25 00:25:00', 11),
(31, 'Returns FALSE if the form element is not unique to the table and field name in the parameter. Note: This rule requires Query Builder to be enabled in order to work.Returns FALSE if the form element is not unique to the table and field name in the parameter. Note: This rule requires Query Builder to be enabled in order to work.Returns FALSE if the form element is not unique to the table and field name in the parameter. Note: This rule requires Query Builder to be enabled in order to work.Returns FALSE if the form element is not unique to the table and field name in the parameter. Note: This rul', 'AF', 'Male', 'bs economics2030', 'images/324575b57c58fb2c3d.jpg', '2018-07-25 00:34:23', 9),
(32, 'Returns FALSE if the form element is not unique to the table and field name in the parameter. Note: This rule requires Query Builder to be enabled in order to work.Returns FALSE if the form element is not unique to the table and field name in the parameter. Note: This rule requires Query Builder to be enabled in order to work.Returns FALSE if the form element is not unique to the table and field name in the parameter. Note: This rule requires Query Builder to be enabled in order to work.Returns FALSE if the form element is not unique to the table and field name in the parameter. Note: This ras', 'AF', 'Male', 'BSCS 2030', 'images/217305b6d74133ccae.jpg', '2018-07-25 00:42:21', 10),
(33, 'AJAX (Asynchronous Javascript And XML) is a method or technique of web-based programming to create interactive web application.\r\n\r\nWith Ajax, Web applications can send and retrieve data from a server asynchronously (in the background) without interfering with the display and behavior of the existing page.AJAX (Asynchronous Javascript And XML) is a method or technique of web-based programming to create interactive web application.\r\n\r\nWith Ajax, Web applications can send and retrieve data from a server asynchronously (in the background) without interfering with the display and behavior of the existi', 'PK', 'Male', 'BS Software Engineering', 'images/256715b582c59eb843.png', '2018-07-25 07:52:57', 12),
(35, 'I\'m arslan The remark \"in PHP the switch statement is considered a looping structure for the purposes of continue\" near the top of this page threw me off, so I experimented a little using the following code to figure out what the exact semantics of continue inside a switch is:The remark \"in PHP the switch statement is considered a looping structure for the purposes of continue\" near the top of this page threw me off, so I experimented a little using the following code to figure out what the exact semantics of continue inside a switch is:', 'OM', 'Male', NULL, 'images/76905b6d729dcfc0d.png', '2018-07-30 11:19:20', 14),
(36, 'I\'m usama The remark \"in PHP the switch statement is considered a looping structure for the purposes of continue\" near the top of this page threw me off, so I experimented a little using the following code to figure out what the exact semantics of continue inside a switch is: asd', 'PK', 'Male', 'BS Software Engineering  2019', 'images/92025b6d6b09abb87.png', '2018-07-30 11:31:32', 15),
(37, 'working in education sector working in education sector working in education sector working in education sector working in education sector working in education sector working in education sector ', 'PK', 'Male', NULL, 'images/165715b60048304803.png', '2018-07-31 05:56:26', 17),
(38, ' alsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska alsdkaskdlsakdlska', 'PK', 'Male', 'BS in pakistan2018', 'images/41805b604d1adb581.jpg', '2018-07-31 11:50:50', 18);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `salt` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `salt`, `type`, `join_date`) VALUES
(1, 'ali12', 'ali12@gmail.com', 'asdfasdf', '', 'asdfasdf', '0000-00-00 00:00:00'),
(2, 'ali123', 'ali123@gmail.com', '57dccbb5787d7cfff880952362d8b22a742912fc0a95db6e996bd901eec35150', '$2y$10$6Rs9xL9FFSGPM.LFrcWZOucVfoQI1v3hoUwj24FrPPxmna9NnnUEW', 'buyer', '0000-00-00 00:00:00'),
(3, 'ali11', 'ali11@gmail.com', '185274d63115dc0a1387c02b0afcc5c6ff213a410f0271556563c3dc266926cd', '$2y$10$5mwXTiKvjmjFAlS2BFqxKeX50HK0Cm6QvTtyll4e4d2J2X2WUtfBW', 'buyer', '2015-04-09 19:00:00'),
(4, 'ali111', 'ali@gmail.com', '362a9150123fdd07b02f24b6a5496b41ef2e04b839f300f1ec3678e18349eb79', '$2y$10$M0vQoPXGrmYZXRb8Motf1uK2/NlzuY0ONO84Um6EfmQ2t2b2s9Icm', 'freelancer', '2018-07-22 08:29:52'),
(5, 'ali222', 'ali222@gmail.com', '814f14157b6c396615a4bfb632c65f143b4367b68bc7a6f0289b650e6167d720', '$2y$10$.SWzRHbaXIAFflogXWkbuuXgIkaKIk0p3A/kgH4vKGMhlmOt.SIzO', 'buyer', '2017-07-22 13:57:49'),
(6, 'Xama9', 'xama99@gmail.com', '800924fdfa1fcdda123bbd87f3fa35777fb073e2fb34e92886dd9d643e977c77', '$2y$10$L9bLswhXPjAmP14hj87MR.BMeeePMIv2cNI78Fw7aLzoMbwyjWJeu', 'buyer', '2018-07-24 22:27:45'),
(7, 'xama8', 'xama88@gmail.com', 'fc9e8d3490fe399a76d8d0ed5e7d00ae412570c6580096b32e0b365960ea0761', '$2y$10$xAk6F43aYwxNH9cOKL.w9unFqkP.gC60M3acSGsk62RyllazGJ4LS', 'buyer', '2018-07-24 22:32:26'),
(8, 'ali999', 'ali99@yahoo.com', 'ea755356aac3a13b77c3964d2b1b5c30d284531b9fe36bf88443f5ad9f23f227', '$2y$10$fXYclZ0h2ICNxUEojIIkPuGJ92dL.iToaXU.JEbS/e9fk/I9bMTSC', 'buyer', '2018-07-24 22:33:55'),
(9, 'xama123', 'xama@hotmail.com', '1a548cd2986cc7b56be2b7d0a43f7b403898c3843de825ed74b5543075ca4b4d', '$2y$10$vOTtgV1EIUzmXW6Klqzjw.Ja.Gn5u24ArveCH7r3vlP9TJZ2sFY7i', 'freelancer', '2018-07-24 23:50:34'),
(10, 'Bot-007', 'bot@clogix.com', 'f7cb095d6452823309e3d9dd6a825359cfdf7092311556865ea436c257b540e1', '$2y$10$G0aAkf8trNB.uE05ILQCluLGg6OnZGXgV9gfluFcxrvJIx8xlVzIa', 'freelancer', '2018-07-25 00:02:43'),
(11, 'johnn', 'asdf@gmail.com', 'c62c19f99ab74b8972cf07daf1304beb773aa36bf5e555a86bcb0fe4e601b55b', '$2y$10$sNiUS46eSzZSpzQDoc7EPuwuZgqgvA6Eiv4UXa8.si5iBm0He2Hum', 'buyer', '2018-07-25 00:15:53'),
(12, 'xama1', 'xama1@fmail.com', 'feec8b101c0fb5ee0dab4b0ab40eeef32c2fe66eb4dab7e96966563bdb789387', '$2y$10$HzsqFSQzQggpXeX37dQfl.kYHSUSAFC5SSpWy1z6H.CBVOaydkEIi', 'freelancer', '2018-07-25 07:51:49'),
(13, 'aasas', 'usama@gmail.comzsas', '2aa26150f773d2c92140bee6a54846386b155c3c1ad91ecd5a5d384f7ab7fcf1', '$2y$10$5ybjBtqvdcagcKnGOTmOW.dE36BxlpDlzAIF4v7ReE/8WD8P9yJYS', 'buyer', '2018-07-30 11:14:41'),
(14, 'arslan', 'arslan@gmail.com', '88c1aaaed771ad83fce79f2ab50cc9c4e2b62ea43c6ede888403d1f290410c53', '$2y$10$1Hxt.5.ZPdy.T236ZxNVQeH2b.SM0oNRWU1ZCTlvrfPrqfWQe2sXC', 'buyer', '2018-07-30 11:18:31'),
(15, 'usama', 'usama@gmail.com', 'af493df47fba71267cc9012b129d2eec285da2797f9dae92be5bee8ec9351492', '$2y$10$MPPScEATeyCxDGXHHU0yCe9BGBiMxcjBRi1c7jxl9E67oVLrm9vyq', 'freelancer', '2018-07-30 11:30:23'),
(16, '12345', 'sehole@gmail.com', 'cced84e8d286a75afd61c57c8c073d4a00469aa344bcf1d5ec6dfbcc76075903', '$2y$10$NyVnZ2gEhk9soVTCamObFO3KxmRzpE7GQAbVNm6RnZgmIL7Iv400G', 'buyer', '2018-07-31 05:52:56'),
(17, 'sehole', 'sehole1@gmail.com', 'b5e9d5cda0f8b3aacb394fafc67f54cb2ff8ebabfafcac50f3421b1acf33486e', '$2y$10$2UFiCSLb0a1/Ss1WRmF0euVRj9tmqFVqsII6NQexHvgG4DEigWZ.W', 'buyer', '2018-07-31 05:53:55'),
(18, 'mr_altaf', 'khan@gmail.com', '01e01bc5633b6136ab0a6aa1a2f72930da2109c3ecdd2377b16a2cdf1182b8f9', '$2y$10$u5Sz3lzYyOdO1t.8exXweeWYlVIn/bz0Qtke3dC.Yo4mGJKfrJ0s6', 'freelancer', '2018-07-31 11:46:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_notification`
--

CREATE TABLE `user_notification` (
  `unotification_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `details` varchar(500) NOT NULL,
  `send_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_notification`
--

INSERT INTO `user_notification` (`unotification_id`, `title`, `details`, `send_at`) VALUES
(1, 'User Notification', 'Your order is updated. Please check to see changes with your order and delivered it again', '2018-07-11 04:21:04'),
(2, 'User Notification', 'Your order is updated. Please check to see changes with your order and delivered it again', '2018-07-11 04:21:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `applybuyerrequest`
--
ALTER TABLE `applybuyerrequest`
  ADD PRIMARY KEY (`applyRequest_id`),
  ADD KEY `buyerRequest_id` (`brequest_id`),
  ADD KEY `freelancer_id` (`freelancer_id`);

--
-- Indexes for table `buyerrequest`
--
ALTER TABLE `buyerrequest`
  ADD PRIMARY KEY (`brequest_id`),
  ADD KEY `buyer_id` (`buyer_id`);

--
-- Indexes for table `cardverification`
--
ALTER TABLE `cardverification`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `FK_cardverification` (`buyer_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliverorder`
--
ALTER TABLE `deliverorder`
  ADD PRIMARY KEY (`delivery_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `earnings`
--
ALTER TABLE `earnings`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `freelancer_id` (`freelancer_id`);

--
-- Indexes for table `gigs`
--
ALTER TABLE `gigs`
  ADD PRIMARY KEY (`gig_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`user_id`,`language`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`),
  ADD KEY `sender_id` (`user_id`),
  ADD KEY `recipient_id` (`recipient_id`);

--
-- Indexes for table `orderrequirements`
--
ALTER TABLE `orderrequirements`
  ADD PRIMARY KEY (`requirement_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `freelancer_id` (`freelancer_id`),
  ADD KEY `buyer_id` (`buyer_id`),
  ADD KEY `gig_id` (`gig_id`);

--
-- Indexes for table `qwp.countries`
--
ALTER TABLE `qwp.countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qwpearnings`
--
ALTER TABLE `qwpearnings`
  ADD PRIMARY KEY (`earning_id`);

--
-- Indexes for table `servicecategories`
--
ALTER TABLE `servicecategories`
  ADD PRIMARY KEY (`serviceCategory_id`),
  ADD UNIQUE KEY `serviceCategory_name` (`serviceCategory_name`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`),
  ADD UNIQUE KEY `service_name` (`service_name`),
  ADD KEY `serviceCategory_id` (`serviceCategory_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`user_id`,`skill`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_notification`
--
ALTER TABLE `user_notification`
  ADD PRIMARY KEY (`unotification_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applybuyerrequest`
--
ALTER TABLE `applybuyerrequest`
  MODIFY `applyRequest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `buyerrequest`
--
ALTER TABLE `buyerrequest`
  MODIFY `brequest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `cardverification`
--
ALTER TABLE `cardverification`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=396;

--
-- AUTO_INCREMENT for table `deliverorder`
--
ALTER TABLE `deliverorder`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `earnings`
--
ALTER TABLE `earnings`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `gigs`
--
ALTER TABLE `gigs`
  MODIFY `gig_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `orderrequirements`
--
ALTER TABLE `orderrequirements`
  MODIFY `requirement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `qwp.countries`
--
ALTER TABLE `qwp.countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qwpearnings`
--
ALTER TABLE `qwpearnings`
  MODIFY `earning_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `servicecategories`
--
ALTER TABLE `servicecategories`
  MODIFY `serviceCategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=416;

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_notification`
--
ALTER TABLE `user_notification`
  MODIFY `unotification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applybuyerrequest`
--
ALTER TABLE `applybuyerrequest`
  ADD CONSTRAINT `applybuyerrequest_ibfk_1` FOREIGN KEY (`brequest_id`) REFERENCES `buyerrequest` (`brequest_id`),
  ADD CONSTRAINT `applybuyerrequest_ibfk_2` FOREIGN KEY (`freelancer_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `buyerrequest`
--
ALTER TABLE `buyerrequest`
  ADD CONSTRAINT `buyerrequest_ibfk_1` FOREIGN KEY (`buyer_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `cardverification`
--
ALTER TABLE `cardverification`
  ADD CONSTRAINT `FK_cardverification` FOREIGN KEY (`buyer_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `deliverorder`
--
ALTER TABLE `deliverorder`
  ADD CONSTRAINT `deliverorder_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `earnings`
--
ALTER TABLE `earnings`
  ADD CONSTRAINT `earnings_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `earnings_ibfk_2` FOREIGN KEY (`freelancer_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `gigs`
--
ALTER TABLE `gigs`
  ADD CONSTRAINT `gigs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `languages`
--
ALTER TABLE `languages`
  ADD CONSTRAINT `language_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`recipient_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`freelancer_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`buyer_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`gig_id`) REFERENCES `gigs` (`gig_id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`serviceCategory_id`) REFERENCES `servicecategories` (`serviceCategory_id`);

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD CONSTRAINT `userprofile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
