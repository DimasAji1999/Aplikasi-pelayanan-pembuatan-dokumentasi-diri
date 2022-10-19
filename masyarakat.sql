-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 11:02 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masyarakat`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2022_01_04_060259_create_layanan', 1),
(6, '2022_01_10_014541_create_table_produk', 1),
(7, '2022_01_10_154350_create_table_setujui', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_layanan`
--

CREATE TABLE `m_layanan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(115) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_layanan`
--

INSERT INTO `m_layanan` (`id`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Pembuatan KTP', 'Adalah sebagai penduduk Kota Bandung dan telah melaksanakan perekaman kartu Tanda Penduduk Elektronik dan terdaftar dalam database kependudukan di Kota Bandung, Provinsi Jawa Barat. Sesuai dengan undang - undang RI nomor 24 Tahun 2013 tentang administrasi kependudukan. Demikian surat keterangan ini dibuat untuk digunakan sebagaimana mestinya. ', '2022-01-22 08:13:09', '2022-01-22 08:13:09'),
(3, 'Pembuatan Akte Kelahiran', NULL, '2022-01-22 19:23:58', '2022-01-22 19:23:58'),
(4, 'Pembuatan Kartu Keluarga', 'Adalah benar warga Desa kelurahan Rahayu Kota Bandung', '2022-01-22 23:02:08', '2022-01-22 23:02:27'),
(5, 'Pembuatan Surat Kematian', 'Adalah benar warga Desa kelurahan Rahayu, yang telah meninggal dunia', '2022-01-22 23:02:50', '2022-01-22 23:02:50');

-- --------------------------------------------------------

--
-- Table structure for table `m_pengajuan`
--

CREATE TABLE `m_pengajuan` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori` int(11) NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` int(11) NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ttl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_pengajuan`
--

INSERT INTO `m_pengajuan` (`id`, `kategori`, `nama`, `alamat`, `usia`, `file`, `catatan`, `ttl`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dimas Aji Permadi', 'Bandung', 20, 'C:\\xampp\\tmp\\phpB81A.tmp', 'Data Sudah Lengkap', '21 Januari 2020', 1, '2022-01-22 08:18:28', '2022-01-22 08:18:28'),
(2, 1, 'Asep -edit', 'Bandung', 25, 'C:\\xampp\\tmp\\phpA9B5.tmp', 'Data Sudah Lengkap yah', '20 Desember 1999', 1, '2022-01-22 08:21:41', '2022-01-22 19:26:34'),
(3, 1, 'Salih', 'Bandung', 20, 'C:\\xampp\\tmp\\phpC118.tmp', 'ktp kurang jelas', 'Bandung, 30 January 2001', 1, '2022-01-25 02:31:11', '2022-01-25 02:36:21');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setujui`
--

CREATE TABLE `setujui` (
  `id` int(10) UNSIGNED NOT NULL,
  `layanan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `catatan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setujui`
--

INSERT INTO `setujui` (`id`, `layanan`, `user`, `status`, `catatan`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 1, 'Data Sudah Bisa Diakses', '2022-01-22 08:20:05', '2022-01-22 08:41:36'),
(6, 'pdf', '2', 1, NULL, '2022-01-22 19:13:02', '2022-01-25 02:39:50'),
(7, '3', '2', NULL, NULL, '2022-01-25 02:36:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Masyarakat', 'Masyarakat1@gmail.com', NULL, NULL, '$2y$10$hqlSx8OBYrpImf2S7gWJGuJVr1sIUHHiLRTZ8SwG1ggH1Kx3XdYMe', NULL, '2022-01-22 08:07:34', '2022-01-22 08:07:34'),
(2, 'kecamatan', 'kecamatan@gmail.com', 1, NULL, '$2y$10$pgE/MaMZXzVBFgpKk7fDLuSfl0SicG.icJkfJRgowTxnze.fLbiCu', NULL, '2022-01-22 08:29:49', '2022-01-22 08:29:49'),
(3, 'kelurahan', 'kelurahan@gmail.com', 2, NULL, '$2y$10$50zoCLD/Q1IWpQT4EDfzC.QFjKnSb4WP4Sn4WZFGOZWeECaoAZwRm', NULL, '2022-01-22 08:30:56', '2022-01-22 08:30:56');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `m_layanan`
--
ALTER TABLE `m_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_pengajuan`
--
ALTER TABLE `m_pengajuan`
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
-- Indexes for table `setujui`
--
ALTER TABLE `setujui`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `m_layanan`
--
ALTER TABLE `m_layanan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_pengajuan`
--
ALTER TABLE `m_pengajuan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setujui`
--
ALTER TABLE `setujui`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
