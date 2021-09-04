-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 26, 2021 at 10:18 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avichs_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Dimplex Dehumidifier', 'dimplex-dehumidifier', '2021-06-26 12:50:38', '2021-06-26 12:50:38'),
(2, 'Humidifiers', 'humidifiers', '2021-06-26 12:56:22', '2021-06-26 12:56:22'),
(3, 'Air Purifier', 'air-purifier', '2021-07-15 10:15:50', '2021-07-15 10:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('fixed','percent') COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` decimal(8,2) NOT NULL,
  `cart_value` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `cart_value`, `created_at`, `updated_at`) VALUES
(1, 'NWM1', 'percent', '4.00', '400.00', '2021-06-01 20:12:14', '2021-06-02 08:36:23'),
(3, 'XYZ', 'percent', '5.00', '550.00', '2021-06-02 08:27:30', '2021-06-02 08:27:30');

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
-- Table structure for table `home_categories`
--

CREATE TABLE `home_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sel_categories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_products` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_categories`
--

INSERT INTO `home_categories` (`id`, `sel_categories`, `no_of_products`, `created_at`, `updated_at`) VALUES
(1, '1,2,3', 6, '2021-05-28 01:00:00', '2021-05-28 17:40:17');

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_05_14_151751_create_sessions_table', 1),
(7, '2021_05_14_221448_create_categories_table', 1),
(8, '2021_05_14_221510_create_products_table', 1),
(9, '2021_05_25_091143_create_home_sliders_table', 2),
(10, '2021_05_28_170520_create_home_categories_table', 3),
(11, '2021_06_01_191711_create_coupons_table', 4),
(12, '2021_06_03_092448_create_orders_table', 5),
(13, '2021_06_03_092507_create_order_items_table', 5),
(14, '2021_06_03_092553_create_shippings_table', 5),
(15, '2021_06_03_092801_create_transactions_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subtotal` decimal(19,2) NOT NULL,
  `discount` decimal(19,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(19,2) NOT NULL,
  `total` decimal(19,2) NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ordered','delivered','canceled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ordered',
  `is_shipping_different` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `delivered_date` date DEFAULT NULL,
  `canceled_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `subtotal`, `discount`, `tax`, `total`, `firstname`, `lastname`, `mobile`, `email`, `address`, `line2`, `city`, `country`, `zipcode`, `status`, `is_shipping_different`, `created_at`, `updated_at`, `delivered_date`, `canceled_date`) VALUES
(1, 3, '283.00', '0.00', '59.43', '342.43', 'Shola', 'Solomon', '09087634251', 'sholasol@outlook.com', 'Abijo', NULL, 'Abijo', 'Nigeria', '105101', 'ordered', 0, '2021-06-03 16:10:44', '2021-06-03 16:10:44', NULL, NULL),
(2, 3, '283.00', '0.00', '59.43', '342.43', 'Ojo', 'Solomon', '09087634251', 'sholasol@outlook.com', 'Abijo', NULL, 'Abijo', 'Nigeria', '105101', 'ordered', 1, '2021-06-03 16:14:55', '2021-06-03 16:14:55', NULL, NULL),
(3, 3, '499.00', '0.00', '104.79', '603.79', 'Shola', 'Solomon', '09087634251', 'sholasol@outlook.com', 'Abijo', NULL, 'Abijo', 'Nigeria', '105101', 'ordered', 1, '2021-06-03 16:53:45', '2021-06-03 16:53:45', NULL, NULL),
(4, 3, '499.00', '0.00', '104.79', '603.79', 'Ade', 'Ade', '08076543214', 'ade@email.com', 'Abijo', NULL, 'Abijo', 'Nigeria', '105101', 'ordered', 1, '2021-06-03 16:56:00', '2021-06-03 16:56:00', NULL, NULL),
(5, 3, '499.00', '0.00', '104.79', '603.79', 'Ade', 'Ade', '09087655430', 'ade@email.com', 'Abijo', NULL, 'Abijo', 'Nigeria', '105101', 'ordered', 1, '2021-06-03 16:57:47', '2021-06-03 16:57:47', NULL, NULL),
(6, 3, '497.00', '0.00', '104.37', '601.37', 'Solomon', 'Ojo', '09089809090', 'sholasol@outlook.com', 'Abijo', NULL, 'Abijo', 'Nigeria', '105101', 'ordered', 0, '2021-06-04 16:05:22', '2021-06-04 16:05:22', NULL, NULL),
(7, 3, '497.00', '0.00', '104.37', '601.37', 'Solomon', 'Ojo', '09089809090', 'sholasol@outlook.com', 'Abijo', NULL, 'Abijo', 'Nigeria', '105101', 'ordered', 1, '2021-06-04 16:05:51', '2021-06-04 16:05:51', NULL, NULL),
(8, 3, '497.00', '0.00', '104.37', '601.37', 'Solomon', 'Ojo', '09089809090', 'sholasol@outlook.com', 'Abijo', NULL, 'Abijo', 'Nigeria', '105101', 'ordered', 1, '2021-06-04 16:06:20', '2021-06-04 16:06:20', NULL, NULL),
(9, 3, '375.00', '0.00', '78.75', '453.75', 'Ojo', 'Shola', '09087564111', 'sholas@email.com', 'Ajah', NULL, 'Ajah', 'Nigeria', '105101', 'ordered', 0, '2021-06-12 17:41:38', '2021-06-12 17:41:38', NULL, NULL),
(10, 3, '338.00', '0.00', '70.98', '408.98', 'Ayo', 'Ojo', '08099988877', 'ayo@gmail.com', 'Fidiso Estate', NULL, 'Lagos', 'Nigeria', '105101', 'ordered', 0, '2021-06-12 18:37:23', '2021-06-12 18:37:23', NULL, NULL),
(11, 3, '338.00', '0.00', '70.98', '408.98', 'Ayo', 'Ojo', '09088766600', 'ayo@user.com', 'Lekki', NULL, 'Lekki', 'Nigeria', '105101', 'ordered', 0, '2021-06-12 18:40:04', '2021-06-12 18:40:04', NULL, NULL),
(12, 3, '338.00', '0.00', '70.98', '408.98', 'Mary', 'Ojo', '07099900090', 'mary@yahoo.com', 'Lekki', NULL, 'Lekki', 'Nigeria', '105101', 'ordered', 0, '2021-06-12 18:43:20', '2021-06-12 18:43:20', NULL, NULL),
(13, 3, '676.00', '0.00', '141.96', '817.96', 'Ade', 'Ade', '07098765432', 'ade@email.com', '123 Ajah', NULL, 'Lagos', 'Nigeria', '34502', 'ordered', 0, '2021-06-12 19:03:39', '2021-06-12 19:03:39', NULL, NULL),
(14, 3, '591.00', '0.00', '124.11', '715.11', 'Awe', 'Awe', '08090090900', 'awe@email.com', 'Lekki Phase 1', NULL, 'Lekki', 'Nigeria', '105101', 'ordered', 0, '2021-06-14 11:10:33', '2021-06-14 11:10:33', NULL, NULL),
(15, 3, '617.00', '0.00', '129.57', '746.57', 'Solomon', 'Ojo', '08176543210', 'sholasolomon@yahoo.com', 'Ajah Lagos', NULL, 'Abijo', 'Nigeria', '105101', 'delivered', 0, '2021-06-14 11:20:31', '2021-06-14 16:35:15', '2021-06-14', NULL),
(16, 4, '533.00', '0.00', '111.93', '644.93', 'Ayooluwa', 'Akeju', '08069440804', 'ay@email.com', 'Ajah', NULL, 'Lagos', 'Nigeria', '105101', 'ordered', 0, '2021-06-15 14:51:40', '2021-06-15 14:51:40', NULL, NULL),
(17, 4, '1541.00', '0.00', '323.61', '1864.61', 'Ayooluwa', 'Akeju', '08069440804', 'ay.akeju@gmail.com', 'Ajah', NULL, 'Lagos', 'Nigeria', '1234', 'ordered', 0, '2021-06-15 15:33:45', '2021-06-15 15:33:45', NULL, NULL),
(18, 4, '136495.00', '0.00', '28663.95', '165158.95', 'Semilore', 'Ojo', '08069440804', 'ay.akeju@gmail.com', '4 Amity Street, Fidiso Estate', NULL, 'Lagos', 'Nigeria', '105101', 'ordered', 0, '2021-06-15 15:39:44', '2021-06-15 15:39:44', NULL, NULL),
(19, 1, '90000.00', '0.00', '6750.00', '96750.00', 'Ayooluwa', 'Akeju', '09088899900', 'user@user.com', '123, Ajah', NULL, 'Lagos', 'Nigeria', '109823', 'ordered', 0, '2021-07-15 10:29:02', '2021-07-15 10:29:02', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rstatus` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `product_id`, `order_id`, `price`, `quantity`, `created_at`, `updated_at`, `rstatus`) VALUES
(1, 2, 1, '283.00', '1.00', '2021-06-03 16:10:44', '2021-06-03 16:10:44', 'false'),
(2, 2, 2, '283.00', '1.00', '2021-06-03 16:14:55', '2021-06-03 16:14:55', 'false'),
(3, 2, 3, '283.00', '1.00', '2021-06-03 16:53:45', '2021-06-03 16:53:45', 'false'),
(4, 6, 3, '216.00', '1.00', '2021-06-03 16:53:45', '2021-06-03 16:53:45', 'false'),
(5, 2, 4, '283.00', '1.00', '2021-06-03 16:56:00', '2021-06-03 16:56:00', 'false'),
(6, 6, 4, '216.00', '1.00', '2021-06-03 16:56:00', '2021-06-03 16:56:00', 'false'),
(7, 2, 5, '283.00', '1.00', '2021-06-03 16:57:47', '2021-06-03 16:57:47', 'false'),
(8, 6, 5, '216.00', '1.00', '2021-06-03 16:57:47', '2021-06-03 16:57:47', 'false'),
(9, 1, 6, '122.00', '1.00', '2021-06-04 16:05:22', '2021-06-04 16:05:22', 'false'),
(10, 5, 6, '375.00', '1.00', '2021-06-04 16:05:22', '2021-06-04 16:05:22', 'false'),
(11, 1, 7, '122.00', '1.00', '2021-06-04 16:05:51', '2021-06-04 16:05:51', 'false'),
(12, 5, 7, '375.00', '1.00', '2021-06-04 16:05:51', '2021-06-04 16:05:51', 'false'),
(13, 1, 8, '122.00', '1.00', '2021-06-04 16:06:20', '2021-06-04 16:06:20', 'false'),
(14, 5, 8, '375.00', '1.00', '2021-06-04 16:06:20', '2021-06-04 16:06:20', 'false'),
(15, 5, 9, '375.00', '1.00', '2021-06-12 17:41:38', '2021-06-12 17:41:38', 'false'),
(16, 1, 10, '122.00', '1.00', '2021-06-12 18:37:23', '2021-06-12 18:37:23', 'false'),
(17, 6, 10, '216.00', '1.00', '2021-06-12 18:37:23', '2021-06-12 18:37:23', 'false'),
(18, 1, 11, '122.00', '1.00', '2021-06-12 18:40:04', '2021-06-12 18:40:04', 'false'),
(19, 6, 11, '216.00', '1.00', '2021-06-12 18:40:04', '2021-06-12 18:40:04', 'false'),
(20, 1, 12, '122.00', '1.00', '2021-06-12 18:43:20', '2021-06-12 18:43:20', 'false'),
(21, 6, 12, '216.00', '1.00', '2021-06-12 18:43:20', '2021-06-12 18:43:20', 'false'),
(22, 1, 13, '122.00', '1.00', '2021-06-12 19:03:39', '2021-06-12 19:03:39', 'false'),
(23, 6, 13, '216.00', '1.00', '2021-06-12 19:03:39', '2021-06-12 19:03:39', 'false'),
(24, 3, 13, '338.00', '1.00', '2021-06-12 19:03:39', '2021-06-12 19:03:39', 'false'),
(25, 6, 14, '216.00', '1.00', '2021-06-14 11:10:33', '2021-06-14 11:10:33', 'false'),
(26, 5, 14, '375.00', '1.00', '2021-06-14 11:10:33', '2021-06-14 11:10:33', 'false'),
(27, 1, 15, '122.00', '1.00', '2021-06-14 11:20:31', '2021-06-14 11:20:31', 'false'),
(28, 7, 15, '495.00', '1.00', '2021-06-14 11:20:31', '2021-06-14 11:20:31', 'false'),
(29, 4, 16, '146.00', '1.00', '2021-06-15 14:51:40', '2021-06-15 14:51:40', 'false'),
(30, 12, 16, '387.00', '1.00', '2021-06-15 14:51:40', '2021-06-15 14:51:40', 'false'),
(31, 7, 17, '495.00', '1.00', '2021-06-15 15:33:45', '2021-06-15 15:33:45', 'false'),
(32, 21, 17, '310.00', '1.00', '2021-06-15 15:33:45', '2021-06-15 15:33:45', 'false'),
(33, 11, 17, '260.00', '1.00', '2021-06-15 15:33:45', '2021-06-15 15:33:45', 'false'),
(34, 9, 17, '476.00', '1.00', '2021-06-15 15:33:45', '2021-06-15 15:33:45', 'false'),
(35, 1, 18, '96000.00', '1.00', '2021-06-15 15:39:44', '2021-06-15 15:39:44', 'false'),
(36, 2, 18, '40000.00', '1.00', '2021-06-15 15:39:44', '2021-06-15 15:39:44', 'false'),
(37, 7, 18, '495.00', '1.00', '2021-06-15 15:39:44', '2021-06-15 15:39:44', 'false'),
(38, 1, 19, '40000.00', '1.00', '2021-07-15 10:29:02', '2021-07-15 10:29:02', 'false'),
(39, 2, 19, '50000.00', '1.00', '2021-07-15 10:29:02', '2021-07-15 10:29:02', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` decimal(8,2) DEFAULT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `size` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SKU` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_status` enum('instock','outofstock') COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 10,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `short_description`, `description`, `regular_price`, `sale_price`, `size`, `SKU`, `stock_status`, `featured`, `quantity`, `image`, `images`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Dimplex Dehumidifier', 'dimplex-dehumidifier', 'Dimplex is a stylish and easily portable 15L dehumidifier with a continuous drain option', 'Dimplex is a stylish and easily portable 15L dehumidifier with a continuous drain option', '40000.00', '40000.00', '10L', 'DEHUM', 'instock', 0, 20, '1624715905.jpg', NULL, 1, '2021-06-26 12:58:25', '2021-06-26 12:58:25'),
(2, 'Dimplex 16L Dehumidifier', 'dimplex-16l-dehumidifier', 'Dimplex is a stylish and easily portable 15L dehumidifier with a continuous drain option', 'Dimplex is a stylish and easily portable 15L dehumidifier with a continuous drain option', '50000.00', '50000.00', '16L', 'DIMHUM', 'instock', 0, 20, '1624716560.jpg', NULL, 1, '2021-06-26 13:09:20', '2021-06-26 13:09:20'),
(3, 'Dimplex 14L Dehumidifier', 'dimplex-14l-dehumidifier', 'Dimplex is a stylish and easily portable 15L dehumidifier with a continuous drain option', 'Dimplex is a stylish and easily portable 14L dehumidifier with a continuous drain option', '42000.00', '42000.00', '14L', 'DEHUM', 'instock', 0, 20, '1624716878.jpg', NULL, 1, '2021-06-26 13:14:38', '2021-06-26 13:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `order_item_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rstatus` varchar(20) NOT NULL DEFAULT 'false',
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `rating`, `comment`, `order_item_id`, `created_at`, `rstatus`, `updated_at`) VALUES
(1, 2, 'This product is very good and nice.', 28, '2021-06-15 11:36:30', 'false', '2021-06-15'),
(2, 3, 'This item is awesome', 27, '2021-06-15 11:36:24', 'false', '2021-06-15'),
(3, 4, 'This is a good product', 6, '2021-06-15 09:43:06', 'false', '2021-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('aJz7q7JVTwP7KLJ4SdkfrCSFvQsl9Nh8bCSmCP7C', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:89.0) Gecko/20100101 Firefox/89.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWVk0RjlHMHN2aXhmTVNSUXFPeVBvODNNcHVJNmNENjRaQzJnWkRhTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMS90aGFuay15b3UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1626358289),
('LfpVqPvXCdyxVpf0hhZskfXXzX4HuSo6NH7RPf7e', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:89.0) Gecko/20100101 Firefox/89.0', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiaUtWdTRWSkVDZUt5ak4zYzJ5bWZmUXc1NExMdDhnS1poZXpTWlNWaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMS90aGFuay15b3UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkbDdxR2xPeXVBb3poM2hZSnZGalEvdUZ5ekkySWhkOEx5MDdkVnNBdU9MRHpuNXg4eGd2MS4iO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGw3cUdsT3l1QW96aDNoWUp2RmpRL3VGeXpJMkloZDhMeTA3ZFZzQXVPTER6bjV4OHhndjEuIjtzOjQ6ImNhcnQiO2E6MTp7czo0OiJjYXJ0IjtPOjI5OiJJbGx1bWluYXRlXFN1cHBvcnRcQ29sbGVjdGlvbiI6MTp7czo4OiIAKgBpdGVtcyI7YToyOntzOjMyOiIwMjdjOTEzNDFmZDVjZjRkMjU3OWI0OWM0YjZhOTBkYSI7TzozMjoiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0iOjk6e3M6NToicm93SWQiO3M6MzI6IjAyN2M5MTM0MWZkNWNmNGQyNTc5YjQ5YzRiNmE5MGRhIjtzOjI6ImlkIjtpOjE7czozOiJxdHkiO2k6MTtzOjQ6Im5hbWUiO3M6MjA6IkRpbXBsZXggRGVodW1pZGlmaWVyIjtzOjU6InByaWNlIjtkOjQwMDAwO3M6Nzoib3B0aW9ucyI7TzozOToiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW1PcHRpb25zIjoxOntzOjg6IgAqAGl0ZW1zIjthOjA6e319czo0OToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGFzc29jaWF0ZWRNb2RlbCI7czoxODoiQXBwXE1vZGVsc1xQcm9kdWN0IjtzOjQxOiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AdGF4UmF0ZSI7ZDo3LjU7czo0MToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGlzU2F2ZWQiO2I6MDt9czozMjoiMzcwZDA4NTg1MzYwZjVjNTY4YjE4ZDFmMmU0Y2ExZGYiO086MzI6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtIjo5OntzOjU6InJvd0lkIjtzOjMyOiIzNzBkMDg1ODUzNjBmNWM1NjhiMThkMWYyZTRjYTFkZiI7czoyOiJpZCI7aToyO3M6MzoicXR5IjtpOjE7czo0OiJuYW1lIjtzOjI0OiJEaW1wbGV4IDE2TCBEZWh1bWlkaWZpZXIiO3M6NToicHJpY2UiO2Q6NTAwMDA7czo3OiJvcHRpb25zIjtPOjM5OiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbU9wdGlvbnMiOjE6e3M6ODoiACoAaXRlbXMiO2E6MDp7fX1zOjQ5OiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AYXNzb2NpYXRlZE1vZGVsIjtzOjE4OiJBcHBcTW9kZWxzXFByb2R1Y3QiO3M6NDE6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQB0YXhSYXRlIjtkOjcuNTtzOjQxOiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AaXNTYXZlZCI7YjowO319fX1zOjg6ImNoZWNrb3V0IjthOjQ6e3M6ODoiZGlzY291bnQiO2k6MDtzOjg6InN1YnRvdGFsIjtzOjg6IjkwMDAwLjAwIjtzOjM6InRheCI7czo3OiI2NzUwLjAwIjtzOjU6InRvdGFsIjtzOjg6Ijk2NzUwLjAwIjt9fQ==', 1626348543);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `order_id`, `firstname`, `lastname`, `mobile`, `email`, `address`, `line2`, `city`, `country`, `zipcode`, `created_at`, `updated_at`) VALUES
(1, 5, 'Ade', 'Ade', '09087655430', 'ade@email.com', 'Abijo', NULL, 'Abijo', 'Nigeria', '105101', '2021-06-03 16:57:47', '2021-06-03 16:57:47'),
(2, 7, 'Solomon', 'Ojo', '09089809090', 'sholasol@outlook.com', 'Abijo', NULL, 'Abijo', 'Nigeria', '105101', '2021-06-04 16:05:51', '2021-06-04 16:05:51'),
(3, 8, 'Solomon', 'Ojo', '09089809090', 'sholasol@outlook.com', 'Abijo', NULL, 'Abijo', 'Nigeria', '105101', '2021-06-04 16:06:20', '2021-06-04 16:06:20'),
(4, 9, 'Ojo', 'Shola', '09087564111', 'sholas@email.com', 'Ajah', NULL, 'Ajah', 'Nigeria', '105101', '2021-06-12 17:41:38', '2021-06-12 17:41:38'),
(5, 10, 'Ayo', 'Ojo', '08099988877', 'ayo@gmail.com', 'Fidiso Estate', NULL, 'Lagos', 'Nigeria', '105101', '2021-06-12 18:37:23', '2021-06-12 18:37:23'),
(6, 11, 'Ayo', 'Ojo', '09088766600', 'ayo@user.com', 'Lekki', NULL, 'Lekki', 'Nigeria', '105101', '2021-06-12 18:40:04', '2021-06-12 18:40:04'),
(7, 12, 'Mary', 'Ojo', '07099900090', 'mary@yahoo.com', 'Lekki', NULL, 'Lekki', 'Nigeria', '105101', '2021-06-12 18:43:20', '2021-06-12 18:43:20'),
(8, 13, 'Ade', 'Ade', '07098765432', 'ade@email.com', '123 Ajah', NULL, 'Lagos', 'Nigeria', '34502', '2021-06-12 19:03:39', '2021-06-12 19:03:39'),
(9, 14, 'Awe', 'Awe', '08090090900', 'awe@email.com', 'Lekki Phase 1', NULL, 'Lekki', 'Nigeria', '105101', '2021-06-14 11:10:33', '2021-06-14 11:10:33'),
(10, 15, 'Solomon', 'Ojo', '08176543210', 'sholasolomon@yahoo.com', 'Ajah Lagos', NULL, 'Abijo', 'Nigeria', '105101', '2021-06-14 11:20:31', '2021-06-14 11:20:31'),
(11, 16, 'Ayooluwa', 'Akeju', '08069440804', 'ay@email.com', 'Ajah', NULL, 'Lagos', 'Nigeria', '105101', '2021-06-15 14:51:40', '2021-06-15 14:51:40'),
(12, 17, 'Ayooluwa', 'Akeju', '08069440804', 'ay.akeju@gmail.com', 'Ajah', NULL, 'Lagos', 'Nigeria', '1234', '2021-06-15 15:33:45', '2021-06-15 15:33:45'),
(13, 18, 'Semilore', 'Ojo', '08069440804', 'ay.akeju@gmail.com', '4 Amity Street, Fidiso Estate', NULL, 'Lagos', 'Nigeria', '105101', '2021-06-15 15:39:44', '2021-06-15 15:39:44'),
(14, 19, 'Ayooluwa', 'Akeju', '09088899900', 'user@user.com', '123, Ajah', NULL, 'Lagos', 'Nigeria', '109823', '2021-07-15 10:29:02', '2021-07-15 10:29:02');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `mode` enum('transfer','card','paystack') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','approved','declined','refunded') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `order_id`, `mode`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 5, 'paystack', 'pending', '2021-06-03 16:57:47', '2021-06-03 16:57:47'),
(2, 3, 6, 'paystack', 'pending', '2021-06-04 16:05:22', '2021-06-04 16:05:22'),
(3, 3, 7, 'paystack', 'pending', '2021-06-04 16:05:51', '2021-06-04 16:05:51'),
(4, 3, 8, 'transfer', 'pending', '2021-06-04 16:06:20', '2021-06-04 16:06:20'),
(5, 3, 9, 'paystack', 'pending', '2021-06-12 17:41:38', '2021-06-12 17:41:38'),
(6, 3, 10, 'paystack', 'pending', '2021-06-12 18:37:23', '2021-06-12 18:37:23'),
(7, 3, 11, 'paystack', 'pending', '2021-06-12 18:40:04', '2021-06-12 18:40:04'),
(8, 3, 12, 'paystack', 'pending', '2021-06-12 18:43:20', '2021-06-12 18:43:20'),
(9, 3, 13, 'paystack', 'pending', '2021-06-12 19:03:39', '2021-06-12 19:03:39'),
(10, 3, 14, 'paystack', 'pending', '2021-06-14 11:10:33', '2021-06-14 11:10:33'),
(11, 3, 15, 'paystack', 'pending', '2021-06-14 11:20:31', '2021-06-14 11:20:31'),
(12, 4, 16, 'paystack', 'pending', '2021-06-15 14:51:40', '2021-06-15 14:51:40'),
(13, 4, 17, 'paystack', 'pending', '2021-06-15 15:33:45', '2021-06-15 15:33:45'),
(14, 4, 18, 'paystack', 'pending', '2021-06-15 15:39:44', '2021-06-15 15:39:44'),
(15, 1, 19, 'paystack', 'pending', '2021-07-15 10:29:02', '2021-07-15 10:29:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR' COMMENT 'ADM for admin USR for users or customers',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fname`, `lname`, `email`, `phone`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `utype`, `created_at`, `updated_at`) VALUES
(1, 'SysAdmin', NULL, NULL, 'admin@admin.com', NULL, NULL, '$2y$10$l7qGlOyuAozh3hYJvFjQ/uFyzI2Ihd8Ly07dVsAuOLDzn5x8xgv1.', NULL, NULL, NULL, NULL, NULL, 'ADM', '2021-05-22 19:40:47', '2021-05-22 19:40:47'),
(2, 'Amarachi', NULL, NULL, 'amara@email.com', NULL, NULL, '$2y$10$Qv4enQ4ui0cuD79Wk.34Iu50pnlRZQ8gDep2eOYmDYtEVXcmmb8WO', NULL, NULL, NULL, NULL, NULL, 'USR', '2021-05-25 08:05:09', '2021-05-25 08:05:09'),
(3, 'User', NULL, NULL, 'user@user.com', NULL, NULL, '$2y$10$v2TL4tqpdaH43Zh5i4Elx.o353t9JKLLqJrgpvd4A0I7juaHCug1m', NULL, NULL, NULL, NULL, NULL, 'USR', '2021-05-26 16:16:05', '2021-05-26 16:16:05'),
(4, 'Ayo Akeju', NULL, NULL, 'ay@email.com', NULL, NULL, '$2y$10$2yISnEe9az.idraPNaUldeV2UnnMcqra4G..tK2w9RDyRdERHxgR2', NULL, NULL, NULL, NULL, NULL, 'USR', '2021-06-15 14:49:40', '2021-06-15 14:49:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_categories`
--
ALTER TABLE `home_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shippings_order_id_foreign` (`order_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_order_id_foreign` (`order_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_categories`
--
ALTER TABLE `home_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shippings`
--
ALTER TABLE `shippings`
  ADD CONSTRAINT `shippings_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
