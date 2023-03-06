-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 06, 2023 at 04:49 PM
-- Server version: 5.7.36
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Basicfit`
--

-- --------------------------------------------------------

--
-- Table structure for table `Inschrijving`
--

DROP TABLE IF EXISTS `Inschrijving`;
CREATE TABLE IF NOT EXISTS `Inschrijving` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Homeclub` varchar(60) NOT NULL,
  `Lidmaatschap` varchar(7) NOT NULL,
  `Looptijd` varchar(20) NOT NULL,
  `Yanga` varchar(100) DEFAULT NULL,
  `Coach` varchar(100) DEFAULT NULL,
  `Training` varchar(100) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Inschrijving`
--

INSERT INTO `Inschrijving` (`Id`, `Homeclub`, `Lidmaatschap`, `Looptijd`, `Yanga`, `Coach`, `Training`, `Email`) VALUES
(2, '', '', '', 'on', '', NULL, '234234ijgrgj@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
