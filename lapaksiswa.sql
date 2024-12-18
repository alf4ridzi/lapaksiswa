-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2024 at 02:59 PM
-- Server version: 8.0.31
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
('ci_session:jk7c2fg548fq7d7e7jjb97bskmdp0kep', '::1', '2024-12-05 07:28:02', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733333338333638323b5f63695f70726576696f75735f75726c7c733a35333a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f70726f64756b2f6d6f7573652d776972656c657373223b),
('ci_session:ne2fn1hmm62rohg7ea7osh7rjnq7k7j1', '::1', '2024-12-05 06:51:43', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733333338313530333b5f63695f70726576696f75735f75726c7c733a34333a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f7365617263682f6b616f73223b),
('ci_session:h8u2ih4nuqs7s0pe5beeavdmn0he2p58', '::1', '2024-12-05 06:57:43', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733333338313836333b5f63695f70726576696f75735f75726c7c733a34333a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f7365617263682f74657374223b),
('ci_session:7lrhud8lsf9itlpgh4t6obhcakababok', '::1', '2024-12-05 07:03:23', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733333338323230333b5f63695f70726576696f75735f75726c7c733a34333a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f7365617263682f74657374223b),
('ci_session:5om60akfj7t463i8pugesetikve5iorr', '::1', '2024-12-05 07:08:40', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733333338323532303b5f63695f70726576696f75735f75726c7c733a35353a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f70726f64756b2f6b616f732d706f6c6f732d7075746968223b),
('ci_session:td4mq0vgdstfsupalnhoj5t87n7is3j0', '::1', '2024-12-05 07:15:05', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733333338323930353b5f63695f70726576696f75735f75726c7c733a34363a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f7365617263682f70616b6169616e223b),
('ci_session:u9pvel1vjvtgijlqghrdto110god57ad', '::1', '2024-12-05 07:21:56', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733333338333331363b5f63695f70726576696f75735f75726c7c733a34363a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f7365617263682f70616b6169616e223b),
('ci_session:evqhspv6l0ccnlnc4i5aos2jnunccou2', '::1', '2024-12-05 07:18:24', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733333338333036343b5f63695f70726576696f75735f75726c7c733a34363a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f7365617263682f70616b6169616e223b),
('ci_session:og60fgkgelraebkhplb4dle3pmrd953l', '::1', '2024-12-05 07:28:12', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733333338333639323b5f63695f70726576696f75735f75726c7c733a34363a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f7365617263682f70616b6169616e223b),
('ci_session:lud7tin7n5lp4b5avfhhqkmcbl3lu0dg', '::1', '2024-12-05 07:36:15', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733333338343137353b5f63695f70726576696f75735f75726c7c733a35343a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f7365617263683f6b6579776f72643d70616b6169616e223b),
('ci_session:ka7877c0mbvenijvn5qbp3a23etoo6dv', '::1', '2024-12-05 07:28:44', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733333338333639323b5f63695f70726576696f75735f75726c7c733a35343a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f7365617263683f6b6579776f72643d70616b6169616e223b),
('ci_session:f5thmbn302unght3fdau3aj2v93aj52g', '::1', '2024-12-05 07:52:07', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733333338353132373b5f63695f70726576696f75735f75726c7c733a35313a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f7365617263683f6b6579776f72643d74657374223b),
('ci_session:2rldn5cov4o3e22h0euabo57l1hbb7q4', '::1', '2024-12-05 07:55:21', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733333338353132373b5f63695f70726576696f75735f75726c7c733a35343a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f7365617263683f6b6579776f72643d70616b6169616e223b),
('ci_session:0147jqlfb8r9f01fu598e1m6uo1sm8i9', '::1', '2024-12-05 12:26:58', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733333430313631383b5f63695f70726576696f75735f75726c7c733a35343a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f7365617263683f6b6579776f72643d70616b6169616e223b),
('ci_session:uil1ikn1e097buqc79e7o974nrpmm5sa', '::1', '2024-12-05 12:44:49', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733333430323638393b5f63695f70726576696f75735f75726c7c733a36303a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f70726f64756b2f617375732d726f672d7a657068797275732d673134223b),
('ci_session:1mbsruv7d3u1s726kje4mvgfa4bdaj19', '::1', '2024-12-05 14:28:24', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733333430383930343b5f63695f70726576696f75735f75726c7c733a35363a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f7365617263683f6b6579776f72643d5a657068797275732b223b),
('ci_session:hq2a0jj71reh4iec7f6uh9okt8b8to1r', '::1', '2024-12-05 14:23:42', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733333430383632323b5f63695f70726576696f75735f75726c7c733a3131383a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f7365617263683f6b6579776f72643d266b617465676f72693d6d616b616e616e2668617267615f6d696e3d2668617267615f6d61783d266b6f6e646973693d26726174696e673d2675727574616e3d74657262617275223b),
('ci_session:3srbnr67e7f8j5qphds9upbiot89doek', '::1', '2024-12-05 14:26:09', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733333430383632323b5f63695f70726576696f75735f75726c7c733a35343a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f7365617263683f6b6579776f72643d70616b6169616e223b),
('ci_session:v9m1j7puq4acas15qamu6cbfpj8vmll0', '::1', '2024-12-05 14:28:24', 0x5f5f63695f6c6173745f726567656e65726174657c693a313733333430383930343b5f63695f70726576696f75735f75726c7c733a35363a22687474703a2f2f6c6f63616c686f73743a383038302f696e6465782e7068702f7365617263683f6b6579776f72643d5a657068797275732b223b);

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
(2, 'Barang Second', 'Cari barang second disini!', 'barang-second'),
(3, 'Pakaian', 'Cari Pakaian disini', 'pakaian ');

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
-- Table structure for table `pembayaran`
--

DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE `pembayaran` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `nama`, `logo`) VALUES
(1, 'dana', 'assets/metode/dana.webp'),
(2, 'bca', 'assets/metode/bca.webp'),
(3, 'qris', 'assets/metode/qris.webp'),
(4, 'Shoope Pay', 'assets/metode/shoopepay.webp');

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
  `rating` float DEFAULT NULL,
  `harga` bigint NOT NULL,
  `stok` int DEFAULT '0',
  `deskripsi` text,
  `varian` varchar(255) DEFAULT NULL,
  `diskon` decimal(5,2) DEFAULT NULL,
  `status_produk` enum('tersedia','habis','tidak_dijual') DEFAULT 'tersedia',
  `unit` enum('pcs','kg','liter') DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `kondisi` enum('baru','bekas') NOT NULL DEFAULT 'baru',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `produk_id`, `nama`, `username`, `nama_toko`, `produk_slug`, `terjual`, `kategori`, `rating`, `harga`, `stok`, `deskripsi`, `varian`, `diskon`, `status_produk`, `unit`, `foto`, `kondisi`, `created_at`, `updated_at`) VALUES
(1, 'P001', 'Buku Tulis Spiral', 'tokobuku', 'Toko Buku Maju', 'buku-tulis-spiral', 50, 'Alat Tulis', 5, 15000, 100, 'Buku tulis spiral ukuran A5, cocok untuk pelajar.', 'Merah,Biru,Hijau', 10.00, 'tersedia', 'pcs', 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c', 'baru', '2024-11-24 07:39:08', '2024-11-24 14:52:08'),
(2, 'P002', 'Kaos Polos Putih', 'lapakkaos', 'Toko Pakaian Modern', 'kaos-polos-putih', 120, 'pakaian', 5, 45000, 200, 'Kaos polos putih berbahan katun yang nyaman.', 'M,L,XL', 15.00, 'tersedia', 'pcs', 'https://images.unsplash.com/photo-1512436991641-6745cdb1723f', 'baru', '2024-11-24 07:39:08', '2024-12-01 18:28:46'),
(3, 'P003', 'Mouse Wireless', '', 'Tech Store', 'mouse-wireless', 80, 'Elektronik', 4, 75000, 50, 'Mouse wireless dengan desain ergonomis.', 'Hitam,Abu-abu', 5.00, 'tersedia', 'pcs', 'https://images.unsplash.com/photo-1517433456452-f9633a875f6f', 'baru', '2024-11-24 07:39:08', NULL),
(4, 'P004', 'Tas Ransel Kulit', '', 'Toko Tas Trendi', 'tas-ransel-kulit', 30, 'Makanan Enak', 5, 250000, 20, 'Tas ransel berbahan kulit asli, cocok untuk aktivitas sehari-hari.', 'Coklat,Hitam', 20.00, 'tersedia', 'pcs', 'https://images.unsplash.com/photo-1579517289805-cf068d9666a7', 'baru', '2024-11-24 07:39:08', '2024-12-01 18:55:18'),
(5, 'P005', 'Lampu LED Meja', '', 'Home Living Store', 'lampu-led-meja', 60, 'Perlengkapan Rumah', 4, 95000, 70, 'Lampu meja LED dengan tingkat pencahayaan yang bisa diatur.', 'Putih', 0.00, 'tersedia', 'pcs', 'https://images.unsplash.com/photo-1574169208507-843761448847', 'baru', '2024-11-24 07:39:08', NULL),
(6, 'P006', 'Botol Minum Stainless', '', 'Outdoor Gear', 'botol-minum-stainless', 150, 'Perlengkapan Outdoor', 5, 120000, 300, 'Botol minum stainless steel tahan panas dan dingin.', '500ml,750ml', 10.00, 'tersedia', 'liter', 'https://images.unsplash.com/photo-1519671482749-fd09be7ccebf', 'baru', '2024-11-24 07:39:08', NULL),
(7, 'P007', 'Notebook Planner', '', 'Toko Buku Inspirasi', 'notebook-planner', 90, 'Alat Tulis', 5, 85000, 50, 'Notebook planner untuk mencatat rencana harian.', 'A5', 5.00, 'tersedia', 'pcs', 'https://images.unsplash.com/photo-1571850553904-7a4b282f1ea0', 'baru', '2024-11-24 07:39:08', NULL),
(8, 'P008', 'Sneakers Casual', '', 'Fashion Street', 'sneakers-casual', 40, 'Sepatu', 4, 320000, 25, 'Sneakers kasual untuk aktivitas sehari-hari.', '39,40,41,42', 25.00, 'tersedia', 'pcs', 'https://images.unsplash.com/photo-1517598024396-9f2158a1639a', 'baru', '2024-11-24 07:39:08', NULL),
(9, 'P009', 'Smartwatch Fit', '', 'Tech Wearables', 'smartwatch-fit', 70, 'Elektronik', 5, 450000, 35, 'Smartwatch dengan fitur olahraga dan kesehatan.', 'Hitam,Putih', 20.00, 'tersedia', 'pcs', 'https://images.unsplash.com/photo-1504540982659-79520a58a86d', 'baru', '2024-11-24 07:39:08', NULL),
(10, 'P010', 'Meja Lipat Portable', '', 'Furniture Unik', 'meja-lipat-portable', 25, 'Furniture', 4, 300000, 10, 'Meja lipat portable, praktis untuk bekerja atau belajar.', 'Kayu,Coklat', 0.00, 'tersedia', 'pcs', 'https://images.unsplash.com/photo-1505691723518-36a499c86e73', 'baru', '2024-11-24 07:39:08', NULL),
(69, '1', 'Samsung Galaxy S23', 'user1', 'Tech Store', 'samsung-galaxy-s23', 50, 'Smartphones', 4.8, 12000000, 15, 'Flagship smartphone with advanced features', 'Color: Phantom Black', 5.00, 'tersedia', 'pcs', 'https://example.com/images/samsung-galaxy-s23.jpg', 'baru', '2024-12-05 12:26:51', NULL),
(70, '2', 'Apple iPhone 14 Pro', 'user2', 'Apple Store', 'iphone-14-pro', 30, 'Smartphones', 4.9, 18000000, 10, 'Latest iPhone with ProMotion display and triple-camera system', 'Color: Space Black', 10.00, 'tersedia', 'pcs', 'https://example.com/images/iphone-14-pro.jpg', 'baru', '2024-12-05 12:26:51', NULL),
(71, '3', 'Sony WH-1000XM5', 'user3', 'Audio Gear', 'sony-wh-1000xm5', 70, 'Headphones', 4.7, 4500000, 25, 'Noise-canceling headphones with premium sound quality', 'Color: Silver', 15.00, 'tersedia', 'pcs', 'https://example.com/images/sony-wh-1000xm5.jpg', 'baru', '2024-12-05 12:26:51', NULL),
(72, '4', 'LG OLED TV 55C2', 'user4', 'Home Electronics', 'lg-oled-tv-55c2', 20, 'Televisions', 4.8, 15000000, 5, '55-inch OLED TV with 4K resolution and smart features', 'Size: 55 inches', 5.00, 'tersedia', 'pcs', 'https://example.com/images/lg-oled-tv-55c2.jpg', 'baru', '2024-12-05 12:26:51', NULL),
(73, '5', 'Adidas Ultraboost 22', 'user5', 'Sports Hub', 'adidas-ultraboost-22', 100, 'Footwear', 4.6, 2500000, 50, 'High-performance running shoes with responsive cushioning', 'Size: 42', 20.00, 'tersedia', 'pcs', 'https://example.com/images/adidas-ultraboost-22.jpg', 'baru', '2024-12-05 12:26:51', NULL),
(74, '6', 'Dyson V15 Detect', 'user6', 'Clean Living', 'dyson-v15-detect', 40, 'Vacuum Cleaners', 4.9, 9500000, 8, 'Advanced vacuum cleaner with laser dust detection', 'Color: Yellow', 10.00, 'tersedia', 'pcs', 'https://example.com/images/dyson-v15-detect.jpg', 'baru', '2024-12-05 12:26:51', NULL),
(75, '7', 'NVIDIA GeForce RTX 4090', 'user7', 'PC Master', 'nvidia-geforce-rtx-4090', 15, 'Graphics Cards', 4.9, 30000000, 2, 'High-end GPU for gaming and creative professionals', 'VRAM: 24GB', 0.00, 'tersedia', 'pcs', 'https://example.com/images/nvidia-geforce-rtx-4090.jpg', 'baru', '2024-12-05 12:26:51', NULL),
(76, '8', 'ASUS ROG Zephyrus G14', 'user8', 'Gaming Laptops', 'asus-rog-zephyrus-g14', 25, 'Laptops', 4.8, 20000000, 10, 'Compact gaming laptop with powerful performance', 'RAM: 16GB', 5.00, 'tersedia', 'pcs', 'https://example.com/images/asus-rog-zephyrus-g14.jpg', 'baru', '2024-12-05 12:26:51', NULL),
(77, '9', 'Rolex Submariner', 'user9', 'Luxury Time', 'rolex-submariner', 5, 'Watches', 5, 150000000, 1, 'Luxury dive watch with iconic design', 'Material: Stainless Steel', 0.00, 'tersedia', 'pcs', 'https://example.com/images/rolex-submariner.jpg', 'baru', '2024-12-05 12:26:51', NULL),
(78, '10', 'Canon EOS R5', 'user10', 'Pro Cameras', 'canon-eos-r5', 12, 'Cameras', 4.9, 60000000, 3, 'Professional mirrorless camera with 8K video recording', 'Lens: 24-105mm', 5.00, 'tersedia', 'pcs', 'https://example.com/images/canon-eos-r5.jpg', 'baru', '2024-12-05 12:26:51', NULL);

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
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

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
