-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2020 at 09:38 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kereta`
--

CREATE TABLE `jadwal_kereta` (
  `id_kereta` int(10) NOT NULL,
  `keberangkatan_kereta` varchar(255) DEFAULT NULL,
  `asal_kereta` varchar(255) DEFAULT NULL,
  `kedatangan_kereta` varchar(255) DEFAULT NULL,
  `tujuan_kereta` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_kereta`
--

INSERT INTO `jadwal_kereta` (`id_kereta`, `keberangkatan_kereta`, `asal_kereta`, `kedatangan_kereta`, `tujuan_kereta`, `created_at`, `updated_at`) VALUES
(1, 'Tuesday 24 December 2019 - 09:00', 'Pasar Senen', 'Tuesday 24 December 2019 - 15:15', 'Bandung', '2020-01-29 06:10:07', '2020-01-28 23:10:07'),
(3, 'Monday 30 December 2019 - 19:00', 'Pasar Senen', 'Monday 30 December 2019 - 11:15', 'Cikampek', '2020-01-29 06:11:04', '2020-01-28 23:11:04'),
(4, 'Saturday 01 February 2020 - 09:00', 'Pasar Senen', 'Monday 03 February 2020 - 16:00', 'Semarang', '2020-01-28 20:09:55', '2020-01-29 03:09:55'),
(5, 'Monday 03 February 2020 - 18:00', 'Surabaya', 'Tuesday 04 February 2020 - 02:15', 'Tangerang', '2020-01-28 23:19:32', '2020-01-29 06:19:32');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pesawat`
--

CREATE TABLE `jadwal_pesawat` (
  `id_pesawat` int(11) NOT NULL,
  `keberangkatan_pesawat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asal_pesawat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kedatangan_pesawat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tujuan_pesawat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_pesawat`
--

INSERT INTO `jadwal_pesawat` (`id_pesawat`, `keberangkatan_pesawat`, `asal_pesawat`, `kedatangan_pesawat`, `tujuan_pesawat`, `created_at`, `updated_at`) VALUES
(1, 'Tuesday 24 November 2020 - 07:00', 'Jakarta', 'Tuesday 24 November 2020 - 12:15', 'Washington D.C.', '2019-11-26 19:51:38', '2020-01-21 01:50:34'),
(2, 'Tuesday 31 December 2019 - 10:00', 'Tokyo', 'Tuesday 31 December 2019 - 18:00', 'Seoul', '2019-11-27 20:01:47', NULL),
(3, 'Tuesday 07 January 2020 - 19:00', 'Seoul', 'Tuesday 07 January 2020 - 23:30', 'Jakarta', '2019-11-27 20:09:02', '2020-01-21 01:49:39');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_kereta`
--

CREATE TABLE `kelas_kereta` (
  `id_kelas_kereta` int(10) UNSIGNED NOT NULL,
  `jenis_kelas_kereta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_gerbong` int(10) DEFAULT NULL,
  `jumlah_kursi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas_kereta`
--

INSERT INTO `kelas_kereta` (`id_kelas_kereta`, `jenis_kelas_kereta`, `jumlah_gerbong`, `jumlah_kursi`, `created_at`, `updated_at`) VALUES
(1, 'Economy', 8, 60, '2019-11-26 20:39:43', '2020-01-28 23:10:07'),
(3, 'Bussiness', 6, 60, '2019-11-27 19:07:43', '2020-01-28 23:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_pesawat`
--

CREATE TABLE `kelas_pesawat` (
  `id_kelas_pesawat` int(10) UNSIGNED NOT NULL,
  `jenis_kelas_pesawat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_seat` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas_pesawat`
--

INSERT INTO `kelas_pesawat` (`id_kelas_pesawat`, `jenis_kelas_pesawat`, `jumlah_seat`, `created_at`, `updated_at`) VALUES
(1, 'Ekonomi, Bisnis, First Class', '48, 16, 6', '2019-11-26 19:51:38', '2020-01-21 01:50:34'),
(2, 'Ekonomi, Bisnis, First Class', '48, 16, 6', '2019-11-27 20:01:47', NULL),
(3, 'Ekonomi, Bisnis', '48, 16, 1', '2019-11-27 20:09:02', '2020-01-21 01:49:39');

-- --------------------------------------------------------

--
-- Table structure for table `kereta`
--

CREATE TABLE `kereta` (
  `id_kereta` int(10) UNSIGNED NOT NULL,
  `nama_kereta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kelas_kereta` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kereta`
--

INSERT INTO `kereta` (`id_kereta`, `nama_kereta`, `id_kelas_kereta`, `created_at`, `updated_at`) VALUES
(1, 'Argo Lawu', 1, '2019-11-26 20:39:43', '2020-01-28 23:10:07'),
(3, 'Kertarajasa', 3, '2019-11-27 19:07:43', '2020-01-28 23:11:04'),
(4, 'Argarajasa', 1, '2020-01-28 20:09:55', NULL),
(5, 'Angkasaputra', 3, '2020-01-28 23:19:32', NULL);

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
(1, '2019_11_13_051040_create_pesan_pesawat_table', 1),
(2, '2019_11_13_052152_create_pesan_kereta_table', 2),
(3, '2019_11_13_052254_create_tiket_pesawat_table', 2),
(4, '2019_11_13_052445_create_tiket_kereta_table', 2),
(5, '2019_11_13_060714_create_pesawat_table', 2),
(6, '2019_11_13_060827_create_kereta_table', 2),
(7, '2019_11_14_013509_create_jadwal_table', 3);

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
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(10) UNSIGNED NOT NULL,
  `nama_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telpon_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email_pelanggan`, `password_pelanggan`, `telpon_pelanggan`, `alamat_pelanggan`, `created_at`, `updated_at`) VALUES
(1, 'Dane Wade', 'wadedane@fmail.com', 'cGlja2xvY2s=', '082138284406', 'New York', '2019-11-29 00:24:18', '2019-11-29 00:24:18'),
(2, 'Brown', 'brown@brownmail.com', 'YnJvd25icm93bg==', '082156955', 'Jl. jalan', '2020-01-16 20:50:14', '2020-01-16 20:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_kereta`
--

CREATE TABLE `pesan_kereta` (
  `id_pesan_kereta` int(10) UNSIGNED NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_kereta` int(11) NOT NULL,
  `tgl_berangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_pesan` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `status_bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesan_pesawat`
--

CREATE TABLE `pesan_pesawat` (
  `id_pesan_pesawat` int(10) UNSIGNED NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_pesawat` int(11) NOT NULL,
  `tgl_berangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_pesan` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `status_bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesawat`
--

CREATE TABLE `pesawat` (
  `id_pesawat` int(10) UNSIGNED NOT NULL,
  `maskapai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kelas_pesawat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesawat`
--

INSERT INTO `pesawat` (`id_pesawat`, `maskapai`, `id_kelas_pesawat`, `created_at`, `updated_at`) VALUES
(1, 'Garuda Indonesia', 1, '2019-11-26 19:51:38', '2020-01-21 01:50:34'),
(2, 'Citilink', 2, '2019-11-27 20:01:47', NULL),
(3, 'Air Asia', 3, '2019-11-27 20:09:02', '2020-01-21 01:49:39');

-- --------------------------------------------------------

--
-- Table structure for table `tiket_kereta`
--

CREATE TABLE `tiket_kereta` (
  `id_tiket_kereta` int(10) UNSIGNED NOT NULL,
  `id_pesan_kereta` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_kereta` int(11) NOT NULL,
  `no_kursi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keberangkatan_kereta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kedatangan_kereta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_kereta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_kereta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tiket_pesawat`
--

CREATE TABLE `tiket_pesawat` (
  `id_tiket_pesawat` int(10) UNSIGNED NOT NULL,
  `id_pesan_pesawat` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_pesawat` int(11) NOT NULL,
  `no_seat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keberangkatan_pesawat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kedatangan_pesawat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_pesawat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_pesawat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `previllege` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `previllege`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Administrator', 'adminadmin@adminmail.com', '$2y$10$MZtyICLEZM7pI5zdUeb24OyP.JDgprgoGTVk45JSyUW8imZIdgXc2', 'Administrator', '1RScchMLktB6PAtFcEtjm93BMrgcB31l2MBVztt0Z3cO1HUpnO9eJhtzOQRZ', '2019-11-12 21:50:41', '2019-11-12 21:50:41'),
(3, 'Antonio Angelo', 'antonioangelo@fmail.com', '$2y$10$YVgNorzi9JF7g34UtrRey.cSYtLuQbR/sufJ0GYNfh8JSKXQPuxC2', 'Management', 'DdjIWcKBwYhwbxwdnc9cBCmEQuSHzY1Yn1PCmpaznfoLdCEwcZJro7PQQWTn', '2019-11-28 01:20:34', '2019-11-28 01:20:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_kereta`
--
ALTER TABLE `jadwal_kereta`
  ADD PRIMARY KEY (`id_kereta`);

--
-- Indexes for table `jadwal_pesawat`
--
ALTER TABLE `jadwal_pesawat`
  ADD PRIMARY KEY (`id_pesawat`);

--
-- Indexes for table `kelas_kereta`
--
ALTER TABLE `kelas_kereta`
  ADD PRIMARY KEY (`id_kelas_kereta`);

--
-- Indexes for table `kelas_pesawat`
--
ALTER TABLE `kelas_pesawat`
  ADD PRIMARY KEY (`id_kelas_pesawat`);

--
-- Indexes for table `kereta`
--
ALTER TABLE `kereta`
  ADD PRIMARY KEY (`id_kereta`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pesan_kereta`
--
ALTER TABLE `pesan_kereta`
  ADD PRIMARY KEY (`id_pesan_kereta`);

--
-- Indexes for table `pesan_pesawat`
--
ALTER TABLE `pesan_pesawat`
  ADD PRIMARY KEY (`id_pesan_pesawat`);

--
-- Indexes for table `pesawat`
--
ALTER TABLE `pesawat`
  ADD PRIMARY KEY (`id_pesawat`);

--
-- Indexes for table `tiket_kereta`
--
ALTER TABLE `tiket_kereta`
  ADD PRIMARY KEY (`id_tiket_kereta`);

--
-- Indexes for table `tiket_pesawat`
--
ALTER TABLE `tiket_pesawat`
  ADD PRIMARY KEY (`id_tiket_pesawat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas_kereta`
--
ALTER TABLE `kelas_kereta`
  MODIFY `id_kelas_kereta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kelas_pesawat`
--
ALTER TABLE `kelas_pesawat`
  MODIFY `id_kelas_pesawat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kereta`
--
ALTER TABLE `kereta`
  MODIFY `id_kereta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pesan_kereta`
--
ALTER TABLE `pesan_kereta`
  MODIFY `id_pesan_kereta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pesan_pesawat`
--
ALTER TABLE `pesan_pesawat`
  MODIFY `id_pesan_pesawat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pesawat`
--
ALTER TABLE `pesawat`
  MODIFY `id_pesawat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tiket_kereta`
--
ALTER TABLE `tiket_kereta`
  MODIFY `id_tiket_kereta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tiket_pesawat`
--
ALTER TABLE `tiket_pesawat`
  MODIFY `id_tiket_pesawat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
