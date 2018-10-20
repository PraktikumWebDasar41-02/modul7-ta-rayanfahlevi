-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2018 pada 15.45
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `nama` varchar(30) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(15) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `fakultas` varchar(25) NOT NULL,
  `hobi` varchar(25) NOT NULL,
  `asal` varchar(20) NOT NULL,
  `moto` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`nama`, `nim`, `tgl_lahir`, `jk`, `prodi`, `fakultas`, `hobi`, `asal`, `moto`) VALUES
('ashd', '1231231233', '2018-10-02', 'perempuan', 'Teknik Elektro', 'Teknik Elektro', 'hobi', 'Lombok', 'Standing all the time'),
('Rizki Rahardi', '6701170022', '2018-10-12', 'perempuan', 'Desain Komunikasi Visual', 'industrikreatif', '', 'Semarang', 'Papung Ben Seger'),
('Ujang', '6701170033', '2018-10-04', 'perempuan', 'Desain Komunikasi Visual', 'Industri Kreatif', 'hobi', 'Majalaya', 'Sakarepmu'),
('Rayan Fahlevi Dahlan', '6701170061', '1998-11-19', 'lakilaki', 'mi', 'ilmuterapan', '', 'Bandung', 'Beribadah, Belajar, Bekerja'),
('Mas Bur', '6701170071', '2018-10-03', 'lakilaki', 'mi', 'ilmuterapan', '', 'Ponggok', 'Kumahasia'),
('Uus', '6701170077', '2018-10-19', 'perempuan', 'Administrasi Bisnis', 'Ekonomi Bisnis', 'hobi', 'Citeureup', 'Standing all the time'),
('Abrar', '6701174121', '2018-07-04', 'laki-laki', 'Desain Komunikasi Visual', 'Industri Kreatif', '', 'Lombok', 'Banyak');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
