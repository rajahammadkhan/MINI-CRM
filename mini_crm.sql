-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 04:51 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `logo`, `website`, `created_at`, `updated_at`) VALUES
(1, 'Demetrius Mcbride', 'tosikineva@mailinator.com', 'logo16848056782276516083.jpg', 'https://www.sitigojugej.us', '2023-05-22 20:34:38', '2023-05-22 20:34:38'),
(2, 'Blythe Barrett', 'vacev@mailinator.com', 'logo16848060536701532075.jpg', 'https://www.hazynypylejyluj.in', '2023-05-22 20:40:53', '2023-05-22 20:40:53'),
(3, 'Graham Wells', 'cazigisu@mailinator.com', 'logo168481132913479082002.png', 'https://www.kez.org', '2023-05-22 22:08:49', '2023-05-22 22:08:49'),
(4, 'Lara Diaz', 'rygycy@mailinator.com', 'logo1684811340142671026.png', 'https://www.zexeqibozi.me', '2023-05-22 22:09:00', '2023-05-22 22:09:00'),
(5, 'Kuame Medina', 'fama@mailinator.com', 'logo16848113534352969783.png', 'https://www.masalofajyda.co.uk', '2023-05-22 22:09:13', '2023-05-22 22:09:13'),
(6, 'Lila Moses', 'fycux@mailinator.com', 'logo168481136913801578440.png', 'https://www.tupiqytolisati.com', '2023-05-22 22:09:29', '2023-05-22 22:09:29'),
(7, 'Zeus Sharp', 'zogytehevy@mailinator.com', 'logo168481138310619208310.png', 'https://www.bydywuzy.ca', '2023-05-22 22:09:43', '2023-05-22 22:09:43'),
(8, 'Fiona Fitzpatrick', 'pipoledab@mailinator.com', 'logo16848114004484631166.png', 'https://www.jyhumamohysoq.com', '2023-05-22 22:10:00', '2023-05-22 22:10:00'),
(9, 'Karyn Sandoval', 'kefah@mailinator.com', 'logo168481141313010792027.jpg', 'https://www.qujuharypuqudab.com', '2023-05-22 22:10:13', '2023-05-22 22:10:13'),
(10, 'Igor Stevenson', 'sobazawec@mailinator.com', 'logo16848114293138005895.png', 'https://www.befitiqa.ca', '2023-05-22 22:10:29', '2023-05-22 22:10:29'),
(11, 'Iliana Mcneil', 'gugymuvefu@mailinator.com', 'logo16848114404785556806.png', 'https://www.tutiraterigimyq.org.uk', '2023-05-22 22:10:40', '2023-05-22 22:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `company_id`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Xaviera', 'Moore', 1, 'xedofijix@mailinator.com', '+1 (478) 742-6218', '2023-05-22 21:47:24', '2023-05-22 21:47:24'),
(2, 'Honorato', 'Knight', 3, 'bafel@mailinator.com', '+1 (259) 476-3052', '2023-05-22 22:10:58', '2023-05-22 22:10:58'),
(3, 'Maya', 'Olson', 8, 'tujuly@mailinator.com', '+1 (403) 143-4235', '2023-05-22 22:11:05', '2023-05-22 22:11:05'),
(4, 'Upton', 'Walsh', 9, 'kabyky@mailinator.com', '+1 (812) 229-4303', '2023-05-22 22:11:13', '2023-05-22 22:11:13'),
(5, 'Brielle', 'Gutierrez', 6, 'dacyhy@mailinator.com', '+1 (459) 812-1282', '2023-05-22 22:11:20', '2023-05-22 22:11:20'),
(6, 'Libby', 'Steele', 9, 'mevysij@mailinator.com', '+1 (167) 819-9291', '2023-05-22 22:11:31', '2023-05-22 22:11:31'),
(7, 'Beatrice', 'Park', 10, 'taxazeb@mailinator.com', '+1 (906) 858-8024', '2023-05-22 22:11:41', '2023-05-22 22:11:41'),
(8, 'Zane', 'Knox', 2, 'sydekoset@mailinator.com', '+1 (547) 838-2843', '2023-05-22 22:11:50', '2023-05-22 22:11:50'),
(9, 'Charde', 'Hayden', 1, 'wuxoviwobo@mailinator.com', '+1 (309) 248-8723', '2023-05-22 22:11:56', '2023-05-22 22:11:56'),
(10, 'Lester', 'Barr', 11, 'putyjog@mailinator.com', '+1 (739) 179-1754', '2023-05-22 22:12:03', '2023-05-22 22:12:03'),
(11, 'Jillian', 'Tate', 4, 'haqydalizy@mailinator.com', '+1 (233) 395-3994', '2023-05-22 22:12:11', '2023-05-22 22:12:11');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_22_184307_create_companies_table', 2),
(6, '2023_05_22_184324_create_employees_table', 3);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$F.Ic7/.ru4dvRYDWY7EXV.Upjhet6u.Nf4QNjGdJjudhHzfJyzq4i', 'ZF8T7GZp7KaurbsuQmtdsjc68I4J6By3acYIgugRyp9JVKjoV3gz7zoMtgQ9', '2023-05-22 13:42:04', '2023-05-22 13:42:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_company_id_foreign` (`company_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
