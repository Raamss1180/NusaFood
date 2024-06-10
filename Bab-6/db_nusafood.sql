-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2024 at 04:50 AM
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
-- Database: `db_nusafood`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id` int NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id`, `email`, `password`, `username`) VALUES
(1, 'qwe@gmail.com', '$2y$10$o9Q9I0qX4pICqbMVM2VuceuJ6uq6AvEPpHXq7A87jAZYzbGdpi1/.', 'Ramen'),
(2, 'iamnoe.fr@gmail.com', '$2y$10$MitGBP.lM3zO.aoWRSgyjO6qbZ7UGvKJRlHV3Rnu0hMT58TY.CWeO', 'Raamss'),
(3, 'vigain.rv@gmail.com', '$2y$10$Vl1Sm8QwiO6cd992JnZd..uuO0nKJaUY3p4aZN9cs5Jbp0meKpLpS', 'Chavess'),
(7, 'admin@gmail.com', '$2y$10$JMny8PijluY.UVRJUsVpjei8F4/wHgFb2x19vjwdiwqtX2qjZ3z0S', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_feed`
--

CREATE TABLE `tb_feed` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id` int NOT NULL,
  `menu` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id`, `menu`, `deskripsi`, `harga`, `foto`) VALUES
(9, 'Bakso', 'ini sate', 20000, '666593d1172e4.jpg'),
(10, 'rendang', 'ini baru namanya rendang', 15000, '666593e0b4ad5.jpg'),
(11, 'Soto', 'Lapar saya ni, mau soto juga jadinya', 12000, '666593ebc6688.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` int NOT NULL,
  `makanan` varchar(50) NOT NULL,
  `jumlah` int NOT NULL,
  `harga` int NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `nama`, `alamat`, `no_hp`, `makanan`, `jumlah`, `harga`, `tanggal`, `status`) VALUES
(5, 'Rama', 'kek biasa nya aja bang ya', 911, 'rendang', 2, 30000, '2024-06-10', 'succes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_feed`
--
ALTER TABLE `tb_feed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_feed`
--
ALTER TABLE `tb_feed`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
