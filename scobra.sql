s-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 03 dec 2020 om 12:45
-- Serverversie: 5.7.17
-- PHP-versie: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scobra`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblleden`
--

CREATE TABLE `tblleden` (
  `Lidnr` int(11) NOT NULL,
  `Voornaam` varchar(20) NOT NULL,
  `Naam` varchar(20) NOT NULL,
  `Geboortedatum` date NOT NULL,
  `Geslacht` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Telefoonnummer` varchar(15) NOT NULL,
  `Gemeente` varchar(20) NOT NULL,
  `Postcode` varchar(10) NOT NULL,
  `Straat` varchar(20) NOT NULL,
  `Huisnummer` varchar(10) NOT NULL,
  `NaamOuder1` varchar(20) NOT NULL,
  `VoornaamOuder1` varchar(20) NOT NULL,
  `NaamOuder2` varchar(20) NOT NULL,
  `VoornaamOuder2` varchar(20) NOT NULL,
  `EmailOuder` varchar(20) NOT NULL,
  `TelefoonnummerOuder` varchar(15) NOT NULL,
  `Rekeningnummer` varchar(20) NOT NULL,
  `ScoutingOpMaat` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `tblleden`
--
ALTER TABLE `tblleden`
  ADD PRIMARY KEY (`Lidnr`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `tblleden`
--
ALTER TABLE `tblleden`
  MODIFY `Lidnr` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
