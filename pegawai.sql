-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2024 at 02:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_masuk` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id`, `nama_pegawai`, `tanggal`, `waktu_masuk`, `created_at`, `updated_at`) VALUES
(4, 'lala', '2024-05-15', '2024-05-15 00:42:00', '2024-05-15 10:42:50', '2024-05-15 10:42:50'),
(5, 'lila', '2024-06-10', '2024-06-10 00:00:00', '2024-06-10 14:24:18', '2024-06-10 14:24:18'),
(12, 'rizki', '2024-06-12', '2024-06-12 17:39:00', '2024-06-12 03:40:01', '2024-06-12 03:40:01'),
(14, 'Akbar', '2024-06-12', '2024-06-12 17:47:00', '2024-06-12 03:47:05', '2024-06-12 03:47:05'),
(19, 'Dilan', '2024-06-12', '2024-06-12 18:03:00', '2024-06-12 04:04:19', '2024-06-12 04:04:19'),
(26, 'vina', '2024-06-12', '2024-06-12 21:04:00', '2024-06-12 07:04:29', '2024-06-12 07:04:29'),
(27, 'Ellysa Auliyani', '2024-06-13', '2024-06-13 08:18:00', '2024-06-12 18:18:36', '2024-06-12 18:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `absen_keluar`
--

CREATE TABLE `absen_keluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `waktu_keluar` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absen_keluar`
--

INSERT INTO `absen_keluar` (`id`, `nama_pegawai`, `tanggal_keluar`, `waktu_keluar`, `created_at`, `updated_at`) VALUES
(1, 'lila', '2024-06-10', '2024-06-10 04:32:00', '2024-06-10 14:32:19', '2024-06-10 14:32:19'),
(7, 'rizki', '2024-06-12', '2024-06-12 17:40:00', '2024-06-12 03:40:27', '2024-06-12 03:40:27'),
(8, 'rizki', '2024-06-12', '2024-06-12 17:41:00', '2024-06-12 03:41:57', '2024-06-12 03:41:57'),
(9, 'Akbar', '2024-06-12', '2024-06-12 17:48:00', '2024-06-12 03:48:14', '2024-06-12 03:48:14'),
(14, 'Dilan', '2024-06-12', '2024-06-12 18:06:00', '2024-06-12 04:06:45', '2024-06-12 04:06:45'),
(15, 'lala', '2024-06-12', '2024-06-12 18:10:00', '2024-06-12 04:10:13', '2024-06-12 04:10:13'),
(18, 'vina', '2024-06-12', '2024-06-12 21:04:00', '2024-06-12 07:04:37', '2024-06-12 07:04:37'),
(19, 'Ellysa Auliyani', '2024-06-13', '2024-06-13 08:18:00', '2024-06-12 18:18:45', '2024-06-12 18:18:45');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `lama_cuti` varchar(255) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id`, `NIK`, `nama`, `tgl_pengajuan`, `lama_cuti`, `tgl_awal`, `tgl_akhir`, `keterangan`, `created_at`, `updated_at`) VALUES
(6, '11229065', 'lala', '2024-05-15', '60', '2024-05-16', '2024-07-16', 'Alasan Penting', '2024-05-15 11:10:56', '2024-05-15 11:10:56'),
(8, '0598679', 'rizki', '2024-06-12', '3', '2024-06-17', '2024-06-19', 'Sakit', '2024-06-12 03:41:22', '2024-06-12 03:41:22'),
(9, '7865367', 'Akbar', '2024-06-12', '7', '2024-06-24', '2024-07-01', 'Sakit', '2024-06-12 03:49:16', '2024-06-12 03:49:16'),
(10, '12556787', 'lila', '2024-06-12', '4', '2024-06-17', '2024-06-20', 'Melahirkan', '2024-06-12 03:54:13', '2024-06-12 03:54:13'),
(12, '998877', 'Dilan', '2024-06-12', '2', '2024-06-13', '2024-06-14', 'Sakit', '2024-06-12 04:00:44', '2024-06-12 04:00:44'),
(15, '882211', 'vina', '2024-06-12', '2', '2024-06-13', '2024-06-14', 'Alasan Penting', '2024-06-12 07:05:13', '2024-06-12 07:05:13'),
(16, '334455', 'Ellysa Auliyani', '2024-06-13', '2', '2024-06-17', '2024-06-18', 'Alasan Penting', '2024-06-12 18:19:44', '2024-06-12 18:21:37');

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
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nama_jabatan` varchar(150) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id`, `nama`, `nama_jabatan`, `jumlah`, `tanggal_pembayaran`, `created_at`, `updated_at`) VALUES
(4, 'lala', 'sekretaris', 8000000, '2024-05-16', '2024-05-15 11:27:42', '2024-06-12 03:57:09'),
(5, 'rizki', 'Cleaning Servis', 800000, '2024-06-12', '2024-06-12 03:44:51', '2024-06-12 03:44:51'),
(6, 'Akbar', 'CEO', 15000000, '2024-06-12', '2024-06-12 03:50:13', '2024-06-12 03:50:13'),
(7, 'lila', 'Pegawai', 5000000, '2024-06-12', '2024-06-12 03:54:56', '2024-06-12 03:54:56'),
(8, 'Dilan', 'Manajer', 10000000, '2024-06-12', '2024-06-12 04:01:29', '2024-06-12 04:01:29'),
(9, 'vina', 'Pegawai', 5000000, '2024-06-12', '2024-06-12 07:07:02', '2024-06-12 07:07:02'),
(10, 'Ellysa Auliyani', 'Pegawai', 5000000, '2024-06-13', '2024-06-12 18:22:04', '2024-06-12 18:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jabatan` varchar(150) NOT NULL,
  `gaji_dasar` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama_jabatan`, `gaji_dasar`, `created_at`, `updated_at`) VALUES
(1, 'CEO', 15000000, '2024-03-27 17:15:15', '2024-06-12 03:47:45'),
(2, 'Manajer', 10000000, '2024-03-27 18:45:26', '2024-06-12 03:37:16'),
(3, 'Sekretaris', 8000000, '2024-04-24 19:20:23', '2024-06-12 03:38:16'),
(4, 'Pegawai', 5000000, '2024-06-12 03:38:36', '2024-06-12 03:38:36'),
(5, 'Cleaning Servis', 800000, '2024-06-12 03:38:58', '2024-06-12 03:38:58');

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
(5, '2024_03_23_201943_create_pegawai_table', 1),
(6, '2024_03_23_203559_create_pegawais_table', 2),
(7, '2024_03_23_204504_create_jabatans_table', 3),
(8, '2024_03_24_000533_create_pegawais_table', 4),
(9, '2024_03_26_233811_create_absens_table', 5),
(10, '2024_03_27_002922_create_cutis_table', 6),
(11, '2024_03_27_081456_create_gajis_table', 7),
(12, '2024_03_27_133827_create_sign_ups_table', 8),
(13, '2024_03_27_141235_create_sign_ups_table', 9),
(14, '2024_03_27_235535_create_jabatans_table', 10),
(15, '2024_04_07_160850_create_user_sign_ups_table', 11),
(16, '2024_05_01_100649_create_cutis_table', 12),
(17, '2024_05_01_102437_create_cutis_table', 13),
(18, '2024_05_15_160724_create_absens_table', 14),
(19, '2024_05_15_181528_create_gajis_table', 15),
(20, '2024_06_10_211743_create_absen_keluars_table', 16),
(21, '2024_06_10_213026_create_absen_keluars_table', 17);

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
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `NIK`, `nama`, `jenis_kelamin`, `jabatan`, `tanggal_masuk`, `status`, `created_at`, `updated_at`) VALUES
(5, '12556787', 'lila', 'Perempuan', 'pegawai', '2024-05-15', 'Aktif', '2024-05-15 08:15:47', '2024-05-15 08:15:47'),
(6, '11229065', 'lala', 'Perempuan', 'sekretaris', '2024-05-01', 'Aktif', '2024-05-15 08:16:18', '2024-05-15 11:53:30'),
(14, '0598679', 'rizki', 'Laki-laki', 'Cleaning Servis', '2024-06-12', 'Aktif', '2024-06-12 03:40:40', '2024-06-12 03:40:40'),
(16, '7865367', 'Akbar', 'Laki-laki', 'CEO', '2024-06-12', 'Aktif', '2024-06-12 03:48:33', '2024-06-12 03:48:33'),
(20, '998877', 'Dilan', 'Laki-laki', 'Manajer', '2024-06-12', 'Aktif', '2024-06-12 04:04:34', '2024-06-12 04:04:34'),
(23, '882211', 'vina', 'Perempuan', 'pegawai', '2024-06-12', 'Aktif', '2024-06-12 07:04:19', '2024-06-12 07:04:19'),
(24, '334455', 'Ellysa Auliyani', 'Perempuan', 'pegawai', '2024-06-13', 'Aktif', '2024-06-12 18:18:24', '2024-06-12 18:18:24');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(5, 'saskia@gmail.com', '$2y$10$m/nZJ.Cg41A7vC6mQmcpsOzde4awo4YroGBIa6g9didUuG9xy7lE2', '2024-04-24 06:14:57', '2024-04-24 06:14:57'),
(6, 'admin@gmail.com', '$2y$10$w35j9JbxPePfDfdmxXKCSOybCYvChXGNtel6NudcDbb9Y3/JaQkWK', '2024-05-15 08:14:55', '2024-05-15 08:14:55');

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

-- --------------------------------------------------------

--
-- Table structure for table `user_sign_up`
--

CREATE TABLE `user_sign_up` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_sign_up`
--

INSERT INTO `user_sign_up` (`id`, `nama`, `email`, `password`, `created_at`, `updated_at`) VALUES
(4, 'lila', 'lila@gmail.com', '$2y$10$97OB1If8OTXYrZFADULWC.bDnfrDUgAe3qSRGIkYJA8TK5EX4izmS', '2024-05-15 07:37:52', '2024-05-15 07:37:52'),
(5, 'lala', 'lala@gmail.com', '$2y$10$NGSnaKVSj1u2xMFP6/mOCuYNVEY1DaR/tTymvq4RCHc/pJxJlALEm', '2024-05-15 08:13:50', '2024-05-15 08:13:50'),
(7, 'rizki', 'rizki@gmail.com', '$2y$10$Xv4AXoY/Hwhjif.wnMhAyeVrMlEMkv8X6swqOpAKmEUCE9NSXlhVu', '2024-06-12 03:34:27', '2024-06-12 03:34:27'),
(8, 'Akbar', 'akbar@gmail.com', '$2y$10$el052CMLxlBhXDTAaWe9y.K733J3Gg/fwR3r6cTp78wqQfsLQRO..', '2024-06-12 03:46:14', '2024-06-12 03:46:14'),
(9, 'Dilan', 'dilan@gmail.com', '$2y$10$MqQ8W.bzcISxhLwglYPxNufa4pPOqIheh2Hfmd5qgT4ZpABlc9R3u', '2024-06-12 03:58:34', '2024-06-12 03:58:34'),
(12, 'vina', 'vina@gmail.com', '$2y$10$Zi2Csklz6RsTXn73iK8ZXuh7BhMGzjOv.vra0zYTkpLOeQVx79uge', '2024-06-12 07:03:32', '2024-06-12 07:03:32'),
(13, 'Ellysa Auliyani', 'ellysaauliyani138@gmail.com', '$2y$10$LYPrlBbITswY4u/Gl8gGA.Bn4M8ntW5fPY.qF7RiTo5W7q.pZhGDK', '2024-06-12 18:17:42', '2024-06-12 18:17:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `absen_keluar`
--
ALTER TABLE `absen_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
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
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sign_up_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_sign_up`
--
ALTER TABLE `user_sign_up`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_sign_up_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `absen_keluar`
--
ALTER TABLE `absen_keluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_sign_up`
--
ALTER TABLE `user_sign_up`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
