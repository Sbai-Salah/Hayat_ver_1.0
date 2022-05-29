-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 29, 2022 at 02:45 PM
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
-- Database: `hayatdb`
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

-- --------------------------------------------------------

--
-- Table structure for table `form_needer`
--

DROP TABLE IF EXISTS `form_needer`;
CREATE TABLE IF NOT EXISTS `form_needer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_tel` varchar(15) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `nom_needer` varchar(100) NOT NULL,
  `prenom_needer` varchar(100) NOT NULL,
  `type_need` varchar(5) NOT NULL,
  `date_need` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `users_new`
--

DROP TABLE IF EXISTS `users_new`;
CREATE TABLE IF NOT EXISTS `users_new` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_new`
--

INSERT INTO `users_new` (`id`, `user_id`, `user_name`, `user_email`, `password`) VALUES
(4, 46, 'salah', 'sbaiusalah@gmail.com', '123'),
(6, 3, 'chaymae', 'chaymae@gmail.com', '456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
