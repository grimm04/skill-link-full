-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2018 at 12:40 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skill_link`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtionals`
--

CREATE TABLE `addtionals` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `interestid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaign_schedules`
--

CREATE TABLE `campaign_schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_company` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campaign_schedules`
--

INSERT INTO `campaign_schedules` (`id`, `id_company`, `description`, `date`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'asd', '2018-09-20', 1, '2018-09-20 09:38:02', '2018-09-24 06:42:42', NULL),
(2, 1, 'survey_image', '2018-09-29', 0, '2018-09-20 09:39:02', '2018-09-20 09:39:02', NULL),
(3, 1, 'Dani setiawan', '2018-09-19', 0, '2018-09-20 09:39:23', '2018-09-20 09:39:23', NULL),
(4, 1, 'Dani setiawan', '2018-09-19', 0, '2018-09-20 09:40:36', '2018-09-20 09:40:36', NULL),
(5, 1, 'tes', '2018-08-31', 0, '2018-09-24 06:06:11', '2018-09-24 06:06:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `userid`, `title`, `photo`, `institution`, `location`, `expiry_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 2, 'tess', '1532398269lt00001111.png', 'tess', 'tes', '2018-07-12', '2018-07-01 21:55:17', '2018-07-23 19:11:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `child_trades`
--

CREATE TABLE `child_trades` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriprion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tradeid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `child_trades`
--

INSERT INTO `child_trades` (`id`, `name`, `descriprion`, `tradeid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Boilermaker', 'Boilermaker', 1, '2018-01-13 18:59:18', '2018-01-13 18:59:18', NULL),
(2, 'Bricklayer', 'Bricklayer', 1, '2018-01-13 18:59:25', '2018-01-13 18:59:25', NULL),
(3, 'Carpenter', 'Carpenter', 1, '2018-01-13 18:59:34', '2018-01-13 18:59:34', NULL),
(4, 'Concrete finisher', 'Concrete finisher', 1, '2018-01-13 18:59:39', '2018-01-13 18:59:39', NULL),
(5, 'Crane and hoisting equipment operator (cheo)', 'Crane and hoisting equipment operator (cheo)', 1, '2018-01-13 18:59:45', '2018-01-13 18:59:45', NULL),
(6, 'Electrician', 'Electrician', 1, '2018-01-13 18:59:50', '2018-01-13 18:59:50', NULL),
(7, 'Equipment operator', 'Equipment operator', 1, '2018-01-13 18:59:56', '2018-01-13 18:59:56', NULL),
(8, 'Fireproofing', 'Fireproofing', 1, '2018-01-13 19:00:01', '2018-01-13 19:00:01', NULL),
(9, 'Gasfilter', 'Gasfilter', 1, '2018-01-13 19:00:07', '2018-01-13 19:00:07', NULL),
(10, 'Heavy equipment technician', 'Heavy equipment technician', 1, '2018-01-13 19:00:13', '2018-01-13 19:00:13', NULL),
(11, 'Industrial mechanic (Millwright)', 'Industrial mechanic (Millwright)', 1, '2018-01-13 19:00:24', '2018-01-13 19:00:24', NULL),
(12, 'Instrumentation and control technician (Instrumentation)', 'Instrumentation and control technician (Instrumentation)', 1, '2018-01-13 19:00:31', '2018-01-13 19:00:31', NULL),
(13, 'Insulator (Heat and Frost)', 'Insulator (Heat and Frost)', 1, '2018-01-13 19:00:39', '2018-01-13 19:00:39', NULL),
(14, 'Ironworker', 'Ironworker', 1, '2018-01-13 19:00:44', '2018-01-13 19:00:44', NULL),
(15, 'Labourer', 'Labourer', 1, '2018-01-13 19:00:49', '2018-01-13 19:00:49', NULL),
(16, 'Machinist', 'Machinist', 1, '2018-01-13 19:00:55', '2018-01-13 19:00:55', NULL),
(17, 'Metal Fabricator (Filter)', 'Metal Fabricator (Filter)', 1, '2018-01-13 19:01:01', '2018-01-13 19:01:01', NULL),
(18, 'Painter and decorator (Industrial painter and sand blaster)', 'Painter and decorator (Industrial painter and sand blaster)', 1, '2018-01-13 19:01:07', '2018-01-13 19:01:07', NULL),
(19, 'Plumber', 'Plumber', 1, '2018-01-13 19:01:13', '2018-01-13 19:01:13', NULL),
(20, 'Power system electrician', 'Power system electrician', 1, '2018-01-13 19:01:19', '2018-01-13 19:01:19', NULL),
(21, 'Powerline Technician', 'Powerline Technician', 1, '2018-01-13 19:01:26', '2018-01-13 19:01:26', NULL),
(22, 'Refrigeration and air conditioning mechanic', 'Refrigeration and air conditioning mechanic', 1, '2018-01-13 19:01:43', '2018-01-13 19:01:43', NULL),
(23, 'Rig technician', 'Rig technician', 1, '2018-01-13 19:01:51', '2018-01-13 19:01:51', NULL),
(24, 'Safety watch', 'Safety watch', 1, '2018-01-13 19:01:56', '2018-01-13 19:01:56', NULL),
(25, 'Scaffolders', 'Scaffolders', 1, '2018-01-13 19:02:01', '2018-01-13 19:02:01', NULL),
(26, 'Sheet mental worker', 'Sheet mental worker', 1, '2018-01-13 19:02:09', '2018-01-13 19:02:09', NULL),
(27, 'Spark watch', 'Spark watch', 1, '2018-01-13 19:02:17', '2018-01-13 19:02:17', NULL),
(28, 'Steamfitler-pipefitter', 'Steamfitler-pipefitter', 1, '2018-01-13 19:02:22', '2018-01-13 19:02:22', NULL),
(29, 'Welder', 'Welder', 1, '2018-01-13 19:02:27', '2018-01-13 19:02:27', NULL),
(30, 'Appliance service technician', 'Appliance service technician', 2, '2018-01-13 19:02:46', '2018-01-13 19:02:46', NULL),
(31, 'Auto Body technician', 'Auto Body technician', 2, '2018-01-13 19:02:54', '2018-01-13 19:02:54', NULL),
(32, 'Automotive service technician', 'Automotive service technician', 2, '2018-01-13 19:03:04', '2018-01-13 19:03:04', NULL),
(33, 'Baker', 'Baker', 2, '2018-01-13 19:03:15', '2018-01-13 19:03:15', NULL),
(34, 'Bricklayer', 'Bricklayer', 2, '2018-01-13 19:03:21', '2018-01-13 19:03:21', NULL),
(35, 'Cabinetmarker', 'Cabinetmarker', 2, '2018-01-13 19:03:27', '2018-01-13 19:03:27', NULL),
(36, 'Carpenter', 'Carpenter', 2, '2018-01-13 19:03:33', '2018-01-13 19:03:33', NULL),
(37, 'Communication technician', 'Communication technician', 2, '2018-01-13 19:03:41', '2018-01-13 19:03:41', NULL),
(38, 'Concrete finisher', 'Concrete finisher', 2, '2018-01-13 19:03:51', '2018-01-13 19:03:51', NULL),
(39, 'Cook', 'Cook', 2, '2018-01-13 19:03:58', '2018-01-13 19:03:58', NULL),
(40, 'Drywaller', 'Drywaller', 2, '2018-01-13 19:04:03', '2018-01-13 19:04:03', NULL),
(41, 'Electric motor system technician', 'Electric motor system technician', 2, '2018-01-13 19:04:11', '2018-01-13 19:04:11', NULL),
(42, 'Elevator constructor', 'Elevator constructor', 2, '2018-01-13 19:04:17', '2018-01-13 19:04:17', NULL),
(43, 'Equipment operator', 'Equipment operator', 2, '2018-01-13 19:04:24', '2018-01-13 19:04:24', NULL),
(44, 'Floorcovering Installer', 'Floorcovering Installer', 2, '2018-01-13 19:04:42', '2018-01-13 19:04:42', NULL),
(45, 'Framer', 'Framer', 2, '2018-01-13 19:04:49', '2018-01-13 19:04:49', NULL),
(46, 'Gasfiltter', 'Gasfiltter', 2, '2018-01-13 19:04:54', '2018-01-13 19:04:54', NULL),
(47, 'Glazier', 'Glazier', 2, '2018-01-13 19:05:00', '2018-01-13 19:05:00', NULL),
(48, 'Labourer', 'Labourer', 2, '2018-01-13 19:05:06', '2018-01-13 19:05:06', NULL),
(49, 'Landscape horticulturist', 'Landscape horticulturist', 2, '2018-01-13 19:05:13', '2018-01-13 19:05:13', NULL),
(50, 'Painter and Decorator', 'Painter and Decorator', 2, '2018-01-13 19:05:23', '2018-01-13 19:05:23', NULL),
(51, 'Parts technician', 'Parts technician', 2, '2018-01-13 19:05:31', '2018-01-13 19:05:31', NULL),
(52, 'Plumber', 'Plumber', 2, '2018-01-13 19:05:38', '2018-01-13 19:05:38', NULL),
(53, 'Powerline Technician', 'Powerline Technician', 2, '2018-01-13 19:06:21', '2018-01-13 19:06:21', NULL),
(54, 'Roofer', 'Roofer', 2, '2018-01-13 19:06:30', '2018-01-13 19:06:30', NULL),
(55, 'Sprinkler system installer', 'Sprinkler system installer', 2, '2018-01-13 19:06:38', '2018-01-13 19:06:38', NULL),
(56, 'Tile setter', 'Tile setter', 2, '2018-01-13 19:06:45', '2018-01-13 19:06:45', NULL),
(57, 'Transport refrigeration technician', 'Transport refrigeration technician', 2, '2018-01-13 19:06:52', '2018-01-13 19:06:52', NULL),
(58, 'Water well driller', 'Water well driller', 2, '2018-01-13 19:07:01', '2018-01-13 19:07:01', NULL),
(59, 'Power system electrician', 'Power system electrician', 2, '2018-01-13 19:07:38', '2018-01-13 19:07:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment_articles`
--

CREATE TABLE `comment_articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_post` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment_articles`
--

INSERT INTO `comment_articles` (`id`, `comment`, `id_post`, `id_user`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'loem ianoado foadlf a', 2, 1, '2018-02-15 04:16:13', NULL, NULL),
(2, 'sdasdasd sa das', 2, 2, '2018-02-15 00:13:15', NULL, NULL),
(3, 'asdsadasd', 5, 2, '2018-02-18 21:41:33', '2018-02-18 21:41:33', NULL),
(4, 'tes', 5, 2, '2018-02-18 21:41:46', '2018-02-18 21:41:46', NULL),
(5, 'asda ds', 5, 2, '2018-02-18 21:42:27', '2018-02-18 21:42:27', NULL),
(6, 'asda sdas', 5, 2, '2018-02-18 21:43:27', '2018-02-18 21:43:27', NULL),
(7, 'tese s', 5, 2, '2018-02-18 21:43:37', '2018-02-18 21:43:37', NULL),
(8, 'tes', 5, 2, '2018-02-18 21:44:33', '2018-02-18 21:44:33', NULL),
(9, 'tes', 5, 2, '2018-02-18 21:44:44', '2018-02-18 21:44:44', NULL),
(10, 'tes', 6, 2, '2018-02-18 21:55:35', '2018-02-18 21:55:35', NULL),
(11, 'sss', 5, 2, '2018-02-18 21:59:42', '2018-02-18 21:59:42', NULL),
(12, 'tes df', 4, 2, '2018-02-18 22:51:13', '2018-02-18 22:51:13', NULL),
(13, 'cccc', 3, 2, '2018-02-18 22:51:37', '2018-02-18 22:51:37', NULL),
(14, 'sdasd', 2, 2, '2018-02-18 22:55:19', '2018-02-18 22:55:19', NULL),
(15, 'asdas', 6, 2, '2018-02-18 23:11:05', '2018-02-18 23:11:05', NULL),
(16, 'tes', 13, 2, '2018-03-18 02:51:22', '2018-03-18 02:51:22', NULL),
(17, 'tes', 11, 4, '2018-04-22 18:39:29', '2018-04-22 18:39:29', NULL),
(18, 'tes', 13, 2, '2018-05-01 20:56:06', '2018-05-01 20:56:06', NULL),
(19, 'adfasd', 19, 2, '2018-05-01 20:56:46', '2018-05-01 20:56:46', NULL),
(20, 'enadf', 18, 2, '2018-05-01 21:09:49', '2018-05-01 21:09:49', NULL),
(21, 'enadf', 18, 2, '2018-05-01 21:09:50', '2018-05-01 21:09:50', NULL),
(22, 'enadf', 18, 2, '2018-05-01 21:09:50', '2018-05-01 21:09:50', NULL),
(23, 'enter', 19, 2, '2018-05-01 21:10:01', '2018-05-01 21:10:01', NULL),
(24, 'sadsad', 19, 2, '2018-05-01 21:10:14', '2018-05-01 21:10:14', NULL),
(25, 'tes', 19, 2, '2018-05-01 21:11:21', '2018-05-01 21:11:21', NULL),
(26, 'adfasdf', 19, 2, '2018-05-01 21:38:25', '2018-05-01 21:38:25', NULL),
(27, 'rss', 19, 2, '2018-05-07 04:07:08', '2018-05-07 04:07:08', NULL),
(28, 'tes', 18, 2, '2018-05-22 22:48:35', '2018-05-22 22:48:35', NULL),
(29, 'tes', 18, 2, '2018-05-22 22:48:51', '2018-05-22 22:48:51', NULL),
(30, 'res', 18, 2, '2018-05-22 22:49:22', '2018-05-22 22:49:22', NULL),
(31, 'tdv dsf', 18, 2, '2018-05-22 22:50:00', '2018-05-22 22:50:00', NULL),
(32, 'asdsad', 40, 2, '2018-05-22 22:51:11', '2018-05-22 22:51:11', NULL),
(33, 'asdas das d', 40, 2, '2018-05-22 22:53:32', '2018-05-22 22:53:32', NULL),
(34, 'tess', 40, 2, '2018-05-22 22:55:05', '2018-05-22 22:55:05', NULL),
(35, 'tesd df sd', 18, 2, '2018-05-22 22:57:02', '2018-05-22 22:57:02', NULL),
(36, 'tes', 40, 2, '2018-05-22 23:00:49', '2018-05-22 23:00:49', NULL),
(37, 'tes ya', 10, 2, '2018-05-22 23:01:17', '2018-05-22 23:01:17', NULL),
(38, 'tess', 40, 2, '2018-05-22 23:06:53', '2018-05-22 23:06:53', NULL),
(39, 'tess', 18, 2, '2018-05-22 23:07:15', '2018-05-22 23:07:15', NULL),
(40, 'tesf sd', 18, 2, '2018-05-22 23:17:07', '2018-05-22 23:17:07', NULL),
(41, 'tes again', 18, 2, '2018-05-22 23:21:17', '2018-05-22 23:21:17', NULL),
(42, 'ts s dfds', 18, 2, '2018-05-22 23:27:45', '2018-05-22 23:27:45', NULL),
(43, 'tes', 19, 2, '2018-05-22 23:34:03', '2018-05-22 23:34:03', NULL),
(44, 'afd adsf dsf ds', 115, 2, '2018-05-29 23:34:45', '2018-05-29 23:34:45', NULL),
(45, 'lalallaa', 122, 2, '2018-05-30 01:34:24', '2018-05-30 01:34:24', NULL),
(46, 'asd sad', 123, 4, '2018-05-30 21:26:36', '2018-05-30 21:26:36', NULL),
(47, 'tesssss', 124, 4, '2018-05-30 23:36:43', '2018-05-30 23:36:43', NULL),
(48, 'aaaaa', 124, 4, '2018-05-30 23:40:07', '2018-05-30 23:40:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ceo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ceo_since` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `headquarter` int(10) UNSIGNED DEFAULT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_size` int(11) DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `founded` date DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ig` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` int(10) UNSIGNED DEFAULT NULL,
  `typecompanyid` int(10) UNSIGNED DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `slug` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('Close Company','Pubilc Company') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `userid`, `name`, `ceo`, `ceo_since`, `headquarter`, `about`, `company_size`, `website`, `founded`, `email`, `fb`, `ig`, `twitter`, `yt`, `avatar`, `location`, `typecompanyid`, `status`, `slug`, `type`, `trial`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Exxon Mobil', 'Stuart Bradie s', '2018-09-25 05:18:36', 1, 'test', 10000, 'www.exonmobile.com', '2015-01-01', 'example@exon.com', 'www.facebook.com', 'instagram.com', 'www.twitter.com', 'www.youtube.com', '1520223923kbr.png', 4, 2, 1, 'exxon-mobil', 'Pubilc Company', 1, '2018-03-17 23:52:49', '2018-09-23 17:28:40', NULL),
(2, 1, 'Blio Example', 'Stuart Bradie', '2018-09-25 05:18:33', 12, '', 10000, 'www.exonmobile.com', '2017-01-02', 'example@exon.com', 'www.facebook.com', 'instagram.com', 'www.twitter.com', 'www.youtube.com', '1520223923kbr.png', 13, 2, 1, 'blio-example', 'Close Company', 1, '2018-03-17 23:53:41', '2018-03-17 23:53:41', NULL),
(4, 1, 'dangdo company', ' ', '2018-09-25 04:52:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1520223923kbr.png', NULL, NULL, 1, NULL, NULL, 1, '2018-09-14 00:31:23', '2018-09-14 00:31:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company_industries`
--

CREATE TABLE `company_industries` (
  `id` int(10) UNSIGNED NOT NULL,
  `companyid` int(10) UNSIGNED NOT NULL,
  `industryid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_industries`
--

INSERT INTO `company_industries` (`id`, `companyid`, `industryid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 3, '2018-03-18 01:11:56', '2018-03-18 01:11:56', NULL),
(2, 1, 4, '2018-03-18 01:12:07', '2018-03-18 01:12:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company_specialities`
--

CREATE TABLE `company_specialities` (
  `id` int(10) UNSIGNED NOT NULL,
  `companyid` int(10) UNSIGNED NOT NULL,
  `specialityid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_specialities`
--

INSERT INTO `company_specialities` (`id`, `companyid`, `specialityid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, '2018-03-18 01:06:49', '2018-03-18 01:06:49', NULL),
(2, 1, 2, '2018-03-18 01:06:56', '2018-03-18 01:06:56', NULL),
(3, 1, 1, '2018-03-18 01:07:21', '2018-03-18 01:07:21', NULL),
(4, 1, 3, '2018-03-18 01:07:48', '2018-03-18 01:07:48', NULL),
(5, 1, 4, '2018-03-18 01:07:56', '2018-03-18 01:07:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` int(10) UNSIGNED NOT NULL,
  `userone` int(10) UNSIGNED NOT NULL,
  `usertwo` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`id`, `userone`, `usertwo`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 2, 4, '24', '2018-07-22 21:08:39', '2018-07-22 21:08:39', NULL),
(4, 2, 18, '218', '2018-07-22 22:04:50', '2018-07-22 22:04:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conversation_admins`
--

CREATE TABLE `conversation_admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `userone` int(10) UNSIGNED NOT NULL,
  `usertwo` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conversation_admins`
--

INSERT INTO `conversation_admins` (`id`, `userone`, `usertwo`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 3, '13', '2018-09-24 06:01:16', '2018-09-24 06:01:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `conversation_recruits`
--

CREATE TABLE `conversation_recruits` (
  `id` int(10) UNSIGNED NOT NULL,
  `useradmin` int(10) UNSIGNED NOT NULL,
  `useremployee` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conversation_recruits`
--

INSERT INTO `conversation_recruits` (`id`, `useradmin`, `useremployee`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, '12', '2018-09-24 20:10:31', '2018-09-24 20:10:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `duration_jobs`
--

CREATE TABLE `duration_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `duration_jobs`
--

INSERT INTO `duration_jobs` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Temporary', '2018-07-09 21:52:58', '2018-07-09 21:52:58', NULL),
(2, '2 Weeks +', '2018-07-09 21:53:06', '2018-07-09 21:53:06', NULL),
(3, '1 Month +', '2018-07-09 21:53:15', '2018-07-09 21:53:15', NULL),
(4, '6 Month +', '2018-07-09 21:53:23', '2018-07-09 21:53:23', NULL),
(5, '1 Year +', '2018-07-09 21:53:32', '2018-07-09 21:53:32', NULL),
(6, '2 Year +', '2018-07-09 21:53:40', '2018-07-09 21:53:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `duties`
--

CREATE TABLE `duties` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `duties`
--

INSERT INTO `duties` (`id`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'during', 'During the curse of your employment with the Oil & Gas Business Unit (or its member company), you may be required to perform the following activities or work under the followings conditions :', NULL, NULL, NULL),
(2, 'you', 'You have the responsibility to ensure the PPE is appropriate to the atmosphere to which you are exoised and thas you are wearing it properly', NULL, NULL, NULL),
(3, 'Based', 'Based on ths general description is there any physical or metal condition that you believe may affect your in performing the job for which are beig hired and completly?', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `institution` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` int(11) NOT NULL,
  `until` int(11) NOT NULL,
  `photo` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `userid`, `institution`, `major`, `location`, `from`, `until`, `photo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 2, 'tes 1aaa', 'tes 1aaa', 'tes 1', 2211, 1970, NULL, '2018-07-02 21:51:52', '2018-07-02 21:51:52', NULL),
(9, 2, 'tes 2ddd', 'tes 2dd', 'tes 2ddd', 2211, 1970, NULL, '2018-07-02 21:51:52', '2018-07-02 21:51:52', NULL),
(10, 2, 'tes 3ddd', 'tes 3', 'tes 3dd', 2211, 2215, NULL, '2018-07-02 21:51:52', '2018-07-02 21:51:52', NULL),
(11, 5, 'tes 1aaa', 'tes 1aaa', 'tes 1', 2211, 1970, NULL, '2018-07-02 21:51:52', '2018-07-02 21:51:52', NULL),
(12, 5, 'tes 2ddd', 'tes 2dd', 'tes 2ddd', 2211, 1970, NULL, '2018-07-02 21:51:52', '2018-07-02 21:51:52', NULL),
(13, 12, 'tes 3ddd', 'tes 3', 'tes 3dd', 2211, 2215, NULL, '2018-07-02 21:51:52', '2018-07-02 21:51:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employeendorsments`
--

CREATE TABLE `employeendorsments` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `endorsmentid` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employeendorsments`
--

INSERT INTO `employeendorsments` (`id`, `userid`, `endorsmentid`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 1, '2018-07-04 20:07:05', '2018-07-06 01:23:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdname` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `birth` date DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certifiction_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origin_certification` int(6) DEFAULT NULL,
  `provinceid` int(10) UNSIGNED DEFAULT NULL,
  `genderid` int(10) UNSIGNED DEFAULT NULL,
  `tradeid` int(10) UNSIGNED DEFAULT NULL,
  `child_tradeid` int(10) UNSIGNED DEFAULT NULL,
  `martialid` int(10) UNSIGNED DEFAULT NULL,
  `certifictionoriginid` int(10) UNSIGNED DEFAULT NULL,
  `levelid` int(6) DEFAULT NULL,
  `web` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `real_time` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `verification_code` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employe_status` tinyint(2) NOT NULL,
  `status_share` int(10) DEFAULT '0',
  `twitter_connect` int(6) DEFAULT NULL,
  `application` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ig` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fname`, `mdname`, `lname`, `email`, `username`, `about`, `phone`, `password`, `address`, `birth`, `photo`, `cover`, `emergency_contact_1`, `emergency_contact_2`, `certifiction_number`, `origin_certification`, `provinceid`, `genderid`, `tradeid`, `child_tradeid`, `martialid`, `certifictionoriginid`, `levelid`, `web`, `created_at`, `updated_at`, `real_time`, `remember_token`, `deleted_at`, `verification_code`, `employe_status`, `status_share`, `twitter_connect`, `application`, `fb`, `twitter`, `ig`) VALUES
(1, 'tes ', NULL, 'tes', 'kireiresu@gmail.com', 'tes-tes', NULL, NULL, '$2y$10$DYzA.C/PySsuYhLfwddDN.Zfs.ko.VI8WBky82MVYgDgR3R0NxT.u', 'street 1', '2018-08-16', '15337865991532398269lt00001111.png', NULL, '0123900120', NULL, '11122344', 1, 1, 1, NULL, 1, 1, 12, 1, NULL, '2018-05-01 17:00:00', '2018-08-09 00:52:32', '2018-08-09 00:52:32', '8N3HoXeI3BDSP9zaAArlJU8YTaaPZPkxqtgZpWywemoQemncYbw9uoq11sj0', NULL, '', 3, 0, 0, NULL, NULL, NULL, NULL),
(2, 'Syahril', 'ol', 'Ramdani', 'syahrilr51@gmail.com', 'syahrilr51', 'sister', '+14155552671', '$2y$10$fJnWOyQBLb5Q4Nu7fwTnJecZ4.FnGNt36RvE11pYpbz.MHF9HuX.W', 'saas', '1997-01-13', '1526452726416x416.jpg', '1526452702milky-way-2695569_960_720.jpg', '0123900120', 'tes', '3131231', 1, 1, 1, NULL, 1, 4, 2, 2, 'istnt.com', '2018-01-11 20:46:56', '2018-09-26 03:38:06', '2018-09-26 03:38:06', 'lFbnlNHtUWP6vUmMikMAezviEamRKjCuQYTgVv2h598O7wMkXyvECbfR0nT5', NULL, '', 3, 1, 0, NULL, 'syahrilramdani13', '@syahrilramdani7', 'panda_old121'),
(3, 'Syahril', NULL, '', 'selvimayang@gmail.com', 'syahrilr', NULL, '1023901209', '$2y$10$bnGRXOmn1Z5EF8MqmZ5UIOP.lOxHTHXqPnIJP5RRsw2gLQtO7MkPe', NULL, NULL, 'kbr.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-14 22:26:45', '2018-01-14 22:26:45', NULL, NULL, NULL, '', 0, 0, 0, NULL, NULL, NULL, NULL),
(4, 'Ramdani', NULL, 'Syahril', 'syahrilr131@gmail.com', 'syahrilr131', NULL, NULL, '$2y$10$NESXgtviXzMOJTOJyAgfJuRiFXC7F0N1qumt4DqNKhORu8MGLv7Na', 'Jalan  1', '2018-02-01', 'kbr.png', NULL, 'asdas', 'as', '121212', 3, 2, 1, NULL, 2, 1, 3, 1, NULL, '2018-01-17 00:31:03', '2018-08-09 04:04:45', '2018-08-09 04:04:45', 'Ha7AcL8K5uoyiuOtYir76Yvjdxt74n2CABsAUMdKSuHlnmv9d4ja562LTxHj', NULL, '', 2, 0, 0, NULL, NULL, NULL, NULL),
(5, 'Dang', NULL, 'JO', 'dangridho9@gmail.com', 'gangjo', NULL, NULL, '$2y$10$tSMsWhFuTQvX2zwC3.O4EuRbEqHSmFrdlJZKkGHDKvMzrvwxGB26.', 'Jalan  1', '2010-06-02', NULL, NULL, '0123900120', 'dasdasd', '11122344', 1, 1, 1, NULL, 1, 1, 3, 1, NULL, '2018-03-04 21:05:29', '2018-03-04 23:09:42', NULL, 'V4IgotfAtx3FefUMgudvR7Vu7U2nFeYRhJvFO6BRlx7U2kKFjSAKxJmCeLqk', NULL, 'xx4YDiZpDQGwGZ35kyHfgGlJaoe9Hg5m332kFlKx92kICi9OqG', 2, 0, 1, NULL, NULL, NULL, NULL),
(12, 'dang', NULL, 'dong', 'dangridho99@gmail.com', 'dangdong', NULL, NULL, '$2y$10$dvvUo5nodlmnAZ4dwHgDMOXtFVw0rqsTIKD1EV7yKHCPiSTRNOrU.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-07 04:40:44', '2018-03-07 04:40:44', NULL, NULL, NULL, 'rhEmQUU4K6Kz0DIYhU3PAcyQdILpqgc2lLruRrzQnO3oc3nCJX', 0, 0, 0, NULL, NULL, NULL, NULL),
(13, 'tes', NULL, 'tes', 'superadmin@hrm.com', 'tes-tes-1', NULL, NULL, '$2y$10$zqyktUUShxTTJ0xZQXOpLOV5KStKoUVEFqirJ1VsRxuRsGoBrVb5e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-14 01:04:21', '2018-03-14 01:04:21', NULL, NULL, NULL, 'U2l9opACBIgmPAgpQFhQfOWftkxtk099ntV4Yme1UgEeXUHyjQ', 0, 0, 0, NULL, NULL, NULL, NULL),
(14, 'Syahril', NULL, 'Syahril', 'syahrilr511@gmail.com', 'tes-tes-2', NULL, NULL, '$2y$10$9pgTIT/rWKV767fkgHlLgO.TgnhpSbKyOCrt7BGQ/N6oNlMrrKCam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-16 11:15:54', '2018-04-16 11:15:54', NULL, NULL, NULL, 'rfVsOvQTRSIaVq6KHlyCtAHFR03GSTSto8rP3vjXexbj2KTj8c', 0, NULL, 0, NULL, NULL, NULL, NULL),
(15, 'Syahril', NULL, 'Syahril', 'syahrilr512@gmail.com', 'tes-tes-3', NULL, NULL, '$2y$10$xWimerkYn.rA8Jyh8S8qGulCBuzAt05IXjLeodeow2cbvDmy8Gk.W', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-16 11:17:04', '2018-04-16 11:17:04', NULL, NULL, NULL, 'j96OB6h5aTC5r1o30NKNUiJNa0XBoykmzSpWJ2v5HfduJ9Zrf7', 0, NULL, 0, NULL, NULL, NULL, NULL),
(16, 'Syahril', NULL, 'Ramdani', 'syahrilr513@gmail.com', 'syahrilr513', NULL, NULL, '$2y$10$1YURu2g6OJ3FcfumWH45wOAGnNkj/65ZBaeeuUQSEat3YcdAxgXeG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-16 11:18:33', '2018-04-16 11:18:33', NULL, NULL, NULL, 'oldiqz64gGEyvtABNMjlGL1AtFpbT0PBXqYVMdVjpfXhEB2POR', 0, NULL, 0, NULL, NULL, NULL, NULL),
(17, 'Syahril', NULL, 'Ramdani', 'syahrilr513@yahoo.com', 'syahrilr513-17', NULL, NULL, '$2y$10$N364AD26r1UEbnUPjgFoc.dbBmmCBn.HIJhLLDZ1gG7Emzc2haAuS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-16 11:22:52', '2018-04-16 11:22:52', NULL, NULL, NULL, 'RVurstYsSftvJbu58FPMCpD1nICan0NNRh4Kb651VgafJKLig1', 0, NULL, 0, NULL, NULL, NULL, NULL),
(18, 'Syahril', 'Op', 'All', 'resetallacc@gmail.com', 'resetallacc', NULL, '+14155552671', '$2y$10$/acbNrHOaZiNvN4OqPnUNuULVfMyWtsAuofY4EjvVQl78wToVXo3S', NULL, '1970-01-29', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, 1, 1, NULL, NULL, 'istnt.com', '2018-06-03 19:45:27', '2018-08-03 06:18:01', '2018-08-03 06:18:01', 'yvphHkBU0riWeU2edEt5IzREVmttk6pCfdCxGZzuppDM8NcPhR89JedpzYvA', NULL, 'xHpA9zwZPElErdktM5lNtKSlSo0Hqjva2BSijAdSPG6I4Xfr00', 1, NULL, 0, NULL, 'syahrilramdani13', '@syahrilramdani7', 'panda_old121');

-- --------------------------------------------------------

--
-- Table structure for table `employeskills`
--

CREATE TABLE `employeskills` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `levelid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employeskills`
--

INSERT INTO `employeskills` (`id`, `userid`, `name`, `levelid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 2, 'Coding', 3, '2018-07-04 00:07:48', '2018-07-04 00:07:48', NULL),
(5, 2, 'Coding', 3, '2018-07-04 00:07:48', '2018-07-04 00:07:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employe_duties`
--

CREATE TABLE `employe_duties` (
  `id` int(10) UNSIGNED NOT NULL,
  `fitdutyid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employe_duties`
--

INSERT INTO `employe_duties` (`id`, `fitdutyid`, `userid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 3, 2, '2018-07-16 00:30:52', '2018-07-16 00:30:52', NULL),
(6, 5, 2, '2018-07-16 00:30:52', '2018-07-16 00:30:52', NULL),
(7, 6, 2, '2018-07-16 00:30:52', '2018-07-16 00:30:52', NULL),
(8, 8, 2, '2018-07-16 00:30:52', '2018-07-16 00:30:52', NULL),
(9, 9, 2, '2018-07-16 00:30:52', '2018-07-16 00:30:52', NULL),
(10, 12, 2, '2018-07-16 00:30:52', '2018-07-16 00:30:52', NULL),
(11, 14, 2, '2018-07-16 00:30:52', '2018-07-16 00:30:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employment_statuses`
--

CREATE TABLE `employment_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employment_statuses`
--

INSERT INTO `employment_statuses` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Currently Statisfied', 'red', '2018-03-18 06:14:29', '2018-03-18 06:14:29', NULL),
(2, 'Passively Looking', 'yellow', '2018-03-18 06:15:00', '2018-03-18 06:15:00', NULL),
(3, 'Actively Looking', 'green', '2018-03-18 06:15:17', '2018-03-18 06:15:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `endorsments`
--

CREATE TABLE `endorsments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `endorsments`
--

INSERT INTO `endorsments` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'I want to be endorsed', 'I want to be endorsed', NULL, NULL, NULL),
(2, 'Include me in endorsement suggestions to my network', 'Include me in endorsement suggestions to my network', NULL, NULL, NULL),
(3, 'Show me suggestions to endorse my network', 'Show me suggestions to endorse my network', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `essay_answers`
--

CREATE TABLE `essay_answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user_survey` int(10) UNSIGNED DEFAULT NULL,
  `id_essay` int(10) UNSIGNED NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `essay_answers`
--

INSERT INTO `essay_answers` (`id`, `id_user_survey`, `id_essay`, `answer`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 2, '2', '2018-04-30 04:13:48', '2018-04-30 04:13:48', NULL),
(2, NULL, 3, '3', '2018-04-30 04:13:49', '2018-04-30 04:13:49', NULL),
(3, NULL, 4, '4', '2018-04-30 04:13:49', '2018-04-30 04:13:49', NULL),
(4, NULL, 5, '5', '2018-04-30 04:13:49', '2018-04-30 04:13:49', NULL),
(5, NULL, 6, '6', '2018-04-30 04:13:49', '2018-04-30 04:13:49', NULL),
(6, NULL, 7, '7', '2018-04-30 04:13:49', '2018-04-30 04:13:49', NULL),
(7, NULL, 8, '8', '2018-04-30 04:13:49', '2018-04-30 04:13:49', NULL),
(8, NULL, 9, '9', '2018-04-30 04:13:49', '2018-04-30 04:13:49', NULL),
(9, NULL, 10, '10', '2018-04-30 04:13:49', '2018-04-30 04:13:49', NULL),
(10, NULL, 11, '11', '2018-04-30 04:13:49', '2018-04-30 04:13:49', NULL),
(11, NULL, 12, '12', '2018-04-30 04:13:49', '2018-04-30 04:13:49', NULL),
(12, NULL, 13, '13', '2018-04-30 04:13:49', '2018-04-30 04:13:49', NULL),
(13, NULL, 14, '14', '2018-04-30 04:13:49', '2018-04-30 04:13:49', NULL),
(14, NULL, 2, 'sad', '2018-04-30 04:14:40', '2018-04-30 04:14:40', NULL),
(15, NULL, 3, 'sad', '2018-04-30 04:14:40', '2018-04-30 04:14:40', NULL),
(16, NULL, 4, 'sad', '2018-04-30 04:14:40', '2018-04-30 04:14:40', NULL),
(17, NULL, 5, 'sad', '2018-04-30 04:14:40', '2018-04-30 04:14:40', NULL),
(18, NULL, 6, 'sad', '2018-04-30 04:14:40', '2018-04-30 04:14:40', NULL),
(19, NULL, 7, 'sad', '2018-04-30 04:14:41', '2018-04-30 04:14:41', NULL),
(20, NULL, 8, 'sad', '2018-04-30 04:14:41', '2018-04-30 04:14:41', NULL),
(21, NULL, 9, 'sad', '2018-04-30 04:14:41', '2018-04-30 04:14:41', NULL),
(22, NULL, 10, 'sad', '2018-04-30 04:14:41', '2018-04-30 04:14:41', NULL),
(23, NULL, 11, 'sad', '2018-04-30 04:14:41', '2018-04-30 04:14:41', NULL),
(24, NULL, 12, 'sad', '2018-04-30 04:14:41', '2018-04-30 04:14:41', NULL),
(25, NULL, 13, 'sad', '2018-04-30 04:14:41', '2018-04-30 04:14:41', NULL),
(26, NULL, 14, 'sad', '2018-04-30 04:14:41', '2018-04-30 04:14:41', NULL),
(80, 9, 2, 'sadsad', '2018-04-30 06:22:35', '2018-04-30 06:22:35', NULL),
(81, 9, 3, 'xzcxc', '2018-04-30 06:22:35', '2018-04-30 06:22:35', NULL),
(82, 9, 4, 'xcvcxv', '2018-04-30 06:22:35', '2018-04-30 06:22:35', NULL),
(83, 9, 5, 'v cbcv', '2018-04-30 06:22:35', '2018-04-30 06:22:35', NULL),
(84, 9, 6, 'qweqwe', '2018-04-30 06:22:35', '2018-04-30 06:22:35', NULL),
(85, 9, 7, 'cvcxv', '2018-04-30 06:22:35', '2018-04-30 06:22:35', NULL),
(86, 9, 8, 'asdsad', '2018-04-30 06:22:35', '2018-04-30 06:22:35', NULL),
(87, 9, 9, 'zxczcx', '2018-04-30 06:22:36', '2018-04-30 06:22:36', NULL),
(88, 9, 10, 'sadasdsa', '2018-04-30 06:22:36', '2018-04-30 06:22:36', NULL),
(89, 9, 11, 'vdsv', '2018-04-30 06:22:36', '2018-04-30 06:22:36', NULL),
(90, 9, 12, 'xcv', '2018-04-30 06:22:36', '2018-04-30 06:22:36', NULL),
(91, 9, 13, 'xcvcxv', '2018-04-30 06:22:36', '2018-04-30 06:22:36', NULL),
(92, 9, 14, 'asdsadasd', '2018-04-30 06:22:36', '2018-04-30 06:22:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` datetime NOT NULL,
  `present` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_status` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `userid`, `company`, `title`, `location`, `start_date`, `end_date`, `present`, `work_status`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(13, 4, 'asda', 'asd', 'asda', '2018-06-08', '2018-07-20 00:00:00', 'asdas', 1, 'asda', '2018-06-25 23:47:04', '2018-06-25 23:47:04', NULL),
(14, 4, 'asda', 'asd', 'asda', '2018-06-08', '2018-07-21 00:00:00', 'asdas', 1, 'asda', '2018-06-25 23:47:04', '2018-06-25 23:47:04', NULL),
(15, 2, 'tes', 'tes', 'tes', '2018-07-25', '0000-00-00 00:00:00', 'tes', 0, 'tes', '2018-07-24 19:30:29', '2018-07-24 19:30:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fit_duties`
--

CREATE TABLE `fit_duties` (
  `id` int(10) UNSIGNED NOT NULL,
  `dutyid` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fit_duties`
--

INSERT INTO `fit_duties` (`id`, `dutyid`, `title`, `description`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'climbing', 'Climbing (vertical laders and other), working at height', 'checkbox', NULL, NULL, NULL),
(2, 1, 'heavy', 'Heavy pulling and climbing', 'checkbox', NULL, NULL, NULL),
(3, 1, 'shoveling', 'Shoveling', 'checkbox', NULL, NULL, NULL),
(4, 1, 'exposure', 'Exposure to Extreeme head and cold', 'checkbox', NULL, NULL, NULL),
(5, 1, 'self', 'Use of self-contained Breathing Apparatus and other Respiratory Protectors', 'checkbox', NULL, NULL, NULL),
(6, 1, 'noise', 'Exposure to High Noise level', 'checkbox', NULL, NULL, NULL),
(7, 1, 'operating ', 'Operating Hand and Power Tools', 'checkbox', NULL, NULL, NULL),
(8, 1, 'working', 'Working in the vicinity of, or operational of, heavy equipment', 'checkbox', NULL, NULL, NULL),
(9, 1, 'confined ', 'Confined Space Entery (Vessel, Trench)', 'checkbox', NULL, NULL, NULL),
(10, 1, 'Chemical', 'Exposure to Chemical Substance', 'checkbox', NULL, NULL, NULL),
(11, 2, 'yes', 'Yes', 'radio', NULL, NULL, NULL),
(12, 2, 'no', 'No', 'radio', NULL, NULL, NULL),
(13, 3, 'yes', 'Yes', 'radio', NULL, NULL, NULL),
(14, 3, 'no', 'No', 'radio', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `followid` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`id`, `userid`, `followid`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 2, 3, 1, '2018-02-20 23:19:56', '2018-02-20 23:19:56', NULL),
(14, 5, 1, 1, '2018-03-04 21:10:57', '2018-03-04 21:10:57', NULL),
(15, 5, 3, 1, '2018-03-04 21:11:00', '2018-03-04 21:11:00', NULL),
(16, 5, 4, 1, '2018-03-04 21:11:04', '2018-03-04 21:11:04', NULL),
(42, 4, 5, 0, '2018-04-23 20:37:27', '2018-04-23 20:37:27', NULL),
(47, 2, 1, 0, '2018-05-02 02:52:27', '2018-05-02 02:52:27', NULL),
(48, 2, 13, 0, '2018-05-02 02:52:52', '2018-05-02 02:52:52', NULL),
(49, 2, 12, 0, '2018-05-02 02:54:10', '2018-05-02 02:54:10', NULL),
(50, 2, 13, 0, '2018-05-04 22:14:43', '2018-05-04 22:14:43', NULL),
(72, 4, 2, 1, '2018-05-20 23:56:58', '2018-05-23 22:27:38', NULL),
(75, 2, 4, 1, '2018-05-31 00:20:28', '2018-07-19 03:35:03', NULL),
(79, 18, 2, 0, '2018-06-03 20:51:44', '2018-06-03 20:51:44', NULL),
(80, 18, 4, 0, '2018-06-04 22:56:44', '2018-06-04 22:56:44', NULL),
(81, 2, 18, 1, '2018-06-04 23:41:12', '2018-06-05 21:11:59', NULL),
(82, 2, 14, 0, '2018-07-17 18:34:14', '2018-07-17 18:34:14', NULL),
(83, 2, 15, 0, '2018-07-17 19:11:07', '2018-07-17 19:11:07', NULL),
(85, 2, 5, 0, '2018-08-03 03:04:09', '2018-08-03 03:04:09', NULL),
(86, 1, 2, 0, '2018-08-09 00:52:01', '2018-08-09 00:52:01', NULL),
(87, 2, 17, 0, '2018-08-26 21:31:20', '2018-08-26 21:31:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriprion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `name`, `descriprion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Male', 'male', '2018-01-12 01:27:34', '2018-01-12 01:27:34', NULL),
(2, 'Famele', 'famele', '2018-01-12 01:27:44', '2018-01-12 01:27:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `graders`
--

CREATE TABLE `graders` (
  `id` int(10) UNSIGNED NOT NULL,
  `graderid` int(10) UNSIGNED NOT NULL,
  `employeeid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `graders`
--

INSERT INTO `graders` (`id`, `graderid`, `employeeid`, `userid`, `grade`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 5, 1, '', NULL, NULL, NULL),
(2, 3, 1, 1, NULL, '2018-07-26 10:00:41', '2018-07-26 10:00:41', NULL),
(3, 3, 2, 1, NULL, '2018-07-26 10:04:17', '2018-08-02 12:44:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_info` text COLLATE utf8mb4_unicode_ci,
  `group_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_size` int(11) DEFAULT NULL,
  `group_type_id` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `ref_number`, `location`, `group_info`, `group_image`, `website`, `company_size`, `group_type_id`, `userid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Tes Groups', 'vpk0FNh3jnii2q3tIA5sZb4DGCxiMSDHRDasM7JNUkXYG7gRPm', 'Tes Location', 'sasdsad sa dsa', NULL, NULL, NULL, 2, 2, '2018-02-17 08:18:10', '2018-02-17 08:18:10', NULL),
(5, 'Tes Groups 2', 'EIZRio0e450NfDS3dN0uyubrWlO0wAYVduX7NBR7PKpc6Mls2u', 'Tes Location', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati voluptatibus dolores, sunt velit similique iusto ad, voluptatum cumque illum dignissimos recusandae expedita non, eveniet est iste veniam culpa, libero reiciendis.', NULL, NULL, NULL, 1, 4, '2018-02-18 07:59:44', '2018-02-18 07:59:44', NULL),
(6, 'group tes 3', 'U7J32o1EXSX8h3EErM5hSKnaHmdN61dP6ecM7Xh04DuG2xKI9X', 'Tes Location', 'adfa', '1519649338kbr.png', NULL, NULL, 2, 2, '2018-02-26 05:47:58', '2018-02-26 05:47:58', NULL),
(7, 'group tes 3', 'lpUfABWaWcrD8Ptxiy9R3yTpjrio9v12lxXYl4kPVZ7f51FWpA', 'Tes Location', 'adfa', '1519649338kbr.png', NULL, NULL, 2, 2, '2018-02-26 05:48:58', '2018-02-26 05:48:58', NULL),
(8, 'Public Enemis', '9MX77XyyslQmHttbvajMtHXuUXSFnNNAWvu9HplNG4LQy4j2vY', 'Alberta On the street', 'Bangkemono', '1519649338kbr.png', NULL, NULL, 1, 18, '2018-06-03 20:14:29', '2018-06-03 20:14:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_levels`
--

CREATE TABLE `group_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `level_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_levels`
--

INSERT INTO `group_levels` (`id`, `level_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Member', NULL, NULL, NULL),
(2, 'admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_members`
--

CREATE TABLE `group_members` (
  `id` int(10) UNSIGNED NOT NULL,
  `groupid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `levelid` int(10) UNSIGNED NOT NULL,
  `status` int(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_members`
--

INSERT INTO `group_members` (`id`, `groupid`, `userid`, `levelid`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(13, 1, 2, 2, 1, '2018-02-21 04:31:32', '2018-02-21 04:31:32', NULL),
(14, 5, 2, 1, 0, '2018-02-21 04:35:09', '2018-02-21 04:35:09', NULL),
(15, 1, 4, 1, 1, '2018-02-21 21:13:12', '2018-02-21 21:13:12', NULL),
(16, 7, 2, 2, 1, '2018-02-26 05:48:59', '2018-02-26 05:48:59', NULL),
(18, 8, 18, 2, 1, '2018-06-03 20:14:29', '2018-06-11 00:44:12', NULL),
(20, 8, 2, 1, 0, '2018-06-10 23:31:09', '2018-06-11 02:44:35', '2018-06-11 02:44:35'),
(22, 8, 2, 1, 0, '2018-06-11 02:45:21', '2018-06-11 02:45:21', NULL),
(23, 6, 2, 1, 0, '2018-08-03 02:06:45', '2018-08-03 02:06:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_types`
--

CREATE TABLE `group_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_types`
--

INSERT INTO `group_types` (`id`, `type_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Close Group', NULL, NULL, NULL),
(2, 'Public Group', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hide_articles`
--

CREATE TABLE `hide_articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_post` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hide_articles`
--

INSERT INTO `hide_articles` (`id`, `id_post`, `id_user`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, 4, '2018-02-25 00:41:51', '2018-02-25 00:41:51', NULL),
(2, 5, 4, '2018-02-25 00:44:17', '2018-02-25 00:44:17', NULL),
(3, 6, 4, '2018-02-25 00:49:20', '2018-02-25 00:49:20', NULL),
(4, 13, 4, '2018-04-22 18:39:12', '2018-04-22 18:39:12', NULL),
(5, 3, 4, '2018-04-22 18:43:04', '2018-04-22 18:43:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hires`
--

CREATE TABLE `hires` (
  `id` int(10) UNSIGNED NOT NULL,
  `employeeid` int(10) UNSIGNED NOT NULL,
  `companyid` int(10) UNSIGNED NOT NULL,
  `childtradeid` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hires`
--

INSERT INTO `hires` (`id`, `employeeid`, `companyid`, `childtradeid`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 1, 'hired', '2018-08-02 13:22:37', '2018-08-02 13:22:37', NULL),
(2, 2, 1, 1, 'hired', '2018-08-02 13:46:55', '2018-08-02 13:46:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image_articles`
--

CREATE TABLE `image_articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_post` int(10) UNSIGNED NOT NULL,
  `groupid` int(10) UNSIGNED DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_articles`
--

INSERT INTO `image_articles` (`id`, `id_post`, `groupid`, `image`, `thumbnail`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, NULL, '1518616628emang gnin kah.PNG', NULL, '2018-02-14 06:57:08', '2018-02-14 06:57:08', NULL),
(2, 3, NULL, '1518667382emang gnin kah.PNG', NULL, '2018-02-14 21:03:02', '2018-02-14 21:03:02', NULL),
(3, 4, NULL, '1518667395emang gnin kah.PNG', NULL, '2018-02-14 21:03:15', '2018-02-14 21:03:15', NULL),
(4, 5, NULL, '1518667507otp.PNG', NULL, '2018-02-14 21:05:07', '2018-02-14 21:05:07', NULL),
(5, 9, NULL, '151954561301.gif', '151954561301.gif', '2018-02-25 01:00:13', '2018-02-25 01:00:13', NULL),
(6, 10, NULL, '151954562201.gif', '151954562201.gif', '2018-02-25 01:00:22', '2018-02-25 01:00:22', NULL),
(7, 126, NULL, '1531463096milky-way-2695569_960_720.jpg', '1531463096milky-way-2695569_960_720.jpg', '2018-07-12 23:24:57', '2018-07-12 23:24:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image_surveys`
--

CREATE TABLE `image_surveys` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_question` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_surveys`
--

INSERT INTO `image_surveys` (`id`, `id_question`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 17, '15248002489Nn8Euwjh24.jpg', '2018-04-26 20:37:28', '2018-04-26 20:37:28', NULL),
(2, 17, '15248008042bfe7012191e50f994c1d05758531182--scandal-band.jpg', '2018-04-26 20:46:44', '2018-04-26 20:46:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Oil', '2018-03-18 00:58:29', '2018-03-18 00:58:29', NULL),
(4, 'Gas', '2018-03-18 00:58:34', '2018-03-18 00:58:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE `interests` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`id`, `userid`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 2, NULL, 'balldddd', '2018-07-16 00:27:02', '2018-07-16 00:27:02', NULL),
(3, 5, NULL, 'balldddd', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `companyid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `union_job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relocate` int(11) NOT NULL,
  `durationid` int(10) UNSIGNED NOT NULL,
  `rotationid` int(10) UNSIGNED NOT NULL,
  `employmentstatusid` int(10) UNSIGNED NOT NULL,
  `locationid` int(10) UNSIGNED DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `code`, `image`, `companyid`, `userid`, `description`, `union_job`, `relocate`, `durationid`, `rotationid`, `employmentstatusid`, `locationid`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Machine Engineer', '#23', NULL, 1, 2, 'As out Engineer, you will support the activities if our plan and engine maintenance. this position is based on Alberta, Canada.', '', 1, 0, 0, 2, NULL, 1, '2018-03-18 07:33:58', '2018-03-18 07:33:58', NULL),
(2, 'Welder Apprentice', '#25', NULL, 1, 2, 'As out Engineer, you will support the activities if our plan and engine maintenance. this position is based on Alberta, Canada', '', 1, 0, 0, 1, NULL, 1, '2018-03-18 07:39:03', '2018-03-18 07:39:03', NULL),
(3, 'testing', '#21', NULL, 1, 1, '', 'tessssss', 1, 1, 1, 1, 1, 1, '2018-07-10 08:52:55', '2018-07-10 08:52:55', NULL),
(4, 'testing', '#21', NULL, 1, 1, '', 'tessssss', 1, 1, 1, 1, 1, 1, '2018-07-10 08:53:22', '2018-07-10 08:53:22', NULL),
(5, 'testing', '#21', NULL, 1, 1, '', 'tessssss', 1, 1, 1, 1, 1, 1, '2018-07-10 08:55:08', '2018-07-10 08:55:08', NULL),
(6, 'testing', '#21', NULL, 1, 1, '', 'tessssss', 1, 1, 1, 1, 1, 1, '2018-07-10 08:57:52', '2018-07-10 08:57:52', NULL),
(7, 'asd', '#60', NULL, 1, 1, '', 'zxc', 1, 1, 1, 1, 1, 1, '2018-07-14 12:17:24', '2018-07-14 12:17:24', NULL),
(8, 'asd', '#asd', NULL, 1, 1, '', 'z', 1, 1, 1, 1, 1, 1, '2018-07-14 12:20:57', '2018-07-14 12:20:57', NULL),
(9, 'sad', '#11', NULL, 1, 1, '', 'asd', 1, 1, 1, 1, 1, 1, '2018-07-14 12:36:23', '2018-07-14 12:36:23', NULL),
(10, 'as', '#111', NULL, 1, 1, '', 'asd', 1, 1, 1, 1, 1, 1, '2018-07-14 12:37:07', '2018-07-14 12:37:07', NULL),
(11, 'Programmer', '#1231', '153327641633058684_10211692996985233_79041159321616384_n.jpg', 1, 1, '', 'ea ea ea', 1, 3, 1, 1, 4, 1, '2018-08-02 23:06:56', '2018-08-02 23:06:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_apply_users`
--

CREATE TABLE `job_apply_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `jobid` int(10) UNSIGNED NOT NULL,
  `application` int(10) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `hire` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_apply_users`
--

INSERT INTO `job_apply_users` (`id`, `userid`, `jobid`, `application`, `status`, `hire`, `schedule`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 2, 1, 1, '1', NULL, '2018-08-14 22:03:54', '2018-08-14 22:03:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_positions`
--

CREATE TABLE `job_positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobid` int(10) UNSIGNED NOT NULL,
  `positionjobid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_positions`
--

INSERT INTO `job_positions` (`id`, `jobid`, `positionjobid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1, 1, '2018-03-18 11:10:55', '2018-03-18 11:10:55', NULL),
(3, 1, 2, '2018-03-18 11:11:00', '2018-03-18 11:11:00', NULL),
(4, 1, 3, '2018-03-18 11:11:07', '2018-03-18 11:11:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_search_settings`
--

CREATE TABLE `job_search_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `postedtimeid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_search_settings`
--

INSERT INTO `job_search_settings` (`id`, `userid`, `postedtimeid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 3, NULL, NULL, NULL),
(4, 2, 1, '2018-08-02 00:38:38', '2018-08-03 03:43:48', NULL),
(5, 4, 1, '2018-08-03 04:40:09', '2018-08-03 04:40:09', NULL),
(6, 18, 1, '2018-08-03 04:51:01', '2018-08-03 04:51:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_search_setting_companies`
--

CREATE TABLE `job_search_setting_companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobsearchid` int(10) UNSIGNED NOT NULL,
  `companyid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_search_setting_companies`
--

INSERT INTO `job_search_setting_companies` (`id`, `jobsearchid`, `companyid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, NULL, NULL),
(2, 1, 2, NULL, NULL, NULL),
(3, 4, 1, '2018-08-02 05:43:00', '2018-08-02 05:43:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_search_setting_locations`
--

CREATE TABLE `job_search_setting_locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobsearchid` int(10) UNSIGNED NOT NULL,
  `locationid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_search_setting_locations`
--

INSERT INTO `job_search_setting_locations` (`id`, `jobsearchid`, `locationid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, NULL, NULL),
(2, 1, 2, NULL, NULL, NULL),
(5, 4, 1, '2018-08-03 03:48:58', '2018-08-03 03:48:58', NULL),
(6, 4, 2, '2018-08-03 03:48:59', '2018-08-03 03:48:59', NULL),
(7, 4, 9, '2018-08-03 03:48:59', '2018-08-03 03:48:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_search_setting_titles`
--

CREATE TABLE `job_search_setting_titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobsearchid` int(10) UNSIGNED NOT NULL,
  `chtradeid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_search_setting_titles`
--

INSERT INTO `job_search_setting_titles` (`id`, `jobsearchid`, `chtradeid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(16, 4, 1, '2018-08-03 03:51:01', '2018-08-03 03:51:01', NULL),
(17, 4, 2, '2018-08-03 03:51:01', '2018-08-03 03:51:01', NULL),
(18, 4, 3, '2018-08-03 03:51:01', '2018-08-03 03:51:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_search_setting_types`
--

CREATE TABLE `job_search_setting_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobsearchid` int(10) UNSIGNED NOT NULL,
  `typejob` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_search_setting_types`
--

INSERT INTO `job_search_setting_types` (`id`, `jobsearchid`, `typejob`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 4, 2, '2018-08-02 20:12:47', '2018-08-02 20:12:47', NULL),
(3, 4, 1, '2018-08-02 20:12:47', '2018-08-02 20:12:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_setting_locations`
--

CREATE TABLE `job_setting_locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobsettingid` int(10) UNSIGNED NOT NULL,
  `locationid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_setting_locations`
--

INSERT INTO `job_setting_locations` (`id`, `jobsettingid`, `locationid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(20, 15, 1, '2018-08-15 23:45:18', '2018-08-15 23:45:18', NULL),
(21, 15, 2, '2018-08-15 23:45:18', '2018-08-15 23:45:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_setting_positions`
--

CREATE TABLE `job_setting_positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobsettingid` int(10) UNSIGNED NOT NULL,
  `positionjobid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_setting_positions`
--

INSERT INTO `job_setting_positions` (`id`, `jobsettingid`, `positionjobid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(22, 15, 1, '2018-08-15 23:45:18', '2018-08-15 23:45:18', NULL),
(23, 15, 2, '2018-08-15 23:45:18', '2018-08-15 23:45:18', NULL),
(24, 15, 21, '2018-08-15 23:45:18', '2018-08-15 23:45:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_setting_types`
--

CREATE TABLE `job_setting_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobsettingid` int(10) UNSIGNED NOT NULL,
  `typejobid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_setting_types`
--

INSERT INTO `job_setting_types` (`id`, `jobsettingid`, `typejobid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 15, 10, '2018-07-16 21:41:34', '2018-07-16 21:41:34', NULL),
(2, 15, 8, '2018-07-16 21:41:34', '2018-07-16 21:41:34', NULL),
(3, 15, 5, '2018-07-16 21:41:34', '2018-07-16 21:41:34', NULL),
(4, 15, 1, '2018-07-16 21:41:34', '2018-07-16 21:41:34', NULL),
(5, 16, 10, '2018-08-15 23:21:59', '2018-08-15 23:21:59', NULL),
(6, 16, 8, '2018-08-15 23:22:00', '2018-08-15 23:22:00', NULL),
(7, 16, 5, '2018-08-15 23:22:00', '2018-08-15 23:22:00', NULL),
(8, 16, 1, '2018-08-15 23:22:00', '2018-08-15 23:22:00', NULL),
(9, 17, 10, '2018-08-15 23:22:10', '2018-08-15 23:22:10', NULL),
(10, 17, 8, '2018-08-15 23:22:10', '2018-08-15 23:22:10', NULL),
(11, 17, 5, '2018-08-15 23:22:10', '2018-08-15 23:22:10', NULL),
(12, 17, 1, '2018-08-15 23:22:10', '2018-08-15 23:22:10', NULL),
(13, 18, 10, '2018-08-15 23:30:25', '2018-08-15 23:30:25', NULL),
(14, 18, 8, '2018-08-15 23:30:25', '2018-08-15 23:30:25', NULL),
(15, 18, 5, '2018-08-15 23:30:25', '2018-08-15 23:30:25', NULL),
(16, 18, 1, '2018-08-15 23:30:25', '2018-08-15 23:30:25', NULL),
(17, 19, 10, '2018-08-15 23:31:33', '2018-08-15 23:31:33', NULL),
(18, 19, 8, '2018-08-15 23:31:33', '2018-08-15 23:31:33', NULL),
(19, 19, 5, '2018-08-15 23:31:33', '2018-08-15 23:31:33', NULL),
(20, 19, 1, '2018-08-15 23:31:34', '2018-08-15 23:31:34', NULL),
(21, 20, 10, '2018-08-15 23:31:52', '2018-08-15 23:31:52', NULL),
(22, 20, 8, '2018-08-15 23:31:52', '2018-08-15 23:31:52', NULL),
(23, 20, 5, '2018-08-15 23:31:52', '2018-08-15 23:31:52', NULL),
(24, 20, 1, '2018-08-15 23:31:52', '2018-08-15 23:31:52', NULL),
(25, 21, 10, '2018-08-15 23:36:45', '2018-08-15 23:36:45', NULL),
(26, 21, 8, '2018-08-15 23:36:45', '2018-08-15 23:36:45', NULL),
(27, 21, 5, '2018-08-15 23:36:45', '2018-08-15 23:36:45', NULL),
(28, 21, 1, '2018-08-15 23:36:45', '2018-08-15 23:36:45', NULL),
(29, 15, 10, '2018-08-15 23:42:30', '2018-08-15 23:42:30', NULL),
(30, 15, 8, '2018-08-15 23:42:30', '2018-08-15 23:42:30', NULL),
(31, 15, 5, '2018-08-15 23:42:30', '2018-08-15 23:42:30', NULL),
(32, 15, 1, '2018-08-15 23:42:30', '2018-08-15 23:42:30', NULL),
(33, 15, 10, '2018-08-15 23:43:54', '2018-08-15 23:43:54', NULL),
(34, 15, 8, '2018-08-15 23:43:54', '2018-08-15 23:43:54', NULL),
(35, 15, 5, '2018-08-15 23:43:54', '2018-08-15 23:43:54', NULL),
(36, 15, 1, '2018-08-15 23:43:54', '2018-08-15 23:43:54', NULL),
(37, 15, 10, '2018-08-15 23:45:19', '2018-08-15 23:45:19', NULL),
(38, 15, 8, '2018-08-15 23:45:19', '2018-08-15 23:45:19', NULL),
(39, 15, 5, '2018-08-15 23:45:19', '2018-08-15 23:45:19', NULL),
(40, 15, 1, '2018-08-15 23:45:19', '2018-08-15 23:45:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_setting_users`
--

CREATE TABLE `job_setting_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `employmentstatusid` int(10) UNSIGNED NOT NULL,
  `jobrelocate` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_setting_users`
--

INSERT INTO `job_setting_users` (`id`, `userid`, `employmentstatusid`, `jobrelocate`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(15, 2, 2, 0, 0, '2018-07-16 21:41:33', '2018-07-16 21:41:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_skills`
--

CREATE TABLE `job_skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobid` int(10) UNSIGNED NOT NULL,
  `skillneedid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_skills`
--

INSERT INTO `job_skills` (`id`, `jobid`, `skillneedid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2018-03-18 09:12:57', '2018-03-18 09:12:57', NULL),
(2, 1, 2, '2018-03-18 09:13:02', '2018-03-18 09:13:02', NULL),
(3, 1, 3, '2018-03-18 09:13:11', '2018-03-18 09:13:11', NULL),
(4, 1, 4, '2018-03-18 09:13:19', '2018-03-18 09:13:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_types`
--

CREATE TABLE `job_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobid` int(10) UNSIGNED NOT NULL,
  `typejobid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_types`
--

INSERT INTO `job_types` (`id`, `jobid`, `typejobid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2018-03-18 08:45:54', '2018-03-18 08:45:54', NULL),
(2, 1, 2, '2018-03-18 08:46:00', '2018-03-18 08:46:00', NULL),
(3, 1, 3, '2018-03-18 08:46:05', '2018-03-18 08:46:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `levelalls`
--

CREATE TABLE `levelalls` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levelalls`
--

INSERT INTO `levelalls` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '-', NULL, NULL),
(2, '1', NULL, NULL),
(3, '2', NULL, NULL),
(4, '3', NULL, NULL),
(5, '4', NULL, NULL),
(6, '5', NULL, NULL),
(7, '6', NULL, NULL),
(8, '7', NULL, NULL),
(9, 'Others', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriprion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name`, `descriprion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Apprentice 1', 'Apprentice 1', '2018-01-13 20:27:55', '2018-01-13 20:27:55', NULL),
(2, 'Apprentice 2', 'Apprentice 2', '2018-01-13 20:28:06', '2018-01-13 20:28:06', NULL),
(3, 'Apprentice 3', 'Apprentice 3', '2018-01-13 20:28:14', '2018-01-13 20:28:14', NULL),
(4, 'Apprentice 4', 'Apprentice 4', '2018-01-13 20:28:23', '2018-01-13 20:28:23', NULL),
(5, 'Journeyman', 'Journeyman', '2018-01-13 20:28:30', '2018-01-13 20:28:30', NULL),
(6, 'Master (10+ years journeyman)', 'Master (10+ years journeyman)', '2018-01-13 20:28:37', '2018-01-13 20:28:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `like_articles`
--

CREATE TABLE `like_articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_post` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `groupid` int(10) UNSIGNED DEFAULT NULL,
  `status` int(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `like_articles`
--

INSERT INTO `like_articles` (`id`, `id_post`, `id_user`, `groupid`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 4, NULL, 1, '2018-02-15 07:13:27', NULL, NULL),
(2, 2, 2, NULL, 1, '2018-02-15 07:13:27', NULL, NULL),
(3, 5, 2, NULL, 1, '2018-02-19 02:22:57', '2018-02-19 02:22:57', NULL),
(23, 6, 2, NULL, 1, '2018-02-19 03:41:26', '2018-02-19 03:41:26', NULL),
(25, 5, 2, NULL, 1, '2018-02-19 05:40:18', '2018-02-19 05:40:18', NULL),
(26, 5, 2, NULL, 1, '2018-02-19 05:40:22', '2018-02-19 05:40:22', NULL),
(30, 4, 4, NULL, 1, '2018-02-21 00:53:38', '2018-02-21 00:53:38', NULL),
(49, 5, 4, NULL, 1, '2018-02-21 02:11:16', '2018-02-21 02:11:16', NULL),
(50, 6, 4, NULL, 1, '2018-02-21 04:05:44', '2018-02-21 04:05:44', NULL),
(51, 10, 2, NULL, 1, '2018-02-25 09:30:19', '2018-02-25 09:30:19', NULL),
(57, 13, 2, NULL, 1, '2018-02-27 22:19:47', '2018-02-27 22:19:47', NULL),
(58, 13, 2, NULL, 1, '2018-02-27 22:23:39', '2018-02-27 22:23:39', NULL),
(59, 19, 4, NULL, 1, '2018-05-21 21:47:26', '2018-05-21 21:47:26', NULL),
(97, 19, 2, NULL, 1, '2018-05-22 23:01:57', '2018-05-22 23:01:57', NULL),
(102, 18, 2, NULL, 1, '2018-05-22 23:26:01', '2018-05-22 23:26:01', NULL),
(103, 18, 2, NULL, 1, '2018-05-22 23:27:28', '2018-05-22 23:27:28', NULL),
(110, 116, 2, NULL, 1, '2018-05-29 23:42:27', '2018-05-29 23:42:27', NULL),
(113, 121, 2, NULL, 1, '2018-05-30 01:28:33', '2018-05-30 01:28:33', NULL),
(115, 122, 2, NULL, 1, '2018-05-30 01:30:06', '2018-05-30 01:30:06', NULL),
(116, 123, 4, NULL, 1, '2018-05-30 21:25:04', '2018-05-30 21:25:04', NULL),
(117, 124, 4, NULL, 1, '2018-05-30 23:36:44', '2018-05-30 23:36:44', NULL),
(118, 124, 2, NULL, 1, '2018-07-17 21:59:34', '2018-09-06 20:31:49', '2018-09-06 20:31:49'),
(119, 126, 2, NULL, 1, '2018-08-28 20:52:49', '2018-09-06 01:18:57', '2018-09-06 01:18:57'),
(120, 125, 2, NULL, 1, '2018-09-05 21:50:49', '2018-09-05 21:53:46', '2018-09-05 21:53:46'),
(121, 125, 2, NULL, 1, '2018-09-05 21:53:49', '2018-09-05 21:53:54', '2018-09-05 21:53:54'),
(122, 125, 2, NULL, 1, '2018-09-05 21:53:56', '2018-09-05 21:53:58', '2018-09-05 21:53:58'),
(123, 125, 2, NULL, 1, '2018-09-05 21:54:01', '2018-09-05 21:54:01', '2018-09-05 21:54:01'),
(124, 125, 2, NULL, 1, '2018-09-05 21:54:02', '2018-09-05 21:54:49', '2018-09-05 21:54:49'),
(125, 125, 2, NULL, 1, '2018-09-05 21:54:50', '2018-09-05 21:55:28', '2018-09-05 21:55:28'),
(126, 125, 2, NULL, 1, '2018-09-05 21:55:28', '2018-09-05 21:55:29', '2018-09-05 21:55:29'),
(127, 125, 2, NULL, 1, '2018-09-05 21:55:29', '2018-09-05 21:55:30', '2018-09-05 21:55:30'),
(128, 125, 2, NULL, 1, '2018-09-05 21:55:38', '2018-09-05 21:55:40', '2018-09-05 21:55:40'),
(129, 125, 2, NULL, 1, '2018-09-05 21:55:52', '2018-09-05 21:55:52', '2018-09-05 21:55:52'),
(130, 125, 2, NULL, 1, '2018-09-05 21:55:53', '2018-09-05 21:55:54', '2018-09-05 21:55:54'),
(131, 125, 2, NULL, 1, '2018-09-05 21:55:54', '2018-09-05 21:55:55', '2018-09-05 21:55:55'),
(132, 125, 2, NULL, 1, '2018-09-05 21:55:55', '2018-09-05 21:55:56', '2018-09-05 21:55:56'),
(133, 125, 2, NULL, 1, '2018-09-05 21:55:56', '2018-09-05 21:55:57', '2018-09-05 21:55:57'),
(134, 125, 2, NULL, 1, '2018-09-05 21:55:57', '2018-09-05 21:55:58', '2018-09-05 21:55:58'),
(135, 125, 2, NULL, 1, '2018-09-05 21:55:58', '2018-09-05 21:55:59', '2018-09-05 21:55:59'),
(136, 125, 2, NULL, 1, '2018-09-05 21:55:59', '2018-09-05 21:56:00', '2018-09-05 21:56:00'),
(137, 125, 2, NULL, 1, '2018-09-05 21:56:00', '2018-09-05 21:56:01', '2018-09-05 21:56:01'),
(138, 125, 2, NULL, 1, '2018-09-05 21:56:01', '2018-09-05 21:56:02', '2018-09-05 21:56:02'),
(139, 125, 2, NULL, 1, '2018-09-05 21:56:02', '2018-09-05 21:56:03', '2018-09-05 21:56:03'),
(140, 125, 2, NULL, 1, '2018-09-05 21:56:03', '2018-09-05 21:56:04', '2018-09-05 21:56:04'),
(141, 125, 2, NULL, 1, '2018-09-05 21:56:04', '2018-09-05 21:56:05', '2018-09-05 21:56:05'),
(142, 125, 2, NULL, 1, '2018-09-05 21:56:06', '2018-09-05 21:56:06', '2018-09-05 21:56:06'),
(143, 125, 2, NULL, 1, '2018-09-05 21:56:07', '2018-09-05 21:56:07', '2018-09-05 21:56:07'),
(144, 125, 2, NULL, 1, '2018-09-05 21:56:08', '2018-09-05 21:56:09', '2018-09-05 21:56:09'),
(145, 125, 2, NULL, 1, '2018-09-05 21:56:09', '2018-09-05 21:56:10', '2018-09-05 21:56:10'),
(146, 125, 2, NULL, 1, '2018-09-05 21:56:10', '2018-09-05 21:56:11', '2018-09-05 21:56:11'),
(147, 125, 2, NULL, 1, '2018-09-05 21:56:11', '2018-09-05 21:57:00', '2018-09-05 21:57:00'),
(148, 125, 2, NULL, 1, '2018-09-05 21:57:02', '2018-09-05 21:57:03', '2018-09-05 21:57:03'),
(149, 125, 2, NULL, 1, '2018-09-05 21:57:03', '2018-09-05 21:57:05', '2018-09-05 21:57:05'),
(150, 125, 2, NULL, 1, '2018-09-05 21:57:07', '2018-09-05 21:57:07', '2018-09-05 21:57:07'),
(151, 125, 2, NULL, 1, '2018-09-05 21:57:08', '2018-09-05 21:57:09', '2018-09-05 21:57:09'),
(152, 125, 2, NULL, 1, '2018-09-05 21:57:10', '2018-09-05 21:57:11', '2018-09-05 21:57:11'),
(153, 125, 2, NULL, 1, '2018-09-05 21:57:12', '2018-09-05 21:57:19', '2018-09-05 21:57:19'),
(154, 125, 2, NULL, 1, '2018-09-05 21:58:16', '2018-09-05 21:58:20', '2018-09-05 21:58:20'),
(155, 125, 2, NULL, 1, '2018-09-05 21:58:20', '2018-09-05 21:58:21', '2018-09-05 21:58:21'),
(156, 125, 2, NULL, 1, '2018-09-05 21:58:21', '2018-09-05 21:58:22', '2018-09-05 21:58:22'),
(157, 125, 2, NULL, 1, '2018-09-05 21:58:23', '2018-09-05 21:58:23', '2018-09-05 21:58:23'),
(158, 125, 2, NULL, 1, '2018-09-05 21:58:24', '2018-09-05 21:58:24', '2018-09-05 21:58:24'),
(159, 125, 2, NULL, 1, '2018-09-05 21:58:25', '2018-09-05 21:58:25', '2018-09-05 21:58:25'),
(160, 125, 2, NULL, 1, '2018-09-05 21:58:25', '2018-09-05 21:58:26', '2018-09-05 21:58:26'),
(161, 125, 2, NULL, 1, '2018-09-05 21:58:26', '2018-09-05 21:58:27', '2018-09-05 21:58:27'),
(162, 125, 2, NULL, 1, '2018-09-05 21:58:27', '2018-09-05 21:58:28', '2018-09-05 21:58:28'),
(163, 125, 2, NULL, 1, '2018-09-05 21:58:29', '2018-09-05 21:58:30', '2018-09-05 21:58:30'),
(164, 125, 2, NULL, 1, '2018-09-05 21:58:30', '2018-09-05 21:58:38', '2018-09-05 21:58:38'),
(165, 125, 2, NULL, 1, '2018-09-05 22:02:18', '2018-09-05 22:02:18', '2018-09-05 22:02:18'),
(166, 125, 2, NULL, 1, '2018-09-05 22:02:19', '2018-09-05 22:02:19', '2018-09-05 22:02:19'),
(167, 125, 2, NULL, 1, '2018-09-05 22:02:20', '2018-09-05 22:02:31', '2018-09-05 22:02:31'),
(168, 125, 2, NULL, 1, '2018-09-05 22:03:24', '2018-09-05 22:03:25', '2018-09-05 22:03:25'),
(169, 125, 2, NULL, 1, '2018-09-05 22:03:25', '2018-09-05 22:03:26', '2018-09-05 22:03:26'),
(170, 125, 2, NULL, 1, '2018-09-05 22:03:26', '2018-09-05 22:03:27', '2018-09-05 22:03:27'),
(171, 125, 2, NULL, 1, '2018-09-05 22:03:27', '2018-09-05 22:03:28', '2018-09-05 22:03:28'),
(172, 125, 2, NULL, 1, '2018-09-05 22:03:28', '2018-09-05 22:03:29', '2018-09-05 22:03:29'),
(173, 125, 2, NULL, 1, '2018-09-05 22:03:30', '2018-09-05 22:03:30', '2018-09-05 22:03:30'),
(174, 125, 2, NULL, 1, '2018-09-05 22:03:31', '2018-09-05 22:03:31', '2018-09-05 22:03:31'),
(175, 125, 2, NULL, 1, '2018-09-05 22:03:32', '2018-09-05 22:03:33', '2018-09-05 22:03:33'),
(176, 125, 2, NULL, 1, '2018-09-05 22:03:33', '2018-09-05 22:03:35', '2018-09-05 22:03:35'),
(177, 125, 2, NULL, 1, '2018-09-05 22:03:35', '2018-09-05 22:03:49', '2018-09-05 22:03:49'),
(178, 125, 2, NULL, 1, '2018-09-05 22:03:49', '2018-09-05 22:03:50', '2018-09-05 22:03:50'),
(179, 125, 2, NULL, 1, '2018-09-05 22:04:17', '2018-09-05 23:34:45', '2018-09-05 23:34:45'),
(180, 125, 2, NULL, 1, '2018-09-05 23:34:48', '2018-09-05 23:35:02', '2018-09-05 23:35:02'),
(181, 125, 2, NULL, 1, '2018-09-05 23:35:03', '2018-09-05 23:35:03', '2018-09-05 23:35:03'),
(182, 125, 2, NULL, 1, '2018-09-05 23:35:04', '2018-09-05 23:35:05', '2018-09-05 23:35:05'),
(183, 125, 2, NULL, 1, '2018-09-05 23:35:05', '2018-09-05 23:44:28', '2018-09-05 23:44:28'),
(184, 125, 2, NULL, 1, '2018-09-05 23:44:30', '2018-09-05 23:44:32', '2018-09-05 23:44:32'),
(185, 125, 2, NULL, 1, '2018-09-05 23:44:32', '2018-09-05 23:44:33', '2018-09-05 23:44:33'),
(186, 125, 2, NULL, 1, '2018-09-05 23:44:34', '2018-09-05 23:44:34', '2018-09-05 23:44:34'),
(187, 125, 2, NULL, 1, '2018-09-05 23:44:35', '2018-09-05 23:44:35', '2018-09-05 23:44:35'),
(188, 125, 2, NULL, 1, '2018-09-05 23:44:36', '2018-09-05 23:44:36', '2018-09-05 23:44:36'),
(189, 125, 2, NULL, 1, '2018-09-05 23:44:37', '2018-09-06 00:58:55', '2018-09-06 00:58:55'),
(190, 125, 2, NULL, 1, '2018-09-06 00:58:55', '2018-09-06 00:58:56', '2018-09-06 00:58:56'),
(191, 125, 2, NULL, 1, '2018-09-06 00:58:57', '2018-09-06 00:58:57', '2018-09-06 00:58:57'),
(192, 125, 2, NULL, 1, '2018-09-06 00:58:58', '2018-09-06 00:58:58', '2018-09-06 00:58:58'),
(193, 125, 2, NULL, 1, '2018-09-06 00:59:01', '2018-09-06 00:59:05', '2018-09-06 00:59:05'),
(194, 125, 2, NULL, 1, '2018-09-06 00:59:06', '2018-09-06 01:15:22', '2018-09-06 01:15:22'),
(195, 125, 2, NULL, 1, '2018-09-06 01:18:48', '2018-09-06 01:18:54', '2018-09-06 01:18:54'),
(196, 125, 2, NULL, 1, '2018-09-06 01:18:56', '2018-09-06 21:12:29', '2018-09-06 21:12:29'),
(197, 126, 2, NULL, 1, '2018-09-06 01:19:04', '2018-09-06 20:30:29', '2018-09-06 20:30:29'),
(198, 126, 2, NULL, 1, '2018-09-06 20:30:30', '2018-09-06 20:34:12', '2018-09-06 20:34:12'),
(199, 126, 2, NULL, 1, '2018-09-06 20:34:17', '2018-09-06 20:34:23', '2018-09-06 20:34:23'),
(200, 126, 2, NULL, 1, '2018-09-06 20:34:24', '2018-09-06 20:36:04', '2018-09-06 20:36:04'),
(201, 126, 2, NULL, 1, '2018-09-06 20:36:46', '2018-09-06 20:36:58', '2018-09-06 20:36:58'),
(202, 126, 2, NULL, 1, '2018-09-06 20:37:02', '2018-09-06 20:37:07', '2018-09-06 20:37:07'),
(203, 125, 2, NULL, 1, '2018-09-06 21:12:30', '2018-09-06 21:13:06', '2018-09-06 21:13:06'),
(204, 126, 2, NULL, 1, '2018-09-06 21:16:23', '2018-09-06 21:17:08', '2018-09-06 21:17:08'),
(205, 126, 2, NULL, 1, '2018-09-06 21:17:08', '2018-09-06 21:17:32', '2018-09-06 21:17:32'),
(206, 126, 2, NULL, 1, '2018-09-06 21:17:59', '2018-09-06 21:18:02', '2018-09-06 21:18:02'),
(207, 126, 2, NULL, 1, '2018-09-06 21:18:09', '2018-09-06 21:18:09', NULL),
(208, 125, 2, NULL, 1, '2018-09-06 21:18:12', '2018-09-06 21:18:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `martials`
--

CREATE TABLE `martials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `martials`
--

INSERT INTO `martials` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Married', 'Married', '2018-01-12 01:28:39', '2018-01-12 01:28:39', NULL),
(2, 'Separated', 'Separated', '2018-01-12 01:28:47', '2018-01-12 01:28:47', NULL),
(3, 'Divorced', 'Divorced', '2018-01-12 01:28:55', '2018-01-12 01:28:55', NULL),
(4, 'Widowed', 'Widowed', '2018-01-12 01:29:04', '2018-01-12 01:29:04', NULL),
(5, 'Never Married', 'Never Married', '2018-01-12 01:29:12', '2018-01-12 01:29:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mc_answers`
--

CREATE TABLE `mc_answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user_survey` int(10) UNSIGNED DEFAULT NULL,
  `id_mc` int(10) UNSIGNED NOT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mc_answers`
--

INSERT INTO `mc_answers` (`id`, `id_user_survey`, `id_mc`, `answer`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 9, 1, '2', '2018-04-30 06:22:34', '2018-04-30 06:22:34', NULL),
(2, 9, 2, '2', '2018-04-30 06:22:34', '2018-04-30 06:22:34', NULL),
(3, 9, 3, '4', '2018-04-30 06:22:34', '2018-04-30 06:22:34', NULL),
(4, 9, 5, '4', '2018-04-30 06:22:34', '2018-04-30 06:22:34', NULL),
(5, 9, 6, '3', '2018-04-30 06:22:34', '2018-04-30 06:22:34', NULL),
(6, 9, 7, '2', '2018-04-30 06:22:34', '2018-04-30 06:22:34', NULL),
(7, 9, 8, '3', '2018-04-30 06:22:34', '2018-04-30 06:22:34', NULL),
(8, 9, 9, '1', '2018-04-30 06:22:34', '2018-04-30 06:22:34', NULL),
(9, 9, 10, '2', '2018-04-30 06:22:34', '2018-04-30 06:22:34', NULL),
(10, 9, 11, '3', '2018-04-30 06:22:34', '2018-04-30 06:22:34', NULL),
(11, 9, 12, '3', '2018-04-30 06:22:34', '2018-04-30 06:22:34', NULL),
(12, 9, 13, '1', '2018-04-30 06:22:35', '2018-04-30 06:22:35', NULL),
(13, 9, 14, '1', '2018-04-30 06:22:35', '2018-04-30 06:22:35', NULL),
(14, 9, 15, '2', '2018-04-30 06:22:35', '2018-04-30 06:22:35', NULL),
(15, 9, 16, '1', '2018-04-30 06:22:35', '2018-04-30 06:22:35', NULL),
(16, 9, 17, '1', '2018-04-30 06:22:35', '2018-04-30 06:22:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mc_surveys`
--

CREATE TABLE `mc_surveys` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_question` int(10) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mc_surveys`
--

INSERT INTO `mc_surveys` (`id`, `id_question`, `question`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '10,000+', '2018-04-25 04:24:35', '2018-04-25 04:24:35', NULL),
(2, 1, '5,000- 10,000', '2018-04-25 04:25:02', '2018-04-25 04:25:02', NULL),
(3, 1, '1,000-5,000', '2018-04-25 04:25:16', '2018-04-25 04:25:16', NULL),
(4, 1, '50-1,000', '2018-04-25 04:25:25', '2018-04-25 04:25:25', NULL),
(5, 1, 'Less than 50', '2018-04-25 04:25:38', '2018-04-25 04:25:38', NULL),
(6, 1, '1,000+', '2018-04-25 04:29:01', '2018-04-25 04:29:18', '2018-04-25 04:29:18'),
(7, 2, '1,000+', '2018-04-25 04:29:51', '2018-04-25 04:29:51', NULL),
(8, 1, '500-1000', '2018-04-25 04:30:01', '2018-04-25 04:30:45', '2018-04-25 04:30:45'),
(9, 2, '500-1000', '2018-04-25 04:31:01', '2018-04-25 04:31:01', NULL),
(10, 2, '100-500', '2018-04-25 04:31:11', '2018-04-25 04:31:11', NULL),
(11, 2, '50-100', '2018-04-25 04:31:21', '2018-04-25 04:31:21', NULL),
(12, 2, '0-50', '2018-04-25 04:31:32', '2018-04-25 04:31:32', NULL),
(13, 16, 'Very Important', '2018-04-25 15:23:09', '2018-04-25 15:23:09', NULL),
(14, 16, 'Important', '2018-04-25 15:24:24', '2018-04-25 15:24:24', NULL),
(15, 16, 'Somewhat Important', '2018-04-25 15:24:41', '2018-04-25 15:24:41', NULL),
(16, 16, 'Not at all important', '2018-04-25 15:24:56', '2018-04-25 15:24:56', NULL),
(17, 5, 'Very Important', '2018-04-25 15:35:44', '2018-04-25 15:35:44', NULL),
(18, 5, 'Important', '2018-04-25 15:40:03', '2018-04-25 15:40:03', NULL),
(19, 5, 'Somewhat Important', '2018-04-25 15:40:13', '2018-04-25 15:40:13', NULL),
(20, 5, 'Not at all important', '2018-04-25 15:40:24', '2018-04-25 15:40:24', NULL),
(21, 6, 'Very Important', '2018-04-25 15:42:10', '2018-04-25 15:42:10', NULL),
(22, 6, 'Important', '2018-04-25 15:42:34', '2018-04-25 15:42:34', NULL),
(23, 6, 'Somewhat Important', '2018-04-25 15:44:28', '2018-04-25 15:44:28', NULL),
(24, 6, 'Not at all important', '2018-04-25 15:44:42', '2018-04-25 15:44:42', NULL),
(25, 7, 'Very Interested', '2018-04-25 15:46:22', '2018-04-25 15:46:22', NULL),
(26, 7, 'Interested', '2018-04-25 15:46:42', '2018-04-25 15:46:42', NULL),
(27, 7, 'Somewhat Interested', '2018-04-25 15:47:00', '2018-04-25 15:47:00', NULL),
(28, 7, 'Not at all interested', '2018-04-25 15:47:17', '2018-04-25 15:47:17', NULL),
(29, 8, 'Very Interested', '2018-04-25 15:47:50', '2018-04-25 15:47:50', NULL),
(30, 8, 'Interested', '2018-04-25 15:48:06', '2018-04-25 15:48:06', NULL),
(31, 8, 'Somewhat Interested', '2018-04-25 15:48:25', '2018-04-25 15:48:25', NULL),
(32, 8, 'Not at all interested', '2018-04-25 15:48:42', '2018-04-25 15:48:42', NULL),
(33, 9, 'Yes', '2018-04-25 15:50:35', '2018-04-25 15:50:35', NULL),
(34, 9, 'No', '2018-04-25 15:51:00', '2018-04-25 15:51:00', NULL),
(35, 10, 'Pay per use', '2018-04-25 17:11:49', '2018-04-25 17:11:49', NULL),
(36, 10, 'Monthly Payment structure', '2018-04-25 17:12:02', '2018-04-25 17:12:02', NULL),
(37, 10, 'Yearly Payment Structure', '2018-04-25 17:12:16', '2018-04-25 17:12:16', NULL),
(38, 10, 'Not interested in paying for service', '2018-04-25 17:12:29', '2018-04-25 17:12:29', NULL),
(39, 11, '$80,000 + per year', '2018-04-25 17:12:42', '2018-04-25 17:12:42', NULL),
(40, 11, '$50,000- $80,000 per year', '2018-04-25 17:12:55', '2018-04-25 17:12:55', NULL),
(41, 11, '$30,000- $50,000 per year', '2018-04-25 17:13:23', '2018-04-25 17:13:23', NULL),
(42, 11, '$10,000- $30,000 per year', '2018-04-25 17:13:39', '2018-04-25 17:13:39', NULL),
(43, 11, 'Less than $10,000 per year', '2018-04-25 17:13:49', '2018-04-25 17:13:49', NULL),
(44, 12, '$10,000+ per month', '2018-04-25 17:15:59', '2018-04-25 17:15:59', NULL),
(45, 12, '$5,000 - $10,000 per month', '2018-04-25 17:16:09', '2018-04-25 17:16:09', NULL),
(46, 12, '$1,000 - $5,000 per month', '2018-04-25 17:16:19', '2018-04-25 17:16:19', NULL),
(47, 12, '$500- $1,000 per month', '2018-04-25 17:16:30', '2018-04-25 17:16:30', NULL),
(48, 12, 'Less than $500 per month', '2018-04-25 17:16:39', '2018-04-25 17:16:39', NULL),
(49, 13, '$5,000+ per new hire', '2018-04-25 17:16:50', '2018-04-25 17:16:50', NULL),
(50, 13, '$2,500 - $5,000 per hire', '2018-04-25 17:17:01', '2018-04-25 17:17:01', NULL),
(51, 13, '$1,000 - $2,500 per hire', '2018-04-25 17:17:14', '2018-04-25 17:17:14', NULL),
(52, 13, '$350- $1,000 per hire', '2018-04-25 17:17:24', '2018-04-25 17:17:24', NULL),
(53, 13, 'Less than $350 per hire', '2018-04-25 17:17:34', '2018-04-25 17:17:34', NULL),
(54, 14, '$1,000', '2018-04-25 17:17:50', '2018-04-25 17:17:50', NULL),
(55, 14, '$500-$1,000', '2018-04-25 17:18:00', '2018-04-25 17:18:00', NULL),
(56, 14, '$250- $500', '2018-04-25 17:18:12', '2018-04-25 17:18:12', NULL),
(57, 14, '$50- $250', '2018-04-25 17:18:21', '2018-04-25 17:18:21', NULL),
(58, 14, 'Less than $50', '2018-04-25 17:18:34', '2018-04-25 17:18:34', NULL),
(59, 15, 'Very Important', '2018-04-25 17:18:47', '2018-04-25 17:18:47', NULL),
(60, 15, 'Important', '2018-04-25 17:18:55', '2018-04-25 17:18:55', NULL),
(61, 15, 'Somewhat Important', '2018-04-25 17:19:06', '2018-04-25 17:19:06', NULL),
(62, 15, 'Not at all important', '2018-04-25 17:19:16', '2018-04-25 17:19:16', NULL),
(63, 3, 'Oil & Gas', '2018-04-25 17:20:54', '2018-04-25 17:20:54', NULL),
(64, 3, 'Mining', '2018-04-25 17:21:12', '2018-04-25 17:21:12', NULL),
(65, 3, 'Construction', '2018-04-25 17:21:21', '2018-04-25 17:21:21', NULL),
(66, 3, 'Manufacturing', '2018-04-25 17:21:32', '2018-04-25 17:21:32', NULL),
(67, 3, 'Transportation, warehousing, and utilities', '2018-04-25 17:21:43', '2018-04-25 17:21:43', NULL),
(68, 3, 'Other', '2018-04-25 17:21:55', '2018-04-25 17:21:55', NULL),
(69, 17, 'I really like the look of the software and wouldn’t change anything', '2018-04-26 11:47:52', '2018-04-26 11:47:52', NULL),
(70, 17, 'I would change the look of the interface', '2018-04-26 11:48:10', '2018-04-26 11:48:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medicals`
--

CREATE TABLE `medicals` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(11) UNSIGNED NOT NULL,
  `condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) UNSIGNED NOT NULL,
  `from` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicals`
--

INSERT INTO `medicals` (`id`, `userid`, `condition`, `level`, `from`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 2, 'tes', 3, '2018-07-17 00:00:00', '2018-07-16 00:25:53', '2018-07-16 00:25:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `userfrom` int(10) UNSIGNED NOT NULL,
  `userto` int(10) UNSIGNED NOT NULL,
  `conversationid` int(10) UNSIGNED NOT NULL,
  `msg` text COLLATE utf8mb4_unicode_ci,
  `images` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `userfrom`, `userto`, `conversationid`, `msg`, `images`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 2, 4, 2, 'tes', NULL, 1, '2018-07-22 21:08:39', '2018-07-22 21:08:39', NULL),
(4, 2, 4, 2, 'apa', NULL, 1, '2018-07-22 21:23:56', '2018-07-22 21:23:56', NULL),
(5, 2, 4, 2, 'tes', NULL, 1, '2018-07-22 21:36:14', '2018-07-22 21:36:14', NULL),
(6, 2, 4, 2, 'tes', NULL, 1, '2018-07-22 21:36:46', '2018-07-22 21:36:46', NULL),
(7, 2, 4, 2, 'tet', NULL, 1, '2018-07-22 21:37:19', '2018-07-22 21:37:19', NULL),
(8, 4, 2, 2, 'tes', NULL, 1, '2018-07-22 21:39:26', '2018-07-22 21:39:26', NULL),
(9, 2, 18, 4, 'res', NULL, 1, '2018-07-22 22:04:50', '2018-07-22 22:04:50', NULL),
(10, 2, 18, 4, 'aa', NULL, 1, '2018-07-22 22:07:09', '2018-07-22 22:07:09', NULL),
(11, 2, 18, 4, 'tess', NULL, 1, '2018-07-22 22:08:51', '2018-07-22 22:08:51', NULL),
(12, 2, 18, 4, 'tes', NULL, 1, '2018-07-22 22:13:43', '2018-07-22 22:13:43', NULL),
(13, 2, 18, 4, NULL, NULL, 1, '2018-07-23 00:22:52', '2018-07-23 00:22:52', NULL),
(14, 2, 18, 4, NULL, NULL, 1, '2018-07-23 00:24:53', '2018-07-23 00:24:53', NULL),
(15, 2, 18, 4, NULL, NULL, 1, '2018-07-23 00:34:24', '2018-07-23 00:34:24', NULL),
(16, 2, 18, 4, NULL, NULL, 1, '2018-07-23 00:40:29', '2018-07-23 00:40:29', NULL),
(17, 2, 18, 4, '1532331669lt00001111.png', NULL, 1, '2018-07-23 00:41:09', '2018-07-23 00:41:09', NULL),
(18, 2, 18, 4, NULL, NULL, 1, '2018-07-23 00:42:04', '2018-07-23 00:42:04', NULL),
(19, 2, 18, 4, NULL, '153233206012736.png', 1, '2018-07-23 00:47:40', '2018-07-23 00:47:40', NULL),
(20, 4, 2, 2, NULL, '153250566312736.png', 1, '2018-07-25 01:01:03', '2018-07-25 01:01:03', NULL),
(21, 4, 2, 2, 'ress', NULL, 1, '2018-07-25 01:01:34', '2018-07-25 01:01:34', NULL),
(22, 4, 2, 2, NULL, '1532506248lt00001111.png', 1, '2018-07-25 01:10:49', '2018-07-25 01:10:49', NULL),
(23, 4, 2, 2, NULL, '1532506272lt00001111.png', 1, '2018-07-25 01:11:12', '2018-07-25 01:11:12', NULL),
(24, 2, 1, 1, 'tes', NULL, 1, '2018-09-25 23:20:42', '2018-09-25 23:20:42', NULL),
(25, 2, 1, 1, 'tes', NULL, 1, '2018-09-25 23:45:32', '2018-09-25 23:45:32', NULL),
(26, 2, 1, 1, 'tes', NULL, 1, '2018-09-25 23:46:04', '2018-09-25 23:46:04', NULL),
(27, 2, 1, 1, 'tes', NULL, 1, '2018-09-25 23:47:46', '2018-09-25 23:47:46', NULL),
(28, 2, 1, 1, 'hhh', NULL, 1, '2018-09-25 23:48:43', '2018-09-25 23:48:43', NULL),
(29, 2, 18, 4, 'tes', NULL, 1, '2018-09-26 00:03:33', '2018-09-26 00:03:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `message_admins`
--

CREATE TABLE `message_admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `userfrom` int(10) UNSIGNED NOT NULL,
  `userto` int(10) UNSIGNED NOT NULL,
  `conversationid` int(10) UNSIGNED NOT NULL,
  `msg` text COLLATE utf8mb4_unicode_ci,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message_admins`
--

INSERT INTO `message_admins` (`id`, `userfrom`, `userto`, `conversationid`, `msg`, `images`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 1, 'Test cooooy', '', 1, '2018-07-17 17:00:00', NULL, NULL),
(2, 2, 1, 1, 'naon cuk', NULL, 1, '2018-07-17 21:22:10', NULL, NULL),
(3, 1, 2, 1, 'kalem cuk,sini bantai2 kita satu satu', NULL, 1, '2018-07-19 00:49:50', '2018-07-19 00:49:50', NULL),
(4, 1, 2, 1, 'asd test', NULL, 1, '2018-07-19 02:04:50', '2018-07-19 02:04:50', NULL),
(5, 2, 1, 1, 'naon sich?', NULL, 1, '2018-07-19 02:06:27', '2018-07-19 02:06:27', NULL),
(6, 1, 2, 1, 'mneh nyari ribut?kuy sini', NULL, 1, '2018-07-19 02:07:04', '2018-07-19 02:07:04', NULL),
(7, 2, 1, 1, 'apa sich,mw bantai2 domba?kuy lah', NULL, 1, '2018-07-19 02:07:16', '2018-07-19 02:07:16', NULL),
(8, 1, 2, 1, 'ah bnyk cincong', NULL, 1, '2018-07-19 02:07:22', '2018-07-19 02:07:22', NULL),
(9, 1, 2, 1, 'spar kuy sma anak ENC', NULL, 1, '2018-07-19 20:41:01', '2018-07-19 20:41:01', NULL),
(10, 1, 2, 1, 'this is spartaaaaaa', NULL, 1, '2018-07-19 21:28:45', '2018-07-19 21:28:45', NULL),
(11, 1, 2, 1, 'ea', NULL, 1, '2018-07-26 07:42:26', '2018-07-26 07:42:26', NULL),
(12, 1, 2, 4, 'AAAAA', NULL, 1, '2018-08-30 00:45:23', '2018-08-30 00:45:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `message_groups`
--

CREATE TABLE `message_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `groupid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `msg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message_groups`
--

INSERT INTO `message_groups` (`id`, `groupid`, `userid`, `msg`, `status`, `images`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 1, 4, 'hay', 1, NULL, '2018-04-30 03:21:12', '2018-04-30 03:21:12', NULL),
(4, 1, 4, 'oke', 1, NULL, '2018-04-30 03:22:03', '2018-04-30 03:22:03', NULL),
(5, 1, 4, 'by', 1, NULL, '2018-04-30 03:22:34', '2018-04-30 03:22:34', NULL),
(6, 1, 4, 'bangsad', 1, NULL, '2018-04-30 06:13:37', '2018-04-30 06:13:37', NULL),
(7, 1, 4, 'khintil', 1, NULL, '2018-04-30 06:13:41', '2018-04-30 06:13:41', NULL),
(8, 1, 2, 'tesssss', 1, NULL, '2018-06-03 20:27:35', '2018-06-03 20:27:35', NULL),
(9, 1, 2, 'tes', 1, NULL, '2018-07-22 22:26:58', '2018-07-22 22:26:58', NULL),
(10, 1, 2, '', 1, '1532338481lt00001111.png', '2018-07-23 02:34:41', '2018-07-23 02:34:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `message_recruits`
--

CREATE TABLE `message_recruits` (
  `id` int(10) UNSIGNED NOT NULL,
  `userfrom` int(10) UNSIGNED NOT NULL,
  `userto` int(10) UNSIGNED NOT NULL,
  `conversationid` int(10) UNSIGNED NOT NULL,
  `msg` text COLLATE utf8mb4_unicode_ci,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message_recruits`
--

INSERT INTO `message_recruits` (`id`, `userfrom`, `userto`, `conversationid`, `msg`, `images`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 4, 2, 'story', '', 1, '2018-07-18 21:00:00', NULL, NULL),
(2, 1, 4, 2, 'this is spartaaaaaa', NULL, 1, '2018-07-19 02:24:58', '2018-07-19 02:24:58', NULL),
(3, 1, 1, 3, 'test', NULL, 1, '2018-08-02 03:22:03', '2018-08-02 03:22:03', NULL),
(4, 1, 1, 3, 'ea tod', NULL, 1, '2018-08-06 00:51:37', '2018-08-06 00:51:37', NULL),
(5, 1, 2, 4, 'ea tod', NULL, 1, '2018-08-06 00:51:47', '2018-08-06 00:51:47', NULL),
(6, 1, 2, 4, 'ea tod', NULL, 1, '2018-08-06 00:55:59', '2018-08-06 00:55:59', NULL),
(7, 1, 2, 4, 'tess', NULL, 1, '2018-08-30 00:39:44', '2018-08-30 00:39:44', NULL),
(8, 1, 1, 3, 'tess', NULL, 1, '2018-08-30 00:40:13', '2018-08-30 00:40:13', NULL),
(9, 1, 2, 1, 'tes', NULL, 1, '2018-09-24 20:10:34', '2018-09-24 20:10:34', NULL),
(10, 2, 1, 1, 'tes', NULL, 1, '2018-09-25 23:49:15', '2018-09-25 23:49:15', NULL),
(11, 2, 1, 1, NULL, '153794478712736.png', 1, '2018-09-25 23:53:07', '2018-09-25 23:53:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_26_080210_create_trades_table', 1),
(4, '2017_12_26_080642_create_child_trades_table', 1),
(5, '2017_12_26_081242_create_levels_table', 1),
(6, '2017_12_26_081546_create_genders_table', 1),
(7, '2017_12_27_064005_create_martials_table', 1),
(8, '2017_12_27_064538_create_provinces_table', 1),
(9, '2018_01_05_083431_create_employees_table', 1),
(10, '2018_02_14_133322_create_post_articles_table', 2),
(11, '2018_02_14_134555_create_image_articles_table', 3),
(12, '2018_02_14_135139_create_comment_articles_table', 4),
(13, '2018_02_14_135344_create_like_articles_table', 5),
(14, '2018_02_14_135532_create_hide_articles_table', 6),
(15, '2018_02_17_024527_create_follows_table', 7),
(16, '2018_02_17_025432_create_group_levels_table', 8),
(17, '2018_02_17_025623_create_groups_table', 9),
(18, '2018_02_17_084705_create_group_types_table', 10),
(19, '2018_02_17_085145_create_groups_table', 11),
(20, '2018_02_17_085444_create_group_members_table', 12),
(21, '2018_02_21_093116_create_report_articles_table', 13),
(22, '2018_02_25_164139_create_post_videos_table', 14),
(23, '2018_03_06_050226_create_subcribes_table', 15),
(24, '2018_03_15_155055_create_specialities_table', 16),
(25, '2018_03_15_160209_create_industries_table', 16),
(26, '2018_03_15_160658_create_type_companies_table', 16),
(27, '2018_03_15_164752_create_companies_table', 16),
(28, '2018_03_15_180827_create_company_specialities_table', 17),
(29, '2018_03_15_181840_create_company_industries_table', 18),
(30, '2018_03_15_183630_create_skill_needs_table', 19),
(31, '2018_03_15_184203_create_type_jobs_table', 20),
(32, '2018_03_15_184518_create_employment_statuses_table', 21),
(33, '2018_03_15_184603_create_position_jobs_table', 22),
(34, '2018_03_15_191037_create_jobs_table', 23),
(35, '2018_03_15_192011_create_job_types_table', 24),
(36, '2018_03_15_192046_create_job_positions_table', 25),
(37, '2018_03_16_103304_create_job_setting_users_table', 26),
(38, '2018_03_16_103656_create_job_apply_users_table', 27),
(39, '2018_03_16_112033_create_job_setting_users_table', 28),
(40, '2018_03_16_112248_create_job_setting_positions_table', 29),
(41, '2018_03_16_112314_create_job_setting_types_table', 30),
(42, '2018_03_16_112344_create_job_setting_locations_table', 31),
(43, '2018_03_18_155634_create_job_skills_table', 32),
(44, '2018_04_10_044130_create_experiences_table', 33),
(45, '2018_04_10_045010_create_employeskills_table', 34),
(46, '2018_04_10_045043_create_endorsments_table', 35),
(47, '2018_04_10_045210_create_employeendorsments_table', 36),
(48, '2018_04_10_045513_create_certificates_table', 37),
(49, '2018_04_10_045653_create_education_table', 38),
(50, '2018_04_10_050156_create_timelines_table', 39),
(51, '2018_04_10_050614_create_tickets_table', 40),
(52, '2018_04_10_050713_create_medicals_table', 41),
(53, '2018_04_10_050810_create_interests_table', 42),
(54, '2018_04_10_050843_create_duties_table', 43),
(55, '2018_04_10_051004_create_fit_duties_table', 44),
(56, '2018_04_10_051144_create_employe_duties_table', 45),
(57, '2018_04_10_051453_create_addtionals_table', 46),
(60, '2018_04_26_105038_create_conversations_table', 47),
(61, '2018_04_26_105555_create_messages_table', 47),
(62, '2018_04_26_171515_create_messages_table', 48),
(63, '2018_04_16_055153_create_surveys_table', 49),
(64, '2018_04_16_055947_create_questions_table', 49),
(65, '2018_04_24_054630_create_user_surveys_table', 49),
(66, '2018_04_30_090638_create_message_groups_table', 50),
(67, '2018_05_17_070216_create_notifications_table', 51),
(68, '2018_05_08_035137_create_packages_table', 52),
(69, '2018_05_08_044613_create_package_answers_table', 52),
(70, '2018_05_08_045624_create_package_details_table', 52),
(71, '2018_05_08_050117_create_package_prices_table', 52),
(72, '2018_07_03_062650_create_type_timelines_table', 52),
(73, '2018_07_05_064329_create_levelalls_table', 53),
(74, '2018_07_26_073257_create_posted_times_table', 54),
(76, '2018_07_27_034105_create_job_search_settings_table', 54),
(77, '2018_07_27_035454_create_job_search_setting_titles_table', 55),
(78, '2018_07_27_040759_create_job_search_setting_locations_table', 55),
(79, '2018_07_27_041056_create_job_search_setting_companies_table', 55),
(80, '2018_07_27_032135_create_profile_search_settings_table', 56),
(81, '2018_08_01_071615_create_job_search_setting_types_table', 57);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) UNSIGNED NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_id`, `notifiable_type`, `data`, `from`, `status`, `read_at`, `created_at`, `updated_at`) VALUES
('003800c4-c4cb-4728-a2f0-7b973bfb6f7d', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 23:44:34', '2018-09-05 23:44:34'),
('0536eecb-90ce-4efe-9666-ce8172404538', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:53:56', '2018-09-05 21:53:56'),
('07f22d1d-d87c-4055-9e20-62cacde23317', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:54:02', '2018-09-05 21:54:02'),
('09186211-c7a2-4c89-a52e-422c28f636c4', 'App\\Notifications\\UserFollowed', 4, 'App\\Employees', '{\"id\":18,\"username\":\"resetallacc\",\"name\":\"Reset\",\"avatar\":null}', NULL, 1, '2018-08-09 01:14:30', '2018-06-04 22:56:46', '2018-08-09 01:14:30'),
('0b38aabf-0dfe-4d63-8737-550e48d23496', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:55:59', '2018-09-05 21:55:59'),
('0cbe3d58-64af-4838-81fe-01aaaef52bcf', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 23:44:30', '2018-09-05 23:44:30'),
('0f33810c-79ed-493b-9b4b-1db5e385fe35', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:56:11', '2018-09-05 21:56:11'),
('11d460fa-566f-45b6-96e6-ebd441b5bf81', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 22:03:49', '2018-09-05 22:03:49'),
('12b6fc02-3b95-4202-b68f-d5b41c911c83', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-06 00:58:57', '2018-09-06 00:58:57'),
('13b38ab8-8eaf-41bb-84db-4f010bca3fa3', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-06 00:58:58', '2018-09-06 00:58:58'),
('145ef035-9040-4b8b-bd4a-e062c96ac688', 'App\\Notifications\\UserMessage', 2, 'App\\Employees', '{\"id\":18,\"message_username\":\"resetallacc\",\"avatar\":null,\"name\":\"Reset\",\"0\":\"Reset All\"}', NULL, 1, '2018-06-04 23:40:47', '2018-06-03 20:10:14', '2018-06-03 20:23:21'),
('1d20f1af-07d8-416d-b0c8-b4ba4900b867', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:57:07', '2018-09-05 21:57:07'),
('1d6b42de-55a1-44cf-a35e-3e478ededb9e', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 22:03:25', '2018-09-05 22:03:25'),
('1dcd5245-c442-4d83-8c4e-a61856de8201', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:58:24', '2018-09-05 21:58:24'),
('1fa02785-d377-4362-a6bf-796059199c56', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:55:58', '2018-09-05 21:55:58'),
('2361f848-bd12-4bae-b3b7-c0c29f6311b7', 'App\\Notifications\\UserFollowed', 4, 'App\\Employees', '{\"id\":2,\"username\":\"syahrilr51\",\"name\":\"Syahril\",\"avatar\":\"1526452726416x416.jpg\"}', NULL, 1, NULL, '2018-08-03 03:01:13', '2018-08-03 03:01:13'),
('23e3c453-a117-481a-b605-e36ebd58ac74', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 23:44:32', '2018-09-05 23:44:32'),
('2a3d2543-1331-41c6-a872-09b2610c991a', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:58:27', '2018-09-05 21:58:27'),
('2b75585a-72c9-430e-a6ac-cf692acb314d', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:55:53', '2018-09-05 21:55:53'),
('2bc70dc8-d5bc-4e50-b2ec-eef6e98b4e10', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 22:02:18', '2018-09-05 22:02:18'),
('2cfcd13e-b784-4b41-bf82-f0131c279d6f', 'App\\Notifications\\UserFollowed', 18, 'App\\Employees', '{\"id\":2,\"username\":\"syahrilr51\",\"name\":\"Syahril\",\"avatar\":\"1526452726416x416.jpg\"}', NULL, 1, '2018-06-03 20:51:36', '2018-06-03 20:51:09', '2018-06-03 20:51:09'),
('2d4629f5-2918-4b5f-af0b-a012a6fd387f', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:56:04', '2018-09-05 21:56:04'),
('2ed63fd6-e223-457f-b833-98538430900d', 'App\\Notifications\\UserMessage', 18, 'App\\Employees', '{\"id\":2,\"message_username\":\"syahrilr51\",\"avatar\":\"1526452726416x416.jpg\",\"name\":\"Syahril\",\"0\":\"Syahril Ramdani\"}', NULL, 1, '2018-06-03 20:51:36', '2018-06-03 20:22:51', '2018-06-03 20:22:59'),
('3d245764-5bc3-47f6-a831-ff822bf46271', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 22:02:20', '2018-09-05 22:02:20'),
('3e9dcfed-200d-4bcb-87c8-c28aa089f5cf', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:57:02', '2018-09-05 21:57:02'),
('4054e878-1d5f-41fe-b07a-2ef7916cec99', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 23:44:35', '2018-09-05 23:44:35'),
('428ba91b-0bff-4f3a-ac0e-1c0aa78b6233', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:55:38', '2018-09-05 21:55:38'),
('44ce30d2-7a8f-44eb-a5b2-6ff528bac145', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:55:29', '2018-09-05 21:55:29'),
('48981865-49b9-4d4e-aaf5-5c849eb50a7f', 'App\\Notifications\\UserComments', 2, 'App\\Employees', '{\"id\":4,\"name\":\"Ramdani Syahril\",\"avatar\":\"kbr.png\",\"post_id\":124}', NULL, 1, '2018-06-04 23:40:47', '2018-05-30 23:40:07', '2018-05-30 23:40:07'),
('48d24c97-f944-4feb-a4dd-985868cad31f', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 22:03:33', '2018-09-05 22:03:33'),
('49f14de1-8cbc-40c9-99d0-91ebcbea4d13', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 22:03:24', '2018-09-05 22:03:24'),
('4d8f55ee-7c84-4fb0-bbcf-93bf1b35dbf0', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 22:03:35', '2018-09-05 22:03:35'),
('4de92975-b78b-4863-996f-60c8d8093dc6', 'App\\Notifications\\UserFollowed', 17, 'App\\Employees', '{\"id\":2,\"username\":\"syahrilr51\",\"name\":\"Syahril\",\"avatar\":\"1526452726416x416.jpg\"}', NULL, 1, NULL, '2018-08-26 21:31:21', '2018-08-26 21:31:21'),
('5083e168-0186-4036-99c6-42256a80a3b2', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:53:51', '2018-09-05 21:53:51'),
('515df8cc-b944-47b8-bb0d-27606c5217f5', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:57:04', '2018-09-05 21:57:04'),
('520ce6c4-17b4-43d3-a007-084b8bced789', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-06 21:12:31', '2018-09-06 21:12:31'),
('54f9cc3b-c4f4-468b-ae57-9e69e9d9b148', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:58:30', '2018-09-05 21:58:30'),
('58bad0af-b2ed-47b8-902b-27cbfdae1127', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:55:54', '2018-09-05 21:55:54'),
('65971558-3d76-4ee8-b52c-ecb5bdd9fbd9', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 23:35:04', '2018-09-05 23:35:04'),
('6736df97-f54a-439a-92a9-c3b22fca5883', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-06 00:58:56', '2018-09-06 00:58:56'),
('6f3d79df-a6e4-4f8a-a340-d179a5efe1e5', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 22:03:29', '2018-09-05 22:03:29'),
('70eaf759-3441-4e11-8566-fe12caaf6f2c', 'App\\Notifications\\UserComments', 2, 'App\\Employees', '{\"id\":4,\"name\":\"Ramdani Syahril\",\"avatar\":\"kbr.png\",\"post_id\":124}', NULL, 1, '2018-06-04 23:40:47', '2018-05-30 23:36:43', '2018-05-30 23:36:43'),
('7113a6be-a836-4716-9a4c-72397e4a4fa3', 'App\\Notifications\\NewPost', 4, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":126}', NULL, 1, '2018-07-25 01:19:09', '2018-07-12 23:25:00', '2018-07-25 01:19:09'),
('76b8e876-9e25-4a6f-83bb-7902d280f919', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:57:12', '2018-09-05 21:57:12'),
('79d3f88b-4154-47ef-a022-0626b2025906', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:56:01', '2018-09-05 21:56:01'),
('7bfdf6dc-acfd-4e68-bb81-6dcfdce6686b', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:55:57', '2018-09-05 21:55:57'),
('7e2d5565-222d-456e-a9ed-81eee5e12ada', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:58:22', '2018-09-05 21:58:22'),
('7ec77910-8c5b-46f4-8318-846d63eff7b3', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:56:08', '2018-09-05 21:56:08'),
('7edbceb4-fe94-4d17-8904-fd89c782bcaf', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 22:03:27', '2018-09-05 22:03:27'),
('84d2c814-9e26-4965-95f4-7819111a2875', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:56:02', '2018-09-05 21:56:02'),
('858574f9-99d5-4bf5-aa9e-f93e97532708', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:58:26', '2018-09-05 21:58:26'),
('86682935-dda2-4796-aaa9-46b5c649ee3e', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-06 01:18:56', '2018-09-06 01:18:56'),
('869e13a3-16e7-4920-bf3e-07639a8fbe1a', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 22:03:31', '2018-09-05 22:03:31'),
('8d88eb79-b1c1-4ce4-8c25-6cc5bec5bc73', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 22:02:19', '2018-09-05 22:02:19'),
('8fd52afd-6934-4128-b36f-9395d9f6e7b4', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-06 00:59:02', '2018-09-06 00:59:02'),
('906d8421-bb4a-4644-9477-6eb664424dc2', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-06 00:59:07', '2018-09-06 00:59:07'),
('95945854-5748-4bb2-8033-1d926d57fdc4', 'App\\Notifications\\NewPost', 4, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":124}', NULL, 1, '2018-08-09 02:32:10', '2018-05-30 23:36:28', '2018-08-09 02:32:10'),
('96ae5b18-af60-4f4e-ab4e-cc6f714be3bd', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:54:01', '2018-09-05 21:54:01'),
('97047495-8d5e-43ef-827e-e1d625f95ca1', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:55:56', '2018-09-05 21:55:56'),
('973fa8e3-94d8-493e-9f40-34065f2cba77', 'App\\Notifications\\UserFollowed', 14, 'App\\Employees', '{\"id\":2,\"username\":\"syahrilr51\",\"name\":\"Syahril\",\"avatar\":\"1526452726416x416.jpg\"}', NULL, 1, NULL, '2018-07-17 18:34:15', '2018-07-17 18:34:15'),
('98594861-cc85-41e8-931f-87c417902d24', 'App\\Notifications\\UserFollowed', 4, 'App\\Employees', '{\"id\":2,\"username\":\"syahrilr51\",\"name\":\"Syahril\",\"avatar\":\"1526452726416x416.jpg\"}', NULL, 1, NULL, '2018-08-03 03:04:09', '2018-08-03 03:04:09'),
('9a2c3274-8053-41a8-8de9-f35d2f93e13f', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-06 21:18:12', '2018-09-06 21:18:12'),
('9ab4453a-4d24-4c06-b163-dd9afa9b30b9', 'App\\Notifications\\PostGroup', 18, 'App\\Employees', '{\"id\":18,\"name\":\"Reset All\",\"avatar\":null,\"post_id\":125,\"group_name\":\"Public Enemis\",\"group_id\":8}', NULL, 1, '2018-06-03 20:51:36', '2018-06-03 20:14:43', '2018-06-03 20:14:43'),
('9d5f573d-f634-4448-92bb-53603b813963', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:56:10', '2018-09-05 21:56:10'),
('9ea84acc-65f5-4879-bdba-871a9c51ac0a', 'App\\Notifications\\UserFollowed', 15, 'App\\Employees', '{\"id\":2,\"username\":\"syahrilr51\",\"name\":\"Syahril\",\"avatar\":\"1526452726416x416.jpg\"}', NULL, 1, NULL, '2018-07-17 19:11:07', '2018-07-17 19:11:07'),
('a04151a4-a09a-4bad-9c27-52cf0964154a', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 23:35:05', '2018-09-05 23:35:05'),
('a5a06508-554d-465f-b2b7-2e98902821f2', 'App\\Notifications\\UserFollowed', 4, 'App\\Employees', '{\"id\":2,\"username\":\"syahrilr51\",\"follower_name\":\"Syahril\"}', NULL, 1, '2018-08-09 02:31:54', '2018-05-31 00:19:18', '2018-08-09 02:31:54'),
('a81c70ac-bf34-4ef1-8e82-022d073195cc', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:56:03', '2018-09-05 21:56:03'),
('aa8f320f-5a72-4c5e-9226-65c3d6a076e8', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:58:26', '2018-09-05 21:58:26'),
('ae98c96e-e6d3-4182-a473-78fddb9a1b5b', 'App\\Notifications\\UserMessage', 18, 'App\\Employees', '{\"id\":2,\"message_username\":\"syahrilr51\",\"avatar\":\"1526452726416x416.jpg\",\"name\":\"Syahril\",\"0\":\"Syahril Ramdani\"}', NULL, 1, NULL, '2018-09-26 00:03:33', '2018-09-26 00:03:33'),
('b347ef5d-072b-4f08-8519-816a2b3ea4b4', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:58:29', '2018-09-05 21:58:29'),
('b3f4aa16-8a1e-4518-891d-0ceae21a5f42', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 22:03:30', '2018-09-05 22:03:30'),
('b55bd36d-4e79-4863-97b5-2f6bdbeb17fd', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 22:04:17', '2018-09-05 22:04:17'),
('b78e5642-4d66-4ca1-bed9-a74959d912c9', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:56:06', '2018-09-05 21:56:06'),
('b969f46d-1beb-43a0-ac2a-7143aead08a7', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:55:29', '2018-09-05 21:55:29'),
('bd0d3aad-6b73-4255-9dd9-5d14403d6aef', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:56:00', '2018-09-05 21:56:00'),
('c08cef95-59dd-4597-9d26-a2fdb8082d0d', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:58:20', '2018-09-05 21:58:20'),
('c75d8df7-cbbe-4b7b-b1f0-4fb5bf01646a', 'App\\Notifications\\UserMessage', 18, 'App\\Employees', '{\"id\":2,\"message_username\":\"syahrilr51\",\"avatar\":\"1526452726416x416.jpg\",\"name\":\"Syahril\",\"0\":\"Syahril Ramdani\"}', NULL, 1, '2018-07-22 22:13:57', '2018-07-22 22:04:52', '2018-07-22 22:13:57'),
('c9a19e37-cbb5-4214-add7-7b803bd1f156', 'App\\Notifications\\UserFollowed', 2, 'App\\Employees', '{\"id\":18,\"username\":\"resetallacc\",\"name\":\"Reset\",\"avatar\":\"1528083565416x416.jpg\"}', NULL, 1, '2018-06-04 23:40:47', '2018-06-03 20:51:44', '2018-06-03 20:51:44'),
('c9aa1632-8c97-4540-8d2a-4672f8e45e15', 'App\\Notifications\\UserLikes', 2, 'App\\Employees', '{\"id\":4,\"name\":\"Ramdani Syahril\",\"avatar\":\"kbr.png\",\"post_id\":124}', NULL, 1, '2018-06-04 23:40:47', '2018-05-30 23:36:44', '2018-05-30 23:36:44'),
('d56b2288-dbd7-450a-ad22-ffb22ed116e4', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:54:50', '2018-09-05 21:54:50'),
('d6c47bfe-8ec9-49dc-8618-8c11c420364f', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:58:16', '2018-09-05 21:58:16'),
('d6e0ceec-3ae7-4377-9c5b-de63f0ce7f53', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:55:52', '2018-09-05 21:55:52'),
('d75ec3ff-b2a7-43ab-bfde-ec894c737c98', 'App\\Notifications\\UserMessage', 1, 'App\\Employees', '{\"id\":2,\"message_username\":\"syahrilr51\",\"avatar\":\"1526452726416x416.jpg\",\"name\":\"Syahril\",\"0\":\"Syahril Ramdani\"}', NULL, 1, NULL, '2018-09-25 23:20:44', '2018-09-25 23:20:44'),
('d91397c9-bc67-474e-94a1-06a8c66cc356', 'App\\Notifications\\UserMessage', 2, 'App\\Employees', '{\"id\":4,\"message_username\":\"syahrilr131\",\"avatar\":\"kbr.png\",\"name\":\"Ramdani\",\"0\":\"Ramdani Syahril\"}', NULL, 1, NULL, '2018-07-25 01:01:37', '2018-07-25 01:01:37'),
('d9f20f3e-1589-45b1-91f9-dd8ee3433f82', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 23:35:03', '2018-09-05 23:35:03'),
('de643c8f-043c-44c9-a5ab-382633925aa1', 'App\\Notifications\\UserFollowed', 4, 'App\\Employees', '{\"id\":1,\"username\":\"tes-tes\",\"name\":\"tes \",\"avatar\":\"15337865991532398269lt00001111.png\"}', NULL, 1, NULL, '2018-08-09 00:52:02', '2018-08-09 00:52:02'),
('e1090bcf-d2b7-4acb-b14e-d6d948fbba5c', 'App\\Notifications\\UserFollowed', 18, 'App\\Employees', '{\"id\":2,\"username\":\"syahrilr51\",\"follower_name\":\"Syahril\"}', NULL, 1, '2018-06-03 20:51:36', '2018-06-03 20:20:08', '2018-06-03 20:20:08'),
('e130e248-443a-418f-bd30-b3d1f69cd425', 'App\\Notifications\\NewPost', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":126}', NULL, 1, NULL, '2018-07-12 23:25:00', '2018-07-12 23:25:00'),
('e49fd76d-f6fd-497d-8f8b-21c9be4047eb', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:56:09', '2018-09-05 21:56:09'),
('e616b185-674b-4d64-af60-7dbd51dfcd06', 'App\\Notifications\\UserFollowed', 18, 'App\\Employees', '{\"id\":2,\"username\":\"syahrilr51\",\"name\":\"Syahril\",\"avatar\":\"1526452726416x416.jpg\"}', NULL, 1, NULL, '2018-06-04 23:41:12', '2018-06-04 23:41:12'),
('e685ac24-861f-4dc4-9da9-65c0ba8e7f19', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:57:08', '2018-09-05 21:57:08'),
('e6fe27ca-b55a-4e2d-bc1d-c2f57f7deaa9', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-06 01:18:48', '2018-09-06 01:18:48'),
('e772599f-5b52-472e-911a-b497bd02b3c7', 'App\\Notifications\\UserFollowed', 4, 'App\\Employees', '{\"id\":2,\"username\":\"syahrilr51\",\"follower_name\":\"Syahril\"}', NULL, 1, NULL, '2018-05-31 00:20:29', '2018-05-31 00:20:29'),
('e81449f0-9b90-44a3-8d34-342d2ca5094f', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:56:07', '2018-09-05 21:56:07'),
('ea9d2cfa-11ac-459c-b3a8-d94c0b7b828f', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 23:44:36', '2018-09-05 23:44:36'),
('ec2b304f-54e1-414a-a228-d7c9034575e7', 'App\\Notifications\\UserMessage', 2, 'App\\Employees', '{\"id\":18,\"message_username\":\"resetallacc\",\"avatar\":null,\"name\":\"Reset\",\"0\":\"Reset All\"}', NULL, 1, '2018-06-04 23:40:47', '2018-06-03 20:23:53', '2018-06-03 20:23:53'),
('ec6889e9-11e3-4bfb-8c95-23c43a082f9a', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 23:34:59', '2018-09-05 23:34:59'),
('ed9a2bc4-6e5c-4b17-b7e2-986453f7a9e6', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:58:25', '2018-09-05 21:58:25'),
('f209e035-5268-475c-85eb-b3fcce6077aa', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 23:44:37', '2018-09-05 23:44:37'),
('f4112be1-dcca-48b1-a1fb-613fc3a4f275', 'App\\Notifications\\UserFollowed', 4, 'App\\Employees', '{\"id\":2,\"username\":\"syahrilr51\",\"follower_name\":\"Syahril\"}', NULL, 1, '2018-08-09 02:32:02', '2018-05-30 23:54:53', '2018-08-09 02:32:02'),
('f7765c9f-45b4-4e55-949d-238fb0e31feb', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:55:55', '2018-09-05 21:55:55'),
('f9156253-3f4b-4e93-b0c5-be2971003dd8', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 22:03:32', '2018-09-05 22:03:32'),
('fa3f65c2-1119-40f2-8db5-3fb02399e5cf', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 22:03:26', '2018-09-05 22:03:26'),
('fbf37e1b-c0da-4830-90cd-428bbdcda085', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:57:10', '2018-09-05 21:57:10'),
('fe189821-1ec2-4739-81ab-ad3a2589dd99', 'App\\Notifications\\UserFollowed', 2, 'App\\Employees', '{\"id\":18,\"username\":\"resetallacc\",\"follower_name\":\"Reset\"}', NULL, 1, '2018-06-04 23:40:47', '2018-06-03 20:09:15', '2018-06-03 20:09:15'),
('ffe101d8-7757-4525-af4b-103c0d59486d', 'App\\Notifications\\UserLikes', 18, 'App\\Employees', '{\"id\":2,\"name\":\"Syahril Ramdani\",\"avatar\":\"1526452726416x416.jpg\",\"post_id\":125}', NULL, 1, NULL, '2018-09-05 21:58:23', '2018-09-05 21:58:23');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package_answers`
--

CREATE TABLE `package_answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user_survey` int(10) UNSIGNED NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package_details`
--

CREATE TABLE `package_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_package` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package_prices`
--

CREATE TABLE `package_prices` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_package` int(10) UNSIGNED NOT NULL,
  `id_package_detail` int(10) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('syahrilr51@gmail.com', '$2y$10$BCu6qepnOXDDnvZHQBzovepl8.DT9d4tZBOTjM0Nup3UPKro3/kPS', '2018-05-16 01:56:39');

-- --------------------------------------------------------

--
-- Table structure for table `posted_times`
--

CREATE TABLE `posted_times` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posted_times`
--

INSERT INTO `posted_times` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Any Time', '2018-07-11 17:00:00', '2018-07-11 17:00:00', NULL),
(2, 'Past Week', '2018-07-30 17:00:00', '2018-07-30 17:00:00', NULL),
(3, 'Past 24 hours', '2018-07-22 17:00:00', '2018-07-30 17:00:00', NULL),
(4, 'Past Month', '2018-07-24 17:00:00', '2018-07-25 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_articles`
--

CREATE TABLE `post_articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post` text COLLATE utf8mb4_unicode_ci,
  `view` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `groupid` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_articles`
--

INSERT INTO `post_articles` (`id`, `title`, `post`, `view`, `status`, `id_user`, `groupid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ipsum accusamus mollitia sit, tenetur rerum accusantium quam non aliquid nemo officia assumenda incidunt voluptatem! Error quod libero amet quia natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ab officiis qui, magni suscipit fuga a. Totam labore architecto voluptatibus eos soluta facere officia reiciendis neque odio consectetur, nesciunt quod.', 7, 1, 2, NULL, '2018-02-14 06:57:08', '2018-08-25 01:34:17', NULL),
(3, NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ipsum accusamus mollitia sit, tenetur rerum accusantium quam non aliquid nemo officia assumenda incidunt voluptatem! Error quod libero amet quia natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ab officiis qui, magni suscipit fuga a. Totam labore architecto voluptatibus eos soluta facere officia reiciendis neque odio consectetur, nesciunt quod.', 3, 1, 2, NULL, '2018-02-14 21:03:02', '2018-02-25 08:34:07', NULL),
(4, NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ipsum accusamus mollitia sit, tenetur rerum accusantium quam non aliquid nemo officia assumenda incidunt voluptatem! Error quod libero amet quia natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ab officiis qui, magni suscipit fuga a. Totam labore architecto voluptatibus eos soluta facere officia reiciendis neque odio consectetur, nesciunt quod.', NULL, 1, 2, NULL, '2018-02-14 21:03:15', '2018-02-14 21:03:15', NULL),
(5, NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ipsum accusamus mollitia sit, tenetur rerum accusantium quam non aliquid nemo officia assumenda incidunt voluptatem! Error quod libero amet quia natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ab officiis qui, magni suscipit fuga a. Totam labore architecto voluptatibus eos soluta facere officia reiciendis neque odio consectetur, nesciunt quod.', 3, 1, 2, NULL, '2018-02-14 21:05:07', '2018-05-14 23:59:31', '2018-05-14 23:59:31'),
(6, NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ipsum accusamus mollitia sit, tenetur rerum accusantium quam non aliquid nemo officia assumenda incidunt voluptatem! Error quod libero amet quia natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ab officiis qui, magni suscipit fuga a. Totam labore architecto voluptatibus eos soluta facere officia reiciendis neque odio consectetur, nesciunt quod.', NULL, 1, 2, 1, '2018-02-18 14:09:05', '2018-02-18 14:09:05', NULL),
(7, NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate ipsum accusamus mollitia sit, tenetur rerum accusantium quam non aliquid nemo officia assumenda incidunt voluptatem! Error quod libero amet quia natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam ab officiis qui, magni suscipit fuga a. Totam labore architecto voluptatibus eos soluta facere officia reiciendis neque odio consectetur, nesciunt quod.', NULL, 1, 4, NULL, '2018-02-21 21:15:49', '2018-02-21 21:15:49', NULL),
(8, NULL, 'tadf adf a', NULL, 1, 4, NULL, '2018-02-25 01:00:02', '2018-02-25 01:00:02', NULL),
(9, NULL, 'tadf adf a', NULL, 1, 4, NULL, '2018-02-25 01:00:13', '2018-02-25 01:00:13', NULL),
(10, NULL, 'tadf adf a', 2, 1, 4, NULL, '2018-02-25 01:00:22', '2018-08-25 01:33:52', NULL),
(11, NULL, 'fasf af as', 1, 1, 2, NULL, '2018-02-25 09:43:06', '2018-05-02 00:31:42', NULL),
(12, NULL, 'tes video nn', NULL, 1, 2, 1, '2018-02-25 09:49:41', '2018-05-28 00:48:55', '2018-05-28 00:48:55'),
(13, NULL, 'tes onnennia  A', NULL, 1, 2, NULL, '2018-02-25 09:51:47', '2018-05-14 23:39:30', '2018-05-14 23:39:30'),
(14, NULL, 'fadf adsf adf ad', NULL, 1, 2, 1, '2018-02-25 09:55:35', '2018-05-28 00:48:50', '2018-05-28 00:48:50'),
(15, NULL, 'tes video on', NULL, 1, 2, 1, '2018-02-25 09:57:45', '2018-05-28 00:48:43', '2018-05-28 00:48:43'),
(16, NULL, 'tes video aa', NULL, 1, 2, 1, '2018-02-25 09:58:58', '2018-05-28 00:48:40', '2018-05-28 00:48:40'),
(17, NULL, 'asd asd asd sad as', NULL, 1, 2, 7, '2018-02-25 10:02:13', '2018-02-25 10:02:13', NULL),
(18, NULL, 'skill-link.net', 10, 1, 4, NULL, '2018-04-19 21:17:40', '2018-07-12 23:22:39', NULL),
(19, NULL, 'adfadf', 63, 1, 2, NULL, '2018-04-30 22:42:28', '2018-05-22 01:03:01', NULL),
(20, NULL, 'tes aaa', NULL, 1, 2, NULL, '2018-05-21 00:27:27', '2018-05-21 00:56:30', '2018-05-21 00:56:30'),
(21, NULL, 'adfa', NULL, 1, 2, NULL, '2018-05-21 00:33:29', '2018-05-21 00:56:25', '2018-05-21 00:56:25'),
(22, NULL, 'adfa', NULL, 1, 2, NULL, '2018-05-21 00:37:33', '2018-05-21 00:56:19', '2018-05-21 00:56:19'),
(23, NULL, 'asdfadf', NULL, 1, 2, NULL, '2018-05-21 00:37:46', '2018-05-21 00:56:08', '2018-05-21 00:56:08'),
(24, NULL, 'asdfadf', NULL, 1, 2, NULL, '2018-05-21 00:40:35', '2018-05-21 00:56:01', '2018-05-21 00:56:01'),
(25, NULL, 'fadf a s', NULL, 1, 2, NULL, '2018-05-21 00:40:48', '2018-05-21 00:55:55', '2018-05-21 00:55:55'),
(26, NULL, 'adfa dfa fda fda', NULL, 1, 2, NULL, '2018-05-21 00:41:17', '2018-05-21 00:55:50', '2018-05-21 00:55:50'),
(27, NULL, 'adfa dfa fda fda', NULL, 1, 2, NULL, '2018-05-21 00:43:48', '2018-05-21 00:55:42', '2018-05-21 00:55:42'),
(28, NULL, 'adfa dfa fda fda', NULL, 1, 2, NULL, '2018-05-21 00:44:07', '2018-05-21 00:55:36', '2018-05-21 00:55:36'),
(29, NULL, 'adfa dfa fda fda', NULL, 1, 2, NULL, '2018-05-21 00:44:32', '2018-05-21 00:55:28', '2018-05-21 00:55:28'),
(30, NULL, 'adfa dfa fda fda', NULL, 1, 2, NULL, '2018-05-21 00:44:50', '2018-05-21 00:55:16', '2018-05-21 00:55:16'),
(31, NULL, 'adfa dfa fda fda', NULL, 1, 2, NULL, '2018-05-21 00:44:55', '2018-05-21 00:55:05', '2018-05-21 00:55:05'),
(32, NULL, 'adfa dfa fda fda', NULL, 1, 2, NULL, '2018-05-21 00:48:38', '2018-05-21 00:55:00', '2018-05-21 00:55:00'),
(33, NULL, 'sasdasdas', NULL, 1, 2, NULL, '2018-05-21 00:50:48', '2018-05-21 00:54:53', '2018-05-21 00:54:53'),
(34, NULL, 'asdasd ad a', NULL, 1, 2, NULL, '2018-05-21 00:54:16', '2018-05-21 00:54:48', '2018-05-21 00:54:48'),
(35, NULL, 'tesfs sd fs', NULL, 1, 2, NULL, '2018-05-21 22:08:47', '2018-05-22 00:50:07', '2018-05-22 00:50:07'),
(36, NULL, 'adfadf adf', NULL, 1, 2, NULL, '2018-05-21 22:53:42', '2018-05-22 00:50:03', '2018-05-22 00:50:03'),
(37, NULL, 'fsdsd', NULL, 1, 2, NULL, '2018-05-21 23:07:08', '2018-05-22 00:49:57', '2018-05-22 00:49:57'),
(38, NULL, 'sfas da da fasf as', NULL, 1, 2, NULL, '2018-05-21 23:17:37', '2018-05-22 00:49:51', '2018-05-22 00:49:51'),
(39, NULL, 'sfas da da fasf as', NULL, 1, 2, NULL, '2018-05-21 23:39:22', '2018-05-22 00:49:47', '2018-05-22 00:49:47'),
(40, NULL, 'til kin', 3, 1, 2, NULL, '2018-05-22 01:06:25', '2018-05-22 01:09:35', NULL),
(41, NULL, 'avaf as dfdsafds', NULL, 1, 2, 1, '2018-05-27 21:23:06', '2018-05-28 00:48:38', '2018-05-28 00:48:38'),
(42, NULL, 'avaf as dfdsafds', NULL, 1, 2, 1, '2018-05-27 21:23:32', '2018-05-28 00:48:35', '2018-05-28 00:48:35'),
(43, NULL, 'avaf as dfdsafds', NULL, 1, 2, 1, '2018-05-27 21:24:20', '2018-05-28 00:48:33', '2018-05-28 00:48:33'),
(44, NULL, 'avaf as dfdsafds', NULL, 1, 2, 1, '2018-05-27 21:24:40', '2018-05-28 00:48:30', '2018-05-28 00:48:30'),
(45, NULL, 'avaf as dfdsafds', NULL, 1, 2, 1, '2018-05-27 21:24:56', '2018-05-28 00:48:28', '2018-05-28 00:48:28'),
(46, NULL, 'adf adf dasf as', NULL, 1, 2, 1, '2018-05-27 21:25:42', '2018-05-28 00:48:25', '2018-05-28 00:48:25'),
(47, NULL, 'gagfadf dasf adsf sd', NULL, 1, 2, 1, '2018-05-27 21:26:35', '2018-05-28 00:48:23', '2018-05-28 00:48:23'),
(48, NULL, 'adfaf dasf dasf dsf sdf', NULL, 1, 2, 1, '2018-05-27 21:32:12', '2018-05-28 00:48:20', '2018-05-28 00:48:20'),
(49, NULL, 'adfaf dasf dasf dsf sdf', NULL, 1, 2, 1, '2018-05-27 21:34:05', '2018-05-28 00:48:18', '2018-05-28 00:48:18'),
(50, NULL, 'adfaf dasf dasf dsf sdf', NULL, 1, 2, 1, '2018-05-27 21:34:24', '2018-05-28 00:48:15', '2018-05-28 00:48:15'),
(51, NULL, 'adfad fasf ads fd', NULL, 1, 2, 1, '2018-05-27 21:35:27', '2018-05-28 00:48:13', '2018-05-28 00:48:13'),
(52, NULL, 'adf ad fadsfads', NULL, 1, 2, 1, '2018-05-27 21:36:31', '2018-05-28 00:48:11', '2018-05-28 00:48:11'),
(53, NULL, 'adf adsf ads', NULL, 1, 2, 1, '2018-05-27 21:39:02', '2018-05-28 00:48:07', '2018-05-28 00:48:07'),
(54, NULL, 'asdasd sadsa', NULL, 1, 2, 1, '2018-05-27 21:43:09', '2018-05-28 00:48:04', '2018-05-28 00:48:04'),
(55, NULL, 'asdasd sadsa', NULL, 1, 2, 1, '2018-05-27 21:43:36', '2018-05-28 00:48:01', '2018-05-28 00:48:01'),
(56, NULL, 'asdasd sadsa', NULL, 1, 2, 1, '2018-05-27 21:46:23', '2018-05-28 00:47:58', '2018-05-28 00:47:58'),
(57, NULL, 'asdasd sadsa', NULL, 1, 2, 1, '2018-05-27 21:47:00', '2018-05-28 00:47:53', '2018-05-28 00:47:53'),
(58, NULL, 'adf adsfsf ads', NULL, 1, 2, 1, '2018-05-27 21:47:06', '2018-05-28 00:47:50', '2018-05-28 00:47:50'),
(59, NULL, 'adf adsfsf ads', NULL, 1, 2, 1, '2018-05-27 21:47:39', '2018-05-28 00:47:46', '2018-05-28 00:47:46'),
(60, NULL, 'adf asdfasdf asd', NULL, 1, 2, 1, '2018-05-27 21:48:13', '2018-05-28 00:47:44', '2018-05-28 00:47:44'),
(61, NULL, 'adf asdfasdf asd', NULL, 1, 2, 1, '2018-05-27 21:48:58', '2018-05-28 00:47:41', '2018-05-28 00:47:41'),
(62, NULL, 'adf asdfasdf asd', NULL, 1, 2, 1, '2018-05-27 21:50:47', '2018-05-28 00:47:39', '2018-05-28 00:47:39'),
(63, NULL, 'adf asdfasdf asd', NULL, 1, 2, 1, '2018-05-27 21:50:58', '2018-05-28 00:47:36', '2018-05-28 00:47:36'),
(64, NULL, 'adf asdfasdf asd', NULL, 1, 2, 1, '2018-05-27 21:51:25', '2018-05-28 00:47:34', '2018-05-28 00:47:34'),
(65, NULL, 'adf asdfasdf asd', NULL, 1, 2, 1, '2018-05-27 21:52:22', '2018-05-28 00:47:32', '2018-05-28 00:47:32'),
(66, NULL, 'adf asdfasdf asd', NULL, 1, 2, 1, '2018-05-27 21:52:53', '2018-05-28 00:47:29', '2018-05-28 00:47:29'),
(67, NULL, 'adf asdfasdf asd', NULL, 1, 2, 1, '2018-05-27 21:53:58', '2018-05-28 00:47:26', '2018-05-28 00:47:26'),
(68, NULL, 'adf asdfasdf asd', NULL, 1, 2, 1, '2018-05-27 21:54:18', '2018-05-28 00:47:24', '2018-05-28 00:47:24'),
(69, NULL, 'adf asdfasdf asd', NULL, 1, 2, 1, '2018-05-27 21:55:38', '2018-05-28 00:47:21', '2018-05-28 00:47:21'),
(70, NULL, 'adf asdfasdf asd', NULL, 1, 2, 1, '2018-05-27 21:56:04', '2018-05-28 00:47:19', '2018-05-28 00:47:19'),
(71, NULL, 'adf asdfasdf asd', NULL, 1, 2, 1, '2018-05-27 21:56:32', '2018-05-28 00:47:15', '2018-05-28 00:47:15'),
(72, NULL, 'adf asdfasdf asd', NULL, 1, 2, 1, '2018-05-27 21:56:48', '2018-05-28 00:47:12', '2018-05-28 00:47:12'),
(73, NULL, 'adf asdfasdf asd', NULL, 1, 2, 1, '2018-05-27 21:57:01', '2018-05-28 00:47:02', '2018-05-28 00:47:02'),
(74, NULL, 'adf asdfasdf asd', NULL, 1, 2, 1, '2018-05-27 21:57:14', '2018-05-28 00:46:57', '2018-05-28 00:46:57'),
(75, NULL, 'adf asdfasdf asd', NULL, 1, 2, 1, '2018-05-27 21:57:18', '2018-05-28 00:46:51', '2018-05-28 00:46:51'),
(76, NULL, 'adf asdfasdf asd', NULL, 1, 2, 1, '2018-05-27 21:57:28', '2018-05-28 00:46:48', '2018-05-28 00:46:48'),
(77, NULL, 'adf asdfasdf asd', NULL, 1, 2, 1, '2018-05-27 21:57:35', '2018-05-28 00:46:45', '2018-05-28 00:46:45'),
(78, NULL, 'adf asdfasdf asd', NULL, 1, 2, 1, '2018-05-27 21:57:45', '2018-05-28 00:46:43', '2018-05-28 00:46:43'),
(79, NULL, 'adf asdfasdf asd', NULL, 1, 2, 1, '2018-05-27 21:59:19', '2018-05-28 00:46:40', '2018-05-28 00:46:40'),
(80, NULL, 'adf asdfasdf asd', NULL, 1, 2, 1, '2018-05-27 22:02:48', '2018-05-28 00:46:37', '2018-05-28 00:46:37'),
(81, NULL, 'fasdas das', NULL, 1, 2, 1, '2018-05-27 22:03:53', '2018-05-28 00:46:33', '2018-05-28 00:46:33'),
(82, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:09:55', '2018-05-28 00:46:30', '2018-05-28 00:46:30'),
(83, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:13:30', '2018-05-28 00:46:28', '2018-05-28 00:46:28'),
(84, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:15:50', '2018-05-28 00:46:26', '2018-05-28 00:46:26'),
(85, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:16:04', '2018-05-28 00:46:23', '2018-05-28 00:46:23'),
(86, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:16:47', '2018-05-28 00:46:21', '2018-05-28 00:46:21'),
(87, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:17:05', '2018-05-28 00:46:19', '2018-05-28 00:46:19'),
(88, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:17:18', '2018-05-28 00:46:16', '2018-05-28 00:46:16'),
(89, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:17:33', '2018-05-28 00:46:11', '2018-05-28 00:46:11'),
(90, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:17:42', '2018-05-28 00:46:05', '2018-05-28 00:46:05'),
(91, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:17:53', '2018-05-28 00:45:57', '2018-05-28 00:45:57'),
(92, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:18:11', '2018-05-28 00:45:54', '2018-05-28 00:45:54'),
(93, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:19:42', '2018-05-28 00:45:51', '2018-05-28 00:45:51'),
(94, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:22:21', '2018-05-28 00:45:49', '2018-05-28 00:45:49'),
(95, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:22:27', '2018-05-28 00:45:41', '2018-05-28 00:45:41'),
(96, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:22:41', '2018-05-28 00:45:05', '2018-05-28 00:45:05'),
(97, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:23:09', '2018-05-28 00:45:01', '2018-05-28 00:45:01'),
(98, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:23:26', '2018-05-28 00:44:58', '2018-05-28 00:44:58'),
(99, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:23:39', '2018-05-28 00:44:55', '2018-05-28 00:44:55'),
(100, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:24:23', '2018-05-28 00:44:52', '2018-05-28 00:44:52'),
(101, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:27:33', '2018-05-28 00:44:50', '2018-05-28 00:44:50'),
(102, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:32:03', '2018-05-28 00:44:47', '2018-05-28 00:44:47'),
(103, NULL, 'adfa sfsda', NULL, 1, 2, 1, '2018-05-27 22:32:26', '2018-05-28 00:44:45', '2018-05-28 00:44:45'),
(104, NULL, 'adfa sfsdaasdf dsaf', NULL, 1, 2, 1, '2018-05-27 22:33:19', '2018-05-28 00:44:42', '2018-05-28 00:44:42'),
(105, NULL, 'adfa sfsdaasdf dsaf', NULL, 1, 2, 1, '2018-05-27 22:33:46', '2018-05-28 00:44:39', '2018-05-28 00:44:39'),
(106, NULL, 'adfa sfsdaasdf dsaf', NULL, 1, 2, 1, '2018-05-27 22:34:13', '2018-05-28 00:44:36', '2018-05-28 00:44:36'),
(107, NULL, 'gafsasf safsafsa', NULL, 1, 2, 1, '2018-05-27 22:35:19', '2018-05-28 00:44:31', '2018-05-28 00:44:31'),
(108, NULL, 'adf dasf ds fdsa', NULL, 1, 2, 1, '2018-05-27 22:41:55', '2018-05-28 00:44:28', '2018-05-28 00:44:28'),
(109, NULL, 'adf adf dsf dsa f', NULL, 1, 2, NULL, '2018-05-27 22:42:08', '2018-05-27 22:42:08', NULL),
(110, NULL, 'adf adf dsf dsa f', NULL, 1, 2, NULL, '2018-05-27 22:42:37', '2018-05-28 00:43:19', '2018-05-28 00:43:19'),
(111, NULL, 'adf adf dsf dsa f', NULL, 1, 2, NULL, '2018-05-27 22:42:58', '2018-05-28 00:43:15', '2018-05-28 00:43:15'),
(112, NULL, 'adf adf dsf dsa f', NULL, 1, 2, NULL, '2018-05-27 22:43:44', '2018-05-28 00:42:11', '2018-05-28 00:42:11'),
(113, NULL, 'adf adf dsf dsa f', NULL, 1, 2, NULL, '2018-05-27 22:44:01', '2018-05-28 00:42:09', '2018-05-28 00:42:09'),
(114, NULL, 'adga df adsf', NULL, 1, 2, NULL, '2018-05-27 22:44:43', '2018-05-28 00:42:05', '2018-05-28 00:42:05'),
(115, NULL, 'asdf asdf sa fdaf', NULL, 1, 2, 1, '2018-05-28 00:49:34', '2018-05-28 00:49:34', NULL),
(116, NULL, 'bbbbbbbbbbb', NULL, 1, 4, 1, '2018-05-29 23:37:12', '2018-05-29 23:37:12', NULL),
(117, NULL, 'adf adsfadf ds f', NULL, 1, 2, 1, '2018-05-30 00:17:51', '2018-05-30 00:17:51', NULL),
(118, NULL, 'asd sa dsad as', NULL, 1, 2, 1, '2018-05-30 00:18:31', '2018-05-30 00:18:31', NULL),
(119, NULL, 'adf dsafds fa', NULL, 1, 2, 1, '2018-05-30 00:19:03', '2018-05-30 00:19:03', NULL),
(120, NULL, 'adf ds fdsa fds', NULL, 1, 2, 1, '2018-05-30 00:21:41', '2018-05-30 00:21:41', NULL),
(121, NULL, 'adf adf dasf das fad', 5, 1, 2, 1, '2018-05-30 00:29:29', '2018-06-01 22:15:59', '2018-06-01 22:15:59'),
(122, NULL, 'bababababab', NULL, 1, 4, 1, '2018-05-30 01:28:59', '2018-05-30 01:28:59', NULL),
(123, NULL, 'aaaa as dsa', NULL, 1, 2, NULL, '2018-05-30 21:09:10', '2018-05-30 21:09:10', NULL),
(124, NULL, 'adf ad fdas fdas f', 2, 1, 2, NULL, '2018-05-30 23:36:28', '2018-08-09 02:32:10', NULL),
(125, NULL, 'tesss hola group site', NULL, 1, 18, 8, '2018-06-03 20:14:43', '2018-06-03 20:14:43', NULL),
(126, NULL, NULL, 2, 1, 2, NULL, '2018-07-12 23:24:56', '2018-07-25 01:19:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_videos`
--

CREATE TABLE `post_videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_post` int(10) UNSIGNED NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_videos`
--

INSERT INTO `post_videos` (`id`, `id_post`, `video`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 11, '15195769861 Build a PHP MVC Application- Introduction (Part 1-9).mp4', '2018-02-25 09:43:06', '2018-02-25 09:43:06', NULL),
(2, 17, '15195781331 Build a PHP MVC Application- Introduction (Part 1-9).mp4', '2018-02-25 10:02:13', '2018-02-25 10:02:13', NULL),
(3, 19, '1525153348tes.mp4', '2018-04-30 22:42:28', '2018-04-30 22:42:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile_search_settings`
--

CREATE TABLE `profile_search_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `interest` int(11) NOT NULL,
  `location` int(11) NOT NULL,
  `company` int(11) NOT NULL,
  `industries` int(11) NOT NULL,
  `school` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_search_settings`
--

INSERT INTO `profile_search_settings` (`id`, `userid`, `interest`, `location`, `company`, `industries`, `school`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 13, 1, 1, 1, 1, 1, '2018-07-03 17:00:00', '2018-07-08 17:00:00', NULL),
(7, 2, 1, 1, 1, 1, 1, '2018-08-01 21:47:40', '2018-08-02 20:17:58', NULL),
(8, 4, 0, 0, 0, 0, 0, '2018-08-03 04:40:08', '2018-08-03 04:40:08', NULL),
(9, 18, 0, 0, 0, 0, 0, '2018-08-03 04:51:01', '2018-08-03 05:03:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abbreviation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `country`, `abbreviation`, `type`, `sort`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Alberta', 'Canada', 'AB', 'Province', 1, '2018-01-12 01:42:51', '2018-01-12 01:42:51', NULL),
(2, 'British Columbia', 'Canada', 'BC', 'Province', 2, '2018-01-12 01:43:38', '2018-01-12 01:43:38', NULL),
(3, 'Manitoba', 'Canada', 'MB', 'Province', 3, '2018-01-12 01:44:06', '2018-01-12 01:44:06', NULL),
(4, 'New Brunswick', 'Canada', 'NB', 'Province', 4, '2018-01-12 01:44:38', '2018-01-12 01:44:38', NULL),
(5, 'Newfoundland', 'Canada', 'NF', 'Province', 5, '2018-01-12 01:44:58', '2018-01-12 01:44:58', NULL),
(6, 'Northwest Territories', 'Canada', 'NT', 'Territory', 6, '2018-01-12 01:45:22', '2018-01-12 01:48:09', NULL),
(7, 'Nova Scotia', 'Canada', 'NS', 'Province', 7, '2018-01-12 01:45:39', '2018-01-12 01:45:39', NULL),
(8, 'Nunavut', 'Canada', '(UNK)', '(Unknown)', 8, '2018-01-12 01:45:59', '2018-01-12 01:48:20', NULL),
(9, 'Ontario', 'Canada', 'ON', 'Province', 9, '2018-01-12 01:46:14', '2018-01-12 01:46:14', NULL),
(10, 'Prince Edward Island', 'Canada', 'PE', 'Province', 10, '2018-01-12 01:46:29', '2018-01-12 01:46:29', NULL),
(11, 'Quebec', 'Canada', 'PQ', 'Province', 11, '2018-01-12 01:46:43', '2018-01-12 01:46:43', NULL),
(12, 'Saskatchewan', 'Canada', 'SK', 'Province', 12, '2018-01-12 01:47:03', '2018-01-12 01:47:03', NULL),
(13, 'Yukon Territory', 'Canada', 'YT', 'Territory', 13, '2018-01-12 01:47:24', '2018-01-12 01:47:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_survey` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `id_survey`, `title`, `image`, `sort`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'How many people would you estimate are currently employed at your company?', '', 1, '2018-04-25 04:17:32', '2018-04-25 04:17:32', NULL),
(2, 1, 'How many hourly trades’ people would you estimate that your company hires annually?', '', 2, '2018-04-25 04:27:18', '2018-04-25 04:27:18', NULL),
(3, 1, 'What industry does your organization belong to?', '', 3, '2018-04-25 15:01:11', '2018-04-25 15:01:11', NULL),
(4, 3, 'Mobile requirements', '', 1, '2018-04-25 15:01:57', '2018-04-25 15:21:45', '2018-04-25 15:21:45'),
(5, 4, 'How important is it as a recruiter to be aware of a candidate’s current work status (availability) during your hiring process?', '', 1, '2018-04-25 15:02:31', '2018-04-25 15:02:31', NULL),
(6, 4, 'Would it save you time as a recruiter, if the verification process of candidates was taken care of before you started your hiring process?', '', 2, '2018-04-25 15:02:47', '2018-04-25 15:02:47', NULL),
(7, 4, 'How interested would you be in a platform that stores all candidates’ documentation and job pertinent files on our secure cloud servers?', '', 3, '2018-04-25 15:03:00', '2018-04-25 15:03:00', NULL),
(8, 4, 'Recruit-Aid will allow for video interview capabilities during the recruitment process, reducing the time it takes to complete the hiring process. Is this something you would be interested in?', '', 4, '2018-04-25 15:05:42', '2018-04-25 15:05:42', NULL),
(9, 5, 'Taking into consideration that you are the HR Director: Would you pay to use such a platform if it helps streamline the hiring process?', '', 1, '2018-04-25 15:06:10', '2018-04-25 15:06:10', NULL),
(10, 5, 'What payment structure would you prefer?', '', 2, '2018-04-25 15:06:26', '2018-04-25 15:06:26', NULL),
(11, 5, 'What price range would you be willing to pay for a yearly subscription?', '', 3, '2018-04-25 15:06:45', '2018-04-25 15:06:45', NULL),
(12, 5, 'What price range would you be willing to pay for a monthly subscription?', '', 4, '2018-04-25 15:07:08', '2018-04-25 15:07:08', NULL),
(13, 5, 'What price range would you be willing to pay for a pay-per use subscription?', '', 5, '2018-04-25 15:07:22', '2018-04-25 15:07:22', NULL),
(14, 5, 'Many businesses possess fees they are required to distribute back to the customer to bring down cost and operate the business successfully. (admin, pay per hire fees are examples of them). How much in fees are you ok with paying?', '', 6, '2018-04-25 15:07:38', '2018-04-25 15:07:38', NULL),
(15, 6, 'Recruit-Aid allows employers the ability to filter a new hire by location. How important is it for you to be able to search potential candidates throughout Canada?', '', 1, '2018-04-25 15:08:40', '2018-04-25 15:08:40', NULL),
(16, 3, 'How important is it in your opinion, to have the capability to stay connected to your work through your mobile device?', '', 1, '2018-04-25 15:22:03', '2018-04-25 15:22:03', NULL),
(17, 8, 'Describe your impression of the overall feel and look of the interface via the screen shots below.', NULL, 8, '2018-04-26 11:46:15', '2018-04-26 11:46:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `report_articles`
--

CREATE TABLE `report_articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `postid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `report_articles`
--

INSERT INTO `report_articles` (`id`, `userid`, `postid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 5, '2018-02-21 03:10:50', '2018-02-21 03:10:50', NULL),
(2, 4, 4, '2018-02-25 00:48:51', '2018-02-25 00:48:51', NULL),
(3, 4, 6, '2018-02-25 00:49:07', '2018-02-25 00:49:07', NULL),
(4, 4, 11, '2018-04-22 18:39:21', '2018-04-22 18:39:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rotation_jobs`
--

CREATE TABLE `rotation_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rotation_jobs`
--

INSERT INTO `rotation_jobs` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '5 days on 2 days off', '2018-07-09 21:54:29', '2018-07-09 21:54:29', NULL),
(2, '4 days on 3 days off', '2018-07-09 21:54:39', '2018-07-09 21:54:39', NULL),
(3, '1 week on 1 week off', '2018-07-09 21:54:47', '2018-07-09 21:54:47', NULL),
(4, '2 weeks on 1 week off', '2018-07-09 21:54:54', '2018-07-09 21:54:54', NULL),
(5, '2 weeks on 2 weeks off', '2018-07-09 21:55:11', '2018-07-09 21:55:11', NULL),
(6, '3 weeks on 1 week off', '2018-07-09 21:55:19', '2018-07-09 21:55:19', NULL),
(7, 'Other Rotation', '2018-07-09 21:55:32', '2018-07-09 21:55:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skill_needs`
--

CREATE TABLE `skill_needs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skill_needs`
--

INSERT INTO `skill_needs` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Electrician', 'Electrician', '2018-03-18 05:30:11', '2018-03-18 05:30:11', NULL),
(2, 'Gasfilter', 'Gasfilter', '2018-03-18 05:30:28', '2018-03-18 05:30:28', NULL),
(3, 'Driving', 'Driving', '2018-03-18 05:33:10', '2018-03-18 05:33:10', NULL),
(4, 'Decorator', 'Decorator', '2018-03-18 05:33:20', '2018-03-18 05:33:20', NULL),
(5, 'Welding', 'Welding', '2018-03-18 05:33:43', '2018-03-18 05:33:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `specialities`
--

CREATE TABLE `specialities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialities`
--

INSERT INTO `specialities` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Oil', '2018-03-18 00:55:55', '2018-03-18 00:55:55', NULL),
(2, 'Gas', '2018-03-18 00:56:00', '2018-03-18 00:56:00', NULL),
(3, 'Pretoleum', '2018-03-18 00:56:19', '2018-03-18 00:56:19', NULL),
(4, 'Refining', '2018-03-18 00:56:35', '2018-03-18 00:56:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcribes`
--

CREATE TABLE `subcribes` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcribes`
--

INSERT INTO `subcribes` (`id`, `fname`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'syahrilr51@gmail.com', '2018-03-05 22:14:59', '2018-03-05 22:14:59', NULL),
(2, NULL, 'syahrilr51@gmail.com', '2018-03-05 22:25:44', '2018-03-05 22:25:44', NULL),
(3, NULL, 'syahrilr51@gmail.com', '2018-03-05 22:25:59', '2018-03-05 22:25:59', NULL),
(4, NULL, 'syahrilr51@gmail.com', '2018-03-07 21:03:14', '2018-03-07 21:03:14', NULL),
(5, NULL, 'syahrilr51@gmail.com', '2018-03-08 04:23:06', '2018-03-08 04:23:06', NULL),
(6, NULL, 'syahrilr51@gmail.com', '2018-03-08 04:23:07', '2018-03-08 04:23:07', NULL),
(7, NULL, 'syahrilr51@gmail.com', '2018-03-08 04:26:10', '2018-03-08 04:26:10', NULL),
(8, NULL, 'syahrilr51@gmail.com', '2018-03-08 04:26:11', '2018-03-08 04:26:11', NULL),
(9, NULL, 'syahrilr51@gmail.com', '2018-03-08 23:22:55', '2018-03-08 23:22:55', NULL),
(10, NULL, 'syahrilr51@gmail.com', '2018-03-08 23:24:04', '2018-03-08 23:24:04', NULL),
(11, NULL, 'syahrilr51@gmail.com', '2018-03-08 23:40:31', '2018-03-08 23:40:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `name`, `image`, `sort`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Company specific questions.', '', 1, 0, '2018-04-25 01:39:25', '2018-04-25 01:39:25', NULL),
(2, 'Recruitment requirements', '', 2, 0, '2018-04-25 01:41:41', '2018-04-25 01:41:41', NULL),
(3, 'Mobile requirements', '', 3, 0, '2018-04-25 01:41:51', '2018-04-25 01:41:51', NULL),
(4, 'Product Features', '', 4, 0, '2018-04-25 01:42:21', '2018-04-25 01:42:21', NULL),
(5, 'Feasibility requirements', '', 5, 0, '2018-04-25 01:42:34', '2018-04-25 01:42:34', NULL),
(6, 'Geographical capabilities', '', 6, 0, '2018-04-25 01:42:47', '2018-04-25 01:42:47', NULL),
(7, 'Market capitalization', '', 7, 0, '2018-04-25 01:42:59', '2018-04-25 01:42:59', NULL),
(8, 'Product design & feedback', '', 8, 0, '2018-04-25 04:03:13', '2018-04-25 04:03:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_view_profile`
--

CREATE TABLE `tb_view_profile` (
  `id` int(11) NOT NULL,
  `view_id` int(11) NOT NULL,
  `employeid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_view_profile`
--

INSERT INTO `tb_view_profile` (`id`, `view_id`, `employeid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 4, '2018-02-13 01:39:01', '2018-02-13 01:39:01', NULL),
(2, 4, 2, '2018-02-13 21:17:44', '2018-02-13 21:17:44', NULL),
(3, 4, 2, '2018-02-13 21:21:19', '2018-02-13 21:21:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket_number` int(11) NOT NULL,
  `expiry_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `userid`, `title`, `institution`, `location`, `ticket_number`, `expiry_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'tes', 'tes', 'tes', 2123, '2018-07-17', '2018-07-16 01:23:25', '2018-07-16 01:23:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `timelines`
--

CREATE TABLE `timelines` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `jobid` int(10) UNSIGNED NOT NULL,
  `type` int(11) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timelines`
--

INSERT INTO `timelines` (`id`, `userid`, `jobid`, `type`, `start_date`, `end_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 2, 2, 2, '2018-07-04', '2018-07-13', '2018-07-13 18:15:41', '2018-07-13 18:15:41', NULL),
(8, 2, 1, 3, '2018-07-05', '2018-07-09', '2018-07-13 18:15:41', '2018-07-13 18:15:41', NULL),
(9, 2, 1, 1, '2018-07-10', '2018-07-02', '2018-07-13 18:15:57', '2018-07-13 18:15:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trades`
--

CREATE TABLE `trades` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriprion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trades`
--

INSERT INTO `trades` (`id`, `name`, `descriprion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Industrial trades', 'Industrial trades', '2018-01-13 18:35:20', '2018-01-13 18:35:20', NULL),
(2, 'Commercial trades', 'Commercial trades', '2018-01-13 18:35:37', '2018-01-13 18:35:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_companies`
--

CREATE TABLE `type_companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_companies`
--

INSERT INTO `type_companies` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Corporation', '2018-03-18 00:33:51', '2018-03-18 00:33:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_graders`
--

CREATE TABLE `type_graders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_graders`
--

INSERT INTO `type_graders` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'A+', NULL, NULL, NULL),
(2, 'A', NULL, NULL, NULL),
(3, 'A-', NULL, NULL, NULL),
(4, 'B+', NULL, NULL, NULL),
(5, 'B', NULL, NULL, NULL),
(6, 'B-', NULL, NULL, NULL),
(7, 'C+', NULL, NULL, NULL),
(8, 'C', NULL, NULL, NULL),
(9, 'C-', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_jobs`
--

CREATE TABLE `type_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_jobs`
--

INSERT INTO `type_jobs` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Full Time', 'Full Time', '2018-03-16 03:44:59', '2018-03-16 03:44:59', NULL),
(2, 'Contract', 'Contract', '2018-03-16 03:45:08', '2018-03-16 03:45:08', NULL),
(3, 'Offshore', 'Offshore', '2018-03-16 03:45:16', '2018-03-16 03:45:16', NULL),
(4, 'Shutdowns', 'Shutdowns', '2018-03-16 03:45:26', '2018-03-16 03:45:26', NULL),
(5, 'Remote Location', 'Remote', '2018-03-16 03:45:49', '2018-03-18 05:35:07', NULL),
(6, 'LOA', 'LOA', '2018-03-16 03:45:57', '2018-03-16 03:45:57', NULL),
(7, 'Local', 'Local', '2018-03-16 03:46:06', '2018-03-16 03:46:06', NULL),
(8, 'Overseas', 'Overseas', '2018-03-16 03:46:13', '2018-03-16 03:46:13', NULL),
(9, 'Active Marchinery', 'Active Marchinery', '2018-03-18 05:35:27', '2018-03-18 05:35:27', NULL),
(10, 'Demading Deadline', 'Demading Deadline', '2018-03-18 05:36:21', '2018-03-18 05:36:21', NULL),
(11, 'Work from heigth', 'Work from heigth', '2018-03-18 05:37:22', '2018-03-18 05:37:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type_timelines`
--

CREATE TABLE `type_timelines` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_timelines`
--

INSERT INTO `type_timelines` (`id`, `type`, `description`, `color`, `created_at`, `updated_at`) VALUES
(1, 'FIELD WORK', 'On', 'black', '2018-07-02 17:00:00', '2018-07-02 17:00:00'),
(2, 'MANAGEMENT', 'Pen', 'warning', '2018-07-03 17:00:00', '2018-06-30 17:00:00'),
(3, 'SPECIALISED', 'Dan', 'danger', '2018-07-02 17:00:00', '2018-07-03 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `companyid` int(10) UNSIGNED DEFAULT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verification_code` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `companyid`, `firstname`, `lastname`, `name`, `email`, `phone`, `photo`, `password`, `verification_code`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Skill', 'Link', 'skill link', 'skill@link.com', NULL, NULL, '$2y$10$DYzA.C/PySsuYhLfwddDN.Zfs.ko.VI8WBky82MVYgDgR3R0NxT.u', NULL, 'Rw0IuWZPQD8X6CEpTqGVYjbihgF0cOAAsnVb9Kw9P5elckDtqH0h3o2NwgCh', 2, NULL, '2018-09-17 02:48:27'),
(3, NULL, NULL, NULL, NULL, 'syahrilr@gmail.com', NULL, NULL, '$2y$10$tNVfueeXTaQhKHkVMses.eV269Lkr.7Dt2ZPY.nNpxjm4RfkNS7yq', NULL, NULL, NULL, '2018-09-10 00:57:08', '2018-09-10 00:57:08'),
(5, NULL, NULL, NULL, NULL, 'syahrilrr@fgaafa', NULL, NULL, '$2y$10$pE46k9OjRG4owliyY7ZGOe5D0TqvbIlsjkrP9/5KeId7YlNUJDBsi', NULL, NULL, NULL, '2018-09-10 01:01:35', '2018-09-10 01:01:35'),
(6, NULL, NULL, NULL, NULL, 'syahrilrrr@gmail.com', NULL, NULL, '$2y$10$YadcABK7zSUi8WcZSUOVTebCSo67HG22uzXbCFeZXByo/exJXY/Ri', NULL, NULL, NULL, '2018-09-10 01:29:42', '2018-09-10 01:29:42'),
(7, NULL, NULL, NULL, NULL, 'syahrilrrraa@gmail.com', NULL, NULL, '$2y$10$UcIdMX8Nl6UIhql79Udn3.8budoURS9a.QDK2yvG2RJPq26Qd33om', NULL, NULL, NULL, '2018-09-10 01:30:18', '2018-09-10 01:30:18'),
(8, NULL, NULL, NULL, NULL, 'syahrilakfa@gmail.com', NULL, NULL, '$2y$10$J/q7S4HtS0DF5PuLFvOuqOrMZexuaXcy2gu/9OLeb.E92fLpM4zF.', NULL, NULL, NULL, '2018-09-10 01:36:18', '2018-09-10 01:36:18'),
(9, NULL, NULL, NULL, NULL, 'syahrilakfaaaa@gmail.com', NULL, NULL, '$2y$10$hGgARgFer6bgUyI773yuSuq6iV0Ww2HyD/jIwG9CKwxoo40plE36W', 'wtx22vW50fw9yMp7pOrnxLpy8FcpQVQnyTKKlMdRwLxQmcu0lM', NULL, NULL, '2018-09-10 01:36:53', '2018-09-10 01:36:53'),
(15, NULL, NULL, NULL, NULL, 'syahrilr51@gmail.com', NULL, NULL, '$2y$10$zJPgN9YAGE4JjBb6zwQcJeN/f15obHu7JBsrZ0GL5sjlgm1UbmPFS', 'M5OQhBRLW3QnZhfMSlh9oMp98P8FZ6qj2EPUfEJ1paKm0OjOn9', 'OXxJub2mXj9EVx8wB1lwYbB0Rum9X8UszhWeeXbgq6euYfz8ftjWlQcLyUSe', 1, '2018-09-11 20:22:42', '2018-09-11 20:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `users_setting`
--

CREATE TABLE `users_setting` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `feed` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `autoplay` varchar(255) DEFAULT NULL,
  `showphoto` varchar(255) DEFAULT NULL,
  `sync` varchar(255) DEFAULT NULL,
  `managestatus` varchar(255) DEFAULT NULL,
  `profileview` varchar(255) DEFAULT NULL,
  `socialsharing` varchar(255) DEFAULT NULL,
  `emailfrequency` varchar(255) DEFAULT NULL,
  `invitation` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_setting`
--

INSERT INTO `users_setting` (`id`, `userid`, `feed`, `language`, `autoplay`, `showphoto`, `sync`, `managestatus`, `profileview`, `socialsharing`, `emailfrequency`, `invitation`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Friends & Featured', 'English', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'All', 'Everyone', '2018-09-16 17:00:00', '2018-09-16 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_surveys`
--

CREATE TABLE `user_surveys` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_surveys`
--

INSERT INTO `user_surveys` (`id`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'dangridho11@gmail.com', '2018-04-30 03:07:40', '2018-04-30 03:07:40', NULL),
(9, 'asd', '2018-04-30 06:22:33', '2018-04-30 06:22:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `visitid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `userid`, `visitid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, '2018-04-04 03:02:44', '2018-04-04 03:02:44', NULL),
(2, 2, 3, '2018-04-04 03:06:14', '2018-04-04 03:06:14', NULL),
(3, 2, 4, '2018-04-04 03:06:37', '2018-04-04 03:06:37', NULL),
(4, 4, 2, '2018-04-04 03:34:11', '2018-04-04 03:34:11', NULL),
(5, 2, 2, '2018-04-05 23:05:54', '2018-04-05 23:05:54', NULL),
(6, 4, 5, '2018-04-22 21:21:31', '2018-04-22 21:21:31', NULL),
(7, 4, 4, '2018-04-30 02:38:59', '2018-04-30 02:38:59', NULL),
(8, 2, 5, '2018-05-01 20:41:17', '2018-05-01 20:41:17', NULL),
(9, 2, 13, '2018-05-02 02:52:38', '2018-05-02 02:52:38', NULL),
(10, 2, 12, '2018-05-02 02:53:34', '2018-05-02 02:53:34', NULL),
(11, 2, 15, '2018-05-04 23:15:56', '2018-05-04 23:15:56', NULL),
(12, 18, 2, '2018-06-03 20:09:16', '2018-06-03 20:09:16', NULL),
(13, 2, 18, '2018-06-03 20:20:09', '2018-06-03 20:20:09', NULL),
(14, 18, 4, '2018-06-04 22:58:29', '2018-06-04 22:58:29', NULL),
(15, 2, 14, '2018-07-17 18:20:11', '2018-07-17 18:20:11', NULL),
(16, 2, 16, '2018-07-17 19:08:45', '2018-07-17 19:08:45', NULL),
(17, 4, 18, '2018-08-09 01:14:30', '2018-08-09 01:14:30', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtionals`
--
ALTER TABLE `addtionals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addtionals_userid_foreign` (`userid`),
  ADD KEY `addtionals_interestid_foreign` (`interestid`);

--
-- Indexes for table `campaign_schedules`
--
ALTER TABLE `campaign_schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campaign_schedules_id_company_foreign` (`id_company`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `certificates_userid_foreign` (`userid`);

--
-- Indexes for table `child_trades`
--
ALTER TABLE `child_trades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `child_trades_tradeid_foreign` (`tradeid`);

--
-- Indexes for table `comment_articles`
--
ALTER TABLE `comment_articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_articles_id_post_foreign` (`id_post`),
  ADD KEY `comment_articles_id_user_foreign` (`id_user`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companies_headquarter_foreign` (`headquarter`),
  ADD KEY `companies_location_foreign` (`location`),
  ADD KEY `companies_typecompanyid_foreign` (`typecompanyid`),
  ADD KEY `companies_userid_foreign` (`userid`);

--
-- Indexes for table `company_industries`
--
ALTER TABLE `company_industries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_industries_companyid_foreign` (`companyid`),
  ADD KEY `company_industries_industryid_foreign` (`industryid`);

--
-- Indexes for table `company_specialities`
--
ALTER TABLE `company_specialities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_specialities_companyid_foreign` (`companyid`),
  ADD KEY `company_specialities_specialityid_foreign` (`specialityid`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conversations_userone_foreign` (`userone`),
  ADD KEY `conversations_usertwo_foreign` (`usertwo`);

--
-- Indexes for table `conversation_admins`
--
ALTER TABLE `conversation_admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conversation_admins_userone_foreign` (`userone`),
  ADD KEY `conversation_admins_usertwo_foreign` (`usertwo`);

--
-- Indexes for table `conversation_recruits`
--
ALTER TABLE `conversation_recruits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conversation_recruits_useradmin_foreign` (`useradmin`),
  ADD KEY `conversation_recruits_useremployee_foreign` (`useremployee`);

--
-- Indexes for table `duration_jobs`
--
ALTER TABLE `duration_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duties`
--
ALTER TABLE `duties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `education_userid_foreign` (`userid`);

--
-- Indexes for table `employeendorsments`
--
ALTER TABLE `employeendorsments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employeendorsments_userid_foreign` (`userid`),
  ADD KEY `employeendorsments_endorsmentid_foreign` (`endorsmentid`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_provinceid_foreign` (`provinceid`),
  ADD KEY `employees_genderid_foreign` (`genderid`),
  ADD KEY `employees_tradeid_foreign` (`tradeid`),
  ADD KEY `employees_child_tradeid_foreign` (`child_tradeid`),
  ADD KEY `employees_maritialid_foreign` (`martialid`),
  ADD KEY `employees_certifictionoriginid_foreign` (`certifictionoriginid`);

--
-- Indexes for table `employeskills`
--
ALTER TABLE `employeskills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employeskills_userid_foreign` (`userid`),
  ADD KEY `employeskills_levelid_foreign` (`levelid`);

--
-- Indexes for table `employe_duties`
--
ALTER TABLE `employe_duties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employe_duties_fitdutyid_foreign` (`fitdutyid`),
  ADD KEY `employe_duties_userid_foreign` (`userid`);

--
-- Indexes for table `employment_statuses`
--
ALTER TABLE `employment_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `endorsments`
--
ALTER TABLE `endorsments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `essay_answers`
--
ALTER TABLE `essay_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `essay_answers_id_user_survey_foreign` (`id_user_survey`),
  ADD KEY `essay_answers_id_essay_foreign` (`id_essay`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experiences_userid_foreign` (`userid`);

--
-- Indexes for table `fit_duties`
--
ALTER TABLE `fit_duties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fit_duties_dutyid_foreign` (`dutyid`);

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `follows_userid_foreign` (`userid`),
  ADD KEY `follows_followid_foreign` (`followid`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graders`
--
ALTER TABLE `graders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `graders_employeeid_foreign` (`employeeid`),
  ADD KEY `graders_userid_foreign` (`userid`),
  ADD KEY `graders_genderid_foreign` (`graderid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groups_group_type_id_foreign` (`group_type_id`),
  ADD KEY `groups_userid_foreign` (`userid`);

--
-- Indexes for table `group_levels`
--
ALTER TABLE `group_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_members`
--
ALTER TABLE `group_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_members_groupid_foreign` (`groupid`),
  ADD KEY `group_members_userid_foreign` (`userid`),
  ADD KEY `group_members_levelid_foreign` (`levelid`);

--
-- Indexes for table `group_types`
--
ALTER TABLE `group_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hide_articles`
--
ALTER TABLE `hide_articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hide_articles_id_post_foreign` (`id_post`),
  ADD KEY `hide_articles_id_user_foreign` (`id_user`);

--
-- Indexes for table `hires`
--
ALTER TABLE `hires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hires_employeeid_foreign` (`employeeid`),
  ADD KEY `hires_companyid_foreign` (`companyid`),
  ADD KEY `hires_childtradeid_foreign` (`childtradeid`);

--
-- Indexes for table `image_articles`
--
ALTER TABLE `image_articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_articles_id_post_foreign` (`id_post`);

--
-- Indexes for table `image_surveys`
--
ALTER TABLE `image_surveys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_surveys_id_question_foreign` (`id_question`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `interests_userid_foreign` (`userid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_companyid_foreign` (`companyid`),
  ADD KEY `jobs_userid_foreign` (`userid`),
  ADD KEY `jobs_employmentstatusid_foreign` (`employmentstatusid`),
  ADD KEY `jobs_locationid_foreign` (`locationid`),
  ADD KEY `jobs_durationid_foreign` (`durationid`),
  ADD KEY `jobs_rotationid_foreign` (`rotationid`);

--
-- Indexes for table `job_apply_users`
--
ALTER TABLE `job_apply_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_apply_users_userid_foreign` (`userid`),
  ADD KEY `job_apply_users_jobid_foreign` (`jobid`);

--
-- Indexes for table `job_positions`
--
ALTER TABLE `job_positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_positions_jobid_foreign` (`jobid`),
  ADD KEY `positionjobid` (`positionjobid`);

--
-- Indexes for table `job_search_settings`
--
ALTER TABLE `job_search_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_search_settings_userid_foreign` (`userid`),
  ADD KEY `job_search_settings_postedtimeid_foreign` (`postedtimeid`);

--
-- Indexes for table `job_search_setting_companies`
--
ALTER TABLE `job_search_setting_companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_search_setting_companies_jobsearchid_foreign` (`jobsearchid`),
  ADD KEY `job_search_setting_companies_companyid_foreign` (`companyid`);

--
-- Indexes for table `job_search_setting_locations`
--
ALTER TABLE `job_search_setting_locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_search_setting_locations_jobsearchid_foreign` (`jobsearchid`),
  ADD KEY `job_search_setting_locations_locationid_foreign` (`locationid`);

--
-- Indexes for table `job_search_setting_titles`
--
ALTER TABLE `job_search_setting_titles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_search_setting_titles_jobsearchid_foreign` (`jobsearchid`),
  ADD KEY `job_search_setting_titles_chtradeid_foreign` (`chtradeid`);

--
-- Indexes for table `job_search_setting_types`
--
ALTER TABLE `job_search_setting_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_search_setting_types_jobsearchid_foreign` (`jobsearchid`),
  ADD KEY `job_search_setting_types_typejob_foreign` (`typejob`);

--
-- Indexes for table `job_setting_locations`
--
ALTER TABLE `job_setting_locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_setting_locations_jobsettingid_foreign` (`jobsettingid`),
  ADD KEY `job_setting_locations_locationid_foreign` (`locationid`);

--
-- Indexes for table `job_setting_positions`
--
ALTER TABLE `job_setting_positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_setting_positions_jobsettingid_foreign` (`jobsettingid`),
  ADD KEY `job_setting_positions_positionjobid_foreign` (`positionjobid`);

--
-- Indexes for table `job_setting_types`
--
ALTER TABLE `job_setting_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_setting_types_jobsettingid_foreign` (`jobsettingid`),
  ADD KEY `job_setting_types_typejobid_foreign` (`typejobid`);

--
-- Indexes for table `job_setting_users`
--
ALTER TABLE `job_setting_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_setting_users_userid_foreign` (`userid`),
  ADD KEY `job_setting_users_employmentstatusid_foreign` (`employmentstatusid`);

--
-- Indexes for table `job_skills`
--
ALTER TABLE `job_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_skills_jobid_foreign` (`jobid`),
  ADD KEY `job_skills_skillneedid_foreign` (`skillneedid`);

--
-- Indexes for table `job_types`
--
ALTER TABLE `job_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_types_jobid_foreign` (`jobid`),
  ADD KEY `job_types_typejobid_foreign` (`typejobid`);

--
-- Indexes for table `levelalls`
--
ALTER TABLE `levelalls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_articles`
--
ALTER TABLE `like_articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `like_articles_id_post_foreign` (`id_post`),
  ADD KEY `like_articles_id_user_foreign` (`id_user`);

--
-- Indexes for table `martials`
--
ALTER TABLE `martials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mc_answers`
--
ALTER TABLE `mc_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mc_answers_id_user_survey_foreign` (`id_user_survey`),
  ADD KEY `mc_answers_id_mc_foreign` (`id_mc`);

--
-- Indexes for table `mc_surveys`
--
ALTER TABLE `mc_surveys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mc_surveys_id_question_foreign` (`id_question`);

--
-- Indexes for table `medicals`
--
ALTER TABLE `medicals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `medials_userid_foreign` (`userid`),
  ADD KEY `medials_level_foreign` (`level`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_userfrom_foreign` (`userfrom`),
  ADD KEY `messages_userto_foreign` (`userto`),
  ADD KEY `messages_conversationid_foreign` (`conversationid`);

--
-- Indexes for table `message_admins`
--
ALTER TABLE `message_admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `message_admins_userfrom_foreign` (`userfrom`),
  ADD KEY `message_admins_userto_foreign` (`userto`),
  ADD KEY `message_admins_conversationid_foreign` (`conversationid`);

--
-- Indexes for table `message_groups`
--
ALTER TABLE `message_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `message_groups_groupid_foreign` (`groupid`),
  ADD KEY `message_groups_userid_foreign` (`userid`);

--
-- Indexes for table `message_recruits`
--
ALTER TABLE `message_recruits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `message_recruits_userfrom_foreign` (`userfrom`),
  ADD KEY `message_recruits_userto_foreign` (`userto`),
  ADD KEY `message_recruits_conversationid_foreign` (`conversationid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_id_notifiable_type_index` (`notifiable_id`,`notifiable_type`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_answers`
--
ALTER TABLE `package_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_answers_id_user_survey_foreign` (`id_user_survey`);

--
-- Indexes for table `package_details`
--
ALTER TABLE `package_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_details_id_package_foreign` (`id_package`);

--
-- Indexes for table `package_prices`
--
ALTER TABLE `package_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_prices_id_package_foreign` (`id_package`),
  ADD KEY `package_prices_id_package_detail_foreign` (`id_package_detail`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posted_times`
--
ALTER TABLE `posted_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_articles`
--
ALTER TABLE `post_articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_articles_id_user_foreign` (`id_user`),
  ADD KEY `groupid` (`groupid`);

--
-- Indexes for table `post_videos`
--
ALTER TABLE `post_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_videos_id_post_foreign` (`id_post`);

--
-- Indexes for table `profile_search_settings`
--
ALTER TABLE `profile_search_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_search_settings_userid_foreign` (`userid`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_id_survey_foreign` (`id_survey`);

--
-- Indexes for table `report_articles`
--
ALTER TABLE `report_articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `report_articles_userid_foreign` (`userid`),
  ADD KEY `report_articles_postid_foreign` (`postid`);

--
-- Indexes for table `rotation_jobs`
--
ALTER TABLE `rotation_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_needs`
--
ALTER TABLE `skill_needs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialities`
--
ALTER TABLE `specialities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcribes`
--
ALTER TABLE `subcribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_view_profile`
--
ALTER TABLE `tb_view_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickets_userid_foreign` (`userid`);

--
-- Indexes for table `timelines`
--
ALTER TABLE `timelines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `timelines_userid_foreign` (`userid`),
  ADD KEY `timelines_jobid_foreign` (`jobid`),
  ADD KEY `timelines_type_foreign` (`type`);

--
-- Indexes for table `trades`
--
ALTER TABLE `trades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_companies`
--
ALTER TABLE `type_companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_graders`
--
ALTER TABLE `type_graders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_jobs`
--
ALTER TABLE `type_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_timelines`
--
ALTER TABLE `type_timelines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_companyid_foreign` (`companyid`);

--
-- Indexes for table `users_setting`
--
ALTER TABLE `users_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_surveys`
--
ALTER TABLE `user_surveys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_surveys_email_unique` (`email`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `follows_userid_foreign` (`userid`),
  ADD KEY `follows_followid_foreign` (`visitid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtionals`
--
ALTER TABLE `addtionals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campaign_schedules`
--
ALTER TABLE `campaign_schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `child_trades`
--
ALTER TABLE `child_trades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `comment_articles`
--
ALTER TABLE `comment_articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company_industries`
--
ALTER TABLE `company_industries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company_specialities`
--
ALTER TABLE `company_specialities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `conversation_admins`
--
ALTER TABLE `conversation_admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `conversation_recruits`
--
ALTER TABLE `conversation_recruits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `duration_jobs`
--
ALTER TABLE `duration_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `duties`
--
ALTER TABLE `duties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employeendorsments`
--
ALTER TABLE `employeendorsments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `employeskills`
--
ALTER TABLE `employeskills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employe_duties`
--
ALTER TABLE `employe_duties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employment_statuses`
--
ALTER TABLE `employment_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `endorsments`
--
ALTER TABLE `endorsments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `essay_answers`
--
ALTER TABLE `essay_answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `fit_duties`
--
ALTER TABLE `fit_duties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `follows`
--
ALTER TABLE `follows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `graders`
--
ALTER TABLE `graders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `group_levels`
--
ALTER TABLE `group_levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `group_members`
--
ALTER TABLE `group_members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `group_types`
--
ALTER TABLE `group_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hide_articles`
--
ALTER TABLE `hide_articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hires`
--
ALTER TABLE `hires`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `image_articles`
--
ALTER TABLE `image_articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `image_surveys`
--
ALTER TABLE `image_surveys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `interests`
--
ALTER TABLE `interests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `job_apply_users`
--
ALTER TABLE `job_apply_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_positions`
--
ALTER TABLE `job_positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_search_settings`
--
ALTER TABLE `job_search_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job_search_setting_companies`
--
ALTER TABLE `job_search_setting_companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_search_setting_locations`
--
ALTER TABLE `job_search_setting_locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `job_search_setting_titles`
--
ALTER TABLE `job_search_setting_titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `job_search_setting_types`
--
ALTER TABLE `job_search_setting_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_setting_locations`
--
ALTER TABLE `job_setting_locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `job_setting_positions`
--
ALTER TABLE `job_setting_positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `job_setting_types`
--
ALTER TABLE `job_setting_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `job_setting_users`
--
ALTER TABLE `job_setting_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `job_skills`
--
ALTER TABLE `job_skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_types`
--
ALTER TABLE `job_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `levelalls`
--
ALTER TABLE `levelalls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `like_articles`
--
ALTER TABLE `like_articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `martials`
--
ALTER TABLE `martials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mc_answers`
--
ALTER TABLE `mc_answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mc_surveys`
--
ALTER TABLE `mc_surveys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `medicals`
--
ALTER TABLE `medicals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `message_admins`
--
ALTER TABLE `message_admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `message_groups`
--
ALTER TABLE `message_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `message_recruits`
--
ALTER TABLE `message_recruits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package_answers`
--
ALTER TABLE `package_answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package_details`
--
ALTER TABLE `package_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package_prices`
--
ALTER TABLE `package_prices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posted_times`
--
ALTER TABLE `posted_times`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_articles`
--
ALTER TABLE `post_articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `post_videos`
--
ALTER TABLE `post_videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profile_search_settings`
--
ALTER TABLE `profile_search_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `report_articles`
--
ALTER TABLE `report_articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rotation_jobs`
--
ALTER TABLE `rotation_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skill_needs`
--
ALTER TABLE `skill_needs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `specialities`
--
ALTER TABLE `specialities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcribes`
--
ALTER TABLE `subcribes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_view_profile`
--
ALTER TABLE `tb_view_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `timelines`
--
ALTER TABLE `timelines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trades`
--
ALTER TABLE `trades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `type_companies`
--
ALTER TABLE `type_companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `type_graders`
--
ALTER TABLE `type_graders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `type_jobs`
--
ALTER TABLE `type_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `type_timelines`
--
ALTER TABLE `type_timelines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users_setting`
--
ALTER TABLE `users_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_surveys`
--
ALTER TABLE `user_surveys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addtionals`
--
ALTER TABLE `addtionals`
  ADD CONSTRAINT `addtionals_interestid_foreign` FOREIGN KEY (`interestid`) REFERENCES `interests` (`id`),
  ADD CONSTRAINT `addtionals_userid_foreign` FOREIGN KEY (`userid`) REFERENCES `employees` (`id`);

--
-- Constraints for table `certificates`
--
ALTER TABLE `certificates`
  ADD CONSTRAINT `certificates_userid_foreign` FOREIGN KEY (`userid`) REFERENCES `employees` (`id`);

--
-- Constraints for table `child_trades`
--
ALTER TABLE `child_trades`
  ADD CONSTRAINT `child_trades_tradeid_foreign` FOREIGN KEY (`tradeid`) REFERENCES `trades` (`id`);

--
-- Constraints for table `comment_articles`
--
ALTER TABLE `comment_articles`
  ADD CONSTRAINT `comment_articles_id_post_foreign` FOREIGN KEY (`id_post`) REFERENCES `post_articles` (`id`),
  ADD CONSTRAINT `comment_articles_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `employees` (`id`);

--
-- Constraints for table `conversations`
--
ALTER TABLE `conversations`
  ADD CONSTRAINT `conversations_userone_foreign` FOREIGN KEY (`userone`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `conversations_usertwo_foreign` FOREIGN KEY (`usertwo`) REFERENCES `employees` (`id`);

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_userid_foreign` FOREIGN KEY (`userid`) REFERENCES `employees` (`id`);

--
-- Constraints for table `employeendorsments`
--
ALTER TABLE `employeendorsments`
  ADD CONSTRAINT `employeendorsments_endorsmentid_foreign` FOREIGN KEY (`endorsmentid`) REFERENCES `endorsments` (`id`),
  ADD CONSTRAINT `employeendorsments_userid_foreign` FOREIGN KEY (`userid`) REFERENCES `employees` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_certifictionoriginid_foreign` FOREIGN KEY (`certifictionoriginid`) REFERENCES `provinces` (`id`),
  ADD CONSTRAINT `employees_child_tradeid_foreign` FOREIGN KEY (`child_tradeid`) REFERENCES `child_trades` (`id`),
  ADD CONSTRAINT `employees_genderid_foreign` FOREIGN KEY (`genderid`) REFERENCES `genders` (`id`),
  ADD CONSTRAINT `employees_maritialid_foreign` FOREIGN KEY (`martialid`) REFERENCES `martials` (`id`),
  ADD CONSTRAINT `employees_provinceid_foreign` FOREIGN KEY (`provinceid`) REFERENCES `martials` (`id`),
  ADD CONSTRAINT `employees_tradeid_foreign` FOREIGN KEY (`tradeid`) REFERENCES `trades` (`id`);

--
-- Constraints for table `employeskills`
--
ALTER TABLE `employeskills`
  ADD CONSTRAINT `employeskills_levelid_foreign` FOREIGN KEY (`levelid`) REFERENCES `levels` (`id`),
  ADD CONSTRAINT `employeskills_userid_foreign` FOREIGN KEY (`userid`) REFERENCES `employees` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
