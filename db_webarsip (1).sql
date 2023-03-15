-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 03:39 PM
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
-- Database: `db_webarsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `UID` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(16) NOT NULL,
  `kode_pegawai` varchar(30) NOT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`UID`, `username`, `email`, `password`, `kode_pegawai`, `tanggal_dibuat`) VALUES
('0909', 'admin', 'sayayamabuki04@gmail.com', '1234', '1234', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `ID_kegiatan` int(11) NOT NULL,
  `jenis_kegiatan` varchar(100) NOT NULL,
  `wilayah_penyelenggara` varchar(50) NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `deskripsi_kegiatan` text DEFAULT NULL,
  `tanggal` date NOT NULL,
  `pembahasan` text DEFAULT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `zona_waktu` varchar(5) DEFAULT NULL,
  `jenis_pelaksanaan_kegiatan` varchar(100) NOT NULL,
  `PIC` varchar(50) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `virtual_meet_URL` varchar(255) DEFAULT NULL,
  `virtual_meet_PW` varchar(255) DEFAULT NULL,
  `file` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`ID_kegiatan`, `jenis_kegiatan`, `wilayah_penyelenggara`, `nama_kegiatan`, `deskripsi_kegiatan`, `tanggal`, `pembahasan`, `waktu_mulai`, `waktu_selesai`, `zona_waktu`, `jenis_pelaksanaan_kegiatan`, `PIC`, `lokasi`, `virtual_meet_URL`, `virtual_meet_PW`, `file`) VALUES
(1, 'RAPAT', 'Jawa Barat', 'Diskusi Rapat', 'test', '2022-12-01', 'test', '13:30:00', '14:00:00', 'WIB', 'test', 'test', 'test', 'Batujajar', 'link', 0x7077),
(2, 'RAPAT2', 'Jawa Barat', 'Diskusi Rapat2', 'test', '2022-12-02', 'test', '13:30:00', '14:00:00', 'WIB', 'test', 'test', 'test', 'Batujajar', 'link', 0x7077);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `ID_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
