-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2022 at 09:22 AM
-- Server version: 10.5.17-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u8875111_project_keuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `anak_id` int(150) NOT NULL,
  `umur_sekarang` int(150) NOT NULL,
  `tingkat_sekolah` enum('0','1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `sisa_sekolah` int(150) NOT NULL,
  `asumsi_kuliah` int(150) NOT NULL,
  `inflasi_kuliah` int(150) NOT NULL,
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

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`anak_id`, `umur_sekarang`, `tingkat_sekolah`, `sisa_sekolah`, `asumsi_kuliah`, `inflasi_kuliah`, `biaya_semester`, `biaya_kuliah`, `biaya_hidup`, `hidup_kuliah`, `biaya_buku`, `biaya_pt`, `biaya_seluruhnya`, `kuliah_hidup`, `buku_biaya`, `biaya_penelitian`, `total_biaya`, `return_investasi`, `dana_investasi`) VALUES
(1, 4, '1', 14, 5, 5, 7000000, 1385952120, 20000000, 395986320, 5000000, 50000000, 2147483647, 2147483647, 60000000, 25000000, 2147483647, 6, 194882850),
(3, 5, '1', 13, 5, 5, 7000000, 1319954400, 2000000, 377129828, 5000000, 50000000, 2147483647, 2147483647, 60000000, 25000000, 2147483647, 6, 209504751),
(4, 6, '1', 5, 5, 7, 1197237551, 2000000, 342067872, 5000000, 50000000, 2147483647, 12000000, 2147483647, 600000000, 25000000, 2147483647, 6, 246864528);

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
(1, 'BANK BRI', 'Nugraha', '0933-3393', -983850009),
(3, 'BANK BCA', 'Nugraha', '18280-232-23', -5900969300);

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
(20, 'Biaya Bunga'),
(21, 'Dividen'),
(22, 'Biaya Pangan'),
(23, 'Biaya Pembantu'),
(24, 'Biaya Keperluan Cuci & Kebersihan'),
(25, 'Biaya listrik'),
(26, 'Biaya Telepon'),
(27, 'Biaya Air'),
(28, 'Biaya Kebersihan Taman & Lampu'),
(29, 'Biaya Salon & Babershop'),
(30, 'Biaya Cadangan Perbaikan Rumah'),
(31, 'Biaya bensin dan Parkir/transportasi'),
(32, 'Biaya Pendidikan Anak setiap bulan'),
(33, 'Biaya Asuransi'),
(34, 'Biaya/sumbangan Pesta keluarga & Teman'),
(35, 'Biaya Makanan diluar Rumah'),
(36, 'Biaya Majalah dan Koran'),
(37, 'Biaya Cadangan dana Darurat'),
(38, 'Biaya Lain lain'),
(39, 'Biaya Cicilan Rumah'),
(40, 'Biaya Cicilan Mobil'),
(41, 'Biaya Cicilan Elektronik'),
(42, 'Biaya Tabungan Pensiun'),
(43, 'Biaya Tabungan Pendidikan'),
(45, 'Pendapatan Bunga'),
(46, 'Pemasukan Lain Lain'),
(47, 'Biaya Sandang');

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
(15, 25, 56, 31, 5000000, 6, 2147483647, 5, 2147483647, 7, 504784259),
(16, 25, 56, 31, 5000000, 5, 2147483647, 5, 2147483647, 6, 504784259);

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
-- Table structure for table `tb_dump`
--

CREATE TABLE `tb_dump` (
  `dump_id` int(255) NOT NULL,
  `nama_dump` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dump`
--

INSERT INTO `tb_dump` (`dump_id`, `nama_dump`) VALUES
(1, 'tes'),
(2, 'tes2'),
(3, 'tes'),
(4, 'tes');

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
(2, '2022-12-01', 'Pengeluaran', 22, 1200000, 'Biaya Pangan', 3),
(3, '2022-12-01', 'Pengeluaran', 39, 0, 'Cicilan Rumah', 3),
(4, '2022-12-09', 'Pemasukan', 18, 4000000, 'Gaji Isteri', 3),
(5, '2022-11-01', 'Pengeluaran', 23, 300000, 'Biaya Pembantu', 3),
(6, '2022-11-01', 'Pengeluaran', 30, 250000, 'Cadangan Perbaikan Rumah', 3),
(7, '2022-11-01', 'Pengeluaran', 26, 100000, 'Biaya Telepon', 3),
(8, '2022-11-03', 'Pengeluaran', 47, 750000, 'Biaya Sandang', 1),
(9, '2022-11-03', 'Pengeluaran', 28, 30000, 'Biaya kebersihan taman', 3),
(10, '2022-11-03', 'Pengeluaran', 40, 0, 'Cicilan Mobil', 3),
(11, '2022-11-03', 'Pengeluaran', 27, 100000, 'Biaya air', 3),
(12, '2022-11-04', 'Pemasukan', 21, 0, 'Dividen', 1),
(13, '2022-11-04', 'Pengeluaran', 24, 50000, 'Laundry Pakaian', 1),
(14, '2022-11-04', 'Pemasukan', 45, 100000, 'Bunga Tabungan', 3),
(16, '2022-12-09', 'Pemasukan', 17, 4000000, 'Gaji Suami', 1),
(18, '2022-11-09', 'Pengeluaran', 42, 500000, 'Tabungan Pensiun', 3),
(19, '2022-11-14', 'Pengeluaran', 33, 250000, 'Biaya asuransi', 1),
(20, '2022-11-17', 'Pengeluaran', 38, 200009, 'Biaya Lain lain', 1),
(21, '2022-11-22', 'Pemasukan', 17, 4000000, 'Gaji Suami', 1),
(22, '2022-11-22', 'Pengeluaran', 22, 1200000, 'Biaya Pangan', 3),
(23, '2022-11-22', 'Pengeluaran', 39, 0, 'Cicilan Rumah', 3),
(24, '2022-12-06', 'Pengeluaran', 31, 150000, 'Biaya Bensin', 3),
(25, '2022-12-06', 'Pemasukan', 19, 750000, 'Jualan Baju', 3),
(26, '2022-11-25', 'Pengeluaran', 36, 50000, 'Biaya majalah', 3),
(27, '2022-12-06', 'Pengeluaran', 32, 1000000, 'Biaya pendidikan anak', 3),
(28, '2022-12-06', 'Pengeluaran', 25, 250000, 'Biaya Listrik', 3),
(29, '2022-11-30', 'Pengeluaran', 37, 442500, 'Biaya cadangan dana darurat', 3),
(30, '2022-11-10', 'Pemasukan', 19, 750000, 'Usaha Kolak', 3);

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
(8, 'Nugraha', 'user', '202cb962ac59075b964b07152d234b70', '__482937136_avatar.png', 'manajemen'),
(9, 'Ferdiando Manurung', 'ferdiando@gmail.com', '202cb962ac59075b964b07152d234b70', '__482937136_avatar.png', 'administrator'),
(12, 'Sefrizal Manurung', 'rizal@gmail.com', '202cb962ac59075b964b07152d234b70', '___482937136_avatar.png', 'manajemen'),
(14, 'Ferdiando Manurung', 'ferdiando@gmail.com', '202cb962ac59075b964b07152d234b70', '__482937136_avatar.png', 'manajemen'),
(15, 'Adler Manurung', 'adler@gmail.com', '202cb962ac59075b964b07152d234b70', '1703769005__user.png', 'administrator');

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
-- Indexes for table `tb_dump`
--
ALTER TABLE `tb_dump`
  ADD PRIMARY KEY (`dump_id`);

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
  MODIFY `anak_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `pensiun`
--
ALTER TABLE `pensiun`
  MODIFY `id_pensiun` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `piutang`
--
ALTER TABLE `piutang`
  MODIFY `piutang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_dump`
--
ALTER TABLE `tb_dump`
  MODIFY `dump_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tingkat`
--
ALTER TABLE `tingkat`
  MODIFY `tingkat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
