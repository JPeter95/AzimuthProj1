-- phpMyAdmin SQL Dump
-- version 4.0.10.15
-- http://www.phpmyadmin.net
--
-- Host: studentdb-maria.gl.umbc.edu
-- Generation Time: Apr 14, 2016 at 04:54 PM
-- Server version: 10.0.24-MariaDB-wsrep
-- PHP Version: 5.4.44

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `joneill2`
--

-- --------------------------------------------------------

--
-- Table structure for table `StudentInfo`
--

CREATE TABLE IF NOT EXISTS `StudentInfo` (
  `#` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Unique ID for each student entry (auto-increments)',
  `StudentName` text NOT NULL COMMENT 'Name submitted to be associated with student',
  `UMBCID` varchar(7) NOT NULL COMMENT 'UMBC ID associated with student',
  `Email` text NOT NULL COMMENT 'UMBC email of the student',
  `1` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Boolean value indicating whether the student has passed this unique course ID (''0'' means ''not passed'')',
  `2` tinyint(1) NOT NULL DEFAULT '0',
  `3` tinyint(1) NOT NULL DEFAULT '0',
  `4` tinyint(1) NOT NULL DEFAULT '0',
  `5` tinyint(1) NOT NULL DEFAULT '0',
  `6` tinyint(1) NOT NULL DEFAULT '0',
  `7` tinyint(1) NOT NULL DEFAULT '0',
  `8` tinyint(1) NOT NULL DEFAULT '0',
  `9` tinyint(1) NOT NULL DEFAULT '0',
  `10` tinyint(1) NOT NULL DEFAULT '0',
  `11` tinyint(1) NOT NULL DEFAULT '0',
  `12` tinyint(1) NOT NULL DEFAULT '0',
  `13` tinyint(1) NOT NULL DEFAULT '0',
  `14` tinyint(1) NOT NULL DEFAULT '0',
  `15` tinyint(1) NOT NULL DEFAULT '0',
  `16` tinyint(1) NOT NULL DEFAULT '0',
  `17` tinyint(1) NOT NULL DEFAULT '0',
  `18` tinyint(1) NOT NULL DEFAULT '0',
  `19` tinyint(1) NOT NULL DEFAULT '0',
  `20` tinyint(1) NOT NULL DEFAULT '0',
  `21` tinyint(1) NOT NULL DEFAULT '0',
  `22` tinyint(1) NOT NULL DEFAULT '0',
  `23` tinyint(1) NOT NULL DEFAULT '0',
  `24` tinyint(1) NOT NULL DEFAULT '0',
  `25` tinyint(1) NOT NULL DEFAULT '0',
  `26` tinyint(1) NOT NULL DEFAULT '0',
  `27` tinyint(1) NOT NULL DEFAULT '0',
  `28` tinyint(1) NOT NULL DEFAULT '0',
  `29` tinyint(1) NOT NULL DEFAULT '0',
  `30` tinyint(1) NOT NULL DEFAULT '0',
  `31` tinyint(1) NOT NULL DEFAULT '0',
  `32` tinyint(1) NOT NULL DEFAULT '0',
  `33` tinyint(1) NOT NULL DEFAULT '0',
  `34` tinyint(1) NOT NULL DEFAULT '0',
  `35` tinyint(1) NOT NULL DEFAULT '0',
  `36` tinyint(1) NOT NULL DEFAULT '0',
  `37` tinyint(1) NOT NULL DEFAULT '0',
  `38` tinyint(1) NOT NULL DEFAULT '0',
  `39` tinyint(1) NOT NULL DEFAULT '0',
  `40` tinyint(1) NOT NULL DEFAULT '0',
  `41` tinyint(1) NOT NULL DEFAULT '0',
  `42` tinyint(1) NOT NULL DEFAULT '0',
  `43` tinyint(1) NOT NULL DEFAULT '0',
  `44` tinyint(1) NOT NULL DEFAULT '0',
  `45` tinyint(1) NOT NULL DEFAULT '0',
  `46` tinyint(1) NOT NULL DEFAULT '0',
  `47` tinyint(1) NOT NULL DEFAULT '0',
  `48` tinyint(1) NOT NULL DEFAULT '0',
  `49` tinyint(1) NOT NULL DEFAULT '0',
  `50` tinyint(1) NOT NULL DEFAULT '0',
  `51` tinyint(1) NOT NULL DEFAULT '0',
  `52` tinyint(1) NOT NULL DEFAULT '0',
  `53` tinyint(1) NOT NULL DEFAULT '0',
  `54` tinyint(1) NOT NULL DEFAULT '0',
  `55` tinyint(1) NOT NULL DEFAULT '0',
  `56` tinyint(1) NOT NULL DEFAULT '0',
  `57` tinyint(1) NOT NULL DEFAULT '0',
  `58` tinyint(1) NOT NULL DEFAULT '0',
  `59` tinyint(1) NOT NULL DEFAULT '0',
  `60` tinyint(1) NOT NULL DEFAULT '0',
  `61` tinyint(1) NOT NULL DEFAULT '0',
  `62` tinyint(1) NOT NULL DEFAULT '0',
  `63` tinyint(1) NOT NULL DEFAULT '0',
  `64` tinyint(1) NOT NULL DEFAULT '0',
  `65` tinyint(1) NOT NULL DEFAULT '0',
  `66` tinyint(1) NOT NULL DEFAULT '0',
  `67` tinyint(1) NOT NULL DEFAULT '0',
  `68` tinyint(1) NOT NULL DEFAULT '0',
  `69` tinyint(1) NOT NULL DEFAULT '0',
  `70` tinyint(1) NOT NULL DEFAULT '0',
  `71` tinyint(1) NOT NULL DEFAULT '0',
  `72` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`#`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `StudentInfo`
--

INSERT INTO `StudentInfo` (`#`, `StudentName`, `UMBCID`, `Email`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`, `31`, `32`, `33`, `34`, `35`, `36`, `37`, `38`, `39`, `40`, `41`, `42`, `43`, `44`, `45`, `46`, `47`, `48`, `49`, `50`, `51`, `52`, `53`, `54`, `55`, `56`, `57`, `58`, `59`, `60`, `61`, `62`, `63`, `64`, `65`, `66`, `67`, `68`, `69`, `70`, `71`, `72`) VALUES
(1, 'Joseph', 'ad34243', 'joe@umbc.edu', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0),
(2, 'Tyler Jones', 'fw98765', 'tyler@umbc.edu', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'Billy Smith', 'bt12378', 'billy29@umbc.edu', 1, 1, 1, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1),
(4, 'Joe ONeill', 'aj76453', 'joe27@umbc.edu', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0),
(5, 'aa', 'aa99999', 'aaa@umbc.edu', 1, 1, 1, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0),
(6, 'aa', 'aa99999', 'aaa@umbc.edu', 1, 1, 1, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0),
(7, 'Sarah ONeill', 'oq82312', 'sarah9@umbc.edu', 1, 1, 1, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 1, 1, 1, 0),
(8, 'aaa', 'aa99999', 'aaaa@umbc.edu', 1, 1, 1, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0),
(9, 'aaa', 'aa99999', 'aaa@umbc.edu', 1, 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
