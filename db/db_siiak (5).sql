-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2022 pada 14.48
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siiak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `crudelektronik`
--

CREATE TABLE `crudelektronik` (
  `id` int(11) NOT NULL,
  `id_kba_elektronik` int(11) NOT NULL,
  `no_brg` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tgl_input` date DEFAULT NULL,
  `th_beli` date NOT NULL,
  `jumlah` int(3) NOT NULL,
  `stn_hrg` int(11) NOT NULL,
  `ttl_hrg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `crudelektronik`
--

INSERT INTO `crudelektronik` (`id`, `id_kba_elektronik`, `no_brg`, `model`, `merk`, `status`, `tgl_input`, `th_beli`, `jumlah`, `stn_hrg`, `ttl_hrg`) VALUES
(20, 4, 'PN02.06.02.04.003', 'AC Unit', 'panasonic', 'pembelia', '2021-12-25', '2011-04-13', 1, 539000062, 539000062),
(21, 6, 'LG02.06.02.06.003', 'Televisi', 'LG 29\"/LCD', 'pembelian', '2021-12-24', '2011-05-14', 1, 5850000, 5850000),
(23, 7, 'HP02.06.03.02.001', 'PC Unit', 'HP', 'pembelian', '2021-12-25', '2013-05-13', 5, 7750000, 38750000),
(26, 9, 'HP02.06.03.05.003', 'Printer', 'HP', 'pembelian', '2021-12-30', '2013-05-24', 5, 1935000, 9675000),
(27, 8, 'TN02.06.02.03.003', 'Mesin Potong Rumput', 'Tanaka', 'pembelian', '2021-12-30', '2014-06-04', 1, 8262000, 8262000),
(28, 10, 'TS02.06.02.03.003', 'Mesin Potong Rumput', 'Tasco', 'hibah', '2021-12-30', '2007-01-13', 1, 5175200, 5175200),
(29, 11, 'SM02.06.02.04.008', 'Cold Storage', 'Samsung', 'pembelian', '2021-12-30', '2013-04-23', 1, 8262000, 8262000),
(30, 12, 'PS02.07.01.01.003', 'Proyektor', 'panasonic', 'pembelian', '2021-12-30', '2011-02-20', 1, 798000108, 798000108),
(31, 13, 'MT02.07.02.01.014', 'Handy talky', 'Motorola', 'pembelian', '2021-12-30', '2011-05-24', 3, 2900000, 8700000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `crudfurnitur`
--

CREATE TABLE `crudfurnitur` (
  `id` int(11) NOT NULL,
  `id_kba_furnitur` int(11) NOT NULL,
  `no_brg` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `merk` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tgl_input` date DEFAULT NULL,
  `th_beli` date NOT NULL,
  `jumlah` int(3) NOT NULL,
  `stn_hrg` int(11) NOT NULL,
  `ttl_hrg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `crudfurnitur`
--

INSERT INTO `crudfurnitur` (`id`, `id_kba_furnitur`, `no_brg`, `model`, `merk`, `status`, `tgl_input`, `th_beli`, `jumlah`, `stn_hrg`, `ttl_hrg`) VALUES
(20, 15, 'BR02.06.01.04.001', 'Lemari Besi', 'barata 01', 'pembelian', '2022-01-02', '2006-12-10', 5, 2420000, 12100000),
(21, 16, 'LS02.06.01.04.001', 'Lemari Besi', 'lion star', 'pembelian', '2021-12-24', '2012-04-15', 1, 299995014, 299995014),
(22, 17, 'AL02.06.01.04.001', 'Lemari Besi', 'almari', 'pembelian', '2021-12-24', '2013-11-20', 2, 2480000, 4960000),
(24, 13, 'ET02.05.01.04.005', 'Lemari Penyimpanan', 'Ellite typeEL46', 'pembelian', '2021-12-25', '2014-05-20', 3, 1944000, 5832000),
(25, 18, 'LI02.06.01.04.004', 'Filling Besi/Metal', 'Lion44E (4Laci)', 'pembelian', '2021-12-25', '2008-11-03', 5, 2575500, 12877500),
(26, 20, 'FC02.06.01.04.004', 'Filling Besi/Metal', 'Filling cabinet', 'pembelian', '2021-12-25', '2014-07-06', 2, 3626600, 7253200),
(27, 21, 'ET02.06.01.04.004', 'Filling Besi/Metal', 'ELITE Eratech.E', 'pembelian', '2021-12-25', '2015-06-10', 3, 2310000, 6930000),
(28, 22, 'LD02.06.01.04.012', 'Lemari Kaca', 'Handmade', 'pembelian', '2021-12-25', '2014-05-12', 1, 4860000, 4860000),
(29, 23, 'LK02.06.01.04.012', 'Lemari Kayu', 'High Point', 'pembelian', '2021-12-25', '2011-05-17', 1, 2035000, 2035000),
(30, 24, 'ED02.06.01.04.017', 'Rak Serbaguna', 'EDUTREND', 'pembelian', '2021-12-25', '2011-05-27', 4, 1925001, 7700004),
(31, 25, 'PN02.06.01.05.006', 'Papan Nama Instansi', 'Plang apel', 'pembelian', '2021-12-25', '2014-07-25', 3, 2430000, 7290000),
(33, 26, 'LF02.06.04.03.005', 'Kursi Kerja Pejabat', 'Lufo', 'pembelian', '2021-12-30', '2013-04-30', 7, 2902500, 20317500),
(34, 27, 'MD02.06.04.01.009', 'Meja Kerja Pejabat', 'Modera', 'pembelian', '2021-12-30', '2013-04-09', 5, 248859427, 1244297135),
(35, 28, 'HP02.06.04.01.008', 'Meja Kerja Pejabat', 'High Point', 'pembelian', '2021-12-30', '2013-03-23', 6, 1838810, 11032860),
(36, 29, 'HM02.06.04.01.008', 'Meja Kerja Pejabat', 'Handmade', 'pembelian', '2021-12-30', '2013-03-04', 2, 2916000, 5832000),
(37, 30, 'ET02.06.04.07.006', 'Lemari Arsip', 'Elite ', 'pembelian', '2021-12-30', '2013-03-21', 3, 2100000, 6300000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `crudkb`
--

CREATE TABLE `crudkb` (
  `id` int(20) NOT NULL,
  `id_kba_kb` int(11) NOT NULL,
  `no_brg` varchar(20) NOT NULL,
  `model` varchar(50) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `no_mesin` varchar(35) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tgl_input` date DEFAULT NULL,
  `th_beli` date NOT NULL,
  `jumlah` int(3) NOT NULL,
  `stn_hrg` int(11) NOT NULL,
  `ttl_hrg` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `crudkb`
--

INSERT INTO `crudkb` (`id`, `id_kba_kb`, `no_brg`, `model`, `merk`, `no_mesin`, `status`, `tgl_input`, `th_beli`, `jumlah`, `stn_hrg`, `ttl_hrg`) VALUES
(97, 13, 'XN02.03.01.02.003', 'Mini Bus', 'xenia/sporty', 'MHKV1AA2JCK007284 DP61278', 'pembelian', '2021-12-24', '2012-06-05', 1, 146400000, 146400000),
(98, 14, 'TY02.03.01.02.003', 'Mini Bus', 'toyota/rush', 'MHFE2CK3JHK042922 3SZ DGD6182', 'hibah', '2021-12-24', '2017-04-05', 1, 250000000, 250000000),
(100, 16, 'HND02.03.01.05.001', 'Sepeda Motor', 'honda/win', 'MH1HABC193KO16278 HABCE1016456', 'pembelian', '2021-12-24', '2003-05-04', 1, 3600000, 3600000),
(101, 16, 'HND02.03.01.05.001', 'Sepeda Motor', 'honda/mega pro', '-', 'pembelian', '2021-12-24', '2007-05-12', 1, 16050000, 16050000),
(102, 16, 'HND02.03.01.05.001', 'Sepeda Motor', 'Honda/NF100SE', '-', 'pembelian', '2021-12-24', '2007-04-23', 1, 10050000, 10050000),
(103, 16, 'HND02.03.01.05.001', 'Sepeda Motor', 'HONDA/GL160D', '-', 'pembelian', '2021-12-25', '2008-11-23', 1, 16300000, 16300000),
(104, 16, 'HND02.03.01.05.001', 'Sepeda Motor', 'VERZA150 CW MMC', 'MH1KC521XEK202112', 'pembelian', '2021-12-25', '2014-03-10', 1, 17770500, 17770500),
(105, 16, 'HND02.03.01.05.001', 'Sepeda Motor', ' NEWVARIO 125.ESP.CBS', 'MH1JFU117FK292190 JFU1E1290186', 'pembelian', '2021-12-25', '2015-09-07', 1, 16450000, 16450000),
(106, 16, 'HND02.03.01.05.001', 'Sepeda Motor', 'HONDANEW VARIO125', 'MH1JFU110FK302624 JFU1E1303109', 'pembelian', '2021-12-25', '2015-08-10', 1, 16450000, 16450000),
(107, 16, 'HND02.03.01.05.001', 'Sepeda Motor', 'HONDANEW VARIO125', 'MH1JFU117FK296207 JFU1E1296146', 'pembelian', '2021-12-25', '2015-08-03', 1, 16450000, 16450000),
(108, 17, 'YMH02.03.01.05.001', 'Sepeda Motor', 'YamahaMio Fino', 'MH3SE8840GZ110134', 'pembelian', '2021-12-25', '2016-05-12', 1, 16326522, 16326522);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kba_elektronik`
--

CREATE TABLE `kba_elektronik` (
  `id` int(20) NOT NULL,
  `no_brg` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kba_elektronik`
--

INSERT INTO `kba_elektronik` (`id`, `no_brg`, `model`) VALUES
(4, 'PN02.06.02.04.003', 'AC Unit'),
(5, 'AS02.06.02.04.003', 'AC Unit'),
(6, 'LG02.06.02.06.003', 'Televisi'),
(7, 'HP02.06.03.02.001', 'PC Unit'),
(8, 'TN02.06.02.03.003', 'Mesin Potong Rumput'),
(9, 'HP02.06.03.05.003', 'Printer'),
(10, 'TS02.06.02.03.003', 'Mesin Potong Rumput'),
(11, 'SM02.06.02.04.008', 'Cold Storage'),
(12, 'PS02.07.01.01.003', 'Proyektor'),
(13, 'MT02.07.02.01.014', 'Handy talky');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kba_furnitur`
--

CREATE TABLE `kba_furnitur` (
  `id` int(20) NOT NULL,
  `no_brg` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kba_furnitur`
--

INSERT INTO `kba_furnitur` (`id`, `no_brg`, `model`) VALUES
(13, 'ET02.05.01.04.005', 'Lemari Penyimpanan'),
(15, 'BR02.06.01.04.001', 'Lemari Besi'),
(16, 'LS02.06.01.04.001', 'Lemari Besi'),
(17, 'AL02.06.01.04.001', 'Lemari Besi'),
(18, 'LI02.06.01.04.004', 'Filling Besi/Metal'),
(19, 'LS02.06.01.04.004', 'Filling Besi/Metal'),
(20, 'FC02.06.01.04.004', 'Filling Besi/Metal'),
(21, 'ET02.06.01.04.004', 'Filling Besi/Metal'),
(22, 'LD02.06.01.04.012', 'Lemari Kaca'),
(23, 'LK02.06.01.04.012', 'Lemari Kayu'),
(24, 'ED02.06.01.04.017', 'Rak Serbaguna'),
(25, 'PN02.06.01.05.006', 'Papan Nama Instansi'),
(26, 'LF02.06.04.03.005', 'Kursi Kerja Pejabat'),
(27, 'MD02.06.04.01.009', 'Meja Kerja Pejabat'),
(28, 'HP02.06.04.01.008', 'Meja Kerja Pejabat'),
(29, 'HM02.06.04.01.008', 'Meja Kerja Pejabat'),
(30, 'ET02.06.04.07.006', 'Lemari Arsip'),
(32, 'ID02.06.02.01.027', 'Kursi Rapat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kba_kb`
--

CREATE TABLE `kba_kb` (
  `id` int(20) NOT NULL,
  `no_brg` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kba_kb`
--

INSERT INTO `kba_kb` (`id`, `no_brg`, `model`) VALUES
(12, 'SZ02.03.01.02.003', 'Mini Bus'),
(13, 'XN02.03.01.02.003', 'Mini Bus'),
(14, 'TY02.03.01.02.003', 'Mini Bus'),
(16, 'HND02.03.01.05.001', 'Sepeda Motor'),
(17, 'YMH02.03.01.05.001', 'Sepeda Motor'),
(19, 'SZ02.03.01.03.002', 'pick up');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `nip`, `username`, `password`, `hak_akses`) VALUES
(2, '197907082009021001', 'Mastum', '123', 'admin'),
(3, '1965111811986032005', 'Diah', '12345', 'User'),
(4, '197906012007012030', 'Roby', '12345', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `crudelektronik`
--
ALTER TABLE `crudelektronik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kba_elektronik` (`id_kba_elektronik`);

--
-- Indeks untuk tabel `crudfurnitur`
--
ALTER TABLE `crudfurnitur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kba_furnitur` (`id_kba_furnitur`);

--
-- Indeks untuk tabel `crudkb`
--
ALTER TABLE `crudkb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kba_kb` (`id_kba_kb`);

--
-- Indeks untuk tabel `kba_elektronik`
--
ALTER TABLE `kba_elektronik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_brg` (`no_brg`);

--
-- Indeks untuk tabel `kba_furnitur`
--
ALTER TABLE `kba_furnitur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_brg` (`no_brg`);

--
-- Indeks untuk tabel `kba_kb`
--
ALTER TABLE `kba_kb`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_brg` (`no_brg`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nip`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `crudelektronik`
--
ALTER TABLE `crudelektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `crudfurnitur`
--
ALTER TABLE `crudfurnitur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `crudkb`
--
ALTER TABLE `crudkb`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT untuk tabel `kba_elektronik`
--
ALTER TABLE `kba_elektronik`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kba_furnitur`
--
ALTER TABLE `kba_furnitur`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `kba_kb`
--
ALTER TABLE `kba_kb`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `crudelektronik`
--
ALTER TABLE `crudelektronik`
  ADD CONSTRAINT `crudelektronik_ibfk_1` FOREIGN KEY (`id_kba_elektronik`) REFERENCES `kba_elektronik` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `crudfurnitur`
--
ALTER TABLE `crudfurnitur`
  ADD CONSTRAINT `crudfurnitur_ibfk_1` FOREIGN KEY (`id_kba_furnitur`) REFERENCES `kba_furnitur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `crudkb`
--
ALTER TABLE `crudkb`
  ADD CONSTRAINT `crudkb_ibfk_1` FOREIGN KEY (`id_kba_kb`) REFERENCES `kba_kb` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
