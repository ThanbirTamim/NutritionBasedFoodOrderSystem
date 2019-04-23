-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 08:41 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodordersystemversion3`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutsections`
--

CREATE TABLE `aboutsections` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutsections`
--

INSERT INTO `aboutsections` (`id`, `photo`, `adminname`, `created_at`, `updated_at`) VALUES
(2, 'slide-img1.jpg', 'Aanu', '2018-10-28 10:15:44', '2018-10-28 10:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Thanbir', 'sk@gmail.com', '$2y$10$gTqoOv.dUYRcC6vIDd0CM..0BUSwF.o1gLVYUHSr9WCE4GguQRmEK', '2019-03-17 01:33:23', '2019-03-17 01:33:23'),
(2, 'Mahabub', 'mahabub@gmail.com', '$2y$10$aB58vCmRBZjpDd8/SKJFiO.5QvLy1Zsziuj7ILxSlah1SU3JrexqO', '2019-03-17 08:31:50', '2019-03-17 08:31:50');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `protein` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calories` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `price`, `photo`, `photo_path`, `adminname`, `protein`, `fat`, `calories`, `created_at`, `updated_at`) VALUES
(1, 'burger1', '160', 'burger1.jpg', 'C:\\xampp\\tmp\\php499C.tmp', 'Tamim', '60', '20', '20', '2018-11-28 11:46:16', '2018-11-28 11:46:16'),
(2, 'burger2', '150', 'burger3.jpg', 'C:\\xampp\\tmp\\phpAEFE.tmp', 'Tamim', '60', '10', '30', '2018-11-28 11:46:42', '2018-11-28 11:46:42'),
(3, 'burger3', '160', 'burger4.jpg', 'C:\\xampp\\tmp\\php1991.tmp', 'Tamim', '78', '7', '15', '2018-11-28 11:47:09', '2018-11-28 11:47:09'),
(4, 'burger4', '100', 'burger5.jpg', 'C:\\xampp\\tmp\\php9303.tmp', 'Tamimm', '60', '5', '35', '2019-04-06 09:06:18', '2019-04-06 09:06:18'),
(5, 'burger5', '290', 'burger6.jpg', 'C:\\xampp\\tmp\\php1E6C.tmp', 'Tamimm', '55', '11', '34', '2019-04-06 09:06:53', '2019-04-06 09:06:53'),
(6, 'burger6', '199', 'burger7.jpg', 'C:\\xampp\\tmp\\php9F74.tmp', 'Tamimm', '77', '3', '20', '2019-04-06 09:07:26', '2019-04-06 09:07:26');

-- --------------------------------------------------------

--
-- Table structure for table `food_carts`
--

CREATE TABLE `food_carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `customeremail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foodid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_carts`
--

INSERT INTO `food_carts` (`id`, `customeremail`, `foodid`, `created_at`, `updated_at`) VALUES
(1, 'sk@gmail.com', '1', '2019-03-17 07:45:32', '2019-03-17 07:45:32'),
(3, 'mahabub@gmail.com', '2', '2019-03-17 08:32:52', '2019-03-17 08:32:52'),
(5, 'sk@gmail.com', '3', '2019-03-23 11:52:56', '2019-03-23 11:52:56'),
(7, 'mahabub@gmail.com', '1', '2019-03-23 12:10:38', '2019-03-23 12:10:38'),
(8, 'sk@gmail.com', '2', '2019-03-24 01:20:09', '2019-03-24 01:20:09'),
(9, 'sk@gmail.com', '6', '2019-04-08 22:47:46', '2019-04-08 22:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `food_recommends`
--

CREATE TABLE `food_recommends` (
  `id` int(10) UNSIGNED NOT NULL,
  `foodid` int(11) NOT NULL,
  `BMI` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_recommends`
--

INSERT INTO `food_recommends` (`id`, `foodid`, `BMI`, `created_at`, `updated_at`) VALUES
(1, 20, 15, NULL, NULL),
(2, 20, 16, NULL, NULL),
(3, 20, 17, NULL, NULL),
(4, 20, 15, NULL, NULL),
(5, 11, 18, NULL, NULL),
(6, 11, 19, NULL, NULL),
(7, 11, 20, NULL, NULL),
(8, 11, 21, NULL, NULL),
(9, 11, 22, NULL, NULL),
(10, 10, 23, NULL, NULL),
(11, 10, 24, NULL, NULL),
(12, 10, 25, NULL, NULL),
(13, 7, 26, NULL, NULL),
(14, 7, 27, NULL, NULL),
(15, 7, 28, NULL, NULL),
(16, 7, 29, NULL, NULL),
(17, 7, 30, NULL, NULL),
(18, 5, 31, NULL, NULL),
(19, 5, 32, NULL, NULL),
(20, 5, 33, NULL, NULL),
(21, 5, 34, NULL, NULL),
(22, 3, 35, NULL, NULL),
(23, 3, 36, NULL, NULL),
(24, 3, 37, NULL, NULL),
(25, 3, 38, NULL, NULL),
(26, 6, 39, NULL, NULL),
(27, 6, 40, NULL, NULL),
(28, 6, 41, NULL, NULL);

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2018_05_04_171123_create_data_table', 1),
(9, '2018_05_06_071742_create_aboutsections_table', 1),
(10, '2018_05_06_125535_create_videosections_table', 1),
(11, '2018_11_22_160535_create_orders_table', 2),
(12, '2018_11_28_174133_create_data_table', 3),
(13, '2019_03_17_063233_create_customers_table', 4),
(16, '2019_03_17_091127_create_transanctions_table', 5),
(18, '2019_03_17_133319_create_food_carts_table', 6),
(19, '2019_04_06_145908_create_recommendations_table', 7),
(20, '2019_04_06_153038_create_reports_table', 7),
(21, '2019_04_07_042813_create_values_table', 8),
(22, '2019_04_10_144716_create_food_recommends_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `numberoffood` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foodname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foodprice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerphone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerheight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customerweight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `numberoffood`, `foodname`, `foodprice`, `customername`, `customerphone`, `customerheight`, `customerweight`, `address`, `created_at`, `updated_at`) VALUES
(1, '4', 'burger1 , burger2 , burger3 , burger4 ,', '710', 'Thanbir Tamim', '01521432421', '150', '60', 'dhaka', '2018-11-22 10:56:05', '2018-11-22 10:56:05'),
(2, '1', 'burger5 ,', '150', 'Thanbir Tamim', '01521432421', '150', '50', 'dhaka', '2018-11-22 11:15:34', '2018-11-22 11:15:34'),
(3, '2', 'burger1 , burger5 ,', '400', 'Thanbir Tamim', '01521432421', '154', '60', 'dhaka', '2018-11-22 11:16:15', '2018-11-22 11:16:15'),
(4, '8', 'burger3(5), burger5(2), burger6(1),', '1000', 'Thanbir Tamim', '01521432421', '150', '60', 'dhaka', '2018-11-23 09:53:50', '2018-11-23 09:53:50'),
(5, '7', 'burger1(2), burger2(3), burger3(2),', '1090', 'Thanbir Tamim', '01521432421', '150', '50', 'dhaka', '2018-11-29 19:36:38', '2018-11-29 19:36:38'),
(6, '10', 'burger1(4), burger2(4), burger3(2),', '1560', 'Thanbir Tamim', '01521432421', NULL, NULL, 'dhaka', '2018-11-29 19:38:32', '2018-11-29 19:38:32'),
(7, '2', 'burger1(1), burger3(1),', '320', 'Thanbir Tamim', '01521432421', NULL, NULL, 'dhaka', '2018-11-29 20:57:36', '2018-11-29 20:57:36'),
(8, '2', 'burger1(1), burger3(1),', '320', 'Thanbir Tamim', '01521432400', NULL, NULL, 'dhaka', '2019-03-17 07:17:29', '2019-03-17 07:17:29'),
(9, '1', 'burger1(1),', '160', 'aaa', '01521432400', NULL, NULL, 'dhaka', '2019-03-17 07:20:21', '2019-03-17 07:20:21'),
(10, '1', 'burger1(1),', '160', 'Promi', '23456', NULL, NULL, 'dhaka', '2019-03-24 01:19:00', '2019-03-24 01:19:00');

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
-- Table structure for table `recommendations`
--

CREATE TABLE `recommendations` (
  `id` int(10) UNSIGNED NOT NULL,
  `day` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `advertise` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cellcost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `advertise`, `cellcost`, `created_at`, `updated_at`) VALUES
(1, '5000', '17000', NULL, NULL),
(2, '6000', '18000', NULL, NULL),
(3, '9000', '27000', NULL, NULL),
(4, '6200', '19000', NULL, NULL),
(5, '6700', '11000', NULL, NULL),
(6, '7000', '13000', NULL, NULL),
(7, '6000', '11200', NULL, NULL),
(8, '8000', '13000', NULL, NULL),
(9, '7000', '14000', NULL, NULL),
(10, '8000', '15000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transanctions`
--

CREATE TABLE `transanctions` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foodname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foodprice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transanctions`
--

INSERT INTO `transanctions` (`id`, `email`, `name`, `phone`, `address`, `foodname`, `foodprice`, `created_at`, `updated_at`) VALUES
(1, 'sk@gmail.com', 'Thanbir', '01521432400', 'dhaka', 'burger1(1),', '160', '2019-03-17 07:28:10', '2019-03-17 07:28:10'),
(3, 'mahabub@gmail.com', 'Mahabub', '01521432422', 'rajshahi', 'burger1(1), burger3(1),', '320', '2019-03-17 08:32:48', '2019-03-17 08:32:48'),
(5, 'sk@gmail.com', 'Thanbir', '01521432421', 'dhaka', 'burger1(1),', '160', '2019-04-10 08:24:32', '2019-04-10 08:24:32'),
(6, 'sk@gmail.com', 'Thanbir', '01521432422', 'dhaka', 'burger5(1),', '290', '2019-04-10 08:24:58', '2019-04-10 08:24:58'),
(7, 'sk@gmail.com', 'Thanbir', '01521432421', 'dhaka', 'burger2(1),', '150', '2019-04-10 08:26:06', '2019-04-10 08:26:06'),
(8, 'sk@gmail.com', 'Thanbir', '01521432421', 'dhaka', 'burger1(1),', '160', '2019-04-10 08:26:34', '2019-04-10 08:26:34'),
(9, 'sk@gmail.com', 'Thanbir', '01521432421', 'dhaka', 'burger6(1),', '199', '2019-04-10 08:26:48', '2019-04-10 08:26:48'),
(10, 'sk@gmail.com', 'Thanbir', '01521432421', 'dhaka', 'burger2(1),', '150', '2019-04-10 08:27:03', '2019-04-10 08:27:03'),
(11, 'sk@gmail.com', 'Thanbir', '01521432421', 'dhaka', 'burger1(1),', '160', '2019-04-10 08:28:23', '2019-04-10 08:28:23'),
(12, 'sk@gmail.com', 'Thanbir', '01521432421', 'dhaka', 'burger6(1),', '199', '2019-04-10 08:28:37', '2019-04-10 08:28:37'),
(13, 'sk@gmail.com', 'Thanbir', '01521432421', 'dhaka', 'burger1(1),', '160', '2019-04-10 08:29:16', '2019-04-10 08:29:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tamimm', 'sk.tamim56@gmail.com', NULL, '$2y$10$FrI/c/QNnpS/mTqQDdJFF.UgKfECtIT1ALLK781uk/yvTEz7OPuNG', '43MomUlSmdHqZQFioOePjBzbTrQeneP86mG4xdBzluwmbjxxoPUsTm5aU3c3', '2018-10-28 10:05:42', '2018-11-30 00:19:17'),
(2, 'Aanu', 'aanu@gmail.com', NULL, '$2y$10$es97wcYb7t5vZry2YG5Na.xFO4ULAUR11zaTAhth9KzL8EkzK1qXW', 'erUnH20hgD4ywBO7EpWZcLZS8Q2QYIlde4x2xLm1w9QlYftndicvLshDiDPB', '2018-10-28 10:06:10', '2018-10-28 10:06:10');

-- --------------------------------------------------------

--
-- Table structure for table `values`
--

CREATE TABLE `values` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `values`
--

INSERT INTO `values` (`id`, `name`, `phone`, `created_at`, `updated_at`) VALUES
(1, 0, 234567890, '2019-04-06 22:55:45', '2019-04-06 22:55:45'),
(2, 0, 1234567890, '2019-04-06 22:59:33', '2019-04-06 22:59:33'),
(3, 0, 99999, '2019-04-06 23:14:32', '2019-04-06 23:14:32'),
(4, 0, 1234567890, '2019-04-06 23:15:31', '2019-04-06 23:15:31'),
(5, 5, 0, '2019-04-06 23:18:32', '2019-04-06 23:18:32'),
(6, 11, 0, '2019-04-06 23:18:46', '2019-04-06 23:18:46'),
(7, 10, 4, '2019-04-06 23:21:20', '2019-04-06 23:21:20');

-- --------------------------------------------------------

--
-- Table structure for table `videosections`
--

CREATE TABLE `videosections` (
  `id` int(10) UNSIGNED NOT NULL,
  `videolink` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videosections`
--

INSERT INTO `videosections` (`id`, `videolink`, `photo`, `adminname`, `created_at`, `updated_at`) VALUES
(1, 'https://www.youtube.com/watch?v=rVUw-ZnYe18', 'burger2.jpg', 'Aanu', '2018-10-28 10:22:35', '2018-10-28 10:22:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutsections`
--
ALTER TABLE `aboutsections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_carts`
--
ALTER TABLE `food_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_recommends`
--
ALTER TABLE `food_recommends`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `recommendations`
--
ALTER TABLE `recommendations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transanctions`
--
ALTER TABLE `transanctions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `values`
--
ALTER TABLE `values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videosections`
--
ALTER TABLE `videosections`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutsections`
--
ALTER TABLE `aboutsections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `food_carts`
--
ALTER TABLE `food_carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `food_recommends`
--
ALTER TABLE `food_recommends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `recommendations`
--
ALTER TABLE `recommendations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transanctions`
--
ALTER TABLE `transanctions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `values`
--
ALTER TABLE `values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `videosections`
--
ALTER TABLE `videosections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
