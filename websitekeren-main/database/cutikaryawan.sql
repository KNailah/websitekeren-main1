-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Dec 2024 pada 05.58
-- Versi server: 10.1.28-MariaDB
-- Versi PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbscuti`
--

-- --------------------------------------------------------

--
--
CREATE TABLE `tb_manager` (
  `id_manager` int(5) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
--
INSERT INTO `tb_manager` (`id_manager`, `nama_admin`, `username`, `password`) VALUES
(1, 'Manager', 'admin', 'admin');
-- --------------------------------------------------------
--
--

--

CREATE TABLE `data_karyawan` (
  `nip` int(20) NOT NULL,
  `nama_karyawan` varchar(20) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `alamat_karyawan` text NOT NULL,
  `telpon_karyawan` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
--

INSERT INTO `data_karyawan` (`nip`, `nama_karyawan`, `divisi`, `alamat_karyawan`, `telpon_karyawan`, `email`, `username`, `password`) VALUES
(22111080, 'Kholishah Nailah', 'Keuangan', 'Jelutung', '080000009', 'kholishahnailahtbs4@gmail.com', 'nailah', 'nailah');

-- --------------------------------------------------------

--
--


--

CREATE TABLE `data_Pengajuancuti` (
  `id_cuti` int(5) NOT NULL,
  `nip` int(20) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `jenis_cuti` varchar(50) NOT NULL,
  `alasan_cuti` varchar(100) NOT NULL,
  `mulai_dari` date NOT NULL,
  `sampai` date NOT NULL,
  `lama_cuti` varchar(100) NOT NULL,
  `stts` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--

INSERT INTO `data_pengajuancuti` (`id_cuti`, `nip`, `nama_karyawan`, `alasan_cuti`, `jenis_cuti`, `mulai_dari`, `sampai`, `lama_cuti`, `stts`) VALUES
(1, 22111080, 'Kholishah Nailah', 'Cuti Liburan', 'ingin berlibur', '2024-12-26', '2025-01-2', '8 hari', 'Ditolak');
-- --------------------------------------------------------

--
--
--
ALTER TABLE `tb_manager`
  ADD PRIMARY KEY (`id_manager`);

--
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`nip`);

--
--
ALTER TABLE `data_pengajuancuti`
  ADD PRIMARY KEY (`id_cuti`);

--
ALTER TABLE `tb_manager`
  MODIFY `id_manager` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
--
ALTER TABLE `data_karyawan`
  MODIFY `nip` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--

--
ALTER TABLE `data_pengajuancuti`
  MODIFY `id_cuti` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
