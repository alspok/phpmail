-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 19, 2018 at 11:12 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_maistas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kita`
--

DROP TABLE IF EXISTS `tbl_kita`;
CREATE TABLE IF NOT EXISTS `tbl_kita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(50) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `quantity` varchar(50) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `notes` varchar(50) COLLATE utf8mb4_lithuanian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_lithuanian_ci;

--
-- Dumping data for table `tbl_kita`
--

INSERT INTO `tbl_kita` (`id`, `product`, `quantity`, `notes`) VALUES
(1, 'Pop. ranksluosciai', '2vnt.', NULL),
(2, 'asdfasdf', 'asdfasdf', 'asdfasdf'),
(3, 'asdf', 'asdfasdf', 'asdfasdf'),
(4, 'asdfasdf', 'asdfasdf', 'asdfasdf'),
(5, 'asdfasdfasdf', 'asdfasdf', 'aaaaaaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logreg`
--

DROP TABLE IF EXISTS `tbl_logreg`;
CREATE TABLE IF NOT EXISTS `tbl_logreg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_lithuanian_ci;

--
-- Dumping data for table `tbl_logreg`
--

INSERT INTO `tbl_logreg` (`id`, `username`, `password`, `email`, `phone`) VALUES
(1, 'Rasa', '123456', 'rasiko@gmail.com', '+37069831479'),
(2, 'Alvydas', '123456', 'alspok@gmail.com', '+37069831479'),
(3, 'a', 'a', 'a@gmail.com', '+3707(7)11111');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_maistas`
--

DROP TABLE IF EXISTS `tbl_maistas`;
CREATE TABLE IF NOT EXISTS `tbl_maistas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(50) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `quantity` varchar(50) COLLATE utf8mb4_lithuanian_ci NOT NULL,
  `notes` varchar(50) COLLATE utf8mb4_lithuanian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_lithuanian_ci;

--
-- Dumping data for table `tbl_maistas`
--

INSERT INTO `tbl_maistas` (`id`, `product`, `quantity`, `notes`) VALUES
(1, 'Mesa', '2kg', 'Kiauliena'),
(2, 'Svietas', '2kg', 'Birzu'),
(3, 'somethig', 'something', 'something'),
(14, 'asdfasdf', 'asdfasdf', 'asdfasdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
