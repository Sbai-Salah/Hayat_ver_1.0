-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 22, 2022 at 09:02 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `donnation`
--

DROP TABLE IF EXISTS `donnation`;
CREATE TABLE IF NOT EXISTS `donnation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `date_nais` varchar(30) NOT NULL,
  `date_don` varchar(30) NOT NULL,
  `cin` varchar(20) NOT NULL,
  `telephone` varchar(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donnation`
--

INSERT INTO `donnation` (`id`, `nom`, `prenom`, `ville`, `date_nais`, `date_don`, `cin`, `telephone`) VALUES
(7, 'Chaymae', 'Mharzi', 'Oujda', '16/07/1999', '05/09/2022', 'E11113', '0644444444'),
(8, 'sbai', 'salah', 'Oujda', '02/13/2000', '06/10/2022', 'F111111', '0630322146');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
