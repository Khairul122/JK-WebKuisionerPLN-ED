-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2023 pada 13.29
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tamu_tamu1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `Id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `q1` varchar(10) DEFAULT NULL,
  `q2` varchar(10) DEFAULT NULL,
  `q3` varchar(10) DEFAULT NULL,
  `q4` varchar(10) DEFAULT NULL,
  `q5` varchar(10) DEFAULT NULL,
  `q6` varchar(10) DEFAULT NULL,
  `q7` varchar(10) DEFAULT NULL,
  `q8` varchar(10) DEFAULT NULL,
  `q9` varchar(10) DEFAULT NULL,
  `q10` varchar(10) DEFAULT NULL,
  `q11` varchar(10) DEFAULT NULL,
  `q12` varchar(10) DEFAULT NULL,
  `q13` varchar(10) DEFAULT NULL,
  `q14` varchar(10) DEFAULT NULL,
  `q15` varchar(10) DEFAULT NULL,
  `q16` varchar(10) DEFAULT NULL,
  `q17` varchar(10) DEFAULT NULL,
  `q18` varchar(10) DEFAULT NULL,
  `q19` varchar(10) DEFAULT NULL,
  `q20` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id` int(20) UNSIGNED NOT NULL,
  `nama_pengunjung` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hp` varchar(25) NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `pengambilan` varchar(255) NOT NULL,
  `kendaraan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`id`, `nama_pengunjung`, `email`, `hp`, `keperluan`, `alamat`, `tgl_masuk`, `perihal`, `pengambilan`, `kendaraan`) VALUES
(16, 'Budi', 'budi', '0821654436771212212', 'Hai1', 'Bukittinggi', '2020-12-31', 'hai1', 'hai1', 'hai1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `paswd`, `email`, `level`, `ket`) VALUES
(2, 'Fahrid Setiawan', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'fahrid@gmail.com', 1, 'Manager Ahli Program'),
(6, '1', 'budi', '00dfc53ee86af02e742515cdcf075ed3', 'budi@gmail.com', 1, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
