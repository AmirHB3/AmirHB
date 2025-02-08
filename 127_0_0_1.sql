-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 04, 2025 at 10:12 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amirhb`
--
CREATE DATABASE IF NOT EXISTS `amirhb` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci;
USE `amirhb`;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb3_persian_ci NOT NULL,
  `family` varchar(20) COLLATE utf8mb3_persian_ci NOT NULL,
  `melliCode` varchar(11) COLLATE utf8mb3_persian_ci NOT NULL,
  `address` text CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `fatherName` varchar(20) COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`ID`, `name`, `family`, `melliCode`, `address`, `fatherName`) VALUES
(1, 'Yasin', 'ebrahimi', '10808000000', 'isfahan-najafabad-jozdan', 'Naser'),
(5, 'Hossein', 'jamshidian', '10808222222', 'isfahan-najafabad-ghalesefid', 'Hamid'),
(6, 'sobhan', 'moradi', '10808333333', 'isfahan-najafabad-vilashahr', 'Adel'),
(7, 'Amirhossein', 'bahrami', '10808444444', 'isfahan-najafabad-baharestan', 'mahmood'),
(8, 'Amirhossein', 'poloeian', '10808555555', 'isfahan-najafabad', 'Ahmad');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8mb3_persian_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb3_persian_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `email`, `password`) VALUES
(4, 'Amir', 'amirbaahrami@gmail.com', 'Amir1234'),
(6, 'Reza', 'reza@gmail.com', 'reza1234'),
(9, 'Ali', 'Ali@gmail.com', 'ali1234'),
(13, 'omid', 'omid@gmail.com', 'omid1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
