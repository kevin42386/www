-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Gostitelj: localhost
-- Čas nastanka: 26. nov 2014 ob 16.24
-- Različica strežnika: 5.6.12-log
-- Različica PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Zbirka podatkov: `comment_box`
--
CREATE DATABASE IF NOT EXISTS `comment_box` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `comment_box`;

-- --------------------------------------------------------

--
-- Struktura tabele `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `userId` varchar(255) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Odloži podatke za tabelo `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `userId`) VALUES
(43, 'dasdsad', '24'),
(47, 'HATERS GONNA HATE!!!!!!!!<br>( . Y . )   =     BOOBS !!!!', '27');

-- --------------------------------------------------------

--
-- Struktura tabele `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(255) NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Odloži podatke za tabelo `subscribers`
--

INSERT INTO `subscribers` (`userId`, `userName`, `profile_img`, `password`, `email`, `first_name`, `last_name`) VALUES
(11, 'kevin42386', 'images/photo.png', '12345', 'asdsadsa@gmail.com', 'kevin', 'baron lah'),
(13, 'Jerry', 'images/photo.png', 'jerry', 'romihsaso@gmail.com', 'Saso', 'Romih'),
(24, '1234567', 'images/photo.png', '12345', 'kevinbaronlah@gmail.com', 'kevin', 'baron'),
(25, 'sadddddddddd', 'images/photo.png', 'sdadadadadadadadadadadadadadadadada', 'dsadsadad@sa.com', 'Saso', 'Romih'),
(26, 'Ficko', 'images/photo.png', 'ficko123', 'mulc4141@gmail.com', 'Matic', 'Sulc'),
(27, 'Korty777', 'images/Izvirnost.jpg', 'dominikvinkojecar', 'dominiksola@gmail.com', 'Dominik', 'Vinko');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
