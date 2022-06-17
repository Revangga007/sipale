-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Mar 2022 pada 08.45
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
-- Database: `puskeswan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `basis_pengetahuan`
--

CREATE TABLE `basis_pengetahuan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gejala_id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyakit_id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cf` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `basis_pengetahuan`
--

INSERT INTO `basis_pengetahuan` (`id`, `gejala_id`, `penyakit_id`, `cf`, `created_at`, `updated_at`) VALUES
(1, 'G001', 'P001', 0.40, '2021-12-22 07:04:29', '2021-12-22 07:04:29'),
(2, 'G002', 'P001', 1.00, '2021-12-22 07:05:36', '2021-12-22 07:05:36'),
(3, 'G005', 'P001', 0.60, '2021-12-22 07:05:56', '2021-12-22 07:05:56'),
(4, 'G007', 'P001', 0.60, '2021-12-22 07:06:19', '2021-12-22 07:06:19'),
(5, 'G003', 'P002', 0.60, '2021-12-22 07:08:25', '2021-12-22 07:08:25'),
(6, 'G004', 'P002', 1.00, '2021-12-22 07:09:11', '2021-12-22 07:09:11'),
(7, 'G011', 'P002', 0.40, '2021-12-22 07:10:02', '2021-12-22 07:10:02'),
(8, 'G012', 'P002', 0.40, '2021-12-22 07:10:43', '2021-12-22 07:10:43'),
(9, 'G006', 'P002', 0.20, '2021-12-22 07:11:09', '2021-12-22 07:11:09'),
(10, 'G005', 'P002', 0.20, '2021-12-22 07:12:09', '2021-12-22 07:12:09'),
(11, 'G019', 'P002', 0.40, '2021-12-22 07:13:11', '2021-12-22 07:13:11'),
(12, 'G022', 'P002', 0.80, '2021-12-22 07:13:30', '2021-12-22 07:13:30'),
(13, 'G024', 'P003', 0.40, '2021-12-22 07:13:53', '2021-12-22 07:13:53'),
(14, 'G034', 'P003', 0.80, '2021-12-22 07:16:33', '2021-12-22 07:16:33'),
(15, 'G023', 'P003', 1.00, '2021-12-22 07:22:04', '2021-12-22 07:22:04'),
(16, 'G035', 'P003', 1.00, '2021-12-22 07:22:33', '2021-12-22 07:22:33'),
(17, 'G012', 'P003', 0.20, '2021-12-22 07:22:53', '2021-12-22 07:22:53'),
(18, 'G017', 'P003', 0.60, '2021-12-22 07:23:31', '2021-12-22 07:23:31'),
(19, 'G019', 'P003', 0.40, '2021-12-22 07:23:53', '2021-12-22 07:23:53'),
(20, 'G028', 'P003', 0.40, '2021-12-22 07:24:14', '2021-12-22 07:24:14'),
(21, 'G001', 'P004', 0.40, '2021-12-22 07:24:50', '2021-12-22 07:24:50'),
(22, 'G008', 'P004', 0.60, '2021-12-22 07:25:15', '2021-12-22 07:25:15'),
(23, 'G005', 'P004', 0.60, '2021-12-22 07:25:44', '2021-12-22 07:25:44'),
(24, 'G007', 'P004', 0.40, '2021-12-22 07:26:14', '2021-12-22 07:26:14'),
(25, 'G013', 'P004', 0.40, '2021-12-22 07:26:36', '2021-12-22 07:26:36'),
(26, 'G026', 'P004', 0.80, '2021-12-22 07:26:55', '2021-12-22 07:26:55'),
(27, 'G009', 'P005', 0.80, '2021-12-22 07:27:23', '2021-12-22 07:27:23'),
(28, 'G014', 'P005', 1.00, '2021-12-22 07:27:46', '2021-12-22 07:27:46'),
(29, 'G015', 'P005', 0.60, '2021-12-22 07:28:12', '2021-12-22 07:28:12'),
(30, 'G016', 'P005', 0.40, '2021-12-22 07:28:33', '2021-12-22 07:28:33'),
(31, 'G027', 'P005', 0.80, '2021-12-22 07:32:07', '2021-12-22 07:32:07'),
(32, 'G017', 'P006', 0.80, '2021-12-22 07:32:39', '2021-12-22 07:32:39'),
(33, 'G018', 'P006', 0.80, '2021-12-22 07:33:08', '2021-12-22 07:33:08'),
(34, 'G019', 'P006', 0.40, '2021-12-22 07:34:35', '2021-12-22 07:34:35'),
(35, 'G020', 'P006', 0.80, '2021-12-22 07:35:08', '2021-12-22 07:35:08'),
(36, 'G011', 'P006', 0.60, '2021-12-22 07:35:55', '2021-12-22 07:35:55'),
(37, 'G021', 'P006', 0.80, '2021-12-22 07:36:13', '2021-12-22 07:36:13'),
(38, 'G001', 'P007', 0.40, '2021-12-22 07:36:48', '2021-12-22 07:36:48'),
(39, 'G029', 'P007', 1.00, '2021-12-22 07:37:20', '2021-12-22 07:37:20'),
(40, 'G005', 'P007', 0.60, '2021-12-22 07:37:42', '2021-12-22 07:37:42'),
(41, 'G007', 'P007', 0.60, '2021-12-22 07:38:03', '2021-12-22 07:38:03'),
(42, 'G030', 'P008', 0.80, '2021-12-22 07:38:30', '2021-12-22 07:38:30'),
(44, 'G031', 'P008', 0.80, '2021-12-22 07:44:37', '2021-12-22 07:44:37'),
(45, 'G032', 'P008', 1.00, '2021-12-22 07:46:10', '2021-12-22 07:46:10'),
(46, 'G033', 'P008', 0.40, '2021-12-22 07:47:52', '2021-12-22 07:47:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemilik` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_peliharaan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jekel` enum('jantan','betina') COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `suhu` double(8,2) DEFAULT NULL,
  `penyakit_id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presentase` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `diagnosa`
--

INSERT INTO `diagnosa` (`id`, `nik`, `nama_pemilik`, `no_hp`, `alamat`, `nama_peliharaan`, `jekel`, `umur`, `berat`, `suhu`, `penyakit_id`, `presentase`, `created_at`, `updated_at`) VALUES
(75, '3325111111111111', 'Pujiono', '111222345789', 'Batang', 'Belang', 'jantan', 3, 6, NULL, 'P002', 0.78, '2021-12-24 08:28:08', '2021-12-24 08:28:08'),
(76, '1111155544466889', 'Budi', '111555666632', 'Batang', 'Cemong', 'betina', 7, 7, NULL, 'P002', 0.89, '2021-12-24 08:29:02', '2021-12-24 08:29:02'),
(77, '4445556667788956', 'Revangga Aji Pratama', '888444555566', 'Batang', 'Oren', 'jantan', 5, 5, 0.13, 'P002', 0.94, '2021-12-24 08:29:44', '2021-12-24 08:29:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id`, `nama`, `created_at`, `updated_at`) VALUES
('G001', 'Kucing sering mengalami gatal-gatal, sehingga sering menggaruk-garuk badan', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G002', 'terdapat bintik-bintik merah  dan kerak / keropeng biasanya terdapat di daerah telinga, kaki, maupun muka', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G003', 'Makan teratur tetapi tetap kurus', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G004', 'Terdapat cacing pada muntah atau kotoran kucing', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G005', 'Kerontokan bulu pada kucing', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G006', 'Bulu kucing kusam', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G007', 'Kulit memerah', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G008', 'Terdapat ketombe pada bulu kucing', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G009', 'Terdapat kotoran pada telinga kucing', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G010', 'Kucing mengalami radang gusi', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G011', 'kucing terlihat lemah dan lesu', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G012', 'Mulut kucing berbau busuk', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G013', 'Kulit kering yang mengelupas kadang menyerupai sisik', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G014', 'Daun telinga memerah dan terkadang bengkak', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G015', 'Terdapat luka di sekitar telinga', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G016', 'kerontokan bulu di sekitar lipatan telinga', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G017', 'Kucing mengalami demam / suhu badan meningkat', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G018', 'Kucing mengalami bersin-bersin', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G019', 'Nafsu makan berkurang', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G020', 'Mengeluarkan cairan dari hidung (beringus)', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G021', 'Kucing mengalami batuk-batuk', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G022', 'Kucing mengalami diare', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G023', 'Kemerahan pada gusi, lidah atau tenggorokan', '2021-12-22 06:52:34', '2021-12-22 07:20:56'),
('G024', 'Air liur kucing berlebih', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G025', 'Bau mulut tidak sedap', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G026', 'Kerontokan bulu berbentuk lingkaran', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G027', 'Bau telinga tidak sedap', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G028', 'Kucing sering menjulurkan lidah', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G029', 'Terdapat telur kutu pada bulu kucing', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G030', 'kemerahan pada selaput lendir mata', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G031', 'pembengkakan kelopak mata', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G032', 'Mata tertutup atau kesulitan membukanya karena pembengkakan dan sekresi', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G033', 'Kucing sering mengusap-usap mata', '2021-12-22 06:52:34', '2021-12-22 06:52:34'),
('G034', 'Kucing kesulitan saat menelan makanan', '2021-12-22 07:16:02', '2021-12-22 07:16:02'),
('G035', 'Mulut bengkak dan gusi berdarah', '2021-12-22 07:18:33', '2021-12-22 07:18:33'),
('G036', '777', '2021-12-26 08:20:38', '2021-12-26 08:20:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_14_004839_create_gejala_table', 1),
(5, '2021_07_14_004915_create_penyakit_table', 1),
(6, '2021_07_14_041222_create_basis_pengetahuan_table', 1),
(7, '2021_08_07_131301_add_foreign_gejala_id_on_basis_pengetahuan_table', 1),
(8, '2021_09_01_170016_create_pesan_table', 1),
(9, '2021_10_30_173432_create_diagnosa_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `solusi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id`, `nama`, `slug`, `deskripsi`, `solusi`, `gambar`, `created_at`, `updated_at`) VALUES
('P001', 'Scabies', 'scabies', '<p>Gejala yang timbul ketika kucing mengalami Scabies antara lain:</p>\n\n<ol>\n	<li>Kucing sering mengalami gatal-gatal, sehingga sering menggaruk-garuk badan</li>\n	<li>&nbsp;terdapat bintik-bintik merah&nbsp; dan kerak / keropeng biasanya terdapat di daerah telinga, kaki, maupun muka</li>\n	<li>kerontokan bulu pada kucing</li>\n	<li>kulit memerah.</li>\n</ol>', '<p>Penyakit scabies ini dapat dicegah dengan cara :</p>\n\n<ul>\n	<li>memandikan kucing dengan shampoo anti parasit,</li>\n	<li>jauhkan kucing peliharaan dengan kucing lain yang menderita penyakit scabies,</li>\n	<li>lalu bersihkan kandang dan alat grooming secara rutin.</li>\n</ul>\n\n<p>Sedangkan untuk pengobatannya yaitu bisa dengan cara pemberian salep <strong>Scabimite</strong> atau <strong>suntik scabies</strong>.</p>', '1636107532_scabies.jpg', '2021-11-05 03:18:52', '2021-11-05 03:18:52'),
('P002', 'cacingan', 'cacingan', '<p>Seperti manusia, kucing juga dapat mengalami cacingan. Penyakit cacingan disebabkan oleh beberapa jenis cacing, antara lain : cacing gelang, cacing tambang, cacing pita, dan cacing hati. Gejala yang ditimbulkan ketika kucing mengalami cacingan yaitu :</p>\r\n\r\n<ol>\r\n	<li>Terdapat cacing pada muntah atau kotoran kucing</li>\r\n	<li>kucing makan teratur tetapi tetap kurus</li>\r\n	<li>kucing terlihat lemah dan lesu</li>\r\n	<li>warna bulu kucing kusam</li>\r\n</ol>', '<p>Penyakit cacingan dapat dicegah denga cara :</p>\r\n\r\n<ol>\r\n	<li>memberikan obat cacing sesuai dengan jadwal secara teratur</li>\r\n	<li>bersihkan tempat tinggal dan lingkungan kucing secara rutin</li>\r\n	<li>rutin membersihkan kotoran kucing</li>\r\n</ol>\r\n\r\n<p>Untuk pengobatannya yaitu :</p>\r\n\r\n<ol>\r\n	<li>bisa dengan menggunakan obat cacing, salah satunya<strong> Drontal Cat </strong>atau <strong>Pirantel Pamoat,</strong></li>\r\n	<li>pemberian vitamin pada kucing</li>\r\n</ol>', '1638341482_cacingan (2).jpg', '2021-11-18 18:34:24', '2021-11-30 23:51:22'),
('P003', 'Stomatitis', 'stomatitis', '<p>Stomatitis adalah radang yang terjadi pada mukosa mulut. dapat berupa bisul, gusi yang nyeri, peradangan, dan lidah yang sakit.</p>\r\n\r\n<p>&nbsp;Gejala yang ditimbul dari penyakit ini adalah :</p>\r\n\r\n<ol>\r\n	<li>Kucing mengalami radang gusi</li>\r\n	<li>Radang pada mukosa</li>\r\n	<li>Bau mulut tidak sedap</li>\r\n	<li>Kucing sering menjulurkan lidah</li>\r\n	<li>Nafsu makan berkurang.</li>\r\n</ol>', '<p>Cara mencegah dan mengobati penyakit Stomatitis dengan cara :</p>\r\n\r\n<ol>\r\n	<li>Menjaga kebersihan mulut kucing</li>\r\n	<li>berikan juga obat yang berfungsi untuk mengendalikan infeksi yang memperburuk peradangan dan rasa sakit.</li>\r\n</ol>', '1638331619_stomatitis.jpg', '2021-11-30 21:06:59', '2021-11-30 21:06:59'),
('P004', 'dermatophytosis', 'dermatophytosis', '<p>Dermatophytosis disebabkan oleh jamur yang hidup di kulit atau bulu kucing. Penyakit ini dapat menular ke kucing lain melalui sentuhan bulu dan bulu yang rontok karena terdapat spora jamur.</p>\r\n\r\n<p>Gejala yang ditimbulkan dari penyakit ini, yaitu :</p>\r\n\r\n<ol>\r\n	<li>Kucing sering mengalami gatal-gatal, sehingga sering menggaruk-garuk badan</li>\r\n	<li>Terdapat ketombe pada bulu kucing</li>\r\n	<li>Kerontokan bulu pada kucing</li>\r\n	<li>&nbsp;Kulit kering yang mengelupas kadang menyerupai sisik</li>\r\n</ol>', '<p>Untuk mencegah penyakit ini yaitu :</p>\r\n\r\n<ol>\r\n	<li>hindarkan kucing peliharaan kontak langsung dengan kucing liar</li>\r\n	<li>selalu bersihkan tempat tinggal kucing</li>\r\n</ol>\r\n\r\n<p>Untuk pengobatannya yaitu :</p>\r\n\r\n<ol>\r\n	<li>gunakan shampoo anti jamur untuk kucing</li>\r\n	<li>oleskan cream anti jamur untuk kucing</li>\r\n	<li>jemur kucing dibawah sinar matahari pagi selama 10 &ndash; 15 menit, karena vitamin D baik untuk kulit dan bulu kucing.</li>\r\n</ol>', '1638341925_dermatophytosis.jpg', '2021-11-30 21:19:02', '2021-11-30 23:58:45'),
('P005', 'Otitis', 'otitis', '<p>Otitis adalah sakit atau peradangan pada saluran pendengaran. Otits terbagi menjadi 3 bagian, yaitu :</p>\r\n\r\n<ol>\r\n	<li>Otitis eksterna (jika berada di saluran telinga luar saja)</li>\r\n	<li>Otitis media (yang melibatkan saluran telinga bagian tenga)</li>\r\n	<li>Otitis interna (telinga bagian dalam dan struktur dalam telinga)</li>\r\n</ol>\r\n\r\n<p>Gejala yang timbul dari penyakit ini antara lain :</p>\r\n\r\n<ol>\r\n	<li>Terdapat kotoran pada telinga kucing</li>\r\n	<li>Daun telinga memerah dan terkadang bengkak</li>\r\n	<li>Terdapat luka di sekitar telinga</li>\r\n	<li>Kerontokan bulu di sekitar lipatan telinga</li>\r\n	<li>Bau telinga tidak sedap.</li>\r\n</ol>', '<p>Langkah pencegahan dan pengobatan dari penyakit ini bersihkan telinga kucing Anda secara teratur.</p>', '1638340170_otitis.jpg', '2021-11-30 23:29:30', '2021-11-30 23:29:30'),
('P006', 'Cat Flu', 'cat-flu', '<p>Cat Flu adalah penyakit yang disebabkan oleh virus. Penyakit ini dapat menular melalui air liur dan droplet yang terkandung virus yang biasanya terdapat pada tempat makanan, dan tempat tinggal.</p>\r\n\r\n<p>Gejala yang timbul dari Cat Flu antara lain :</p>\r\n\r\n<ol>\r\n	<li>Kucing mengalami demam / suhu badan meningkat</li>\r\n	<li>Kucing mengalami bersin-bersin,</li>\r\n	<li>Kucing terlihat lemah dan lesu</li>\r\n	<li>Kucing mengeluarkan cairan dari hidung (beringus)</li>\r\n	<li>Kucing mengalami batuk-batuk.</li>\r\n</ol>', '<p>Cara pencegahan cat flu bisa dilakukan dengan cara vaksinasi sesuai jadwal. Sedangkan untuk pengobatan, tidak ada obat untuk penyakit ini. Akan tetapi, dapat diberikan antibiotik seperti penurun panas untuk mencegah infeksi sekunder. Jangan lupa untuk memberikan vitamin untuk meningkatkan kekebalan tubuh.</p>', '1638341455_cat flu.jpg', '2021-11-30 23:50:55', '2021-11-30 23:50:55'),
('P007', 'Pediculosis', 'pediculosis', '<p>Pediculosis adalah penyakit kulit pada kucing yang disebabkan oleh kutu (lice). Penyakit ini dapat menular ke kucing lain, jadi selalu hindarkan kucing peliharaan dari kucing yang mempunyai sakit ini.</p>\r\n\r\n<p>Gejala yang timbul dari penyakit ini antara lain :</p>\r\n\r\n<ol>\r\n	<li>Terdapat telur kutu pada bulu kucing</li>\r\n	<li>kucing sering mengalami gatal-gatal sehingga sering menggaruk-garuk badan</li>\r\n	<li>Kerontokan bulu pada kucing.</li>\r\n</ol>', '<ol>\r\n</ol>\r\n\r\n<p>cara pencegahan&nbsp; dan mengobati Pediculosis dengan memandikan kucing dengan shampoo anti parasit, jauhkan kucing peliharaan dengan kucing lain yang menderita penyakit Pediculosis.</p>', '1638343536_pediculosis.jpg', '2021-12-01 00:25:36', '2021-12-01 00:25:36'),
('P008', 'Konjunctivitis', 'konjunctivitis', '<p>Konjungtivitis adalah tentang peradangan mukosa mata, yaitu lapisan membran dan bagian dalam kelopak mata. Penyakit ini dapat disebabkan oleh infeksi mata, alergi dan berbagai penyakit.</p>\n\n<p>Gejala yang ditimbulkan dari penyakit Pediculosis&nbsp;adalah :</p>\n\n<ol>\n	<li>Kemerahan pada selaput lendir mata</li>\n	<li>Pembengkakan kelopak mata</li>\n	<li>Mata tertutup atau kesulitan membukanya karena pembengkakan</li>\n	<li>Kucing sering mengusap-usap mata.</li>\n</ol>', '<p>Cara pengobatan pediculosis yaitu&nbsp;menggunakan obat saleb seperti <em><strong>Terramycin</strong></em> &nbsp;atau obat tetes mata seperti <strong><em>Trixin Cat</em></strong>, dan sering membersihkan kotoran mata dengan kain kasa atau tissu.</p>', '1638343917_konjunctivitis.jpg', '2021-12-01 00:31:57', '2021-12-01 00:31:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjek` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `subjek`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'Revangga', 'revanggaajip2@gmail.com', 'kritik', 'sebuah kritik saran', '2021-12-26 07:06:06', '2021-12-26 07:06:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'admin', 'admin@gmail.com', '$2y$10$SKpXavLd5ISQBq5RPwq8uerFkXJaCY7LAla2YtCknUjVvZeuiwE/y', NULL, '2022-03-18 03:16:07', '2022-03-18 03:16:07');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `basis_pengetahuan_gejala_id_foreign` (`gejala_id`),
  ADD KEY `basis_pengetahuan_penyakit_id_foreign` (`penyakit_id`);

--
-- Indeks untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diagnosa_penyakit_id_foreign` (`penyakit_id`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `basis_pengetahuan`
--
ALTER TABLE `basis_pengetahuan`
  ADD CONSTRAINT `basis_pengetahuan_gejala_id_foreign` FOREIGN KEY (`gejala_id`) REFERENCES `gejala` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `basis_pengetahuan_penyakit_id_foreign` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD CONSTRAINT `diagnosa_penyakit_id_foreign` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
