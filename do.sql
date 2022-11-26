-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 05:01 AM
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
-- Database: `do`
--

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(10) NOT NULL,
  `todo` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `todo`, `status`) VALUES
(1, 'Menyapu', 'belum dikerjakan'),
(2, 'mandi', 'belum dikerjakan'),
(3, 'Belanja', 'BELUM DIKERJAKAN'),
(4, 'Belanja', 'BELUM DIKERJAKAN'),
(5, 'Belajar', 'BELUM DIKERJAKAN'),
(6, 'Belajar', 'BELUM DIKERJAKAN'),
(7, 'tikto', 'BELUM DIKERJAKAN'),
(8, 'tikto', 'BELUM DIKERJAKAN'),
(9, 'tikto', 'BELUM DIKERJAKAN'),
(10, 'tikto', 'BELUM DIKERJAKAN'),
(11, 'playing PS', 'BELUM DIKERJAKAN'),
(12, 'playing PS', 'BELUM DIKERJAKAN'),
(13, 'turu', 'BELUM DIKERJAKAN'),
(14, 'turu', 'BELUM DIKERJAKAN'),
(15, 'turu', 'BELUM DIKERJAKAN'),
(16, 'singing', 'BELUM DIKERJAKAN'),
(17, 'singing', 'BELUM DIKERJAKAN'),
(18, 'lllklklk', 'BELUM DIKERJAKAN'),
(19, 'lllklklk', 'BELUM DIKERJAKAN'),
(20, 'aku', 'BELUM DIKERJAKAN'),
(21, 'aku', 'BELUM DIKERJAKAN'),
(22, 'SELECT * FROM todo', 'BELUM DIKERJAKAN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
