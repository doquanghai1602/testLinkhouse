-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2019 at 12:08 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linkhouse_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_horizontal`
--

CREATE TABLE `menu_horizontal` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_horizontal`
--

INSERT INTO `menu_horizontal` (`id`, `name`, `display`, `created_at`, `updated_at`) VALUES
(1, 'Liên hệ', 1, '2019-03-18 10:29:09', '2019-03-18 10:29:09'),
(2, 'Tuyển dụng', 1, '2019-03-18 10:29:21', '2019-03-18 10:29:21'),
(3, 'Tin tức', 1, '2019-03-18 10:29:28', '2019-03-18 10:29:28'),
(4, 'Dự án', 1, '2019-03-18 10:29:40', '2019-03-18 10:29:40'),
(5, 'Công ty', 0, '2019-03-18 10:29:47', '2019-03-18 10:29:56');

-- --------------------------------------------------------

--
-- Table structure for table `menu_vertical`
--

CREATE TABLE `menu_vertical` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_vertical`
--

INSERT INTO `menu_vertical` (`id`, `name`, `display`, `created_at`, `updated_at`) VALUES
(1, 'Quản lý nhân sự', 1, '2019-03-18 11:06:46', '2019-03-18 11:06:55'),
(2, 'Quản lý tài khoản', 1, '2019-03-18 11:07:11', '2019-03-18 11:07:11'),
(3, 'Quản lý dự án', 1, '2019-03-18 11:07:34', '2019-03-18 11:07:42');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_horizontal`
--
ALTER TABLE `menu_horizontal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_vertical`
--
ALTER TABLE `menu_vertical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_horizontal`
--
ALTER TABLE `menu_horizontal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menu_vertical`
--
ALTER TABLE `menu_vertical`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
