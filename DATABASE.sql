-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Jul 2019 pada 03.43
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `js`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji_penjahit`
--

CREATE TABLE `gaji_penjahit` (
  `id_gaji` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `total` int(11) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gaji_penjahit`
--

INSERT INTO `gaji_penjahit` (`id_gaji`, `tanggal`, `id_user`, `nama_barang`, `total`, `harga_satuan`, `total_harga`) VALUES
(4, '2019-07-19', 2, 'Jaket', 2, 2000, 4000),
(5, '2019-07-19', 2, 'Kemeja', 5, 3000, 15000),
(6, '2019-07-19', 3, 'Kemeja', 4, 3000, 12000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jahitan`
--

CREATE TABLE `jahitan` (
  `id_barang` int(5) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(11) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jahitan`
--

INSERT INTO `jahitan` (`id_barang`, `id_user`, `nama_barang`, `tanggal`, `total`, `harga_satuan`, `status`) VALUES
(1, '2', 'Kemeja', '2019-07-19', 2, 3000, 'Proses Jahit'),
(2, '2', 'Kemeja', '2019-07-19', 5, 3000, 'Sudah Jahit'),
(3, '2', 'Jaket', '2019-07-19', 2, 2000, 'Sudah Jahit'),
(4, '2', 'Jaket', '2019-07-19', 8, 2000, 'Belum Jahit'),
(5, '3', 'Kemeja', '2019-07-19', 4, 3000, 'Sudah Jahit'),
(6, '3', 'Jaket', '2019-07-19', 4, 2000, 'Proses Jahit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(1) NOT NULL,
  `nama_level` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `owner`
--

CREATE TABLE `owner` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(32) NOT NULL,
  `total` int(11) NOT NULL,
  `harga_satuan` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `owner`
--

INSERT INTO `owner` (`id_barang`, `nama_barang`, `total`, `harga_satuan`) VALUES
(1, 'Kemeja', 89, 3000),
(2, 'Jaket', 36, 2000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `level` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `level`) VALUES
(1, 'admin', 'admin', 'FAWZIA AN', 'admin'),
(2, 'penjahit', 'penjahit', 'Susanti', 'penjahit'),
(3, 'penjahit1', 'penjahit1', 'Dina', 'penjahit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gaji_penjahit`
--
ALTER TABLE `gaji_penjahit`
  ADD PRIMARY KEY (`id_gaji`);

--
-- Indexes for table `jahitan`
--
ALTER TABLE `jahitan`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gaji_penjahit`
--
ALTER TABLE `gaji_penjahit`
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jahitan`
--
ALTER TABLE `jahitan`
  MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
