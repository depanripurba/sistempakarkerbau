-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 17 Jun 2024 pada 16.19
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
-- Struktur dari tabel `tbl_basisaturan`
--

DROP TABLE IF EXISTS `tbl_basisaturan`;
CREATE TABLE IF NOT EXISTS `tbl_basisaturan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode_gejala` varchar(10) NOT NULL,
  `nama_gejala` varchar(200) NOT NULL,
  `kode_penyakit` varchar(10) NOT NULL,
  `nama_penyakit` varchar(200) NOT NULL,
  `nilai` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbl_basisaturan`
--

INSERT INTO `tbl_basisaturan` (`id`, `kode_gejala`, `nama_gejala`, `kode_penyakit`, `nama_penyakit`, `nilai`) VALUES
(4, 'g03', 'Gejala ketiga', 'adfa', 'sdfasdfas', 1.3),
(3, 'g02', 'Gejala Kedua', 'adfa', 'sdfasdfas', 0.4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gejala`
--

DROP TABLE IF EXISTS `tbl_gejala`;
CREATE TABLE IF NOT EXISTS `tbl_gejala` (
  `kode_gejala` varchar(10) NOT NULL,
  `nama_gejala` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`kode_gejala`, `nama_gejala`) VALUES
('g01', 'Gejala pertama'),
('g02', 'Gejala Kedua'),
('g03', 'Gejala ketiga'),
('g08', 'Tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`username`, `password`, `nama`) VALUES
('admin', '$2y$10$MjgNUoojMxAMMSvnkm2.tuf8IkPTgvHKIbEkzWVSnfZa5d/MLH6cu', 'Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penyakit`
--

DROP TABLE IF EXISTS `tbl_penyakit`;
CREATE TABLE IF NOT EXISTS `tbl_penyakit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode_penyakit` varchar(20) NOT NULL,
  `nama_penyakit` varchar(200) NOT NULL,
  `solusi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tbl_penyakit`
--

INSERT INTO `tbl_penyakit` (`id`, `kode_penyakit`, `nama_penyakit`, `solusi`) VALUES
(1, 'po1', 'penyakit1', '-makan\r\n-minum'),
(3, 'ffasdf', 'asdfasdf', '-asdfasdfasfa\r\n-1233123'),
(4, 'adfa', 'sdfasdfas', '-fasdfasdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
