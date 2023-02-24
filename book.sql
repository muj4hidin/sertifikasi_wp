-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2023 pada 08.36
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `book`
--

CREATE TABLE `book` (
  `id_buku` varchar(50) NOT NULL,
  `kategori` varchar(250) NOT NULL,
  `nama_buku` varchar(250) NOT NULL,
  `harga` bigint(250) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_penerbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `book`
--

INSERT INTO `book` (`id_buku`, `kategori`, `nama_buku`, `harga`, `stok`, `id_penerbit`) VALUES
('B1001', 'Bisnis', 'Bisnis Online', 75000, 9, 'SP01'),
('B1002', 'Bisnis', 'Etika Bisnis dan Tanggung Jawab Sosial ', 67500, 20, 'SP01'),
('K1001', 'Keilmuan', 'Analisis & Perancangan Sistem Informasi ', 50000, 60, 'SP01'),
('K1002', 'Keilmuan', 'Artifical Intelligence ', 45000, 60, 'SP01'),
('K2003', 'Keilmuan', 'Autocad 3 Dimensi', 40000, 25, 'SP01'),
('K3004', 'Keilmuan', 'Cloud Computing Technology', 85000, 15, 'SP01'),
('N1001', 'Novel', 'Cahaya di Penjuru Hati', 68000, 100, 'SPO2'),
('N1002', 'Novel', 'Aku Ingin Cerita', 48000, 12, 'SP03');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `book`
--
ALTER TABLE `book`
  ADD UNIQUE KEY `id_buku` (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
