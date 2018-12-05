-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 11:35 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kapsel`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `kehadiran` varchar(10) NOT NULL,
  `waktu_masuk` time NOT NULL,
  `waktu_keluar` time NOT NULL,
  `tgl_absensi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `nip`, `kehadiran`, `waktu_masuk`, `waktu_keluar`, `tgl_absensi`) VALUES
(1, 12345, 'Hadir', '08:00:00', '19:00:00', '2014-06-02'),
(2, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-02'),
(3, 12345, 'Hadir', '08:00:00', '19:00:00', '2014-06-03'),
(5, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-03'),
(6, 12345, 'Hadir', '08:00:00', '16:00:00', '2014-06-04'),
(7, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-04'),
(8, 12345, 'Hadir', '08:00:00', '16:00:00', '2014-06-05'),
(9, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-05'),
(10, 12345, 'Hadir', '08:00:00', '16:00:00', '2014-06-06'),
(11, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-06'),
(12, 12345, 'Hadir', '08:00:00', '16:00:00', '2014-06-07'),
(13, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-07'),
(14, 12345, 'Sakit', '08:00:00', '16:00:00', '2014-06-09'),
(15, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-09'),
(16, 12345, 'Hadir', '08:00:00', '16:00:00', '2014-06-10'),
(17, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-10'),
(18, 12345, 'Hadir', '08:00:00', '16:00:00', '2014-06-11'),
(19, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-11'),
(20, 12345, 'Hadir', '08:00:00', '16:00:00', '2014-06-12'),
(21, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-12'),
(22, 12345, 'Hadir', '08:00:00', '16:00:00', '2014-06-13'),
(23, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-13'),
(24, 12345, 'Ijin', '08:00:00', '16:00:00', '2014-06-14'),
(25, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-14'),
(26, 12345, 'Hadir', '08:00:00', '16:00:00', '2014-06-16'),
(27, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-16'),
(28, 12345, 'Hadir', '08:00:00', '16:00:00', '2014-06-17'),
(29, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-17'),
(30, 12345, 'Hadir', '08:00:00', '16:00:00', '2014-06-18'),
(31, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-18'),
(32, 12345, '', '08:00:00', '16:00:00', '2014-06-19'),
(33, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-19'),
(34, 12345, 'Hadir', '08:00:00', '16:00:00', '2014-06-20'),
(35, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-20'),
(36, 12345, 'Hadir', '08:00:00', '16:00:00', '2014-06-21'),
(37, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-21'),
(38, 12345, 'Hadir', '08:00:00', '16:00:00', '2014-06-22'),
(39, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-22'),
(40, 12345, 'Hadir', '08:00:00', '16:00:00', '2014-06-23'),
(41, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-23'),
(42, 12345, 'Hadir', '08:00:00', '16:00:00', '2014-06-24'),
(43, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-24'),
(44, 12345, 'Hadir', '08:00:00', '16:00:00', '2014-06-25'),
(45, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-25'),
(46, 12345, 'Cuti', '08:00:00', '16:00:00', '2014-06-26'),
(47, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-26'),
(48, 12345, 'Cuti', '08:00:00', '16:00:00', '2014-06-27'),
(49, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-27'),
(50, 12345, 'Cuti', '08:00:00', '16:00:00', '2014-06-28'),
(51, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-28'),
(52, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-29'),
(53, 1234567, 'Hadir', '08:00:00', '16:00:00', '2014-06-30'),
(54, 12345, 'Hadir', '08:00:00', '16:00:00', '2014-06-30'),
(55, 12345, '', '07:00:00', '20:00:00', '2014-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `datakaryawan`
--

CREATE TABLE `datakaryawan` (
  `idkaryawan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(100) NOT NULL,
  `agama` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datakaryawan`
--

INSERT INTO `datakaryawan` (`idkaryawan`, `nama`, `alamat`, `email`, `telp`, `agama`) VALUES
(16, 'wiwit', 'tj seneng', 'wiwit_mudyaningsih@yahoo.co.id', 'Islam', 9888),
(17, 'jannati', 'tj seneng', 'janati@gmail.com', 'Islam', 8),
(18, 'wida', 'tj seneng', 'wida@gmail.com', 'Islam', 99);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `idjabatan` int(10) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `gapok` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tunjangan`
--

CREATE TABLE `jenis_tunjangan` (
  `id_jenis_tunjangan` int(11) NOT NULL,
  `nama_jenis_tunjangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_tunjangan`
--

INSERT INTO `jenis_tunjangan` (`id_jenis_tunjangan`, `nama_jenis_tunjangan`) VALUES
(1, 'ibu'),
(2, 'Anak');

-- --------------------------------------------------------

--
-- Table structure for table `tunjangan_jabatan`
--

CREATE TABLE `tunjangan_jabatan` (
  `id_tunjangan_jabatan` int(11) NOT NULL,
  `besar_tunjangan` int(100) NOT NULL,
  `id_jenis_tunjangan` int(11) NOT NULL,
  `idkaryawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'wiwit', '1234'),
(2, 'admin', 'wiwit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datakaryawan`
--
ALTER TABLE `datakaryawan`
  ADD PRIMARY KEY (`idkaryawan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`idjabatan`);

--
-- Indexes for table `jenis_tunjangan`
--
ALTER TABLE `jenis_tunjangan`
  ADD PRIMARY KEY (`id_jenis_tunjangan`);

--
-- Indexes for table `tunjangan_jabatan`
--
ALTER TABLE `tunjangan_jabatan`
  ADD PRIMARY KEY (`id_tunjangan_jabatan`),
  ADD KEY `fk_jenis_tunjangan` (`id_jenis_tunjangan`),
  ADD KEY `fk_datakaryawan` (`idkaryawan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datakaryawan`
--
ALTER TABLE `datakaryawan`
  MODIFY `idkaryawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jenis_tunjangan`
--
ALTER TABLE `jenis_tunjangan`
  MODIFY `id_jenis_tunjangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tunjangan_jabatan`
--
ALTER TABLE `tunjangan_jabatan`
  MODIFY `id_tunjangan_jabatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tunjangan_jabatan`
--
ALTER TABLE `tunjangan_jabatan`
  ADD CONSTRAINT `fk_datakaryawan` FOREIGN KEY (`idkaryawan`) REFERENCES `datakaryawan` (`idkaryawan`),
  ADD CONSTRAINT `fk_jenis_tunjangan` FOREIGN KEY (`id_jenis_tunjangan`) REFERENCES `jenis_tunjangan` (`id_jenis_tunjangan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
