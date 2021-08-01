-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 05:43 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesawat`
--

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` varchar(10) NOT NULL,
  `nama_level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(10) NOT NULL,
  `kode_pemesanan` varchar(10) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `tempat_pemesanan` varchar(15) NOT NULL,
  `id_pelanggan` varchar(4) NOT NULL,
  `kode_kursi` varchar(4) NOT NULL,
  `id_rute` varchar(10) NOT NULL,
  `tujuan` varchar(15) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `jam_cekin` time(5) NOT NULL,
  `jam_berangkat` time(5) NOT NULL,
  `total_bayar` int(10) NOT NULL,
  `id_petugas` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `kode_pemesanan`, `tanggal_pemesanan`, `tempat_pemesanan`, `id_pelanggan`, `kode_kursi`, `id_rute`, `tujuan`, `tanggal_berangkat`, `jam_cekin`, `jam_berangkat`, `total_bayar`, `id_petugas`) VALUES
(1213333, 'K4444333', '2019-04-10', 'jogja', 'P002', 'AB', 'SMGTEG', 'Surabaya', '2019-04-24', '00:00:00.00000', '00:00:00.00000', 40000098, 'A002');

-- --------------------------------------------------------

--
-- Table structure for table `penumpang`
--

CREATE TABLE `penumpang` (
  `id_penumpang` varchar(4) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama_penumpang` varchar(30) NOT NULL,
  `alamat_penumpang` varchar(35) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `telephone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penumpang`
--

INSERT INTO `penumpang` (`id_penumpang`, `username`, `password`, `nama_penumpang`, `alamat_penumpang`, `tanggal_lahir`, `jenis_kelamin`, `telephone`) VALUES
('P001', 'Aris31', 'arisanti', 'Arisanti', 'Pekalongan', '2019-04-25', 'Perempuan', 2147483647),
('P003', 'helmi', 'qaz', 'helmi', 'kralor', '2019-04-10', 'Laki-Laki', 4563656),
('P006', 'astari sur', 'qaZ', 'astari surya', 'semarang', '2019-04-11', 'Perempuan', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` varchar(4) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `nama_petugas` varchar(30) NOT NULL,
  `id_level` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `id_level`) VALUES
('A002', 'Fia', 'ptgFia', 'via Vallen', 'ptg02');

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE `rute` (
  `id_rute` varchar(10) NOT NULL,
  `tujuan` varchar(15) NOT NULL,
  `rute_awal` varchar(15) NOT NULL,
  `rute_akhir` varchar(15) NOT NULL,
  `harga` int(10) NOT NULL,
  `id_transportasi` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id_rute`, `tujuan`, `rute_awal`, `rute_akhir`, `harga`, `id_transportasi`) VALUES
('SMGTEG', 'Tegal', 'SEMARANG', 'TEGAL', 400000, 'AIR01');

-- --------------------------------------------------------

--
-- Table structure for table `transportasi`
--

CREATE TABLE `transportasi` (
  `id_transportasi` varchar(7) NOT NULL,
  `kode` varchar(4) NOT NULL,
  `jumlah_kursi` int(4) NOT NULL,
  `keterangan` varchar(10) NOT NULL,
  `id_type_transportasi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportasi`
--

INSERT INTO `transportasi` (`id_transportasi`, `kode`, `jumlah_kursi`, `keterangan`, `id_type_transportasi`) VALUES
('AIR01', 'AR', 50, 'Pesawat', 'PT'),
('GAR01', 'GA', 60, 'Pesawat', 'PT');

-- --------------------------------------------------------

--
-- Table structure for table `type_transportasi`
--

CREATE TABLE `type_transportasi` (
  `id_type_transportasi` varchar(4) NOT NULL,
  `nama_type` varchar(10) NOT NULL,
  `keterangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_transportasi`
--

INSERT INTO `type_transportasi` (`id_type_transportasi`, `nama_type`, `keterangan`) VALUES
('KA', 'kereta api', 'yes'),
('PT', 'kereta', 'ready');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no` int(10) NOT NULL,
  `id_user` int(4) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `id_user`, `username`, `password`, `nama_user`, `level`) VALUES
(141, 5, 'ananda', '7f363f401f336a7925f28655b6a44447', 'reza', 'Admin'),
(10, 11, 'helmi', '4eae18cf9e54a0f62b44176d074cbe2f', 'helmi', 'Admin'),
(0, 16, 'il', '4605f628f91de21e4b5f9433f46e29eb', '', 'Admin'),
(4, 44, 'nipon', '4eae18cf9e54a0f62b44176d074cbe2f', 'nipon', 'Penumpang'),
(4, 54, 'reza', 'bb98b1d0b523d5e783f931550d7702b6', 'ananda', 'Petugas'),
(8888, 55, 'qw', '006d2143154327a64d86a264aea225f3', 'qw', 'Penumpang'),
(4, 767, 'ww', 'ad57484016654da87125db86f4227ea3', 'ww', 'Penumpang'),
(6, 9999, 'fina', 'c89ee91ad8cdf83841d3b743413e403a', 'finaba', 'Penumpang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`id_penumpang`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id_rute`);

--
-- Indexes for table `transportasi`
--
ALTER TABLE `transportasi`
  ADD PRIMARY KEY (`id_transportasi`);

--
-- Indexes for table `type_transportasi`
--
ALTER TABLE `type_transportasi`
  ADD PRIMARY KEY (`id_type_transportasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
