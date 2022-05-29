-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 22, 2022 at 09:03 PM
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
-- Table structure for table `recent_add`
--

DROP TABLE IF EXISTS `recent_add`;
CREATE TABLE IF NOT EXISTS `recent_add` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `date_don` date NOT NULL,
  `blood_type` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recent_add`
--

INSERT INTO `recent_add` (`id`, `name`, `date_don`, `blood_type`) VALUES
(1, 'Chaymae Mharzi', '2022-02-01', 'O+'),
(2, 'Sbai Salah', '2022-02-12', 'O-'),
(3, 'Chaymae Mharzi', '2022-03-04', 'AB'),
(4, 'Sbai Salah', '2022-11-10', 'A'),
(5, 'Chaymae Mharzi', '2023-03-04', 'B+'),
(6, 'Chaymae Salah', '2020-12-01', 'O+'),
(7, 'Chaymae Salah', '2020-12-01', 'O+'),
(8, 'Chaymae Salah', '2020-12-01', 'O+');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
