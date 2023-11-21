-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2023 pada 08.21
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2106077_garnis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rental_mobil`
--

CREATE TABLE `rental_mobil` (
  `id` int(11) NOT NULL,
  `nama_penyewa` varchar(30) NOT NULL,
  `tanggal_penyewaan` date NOT NULL,
  `tipe_mobil` varchar(30) NOT NULL,
  `durasi_peminjaman` int(11) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rental_mobil`
--

INSERT INTO `rental_mobil` (`id`, `nama_penyewa`, `tanggal_penyewaan`, `tipe_mobil`, `durasi_peminjaman`, `email`) VALUES
(1, 'Budi', '2023-11-21', 'SUV', 3, 'budidoremi@gmail.com'),
(2, 'Abi', '2023-12-09', 'Sedan', 2, 'abiaja@gmail.com'),
(3, 'garnis', '2024-01-01', 'Minivan', 7, 'garniskirani@gmail.com'),
(5, 'Deya', '2023-07-03', 'Sedan', 6, 'deyaaa@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rental_mobil`
--
ALTER TABLE `rental_mobil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `rental_mobil`
--
ALTER TABLE `rental_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
