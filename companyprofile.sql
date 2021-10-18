-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2021 pada 09.36
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `companyprofile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
--

CREATE TABLE `halaman` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kutipan` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `halaman`
--

INSERT INTO `halaman` (`id`, `judul`, `kutipan`, `isi`, `tgl_isi`) VALUES
(39, 'You Will Need This', 'Online Courses', '<p style=\"margin: 10px 0px; padding: 10px 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, sans-serif; font-size: medium;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed deserunt voluptatibus possimus blanditiis reiciendis. Qui, facilis! Delectus exercitationem dolores sapiente?</p><p style=\"margin: 10px 0px; padding: 10px 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, sans-serif; font-size: medium;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed deserunt voluptatibus possimus blanditiis reiciendis. Qui, facilis! Delectus exercitationem dolores sapiente?<img src=\"../gambar/6cdd60ea0045eb7a6ec44c54d29ed402.jpg\" style=\"width: 626px; float: right;\" class=\"note-float-right\"></p>', '2021-10-14 23:49:46'),
(42, 'Workshop Sistem Informasi', 'Sistem Informasi Adalah', '<p style=\"border: 0px; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; color: rgb(58, 58, 58); font-family: Nunito, sans-serif;\">Dalam sejarah perkembangan komputerisasi dan informasi, komputer tidak langsung memiliki jenis program-program yang dapat berjalan secara otomatis, melainkan hanya bekerja menjalankan perintah sesuai dengan data yang dimasukkan secara manual ke dalam komputer.</p><p style=\"border: 0px; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; color: rgb(58, 58, 58); font-family: Nunito, sans-serif;\">Kemudian Setelah tahun 2000, sistem informasi manajemen mulai berkembang dan dikenal sebagai satu sistem yang dapat terintegrasi untuk berbagai kebutuhan bagi berbagai macam jenis perusahaan dan unit-unit bisnisnya</p><p style=\"border: 0px; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px; color: rgb(58, 58, 58); font-family: Nunito, sans-serif;\">Sistem tersebut kemudian dikemas dalam sistem informasi berbasis komputer (Computer Based Information System).<img src=\"../gambar/6c4b761a28b734fe93831e3fb400ce87.jpg\" style=\"width: 626px; float: left;\" class=\"note-float-left\"></p>', '2021-10-18 04:53:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `info`
--

INSERT INTO `info` (`id`, `judul`, `isi`, `tgl_isi`) VALUES
(1, 'Contact', 'lorem10', '2021-10-18 06:40:27'),
(2, 'About', '<p>Lorem</p>', '2021-10-18 06:42:40'),
(3, 'Contact', '<p>Email: ...................................@gmail.com</p>', '2021-10-18 06:44:50'),
(4, 'Social', '<p>IG:</p><p>FB:</p><p>Twitter:</p><p>E-mail:</p>', '2021-10-18 06:45:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `partners`
--

INSERT INTO `partners` (`id`, `nama`, `foto`, `isi`, `tgl_isi`) VALUES
(2, 'Instagram', 'partners_1634530005_logo1.png', '<p>Instagram</p>', '2021-10-18 04:06:45'),
(3, 'fb', 'partners_1634530028_fb.png', '<p>fb</p>', '2021-10-18 04:07:08'),
(4, 'twt', 'partners_1634530046_twt.jpg', '<p>twt</p>', '2021-10-18 04:07:26'),
(5, 'mif', 'partners_1634530340_mif.jpg', '<p>mif</p>', '2021-10-18 04:12:20'),
(6, 'ti', 'partners_1634530354_ti.jpg', '<p>ti</p>', '2021-10-18 04:12:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tutors`
--

CREATE TABLE `tutors` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tutors`
--

INSERT INTO `tutors` (`id`, `nama`, `foto`, `isi`, `tgl_isi`) VALUES
(2, 'M. Farhan S.W', 'tutors_1634530597_farhan.jpg', '<p>M. Farhan S.W<br></p>', '2021-10-18 04:16:37'),
(3, 'Hana Tri A', 'tutors_1634530619_hana.jpg', '<p>Hana Tri A<br></p>', '2021-10-18 04:16:59'),
(4, 'M. Andika A', 'tutors_1634530654_andika.png', '<p>M. Andika Alsabfandi<br></p>', '2021-10-18 04:50:26'),
(5, 'Fadilah N.H', 'tutors_1634530690_fadil.jpg', '<p>Fadilah N.H<br></p>', '2021-10-18 04:18:10');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
