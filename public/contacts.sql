-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2023 at 05:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contacts`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT 'no name',
  `num` varchar(255) NOT NULL,
  `mail` varchar(255) DEFAULT 'no mail',
  `favorite` enum('yes','no') NOT NULL DEFAULT 'no',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `num`, `mail`, `favorite`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ms. Mina Lowe', '499-864971335', 'daija71@example.org', 'no', 3, NULL, '2023-04-19 08:19:56', '2023-04-19 10:13:23'),
(2, 'Miss Aniya Ritchie II', '528-354566518', 'casey86@example.com', 'no', 2, NULL, '2023-04-19 08:19:56', '2023-04-19 08:19:56'),
(3, 'Prof. Barbara Zulauf', '557-359738959', 'cschumm@example.com', 'no', 3, NULL, '2023-04-19 08:19:56', '2023-04-19 10:17:15'),
(4, 'Madaline Jakubowski', '885-720765538', 'kutch.ismael@example.org', 'no', 1, NULL, '2023-04-19 08:19:56', '2023-04-19 08:19:56'),
(5, 'Polly Balistreri', '424-111679424', 'hackett.tremaine@example.com', 'yes', 3, NULL, '2023-04-19 08:19:56', '2023-04-19 08:19:56'),
(6, 'Mozell Towne IV', '402-777559467', 'cloyd.cremin@example.org', 'yes', 1, NULL, '2023-04-19 08:19:56', '2023-04-19 08:19:56'),
(7, 'Lulu Waelchi', '606-891891268', 'abbigail.abernathy@example.com', 'yes', 4, NULL, '2023-04-19 08:19:56', '2023-04-19 08:19:56'),
(8, 'Mr. Tanner Wunsch', '379-296283638', 'vnader@example.org', 'yes', 1, NULL, '2023-04-19 08:19:56', '2023-04-19 08:19:56'),
(9, 'Jazmyne Metz', '775-498737623', 'judah.kozey@example.org', 'yes', 3, NULL, '2023-04-19 08:19:56', '2023-04-19 08:19:56'),
(10, 'Alaina Parisian', '081-833909559', 'ferry.aaliyah@example.net', 'no', 3, '2023-04-19 09:14:09', '2023-04-19 08:19:56', '2023-04-19 09:14:09'),
(11, 'Noel Reilly', '992-232453280', 'ruby76@example.net', 'no', 2, NULL, '2023-04-19 08:19:56', '2023-04-19 08:19:56'),
(12, 'Dr. Deanna Schamberger', '377-270844903', 'pansy39@example.com', 'yes', 1, NULL, '2023-04-19 08:19:56', '2023-04-19 08:19:56'),
(13, 'Kacey Gaylord', '846-922250615', 'keyshawn08@example.org', 'no', 3, '2023-04-19 14:01:10', '2023-04-19 08:19:56', '2023-04-19 14:01:10'),
(14, 'Norval Dare', '308-037294148', 'gokon@example.com', 'no', 3, NULL, '2023-04-19 08:19:56', '2023-04-19 08:19:56'),
(15, 'Enid Kuhn DDS', '221-620589429', 'jody.fritsch@example.org', 'no', 1, NULL, '2023-04-19 08:19:56', '2023-04-19 08:19:56'),
(16, 'Darion Kreiger V', '017-910407685', 'domenica42@example.com', 'no', 5, NULL, '2023-04-19 08:19:56', '2023-04-19 08:19:56'),
(17, 'Hubert Armstrong', '983-288020661', 'qlockman@example.net', 'yes', 4, NULL, '2023-04-19 08:19:56', '2023-04-19 08:19:56'),
(18, 'Lavon Mueller', '690-612878368', 'jacobson.lurline@example.org', 'yes', 5, NULL, '2023-04-19 08:19:56', '2023-04-19 08:19:56'),
(19, 'Jackie Howe', '062-554846681', 'rodrigo.mraz@example.com', 'no', 1, NULL, '2023-04-19 08:19:56', '2023-04-19 08:19:56'),
(20, 'Lennie Hettinger', '106-116187686', 'conn.walter@example.net', 'yes', 3, NULL, '2023-04-19 08:19:56', '2023-04-19 08:19:56'),
(21, 'TeXnicCenter', '000 00000001', 'technician@tech.com', 'yes', 3, NULL, '2023-04-19 08:24:17', '2023-04-19 10:18:48'),
(22, 'test name', '000 00000002', 'test@mail.com', 'no', 3, NULL, '2023-04-19 08:24:57', '2023-04-19 10:19:46'),
(23, 'xxxxxxxxxxxxx', '222222222222222', NULL, 'no', 3, '2023-04-19 14:00:52', '2023-04-19 13:35:40', '2023-04-19 14:00:52'),
(24, 'dfdf', '895262948126', NULL, 'yes', 6, NULL, '2023-04-19 13:43:16', '2023-04-19 13:43:16'),
(25, 'dfgfege', '87651236469', NULL, 'no', 6, NULL, '2023-04-19 13:43:47', '2023-04-19 13:43:47');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_06_152723_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Dena Wyman', 'jazmyne.bosco@example.net', '2023-04-19 08:19:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'A0tTbWx1sK', '2023-04-19 08:19:56', '2023-04-19 08:19:56'),
(2, 'Moshe VonRueden', 'armand39@example.net', '2023-04-19 08:19:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'yZzUrM2s9f', '2023-04-19 08:19:56', '2023-04-19 08:19:56'),
(3, 'Valentine Hauck DDS', 'teresa.oberbrunner@example.net', '2023-04-19 08:19:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cwUHh8m9NpheJmc57dS0cUB5nKPnkKZF2xO7gNbi3d8o5dRh8JmBcWF6R3yG', '2023-04-19 08:19:56', '2023-04-19 08:19:56'),
(4, 'Chauncey Olson MD', 'laury93@example.org', '2023-04-19 08:19:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'GqN4gBm3GC', '2023-04-19 08:19:56', '2023-04-19 08:19:56'),
(5, 'Adalberto Mann', 'skutch@example.org', '2023-04-19 08:19:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1apFJ0Boyv', '2023-04-19 08:19:56', '2023-04-19 08:19:56'),
(6, 'mad', 'ahmeddjemilmoussa@gmail.com', NULL, '$2y$10$idccH8jsy2BgTVvs3EOyb./yRuZzUWG44aZ1RfA8DRhzyDZYCwBDC', NULL, '2023-04-19 13:01:34', '2023-04-19 13:01:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
