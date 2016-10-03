-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2016 at 01:58 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `creativebucket`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `original_name` text COLLATE utf8_unicode_ci NOT NULL,
  `filename` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `original_name`, `filename`, `created_at`, `updated_at`) VALUES
(2, 'doodle_4_a_friend_by_natas88-d6o9sps.jpg', 'doodle4afriendbynatas88-d6o9sps', '2016-06-15 14:10:26', '2016-06-15 14:10:26'),
(3, '125412229.anbeWT0E.DSC_9156copy.jpg', '125412229anbewt0edsc9156copy', '2016-06-15 14:12:40', '2016-06-15 14:12:40'),
(5, '125412225.kg6VB0h4.DSC_9088copy.jpg', '125412225kg6vb0h4dsc9088copy', '2016-06-15 14:45:16', '2016-06-15 14:45:16'),
(6, '146129912.50bD1STk.jpg', '14612991250bd1stk', '2016-06-15 14:45:56', '2016-06-15 14:45:56'),
(7, '146129741.ZnvMjqZ9.jpg', '146129741znvmjqz9', '2016-06-15 14:46:18', '2016-06-15 14:46:18'),
(8, '120282041.NPeTVAhv.jpg', '120282041npetvahv', '2016-06-15 16:10:12', '2016-06-15 16:10:12'),
(9, 'HiWB-1-e1335831346507.jpg', 'hiwb-1-e1335831346507', '2016-06-15 17:16:55', '2016-06-15 17:16:55'),
(10, 'have to change this field', 'test/something.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'have to change this field', 'tests/5761dbe878fcb.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'have to change this field', 'tests/5761dcf0d4746.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'have to change this field', 'tests/5761dd5c1f942.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'have to change this field', 'tests/5761e0c7d35e3.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'have to change this field', 'tests/5761e29911874.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'have to change this field', 'tests/5761e2b693cda.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'have to change this field', 'tests/5761e302e82a9.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'have to change this field', 'tests/5761e32cded00.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'have to change this field', 'tests/5761e35b28932.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'have to change this field', 'tests/5761e38774b42.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '12251723184_f0aa6c7eea_b.jpg', '12251723184f0aa6c7eeab', '2016-06-15 17:55:49', '2016-06-15 17:55:49'),
(22, '12251723184_f0aa6c7eea_b.jpg', '12251723184f0aa6c7eeab-79e56', '2016-06-15 17:57:35', '2016-06-15 17:57:35'),
(23, '12251723184_f0aa6c7eea_b.jpg', '12251723184f0aa6c7eeab-61b24', '2016-06-15 18:00:42', '2016-06-15 18:00:42'),
(24, 'photo3.jpg', 'photo3', '2016-06-15 18:01:12', '2016-06-15 18:01:12'),
(25, 'have to change this field', 'tests/5761e62a3deaf.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'have to change this field', 'test/something.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'have to change this field', 'test/something.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'have to change this field', 'test/something.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'have to change this field', 'tests/5770318a65e50.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_100000_create_password_resets_table', 1),
('2016_06_26_133106_create_users_table', 1),
('2016_06_28_173138_create_post_data_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_data`
--

CREATE TABLE IF NOT EXISTS `post_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `like` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `post_data_id_unique` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `post_data`
--

INSERT INTO `post_data` (`id`, `post_id`, `user_id`, `path`, `description`, `like`, `view`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1', '2', 'img/gallery/photo1', 'this is sample image testing. what ever you want to rread or any thing.this is sample image testing. what ever you want to rread or any thing.this is sample image testing. what ever you want to rread or any thing.this is sample image testing. what ever yo', 70, 502, NULL, NULL, NULL),
(2, '2', '1', 'img/gallery/photo7', 'something new are you are here now!!\r\nsomething new are you are here now!!\r\nsomething new are you are here now!!\r\nsomething new are you are here now!!something new are you are here now!!something new are you are here now!!something new are you are here now!!something new are you are here now!!something new are you are here now!!something new are you are here now!!', 12, 206, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `verification_code` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `first_name`, `last_name`, `email`, `password`, `date`, `verified`, `verification_code`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', 'Tejas', 'ambalia', 'tejas@ambalia.com', '$2y$10$l3Ivqp1N3SoZiJvYOIDJKuzUEW3nKfL/FcuBF0tXvpzlB1/O44N6a', '1994-10-07', 0, '', 'OYV36FA7o5nXVOrLZJILlsxhM4PMTxGWa8LHO0Llck4cPLpyJFc7CQT9CRYB', '2016-06-28 11:46:35', '2016-06-28 11:47:08'),
(2, '', 'mona', 'chauhan', 'mona@chauhan.com', '$2y$10$SdcB/jHNsUWDtFBlWiF14uy4mcOsWSgN9TauC2c3rb8HCrEIvmJJy', '1988-11-03', 0, '', 'phcbTunftriP6a15hpg2emBFlx6L2M3UFm0BPZ8NijZ0RF9lADeZrt5jz4ki', '2016-06-28 11:47:32', '2016-06-28 14:25:03'),
(18, '29x40de642b49ccd957ef11895ff1fd4e47', 'Tejas', 'ambalia', 'tejas.ambalia1994@gmail.com', '$2y$10$gESe2qOgIAyJM/nKy3rGBe/Mx.R/i9c.vJ5g/0UWfSKKDKnBZ/VHC', '1994-10-07', 1, '9f4089tb4i2d140', 'QeTZPnu3LfNnS5mNSC8dVliMOwx4EFX3GL4d50R9crt5iaCW6w8SG49UMrIN', '2016-06-29 17:35:05', '2016-06-29 17:57:57'),
(19, '6z79def62f0f0f90b0a671914639b41258e', 'monika', 'chauhan', 'monikabhargav02@gmail.com', '$2y$10$ALdpp2XCuerDk1ebDkufMOVztIWumQE7I5Rxcj7Jg/.7YKbJp616K', '1988-11-03', 0, '63621r0g4ua702z', NULL, '2016-06-29 17:37:02', '2016-06-29 17:37:02'),
(22, '7k7640d828b819b658614de21c3716ffba6', 'khushbu', 'faldu', 'khusboofaldu007@gmail.com', '$2y$10$g7c0F2WFkQl6ungRXXHdneQiuDX06MLxxVhs2a1RLoEod8rkuIkmK', '1994-09-07', 1, '99718z8xno0456f', NULL, '2016-06-29 17:58:48', '2016-06-29 17:58:48');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
