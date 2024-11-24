-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 24, 2024 at 01:23 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `foto_komentar`
--

CREATE TABLE `foto_komentar` (
  `id` int NOT NULL,
  `komentar_id` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foto_produk`
--

CREATE TABLE `foto_produk` (
  `id` int NOT NULL,
  `foto` varchar(255) NOT NULL,
  `produk_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

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
) ;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

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
) ;

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
(1, 'Lapak Siswa', 'favicon.ico', 'favicon.ico', 'Muhammad Alfaridzi', 'lapaksiswa, jual beli butun', 'Lapak Siswa adalah website jual beli butun');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

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
) ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

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
