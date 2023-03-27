-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 05:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_keuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `anak_id` int(150) NOT NULL,
  `umur_sekarang` int(150) NOT NULL,
  `tingkat_sekolah` enum('SD Kelas 1','SD Kelas 2','SD Kelas 3','SD Kelas 4','SD Kelas 5','SD Kelas 6','SMP Kelas 1','SMP Kelas 2','SMP Kelas 3') NOT NULL,
  `sisa_sekolah` int(150) NOT NULL,
  `asumsi_kuliah` int(150) NOT NULL,
  `biaya_semester` int(150) NOT NULL,
  `biaya_kuliah` int(150) NOT NULL,
  `biaya_hidup` int(150) NOT NULL,
  `hidup_kuliah` int(150) NOT NULL,
  `biaya_buku` int(150) NOT NULL,
  `biaya_pt` int(150) NOT NULL,
  `biaya_seluruhnya` int(150) NOT NULL,
  `kuliah_hidup` int(150) NOT NULL,
  `buku_biaya` int(150) NOT NULL,
  `biaya_penelitian` int(150) NOT NULL,
  `total_biaya` int(150) NOT NULL,
  `return_investasi` int(150) NOT NULL,
  `dana_investasi` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` int(11) NOT NULL,
  `bank_nama` varchar(255) NOT NULL,
  `bank_nomor` varchar(255) NOT NULL,
  `bank_pemilik` varchar(255) NOT NULL,
  `bank_saldo` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `bank_nama`, `bank_nomor`, `bank_pemilik`, `bank_saldo`) VALUES
(1, 'BANK BRI', 'Nugraha', '0933-3393', 25800000),
(3, 'BANK BCA', 'Nugraha', '18280-232-23', -5914496800);

-- --------------------------------------------------------

--
-- Table structure for table `hutang`
--

CREATE TABLE `hutang` (
  `hutang_id` int(11) NOT NULL,
  `hutang_tanggal` date NOT NULL,
  `hutang_nominal` int(11) NOT NULL,
  `hutang_keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hutang`
--

INSERT INTO `hutang` (`hutang_id`, `hutang_tanggal`, `hutang_nominal`, `hutang_keterangan`) VALUES
(2, '2019-06-01', 10000, 'bayar gorengan\r\n'),
(5, '2022-11-06', 5000000, 'bayar cicilan handphone');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori`) VALUES
(17, 'Gaji Suami'),
(18, 'Gaji Isteri'),
(19, 'Usaha Sampingan'),
(20, 'Bunga'),
(21, 'Dividen'),
(22, 'Biaya Pangan'),
(23, 'Biaya Pembantu'),
(24, 'Biaya Keperluan Cuci & Kebersihan'),
(25, 'Biaya listrik'),
(26, 'Biaya Telepon'),
(27, 'Biaya Air'),
(28, 'Biaya Kebersihan Taman & Lampu'),
(29, 'Salon & Babershop'),
(30, 'Cadangan Perbaikan Rumah'),
(31, 'Biaya bensin dan Parkir/transportasi'),
(32, 'Biaya Pendidikan Anak setiap bulan'),
(33, 'Biaya Asuransi'),
(34, 'Biaya/sumbangan Pesta keluarga & Teman'),
(35, 'Biaya Makanan diluar Rumah'),
(36, 'Majalah dan Koran'),
(37, 'Cadangan dan Darurat'),
(38, 'Lain lain'),
(39, 'Cicilan Rumah'),
(40, 'Cicilan Mobil'),
(41, 'Cicilan Elektronik'),
(42, 'Tabungan Pensiun'),
(43, 'Tabungan Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `pensiun`
--

CREATE TABLE `pensiun` (
  `id_pensiun` int(40) NOT NULL,
  `umur_sekarang` int(40) NOT NULL,
  `umur_pensiun` int(40) NOT NULL,
  `jumlah_sisa` int(100) NOT NULL,
  `biaya_berdua` int(100) NOT NULL,
  `asumsi_inflasi` int(100) NOT NULL,
  `biaya_pensiun` int(100) NOT NULL,
  `bunga_deposito` int(100) NOT NULL,
  `total_dana` int(100) NOT NULL,
  `return_investasi` int(100) NOT NULL,
  `simpanan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pensiun`
--

INSERT INTO `pensiun` (`id_pensiun`, `umur_sekarang`, `umur_pensiun`, `jumlah_sisa`, `biaya_berdua`, `asumsi_inflasi`, `biaya_pensiun`, `bunga_deposito`, `total_dana`, `return_investasi`, `simpanan`) VALUES
(1, 33, 56, 23, 5000000, 5, 15357, 5, 3700000, 6, 622300),
(12, 30, 56, 26, 6000000, 5, 1778000000, 6, 4300000, 6, 580000),
(13, 24, 56, 32, 50000, 5, 2147483647, 5, 2147483647, 6, 4939124),
(14, 25, 56, 31, 6000000, 5, 2147483647, 5, 2147483647, 6, 5047842);

-- --------------------------------------------------------

--
-- Table structure for table `piutang`
--

CREATE TABLE `piutang` (
  `piutang_id` int(11) NOT NULL,
  `piutang_tanggal` date NOT NULL,
  `piutang_nominal` int(11) NOT NULL,
  `piutang_keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `piutang`
--

INSERT INTO `piutang` (`piutang_id`, `piutang_tanggal`, `piutang_nominal`, `piutang_keterangan`) VALUES
(1, '2019-06-22', 1000000, 'Hutang oleh rahman'),
(3, '2019-06-23', 70000, 'Hutang oleh jony untuk belu pulsa'),
(4, '2022-11-04', 5000, 'piutang');

-- --------------------------------------------------------

--
-- Table structure for table `tingkat`
--

CREATE TABLE `tingkat` (
  `tingkat_id` int(11) NOT NULL,
  `tingkat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tingkat`
--

INSERT INTO `tingkat` (`tingkat_id`, `tingkat`) VALUES
(4, 'SD Kelas 1'),
(5, 'SD Kelas 2'),
(6, 'SD Kelas 3'),
(7, 'SD Kelas 4'),
(8, 'SD Kelas 5'),
(9, 'SD Kelas 6'),
(11, 'SMP Kelas 1'),
(12, 'SMP Kelas 2'),
(13, 'SMP Kelas 3'),
(14, 'SMA Kelas 1'),
(15, 'SMA Kelas 2'),
(16, 'SMA Kelas 3');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `transaksi_tanggal` date NOT NULL,
  `transaksi_jenis` enum('Pengeluaran','Pemasukan','Cicilan') NOT NULL,
  `transaksi_kategori` int(11) NOT NULL,
  `transaksi_nominal` int(11) NOT NULL,
  `transaksi_keterangan` text NOT NULL,
  `transaksi_bank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `transaksi_tanggal`, `transaksi_jenis`, `transaksi_kategori`, `transaksi_nominal`, `transaksi_keterangan`, `transaksi_bank`) VALUES
(1, '2022-12-01', 'Pemasukan', 17, 4000000, 'Gaji Suami', 1),
(2, '2022-12-01', 'Pengeluaran', 22, 1200000, 'Biaya Pangan', 3),
(3, '2022-12-01', 'Cicilan', 39, 50000000, 'Cicilan Rumah', 3),
(4, '2022-11-01', 'Pemasukan', 17, 5000000, 'Gaji Suami', 3),
(5, '2022-11-01', 'Pengeluaran', 23, 3000000, 'Biaya Pembantu', 3),
(6, '2022-11-01', 'Cicilan', 40, 40000000, 'Cicilan Mobil', 3),
(7, '2022-11-01', 'Cicilan', 40, 8000000, 'Cicilan mobil', 3),
(8, '2022-11-03', 'Pemasukan', 17, 5000000, 'Gaji Suami', 1),
(9, '2022-11-03', 'Pengeluaran', 22, 12000000, 'Biaya Pangan', 3),
(10, '2022-11-03', 'Cicilan', 40, 2147483647, 'Cicilan Mobil', 3),
(11, '2022-11-03', 'Pengeluaran', 27, 3000000, 'Biaya air', 3),
(12, '2022-11-04', 'Pemasukan', 17, 4000000, 'Gaji suami', 1),
(13, '2022-11-04', 'Pengeluaran', 22, 1100000, 'Biaya Pangan', 1),
(14, '2022-11-04', 'Cicilan', 39, 800000000, 'Cicilan rumah', 3),
(15, '2022-11-07', 'Pemasukan', 17, 400000, 'Gaji suami', 3),
(16, '2022-11-09', 'Pemasukan', 17, 4000000, 'Biaya Suami', 1),
(17, '2022-11-09', 'Pengeluaran', 22, 1200000, 'Biaya Pangan', 3),
(18, '2022-11-09', 'Cicilan', 42, 500000, 'Tabungan Pensiun', 3),
(19, '2022-11-14', 'Pemasukan', 33, 500000, 'biaya asuransi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_foto` varchar(100) DEFAULT NULL,
  `user_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_foto`, `user_level`) VALUES
(1, 'Teguh Nugraha', 'admin', '21232f297a57a5a743894a0e4a801fc3', '482937136_avatar.png', 'administrator'),
(2, 'Dimas', 'Staff Admin', 'admin', NULL, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`anak_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `hutang`
--
ALTER TABLE `hutang`
  ADD PRIMARY KEY (`hutang_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `pensiun`
--
ALTER TABLE `pensiun`
  ADD PRIMARY KEY (`id_pensiun`);

--
-- Indexes for table `piutang`
--
ALTER TABLE `piutang`
  ADD PRIMARY KEY (`piutang_id`);

--
-- Indexes for table `tingkat`
--
ALTER TABLE `tingkat`
  ADD PRIMARY KEY (`tingkat_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `anak_id` int(150) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hutang`
--
ALTER TABLE `hutang`
  MODIFY `hutang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `pensiun`
--
ALTER TABLE `pensiun`
  MODIFY `id_pensiun` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `piutang`
--
ALTER TABLE `piutang`
  MODIFY `piutang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tingkat`
--
ALTER TABLE `tingkat`
  MODIFY `tingkat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
