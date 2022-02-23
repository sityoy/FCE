-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2022 pada 16.39
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cucimobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nomor_plat` varchar(10) NOT NULL,
  `type_mobil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `no_hp`, `alamat`, `nomor_plat`, `type_mobil`) VALUES
(1, 'Tio', '0895414744032', 'jakarta', ' b4547asd', 'Avanza'),
(2, 'Anggre', '0895414744032', 'Tangerang', 'b1293ask', 'Innova'),
(3, 'Arfan', '0895414744032', 'Tangerang', 'b1293ask', 'Innova'),
(4, 'Eni Jumeias', '0895414744032', 'Jakarta', 'b4544asd', 'Avanza');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_cucian`
--

CREATE TABLE `jenis_cucian` (
  `id_jenis_cucian` int(1) NOT NULL,
  `jenis_cucian` varchar(50) NOT NULL,
  `biaya` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_cucian`
--

INSERT INTO `jenis_cucian` (`id_jenis_cucian`, `jenis_cucian`, `biaya`) VALUES
(1, 'Cucian Body', 35000),
(2, 'Cucian Menyeluruh', 45000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `no_antrian` varchar(20) NOT NULL,
  `id_customer` int(10) NOT NULL,
  `id_jenis_cucian` int(1) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `jam_pendaftaran` time NOT NULL,
  `total_biaya` int(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `no_antrian`, `id_customer`, `id_jenis_cucian`, `tgl_pendaftaran`, `jam_pendaftaran`, `total_biaya`, `status`) VALUES
(1, '2022-02-19/1', 1, 1, '2022-02-19', '09:42:00', 35000, 'Pendaftaran'),
(2, '2022-02-19/2', 2, 2, '2022-02-19', '10:40:00', 45000, 'Pendaftaran'),
(3, '2022-02-19/3', 3, 2, '2022-02-19', '11:40:00', 45000, 'Pendaftaran'),
(4, '2022-02-19/4', 4, 1, '2022-02-19', '12:00:00', 35000, 'pendaftaran'),
(5, '2022-02-19/5', 5, 2, '2022-02-19', '12:10:00', 45000, 'pendaftaran'),
(6, '2022-02-19/6', 6, 1, '2022-02-19', '12:05:00', 35000, 'pendaftaran'),
(7, '2022-02-19/7', 7, 2, '2022-02-19', '12:15:00', 45000, 'pendaftaran'),
(8, '2022-02-19/8', 8, 1, '2022-02-19', '12:20:00', 35000, 'pendaftaran'),
(9, '2022-02-19/9', 9, 2, '2022-02-19', '12:45:00', 45000, 'pendaftaran'),
(10, '2022-02-19/10', 10, 1, '2022-02-19', '12:30:00', 35000, 'pendaftaran'),
(11, '2022-02-19/11', 11, 1, '2022-02-19', '12:50:00', 35000, 'pendaftaran'),
(12, '2022-02-19/12', 12, 1, '2022-02-19', '12:55:00', 35000, 'pendaftaran'),
(13, '2022-02-19/13', 13, 2, '2022-02-19', '13:20:00', 45000, 'pendaftaran'),
(14, '2022-02-19/14', 14, 1, '2022-02-19', '13:30:00', 35000, 'pendaftaran'),
(16, '2022-02-19/16', 16, 1, '2022-02-19', '13:50:00', 35000, 'pendaftaran'),
(17, '2022-02-19/17', 17, 2, '2022-02-19', '14:30:00', 45000, 'pendaftaran'),
(18, '2022-02-19/18', 18, 1, '2022-02-19', '15:00:00', 35000, 'pendaftaran'),
(19, '2022-02-19/19', 19, 2, '2022-02-19', '15:30:00', 45000, 'pendaftaran'),
(20, '2022-02-19/19', 20, 1, '2022-02-19', '16:00:00', 35000, 'pendaftaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(150) NOT NULL,
  `kebersihan` int(3) NOT NULL,
  `keramahan` int(3) NOT NULL,
  `ketelitian` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `no_nota` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `bayar` int(10) NOT NULL,
  `kembali` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_user` tinyint(1) NOT NULL,
  `nama_pencuci` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `type_mobil`
--

CREATE TABLE `type_mobil` (
  `id_type_mobil` int(2) NOT NULL,
  `type_mobil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `type_mobil`
--

INSERT INTO `type_mobil` (`id_type_mobil`, `type_mobil`) VALUES
(1, 'Avanza'),
(2, 'Innova'),
(4, 'Jazz');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(1) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `hp` varchar(25) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `alamat`, `hp`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Jl. Bangau Sakti', '091823123', 1),
(2, 'sityoy', '5dabef7c69cf1181b3d2ddadfdc798bc', 'Tio', 'askdjlaksdj', '081383205359', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `jenis_cucian`
--
ALTER TABLE `jenis_cucian`
  ADD PRIMARY KEY (`id_jenis_cucian`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indeks untuk tabel `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `type_mobil`
--
ALTER TABLE `type_mobil`
  ADD PRIMARY KEY (`id_type_mobil`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jenis_cucian`
--
ALTER TABLE `jenis_cucian`
  MODIFY `id_jenis_cucian` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `type_mobil`
--
ALTER TABLE `type_mobil`
  MODIFY `id_type_mobil` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `pendaftaran` (`id_pendaftaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
