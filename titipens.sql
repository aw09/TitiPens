-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2019 at 06:47 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `titipens`
--

-- --------------------------------------------------------

--
-- Table structure for table `history_customer`
--

CREATE TABLE `history_customer` (
  `idhistory` int(11) NOT NULL,
  `ordercustomer_id` int(11) NOT NULL,
  `ordertipers_id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history_tipers`
--

CREATE TABLE `history_tipers` (
  `idhistory` int(11) NOT NULL,
  `ordertipers_id` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  `lokasi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `catatan` longtext NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `idkeranjang` int(11) NOT NULL,
  `menuwarung_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jml_beli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `idlokasi` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`idlokasi`, `name`) VALUES
(1, 'Gedung D4');

-- --------------------------------------------------------

--
-- Table structure for table `menu_warung`
--

CREATE TABLE `menu_warung` (
  `idmenu` int(11) NOT NULL,
  `warung_id` int(11) NOT NULL,
  `nama_item` varchar(255) NOT NULL,
  `harga` int(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_warung`
--

INSERT INTO `menu_warung` (`idmenu`, `warung_id`, `nama_item`, `harga`, `foto`) VALUES
(2, 1, 'Nasi Goreng Jawa', 10000, 'Nasi Goreng Jawa.jpg'),
(3, 2, 'Mie Ayam Biasa', 10000, 'Nasi Goreng Jawa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1557568339),
('m130524_201442_init', 1557568923),
('m190124_110200_add_verification_token_column_to_user_table', 1557568923);

-- --------------------------------------------------------

--
-- Table structure for table `order_customer`
--

CREATE TABLE `order_customer` (
  `idordercustomer` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `catatan` text NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_customer`
--

INSERT INTO `order_customer` (`idordercustomer`, `tanggal`, `user_id`, `lokasi`, `catatan`, `total`) VALUES
(1, '2019-06-11 10:36:49', 1, 'gedung d4', 'hahah', 12000),
(2, '2019-06-12 01:43:44', 1, 'gedung d4', 'cepetan ya', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `order_item_customer`
--

CREATE TABLE `order_item_customer` (
  `idorderitem` int(11) NOT NULL,
  `ordercustomer_id` int(11) NOT NULL,
  `menuwarung_id` int(11) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_tipers`
--

CREATE TABLE `order_tipers` (
  `idordertipers` int(11) NOT NULL,
  `fee` int(50) NOT NULL,
  `lokasi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `catatan` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `iduser` int(11) NOT NULL,
  `hak_akses` int(2) DEFAULT NULL,
  `nrp` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `angkatan` int(5) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `rating` double DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`iduser`, `hak_akses`, `nrp`, `nama`, `jurusan`, `angkatan`, `foto`, `rating`, `password`) VALUES
(1, 1, 2110171002, 'wifda mu', 'teknik informatika', 2017, '', 3, '759730a97e4373f3a0ee12805db065e3a4a649a5'),
(2, NULL, 2110171020, 'Anissa', 'IT', 2017, 'yy', NULL, 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `idstatus` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`idstatus`, `nama`) VALUES
(1, 'Proses');

-- --------------------------------------------------------

--
-- Table structure for table `status_order`
--

CREATE TABLE `status_order` (
  `idstatusorder` int(11) NOT NULL,
  `ordercustomer_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'anissabillah', 'k8T_Src-Vw7GdpTe337Zz802upmvjM2y', '$2y$13$VcEQrFEwJ8QJueJ2b.OJv.6aFo20vSPHIXu2gH2XLTAgHubSDjCZ6', NULL, 'bella@gmail.com', 10, 1552288124, 1552288124, NULL),
(2, '2110171012', 'yD4G41_el7dG3KQzIpOH3g4N2ugNhB8u', '$2y$13$D4VaqCacQnE3Y8MK2OFgyux4VE7o2fmryP4o2Ot/FEJ6i14PKD.SW', NULL, 'agung@gmail.com', 9, 1559868526, 1559868526, '_CokWCM0ws3Rudv_jZ3VeL8HiqcHCbX1_1559868526'),
(3, '2110171031', 'SzacdzzjPkksGoT3qR7AWU5YsUosQ0js', '$2y$13$bu2yIwYef36M5YfmlhJUc.mSTSN8XTw1ei4MUOfz5X9p6y9NZnb5W', NULL, 'haha@gmail.com', 9, 1560218619, 1560218619, '2NMi4nnMpAkQ3UboQGYMZMFtUi_Ac4ir_1560218619'),
(4, 'hihi', 'vvoSOu7TNFnVD9vy-EJHqeSSgip3uzcT', '$2y$13$tYYIMNpAF7RNmjrFix5jSeiVzmNGhRVERMjIM6eVHafNGKB5Wu8uC', NULL, 'hihi@gmail.com', 9, 1560295959, 1560295959, 'C1k17tSrt-3kKhpw9N3euP7pRpXtIksU_1560295959');

-- --------------------------------------------------------

--
-- Table structure for table `warung`
--

CREATE TABLE `warung` (
  `idwarung` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warung`
--

INSERT INTO `warung` (`idwarung`, `nama`, `foto`) VALUES
(1, 'Kopma', 'Kopma.png'),
(2, 'MiAyam', 'MiAyam.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_customer`
--
ALTER TABLE `history_customer`
  ADD PRIMARY KEY (`idhistory`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `history_tipers`
--
ALTER TABLE `history_tipers`
  ADD PRIMARY KEY (`idhistory`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`idkeranjang`),
  ADD KEY `menuwarung_id` (`menuwarung_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`idlokasi`);

--
-- Indexes for table `menu_warung`
--
ALTER TABLE `menu_warung`
  ADD PRIMARY KEY (`idmenu`),
  ADD KEY `warung_id` (`warung_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `order_customer`
--
ALTER TABLE `order_customer`
  ADD PRIMARY KEY (`idordercustomer`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_item_customer`
--
ALTER TABLE `order_item_customer`
  ADD PRIMARY KEY (`idorderitem`),
  ADD KEY `menuwarung_id` (`menuwarung_id`),
  ADD KEY `ordercustomer_id` (`ordercustomer_id`);

--
-- Indexes for table `order_tipers`
--
ALTER TABLE `order_tipers`
  ADD PRIMARY KEY (`idordertipers`),
  ADD KEY `lokasi_id` (`lokasi_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idstatus`);

--
-- Indexes for table `status_order`
--
ALTER TABLE `status_order`
  ADD PRIMARY KEY (`idstatusorder`),
  ADD KEY `ordercustomer_id` (`ordercustomer_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `warung`
--
ALTER TABLE `warung`
  ADD PRIMARY KEY (`idwarung`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_customer`
--
ALTER TABLE `history_customer`
  MODIFY `idhistory` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_tipers`
--
ALTER TABLE `history_tipers`
  MODIFY `idhistory` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `idkeranjang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `idlokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_warung`
--
ALTER TABLE `menu_warung`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_customer`
--
ALTER TABLE `order_customer`
  MODIFY `idordercustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_item_customer`
--
ALTER TABLE `order_item_customer`
  MODIFY `idorderitem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_tipers`
--
ALTER TABLE `order_tipers`
  MODIFY `idordertipers` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `idstatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status_order`
--
ALTER TABLE `status_order`
  MODIFY `idstatusorder` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `warung`
--
ALTER TABLE `warung`
  MODIFY `idwarung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`menuwarung_id`) REFERENCES `menu_warung` (`idmenu`),
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `pengguna` (`iduser`);

--
-- Constraints for table `menu_warung`
--
ALTER TABLE `menu_warung`
  ADD CONSTRAINT `menu_warung_ibfk_1` FOREIGN KEY (`warung_id`) REFERENCES `warung` (`idwarung`);

--
-- Constraints for table `order_customer`
--
ALTER TABLE `order_customer`
  ADD CONSTRAINT `order_customer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `pengguna` (`iduser`);

--
-- Constraints for table `order_item_customer`
--
ALTER TABLE `order_item_customer`
  ADD CONSTRAINT `order_item_customer_ibfk_1` FOREIGN KEY (`menuwarung_id`) REFERENCES `menu_warung` (`idmenu`),
  ADD CONSTRAINT `order_item_customer_ibfk_2` FOREIGN KEY (`ordercustomer_id`) REFERENCES `order_customer` (`idordercustomer`);

--
-- Constraints for table `order_tipers`
--
ALTER TABLE `order_tipers`
  ADD CONSTRAINT `order_tipers_ibfk_1` FOREIGN KEY (`lokasi_id`) REFERENCES `lokasi` (`idlokasi`),
  ADD CONSTRAINT `order_tipers_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `pengguna` (`iduser`);

--
-- Constraints for table `status_order`
--
ALTER TABLE `status_order`
  ADD CONSTRAINT `status_order_ibfk_1` FOREIGN KEY (`ordercustomer_id`) REFERENCES `order_customer` (`idordercustomer`),
  ADD CONSTRAINT `status_order_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`idstatus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
