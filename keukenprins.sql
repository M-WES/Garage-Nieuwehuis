-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 06 sep 2021 om 18:04
-- Serverversie: 10.4.20-MariaDB
-- PHP-versie: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voorbeeld`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `artikelnummer` int(11) NOT NULL,
  `artikelnaam` varchar(25) NOT NULL,
  `Categorie` varchar(20) DEFAULT NULL,
  `prijs` decimal(8,2) NOT NULL,
  `aantal_in_voorraad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `artikel`
--

INSERT INTO `artikel` (`artikelnummer`, `artikelnaam`, `Categorie`, `prijs`, `aantal_in_voorraad`) VALUES
(1001, 'Citroenpers', 'Keukengereedschap', '22.50', 38),
(1002, 'Koffieautomaat \"Cello\"', 'Koffiecorner', '499.00', 4),
(1003, 'Broodmachine', 'Keukengereedschap', '87.50', 5),
(1004, 'Messenset XL', 'Keukengereedschap', '145.50', 21),
(1005, 'Keukenschaal Rood', 'Keukengereedschap', '42.80', 23),
(1006, 'Broodmachine Basic', 'Keukengereedschap', '67.00', 5),
(2001, 'Longdrinkglazen rond 6 st', 'Serviesgoed', '23.95', 20),
(2002, 'Drinkbekers wit 3 st', 'Serviesgoed', '8.99', 43);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klant`
--

CREATE TABLE IF NOT EXISTS `klant` (
  `klantnummer` int(11) NOT NULL,
  `naam` varchar(20) NOT NULL,
  `adres` varchar(25) NOT NULL,
  `postcode` varchar(7) NOT NULL,
  `woonplaats` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `klant`
--

INSERT INTO `klant` (`klantnummer`, `naam`, `adres`, `postcode`, `woonplaats`, `email`) VALUES
(101, 'J. Albema', 'Hoofdstraat 55', '1025 KN', 'Amsterdam', 'J.Albema@Ziggo.'),
(102, 'K. Balema', 'Lindengracht 33', '1082 KL', 'Amsterdam', 'KBaal@hotmail.com'),
(103, 'P. de Vries', 'Kasteel 5', '3872 LM', 'Alkmaar', 'PdeVries@hotmail.com'),
(104, 'P. Haarlem', 'Amsterdamse weg 107', '3038 DF', 'Haarlem', 'PHaarlem@gmail.com'),
(105, 'L. Halsema', 'Boerenlaan 77', '3974 PK', 'Groningen', 'Superman@hotmail.com'),
(106, 'V. Groothoofd', 'Jan de Bouvierstraat 21', '8564 LP', 'Amstelveen', 'Grootkop@gmail.com'),
(107, 'L. Bartels', 'Veenwegen 974', '2963 KL', 'Hoofddorp', 'Bartel@gmail.com'),
(108, 'P. de Jong', 'Amstelkade 64', '1957 ED', 'Rotterdam', 'P.deJong@hotmail.com'),
(109, 'K. Vrolijk', 'Parkstraat 54', '4045 MN', 'Rotterdam', 'Vrolijkjoch@gmail.com'),
(110, 'L. Vroom', 'Kerkstraat 9', '2046 LK', 'Haarlem ', 'VroomL@gmail.com'),
(111, 'K. Klein', 'Gartmanplantsoen 4', '1087 AQ', 'Amsterdam', 'Klein@kpn.com'),
(112, 'L.Ravenstein', 'Keienstraat 9', '4837 LM', 'Rotterdam', 'Ravenstein@dat.com'),
(113, 'M. Rood', 'Kleurenplantsoen 2', '5463 FS', 'Nieuw-Vennep', 'Rood@hotmail.com'),
(114, 'W. van Oranje', 'Paleisstraat 52', '8372 UJ', 'Soestdijk', 'Prinsgemaal@hotmail.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `ordernummer` int(11) NOT NULL,
  `klantnummer` int(11) NOT NULL,
  `orderdatum` date NOT NULL,
  `betaald` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `order`
--

INSERT INTO `order` (`ordernummer`, `klantnummer`, `orderdatum`, `betaald`) VALUES
(1, 101, '2021-11-05', 1),
(2, 102, '2021-10-08', 0),
(3, 108, '2021-01-05', 0),
(4, 102, '2021-10-07', 0),
(5, 107, '2021-11-05', 1),
(6, 111, '2021-10-08', 1),
(7, 108, '2021-04-02', 1),
(8, 105, '2021-08-07', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orderregel`
--

CREATE TABLE IF NOT EXISTS `orderregel` (
  `ordernummer` int(11) NOT NULL,
  `artikelnummer` int(11) NOT NULL,
  `aantal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `orderregel`
--

INSERT INTO `orderregel` (`ordernummer`, `artikelnummer`, `aantal`) VALUES
(1, 1001, 4),
(1, 1002, 1),
(2, 1003, 1),
(2, 1004, 2),
(3, 2001, 3),
(3, 2002, 1),
(3, 1006, 1),
(3, 1004, 2),
(4, 1003, 1),
(4, 2002, 2),
(4, 1006, 1),
(4, 1002, 1),
(5, 2002, 10),
(6, 1003, 2),
(6, 1005, 1),
(7, 2001, 5),
(7, 2002, 3),
(7, 1005, 1),
(8, 1004, 1);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikelnummer`);

--
-- Indexen voor tabel `klant`
--
ALTER TABLE `klant`
  ADD PRIMARY KEY (`klantnummer`);

--
-- Indexen voor tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ordernummer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
  