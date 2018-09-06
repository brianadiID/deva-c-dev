-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Agu 2018 pada 08.19
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theklakklik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kategori`
--

CREATE TABLE `t_kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `id_parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kategori`
--

INSERT INTO `t_kategori` (`id`, `nama_kategori`, `id_parent`) VALUES
(1, 'Handphone', 0),
(2, 'Laptop', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_produk`
--

CREATE TABLE `t_produk` (
  `id` int(11) NOT NULL,
  `gambar_produk` varchar(255) NOT NULL,
  `nama_produk` varchar(1000) NOT NULL,
  `short_deskripsi` text NOT NULL,
  `id_kategori` varchar(1000) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `featured` int(11) NOT NULL,
  `tags` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_produk`
--

INSERT INTO `t_produk` (`id`, `gambar_produk`, `nama_produk`, `short_deskripsi`, `id_kategori`, `id_brand`, `harga`, `detail`, `jumlah`, `featured`, `tags`) VALUES
(1, 'add026407e1947b8c9a40e7359de21a8.jpg', 'LCD09M7', 'Magnetic contactor - Schneider Electric (TeSys D) - DOL (Direct On Line) - 3 poles (3P) - Rated power (380-400Vac; AC-3) 7.5kW - Rated current (440vac; AC-3) 18A - Control coil voltage (50/60Hz) 220Vac - 1NO+1NC auxiliary contacts - Screw-clamp terminalsPhilips Luxeon® K2 OBL LED, with superior packaging and low thermal resistance -100-240 V AC - 5W - Red light - 50,000 hours (70% lumen maintenance)', '1', 0, 3000000, 'hp android asus', 20, 1, 'MESIN,ENGINE,MACHINE'),
(6, 'add026407e1947b8c9a40e7359de21a8.jpg', 'LCD0999', 'Magnetic contactor - Schneider Electric (TeSys D) - DOL (Direct On Line) - 3 poles (3P) - Rated power (380-415Vac; AC-3) 4kW - Rated current (440vac; AC-3) 9A - Control coil voltage (50/60Hz) 220Vac - 1NO+1NC auxiliary contacts - Screw-clamp terminals', '1', 0, 900000, '', 12, 1, 'SPATEPART,MATERIAL,SOFTWARE'),
(17, 'add026407e1947b8c9a40e7359de21a8.jpg', 'LCD09567', 'Miniature Circuit Breaker (MCB) - Schneider Electric (Domae) - Rated current 63A - 1 pole (1P) - C-curve - Short circuit breaking capacity (Icn) 4.5kA / 4500A - 1 module - DIN rail mounting', '2', 0, 250000, '', 20, 0, 'SECURITY,HOME,LIVING,SOFTWARE'),
(18, 'add026407e1947b8c9a40e7359de21a8.jpg', 'GV2P14', 'Philips Luxeon® K2 OBL LED, with superior packaging and low thermal resistance -100-240 V AC - 5W - Red light - 50,000 hours (70% lumen maintenance)', '1', 2, 4000, 'cicak goreng', 12, 1, 'hewan'),
(19, 'add026407e1947b8c9a40e7359de21a8.jpg', 'DOM11341SNI', 'Moulded Case Circuit Breaker (MCCB) - Schneider Electric (EasyPact EZC) - EZC100H 3P 100A - 3 poles (3P3d) - Rated current 100A - Short circuit breaking capacity (Icu) (400-415Vac) 30kA - Thermal-Magnetic (fixed) trip unit (TMD) - Lug terminals', '1', 1, 8000000, 'hewan', 12, 1, 'hewani'),
(20, 'add026407e1947b8c9a40e7359de21a8.jpg', 'XGP500-VAC', 'Auxiliary contact block - Schneider Electric (TeSys D) - 2NO+2NC auxiliary contacts - Screw-clamp terminals - for LC1D', '2', 2, 4000, 'cicak goreng', 12, 1, 'hewan'),
(21, 'add026407e1947b8c9a40e7359de21a8.jpg', 'LC1DFKM7', 'Thermal-Magnetic Motor Protection Circuit Breaker (MPCB) / Manual Motor Starter - Schneider Electric (TeSys GV2P) - 3 poles (3P3d) - Rated current 6A - 10A - Short circuit breaking capacity (Icu) (400-415Vac) 100kA - Rotary knob operation - Screw-clamp terminals', '1', 1, 8000000, 'hewan', 12, 1, 'hewani'),
(22, 'add026407e1947b8c9a40e7359de21a8.jpg', 'DF2BN0200', 'Moulded Case Circuit Breaker (MCCB) - Schneider Electric (EasyPact EZC) - EZC100H 3P 100A - 3 poles (3P3d) - Rated current 100A - Short circuit breaking capacity (Icu) (400-415Vac) 30kA - Thermal-Magnetic (fixed) trip unit (TMD) - Lug terminals', '1', 2, 89999, 'qurban', 99, 1, 'hewan,qurban'),
(23, 'add026407e1947b8c9a40e7359de21a8.jpg', 'A9K14106', 'Auxiliary contact block - Schneider Electric (TeSys D) - 2NO+2NC auxiliary contacts - Screw-clamp terminals - for LC1D', '2', 2, 90000, 'sapi ', 2, 1, 'test,sapi'),
(24, 'add026407e1947b8c9a40e7359de21a8.jpg', 'EZC100H3100', 'Philips Luxeon® K2 OBL LED, with superior packaging and low thermal resistance -100-240 V AC - 5W - Red light - 50,000 hours (70% lumen maintenance)', '1', 2, 280000, 'beruang coklat', 2, 2, 'kutub'),
(25, 'add026407e1947b8c9a40e7359de21a8.jpg', 'LADN22', 'Thermal-Magnetic Motor Protection Circuit Breaker (MPCB) / Manual Motor Starter - Schneider Electric (TeSys GV2P) - 3 poles (3P3d) - Rated current 6A - 10A - Short circuit breaking capacity (Icu) (400-415Vac) 100kA - Rotary knob operation - Screw-clamp terminals', '1', 2, 80000, 'hero mobilejen', 2, 1, 'ggwp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id_user`, `nama`, `email`, `password`, `level`) VALUES
(1, 'Ardhi Ramadhan', 'ramadhn10@gmail.com', 'admin', 'Administrator'),
(2, 'Faiz', 'faizseeguns@gmail.com', '', 'Administrator'),
(3, 'Udin Saipul', 'udin@gmail.com', '', 'User'),
(4, 'Nindy Sapira', 'nindi@gmail.com', '', 'Marketing'),
(5, 'Zikri Ahmad', 'zikri@gmail.com', '', 'Marketing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `pekerjaan`) VALUES
(1, 'Andi', 'Surabaya', 'web programmer'),
(2, 'Santoso', 'Jakarta', 'Web Designer'),
(6, 'Samsul', 'Sumedang', 'Pegawai'),
(7, 'Bob', 'jakarta', 'penyanyi'),
(8, 'marley', 'afrika', 'penyanyi'),
(9, 'Bob', 'jakarta', 'penyanyi'),
(10, 'Bob', 'jakarta', 'penyanyi'),
(11, 'Bob', 'jakarta', 'penyanyi'),
(12, 'Bob', 'jakarta', 'penyanyi'),
(13, 'Bob', 'jakarta', 'penyanyi'),
(14, 'Bob', 'jakarta', 'penyanyi'),
(15, 'Bob', 'jakarta', 'penyanyi'),
(16, 'Bob', 'jakarta', 'penyanyi'),
(17, 'Bob', 'jakarta', 'penyanyi'),
(18, 'marley', 'afrika', 'penyanyi'),
(19, 'Bob', 'jakarta', 'penyanyi'),
(20, 'Bob', 'jakarta', 'penyanyi'),
(21, 'Bob', 'jakarta', 'penyanyi'),
(22, 'Bob', 'jakarta', 'penyanyi'),
(23, 'Bob', 'jakarta', 'penyanyi'),
(24, 'Bob', 'jakarta', 'penyanyi'),
(25, 'Bob', 'jakarta', 'penyanyi'),
(26, 'Bob', 'jakarta', 'penyanyi'),
(27, 'Bob', 'jakarta', 'penyanyi'),
(28, 'Bob', 'jakarta', 'penyanyi'),
(29, 'Bob', 'jakarta', 'penyanyi'),
(30, 'Bob', 'jakarta', 'penyanyi'),
(31, 'Bob', 'jakarta', 'penyanyi'),
(32, 'marley', 'afrika', 'penyanyi'),
(33, 'Bob', 'jakarta', 'penyanyi'),
(34, 'Bob', 'jakarta', 'penyanyi'),
(35, 'Bob', 'jakarta', 'penyanyi'),
(36, 'Bob', 'jakarta', 'penyanyi'),
(37, 'Bob', 'jakarta', 'penyanyi'),
(38, 'Bob', 'jakarta', 'penyanyi'),
(39, 'Bob', 'jakarta', 'penyanyi'),
(40, 'Bob', 'jakarta', 'penyanyi'),
(41, 'Bob', 'jakarta', 'penyanyi'),
(42, 'Bob', 'jakarta', 'penyanyi'),
(43, 'Bob', 'jakarta', 'penyanyi'),
(44, 'Bob', 'jakarta', 'penyanyi'),
(45, 'Bob', 'jakarta', 'penyanyi'),
(46, 'Bob', 'jakarta', 'penyanyi'),
(47, 'marley', 'afrika', 'penyanyi'),
(48, 'Bob', 'jakarta', 'penyanyi'),
(49, 'Bob', 'jakarta', 'penyanyi'),
(50, 'Bob', 'jakarta', 'penyanyi'),
(51, 'Bob', 'jakarta', 'penyanyi'),
(52, 'Bob', 'jakarta', 'penyanyi'),
(53, 'Bob', 'jakarta', 'penyanyi'),
(54, 'Bob', 'jakarta', 'penyanyi'),
(55, 'Bob', 'jakarta', 'penyanyi'),
(56, 'Bob', 'jakarta', 'penyanyi'),
(57, 'Bob', 'jakarta', 'penyanyi'),
(58, 'Bob', 'jakarta', 'penyanyi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_kategori`
--
ALTER TABLE `t_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_produk`
--
ALTER TABLE `t_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_kategori`
--
ALTER TABLE `t_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_produk`
--
ALTER TABLE `t_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
