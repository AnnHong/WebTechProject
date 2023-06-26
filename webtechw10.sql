-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 05:15 PM
-- Server version: 8.0.27
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtechw10`
--

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `desc` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `kategori`, `nama`, `desc`, `date`, `gambar`) VALUES
(1, 'weapons and arms', 'Keris Warisan Melayu', 'Senjata tradisional warisan melayu nusantara.', 'tidak ternilai', 'keris.jpg'),
(2, 'weapons and arms', 'tombak dan lembing', 'tombak dan lembing warisan nusantara', '1400 Hijrah', 'tombak.jpg'),
(3, 'weapons and arms', 'Badik', 'lorem ipsum des tradis.', '1350 Hijrah', 'badik.jpg'),
(4, 'weapons and arms', 'Sundang', 'Sundang.', '1300 Hijrah', 'sundang.jpg'),
(5, 'weapons and arms', 'Kerambit', 'eni kraftangan yang telah lama wujud di kalangan masyarakat Malaysia.', '1240 Hijrah', 'kerambit.jpg'),
(6, 'household items', 'congkak', 'congkak permainan tradisional', '1440 Hijrah', 'congkak.png'),
(7, 'household items', 'tepak sirih', 'bagai pinang dibelah dua - peribahasa melayu', '1300 Hijrah1400 Hijrah', 'tepakSirih.jpg'),
(8, 'textiles', 'songket tenun asli', 'lorem ipsum.', '1444 Hijrah', 'songket.jpg'),
(9, 'textiles', 'Batik canting', 'batik canting lukisan tangan asli.', '1444 Hijrah', 'batikCanting.jpg'),
(10, 'carving and woodworks', 'tunjuk langit', 'dipasang di bumbung rumah tradisional, menyimpan falsafah tersirat disebaliknya', '1330 Hijrah', 'tunjukLangit.jpg'),
(11, 'carving and woodworks', 'ukiran kayu', 'ukiran tangan, material kayu cengal merah', '24000', 'ukiranKayu.jpg'),
(12, 'carving and woodworks', 'to be completed', 'kosong', 'none', 'none.jpg'),
(13, 'carving and woodworks', 'Ukiran Iban', 'Ukiran oleh kaum Iban di Sarawak', 'later', 'ukiranIban.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
