-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 04:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spkerbau`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_basisaturan`
--

CREATE TABLE `tbl_basisaturan` (
  `id` int(11) NOT NULL,
  `kode_gejala` varchar(10) NOT NULL,
  `nama_gejala` varchar(200) NOT NULL,
  `kode_penyakit` varchar(10) NOT NULL,
  `nama_penyakit` varchar(200) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tbl_basisaturan`
--

INSERT INTO `tbl_basisaturan` (`id`, `kode_gejala`, `nama_gejala`, `kode_penyakit`, `nama_penyakit`, `nilai`) VALUES
(5, 'G01', 'Demam Tinggi', '1', 'Septicemia Epizootica Tingkat Akut', 0.5),
(6, 'G02', 'Lemas dan Lesu', '1', 'Septicemia Epizootica Tingkat Akut', 0.625),
(7, 'G03', 'Gangguan Pernapasan', '1', 'Septicemia Epizootica Tingkat Akut', 0.375),
(8, 'G04', 'Kehilangan Nafsu Makan ', '1', 'Septicemia Epizootica Tingkat Akut', 0.375),
(9, 'G05', 'Keluar lendir dari hidung', '1', 'Septicemia Epizootica Tingkat Akut', 0.25),
(10, 'G08', 'Pembengkakan Leher', '1', 'Septicemia Epizootica Tingkat Akut', 0.25),
(11, 'G09', 'Cairan Tubuh Yang Berlebihan', '1', 'Septicemia Epizootica Tingkat Akut', 0.5),
(12, 'G01', 'Demam Tinggi', '2', 'Septicemia Epizootica Tingkat Kronis', 0.83),
(13, 'G02', 'Lemas dan Lesu', '2', 'Septicemia Epizootica Tingkat Kronis', 0.16),
(14, 'G06', 'Penurunan Berat Badan', '2', 'Septicemia Epizootica Tingkat Kronis', 0.33),
(15, 'G07', 'Anemia', '2', 'Septicemia Epizootica Tingkat Kronis', 0.16),
(17, 'G10', 'Infeksi yang Berulang', '2', 'Septicemia Epizootica Tingkat Kronis', 0.16),
(18, 'G11', 'Penurunan Produktifitas', '2', 'Septicemia Epizootica Tingkat Kronis', 0.33),
(19, 'G03', 'Gangguan Pernapasan', '2', 'Septicemia Epizootica Tingkat Kronis', 0.16),
(20, 'G12', 'Kondisi Kulit yang Kronis', '2', 'Septicemia Epizootica Tingkat Kronis', 0.66),
(21, 'G13', 'Hewan Mati', '2', 'Septicemia Epizootica Tingkat Kronis', 0.16);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `kode_gejala` varchar(10) NOT NULL,
  `nama_gejala` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`kode_gejala`, `nama_gejala`) VALUES
('G05', 'Keluar lendir dari hidung'),
('G04', 'Kehilangan Nafsu Makan '),
('G03', 'Gangguan Pernapasan'),
('G02', 'Lemas dan Lesu'),
('G01', 'Demam Tinggi'),
('G06', 'Penurunan Berat Badan'),
('G07', 'Anemia'),
('G08', 'Pembengkakan Leher'),
('G09', 'Cairan Tubuh Yang Berlebihan'),
('G10', 'Infeksi yang Berulang'),
('G11', 'Penurunan Produktifitas'),
('G12', 'Kondisi Kulit yang Kronis'),
('G13', 'Hewan Mati');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`username`, `password`, `nama`) VALUES
('admin', '$2y$10$MjgNUoojMxAMMSvnkm2.tuf8IkPTgvHKIbEkzWVSnfZa5d/MLH6cu', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyakit`
--

CREATE TABLE `tbl_penyakit` (
  `id` int(11) NOT NULL,
  `kode_penyakit` varchar(20) NOT NULL,
  `nama_penyakit` varchar(200) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tbl_penyakit`
--

INSERT INTO `tbl_penyakit` (`id`, `kode_penyakit`, `nama_penyakit`, `solusi`) VALUES
(5, '1', 'Septicemia Epizootica Tingkat Akut', '- Memberi vaksinisasi untuk mencegah penyakit semakin menular.\r\n- Melakukan isolisasi dan biosecurity dengan memisahkan hewan yang terinfeksi untuk mencegah penyebaran penyakit ke hewan lain.\r\n- Memberi antibiotik seperti sulfonamida atau penisilin.'),
(6, '2', 'Septicemia Epizootica Tingkat Kronis', '- Memberi vaksinisasi.\r\n- Memberi vitamin.\r\n- Memberi antibiotik atau anti bakterinya dengan dosis yang tepat untuk jangka panjangnya.\r\n- Memberi obat antihistamin untuk mengurangi atau mencegah gejala alergi.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_riwayat`
--

CREATE TABLE `tbl_riwayat` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `no_hp` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nama_penyakit` varchar(200) NOT NULL,
  `hasil_konsultasi` float NOT NULL,
  `tanggal_konsultasi` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tbl_riwayat`
--

INSERT INTO `tbl_riwayat` (`id`, `nama`, `no_hp`, `alamat`, `nama_penyakit`, `hasil_konsultasi`, `tanggal_konsultasi`) VALUES
(2, 'Depanri ', '0809808', 'MEdan', 'Septicemia Epizootica Tingkat Kronis', 0.725, 'Tuesday, 18-06-2024'),
(3, 'asdfas', 'fasdfasdf', 'asdfasdf', 'Septicemia Epizootica Tingkat Akut', 0.497, 'Tuesday, 18-06-2024');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_basisaturan`
--
ALTER TABLE `tbl_basisaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_penyakit`
--
ALTER TABLE `tbl_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_riwayat`
--
ALTER TABLE `tbl_riwayat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_basisaturan`
--
ALTER TABLE `tbl_basisaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_penyakit`
--
ALTER TABLE `tbl_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_riwayat`
--
ALTER TABLE `tbl_riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
