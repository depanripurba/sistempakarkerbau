-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 18 Jun 2024 pada 14.32
-- Versi server: 8.3.0
-- Versi PHP: 8.1.28

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
-- Struktur dari tabel `tbl_riwayat`
--

DROP TABLE IF EXISTS `tbl_riwayat`;
CREATE TABLE IF NOT EXISTS `tbl_riwayat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `no_hp` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nama_penyakit` varchar(200) NOT NULL,
  `hasil_konsultasi` float NOT NULL,
  `tanggal_konsultasi` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbl_riwayat`
--

INSERT INTO `tbl_riwayat` (`id`, `nama`, `no_hp`, `alamat`, `nama_penyakit`, `hasil_konsultasi`, `tanggal_konsultasi`) VALUES
(1, 'Depanri Purba', '081312131231', 'Desa Aek Dakka', 'asdfasdf', 0.289, 'Tuesday, 18-06-2024');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
