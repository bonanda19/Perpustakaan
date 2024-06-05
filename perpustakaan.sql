-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 10:30 AM
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
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` char(36) NOT NULL,
  `jilid_id` char(36) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Tahun` varchar(255) NOT NULL,
  `NoLemari` varchar(255) NOT NULL,
  `Bagian` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `jilid_id`, `Judul`, `Tahun`, `NoLemari`, `Bagian`, `image`, `published_at`, `created_at`, `updated_at`) VALUES
('9c26a454-f099-48a3-b28d-2f27d55cfefb', '9c269fc9-9c82-445e-8904-71248a0c3bbf', 'Himpunan Peraturan Menteri Ketenagakerjaan', '2022', '2', '2A', 'post-images/zcqRVRJX8jLvRr80qNM0HPO72ccgysnNjmbGPlt0.jpg', NULL, '2024-05-28 05:03:17', '2024-05-31 00:54:25'),
('9c2c0a22-8fb9-4f81-9d82-8c5cce935134', '9c269fc9-9c82-445e-8904-71248a0c3bbf', 'himpunan peraturan pemberantasan tindak pidana korupsi KKN bersama KPK, BPK dan tindak pidana pencucian uang  tahun 2013', '2024', '2', 'B', 'post-images/DGUzojAr4egqBJcT2uLFngP54G8j9pT89F7ej2Mk.jpg', NULL, '2024-05-30 21:27:05', '2024-05-31 00:54:07'),
('9c2c417e-2efb-4ddb-89c7-0e54584907cb', '9c2708d7-5e77-46db-bc4c-ad0550d14d62', 'himpunan peraturan menteri pendidikan kebudayan riset dan teknologi tahun 2022', '2023', '1', 'B', 'post-images/B8F6bVoJmIUVtBCRK09Qb6vLxV45DZUsx2SRyoWo.jpg', NULL, '2024-05-31 00:01:52', '2024-05-31 00:55:04'),
('9c2c4250-f4ae-400e-acd6-9a62b3467835', '9c269fc9-9c82-445e-8904-71248a0c3bbf', 'himpunan peraturan menteri koordinator bidang pembangunan manusia dan kebudayaan tahun 2021', '2024', '2', 'B', 'post-images/qRnT21OFrvkYjWiwjJDJj9wrodazlAGLoFbYEoC3.jpg', NULL, '2024-05-31 00:04:10', '2024-05-31 00:57:09');

-- --------------------------------------------------------

--
-- Table structure for table `jilids`
--

CREATE TABLE `jilids` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jilids`
--

INSERT INTO `jilids` (`id`, `name`, `created_at`, `updated_at`) VALUES
('9c269fc9-9c82-445e-8904-71248a0c3bbf', 'Jilid-1', '2024-05-28 04:50:34', '2024-05-28 05:10:01'),
('9c2708a9-3fa2-43ec-9dd3-1325595dd50f', 'Jilid-2', '2024-05-28 09:43:49', '2024-05-28 09:43:49'),
('9c2708c8-15f4-4581-b0e4-9375ec1e073f', 'Jilid-3', '2024-05-28 09:44:09', '2024-05-28 09:44:09'),
('9c2708cf-81d9-4f6c-aa9b-a2dcb479ff0b', 'Jilid-4', '2024-05-28 09:44:14', '2024-05-28 09:44:14'),
('9c2708d7-5e77-46db-bc4c-ad0550d14d62', 'Jilid-5', '2024-05-28 09:44:19', '2024-05-28 09:44:19'),
('9c2708dd-fa22-4278-9a23-b8fdd699634e', 'Jilid-6', '2024-05-28 09:44:24', '2024-05-28 09:44:24'),
('9c2708e7-3cba-4e00-94dd-9282fda81420', 'Jilid-7', '2024-05-28 09:44:30', '2024-05-28 09:44:30'),
('9c2708ee-ebe5-4fb7-8d74-d3ef498fac89', 'Jilid-8', '2024-05-28 09:44:35', '2024-05-28 09:44:35'),
('9c2708f9-d095-4658-a719-3725b66fb388', 'Jilid-9', '2024-05-28 09:44:42', '2024-05-28 09:44:42'),
('9c270902-0a5c-4433-838e-7b845169e667', 'Jilid-10', '2024-05-28 09:44:47', '2024-05-28 09:44:47');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_03_14_031938_create_tb_user_table', 1),
(3, '2023_03_31_162700_create_books_table', 1),
(4, '2023_04_10_054302_create_jilids_table', 1);

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
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
('9c269f66-9f83-4908-aef1-170308c91dd4', 'admin', 'admin', '$2y$10$zhDKMLGk.Gwj5jaJhhA7H.fh42EeImgytgQroOz1qRW1DEJON7hiG', 'admin', '2024-05-28 04:49:29', '2024-05-28 04:49:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jilids`
--
ALTER TABLE `jilids`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jilids_name_unique` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
