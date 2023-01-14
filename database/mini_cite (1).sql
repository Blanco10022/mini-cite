-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 01:23 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mini_cite`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `place` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `mobile` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `o` varchar(100) NOT NULL,
  `i` int(100) NOT NULL,
  `nation` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `username`, `name`, `date`, `place`, `sex`, `city`, `profession`, `father`, `mother`, `mobile`, `address`, `o`, `i`, `nation`) VALUES
(1, 'Jonathan', 'Jones', '2002-12-19', 'DOUALA CAMEROON', 'male', 'Douala', 'student', 'Paul', 'Flaurence', 650294782, 'Logpom', '00000112', 6854313, 'cameroonian');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'jonathan', 'jojo'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE IF NOT EXISTS `pay` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dop` date NOT NULL,
  `deposit` int(10) NOT NULL,
  `room` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`id`, `image`, `username`, `name`, `dop`, `deposit`, `room`, `month`) VALUES
(5, '1654903358_2795.jpg', 'jonathan', 'jones', '2021-12-31', 25000, '5', 'january');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
