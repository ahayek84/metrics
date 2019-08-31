-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 31, 2019 at 03:12 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metrics_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `constants`
--

DROP TABLE IF EXISTS `constants`;
CREATE TABLE IF NOT EXISTS `constants` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `val` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daily__logs`
--

DROP TABLE IF EXISTS `daily__logs`;
CREATE TABLE IF NOT EXISTS `daily__logs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `action_date` datetime NOT NULL,
  `class_of_object` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_object` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily__logs`
--

INSERT INTO `daily__logs` (`id`, `action_date`, `class_of_object`, `type_of_object`, `count`, `created_at`, `updated_at`) VALUES
(1, '2019-01-01 00:00:00', 'item', 'Glass', '12', NULL, NULL),
(2, '2019-01-01 00:00:00', 'item', 'papers', '15', NULL, NULL),
(3, '2019-01-01 00:00:00', 'item', 'cartoons', '100', NULL, NULL),
(4, '2019-01-01 00:00:00', 'item', 'jackets', '80', NULL, NULL),
(5, '2019-01-01 00:00:00', 'channel', 'amazon', '20', NULL, NULL),
(6, '2019-01-01 00:00:00', 'channel', 'alibaba', '70', NULL, NULL),
(7, '2019-01-01 00:00:00', 'channel', 'sellenvo', '10', NULL, NULL),
(8, '2019-01-01 00:00:00', 'country', 'usa', '20', NULL, NULL),
(9, '2019-01-01 00:00:00', 'country', 'holand', '100', NULL, NULL),
(10, '2019-01-01 00:00:00', 'country', 'germany', '30', NULL, NULL),
(11, '2019-02-01 00:00:00', 'item', 'Glass', '10', NULL, NULL),
(12, '2019-02-01 00:00:00', 'item', 'papers', '9', NULL, NULL),
(13, '2019-02-01 00:00:00', 'item', 'cartoons', '30', NULL, NULL),
(14, '2019-02-01 00:00:00', 'item', 'jackets', '50', NULL, NULL),
(15, '2019-02-01 00:00:00', 'channel', 'amazon', '10', NULL, NULL),
(16, '2019-02-01 00:00:00', 'channel', 'alibaba', '30', NULL, NULL),
(17, '2019-02-01 00:00:00', 'channel', 'sellenvo', '5', NULL, NULL),
(18, '2019-02-01 00:00:00', 'country', 'usa', '7', NULL, NULL),
(19, '2019-02-01 00:00:00', 'country', 'holand', '52', NULL, NULL),
(20, '2019-02-01 00:00:00', 'country', 'germany', '75', NULL, NULL),
(21, '2019-03-01 00:00:00', 'item', 'Glass', '20', NULL, NULL),
(22, '2019-03-01 00:00:00', 'item', 'papers', '18', NULL, NULL),
(23, '2019-03-01 00:00:00', 'item', 'cartoons', '60', NULL, NULL),
(24, '2019-03-01 00:00:00', 'item', 'jackets', '100', NULL, NULL),
(25, '2019-03-01 00:00:00', 'channel', 'amazon', '20', NULL, NULL),
(26, '2019-03-01 00:00:00', 'channel', 'alibaba', '60', NULL, NULL),
(27, '2019-03-01 00:00:00', 'channel', 'sellenvo', '25', NULL, NULL),
(28, '2019-03-01 00:00:00', 'country', 'usa', '18', NULL, NULL),
(29, '2019-03-01 00:00:00', 'country', 'holand', '10', NULL, NULL),
(30, '2019-03-01 00:00:00', 'country', 'germany', '1', NULL, NULL),
(31, '2019-04-01 00:00:00', 'item', 'Glass', '25', NULL, NULL),
(32, '2019-04-01 00:00:00', 'item', 'papers', '23', NULL, NULL),
(33, '2019-04-01 00:00:00', 'item', 'cartoons', '21', NULL, NULL),
(34, '2019-04-01 00:00:00', 'item', 'jackets', '12', NULL, NULL),
(35, '2019-04-01 00:00:00', 'channel', 'amazon', '7', NULL, NULL),
(36, '2019-04-01 00:00:00', 'channel', 'alibaba', '6', NULL, NULL),
(37, '2019-04-01 00:00:00', 'channel', 'sellenvo', '18', NULL, NULL),
(38, '2019-04-01 00:00:00', 'country', 'usa', '2', NULL, NULL),
(39, '2019-04-01 00:00:00', 'country', 'holand', '9', NULL, NULL),
(40, '2019-04-01 00:00:00', 'country', 'germany', '10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mertics`
--

DROP TABLE IF EXISTS `mertics`;
CREATE TABLE IF NOT EXISTS `mertics` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `act_date` datetime NOT NULL,
  `metric_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metric_value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mertics`
--

INSERT INTO `mertics` (`id`, `act_date`, `metric_name`, `metric_value`, `created_at`, `updated_at`) VALUES
(1, '2019-01-01 00:00:00', 'Items_total', '250', NULL, NULL),
(2, '2019-01-01 00:00:00', 'Channels_total', '10', NULL, NULL),
(3, '2019-01-01 00:00:00', 'Counrty_total', '80', NULL, NULL),
(4, '2019-02-01 00:00:00', 'Items_total', '180', NULL, NULL),
(5, '2019-02-01 00:00:00', 'Channels_total', '10', NULL, NULL),
(6, '2019-02-01 00:00:00', 'Counrty_total', '80', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_23_135336_create_mertics_table', 1),
(8, '2019_08_23_135415_create_daily__logs_table', 1),
(9, '2019_08_23_150507_create_constants_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
