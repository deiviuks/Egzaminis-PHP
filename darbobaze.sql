-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2022 m. Vas 24 d. 12:04
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darbobaze`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `meistrai`
--

CREATE TABLE `meistrai` (
  `id` int(11) NOT NULL,
  `vardas` varchar(250) NOT NULL,
  `pavarde` varchar(250) NOT NULL,
  `miestas` varchar(100) NOT NULL,
  `pavadinimas` varchar(100) NOT NULL,
  `specializacija` varchar(100) NOT NULL,
  `ivertis` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `meistrai`
--

INSERT INTO `meistrai` (`id`, `vardas`, `pavarde`, `miestas`, `pavadinimas`, `specializacija`, `ivertis`) VALUES
(1, 'Jonas', 'Pavarde1', 'Klaipėda', 'servisas pavadinimas1', 'asd', 5),
(2, 'Petras', 'Pavarde2', 'Vilnius', 'servisas pavadinimas2', 'asd', 9),
(3, 'Antanas', 'Pavarde3', 'Kaunas', 'servisas pavadininimas3', 'asdd', 0),
(4, 'Jonas', 'Pavarde4', 'Šiauliai', 'servisas pavadinimas4', 'asdd', 0),
(5, 'Petras', 'Pavarde5', 'Telšiai', 'servisas pavadinimas5', 'asd', 0),
(6, 'Joonas', 'Pavarde6', 'Marijampolė', 'servisas pavadinimas6', 'asd', 0),
(7, 'Petras', 'Pavarde7', 'Ukmergė', 'servisas pavadinimas7', 'asddd', 0),
(8, 'Marius', 'Pavarde8', 'Klaipėda', 'servisas pavadinimas8', 'asd', 9),
(9, 'Antanas', 'Pavarde9', 'Klaipėda', 'servisas pavadinimas9', 'asd', 12);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `vartotojai`
--

CREATE TABLE `vartotojai` (
  `id` int(11) NOT NULL,
  `vardas` varchar(250) NOT NULL,
  `passw` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `vartotojai`
--

INSERT INTO `vartotojai` (`id`, `vardas`, `passw`) VALUES
(1, 'sw', '$2y$10$/V3VEa1mS98LF4PadUUSzusMN8LWNnxeX4LSzE4JrfLqwkwlio48.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meistrai`
--
ALTER TABLE `meistrai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vartotojai`
--
ALTER TABLE `vartotojai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meistrai`
--
ALTER TABLE `meistrai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vartotojai`
--
ALTER TABLE `vartotojai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
