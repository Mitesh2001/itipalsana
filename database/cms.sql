-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 06:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodatas`
--

CREATE TABLE `biodatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middelname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `petagor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `married_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `petagor_sagpan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_business` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `voice_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employes`
--

CREATE TABLE `employes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`id`, `name`, `designation`, `class`, `bio`, `image`, `contact`, `created_at`, `updated_at`) VALUES
(1, 'P. D. PATEL', 'PRINCIPAL CLASS-II', '2', 'It gives me great pleasure to convey this message on the official launch of a Website for this Institute. The website opens up a new window of opportunity for our trainees, both present and future, and the general public to access key information on the different aspects of this Institute, its Training Schemes and related Activities. It would help in the better understanding of our Institute and should put us on the information super highway of the World, while dissipating important data including PPP Scheme-related Disclosures through use of such Information Technologies.', '/img/employe/160606351640821.jpg', '1234567890', '2020-11-06 05:03:26', '2020-11-22 11:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `category`, `image`, `created_at`, `updated_at`) VALUES
(1, '1', '/img/gallery/160466636313883.jpg', '2020-11-06 07:09:23', '2020-11-06 07:09:23'),
(2, '2', '/img/gallery/160466638463297.jpg', '2020-11-06 07:09:44', '2020-11-06 07:09:44'),
(3, '3', '/img/gallery/160466651231227.jpg', '2020-11-06 07:10:04', '2020-11-06 07:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `generals`
--

CREATE TABLE `generals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generals`
--

INSERT INTO `generals` (`id`, `key`, `value`, `status`, `created_at`, `updated_at`) VALUES
(6, 'contact', '(02622) 264915', '1', '2020-11-06 03:43:23', '2020-11-06 03:47:49'),
(7, 'email', 'prlpalsanaiti@yahoo.co.in', '1', '2020-11-06 03:44:46', '2020-11-06 03:47:28'),
(8, 'About-Us', 'The institute was established in the year 1989. Now it grows up to 216 seats in 8 trades. Institute is also declared as Public Private Partnership mode. The purpose of this Placement Advisory Bureau is to deliver employment related service to the iti students. One room with proper infrastructure has been allocated for this Bureau in our iti.', '1', '2020-11-06 03:53:41', '2020-11-06 03:53:41'),
(9, 'Address', 'ITI Palsana, Dist: Surat (Gujarat)', '1', '2020-11-06 07:19:46', '2020-11-06 07:19:46'),
(10, 'Last-Update', '6/11/2020', '1', '2020-11-06 07:24:28', '2020-11-06 07:25:29'),
(11, 'Mobile-no', '-', '1', '2020-11-06 07:27:47', '2020-11-06 07:27:47'),
(12, 'Copyright', '© All rights reserved ITIPalsana.', '1', '2020-11-06 07:33:35', '2020-11-06 07:33:35'),
(13, 'Designed-by', 'GujaratiGraphics', '1', '2020-11-06 07:34:27', '2020-11-06 07:34:27'),
(14, 'Institute_palsana', '/img/general/160509920796184.jpg', '1', '2020-11-07 11:05:50', '2020-11-11 07:32:09'),
(17, 'header_image', '/img/general/160510024990728.jpg', '1', '2020-11-11 07:40:49', '2020-11-11 07:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `image_trades`
--

CREATE TABLE `image_trades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trade_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_trades`
--

INSERT INTO `image_trades` (`id`, `trade_id`, `image`, `created_at`, `updated_at`) VALUES
(11, 1, '/img/trades/160466049567216.jpg', '2020-11-06 05:31:35', '2020-11-06 05:31:35'),
(12, 2, '/img/trades/160476195449938.jpg', '2020-11-07 09:42:34', '2020-11-07 09:42:34'),
(13, 3, '/img/trades/160476206298851.jpg', '2020-11-07 09:44:22', '2020-11-07 09:44:22');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menuName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menuLink` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submenu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_17_123122_create_biodatas_table', 1),
(5, '2020_11_03_121229_create_generals_table', 1),
(6, '2020_11_03_124439_create_galleries_table', 2),
(7, '2020_11_04_105504_create_slides_table', 3),
(8, '2020_11_04_122312_create_employes_table', 4),
(9, '2020_11_04_132435_create_trades_table', 5),
(10, '2020_11_04_132531_create_image_trades_table', 5),
(11, '2020_11_04_155701_create_pages_table', 6),
(12, '2020_11_04_115822_create_employees_table', 7),
(14, '2020_11_05_094359_create_menus_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `category`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Courses', 'Trades', '<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<table align=\"center\" cellspacing=\"0\" style=\"border-collapse:collapse; width:1002px\">\r\n				<tbody>\r\n					<tr>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:1px solid #bfbfbf; border-right:1px solid #bfbfbf; border-top:1px solid #bfbfbf; height:39px; width:72px\">\r\n						<p><strong>SR NO</strong></p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:1px solid #bfbfbf; height:39px; width:330px\">\r\n						<p><strong>NAME OF TRADE</strong></p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:1px solid #bfbfbf; height:39px; width:186px\">\r\n						<p><strong>EDU.QUALI.</strong></p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:1px solid #bfbfbf; height:39px; width:126px\">\r\n						<p><strong>DURATION</strong></p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:1px solid #bfbfbf; height:39px; width:108px\">\r\n						<p><strong>BATCH</strong></p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:1px solid #bfbfbf; height:39px; width:180px\">\r\n						<p><strong>SANCTIONED SEAT</strong></p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:1px solid #bfbfbf; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:72px\">\r\n						<p><strong>1</strong></p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:330px\">\r\n						<p>FITTER</p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:186px\">\r\n						<p>10TH</p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:126px\">\r\n						<p>2 YEAR</p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:108px\">\r\n						<p>4</p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:180px\">\r\n						<p>80</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:1px solid #bfbfbf; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:72px\">\r\n						<p><strong>2</strong></p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:330px\">\r\n						<p>ELECTRICIAN</p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:186px\">\r\n						<p>10TH</p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:126px\">\r\n						<p>2 YEAR</p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:108px\">\r\n						<p>5</p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:180px\">\r\n						<p>100</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:1px solid #bfbfbf; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:72px\">\r\n						<p><strong>3</strong></p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:330px\">\r\n						<p>WIREMAN</p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:186px\">\r\n						<p>8TH</p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:126px\">\r\n						<p>2 YEAR</p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:108px\">\r\n						<p>5</p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:180px\">\r\n						<p>100</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:1px solid #bfbfbf; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:72px\">\r\n						<p><strong>4</strong></p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:330px\">\r\n						<p>MECHANIC MOTOR VEHICLE</p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:186px\">\r\n						<p>10TH</p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:126px\">\r\n						<p>2 YEAR</p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:108px\">\r\n						<p>1</p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:180px\">\r\n						<p>20</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:1px solid #bfbfbf; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:72px\">\r\n						<p><strong>5</strong></p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:330px\">\r\n						<p>WELDER</p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:186px\">\r\n						<p>8TH</p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:126px\">\r\n						<p>1 YEAR</p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:108px\">\r\n						<p>3</p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:180px\">\r\n						<p>60</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:1px solid #bfbfbf; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:72px\">\r\n						<p><strong>6</strong></p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:330px\">\r\n						<p>MECHANIC DIESEL ENGINE</p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:186px\">\r\n						<p>10TH</p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:126px\">\r\n						<p>1 YEAR</p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:108px\">\r\n						<p>3</p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:180px\">\r\n						<p>72</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:1px solid #bfbfbf; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:72px\">\r\n						<p><strong>7</strong></p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:330px\">\r\n						<p>WELDER (GMAW &amp; GMTW)</p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:186px\">\r\n						<p>8TH</p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:126px\">\r\n						<p>1 YEAR</p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:108px\">\r\n						<p>1</p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:180px\">\r\n						<p>20</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:1px solid #bfbfbf; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:72px\">\r\n						<p><strong>8</strong></p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:330px\">\r\n						<p>COPA(GIRLS)</p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:186px\">\r\n						<p>10TH</p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:126px\">\r\n						<p>1 YEAR</p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:108px\">\r\n						<p>1</p>\r\n						</td>\r\n						<td style=\"border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:180px\">\r\n						<p>24</p>\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:1px solid #bfbfbf; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:72px\">\r\n						<p><strong>9</strong></p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:330px\">\r\n						<p>COPA</p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:186px\">\r\n						<p>10TH</p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:126px\">\r\n						<p>1 YEAR</p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:108px\">\r\n						<p>1</p>\r\n						</td>\r\n						<td style=\"background-color:#f2f2f2; border-bottom:1px solid #bfbfbf; border-left:none; border-right:1px solid #bfbfbf; border-top:none; height:39px; width:180px\">\r\n						<p>24</p>\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '1', '2020-11-06 09:08:09', '2020-11-22 11:24:56'),
(2, 'Admission Criteria', 'Admission Criteria', '<table class=\"table table-bordered table-striped\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h3><strong>ADMISSION PROCEDURE FOR ALL TRADES</strong></h3>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Student selection for the Trade will be decided as per Government Rules of the concerned ITI on merit cum selection basis</p>\r\n\r\n			<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Student selection for the BBBT courses will be decided by the IMC of the concerned ITI on merit cum selection basis.( Only for CoE )</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;\r\n			<p>&nbsp;</p>\r\n\r\n			<table class=\"table table-bordered table-striped\">\r\n				<tbody>\r\n					<tr>\r\n						<td colspan=\"3\" style=\"background-color:#179bd7\">&nbsp;AGE LIMIT</td>\r\n					</tr>\r\n					<tr>\r\n						<td><strong>Sr.No</strong></td>\r\n						<td><strong>Admission Criteria</strong></td>\r\n						<td><strong>Age Limit</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>1</td>\r\n						<td>General Candidate</td>\r\n						<td>14 to 40 Yrs</td>\r\n					</tr>\r\n					<tr>\r\n						<td>2</td>\r\n						<td>Widows &amp; Divorces</td>\r\n						<td>18 to 40 Yrs</td>\r\n					</tr>\r\n					<tr>\r\n						<td>3</td>\r\n						<td>Ex-Serviceman</td>\r\n						<td>18 to 45 Yrs</td>\r\n					</tr>\r\n					<tr>\r\n						<td>4</td>\r\n						<td>Only for Women</td>\r\n						<td>As per Government Rules</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Reservation Policy &ndash; Reservation will be applicable in the admission in different courses as per the prevailing State Government policy as under</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table class=\"table table-bordered table-striped\">\r\n				<tbody>\r\n					<tr>\r\n						<td colspan=\"3\" style=\"background-color:#179bd7\">RESERVATION CRITERIA</td>\r\n					</tr>\r\n					<tr>\r\n						<td><strong>Sr.No</strong></td>\r\n						<td><strong>Category</strong></td>\r\n						<td><strong>Percentage</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>1</td>\r\n						<td>OBC</td>\r\n						<td>27%</td>\r\n					</tr>\r\n					<tr>\r\n						<td>2</td>\r\n						<td>SC</td>\r\n						<td>12.5%</td>\r\n					</tr>\r\n					<tr>\r\n						<td>3</td>\r\n						<td>ST</td>\r\n						<td>20% for Surat ,Valsad and Navsari District 12.5% for Banaskantha.,Sabarkantha,Panchmahals.,Vadodara, Bharuch, Narmada and Dahod Districts. 5 % for the District excluded above</td>\r\n					</tr>\r\n					<tr>\r\n						<td>4</td>\r\n						<td>PH</td>\r\n						<td>3% per Institute</td>\r\n					</tr>\r\n					<tr>\r\n						<td>5</td>\r\n						<td>Women</td>\r\n						<td>25% of sanction seats</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table class=\"table table-bordered table-striped\">\r\n				<tbody>\r\n					<tr>\r\n						<td colspan=\"5\" style=\"background-color:#179bd7\">&nbsp;FEES DETAILS</td>\r\n					</tr>\r\n					<tr>\r\n						<td><strong>Sr.No</strong></td>\r\n						<td><strong>Caste/Category</strong></td>\r\n						<td><strong>Tution Fees</strong></td>\r\n						<td><strong>Caution Money Deposit</strong></td>\r\n						<td><strong>Exam Fees</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>1</td>\r\n						<td>GN / SEBC</td>\r\n						<td>Rs 100 Per Month</td>\r\n						<td rowspan=\"2\">RS. 250/- (All the Trainees are Required to Pay CMD as Deposit at The Time of Admission)</td>\r\n						<td rowspan=\"2\">RS. 125/- (For all Trainees)</td>\r\n					</tr>\r\n					<tr>\r\n						<td>2</td>\r\n						<td>GIRLS / SC / ST / PH</td>\r\n						<td>Candidates are Exempted</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table class=\"table table-bordered table-striped\">\r\n				<tbody>\r\n					<tr>\r\n						<td colspan=\"3\" style=\"background-color:#179bd7\">&nbsp;STIPEND DETAILS</td>\r\n					</tr>\r\n					<tr>\r\n						<td><strong>Sr.No</strong></td>\r\n						<td><strong>Caste/Category</strong></td>\r\n						<td><strong>Stipend</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>1</td>\r\n						<td>GN ( Institutional Stipend)</td>\r\n						<td>Rs. 100/- Per Month (As Per Present Days of Month)</td>\r\n					</tr>\r\n					<tr>\r\n						<td>2</td>\r\n						<td>SC / ST / SEBC</td>\r\n						<td>Rs. 200/- Per Month</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table class=\"table table-bordered table-striped\">\r\n				<tbody>\r\n					<tr>\r\n						<td colspan=\"3\" style=\"background-color:#179bd7\">&nbsp;SHIFT SCHEDULE</td>\r\n					</tr>\r\n					<tr>\r\n						<td><strong>Sr.No</strong></td>\r\n						<td><strong>Shift</strong></td>\r\n						<td><strong>Tution Fees</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>1</td>\r\n						<td>First Shift</td>\r\n						<td>07.30 am TO 14.45 pm</td>\r\n					</tr>\r\n					<tr>\r\n						<td>2</td>\r\n						<td>Second Shift</td>\r\n						<td>09.30 am TO 16.45 pm</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '1', '2020-11-06 10:10:18', '2020-11-06 10:45:09'),
(3, 'Industry Linkage', 'Industry Linkage', NULL, '1', '2020-11-07 07:24:46', '2020-11-07 07:24:54'),
(4, 'Schemes running in the INSTITUTE (CTS and MES etc .under NCVT)', 'Schemes running in the INSTITUTE (CTS and MES etc .under NCVT)', '<table cellspacing=\"0\" style=\"border-collapse:collapse; width:100%;text-align:center;\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#f9f9f9; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:1px solid #dddddd; height:33px; vertical-align:top; width:491px\">\r\n			<p><strong>Name of the Scheme</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#f9f9f9; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:1px solid #dddddd; height:33px; vertical-align:top; width:144px\">\r\n			<p><strong>Total Capacity</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#f9f9f9; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:1px solid #dddddd; height:33px; vertical-align:top; width:114px\">\r\n			<p><strong>Duration</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#f9f9f9; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:1px solid #dddddd; height:33px; vertical-align:top; width:168px\">\r\n			<p><strong>Admitted in current&nbsp;<br />\r\n			Financial Year</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#f9f9f9; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:1px solid #dddddd; height:33px; vertical-align:top; width:66px\">\r\n			<p><strong>Status</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; height:23px; vertical-align:top; width:491px\">\r\n			<p>CRAFTSMAN TRAINING SCHEME (CTS)</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; height:23px; vertical-align:top; width:144px\">\r\n			<p>64</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; height:23px; vertical-align:top; width:114px\">\r\n			<p>2 Year</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; height:23px; vertical-align:top; width:168px\">\r\n			<p>42</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; height:23px; vertical-align:top; width:66px\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background-color:#f9f9f9; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; height:33px; vertical-align:top; width:491px\">\r\n			<p>CRAFTSMAN TRAINING SCHEME (CTS)</p>\r\n			</td>\r\n			<td style=\"background-color:#f9f9f9; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; height:33px; vertical-align:top; width:144px\">\r\n			<p>88</p>\r\n			</td>\r\n			<td style=\"background-color:#f9f9f9; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; height:33px; vertical-align:top; width:114px\">\r\n			<p>1 year</p>\r\n			</td>\r\n			<td style=\"background-color:#f9f9f9; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; height:33px; vertical-align:top; width:168px\">\r\n			<p>115</p>\r\n			</td>\r\n			<td style=\"background-color:#f9f9f9; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:none; height:33px; width:66px\">&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '1', '2020-11-07 07:26:37', '2020-11-22 11:21:11');
INSERT INTO `pages` (`id`, `page_title`, `category`, `content`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Staff Details', 'INDUSTRIAL TRAINING INSTITUTE PALSANA', '<table cellspacing=\"0\" style=\"border-collapse:collapse; width:1139px\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"7\" style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:33px; text-align:center; vertical-align:middle; white-space:normal; width:1137px\"><strong>Administrative staff</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; text-align:center; vertical-align:middle; white-space:nowrap\"><strong>SrNo.</strong></td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\"><strong>Employee Name</strong></td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\"><strong>Designation</strong></td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\"><strong>Class</strong></td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\"><strong>Institute Join Date</strong></td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\"><strong>Gender</strong></td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\"><strong>Retirement Date</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; text-align:center; vertical-align:middle; white-space:nowrap\">1</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">PRITI DAXESH PATEL</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">PRINCIPAL CLASS-II</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">2</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">9-Feb-16</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">F</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">31-May-35</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; text-align:center; vertical-align:middle; white-space:nowrap\">2</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">PRADIPKUMAR MAGANLAL PATEL</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">FOREMAN INSTRUCTOR&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">3</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">23-Oct-18</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">M</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">31-Aug-22</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; text-align:center; vertical-align:middle; white-space:nowrap\">3</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">JASMATBHAI DEVJIBHAI SAVANI</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">FOREMAN INSTRUCTOR</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">3</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">6-Mar-19</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">M</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">30-Sep-21</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; text-align:center; vertical-align:middle; white-space:nowrap\">4</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">SHRIKANT RAMANLAL PATEL</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">ASSISTANT STOREKEEPER</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">3</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">14-Sep-18</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">M</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">30-Apr-47</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; text-align:center; vertical-align:middle; white-space:nowrap\">5</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">GOVINDBHAI MAHYAVANSHI</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">JUNIOR CLERK</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">3</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">7-Dec-19</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">M</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">31-Mar-22</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:none; border-left:none; border-right:none; border-top:none; height:33px; text-align:center; vertical-align:middle; white-space:nowrap\">&nbsp;</td>\r\n			<td style=\"border-bottom:none; border-left:none; border-right:none; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">&nbsp;</td>\r\n			<td style=\"border-bottom:none; border-left:none; border-right:none; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">&nbsp;</td>\r\n			<td style=\"border-bottom:none; border-left:none; border-right:none; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">&nbsp;</td>\r\n			<td style=\"border-bottom:none; border-left:none; border-right:none; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">&nbsp;</td>\r\n			<td style=\"border-bottom:none; border-left:none; border-right:none; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">&nbsp;</td>\r\n			<td style=\"border-bottom:none; border-left:none; border-right:none; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"7\" style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; height:33px; text-align:center; vertical-align:middle; white-space:normal; width:1137px\"><strong>Technical Staff</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; text-align:center; vertical-align:middle; white-space:nowrap\"><strong>SrNo.</strong></td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\"><strong>Employee Name</strong></td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\"><strong>Designation</strong></td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\"><strong>Class</strong></td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\"><strong>Institute Join Date</strong></td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\"><strong>Gender</strong></td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\"><strong>Retirement Date</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; text-align:center; vertical-align:middle; white-space:nowrap\">1</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">ASHOKBHAI AMARABHAI PRAJAPATI</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">SUPERVISOR INSTRUCTOR</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">3</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">6-Aug-12</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">M</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">31-Jan-44</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; text-align:center; vertical-align:middle; white-space:nowrap\">2</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">SHAILESHKUMAR BALUBHAI CHAUDHARI</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">SUPERVISOR INSTRUCTOR</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">3</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">24-Nov-11</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">M</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">30-Jun-31</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; text-align:center; vertical-align:middle; white-space:nowrap\">3</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">YOGESHKUMAR BHAGVAN SHINDE</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">SUPERVISOR INSTRUCTOR</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">3</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">28-Nov-11</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">M</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">31-Mar-42</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; text-align:center; vertical-align:middle; white-space:nowrap\">4</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">RAJESHKUMAR MAGANBHAI RATHOD</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">SUPERVISOR INSTRUCTOR</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">3</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">15-May-12</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">M</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">31-Aug-29</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; text-align:center; vertical-align:middle; white-space:nowrap\">5</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">URVIKUMARI VINODBHAI PRAJAPATI</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">SUPERVISOR INSTRUCTOR</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">3</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">15-May-12</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">F</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">30-Jun-45</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; text-align:center; vertical-align:middle; white-space:nowrap\">6</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">JIGNESHBHAI LALSINGBHAI CHAUDHARI</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">SUPERVISOR INSTRUCTOR</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">3</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">29-Nov-11</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">M</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">31-Jan-41</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; text-align:center; vertical-align:middle; white-space:nowrap\">7</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">VICKYKUMAR HITENDRABHAI PATEL</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">SUPERVISOR INSTRUCTOR</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">3</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">25-Nov-11</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">M</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">31-Mar-45</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; text-align:center; vertical-align:middle; white-space:nowrap\">8</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">AMITKUMAR MAHESHBHAI CHAUDHARI</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">SUPERVISOR INSTRUCTOR</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">3</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">24-Nov-11</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">M</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">31-Jul-43</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; text-align:center; vertical-align:middle; white-space:nowrap\">9</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">DIVYANG CHANDUBHAI PATEL</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">SUPERVISOR INSTRUCTOR</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">3</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">26-Jan-17</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">M</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">31-Oct-45</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; text-align:center; vertical-align:middle; white-space:nowrap\">10</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">KINTANKUMAR BHARATBHAI PATEL</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">SUPERVISOR INSTRUCTOR</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">3</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">24-Nov-11</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">M</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">31-Jul-46</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; text-align:center; vertical-align:middle; white-space:nowrap\">11</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">ANKURKUMAR RASHMIKANT PATEL</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">SUPERVISOR INSTRUCTOR</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">3</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">28-Apr-15</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">M</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">31-May-47</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:33px; text-align:center; vertical-align:middle; white-space:nowrap\">12</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">SHAILESHBHAI BABUBHAI PATEL</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">SUPERVISOR INSTRUCTOR</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">3</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">25-Jan-17</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">M</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">31-Jul-35</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '1', '2020-11-07 07:39:38', '2020-11-22 11:09:51'),
(6, 'Grievance Mechanism', 'Grievance Mechanism', '<table cellspacing=\"0\" style=\"border-collapse:collapse; width:947px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"background-color:#f9f9f9; border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:1px solid #dddddd; vertical-align:top\">\r\n			<p><strong>S.No</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#f9f9f9; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:1px solid #dddddd; vertical-align:top; width:203px\">\r\n			<p><strong>No of Grievances Received</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#f9f9f9; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:1px solid #dddddd; vertical-align:top; width:180px\">\r\n			<p><strong>Notice(s) Issued or Not,&nbsp;<br />\r\n			If not reasons</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#f9f9f9; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:1px solid #dddddd; vertical-align:top; width:210px\">\r\n			<p><strong>No. Of&nbsp;Grievances Resolved</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#f9f9f9; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:1px solid #dddddd; vertical-align:top; width:228px\">\r\n			<p><strong>No. Of&nbsp;Grievances&nbsp;Resolved</strong></p>\r\n			</td>\r\n			<td style=\"background-color:#f9f9f9; border-bottom:1px solid #dddddd; border-left:none; border-right:1px solid #dddddd; border-top:1px solid #dddddd; vertical-align:top; width:78px\">\r\n			<p><strong>Remarks</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"6\" style=\"border-bottom:1px solid #dddddd; border-left:1px solid #dddddd; border-right:1px solid #dddddd; border-top:none; vertical-align:top; width:947px\">\r\n			<p>waiting for information</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '1', '2020-11-07 07:45:25', '2020-11-22 10:58:14'),
(7, 'Tender-Advertisement', 'Tender-Advertisement', '<table class=\"table table-bordered table-striped\">\r\n	<tbody>\r\n		<tr>\r\n			<td><b>S.No</b></td>\r\n			<td><b>Tender/Advertisement</b></td>\r\n			<td><b>Start Date</b></td>\r\n			<td><b>End Date</b></td>\r\n			<td><b>Details</b></td>\r\n		</tr>\r\n		<tr>\r\n			<td><b>1</b></td>\r\n			<td><b>YEAR 2018-19/01</b><p></p>\r\n				<p><b>ADV. IN 03/07/18 DIVYBHASKAR NEWSPAPER</b></p></td>\r\n				<td><b>03/07/2018</b></td>\r\n				<td><b>26/07/2018</b></td>\r\n				<td></td>\r\n			</tr>\r\n		</tbody>\r\n	</table>', '1', '2020-11-07 07:47:09', '2020-11-07 07:47:09'),
(8, 'Placement Advisory Bureau', 'Placement Advisory Bureau', '<table class=\"table table-bordered table-striped\" >\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>S.No</strong></td>\r\n			<td><strong>Yearwise</strong></td>\r\n			<td><strong>No of Passout Trainee</strong></td>\r\n			<td><strong>No of Employmed Trainees</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"4\">waiting for information</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '1', '2020-11-07 07:52:09', '2020-11-07 07:52:09'),
(9, 'Management Members', 'Management Members', '<table cellspacing=\"0\" style=\"border-collapse:collapse; width:1124px\">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"6\" style=\"border-bottom:1px solid black; border-left:none; border-right:none; border-top:none; height:25px; text-align:right; vertical-align:middle; white-space:nowrap; width:1123px\"><strong>Date: 26/09/19</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:20px; text-align:center; vertical-align:middle; white-space:nowrap\"><strong>Sr. No.</strong></td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:normal; width:185px\"><strong>Name</strong></td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\"><strong>Designation</strong></td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:normal; width:196px\"><strong>Contact No.&nbsp;</strong></td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\"><strong>Address</strong></td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\"><strong>Remarks.</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:52px; text-align:center; vertical-align:middle; white-space:nowrap\">1</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:185px\">&nbsp;Smt. P.D.Patel</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">Secretary</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:196px\">&nbsp;9879504773<br />\r\n			&nbsp;prlpalsanaiti@yahoo.co.in</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:495px\">&nbsp;ITI Palsana,Bardoli HighWay,Ta. Palsana, Di. Surat-394315.&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:bottom; white-space:nowrap\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:52px; text-align:center; vertical-align:middle; white-space:nowrap\">2</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:185px\">&nbsp;Shri K. B.Mistry</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">Member</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:196px\">&nbsp;9879958990&nbsp; &nbsp;prlsuratiti@yahoo.co.in</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:495px\">&nbsp;ITI&nbsp; Surat,Majuragate, Surat-395002</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:bottom; white-space:nowrap\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:52px; text-align:center; vertical-align:middle; white-space:nowrap\">3</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:185px\">&nbsp;Shri M. C. Vasava</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">Member</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:196px\">&nbsp;9558800418, 0261-2460416<br />\r\n			&nbsp;dee-sur@gujarat.gov.in</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:495px\">&nbsp;I/C Deputy Director (Employment)C-5, Bahumalbhavan, Nanpura, Surat</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:bottom; white-space:nowrap\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:52px; text-align:center; vertical-align:middle; white-space:nowrap\">4</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:185px\">&nbsp;Shri Kalpesh S. Thakor</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">Member</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:left; vertical-align:middle; white-space:normal; width:196px\">&nbsp;7046034170<br />\r\n			&nbsp;hr@heatexindustries.com</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:495px\">&nbsp;DGM-HR, Heatex Ind. Ltd, Nr. Palsana chowkdi, N.H.No.8, Surat-394315</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:bottom; white-space:nowrap\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:52px; text-align:center; vertical-align:middle; white-space:nowrap\">5</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:185px\">&nbsp;Shri. Prafulchandra B. Patel</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">Member</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:196px\">&nbsp;9925241370<br />\r\n			&nbsp;praful@heatexindustries.com</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:495px\">&nbsp;Service Head, Heatex Ind. Ltd, Nr. Palsana chowkdi, N.H.No.8, Surat-394316</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:bottom; white-space:nowrap\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:52px; text-align:center; vertical-align:middle; white-space:nowrap\">6</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:185px\">&nbsp;Shri H. S. Jariwala</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">Member</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:196px\">&nbsp;9824924981<br />\r\n			&nbsp;hsj.jhdp@gmail.com</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:nowrap\">&nbsp;J. H. Desai Polytechnic, Palsana,Di. Surat</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:bottom; white-space:nowrap\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:52px; text-align:center; vertical-align:middle; white-space:nowrap\">7</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:185px\">&nbsp;Shri Sudhirkumar D. Patel</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">Member</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:196px\">&nbsp;9825640098<br />\r\n			&nbsp;sudhir.comet@hotmail.com</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:495px\">&nbsp;CEO( SERVICE) Comnet Motors, Padesara, Surat.</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:bottom; white-space:nowrap\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:52px; text-align:center; vertical-align:middle; white-space:nowrap\">8</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:185px\">&nbsp;Shri P. M. Patel</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">Member</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:196px\">&nbsp;7878994447<br />\r\n			&nbsp;prlpalsanaiti@yahoo.co.in</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:495px\">&nbsp;Foreman Instructor, ITI Palsana,Bardoli HighWay,Ta. Palsana, Di. Surat-394315.&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:bottom; white-space:nowrap\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:52px; text-align:center; vertical-align:middle; white-space:nowrap\">9</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:185px\">&nbsp;Shri K. B.Patel</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">Member</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:196px\">&nbsp;9914789956<br />\r\n			&nbsp;prlpalsanaiti@yahoo.co.in</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:495px\">&nbsp;Supervisor Instructor, ITI Palsana,Bardoli HighWay,Ta. Palsana, Di. Surat-394315.&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:bottom; white-space:nowrap\">&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; height:52px; text-align:center; vertical-align:middle; white-space:nowrap\">10</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:185px\">&nbsp;Shri. P. C. Chaudhari</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; text-align:center; vertical-align:middle; white-space:nowrap\">Member</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:196px\">&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:middle; white-space:normal; width:495px\">&nbsp;ITI Palsana,Bardoli HighWay,Ta. Palsana, Di. Surat-394315.&nbsp;</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:bottom; white-space:nowrap\">&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '1', '2020-11-07 08:15:01', '2020-11-22 10:49:36'),
(10, 'MOU', 'mou content', NULL, '1', '2020-11-07 08:18:13', '2020-11-07 08:18:13'),
(11, 'Events', 'List of Events', NULL, '1', '2020-11-07 08:19:04', '2020-11-07 08:19:04'),
(12, 'Infrastructure, Building and workshop', 'Infrastructure, Building and workshop', '<table class=\"table table-bordered table-striped\" >\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Sr.No</strong></td>\r\n			<td><strong>Ownership document/lease agreement for rented building</strong></td>\r\n			<td><strong>In square metres</strong></td>\r\n			<td><strong>Link to scanned document/image</strong><p></p>\r\n				<p>&nbsp;</p></td>\r\n			</tr>\r\n			<tr>\r\n				<td>a.</td>\r\n				<td>Total Area</td>\r\n				<td>25900</td>\r\n				<td></td>\r\n			</tr>\r\n			<tr>\r\n				<td>b.</td>\r\n				<td>&nbsp;Covered Area</td>\r\n				<td>&nbsp;<p></p>\r\n					<p>2465</p></td>\r\n					<td></td>\r\n				</tr>\r\n				<tr>\r\n					<td>c.</td>\r\n					<td>Total Class Rooms Area</td>\r\n					<td>202.3</td>\r\n					<td></td>\r\n				</tr>\r\n				<tr>\r\n					<td>d.</td>\r\n					<td>Total&nbsp; workshops Area</td>\r\n					<td>741.78</td>\r\n					<td></td>\r\n				</tr>\r\n				<tr>\r\n					<td>e.</td>\r\n					<td>Drawing Hall</td>\r\n					<td>61.67</td>\r\n					<td></td>\r\n				</tr>\r\n				<tr>\r\n					<td>f.</td>\r\n					<td>Audio visual Hall</td>\r\n					<td>91.96</td>\r\n					<td></td>\r\n				</tr>\r\n				<tr>\r\n					<td>g.</td>\r\n					<td>Computer Lab</td>\r\n					<td>92.25</td>\r\n					<td></td>\r\n				</tr>\r\n				<tr>\r\n					<td>h.</td>\r\n					<td>Play Area</td>\r\n					<td>23435</td>\r\n					<td></td>\r\n				</tr>\r\n				<tr>\r\n					<td>i.</td>\r\n					<td>Library</td>\r\n					<td>92.25</td>\r\n					<td></td>\r\n				</tr>\r\n				<tr>\r\n					<td>j.</td>\r\n					<td>Remarks</td>\r\n					<td></td>\r\n					<td></td>\r\n				</tr>\r\n			</tbody>\r\n		</table>', '1', '2020-11-07 08:22:25', '2020-11-07 08:22:25'),
(13, 'Photo Gallery', 'Photo Gallery', '<p><img alt=\"\" src=\"Downloads/01.jpg\" style=\"width:100%\" /><img alt=\"\" src=\"http://itipalsana.org/wp-content/uploads/2017/01/01-Campus.jpg\" style=\"width:100%\" /></p>', '1', '2020-11-07 08:30:08', '2020-11-07 08:32:58'),
(14, 'Video Gallery', 'Video Gallery', NULL, '1', '2020-11-07 08:36:14', '2020-11-07 08:36:14'),
(15, 'Download', 'Download', '<table class=\"table table-bordered\">\r\n	<thead>\r\n		<tr>\r\n			<th class=\"text-left\">Title</th>\r\n			<th class=\"text-center\">Download File</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td class=\"text-left\"  colspan=\"2\"></td>\r\n		</tr>\r\n		<tr>\r\n			<td>ITI માહિતી પુસ્તિકા</td>\r\n			<td class=\"text-center\" style=\"text-align: center;\"><a href=\"http://www.google.com/\">Download Here</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Result-2016</td>\r\n			<td class=\"text-center\"><a href=\"http://itipalsana.org/wp-content/uploads/2017/05/Circular-and-Statements.pdf\">Download Here</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>Other Links</p>\r\n<table class=\"table table-bordered\">\r\n	<thead>\r\n		<tr>\r\n			<th class=\"text-left\">Title</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody style=\"border-top: solid 0px black;\">\r\n		<tr>\r\n			<td><a href=\"http://www.gcvt.org/\">GCVT&nbsp;</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '1', '2020-11-07 08:54:17', '2020-11-07 08:54:17');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `src` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `subtitle`, `src`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '/img/slide/160465698228474.jpg', '2020-11-06 04:33:02', '2020-11-06 04:33:02'),
(2, '2', '2', '/img/slide/160465699895133.jpg', '2020-11-06 04:33:18', '2020-11-06 04:33:18'),
(3, '3', '3', '/img/slide/160465701736248.jpg', '2020-11-06 04:33:37', '2020-11-06 04:33:37'),
(4, '4', '4', '/img/slide/160465703033895.jpg', '2020-11-06 04:33:50', '2020-11-06 04:33:50');

-- --------------------------------------------------------

--
-- Table structure for table `trades`
--

CREATE TABLE `trades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `affilated` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seats` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batches` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eligibility` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `benefits` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trades`
--

INSERT INTO `trades` (`id`, `name`, `affilated`, `seats`, `batches`, `eligibility`, `duration`, `benefits`, `image`, `created_at`, `updated_at`) VALUES
(1, 'FITTER', 'Affilated', '64', '4', '10TH', '2 YEAR', '', NULL, '2020-11-06 05:31:35', '2020-11-06 05:50:07'),
(2, 'ELECTRICIAN', NULL, '80', '5', '10TH', '2 YEAR', NULL, NULL, '2020-11-07 09:42:34', '2020-11-07 09:42:34'),
(3, 'WIREMAN', NULL, '80', '5', '8TH', '2 YEAR', NULL, NULL, '2020-11-07 09:44:22', '2020-11-07 09:44:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$v4V1ugfQMhUcXMF1K157x..cno22CHwmruj0odZLhVwQpSdtvxg1.', NULL, '2020-11-03 23:59:14', '2020-11-03 23:59:14'),
(2, 'prakash', 'prakash@gmail.com', '$2y$10$v4V1ugfQMhUcXMF1K157x..cno22CHwmruj0odZLhVwQpSdtvxg1.', NULL, '2020-11-16 07:32:13', '2020-11-16 07:32:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodatas`
--
ALTER TABLE `biodatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generals`
--
ALTER TABLE `generals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_trades`
--
ALTER TABLE `image_trades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trades`
--
ALTER TABLE `trades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodatas`
--
ALTER TABLE `biodatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `generals`
--
ALTER TABLE `generals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `image_trades`
--
ALTER TABLE `image_trades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trades`
--
ALTER TABLE `trades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
