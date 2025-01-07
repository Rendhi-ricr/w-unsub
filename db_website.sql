-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2025 at 05:23 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_beasiswa`
--

CREATE TABLE `tbl_beasiswa` (
  `id_beasiswa` int NOT NULL,
  `nama_beasiswa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_beasiswa`
--

INSERT INTO `tbl_beasiswa` (`id_beasiswa`, `nama_beasiswa`, `deskripsi`) VALUES
(1, 'Beasiswa Kartu Indonesia Pintar (KIP) Kuliah', 'Program bantuan biaya pendidikan dari pemerintah melalui Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemendikbudristek) yang ditujukan bagi mahasiswa berprestasi dari keluarga kurang mampu. Beasiswa ini mencakup biaya pendidikan dan biaya hi'),
(2, 'Beasiswa Peningkatan Prestasi Akademik (PPA)', 'Diberikan kepada mahasiswa berprestasi secara akademik oleh pemerintah melalui Kementerian Riset, Teknologi, dan Pendidikan Tinggi (Kemenristekdikti). Beasiswa ini biasanya diberikan selama satu tahun anggaran.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fakultas`
--

CREATE TABLE `tbl_fakultas` (
  `id_fakultas` int NOT NULL,
  `nama_fakultas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_fakultas`
--

INSERT INTO `tbl_fakultas` (`id_fakultas`, `nama_fakultas`, `logo`, `link`) VALUES
(5, 'Fakultas Hukum', '1736093211_83607e77b6cdf284b7f3.png', 'https://www.fia.unsub.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ukm`
--

CREATE TABLE `tbl_ukm` (
  `id_ukm` int NOT NULL,
  `nama_ukm` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kontak` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_ukm`
--

INSERT INTO `tbl_ukm` (`id_ukm`, `nama_ukm`, `deskripsi`, `gambar`, `kontak`) VALUES
(4, 'LensaFix', 'Unit Kegiatan Mahasiswa (UKM) LensaFix adalah komu', '1735989547_fed619d5a8088613a76e.png', '085156436142'),
(5, 'Futsal Unsub', 'Unit Kegiatan Mahasiswa (UKM) Futsal adalah organi', '1735845991_a486b656bd54e7763e70.webp', '@futsalunsub');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_count`
--

CREATE TABLE `visitor_count` (
  `id` int NOT NULL,
  `menu_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `visit_date` date NOT NULL,
  `visit_count` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor_count`
--

INSERT INTO `visitor_count` (`id`, `menu_name`, `visit_date`, `visit_count`, `created_at`) VALUES
(1, 'beasiswa', '2024-12-11', 1, '2024-12-11 20:16:51'),
(2, 'home', '2024-12-11', 11, '2024-12-11 20:21:32'),
(5, 'home', '2024-12-12', 12, '2024-12-12 03:41:08'),
(7, 'beasiswa', '2024-12-12', 4, '2024-12-12 12:07:07'),
(9, 'home', '2024-12-17', 39, '2024-12-17 13:21:16'),
(10, 'beasiswa', '2024-12-17', 1, '2024-12-17 13:21:22'),
(11, 'home', '2024-12-19', 5, '2024-12-19 12:01:44'),
(12, 'beasiswa', '2024-12-19', 5, '2024-12-19 12:01:52'),
(13, 'home', '2024-12-22', 13, '2024-12-22 19:36:42'),
(16, 'home', '2024-12-24', 7, '2024-12-24 06:53:05'),
(17, 'beasiswa', '2024-12-24', 10, '2024-12-24 06:54:29'),
(20, 'home', '2024-12-25', 2, '2024-12-25 02:31:32'),
(21, 'home', '2024-12-27', 1, '2024-12-27 20:10:42'),
(23, 'home', '2024-12-31', 3, '2024-12-31 12:46:08'),
(24, 'ukm', '2024-12-31', 1, '2024-12-31 12:56:47'),
(25, 'home', '2025-01-01', 1, '2025-01-01 10:10:47'),
(26, 'fakultas', '2025-01-01', 1, '2025-01-01 19:12:02'),
(27, 'home', '2025-01-03', 1, '2025-01-03 09:56:53'),
(28, 'beasiswa', '2025-01-03', 1, '2025-01-03 10:20:28'),
(29, 'ukm', '2025-01-04', 3, '2025-01-04 06:30:21'),
(30, 'beasiswa', '2025-01-04', 2, '2025-01-04 10:02:38'),
(31, 'home', '2025-01-04', 2, '2025-01-04 17:16:17'),
(32, 'fakultas', '2025-01-04', 1, '2025-01-04 17:18:04'),
(33, 'ukm', '2025-01-05', 1, '2025-01-05 12:52:52'),
(34, 'home', '2025-01-05', 2, '2025-01-05 15:45:49'),
(35, 'home', '2025-01-07', 2, '2025-01-07 04:06:55'),
(36, 'ukm', '2025-01-07', 1, '2025-01-07 04:11:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_beasiswa`
--
ALTER TABLE `tbl_beasiswa`
  ADD PRIMARY KEY (`id_beasiswa`);

--
-- Indexes for table `tbl_fakultas`
--
ALTER TABLE `tbl_fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `tbl_ukm`
--
ALTER TABLE `tbl_ukm`
  ADD PRIMARY KEY (`id_ukm`);

--
-- Indexes for table `visitor_count`
--
ALTER TABLE `visitor_count`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_beasiswa`
--
ALTER TABLE `tbl_beasiswa`
  MODIFY `id_beasiswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_fakultas`
--
ALTER TABLE `tbl_fakultas`
  MODIFY `id_fakultas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_ukm`
--
ALTER TABLE `tbl_ukm`
  MODIFY `id_ukm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `visitor_count`
--
ALTER TABLE `visitor_count`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
