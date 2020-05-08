-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2020 pada 20.14
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040029`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat_musik`
--

CREATE TABLE `alat_musik` (
  `id` int(11) NOT NULL,
  `nama_alat` char(15) NOT NULL,
  `merk` char(15) NOT NULL,
  `cara_permainan` char(15) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alat_musik`
--

INSERT INTO `alat_musik` (`id`, `nama_alat`, `merk`, `cara_permainan`, `harga`, `gambar`) VALUES
(1, 'Gitar', 'Yamaha', 'Dipetik', 1999000, 'gitar.jpg'),
(2, 'Bass', 'Yamaha', 'Dipetik', 2500000, 'bass.jpg'),
(3, 'Drum', 'Yamaha', 'Dipukul', 10000000, 'drum.jpg'),
(4, 'pianika', 'Speeds', 'Ditekan', 80000, 'pianika.jpg'),
(5, 'Piano', 'Yamaha', 'Ditekan', 9000000, 'piano.jpg'),
(6, 'Terompet', 'Ostrava', 'Ditiup', 9500000, 'terompet.jpg'),
(7, 'Ukulele', 'Yamaha', 'Dipetik', 850000, 'ukulele.jpg'),
(8, 'Suling', 'Yamaha', 'Ditiup', 150000, 'suling.jpg'),
(9, 'Harva', 'Gaia lever', 'Dipetik', 4850000, 'harva.jpg'),
(10, 'Klarinet', 'Yamaha', 'Ditiup', 1850000, 'klarinet.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
