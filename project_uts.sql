-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2020 pada 11.33
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `id_user`, `judul`, `penulis`, `tanggal`, `isi`, `id_kategori`, `created_at`, `updated_at`) VALUES
(2, 1, 'React Loader Spinner', 'Utin Chindy', '2020-11-24', 'Semua orang tidak suka menunggu bukan? Yap, betul sekali. Menunggu itu membosankan atau user bisa mengira jika web Anda tidak merespon. User masa sekarang mengharapkan situs web yang cepat sebagai hal yang biasa. Jika aplikasi kalian berat atau lambat, tampilkan salah satu animasi loading modern ini saat konten Anda dimuat. Selain meningkatkan estetika aplikasi Anda, ini juga akan membantu mempertahankan user agar tidak langsung menutup laman web.', 2, '2020-11-24 02:39:10', '2020-11-24 02:43:13'),
(3, 2, 'Pengaruh Budaya Nusantara terhadap sastra', 'selvira', '2020-11-27', 'Ketika berbicara mengenai budaya, kita harus mau membuka pikiran untuk menerima banyak hal baru. Budaya bersifat kompleks, luas, dan abstrak. Budaya tidak terbatas pada seni yang sering kali dilihat dalam gedung kesenian atau tempat bersejarah, seperti museum. Tetapi, budaya merupakan suatu pola hidup menyeluruh. Budaya memunyai banyak aspek yang turut menentukan perilaku komunikatif. Beberapa orang bisa mengalami kesulitan ketika berkomunikasi dengan orang dari budaya lain. Hal ini dikarenakan budaya memunyai keistimewaannya sendiri. Budaya masyarakat satu berbeda dengan budaya masyarakat yang lainnya, sehingga seseorang harus bisa menyesuaikan perbedaan-perbedaannya. Kebudayaan memengaruhi tingkat pengetahuan dan meliputi sistem ide atau gagasan yang terdapat dalam pikiran manusia, sehingga dalam kehidupan sehari-hari, kebudayaan itu bersifat abstrak.\r\n\r\nAda banyak unsur yang membentuk budaya, termasuk bahasa, adat istiadat, sistem agama dan politik, perkakas, pakaian, dan karya seni. Bahasa merupakan perwujudan budaya yang digunakan manusia untuk saling berkomunikasi, baik melalui tulisan, lisan, ataupun gerakan. Sebagai perwujudan budaya, bahasa dapat berperan dalam dua hal:\r\n\r\n1. Sebagai alat untuk berekspresi, berkomunikasi, mengadakan integrasi, dan adaptasi sosial.\r\n\r\n2. Sebagai alat untuk mengadakan hubungan dalam pergaulan sehari-hari, mewujudkan seni (sastra), mempelajari naskah-naskah kuno, dan mengeksploitasi ilmu pengetahuan dan teknologi.', 1, '2020-11-27 03:30:50', '2020-11-27 03:30:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Artikel Sasta', '2020-11-27 02:49:32', '2020-11-27 02:49:32'),
(2, 'Artikel Programing', '2020-11-27 02:49:42', '2020-11-27 02:49:42'),
(3, 'Artikel Tanaman', '2020-11-27 02:49:53', '2020-11-27 02:49:53'),
(4, 'Artikel Otomotif', '2020-11-27 02:50:02', '2020-11-27 02:50:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `harga` char(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id`, `nama`, `harga`, `jumlah`, `created_at`, `updated_at`) VALUES
(6, 'Poco X3 NFC 8/128 GB', '3700000', 2, '2020-11-13 04:19:52', '2020-11-13 04:19:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `id_artikel`, `email`, `nama`, `isi`, `created_at`, `updated_at`) VALUES
(1, 2, 'utijevi@gmail.com', 'Uti Jevi', 'Isi dari artikel sangat sedikit dan tidak lengkap. Tolong lengkapi lagi.', '2020-11-27 02:40:25', '2020-11-27 02:40:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `remember_token` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `nama`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'utinchindy', 'utincindyselvira16@gmail.com', 'Utin Chindy', '$2y$10$vlupIagIE1nqErxkgHd/Ze4LMQTiZdJtfQvAvy3VBz1VK1jLdtH2q', NULL, '2020-11-22 07:42:29', '2020-11-22 07:42:29'),
(2, 'selvira store', 'selvira@gmail.com', 'selvira', '$2y$10$6e8k9KCmNi/2R6sQlVeENunEhURGd1C97o/rB.lKU1DWmLlHuW1na', NULL, '2020-11-22 07:57:33', '2020-11-22 07:57:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_handphone` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_detail`
--

INSERT INTO `user_detail` (`id`, `id_user`, `no_handphone`, `created_at`, `updated_at`) VALUES
(1, 1, '+6289600000', '2020-11-22 14:48:02', '2020-11-22 14:48:02'),
(2, 2, '+6282250111111', '2020-11-22 07:57:33', '2020-11-22 07:57:33');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
