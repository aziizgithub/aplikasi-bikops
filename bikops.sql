-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 06:05 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

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
-- Table structure for table `psikiater`
--

CREATE TABLE `psikiater` (
  `idpsik` int(9) NOT NULL,
  `nmpsik` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `bidang` enum('Anak-Anak','Remaja','Dewasa') NOT NULL,
  `penanganan` enum('Obat','Terapi') NOT NULL,
  `jk` enum('P','L') NOT NULL,
  `kota` enum('Bandar Lampung','Yogyakarta','Jakarta','Bandung','Kalimantan','-') NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(14) NOT NULL,
  `login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `logout` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psikiater`
--

INSERT INTO `psikiater` (`idpsik`, `nmpsik`, `password`, `bidang`, `penanganan`, `jk`, `kota`, `email`, `nohp`, `login`, `logout`) VALUES
(1, 'bejo', 'bejo', 'Anak-Anak', 'Obat', 'L', 'Bandar Lampung', 'bejo@gmail.com', '07765678', '2020-03-05 06:46:59', '2020-03-05 07:45:06');

-- --------------------------------------------------------

--
-- Table structure for table `psikolog`
--

CREATE TABLE `psikolog` (
  `idpsig` int(9) NOT NULL,
  `nmpsig` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `bidang` enum('Anak-Anak','Remaja','Dewasa') NOT NULL,
  `jk` enum('P','L') NOT NULL,
  `kota` enum('Bandar Lampung','Yogyakarta','Jakarta','Bandung','Kalimantan','-') NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(14) NOT NULL,
  `login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `logout` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psikolog`
--

INSERT INTO `psikolog` (`idpsig`, `nmpsig`, `password`, `bidang`, `jk`, `kota`, `email`, `nohp`, `login`, `logout`) VALUES
(1, 'jaja sujaja', 'sujaja', 'Remaja', 'L', 'Yogyakarta', 'jaja@gmail.com', '08765557668', '2020-03-05 04:38:18', '2020-03-05 08:23:10'),
(2, 'citra ', 'citra', 'Anak-Anak', 'P', 'Bandung', 'citra@gmail.com', '097865432456', '2020-03-05 12:18:18', '2020-03-05 10:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(9) NOT NULL,
  `nmuser` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jk` enum('P','L','-') NOT NULL,
  `umur` varchar(2) NOT NULL,
  `kota` enum('Bandar Lampung','Yogyakarta','Jakarta','Bandung','Kalimantan','-') NOT NULL,
  `nohp` varchar(14) NOT NULL,
  `login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `logout` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nmuser`, `email`, `password`, `jk`, `umur`, `kota`, `nohp`, `login`, `logout`) VALUES
(1, 'tyas', 'tyasmw06@gmail.com', 'tyas', 'P', '17', 'Bandar Lampung', '089501001174', '2020-03-06 08:23:20', '2020-03-02 19:04:04'),
(2, 'vani', 'vani@gmail.com', 'vani', 'P', '18', 'Yogyakarta', '09867888899', '2020-03-06 08:23:55', '2020-03-05 20:16:20'),
(3, 'safira', 'safira@gmail.com', 'safira', 'P', '19', 'Jakarta', '08566667778', '2020-03-06 08:23:55', '2020-03-04 05:11:17'),
(4, 'stephani', 'stephani@gmail.com', 'stephani', 'P', '20', 'Bandung', '0867673672', '2020-03-06 08:23:55', '2020-03-05 07:29:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `psikiater`
--
ALTER TABLE `psikiater`
  ADD PRIMARY KEY (`idpsik`);

--
-- Indexes for table `psikolog`
--
ALTER TABLE `psikolog`
  ADD PRIMARY KEY (`idpsig`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `psikiater`
--
ALTER TABLE `psikiater`
  MODIFY `idpsik` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `psikolog`
--
ALTER TABLE `psikolog`
  MODIFY `idpsig` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
