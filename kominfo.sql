-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 03:46 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kominfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` varchar(4) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kelamin` varchar(1) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `semester` int(1) NOT NULL,
  `hasil_akhir` double(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nim`, `nama`, `tanggal_lahir`, `kelamin`, `alamat`, `prodi`, `kelas`, `semester`, `hasil_akhir`) VALUES
('A001', '2007421003', 'Alan Riyansa', '2002-03-22', 'L', 'Perumahan Limus, Jl. Blitar 7', 'TMJ', 'TMJ 1', 1, 0.32),
('A002', '2007431031', 'Fadhil Fathin Erlanto', '2002-05-14', 'L', 'Perumahan Griya Semesta', 'TMD', 'TMD 1A', 1, 0.26),
('A003', '2007421014', 'Firmansyah Helmi Kurniawan', '2001-12-22', 'L', 'Komplek Asri Raya Jl. Cemara 3 No. 10', 'TMJ', 'TMJ 1', 1, 0.14),
('A004', '2007451006', 'Rafly Akbar Audi Putra', '2002-04-12', 'L', 'Kota Madya, Kavling Detroit Jl. Alfa 8/5', 'TMJ', 'CCIT Sec 3A', 3, 0.27);

-- --------------------------------------------------------

--
-- Table structure for table `analisa_alternatif`
--

CREATE TABLE `analisa_alternatif` (
  `alternatif_pertama` varchar(4) NOT NULL,
  `alternatif_kedua` varchar(4) NOT NULL,
  `tingkat_alternatif` double(3,2) NOT NULL,
  `hasil_analisa_alternatif` double(3,2) NOT NULL,
  `id_kriteria` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `analisa_alternatif`
--

INSERT INTO `analisa_alternatif` (`alternatif_pertama`, `alternatif_kedua`, `tingkat_alternatif`, `hasil_analisa_alternatif`, `id_kriteria`) VALUES
('A001', 'A001', 1.00, 0.29, 'C'),
('A001', 'A001', 1.00, 0.31, 'K'),
('A001', 'A001', 1.00, 0.38, 'M'),
('A001', 'A001', 1.00, 0.27, 'P'),
('A001', 'A002', 1.00, 0.29, 'C'),
('A001', 'A002', 1.00, 0.31, 'K'),
('A001', 'A002', 3.00, 0.38, 'M'),
('A001', 'A002', 0.86, 0.27, 'P'),
('A001', 'A003', 2.66, 0.29, 'C'),
('A001', 'A003', 2.00, 0.31, 'K'),
('A001', 'A003', 3.00, 0.38, 'M'),
('A001', 'A003', 1.20, 0.27, 'P'),
('A001', 'A004', 1.00, 0.29, 'C'),
('A001', 'A004', 1.33, 0.31, 'K'),
('A001', 'A004', 1.00, 0.38, 'M'),
('A001', 'A004', 1.50, 0.27, 'P'),
('A002', 'A001', 1.00, 0.29, 'C'),
('A002', 'A001', 1.00, 0.31, 'K'),
('A002', 'A001', 0.33, 0.12, 'M'),
('A002', 'A001', 1.16, 0.32, 'P'),
('A002', 'A002', 1.00, 0.29, 'C'),
('A002', 'A002', 1.00, 0.31, 'K'),
('A002', 'A002', 1.00, 0.12, 'M'),
('A002', 'A002', 1.00, 0.32, 'P'),
('A002', 'A003', 2.66, 0.29, 'C'),
('A002', 'A003', 2.00, 0.31, 'K'),
('A002', 'A003', 1.00, 0.12, 'M'),
('A002', 'A003', 1.40, 0.32, 'P'),
('A002', 'A004', 1.00, 0.29, 'C'),
('A002', 'A004', 1.33, 0.31, 'K'),
('A002', 'A004', 0.33, 0.12, 'M'),
('A002', 'A004', 1.75, 0.32, 'P'),
('A003', 'A001', 0.38, 0.13, 'C'),
('A003', 'A001', 0.50, 0.15, 'K'),
('A003', 'A001', 0.33, 0.12, 'M'),
('A003', 'A001', 0.83, 0.23, 'P'),
('A003', 'A002', 0.38, 0.13, 'C'),
('A003', 'A002', 0.50, 0.15, 'K'),
('A003', 'A002', 1.00, 0.12, 'M'),
('A003', 'A002', 0.71, 0.23, 'P'),
('A003', 'A003', 1.00, 0.13, 'C'),
('A003', 'A003', 1.00, 0.15, 'K'),
('A003', 'A003', 1.00, 0.12, 'M'),
('A003', 'A003', 1.00, 0.23, 'P'),
('A003', 'A004', 0.38, 0.13, 'C'),
('A003', 'A004', 0.66, 0.15, 'K'),
('A003', 'A004', 0.33, 0.12, 'M'),
('A003', 'A004', 1.25, 0.23, 'P'),
('A004', 'A001', 1.00, 0.29, 'C'),
('A004', 'A001', 0.75, 0.23, 'K'),
('A004', 'A001', 1.00, 0.38, 'M'),
('A004', 'A001', 0.66, 0.18, 'P'),
('A004', 'A002', 1.00, 0.29, 'C'),
('A004', 'A002', 0.75, 0.23, 'K'),
('A004', 'A002', 3.00, 0.38, 'M'),
('A004', 'A002', 0.57, 0.18, 'P'),
('A004', 'A003', 2.66, 0.29, 'C'),
('A004', 'A003', 1.50, 0.23, 'K'),
('A004', 'A003', 3.00, 0.38, 'M'),
('A004', 'A003', 0.80, 0.18, 'P'),
('A004', 'A004', 1.00, 0.29, 'C'),
('A004', 'A004', 1.00, 0.23, 'K'),
('A004', 'A004', 1.00, 0.38, 'M'),
('A004', 'A004', 1.00, 0.18, 'P');

-- --------------------------------------------------------

--
-- Table structure for table `analisa_kriteria`
--

CREATE TABLE `analisa_kriteria` (
  `kriteria_pertama` varchar(2) NOT NULL,
  `kriteria_kedua` varchar(2) NOT NULL,
  `tingkat_kriteria` double(3,2) NOT NULL,
  `hasil_analisa_kriteria` double(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `analisa_kriteria`
--

INSERT INTO `analisa_kriteria` (`kriteria_pertama`, `kriteria_kedua`, `tingkat_kriteria`, `hasil_analisa_kriteria`) VALUES
('C', 'C', 1.00, 0.11),
('C', 'K', 0.20, 0.12),
('C', 'M', 0.33, 0.07),
('C', 'P', 3.00, 0.19),
('K', 'C', 5.00, 0.54),
('K', 'K', 1.00, 0.60),
('K', 'M', 3.00, 0.66),
('K', 'P', 7.00, 0.44),
('M', 'C', 3.00, 0.32),
('M', 'K', 0.33, 0.20),
('M', 'M', 1.00, 0.22),
('M', 'P', 5.00, 0.31),
('P', 'C', 0.33, 0.03),
('P', 'K', 0.14, 0.08),
('P', 'M', 0.20, 0.05),
('P', 'P', 1.00, 0.06);

-- --------------------------------------------------------

--
-- Table structure for table `kalkulasi_ahp`
--

CREATE TABLE `kalkulasi_ahp` (
  `id_kriteria` varchar(2) NOT NULL,
  `id_alternatif` varchar(4) NOT NULL,
  `mat_alternatif` double(3,2) NOT NULL,
  `mat_hasil` double(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kalkulasi_ahp`
--

INSERT INTO `kalkulasi_ahp` (`id_kriteria`, `id_alternatif`, `mat_alternatif`, `mat_hasil`) VALUES
('C', 'A001', 0.29, 0.03),
('C', 'A002', 0.29, 0.03),
('C', 'A003', 0.13, 0.02),
('C', 'A004', 0.29, 0.03),
('K', 'A001', 0.31, 0.17),
('K', 'A002', 0.31, 0.17),
('K', 'A003', 0.15, 0.08),
('K', 'A004', 0.23, 0.13),
('M', 'A001', 0.38, 0.10),
('M', 'A002', 0.12, 0.03),
('M', 'A003', 0.12, 0.03),
('M', 'A004', 0.38, 0.10),
('P', 'A001', 0.27, 0.02),
('P', 'A002', 0.32, 0.02),
('P', 'A003', 0.23, 0.01),
('P', 'A004', 0.18, 0.01);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` varchar(2) NOT NULL,
  `nama_kriteria` varchar(40) NOT NULL,
  `bobot_kriteria` double(5,2) NOT NULL,
  `jumlah_kriteria` double(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot_kriteria`, `jumlah_kriteria`) VALUES
('C', 'Komunikasi', 0.12, 9.33),
('K', 'Kepribadian', 0.56, 1.67),
('M', 'Keaktifan Media Sosial', 0.26, 4.53),
('P', 'Pemahaman', 0.06, 16.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idx` int(3) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idx`, `nama`, `email`, `username`, `password`) VALUES
(1, 'Arya', 'aryamail@yahoo.co.id', 'kadep', '$2y$10$SokiTDNziCCKEIGPpcmGv.EGzfjBEUPEta8/ByeR5gl17vsjgnxoi'),
(2, 'Fauzan', 'najymail@gmail.com', 'bph', '$2y$10$Sh.FjohmBUjwvzbjjtkyW.rlHB1qjoTvg4eowffgLWNfD9wTZrqbK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `analisa_alternatif`
--
ALTER TABLE `analisa_alternatif`
  ADD PRIMARY KEY (`alternatif_pertama`,`alternatif_kedua`,`id_kriteria`) USING BTREE,
  ADD KEY `FK_memiliki_alternatif_kedua` (`alternatif_kedua`),
  ADD KEY `FK_memiliki_alternatif_2` (`id_kriteria`);

--
-- Indexes for table `analisa_kriteria`
--
ALTER TABLE `analisa_kriteria`
  ADD PRIMARY KEY (`kriteria_pertama`,`kriteria_kedua`),
  ADD KEY `FK_memiliki_kriteria_kedua` (`kriteria_kedua`) USING BTREE;

--
-- Indexes for table `kalkulasi_ahp`
--
ALTER TABLE `kalkulasi_ahp`
  ADD PRIMARY KEY (`id_kriteria`,`id_alternatif`),
  ADD KEY `FK_menghitung_alternatif` (`id_alternatif`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idx`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idx` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `analisa_alternatif`
--
ALTER TABLE `analisa_alternatif`
  ADD CONSTRAINT `FK_memiliki_alternatif_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_memiliki_alternatif_kedua` FOREIGN KEY (`alternatif_kedua`) REFERENCES `alternatif` (`id_alternatif`),
  ADD CONSTRAINT `FK_memiliki_alternatif_pertama` FOREIGN KEY (`alternatif_pertama`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `analisa_kriteria`
--
ALTER TABLE `analisa_kriteria`
  ADD CONSTRAINT `FK_memiliki_kriteria_kedua` FOREIGN KEY (`kriteria_kedua`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_memiliki_kriteria_pertama` FOREIGN KEY (`kriteria_pertama`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kalkulasi_ahp`
--
ALTER TABLE `kalkulasi_ahp`
  ADD CONSTRAINT `FK_menghitung_alternatif` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`),
  ADD CONSTRAINT `FK_menghitung_kriteria` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
