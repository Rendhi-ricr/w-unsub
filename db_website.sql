-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2024 at 07:09 PM
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
-- Table structure for table `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `id_agenda` int NOT NULL,
  `nama_acara` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `penyelenggara` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_beasiswa`
--

CREATE TABLE `tbl_beasiswa` (
  `id_beasiswa` int NOT NULL,
  `nama_beasiswa` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int NOT NULL,
  `judul_berita` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokumen`
--

CREATE TABLE `tbl_dokumen` (
  `id_dokumen` int NOT NULL,
  `nama_dokumen` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `link` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fasilitas`
--

CREATE TABLE `tbl_fasilitas` (
  `id_fasilitas` int NOT NULL,
  `nama_fasilitas` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id_kontak` int NOT NULL,
  `nomor_telepon` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sambutan`
--

CREATE TABLE `tbl_sambutan` (
  `id_sambutan` int NOT NULL,
  `deskripsi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sejarah`
--

CREATE TABLE `tbl_sejarah` (
  `id_sejarah` int NOT NULL,
  `deskripsi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_statistik`
--

CREATE TABLE `tbl_statistik` (
  `id_statistik` int NOT NULL,
  `id_fasilitas` int NOT NULL,
  `id_ukm` int NOT NULL,
  `id_beasiswa` int NOT NULL,
  `id_berita` int NOT NULL,
  `id_agenda` int NOT NULL,
  `id_sejarah` int NOT NULL,
  `id_visimisi` int NOT NULL,
  `id_sambutan` int NOT NULL,
  `id_dokumen` int NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_pengunjung` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `menu` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ukm`
--

CREATE TABLE `tbl_ukm` (
  `id_ukm` int NOT NULL,
  `nama_ukm` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kontak` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_pengguna` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visimisi`
--

CREATE TABLE `tbl_visimisi` (
  `id_visimisi` int NOT NULL,
  `deskripsi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visitor_count`
--

CREATE TABLE `visitor_count` (
  `id` int NOT NULL,
  `menu_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
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
(3, 'sambutan', '2024-12-11', 3, '2024-12-11 20:21:37'),
(4, 'fasilitas', '2024-12-11', 6, '2024-12-11 20:21:57'),
(5, 'home', '2024-12-12', 4, '2024-12-12 03:41:08'),
(6, 'sambutan', '2024-12-12', 1, '2024-12-12 03:41:14'),
(7, 'beasiswa', '2024-12-12', 1, '2024-12-12 12:07:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `tbl_beasiswa`
--
ALTER TABLE `tbl_beasiswa`
  ADD PRIMARY KEY (`id_beasiswa`);

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tbl_sambutan`
--
ALTER TABLE `tbl_sambutan`
  ADD PRIMARY KEY (`id_sambutan`);

--
-- Indexes for table `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indexes for table `tbl_statistik`
--
ALTER TABLE `tbl_statistik`
  ADD PRIMARY KEY (`id_statistik`);

--
-- Indexes for table `tbl_ukm`
--
ALTER TABLE `tbl_ukm`
  ADD PRIMARY KEY (`id_ukm`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_visimisi`
--
ALTER TABLE `tbl_visimisi`
  ADD PRIMARY KEY (`id_visimisi`);

--
-- Indexes for table `visitor_count`
--
ALTER TABLE `visitor_count`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `visitor_count`
--
ALTER TABLE `visitor_count`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
