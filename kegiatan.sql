-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 30, 2023 at 10:23 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbpmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `ID_kegiatan` int NOT NULL,
  `nama_kegiatan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tempat_kegiatan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `PDM` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `metode_kegiatan` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `file1` blob,
  `file2` blob,
  `file3` blob,
  `file4` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`ID_kegiatan`, `nama_kegiatan`, `tempat_kegiatan`, `PDM`, `metode_kegiatan`, `tanggal_mulai`, `tanggal_akhir`, `file1`, `file2`, `file3`, `file4`) VALUES
(46, 'ayam', 'kajut', 'dasdaoudanou', 'Luring', '2023-03-15', '2023-03-16', '', '', '', ''),
(47, 'Nama Kegiatan', 'KODE BARURAUOFNASJF;', 'PDM219391243', 'Daring', '2023-03-18', '2023-03-16', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`ID_kegiatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `ID_kegiatan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
