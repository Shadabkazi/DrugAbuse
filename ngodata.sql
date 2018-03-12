-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2016 at 10:32 AM
-- Server version: 5.6.25-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ngodata`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(10) DEFAULT NULL,
  `mobile` decimal(20,0) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `email`, `password`, `age`, `mobile`) VALUES
(1, 'Shadab', 'kazishadab99@gmail.com', 'qwerty12345', 19, '9768947374'),
(7, 'Shadab', 'shadab99kazi@gmail.com', 'qwerty12345', 20, '9768947374'),
(14, 'Shadab', 'dfhhskdhfhjskf@yahoo.com', 'qwerty1234456456', 50, '1234567891'),
(15, 'safhafkahf', 'fjkhskjdhjks@yahoo.com', 'khashfhkshfhhghasuw', 32, '1234567891'),
(17, 'Shadab', 'akjfjajf', 'sjsas', 65, '6564'),
(18, 'saqib', 'saqib', 'admin123', 19, '8879870826'),
(19, 'aavez', 'aavezkazi@gmail.com', 'admin123', 20, '8879870826');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
