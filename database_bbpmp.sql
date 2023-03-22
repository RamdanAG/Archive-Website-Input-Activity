-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 10:07 AM
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
-- Database: `database_bbpmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `ID_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `tempat_kegiatan` varchar(100) NOT NULL,
  `PDM` varchar(12) NOT NULL,
  `metode_kegiatan` varchar(6) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `file1` blob DEFAULT NULL,
  `file2` blob DEFAULT NULL,
  `file3` blob DEFAULT NULL,
  `file4` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`ID_kegiatan`, `nama_kegiatan`, `tempat_kegiatan`, `PDM`, `metode_kegiatan`, `tanggal_mulai`, `tanggal_akhir`, `file1`, `file2`, `file3`, `file4`) VALUES
(36, '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', ''),
(37, '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', ''),
(38, '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', ''),
(39, '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', ''),
(40, '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', ''),
(41, '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', ''),
(42, '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '');

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
  MODIFY `ID_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
