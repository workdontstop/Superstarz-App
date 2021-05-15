-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2019 at 02:48 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `billy`
--
CREATE DATABASE IF NOT EXISTS `billy` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `billy`;

-- --------------------------------------------------------

--
-- Table structure for table `wall`
--

CREATE TABLE IF NOT EXISTS `wall` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `postype` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `cap` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tup` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time1` datetime NOT NULL,
  `sim1` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim1ty` int(11) NOT NULL,
  `sim2` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim2ty` int(11) NOT NULL,
  `sim3` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim3ty` int(11) NOT NULL,
  `sim4` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim4ty` int(11) NOT NULL,
  `sim5` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim5ty` int(11) NOT NULL,
  `sim6` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim6ty` int(11) NOT NULL,
  `sim7` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim7ty` int(11) NOT NULL,
  `sim8` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim8ty` int(11) NOT NULL,
  `sim9` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim9ty` int(11) NOT NULL,
  `sim10` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim10ty` int(11) NOT NULL,
  `sim11` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim11ty` int(11) NOT NULL,
  `sim12` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim12ty` int(11) NOT NULL,
  `sim13` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim13ty` int(11) NOT NULL,
  `sim14` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim14ty` int(11) NOT NULL,
  `sim15` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim15ty` int(11) NOT NULL,
  `sim16` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim16ty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2571 ;

--
-- Dumping data for table `wall`
--

INSERT INTO `wall` (`id`, `num`, `postype`, `count`, `cap`, `tup`, `time1`, `sim1`, `sim1ty`, `sim2`, `sim2ty`, `sim3`, `sim3ty`, `sim4`, `sim4ty`, `sim5`, `sim5ty`, `sim6`, `sim6ty`, `sim7`, `sim7ty`, `sim8`, `sim8ty`, `sim9`, `sim9ty`, `sim10`, `sim10ty`, `sim11`, `sim11ty`, `sim12`, `sim12ty`, `sim13`, `sim13ty`, `sim14`, `sim14ty`, `sim15`, `sim15ty`, `sim16`, `sim16ty`) VALUES
(2569, 259, 0, 1, 'Love is not a game', 'swim', '2019-12-07 03:40:39', 'superTanu-2019-12-07-03-39-29v1.jpg', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0),
(2570, 260, 0, 1, 'Having fun yet', 'LOyal', '2019-12-07 03:42:48', 'superSonia-2019-12-07-03-42-24Superstarz20198223381.jpg', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
