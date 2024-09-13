-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 02:32 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serangkai`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `judul` varchar(56) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `judul`, `deskripsi`) VALUES
(6, 'CV. LIMA SERANGKAI', 'Now connecting more than 90 destinations around the world,including exotic locations in the archipelago. With an impressive monthly export frequency, reaching 50 destinations, Lima Serangkai provides the best service under the concept of \'Experience makes the best\', highlighting the essence of Indonesian hospitality and rich culture.');

-- --------------------------------------------------------

--
-- Table structure for table `alasan`
--

CREATE TABLE `alasan` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alasan`
--

INSERT INTO `alasan` (`id`, `judul`, `deskripsi`) VALUES
(2, 'Market Expansion', 'Exporting allows CV. Lima Serangkai to tap into new and                         potentially larger markets outside their domesti'),
(3, 'Competitive Advantage', 'If the products or services offered by CV. Lima                         Serangkai have a unique selling proposition or are of                         high quality, they may have a competitive advantage in                         foreign markets, leading to higher demand.'),
(4, 'Economies of Scale', 'Exporting can lead to increased production volumes,                         which can result in economies of scale, reducing                         production costs per unit and improving overall                         profitability.');

-- --------------------------------------------------------

--
-- Table structure for table `content1`
--

CREATE TABLE `content1` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(999) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content1`
--

INSERT INTO `content1` (`id`, `judul`, `deskripsi`, `foto`) VALUES
(1, 'About', 'As part of the CV Lima Serangkai family, there are 20 box trucks in operation. Through a journey of continuous transformation, Lima Serangkai has gained global recognition. Lima Serangkai\'s commitment to excellence continues to radiate Indonesia\'s excellence to the world  through world-class export services. In the Indonesian context, exports of goods also play an important role in driving the economic and trade sectors. Governments and business actors often work together to encourage exports of of goods can also help increase the country\'s foreign exchange, which in turn can be used to finance imports, investment and infrastructure development.', 'jahe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `content2`
--

CREATE TABLE `content2` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(999) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content2`
--

INSERT INTO `content2` (`id`, `judul`, `deskripsi`, `foto`) VALUES
(1, 'Product', 'Indonesia is a country that has a variety of export products that are known in the global market. Some of the main commodities exported from Indonesia include palm oil, mining products such as coal and metal ores, agricultural products such as coffee and rubber, and fishery products. In addition, Indonesia is also famous in the textile, clothing and wood product industries. Energy products such as oil and natural gas also form an important part of Indonesia\'s exports. CV. Lima Serangkai, as one of Indonesia\'s export business actors, plays a role in developing and expanding the export market for high quality products.', 'arang.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `content3`
--

CREATE TABLE `content3` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(128) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content3`
--

INSERT INTO `content3` (`id`, `judul`, `deskripsi`, `foto`) VALUES
(1, 'FOOD & SERVICE', 'testt', 'bg1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'Super Admin'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `foto`) VALUES
(45, 'ekspor1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `judul`, `deskripsi`, `foto`) VALUES
(1, 'Card Title', 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'tes.png'),
(5, 'Card Title', 'This Is Short Card', 'tes.png'),
(6, 'Card Title', 'This is a longer card with supporting text below as a natural lead-in to additional content.', 'tes.png');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id_unit` int(11) NOT NULL,
  `nama_unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id_unit`, `nama_unit`) VALUES
(1, 'Warehouse'),
(2, 'Ngabarmart putra'),
(3, 'Ngabarmart putri'),
(4, 'Ngabarmart Center'),
(5, 'Bistro Putra'),
(6, 'Bistro Putri'),
(7, 'Laundry Putra'),
(8, 'Laundry Putri'),
(9, 'Laundry Produksi'),
(10, 'Wartel Putra'),
(11, 'Wartel Putri'),
(12, 'Ngabar Hostel & Meeting Room'),
(13, 'Food Court'),
(14, 'Bakery');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `id_level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama_user`, `alamat`, `no_telp`, `id_level`) VALUES
(9, 'Wahyu', 'why01', 'Wahyu Saputraa', 'Jl.Margo Utomo no.17 Demangan siman Ponorogo', '085755843011', 1),
(10, 'Estelle', 'chk01', 'Elle', 'Jl.Krapyak.2', '083845745614', 2),
(39, 'Admin', 'admin', 'Hyura', 'Jl,Margo Utomo', '085755843011', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `judul`, `deskripsi`) VALUES
(1, 'VISI & MISI', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,                       sed do eiusmod tempor incididunt ut labore et dolore magna                       aliqua. Ut enim ad minim veniam, quis nostrud exercitation                       ullamco laboris nisi ut aliquip ex ea commodo consequat.                       Duis aute irure dolor in reprehenderit in voluptate velit                       esse cillum dolore eu fugiat nulla pariatur. Excepteur                       sint occaecat cupidatat non proident, sunt in culpa qui                       officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE `youtube` (
  `id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `youtube`
--

INSERT INTO `youtube` (`id`, `link`) VALUES
(1, 'https://www.youtube.com/embed/rsTQxJb5Yc0?si=49eqABsqaylo5ZxW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alasan`
--
ALTER TABLE `alasan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content1`
--
ALTER TABLE `content1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content2`
--
ALTER TABLE `content2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content3`
--
ALTER TABLE `content3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_PETUGAS_REFERENCE_LEVEL` (`id_level`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alasan`
--
ALTER TABLE `alasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `content1`
--
ALTER TABLE `content1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `content2`
--
ALTER TABLE `content2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `content3`
--
ALTER TABLE `content3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_PETUGAS_REFERENCE_LEVEL` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
