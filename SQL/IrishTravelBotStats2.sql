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
-- Table structure for table `IrishTravelBotStats2`
--

CREATE TABLE IF NOT EXISTS `IrishTravelBotStats2` (
  `ID` int(64) NOT NULL AUTO_INCREMENT,
  `transport` varchar(11) NOT NULL,
  `countVal` int(11) NOT NULL DEFAULT '5',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `IrishTravelBotStats2`
--

INSERT INTO `IrishTravelBotStats2` (`ID`, `transport`, `countVal`) VALUES
(1, 'Train', 5946),
(2, 'Bus', 2559);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
