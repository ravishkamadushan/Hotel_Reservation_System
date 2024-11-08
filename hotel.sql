-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 23, 2023 at 12:55 PM
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
-- Database: `dd_footwear`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `timestamp` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `username`, `timestamp`) VALUES
(48, 'ravishka@gmail.com', '2023-08-23 12:20:20'),
(49, 'ravishka@gmail.com', '2023-08-23 12:44:13'),
(50, 'ravishka@gmail.com', '2023-08-23 13:01:00'),
(51, '5', '2023-08-23 14:12:19'),
(52, 'ravishka.com', '2023-08-23 14:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `uid` int(20) NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) NOT NULL,
  `upass` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `uemail` varchar(30) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`uid`, `uname`, `upass`, `fullname`, `uemail`) VALUES
(1, 'mamun', '1234', 'Abdullah Al Mamun', 'mamunwitchbug@gmail.com'),
(3, 'jinat', 'jinat', 'Jinat Afroj', 'afrojjinat@gmail.com'),
(6, 'admin', '1234', 'admin', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `room_id` int(200) NOT NULL AUTO_INCREMENT,
  `room_cat` text NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `name` text NOT NULL,
  `phone` int(100) NOT NULL,
  `book` text NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_cat`, `checkin`, `checkout`, `name`, `phone`, `book`) VALUES
(23, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(24, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(25, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(26, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(27, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(28, 'Super Comfort', '2017-05-19', '2017-05-22', 'Jinat Afroj', 1524587558, 'true'),
(29, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false'),
(30, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false'),
(31, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false'),
(32, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false'),
(33, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false'),
(34, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false'),
(35, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false'),
(36, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false'),
(37, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `room_category`
--

DROP TABLE IF EXISTS `room_category`;
CREATE TABLE IF NOT EXISTS `room_category` (
  `roomname` text NOT NULL,
  `room_qnty` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `booked` int(11) NOT NULL,
  `no_bed` int(11) NOT NULL,
  `bedtype` text NOT NULL,
  `facility` text NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`roomname`(100))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_category`
--

INSERT INTO `room_category` (`roomname`, `room_qnty`, `available`, `booked`, `no_bed`, `bedtype`, `facility`, `price`) VALUES
('Duplex', 5, 5, 0, 2, 'single', 'AC, TV, Wifi', 1500),
('Family', 5, 5, 0, 2, 'double', 'Sofa, TV, WIFI, Balcony, AC.', 3500),
('Super Comfort', 5, 5, 0, 1, 'double', 'AC, TV, WIFI', 2200);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `mobilenumber` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `addressline` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `firstname`, `lastname`, `nic`, `mobilenumber`, `phonenumber`, `addressline`) VALUES
(2, 'ravishka@gmail.com', 'ravishka@gmail.com', '123456', '', '', '0', '0', '0', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
