-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 07:02 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

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
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `designation` text COLLATE utf8mb4_unicode_ci,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`id`, `name`, `designation`, `class`, `bio`, `image`, `contact`, `created_at`, `updated_at`) VALUES
(1, 'PRITI DAXESH PATEL', 'PRINCIPAL CLASS-II', '2', 'It gives me great pleasure to convey this message on the official launch of a Website for this Institute. The website opens up a new window of opportunity for our trainees, both present and future, and the general public to access key information on the different aspects of this Institute, its Training Schemes and related Activities. It would help in the better understanding of our Institute and should put us on the information super highway of the World, while dissipating important data including PPP Scheme-related Disclosures through use of such Information Technologies.', '/img/employe/160465880582609.jpg', '1234567890', '2020-11-06 05:03:26', '2020-11-06 05:03:26');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
  `value` text COLLATE utf8mb4_unicode_ci,
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
  `content` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `category`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Courses', 'Trades', '<table class=\"table table-bordered table-striped\" >\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>SR NO</strong></td>\r\n			<td><strong>NAME OF TRADE</strong></td>\r\n			<td><strong>EDU.QUALI.</strong></td>\r\n			<td><strong>DURATION</strong></td>\r\n			<td><strong>BATCH</strong></td>\r\n			<td><strong>SANCTIONED SEAT</strong></td>\r\n		</tr>\r\n		<tr>\r\n				<td>1</td>\r\n				<td>FITTER</td>\r\n				<td>10TH</td>\r\n				<td>2 YEAR</td>\r\n				<td>4</td>\r\n				<td>64</td>\r\n			</tr>\r\n			<tr>\r\n				<td>2</td>\r\n				<td>ELECTRICIAN</td>\r\n				<td>10TH</td>\r\n				<td>2 YEAR</td>\r\n				<td>5</td>\r\n				<td>80</td>\r\n			</tr>\r\n			<tr>\r\n				<td>3</td>\r\n				<td>WIREMAN</td>\r\n				<td>8TH</td>\r\n				<td>2 YEAR</td>\r\n				<td>5</td>\r\n				<td>80</td>\r\n			</tr>\r\n			<tr>\r\n				<td>4</td>\r\n				<td>WELDER</td>\r\n				<td>8TH</td>\r\n				<td>1 YEAR</td>\r\n				<td>3</td>\r\n				<td>48</td>\r\n			</tr>\r\n			<tr>\r\n				<td>5</td>\r\n				<td>MECHANIC DIESEL</td>\r\n				<td>10TH</td>\r\n				<td>1 YEAR</td>\r\n				<td>3</td>\r\n				<td>32</td>\r\n			</tr>\r\n			<tr>\r\n				<td>6</td>\r\n				<td>MECHANIC MOTOR VEHICLE</td>\r\n				<td>10TH</td>\r\n				<td>2 YEAR</td>\r\n				<td>1</td>\r\n				<td>16</td>\r\n			</tr>\r\n			<tr>\r\n				<td>7</td>\r\n				<td>COPA</td>\r\n				<td>10TH</td>\r\n				<td>1 YEAR</td>\r\n				<td>2</td>\r\n				<td>40</td>\r\n			</tr>\r\n			<tr>\r\n				<td>8</td>\r\n				<td>SURVEYOR</td>\r\n				<td>10TH</td>\r\n				<td>1 YEAR</td>\r\n				<td>1</td>\r\n				<td>20</td>\r\n			</tr>\r\n			<tr>\r\n				<td>9</td>\r\n				<td>ARMATURE MOTOR REWINDING</td>\r\n				<td>7TH</td>\r\n				<td>1 YEAR</td>\r\n				<td>1</td>\r\n				<td>16</td>\r\n			</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', '1', '2020-11-06 09:08:09', '2020-11-06 09:08:09'),
(2, 'Admission Criteria', 'Admission Criteria', '<table class=\"table table-bordered table-striped\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<h3><strong>ADMISSION PROCEDURE FOR ALL TRADES</strong></h3>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Student selection for the Trade will be decided as per Government Rules of the concerned ITI on merit cum selection basis</p>\r\n\r\n			<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Student selection for the BBBT courses will be decided by the IMC of the concerned ITI on merit cum selection basis.( Only for CoE )</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;\r\n			<p>&nbsp;</p>\r\n\r\n			<table class=\"table table-bordered table-striped\">\r\n				<tbody>\r\n					<tr>\r\n						<td colspan=\"3\" style=\"background-color:#179bd7\">&nbsp;AGE LIMIT</td>\r\n					</tr>\r\n					<tr>\r\n						<td><strong>Sr.No</strong></td>\r\n						<td><strong>Admission Criteria</strong></td>\r\n						<td><strong>Age Limit</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>1</td>\r\n						<td>General Candidate</td>\r\n						<td>14 to 40 Yrs</td>\r\n					</tr>\r\n					<tr>\r\n						<td>2</td>\r\n						<td>Widows &amp; Divorces</td>\r\n						<td>18 to 40 Yrs</td>\r\n					</tr>\r\n					<tr>\r\n						<td>3</td>\r\n						<td>Ex-Serviceman</td>\r\n						<td>18 to 45 Yrs</td>\r\n					</tr>\r\n					<tr>\r\n						<td>4</td>\r\n						<td>Only for Women</td>\r\n						<td>As per Government Rules</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Reservation Policy &ndash; Reservation will be applicable in the admission in different courses as per the prevailing State Government policy as under</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table class=\"table table-bordered table-striped\">\r\n				<tbody>\r\n					<tr>\r\n						<td colspan=\"3\" style=\"background-color:#179bd7\">RESERVATION CRITERIA</td>\r\n					</tr>\r\n					<tr>\r\n						<td><strong>Sr.No</strong></td>\r\n						<td><strong>Category</strong></td>\r\n						<td><strong>Percentage</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>1</td>\r\n						<td>OBC</td>\r\n						<td>27%</td>\r\n					</tr>\r\n					<tr>\r\n						<td>2</td>\r\n						<td>SC</td>\r\n						<td>12.5%</td>\r\n					</tr>\r\n					<tr>\r\n						<td>3</td>\r\n						<td>ST</td>\r\n						<td>20% for Surat ,Valsad and Navsari District 12.5% for Banaskantha.,Sabarkantha,Panchmahals.,Vadodara, Bharuch, Narmada and Dahod Districts. 5 % for the District excluded above</td>\r\n					</tr>\r\n					<tr>\r\n						<td>4</td>\r\n						<td>PH</td>\r\n						<td>3% per Institute</td>\r\n					</tr>\r\n					<tr>\r\n						<td>5</td>\r\n						<td>Women</td>\r\n						<td>25% of sanction seats</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table class=\"table table-bordered table-striped\">\r\n				<tbody>\r\n					<tr>\r\n						<td colspan=\"5\" style=\"background-color:#179bd7\">&nbsp;FEES DETAILS</td>\r\n					</tr>\r\n					<tr>\r\n						<td><strong>Sr.No</strong></td>\r\n						<td><strong>Caste/Category</strong></td>\r\n						<td><strong>Tution Fees</strong></td>\r\n						<td><strong>Caution Money Deposit</strong></td>\r\n						<td><strong>Exam Fees</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>1</td>\r\n						<td>GN / SEBC</td>\r\n						<td>Rs 100 Per Month</td>\r\n						<td rowspan=\"2\">RS. 250/- (All the Trainees are Required to Pay CMD as Deposit at The Time of Admission)</td>\r\n						<td rowspan=\"2\">RS. 125/- (For all Trainees)</td>\r\n					</tr>\r\n					<tr>\r\n						<td>2</td>\r\n						<td>GIRLS / SC / ST / PH</td>\r\n						<td>Candidates are Exempted</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table class=\"table table-bordered table-striped\">\r\n				<tbody>\r\n					<tr>\r\n						<td colspan=\"3\" style=\"background-color:#179bd7\">&nbsp;STIPEND DETAILS</td>\r\n					</tr>\r\n					<tr>\r\n						<td><strong>Sr.No</strong></td>\r\n						<td><strong>Caste/Category</strong></td>\r\n						<td><strong>Stipend</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>1</td>\r\n						<td>GN ( Institutional Stipend)</td>\r\n						<td>Rs. 100/- Per Month (As Per Present Days of Month)</td>\r\n					</tr>\r\n					<tr>\r\n						<td>2</td>\r\n						<td>SC / ST / SEBC</td>\r\n						<td>Rs. 200/- Per Month</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<table class=\"table table-bordered table-striped\">\r\n				<tbody>\r\n					<tr>\r\n						<td colspan=\"3\" style=\"background-color:#179bd7\">&nbsp;SHIFT SCHEDULE</td>\r\n					</tr>\r\n					<tr>\r\n						<td><strong>Sr.No</strong></td>\r\n						<td><strong>Shift</strong></td>\r\n						<td><strong>Tution Fees</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>1</td>\r\n						<td>First Shift</td>\r\n						<td>07.30 am TO 14.45 pm</td>\r\n					</tr>\r\n					<tr>\r\n						<td>2</td>\r\n						<td>Second Shift</td>\r\n						<td>09.30 am TO 16.45 pm</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '1', '2020-11-06 10:10:18', '2020-11-06 10:45:09'),
(3, 'Industry Linkage', 'Industry Linkage', NULL, '1', '2020-11-07 07:24:46', '2020-11-07 07:24:54'),
(4, 'Schemes running in the INSTITUTE (CTS and MES etc .under NCVT)', 'Schemes running in the INSTITUTE (CTS and MES etc .under NCVT)', '			<table class=\"table table-bordered table-striped\" >\r\n				<tbody>\r\n					<tr>\r\n						<td><strong>Name of the Scheme</strong></td>\r\n						<td><strong>Total Capacity</strong></td>\r\n						<td><strong>Duration</strong></td>\r\n						<td><strong>Admitted in current Financial Year</strong></td>\r\n						<td><strong>Current Status</strong></td>\r\n					</tr>\r\n					<tr>\r\n						<td>Craftmen Trainig Scheme</td>\r\n						<td>396</td>\r\n						<td>2016-17</td>\r\n						<td>303</td>\r\n						<td></td>\r\n					</tr>\r\n					<tr>\r\n						<td>Modular Employable Scheme</td>\r\n						<td>–</td>\r\n						<td>–</td>\r\n						<td>–</td>\r\n						<td>–</td>\r\n					</tr>\r\n					<tr>\r\n						<td>Other Schemes</td>\r\n						<td>GCVT</td>\r\n						<td>2016-17</td>\r\n						<td>19</td>\r\n						<td></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>', '0', '2020-11-07 07:26:37', '2020-11-07 07:26:37'),
(5, 'Faculty', 'INDUSTRIAL TRAINING INSTITUTE PALSANA', '<table class=\"table table-bordered table-striped\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>SrNo.</strong></td>\r\n			<td><strong>Employee Name</strong></td>\r\n			<td><strong>Designation</strong></td>\r\n			<td><strong>Class</strong></td>\r\n			<td><strong>Institute Join Date</strong></td>\r\n			<td><strong>Gender</strong></td>\r\n			<td><strong>Retirement Date</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>PRITI DAXESH PATEL</td>\r\n			<td>PRINCIPAL CLASS-II</td>\r\n			<td>2</td>\r\n			<td>09 Feb 2016</td>\r\n			<td>F</td>\r\n			<td>31 May 2035</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2</td>\r\n			<td>SIDDHIBEN MANUBHAI CHAUHAN</td>\r\n			<td>FOREMAN INSTRUCTOR (KVK)</td>\r\n			<td>3</td>\r\n			<td>28 Apr 2015</td>\r\n			<td>F</td>\r\n			<td>31 Jul 2047</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3</td>\r\n			<td>SEJALBEN BABUBHAI DESAI</td>\r\n			<td>JUNIOR CLERK</td>\r\n			<td>3</td>\r\n			<td>03 May 2017</td>\r\n			<td>F</td>\r\n			<td>31 Jan 2051</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p><strong>Technical Staff</strong></p>\r\n<table class=\"table table-bordered table-striped\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>SrNo.</strong></td>\r\n			<td><strong>Employee Name</strong></td>\r\n			<td><strong>Designation</strong></td>\r\n			<td><strong>Class</strong></td>\r\n			<td><strong>Institute Join Date</strong></td>\r\n			<td><strong>Gender</strong></td>\r\n			<td><strong>Retirement Date</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>ASHOKBHAI AMARABHAI PRAJAPATI</td>\r\n			<td>SUPERVISOR INSTRUCTOR</td>\r\n			<td>3</td>\r\n			<td>06 Aug 2012</td>\r\n			<td>M</td>\r\n			<td>31 Jan 2044</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2</td>\r\n			<td>SHAILESHKUMAR BALUBHAI CHAUDHARI</td>\r\n			<td>SUPERVISOR INSTRUCTOR</td>\r\n			<td>3</td>\r\n			<td>24 Nov 2011</td>\r\n			<td>M</td>\r\n			<td>30 Jun 2031</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3</td>\r\n			<td>YOGESHKUMAR BHAGVAN SHINDE</td>\r\n			<td>SUPERVISOR INSTRUCTOR</td>\r\n			<td>3</td>\r\n			<td>28 Nov 2011</td>\r\n			<td>M</td>\r\n			<td>31 Mar 2042</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4</td>\r\n			<td>RAJESHKUMAR MAGANBHAI RATHOD</td>\r\n			<td>SUPERVISOR INSTRUCTOR</td>\r\n			<td>3</td>\r\n			<td>15 May 2012</td>\r\n			<td>M</td>\r\n			<td>31 Aug 2029</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5</td>\r\n			<td>URVIKUMARI VINODBHAI PRAJAPATI</td>\r\n			<td>SUPERVISOR INSTRUCTOR</td>\r\n			<td>3</td>\r\n			<td>15 May 2012</td>\r\n			<td>F</td>\r\n			<td>30 Jun 2045</td>\r\n		</tr>\r\n		<tr>\r\n			<td>6</td>\r\n			<td width=\"244\">JIGNESHBHAI LALSINGBHAI CHAUDHARI</td>\r\n			<td width=\"104\">SUPERVISOR INSTRUCTOR</td>\r\n			<td width=\"45\">3</td>\r\n			<td width=\"116\">29 Nov 2011</td>\r\n			<td width=\"60\">M</td>\r\n			<td width=\"101\">31 Jan 2041</td>\r\n		</tr>\r\n		<tr>\r\n			<td width=\"48\">7</td>\r\n			<td width=\"244\">VICKYKUMAR HITENDRABHAI PATEL</td>\r\n			<td width=\"104\">SUPERVISOR INSTRUCTOR</td>\r\n			<td width=\"45\">3</td>\r\n			<td width=\"116\">25 Nov 2011</td>\r\n			<td width=\"60\">M</td>\r\n			<td width=\"101\">31 Mar 2045</td>\r\n		</tr>\r\n		<tr>\r\n			<td width=\"48\">8</td>\r\n			<td width=\"244\">AMITKUMAR MAHESHBHAI CHAUDHARI</td>\r\n			<td width=\"104\">SUPERVISOR INSTRUCTOR</td>\r\n			<td width=\"45\">3</td>\r\n			<td width=\"116\">24 Nov 2011</td>\r\n			<td width=\"60\">M</td>\r\n			<td width=\"101\">31 Jul 2043</td>\r\n		</tr>\r\n		<tr>\r\n			<td width=\"48\">9</td>\r\n			<td width=\"244\">DIVYANG CHANDUBHAI PATEL</td>\r\n			<td width=\"104\">SUPERVISOR INSTRUCTOR</td>\r\n			<td width=\"45\">3</td>\r\n			<td width=\"116\">26 Jan 2017</td>\r\n			<td width=\"60\">M</td>\r\n			<td width=\"101\">31 Oct 2045</td>\r\n		</tr>\r\n		<tr>\r\n			<td width=\"48\">10</td>\r\n			<td width=\"244\">KINTANKUMAR BHARATBHAI PATEL</td>\r\n			<td width=\"104\">SUPERVISOR INSTRUCTOR</td>\r\n			<td width=\"45\">3</td>\r\n			<td width=\"116\">24 Nov 2011</td>\r\n			<td width=\"60\">M</td>\r\n			<td width=\"101\">31 Jul 2046</td>\r\n		</tr>\r\n		<tr>\r\n			<td width=\"48\">11</td>\r\n			<td width=\"244\">ANKURKUMAR RASHMIKANT PATEL</td>\r\n			<td width=\"104\">SUPERVISOR INSTRUCTOR</td>\r\n			<td width=\"45\">3</td>\r\n			<td width=\"116\">28 Apr 2015</td>\r\n			<td width=\"60\">M</td>\r\n			<td width=\"101\">31 May 2047</td>\r\n		</tr>\r\n		<tr>\r\n			<td width=\"48\">12</td>\r\n			<td width=\"244\">SHAILESHBHAI BABUBHAI PATEL</td>\r\n			<td width=\"104\">SUPERVISOR INSTRUCTOR</td>\r\n			<td width=\"45\">3</td>\r\n			<td width=\"116\">25 Jan 2017</td>\r\n			<td width=\"60\">M</td>\r\n			<td width=\"101\">31 Jul 2035</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '1', '2020-11-07 07:39:38', '2020-11-07 07:39:38'),
(6, 'Grievance Mechanism', 'Grievance Mechanism', NULL, '1', '2020-11-07 07:45:25', '2020-11-07 07:45:25'),
(7, 'Tender-Advertisement', 'Tender-Advertisement', '<table class=\"table table-bordered table-striped\">\r\n	<tbody>\r\n		<tr>\r\n			<td><b>S.No</b></td>\r\n			<td><b>Tender/Advertisement</b></td>\r\n			<td><b>Start Date</b></td>\r\n			<td><b>End Date</b></td>\r\n			<td><b>Details</b></td>\r\n		</tr>\r\n		<tr>\r\n			<td><b>1</b></td>\r\n			<td><b>YEAR 2018-19/01</b><p></p>\r\n				<p><b>ADV. IN 03/07/18 DIVYBHASKAR NEWSPAPER</b></p></td>\r\n				<td><b>03/07/2018</b></td>\r\n				<td><b>26/07/2018</b></td>\r\n				<td></td>\r\n			</tr>\r\n		</tbody>\r\n	</table>', '1', '2020-11-07 07:47:09', '2020-11-07 07:47:09'),
(8, 'Placement Advisory Bureau', 'Placement Advisory Bureau', '<table class=\"table table-bordered table-striped\" >\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>S.No</strong></td>\r\n			<td><strong>Yearwise</strong></td>\r\n			<td><strong>No of Passout Trainee</strong></td>\r\n			<td><strong>No of Employmed Trainees</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"4\">waiting for information</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '1', '2020-11-07 07:52:09', '2020-11-07 07:52:09'),
(9, 'Management Members', 'Management Members', '<table class=\"table table-bordered table-striped\" >\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Sr. No.</strong></td>\r\n			<td colspan=\"2\"><strong>Name</strong></td>\r\n			<td><strong>Contact No.</strong><p></p>\r\n				<p><strong>Email Address</strong></p></td>\r\n				<td><strong>Address</strong></td>\r\n			</tr>\r\n			<tr>\r\n				<td><strong>1</strong></td>\r\n				<td>Shri D. P. Gupta</td>\r\n				<td>Chairman</td>\r\n				<td>9825115660<p></p>\r\n					<p><a href=\"mailto:dpg@abgindia.com\">dpg@abgindia.com</a></p></td>\r\n					<td>Sr. Vice President<p></p>\r\n						<p>ABG Ship Yard, Nr. Magdalla Port, Dumas Road,</p>\r\n						<p>Surat-395007</p></td>\r\n					</tr>\r\n					<tr>\r\n						<td><strong>2</strong></td>\r\n						<td>Smt. P.D.Patel</td>\r\n						<td>Secretary</td>\r\n						<td>9879504773<p></p>\r\n							<p><a href=\"mailto:prlpalsanaiti@yahoo.co.in\">prlpalsanaiti@yahoo.co.in</a></p></td>\r\n							<td>&nbsp;Principal , ITI Palsana</td>\r\n						</tr>\r\n						<tr>\r\n							<td><strong>3</strong></td>\r\n							<td>Shri Sudhir Patel</td>\r\n							<td>Member</td>\r\n							<td>9825640098<p></p>\r\n								<p><a href=\"mailto:Sudhir.comet@hotmail.com\">Sudhir.comet@hotmail.com</a></p></td>\r\n								<td>CEO Service<p></p>\r\n									<p>Comet Motors</p>\r\n									<p>Chikuwadi complex, GHB Road,</p>\r\n									<p>Pandesara, Surat</p></td>\r\n								</tr>\r\n								<tr>\r\n									<td><strong>4</strong></td>\r\n									<td>Shri&nbsp;H.M.Zaveri</td>\r\n									<td>Member</td>\r\n									<td>9825485585<p></p>\r\n										<p>hemesh@heatexindustries.com</p></td>\r\n										<td>System Engg.<p></p>\r\n											<p>Heatex Ind. Ltd. Pandesara</p>\r\n											<p>Surat</p></td>\r\n										</tr>\r\n										<tr>\r\n											<td><strong>5</strong></td>\r\n											<td>Shri H. S. Jariwala</td>\r\n											<td>Member</td>\r\n											<td>9824924984<p></p>\r\n												<p><a href=\"mailto:%0dhsj.jhdp@gmail.com\">hsj.jhdp@gmail.com</a></p></td>\r\n												<td>HoD (Mechanical)<p></p>\r\n													<p>J. H. Desai Polytechnic, Palsana, Di. Surat</p></td>\r\n												</tr>\r\n												<tr>\r\n													<td><strong>6</strong></td>\r\n													<td>Shri Harihar Pradhan</td>\r\n													<td>Member</td>\r\n													<td>9909028536<p></p>\r\n														<p>suratcivil@abgindia.com</p></td>\r\n														<td>ABG Ship Yard, Nr. Magdalla Port, Dumas Road, Surat-395007</td>\r\n													</tr>\r\n													<tr>\r\n														<td><strong>7</strong></td>\r\n														<td>Shri H.C.Chaudhari</td>\r\n														<td>Member</td>\r\n														<td>9879577338<p></p>\r\n															<p><a href=\"mailto:prlsuratiti@yahoo.co.in\">prlsuratiti@yahoo.co.in</a></p></td>\r\n															<td>Principal, ITI&nbsp; Surat</td>\r\n														</tr>\r\n														<tr>\r\n															<td><strong>8</strong></td>\r\n															<td>Shri&nbsp;M.C.Vasava</td>\r\n															<td>Member</td>\r\n															<td>9558800418<p></p>\r\n																<p>dee-sur@gujarat.gov.in</p></td>\r\n																<td>&nbsp;Asst. Director, Employment<p></p>\r\n																	<p>C-5 Bahumali Bhavan,Nanpura , Surat-395001</p></td>\r\n																</tr>\r\n																<tr>\r\n																	<td><strong>9</strong></td>\r\n																	<td>Ku S.M.Chauhan</td>\r\n																	<td>Member</td>\r\n																	<td>&nbsp;9427511509<p></p>\r\n																		<p>siddhichauhan@hotmail.com</p></td>\r\n																		<td>&nbsp;F.I &nbsp;ITI Palsana</td>\r\n																	</tr>\r\n																</tbody>\r\n															</table>', '1', '2020-11-07 08:15:01', '2020-11-07 08:15:01'),
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
(1, 'Admin', 'admin@admin.com', '$2y$10$xfaVx.VW0zyv6jmMdbprtetlxd2Wacchr0kr3bEtIQDQyfWk.3wxW', NULL, '2020-11-03 23:59:14', '2020-11-03 23:59:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodatas`
--
ALTER TABLE `biodatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
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
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
