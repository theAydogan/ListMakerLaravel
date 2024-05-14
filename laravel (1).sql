-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 18, 2024 at 07:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `due_date` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `due_date`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Apples', 'Default description', NULL, 1, '2024-04-15 02:28:22', '2024-04-15 02:28:22'),
(2, 'Oranges', 'Default description', NULL, 1, '2024-04-15 02:28:25', '2024-04-15 02:28:25'),
(3, 'Apples', 'Default description', NULL, 2, '2024-04-15 02:38:53', '2024-04-15 02:38:53'),
(4, 'Apples', 'Default description', NULL, 1, '2024-04-15 03:58:00', '2024-04-15 03:58:00'),
(5, 'Apples', 'Monthly Checkup', NULL, 1, '2024-04-15 04:11:29', '2024-04-15 04:11:29'),
(6, 'Doctors appointment', 'Monthly Checkup', NULL, 1, '2024-04-15 04:11:44', '2024-04-15 04:11:44'),
(7, 'Doctors appointment', 'Monthly Checkup', NULL, 1, '2024-04-15 04:13:58', '2024-04-15 04:13:58'),
(8, 'Doctors appointment', 'Monthly Checkup', '2024-04-24 14:00:00', 1, '2024-04-15 04:14:20', '2024-04-15 04:14:20'),
(9, 'Doctors appointment', 'Monthly Checkup', '2024-04-15 00:42:00', 1, '2024-04-15 04:42:12', '2024-04-15 04:42:12'),
(10, 'Doctors appointment', 'Monthly Checkup', '2024-04-15 00:42:00', 1, '2024-04-15 04:43:44', '2024-04-15 04:43:44'),
(11, 'Doctors appointment', 'Monthly Checkup', '2024-04-15 00:42:00', 1, '2024-04-15 04:43:47', '2024-04-15 04:43:47'),
(12, 'Apples', 'Monthly Checkup', '2024-04-15 00:46:00', 1, '2024-04-15 04:46:31', '2024-04-15 04:46:31'),
(13, 'Apples', 'eeee', '2024-04-15 00:48:00', 1, '2024-04-15 04:48:39', '2024-04-15 04:48:39'),
(14, 'Oranges', 'Monthly Checkup', NULL, 1, '2024-04-15 04:48:59', '2024-04-15 04:48:59'),
(15, 'Oranges', 'Monthly Checkup', '2024-04-26 00:49:00', 1, '2024-04-15 04:49:21', '2024-04-15 04:49:21'),
(16, 'Oranges', 'Monthly Checkup', '2024-04-15 01:07:00', 1, '2024-04-15 05:07:20', '2024-04-15 05:07:20'),
(17, 'Apples', 'Monthly Checkup', NULL, 1, '2024-04-15 05:27:26', '2024-04-15 05:27:26'),
(18, 'Apples', 'Monthly Checkup', NULL, 1, '2024-04-15 05:27:26', '2024-04-15 05:27:26'),
(19, 'Oranges', 'Monthly Checkup', NULL, 1, '2024-04-15 05:27:26', '2024-04-15 05:27:26'),
(20, 'Oranges', 'Monthly Checkup', NULL, 1, '2024-04-15 05:27:26', '2024-04-15 05:27:26'),
(21, 'Apples1111', 'Monthly Checkup', NULL, 1, '2024-04-15 05:27:26', '2024-04-15 05:27:26'),
(22, 'Apples22222', 'Monthly Checkup', NULL, 1, '2024-04-15 05:27:26', '2024-04-15 05:27:26'),
(23, 'Oranges', 'Monthly Checkup', NULL, 1, '2024-04-15 05:28:59', '2024-04-15 05:28:59'),
(24, 'Oranges', 'Monthly Checkup', NULL, 1, '2024-04-15 05:48:45', '2024-04-15 05:48:45'),
(25, 'Apples', 'Eat an apple', '2024-04-18 02:52:00', 3, '2024-04-18 06:52:31', '2024-04-18 06:52:31'),
(26, 'Apples', 'Monthly Checkup', NULL, 3, '2024-04-18 07:06:05', '2024-04-18 07:06:05'),
(27, 'Oranges', 'eeee', '2024-04-18 05:17:00', 3, '2024-04-18 09:17:46', '2024-04-18 09:17:46'),
(28, 'Chicken', 'Buy some chicken', '2024-04-20 06:13:00', 3, '2024-04-18 10:13:13', '2024-04-18 10:13:13'),
(29, 'Apples', 'Buy the entire apple corporation', '2024-04-18 15:11:00', 3, '2024-04-18 19:11:14', '2024-04-18 19:11:14'),
(30, 'Apples', 'Eat an apple', '2024-04-18 15:22:00', 4, '2024-04-18 19:22:37', '2024-04-18 19:22:37'),
(31, 'Apples', 'Eat an apple', '2024-04-20 16:59:00', 5, '2024-04-18 20:59:39', '2024-04-18 20:59:39'),
(32, 'Doctors appointment', 'Monthly Checkup', '2024-04-24 17:00:00', 5, '2024-04-18 21:00:49', '2024-04-18 21:00:49'),
(33, 'Doctors appointment', 'Monthly Checkup', '2024-04-18 17:01:00', 3, '2024-04-18 21:01:59', '2024-04-18 21:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(20, '0001_01_01_000000_create_users_table', 1),
(21, '0001_01_01_000001_create_cache_table', 1),
(22, '0001_01_01_000002_create_jobs_table', 1),
(23, '2024_03_26_190546_create_personal_access_tokens_table', 1),
(25, '2024_04_14_220331_create_items_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `firstname`, `lastname`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Charles', 'Barkley', 'Legend', '2024-04-01 06:37:00', '2024-04-01 06:37:00'),
(3, 'Michael', 'Jordan', 'Legend', '2024-04-01 06:37:05', '2024-04-01 06:37:05'),
(4, 'Allen', 'Iverson', 'Legend', '2024-04-01 06:37:07', '2024-04-01 06:37:07'),
(5, 'Choo', 'Jimmy', 'Sleeping', '2024-04-01 06:37:10', '2024-04-01 06:37:10');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fTzDL4pCu9lvq1LxVCgMF2tEXP0dhc3T0J4HMRtq', 3, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUkQxSFN6eXA0bWJ5VGRzSkJmenIyMThxSkRTN2pqUEkyTWZOc2JkRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9saXN0YnVpbGRlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1713459777);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@apple.com', NULL, '$2y$12$nuKCS8MqdFIldkz64AThU./ftm7fOB0S7Pfid9crVYKW0aOBYhhY.', NULL, '2024-04-15 02:04:01', '2024-04-15 02:04:01'),
(2, 'Ahmet', 'test@apple2.com', NULL, '$2y$12$i7832JTqFBoizNSJ8OVDVuDI8pvYDu095rTi0Tg2LhVizNerJwT4q', NULL, '2024-04-15 02:29:00', '2024-04-15 02:29:00'),
(3, 'ahmet', 'soloptep@gmail.com', NULL, '$2y$12$yL5KQ/U8flHhQdv1dXPyeu8ZxlFCU2PkLvxljQRlM0bJ6DZb62zdW', NULL, '2024-04-18 06:51:52', '2024-04-18 06:51:52'),
(4, 'Ahmet Test', 'ahmet.aydogan@mohawkcollege.ca', NULL, '$2y$12$uruDnS582MC4kgB1lWzIbOjYH8dWKitYBX/nZAsxlcmBAZaaUkn1i', NULL, '2024-04-18 19:22:11', '2024-04-18 19:22:11'),
(5, 'Jim', 'jimbo@gmail.com', NULL, '$2y$12$punbvVOKnA/y4MqOnTNv8OrRLext0sYnQUBzbunMVm14TCjbp.k7i', NULL, '2024-04-18 20:58:41', '2024-04-18 20:58:41');

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE `users2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_user_id_foreign` (`user_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users2_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users2`
--
ALTER TABLE `users2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
