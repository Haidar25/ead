-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2017 at 08:39 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ead`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `judul` varchar(255) NOT NULL,
  `isi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`judul`, `isi`) VALUES
('Pengumpulan Profil Dan Prestasi Sekolah', 'Merujuk pada surat Kepada Kepala SMP Negeri, SMA Negeri/ Swasta dan SMK Negeri/ Swasta, Tanggal : 15 Maret 2016, Nomor : 420/1127/1.1/35.73.307/2016, Perihal : Pengumpulan Profil Sekolah Dalam Rangka Penyusunan Buku Profil Dan Prestasi Pendidikan Tahun 20'),
('Myanmar pun Berguru ke Kota Malang', 'Malang – Sebanyak lima orang perwakilan dari negara Myanm'),
('SMK Negeri Diambil Alih Propinsi Siap Dimutasi Antar Daerah', 'Malang – Terhitung mulai bulan April 2016 mendatang, pengelolaan Sekolah Menengah Kejuruan Negeri (SMKN) pe');

-- --------------------------------------------------------

--
-- Table structure for table `ijin_operasional`
--

CREATE TABLE `ijin_operasional` (
  `id` int(255) NOT NULL,
  `nama_kepsek` varchar(255) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `nosk` int(255) NOT NULL,
  `upload_file` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ijin_operasional`
--

INSERT INTO `ijin_operasional` (`id`, `nama_kepsek`, `nama_sekolah`, `nosk`, `upload_file`, `status`) VALUES
(12, 'Mulyadi Ab', 'SMK TELKOM MALANG', 22, 'idar.jpg', 1),
(2521, 'juki', 'smk leko', 7777, '1.PNG.PNG', 0),
(2522, '', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `typeuser` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `typeuser`) VALUES
('admin', 'admin', 'admin'),
('ijin', 'ijin', 'user'),
('mutasi', 'mutasi', 'user'),
('npsn', 'npsn', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `login_ijin`
--

CREATE TABLE `login_ijin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_ijin`
--

INSERT INTO `login_ijin` (`username`, `password`) VALUES
('ijin', 'ijin');

-- --------------------------------------------------------

--
-- Table structure for table `login_npsn`
--

CREATE TABLE `login_npsn` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_npsn`
--

INSERT INTO `login_npsn` (`username`, `password`) VALUES
('npsn', 'npsn');

-- --------------------------------------------------------

--
-- Table structure for table `mutasi`
--

CREATE TABLE `mutasi` (
  `id` int(255) NOT NULL,
  `nisn` int(10) NOT NULL,
  `nomutasi` int(255) NOT NULL,
  `npsn` int(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mutasi`
--

INSERT INTO `mutasi` (`id`, `nisn`, `nomutasi`, `npsn`, `tujuan`) VALUES
(1, 9977, 123, 22443, 'SMK Blitar'),
(2, 0, 999, 0, 'ok'),
(3, 123, 89, 0, 'msms'),
(4, 123, 89, 99, 'msms');

-- --------------------------------------------------------

--
-- Table structure for table `npsn`
--

CREATE TABLE `npsn` (
  `nosk` int(255) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kepala_sekolah` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `npsn`
--

INSERT INTO `npsn` (`nosk`, `nama_sekolah`, `alamat`, `kepala_sekolah`, `email`, `telp`, `status`) VALUES
(0, 'h', 'h', 'h', 'Haidaralvin@gmail.com', '999', 1),
(22, 'SMK Telkom Malang', 'Jl Danau Ranau', 'Mulyadi Ab', 'smktelkom@gmail.com', '034187654', 1),
(121, 'smk bayu', 'hehe', 'saya', 'haidaralvin@gmail.com', '09212', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id`, `nama`, `email`, `telp`, `judul`, `pesan`) VALUES
(2, 'jj', 'haidaralvin@gmail.com', '0999999', 'ajaj', 'iedede'),
(17, 'dar', 'dar', 'dar', 'dar', 'dar'),
(18, 'dar', 'dar', 'dar', 'dar', 'dar'),
(19, 'haha', 'hihih', 'h', 'h', 'h'),
(20, 'oke', 'deh', 'heh', 'js', 's'),
(21, 'mmore', 'w', 'w', 'w', 'w');

-- --------------------------------------------------------

--
-- Table structure for table `usernpsn`
--

CREATE TABLE `usernpsn` (
  `nonpsn` int(255) NOT NULL,
  `kepala_sekolah` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status_sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ijin_operasional`
--
ALTER TABLE `ijin_operasional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `npsn`
--
ALTER TABLE `npsn`
  ADD PRIMARY KEY (`nosk`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usernpsn`
--
ALTER TABLE `usernpsn`
  ADD PRIMARY KEY (`nonpsn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ijin_operasional`
--
ALTER TABLE `ijin_operasional`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2523;
--
-- AUTO_INCREMENT for table `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
