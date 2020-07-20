-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 20, 2020 at 02:10 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gus_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_hour`
--

DROP TABLE IF EXISTS `business_hour`;
CREATE TABLE IF NOT EXISTS `business_hour` (
  `day` int(11) NOT NULL,
  `open_time` time DEFAULT NULL,
  `close_time` time DEFAULT NULL,
  PRIMARY KEY (`day`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_hour`
--

INSERT INTO `business_hour` (`day`, `open_time`, `close_time`) VALUES
(1, '09:00:00', '17:00:00'),
(2, '09:00:00', '14:00:00'),
(3, '00:00:00', '00:00:00'),
(4, '09:00:00', '17:00:00'),
(5, '10:00:00', '13:00:00'),
(6, '09:00:00', '17:00:00'),
(7, '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

DROP TABLE IF EXISTS `contact_form`;
CREATE TABLE IF NOT EXISTS `contact_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `message` varchar(800) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `message`) VALUES
(1, NULL, 'mohna@gmail.com', 'qwerty'),
(2, 'mohan', 'mohna@gmail.com', 'qwerty'),
(3, 'mohan', 'mohna@gmail.com', 'ytruio'),
(4, 'mohan', 'mohna@gmail.com', 'ytruio'),
(5, 'mohan', 'mohna@gmail.com', 'ytruio');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

DROP TABLE IF EXISTS `product_details`;
CREATE TABLE IF NOT EXISTS `product_details` (
  `products_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `cost` double NOT NULL,
  `no_of_orders` int(11) DEFAULT '0',
  `image_path` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`products_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`products_id`, `name`, `cost`, `no_of_orders`, `image_path`) VALUES
(1, 'Bingo Potato Chips', 50, 6, 'bingo_potato_chips.jpg'),
(2, 'Appitas Tangy Cheese', 50, 4, 'Appitas_Tangy_Cheese'),
(3, 'Flavours of Calicut Kerala', 200, 6, 'Flavours_of_Calicut_Kerala.jpg'),
(4, 'JOLOCHIP', 70, 9, 'JOLOCHIP.jpg'),
(5, 'Unibic Choco', 148, 10, 'Unibi_Choco.jpg'),
(6, 'Bingo Mad Angles', 10, 60, 'Bingo_Mad_Angles.jpg'),
(7, 'Sunfeast Moms Magic', 20, 2, 'Sunfeast_Moms_Magic.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
