-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2019 at 11:35 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `fan`
--

INSERT INTO `fan` (`id`, `num`, `fanadd`, `time`) VALUES
(3, 5, 6, '2019-12-10 17:35:01'),
(6, 4, 5, '2019-12-10 19:15:27'),
(8, 9, 15, '2019-12-12 00:29:45'),
(9, 7, 15, '2019-12-12 00:29:47'),
(10, 2, 15, '2019-12-12 00:29:48');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `fav`
--

INSERT INTO `fav` (`id`, `num`, `favadd`, `time`) VALUES
(3, 6, '5', '2019-12-10 17:35:01'),
(6, 5, '4', '2019-12-10 19:15:27'),
(8, 15, '9', '2019-12-12 00:29:45'),
(9, 15, '7', '2019-12-12 00:29:47'),
(10, 15, '2', '2019-12-12 00:29:48');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=130 ;

--
-- Dumping data for table `feel`
--

INSERT INTO `feel` (`id`, `num`, `react`, `post`, `time`) VALUES
(1, 2, 3, 1, '2019-12-11 05:02:15'),
(2, 3, 3, 1, '2019-12-10 13:46:40'),
(3, 5, 3, 2, '2019-12-10 17:07:00'),
(4, 5, 4, 3, '2019-12-10 17:06:56'),
(5, 5, 3, 1, '2019-12-10 17:07:03'),
(6, 6, 2, 3, '2019-12-12 00:23:09'),
(7, 6, 1, 4, '2019-12-10 17:31:21'),
(8, 6, 4, 2, '2019-12-10 17:31:28'),
(9, 6, 3, 1, '2019-12-12 00:23:01'),
(11, 4, 4, 2, '2019-12-11 04:26:52'),
(14, 4, 4, 5, '2019-12-10 17:40:43'),
(15, 7, 2, 4, '2019-12-10 21:46:41'),
(16, 7, 4, 5, '2019-12-10 20:31:00'),
(17, 7, 4, 3, '2019-12-10 20:31:03'),
(18, 7, 4, 2, '2019-12-10 20:31:07'),
(19, 7, 3, 1, '2019-12-10 20:31:09'),
(21, 4, 4, 6, '2019-12-11 04:57:50'),
(25, 4, 3, 1, '2019-12-11 02:52:41'),
(26, 4, 4, 4, '2019-12-11 02:53:19'),
(28, 4, 1, 3, '2019-12-11 04:28:59'),
(35, 2, 2, 3, '2019-12-11 04:30:01'),
(37, 2, 3, 4, '2019-12-11 04:40:00'),
(42, 2, 4, 6, '2019-12-11 07:40:24'),
(44, 2, 3, 2, '2019-12-11 05:02:20'),
(50, 2, 4, 7, '2019-12-11 05:07:42'),
(51, 2, 4, 5, '2019-12-11 07:09:37'),
(52, 2, 1, 8, '2019-12-11 17:58:10'),
(53, 8, 3, 1, '2019-12-11 23:04:09'),
(54, 8, 4, 2, '2019-12-11 23:04:13'),
(55, 8, 2, 3, '2019-12-11 23:04:17'),
(56, 8, 1, 5, '2019-12-11 23:04:20'),
(57, 8, 1, 4, '2019-12-11 23:04:23'),
(58, 8, 3, 7, '2019-12-11 23:04:26'),
(59, 8, 3, 6, '2019-12-11 23:04:29'),
(60, 8, 3, 8, '2019-12-11 23:04:33'),
(61, 9, 3, 1, '2019-12-12 00:04:34'),
(62, 9, 4, 2, '2019-12-12 00:04:37'),
(63, 9, 2, 3, '2019-12-12 00:04:41'),
(65, 9, 1, 5, '2019-12-12 00:04:47'),
(66, 9, 1, 4, '2019-12-12 00:04:51'),
(67, 9, 3, 7, '2019-12-12 00:04:54'),
(68, 9, 4, 6, '2019-12-12 00:04:56'),
(69, 9, 3, 8, '2019-12-12 00:05:00'),
(70, 10, 3, 1, '2019-12-12 00:08:04'),
(71, 10, 4, 2, '2019-12-12 00:09:47'),
(72, 10, 2, 3, '2019-12-12 00:09:52'),
(73, 10, 1, 5, '2019-12-12 00:09:57'),
(74, 10, 1, 4, '2019-12-12 00:10:00'),
(75, 10, 3, 7, '2019-12-12 00:10:04'),
(76, 10, 4, 6, '2019-12-12 00:10:06'),
(77, 10, 3, 8, '2019-12-12 00:10:10'),
(78, 11, 3, 1, '2019-12-12 00:14:21'),
(79, 11, 4, 2, '2019-12-12 00:15:26'),
(80, 11, 2, 3, '2019-12-12 00:15:31'),
(81, 11, 4, 5, '2019-12-12 00:15:34'),
(82, 11, 1, 4, '2019-12-12 00:15:36'),
(83, 11, 3, 7, '2019-12-12 00:15:41'),
(84, 11, 4, 6, '2019-12-12 00:15:43'),
(85, 11, 3, 8, '2019-12-12 00:15:47'),
(86, 12, 3, 1, '2019-12-12 00:17:56'),
(87, 12, 4, 2, '2019-12-12 00:17:59'),
(88, 12, 2, 3, '2019-12-12 00:18:04'),
(89, 12, 1, 5, '2019-12-12 00:18:06'),
(90, 12, 1, 4, '2019-12-12 00:18:09'),
(91, 12, 3, 7, '2019-12-12 00:18:13'),
(92, 12, 4, 6, '2019-12-12 00:18:15'),
(93, 12, 3, 8, '2019-12-12 00:18:18'),
(94, 13, 3, 1, '2019-12-12 00:20:09'),
(95, 13, 4, 2, '2019-12-12 00:21:10'),
(96, 13, 2, 3, '2019-12-12 00:21:15'),
(97, 13, 1, 5, '2019-12-12 00:21:23'),
(98, 13, 1, 4, '2019-12-12 00:21:25'),
(99, 13, 3, 7, '2019-12-12 00:21:29'),
(100, 13, 4, 6, '2019-12-12 00:21:33'),
(101, 13, 3, 8, '2019-12-12 00:21:36'),
(102, 6, 1, 5, '2019-12-12 00:23:12'),
(103, 6, 4, 6, '2019-12-12 00:23:19'),
(104, 6, 3, 7, '2019-12-12 00:23:21'),
(105, 6, 2, 8, '2019-12-12 00:23:31'),
(106, 14, 3, 1, '2019-12-12 00:25:40'),
(107, 14, 4, 2, '2019-12-12 00:25:43'),
(108, 14, 2, 3, '2019-12-12 00:27:00'),
(109, 14, 1, 5, '2019-12-12 00:27:03'),
(110, 14, 1, 4, '2019-12-12 00:27:05'),
(111, 14, 3, 7, '2019-12-12 00:27:09'),
(112, 14, 2, 6, '2019-12-12 00:27:12'),
(113, 14, 2, 8, '2019-12-12 00:27:16'),
(114, 15, 3, 1, '2019-12-12 00:29:36'),
(115, 15, 4, 2, '2019-12-12 00:29:54'),
(116, 15, 2, 3, '2019-12-12 00:29:57'),
(117, 15, 1, 5, '2019-12-12 00:30:02'),
(118, 15, 1, 4, '2019-12-12 00:30:11'),
(119, 15, 1, 7, '2019-12-12 00:30:17'),
(120, 15, 1, 6, '2019-12-12 00:30:20'),
(121, 15, 4, 8, '2019-12-12 00:30:24'),
(122, 16, 3, 1, '2019-12-12 00:32:04'),
(123, 16, 4, 2, '2019-12-12 00:32:07'),
(124, 16, 2, 3, '2019-12-12 00:32:10'),
(125, 16, 1, 5, '2019-12-12 00:32:13'),
(126, 16, 1, 4, '2019-12-12 00:32:16'),
(127, 16, 3, 7, '2019-12-12 00:32:19'),
(128, 16, 4, 6, '2019-12-12 00:32:22'),
(129, 16, 4, 8, '2019-12-12 00:32:26');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`num`, `user`, `pass`, `imname`, `name`, `quote`, `cl`, `stat`, `noti`, `tut`, `theme`, `email`, `date`) VALUES
(2, 'Avney', '0cc175b9c0f1b6a831c399e269772661', 'Kanchi-Singh-hd-wallpapers.jpg', 'Aviniada  alfayeed', '', '#00ccff', 1, 0, 0, 0, '', '2019-12-10 11:42:26'),
(3, 'Virgil', '9e3669d19b675bd57058fd4664205d2a', '26920170720015707106IMG_20140613_020414.jpg', 'Simon Roland', '', '#2277ab', 1, 0, 0, 0, '', '2019-12-10 13:45:04'),
(4, 'Kingkong', '8ce4b16b22b58894aa86c421e8759df3', 'super259-2018-06-30-20-06-1111420170215004104IMG_20150527_125743.jpg', '', '', '#aabbff', 1, 0, 0, 0, '', '2019-12-10 14:06:47'),
(5, 'Stally', '03c7c0ace395d80182db07ae2c30f034', 'super259-2019-06-29-14-21-22Superstarz201962914152.jpg', '', '', '#aeffd4', 1, 0, 0, 0, '', '2019-12-10 16:57:45'),
(6, 'rikoflash', '4b43b0aee35624cd95b910189b3dc231', 'grayC3032017-10-06-23-35-47303201705110714264703124_image.jpg', 'I can sell anything.hit me up', '', '#aefaef', 1, 0, 0, 0, '', '2019-12-10 17:10:29'),
(7, 'Queenmire', '7694f4a66316e53c8cdd9d9954bd611d', 'sed2592017-10-09-10-49-47104IMG_20160102_233101.jpg', 'Patricia Rights', '', '#11cc77', 1, 0, 0, 0, '', '2019-12-10 20:24:15'),
(8, 'xxxtentacion', '9dd4e461268c8034f5c8564e155c67a6', 'axxxtentacion-1-1522235398-view-0.jpg', '', '', '#0b1728', 1, 0, 0, 0, '', '2019-12-11 18:03:48'),
(9, 'jenny', '363b122c528f54df4a0446b6bab05515', 'fil3062017-10-07-14-50-4530820170412040447250Screenshot_2015-12-29-12-26-13_1.jpg', 'chioma okafor', '', '#cccccc', 1, 0, 0, 0, '', '2019-12-12 00:02:26'),
(10, 'Ragtag', '4b43b0aee35624cd95b910189b3dc231', 'o.jpg', 'martin flox', '', '#cccccc', 1, 0, 0, 0, '', '2019-12-12 00:06:49'),
(11, 'Rainbow', '4b43b0aee35624cd95b910189b3dc231', 'filC3102017-10-17-15-06-4720170419172009.jpg', 'Sarah Caronody', '', '#cccccc', 1, 0, 0, 0, '', '2019-12-12 00:11:08'),
(12, 'Serny', '03c7c0ace395d80182db07ae2c30f034', 'ye2782017-08-25-19-03-39IMG_20140604_204950.jpg', '', '', '#cccccc', 1, 0, 0, 0, '', '2019-12-12 00:17:05'),
(13, 'Sonia', '03c7c0ace395d80182db07ae2c30f034', '2602017071517530029820170521192154199Screenshot_2016-05-29-20-10-52_1.jpg', 'Sonia wellington', '', '#cccccc', 1, 0, 0, 0, '', '2019-12-12 00:18:48'),
(14, 'kingzelda', '8ce4b16b22b58894aa86c421e8759df3', 'fil3122017-10-19-09-23-14rs_600x600-161104111217-600-WAGS-MIAMI-106-CLAUDIA-SAMPEDRO.jpg', 'Love Hot Summers', '', '#ee77a3', 1, 0, 0, 0, '', '2019-12-12 00:24:23'),
(15, 'Moria', '6f8f57715090da2632453988d9a1501b', 'gysed2802017-08-25-19-15-16117IMG_20140824_191316.jpg', '', '', '#cccccc', 1, 0, 0, 0, '', '2019-12-12 00:28:48'),
(16, 'samworld', '03c7c0ace395d80182db07ae2c30f034', '2642017071607595430420170412031343141IMG_20150621_191658.jpg', '', '', '#cccccc', 1, 0, 0, 0, '', '2019-12-12 00:31:21');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `memberfind`
--

INSERT INTO `memberfind` (`id`, `num`, `user`, `name`) VALUES
(1, 2, 'Avney', ''),
(2, 3, 'Virgil', ''),
(3, 4, 'Kingkong', ''),
(4, 5, 'Stally', ''),
(5, 6, 'rikoflash', ''),
(6, 7, 'Quagmire', ''),
(7, 8, 'xxxtentacion', ''),
(8, 9, 'jenny', ''),
(9, 10, 'Ragtag', ''),
(10, 11, 'Rainbow', ''),
(11, 12, 'Serny', ''),
(12, 13, 'Sonia', ''),
(13, 14, 'kingzelda', ''),
(14, 15, 'Moria', ''),
(15, 16, 'samworld', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `textfind`
--

INSERT INTO `textfind` (`idd`, `id`, `tup`, `tags`, `mash`, `time1`) VALUES
(1, 1, 'Hi There', ' Had a rough day today', ' Had a rough day today Hi There', '2019-12-10 13:40:37'),
(2, 2, 'Juice wrld', 'MAMA ALWAYS TOLD ME NOT TO HAVE ANY FEARS.BUT THIS SHIIT IS DELI LIKE ELECTRIC CHAIR Last thing i wanna hear is its over, left side heart burst #heartbreak', 'MAMA ALWAYS TOLD ME NOT TO HAVE ANY FEARS.BUT THIS SHIIT IS DELI LIKE ELECTRIC CHAIR Last thing i wanna hear is its over, left side heart burst #heartbreak Juice wrld', '2019-12-10 14:01:28'),
(3, 3, 'Bestie', 'PRICESS LALA LALA #BFF is she the one for you lol #bestfriendforever', 'PRICESS LALA LALA #BFF is she the one for you lol #bestfriendforever Bestie', '2019-12-10 17:05:36'),
(4, 4, 'zoo gang', 'ðŸ‘ŽFOR WHAT ðŸ˜Ž #WORKPARTY  this actually happened to be last weekðŸ‘¨â€ðŸ­', 'ðŸ‘ŽFOR WHAT ðŸ˜Ž #WORKPARTY  this actually happened to be last weekðŸ‘¨â€ðŸ­ zoo gang', '2019-12-10 17:27:13'),
(5, 5, 'facts', ' ðŸ˜¢ðŸ˜¢ðŸ˜¢ðŸ“¸ðŸ˜§', ' ðŸ˜¢ðŸ˜¢ðŸ˜¢ðŸ“¸ðŸ˜§ facts', '2019-12-10 17:39:40'),
(6, 6, 'Family guy', ' slippery believe me #familyguy #staypositive #focused #nevergiveup', ' slippery believe me #familyguy #staypositive #focused #nevergiveup Family guy', '2019-12-10 20:52:31'),
(7, 7, 'amazing amy', ' Wearing the right crown sitting on the wrong throneðŸ˜” #procastination', ' Wearing the right crown sitting on the wrong throneðŸ˜” #procastination amazing amy', '2019-12-11 05:04:17'),
(8, 8, 'Rick and morty', ' shoot your shot #itsmagic', ' shoot your shot #itsmagic Rick and morty', '2019-12-11 17:57:30');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `wall`
--

INSERT INTO `wall` (`id`, `num`, `time1`, `postype`, `count`, `tup`, `cap`, `sim1`, `sim1ty`, `sim2`, `sim2ty`, `sim3`, `sim3ty`, `sim4`, `sim4ty`, `sim5`, `sim5ty`, `sim6`, `sim6ty`, `sim7`, `sim7ty`, `sim8`, `sim8ty`, `sim9`, `sim9ty`, `sim10`, `sim10ty`, `sim11`, `sim11ty`, `sim12`, `sim12ty`, `sim13`, `sim13ty`, `sim14`, `sim14ty`, `sim15`, `sim15ty`, `sim16`, `sim16ty`) VALUES
(1, 2, '2019-12-10 13:40:37', 0, 2, 'Hi There', 'Had a rough day today', 'superAvney-2019-12-10-13-39-53run1.jpg', 0, 'superAvney-2019-12-10-13-39-54v1.jpg', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0),
(2, 3, '2019-12-10 14:01:28', 0, 2, 'Juice wrld', 'Last thing i wanna hear is its over, left side heart burst #heartbreak', 'superVirgil-2019-12-10-13-58-32Superstarz20191210135358.jpg', 0, 'MAMA ALWAYS TOLD ME NOT TO HAVE ANY FEARS.BUT THIS SHIIT IS DELI LIKE ELECTRIC CHAIR', 3, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0),
(3, 5, '2019-12-10 17:05:36', 0, 5, 'Bestie', 'is she the one for you lol #bestfriendforever', 'superStally-2019-12-10-17-03-08Superstarz20198223381.jpg', 0, 'superStally-2019-12-10-17-03-10Superstarz2019914134014.jpg', 0, 'superStally-2019-12-10-17-03-14Superstarz20191059472.jpg', 0, 'superStally-2019-12-10-17-03-18Superstarz2019113017195.jpg', 0, 'PRICESS LALA LALA #BFF', 1, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0),
(4, 6, '2019-12-10 17:27:13', 0, 2, 'zoo gang', 'this actually happened to be last weekðŸ‘¨â€ðŸ­', 'ðŸ‘ŽFOR WHAT ðŸ˜Ž #WORKPARTY ', 9, 'superrikoflash-2019-12-10-17-26-14Superstarz20191210172153.jpg', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0),
(5, 4, '2019-12-10 17:39:40', 0, 1, 'facts', 'ðŸ˜¢ðŸ˜¢ðŸ˜¢ðŸ“¸ðŸ˜§', 'superKingkong-2019-12-10-17-39-03Superstarz20191113113137.jpg', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0),
(6, 7, '2019-12-10 20:52:31', 0, 3, 'Family guy', 'slippery believe me #familyguy #staypositive #focused #nevergiveup', 'superQuagmire-2019-12-10-20-47-37Superstarz201972492450.jpg', 0, 'superQuagmire-2019-12-10-20-51-20Screenshot116.png', 0, 'superQuagmire-2019-12-10-20-51-24Screenshot125.png', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0),
(7, 2, '2019-12-11 05:04:17', 0, 1, 'amazing amy', 'Wearing the right crown sitting on the wrong throneðŸ˜” #procastination', 'superAvney-2019-12-11-05-03-03Superstarz2019124135518.jpg', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0),
(8, 2, '2019-12-11 17:57:30', 0, 2, 'Rick and morty', 'shoot your shot #itsmagic', 'superAvney-2019-12-11-17-56-25Screenshot19.png', 0, 'superAvney-2019-12-11-17-56-27Screenshot30.png', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0, ' ', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
