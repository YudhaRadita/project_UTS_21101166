-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 03:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanantiket`
--

CREATE TABLE `pemesanantiket` (
  `Id_pengguna` varchar(40) NOT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `Studio` int(5) DEFAULT NULL,
  `Judul_film` varchar(255) DEFAULT NULL,
  `Jam_tayang` varchar(40) DEFAULT NULL,
  `Hari` varchar(40) DEFAULT NULL,
  `No_kursi` varchar(40) DEFAULT NULL,
  `Jumlah_tiket` int(10) DEFAULT NULL,
  `Harga` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanantiket`
--

INSERT INTO `pemesanantiket` (`Id_pengguna`, `Nama`, `Studio`, `Judul_film`, `Jam_tayang`, `Hari`, `No_kursi`, `Jumlah_tiket`, `Harga`) VALUES
('P123321', 'ANDI', 1, 'Spider-Man No Way Home', '10.00 WITA-12.00 WITA', 'SENIN', 'C18', 2, 'Rp.90.000'),
('P233455', 'KEVIN', 3, 'Doctor Strange', 'Jam Penayangan', 'Rabu', 'F16', 1, 'Rp.46.000'),
('P321123', 'Yanto', 1, 'Spider-Man No Way Home', '12.00 WITA-02.00 WITA', 'SENIN', 'F10', 1, 'Rp.45.000'),
('P999123', 'AJAX', 3, ' Doctor Strange', '20.00 WITA-22.00 WITA', 'Rabu', 'F17', 3, 'Rp.138.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanantiket`
--
ALTER TABLE `pemesanantiket`
  ADD PRIMARY KEY (`Id_pengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
