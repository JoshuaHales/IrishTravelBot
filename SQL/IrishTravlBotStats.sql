-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 23, 2017 at 08:27 PM
-- Server version: 5.6.28-76.1-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `techoram_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `IrishTravlBotStats`
--

CREATE TABLE IF NOT EXISTS `IrishTravlBotStats` (
  `ID` int(64) NOT NULL AUTO_INCREMENT,
  `location` varchar(64) NOT NULL,
  `locationCount` int(11) NOT NULL DEFAULT '5',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `IrishTravlBotStats`
--

INSERT INTO `IrishTravlBotStats` (`ID`, `location`, `locationCount`) VALUES
(1, 'Malahide', 253),
(2, 'portmarnock', 15),
(3, 'clongriffin', 9),
(4, 'howth junction and donaghmede', 11),
(5, 'kilbarrack', 5),
(6, 'raheny', 5),
(7, 'harmonstown', 5),
(8, 'killester', 6),
(9, 'clontarf road', 15),
(10, 'dublin connolly', 12),
(11, 'tara street', 114),
(12, 'pearse', 5),
(13, 'grand canal dock', 5),
(14, 'lansdowne road', 5),
(15, 'sandymount', 9),
(16, 'sydney parade', 5),
(17, 'booterstown', 5),
(18, 'blackrock', 9),
(19, 'seapoint', 5),
(20, 'salt and monkstown', 5),
(21, 'dun laoghaire', 8),
(22, 'sandycove & glasthule', 5),
(23, 'glenageary', 5),
(24, 'dalkey', 5),
(25, 'killiney', 5),
(26, 'shankill', 6),
(27, 'bray', 6),
(28, 'greystones', 5),
(29, 'bayside', 5),
(30, 'sutton', 6),
(31, 'howth', 72);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
