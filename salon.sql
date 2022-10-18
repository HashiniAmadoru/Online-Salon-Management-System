-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 08:03 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `ad_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`ad_id`, `name`, `email`, `address`, `topic`, `price`, `description`, `phone1`, `status`, `created_at`, `updated_at`) VALUES
('ad2100004', 'Dilki Gunawardhana', 'dilkiG@gmail.com', 'Galle', 'Sell - Hair tool Set', '3000.00', 'Hair Styling Tool Make new hair styles in seconds Easy and convenient to carry and use Simple and elegant hair style, not only embellishes the shape of head and face. But also achieves graceful and sweet temperament', '0776256321', '0', '2021-01-23 01:31:47', '2021-01-23 01:31:47'),
('ad2100005', 'Kalpa Weerasinhe', 'kalpaweerasinhe98@gmail.com', 'no.67, Mayurapura, Hambanthota', 'For Rent Bridal Frock', '10000.00', 'Exclusive bridal frocks and dresses for rent in Sri Lanka. Our partners continuously strive to bring you the latest bridal dresses to make your special day extra special. Test all outfits are dry cleaned before handing over to a client.', '0777236152', '1', '2021-05-28 21:26:49', '2021-05-28 21:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `ad_images`
--

CREATE TABLE `ad_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ad_images`
--

INSERT INTO `ad_images` (`id`, `ad_id`, `image_name`, `created_at`, `updated_at`) VALUES
(91, 'ad2100004', 'photos/1611385307564.jpg', '2021-01-23 01:31:47', '2021-01-23 01:31:47'),
(92, 'ad2100004', 'photos/1611385307574.jpeg', '2021-01-23 01:31:47', '2021-01-23 01:31:47'),
(93, 'ad2100004', 'photos/1611385307500.jpg', '2021-01-23 01:31:47', '2021-01-23 01:31:47'),
(103, 'ad2100005', 'photos/1622257009968.jpg', '2021-05-28 21:26:49', '2021-05-28 21:26:49'),
(104, 'ad2100005', 'photos/1622257009699.jpg', '2021-05-28 21:26:49', '2021-05-28 21:26:49'),
(105, 'ad2100005', 'photos/1622257009784.jpg', '2021-05-28 21:26:49', '2021-05-28 21:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `app_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cus_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'n' COMMENT 'n-none,a-approve,r-reject',
  `salon_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`app_id`, `Cus_name`, `email`, `service`, `phone`, `date`, `time`, `status`, `salon_id`, `created_at`, `updated_at`) VALUES
('app2000015', 'kasuni', 'wp.asanka.pradeep@gmail.com', 'facial', '0710136124', '2021-01-31', 'Evening', 'n', 'salon2000008', '2020-12-13 06:25:36', '2020-12-13 06:25:36'),
('app2000016', 'Hashini', 'dilmihashini1@gmail.com', 'clean up', '0710136145', '2021-01-29', 'Afternoon', 'n', 'salon2000009', '2020-12-13 06:48:20', '2020-12-13 06:48:20'),
('app2000017', 'Thushari Silva', 'thushari@gmail.com', 'Clean Up', '0712334980', '2021-01-25', 'Evening', 'n', 'salon2000008', '2020-12-20 08:45:45', '2020-12-20 08:45:45'),
('app2000018', 'Achini Shunali', 'achini94@gmail.com', 'Gold Facial', '0710258789', '2021-01-28', 'Afternoon', 'a', 'salon2000009', '2020-12-31 05:38:26', '2021-01-23 20:10:36'),
('app2100019', 'Iroshi Shanika', 'iroshi@gmail.com', 'Full Hand Waxing', '0718745214', '2021-01-31', 'Afternoon', 'n', 'salon2000009', '2021-01-20 09:53:48', '2021-01-20 09:53:48'),
('app2100020', 'Hasini Abewardhana', 'hasiniAbewar@gmail.com', 'Hair Protein Treatment', '0710358652', '2021-01-29', 'Evening', 'n', 'salon2100010', '2021-01-20 10:29:34', '2021-01-20 10:29:34'),
('app2100021', 'Indrani Ranasinghe', 'indraniR@gmail.com', 'Full Face Threding', '0715245122', '2021-01-27', 'Evening', 'n', 'salon2000009', '2021-01-20 11:41:47', '2021-01-20 11:41:47'),
('app2100022', 'Indrani Ranasinghe', 'indraniR@gmail.com', 'Full Face Threding', '0712587563', '2021-01-27', 'Evening', 'n', 'salon2000009', '2021-01-20 11:43:33', '2021-01-20 11:43:33'),
('app2100023', 'Mallika ediriweera', 'mallika@gmail.com', 'Clean up', '0772584563', '2021-01-30', 'Afternoon', 'n', 'salon2100010', '2021-01-22 11:02:44', '2021-01-22 11:02:44'),
('app2100024', 'Achini Perera', 'achini94@gmail.com', 'Eye brow threading', '0774520369', '2021-01-28', 'Evening', 'n', 'salon2000008', '2021-01-22 11:05:56', '2021-01-22 11:05:56'),
('app2100025', 'Ushani Madumali', 'ushanimadu@gmail.com', 'Manicure - Nail', '0772587456', '2021-01-27', 'Evening', 'n', 'salon2000009', '2021-01-22 11:08:42', '2021-01-22 11:08:42'),
('app2100027', 'K.Ediriweera', 'kediriweera@gmail.com', 'Normal Facial', '0774852262', '2021-06-29', 'Morning', 'n', 'salon2000009', '2021-05-19 03:55:44', '2021-05-19 03:55:44'),
('app2100028', 'Indumathi Ranasinghe', 'indu95@gmail.com', 'Hand Full Waxing', '0715423586', '2021-06-25', 'Morning', 'n', 'salon2000008', '2021-05-19 03:57:58', '2021-05-19 03:57:58'),
('app2100029', 'Asanka Madushika', 'asankamadu95@gmail.com', 'Short Layer Cut', '0777183520', '2021-06-27', 'Morning', 'n', 'salon2100010', '2021-05-19 03:59:21', '2021-05-19 03:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `com_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salon_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`com_id`, `name`, `email`, `message`, `salon_id`, `created_at`, `updated_at`) VALUES
('com2000002', 'madu Dilhara', 'madu@gmail.com', 'I will recommend your Salon to others in the future,', 'salon2000008', '2020-12-12 18:30:00', '2020-12-12 18:30:00'),
('com2000003', 'Hasithka', 'hasithka@gmail.com', 'Your service good. I will recommend your Salon to others in the future, and of course, I will return.', 'salon2000009', '2020-12-13 06:49:16', '2020-12-13 06:49:16'),
('com2000004', 'dilki madu', 'dilki@gmail.com', 'I want you to know how much I appreciate the excellent service you provided', 'salon2000009', '2020-12-13 10:58:21', '2020-12-13 10:58:21'),
('com2000005', 'Tharika', 'tharika@gmail.com', 'I wanted to drop you a note and thank you for the wonderful, relaxing service you provided during my trip to the day spa.', 'salon2000009', NULL, NULL),
('com2000006', 'dushani', 'dushani@gmail.com', 'That Services are very good and right place for relaxing. Services are best. Well maintained. Overall good experience.', 'salon2000009', NULL, NULL),
('com2000007', 'gihani', 'gihani@gmail.com', 'Best Services. I will recommend your Salon to others in the future.', 'salon2000009', '2020-12-13 11:35:20', '2020-12-13 11:35:20'),
('com2100008', 'Iroshi Shanika', 'iroshi@gmail.com', 'I will recommend your Salon to others in the future,', 'salon2100010', '2021-01-20 10:20:26', '2021-01-20 10:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `con_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactuses`
--

INSERT INTO `contactuses` (`con_id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
('con2000002', 'kasuni', 'kasuniNimnika@gmail.com', 'Better services', '2020-03-02 11:22:41', '2020-03-02 11:22:41'),
('con2000004', 'dilki madu', 'dilmihashini1@gmail.com', 'good services', '2020-08-04 09:27:39', '2020-08-04 09:27:39'),
('con2000005', 'Dusheni Perera', 'dusheni8@gmail.com', 'Your service is good', '2020-12-16 11:29:56', '2020-12-16 11:29:56'),
('con2000006', 'kasuni kawshalya', 'kasunikawsha@gmail.com', 'Good services', '2020-12-16 21:59:12', '2020-12-16 21:59:12');

-- --------------------------------------------------------

--
-- Stand-in structure for view `customer`
-- (See below for the actual view)
--
CREATE TABLE `customer` (
`reg_id` varchar(20)
,`name` varchar(50)
,`address` varchar(100)
,`email` varchar(50)
,`nic` varchar(15)
,`city` varchar(191)
,`phone1` varchar(10)
,`created_at` timestamp
,`updated_at` timestamp
);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_services`
--

CREATE TABLE `main_services` (
  `main_service_id` int(11) NOT NULL,
  `main_service` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_services`
--

INSERT INTO `main_services` (`main_service_id`, `main_service`, `image`) VALUES
(1, 'Face', 'photos/face.png'),
(8, 'Hair', 'photos/hair.png'),
(9, 'Body', 'photos/body.png'),
(10, 'Nails', 'photos/nail.png');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_08_091031_create_personals_table', 2),
(5, '2020_02_08_150355_create_salon_owners_table', 3),
(6, '2020_02_27_060510_create_appointments_table', 4),
(7, '2020_03_01_150519_create_comments_table', 5),
(8, '2020_03_02_161021_create_contactuses_table', 6),
(9, '2020_03_15_061401_create_advertisements_table', 7),
(10, '2020_03_15_063901_create_advertisements_table', 8),
(11, '2020_05_21_062017_create_services_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `open_close_time`
--

CREATE TABLE `open_close_time` (
  `id` int(11) NOT NULL,
  `salon_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_time` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `close_time` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `open_close_time`
--

INSERT INTO `open_close_time` (`id`, `salon_id`, `date`, `open_time`, `close_time`) VALUES
(3, 'salon2000008', 'Monday', '07.00AM', '07.00PM'),
(4, 'salon2000008', 'Tuesday', '07.00AM', '07.00PM'),
(5, 'salon2000008', 'Wednesday', NULL, NULL),
(6, 'salon2000008', 'Thursday', '07.00AM', '07.00PM'),
(7, 'salon2000008', 'Friday', '07.00AM', '07.00PM'),
(8, 'salon2000008', 'Saturday', '07.00AM', '07.00PM'),
(9, 'salon2000008', 'Sunday', '07.00AM', '07.00PM'),
(10, 'salon2000009', 'Monday', '07.00AM', '07.00PM'),
(11, 'salon2000009', 'Tuesday', '07.00AM', '07.00PM'),
(12, 'salon2000009', 'Wednesday', '07.00AM', '07.00PM'),
(13, 'salon2000009', 'Thursday', '07.00AM', '07.00PM'),
(14, 'salon2000009', 'Friday', NULL, NULL),
(15, 'salon2000009', 'Saturday', '07.00AM', '07.00PM'),
(16, 'salon2000009', 'Sunday', '07.00AM', '07.00PM'),
(17, 'salon2100010', 'Monday', '07.00AM', '07.00PM'),
(18, 'salon2100010', 'Tuesday', '07.00AM', '07.00PM'),
(19, 'salon2100010', 'Wednesday', '07.00AM', '07.00PM'),
(20, 'salon2100010', 'Thursday', '07.00AM', '07.00PM'),
(21, 'salon2100010', 'Friday', '07.00AM', '07.00PM'),
(22, 'salon2100010', 'Saturday', '07.00AM', '07.00PM'),
(23, 'salon2100010', 'Sunday', NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `owners`
-- (See below for the actual view)
--
CREATE TABLE `owners` (
`reg_id` varchar(20)
,`name` varchar(50)
,`address` varchar(100)
,`email` varchar(50)
,`nic` varchar(15)
,`city` varchar(191)
,`phone1` varchar(10)
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personals`
--

CREATE TABLE `personals` (
  `reg_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nic` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personals`
--

INSERT INTO `personals` (`reg_id`, `name`, `address`, `email`, `nic`, `city`, `phone1`, `created_at`, `updated_at`) VALUES
('cus2000020', 'Achini Amadoru', 'Eramudu Mawatha, Thalalla', 'achiniama91@gmail.com', '919680056v', 'dikwella', '0711360159', '2020-10-20 22:50:23', '2020-10-20 22:50:23'),
('cus2000022', 'Saduni Perera', 'Waththegama, Dikwella', 'saduni12@gmail.com', '964520058v', 'Dikwella', '0712589654', '2020-11-01 02:43:35', '2020-11-01 02:43:35'),
('cus2000023', 'Haasini Abeyawardana', 'Kaburugamuwa', 'madhumani731@gmail.com', '957896652v', 'Kaburugamuwa', '0710256321', '2020-12-13 06:18:57', '2020-12-13 06:22:11'),
('cus2000024', 'Kasuni Nimnika', 'Dewndara', 'kasuninimnika96@gmail.com', '964520052v', 'Dewndara', '0715236547', '2020-12-13 06:44:02', '2021-01-10 02:21:21'),
('cus2100025', 'Samadhi Sanathani', '\"Geetha Villa\", Mahawaththa, Ambagasdeniya Road, Getamanna', 'samadhiwarnakulasooriya95@gmail.com', '956860091v', 'Getamanna', '0774176640', '2021-01-06 06:12:43', '2021-01-06 06:32:31'),
('cus2100026', 'Ruwani Ranasinghe', 'Light House Park, Devinuwara', 'ruwaniR@gmail.com', '957850052v', 'Devinuwara', '0712456230', '2021-01-06 06:14:19', '2021-01-06 06:14:19');

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_type_id` int(11) NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1-active, 0-diactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`product_id`, `product_name`, `product_type_id`, `image`, `status`) VALUES
(1, 'Janet production', 1, 'photos/160524755459.jpg', '1'),
(2, 'Dreamron', 2, 'photos/1605252305776.png', '1'),
(3, 'Himalaya Product', 1, 'photos/1607184864735.jpg', '0'),
(4, 'Loreal', 2, 'photos/160811220519.jpg', '1'),
(5, 'Tresemme Collection', 2, 'photos/1608112320307.jpg', '1'),
(6, 'Sothys Collection', 1, 'photos/1608112422819.jpg', '1'),
(7, 'Sothys Skin Collection', 3, 'photos/1608112562454.jpg', '1'),
(8, 'Lotus Skin collection', 3, 'photos/1608112677182.jpeg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `product_type_id` int(11) NOT NULL,
  `product_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`product_type_id`, `product_type`, `image`) VALUES
(1, 'MakeUp', 'photos/pMakeup.jpg'),
(2, 'Hair', 'photos/pHair.jpg'),
(3, 'Skin', 'photos/pSkin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `salon_owners`
--

CREATE TABLE `salon_owners` (
  `salon_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salon_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salon_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_img` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salon_owners`
--

INSERT INTO `salon_owners` (`salon_id`, `salon_name`, `salon_address`, `profile_img`, `reg_id`, `created_at`, `updated_at`) VALUES
('salon2000008', 'Salon Haasini', 'Kaburugamuwa', 'profile/1607860331823.png', 'cus2000023', NULL, '2020-12-13 06:22:11'),
('salon2000009', 'Salon Kasuni', 'Dewndara', 'profile/161026508142.jpg', 'cus2000024', NULL, '2021-01-10 02:21:22'),
('salon2100010', 'Salon Samadhi', 'Getamanna', 'profile/1609934551864.jpg', 'cus2100025', NULL, '2021-01-06 06:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `salon_product`
--

CREATE TABLE `salon_product` (
  `id` int(11) NOT NULL,
  `salon_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salon_product`
--

INSERT INTO `salon_product` (`id`, `salon_id`, `product_id`) VALUES
(7, 'salon2000009', 1),
(8, 'salon2000009', 8),
(9, 'salon2100010', 8),
(10, 'salon2000009', 6),
(11, 'salon2000009', 2),
(12, 'salon2000009', 4),
(13, 'salon2000009', 5),
(14, 'salon2100010', 6),
(15, 'salon2100010', 4),
(16, 'salon2100010', 5),
(17, 'salon2000008', 6),
(18, 'salon2000008', 4),
(19, 'salon2000008', 7);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `sub_service_id` int(11) NOT NULL,
  `service_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1-active, 0-diactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `sub_service_id`, `service_name`, `image`, `time`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Jovees Clean Up', 'photos/1603855118544.jpg', '30 minutes', '1', '2020-10-27 21:48:38', '2020-10-27 21:48:38'),
(2, 7, 'Long Layer Cut', 'photos/1603968621838.jpg', '30 minutes', '1', '2020-10-29 05:20:21', '2020-10-29 05:20:21'),
(3, 6, 'Gold Facial', 'photos/1603991494540.jpg', '1 and half hour', '1', '2020-10-29 11:41:34', '2020-10-29 11:41:34'),
(5, 7, 'Short Layer Cut', 'photos/1604151030632.jpg', '30 minutes', '1', '2020-10-31 08:00:30', '2020-11-03 06:18:04'),
(6, 7, 'Multi-layers For Long Hair', 'photos/1604405388938.png', '30 minutes', '1', '2020-11-03 06:39:48', '2020-11-13 04:12:50'),
(7, 6, 'C Vitamin Facial', 'photos/1604405669210.jpg', '1 hour', '1', '2020-11-03 06:44:29', '2020-11-03 07:15:32'),
(9, 1, 'Aroma Magic Clean Up', 'photos/1606839478528.jpg', '30 minutes', '1', '2020-12-01 10:47:58', '2021-01-20 09:21:57'),
(10, 9, 'Full Leg Waxing', 'photos/1608111431607.jpg', '1 hour', '1', '2020-12-16 04:07:11', '2020-12-16 04:07:11'),
(11, 9, 'Full Hand Waxing', 'photos/1608111628944.jpg', '1 hour', '1', '2020-12-16 04:10:28', '2020-12-16 04:10:28'),
(12, 10, 'Manicure - Nail', 'photos/1608111760994.jpg', '1 hour', '1', '2020-12-16 04:12:40', '2020-12-16 04:12:40'),
(13, 11, 'Pedicure & Nail Color', 'photos/1608111887531.jpg', '1 hour', '1', '2020-12-16 04:14:47', '2020-12-16 04:14:47'),
(14, 7, 'Angled Bob', 'photos/161028702648.jpg', '30 minutes', '1', '2021-01-10 08:27:06', '2021-01-10 08:27:06'),
(15, 1, 'Himalaya Clean Up', 'photos/1611155139346.jpg', '30 minutes', '1', '2021-01-20 09:35:39', '2021-01-20 09:35:39'),
(16, 12, 'Full Face', 'photos/1611156500667.jpg', '30 minutes', '1', '2021-01-20 09:58:20', '2021-01-20 09:58:20'),
(17, 12, 'Eyebrow', 'photos/1611156620443.jpg', '15 minutes', '1', '2021-01-20 10:00:20', '2021-01-20 10:00:20'),
(18, 12, 'Upper Lip', 'photos/1611157059510.jpg', '15 minutes', '1', '2021-01-20 10:07:39', '2021-01-20 10:07:39'),
(19, 13, 'Protein Treatment', 'photos/1611157191258.jpg', '1 hour', '1', '2021-01-20 10:09:51', '2021-01-20 10:09:51'),
(20, 13, 'Oil Treatment', 'photos/161115724383.jpg', '1 hour', '1', '2021-01-20 10:10:43', '2021-01-20 10:10:43'),
(21, 13, 'Keratin treatment', 'photos/1611159627559.jpg', '1 hour', '0', '2021-01-20 10:50:27', '2021-01-20 10:50:27'),
(22, 6, 'Normal Facial', 'photos/1611464760693.jpg', '1 hour', '0', '2021-01-23 23:36:00', '2021-01-23 23:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `sowner_gallery`
--

CREATE TABLE `sowner_gallery` (
  `id` int(11) NOT NULL,
  `salon_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sowner_gallery`
--

INSERT INTO `sowner_gallery` (`id`, `salon_id`, `photo_type`, `photo`) VALUES
(16, 'salon2000008', 'Cover', 'profile/1611159881363.jpg'),
(19, 'salon2000009', 'Cover', 'profile/1609392692233.jpg'),
(20, 'salon2000009', 'Gallery', 'photos/1607861738930.jpg'),
(21, 'salon2000009', 'Gallery', 'photos/1607861739357.jpg'),
(22, 'salon2000009', 'Gallery', 'photos/1607880595125.png'),
(23, 'salon2000009', 'Gallery', 'photos/1607880595395.jpg'),
(24, 'salon2000009', 'Gallery', 'photos/1607880596633.jpg'),
(25, 'salon2000009', 'Gallery', 'photos/1607880596592.jpg'),
(26, 'salon2100010', 'Cover', 'profile/1609934290260.jpg'),
(27, 'salon2100010', 'Gallery', 'photos/1609934341159.jpg'),
(28, 'salon2100010', 'Gallery', 'photos/1609934341369.jpeg'),
(29, 'salon2000008', 'Gallery', 'photos/1611157677370.jpg'),
(30, 'salon2000008', 'Gallery', 'photos/1611157677849.jpg'),
(31, 'salon2000008', 'Gallery', 'photos/1611157677509.png'),
(32, 'salon2000008', 'Gallery', 'photos/1611157721106.jpg'),
(34, 'salon2100010', 'Gallery', 'photos/1611158206605.jpg'),
(35, 'salon2100010', 'Gallery', 'photos/1611158221499.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sowner_service`
--

CREATE TABLE `sowner_service` (
  `id` int(11) NOT NULL,
  `salon_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sowner_service`
--

INSERT INTO `sowner_service` (`id`, `salon_id`, `service_id`, `price`) VALUES
(25, 'salon2000009', 2, '0.00'),
(26, 'salon2000009', 1, '0.00'),
(27, 'salon2000009', 12, '0.00'),
(28, 'salon2000008', 1, '0.00'),
(29, 'salon2000008', 13, '0.00'),
(30, 'salon2000009', 13, '0.00'),
(31, 'salon2000009', 3, '0.00'),
(32, 'salon2000009', 7, '0.00'),
(33, 'salon2000009', 10, '0.00'),
(34, 'salon2100010', 1, '0.00'),
(35, 'salon2000009', 9, '0.00'),
(36, 'salon2000009', 20, '0.00'),
(37, 'salon2000009', 5, '0.00'),
(38, 'salon2000009', 17, '0.00'),
(39, 'salon2000008', 2, '0.00'),
(40, 'salon2000008', 5, '0.00'),
(41, 'salon2000008', 14, '0.00'),
(42, 'salon2000008', 10, '0.00'),
(43, 'salon2000008', 11, '0.00'),
(44, 'salon2000008', 3, '0.00'),
(45, 'salon2000008', 9, '0.00'),
(46, 'salon2000008', 15, '0.00'),
(47, 'salon2100010', 15, '0.00'),
(48, 'salon2100010', 2, '0.00'),
(49, 'salon2100010', 6, '0.00'),
(50, 'salon2100010', 19, '0.00'),
(51, 'salon2100010', 10, '0.00'),
(52, 'salon2100010', 11, '0.00'),
(53, 'salon2100010', 12, '0.00'),
(54, 'salon2000009', 15, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_services`
--

CREATE TABLE `sub_services` (
  `sub_service_id` int(11) NOT NULL,
  `sub_service` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_services`
--

INSERT INTO `sub_services` (`sub_service_id`, `sub_service`, `main_service_id`) VALUES
(1, 'Clean Up', 1),
(6, 'Facial', 1),
(7, 'Hair Cuts', 8),
(9, 'Waxing', 9),
(10, 'Manicure', 10),
(11, 'Pedicure', 10),
(12, 'Threading', 1),
(13, 'Hair Treatment', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'A.T.D.Hashini', 'hashiniamadoru9@gmail.com', 'admin', NULL, '$2y$10$2.tDP0vpgvV8.EpImCcpIOd8R1/KaXn2lXYeJ3sMTkCzlf7dB1sYO', 'ePbkHPyM1fI67ZW35DkdtskHSNexnCGULWFM4bD5GFFljBqrp87PJp0maaon', '2020-01-09 12:31:48', '2021-05-29 05:56:29'),
(12, 'Haasini Abeyawardana', 'madhumani731@gmail.com', 'S_Owner', NULL, '$2y$10$.M9fV4bRZA5nPg7P1R8r2uvPIiSSvOWzYhrD0kIJD8oyNUmwt4sIy', 'jJlm5SCGrnhVFazSswlLXdKtSAscHbZbu8Y8bMx3PBFhVof8k0NIkKqRGNc5', NULL, '2021-05-29 05:52:26'),
(13, 'Kasuni Nimnika', 'kasuninimnika96@gmail.com', 'S_Owner', NULL, '$2y$10$XWE1z20iPn2/JEbjVkXYOuC8Eynk32VMeX6KXyo8.WHXCawLbAUni', 'f0dwZq4Jyfjl5NjBbpHZDMbU3reB87Jm2YweIIRb7z8TAQXVb8pU8kbkCgYs', NULL, '2021-05-29 05:50:20'),
(14, 'Samadhi Sanathani', 'samadhiwarnakulasooriya95@gmail.com', 'S_Owner', NULL, '$2y$10$OESbSCAu2DYigOxuAA3.2u1zKAaFTI7QpTLRMbJFESK0gFXxs9Jui', NULL, NULL, '2021-01-06 06:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `vision_details`
--

CREATE TABLE `vision_details` (
  `id` int(11) NOT NULL,
  `salon_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `vision` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `mission` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vision_details`
--

INSERT INTO `vision_details` (`id`, `salon_id`, `description`, `vision`, `mission`) VALUES
(3, 'salon2000008', 'We provide a wide range of services related to hair care with our well trained professionals to cater to all your needs. You can email or call us with any inquiries. Follow us on twitter @SalonHaasini for more details. We are ready to serve you. Are you ready for a great new experience?', 'We provide a wide range of services related to hair care with our well trained professionals to cater to all your needs.', 'We provide a wide range of services related to hair care with our well trained professionals to cater to all your needs.'),
(4, 'salon2000009', 'We provide a wide range of services related to hair care with our well trained professionals to cater to all your needs. You can email or call us with any inquiries. Follow us on twitter @SalonKasuni for more details. We are ready to serve you. Are you ready for a great new experience?', 'We provide a wide range of services related to hair care with our well trained professionals to cater to all your needs.', 'We provide a wide range of services related to hair care with our well trained professionals to cater to all your needs.'),
(5, 'salon2100010', 'We provide a wide range of services related to hair care with our well trained professionals to cater to all your needs. You can email or call us with any inquiries. Follow us on twitter @SalonSamadhi for more details. We are ready to serve you. Are you ready for a great new experience?', 'We provide a wide range of services related to hair care with our well trained professionals to cater to all your needs.', 'We provide a wide range of services related to hair care with our well trained professionals to cater to all your needs.');

-- --------------------------------------------------------

--
-- Structure for view `customer`
--
DROP TABLE IF EXISTS `customer`;

CREATE VIEW `customer`  AS  select `personals`.`reg_id` AS `reg_id`,`personals`.`name` AS `name`,`personals`.`address` AS `address`,`personals`.`email` AS `email`,`personals`.`nic` AS `nic`,`personals`.`city` AS `city`,`personals`.`phone1` AS `phone1`,`personals`.`created_at` AS `created_at`,`personals`.`updated_at` AS `updated_at` from `personals` where (not(`personals`.`email` in (select `users`.`email` from `users`))) ;

-- --------------------------------------------------------

--
-- Structure for view `owners`
--
DROP TABLE IF EXISTS `owners`;

CREATE VIEW `owners`  AS  select `personals`.`reg_id` AS `reg_id`,`personals`.`name` AS `name`,`personals`.`address` AS `address`,`personals`.`email` AS `email`,`personals`.`nic` AS `nic`,`personals`.`city` AS `city`,`personals`.`phone1` AS `phone1`,`personals`.`created_at` AS `created_at`,`personals`.`updated_at` AS `updated_at` from `personals` where `personals`.`email` in (select `users`.`email` from `users` where (`users`.`user_role` = 'S_Owner')) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `ad_images`
--
ALTER TABLE `ad_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `appointments_salon_id_foreign` (`salon_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `comments_salon_id_foreign` (`salon_id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_services`
--
ALTER TABLE `main_services`
  ADD PRIMARY KEY (`main_service_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `open_close_time`
--
ALTER TABLE `open_close_time`
  ADD PRIMARY KEY (`id`),
  ADD KEY `open_time` (`salon_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personals`
--
ALTER TABLE `personals`
  ADD PRIMARY KEY (`reg_id`),
  ADD UNIQUE KEY `personals_email_unique` (`email`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_type_R` (`product_type_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`product_type_id`);

--
-- Indexes for table `salon_owners`
--
ALTER TABLE `salon_owners`
  ADD PRIMARY KEY (`salon_id`),
  ADD KEY `salon_owners_reg_id_foreign` (`reg_id`);

--
-- Indexes for table `salon_product`
--
ALTER TABLE `salon_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_salon` (`product_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `sub_service_id` (`sub_service_id`);

--
-- Indexes for table `sowner_gallery`
--
ALTER TABLE `sowner_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `SCoverPhoto` (`salon_id`);

--
-- Indexes for table `sowner_service`
--
ALTER TABLE `sowner_service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `s_owner_service_salon` (`salon_id`),
  ADD KEY `salon_services` (`service_id`);

--
-- Indexes for table `sub_services`
--
ALTER TABLE `sub_services`
  ADD PRIMARY KEY (`sub_service_id`),
  ADD KEY `main_service_id` (`main_service_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vision_details`
--
ALTER TABLE `vision_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sowner_vision` (`salon_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_images`
--
ALTER TABLE `ad_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_services`
--
ALTER TABLE `main_services`
  MODIFY `main_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `open_close_time`
--
ALTER TABLE `open_close_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `product_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salon_product`
--
ALTER TABLE `salon_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sowner_gallery`
--
ALTER TABLE `sowner_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `sowner_service`
--
ALTER TABLE `sowner_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `sub_services`
--
ALTER TABLE `sub_services`
  MODIFY `sub_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `vision_details`
--
ALTER TABLE `vision_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_salon_id_foreign` FOREIGN KEY (`salon_id`) REFERENCES `salon_owners` (`salon_id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_salon_id_foreign` FOREIGN KEY (`salon_id`) REFERENCES `salon_owners` (`salon_id`);

--
-- Constraints for table `open_close_time`
--
ALTER TABLE `open_close_time`
  ADD CONSTRAINT `open_time` FOREIGN KEY (`salon_id`) REFERENCES `salon_owners` (`salon_id`);

--
-- Constraints for table `product_list`
--
ALTER TABLE `product_list`
  ADD CONSTRAINT `product_type_R` FOREIGN KEY (`product_type_id`) REFERENCES `product_type` (`product_type_id`);

--
-- Constraints for table `salon_owners`
--
ALTER TABLE `salon_owners`
  ADD CONSTRAINT `salon_owners_reg_id_foreign` FOREIGN KEY (`reg_id`) REFERENCES `personals` (`reg_id`);

--
-- Constraints for table `salon_product`
--
ALTER TABLE `salon_product`
  ADD CONSTRAINT `product_salon` FOREIGN KEY (`product_id`) REFERENCES `product_list` (`product_id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`sub_service_id`) REFERENCES `sub_services` (`sub_service_id`);

--
-- Constraints for table `sowner_gallery`
--
ALTER TABLE `sowner_gallery`
  ADD CONSTRAINT `SCoverPhoto` FOREIGN KEY (`salon_id`) REFERENCES `salon_owners` (`salon_id`);

--
-- Constraints for table `sowner_service`
--
ALTER TABLE `sowner_service`
  ADD CONSTRAINT `salon_services` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`);

--
-- Constraints for table `sub_services`
--
ALTER TABLE `sub_services`
  ADD CONSTRAINT `sub_services_ibfk_1` FOREIGN KEY (`main_service_id`) REFERENCES `main_services` (`main_service_id`);

--
-- Constraints for table `vision_details`
--
ALTER TABLE `vision_details`
  ADD CONSTRAINT `sowner_vision` FOREIGN KEY (`salon_id`) REFERENCES `salon_owners` (`salon_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
