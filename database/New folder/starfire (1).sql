-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2019 at 01:05 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `starfire`
--
CREATE DATABASE IF NOT EXISTS `starfire` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `starfire`;

-- --------------------------------------------------------

--
-- Table structure for table `commemt`
--

CREATE TABLE IF NOT EXISTS `commemt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `com` varchar(600) NOT NULL,
  `post` int(11) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fan`
--

CREATE TABLE IF NOT EXISTS `fan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `fanadd` int(11) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fav`
--

CREATE TABLE IF NOT EXISTS `fav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `favadd` text NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feel`
--

CREATE TABLE IF NOT EXISTS `feel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `react` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feel`
--

INSERT INTO `feel` (`id`, `num`, `react`, `post`, `time`) VALUES
(1, 2, 4, 1, '2019-12-10 13:41:02'),
(2, 3, 3, 1, '2019-12-10 13:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(150) NOT NULL,
  `imname` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(200) NOT NULL,
  `quote` varchar(200) NOT NULL,
  `cl` varchar(20) NOT NULL,
  `stat` int(11) NOT NULL,
  `noti` int(11) NOT NULL,
  `tut` int(11) NOT NULL,
  `theme` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`num`),
  KEY `user` (`user`(191))
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`num`, `user`, `pass`, `imname`, `name`, `quote`, `cl`, `stat`, `noti`, `tut`, `theme`, `email`, `date`) VALUES
(2, 'Avney', '0cc175b9c0f1b6a831c399e269772661', 'Kanchi-Singh-hd-wallpapers.jpg', '', '', '#00ccff', 1, 0, 0, 0, '', '2019-12-10 11:42:26'),
(3, 'Virgil', '9e3669d19b675bd57058fd4664205d2a', '26920170720015707106IMG_20140613_020414.jpg', '', '', '#0b1728', 1, 0, 0, 0, '', '2019-12-10 13:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `memberfind`
--

CREATE TABLE IF NOT EXISTS `memberfind` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `user` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `user` (`user`),
  FULLTEXT KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `memberfind`
--

INSERT INTO `memberfind` (`id`, `num`, `user`, `name`) VALUES
(1, 2, 'Avney', ''),
(2, 3, 'Virgil', '');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `im` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `textfind`
--

CREATE TABLE IF NOT EXISTS `textfind` (
  `idd` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `tup` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(4200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mash` varchar(4500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time1` datetime NOT NULL,
  PRIMARY KEY (`idd`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `textfind`
--

INSERT INTO `textfind` (`idd`, `id`, `tup`, `tags`, `mash`, `time1`) VALUES
(1, 1, 'Hi There', ' Had a rough day today', ' Had a rough day today Hi There', '2019-12-10 13:40:37'),
(2, 2, 'Juice wrld', 'MAMA ALWAYS TOLD ME NOT TO HAVE ANY FEARS.BUT THIS SHIIT IS DELI LIKE ELECTRIC CHAIR Last thing i wanna hear is its over, left side heart burst #heartbreak', 'MAMA ALWAYS TOLD ME NOT TO HAVE ANY FEARS.BUT THIS SHIIT IS DELI LIKE ELECTRIC CHAIR Last thing i wanna hear is its over, left side heart burst #heartbreak Juice wrld', '2019-12-10 14:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `wall`
--

CREATE TABLE IF NOT EXISTS `wall` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `time1` datetime NOT NULL,
  `postype` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `tup` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cap` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wall`
--

INSERT INTO `wall` (`id`, `num`, `time1`, `postype`, `count`, `tup`, `cap`, `sim1`, `sim1ty`, `sim2`, `sim2ty`, `sim3`, `sim3ty`, `sim4`, `sim4ty`, `sim5`, `sim5ty`, `sim6`, `sim6ty`, `sim7`, `sim7ty`, `sim8`, `sim8ty`, `sim9`, `sim9ty`, `sim10`, `sim10ty`, `sim11`, `sim11ty`, `sim12`, `sim12ty`, `sim13`, `sim13ty`, `sim14`, `sim14ty`, `sim15`, `sim15ty`, `sim16`, `sim16ty`) VALUES
(1, 2, '2019-12-10 13:40:37', 0, 2, 'Hi There', 'Had a rough day today', 'superAvney-2019-12-10-13-39-53run1.jpg', 0, 'superAvney-2019-12-10-13-39-54v1.jpg', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0),
(2, 3, '2019-12-10 14:01:28', 0, 2, 'Juice wrld', 'Last thing i wanna hear is its over, left side heart burst #heartbreak', 'superVirgil-2019-12-10-13-58-32Superstarz20191210135358.jpg', 0, 'MAMA ALWAYS TOLD ME NOT TO HAVE ANY FEARS.BUT THIS SHIIT IS DELI LIKE ELECTRIC CHAIR', 3, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
