-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 08:16 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `commentable_id` bigint(20) UNSIGNED NOT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approvd` tinyint(1) NOT NULL DEFAULT 0,
  `parent_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `commentable_id`, `commentable_type`, `approvd`, `parent_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'App\\Models\\Post', 1, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci?', '2022-09-16 00:47:01', '2022-09-16 00:47:21');

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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_06_065222_create_posts_table', 1),
(6, '2022_09_06_145439_create_profiles_table', 1),
(7, '2022_09_07_110507_create_messages_table', 1),
(8, '2022_09_08_105315_create_comments_table', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `image`, `title`, `caption`, `tags`, `created_at`, `updated_at`) VALUES
(2, 'images/team-4.jpg', 'lorem ipsume', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...', 'lorem', '2022-09-16 00:41:43', '2022-09-16 00:43:20'),
(3, 'images/ivana-square.jpg', 'lorem ipsume', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...', 'lorem', '2022-09-16 00:42:12', '2022-09-16 00:45:43'),
(4, 'images/drake.jpg', 'lorem', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab rem quod voluptatibus molestiae fugit dolores! Neque, voluptatem ab doloribus ducimus rem explicabo adipisci? Rem vitae incidunt ex quis min...', 'lorem', '2022-09-16 00:43:56', '2022-09-16 00:46:04');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `progressbar_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `progressbar_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `progressbar_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `progressbar_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_of_progressbar_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_of_progressbar_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_of_progressbar_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_of_progressbar_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `image`, `name`, `bio`, `telegram`, `instagram`, `facebook`, `progressbar_1`, `progressbar_2`, `progressbar_3`, `progressbar_4`, `name_of_progressbar_1`, `name_of_progressbar_2`, `name_of_progressbar_3`, `name_of_progressbar_4`, `created_at`, `updated_at`) VALUES
(1, 'images/admin/drake.jpg', 'ali', 'hello my name is ali i\'m a fullstackdeveloper learnmyself i like learn new teknologt about web and i love new chalnge', 'tel', 'instagram.com', 'facebook.com', '77', '75', '72', '65', 'html', 'css', 'php', 'laravel', NULL, '2022-09-15 05:11:45');

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
(1, 'blade', 'alichchali811@gmail.com', NULL, '$2y$10$vlp/AVPDu1bKp2RQ99iOseSZQF6KsqhSwNOJm0E77w4KlggWuPoRy', NULL, '2022-09-16 00:39:25', '2022-09-16 00:39:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
