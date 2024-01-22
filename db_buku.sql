-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2024 pada 08.42
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `Jilid` varchar(255) NOT NULL,
  `Tahun` varchar(255) NOT NULL,
  `NoLemari` varchar(255) NOT NULL,
  `Bagian` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `Judul`, `slug`, `Jilid`, `Tahun`, `NoLemari`, `Bagian`, `image`, `published_at`, `created_at`, `updated_at`) VALUES
(10, 'himpunan peraturan pemberantasan tindak pidana korupsi KKN bersama KPK, BPK dan tindak pidana pencucian uang  tahun 2013', 'himpunan-peraturan-pemberantasan-tindak-pidana-korupsi-KKN-bersama-KPK,BPK-dan-tindak-pidana-pencucian-uang-tahun-2013', 'jilid 1', '2013', '1', 'A', 'sampul-buku/agN6vWD0shoVi0TSdFl7P0Jt5EG5nkikWsI9MZOJ.jpg', NULL, '2024-01-22 00:14:35', '2024-01-22 00:14:35'),
(11, 'himpunan peraturan menteri pendidikan kebudayan riset dan teknologi tahun 2022', 'himpunan-peraturan-menteri-pendidikan-kebudayan-riset-dan-teknologi-tahun-2022', 'jilid 5', '2023', '1', 'A', 'sampul-buku/MEmNyMCKv0JIEuXeFXYzX848fUBE4TN4M5h7e3Ka.jpg', NULL, '2024-01-22 00:24:06', '2024-01-22 00:24:06'),
(12, 'himpunan peraturan menteri koordinator bidang pembangunan manusia dan kebudayaan tahun 2021', 'himpunan-peraturan-menteri-koordinator-bidang-pembangunan-manusia-dan-kebudayaan-tahun-2021', 'jilid 1', '2022', '1', 'B', 'sampul-buku/1UOMwUj9UWvgc2epuobadoXihlYp6eiprzb1Szwd.jpg', NULL, '2024-01-22 00:25:56', '2024-01-22 00:25:56'),
(13, 'himpunan peraturan menteri ketenagakerjaan tahun 2021', 'himpunan-peraturan-menteri-ketenagakerjaan-tahun-2021', 'jilid 1', '2022', '1', 'B', 'sampul-buku/LhdE1MzRIOqUZIm24Fgjuyp3cPE8a69isDjcQW9a.jpg', NULL, '2024-01-22 00:32:17', '2024-01-22 00:32:17'),
(14, 'peraturan menteri keuangan nomor 53 tahun 2023 tentang pengelolaan barang milik negara dan aset dalam penguasaan di ibukota nusantara', 'peraturan-menteri-keuangan-nomor-53-tahun-2023-tentang-pengelolaan-barang-milik-negara-dan-aset-dalam-penguasaan-di-ibukota-nusantara', 'jilid 1', '2023', '1', 'B', 'sampul-buku/MY8gHff2vO5nOEzaDryVXtR7TuFVUv48TRuS7lwv.jpg', NULL, '2024-01-22 00:34:48', '2024-01-22 00:34:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_01_17_014603_users', 1),
(3, '2024_01_17_023732_create_books_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `nama`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '$2y$12$e5Ns1tq9Zi121jVrcZ4PjelZuVmeYDZBgw2D.bKjS27CSXaO.YGCq', 'admin', '2024-01-21 09:43:00', '2024-01-21 09:43:00'),
(2, 'asd', 'asd', '$2y$12$VXQE/IqMVchrZbdT1BaXBO7Q8ZtiR.vxLIXU27Ja4U63yhAvyFSXC', 'admin', '2024-01-21 09:43:00', '2024-01-21 09:43:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `books_slug_unique` (`slug`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
