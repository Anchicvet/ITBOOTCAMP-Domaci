-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 11:29 PM
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
-- Database: `tabele1`
--

-- --------------------------------------------------------

--
-- Table structure for table `djaci`
--

CREATE TABLE `djaci` (
  `broj_knjizice` varchar(10) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `ime` varchar(20) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `prezime` varchar(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `razred` varchar(5) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `odeljenje` varchar(5) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `djaci`
--

INSERT INTO `djaci` (`broj_knjizice`, `ime`, `prezime`, `razred`, `odeljenje`) VALUES
('13-2020', 'Ranko', 'Stojic', 'III', '5'),
('14-2020', 'Janko', 'Veselinovic', 'II', '4');

-- --------------------------------------------------------

--
-- Table structure for table `ocene`
--

CREATE TABLE `ocene` (
  `id` int(11) NOT NULL,
  `ocene` varchar(5) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `broj_knjizice` varchar(10) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `id_predmeti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `ocene`
--

INSERT INTO `ocene` (`id`, `ocene`, `broj_knjizice`, `id_predmeti`) VALUES
(8, '2', '13-2020', 3),
(9, '3', '13-2020', 5),
(10, '5', '14-2020', 3),
(11, '4', '14-2020', 4);

-- --------------------------------------------------------

--
-- Table structure for table `predmeti`
--

CREATE TABLE `predmeti` (
  `id_predmeti` int(11) NOT NULL,
  `naziv` varchar(20) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `profesor` varchar(5) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `predmeti`
--

INSERT INTO `predmeti` (`id_predmeti`, `naziv`, `profesor`) VALUES
(3, 'matematika', 'MT'),
(4, 'srpski', 'SR'),
(5, 'srpski', 'FF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `djaci`
--
ALTER TABLE `djaci`
  ADD PRIMARY KEY (`broj_knjizice`);

--
-- Indexes for table `ocene`
--
ALTER TABLE `ocene`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_predmeti` (`id_predmeti`),
  ADD KEY `broj_knjizice` (`broj_knjizice`);

--
-- Indexes for table `predmeti`
--
ALTER TABLE `predmeti`
  ADD PRIMARY KEY (`id_predmeti`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ocene`
--
ALTER TABLE `ocene`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `predmeti`
--
ALTER TABLE `predmeti`
  MODIFY `id_predmeti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ocene`
--
ALTER TABLE `ocene`
  ADD CONSTRAINT `ocene_ibfk_2` FOREIGN KEY (`id_predmeti`) REFERENCES `predmeti` (`id_predmeti`),
  ADD CONSTRAINT `ocene_ibfk_3` FOREIGN KEY (`broj_knjizice`) REFERENCES `djaci` (`broj_knjizice`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
