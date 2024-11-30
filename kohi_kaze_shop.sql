-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2024 at 12:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kohi_kaze_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username_admin` varchar(100) NOT NULL,
  `email_admin` varchar(100) NOT NULL,
  `password_admin` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username_admin`, `email_admin`, `password_admin`, `level`) VALUES
(3, 'Bimantara Aryasatya', 'bimantara_aryasatya', 'bimantara_aryasatya_32rpl@student.smktelkom-mlg.sch.id', '$2y$10$OK2MnTsaR7rdmcaRwFLhDuzr3.Bjm/ogK79FgBuhVTl0QH4ASLktu', ''),
(4, 'David Bayu', 'david_bayu', 'david_bayu@gmail.com', '$2y$10$2jGouCr2KModdbeifW6Xt.iesgY3.ekvw.hZXKCkKJaHO1YD4RbUC', '');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id _produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `foto_produk` varchar(225) NOT NULL,
  `stok_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi_produk`, `harga_produk`, `foto_produk`, `stok_produk`) VALUES
(1, 'Caffè latte', 'Indulge in the smooth and creamy delight of our Classic Latte.', 40000, 'Latte_Coffe.jpg', 30),
(2, 'Affogato', 'Indulge in the smooth and creamy delight of our Classic Latte.', 50000, 'Affogato_Coffe.jpg', 30),
(3, 'Macchiato', 'Indulge in the smooth and creamy delight of our Classic Latte.', 30000, 'Macchiato_Coffe.jpg', 20),
(5, 'Expresso', 'Indulge in the smooth and creamy delight of our Classic Latte.', 60000, 'Expresso_Coffe.jpg', 60),
(6, 'Arabica', 'Indulge in the smooth and creamy delight of our Classic Latte.', 20000, 'Arabica_Coffe.jpg', 20),
(7, 'Americano', 'Indulge in the smooth and creamy delight of our Classic Latte.', 35000, 'Americano_Coffe.jpg', 40);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama_user`, `email_user`, `password_user`, `alamat`, `telp`) VALUES
(3, 'bimantara_aryasatya', 'Bimantara Aryasatya Putra M\r\n', 'bimantara_aryasatya_32rpl@student.smktelkom-mlg.sch.id', '$2y$10$ERAJqNLqMuU.ZNwv1km6FOWgar29k0SCj90lHRvWHCgJAVbtRTiTa', 'Jl. Danau Ranau No. 1, Sawojajar, Kota Malang', '081330962030'),
(4, 'zaky_maftuh', 'Zaky Maftuh Widianto', 'zaky_maftuh_250cc@gmail.com', '$2y$10$EIWiXGw2AfT1HHgQE0t02.kuNrf1sDK3DgFQ4tf/ZRtT7PEaCr7pm', 'Exit Tol Klaten', '0811333030'),
(5, 'keefa_syawal', 'Keefa Syawal', 'keefa_syawal_telkom', '$2y$10$iX9NzeGsyQYT1cpEowaTvO2OoJTIt4SJEgo4CkUMoRQOcGZrv7EU6', 'Depok', '0811333030'),
(6, 'david_bayu', 'David Bayu', 'david_bayu@gmail.com', '$2y$10$ZOvFpT1fBgysP5d3vMlJRexRO5i.7GTuvnwCpYQj5tzXCzaCVu1au', 'Malang', '123123'),
(8, 'pandu_wagir', 'Pandu Winoto', 'pandu_wagir@gmail.com', '$2y$10$GscjGSDEIXzzXjaqSkhBZeiiyESORRTRf5Y/HKe3Uyo/Jfiovb2L6', 'Wagir', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `INDEX_ID_TRANSAKSI` (`id_transaksi`),
  ADD KEY `ID_PRODUK` (`id _produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `INDEX` (`id_admin`),
  ADD KEY `INDEX_ID_USER` (`id_user`),
  ADD KEY `INDEX_ID_ADMIN` (`id_admin`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id _produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
