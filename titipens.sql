-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2019 pada 09.18
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

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
-- Struktur dari tabel `history_customer`
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
-- Struktur dari tabel `history_tipers`
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
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `idkeranjang` int(11) NOT NULL,
  `menuwarung_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `idlokasi` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`idlokasi`, `name`) VALUES
(1, 'Gedung D4'),
(2, 'Gedung D3'),
(3, 'Gedung Pasca Sarjana'),
(4, 'Parkiran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_warung`
--

CREATE TABLE `menu_warung` (
  `idmenu` int(11) NOT NULL,
  `warung_id` int(11) NOT NULL,
  `nama_item` varchar(255) NOT NULL,
  `harga` int(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu_warung`
--

INSERT INTO `menu_warung` (`idmenu`, `warung_id`, `nama_item`, `harga`, `foto`) VALUES
(2, 1, 'Nasi Goreng Jawa', 10000, 'Nasi Goreng Jawa.jpg'),
(4, 3, 'Soto Ayam', 8000, 'Soto Ayam.jpg'),
(5, 3, 'Ayam Geprek', 8000, 'Ayam Geprek.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1557568339),
('m130524_201442_init', 1557568923),
('m190124_110200_add_verification_token_column_to_user_table', 1557568923);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_customer`
--

CREATE TABLE `order_customer` (
  `idordercustomer` int(11) NOT NULL,
  `ordertipers_id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `catatan` text NOT NULL,
  `total` int(50) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order_customer`
--

INSERT INTO `order_customer` (`idordercustomer`, `ordertipers_id`, `tanggal`, `user_id`, `lokasi`, `catatan`, `total`, `status_id`) VALUES
(1, 1, '2019-05-31 12:53:00', 1, 'B203', 'kalo ga ada bebas', 32000, 1),
(2, 2, '2019-06-02 22:21:00', 2, 'HH201', 'kalo habis, gajadi y.', 100000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_item_customer`
--

CREATE TABLE `order_item_customer` (
  `idorderitem` int(11) NOT NULL,
  `ordercustomer_id` int(11) NOT NULL,
  `menuwarung_id` int(11) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order_item_customer`
--

INSERT INTO `order_item_customer` (`idorderitem`, `ordercustomer_id`, `menuwarung_id`, `jumlah`, `total`) VALUES
(1, 1, 2, 1, 10000),
(2, 1, 4, 2, 16000),
(3, 2, 5, 2, 16000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_tipers`
--

CREATE TABLE `order_tipers` (
  `idordertipers` int(11) NOT NULL,
  `fee` int(50) NOT NULL,
  `lokasi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `catatan` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order_tipers`
--

INSERT INTO `order_tipers` (`idordertipers`, `fee`, `lokasi_id`, `user_id`, `catatan`, `tanggal`) VALUES
(1, 2000, 4, 2, 'harap bayar uang pas', '2019-05-31 11:41:00'),
(2, 2500, 3, 1, 'ga ada kembalian.', '2019-06-02 17:05:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `iduser` int(11) NOT NULL,
  `nrp` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `angkatan` int(5) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `rating` double DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`iduser`, `nrp`, `nama`, `jurusan`, `angkatan`, `foto`, `rating`, `password`) VALUES
(1, 2110171002, 'Wifda', 'IT', 2017, '', 3, '759730a97e4373f3a0ee12805db065e3a4a649a5'),
(2, 2110171020, 'Anissa Billah', 'IT', 2017, '', NULL, 'asdasd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `idstatus` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`idstatus`, `nama`) VALUES
(1, 'Proses'),
(2, 'Pesanan telah diterima'),
(3, 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', 'k8T_Src-Vw7GdpTe337Zz802upmvjM2y', '$2y$13$VcEQrFEwJ8QJueJ2b.OJv.6aFo20vSPHIXu2gH2XLTAgHubSDjCZ6', NULL, 'bella@gmail.com', 10, 1552288124, 1552288124, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `warung`
--

CREATE TABLE `warung` (
  `idwarung` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `warung`
--

INSERT INTO `warung` (`idwarung`, `nama`, `foto`) VALUES
(1, 'Kopma', 'Kopma.png'),
(3, 'Kantin Prasmanan', 'Kantin Prasmanan.png'),
(4, 'Yoblend', 'Yoblend.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `history_customer`
--
ALTER TABLE `history_customer`
  ADD PRIMARY KEY (`idhistory`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `history_tipers`
--
ALTER TABLE `history_tipers`
  ADD PRIMARY KEY (`idhistory`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`idkeranjang`),
  ADD KEY `menuwarung_id` (`menuwarung_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`idlokasi`);

--
-- Indeks untuk tabel `menu_warung`
--
ALTER TABLE `menu_warung`
  ADD PRIMARY KEY (`idmenu`),
  ADD KEY `warung_id` (`warung_id`);

--
-- Indeks untuk tabel `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indeks untuk tabel `order_customer`
--
ALTER TABLE `order_customer`
  ADD PRIMARY KEY (`idordercustomer`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `ordertipers_id` (`ordertipers_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indeks untuk tabel `order_item_customer`
--
ALTER TABLE `order_item_customer`
  ADD PRIMARY KEY (`idorderitem`),
  ADD KEY `menuwarung_id` (`menuwarung_id`),
  ADD KEY `ordercustomer_id` (`ordercustomer_id`);

--
-- Indeks untuk tabel `order_tipers`
--
ALTER TABLE `order_tipers`
  ADD PRIMARY KEY (`idordertipers`),
  ADD KEY `lokasi_id` (`lokasi_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`iduser`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idstatus`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indeks untuk tabel `warung`
--
ALTER TABLE `warung`
  ADD PRIMARY KEY (`idwarung`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `history_customer`
--
ALTER TABLE `history_customer`
  MODIFY `idhistory` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `history_tipers`
--
ALTER TABLE `history_tipers`
  MODIFY `idhistory` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `idkeranjang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `idlokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `menu_warung`
--
ALTER TABLE `menu_warung`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `order_customer`
--
ALTER TABLE `order_customer`
  MODIFY `idordercustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `order_item_customer`
--
ALTER TABLE `order_item_customer`
  MODIFY `idorderitem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `order_tipers`
--
ALTER TABLE `order_tipers`
  MODIFY `idordertipers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `idstatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `warung`
--
ALTER TABLE `warung`
  MODIFY `idwarung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `history_customer`
--
ALTER TABLE `history_customer`
  ADD CONSTRAINT `history_customer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `pengguna` (`iduser`);

--
-- Ketidakleluasaan untuk tabel `history_tipers`
--
ALTER TABLE `history_tipers`
  ADD CONSTRAINT `history_tipers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `pengguna` (`iduser`);

--
-- Ketidakleluasaan untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`menuwarung_id`) REFERENCES `menu_warung` (`idmenu`),
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `pengguna` (`iduser`);

--
-- Ketidakleluasaan untuk tabel `menu_warung`
--
ALTER TABLE `menu_warung`
  ADD CONSTRAINT `menu_warung_ibfk_1` FOREIGN KEY (`warung_id`) REFERENCES `warung` (`idwarung`);

--
-- Ketidakleluasaan untuk tabel `order_customer`
--
ALTER TABLE `order_customer`
  ADD CONSTRAINT `order_customer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `pengguna` (`iduser`),
  ADD CONSTRAINT `order_customer_ibfk_2` FOREIGN KEY (`ordertipers_id`) REFERENCES `order_tipers` (`idordertipers`),
  ADD CONSTRAINT `order_customer_ibfk_3` FOREIGN KEY (`status_id`) REFERENCES `status` (`idstatus`);

--
-- Ketidakleluasaan untuk tabel `order_item_customer`
--
ALTER TABLE `order_item_customer`
  ADD CONSTRAINT `order_item_customer_ibfk_1` FOREIGN KEY (`menuwarung_id`) REFERENCES `menu_warung` (`idmenu`),
  ADD CONSTRAINT `order_item_customer_ibfk_2` FOREIGN KEY (`ordercustomer_id`) REFERENCES `order_customer` (`idordercustomer`);

--
-- Ketidakleluasaan untuk tabel `order_tipers`
--
ALTER TABLE `order_tipers`
  ADD CONSTRAINT `order_tipers_ibfk_1` FOREIGN KEY (`lokasi_id`) REFERENCES `lokasi` (`idlokasi`),
  ADD CONSTRAINT `order_tipers_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `pengguna` (`iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
