-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 12:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-c`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(30) NOT NULL,
  `role_id` int(30) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `role_id`, `name`, `email`, `description`, `ip`, `time`) VALUES
(49, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Thu, Nov 24, 2022 3:42 PM'),
(50, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Thu, Nov 24, 2022 3:49 PM'),
(51, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Thu, Nov 24, 2022 3:50 PM'),
(52, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Thu, Nov 24, 2022 3:51 PM'),
(53, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Thu, Nov 24, 2022 3:52 PM'),
(54, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Thu, Nov 24, 2022 3:52 PM'),
(55, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Thu, Nov 24, 2022 3:59 PM'),
(56, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Thu, Nov 24, 2022 4:06 PM'),
(57, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Thu, Nov 24, 2022 4:08 PM'),
(58, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Thu, Nov 24, 2022 4:09 PM'),
(59, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Sat, Nov 26, 2022 9:46 AM'),
(60, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Sat, Nov 26, 2022 2:55 PM'),
(61, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Mon, Nov 28, 2022 2:26 PM'),
(62, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Tue, Nov 29, 2022 10:41 AM'),
(63, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Sun, Dec 4, 2022 1:36 PM'),
(64, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Tue, Dec 6, 2022 8:52 AM'),
(65, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Tue, Dec 6, 2022 12:38 PM'),
(66, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Thu, Dec 8, 2022 9:31 AM'),
(67, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Mon, Dec 12, 2022 9:57 AM'),
(68, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Mon, Dec 12, 2022 1:24 PM'),
(69, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Sat, Dec 17, 2022 11:45 AM'),
(70, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Sat, Dec 17, 2022 11:46 AM'),
(71, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Sat, Dec 17, 2022 12:13 PM'),
(72, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Sat, Dec 17, 2022 12:29 PM'),
(73, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Sun, Dec 18, 2022 11:27 AM'),
(74, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Tue, Dec 20, 2022 4:37 PM'),
(75, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Wed, Dec 21, 2022 11:46 AM'),
(76, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Wed, Dec 21, 2022 5:28 PM'),
(77, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Wed, Dec 21, 2022 6:24 PM'),
(78, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', 'Has log in', '::1', 'Thu, Dec 22, 2022 4:22 PM');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) NOT NULL,
  `image` text DEFAULT NULL,
  `page` text DEFAULT NULL,
  `cta` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `backgrounds`
--

CREATE TABLE `backgrounds` (
  `id` bigint(20) NOT NULL,
  `latest_products` varchar(255) DEFAULT NULL,
  `upcoming_products` varchar(255) DEFAULT NULL,
  `top_products` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `pd_body_bg` varchar(255) DEFAULT NULL,
  `pd_container_bg` varchar(255) DEFAULT NULL,
  `pd_text_color` varchar(255) DEFAULT NULL,
  `pd_nav_bg` varchar(255) DEFAULT NULL,
  `product_details_tab` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backgrounds`
--

INSERT INTO `backgrounds` (`id`, `latest_products`, `upcoming_products`, `top_products`, `brand`, `pd_body_bg`, `pd_container_bg`, `pd_text_color`, `pd_nav_bg`, `product_details_tab`, `created_at`, `updated_at`) VALUES
(1, NULL, '#ffffff', NULL, NULL, '#fff', '#fff', '#000', '#313131', NULL, NULL, '2021-08-07 11:52:13');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `url`, `slug`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(10, 'new banner', NULL, 'new-banner', 'images/banner_image/nsplsh_4b6848556b4f58516f346b_mv2_d_5616_3744_s_4_2.webp', NULL, 1, '2022-12-21 12:35:50', '2022-12-21 12:35:50'),
(11, 'slider-2', NULL, 'slider-2', 'images/banner_image/d542afccfbef4b89b22ec86f012efa76.webp', NULL, 0, '2022-12-21 12:40:27', '2022-12-21 12:42:55'),
(12, 'banner-3', NULL, 'banner-3', 'images/banner_image/Screenshot_7.png', NULL, 1, '2022-12-21 12:42:42', '2022-12-21 12:42:42');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `b_g_colors`
--

CREATE TABLE `b_g_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `position_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_ad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_ad_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_ad_status` int(11) DEFAULT NULL,
  `bg_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_title_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `position_id`, `name`, `slug`, `description`, `category_summary`, `meta_title`, `meta_des`, `meta_keywords`, `image`, `banner_ad`, `banner_ad_url`, `banner_ad_status`, `bg_color`, `cat_title_color`, `status`, `created_at`, `updated_at`) VALUES
(15, 33, NULL, 'category-1', 'category-1', '<p>demo</p>', NULL, 'Beboy  | No: 1 Custom PC Builder In Bangladesh | Computer Shop', 'SFzdGsyhdujhdyjnrtmnqtbSGVW354F', NULL, 'images/category_image/01-11.png', NULL, NULL, 1, NULL, NULL, 1, '2022-11-28 08:48:55', '2022-12-21 13:13:08'),
(16, 33, NULL, 'category-2', 'category-2', '<p>demo-2</p>', NULL, 'demo-2 meta', 'demo-2 meta demo-2 meta demo-2 meta', NULL, 'images/category_image/1.png', NULL, NULL, 1, NULL, NULL, 1, '2022-12-12 04:59:24', '2022-12-12 04:59:24');

-- --------------------------------------------------------

--
-- Table structure for table `category_update_histories`
--

CREATE TABLE `category_update_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_update_histories`
--

INSERT INTO `category_update_histories` (`id`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(106, 33, 15, '2022-12-21 13:13:08', '2022-12-21 13:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `cat_faqs`
--

CREATE TABLE `cat_faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `prosubcategory_id` int(11) DEFAULT NULL,
  `proprocategory_id` int(11) DEFAULT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `point` smallint(6) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `components`
--

CREATE TABLE `components` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `seq` smallint(2) NOT NULL DEFAULT 20,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `discount`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Binary Logic Up', 10, 1, '2021-10-16 22:13:59', '2021-10-22 00:10:18');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `str_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` int(7) DEFAULT NULL,
  `email_verified_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `gender`, `email`, `phone`, `address`, `post_code`, `city`, `country`, `password`, `str_password`, `code`, `email_verified_at`, `status`, `created_at`, `updated_at`) VALUES
(1112, 'shahriar', 'shuvo', 0, 'shahriarshuvo714@gmail.com', '01843736673', NULL, NULL, NULL, NULL, '25f9e794323b453885f5181f1b624d0b', '123456789', NULL, NULL, 1, '2022-12-18 04:37:52', '2022-12-18 04:37:52'),
(1113, 'shahriar', 'shuvo', 0, 'shahriarshuvo714@gmail.com', 'shahriarshuvo714@gmail.com', NULL, NULL, NULL, NULL, '25f9e794323b453885f5181f1b624d0b', '123456789', NULL, NULL, 1, '2022-12-18 04:39:32', '2022-12-18 04:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_add`
--

CREATE TABLE `dynamic_add` (
  `id` int(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `status` int(30) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `email_settings`
--

CREATE TABLE `email_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_settings`
--

INSERT INTO `email_settings` (`id`, `subject`, `description`, `created_at`, `updated_at`) VALUES
(1, 'This is test', '<p>This is test</p>', '2021-04-06 22:38:57', '2021-04-07 07:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feature_box_f_ads`
--

CREATE TABLE `feature_box_f_ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feature_box_s_ads`
--

CREATE TABLE `feature_box_s_ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feature_box_t_ads`
--

CREATE TABLE `feature_box_t_ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feature_products`
--

CREATE TABLE `feature_products` (
  `id` bigint(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `seq` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `free_item_for_clients`
--

CREATE TABLE `free_item_for_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `free_item_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free_item_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free_item_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free_item_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free_item_des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hot_deal_products`
--

CREATE TABLE `hot_deal_products` (
  `id` bigint(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `seq` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `individual_mails`
--

CREATE TABLE `individual_mails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landings`
--

CREATE TABLE `landings` (
  `id` int(11) NOT NULL,
  `linktype` smallint(2) DEFAULT NULL,
  `pagelink` varchar(256) DEFAULT NULL,
  `nextpagelink` varchar(256) DEFAULT NULL,
  `statuscode` int(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `memo_color_combos`
--

CREATE TABLE `memo_color_combos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `combo_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `top_area_bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_area_font_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_font_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_font_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_border_top` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `table_header_bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `table_header_border` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `table_header_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `table_data_border_right` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `table_data_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `table_font_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
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
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(28, '2021_02_05_164149_create_categories_table', 1),
(29, '2021_02_05_164222_create_tags_table', 1),
(30, '2021_02_05_164239_create_posts_table', 1),
(31, '2021_02_05_190736_create_post_tag_table', 1),
(32, '2021_02_07_195341_create_subcategories_table', 1),
(33, '2021_02_07_195402_create_prosubcategories_table', 1),
(34, '2021_02_11_073941_create_contacts_table', 1),
(35, '2021_02_12_063227_create_brands_table', 1),
(36, '2021_02_12_064253_create_products_table', 1),
(37, '2021_02_12_065947_create_product_images_table', 1),
(38, '2021_02_12_070411_create_suppliers_table', 1),
(39, '2021_02_12_073120_create_product_brands_table', 1),
(40, '2021_02_12_073219_create_product_ratings_table', 1),
(41, '2021_02_12_095354_create_shop_types_table', 1),
(42, '2021_02_12_103844_create_banners_table', 1),
(43, '2021_02_12_121809_create_slider_texts_table', 1),
(44, '2021_02_12_122105_create_coupons_table', 1),
(45, '2021_02_12_184538_create_site_settings_table', 1),
(46, '2021_02_12_213540_create_offices_table', 1),
(47, '2021_02_12_221225_create_page_categories_table', 1),
(48, '2021_02_12_221248_create_pages_table', 1),
(49, '2021_02_13_213036_create_customers_table', 2),
(50, '2021_02_14_002300_create_orders_table', 3),
(51, '2021_02_14_002316_create_order_details_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(11) NOT NULL,
  `product_id` int(30) NOT NULL,
  `seq` int(30) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `product_id`, `seq`, `status`) VALUES
(1, 1103, 1, '1'),
(2, 1114, 2, '1');

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sales_support` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technicale_support` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warranty_support` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iframe` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `branch_name`, `address`, `sales_support`, `technicale_support`, `warranty_support`, `email`, `phone`, `note`, `map`, `iframe`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'IDB Bhaban Branch', '247 & 248, BCS Computer City, IDB Bhaban (2nd Floor), Agargaon, Dhaka-1207, Bangladesh', NULL, '01727061087', '01733052216', 'idb@binarylogic.com.bd', '01727061082, 01611449778, 01911449778,', 'Closed Sunday', NULL, NULL, 'images/office_image/idb-binarylogic.PNG', 1, '2021-02-20 00:27:30', '2022-07-03 09:48:18'),
(4, 'Multiplan Branch', 'Shop-650/A, Level-06\r\nComputer City Centre\r\n69-71 New Elephant Road\r\nDhaka -1205.', '01727061192  01733027190', '01727061085', '01733052213', 'multiplan@binarylogic.com.bd', '+88 02 551 53450', 'Closed: Tuesday', NULL, NULL, 'images/office_image/multiplan-binarylogic.jpeg', 1, '2021-03-12 10:03:51', '2022-07-03 09:41:32'),
(5, 'Corporate Office <br> Service Centre', 'Lake View Plaza (3rd Floor) \r\n220/D/4/3 & 220/5/A \r\nWest Kafrul Begum Rokeya Sharoni\r\n Dhaka – 1207, Bangladesh.', '01733052212', '01727061086', '01733052214', 'corporate@binarylogic.com.bd', '01727005555', 'Open Everyday', NULL, NULL, 'images/office_image/corporate-binarylogic.jpeg', 1, '2021-03-12 10:05:47', '2022-07-03 09:38:33'),
(6, 'Sylhet Branch', '105, 1st Floor,\r\nPlanet Araf, Computer City Zindabazar, \r\nSylhet-3100.', NULL, NULL, NULL, 'kawserahmed.sylhet@binarylogic.com.bd', '01321141645', 'Closed: Friday', NULL, NULL, 'images/office_image/binarylogic-sylhet.jpeg', 1, '2021-03-12 10:07:12', '2022-07-03 09:37:10'),
(7, 'Eastern Plus Branch', 'Shop-15, Level-4, Eastern Plus,\r\n145 Shantinagar\r\n Dhaka-1217 Bangladesh.', '01727061191', '01727061191', '01733052216', 'easternplus@binarylogic.com.bd', '01727061191', 'Closed: Thursday', NULL, NULL, 'images/office_image/esternplus-binarylogic.jpeg', 1, '2021-03-12 10:09:19', '2022-07-03 09:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `invoice_id` int(11) NOT NULL,
  `total_qty` int(11) NOT NULL,
  `total_cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) DEFAULT 0,
  `discount_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `invoice_id`, `total_qty`, `total_cost`, `discount`, `discount_total`, `shipping_first_name`, `shipping_last_name`, `shipping_phone`, `shipping_email`, `city`, `postcode`, `country`, `address`, `payment_method`, `shipping_method`, `message`, `status`, `created_at`, `updated_at`) VALUES
(532, NULL, 60014, 2, '10,444.00', 0, NULL, 'shahriar', 'shuvo', '01843736673', 'shahriarshuvo714@gmail.com', 'dhaka', NULL, 'bangladesh', 'MERUL badda', 'cash', NULL, NULL, 0, '2022-12-17 05:42:42', '2022-12-17 05:42:42'),
(533, NULL, 65947, 2, '10,444.00', 0, NULL, 'shahriar', 'shuvo', '01843736673', 'shahriarshuvo714@gmail.com', 'dhaka', NULL, 'bangladesh', 'MERUL badda', 'cash', NULL, NULL, 0, '2022-12-17 05:43:51', '2022-12-17 05:43:51'),
(534, NULL, 85671, 1, '5,222.00', 0, NULL, 'shahriar', 'shuvo', '01843736673', 'shahriarshuvo714@gmail.com', 'dhaka', NULL, 'bangladesh', 'MERUL badda', 'cash', 'pathao', NULL, 0, '2022-12-17 05:46:03', '2022-12-17 05:57:08'),
(535, NULL, 79673, 8, '2,860.00', 0, NULL, 'shahriar', 'shuvo', '01843736673', 'shahriarshuvo714@gmail.com', 'dhaka', NULL, 'bangladesh', 'MERUL badda', 'cash', 'pathao', NULL, 0, '2022-12-22 10:59:49', '2022-12-22 11:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` int(11) DEFAULT NULL,
  `qty_total_amount` double(15,3) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_price`, `qty_total_amount`, `qty`, `created_at`, `updated_at`) VALUES
(620, 532, 1092, 5222, 10444.000, 2, '2022-12-17 05:42:42', '2022-12-17 05:42:42'),
(621, 533, 1092, 5222, 10444.000, 2, '2022-12-17 05:43:51', '2022-12-17 05:43:51'),
(622, 534, 1092, 5222, 5222.000, 1, '2022-12-17 05:46:03', '2022-12-17 05:46:03'),
(623, 535, 1106, 320, 640.000, 2, '2022-12-22 10:59:49', '2022-12-22 10:59:49'),
(624, 535, 1107, 320, 960.000, 3, '2022-12-22 10:59:49', '2022-12-22 10:59:49'),
(625, 535, 1116, 700, 700.000, 1, '2022-12-22 10:59:49', '2022-12-22 10:59:49'),
(626, 535, 1105, 280, 560.000, 2, '2022-12-22 10:59:49', '2022-12-22 10:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `order_mails`
--

CREATE TABLE `order_mails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_categories`
--

CREATE TABLE `page_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('admin@admin.com', '$2y$10$hWel3gjFEzycM7dvoQS9Y..0j7imMqy/k8Hjgp7D7i.Ivgs9tWHbW', '2021-03-25 01:21:04'),
('shahriarshuvo714@gmail.com', '$2y$10$JFLvsbxcNlfYNxy6d5mMWee0KKIQrVjMfnSlCrtuEVQtYIL3XcMj.', '2022-10-13 04:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `pcbuilders`
--

CREATE TABLE `pcbuilders` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `details` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `popups`
--

CREATE TABLE `popups` (
  `id` int(11) NOT NULL,
  `link` varchar(512) NOT NULL,
  `title` varchar(512) DEFAULT NULL,
  `image` varchar(64) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_words` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `click` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `title`, `slug`, `meta_title`, `meta_description`, `key_words`, `description`, `click`, `image`, `video`, `date`, `time`, `status`, `created_at`, `updated_at`) VALUES
(8, 33, 15, 'demo', 'demo', 'demo-blog demo-blog', NULL, 'xdsdx', '<p>demo-blog&nbsp;demo-blog&nbsp;demo-blog&nbsp;demo-blog</p>', 0, 'images/post_image/6.png', '<iframe width=\"1277\" height=\"753\" src=\"https://www.youtube.com/embed/Foy5JX97Ve8\" title=\"Action Classes in Laravel: 2 Open-Source Examples\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2022-12-12', '01:25:00', 1, '2022-12-12 07:25:48', '2022-12-12 07:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `pro_sub_category_id` int(11) DEFAULT NULL,
  `pro_pro_category_id` int(11) DEFAULT NULL,
  `component_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_order_qty` int(11) DEFAULT NULL,
  `min_order_qty` int(11) DEFAULT NULL,
  `buying_price` double(15,3) DEFAULT NULL,
  `discount_price` double(15,3) DEFAULT NULL,
  `regular_price` int(11) DEFAULT NULL,
  `special_price` int(11) DEFAULT NULL,
  `offer_price` int(11) DEFAULT NULL,
  `price_highlight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'special_price',
  `call_for_price` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estimated_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warranty` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `total_sell` int(11) DEFAULT NULL,
  `total_product` int(11) DEFAULT NULL,
  `barcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_summery` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specification` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_highlights` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_alt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `click` int(11) DEFAULT NULL,
  `sku` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `stock_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(56) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image_small` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image_medium` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image_large` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `home_delivery` tinyint(1) NOT NULL DEFAULT 0,
  `offer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by_1` int(11) DEFAULT NULL,
  `updated_by_2` int(11) DEFAULT NULL,
  `compatible_product_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `update_current_serial` int(11) DEFAULT 1,
  `user__info_id` int(30) DEFAULT NULL,
  `seq_product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `supplier_id`, `category_id`, `sub_category_id`, `pro_sub_category_id`, `pro_pro_category_id`, `component_id`, `name`, `subtitle`, `slug`, `max_order_qty`, `min_order_qty`, `buying_price`, `discount_price`, `regular_price`, `special_price`, `offer_price`, `price_highlight`, `call_for_price`, `estimated_price`, `warranty`, `discount`, `qty`, `total_sell`, `total_product`, `barcode`, `description`, `product_summery`, `specification`, `product_highlights`, `note`, `shop`, `meta_title`, `meta_keywords`, `meta_des`, `image_alt`, `image_des`, `click`, `sku`, `stock_status`, `video`, `image`, `product_image_thumb`, `product_image_small`, `product_image_medium`, `product_image_large`, `status`, `home_delivery`, `offer`, `updated_by_1`, `updated_by_2`, `compatible_product_ids`, `update_current_serial`, `user__info_id`, `seq_product`, `created_at`, `updated_at`) VALUES
(1092, 33, NULL, 15, 81, NULL, NULL, NULL, 'demo product', NULL, 'demo-product', NULL, NULL, 0.000, NULL, 22055, NULL, 5222, 'special_price', NULL, NULL, NULL, NULL, 10, NULL, NULL, NULL, NULL, '<p>demo</p>', NULL, NULL, NULL, NULL, NULL, 'intel-nuc-12-compute-element-elm12hbi308w-core-i3-12th-gen', 'intel-nuc-12-compute-element-elm12hbi308w-core-i3-12th-genintel-nuc-12-compute-element-elm12hbi308w-core-i3-12th-genintel-nuc-12-compute-element-elm12hbi308w-core-i3-12th-gen', ';fgm;dfh', 'xxgbdfhdahd', NULL, '46279', 'in_stock', NULL, 'images/product_image/hp-logo.webp', 'images/product_image/thumbhp-logo.webp', 'images/product_image/smallhp-logo.webp', 'images/product_image/mediumhp-logo.webp', 'images/product_image/largehp-logo.webp', 0, 1, NULL, 33, 33, NULL, 1, NULL, NULL, '2022-11-28 09:01:21', '2022-12-21 05:51:25'),
(1093, 33, NULL, 15, NULL, NULL, NULL, NULL, 'Beboy Climax Delay Super Dotted Rose Flavour Pocket Pack-02 Pcs', NULL, 'beboy-climax-delay-super-dotted-rose-flavour-pocket-pack-02-pcs', NULL, NULL, 0.000, NULL, 65, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, 10, NULL, NULL, NULL, '<ul>\r\n	<li><strong><span style=\"font-size:13pt\"><span style=\"font-size:11.5pt\">How To Use</span></span></strong>\r\n	<ol>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\">Carefully open and remove condom from wrapper.</span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\">Place condom on the head of the erect, hard penis. If uncircumcised, pull back the foreskin first.</span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\">Pinch air out of the tip of the condom.</span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\">Unroll condom all the way down the penis.</span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\">After love making,&nbsp;carefully remove the condom and throw it in the trash.</span></span></span></li>\r\n	</ol>\r\n	</li>\r\n</ul>\r\n\r\n<h1>&nbsp;</h1>\r\n\r\n<ul>\r\n	<li><strong><span style=\"font-size:13pt\"><span style=\"font-size:11.5pt\">Discreet Delivery</span></span></strong></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-size:11.5pt\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span><strong><span style=\"font-size:11.5pt\">without</span></strong><span style=\"font-size:11.5pt\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><strong><span style=\"font-size:11.5pt\">Shippping Charges:.</span></strong></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-size:11.5pt\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges.</span></span></p>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">When you are keen to extend your coital time, (who doesn&#39;t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market, and set to take the market by storm. The&nbsp;Beboy Condoms comes in various flavour to make it more interesting for her to indulge a little longer. You can see her enjoy your intimacy and the ability to stay longer naturally makes her go wild. You can see her moaning in pleasure and absolute ecstasy with every push. The condom is best suited for highly sensual and pleasurable encounter.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Beboy Super Dotted Flavoured Condoms &ndash; Product Info</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Colour &amp; Lubrication:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Transparent Lubricated</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Flavour:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"> Rose</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Dimension:&nbsp;</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Length 180 mm (min) | Width: 53 &plusmn;2 mm</span></span></span></span></p>', NULL, NULL, NULL, NULL, 'Beboy Climax Delay Super Dotted Rose Flavour Pocket Pack-02 Pcs', 'condom,dotted,pocket condom', 'When you are keen to extend your coital time, (who doesn\'t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market, and set to t', NULL, NULL, NULL, '47232', 'in_stock', NULL, 'images/product_image/01-11.png', 'images/product_image/thumb01-11.png', 'images/product_image/small01-11.png', 'images/product_image/medium01-11.png', 'images/product_image/large01-11.png', 1, 1, NULL, 33, 33, NULL, 1, NULL, NULL, '2022-12-20 10:45:20', '2022-12-21 05:52:09'),
(1094, 33, NULL, 15, NULL, NULL, NULL, NULL, 'Beboy Climax Delay Super Dotted Rose Flavour Pocket Pack-03 Pcs', NULL, 'beboy-climax-delay-super-dotted-rose-flavour-pocket-pack-03-pcs', NULL, NULL, 0.000, NULL, 100, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, 10, NULL, NULL, NULL, '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">When you are keen to extend your coital time, (who doesn&#39;t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market, and set to take the market by storm. The&nbsp;Beboy Condoms comes in various flavour to make it more interesting for her to indulge a little longer. You can see her enjoy your intimacy and the ability to stay longer naturally makes her go wild. You can see her moaning in pleasure and absolute ecstasy with every push. The condom is best suited for highly sensual and pleasurable encounter.</span></span></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Discreet Delivery</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span></span><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">without</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Shippping Charges:.</span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges.</span></span></span></span></p>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Beboy Super Dotted Flavoured Condoms &ndash; Product Info</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Colour &amp; Lubrication:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Transparent Lubricated</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Flavour:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"> Rose</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Dimension:&nbsp;</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Length 180 mm (min) | Width: 53 &plusmn;2 mm</span></span></span></span></p>', NULL, NULL, NULL, NULL, 'Beboy Climax Delay Super Dotted Rose Flavour Pocket Pack-03 Pcs', 'bd condom, condom, bboy,dotted,rose,', 'When you are keen to extend your coital time, (who doesn\'t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market, and set to t', NULL, NULL, NULL, '42636', 'in_stock', NULL, 'images/product_image/01-11.png', 'images/product_image/thumb01-11.png', 'images/product_image/small01-11.png', 'images/product_image/medium01-11.png', 'images/product_image/large01-11.png', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-12-21 06:02:36', '2022-12-21 06:02:36'),
(1095, 33, NULL, 15, NULL, NULL, NULL, NULL, 'Beboy Climax Delay Super Dotted Oud Flavour Pocket Pack-03 Pcs', NULL, 'beboy-climax-delay-super-dotted-oud-flavour-pocket-pack-03-pcs', NULL, NULL, 0.000, NULL, 100, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, 10, NULL, NULL, NULL, '<p><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">When you are keen to extend your coital time, (who doesn&#39;t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market, and set to take the market by storm. The&nbsp;Beboy Condoms comes in various flavour to make it more interesting for her to indulge a little longer. You can see her enjoy your intimacy and the ability to stay longer naturally makes her go wild. You can see her moaning in pleasure and absolute ecstasy with every push. The condom is best suited for highly sensual and pleasurable encounter.</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Discreet Delivery</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span></span><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">without</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Shippping Charges:.</span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges.</span></span></span></span></p>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Beboy Super Dotted Flavoured Condoms &ndash; Product Info</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Colour &amp; Lubrication:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Transparent Lubricated</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Flavour:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"> Oud</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Dimension:&nbsp;</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Length 180 mm (min) | Width: 53 &plusmn;2 mm</span></span></span></span></p>', NULL, NULL, NULL, NULL, 'Beboy Climax Delay Super Dotted Oud Flavour Pocket Pack-03 Pcs', 'condom, dotted,pocket condom', 'When you are keen to extend your coital time, (who doesn\'t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market', NULL, NULL, NULL, '4176', 'in_stock', NULL, 'images/product_image/01-11.png', 'images/product_image/thumb01-11.png', 'images/product_image/small01-11.png', 'images/product_image/medium01-11.png', 'images/product_image/large01-11.png', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-12-21 06:07:12', '2022-12-21 06:07:12'),
(1096, 33, NULL, 15, NULL, NULL, NULL, NULL, 'Beboy Climax Delay Super Dotted Jasmine Flavour Pocket Pack-03 Pcs', NULL, 'beboy-climax-delay-super-dotted-jasmine-flavour-pocket-pack-03-pcs', NULL, NULL, 0.000, NULL, 100, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Discreet Delivery</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span></span><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">without</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Shippping Charges:.</span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges.</span></span></span></span></p>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Beboy Super Dotted Flavoured Condoms &ndash; Product Info</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Colour &amp; Lubrication:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Transparent Lubricated</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Flavour:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"> Jasmine</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Dimension:&nbsp;</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Length 180 mm (min) | Width: 53 &plusmn;2 mm</span></span></span></span></p>', NULL, NULL, NULL, NULL, 'Beboy Climax Delay Super Dotted Jasmine Flavour Pocket Pack-03 Pcs', 'Beboy Climax Delay Super Dotted Jasmine Flavour Pocket condom', 'When you are keen to extend your coital time, (who doesn\'t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market', NULL, NULL, NULL, '26512', 'in_stock', NULL, 'images/product_image/01-11.png', 'images/product_image/thumb01-11.png', 'images/product_image/small01-11.png', 'images/product_image/medium01-11.png', 'images/product_image/large01-11.png', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-12-21 06:10:47', '2022-12-21 06:10:47'),
(1097, 33, NULL, 15, NULL, NULL, NULL, NULL, 'Beboy Climax Delay Super Dotted Paan Flavour Pocket Pack-03 Pcs', NULL, 'beboy-climax-delay-super-dotted-paan-flavour-pocket-pack-03-pcs', NULL, NULL, 0.000, NULL, 100, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">When you are keen to extend your coital time, (who doesn&#39;t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market, and set to take the market by storm. The&nbsp;Beboy Condoms comes in various flavour to make it more interesting for her to indulge a little longer. You can see her enjoy your intimacy and the ability to stay longer naturally makes her go wild. You can see her moaning in pleasure and absolute ecstasy with every push. The condom is best suited for highly sensual and pleasurable encounter</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Discreet Delivery</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span></span><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">without</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Shippping Charges:.</span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges</span></span></p>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Beboy Super Dotted Flavoured Condoms &ndash; Product Info</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Colour &amp; Lubrication:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Transparent Lubricated</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Flavour:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"> Paan</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Dimension:&nbsp;</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Length 180 mm (min) | Width: 53 &plusmn;2 mm</span></span></span></span></p>', NULL, NULL, NULL, NULL, 'Beboy Climax Delay Super Dotted Paan Flavour Pocket Pack-03 Pcs', 'Beboy Climax Delay Super Dotted Paan Flavour Pocket condom', 'First Time in Bangladesh, Beboy Super Dotted Condoms with Flavour and Climax Delay Technology', NULL, NULL, NULL, '24473', 'in_stock', NULL, 'images/product_image/01-11.png', 'images/product_image/thumb01-11.png', 'images/product_image/small01-11.png', 'images/product_image/medium01-11.png', 'images/product_image/large01-11.png', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-12-21 06:13:34', '2022-12-21 06:13:34'),
(1098, 33, NULL, 15, NULL, NULL, NULL, NULL, 'Beboy Air Thin Marigold Flavour Condoms Pocket Pack -03 Pcs', NULL, 'beboy-air-thin-marigold-flavour-condoms-pocket-pack-03-pcs', NULL, NULL, 0.000, NULL, 100, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:#999ca6\">When you are keen to extend your coital time, (who doesn&#39;t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market, and set to take the market by storm. The&nbsp;Beboy Condoms comes in various flavour to make it more interesting for her to indulge a little longer. You can see her enjoy your intimacy and the ability to stay longer naturally makes her go wild. You can see her moaning in pleasure and absolute ecstasy with every push. The condom is best suited for highly sensual and pleasurable encounter</span></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"color:#2e74b5\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:#f73f23\">Discreet Delivery</span></span></span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:#999ca6\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span></span></span><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:#999ca6\">without</span></span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:#999ca6\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:#999ca6\">Shippping Charges:.</span></span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:#999ca6\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges</span></span></span></p>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:#999ca6\">Beboy Super Dotted Flavoured Condoms &ndash; Product Info</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:#999ca6\">Colour &amp; Lubrication:</span></span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:#999ca6\">&nbsp;Transparent Lubricated</span></span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:#999ca6\">Flavour:</span></span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:#999ca6\"> Marigold</span></span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:#999ca6\">Dimension:&nbsp;</span></span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:#999ca6\">Length 180 mm (min) | Width: 53 &plusmn;2 mm</span></span></span></span></span></p>', NULL, NULL, NULL, NULL, 'Beboy Air Thin Marigold Flavour Condoms Pocket Pack -03 Pcs', 'Beboy Air Thin Marigold Flavour Condoms Pocket', 'Beboy Air Thin Marigold Flavour Condoms Pocket Pack. Yo can just buy Beboy, a new brand that has hit the Indian condom market, and set to take the market by storm. The Beboy Condom', NULL, NULL, NULL, '83249', 'in_stock', NULL, 'images/product_image/01-11.png', 'images/product_image/thumb01-11.png', 'images/product_image/small01-11.png', 'images/product_image/medium01-11.png', 'images/product_image/large01-11.png', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-12-21 06:17:52', '2022-12-21 06:17:52'),
(1099, 33, NULL, 15, NULL, NULL, NULL, NULL, 'Beboy Air Thin Jasmine Flavour Condoms Pocket Pack -03 Pcs', NULL, 'beboy-air-thin-jasmine-flavour-condoms-pocket-pack-03-pcs', NULL, NULL, 0.000, NULL, 100, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">When you are keen to extend your coital time, (who doesn&#39;t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market, and set to take the market by storm. The&nbsp;Beboy Condoms comes in various flavour to make it more interesting for her to indulge a little longer. You can see her enjoy your intimacy and the ability to stay longer naturally makes her go wild. You can see her moaning in pleasure and absolute ecstasy with every push. The condom is best suited for highly sensual and pleasurable encounter.</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Discreet Delivery</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span></span><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">without</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Shippping Charges:.</span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges.</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Beboy Super Dotted Flavoured Condoms &ndash; Product Info</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Colour &amp; Lubrication:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Transparent Lubricated</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Flavour:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"> Jasmine</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Dimension:&nbsp;</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Length 180 mm (min) | Width: 53 &plusmn;2 mm</span></span></span></span></p>', NULL, NULL, NULL, NULL, 'Beboy Air Thin Jasmine Flavour Condoms Pocket Pack -03 Pcs', 'Beboy Air Thin Jasmine Flavour Condoms Pocket Pack', 'Beboy Air Thin Jasmine Flavour Condoms Pocket Pack. Biggest Dots for more stimulation and pleasure with extra fragrance', NULL, NULL, NULL, '25848', 'in_stock', NULL, 'images/product_image/01-11.png', 'images/product_image/thumb01-11.png', 'images/product_image/small01-11.png', 'images/product_image/medium01-11.png', 'images/product_image/large01-11.png', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-12-21 08:21:26', '2022-12-21 08:21:26'),
(1100, 33, NULL, 15, NULL, NULL, NULL, NULL, 'Beboy United Climax Mango Flavour Condoms Pocket Pack -03 Pcs', NULL, 'beboy-united-climax-mango-flavour-condoms-pocket-pack-03-pcs', NULL, NULL, 0.000, NULL, 100, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">When you are keen to extend your coital time, (who doesn&#39;t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market, and set to take the market by storm. The&nbsp;Beboy Condoms comes in various flavour to make it more interesting for her to indulge a little longer. You can see her enjoy your intimacy and the ability to stay longer naturally makes her go wild. You can see her moaning in pleasure and absolute ecstasy with every push. The condom is best suited for highly sensual and pleasurable encounter.</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Discreet Delivery</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span></span><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">without</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Shippping Charges:.</span></span></strong></span></span></p>\r\n\r\n<h1><span style=\"font-size:24pt\"><span style=\"background-color:#faf9f7\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges.</span></span></strong></span></span></span></h1>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:#999ca6\">Beboy Super Dotted Flavoured Condoms &ndash; Product Info</span></span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:#999ca6\">Colour &amp; Lubrication:</span></span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:#999ca6\">&nbsp;Transparent Lubricated</span></span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:#999ca6\">Flavour:</span></span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:#999ca6\"> Mango</span></span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:#999ca6\">Dimension:&nbsp;</span></span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><span style=\"color:#999ca6\">Length 180 mm (min) | Width: 53 &plusmn;2 mm</span></span></span></span></span></p>', NULL, NULL, NULL, NULL, 'Beboy United Climax Mango Flavour Condoms Pocket Pack -03 Pcs', 'Beboy United Climax Mango Flavour Condoms Pocket Pack', 'Beboy United Climax Mango Flavour Condoms Pocket Pack Unique Flavors | Mango', NULL, NULL, NULL, '20497', 'in_stock', NULL, 'images/product_image/01-11.png', 'images/product_image/thumb01-11.png', 'images/product_image/small01-11.png', 'images/product_image/medium01-11.png', 'images/product_image/large01-11.png', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-12-21 08:24:12', '2022-12-21 08:24:12'),
(1101, 33, NULL, 15, NULL, NULL, NULL, NULL, 'Beboy Air Thin Bubble Gum Flavour Condoms Pocket Pack -03 Pcs', NULL, 'beboy-air-thin-bubble-gum-flavour-condoms-pocket-pack-03-pcs', NULL, NULL, 0.000, NULL, 100, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">When you are keen to extend your coital time, (who doesn&#39;t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market, and set to take the market by storm. The&nbsp;Beboy Condoms comes in various flavour to make it more interesting for her to indulge a little longer. You can see her enjoy your intimacy and the ability to stay longer naturally makes her go wild. You can see her moaning in pleasure and absolute ecstasy with every push. The condom is best suited for highly sensual and pleasurable encounter.</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Discreet Delivery</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span></span><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">without</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Shippping Charges:.</span></span></strong></span></span></p>\r\n\r\n<h1><span style=\"font-size:24pt\"><span style=\"background-color:#faf9f7\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges.</span></span></strong></span></span></span></h1>\r\n\r\n<h1>&nbsp;</h1>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Beboy Super Dotted Flavoured Condoms &ndash; Product Info</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Colour &amp; Lubrication:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Transparent Lubricated</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Flavour:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"> Bubble Gum</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Dimension:&nbsp;</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Length 180 mm (min) | Width: 53 &plusmn;2 mm</span></span></span></span></p>', NULL, NULL, NULL, NULL, 'Beboy Air Thin Bubble Gum Flavour Condoms Pocket', 'Beboy Air Thin Bubble Gum Flavour Condoms Pocket', 'Biggest Dots for more stimulation and pleasure with extra fragrance. First Time in Bangladesh, Beboy Super Dotted Condoms with Flavor and Climax Delay Technology', NULL, NULL, NULL, '119', 'in_stock', NULL, 'images/product_image/01-11.png', 'images/product_image/thumb01-11.png', 'images/product_image/small01-11.png', 'images/product_image/medium01-11.png', 'images/product_image/large01-11.png', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-12-21 08:26:50', '2022-12-21 08:26:50'),
(1102, 33, NULL, 15, NULL, NULL, NULL, NULL, 'Beboy Air Thin Litchi Flavour Condoms Pocket Pack -03 Pcs', NULL, 'beboy-air-thin-litchi-flavour-condoms-pocket-pack-03-pcs', NULL, NULL, 0.000, NULL, 100, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">When you are keen to extend your coital time, (who doesn&#39;t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market, and set to take the market by storm. The&nbsp;Beboy Condoms comes in various flavour to make it more interesting for her to indulge a little longer. You can see her enjoy your intimacy and the ability to stay longer naturally makes her go wild. You can see her moaning in pleasure and absolute ecstasy with every push. The condom is best suited for highly sensual and pleasurable encounter.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Beboy Super Dotted Flavoured Condoms &ndash; Product Info</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Colour &amp; Lubrication:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Transparent Lubricated</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Flavour:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"> Litchi</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Dimension:&nbsp;</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Length 180 mm (min) | Width: 53 &plusmn;2 mm</span></span></span></span></p>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Beboy Super Dotted Flavoured Condoms &ndash; Product Info</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Colour &amp; Lubrication:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Transparent Lubricated</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Flavour:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"> Litchi</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Dimension:&nbsp;</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Length 180 mm (min) | Width: 53 &plusmn;2 mm</span></span></span></span></p>', NULL, NULL, NULL, NULL, 'Beboy Air Thin Litchi Flavour Condoms Pocket Pack', 'Beboy Air Thin Litchi Flavour Condoms Pocket Pack', 'Climax Delay Technology to increase love-making duration and longer sex than ever before.100% Electronically Tested for more protection and security against STD/Pregnancy', NULL, NULL, NULL, '52428', 'in_stock', NULL, 'images/product_image/01-11.png', 'images/product_image/thumb01-11.png', 'images/product_image/small01-11.png', 'images/product_image/medium01-11.png', 'images/product_image/large01-11.png', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-12-21 08:30:53', '2022-12-21 08:30:53');
INSERT INTO `products` (`id`, `user_id`, `supplier_id`, `category_id`, `sub_category_id`, `pro_sub_category_id`, `pro_pro_category_id`, `component_id`, `name`, `subtitle`, `slug`, `max_order_qty`, `min_order_qty`, `buying_price`, `discount_price`, `regular_price`, `special_price`, `offer_price`, `price_highlight`, `call_for_price`, `estimated_price`, `warranty`, `discount`, `qty`, `total_sell`, `total_product`, `barcode`, `description`, `product_summery`, `specification`, `product_highlights`, `note`, `shop`, `meta_title`, `meta_keywords`, `meta_des`, `image_alt`, `image_des`, `click`, `sku`, `stock_status`, `video`, `image`, `product_image_thumb`, `product_image_small`, `product_image_medium`, `product_image_large`, `status`, `home_delivery`, `offer`, `updated_by_1`, `updated_by_2`, `compatible_product_ids`, `update_current_serial`, `user__info_id`, `seq_product`, `created_at`, `updated_at`) VALUES
(1103, 33, NULL, 15, NULL, NULL, NULL, NULL, 'Beboy Air Thin Chocolate Flavour Condoms Pocket Pack -03 Pcs', NULL, 'beboy-air-thin-chocolate-flavour-condoms-pocket-pack-03-pcs', NULL, NULL, 0.000, NULL, 100, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">When you are keen to extend your coital time, (who doesn&#39;t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market, and set to take the market by storm. The&nbsp;Beboy Condoms comes in various flavour to make it more interesting for her to indulge a little longer. You can see her enjoy your intimacy and the ability to stay longer naturally makes her go wild. You can see her moaning in pleasure and absolute ecstasy with every push. The condom is best suited for highly sensual and pleasurable encounter.</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Discreet Delivery</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span></span><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">without</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Shippping Charges:.</span></span></strong></span></span></p>\r\n\r\n<h1><span style=\"font-size:24pt\"><span style=\"background-color:#faf9f7\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges.</span></span></strong></span></span></span></h1>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Beboy Super Dotted Flavoured Condoms &ndash; Product Info</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Colour &amp; Lubrication:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Transparent Lubricated</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Flavour:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"> Chocolate</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Dimension:&nbsp;</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Length 180 mm (min) | Width: 53 &plusmn;2 mm</span></span></span></span></p>', NULL, NULL, NULL, NULL, 'Beboy Air Thin Chocolate Flavour Condoms Pocket Pack -03 Pcs', 'Beboy Air Thin Chocolate Flavour Condoms Pocket', '100% Electronically Tested for more protection and security against STD/Pregnancy. Biggest Dots for more stimulation and pleasure with extra fragrance', NULL, NULL, NULL, '63678', 'in_stock', NULL, 'images/product_image/01-11.png', 'images/product_image/thumb01-11.png', 'images/product_image/small01-11.png', 'images/product_image/medium01-11.png', 'images/product_image/large01-11.png', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-12-21 08:33:57', '2022-12-21 08:33:57'),
(1104, 33, NULL, 15, NULL, NULL, NULL, NULL, 'Beboy Air Thin Extra Time Invisible Raat Ki Raani Flavour Condoms | -10 pcs', NULL, 'beboy-air-thin-extra-time-invisible-raat-ki-raani-flavour-condoms-10-pcs', NULL, NULL, 0.000, NULL, 280, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">When you are keen to extend your coital time, (who doesn&#39;t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market, and set to take the market by storm. The Air Thin Beboy Condoms comes in various flavour to make it more interesting for her to indulge a little longer. You can see her enjoy your intimacy and the ability to stay longer naturally makes her go wild. You can see her moaning in pleasure and absolute ecstasy with every push. The condom is best suited for highly sensual and pleasurable encounter.</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">How To Use</span></span></span></span>\r\n\r\n	<ol>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Carefully open and remove condom from wrapper.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Place condom on the head of the erect, hard penis. If uncircumcised, pull back the foreskin first.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Pinch air out of the tip of the condom.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Unroll condom all the way down the penis.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">After love making,&nbsp;carefully remove the condom and throw it in the trash.</span></span></span></span></li>\r\n	</ol>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Discreet Delivery</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span></span><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">without</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Shippping Charges:.</span></span></strong></span></span></p>\r\n\r\n<h1><span style=\"font-size:24pt\"><span style=\"background-color:#faf9f7\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges.</span></span></strong></span></span></span></h1>\r\n\r\n<p>&nbsp;</p>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Beboy Air Thin Extra Time Condoms &ndash; Product Info</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Colour &amp; Lubrication:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Transparent Lubricated</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Flavour:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Raat Ki Raani Fragrance</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Dimension:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Length 180 mm (min) | Width: 53 &plusmn;2 mm</span></span></span></span></p>', NULL, NULL, NULL, NULL, 'Beboy Air Thin Extra Time Invisible Raat Ki Raani Flavour Condoms | -10 pcs', 'Beboy Air Thin Extra Time Invisible Raat Ki Raani Flavour Condoms', 'First Time in Bangladesh, Beboy Air Thin Condoms with Flavour and Climax Delay Technology.Climax Delay Technology to increase love-making duration and longer sex than ever before', 'beboy-air-thin-extra-time-invisible-raat-ki-raani-flavour-condoms-10-pcs', 'beboy-air-thin-extra-time-invisible-raat-ki-raani-flavour-condoms-10-pcs', NULL, '11152', 'in_stock', NULL, 'images/product_image/12.png', 'images/product_image/thumb12.png', 'images/product_image/small12.png', 'images/product_image/medium12.png', 'images/product_image/large12.png', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-12-21 08:37:40', '2022-12-21 08:37:40'),
(1105, 33, NULL, 16, NULL, NULL, NULL, NULL, 'Beboy Air Thin Feel Skin Marigold Flavour Condoms | -10 pcs', NULL, 'beboy-air-thin-feel-skin-marigold-flavour-condoms-10-pcs', NULL, NULL, 0.000, NULL, 280, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, 10, NULL, NULL, NULL, '<p><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">When you are keen to extend your coital time, (who doesn&#39;t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market, and set to take the market by storm. The Air Thin Beboy Condoms comes in various flavour to make it more interesting for her to indulge a little longer. You can see her enjoy your intimacy and the ability to stay longer naturally makes her go wild. You can see her moaning in pleasure and absolute ecstasy with every push. The condom is best suited for highly sensual and pleasurable encounter.</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">How To Use</span></span></span></span>\r\n\r\n	<ol>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Carefully open and remove condom from wrapper.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Place condom on the head of the erect, hard penis. If uncircumcised, pull back the foreskin first.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Pinch air out of the tip of the condom.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Unroll condom all the way down the penis.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">After love making,&nbsp;carefully remove the condom and throw it in the trash.</span></span></span></span></li>\r\n	</ol>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Discreet Delivery</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span></span><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">without</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Shippping Charges:.</span></span></strong></span></span></p>\r\n\r\n<h1><span style=\"font-size:24pt\"><span style=\"background-color:#faf9f7\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges.</span></span></strong></span></span></span></h1>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Beboy Air Thin Extra Time Condoms &ndash; Product Info</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Colour &amp; Lubrication:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Transparent Lubricated</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Flavour:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Feel Skin Marigold</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Dimension:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Length 180 mm (min) | Width: 53 &plusmn;2 mm</span></span></span></span></p>', NULL, NULL, NULL, NULL, 'Beboy Air Thin Feel Skin Marigold Flavour Condoms |', 'Beboy Air Thin Feel Skin Marigold Flavour Condoms', 'Beboy Air Thin Feel Skin Marigold Flavor Condom. First Time in Bangladesh, Beboy Air Thin Condoms with Flavor and Climax Delay Technology', 'beboy-air-thin-feel-skin-marigold-flavour-condoms-10-pcs', 'beboy-air-thin-feel-skin-marigold-flavour-condoms-10-pcs', NULL, '52688', 'in_stock', NULL, 'images/product_image/13.png', 'images/product_image/thumb13.png', 'images/product_image/small13.png', 'images/product_image/medium13.png', 'images/product_image/large13.png', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-12-21 08:41:23', '2022-12-21 08:41:23'),
(1106, 33, NULL, 16, NULL, NULL, NULL, NULL, 'Beboy United Climax Mango Flavour Ribbed+Dotted+Contoured With Climax Delay Condoms | -12 pcs', NULL, 'beboy-united-climax-mango-flavour-ribbeddottedcontoured-with-climax-delay-condoms-12-pcs', NULL, NULL, 0.000, NULL, 320, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">When you are keen to extend your coital time, (who doesn&#39;t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market, and set to take the market by storm. The Air Thin Beboy Condoms comes in various flavour to make it more interesting for her to indulge a little longer. You can see her enjoy your intimacy and the ability to stay longer naturally makes her go wild. You can see her moaning in pleasure and absolute ecstasy with every push. The condom is best suited for highly sensual and pleasurable encounter.</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">How To Use</span></span></span></span>\r\n\r\n	<ol>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Carefully open and remove condom from wrapper.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Place condom on the head of the erect, hard penis. If uncircumcised, pull back the foreskin first.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Pinch air out of the tip of the condom.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Unroll condom all the way down the penis.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">After love making,&nbsp;carefully remove the condom and throw it in the trash.</span></span></span></span></li>\r\n	</ol>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Discreet Delivery</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span></span><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">without</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Shippping Charges:.</span></span></strong></span></span></p>\r\n\r\n<h1><span style=\"font-size:24pt\"><span style=\"background-color:#faf9f7\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges.</span></span></strong></span></span></span></h1>\r\n\r\n<h1>&nbsp;</h1>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Beboy Air Thin Extra Time Condoms &ndash; Product Info</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Colour &amp; Lubrication:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Transparent Lubricated</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Flavour:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Mango</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Dimension:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Length 180 mm (min) | Width: 53 &plusmn;2 mm</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, NULL, NULL, 'Beboy United Climax Mango Flavour Ribbed+Dotted+Contoured With Climax Delay Condoms', 'Beboy United Climax Mango Flavor Ribbed Dotted Contoured With Climax Delay Condoms', 'Beboy United Climax Mango Flavor Ribbed Dotted Contoured With Climax Delay Condoms. European Conformity Product with no compromise on quality | Made with Love in India.', 'beboy-united-climax-mango-flavour-ribbeddottedcontoured-with-climax-delay-condoms-12-pcs', 'beboy-united-climax-mango-flavour-ribbeddottedcontoured-with-climax-delay-condoms-12-pcs', NULL, '84644', 'in_stock', NULL, 'images/product_image/14.png', 'images/product_image/thumb14.png', 'images/product_image/small14.png', 'images/product_image/medium14.png', 'images/product_image/large14.png', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-12-21 08:45:31', '2022-12-21 08:45:31'),
(1107, 33, NULL, 16, NULL, NULL, NULL, NULL, 'Beboy Extra Time Super Dotted Orange Flavour Condoms | -12 pcs', NULL, 'beboy-extra-time-super-dotted-orange-flavour-condoms-12-pcs', NULL, NULL, 0.000, NULL, 320, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">When you are keen to extend your coital time, (who doesn&#39;t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market, and set to take the market by storm. The Air Thin Beboy Condoms comes in various flavour to make it more interesting for her to indulge a little longer. You can see her enjoy your intimacy and the ability to stay longer naturally makes her go wild. You can see her moaning in pleasure and absolute ecstasy with every push. The condom is best suited for highly sensual and pleasurable encounter.</span></span></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">How To Use</span></span></span></span>\r\n\r\n	<ol>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Carefully open and remove condom from wrapper.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Place condom on the head of the erect, hard penis. If uncircumcised, pull back the foreskin first.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Pinch air out of the tip of the condom.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Unroll condom all the way down the penis.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">After love making,&nbsp;carefully remove the condom and throw it in the trash.</span></span></span></span></li>\r\n	</ol>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Discreet Delivery</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span></span><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">without</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Shippping Charges:.</span></span></strong></span></span></p>\r\n\r\n<h1><span style=\"font-size:24pt\"><span style=\"background-color:#faf9f7\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges.</span></span></strong></span></span></span></h1>\r\n\r\n<h1>&nbsp;</h1>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Beboy Air Thin Extra Time Condoms &ndash; Product Info</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Colour &amp; Lubrication:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Transparent Lubricated</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Flavour:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Orange</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Dimension:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Length 180 mm (min) | Width: 53 &plusmn;2 mm</span></span></span></span></p>', NULL, NULL, NULL, NULL, 'Beboy Extra Time Super Dotted Orange Flavour Condoms | -12 pcs', 'Beboy Extra Time Super Dotted Orange Flavour Condom', 'Beboy Extra Time Super Dotted Orange Flavor Condom.100% Electronically Tested for more protection and security against STD/Pregnancy', NULL, NULL, NULL, '67054', 'in_stock', NULL, 'images/product_image/15.png', 'images/product_image/thumb15.png', 'images/product_image/small15.png', 'images/product_image/medium15.png', 'images/product_image/large15.png', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-12-21 08:49:04', '2022-12-21 08:49:04'),
(1109, 33, NULL, 16, NULL, NULL, NULL, NULL, 'Beboy Avant-Garde Super Dotted Strawberry Flavour Condoms | -12 pcs', NULL, 'beboy-avant-garde-super-dotted-strawberry-flavour-condoms-12-pcs', NULL, NULL, 0.000, NULL, 320, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, 50, NULL, NULL, NULL, '<p><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">When you are keen to extend your coital time, (who doesn&#39;t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market, and set to take the market by storm. The Air Thin Beboy Condoms comes in various flavour to make it more interesting for her to indulge a little longer. You can see her enjoy your intimacy and the ability to stay longer naturally makes her go wild. You can see her moaning in pleasure and absolute ecstasy with every push. The condom is best suited for highly sensual and pleasurable encounter.</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">How To Use</span></span></span></span>\r\n\r\n	<ol>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Carefully open and remove condom from wrapper.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Place condom on the head of the erect, hard penis. If uncircumcised, pull back the foreskin first.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Pinch air out of the tip of the condom.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Unroll condom all the way down the penis.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">After love making,&nbsp;carefully remove the condom and throw it in the trash.</span></span></span></span></li>\r\n	</ol>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Discreet Delivery</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span></span><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">without</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Shippping Charges:.</span></span></strong></span></span></p>\r\n\r\n<h1><span style=\"font-size:24pt\"><span style=\"background-color:#faf9f7\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges.</span></span></strong></span></span></span></h1>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Beboy Air Thin Extra Time Condoms &ndash; Product Info</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Colour &amp; Lubrication:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Transparent Lubricated</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Flavour:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Strawberry</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Dimension:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Length 180 mm (min) | Width: 53 &plusmn;2 mm</span></span></span></span></p>', NULL, NULL, NULL, NULL, 'Beboy Avant-Garde Super Dotted Strawberry Flavour Condoms | -12 pcs', 'Beboy Avant-Garde Super Dotted Strawberry Flavor Condoms', 'Beboy Avant-Garde Super Dotted Strawberry Flavor Condoms. First Time in Bangladesh, Beboy Air Thin Condoms with Flavour and Climax Delay Technology', 'beboy-avant-garde-super-dotted-strawberry-flavour-condoms-12-pcs', 'beboy-avant-garde-super-dotted-strawberry-flavour-condoms-12-pcs', NULL, '34032', 'in_stock', NULL, 'images/product_image/16.png', 'images/product_image/thumb16.png', 'images/product_image/small16.png', 'images/product_image/medium16.png', 'images/product_image/large16.png', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-12-21 08:53:21', '2022-12-21 08:53:21'),
(1110, 33, NULL, 16, NULL, NULL, NULL, NULL, 'Beboy Extra Time Multi-Texture Rose Flavour Ribbed Dotted Contoured Bulged Condoms | -12 pcs', NULL, 'beboy-extra-time-multi-texture-rose-flavour-ribbed-dotted-contoured-bulged-condoms-12-pcs', NULL, NULL, 0.000, NULL, 320, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, 15, NULL, NULL, NULL, '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">When you are keen to extend your coital time, (who doesn&#39;t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market, and set to take the market by storm. The Air Thin Beboy Condoms comes in various flavour to make it more interesting for her to indulge a little longer. You can see her enjoy your intimacy and the ability to stay longer naturally makes her go wild. You can see her moaning in pleasure and absolute ecstasy with every push. The condom is best suited for highly sensual and pleasurable encounter.</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">How To Use</span></span></span></span>\r\n\r\n	<ol>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Carefully open and remove condom from wrapper.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Place condom on the head of the erect, hard penis. If uncircumcised, pull back the foreskin first.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Pinch air out of the tip of the condom.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Unroll condom all the way down the penis.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">After love making,&nbsp;carefully remove the condom and throw it in the trash.</span></span></span></span></li>\r\n	</ol>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Discreet Delivery</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span></span><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">without</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Shippping Charges:.</span></span></strong></span></span></p>\r\n\r\n<h1><span style=\"font-size:24pt\"><span style=\"background-color:#faf9f7\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges.</span></span></strong></span></span></span></h1>\r\n\r\n<p>&nbsp;</p>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Beboy Air Thin Extra Time Condoms &ndash; Product Info</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Colour &amp; Lubrication:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Transparent Lubricated</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Flavour:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Rose</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Dimension:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Length 180 mm (min) | Width: 53 &plusmn;2 mm</span></span></span></span></p>', NULL, NULL, NULL, NULL, 'Beboy Extra Time Multi-Texture Rose Flavor Ribbed Dotted Contoured Bulged Condoms', 'Beboy Extra Time Multi-Texture Rose Flavor Ribbed Dotted Contoured Bulged Condoms', 'Beboy Extra Time Multi-Texture Rose Flavor Ribbed Dotted Contoured Bulged Condoms .', NULL, NULL, NULL, '1262', 'in_stock', NULL, 'images/product_image/17.png', 'images/product_image/thumb17.png', 'images/product_image/small17.png', 'images/product_image/medium17.png', 'images/product_image/large17.png', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-12-21 08:56:01', '2022-12-21 08:56:01'),
(1111, 33, NULL, 16, NULL, NULL, NULL, NULL, 'Beboy Extra Assorted Pleasure Mix, 04 Air Thin+04 Multi-Texture+04 Super Dotted Flavour Condoms | -12 pcs', NULL, 'beboy-extra-assorted-pleasure-mix-04-air-thin04-multi-texture04-super-dotted-flavour-condoms-12-pcs', NULL, NULL, 0.000, NULL, 320, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, 20, NULL, NULL, NULL, '<p><span style=\"font-size:12pt\"><span style=\"font-size:11.5pt\">When you are keen to extend your coital time, (who doesn&#39;t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market, and set to take the market by storm. The Air Thin Beboy Condoms comes in various flavour to make it more interesting for her to indulge a little longer. You can see her enjoy your intimacy and the ability to stay longer naturally makes her go wild. You can see her moaning in pleasure and absolute ecstasy with every push. The condom is best suited for highly sensual and pleasurable encounter.</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-size:11.5pt\">How To Use</span></span>\r\n\r\n	<ol>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\">Carefully open and remove condom from wrapper.</span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\">Place condom on the head of the erect, hard penis. If uncircumcised, pull back the foreskin first.</span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\">Pinch air out of the tip of the condom.</span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\">Unroll condom all the way down the penis.</span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\">After love making,&nbsp;carefully remove the condom and throw it in the trash.</span></span></span></li>\r\n	</ol>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-size:11.5pt\">Discreet Delivery</span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-size:11.5pt\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span><strong><span style=\"font-size:11.5pt\">without</span></strong><span style=\"font-size:11.5pt\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><strong><span style=\"font-size:11.5pt\">Shippping Charges:.</span></strong></span></p>\r\n\r\n<h1><span style=\"font-size:24pt\"><span style=\"background-color:#faf9f7\"><strong><span style=\"font-size:11.5pt\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges.</span></strong></span></span></h1>', '<p><span style=\"font-size:12pt\"><span style=\"font-size:11.5pt\">Beboy Air Thin Extra Time Condoms &ndash; Product Info</span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><strong><span style=\"font-size:11.5pt\">Colour &amp; Lubrication:</span></strong><span style=\"font-size:11.5pt\">&nbsp;Transparent Lubricated</span><br />\r\n<strong><span style=\"font-size:11.5pt\">Flavour:</span></strong><span style=\"font-size:11.5pt\">&nbsp;Rose</span><br />\r\n<strong><span style=\"font-size:11.5pt\">Dimension:</span></strong><span style=\"font-size:11.5pt\">Length 180 mm (min) | Width: 53 &plusmn;2 mm</span></span></p>', NULL, NULL, NULL, NULL, 'Beboy Extra Assorted Pleasure Mix, 04 Air Thin+04 Multi-Texture+04 Super Dotted Flavor Condoms', 'Beboy Extra Assorted Pleasure Mix, 04 Air Thin+04 Multi-Texture+04 Super Dotted Flavor Condoms', 'Beboy Extra Assorted Pleasure Mix, 04 Air Thin+04 Multi-Texture+04 Super Dotted Flavor Condoms', 'beboy-extra-assorted-pleasure-mix-04-air-thin04-multi-texture04-super-dotted-flavour-condoms-12-pcs', 'beboy-extra-assorted-pleasure-mix-04-air-thin04-multi-texture04-super-dotted-flavour-condoms-12-pcs', NULL, '9933', 'in_stock', NULL, 'images/product_image/18.png', 'images/product_image/thumb18.png', 'images/product_image/small18.png', 'images/product_image/medium18.png', 'images/product_image/large18.png', 1, 1, NULL, 33, NULL, NULL, 2, NULL, NULL, '2022-12-21 09:01:10', '2022-12-21 09:02:04');
INSERT INTO `products` (`id`, `user_id`, `supplier_id`, `category_id`, `sub_category_id`, `pro_sub_category_id`, `pro_pro_category_id`, `component_id`, `name`, `subtitle`, `slug`, `max_order_qty`, `min_order_qty`, `buying_price`, `discount_price`, `regular_price`, `special_price`, `offer_price`, `price_highlight`, `call_for_price`, `estimated_price`, `warranty`, `discount`, `qty`, `total_sell`, `total_product`, `barcode`, `description`, `product_summery`, `specification`, `product_highlights`, `note`, `shop`, `meta_title`, `meta_keywords`, `meta_des`, `image_alt`, `image_des`, `click`, `sku`, `stock_status`, `video`, `image`, `product_image_thumb`, `product_image_small`, `product_image_medium`, `product_image_large`, `status`, `home_delivery`, `offer`, `updated_by_1`, `updated_by_2`, `compatible_product_ids`, `update_current_serial`, `user__info_id`, `seq_product`, `created_at`, `updated_at`) VALUES
(1112, 33, NULL, 16, NULL, NULL, NULL, NULL, 'Beboy Assorted Pleasure Mix, 04 Air Thin+04 Multi-Texture+04 Super Dotted Flavour Condoms | -12 pcs', NULL, 'beboy-assorted-pleasure-mix-04-air-thin04-multi-texture04-super-dotted-flavour-condoms-12-pcs', NULL, NULL, 0.000, NULL, 320, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, 20, NULL, NULL, NULL, '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">When you are keen to extend your coital time, (who doesn&#39;t want?) then you have an easy way. You can just buy Beboy, a new brand that has hit the Indian condom market, and set to take the market by storm. The Air Thin Beboy Condoms comes in various flavour to make it more interesting for her to indulge a little longer. You can see her enjoy your intimacy and the ability to stay longer naturally makes her go wild. You can see her moaning in pleasure and absolute ecstasy with every push. The condom is best suited for highly sensual and pleasurable encounter.</span></span></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">How To Use</span></span></span></span>\r\n\r\n	<ol>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Carefully open and remove condom from wrapper.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Place condom on the head of the erect, hard penis. If uncircumcised, pull back the foreskin first.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Pinch air out of the tip of the condom.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Unroll condom all the way down the penis.</span></span></span></span></li>\r\n		<li><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">After love making,&nbsp;carefully remove the condom and throw it in the trash.</span></span></span></span></li>\r\n	</ol>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Discreet Delivery</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span></span><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">without</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Shippping Charges:.</span></span></strong></span></span></p>\r\n\r\n<h1><span style=\"font-size:24pt\"><span style=\"background-color:#faf9f7\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges.</span></span></strong></span></span></span></h1>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Beboy Air Thin Extra Time Condoms &ndash; Product Info</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Colour &amp; Lubrication:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;Transparent Lubricated</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Flavour:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;04 Litchi+04 Pineapple+04 Mix Fruits</span></span><br />\r\n<strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Dimension:</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Length 180 mm (min) | Width: 53 &plusmn;2 mm</span></span></span></span></p>', NULL, NULL, NULL, NULL, 'Beboy Assorted Pleasure Mix, 04 Air Thin+04 Multi-Texture+04 Super Dotted Flavour Condoms | -12 pcs', 'Beboy Assorted Pleasure Mix, 04 Air Thin+04 Multi-Texture+04 Super Dotted Flavour Condoms | -12 pcs', 'Beboy Assorted Pleasure Mix, 04 Air Thin+04 Multi-Texture+04 Super Dotted Flavour Condoms | -12 pcs', 'beboy-assorted-pleasure-mix-04-air-thin04-multi-texture04-super-dotted-flavour-condoms-12-pcs', 'beboy-assorted-pleasure-mix-04-air-thin04-multi-texture04-super-dotted-flavour-condoms-12-pcs', NULL, '78416', 'in_stock', NULL, 'images/product_image/19.png', 'images/product_image/thumb19.png', 'images/product_image/small19.png', 'images/product_image/medium19.png', 'images/product_image/large19.png', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-12-21 09:09:01', '2022-12-21 09:09:01'),
(1113, 33, NULL, 16, NULL, NULL, NULL, NULL, 'Beboy Play Long Fragrance Delay Spray (Rose)', NULL, 'beboy-play-long-fragrance-delay-spray-rose', NULL, NULL, 0.000, NULL, 700, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, 50, NULL, NULL, NULL, '<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">How To Use</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">No.&nbsp;of Sprays and Location:.</span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Apply 3 sprays or more, but no more than 10 on the underside of the penis head, and some on the underside of the shaft.&nbsp;Once you&rsquo;ve sprayed it, gently rub it in until it appears to be absorbed. This shouldn&rsquo;t take more than 10-15&nbsp;seconds to absorbed</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;</span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Flaccid or erect?</span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">It doesn&rsquo;t matter if you apply it when flaccid or erect. It will work equally well.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;</span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">How long before sex to spray:.</span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">5-10 minutes</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Discreet Delivery</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span></span><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">without</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Shippping Charges:.</span></span></strong></span></span></p>\r\n\r\n<h1><span style=\"font-size:24pt\"><span style=\"background-color:#faf9f7\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges.</span></span></strong></span></span></span></h1>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">First time</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;in Bangladesh, Delay Spray with Fragrance with more active ingredient. Beboy Play Long Fragrance Delay Spray is an excellent delay spray for men and is the ultimate solution to one of the most common male sexual issues, premature ejaculation and increase the intercourse duration. It de-sensitizes your male organ when sprayed to the head and increase the intercourse duration for man.</span></span></span></span></p>', NULL, NULL, NULL, NULL, 'beboy-play-long-fragrance-delay-spray-rose', 'Beboy Play Long Fragrance Delay Spray', 'Beboy Play Long Fragrance Delay Spray condom', 'beboy-play-long-fragrance-delay-spray-rose', 'beboy-play-long-fragrance-delay-spray-rose', NULL, '15687', 'in_stock', NULL, 'images/product_image/20.png', 'images/product_image/thumb20.png', 'images/product_image/small20.png', 'images/product_image/medium20.png', 'images/product_image/large20.png', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-12-21 09:13:00', '2022-12-21 09:13:00'),
(1114, 33, NULL, 16, NULL, NULL, NULL, NULL, 'Beboy Play Long Fragrance Delay Spray (Jasmine)', NULL, 'beboy-play-long-fragrance-delay-spray-jasmine', NULL, NULL, 0.000, NULL, 700, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, 50, NULL, NULL, NULL, '<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">How To Use</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">No.&nbsp;of Sprays and Location:.</span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Apply 3 sprays or more, but no more than 10 on the underside of the penis head, and some on the underside of the shaft.&nbsp;Once you&rsquo;ve sprayed it, gently rub it in until it appears to be absorbed. This shouldn&rsquo;t take more than 10-15&nbsp;seconds to absorbed</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;</span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Flaccid or erect?</span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">It doesn&rsquo;t matter if you apply it when flaccid or erect. It will work equally well.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">&nbsp;</span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">How long before sex to spray:.</span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">5-10 minutes</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Discreet Delivery</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span></span><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">without</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Shippping Charges:.</span></span></strong></span></span></p>\r\n\r\n<h1><span style=\"font-size:24pt\"><span style=\"background-color:#faf9f7\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges.</span></span></strong></span></span></span></h1>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">First time</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;in Bangladesh, Delay Spray with Fragrance with more active ingredient. Beboy Play Long Fragrance Delay Spray is an excellent delay spray for men and is the ultimate solution to one of the most common male sexual issues, premature ejaculation and increase the intercourse duration. It de-sensitizes your male organ when sprayed to the head and increase the intercourse duration for man.</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, NULL, NULL, 'Beboy Play Long Fragrance Delay Spray (Jasmine)', 'Beboy Play Long Fragrance Delay Spray Jasmine', 'Beboy Play Long Fragrance Delay Spray Jasmine', 'beboy-play-long-fragrance-delay-spray-jasmine', 'beboy-play-long-fragrance-delay-spray-jasmine', NULL, '37906', 'in_stock', NULL, 'images/product_image/21.png', 'images/product_image/thumb21.png', 'images/product_image/small21.png', 'images/product_image/medium21.png', 'images/product_image/large21.png', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-12-21 09:15:20', '2022-12-21 09:15:20'),
(1115, 33, NULL, 16, NULL, NULL, NULL, NULL, 'Beboy Pain-Out Spray -75ml e 2.5', NULL, 'beboy-pain-out-spray-75ml-e-25', NULL, NULL, 0.000, NULL, 500, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Beboy Pain-Out Spray -75ml e 2.5', 'Beboy Pain-Out Spray -75ml e 2.5', 'beboy-pain-out-spray-75ml-e-25', 'beboy-pain-out-spray-75ml-e-25', NULL, '11535', 'in_stock', NULL, 'images/product_image/22.png', 'images/product_image/thumb22.png', 'images/product_image/small22.png', 'images/product_image/medium22.png', 'images/product_image/large22.png', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-12-21 09:17:49', '2022-12-21 09:17:49'),
(1116, 33, NULL, 16, NULL, NULL, NULL, NULL, 'Periods Pain Out Feminine Cramp Relief Spray 25ml', NULL, 'periods-pain-out-feminine-cramp-relief-spray-25ml', NULL, NULL, 0.000, NULL, 700, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">First Time in the Bangladesh/world, Beboy Periods Pain Out Spray instantly relief Menstrual Pains and Cramps in women. Beboy Periods Pain Out Spray is 100% natural enriched with Aloe Vera to boost the physical endurance. Beboy Periods Pain Out unique effective formulation reliefs pain instantly</span></span></span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">How To Use</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Shake well before each use. Spray the Beboy Pain Out Pain Relief Spray from 05cm distances on the affected areas 3-4 times a day mainly lower back, abdomen and thigh areas.</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Calibri Light&quot;,sans-serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Discreet Delivery</span></span></span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span></span><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">without</span></span></strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Shippping Charges:.</span></span></strong></span></span></p>\r\n\r\n<h1><span style=\"font-size:24pt\"><span style=\"background-color:#faf9f7\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><strong><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges.</span></span></strong></span></span></span></h1>\r\n\r\n<h1>&nbsp;</h1>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:11.5pt\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">First Time in the Bangladesh/world, Beboy Periods Pain Out Spray instantly relief Menstrual Pains and Cramps in women. Beboy Periods Pain Out Spray is 100% natural enriched with Aloe Vera to boost the physical endurance. Beboy Periods Pain Out unique effective formulation reliefs pain instantly</span></span></span></span></p>', NULL, NULL, NULL, NULL, 'Periods Pain Out Feminine Cramp Relief Spray 25ml', 'Periods Pain Out Feminine Cramp Relief Spray 25ml', 'Periods Pain Out Feminine Cramp Relief Spray 25ml', NULL, NULL, NULL, '76667', 'in_stock', NULL, 'images/product_image/23.webp', 'images/product_image/thumb23.webp', 'images/product_image/small23.webp', 'images/product_image/medium23.webp', 'images/product_image/large23.webp', 1, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-12-21 09:19:49', '2022-12-21 09:19:49'),
(1117, 33, NULL, 16, NULL, NULL, NULL, NULL, 'V-again Vaginal Tightening & Revitalizing Cream with Pump, 50gm', NULL, 'v-again-vaginal-tightening-revitalizing-cream-with-pump-50gm', NULL, NULL, 0.000, NULL, 999, NULL, NULL, 'special_price', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-size:11.5pt\">Usage</span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-size:11.5pt\">For women Only. Take required quantity of V-again and apply or rub onto the vaginal area twice a day.</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-size:11.5pt\">Discreet Delivery</span></span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-size:11.5pt\">We value the privacy of our customer therefore we deliver all our products&nbsp;</span><strong><span style=\"font-size:11.5pt\">without</span></strong><span style=\"font-size:11.5pt\">&nbsp;any branding. Also, there will be no content description on the outside of the parcel, only the carrier label will be displayed. As a result, no one besides you will know the contents inside.</span></span></p>\r\n\r\n<p><span style=\"font-size:12pt\"><strong><span style=\"font-size:11.5pt\">Shippping Charges:.</span></strong></span></p>\r\n\r\n<h1><span style=\"font-size:24pt\"><span style=\"background-color:#faf9f7\"><strong><span style=\"font-size:11.5pt\">We deliver our product all over Bangladesh with a minimum or Dhaka City 60 Taka &amp; Out Of Dhaka 120 Taka shipping charges.</span></strong></span></span></h1>', '<p><span style=\"font-size:11.5pt\">V-again is a unique mixture of natural ingredients with aloe vera, tea tree oil and wheat germ oil extract,&nbsp;developed for rejuvenation &amp; tightening of vagina with&nbsp;lubrication properties</span></p>', NULL, NULL, NULL, NULL, 'V-again Vaginal Tightening & Revitalizing Cream with Pump, 50gm', 'V-again Vaginal Tightening & Revitalizing Cream with Pump, 50gm', 'V-again Vaginal Tightening & Revitalizing Cream with Pump, 50gm', 'v-again-vaginal-tightening-and-revitalizing-cream-with-pump-50gm', 'v-again-vaginal-tightening-and-revitalizing-cream-with-pump-50gm', NULL, '10041', 'in_stock', NULL, 'images/product_image/24.jpg', 'images/product_image/thumb24.jpg', 'images/product_image/small24.jpg', 'images/product_image/medium24.jpg', 'images/product_image/large24.jpg', 1, 1, NULL, 33, NULL, NULL, 2, NULL, NULL, '2022-12-21 09:22:12', '2022-12-22 10:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `product_brands`
--

CREATE TABLE `product_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `brand_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_emis`
--

CREATE TABLE `product_emis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `emi_month` int(11) DEFAULT NULL,
  `emi_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_faqs`
--

CREATE TABLE `product_faqs` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `point` smallint(6) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_highlights`
--

CREATE TABLE `product_highlights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `highlights` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_highlights`
--

INSERT INTO `product_highlights` (`id`, `product_id`, `highlights`, `created_at`, `updated_at`) VALUES
(36210, 1093, 'First Time in Bangladesh, Beboy Super Dotted Condoms with Flavour and Climax Delay Technology', '2022-12-21 05:52:09', '2022-12-21 05:52:09'),
(36211, 1093, 'Climax Delay Technology to increase love-making duration and longer sex than ever before.', '2022-12-21 05:52:09', '2022-12-21 05:52:09'),
(36212, 1093, '100% Electronically Tested for more protection and security against STD/Pregnancy', '2022-12-21 05:52:09', '2022-12-21 05:52:09'),
(36213, 1093, 'Biggest Dots for more stimulation and pleasure with extra fragrance', '2022-12-21 05:52:09', '2022-12-21 05:52:09'),
(36214, 1093, 'European Conformity Product with no compromise on quality.', '2022-12-21 05:52:09', '2022-12-21 05:52:09'),
(36215, 1093, 'Unique Flavours | Rose', '2022-12-21 05:52:09', '2022-12-21 05:52:09'),
(36216, 1094, 'First Time in Bangladesh, Beboy Super Dotted Condoms with Flavour and Climax Delay Technology', '2022-12-21 06:02:36', '2022-12-21 06:02:36'),
(36217, 1094, 'Climax Delay Technology to increase love-making duration and longer sex than ever before.', '2022-12-21 06:02:36', '2022-12-21 06:02:36'),
(36218, 1094, '100% Electronically Tested for more protection and security against STD/Pregnancy', '2022-12-21 06:02:36', '2022-12-21 06:02:36'),
(36219, 1094, 'Biggest Dots for more stimulation and pleasure with extra fragrance', '2022-12-21 06:02:37', '2022-12-21 06:02:37'),
(36220, 1094, 'European Conformity Product with no compromise on quality.', '2022-12-21 06:02:37', '2022-12-21 06:02:37'),
(36221, 1094, 'Unique Flavours | Oud', '2022-12-21 06:02:37', '2022-12-21 06:02:37'),
(36222, 1095, 'First Time in Bangladesh, Beboy Super Dotted Condoms with Flavour and Climax Delay Technology', '2022-12-21 06:07:12', '2022-12-21 06:07:12'),
(36223, 1095, 'Climax Delay Technology to increase love-making duration and longer sex than ever before.', '2022-12-21 06:07:12', '2022-12-21 06:07:12'),
(36224, 1095, '100% Electronically Tested for more protection and security against STD/Pregnancy', '2022-12-21 06:07:12', '2022-12-21 06:07:12'),
(36225, 1095, 'Biggest Dots for more stimulation and pleasure with extra fragrance', '2022-12-21 06:07:12', '2022-12-21 06:07:12'),
(36226, 1095, 'European Conformity Product with no compromise on quality.', '2022-12-21 06:07:12', '2022-12-21 06:07:12'),
(36227, 1095, 'European Conformity Product with no compromise on quality.', '2022-12-21 06:07:12', '2022-12-21 06:07:12'),
(36228, 1096, 'First Time in Bangladesh, Beboy Super Dotted Condoms with Flavour and Climax Delay Technology', '2022-12-21 06:10:47', '2022-12-21 06:10:47'),
(36229, 1096, 'Climax Delay Technology to increase love-making duration and longer sex than ever before.', '2022-12-21 06:10:47', '2022-12-21 06:10:47'),
(36230, 1096, '100% Electronically Tested for more protection and security against STD/Pregnancy', '2022-12-21 06:10:47', '2022-12-21 06:10:47'),
(36231, 1096, 'Biggest Dots for more stimulation and pleasure with extra fragrance', '2022-12-21 06:10:47', '2022-12-21 06:10:47'),
(36232, 1096, 'European Conformity Product with no compromise on quality.', '2022-12-21 06:10:47', '2022-12-21 06:10:47'),
(36233, 1096, 'Unique Flavours | Jasmine', '2022-12-21 06:10:47', '2022-12-21 06:10:47'),
(36234, 1097, 'First Time in Bangladesh, Beboy Super Dotted Condoms with Flavour and Climax Delay Technology', '2022-12-21 06:13:34', '2022-12-21 06:13:34'),
(36235, 1097, 'Climax Delay Technology to increase love-making duration and longer sex than ever before.', '2022-12-21 06:13:34', '2022-12-21 06:13:34'),
(36236, 1097, '100% Electronically Tested for more protection and security against STD/Pregnancy', '2022-12-21 06:13:34', '2022-12-21 06:13:34'),
(36237, 1097, 'Biggest Dots for more stimulation and pleasure with extra fragrance', '2022-12-21 06:13:34', '2022-12-21 06:13:34'),
(36238, 1097, 'European Conformity Product with no compromise on quality.', '2022-12-21 06:13:34', '2022-12-21 06:13:34'),
(36239, 1097, 'Unique Flavours | Paan', '2022-12-21 06:13:34', '2022-12-21 06:13:34'),
(36240, 1098, 'First Time in Bangladesh, Beboy Super Dotted Condoms with Flavour and Climax Delay Technology', '2022-12-21 06:17:52', '2022-12-21 06:17:52'),
(36241, 1098, 'Climax Delay Technology to increase love-making duration and longer sex than ever before', '2022-12-21 06:17:52', '2022-12-21 06:17:52'),
(36242, 1098, '100% Electronically Tested for more protection and security against STD/Pregnancy', '2022-12-21 06:17:52', '2022-12-21 06:17:52'),
(36243, 1098, 'Biggest Dots for more stimulation and pleasure with extra fragrance', '2022-12-21 06:17:52', '2022-12-21 06:17:52'),
(36244, 1098, 'European Conformity Product with no compromise on quality.', '2022-12-21 06:17:52', '2022-12-21 06:17:52'),
(36245, 1098, 'Unique Flavours | Marigold', '2022-12-21 06:17:52', '2022-12-21 06:17:52'),
(36246, 1099, 'First Time in Bangladesh, Beboy Super Dotted Condoms with Flavour and Climax Delay Technology', '2022-12-21 08:21:26', '2022-12-21 08:21:26'),
(36247, 1099, 'Climax Delay Technology to increase love-making duration and longer sex than ever before.', '2022-12-21 08:21:26', '2022-12-21 08:21:26'),
(36248, 1099, '100% Electronically Tested for more protection and security against STD/Pregnancy', '2022-12-21 08:21:26', '2022-12-21 08:21:26'),
(36249, 1099, 'Biggest Dots for more stimulation and pleasure with extra fragrance', '2022-12-21 08:21:26', '2022-12-21 08:21:26'),
(36250, 1099, 'European Conformity Product with no compromise on quality.', '2022-12-21 08:21:26', '2022-12-21 08:21:26'),
(36251, 1099, 'Unique Flavours | Jasmine', '2022-12-21 08:21:26', '2022-12-21 08:21:26'),
(36252, 1100, 'First Time in Bangladesh, Beboy Super Dotted Condoms with Flavour and Climax Delay Technology', '2022-12-21 08:24:12', '2022-12-21 08:24:12'),
(36253, 1100, 'Climax Delay Technology to increase love-making duration and longer sex than ever before.', '2022-12-21 08:24:12', '2022-12-21 08:24:12'),
(36254, 1100, '100% Electronically Tested for more protection and security against STD/Pregnancy', '2022-12-21 08:24:12', '2022-12-21 08:24:12'),
(36255, 1100, 'Biggest Dots for more stimulation and pleasure with extra fragrance', '2022-12-21 08:24:12', '2022-12-21 08:24:12'),
(36256, 1100, 'European Conformity Product with no compromise on quality.', '2022-12-21 08:24:12', '2022-12-21 08:24:12'),
(36257, 1100, 'Unique Flavours | Mango', '2022-12-21 08:24:12', '2022-12-21 08:24:12'),
(36258, 1101, 'First Time in Bangladesh, Beboy Super Dotted Condoms with Flavour and Climax Delay Technology', '2022-12-21 08:26:51', '2022-12-21 08:26:51'),
(36259, 1101, 'Climax Delay Technology to increase love-making duration and longer sex than ever before.', '2022-12-21 08:26:51', '2022-12-21 08:26:51'),
(36260, 1101, '100% Electronically Tested for more protection and security against STD/Pregnancy', '2022-12-21 08:26:51', '2022-12-21 08:26:51'),
(36261, 1101, 'Biggest Dots for more stimulation and pleasure with extra fragrance', '2022-12-21 08:26:51', '2022-12-21 08:26:51'),
(36262, 1101, 'European Conformity Product with no compromise on quality.', '2022-12-21 08:26:51', '2022-12-21 08:26:51'),
(36263, 1101, 'Unique Flavours | Bubble Gum', '2022-12-21 08:26:51', '2022-12-21 08:26:51'),
(36264, 1102, 'First Time in Bangladesh, Beboy Super Dotted Condoms with Flavour and Climax Delay Technology', '2022-12-21 08:30:53', '2022-12-21 08:30:53'),
(36265, 1102, 'Climax Delay Technology to increase love-making duration and longer sex than ever before.', '2022-12-21 08:30:53', '2022-12-21 08:30:53'),
(36266, 1102, '100% Electronically Tested for more protection and security against STD/Pregnancy', '2022-12-21 08:30:53', '2022-12-21 08:30:53'),
(36267, 1102, 'Biggest Dots for more stimulation and pleasure with extra fragrance', '2022-12-21 08:30:53', '2022-12-21 08:30:53'),
(36268, 1102, 'European Conformity Product with no compromise on quality', '2022-12-21 08:30:53', '2022-12-21 08:30:53'),
(36269, 1102, 'Unique Flavours | Litchi', '2022-12-21 08:30:53', '2022-12-21 08:30:53'),
(36270, 1103, 'First Time in Bangladesh, Beboy Super Dotted Condoms with Flavour and Climax Delay Technology', '2022-12-21 08:33:57', '2022-12-21 08:33:57'),
(36271, 1103, 'Climax Delay Technology to increase love-making duration and longer sex than ever before.', '2022-12-21 08:33:57', '2022-12-21 08:33:57'),
(36272, 1103, '100% Electronically Tested for more protection and security against STD/Pregnancy', '2022-12-21 08:33:57', '2022-12-21 08:33:57'),
(36273, 1103, 'Biggest Dots for more stimulation and pleasure with extra fragrance', '2022-12-21 08:33:57', '2022-12-21 08:33:57'),
(36274, 1103, 'European Conformity Product with no compromise on quality.', '2022-12-21 08:33:57', '2022-12-21 08:33:57'),
(36275, 1103, 'Unique Flavours | Chocolate', '2022-12-21 08:33:57', '2022-12-21 08:33:57'),
(36276, 1104, 'First Time in Bangladesh, Beboy Air Thin Condoms with Flavour and Climax Delay Technology', '2022-12-21 08:37:40', '2022-12-21 08:37:40'),
(36277, 1104, 'Climax Delay Technology to increase love-making duration and longer sex than ever before.', '2022-12-21 08:37:40', '2022-12-21 08:37:40'),
(36278, 1104, '100% Electronically Tested for more protection and security against STD/Pregnancy', '2022-12-21 08:37:40', '2022-12-21 08:37:40'),
(36279, 1104, 'Ultra thin and skin-to-skin stimulation with extra fragrance', '2022-12-21 08:37:40', '2022-12-21 08:37:40'),
(36280, 1104, 'European Conformity Product with no compromise on quality | Made with Love in India', '2022-12-21 08:37:40', '2022-12-21 08:37:40'),
(36281, 1105, 'First Time in Bangladesh, Beboy Air Thin Condoms with Flavour and Climax Delay Technology', '2022-12-21 08:41:23', '2022-12-21 08:41:23'),
(36282, 1105, 'Climax Delay Technology to increase love-making duration and longer sex than ever before.', '2022-12-21 08:41:23', '2022-12-21 08:41:23'),
(36283, 1105, '100% Electronically Tested for more protection and security against STD/Pregnancy', '2022-12-21 08:41:23', '2022-12-21 08:41:23'),
(36284, 1105, 'Ultra thin and skin-to-skin stimulation with extra fragrance', '2022-12-21 08:41:24', '2022-12-21 08:41:24'),
(36285, 1105, 'European Conformity Product with no compromise on quality | Made with Love in India', '2022-12-21 08:41:24', '2022-12-21 08:41:24'),
(36286, 1106, 'First Time in Bangladesh, Beboy Air Thin Condoms with Flavour and Climax Delay Technology', '2022-12-21 08:45:31', '2022-12-21 08:45:31'),
(36287, 1106, 'Climax Delay Technology to increase love-making duration and longer sex than ever before.', '2022-12-21 08:45:31', '2022-12-21 08:45:31'),
(36288, 1106, '100% Electronically Tested for more protection and security against STD/Pregnancy', '2022-12-21 08:45:31', '2022-12-21 08:45:31'),
(36289, 1106, 'Ultra thin and skin-to-skin stimulation with extra fragrance', '2022-12-21 08:45:31', '2022-12-21 08:45:31'),
(36290, 1106, 'European Conformity Product with no compromise on quality | Made with Love in India', '2022-12-21 08:45:31', '2022-12-21 08:45:31'),
(36291, 1107, 'First Time in Bangladesh, Beboy Air Thin Condoms with Flavour and Climax Delay Technology', '2022-12-21 08:49:04', '2022-12-21 08:49:04'),
(36292, 1107, 'Climax Delay Technology to increase love-making duration and longer sex than ever before.', '2022-12-21 08:49:04', '2022-12-21 08:49:04'),
(36293, 1107, '100% Electronically Tested for more protection and security against STD/Pregnancy', '2022-12-21 08:49:04', '2022-12-21 08:49:04'),
(36294, 1107, 'Ultra thin and skin-to-skin stimulation with extra fragrance', '2022-12-21 08:49:04', '2022-12-21 08:49:04'),
(36295, 1107, 'European Conformity Product with no compromise on quality | Made with Love in India', '2022-12-21 08:49:04', '2022-12-21 08:49:04'),
(36296, 1109, 'First Time in Bangladesh, Beboy Air Thin Condoms with Flavour and Climax Delay Technology', '2022-12-21 08:53:21', '2022-12-21 08:53:21'),
(36297, 1109, 'Climax Delay Technology to increase love-making duration and longer sex than ever before.', '2022-12-21 08:53:21', '2022-12-21 08:53:21'),
(36298, 1109, '100% Electronically Tested for more protection and security against STD/Pregnancy', '2022-12-21 08:53:21', '2022-12-21 08:53:21'),
(36299, 1109, 'Ultra thin and skin-to-skin stimulation with extra fragrance', '2022-12-21 08:53:21', '2022-12-21 08:53:21'),
(36300, 1109, 'European Conformity Product with no compromise on quality | Made with Love in India', '2022-12-21 08:53:21', '2022-12-21 08:53:21'),
(36301, 1110, 'First Time in Bangladesh, Beboy Air Thin Condoms with Flavour and Climax Delay Technology', '2022-12-21 08:56:01', '2022-12-21 08:56:01'),
(36302, 1110, 'Climax Delay Technology to increase love-making duration and longer sex than ever before.', '2022-12-21 08:56:01', '2022-12-21 08:56:01'),
(36303, 1110, '100% Electronically Tested for more protection and security against STD/Pregnancy', '2022-12-21 08:56:01', '2022-12-21 08:56:01'),
(36304, 1110, 'Ultra thin and skin-to-skin stimulation with extra fragrance', '2022-12-21 08:56:01', '2022-12-21 08:56:01'),
(36305, 1110, 'European Conformity Product with no compromise on quality | Made with Love in India', '2022-12-21 08:56:01', '2022-12-21 08:56:01'),
(36311, 1111, 'First Time in Bangladesh, Beboy Air Thin Condoms with Flavour and Climax Delay Technology', '2022-12-21 09:02:04', '2022-12-21 09:02:04'),
(36312, 1111, 'Climax Delay Technology to increase love-making duration and longer sex than ever before.', '2022-12-21 09:02:04', '2022-12-21 09:02:04'),
(36313, 1111, '100% Electronically Tested for more protection and security against STD/Pregnancy', '2022-12-21 09:02:04', '2022-12-21 09:02:04'),
(36314, 1111, 'Ultra thin and skin-to-skin stimulation with extra fragrance', '2022-12-21 09:02:04', '2022-12-21 09:02:04'),
(36315, 1111, 'European Conformity Product with no compromise on quality | Made with Love in India', '2022-12-21 09:02:04', '2022-12-21 09:02:04'),
(36316, 1112, 'First Time in Bangladesh, Beboy Air Thin Condoms with Flavour and Climax Delay Technology', '2022-12-21 09:09:01', '2022-12-21 09:09:01'),
(36317, 1112, 'Climax Delay Technology to increase love-making duration and longer sex than ever before.', '2022-12-21 09:09:01', '2022-12-21 09:09:01'),
(36318, 1112, '100% Electronically Tested for more protection and security against STD/Pregnancy', '2022-12-21 09:09:01', '2022-12-21 09:09:01'),
(36319, 1112, 'Ultra thin and skin-to-skin stimulation with extra fragrance', '2022-12-21 09:09:01', '2022-12-21 09:09:01'),
(36320, 1112, 'European Conformity Product with no compromise on quality | Made with Love in India', '2022-12-21 09:09:01', '2022-12-21 09:09:01'),
(36321, 1113, 'First time in Bangladesh, Delay Spray with Fragrance', '2022-12-21 09:13:00', '2022-12-21 09:13:00'),
(36322, 1113, '12% Lidocaine (Active Ingredient) Vs 10% in other Delay Sprays', '2022-12-21 09:13:00', '2022-12-21 09:13:00'),
(36323, 1113, 'Over 300 Sprays Vs 200 Sprays in other Delay Sprays', '2022-12-21 09:13:00', '2022-12-21 09:13:00'),
(36324, 1113, 'Increase Coital Time', '2022-12-21 09:13:00', '2022-12-21 09:13:00'),
(36325, 1113, 'European Conformity Product', '2022-12-21 09:13:00', '2022-12-21 09:13:00'),
(36326, 1113, 'For Long lasting performance', '2022-12-21 09:13:00', '2022-12-21 09:13:00'),
(36327, 1114, 'First time in Bangladesh, Delay Spray with Fragrance', '2022-12-21 09:15:20', '2022-12-21 09:15:20'),
(36328, 1114, '12% Lidocaine (Active Ingredient) Vs 10% in other Delay Sprays', '2022-12-21 09:15:20', '2022-12-21 09:15:20'),
(36329, 1114, 'Over 300 Sprays Vs 200 Sprays in other Delay Sprays', '2022-12-21 09:15:20', '2022-12-21 09:15:20'),
(36330, 1114, 'Increase Coital Time', '2022-12-21 09:15:20', '2022-12-21 09:15:20'),
(36331, 1114, 'European Conformity Product', '2022-12-21 09:15:20', '2022-12-21 09:15:20'),
(36332, 1114, 'For Long lasting performance', '2022-12-21 09:15:20', '2022-12-21 09:15:20'),
(36333, 1116, 'Usage : Relief from Menstrual cramp and Periods pain in the lower abdomen, lower back and inner thighs. Spray on aching Areas.', '2022-12-21 09:19:49', '2022-12-21 09:19:49'),
(36334, 1116, 'Enriched with Aloe Vera Extracts to boost Physical Endurance', '2022-12-21 09:19:49', '2022-12-21 09:19:49'),
(36335, 1116, 'Natural Menstrual Pain Relief Spray ever innovated by Beboy', '2022-12-21 09:19:49', '2022-12-21 09:19:49'),
(36336, 1116, 'Safe to use during menstruation', '2022-12-21 09:19:49', '2022-12-21 09:19:49'),
(36337, 1116, 'Beboy Periods Pain Out Spray has an unique formulation that work instantly', '2022-12-21 09:19:49', '2022-12-21 09:19:49'),
(36345, 1117, 'PUMP: Cream pump for easy apply and no mess.', '2022-12-22 10:24:43', '2022-12-22 10:24:43'),
(36346, 1117, 'ENRICHED with Aloe Vera Extract with Tea Tree Oil & wheat Germ Oil.', '2022-12-22 10:24:43', '2022-12-22 10:24:43'),
(36347, 1117, 'AYURVEDIC/NATURAL FORMULATION: Made from safe natural ingredients', '2022-12-22 10:24:43', '2022-12-22 10:24:43'),
(36348, 1117, 'LUBRICATION: Improves natural lubrication', '2022-12-22 10:24:43', '2022-12-22 10:24:43'),
(36349, 1117, 'ELASTICITY: Reverse the loss of elasticity', '2022-12-22 10:24:43', '2022-12-22 10:24:43'),
(36350, 1117, 'No Drugs or surgery needed.', '2022-12-22 10:24:43', '2022-12-22 10:24:43'),
(36351, 1117, 'USAGE: For women Only. Take required quantity of V-again and apply or rub onto the vaginal area twice a day.', '2022-12-22 10:24:43', '2022-12-22 10:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image_status` smallint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `product_image`, `product_image_thumb`, `product_image_alt`, `product_image_des`, `product_image_status`, `created_at`, `updated_at`) VALUES
(3436, 1092, 'images/product_more_image/delay-spray-jasmine_430x152.png', 'images/product_more_image/thumb_delay-spray-jasmine_430x152.png', NULL, NULL, 1, '2022-12-12 04:24:53', '2022-12-12 04:27:26'),
(3437, 1092, 'images/product_more_image/10-invisible.png', 'images/product_more_image/thumb_10-invisible.png', NULL, NULL, 1, '2022-12-12 04:27:26', '2022-12-12 04:27:26'),
(3438, 1093, 'images/product_more_image/01-11.png', 'images/product_more_image/thumb_01-11.png', NULL, NULL, 1, '2022-12-20 10:50:37', '2022-12-20 10:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `product_images_backup`
--

CREATE TABLE `product_images_backup` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image_status` smallint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_ratings`
--

CREATE TABLE `product_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_rundowns`
--

CREATE TABLE `product_rundowns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `rundowntype` smallint(6) NOT NULL DEFAULT 1,
  `seq` smallint(3) NOT NULL DEFAULT 20,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_rundowns`
--

INSERT INTO `product_rundowns` (`id`, `product_id`, `rundowntype`, `seq`, `created_at`, `updated_at`) VALUES
(1, 1107, 1, 20, '2022-12-21 10:01:44', '2022-12-21 10:01:44'),
(2, 1096, 1, 20, '2022-12-21 10:01:47', '2022-12-21 10:01:47');

-- --------------------------------------------------------

--
-- Table structure for table `product_shops`
--

CREATE TABLE `product_shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `shop_type_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_socials`
--

CREATE TABLE `product_socials` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `socialTitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socialDescription` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socialImage` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_socials`
--

INSERT INTO `product_socials` (`id`, `product_id`, `socialTitle`, `socialDescription`, `socialImage`, `created_at`, `updated_at`) VALUES
(17, 1092, NULL, NULL, NULL, '2022-11-28 09:07:58', '2022-11-28 09:07:58'),
(18, 1093, NULL, NULL, NULL, '2022-12-20 10:47:42', '2022-12-20 10:47:42'),
(19, 1111, NULL, NULL, NULL, '2022-12-21 09:02:04', '2022-12-21 09:02:04'),
(20, 1117, NULL, NULL, NULL, '2022-12-22 10:24:43', '2022-12-22 10:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `product_stock_statuses`
--

CREATE TABLE `product_stock_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `stock_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_terms`
--

CREATE TABLE `product_terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `terms` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_terms`
--

INSERT INTO `product_terms` (`id`, `product_id`, `terms`, `created_at`, `updated_at`) VALUES
(938, 1092, 'অফার চলবে ২৩ সেপ্টেম্বর হতে ১৯ অক্টোবর ২০২২ খ্রীস্টাব্দ পর্যন্ত।', '2022-12-21 05:51:25', '2022-12-21 05:51:25');

-- --------------------------------------------------------

--
-- Table structure for table `proprocategories`
--

CREATE TABLE `proprocategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `pro_sub_category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prosubcategories`
--

CREATE TABLE `prosubcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop_types`
--

CREATE TABLE `shop_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_products` int(11) NOT NULL DEFAULT 0,
  `click` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_on_top` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sidebar_ads`
--

CREATE TABLE `sidebar_ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canonical` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_robots` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `robots_txt` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `templete` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `name`, `meta_title`, `meta_des`, `meta_keywords`, `canonical`, `meta_robots`, `address`, `phone`, `email`, `facebook`, `twitter`, `linkedin`, `youtube`, `intagram`, `image`, `meta_image`, `robots_txt`, `category_summary`, `templete`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Beboy | We are committed to Healthcare, SafeSex, Woman Hygiene, Healthy and Clean world.', 'Beboy | We are committed to Healthcare, SafeSex, Woman Hygiene, Healthy and Clean world.', 'Beboy | We are committed to Healthcare, SafeSex, Woman Hygiene, Healthy and Clean world.', 'Beboy | We are committed to Healthcare, SafeSex, Woman Hygiene, Healthy and Clean world.', NULL, 'index,allow', '108/1,Shantinagar,paltan,Dhaka-1217, Dhaka, Bangladesh', '01718722233', 'Email:beboybangladesh@gmail.com', 'https://www.facebook.com/profile.php?id=100087643580123&mibextid=ZbWKwL', NULL, 'https://www.linkedin.com/company/beboy-bangladesh/', 'https://www.youtube.com/channel/UCM9aCKefDY0eW1glXDcIIsA', 'https://www.instagram.com/beboybangladesh/', 'images/site_image/Binarylogic.png', 'images/site_image/binary-logic.jpeg', 'Sitemap: \r\n\r\nUser-agent: *\r\nAllow: /', NULL, 2, 1, NULL, '2022-12-17 06:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `slider_box_images`
--

CREATE TABLE `slider_box_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider_texts`
--

CREATE TABLE `slider_texts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_texts`
--

INSERT INTO `slider_texts` (`id`, `text`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature', 1, '2021-02-12 17:34:18', '2021-02-12 17:34:18'),
(2, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form', 1, '2021-02-12 17:34:25', '2021-02-12 17:34:25'),
(3, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 1, '2021-02-12 17:34:32', '2021-02-12 17:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`, `slug`, `description`, `category_summary`, `meta_title`, `meta_des`, `meta_keywords`, `image`, `status`, `created_at`, `updated_at`) VALUES
(81, 15, 'SUB-1', 'sub-2', '<p>subdflkasdhngklndkl;</p>', NULL, NULL, NULL, NULL, NULL, 1, '2022-11-28 08:49:31', '2022-11-28 08:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_str` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `password_str`, `status`, `remember_token`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 0, 'binary-admin', 'admin@admin.com', NULL, '$2y$10$BV2PGxA7VaPOll4.xnPzruXMJXQHTgOe7eNARUJfeE7b/Z0BMQ.cm', 'in@ad-4321', 1, 'bAucMDkht3B3yOX48X9gZBXHwjnclMwi2BLCSafDWolQDRG2H5HqQIcClReA', NULL, '2021-02-12 16:59:06', '2021-06-12 22:04:50'),
(9, 0, 'Raihan Arifin', 'itsraihanarifin@gmail.com', NULL, '$2y$10$IwKBnGAw723sMm36cDiTiulgWrkbj0.A1us9cwYPptQ92nyw6dNTO', 'itsraihanarif', 1, 'fmSG0uLywPyqVXbbWhHV0iWlH2JgipErsKX63ME68OVO2nK4buCowdtE3RrS', NULL, '2021-02-20 11:12:20', '2022-07-02 21:21:02'),
(10, 0, 'Anny', 'fatemaanny5@gmail.com', NULL, '$2y$10$YjWEK603usUC353fQ7wr5OnKsuLYlzguCiAjzqIsYJlerhaocfRTm', '369258147', 1, 'Lj4keiNU8XmkL9F7pRULe4EPE7vBbKQM6nFdLygXocHur4M7YzBIvA5GzD3D', NULL, '2021-02-21 00:55:22', '2021-05-02 16:27:10'),
(12, 0, 'Sumon', 'ak.sumon11@gmail.com', NULL, '$2y$10$FJm8SWjwuv/G0VutmRyEPuwx333RXVTZSJlQp2qMAKOqQnJaPnBqG', 'ak.sumon11', 1, NULL, NULL, '2021-02-21 01:11:05', '2021-04-10 08:23:07'),
(13, 0, 'Tanvir', 'mahmudulhasantanvir2000@gmail.com', NULL, '$2y$10$IJJj7pO.58hax21tpuomOO6iZxoWVl6W4/T2eJfuqIlI7sODIIjlq', '789456123', 0, 'fdzDwnfNN0CrEwqCfHX5QQj2x2nhFDxz4c5DNOpleL9Dp5nGZJVnUbp5W6RT', NULL, '2021-02-21 01:17:13', '2021-10-22 22:52:34'),
(14, 0, 'CEO', 'monsur@binarylogic.com.bd', NULL, '$2y$10$tKFi1D79pM1VgY9Hn6yFXOBTD5cppu/5RHdxGM6qwIIM7F4jbeOn.', '321654987', 1, 'AGnAPJqn7cAdycBxW5lBm4WtWMvPsxVbA3zELuEIGP6g5nORpmkKbAEUHz6g', NULL, '2021-02-21 01:19:01', '2021-02-21 01:19:01'),
(16, 0, 'Rony', 'farhad@binarylogic.com.bd', NULL, '$2y$10$jekJWdCR3orJkw3VPF8WgupqaZlvnmffXbV4IYMga/yy74BRXPrBS', '789456123', 1, 'LMgqjKxKb7tbhC1HhIdVpitwXQNhNw7u5yRK5srjtxEmgKmKeJLGXHqoZfQ5', NULL, '2021-03-20 13:05:30', '2021-05-19 16:58:51'),
(18, 1, 'Mr Editor', 'editor@gmail.com', NULL, '$2y$10$4/sRrExZR2kkqRSQwgDT/eZsqma3W6cWXsIDoBtQtcO3KFEbDMSUi', '11111111', 1, NULL, NULL, '2021-03-20 22:36:37', '2021-03-20 22:36:37'),
(22, 0, 'Bellal', 'bellal@binarylogic.com.bd', NULL, '$2y$10$MexQh4bwdiShWbNZODlc4e5g/Q61ULhGC5yBECG.xh2kZxYAQ9QeO', '963852741', 1, 'XHAr3jGHJbIqZ9XdjvVVY6dR2C8oYHuU5AnJO29NOkhjr5R12Ndzf9ktf89X', NULL, '2021-04-10 10:21:33', '2021-10-05 15:13:05'),
(23, 0, 'Rifat', 'rifath.h@hotmail.com', NULL, '$2y$10$vpT5xMUZ/mNYD51APn3J5u95Mejz63AEvG1TYrytRElzJyYMoxvUy', '565676', 0, NULL, NULL, '2021-05-11 03:07:07', '2022-05-25 15:36:58'),
(24, 0, 'Bashar', 'adv.absikdar@gmail.com', NULL, '$2y$10$Yg4P5m5DnbHJTPaa8iy8XOEAWjueXRXSmVNJd0fvrfIKNyNrcroNG', '963852741', 0, '3YY9xXrtQ93UOh51PzNOUYvSixn6VZpK4JdwaiNDPB4lJRsOrW8bDwiDyWvD', NULL, '2021-05-31 20:25:36', '2021-10-22 22:51:57'),
(25, 0, 'Rana', 'amjadrana05@gmail.com', NULL, '$2y$10$fTg168RGZ/PmmKc8PpS/p.4CJdq3GSSlrKVA0uLyVPdPEcXAUwbRi', '342312', 0, 'mwh1kUg0bQUiwlTOZMRdJjOQ0lkFf332xnP1G5p7vEIztoSTmliikYf2Iptv', NULL, '2021-06-19 17:47:22', '2021-12-02 18:31:37'),
(26, 0, 'Rubaya Tasnim', 'rubaiyatasnim68@gmail.com', NULL, '$2y$10$eI4LxgdC8ZRHIr3kpdz36eWfglpvcLlwXey8/ESDeZh4ijiVeSjda', 'rubaiyatasnim68@', 1, 'KgHRUo5yLHnqmG9GNewzzEP0EWegHIm2G6FMmL6tfAuDvzHHzDiPSpfoAb0c', NULL, '2021-12-02 18:30:46', '2021-12-02 23:00:33'),
(28, 0, 'Shameem', 'mdshameemhossain26@gmail.com', NULL, '$2y$10$yee4j3509cnnFOrnZXC3QOEoX0CvBEmeAi2UWqbBJVWjbVJ0L8kCy', '9877654', 0, 'izOGyY4yJo8Qc31XyvUW7Oqgf4mlEjdBTcSaA8eQU3ZMCcr0LFoGKU5QVjGl', NULL, '2022-03-07 17:32:39', '2022-05-25 15:35:26'),
(29, 0, 'AB', 'ceo@crenotive.com', NULL, '$2y$10$54PQQtyFRPYTTGqJDzkrNOwytxDlClO0e4RV09BagXlKR.wXpTBWu', '98765432', 0, NULL, NULL, '2022-04-29 05:41:36', '2022-05-25 15:36:52'),
(30, 0, 'admin1', 'didarulislamakand@gmail.com', NULL, '$2y$10$2jvb.mzMjpDQ1bZJVtI1Yuk6V/AyOlAp3c2IXIniWOrUO1dra5hgW', '963852741', 1, NULL, NULL, '2022-05-25 15:33:25', '2022-05-25 15:33:25'),
(31, 1, 'Liyakot', 'liyakot@binarylogic.com.bd', NULL, '$2y$10$Hc7v4ku0acNTctACVcf86ODHvqjT4xEPBFYNSItcwFVG5ouEj7oB.', '741852963', 1, NULL, NULL, '2022-05-30 10:51:35', '2022-05-30 10:51:35'),
(32, 0, 'Nazrul', 'nazrulislam_dp@yahoo.com', NULL, '$2y$10$bCKGGraGYOhO91i/x98n0.kYVf5eooSTa5dNZ/X7e9SMYh44Zn4E6', 'nazrulislam_dp', 1, NULL, NULL, '2022-07-07 11:28:14', '2022-07-07 11:31:15'),
(33, 0, 'shahrir shuvo', 'shahriarshuvo714@gmail.com', NULL, '$2y$10$dKvxrBp1ihVumyeT/mtKtOTaSuUWWlcfMo8kAdmMT1vYe2/B9pSqe', 'shahriarshuvo714@', 1, 'wb53Jcf5Wwa366tQRwIjWoShSxd1xORSpo3yVDHrSgAsbjTKvcrI6cD03pFK', NULL, '2022-07-28 12:20:47', '2022-10-10 09:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backgrounds`
--
ALTER TABLE `backgrounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banners_title_unique` (`title`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`);

--
-- Indexes for table `b_g_colors`
--
ALTER TABLE `b_g_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);
ALTER TABLE `categories` ADD FULLTEXT KEY `FT-Description` (`description`);

--
-- Indexes for table `category_update_histories`
--
ALTER TABLE `category_update_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_faqs`
--
ALTER TABLE `cat_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dynamic_add`
--
ALTER TABLE `dynamic_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_settings`
--
ALTER TABLE `email_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feature_box_f_ads`
--
ALTER TABLE `feature_box_f_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_box_s_ads`
--
ALTER TABLE `feature_box_s_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_box_t_ads`
--
ALTER TABLE `feature_box_t_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_products`
--
ALTER TABLE `feature_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `free_item_for_clients`
--
ALTER TABLE `free_item_for_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hot_deal_products`
--
ALTER TABLE `hot_deal_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `individual_mails`
--
ALTER TABLE `individual_mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landings`
--
ALTER TABLE `landings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pagelink` (`pagelink`);

--
-- Indexes for table `memo_color_combos`
--
ALTER TABLE `memo_color_combos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_mails`
--
ALTER TABLE `order_mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_categories`
--
ALTER TABLE `page_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pcbuilders`
--
ALTER TABLE `pcbuilders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popups`
--
ALTER TABLE `popups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);
ALTER TABLE `products` ADD FULLTEXT KEY `name` (`name`);

--
-- Indexes for table `product_brands`
--
ALTER TABLE `product_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_emis`
--
ALTER TABLE `product_emis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_faqs`
--
ALTER TABLE `product_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_highlights`
--
ALTER TABLE `product_highlights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images_backup`
--
ALTER TABLE `product_images_backup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_ratings`
--
ALTER TABLE `product_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_rundowns`
--
ALTER TABLE `product_rundowns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_shops`
--
ALTER TABLE `product_shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_socials`
--
ALTER TABLE `product_socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_stock_statuses`
--
ALTER TABLE `product_stock_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_terms`
--
ALTER TABLE `product_terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proprocategories`
--
ALTER TABLE `proprocategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `proprocategories_slug_unique` (`slug`);
ALTER TABLE `proprocategories` ADD FULLTEXT KEY `description` (`description`);

--
-- Indexes for table `prosubcategories`
--
ALTER TABLE `prosubcategories`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `prosubcategories` ADD FULLTEXT KEY `description` (`description`);

--
-- Indexes for table `shop_types`
--
ALTER TABLE `shop_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shop_types_title_unique` (`title`);

--
-- Indexes for table `sidebar_ads`
--
ALTER TABLE `sidebar_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_box_images`
--
ALTER TABLE `slider_box_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_texts`
--
ALTER TABLE `slider_texts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `subcategories` ADD FULLTEXT KEY `SC-FT` (`description`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suppliers_email_unique` (`email`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `backgrounds`
--
ALTER TABLE `backgrounds`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `b_g_colors`
--
ALTER TABLE `b_g_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `category_update_histories`
--
ALTER TABLE `category_update_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `cat_faqs`
--
ALTER TABLE `cat_faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `components`
--
ALTER TABLE `components`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=782;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1114;

--
-- AUTO_INCREMENT for table `dynamic_add`
--
ALTER TABLE `dynamic_add`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `email_settings`
--
ALTER TABLE `email_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feature_box_f_ads`
--
ALTER TABLE `feature_box_f_ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feature_box_s_ads`
--
ALTER TABLE `feature_box_s_ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feature_box_t_ads`
--
ALTER TABLE `feature_box_t_ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feature_products`
--
ALTER TABLE `feature_products`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `free_item_for_clients`
--
ALTER TABLE `free_item_for_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1056;

--
-- AUTO_INCREMENT for table `hot_deal_products`
--
ALTER TABLE `hot_deal_products`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `individual_mails`
--
ALTER TABLE `individual_mails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `landings`
--
ALTER TABLE `landings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2314;

--
-- AUTO_INCREMENT for table `memo_color_combos`
--
ALTER TABLE `memo_color_combos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=536;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=627;

--
-- AUTO_INCREMENT for table `order_mails`
--
ALTER TABLE `order_mails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `page_categories`
--
ALTER TABLE `page_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pcbuilders`
--
ALTER TABLE `pcbuilders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `popups`
--
ALTER TABLE `popups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1118;

--
-- AUTO_INCREMENT for table `product_brands`
--
ALTER TABLE `product_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8198;

--
-- AUTO_INCREMENT for table `product_emis`
--
ALTER TABLE `product_emis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6263;

--
-- AUTO_INCREMENT for table `product_faqs`
--
ALTER TABLE `product_faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_highlights`
--
ALTER TABLE `product_highlights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36352;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3439;

--
-- AUTO_INCREMENT for table `product_images_backup`
--
ALTER TABLE `product_images_backup`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1868;

--
-- AUTO_INCREMENT for table `product_ratings`
--
ALTER TABLE `product_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_rundowns`
--
ALTER TABLE `product_rundowns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_shops`
--
ALTER TABLE `product_shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14418;

--
-- AUTO_INCREMENT for table `product_socials`
--
ALTER TABLE `product_socials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_stock_statuses`
--
ALTER TABLE `product_stock_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3453;

--
-- AUTO_INCREMENT for table `product_terms`
--
ALTER TABLE `product_terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=939;

--
-- AUTO_INCREMENT for table `proprocategories`
--
ALTER TABLE `proprocategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `prosubcategories`
--
ALTER TABLE `prosubcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `shop_types`
--
ALTER TABLE `shop_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sidebar_ads`
--
ALTER TABLE `sidebar_ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider_box_images`
--
ALTER TABLE `slider_box_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider_texts`
--
ALTER TABLE `slider_texts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
