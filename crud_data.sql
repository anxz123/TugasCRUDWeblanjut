-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 12:55 AM
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
-- Database: `crud_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `komponen005`
--

CREATE TABLE `komponen005` (
  `id_komponen` int(11) NOT NULL,
  `merek_005` varchar(50) NOT NULL,
  `kapasitas_005` varchar(20) NOT NULL,
  `harga_005` varchar(20) NOT NULL,
  `jenis_005` enum('HDD','RAM') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komponen005`
--

INSERT INTO `komponen005` (`id_komponen`, `merek_005`, `kapasitas_005`, `harga_005`, `jenis_005`) VALUES
(1, 'hp', '128', '100000', 'HDD'),
(3, 'asus', '255', '189000', 'HDD'),
(5, 'intel', '1000', '1000000', 'RAM'),
(6, 'intel', '625', '190000', 'HDD'),
(7, 'sksk', '1110', '110000', 'RAM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komponen005`
--
ALTER TABLE `komponen005`
  ADD PRIMARY KEY (`id_komponen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komponen005`
--
ALTER TABLE `komponen005`
  MODIFY `id_komponen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
