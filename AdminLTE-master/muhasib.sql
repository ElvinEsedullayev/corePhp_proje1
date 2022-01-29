-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 12:19 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muhasib`
--

-- --------------------------------------------------------

--
-- Table structure for table `alacaqlar`
--

CREATE TABLE `alacaqlar` (
  `id` int(11) NOT NULL,
  `ad` varchar(100) NOT NULL,
  `aciqlama` text NOT NULL,
  `zaman` date NOT NULL,
  `tutar` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alacaqlar`
--

INSERT INTO `alacaqlar` (`id`, `ad`, `aciqlama`, `zaman`, `tutar`) VALUES
(1, 'masin', 'bir yeni masin aldim', '2021-12-31', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `calisanlar`
--

CREATE TABLE `calisanlar` (
  `id` int(11) NOT NULL,
  `ad` varchar(100) NOT NULL,
  `yas` int(11) NOT NULL,
  `bolum` varchar(70) NOT NULL,
  `maas` float NOT NULL,
  `is_bas_vaxt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calisanlar`
--

INSERT INTO `calisanlar` (`id`, `ad`, `yas`, `bolum`, `maas`, `is_bas_vaxt`) VALUES
(1, 'Elvin', 30, 'developer', 1000, '2022-01-30'),
(3, 'aygun', 28, 'menecer', 500, '2021-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `firma` varchar(200) NOT NULL,
  `zaman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(100) NOT NULL,
  `sifre` varchar(100) NOT NULL,
  `yetkili` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `firma`, `zaman`, `email`, `sifre`, `yetkili`) VALUES
(1, 'firma', '2021-12-25 18:27:58', 'firma@gmail.com', '123456789', 'yetkili'),
(2, 'firma-1', '2021-12-25 18:41:50', 'firma-1@gmail.com', '123456789', 'yetki'),
(3, 'firma-2', '2021-12-25 18:44:49', 'firma-2@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'yetkili');

-- --------------------------------------------------------

--
-- Table structure for table `masraflar`
--

CREATE TABLE `masraflar` (
  `id` int(11) NOT NULL,
  `basliq` varchar(250) NOT NULL,
  `aciqlama` text NOT NULL,
  `tutar` float NOT NULL,
  `zaman` date NOT NULL,
  `kategori` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `masraflar`
--

INSERT INTO `masraflar` (`id`, `basliq`, `aciqlama`, `tutar`, `zaman`, `kategori`) VALUES
(1, 'koltuk masa', 'a magazasindan koltuk alindi', 5600, '2021-12-17', 'genel'),
(4, 'test 23', 'test 3', 50045, '2021-12-21', 'test 5');

-- --------------------------------------------------------

--
-- Table structure for table `nakit`
--

CREATE TABLE `nakit` (
  `id` int(11) NOT NULL,
  `basliq` varchar(200) NOT NULL,
  `aciqlama` varchar(200) NOT NULL,
  `para_gelen` float(20,2) NOT NULL,
  `para_giden` float(20,2) NOT NULL,
  `zaman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nakit`
--

INSERT INTO `nakit` (`id`, `basliq`, `aciqlama`, `para_gelen`, `para_giden`, `zaman`) VALUES
(1, 'aygunden 50 azn borc aldim', 'aygunden 50 azn borc aldim', 50.00, 0.00, '2021-12-24'),
(3, 'maas', 'bu ay maasini aldim', 600.00, 0.00, '2021-12-30'),
(4, 'premiya', 'bayrama gore 300 azn mukafat verildi', 300.00, 0.00, '2021-12-30'),
(5, 'test', 'test', 0.00, 325.00, '2021-12-31'),
(6, 'test', 'test', 120.00, 0.00, '2021-12-01'),
(7, 'test 2', 'test 2', 500.00, 0.00, '2021-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `odemeler`
--

CREATE TABLE `odemeler` (
  `id` int(11) NOT NULL,
  `basliq` varchar(250) NOT NULL,
  `aciqlama` varchar(250) NOT NULL,
  `kime` varchar(100) NOT NULL,
  `zaman` date NOT NULL,
  `tutar` float NOT NULL,
  `para_alinan_zaman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `odemeler`
--

INSERT INTO `odemeler` (`id`, `basliq`, `aciqlama`, `kime`, `zaman`, `tutar`, `para_alinan_zaman`) VALUES
(1, 'basliq ', 'borc verildi', 'dosta', '2021-12-17', 500, '2021-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `satis`
--

CREATE TABLE `satis` (
  `id` int(11) NOT NULL,
  `basliq` varchar(100) NOT NULL,
  `aciqlama` text NOT NULL,
  `zaman` date NOT NULL,
  `tutar` float NOT NULL,
  `odeme` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `satis`
--

INSERT INTO `satis` (`id`, `basliq`, `aciqlama`, `zaman`, `tutar`, `odeme`) VALUES
(1, 'basliq', 'aciqlama', '2021-12-24', 500, 'odeme kartla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alacaqlar`
--
ALTER TABLE `alacaqlar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calisanlar`
--
ALTER TABLE `calisanlar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masraflar`
--
ALTER TABLE `masraflar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nakit`
--
ALTER TABLE `nakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `odemeler`
--
ALTER TABLE `odemeler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satis`
--
ALTER TABLE `satis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alacaqlar`
--
ALTER TABLE `alacaqlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `calisanlar`
--
ALTER TABLE `calisanlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `masraflar`
--
ALTER TABLE `masraflar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nakit`
--
ALTER TABLE `nakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `odemeler`
--
ALTER TABLE `odemeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `satis`
--
ALTER TABLE `satis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
