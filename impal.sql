-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 07:40 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `impal`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `idDelivery` int(255) NOT NULL,
  `no_resi` varchar(16) NOT NULL,
  `kurir` varchar(20) NOT NULL,
  `tgl_kirim` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`idDelivery`, `no_resi`, `kurir`, `tgl_kirim`) VALUES
(1, '1234', 'JNE', '04/dec/2018');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `idTransaksi` int(255) DEFAULT NULL,
  `idStorage` int(255) NOT NULL,
  `idProduk` int(11) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`idTransaksi`, `idStorage`, `idProduk`, `quantity`) VALUES
(7, 4, 1, 5),
(9, 5, 4, 9),
(11, 6, 4, 9),
(13, 7, 2, 3),
(14, 8, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `idStorage` int(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`idStorage`, `filename`) VALUES
(2, 'Capture.PNG'),
(3, '55rXIcs.jpg'),
(4, '55rXIcs1.jpg'),
(5, '55rXIcs2.jpg'),
(6, '55rXIcs3.jpg'),
(7, '55rXIcs4.jpg'),
(8, 'This+this+feels+like+it+should+be+a+felony+_746fbbe4397005b8b3cbf50333b2c250.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` int(255) NOT NULL,
  `idUser` int(255) NOT NULL,
  `idDelivery` int(255) DEFAULT NULL,
  `tagihan` int(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idTransaksi`, `idUser`, `idDelivery`, `tagihan`, `status`) VALUES
(1, 11, 1, 46000, 'Waiting Payment'),
(2, 11, NULL, 10000, 'Waiting Payment'),
(3, 11, NULL, 10000, 'Waiting Payment'),
(4, 11, NULL, 10000, 'Waiting Payment'),
(5, 11, NULL, 10000, 'Waiting Payment'),
(6, 11, NULL, 10000, 'Waiting Payment'),
(7, 11, NULL, 10000, 'Waiting Payment'),
(8, 11, NULL, 45000, 'Waiting Payment'),
(9, 11, NULL, 45000, 'Waiting Payment'),
(10, 11, NULL, 45000, 'Waiting Payment'),
(11, 11, NULL, 45000, 'Waiting Payment'),
(12, 12, NULL, 9000, 'Waiting Payment'),
(13, 12, NULL, 9000, 'Waiting Payment'),
(14, 12, NULL, 20000, 'Waiting Payment');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` char(10) NOT NULL,
  `alamat` int(11) DEFAULT NULL,
  `firstName` varchar(16) NOT NULL,
  `lastName` varchar(16) NOT NULL,
  `no_telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `email`, `username`, `password`, `alamat`, `firstName`, `lastName`, `no_telp`) VALUES
(7, 'me@y.com', 'asdsadsad', 'e10adc3949', NULL, 'kasd', 'eqre', '082216648470'),
(8, 'bftiga@gmail.com', 'adddddddd', 'e10adc3949', NULL, 'madityar', 'adit', '082216648470'),
(9, 'bft@gmail.com', 'aditaea', 'e10adc3949', NULL, 'madityara', 'terq', '082216648470'),
(10, 'm.sd@yaho.com', 'adityarayh', 'e10adc3949', NULL, 'adtiy', 'rwes', '082216648470'),
(11, 'm.adityarayhan@yahool.co.id', 'adityar', '123456', 2, 'Muhammad', 'Rayhan', '+62822166484'),
(12, 'm.a@yahoo.co.id', 'maditya', '123456', 1, 'aditya', 'rayhan', '082216648470');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`idDelivery`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD KEY `idTransaksi` (`idTransaksi`),
  ADD KEY `idStorage` (`idStorage`),
  ADD KEY `idProduk` (`idProduk`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`idStorage`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idDelivery` (`idDelivery`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `alamat` (`alamat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `idDelivery` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `storage`
--
ALTER TABLE `storage`
  MODIFY `idStorage` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idTransaksi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_fk1` FOREIGN KEY (`idStorage`) REFERENCES `storage` (`idStorage`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `detail_fk2` FOREIGN KEY (`idTransaksi`) REFERENCES `transaksi` (`idTransaksi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`idProduk`) REFERENCES `produk` (`idProduk`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_fk1` FOREIGN KEY (`idDelivery`) REFERENCES `delivery` (`idDelivery`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `transaksi_fk2` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`alamat`) REFERENCES `detailalamat` (`idAlamat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
