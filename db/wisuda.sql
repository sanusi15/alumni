-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 09:12 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisuda`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id_alumni` int(11) NOT NULL,
  `no_alumni` varchar(20) NOT NULL,
  `nim` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` enum('te','tm','mi','bd') NOT NULL,
  `tgl_lahir` varchar(10) NOT NULL,
  `tempat_lahir` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tahun_lulus` varchar(5) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `pesan` text NOT NULL,
  `judul_tugas_akhir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id_alumni`, `no_alumni`, `nim`, `nama`, `jurusan`, `tgl_lahir`, `tempat_lahir`, `alamat`, `kontak`, `email`, `tahun_lulus`, `foto`, `pesan`, `judul_tugas_akhir`) VALUES
(1, '2147483647', 2057570007, 'Mahasiswa 200', 'te', '2001-12-06', 'Cilegon', 'Jerang', '085672435522', 'adi@gmail.com', '2022', 'user4.png', 'Belajarlah karena dengan belajar kita menjadi sedang belajar', 'Alat Pengukur Cuaca'),
(2, '214748398', 2057570002, 'Mahasiswa Baru', 'mi', '2001-12-06', 'Cilegon', 'Jerang', '085672435522', 'adi@gmail.com', '2022', 'user6.png', 'Jangan Berusaha Jika Tidak Mau', 'Alat Pengukur Jembut Tebal Baru'),
(6, '201293812', 2057570021, 'Udin', 'bd', '2002-08-09', 'Lebak', 'Bayah', '086573817738', 'udin@gmail.com', '2022', 'user2.jpg', 'ALhamdulillah Lancar', 'Alat Hisap Kotoran'),
(7, '20394827819', 2057570082, 'Mamat', 'tm', '2001-12-01', 'Disana Juga', 'Disana', '08572838817', 'mamat@gmail.com', '2022', 'user3.jpg', 'Ini adalah pesan mamat', 'Sistem Informasi Perhitungan Dosa');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
