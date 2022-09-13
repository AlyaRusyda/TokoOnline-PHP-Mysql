-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 02:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `id_transaksi`, `qty`, `subtotal`) VALUES
(29, 42, 1, 0),
(30, 43, 1, 0),
(31, 44, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `alamat`, `username`, `password`, `telp`) VALUES
(4, 'rani', 'Malang', 'rain', '12345', '082343298945'),
(6, 'maharani', 'Surabaya', 'maharani', '12345', '0888888888');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `level`) VALUES
(4, 'Alya', 'alyea', '12345', 'Junior');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `kategori`, `foto`) VALUES
(16, 'Kipas Angin Cosmos 16-XDC', 'Diameter : 40.6cm\r\nSpeed : 3 pilihan\r\nKonsumsi Daya : 46W', 189000, 'elektronik', 'kipas.jpg'),
(19, 'Setrika Philips HD-1173/80', 'Dimensi : 27 x 30 x 16 cm\r\nKonsumsi Daya : 350W\r\nPanjang Kabel : 1.7m', 295000, 'elektronik', 'setrika1.jpg'),
(21, 'NUTELLA 1kg', 'Masa Penyimpanan : 9 bulan\r\nExp Date : 13-05-2023\r\nBerat Produk : 1700gr', 133000, 'makanan', 'nutella.jpg'),
(23, 'Susu Diamond 1 Litter Rasa Coklat / Strawberry / Skim', 'Masa Penyimpanan : 30 hari\r\nExp Date : 1-2 bulan dari tanggal pembelian', 19990, 'makanan', 'diamond milk.jpg'),
(24, '[Bundling] Paket Double Rumput Laut isi 4 - 2 pack', 'Masa Penyimpanan: 3 Bulan\r\nExp Date : 01-12-2022', 34560, 'makanan', 'rumput laut.jpg'),
(27, '[Best Quality] KONEKTOR LAN RJ45 / RJ 45', 'Konektor RJ45 untuk membuat kabel LAN dengan harga Rp180/pcs', 180, 'komp', 'konektor.jpg'),
(28, 'Flashdisk SanDisk 16GB USB 2.0 Cruzer Blade CZ50 ', 'Masa Garansi : 5 Tahun\r\nKapasitas : 16GB\r\nJenis : Flashdisk', 47500, 'komp', 'flashdisk.jpg'),
(29, 'Bio Beauty Lab 20ml Luxurious Facial Oil Serum', 'Masa Penyimpanan : 12 Bulan\r\nVolume : 20ml\r\nExp Date : 01-08-2023', 272000, 'kecantikan', 'serum.jpg'),
(30, 'Rexona Roll On Dreamy Bright 40Ml', 'Masa Penyimpanan : 6 Bulan\r\nModel : Roll On\r\n0% Alcohol', 12000, 'kecantikan', 'deo.jpg'),
(31, 'Erigo Coach Jacket Art Of Peace Dark Grey', 'Motif : Print\r\nNegara Asal : Indonesia\r\nBahan : Soft Parasut', 500000, 'baju', 'erigo jaket.jpg'),
(32, 'M231 Kemeja Pria Basic Polos Panjang Hitam 1468D', 'Bahan : Katun\r\nMotif : Polos\r\nSize Tersedia : XS, S, M, L, XL, XXL', 134000, 'baju', 'kemeja hitam.jpg'),
(33, 'JINISO - Highwaist Loose Jeans 816 - 826 HANGOVER', 'Bahan : Denim (Non-stretch)\r\nSize : 27, 28, 29, 30, 31, 32, 33, 34', 165500, 'baju', 'jiniso highwaist.jpg'),
(34, 'Berrybenka - Outerwear Blazer Sofia Mully Puff Sleeve Outer', 'LD : 108 cm\r\nPanjang Tangan : 58 cm\r\nLP : 116 cm\r\nPanjang : 60 cm', 239000, 'baju', 'outer berrybenka.jpg'),
(35, 'KAOS POLOS ANAK LENGAN PENDEK', 'Jenis Kelamin : Unisex\r\nMotif : Polos\r\nBahan : Katun', 15000, 'bayi', 'kaos anak.jpg'),
(36, 'MacBear Piyama Anak Setelan', 'Bahan : Katun\r\nNyaman digunakan \r\nDesign yang lucu dan menarik\r\nHalus dan lembut', 199900, 'bayi', 'macbear setelan anak.jpg'),
(37, 'Mooi Jumper Bayi Lilo Rib Romper Baby', 'Size Tersedia : 0-6, 6-12, 1 Year, 2 Year\r\nWarna : Sky Blue, Huzelnut, Navy', 159000, 'bayi', 'romper baby.jpg'),
(38, 'Sweety Gold Comfort NB 52 Pcs', 'Exp Date : 20-06-2024\r\nSize Tersedia : NB, S, M, L', 108700, 'bayi', 'sweety.png'),
(39, 'Bebelac 3 Vanila Susu Pertumbuhan Bubuk 800 gr', '(1-3 tahun)\r\nMasa Penyimpanan : 24 Bulan\r\nExp Date : 15-05-2025', 157700, 'bayi', 'bebelac3.jpg'),
(40, '( 3 Strip ) CDR Suplemen Kalsium Vitamin C', 'Masa Penyimpanan : 24 Bulan\r\nExp Date : 31-12-2023', 24900, 'kesehatan', 'cdr.png'),
(41, 'Imboost Vitamin C Suplemen Daya Tahan Tubuh @8 Tablet', 'Masa Penyimpanan : 12 Bulan\r\nExp Date : 18-01-2024', 44500, '', 'imboost 8 tab.png'),
(42, 'Svarga Gym Ball Yoga Ball Therapy Ball PVC Premium Charcoal Edition Free Pump', 'Bahan : PVC\r\nDiamete r: 55cm | 65cm | 75cm\r\nMaks. Kapasitas Berat : 280 Kgs', 189000, 'olahraga', 'yoga ball.jpg'),
(43, 'Goto NBR Yoga Mat 10mm Matras Alas Anti Slip Tebal', 'Bahan		: Nitrile Butadiene Rubber (NBR) \r\nDimensi		: Panjang 183cm x Lebar 61cm \r\nKetebalan	: 10mm\r\nBerat produk	: 750g', 79900, 'olahraga', 'matras yoga.jpg'),
(44, 'Naturehike ST01 NH17D001-Z Trekking Pole Alloy Anti Karat', 'Merek : Naturehike\r\nModel no : NH17D001-Z\r\nKategori : Trekking Pole\r\nUkuran : 100cm, 120cm, dan 135cm\r\nBerat : 233gr', 129000, 'olahraga', 'hiking pole.jpg'),
(45, 'Barbel/Dumbbell Winstar 1 KG', 'Material : PVC\r\nBerat : 1 kg\r\nTersedia dalam warna : Pink, Ungu, Silver, Orange, Biru ', 12499, 'olahraga', 'barbel 1kg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `tgl_sampai` date NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `tgl_transaksi`, `tgl_sampai`, `id_produk`) VALUES
(42, 4, '2022-09-13', '2022-09-18', 21),
(43, 4, '2022-09-13', '2022-09-18', 28),
(44, 4, '2022-09-13', '2022-09-18', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_produk` (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
