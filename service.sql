-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 03:36 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `namaPegawai` varchar(100) NOT NULL,
  `noTelpAdmin` char(15) NOT NULL,
  `Login_idLogin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `namaPegawai`, `noTelpAdmin`, `Login_idLogin`) VALUES
(0, 'Avinda Renaldi Alamsyah', '081217209876', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `idLogin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`idLogin`, `username`, `password`) VALUES
(0, 'Alamsyah', 'geforce');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idPelanggan` int(11) NOT NULL,
  `namaPelanggan` varchar(45) NOT NULL,
  `noTelp` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idPelanggan`, `namaPelanggan`, `noTelp`) VALUES
(1, 'Aspir', '082244448888'),
(2, 'Wahu', '082243435566'),
(3, 'Samidi', '081212344321'),
(4, 'Alamsyah', '081223456789'),
(5, 'Ardhan', '081230439511'),
(6, 'Cahya', '081234567876');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `idService` int(11) NOT NULL,
  `kategoriBarang` varchar(45) NOT NULL,
  `modelBarang` varchar(45) NOT NULL,
  `kelengkapanBarang` varchar(100) NOT NULL,
  `keluhan` varchar(200) NOT NULL,
  `estimasiHarga` int(10) NOT NULL,
  `kerusakan` varchar(200) DEFAULT NULL,
  `tanggalMasuk` date NOT NULL,
  `statusService` varchar(45) NOT NULL,
  `tanggalSelesai` date DEFAULT NULL,
  `biaya` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `Pelanggan_idPelanggan` int(11) NOT NULL,
  `Admin_idAdmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`idService`, `kategoriBarang`, `modelBarang`, `kelengkapanBarang`, `keluhan`, `estimasiHarga`, `kerusakan`, `tanggalMasuk`, `statusService`, `tanggalSelesai`, `biaya`, `Pelanggan_idPelanggan`, `Admin_idAdmin`) VALUES
(1, 'Laptop', 'Asus TUF', 'Laptop dan charger', 'gak iso murup', 200000, 'Haurs diinstall ulang', '2018-11-26', 'Selesai', '2018-11-29', 0000250000, 1, 0),
(2, 'Laptop', 'Acer E476', 'Fullset', 'manual book ndak ada', 100000, 'Update 1', '2018-11-26', 'Selesai', '2018-12-10', 0003000000, 3, 0),
(3, 'Laptop', 'Xiaomi redmi 11', 'Cek', 'Cek', 1000000, 'IC power gosong', '2018-11-26', 'Dikerjakan', NULL, 0000500000, 2, 0),
(4, 'Laptop', 'Lenovo', 'Fullset', 'vganya', 1000000, NULL, '2018-12-03', 'Belum', NULL, NULL, 4, 0),
(5, 'Mobile', 'Asus Max Pro M1', 'Fullset', 'bootloop', 100000, 'bootloop', '2018-12-12', 'Selesai', '2018-12-14', 0000200000, 1, 0),
(6, 'Mobile', 'Samsung', 'Charger', 'RAM kecil', 340000, 'Ngipi aja mas', '2018-12-12', 'Selesai', '2018-12-12', 0000400000, 5, 0),
(7, 'Mobile', 'Asus', 'Charger', 'Layar pecah', 450000, NULL, '2018-12-12', 'Belum', NULL, NULL, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sukucadang`
--

CREATE TABLE `sukucadang` (
  `idSukuCadang` int(11) NOT NULL,
  `namaSukuCadang` varchar(100) NOT NULL,
  `harga` int(10) UNSIGNED ZEROFILL NOT NULL,
  `Service_idService` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`),
  ADD UNIQUE KEY `noTelpAdmin_UNIQUE` (`noTelpAdmin`),
  ADD KEY `fk_Admin_Login_idx` (`Login_idLogin`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idLogin`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idPelanggan`),
  ADD UNIQUE KEY `noTelp_UNIQUE` (`noTelp`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`idService`),
  ADD KEY `fk_Service_Pelanggan1_idx` (`Pelanggan_idPelanggan`),
  ADD KEY `fk_Service_Admin1_idx` (`Admin_idAdmin`);

--
-- Indexes for table `sukucadang`
--
ALTER TABLE `sukucadang`
  ADD PRIMARY KEY (`idSukuCadang`),
  ADD KEY `fk_SukuCadang_Service1_idx` (`Service_idService`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idPelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `idService` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sukucadang`
--
ALTER TABLE `sukucadang`
  MODIFY `idSukuCadang` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_Admin_Login` FOREIGN KEY (`Login_idLogin`) REFERENCES `login` (`idLogin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `fk_Service_Admin1` FOREIGN KEY (`Admin_idAdmin`) REFERENCES `admin` (`idAdmin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Service_Pelanggan1` FOREIGN KEY (`Pelanggan_idPelanggan`) REFERENCES `pelanggan` (`idPelanggan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sukucadang`
--
ALTER TABLE `sukucadang`
  ADD CONSTRAINT `fk_SukuCadang_Service1` FOREIGN KEY (`Service_idService`) REFERENCES `service` (`idService`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
