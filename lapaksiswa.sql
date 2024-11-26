-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 26, 2024 at 11:58 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapaksiswa`
--
CREATE DATABASE IF NOT EXISTS `lapaksiswa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `lapaksiswa`;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('ci_session:pt413iflmfv57ie1v5mhc52bq718s2sv', '::1', '2024-11-25 08:36:54', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323532333830383b5f63695f70726576696f75735f75726c7c733a34303a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f7265676973746572223b),
('ci_session:2eeag6desrtoa8pi844i1utjih8e44q1', '::1', '2024-11-26 00:05:00', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323537393530303b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b6572726f727c733a32343a22557365726e616d652f50617373776f72642053616c61682e223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('ci_session:d2qkrg583b0c3ritn15hrnainc7jfd79', '::1', '2024-11-26 00:20:10', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323538303431303b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b6572726f727c733a32343a22557365726e616d652f50617373776f72642053616c61682e223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('ci_session:h1nq11g2rtdupgprd73985bknr36iqfu', '::1', '2024-11-26 00:27:15', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323538303833353b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b6572726f727c733a32343a22557365726e616d652f50617373776f72642053616c61682e223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('ci_session:n5s6lr81tnrjd7eierqfqb6nbk6j6mi5', '::1', '2024-11-26 00:56:53', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323538323631333b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b73756b7365737c733a33333a22526567697374657220426572686173696c212053696c61686b616e204c6f67696e223b5f5f63695f766172737c613a313a7b733a363a2273756b736573223b733a333a226f6c64223b7d),
('ci_session:2fa7i2tfndvso3isbookp10kqpjq3j3f', '::1', '2024-11-26 01:02:10', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323538323933303b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b),
('ci_session:9nsav3dhhcqin8i4a4jlvmropt7trq45', '::1', '2024-11-26 01:13:12', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323538333539323b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b6572726f727c733a32343a22557365726e616d652f50617373776f72642053616c61682e223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('ci_session:8793q35jdep4bn8cv482mjv7arfauuoo', '::1', '2024-11-26 02:00:40', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323538363434303b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b),
('ci_session:4v04l5h0odut0ehenr2arvrm2evjr1l9', '::1', '2024-11-26 02:08:09', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323538363838393b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b69734c6f67696e7c623a313b726f6c657c733a343a2275736572223b757365726e616d657c733a393a22616c66617269647a69223b6e616d617c733a343a2274657374223b),
('ci_session:t9joaf5tiriq09hvc8ns3t80bmnj9j15', '::1', '2024-11-26 02:08:19', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323538363838393b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b69734c6f67696e7c623a313b726f6c657c733a343a2275736572223b757365726e616d657c733a393a22616c66617269647a69223b6e616d617c733a343a2274657374223b),
('ci_session:nmuqudmbjjl2bj11o2i1ced09ct67s4m', '::1', '2024-11-26 05:48:50', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630303133303b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b),
('ci_session:5qpvbbh6hpfa9fhv18re2ffjtv6094k9', '::1', '2024-11-26 05:54:04', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630303434343b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b69734c6f67696e7c623a313b726f6c657c733a343a2275736572223b757365726e616d657c733a393a22616c66617269647a69223b6e616d617c733a343a2274657374223b),
('ci_session:73qpgg8v51o2b9kt3rn43bk2503atppq', '::1', '2024-11-26 05:59:13', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630303735333b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b69734c6f67696e7c623a313b726f6c657c733a343a2275736572223b757365726e616d657c733a393a22616c66617269647a69223b6e616d617c733a343a2274657374223b),
('ci_session:fb16pfb5tu0j6p199oddv5ovtvcbnm1v', '::1', '2024-11-26 06:06:11', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630313137313b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b69734c6f67696e7c623a313b726f6c657c733a343a2275736572223b757365726e616d657c733a393a22616c66617269647a69223b6e616d617c733a343a2274657374223b),
('ci_session:0je84drnln33bkaje1ul9b9hmchcehjr', '::1', '2024-11-26 06:11:20', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630313438303b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b69734c6f67696e7c623a313b726f6c657c733a343a2275736572223b757365726e616d657c733a393a22616c66617269647a69223b6e616d617c733a343a2274657374223b),
('ci_session:sb0vdp817pfjkk3fhk15mp4ad2stuvjh', '::1', '2024-11-26 06:20:36', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630323033363b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b),
('ci_session:3lcmj32gq9rvmftasiahio837o268n57', '::1', '2024-11-26 06:21:12', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630323037323b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b69734c6f67696e7c623a313b726f6c657c733a343a2275736572223b757365726e616d657c733a393a22616c66617269647a69223b6e616d617c733a343a2274657374223b),
('ci_session:u9hk61lcm67tcqktaaekvb8cujkb26tm', '::1', '2024-11-26 06:35:48', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630323934383b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b),
('ci_session:pkts65m2ie9r6io8k0v2i3bptuhmmo00', '::1', '2024-11-26 06:28:48', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630323532383b5f63695f70726576696f75735f75726c7c733a33323a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f223b69734c6f67696e7c623a313b726f6c657c733a343a2275736572223b757365726e616d657c733a393a22616c66617269647a69223b6e616d617c733a343a2274657374223b),
('ci_session:a50k9n2pln8t4t6rleioo6ah524373t8', '::1', '2024-11-26 06:34:43', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630323838333b5f63695f70726576696f75735f75726c7c733a33323a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f223b69734c6f67696e7c623a313b726f6c657c733a343a2275736572223b757365726e616d657c733a393a22616c66617269647a69223b6e616d617c733a343a2274657374223b),
('ci_session:ou48uloireo2pkhkb4m6nv1q7it2i538', '::1', '2024-11-26 06:50:46', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630333834363b5f63695f70726576696f75735f75726c7c733a33323a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f223b69734c6f67696e7c623a313b726f6c657c733a343a2275736572223b757365726e616d657c733a393a22616c66617269647a69223b6e616d617c733a343a2274657374223b),
('ci_session:7te61j4pirpupv55o9bkvs73qs9m2bao', '::1', '2024-11-26 06:40:50', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630333235303b5f63695f70726576696f75735f75726c7c733a33323a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f223b69734c6f67696e7c623a313b726f6c657c733a343a2275736572223b757365726e616d657c733a393a22616c66617269647a69223b6e616d617c733a343a2274657374223b),
('ci_session:5hdbbdbs46co1e8deugqkdv0hi9rqij6', '::1', '2024-11-26 06:47:17', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630333633373b5f63695f70726576696f75735f75726c7c733a33323a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f223b69734c6f67696e7c623a313b726f6c657c733a343a2275736572223b757365726e616d657c733a393a22616c66617269647a69223b6e616d617c733a343a2274657374223b),
('ci_session:eblvr8jr3gku44vvcplnd8tl51dsl6j6', '::1', '2024-11-26 06:55:53', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630343135333b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b),
('ci_session:phgsnmd6vsg5n8visqbf95hou75g5ufu', '::1', '2024-11-26 07:06:02', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630343736323b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b),
('ci_session:omfov32a0frf1hq8vr4einqnv96g2f2t', '::1', '2024-11-26 07:06:23', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630343738333b5f63695f70726576696f75735f75726c7c733a33323a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f223b),
('ci_session:lgv3pnqcgpkm9ja4tgol47l7rrd5i1ng', '::1', '2024-11-26 07:14:10', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630353235303b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b),
('ci_session:fo91ae5b5isgo1tj6d5t8mo32bcndpf4', '::1', '2024-11-26 07:11:31', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630353039313b5f63695f70726576696f75735f75726c7c733a33323a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f223b),
('ci_session:bq2p5tn6qfffgfjm9r120u814g1vvgpe', '::1', '2024-11-26 07:19:51', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630353539313b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b),
('ci_session:pco2qdoi6igk98tovvno7mfko5eqdmck', '::1', '2024-11-26 07:14:10', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630353235303b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b),
('ci_session:3drdva1tu01878qtlqra1l489gaa4ucb', '::1', '2024-11-26 07:24:54', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630353839343b5f63695f70726576696f75735f75726c7c733a33373a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f6c6f67696e223b),
('ci_session:89bduas2fno6b9h6oo265p6v128bhedm', '::1', '2024-11-26 07:28:49', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323630353839343b5f63695f70726576696f75735f75726c7c733a33323a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f223b),
('ci_session:huc0uapi2g7g5krj0n8t2or8kbh2rrol', '::1', '2024-11-26 11:34:56', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323632303839363b5f63695f70726576696f75735f75726c7c733a33323a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f223b),
('ci_session:qp9r11rshlp87ob6lk0em9883v75jke4', '::1', '2024-11-26 11:35:03', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733323632303930333b5f63695f70726576696f75735f75726c7c733a33323a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f223b);

-- --------------------------------------------------------

--
-- Table structure for table `foto_komentar`
--

DROP TABLE IF EXISTS `foto_komentar`;
CREATE TABLE `foto_komentar` (
  `id` int NOT NULL,
  `komentar_id` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foto_produk`
--

DROP TABLE IF EXISTS `foto_produk`;
CREATE TABLE `foto_produk` (
  `id` int NOT NULL,
  `foto` varchar(255) NOT NULL,
  `produk_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `kategori` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `slug` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `deskripsi`, `slug`) VALUES
(1, 'Makanan', 'Cari makanan fav mu disini!', 'makanan'),
(2, 'Barang Second', 'Cari barang second disini!', 'barang-second');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

DROP TABLE IF EXISTS `komentar`;
CREATE TABLE `komentar` (
  `id` int NOT NULL,
  `komentar_id` varchar(50) NOT NULL,
  `produk_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `rating` tinyint DEFAULT NULL,
  `tipe` enum('diskusi','ulasan') DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `edit` enum('yes','no') DEFAULT 'no',
  `anonymous` enum('yes','no') DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `alamat_pengiriman` text,
  `produk` varchar(100) DEFAULT NULL,
  `status` enum('waiting','proses','sukses') DEFAULT 'waiting',
  `harga` decimal(10,2) DEFAULT NULL,
  `metode_pembayaran` varchar(50) DEFAULT NULL,
  `note` text,
  `no_hp` varchar(15) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `id` int NOT NULL,
  `produk_id` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `produk_slug` varchar(100) NOT NULL,
  `terjual` int DEFAULT '0',
  `kategori` varchar(100) DEFAULT NULL,
  `rating` tinyint DEFAULT NULL,
  `harga` decimal(10,2) NOT NULL,
  `stok` int DEFAULT '0',
  `deskripsi` text,
  `varian` varchar(255) DEFAULT NULL,
  `diskon` decimal(5,2) DEFAULT NULL,
  `status_produk` enum('tersedia','habis','tidak_dijual') DEFAULT 'tersedia',
  `unit` enum('pcs','kg','liter') DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `produk_id`, `nama`, `username`, `nama_toko`, `produk_slug`, `terjual`, `kategori`, `rating`, `harga`, `stok`, `deskripsi`, `varian`, `diskon`, `status_produk`, `unit`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'P001', 'Buku Tulis Spiral', 'tokobuku', 'Toko Buku Maju', 'buku-tulis-spiral', 50, 'Alat Tulis', 5, 15000.00, 100, 'Buku tulis spiral ukuran A5, cocok untuk pelajar.', 'Merah,Biru,Hijau', 10.00, 'tersedia', 'pcs', 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c', '2024-11-24 14:39:08', '2024-11-24 14:52:08'),
(2, 'P002', 'Kaos Polos Putih', 'lapakkaos', 'Toko Pakaian Modern', 'kaos-polos-putih', 120, 'Pakaian', 5, 45000.00, 200, 'Kaos polos putih berbahan katun yang nyaman.', 'M,L,XL', 15.00, 'tersedia', 'pcs', 'https://images.unsplash.com/photo-1512436991641-6745cdb1723f', '2024-11-24 14:39:08', '2024-11-24 14:52:17'),
(3, 'P003', 'Mouse Wireless', '', 'Tech Store', 'mouse-wireless', 80, 'Elektronik', 4, 75000.00, 50, 'Mouse wireless dengan desain ergonomis.', 'Hitam,Abu-abu', 5.00, 'tersedia', 'pcs', 'https://images.unsplash.com/photo-1517433456452-f9633a875f6f', '2024-11-24 14:39:08', NULL),
(4, 'P004', 'Tas Ransel Kulit', '', 'Toko Tas Trendi', 'tas-ransel-kulit', 30, 'Aksesoris', 5, 250000.00, 20, 'Tas ransel berbahan kulit asli, cocok untuk aktivitas sehari-hari.', 'Coklat,Hitam', 20.00, 'tersedia', 'pcs', 'https://images.unsplash.com/photo-1579517289805-cf068d9666a7', '2024-11-24 14:39:08', NULL),
(5, 'P005', 'Lampu LED Meja', '', 'Home Living Store', 'lampu-led-meja', 60, 'Perlengkapan Rumah', 4, 95000.00, 70, 'Lampu meja LED dengan tingkat pencahayaan yang bisa diatur.', 'Putih', 0.00, 'tersedia', 'pcs', 'https://images.unsplash.com/photo-1574169208507-843761448847', '2024-11-24 14:39:08', NULL),
(6, 'P006', 'Botol Minum Stainless', '', 'Outdoor Gear', 'botol-minum-stainless', 150, 'Perlengkapan Outdoor', 5, 120000.00, 300, 'Botol minum stainless steel tahan panas dan dingin.', '500ml,750ml', 10.00, 'tersedia', 'liter', 'https://images.unsplash.com/photo-1519671482749-fd09be7ccebf', '2024-11-24 14:39:08', NULL),
(7, 'P007', 'Notebook Planner', '', 'Toko Buku Inspirasi', 'notebook-planner', 90, 'Alat Tulis', 5, 85000.00, 50, 'Notebook planner untuk mencatat rencana harian.', 'A5', 5.00, 'tersedia', 'pcs', 'https://images.unsplash.com/photo-1571850553904-7a4b282f1ea0', '2024-11-24 14:39:08', NULL),
(8, 'P008', 'Sneakers Casual', '', 'Fashion Street', 'sneakers-casual', 40, 'Sepatu', 4, 320000.00, 25, 'Sneakers kasual untuk aktivitas sehari-hari.', '39,40,41,42', 25.00, 'tersedia', 'pcs', 'https://images.unsplash.com/photo-1517598024396-9f2158a1639a', '2024-11-24 14:39:08', NULL),
(9, 'P009', 'Smartwatch Fit', '', 'Tech Wearables', 'smartwatch-fit', 70, 'Elektronik', 5, 450000.00, 35, 'Smartwatch dengan fitur olahraga dan kesehatan.', 'Hitam,Putih', 20.00, 'tersedia', 'pcs', 'https://images.unsplash.com/photo-1504540982659-79520a58a86d', '2024-11-24 14:39:08', NULL),
(10, 'P010', 'Meja Lipat Portable', '', 'Furniture Unik', 'meja-lipat-portable', 25, 'Furniture', 4, 300000.00, 10, 'Meja lipat portable, praktis untuk bekerja atau belajar.', 'Kayu,Coklat', 0.00, 'tersedia', 'pcs', 'https://images.unsplash.com/photo-1505691723518-36a499c86e73', '2024-11-24 14:39:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produk_statistik`
--

DROP TABLE IF EXISTS `produk_statistik`;
CREATE TABLE `produk_statistik` (
  `id` int NOT NULL,
  `produk_id` varchar(50) NOT NULL,
  `dilihat` int DEFAULT '0',
  `disukai` int DEFAULT '0',
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

DROP TABLE IF EXISTS `replies`;
CREATE TABLE `replies` (
  `id` int NOT NULL,
  `komentar_id` varchar(50) NOT NULL,
  `produk_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `nama_toko` varchar(100) DEFAULT NULL,
  `edit` enum('yes','no') DEFAULT 'no',
  `anonymous` enum('yes','no') DEFAULT 'no',
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings_web`
--

DROP TABLE IF EXISTS `settings_web`;
CREATE TABLE `settings_web` (
  `id` int NOT NULL,
  `web_title` varchar(255) NOT NULL,
  `web_icon` varchar(255) NOT NULL,
  `web_logo` varchar(255) NOT NULL,
  `web_author` varchar(255) NOT NULL,
  `web_keywords` varchar(255) NOT NULL,
  `web_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `settings_web`
--

INSERT INTO `settings_web` (`id`, `web_title`, `web_icon`, `web_logo`, `web_author`, `web_keywords`, `web_description`) VALUES
(1, 'Lapak Siswa', 'favicon.ico', 'assets/logo/logo.png', 'Muhammad Alfaridzi', 'lapaksiswa, jual beli butun', 'Lapak Siswa adalah website jual beli butun');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

DROP TABLE IF EXISTS `toko`;
CREATE TABLE `toko` (
  `id` int NOT NULL,
  `toko_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `alamat` text,
  `rating` tinyint DEFAULT NULL,
  `status_toko` enum('aktif','nonaktif') DEFAULT 'aktif',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` bigint DEFAULT NULL,
  `role` enum('admin','user','seller') DEFAULT 'user',
  `foto` varchar(255) DEFAULT NULL,
  `alamat` text,
  `kelas` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `token_reset_password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `last_online` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `username`, `nama`, `tanggal_lahir`, `email`, `no_hp`, `role`, `foto`, `alamat`, `kelas`, `password`, `token_reset_password`, `created_at`, `last_online`, `updated_at`) VALUES
(1, '', 'adminmarket', NULL, NULL, 'aalalfaridzi9@gmail.com', NULL, 'user', NULL, NULL, NULL, 'alfaridzi123', NULL, '2024-11-26 07:31:59', NULL, '2024-11-26 07:37:04'),
(2, '', 'alfaridzi', 'test', NULL, 'nfex.ghost@gmail.com', 858, 'user', NULL, NULL, NULL, '$2y$10$H59yqjbAvLOo1QDKWsAgXuS8K1EOGByhEo.2fJPorJ0Qn52.CTWMa', NULL, '2024-11-26 08:02:48', NULL, '2024-11-26 09:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

DROP TABLE IF EXISTS `user_login`;
CREATE TABLE `user_login` (
  `id` int NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `device` varchar(100) DEFAULT NULL,
  `waktu_login` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

DROP TABLE IF EXISTS `voucher`;
CREATE TABLE `voucher` (
  `id` int NOT NULL,
  `toko_id` varchar(50) NOT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `potongan` decimal(5,2) DEFAULT NULL,
  `stock` int DEFAULT '0',
  `max_potongan` decimal(5,2) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `foto_komentar`
--
ALTER TABLE `foto_komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto_produk`
--
ALTER TABLE `foto_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_statistik`
--
ALTER TABLE `produk_statistik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_web`
--
ALTER TABLE `settings_web`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foto_komentar`
--
ALTER TABLE `foto_komentar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foto_produk`
--
ALTER TABLE `foto_produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk_statistik`
--
ALTER TABLE `produk_statistik`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings_web`
--
ALTER TABLE `settings_web`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
