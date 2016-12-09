-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Jun 2016 pada 07.53
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_user`
--

CREATE TABLE IF NOT EXISTS `akun_user` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun_user`
--

INSERT INTO `akun_user` (`id`, `nik`, `password`, `level`) VALUES
(2, 'p001', 'admin', 'admin'),
(3, 'p002', 'qwerty', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cabang`
--

CREATE TABLE IF NOT EXISTS `cabang` (
  `id` int(11) NOT NULL,
  `nama_cabang` varchar(150) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `long` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cabang`
--

INSERT INTO `cabang` (`id`, `nama_cabang`, `lat`, `long`) VALUES
(1, 'Gedung Sate', '-6.9021528308384', '107.61905671435545'),
(2, 'Alun Alun Bandung', '-6.921750416217475', '107.60189057666014');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `deskripsi`) VALUES
(2, 'Kuliner', 'Rekomendasi Kuliner di bandung utara'),
(3, 'Wisata Alam', 'Tempat wisata'),
(4, 'Edukasi', 'Tempat Wisata Edukasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `name`, `username`, `password`) VALUES
(1, 'ikhsan', 'userikhsan', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `telp`) VALUES
('p001', 'ikhsan', 'bandung', 'aaa', 'bandung', '085317742187'),
('p002', 'nugraha-updated', 'bandung', 'asd', 'banjaran', '0853177'),
('p003', 'amnu', 'bandung', 'band', 'asd', 'ad'),
('qq', 'q', 'updated', 'q', 'q', 'q');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE IF NOT EXISTS `wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `long` varchar(255) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `buka` varchar(8) NOT NULL,
  `tutup` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id`, `nama`, `kategori`, `alamat`, `lat`, `long`, `telepon`, `foto`, `harga`, `buka`, `tutup`) VALUES
(4, 'Gunung Tangkuban Parahu', 'Wisata Alam', 'Gunung Tangkuban Perahu, Bandung Utara', '-6.759406954485939', '107.60987283068846', '-022 82780654', '-', 25000, '07.00', '17.00'),
(5, 'Taman Hutan Raya Ir. H. Juanda / Taman Dago Pakar', 'Wisata Alam', 'Kompleks Tahura Ir. H. Juanda No. 99 Dago Pakar, Bandung', '-6.841650827925906', '107.63587952929686', '022 2515895', '-', 8000, '08.00', '17.00'),
(6, 'Pemandian Air Panas Ciater', 'Wisata Alam', 'Jl. Raya Ciater, Nagrak, Subang, Kec. Subang, Jawa Barat', '-6.746365962638007', '107.64944077807615', '0812-2436-5169', '-', 80000, '24 jam', '-'),
(7, 'Curug Maribaya', 'Wisata Alam', 'Cibodas, Lembang, Kabupaten Bandung Barat', '-6.831168714079825', '107.65630723315428', '-', '-', 0, '-', '-'),
(8, 'Curug Dago', 'Wisata Alam', 'Jl. Dago Pojok, Dago, Coblong, Kota Bandung, Jawa Barat', '-6.864489107984254', '107.6200008519287', '-', '-', 0, '-', '-'),
(9, 'Curug Cimahi (Air Terjun Pelangi)', 'Wisata Alam', 'Jl. Kolonel Masturi No.325, Kertawangi, Cisarua', '-6.797334634652361', '107.57536889392088', '0821-2099-8872', '-', 15000, '07.00', '21.00'),
(10, 'Kampung Gajah Wonderland ', 'Edukasi', 'Jl. Sersan Bajuri KM. 3,8, Cihideung, Parongpong', '-6.8293790619174946', '107.5957965977783', '(022) 88884012', '-', 150000, '09.00', '17.00'),
(11, 'Jendela Alam', 'Edukasi', 'JL. Sersan Bajuri KM 4, 5, Komplek Graha Puspa,', '-6.8194932436776', '107.59674073535155', '(022) 2788482', '-', 10000, '09.00', '17.00'),
(12, 'De'' Ranch', 'Edukasi', 'Jl. Maribaya No. 17, Lembang', '-6.816595637592979', '107.62523652392576', '(022) 2785865', '-', 10000, '09.00', '17.00'),
(13, 'Observatorium Bosscha', 'Edukasi', 'Jl. Peneropong Bintang, Lembang', '-6.8243509557351', '107.6148510106201', '(022) 2786027', '-', 7500, '09.00', '17.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_user`
--
ALTER TABLE `akun_user`
  ADD PRIMARY KEY (`id`), ADD KEY `nik` (`nik`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun_user`
--
ALTER TABLE `akun_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `akun_user`
--
ALTER TABLE `akun_user`
ADD CONSTRAINT `akun_user_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
