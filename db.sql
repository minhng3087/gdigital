-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 11:25 AM
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
-- Database: `m`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `career` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `district` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `code_phone` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `display` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `title`, `type`, `phone`, `content`, `address`, `career`, `city`, `district`, `country`, `code_phone`, `status`, `display`, `created_at`, `updated_at`) VALUES
(58, 'Minh Nguyễn Gia', 'admin@gmail.com', NULL, 1, '0327800380', 'ádasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2021-01-27 15:30:15', '2021-01-27 08:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `mskh` int(10) NOT NULL,
  `name` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`mskh`, `name`, `email`, `phone`, `created_at`, `updated_at`, `status`) VALUES
(1000, 'dbdferter123', 'dfgsd', 'sdfsg', '2021-01-28 08:56:01', '2021-01-28 01:56:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(5) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` int(5) DEFAULT NULL,
  `amount` int(5) DEFAULT NULL,
  `period` int(3) DEFAULT NULL,
  `day_action` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `name`, `position`, `amount`, `period`, `day_action`, `created_at`, `updated_at`, `customer_id`) VALUES
(1, 'dfasd', 1, 1, 5, '2021-01-22', '2021-01-28 10:10:49', '2021-01-28 03:10:49', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `lienket`
--

CREATE TABLE `lienket` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `name2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `display` int(1) DEFAULT 0,
  `photo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `noibat` int(11) NOT NULL DEFAULT 0,
  `stt` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lienket`
--

INSERT INTO `lienket` (`id`, `user_id`, `name`, `name2`, `link`, `display`, `photo`, `mota`, `content`, `status`, `noibat`, `stt`, `created_at`, `updated_at`) VALUES
(9, 5, '10', NULL, 'https://www.google.com/', 0, '1611644009_brand-01.png', NULL, NULL, 1, 0, 5, '2021-01-26 06:53:45', '2021-01-25 23:53:45'),
(10, 5, '11', NULL, 'https://www.google.com/', 0, '1611644042_brand-04.png', NULL, NULL, 1, 0, 2, '2021-01-26 06:54:02', '2021-01-25 23:54:02'),
(11, 5, '3', NULL, 'https://www.google.com/', 0, '1611644059_brand-05.png', NULL, NULL, 1, 0, 3, '2021-01-26 06:54:19', '2021-01-25 23:54:19'),
(12, 5, '#', NULL, 'https://www.google.com/', 0, '1611644073_brand-01.png', NULL, NULL, 1, 0, 4, '2021-01-26 06:54:33', '2021-01-25 23:54:33'),
(13, 5, '5', NULL, 'https://www.google.com/', 0, '1611644085_brand-04.png', NULL, NULL, 1, 0, 5, '2021-01-26 06:54:45', '2021-01-25 23:54:45'),
(14, 5, '7', NULL, 'https://www.google.com/', 0, '1611644098_brand-03.png', NULL, NULL, 1, 0, 6, '2021-01-26 06:54:58', '2021-01-25 23:54:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_06_05_042524_create_products_table', 1),
('2017_06_05_045215_create_images_table', 1),
('2017_06_07_033057_create_news_categories_table', 1),
('2017_06_07_033135_create_news_table', 1),
('2017_06_07_033425_create_setting_table', 1),
('2017_06_07_033619_create_pages_table', 1),
('2017_06_07_033944_create_contact_table', 1),
('2017_06_07_034012_create_footer_table', 1),
('2017_06_07_034035_create_slider_table', 1),
('2017_06_07_034117_create_useronline_table', 1),
('2017_06_07_034335_create_order_table', 1),
('2017_06_07_034407_create_order_detail_table', 1),
('2017_06_07_034448_create_newsletter_table', 1),
('2017_06_07_034655_create_order_status_table', 1),
('2017_06_07_064339_create_counter_table', 1),
('2017_06_07_070934_create_partner_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `cate_id` int(3) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_eg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota_eg` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_eg` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `title` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_eg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_eg` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `com` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `stt` int(11) DEFAULT NULL,
  `types` int(1) DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `cate_id`, `user_id`, `name`, `name_eg`, `alias`, `photo`, `mota`, `content`, `mota_eg`, `content_eg`, `status`, `title`, `description`, `title_eg`, `description_eg`, `com`, `created_at`, `updated_at`, `stt`, `types`, `link`) VALUES
(8, 0, 5, '123456', NULL, '123456', '1611541808_lay ten ngay.PNG', '132456', '<p>132456</p>', NULL, NULL, 1, NULL, NULL, NULL, NULL, 'tin-tuc', '2021-01-25 02:38:00', '2021-01-24 19:38:00', 2, NULL, NULL),
(9, 1, 5, '789', NULL, '789', '1611542302_Capture1.PNG', '789', '<p>789</p>', NULL, NULL, 1, NULL, NULL, NULL, NULL, 'gioi-thieu', '2021-01-27 12:43:00', '2021-01-24 19:38:22', 1, 1, NULL),
(10, 0, 5, '654', NULL, '654', '1611597311_banner-02.jpg', '65431', '<p>65313</p>', NULL, NULL, 1, NULL, NULL, NULL, NULL, 'tin-tuc', '2021-01-25 10:55:11', '2021-01-25 10:55:11', 1, NULL, NULL),
(11, 1, 5, 'Ve chung toi', NULL, 've-chung-toi', '1611597391_bg-03.jpg', '123456789', '<p>456789789</p>', NULL, NULL, 1, NULL, NULL, NULL, NULL, 'gioi-thieu', '2021-01-27 12:51:36', '2021-01-25 10:56:31', 1, 0, 'https://www.youtube.com/embed/MfHkrsUAMZc'),
(12, 1, 5, '123456', NULL, '123456', '1611751666_bg-02.jpg', '4578977', '<p>37738783</p>', NULL, NULL, 1, NULL, NULL, NULL, NULL, 'gioi-thieu', '2021-01-27 05:47:46', '2021-01-27 05:47:46', 1, 2, NULL),
(13, 1, 5, 'qwer', NULL, 'qwer', '', 'qwer', '<p>qwer</p>', NULL, NULL, 1, NULL, NULL, NULL, NULL, 'gioi-thieu', '2021-01-27 06:47:45', '2021-01-27 06:47:45', 1, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `cate_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `relationship` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `photo` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `mota` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) UNSIGNED DEFAULT 1,
  `title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hot` tinyint(1) DEFAULT NULL,
  `tinhtrang` int(1) DEFAULT NULL,
  `stt` int(11) DEFAULT 0,
  `com` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `noibat` tinyint(1) DEFAULT NULL,
  `photo1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cate_id`, `relationship`, `name`, `alias`, `photo`, `user_id`, `mota`, `link`, `content`, `updated_at`, `created_at`, `status`, `title`, `keyword`, `description`, `hot`, `tinhtrang`, `stt`, `com`, `noibat`, `photo1`, `photo2`, `photo3`, `photo4`) VALUES
(5, '0', NULL, '123', '123', '1611594250_giohoangdao.PNG', NULL, '123', NULL, '<p>123</p>', '2021-01-27', '2021-01-27 09:34:21', 1, NULL, NULL, NULL, 1, NULL, 1, 'san-pham', 0, '1611594250_giohoangdao.PNG', '1611594250_giohoangdao.PNG', '1611594250_giohoangdao.PNG', ''),
(6, '0', NULL, '456', '456', '1611594276_Capture1.PNG', NULL, '456', NULL, '<p>456</p>', '2021-01-27', '2021-01-27 09:34:11', 1, NULL, NULL, NULL, 1, NULL, 2, 'san-pham', 1, '1611594276_Capture1.PNG', '1611594276_Capture1.PNG', '1611594276_Capture1.PNG', ''),
(7, '1', NULL, '123456', '123456', '1611595057_Capture.PNG', NULL, '123456', NULL, '<p>123456</p>', '2021-01-25', '2021-01-27 10:19:34', 1, NULL, NULL, NULL, NULL, NULL, 1, 'dich-vu', 1, '1611595057_Capture.PNG', '1611595057_Capture.PNG', '1611595057_Capture.PNG', ''),
(8, '1', NULL, '987654', '987654', '1611595470_giohoangdao.PNG', NULL, '987654', NULL, '<p>987654</p>', '2021-01-25', '2021-01-27 10:13:37', 1, NULL, NULL, NULL, NULL, NULL, 2, 'dich-vu', 1, '1611595470_giohoangdao.PNG', '1611595470_giohoangdao.PNG', '1611595470_giohoangdao.PNG', ''),
(9, '0', NULL, '123456', '123456', '1611740009_sp-01.jpg', NULL, '123456', NULL, '<p>456789</p>', '2021-01-27', '2021-01-27 09:34:20', 1, NULL, NULL, NULL, 1, NULL, 3, 'san-pham', 1, '1611740009_sp-01.jpg', '1611740009_sp-01.jpg', '1611740009_sp-01.jpg', ''),
(10, '1', NULL, '123456', '123456', '1611740113_post-01.jpg', NULL, '123456798', NULL, '<p>12345679</p>', '2021-01-27', '2021-01-27 10:19:38', 1, NULL, NULL, NULL, 1, NULL, 3, 'dich-vu', 0, '1611740113_post-01.jpg', '1611740113_post-01.jpg', '1611740113_post-01.jpg', ''),
(11, '0', NULL, 'đág', 'dag', '1611744480_sp-01.jpg', NULL, '45645', NULL, '<p>4564</p>', '2021-01-27', '2021-01-27 03:48:00', 1, NULL, NULL, NULL, NULL, NULL, 4, 'san-pham', NULL, '1611744480_banner-05.jpg', '1611744480_banner-05.jpg', '1611744480_banner-05.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `codemail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_eg` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_uae` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_tai` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_ja` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_eg` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_uae` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_tai` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_ja` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` int(11) NOT NULL DEFAULT 0,
  `company` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `career` int(11) NOT NULL DEFAULT 0,
  `chucvu` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `quymo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `timework` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `document` text CHARACTER SET utf8 DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `note` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` int(11) NOT NULL DEFAULT 0,
  `district` int(11) NOT NULL DEFAULT 0,
  `photo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `view` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `name`, `email`, `phone`, `address`, `codemail`, `address_eg`, `address_uae`, `address_tai`, `address_ja`, `content`, `content_eg`, `content_uae`, `content_tai`, `content_ja`, `code`, `country`, `gender`, `company`, `career`, `chucvu`, `quymo`, `timework`, `document`, `birthday`, `note`, `city`, `district`, `photo`, `status`, `view`, `created_at`, `updated_at`) VALUES
(13, 0, 'Trần Đức Tuấn', 'nguyenvana@gmail.com', '1627888906', '25 Quang Trung, Hà Đông, HN', NULL, NULL, NULL, NULL, NULL, '<p>Mục ti&ecirc;u c&ocirc;ng việc Với kinh nghiệm 9 năm trong Ng&agrave;nh h&agrave;ng Ti&ecirc;u d&ugrave;ng v&agrave; Thực phẩm tr&ecirc;n 2 k&ecirc;nh KA v&agrave; GT, nguyện vọng của t&ocirc;i l&agrave; được l&agrave;m việc với vị tr&iacute; Trưởng v&ugrave;ng Miền Trung ở một c&ocirc;ng ty chuy&ecirc;n nghiệp v&agrave; năng động, th&uacute;c đẩy c&ocirc;ng việc kinh doanh g&oacute;p phần ph&aacute;t triển cho th&agrave;nh c&ocirc;ng của c&ocirc;ng ty,... Bằng cấp - Chứng chỉ Cử nh&acirc;n Phi&ecirc;n dịch tiếng Anh, tiếng H&agrave;n Quốc Đơn vị đ&agrave;o tạo: Đại học Ngoại ngữ - Đại học Qu&ocirc;́c gia Hà N&ocirc;̣i Thời gian: Từ th&aacute;ng 09/1999 đến 06/2002 Chuy&ecirc;n ng&agrave;nh: Phi&ecirc;n dịch ti&ecirc;́ng Anh, ti&ecirc;́ng Hàn Qu&ocirc;́c Loại tốt nghiệp: Kh&aacute;</p>', NULL, NULL, NULL, NULL, '(+84)', 'eg', 1, NULL, 9, NULL, NULL, NULL, '1525231334_Mẫu thông tin tích hợp.docx', '2018-05-20', NULL, 10, 40, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-03 08:02:55', '2018-05-01 20:22:14'),
(14, 0, 'Tuấn Linh', 'nguyenb@gmail.com', '098566363', '25 Quang Trung, Hà Đông, HN', NULL, NULL, '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', '<p>Mục ti&ecirc;u c&ocirc;ng việc Với kinh nghiệm 9 năm trong Ng&agrave;nh h&agrave;ng Ti&ecirc;u d&ugrave;ng v&agrave; Thực phẩm tr&ecirc;n 2 k&ecirc;nh KA v&agrave; GT, nguyện vọng của t&ocirc;i l&agrave; được l&agrave;m việc với vị tr&iacute; Trưởng v&ugrave;ng Miền Trung ở một c&ocirc;ng ty chuy&ecirc;n nghiệp v&agrave; năng động, th&uacute;c đẩy c&ocirc;ng việc kinh doanh g&oacute;p phần ph&aacute;t triển cho th&agrave;nh c&ocirc;ng của c&ocirc;ng ty,... Bằng cấp - Chứng chỉ Cử nh&acirc;n Phi&ecirc;n dịch tiếng Anh, tiếng H&agrave;n Quốc Đơn vị đ&agrave;o tạo: Đại học Ngoại ngữ - Đại học Qu&ocirc;́c gia Hà N&ocirc;̣i Thời gian: Từ th&aacute;ng 09/1999 đến 06/2002 Chuy&ecirc;n ng&agrave;nh: Phi&ecirc;n dịch ti&ecirc;́ng Anh, ti&ecirc;́ng Hàn Qu&ocirc;́c Loại tốt nghiệp: Kh&aacute;</p>', NULL, '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '(+84)', 'eg', 2, NULL, 7, NULL, NULL, NULL, '1525231709_Mẫu thông tin tích hợp.docx', '2018-05-16', NULL, 7, 18, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-03 07:32:41', '2018-05-02 19:50:03'),
(16, 11, 'Trần Đức Long', 'nguyenc@gmail.com', '1627888906', '25 Quang Trung, Hà Đông, HN', NULL, NULL, NULL, NULL, NULL, '<p>Mục ti&ecirc;u c&ocirc;ng việc Với kinh nghiệm 9 năm trong Ng&agrave;nh h&agrave;ng Ti&ecirc;u d&ugrave;ng v&agrave; Thực phẩm tr&ecirc;n 2 k&ecirc;nh KA v&agrave; GT, nguyện vọng của t&ocirc;i l&agrave; được l&agrave;m việc với vị tr&iacute; Trưởng v&ugrave;ng Miền Trung ở một c&ocirc;ng ty chuy&ecirc;n nghiệp v&agrave; năng động, th&uacute;c đẩy c&ocirc;ng việc kinh doanh g&oacute;p phần ph&aacute;t triển cho th&agrave;nh c&ocirc;ng của c&ocirc;ng ty,... Bằng cấp - Chứng chỉ Cử nh&acirc;n Phi&ecirc;n dịch tiếng Anh, tiếng H&agrave;n Quốc Đơn vị đ&agrave;o tạo: Đại học Ngoại ngữ - Đại học Qu&ocirc;́c gia Hà N&ocirc;̣i Thời gian: Từ th&aacute;ng 09/1999 đến 06/2002 Chuy&ecirc;n ng&agrave;nh: Phi&ecirc;n dịch ti&ecirc;́ng Anh, ti&ecirc;́ng Hàn Qu&ocirc;́c Loại tốt nghiệp: Kh&aacute;</p>', NULL, NULL, NULL, NULL, '(+84)', 'eg', 1, NULL, 9, NULL, NULL, NULL, '1525231334_Mẫu thông tin tích hợp.docx', '2018-05-16', NULL, 10, 40, '1525232891_IMG_3133.jpg', 1, 23, '2018-05-03 08:18:13', '2018-05-03 01:18:13'),
(17, 11, 'Hải Dung', 'nguyend@gmail.com', '098566363', '25 Quang Trung, Hà Đông, HN', NULL, NULL, '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', 'Mục tiêu công việc\nVới kinh nghiệm 9 năm trong Ngành hàng Tiêu dùng và Thực phẩm trên 2 kênh KA và GT, nguyện vọng của tôi là được làm việc với vị trí Trưởng vùng Miền Trung ở một công ty chuyên nghiệp và năng động, thúc đẩy công việc kinh doanh góp phần phát triển cho thành công của công ty,...\n\nBằng cấp - Chứng chỉ\nCử nhân Phiên dịch tiếng Anh, tiếng Hàn Quốc\n\nĐơn vị đào tạo: Đại học Ngoại ngữ - Đại học Quốc gia Hà Nội\nThời gian: Từ tháng 09/1999 đến 06/2002\nChuyên ngành: Phiên dịch tiếng Anh, tiếng Hàn Quốc\nLoại tốt nghiệp: Khá', NULL, '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '(+84)', 'eg', 2, NULL, 3, NULL, NULL, NULL, '1525231709_Mẫu thông tin tích hợp.docx', '2018-05-16', NULL, 7, 18, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-03 07:32:53', '2018-05-01 13:28:29'),
(18, 11, 'Trần Đức Vân', 'nguyene@gmail.com', '1627888906', '25 Quang Trung, Hà Đông, HN', NULL, NULL, NULL, NULL, NULL, '<p>Mục ti&ecirc;u c&ocirc;ng việc Với kinh nghiệm 9 năm trong Ng&agrave;nh h&agrave;ng Ti&ecirc;u d&ugrave;ng v&agrave; Thực phẩm tr&ecirc;n 2 k&ecirc;nh KA v&agrave; GT, nguyện vọng của t&ocirc;i l&agrave; được l&agrave;m việc với vị tr&iacute; Trưởng v&ugrave;ng Miền Trung ở một c&ocirc;ng ty chuy&ecirc;n nghiệp v&agrave; năng động, th&uacute;c đẩy c&ocirc;ng việc kinh doanh g&oacute;p phần ph&aacute;t triển cho th&agrave;nh c&ocirc;ng của c&ocirc;ng ty,... Bằng cấp - Chứng chỉ Cử nh&acirc;n Phi&ecirc;n dịch tiếng Anh, tiếng H&agrave;n Quốc Đơn vị đ&agrave;o tạo: Đại học Ngoại ngữ - Đại học Qu&ocirc;́c gia Hà N&ocirc;̣i Thời gian: Từ th&aacute;ng 09/1999 đến 06/2002 Chuy&ecirc;n ng&agrave;nh: Phi&ecirc;n dịch ti&ecirc;́ng Anh, ti&ecirc;́ng Hàn Qu&ocirc;́c Loại tốt nghiệp: Kh&aacute;</p>', NULL, NULL, NULL, NULL, '(+84)', 'eg', 1, NULL, 9, NULL, NULL, NULL, '1525231334_Mẫu thông tin tích hợp.docx', '2018-05-16', NULL, 10, 40, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-03 08:02:42', '2018-05-01 13:22:14'),
(19, 11, 'Hải Dung', 'nguyenvan@gmail.com', '098566363', '25 Quang Trung, Hà Đông, HN', NULL, NULL, '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', 'Mục tiêu công việc\nVới kinh nghiệm 9 năm trong Ngành hàng Tiêu dùng và Thực phẩm trên 2 kênh KA và GT, nguyện vọng của tôi là được làm việc với vị trí Trưởng vùng Miền Trung ở một công ty chuyên nghiệp và năng động, thúc đẩy công việc kinh doanh góp phần phát triển cho thành công của công ty,...\n\nBằng cấp - Chứng chỉ\nCử nhân Phiên dịch tiếng Anh, tiếng Hàn Quốc\n\nĐơn vị đào tạo: Đại học Ngoại ngữ - Đại học Quốc gia Hà Nội\nThời gian: Từ tháng 09/1999 đến 06/2002\nChuyên ngành: Phiên dịch tiếng Anh, tiếng Hàn Quốc\nLoại tốt nghiệp: Khá', NULL, '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '(+84)', 'eg', 2, NULL, 3, NULL, NULL, NULL, '1525231709_Mẫu thông tin tích hợp.docx', '2018-05-16', NULL, 7, 18, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-03 07:33:07', '2018-05-01 13:28:29'),
(20, 11, 'Trần Đức Hải', 'khanhly@gmail.com', '1627888906', '25 Quang Trung, Hà Đông, HN', NULL, NULL, NULL, NULL, NULL, '<p>Mục ti&ecirc;u c&ocirc;ng việc Với kinh nghiệm 9 năm trong Ng&agrave;nh h&agrave;ng Ti&ecirc;u d&ugrave;ng v&agrave; Thực phẩm tr&ecirc;n 2 k&ecirc;nh KA v&agrave; GT, nguyện vọng của t&ocirc;i l&agrave; được l&agrave;m việc với vị tr&iacute; Trưởng v&ugrave;ng Miền Trung ở một c&ocirc;ng ty chuy&ecirc;n nghiệp v&agrave; năng động, th&uacute;c đẩy c&ocirc;ng việc kinh doanh g&oacute;p phần ph&aacute;t triển cho th&agrave;nh c&ocirc;ng của c&ocirc;ng ty,... Bằng cấp - Chứng chỉ Cử nh&acirc;n Phi&ecirc;n dịch tiếng Anh, tiếng H&agrave;n Quốc Đơn vị đ&agrave;o tạo: Đại học Ngoại ngữ - Đại học Qu&ocirc;́c gia Hà N&ocirc;̣i Thời gian: Từ th&aacute;ng 09/1999 đến 06/2002 Chuy&ecirc;n ng&agrave;nh: Phi&ecirc;n dịch ti&ecirc;́ng Anh, ti&ecirc;́ng Hàn Qu&ocirc;́c Loại tốt nghiệp: Kh&aacute;</p>', NULL, NULL, NULL, NULL, '(+84)', 'eg', 1, NULL, 9, NULL, NULL, NULL, '1525231334_Mẫu thông tin tích hợp.docx', '2018-05-16', NULL, 10, 40, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-03 08:02:50', '2018-05-01 13:22:14'),
(21, 11, 'Hải Dung', 'nhatlinh@gmail.com', '098566363', '25 Quang Trung, Hà Đông, HN', NULL, NULL, '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', 'Mục tiêu công việc\nVới kinh nghiệm 9 năm trong Ngành hàng Tiêu dùng và Thực phẩm trên 2 kênh KA và GT, nguyện vọng của tôi là được làm việc với vị trí Trưởng vùng Miền Trung ở một công ty chuyên nghiệp và năng động, thúc đẩy công việc kinh doanh góp phần phát triển cho thành công của công ty,...\n\nBằng cấp - Chứng chỉ\nCử nhân Phiên dịch tiếng Anh, tiếng Hàn Quốc\n\nĐơn vị đào tạo: Đại học Ngoại ngữ - Đại học Quốc gia Hà Nội\nThời gian: Từ tháng 09/1999 đến 06/2002\nChuyên ngành: Phiên dịch tiếng Anh, tiếng Hàn Quốc\nLoại tốt nghiệp: Khá', NULL, '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '(+84)', 'eg', 2, NULL, 3, NULL, NULL, NULL, '1525231709_Mẫu thông tin tích hợp.docx', '2018-05-19', NULL, 7, 18, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-03 07:33:18', '2018-05-01 13:28:29'),
(22, 11, 'Trần Đức Việt', 'khanhthi@gmail.com', '1627888906', '25 Quang Trung, Hà Đông, HN', NULL, NULL, NULL, NULL, NULL, '<p>Mục ti&ecirc;u c&ocirc;ng việc Với kinh nghiệm 9 năm trong Ng&agrave;nh h&agrave;ng Ti&ecirc;u d&ugrave;ng v&agrave; Thực phẩm tr&ecirc;n 2 k&ecirc;nh KA v&agrave; GT, nguyện vọng của t&ocirc;i l&agrave; được l&agrave;m việc với vị tr&iacute; Trưởng v&ugrave;ng Miền Trung ở một c&ocirc;ng ty chuy&ecirc;n nghiệp v&agrave; năng động, th&uacute;c đẩy c&ocirc;ng việc kinh doanh g&oacute;p phần ph&aacute;t triển cho th&agrave;nh c&ocirc;ng của c&ocirc;ng ty,... Bằng cấp - Chứng chỉ Cử nh&acirc;n Phi&ecirc;n dịch tiếng Anh, tiếng H&agrave;n Quốc Đơn vị đ&agrave;o tạo: Đại học Ngoại ngữ - Đại học Qu&ocirc;́c gia Hà N&ocirc;̣i Thời gian: Từ th&aacute;ng 09/1999 đến 06/2002 Chuy&ecirc;n ng&agrave;nh: Phi&ecirc;n dịch ti&ecirc;́ng Anh, ti&ecirc;́ng Hàn Qu&ocirc;́c Loại tốt nghiệp: Kh&aacute;</p>', NULL, NULL, NULL, NULL, '(+84)', 'eg', 1, NULL, 9, NULL, NULL, NULL, '1525231334_Mẫu thông tin tích hợp.docx', '2018-05-18', NULL, 10, 40, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-03 07:33:22', '2018-05-01 13:22:14'),
(23, 11, 'Hải Dung', 'hailinh@gmail.com', '098566363', '25 Quang Trung, Hà Đông, HN', NULL, NULL, '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', 'Mục tiêu công việc\nVới kinh nghiệm 9 năm trong Ngành hàng Tiêu dùng và Thực phẩm trên 2 kênh KA và GT, nguyện vọng của tôi là được làm việc với vị trí Trưởng vùng Miền Trung ở một công ty chuyên nghiệp và năng động, thúc đẩy công việc kinh doanh góp phần phát triển cho thành công của công ty,...\n\nBằng cấp - Chứng chỉ\nCử nhân Phiên dịch tiếng Anh, tiếng Hàn Quốc\n\nĐơn vị đào tạo: Đại học Ngoại ngữ - Đại học Quốc gia Hà Nội\nThời gian: Từ tháng 09/1999 đến 06/2002\nChuyên ngành: Phiên dịch tiếng Anh, tiếng Hàn Quốc\nLoại tốt nghiệp: Khá', NULL, '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '(+84)', 'eg', 2, NULL, 3, NULL, NULL, NULL, '1525231709_Mẫu thông tin tích hợp.docx', '2018-05-16', NULL, 7, 18, '1525232891_IMG_3133.jpg', 1, 2, '2018-05-05 02:32:27', '2018-05-04 19:32:27'),
(24, 11, 'Trần Đức Việt', 'nhatcuong@gmail.com', '1627888906', '25 Quang Trung, Hà Đông, HN', NULL, NULL, NULL, NULL, NULL, '<p>Mục ti&ecirc;u c&ocirc;ng việc Với kinh nghiệm 9 năm trong Ng&agrave;nh h&agrave;ng Ti&ecirc;u d&ugrave;ng v&agrave; Thực phẩm tr&ecirc;n 2 k&ecirc;nh KA v&agrave; GT, nguyện vọng của t&ocirc;i l&agrave; được l&agrave;m việc với vị tr&iacute; Trưởng v&ugrave;ng Miền Trung ở một c&ocirc;ng ty chuy&ecirc;n nghiệp v&agrave; năng động, th&uacute;c đẩy c&ocirc;ng việc kinh doanh g&oacute;p phần ph&aacute;t triển cho th&agrave;nh c&ocirc;ng của c&ocirc;ng ty,... Bằng cấp - Chứng chỉ Cử nh&acirc;n Phi&ecirc;n dịch tiếng Anh, tiếng H&agrave;n Quốc Đơn vị đ&agrave;o tạo: Đại học Ngoại ngữ - Đại học Qu&ocirc;́c gia Hà N&ocirc;̣i Thời gian: Từ th&aacute;ng 09/1999 đến 06/2002 Chuy&ecirc;n ng&agrave;nh: Phi&ecirc;n dịch ti&ecirc;́ng Anh, ti&ecirc;́ng Hàn Qu&ocirc;́c Loại tốt nghiệp: Kh&aacute;</p>', NULL, NULL, NULL, NULL, '(+84)', 'eg', 1, NULL, 9, NULL, NULL, NULL, '1525231334_Mẫu thông tin tích hợp.docx', '2018-05-16', NULL, 10, 40, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-03 07:33:33', '2018-05-01 13:22:14'),
(25, 11, 'Hải Dung', 'trungthanh@gmail.com', '098566363', '25 Quang Trung, Hà Đông, HN', NULL, NULL, '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', 'Mục tiêu công việc\nVới kinh nghiệm 9 năm trong Ngành hàng Tiêu dùng và Thực phẩm trên 2 kênh KA và GT, nguyện vọng của tôi là được làm việc với vị trí Trưởng vùng Miền Trung ở một công ty chuyên nghiệp và năng động, thúc đẩy công việc kinh doanh góp phần phát triển cho thành công của công ty,...\n\nBằng cấp - Chứng chỉ\nCử nhân Phiên dịch tiếng Anh, tiếng Hàn Quốc\n\nĐơn vị đào tạo: Đại học Ngoại ngữ - Đại học Quốc gia Hà Nội\nThời gian: Từ tháng 09/1999 đến 06/2002\nChuyên ngành: Phiên dịch tiếng Anh, tiếng Hàn Quốc\nLoại tốt nghiệp: Khá', NULL, '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '(+84)', 'eg', 2, NULL, 3, NULL, NULL, NULL, '1525231709_Mẫu thông tin tích hợp.docx', '2018-05-16', NULL, 7, 18, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-03 07:33:41', '2018-05-01 13:28:29'),
(26, 11, 'Trần Đức Việt', 'khanhngoc@gmail.com', '1627888906', '25 Quang Trung, Hà Đông, HN', NULL, NULL, NULL, NULL, NULL, '<p>Mục ti&ecirc;u c&ocirc;ng việc Với kinh nghiệm 9 năm trong Ng&agrave;nh h&agrave;ng Ti&ecirc;u d&ugrave;ng v&agrave; Thực phẩm tr&ecirc;n 2 k&ecirc;nh KA v&agrave; GT, nguyện vọng của t&ocirc;i l&agrave; được l&agrave;m việc với vị tr&iacute; Trưởng v&ugrave;ng Miền Trung ở một c&ocirc;ng ty chuy&ecirc;n nghiệp v&agrave; năng động, th&uacute;c đẩy c&ocirc;ng việc kinh doanh g&oacute;p phần ph&aacute;t triển cho th&agrave;nh c&ocirc;ng của c&ocirc;ng ty,... Bằng cấp - Chứng chỉ Cử nh&acirc;n Phi&ecirc;n dịch tiếng Anh, tiếng H&agrave;n Quốc Đơn vị đ&agrave;o tạo: Đại học Ngoại ngữ - Đại học Qu&ocirc;́c gia Hà N&ocirc;̣i Thời gian: Từ th&aacute;ng 09/1999 đến 06/2002 Chuy&ecirc;n ng&agrave;nh: Phi&ecirc;n dịch ti&ecirc;́ng Anh, ti&ecirc;́ng Hàn Qu&ocirc;́c Loại tốt nghiệp: Kh&aacute;</p>', NULL, NULL, NULL, NULL, '(+84)', 'eg', 1, NULL, 9, NULL, NULL, NULL, '1525231334_Mẫu thông tin tích hợp.docx', '2018-05-22', NULL, 10, 40, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-03 07:33:45', '2018-05-01 13:22:14'),
(27, 11, 'Hải Dung', 'hoangminh@gmail.com', '098566363', '25 Quang Trung, Hà Đông, HN', NULL, NULL, '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', 'Mục tiêu công việc\nVới kinh nghiệm 9 năm trong Ngành hàng Tiêu dùng và Thực phẩm trên 2 kênh KA và GT, nguyện vọng của tôi là được làm việc với vị trí Trưởng vùng Miền Trung ở một công ty chuyên nghiệp và năng động, thúc đẩy công việc kinh doanh góp phần phát triển cho thành công của công ty,...\n\nBằng cấp - Chứng chỉ\nCử nhân Phiên dịch tiếng Anh, tiếng Hàn Quốc\n\nĐơn vị đào tạo: Đại học Ngoại ngữ - Đại học Quốc gia Hà Nội\nThời gian: Từ tháng 09/1999 đến 06/2002\nChuyên ngành: Phiên dịch tiếng Anh, tiếng Hàn Quốc\nLoại tốt nghiệp: Khá', NULL, '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '(+84)', 'eg', 2, NULL, 3, NULL, NULL, NULL, '1525231709_Mẫu thông tin tích hợp.docx', '2018-05-16', NULL, 7, 18, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-03 07:33:50', '2018-05-01 13:28:29'),
(28, 11, 'Trần Đức Nhân', 'linhlan@gmail.com', '1627888906', '25 Quang Trung, Hà Đông, HN', NULL, NULL, NULL, NULL, NULL, '<p>Mục ti&ecirc;u c&ocirc;ng việc Với kinh nghiệm 9 năm trong Ng&agrave;nh h&agrave;ng Ti&ecirc;u d&ugrave;ng v&agrave; Thực phẩm tr&ecirc;n 2 k&ecirc;nh KA v&agrave; GT, nguyện vọng của t&ocirc;i l&agrave; được l&agrave;m việc với vị tr&iacute; Trưởng v&ugrave;ng Miền Trung ở một c&ocirc;ng ty chuy&ecirc;n nghiệp v&agrave; năng động, th&uacute;c đẩy c&ocirc;ng việc kinh doanh g&oacute;p phần ph&aacute;t triển cho th&agrave;nh c&ocirc;ng của c&ocirc;ng ty,... Bằng cấp - Chứng chỉ Cử nh&acirc;n Phi&ecirc;n dịch tiếng Anh, tiếng H&agrave;n Quốc Đơn vị đ&agrave;o tạo: Đại học Ngoại ngữ - Đại học Qu&ocirc;́c gia Hà N&ocirc;̣i Thời gian: Từ th&aacute;ng 09/1999 đến 06/2002 Chuy&ecirc;n ng&agrave;nh: Phi&ecirc;n dịch ti&ecirc;́ng Anh, ti&ecirc;́ng Hàn Qu&ocirc;́c Loại tốt nghiệp: Kh&aacute;</p>', NULL, NULL, NULL, NULL, '(+84)', 'eg', 1, NULL, 9, NULL, NULL, NULL, '1525231334_Mẫu thông tin tích hợp.docx', '2018-03-18', NULL, 10, 40, '1525232891_IMG_3133.jpg', 1, 1, '2018-05-04 10:12:43', '2018-05-04 03:12:43'),
(29, 11, 'Hải Dung Nguyễn', 'cattuong@gmail.com', '098566363', '25 Quang Trung, Hà Đông, HN', NULL, NULL, '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', 'Mục tiêu công việc\nVới kinh nghiệm 9 năm trong Ngành hàng Tiêu dùng và Thực phẩm trên 2 kênh KA và GT, nguyện vọng của tôi là được làm việc với vị trí Trưởng vùng Miền Trung ở một công ty chuyên nghiệp và năng động, thúc đẩy công việc kinh doanh góp phần phát triển cho thành công của công ty,...\n\nBằng cấp - Chứng chỉ\nCử nhân Phiên dịch tiếng Anh, tiếng Hàn Quốc\n\nĐơn vị đào tạo: Đại học Ngoại ngữ - Đại học Quốc gia Hà Nội\nThời gian: Từ tháng 09/1999 đến 06/2002\nChuyên ngành: Phiên dịch tiếng Anh, tiếng Hàn Quốc\nLoại tốt nghiệp: Khá', NULL, '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '(+84)', 'eg', 2, NULL, 3, NULL, NULL, NULL, '1525231709_Mẫu thông tin tích hợp.docx', '2018-05-16', NULL, 7, 18, '1525232891_IMG_3133.jpg', 1, 4, '2018-05-03 08:57:49', '2018-05-03 01:57:49'),
(30, 11, 'Trần Đức Việt', 'bibo@gmail.com', '1627888906', '25 Quang Trung, Hà Đông, HN', NULL, NULL, NULL, NULL, NULL, '<p>Mục ti&ecirc;u c&ocirc;ng việc Với kinh nghiệm 9 năm trong Ng&agrave;nh h&agrave;ng Ti&ecirc;u d&ugrave;ng v&agrave; Thực phẩm tr&ecirc;n 2 k&ecirc;nh KA v&agrave; GT, nguyện vọng của t&ocirc;i l&agrave; được l&agrave;m việc với vị tr&iacute; Trưởng v&ugrave;ng Miền Trung ở một c&ocirc;ng ty chuy&ecirc;n nghiệp v&agrave; năng động, th&uacute;c đẩy c&ocirc;ng việc kinh doanh g&oacute;p phần ph&aacute;t triển cho th&agrave;nh c&ocirc;ng của c&ocirc;ng ty,... Bằng cấp - Chứng chỉ Cử nh&acirc;n Phi&ecirc;n dịch tiếng Anh, tiếng H&agrave;n Quốc Đơn vị đ&agrave;o tạo: Đại học Ngoại ngữ - Đại học Qu&ocirc;́c gia Hà N&ocirc;̣i Thời gian: Từ th&aacute;ng 09/1999 đến 06/2002 Chuy&ecirc;n ng&agrave;nh: Phi&ecirc;n dịch ti&ecirc;́ng Anh, ti&ecirc;́ng Hàn Qu&ocirc;́c Loại tốt nghiệp: Kh&aacute;</p>', NULL, NULL, NULL, NULL, '(+84)', 'eg', 1, NULL, 9, NULL, NULL, NULL, '1525231334_Mẫu thông tin tích hợp.docx', '2018-05-16', NULL, 10, 40, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-03 07:34:09', '2018-05-01 13:22:14'),
(31, 11, 'Hải Dung', 'vantoan@gmail.com', '098566363', '25 Quang Trung, Hà Đông, HN', NULL, NULL, '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', 'Mục tiêu công việc\nVới kinh nghiệm 9 năm trong Ngành hàng Tiêu dùng và Thực phẩm trên 2 kênh KA và GT, nguyện vọng của tôi là được làm việc với vị trí Trưởng vùng Miền Trung ở một công ty chuyên nghiệp và năng động, thúc đẩy công việc kinh doanh góp phần phát triển cho thành công của công ty,...\n\nBằng cấp - Chứng chỉ\nCử nhân Phiên dịch tiếng Anh, tiếng Hàn Quốc\n\nĐơn vị đào tạo: Đại học Ngoại ngữ - Đại học Quốc gia Hà Nội\nThời gian: Từ tháng 09/1999 đến 06/2002\nChuyên ngành: Phiên dịch tiếng Anh, tiếng Hàn Quốc\nLoại tốt nghiệp: Khá', NULL, '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '(+84)', 'eg', 2, NULL, 3, NULL, NULL, NULL, '1525231709_Mẫu thông tin tích hợp.docx', '2018-05-16', NULL, 7, 18, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-03 07:34:18', '2018-05-01 13:28:29'),
(32, 11, 'Nguyễn Hải', 'vantrung@gmail.com', '1627888906', '25 Quang Trung, Hà Đông, HN', NULL, NULL, NULL, NULL, NULL, '<p>Mục ti&ecirc;u c&ocirc;ng việc Với kinh nghiệm 9 năm trong Ng&agrave;nh h&agrave;ng Ti&ecirc;u d&ugrave;ng v&agrave; Thực phẩm tr&ecirc;n 2 k&ecirc;nh KA v&agrave; GT, nguyện vọng của t&ocirc;i l&agrave; được l&agrave;m việc với vị tr&iacute; Trưởng v&ugrave;ng Miền Trung ở một c&ocirc;ng ty chuy&ecirc;n nghiệp v&agrave; năng động, th&uacute;c đẩy c&ocirc;ng việc kinh doanh g&oacute;p phần ph&aacute;t triển cho th&agrave;nh c&ocirc;ng của c&ocirc;ng ty,... Bằng cấp - Chứng chỉ Cử nh&acirc;n Phi&ecirc;n dịch tiếng Anh, tiếng H&agrave;n Quốc Đơn vị đ&agrave;o tạo: Đại học Ngoại ngữ - Đại học Qu&ocirc;́c gia Hà N&ocirc;̣i Thời gian: Từ th&aacute;ng 09/1999 đến 06/2002 Chuy&ecirc;n ng&agrave;nh: Phi&ecirc;n dịch ti&ecirc;́ng Anh, ti&ecirc;́ng Hàn Qu&ocirc;́c Loại tốt nghiệp: Kh&aacute;</p>', NULL, NULL, NULL, NULL, '(+84)', 'eg', 1, NULL, 9, NULL, NULL, NULL, '1525231334_Mẫu thông tin tích hợp.docx', '2018-05-16', NULL, 10, 40, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-03 08:03:11', '2018-05-01 13:22:14'),
(33, 11, 'Hải Dung', 'khanh@gmail.com', '098566363', '25 Quang Trung, Hà Đông, HN', NULL, NULL, '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', 'Mục tiêu công việc\nVới kinh nghiệm 9 năm trong Ngành hàng Tiêu dùng và Thực phẩm trên 2 kênh KA và GT, nguyện vọng của tôi là được làm việc với vị trí Trưởng vùng Miền Trung ở một công ty chuyên nghiệp và năng động, thúc đẩy công việc kinh doanh góp phần phát triển cho thành công của công ty,...\n\nBằng cấp - Chứng chỉ\nCử nhân Phiên dịch tiếng Anh, tiếng Hàn Quốc\n\nĐơn vị đào tạo: Đại học Ngoại ngữ - Đại học Quốc gia Hà Nội\nThời gian: Từ tháng 09/1999 đến 06/2002\nChuyên ngành: Phiên dịch tiếng Anh, tiếng Hàn Quốc\nLoại tốt nghiệp: Khá', NULL, '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '(+84)', 'ja', 2, NULL, 3, NULL, NULL, NULL, '1525231709_Mẫu thông tin tích hợp.docx', '2018-05-16', NULL, 7, 18, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-04 08:56:05', '2018-05-01 13:28:29'),
(34, 11, 'Trần Đức Việt', 'viet@gmail.com', '1627888906', '25 Quang Trung, Hà Đông, HN', NULL, NULL, NULL, NULL, NULL, '<p>Mục ti&ecirc;u c&ocirc;ng việc Với kinh nghiệm 9 năm trong Ng&agrave;nh h&agrave;ng Ti&ecirc;u d&ugrave;ng v&agrave; Thực phẩm tr&ecirc;n 2 k&ecirc;nh KA v&agrave; GT, nguyện vọng của t&ocirc;i l&agrave; được l&agrave;m việc với vị tr&iacute; Trưởng v&ugrave;ng Miền Trung ở một c&ocirc;ng ty chuy&ecirc;n nghiệp v&agrave; năng động, th&uacute;c đẩy c&ocirc;ng việc kinh doanh g&oacute;p phần ph&aacute;t triển cho th&agrave;nh c&ocirc;ng của c&ocirc;ng ty,... Bằng cấp - Chứng chỉ Cử nh&acirc;n Phi&ecirc;n dịch tiếng Anh, tiếng H&agrave;n Quốc Đơn vị đ&agrave;o tạo: Đại học Ngoại ngữ - Đại học Qu&ocirc;́c gia Hà N&ocirc;̣i Thời gian: Từ th&aacute;ng 09/1999 đến 06/2002 Chuy&ecirc;n ng&agrave;nh: Phi&ecirc;n dịch ti&ecirc;́ng Anh, ti&ecirc;́ng Hàn Qu&ocirc;́c Loại tốt nghiệp: Kh&aacute;</p>', NULL, NULL, NULL, NULL, '(+84)', 'eg', 1, NULL, 9, NULL, NULL, NULL, '1525231334_Mẫu thông tin tích hợp.docx', '2018-05-16', NULL, 10, 40, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-03 07:34:28', '2018-05-01 13:22:14'),
(35, 11, 'Hải Dung', 'toan@gmail.com', '098566363', '25 Quang Trung, Hà Đông, HN', NULL, NULL, '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', 'Mục tiêu công việc\nVới kinh nghiệm 9 năm trong Ngành hàng Tiêu dùng và Thực phẩm trên 2 kênh KA và GT, nguyện vọng của tôi là được làm việc với vị trí Trưởng vùng Miền Trung ở một công ty chuyên nghiệp và năng động, thúc đẩy công việc kinh doanh góp phần phát triển cho thành công của công ty,...\n\nBằng cấp - Chứng chỉ\nCử nhân Phiên dịch tiếng Anh, tiếng Hàn Quốc\n\nĐơn vị đào tạo: Đại học Ngoại ngữ - Đại học Quốc gia Hà Nội\nThời gian: Từ tháng 09/1999 đến 06/2002\nChuyên ngành: Phiên dịch tiếng Anh, tiếng Hàn Quốc\nLoại tốt nghiệp: Khá', NULL, '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '(+84)', 'eg', 2, NULL, 3, NULL, NULL, NULL, '1525231709_Mẫu thông tin tích hợp.docx', '2018-05-16', NULL, 7, 18, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-03 07:34:32', '2018-05-01 13:28:29'),
(36, 11, 'Khánh Linh', 'linh@gmail.com', '1627888906', '25 Quang Trung, Hà Đông, HN', NULL, NULL, NULL, NULL, NULL, '<p>Mục ti&ecirc;u c&ocirc;ng việc Với kinh nghiệm 9 năm trong Ng&agrave;nh h&agrave;ng Ti&ecirc;u d&ugrave;ng v&agrave; Thực phẩm tr&ecirc;n 2 k&ecirc;nh KA v&agrave; GT, nguyện vọng của t&ocirc;i l&agrave; được l&agrave;m việc với vị tr&iacute; Trưởng v&ugrave;ng Miền Trung ở một c&ocirc;ng ty chuy&ecirc;n nghiệp v&agrave; năng động, th&uacute;c đẩy c&ocirc;ng việc kinh doanh g&oacute;p phần ph&aacute;t triển cho th&agrave;nh c&ocirc;ng của c&ocirc;ng ty,... Bằng cấp - Chứng chỉ Cử nh&acirc;n Phi&ecirc;n dịch tiếng Anh, tiếng H&agrave;n Quốc Đơn vị đ&agrave;o tạo: Đại học Ngoại ngữ - Đại học Qu&ocirc;́c gia Hà N&ocirc;̣i Thời gian: Từ th&aacute;ng 09/1999 đến 06/2002 Chuy&ecirc;n ng&agrave;nh: Phi&ecirc;n dịch ti&ecirc;́ng Anh, ti&ecirc;́ng Hàn Qu&ocirc;́c Loại tốt nghiệp: Kh&aacute;</p>', NULL, NULL, NULL, NULL, '(+84)', 'uae', 1, NULL, 9, NULL, NULL, NULL, '1525231334_Mẫu thông tin tích hợp.docx', '2018-05-16', NULL, 10, 40, '1525232891_IMG_3133.jpg', 1, 1, '2018-05-04 08:56:02', '2018-05-03 01:24:25'),
(37, 11, 'Hải Dung', NULL, '098566363', '25 Quang Trung, Hà Đông, HN', NULL, NULL, '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', '<p>Mục ti&ecirc;u c&ocirc;ng việc Với kinh nghiệm 9 năm trong Ng&agrave;nh h&agrave;ng Ti&ecirc;u d&ugrave;ng v&agrave; Thực phẩm tr&ecirc;n 2 k&ecirc;nh KA v&agrave; GT, nguyện vọng của t&ocirc;i l&agrave; được l&agrave;m việc với vị tr&iacute; Trưởng v&ugrave;ng Miền Trung ở một c&ocirc;ng ty chuy&ecirc;n nghiệp v&agrave; năng động, th&uacute;c đẩy c&ocirc;ng việc kinh doanh g&oacute;p phần ph&aacute;t triển cho th&agrave;nh c&ocirc;ng của c&ocirc;ng ty,... Bằng cấp - Chứng chỉ Cử nh&acirc;n Phi&ecirc;n dịch tiếng Anh, tiếng H&agrave;n Quốc Đơn vị đ&agrave;o tạo: Đại học Ngoại ngữ - Đại học Qu&ocirc;́c gia Hà N&ocirc;̣i Thời gian: Từ th&aacute;ng 09/1999 đến 06/2002 Chuy&ecirc;n ng&agrave;nh: Phi&ecirc;n dịch ti&ecirc;́ng Anh, ti&ecirc;́ng Hàn Qu&ocirc;́c Loại tốt nghiệp: Kh&aacute;</p>', NULL, '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '(+44)', 'tai', 2, NULL, 3, NULL, NULL, NULL, '1525231709_Mẫu thông tin tích hợp.docx', '2018-05-16', NULL, 7, 18, '1525428875_imagesjpg', 1, 2, '2018-05-04 10:14:35', '2018-05-04 03:14:35'),
(38, 11, 'Trần Đức Việt', 'lan@gmail.com', '1627888906', '25 Quang Trung, Hà Đông, HN', NULL, NULL, NULL, NULL, NULL, '<p>Mục ti&ecirc;u c&ocirc;ng việc Với kinh nghiệm 9 năm trong Ng&agrave;nh h&agrave;ng Ti&ecirc;u d&ugrave;ng v&agrave; Thực phẩm tr&ecirc;n 2 k&ecirc;nh KA v&agrave; GT, nguyện vọng của t&ocirc;i l&agrave; được l&agrave;m việc với vị tr&iacute; Trưởng v&ugrave;ng Miền Trung ở một c&ocirc;ng ty chuy&ecirc;n nghiệp v&agrave; năng động, th&uacute;c đẩy c&ocirc;ng việc kinh doanh g&oacute;p phần ph&aacute;t triển cho th&agrave;nh c&ocirc;ng của c&ocirc;ng ty,... Bằng cấp - Chứng chỉ Cử nh&acirc;n Phi&ecirc;n dịch tiếng Anh, tiếng H&agrave;n Quốc Đơn vị đ&agrave;o tạo: Đại học Ngoại ngữ - Đại học Qu&ocirc;́c gia Hà N&ocirc;̣i Thời gian: Từ th&aacute;ng 09/1999 đến 06/2002 Chuy&ecirc;n ng&agrave;nh: Phi&ecirc;n dịch ti&ecirc;́ng Anh, ti&ecirc;́ng Hàn Qu&ocirc;́c Loại tốt nghiệp: Kh&aacute;</p>', NULL, NULL, NULL, NULL, '(+84)', 'tai', 1, NULL, 9, NULL, NULL, NULL, '1525231334_Mẫu thông tin tích hợp.docx', '2018-05-19', NULL, 10, 40, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-04 08:56:24', '2018-05-01 13:22:14'),
(39, 11, 'Hải Dung', NULL, '098566363', '25 Quang Trung, Hà Đông, HN', NULL, NULL, '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', 'Mục tiêu công việc\nVới kinh nghiệm 9 năm trong Ngành hàng Tiêu dùng và Thực phẩm trên 2 kênh KA và GT, nguyện vọng của tôi là được làm việc với vị trí Trưởng vùng Miền Trung ở một công ty chuyên nghiệp và năng động, thúc đẩy công việc kinh doanh góp phần phát triển cho thành công của công ty,...\n\nBằng cấp - Chứng chỉ\nCử nhân Phiên dịch tiếng Anh, tiếng Hàn Quốc\n\nĐơn vị đào tạo: Đại học Ngoại ngữ - Đại học Quốc gia Hà Nội\nThời gian: Từ tháng 09/1999 đến 06/2002\nChuyên ngành: Phiên dịch tiếng Anh, tiếng Hàn Quốc\nLoại tốt nghiệp: Khá', NULL, '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '(+84)', 'eg', 2, NULL, 3, NULL, NULL, NULL, '1525231709_Mẫu thông tin tích hợp.docx', '2018-05-16', NULL, 7, 18, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-03 07:30:03', '2018-05-01 13:28:29'),
(40, 11, 'Trần Đức Việt', NULL, '1627888906', '25 Quang Trung, Hà Đông, HN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '(+84)', 'eg', 1, NULL, 9, NULL, NULL, NULL, '1525231334_Mẫu thông tin tích hợp.docx', NULL, NULL, 10, 40, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-03 07:30:03', '2018-05-01 13:22:14'),
(41, 11, 'Hải Dung', NULL, '098566363', '25 Quang Trung, Hà Đông, HN', NULL, NULL, '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', '25 Quang Trung, Hà Đông, HN', 'Mục tiêu công việc\nVới kinh nghiệm 9 năm trong Ngành hàng Tiêu dùng và Thực phẩm trên 2 kênh KA và GT, nguyện vọng của tôi là được làm việc với vị trí Trưởng vùng Miền Trung ở một công ty chuyên nghiệp và năng động, thúc đẩy công việc kinh doanh góp phần phát triển cho thành công của công ty,...\n\nBằng cấp - Chứng chỉ\nCử nhân Phiên dịch tiếng Anh, tiếng Hàn Quốc\n\nĐơn vị đào tạo: Đại học Ngoại ngữ - Đại học Quốc gia Hà Nội\nThời gian: Từ tháng 09/1999 đến 06/2002\nChuyên ngành: Phiên dịch tiếng Anh, tiếng Hàn Quốc\nLoại tốt nghiệp: Khá', NULL, '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '<p>Sức khỏe ổn định</p>', '(+84)', 'eg', 2, NULL, 3, NULL, NULL, NULL, '1525231709_Mẫu thông tin tích hợp.docx', '2018-05-16', NULL, 7, 18, '1525232891_IMG_3133.jpg', 1, 0, '2018-05-03 07:30:03', '2018-05-01 13:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotline` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `favico` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `maps` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `copyright` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `codechat` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `links1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `links2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `links3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `links4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `links5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `analytics` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `banner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `address`, `phone`, `hotline`, `email`, `favico`, `content`, `status`, `maps`, `copyright`, `codechat`, `links1`, `links2`, `links3`, `links4`, `links5`, `analytics`, `created_at`, `updated_at`, `banner`) VALUES
(1, 'Nha Khoa Otis 123', NULL, '0123456789', '0987654321', 'abc123@gmail.com', '1611595534_logo.png', '<p>{&acirc;csf}</p>', 1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.991745637271!2d105.86078131492891!3d20.99296799437507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac106a4aa317%3A0xefce95fe6906c9a7!2zMTI5IMSQxrDhu51uZyBUYW0gVHJpbmgsIE1haSDEkOG7mW5nLCBIb8OgbmcgTWFpLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1603869042577!5m2!1svi!2s\" width=\"1920\" height=\"500\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 'Copyright © 2020 Nha Khoa Otis. All right reserved', NULL, 'https://www.facebook.com/', 'https://www.youtube.com/', 'https://twitter.com/?lang=vi', 'https://www.google.com/', 'https://www.instagram.com/', NULL, '2021-01-28 04:09:17', '2021-01-27 21:09:17', '1611596236_banner-03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `noibat` int(11) NOT NULL DEFAULT 0,
  `com` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `user_id`, `name`, `link`, `photo`, `icon`, `mota`, `content`, `status`, `noibat`, `com`, `stt`, `created_at`, `updated_at`) VALUES
(33, 5, 'Công nghệ cấy ghép', '123', '1611641806_banner-01.jpg', '', 'Giải pháp trồng răng được các nha sĩ tin dùng nhất!', NULL, 1, 0, NULL, 2, '2021-01-26 06:30:00', '2021-01-25 23:30:00'),
(34, 5, 'Công nghệ cấy ghép', '456', '1611641851_banner-03.jpg', '', 'Giải pháp trồng răng được các nha sĩ tin dùng nhất!', NULL, 1, 0, 'hinh-anh', 1, '2021-01-26 06:30:08', '2021-01-25 23:30:08'),
(35, 5, 'Công nghệ cấy ghép', '6546', '1611641865_banner-01.jpg', '', '654', NULL, 1, 0, 'hinh-anh', 3, '2021-01-26 06:30:14', '2021-01-25 23:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `codemail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` int(11) NOT NULL DEFAULT 0,
  `company` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `career` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `chucvu` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `quymo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `timework` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` int(11) NOT NULL DEFAULT 0,
  `district` int(11) NOT NULL DEFAULT 0,
  `level` int(11) NOT NULL DEFAULT 2,
  `photo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `phone`, `address`, `codemail`, `code`, `country`, `gender`, `company`, `career`, `chucvu`, `quymo`, `timework`, `note`, `city`, `district`, `level`, `photo`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'admin', '$2y$10$7Q86RxSxkdmzX3c6GkWqGOWt40oqmiMmV.yM8PjbDwnq/X96xiZlG', 'Nguyễn Gia Minh', 'nguyengiaminh2k@gmail.com', '0327800380', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 'social_square.png', 1, '3h5NrxZgR5bZVJ0z6KK49Ec2JUdfVK1tdhCe6JsM3QdDyUBOOhWjsS1LWe15', '2021-01-27 13:59:36', '2021-01-27 06:59:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`mskh`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `lienket`
--
ALTER TABLE `lienket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_image_product_id_foreign` (`product_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `mskh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lienket`
--
ALTER TABLE `lienket`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
