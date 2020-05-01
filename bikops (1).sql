-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2020 pada 18.23
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
-- Struktur dari tabel `case`
--

CREATE TABLE `case` (
  `id_case` int(11) NOT NULL,
  `nmcase` varchar(128) NOT NULL,
  `kategoricase` enum('Anak-Anak','Remaja','Dewasa','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `case`
--

INSERT INTO `case` (`id_case`, `nmcase`, `kategoricase`) VALUES
(1, 'kekerasan', 'Anak-Anak'),
(2, 'pelecehan', 'Remaja'),
(3, 'curhat', 'Dewasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `pengirim` int(11) NOT NULL,
  `penerima` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`id_chat`, `pengirim`, `penerima`, `pesan`, `time`) VALUES
(157, 1, 1, 'asasas', 1587790297),
(158, 1, 1, 'asasas', 1587790300),
(159, 1, 1, 'hahahaaaa', 1587790306),
(160, 1, 1, 'asasas', 1587790311),
(161, 1, 1, 'asas', 1587790335),
(162, 1, 1, '444444', 1587790343),
(163, 1, 1, '435345', 1587790361),
(164, 3, 1, 'asas', 1587790639),
(165, 1, 1, 'asas', 1587790645),
(166, 1, 4, '12121', 1587790649),
(167, 2, 2, '12121212', 1587790672),
(168, 1, 1, 'aasas', 1587790697);

-- --------------------------------------------------------

--
-- Struktur dari tabel `client`
--

CREATE TABLE `client` (
  `iduser` int(9) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jk` enum('P','L','-') NOT NULL,
  `umur` varchar(2) NOT NULL,
  `kota` enum('Bandar Lampung','Yogyakarta','Jakarta','Bandung','Kalimantan','-') NOT NULL,
  `nohp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `client`
--

INSERT INTO `client` (`iduser`, `nama`, `email`, `jk`, `umur`, `kota`, `nohp`) VALUES
(2, 'vania', 'vani@gmail.com', 'P', '18', 'Yogyakarta', '09867888899'),
(3, 'safira', 'client@gmail.com', 'L', '19', 'Bandar Lampung', '08566667778'),
(14, 'Irfan', 'ir@as.su', 'L', '12', 'Yogyakarta', '0812');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `latest_chat`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `latest_chat` (
`latest` int(11)
,`pesan` text
,`penerima` int(11)
,`pengirim` int(11)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `psikiater`
--

CREATE TABLE `psikiater` (
  `idpsik` int(9) NOT NULL,
  `nmpsik` varchar(25) NOT NULL,
  `bidang` enum('Anak-Anak','Remaja','Dewasa') NOT NULL,
  `penanganan` enum('Obat','Terapi') NOT NULL,
  `jk` enum('P','L') NOT NULL,
  `kota` enum('Bandar Lampung','Yogyakarta','Jakarta','Bandung','Kalimantan','-') NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `psikiater`
--

INSERT INTO `psikiater` (`idpsik`, `nmpsik`, `bidang`, `penanganan`, `jk`, `kota`, `email`, `nohp`) VALUES
(1, 'bejo', 'Anak-Anak', 'Obat', 'L', 'Bandar Lampung', 'bejo@gmail.com', '07765678'),
(2, 'Lutfi', 'Remaja', 'Obat', 'L', 'Yogyakarta', 'iluthfi919@gmail.com', '085273434645');

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
  `nohp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `psikolog`
--

INSERT INTO `psikolog` (`idpsig`, `nmpsig`, `bidang`, `jk`, `kota`, `email`, `nohp`) VALUES
(1, 'jaja sujajaaaaa', 'Anak-Anak', 'L', 'Jakarta', 'jaja@gmail.com', '08765557668'),
(2, 'citra ', 'Dewasa', 'P', 'Bandung', 'citra@gmail.com', '097865432456');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `recent`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `recent` (
`pengirim` int(11)
,`penerima` int(11)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpsig` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `case` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(9) NOT NULL,
  `nmuser` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` enum('psikolog','client','psikiater','admin') NOT NULL,
  `status` enum('aktif','nonaktif','','') NOT NULL,
  `login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `logout` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `nmuser`, `password`, `role`, `status`, `login`, `logout`) VALUES
(2, 'vani@gmail.com', 'vani', 'client', 'aktif', '2020-04-18 12:29:50', '2020-03-05 20:16:20'),
(3, 'client@gmail.com', 'safira', 'client', 'aktif', '2020-04-25 01:25:47', '2020-04-25 01:25:47'),
(4, 'bejo@gmail.com', 'stephani', 'psikiater', 'aktif', '2020-04-18 12:29:50', '2020-03-05 07:29:17'),
(5, 'admin', 'admin', 'admin', 'aktif', '2020-04-20 15:37:36', '2020-04-20 15:37:36'),
(16, 'jaja@gmail.com', '12', 'psikolog', 'aktif', '2020-04-25 08:55:46', '2020-04-25 01:03:55');

-- --------------------------------------------------------

--
-- Struktur untuk view `latest_chat`
--
DROP TABLE IF EXISTS `latest_chat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `latest_chat`  AS  select max(`chat`.`id_chat`) AS `latest`,`chat`.`pesan` AS `pesan`,`chat`.`penerima` AS `penerima`,`chat`.`pengirim` AS `pengirim` from `chat` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `recent`
--
DROP TABLE IF EXISTS `recent`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `recent`  AS  select distinct `chat`.`pengirim` AS `pengirim`,`chat`.`penerima` AS `penerima` from `chat` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `case`
--
ALTER TABLE `case`
  ADD PRIMARY KEY (`id_case`);

--
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indeks untuk tabel `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`iduser`);

--
-- Indeks untuk tabel `psikiater`
--
ALTER TABLE `psikiater`
  ADD PRIMARY KEY (`idpsik`);

--
-- Indeks untuk tabel `psikolog`
--
ALTER TABLE `psikolog`
  ADD PRIMARY KEY (`idpsig`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `case`
--
ALTER TABLE `case`
  MODIFY `id_case` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT untuk tabel `client`
--
ALTER TABLE `client`
  MODIFY `iduser` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `psikiater`
--
ALTER TABLE `psikiater`
  MODIFY `idpsik` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `psikolog`
--
ALTER TABLE `psikolog`
  MODIFY `idpsig` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
