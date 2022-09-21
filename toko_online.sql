-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 05:09 PM
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
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `id_transaksi`, `qty`) VALUES
(94, 114, 1),
(95, 115, 1),
(96, 116, 1),
(97, 117, 2),
(98, 118, 1),
(99, 119, 1),
(100, 120, 1),
(101, 121, 1),
(102, 122, 3),
(103, 123, 1),
(104, 124, 1),
(105, 125, 1),
(106, 126, 1),
(107, 127, 1),
(108, 128, 100);

-- --------------------------------------------------------

--
-- Table structure for table `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id_metode_pembayaran` int(11) NOT NULL,
  `payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`id_metode_pembayaran`, `payment`) VALUES
(1, 'Bayar Tunai di Mitra Shopper'),
(2, 'Transfer Bank'),
(3, 'Shopper Later');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `username`, `email`, `alamat`, `password`) VALUES
(4, 'rani', 'maharain@gmail.com', 'Malang', '12345'),
(6, 'maharani', 'maharani@gmail.com', 'Malang', '12345'),
(11, 'caca', 'caca99@gmail.com', 'Surabaya', '12345'),
(13, 'ahmad', 'ahmad@gmail.com', 'Malang', '12345');

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
(63, 'PLAIN GREEN BLAZZER - 0000723', 'Materials : Cotton Premium\r\nSize : all size fit to XL\r\nTOP\r\nBust : 120 Cm\r\nPANTS\r\nLength : 45 Cm\r\nWaist : Up to 90 cm', 774000, 'Women Dresses', 'plain green blazzer-0000723.jpg'),
(65, 'LIGHT GREY SET - 0000998', 'Materials : Cotton Premium\r\nSize : all size fit to XL\r\nTOP\r\nBust : 120 Cm\r\nPANTS\r\nLength : 45 Cm Waist : Up to 90 cm', 794000, 'Women Dresses', '0000998.jpg'),
(66, 'PLAIN BROWN BLAZER 0000872', 'Materials : Cotton Premium\r\nSize : all size fit to XL\r\nTOP\r\nBust : 120 Cm\r\nPANTS\r\nLength : 45 Cm Waist : Up to 90 cm', 794000, 'Women Dresses', '0000872.jpg'),
(68, 'VINTAGE PLAIN BLACK 0000980', 'Materials : Arabian Silk Premium Size : all size fit to XL Dress Bust : 110 Cm Length : 90 Cm', 878000, 'Women Dresses', '0000980.jpg'),
(69, 'Mens Dress Shirts', '100% Cotton Men Casual Custom Sizes Dress Shirts - Buy Knitted Dress Shirts,Bulk Dress', 300000, 'Men Dresses', 'Mens Dress Shirts.jpeg'),
(70, 'Men Dress Suit', 'Men premium outfit with high ', 250000, 'Men Dresses', 'Men Dress Suit.jpeg'),
(71, 'Mens Semi Casual T Shirt', 'Semi Casual T Shirt with maroon ', 1250000, 'Men Dresses', 'Men Semi Casual T Shirt.jpeg'),
(72, 'SET Anting Kalung Hati Purple Heart', 'Heart shaped pendants and earrings with ZIrcon Pendant Crystal stones The size of the Heart shape is approximately 1.4 cm', 250000, 'Accessories', 'SET Anting Kalung Hati.jpeg'),
(73, 'Mens Double Breasted Suit', 'Breasted Suit Vest Fashion Slim Fit Sleeveless Waistcoat Men Business', 1500000, 'Men Dresses', 'Mens Double Breasted Suit.jpeg'),
(74, 'IMPORT Fashion Casual Mens', 'Fashion Casual Mens Silk Satin Dress Shirts Emulation Silk Slim Fit Shirt Men Chemise  Business', 5500000, 'Men Dresses', 'IMPORT Fashion Casual Mens.jpeg'),
(75, 'Silk Formal Suit', 'Silk Satin Dress Shirts Emulation Silk Slim Fit Shirt Men Chemise  Business', 10000000, 'Men Dresses', 'Silk Formal Suit.jpeg'),
(76, 'AliExpress V Neck Lace', 'AliExpress V Neck Lace Knee Length Women Dresses With Short Sleeves Dress For Women Dress Female Vestidos New Arrival  Business', 300000, 'Women Dresses', 'Ali Express.jpeg'),
(77, 'AIR SLING BAG XANDER WATERPROOF POUCH BAG ', 'Designed with waterproof bimo material, this Xander Sling Bag is able to keep your belongings safe and not easily wet even when it rains.', 235000, 'Bags', 'AIR SLING BAG XANDER WATERPROOF POUCH BAG.jpeg'),
(78, 'Silk Casual Suit', 'White Flower Dress Shirts Emulation Silk Slim Fit Shirt Men Chemise  Business', 200000, 'Women Dresses', 'Silk Casual Suit.jpeg'),
(79, 'Dress Womens Material Night', 'Maxi Cotton Vintage 1950s Sleeveless Print Party Gown Prom Swing Frock Short  Business', 400000, 'Women Dresses', 'Dress Womens Material Night.jpeg'),
(80, 'SamMoSon Vibrant Knee', 'Length Summer Holiday Cotton Dress for Women, Short Sleeve Boat Neck Cocktail Formal', 300000, 'Women Dresses', 'SamMoSon Vibrant Knee.jpeg'),
(81, 'Puma Suede Classic Original White Orange', 'Brand New With Replaced Box [BNWB] not KW, not ORIGINAL GRADE, not PREMIUM, this is ORIGINAL. ORIGINAL Made In Indonesia', 700000, 'Shoes', 'Puma Suede Classic Original White Orange.jpeg'),
(82, 'Black Off The Shoulder A Line Dress', 'Cotton Dress for Women, Short Sleeve Boat Neck Cocktail Formal', 600000, 'Women Dresses', 'Black Off The Shoulder A Line Dress.jpeg'),
(83, 'Women Summer Dresses', 'Solid Color 3/4 Sleeve Off Shoulder V Neck Stretchy Swing Dress Casual Sweet Lady Short', 800000, 'Women Dresses', 'Women Summer Dresses.jpeg'),
(84, 'TOYFUNNY Maxi dress Summer', 'Dress for women Pure Retro Princess Cocktail Show Shoulder Party Swing Dresses', 900000, 'Women Dresses', 'TOYFUNNY Maxi dress Summer.jpeg'),
(85, 'Women Dresses Solid', 'Fashion Lace Dress Sleeveless Sexy Off the Shoulder Expansion Dress Elegant Party Ball Grown', 700000, 'Women Dresses', 'Women Dresses Solid.jpeg'),
(86, '2022 Formal Summer Dress Baby Girl', 'Flower Kids Dresses For Girls Children Clothing Ball Gown Party Princess Baby Dress', 200000, 'Baby Dresses', '2022 Formal Summer Dress Baby Girl.jpeg'),
(87, '2022 Formal Autumn Dress Baby Girl ', 'Flower Kids Dresses For Girls Children Clothing Ball Gown Party Princess Baby DressPrincess Baby Dress', 200000, 'Baby Dresses', '2022 Formal Autumn Dress Baby Girl.jpeg'),
(88, 'Girl Children Lace Leaky Shoulder Wedding Dinner Party Dress', 'Dresses For Girls Children Clothing Ball Gown Party Princess Baby DressPrincess Baby Dress', 400000, 'Baby Dresses', 'Girl Children Lace Leaky Shoulder Wedding Dinner Party Dress.jpeg'),
(89, 'HANGON Kids Flower Girls Dresses ', 'Pageant Vestidos Bebes Lace Tulle Kid Girl Party Dress for Wedding Children Summer', 500000, 'Baby Dresses', 'HANGON Kids Flower Girls Dresses.jpeg'),
(90, 'Christmas Baby Girls ', 'Dress For Evening Prom Party Costume Girls Kids Clothes Wedding Birthday Gown Little Girl Red Gow', 300000, 'Baby Dresses', 'Christmas Baby Girls.jpeg'),
(91, 'Clarks flat rg 21801 Sz 36-40', 'Material 100% Genuine Cowhide Super Light, Super Soft, Super Soft & Very Flexible (can be bent), Very Comfortable to Wear (make long walks not hurt)', 300000, 'Shoes', 'Clarks flat rg 21801 Sz 36-40.jpeg'),
(92, 'Belle Gold Earrings', 'Material 100% premium quality Gold Earrings Copper Alloy material', 1250000, 'Accessories', 'Belle Gold Earrings.jpeg'),
(93, 'Ring Set ( 5 ) Korean Women Silver', '100% Brand New And High Quality Material: alloy Color: Silver , Gold IMPORT PRODUCT. No need to doubt the quality. Smooth, Durable, Neat Finishing, Comfortable to wear', 300000, 'Accessories', 'Ring Set ( 5 ) Korean Women.jpeg'),
(94, 'KAIN RAMBUT WANITA KOREA KAIN RAMBUT WANITA KOREA DUSTY PINK', 'Korean style headband bando super lucu dengan warna-warna pastel dan netral yang sangat bagus dipakai. Lapis 2, jadi lebih nyaman dipakai, tidak sakit.', 30000, 'Accessories', 'KAIN RAMBUT WANITA KOREA KAIN RAMBUT WANITA KOREA - DUSTY PINK.jpeg'),
(95, 'Sepatu Joemen J 40 Original Import Coklat Tua, 39', 'Joemen J40 shoes are one of the new and trendy models for you to have. Designed for use in various events. Very comfortable and sturdy when you wear it so it can support your appearance and confidence.', 870000, 'Shoes', 'Sepatu Joemen J 40 Original.jpeg'),
(96, ' Laptop Backpack', 'Material: Babyripstock and other materials with good quality Size: 30x12x43cm With thick foam The bag weight is about 1.25 kg', 135000, 'Bags', 'Laptop Backpack.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `tgl_transaksi`, `id_produk`) VALUES
(114, 4, '2022-09-19', 66),
(115, 4, '2022-09-19', 68),
(116, 4, '2022-09-19', 63),
(117, 4, '2022-09-19', 66),
(118, 4, '2022-09-19', 66),
(119, 4, '2022-09-19', 65),
(120, 11, '2022-09-19', 65),
(121, 11, '2022-09-19', 68),
(122, 11, '2022-09-19', 66),
(123, 11, '2022-09-19', 63),
(124, 11, '2022-09-19', 78),
(125, 11, '2022-09-19', 78),
(126, 11, '2022-09-19', 82),
(127, 11, '2022-09-20', 65),
(128, 4, '2022-09-20', 80);

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
-- Indexes for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id_metode_pembayaran`);

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
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  MODIFY `id_metode_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
