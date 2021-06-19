-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 05:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vodjenje_prodaje`
--

-- --------------------------------------------------------

--
-- Table structure for table `prodaja`
--

CREATE TABLE `prodaja` (
  `id_prodaje` int(11) NOT NULL,
  `barkod` varchar(3) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `kolicina` int(11) NOT NULL,
  `cena` decimal(9,2) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `prodaja`
--

INSERT INTO `prodaja` (`id_prodaje`, `barkod`, `kolicina`, `cena`, `datum`) VALUES
(1, '123', 2, '100.00', '2021-06-17'),
(3, '156', 5, '110.00', '2021-05-01'),
(4, '234', 1, '150.00', '2021-06-17'),
(5, '456', 3, '90.00', '2021-06-17'),
(6, '456', 5, '90.00', '2021-06-17'),
(7, '234', 4, '150.00', '2021-05-01'),
(8, '234', 2, '150.00', '2021-05-01'),
(9, '123', 7, '100.00', '2021-06-17'),
(10, '123', 3, '100.00', '2021-06-17'),
(12, '789', 20, '200.00', '2021-06-17'),
(13, '789', 40, '250.00', '2021-06-17'),
(14, '789', 10, '220.00', '2021-06-17'),
(15, '776', 30, '50.00', '2021-05-01'),
(22, '761', 20, '100.00', '2021-06-17'),
(23, '761', 30, '110.00', '2021-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `barkod` varchar(3) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `naziv` varchar(20) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `cena_proizvoda` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`barkod`, `naziv`, `cena_proizvoda`) VALUES
('123', 'krastavac', '100.00'),
('156', 'narandža', '110.00'),
('234', 'limun', '150.00'),
('456', 'kivi', '90.00'),
('761', 'beli luk', '80.00'),
('776', 'crni luk', '80.00'),
('789', 'paradajz', '200.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD PRIMARY KEY (`id_prodaje`),
  ADD KEY `barkod` (`barkod`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD UNIQUE KEY `barkod` (`barkod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodaja`
--
ALTER TABLE `prodaja`
  MODIFY `id_prodaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD CONSTRAINT `prodaja_ibfk_1` FOREIGN KEY (`barkod`) REFERENCES `proizvodi` (`barkod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
