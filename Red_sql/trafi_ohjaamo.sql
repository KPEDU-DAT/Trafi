-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Palvelin: localhost
-- Luontiaika: 13.08.2015 klo 12:47
-- Palvelimen versio: 5.5.44-MariaDB-1ubuntu0.14.04.1
-- PHP:n versio: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Tietokanta: `data14`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `trafi_ohjaamo`
--

CREATE TABLE IF NOT EXISTS `trafi_ohjaamo` (
  `ohjaamotyyppi` int(1) NOT NULL,
  `selite_fi` varchar(32) COLLATE utf8_swedish_ci NOT NULL,
  `selite_sv` varchar(32) COLLATE utf8_swedish_ci NOT NULL,
  `selite_en` varchar(32) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`ohjaamotyyppi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
