-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 10:00 AM
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
-- Database: `spk_kar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Admin','Pimpinan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_lengkap`, `username`, `password`, `role`) VALUES
(1, 'Administrator', 'admin', '$2y$10$j.093Q1Fzo/GHTxuLqgcluPxfOebCxTQYC4GICL2JDm6UL40sbtcu', 'Admin'),
(2, 'Pimpinan', 'pimpinan', '$2y$10$7//FPwv6guvKiCXVE.r2kuxnfe4mcTV0bGQ7HPNHKVHm2UNV29kVC', 'Pimpinan');

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE `bidang` (
  `id_bidang` int(11) NOT NULL,
  `bidang_pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang`
--

INSERT INTO `bidang` (`id_bidang`, `bidang_pekerjaan`) VALUES
(10, 'Partnership'),
(11, 'Shipping'),
(12, 'HRD');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `nilai_hasil` float NOT NULL,
  `id_periode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `id_karyawan`, `nilai_hasil`, `id_periode`) VALUES
(447, 14, 0.64426, 5),
(448, 15, 0.64426, 5),
(449, 16, 0.64426, 5),
(450, 17, 0.64426, 5),
(451, 19, 0.26062, 5);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `id_bidang` int(11) DEFAULT NULL,
  `syarat` text NOT NULL,
  `pemimpin_project` enum('Ya','Tidak') NOT NULL,
  `minimal_s1` enum('Ya','Tidak') NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `id_periode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nik`, `nama_karyawan`, `jenis_kelamin`, `id_bidang`, `syarat`, `pemimpin_project`, `minimal_s1`, `pendidikan_terakhir`, `id_periode`) VALUES
(14, '201110002', 'Lutfi Rofiqi', 'Laki-laki', 12, 'lutfy1.jpg', 'Ya', 'Ya', ' S2', 5),
(15, '201110036', 'Natasya Wulandari', 'Perempuan', 10, 'kevin1.jpg', 'Ya', 'Ya', ' S2', 5),
(16, '201110059', 'Anton Prasetyo', 'Laki-laki', 11, 'anton.jpg', 'Ya', 'Ya', ' S2', 5),
(17, '201110090', 'Ibnu Surya Wibowo', 'Laki-laki', 11, 'ibnu.jpg', 'Ya', 'Ya', ' S2', 5),
(19, '201110097', 'Kevin Arsan Kamto', 'Laki-laki', 12, 'kevin2.jpg', 'Ya', 'Ya', ' S2', 5);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan_kriteria`
--

CREATE TABLE `karyawan_kriteria` (
  `id` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `id_nilai` int(11) DEFAULT NULL,
  `nilai` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan_kriteria`
--

INSERT INTO `karyawan_kriteria` (`id`, `id_karyawan`, `id_kriteria`, `id_nilai`, `nilai`) VALUES
(82, 14, 16, 20, 70),
(83, 14, 17, 18, 89),
(84, 14, 18, 18, 87),
(85, 15, 16, 18, 85),
(86, 15, 17, 19, 80),
(87, 15, 18, 20, 70),
(88, 16, 16, 18, 90),
(89, 16, 17, 19, 75),
(90, 16, 18, 20, 70),
(91, 17, 16, 19, 80),
(92, 17, 17, 21, 60),
(93, 17, 18, 20, 70),
(97, 19, 16, 18, 85),
(98, 19, 17, 18, 90),
(99, 19, 18, 18, 90);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kode_kriteria` varchar(10) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `prioritas` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kode_kriteria`, `nama_kriteria`, `prioritas`) VALUES
(16, 'K01', 'Leadership Skill', 0.55714),
(17, 'K02', 'Kemampuan Terhadap Jobdesk', 0.32024),
(18, 'K03', 'Prestasi', 0.12262);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_ahp`
--

CREATE TABLE `kriteria_ahp` (
  `id` int(11) NOT NULL,
  `id_kriteria_1` int(11) NOT NULL,
  `id_kriteria_2` int(11) NOT NULL,
  `nilai_1` float NOT NULL,
  `nilai_2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_ahp`
--

INSERT INTO `kriteria_ahp` (`id`, `id_kriteria_1`, `id_kriteria_2`, `nilai_1`, `nilai_2`) VALUES
(492, 16, 17, 2, 0.5),
(493, 16, 18, 4, 0.25),
(494, 17, 18, 3, 0.33333);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `batas_1` float NOT NULL,
  `batas_2` float NOT NULL,
  `nama` varchar(50) NOT NULL,
  `prioritas` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `batas_1`, `batas_2`, `nama`, `prioritas`) VALUES
(17, 91, 100, 'Sangat Bagus', 1),
(18, 81, 90, 'Bagus', 0.64426),
(19, 71, 80, 'Cukup', 0.31086),
(20, 61, 70, 'Kurang', 0.14731),
(21, 0, 60, 'Buruk', 0.06139);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_ahp`
--

CREATE TABLE `nilai_ahp` (
  `id` int(11) NOT NULL,
  `id_nilai_1` int(11) NOT NULL,
  `id_nilai_2` int(11) NOT NULL,
  `nilai_1` float NOT NULL,
  `nilai_2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_ahp`
--

INSERT INTO `nilai_ahp` (`id`, `id_nilai_1`, `id_nilai_2`, `nilai_1`, `nilai_2`) VALUES
(512, 17, 18, 3, 0.33333),
(513, 17, 19, 5, 0.2),
(514, 17, 20, 7, 0.14286),
(515, 17, 21, 9, 0.11111),
(516, 18, 19, 5, 0.2),
(517, 18, 20, 7, 0.14286),
(518, 18, 21, 9, 0.11111),
(519, 19, 20, 5, 0.2),
(520, 19, 21, 7, 0.14286),
(521, 20, 21, 5, 0.2);

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `id_periode` int(11) NOT NULL,
  `periode_penilaian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`id_periode`, `periode_penilaian`) VALUES
(5, 'Periode 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_periode` (`id_periode`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_bidang` (`id_bidang`),
  ADD KEY `id_periode` (`id_periode`);

--
-- Indexes for table `karyawan_kriteria`
--
ALTER TABLE `karyawan_kriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_nilai` (`id_nilai`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `kriteria_ahp`
--
ALTER TABLE `kriteria_ahp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kriteria_1` (`id_kriteria_1`),
  ADD KEY `id_kriteria_2` (`id_kriteria_2`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `nilai_ahp`
--
ALTER TABLE `nilai_ahp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nilai_1` (`id_nilai_1`),
  ADD KEY `id_nilai_2` (`id_nilai_2`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=452;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `karyawan_kriteria`
--
ALTER TABLE `karyawan_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kriteria_ahp`
--
ALTER TABLE `kriteria_ahp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=495;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `nilai_ahp`
--
ALTER TABLE `nilai_ahp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=522;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `id_periode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `hasil_ibfk_2` FOREIGN KEY (`id_periode`) REFERENCES `periode` (`id_periode`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_bidang`) REFERENCES `bidang` (`id_bidang`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `karyawan_ibfk_2` FOREIGN KEY (`id_periode`) REFERENCES `periode` (`id_periode`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `karyawan_kriteria`
--
ALTER TABLE `karyawan_kriteria`
  ADD CONSTRAINT `karyawan_kriteria_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `karyawan_kriteria_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `karyawan_kriteria_ibfk_3` FOREIGN KEY (`id_nilai`) REFERENCES `nilai` (`id_nilai`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `kriteria_ahp`
--
ALTER TABLE `kriteria_ahp`
  ADD CONSTRAINT `kriteria_ahp_ibfk_1` FOREIGN KEY (`id_kriteria_1`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `kriteria_ahp_ibfk_2` FOREIGN KEY (`id_kriteria_2`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `nilai_ahp`
--
ALTER TABLE `nilai_ahp`
  ADD CONSTRAINT `nilai_ahp_ibfk_1` FOREIGN KEY (`id_nilai_1`) REFERENCES `nilai` (`id_nilai`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `nilai_ahp_ibfk_2` FOREIGN KEY (`id_nilai_2`) REFERENCES `nilai` (`id_nilai`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
