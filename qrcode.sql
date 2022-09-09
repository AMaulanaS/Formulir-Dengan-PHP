-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 08:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp_ams_native`
--

-- --------------------------------------------------------

--
-- Table structure for table `qrcode`
--

CREATE TABLE `qrcode` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `departemen` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `gambar_qrcode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qrcode`
--

INSERT INTO `qrcode` (`id`, `nama_lengkap`, `departemen`, `jabatan`, `alamat`, `gambar_qrcode`) VALUES
(13, 'Aditya Maulana Shidiq', 'IT Staff', 'Programing', 'Jl. Suka Maju ', '114-download.png'),
(14, 'Johan Budi Penemuan', 'Sipil', 'General Affair', 'Jl. Badak Dalam', '452-johan.png'),
(15, 'Irfan Budi yanto', 'IT', 'IT NOC', 'Jl. Badak Dalam', '940-irfan.png'),
(16, 'ddfgf', 'dfgdfg', 'fdgdfg', 'dfgdfg', '482-download.png'),
(18, 'dfdsfdsf', 'sdfds', 'sdfsdf', 'sdfsdf', '894-bentuk formulir.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qrcode`
--
ALTER TABLE `qrcode`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qrcode`
--
ALTER TABLE `qrcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
