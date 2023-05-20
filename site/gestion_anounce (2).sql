-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 19, 2023 at 07:54 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_anounce`
--

-- --------------------------------------------------------

--
-- Table structure for table `anounces`
--

DROP TABLE IF EXISTS `anounces`;
CREATE TABLE IF NOT EXISTS `anounces` (
  `id_anounce` int(11) NOT NULL AUTO_INCREMENT,
  `context` char(50) NOT NULL,
  `text` char(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_anounce` date DEFAULT NULL,
  `image` char(255) DEFAULT NULL,
  `reported` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_anounce`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anounces`
--

INSERT INTO `anounces` (`id_anounce`, `context`, `text`, `id_user`, `date_anounce`, `image`, `reported`) VALUES
(45, 'PC GAMER A VENDIR', 'pc msi gamer :\r\ni5 11th gen , \r\nrtx 3060 12gb vram , \r\n8gb ram , \r\n500gb ssd , \r\n\r\nPrix : 12000dh', 10, '2023-04-18', '643f459739695.jpg', NULL),
(65, 'Telephone redmi note 11 Ã  vendre', 'redmi note 11 a vendre :\r\n4gb ram , \r\n128gb stockage , \r\n\r\nutiliser 4 mois , \r\nPrix : 1500dh .', 9, '2023-04-19', '643f4773c6534.jpg', NULL),
(69, 'CHAISE POUR VENDRE', 'Chaise de bois , 300dh', 1, '2023-04-27', '644a614454c04.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `text` char(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_anounce` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `id_user` (`id_user`),
  KEY `id_anounce` (`id_anounce`)
) ENGINE=MyISAM AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comment`, `text`, `id_user`, `id_anounce`) VALUES
(103, 'le prix est un peux chÃ©re', 17, 65),
(95, 'Hhhhhhh', 10, 66),
(94, 'Cope harder', 9, 66),
(86, 'neuf ou utitliser ?', 13, 45),
(79, 'ok', 1, 42),
(66, 'ok', 1, 40),
(102, 'quel est la qualite de l Ã©crant', 17, 45),
(88, 'h', 9, 48),
(93, 'le prix est-il nÃ©gociable ?', 10, 65);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(15) DEFAULT NULL,
  `email` char(55) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`) VALUES
(9, 'oussama', 'oussama@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'taha', 'taha@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'Achraf', 'achraf@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(1, 'admin', 'admin@gmail.com', 'c93ccd78b2076528346216b3b2f701e6'),
(17, 'Youssef', 'youssef@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
