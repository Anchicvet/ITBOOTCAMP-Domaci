-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 04:41 PM
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
-- Database: `turisticka_agencija`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinacije`
--

CREATE TABLE `destinacije` (
  `id_destinacije` int(11) NOT NULL,
  `drzava` varchar(20) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `grad` varchar(20) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `viza` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `destinacije`
--

INSERT INTO `destinacije` (`id_destinacije`, `drzava`, `grad`, `viza`) VALUES
(1, 'Turska', 'Istanbul', 1),
(2, 'Grcka', 'Atina', 0);

-- --------------------------------------------------------

--
-- Table structure for table `putnici`
--

CREATE TABLE `putnici` (
  `broj_pasosa` int(11) NOT NULL,
  `ime_i_prezime` varchar(50) COLLATE utf8mb4_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `putnici`
--

INSERT INTO `putnici` (`broj_pasosa`, `ime_i_prezime`) VALUES
(123456, 'Ana Cvetkovic'),
(789012, 'Bojan Dimitrijevic');

-- --------------------------------------------------------

--
-- Table structure for table `putovanja`
--

CREATE TABLE `putovanja` (
  `id_putovanja` int(11) NOT NULL,
  `datum_polaska` date NOT NULL,
  `datum_povratka` date NOT NULL,
  `id_destinacije` int(11) NOT NULL,
  `cena` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `putovanja`
--

INSERT INTO `putovanja` (`id_putovanja`, `datum_polaska`, `datum_povratka`, `id_destinacije`, `cena`) VALUES
(1, '2021-06-01', '2021-06-10', 1, '1000.00'),
(2, '2021-05-11', '2021-05-27', 2, '500.00'),
(3, '2021-06-01', '2021-06-10', 1, '300.00'),
(4, '2021-05-11', '2021-05-27', 2, '500.00');

-- --------------------------------------------------------

--
-- Table structure for table `spisak_putnika`
--

CREATE TABLE `spisak_putnika` (
  `id` int(11) NOT NULL,
  `id_putovanja` int(11) NOT NULL,
  `broj_pasosa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `spisak_putnika`
--

INSERT INTO `spisak_putnika` (`id`, `id_putovanja`, `broj_pasosa`) VALUES
(1, 1, 123456),
(2, 2, 123456),
(3, 2, 789012),
(4, 1, 789012);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinacije`
--
ALTER TABLE `destinacije`
  ADD PRIMARY KEY (`id_destinacije`);

--
-- Indexes for table `putnici`
--
ALTER TABLE `putnici`
  ADD UNIQUE KEY `broj_pasosa` (`broj_pasosa`);

--
-- Indexes for table `putovanja`
--
ALTER TABLE `putovanja`
  ADD PRIMARY KEY (`id_putovanja`),
  ADD KEY `id_destinacije` (`id_destinacije`);

--
-- Indexes for table `spisak_putnika`
--
ALTER TABLE `spisak_putnika`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_putovanja` (`id_putovanja`),
  ADD KEY `broj_pasosa` (`broj_pasosa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinacije`
--
ALTER TABLE `destinacije`
  MODIFY `id_destinacije` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `putovanja`
--
ALTER TABLE `putovanja`
  MODIFY `id_putovanja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `spisak_putnika`
--
ALTER TABLE `spisak_putnika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `putovanja`
--
ALTER TABLE `putovanja`
  ADD CONSTRAINT `putovanja_ibfk_1` FOREIGN KEY (`id_destinacije`) REFERENCES `destinacije` (`id_destinacije`);

--
-- Constraints for table `spisak_putnika`
--
ALTER TABLE `spisak_putnika`
  ADD CONSTRAINT `spisak_putnika_ibfk_1` FOREIGN KEY (`id_putovanja`) REFERENCES `putovanja` (`id_putovanja`),
  ADD CONSTRAINT `spisak_putnika_ibfk_2` FOREIGN KEY (`broj_pasosa`) REFERENCES `putnici` (`broj_pasosa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
