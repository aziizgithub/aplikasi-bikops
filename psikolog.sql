-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Apr 2020 pada 07.55
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bikops`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `psikolog`
--

CREATE TABLE `psikolog` (
  `idpsig` int(9) NOT NULL,
  `nmpsig` varchar(25) NOT NULL,
  `bidang` enum('Anak-Anak','Remaja','Dewasa') NOT NULL,
  `jk` enum('P','L') NOT NULL,
  `kota` enum('Bandar Lampung','Yogyakarta','Jakarta','Bandung','Kalimantan','-') NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(14) NOT NULL,
  `jlh_kasus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `psikolog`
--

INSERT INTO `psikolog` (`idpsig`, `nmpsig`, `bidang`, `jk`, `kota`, `email`, `nohp`, `jlh_kasus`) VALUES
(1, 'jaja ng', 'Anak-Anak', 'L', 'Jakarta', 'jaja@gmail.com', '08765557668', 2),
(2, 'citra ', 'Dewasa', 'P', 'Bandung', 'citra@gmail.com', '097865432456', 0),
(3, 'jaja ', 'Remaja', 'L', 'Jakarta', 'jaija@gmail.com', '08765557668', 3),
(4, 'rahman', 'Remaja', 'L', 'Jakarta', 'rahman@gmail.com', '08765557668', 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `psikolog`
--
ALTER TABLE `psikolog`
  ADD PRIMARY KEY (`idpsig`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `psikolog`
--
ALTER TABLE `psikolog`
  MODIFY `idpsig` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
