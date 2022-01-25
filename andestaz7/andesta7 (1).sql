-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 08:09 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andesta7`
--

-- --------------------------------------------------------

--
-- Table structure for table `andestaz7`
--

CREATE TABLE `andestaz7` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tempat_lahir` varchar(250) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `warga` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `nohp` varchar(250) NOT NULL,
  `asalsmp` varchar(250) NOT NULL,
  `ayah` varchar(250) NOT NULL,
  `ibu` varchar(250) NOT NULL,
  `penghasilanorangtua` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `andestaz7`
--

INSERT INTO `andestaz7` (`id`, `nama`, `tempat_lahir`, `tgl_lahir`, `warga`, `alamat`, `email`, `nohp`, `asalsmp`, `ayah`, `ibu`, `penghasilanorangtua`) VALUES
(3, 'Ilham Andestazz', 'Bogor', '2002-12-07', 'Indonesia', 'Jalan Lolongok No 34', 'ilhamandesta04@gmail.com', '081395087448', 'SMP INSAN KAMIL', 'Wilno', 'Desi Wulandari', '200jt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `andestaz7`
--
ALTER TABLE `andestaz7`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `andestaz7`
--
ALTER TABLE `andestaz7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
