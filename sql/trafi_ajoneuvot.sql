-- MySQL dump 10.14  Distrib 5.5.44-MariaDB, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: data14
-- ------------------------------------------------------
-- Server version	5.5.44-MariaDB-1ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `trafi_ajoneuvot`
--

DROP TABLE IF EXISTS `trafi_ajoneuvot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trafi_ajoneuvot` (
  `ajoneuvoluokka` varchar(3) COLLATE utf8_swedish_ci DEFAULT NULL,
  `ensirekisterointipvm` date DEFAULT NULL,
  `ajoneuvoryhma` int(3) DEFAULT NULL,
  `ajoneuvonkaytto` int(2) DEFAULT NULL,
  `variantti` varchar(64) COLLATE utf8_swedish_ci DEFAULT NULL,
  `versio` varchar(64) COLLATE utf8_swedish_ci DEFAULT NULL,
  `kayttoonottopvm` int(8) DEFAULT NULL,
  `vari` varchar(1) COLLATE utf8_swedish_ci DEFAULT NULL,
  `ovienlukumaara` int(1) DEFAULT NULL,
  `korityyppi` varchar(4) COLLATE utf8_swedish_ci DEFAULT NULL,
  `ohjaamotyyppi` int(1) DEFAULT NULL,
  `istumapaikkojenlkm` int(2) DEFAULT NULL,
  `omamassa` int(6) DEFAULT NULL,
  `teknSuurSallKokmassa` int(6) DEFAULT NULL,
  `tieliikSuurSallKokmassa` int(6) DEFAULT NULL,
  `ajonKokPituus` int(6) DEFAULT NULL,
  `ajonLeveys` int(6) DEFAULT NULL,
  `ajonKorkeus` int(6) DEFAULT NULL,
  `Kayttovoima` varchar(10) COLLATE utf8_swedish_ci DEFAULT NULL,
  `iskutilavuus` int(8) DEFAULT NULL,
  `suurinNettoteho` float DEFAULT NULL,
  `sylintereidenLkm` int(2) DEFAULT NULL,
  `ahdin` varchar(5) COLLATE utf8_swedish_ci DEFAULT NULL,
  `sahkohybridi` varchar(5) COLLATE utf8_swedish_ci DEFAULT NULL,
  `merkkiSelvakielinen` varchar(16) COLLATE utf8_swedish_ci DEFAULT NULL,
  `mallimerkinta` varchar(64) COLLATE utf8_swedish_ci DEFAULT NULL,
  `vaihteisto` varchar(16) COLLATE utf8_swedish_ci DEFAULT NULL,
  `vaihteidenlkm` int(2) DEFAULT NULL,
  `kaupallinenNimi` varchar(64) COLLATE utf8_swedish_ci DEFAULT NULL,
  `voimanValJaTehostamistapa` varchar(64) COLLATE utf8_swedish_ci DEFAULT NULL,
  `tyyppihyvaksynta` varchar(16) COLLATE utf8_swedish_ci DEFAULT NULL,
  `yksittaisKayttovoima` varchar(64) COLLATE utf8_swedish_ci DEFAULT NULL,
  `kunta` int(3) DEFAULT NULL,
  `Co2` float DEFAULT NULL,
  `mittarilukema` int(10) DEFAULT NULL,
  `alue` int(3) DEFAULT NULL,
  `valmistenumero2` int(10) DEFAULT NULL,
  `jarnro` int(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`jarnro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-13 12:32:15
