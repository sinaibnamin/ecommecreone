-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 03:26 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'xiaomi', 'good brand', '1605257616.png', NULL, '2020-11-13 02:58:41'),
(2, 'samsung', 'valo brand', '1605257636.png', NULL, '2020-11-13 02:53:56'),
(4, 'huawei', 'valo', '1605257689.jpg', '2020-11-13 02:54:49', '2020-11-13 02:54:49'),
(5, 'polo', 'f', '1605257703.png', '2020-11-13 02:55:03', '2020-11-13 02:55:03'),
(6, 'nike', 'g', '1605257712.png', '2020-11-13 02:55:13', '2020-11-13 02:55:13'),
(7, 'addidas', 'g', '1605257724.png', '2020-11-13 02:55:24', '2020-11-13 02:55:24'),
(9, 'apple', 'good', '1605280025.png', '2020-11-13 09:07:05', '2020-11-13 09:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `parent_id`, `created_at`, `updated_at`) VALUES
(7, 'garments', 'here is garments', '1605208956.jpg', NULL, '2020-11-11 13:30:58', '2020-11-12 13:22:36'),
(12, 'electronics', 'kjdbvds vhbj dsv dsbhv  vd vud vuh vu', '1605208965.jpg', NULL, '2020-11-12 06:19:00', '2020-11-12 13:22:45'),
(13, 'food', 'food cat', '1605208942.jpg', NULL, '2020-11-12 13:22:22', '2020-11-12 13:22:22'),
(14, 'phone', 'hello phone', '1605209044.jpg', 12, '2020-11-12 13:24:04', '2020-11-12 13:24:04'),
(15, 'laptop', 'here laptop', '1605209094.jpg', 12, '2020-11-12 13:24:54', '2020-11-12 13:25:06'),
(17, 'shirt', 'nice pr', '1605214227.jpg', 7, '2020-11-12 14:50:27', '2020-11-12 14:50:27'),
(18, 'pant', 'hello', '1605214239.jpg', 7, '2020-11-12 14:50:39', '2020-11-12 14:50:39'),
(19, 'speaker', 'sound box', '1605253937.jpg', 12, '2020-11-13 01:52:17', '2020-11-13 01:52:17'),
(20, 'power bank', 'bo', '1605264840.jpg', 12, '2020-11-13 04:54:00', '2020-11-13 04:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `division_id`, `created_at`, `updated_at`) VALUES
(2, 'lohagara', 1, '2020-11-16 15:41:29', '2020-11-16 15:41:48'),
(5, 'halisohor', 1, '2020-11-17 07:28:44', '2020-11-17 07:28:44'),
(6, 'gulsan', 6, '2020-11-17 07:28:54', '2020-11-17 07:28:54'),
(7, 'bonani', 6, '2020-11-17 07:29:09', '2020-11-17 07:29:09'),
(8, 'satkhira', 7, '2020-11-17 07:29:17', '2020-11-17 07:29:17');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'chattogram', 1, '2020-11-16 14:55:33', '2020-11-16 15:00:07'),
(6, 'dhaka', 1, '2020-11-17 07:28:26', '2020-11-17 07:28:26'),
(7, 'khulna', 1, '2020-11-17 07:28:32', '2020-11-17 07:28:32');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2020_11_09_153611_create_products_table', 2),
(5, '2020_11_10_081420_create_categories_table', 2),
(6, '2020_11_10_081513_create_brands_table', 2),
(7, '2020_11_10_081615_create_admins_table', 2),
(8, '2020_11_10_093003_create_product_images_table', 2),
(10, '2014_10_12_000000_create_users_table', 3),
(11, '2020_11_16_194117_create_divisions_table', 4),
(12, '2020_11_16_194221_create_districts_table', 4);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `price` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `offer_price` int(11) DEFAULT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `title`, `slug`, `description`, `quantity`, `price`, `status`, `offer_price`, `admin_id`, `created_at`, `updated_at`) VALUES
(26, 20, 1, 'Xiaomi power bank', 'poo', 'Mi 10000mAh Power Bank V3 Dual Input/Output Fast Charge 18W', 7, 2000, 0, NULL, 1, '2020-11-13 04:44:24', '2020-11-13 05:11:48'),
(27, 20, 2, 'Samsung power bank', 'poo', 'it is a good lorem ipsum', 8, 1300, 0, NULL, 1, '2020-11-13 07:25:52', '2020-11-13 07:53:09'),
(28, 20, 4, 'huwai bank', 'poo', 'good capacity', 8, 1200, 0, NULL, 1, '2020-11-13 07:27:06', '2020-11-13 07:27:06'),
(29, 20, 2, 'wonderful bank', 'poo', 'good quality', 9, 1400, 0, NULL, 1, '2020-11-13 07:33:12', '2020-11-13 07:33:12'),
(30, 20, 1, 'xiaomi bank black', 'poo', 'lorem ipsum', 3, 900, 0, NULL, 1, '2020-11-13 07:34:09', '2020-11-13 07:34:09'),
(31, 14, 2, 'galaxy x3', 'poo', 'e a type specimen book. It has survived not only five centuries, but also the', 7, 40000, 0, NULL, 1, '2020-11-13 09:05:48', '2020-11-13 09:05:48'),
(32, 14, 9, 'i phone 3', 'poo', 'osed to using \'Content here, content here\', making it look like rea', 5, 67000, 0, NULL, 1, '2020-11-13 09:08:03', '2020-11-13 09:08:03'),
(33, 14, 4, 'huwai honor', 'poo', 'rch for \'lorem ipsum\' will uncover many web sites still in their infan', 6, 34000, 0, NULL, 1, '2020-11-13 09:08:40', '2020-11-13 09:08:40'),
(34, 17, 5, 'polo shirt', 'poo', 'rch for \'lorem ipsum\' will uncover many web sites still in their infan', 6, 400, 0, NULL, 1, '2020-11-13 09:10:54', '2020-11-13 09:10:54'),
(35, 17, 6, 'nike shirt', 'poo', 'as popularised in the 1960s with the release of Letraset sheets c', 7, 500, 0, NULL, 1, '2020-11-13 09:11:28', '2020-11-13 09:11:28'),
(36, 17, 7, 'addidas shirt', 'poo', 'sktop publishing software like Aldus PageMaker including versions', 8, 700, 0, NULL, 1, '2020-11-13 09:12:01', '2020-11-13 09:12:01'),
(37, 18, 7, 'addidas pant', 'poo', 'ent of a page when looking at its layout. The point of using Lorem Ips', 7, 900, 0, NULL, 1, '2020-11-13 09:13:45', '2020-11-13 09:13:45'),
(38, 18, 6, 'nike pant', 'poo', 'ent of a page when looking at its layout. The point of using Lorem Ips', 7, 600, 0, NULL, 1, '2020-11-13 09:15:40', '2020-11-13 09:15:40'),
(39, 18, 5, 'Good pant', 'poo', 'ent of a page when looking at its layout. The point of using Lorem Ips', 5, 300, 0, NULL, 1, '2020-11-13 09:16:07', '2020-11-16 09:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(15, 26, '16052642641.jpg', '2020-11-13 04:44:24', '2020-11-13 04:44:24'),
(16, 27, '16052739521.jpg', '2020-11-13 07:25:52', '2020-11-13 07:25:52'),
(17, 28, '16052740261.jpg', '2020-11-13 07:27:06', '2020-11-13 07:27:06'),
(18, 29, '16052743921.jpg', '2020-11-13 07:33:12', '2020-11-13 07:33:12'),
(19, 30, '16052744491.jpg', '2020-11-13 07:34:09', '2020-11-13 07:34:09'),
(20, 31, '16052799481.jpg', '2020-11-13 09:05:48', '2020-11-13 09:05:48'),
(21, 32, '16052800831.jpg', '2020-11-13 09:08:03', '2020-11-13 09:08:03'),
(22, 33, '16052801201.jpg', '2020-11-13 09:08:40', '2020-11-13 09:08:40'),
(23, 34, '16052802541.jpg', '2020-11-13 09:10:54', '2020-11-13 09:10:54'),
(24, 35, '16052802881.jpg', '2020-11-13 09:11:28', '2020-11-13 09:11:28'),
(25, 36, '16052803211.jpg', '2020-11-13 09:12:01', '2020-11-13 09:12:01'),
(26, 37, '16052804251.jpg', '2020-11-13 09:13:45', '2020-11-13 09:13:45'),
(27, 38, '16052805401.jpg', '2020-11-13 09:15:40', '2020-11-13 09:15:40'),
(28, 39, '16052805671.jpg', '2020-11-13 09:16:07', '2020-11-13 09:16:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `phone`, `email`, `password`, `street_address`, `division_id`, `district_id`, `status`, `ip_address`, `avatar`, `shipping_address`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'sina', 'ibn amin', 'sinaibn-amin', '01711444', 'sinaibnamin@gmail.com', '$2y$10$oNdj85NUu3PT.iognUy0R.muYyueViVGPEQYiFqgBQR7haDDU6i6S', 'sinaibnamin@gmail.com', 1, 2, '0', '127.0.0.1', NULL, NULL, 'o75g4skQYpx9bRLUz4AM', '2020-11-18 13:37:42', '2020-11-18 13:37:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
