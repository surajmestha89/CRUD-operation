-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 02, 2020 at 01:04 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

DROP TABLE IF EXISTS `form`;
CREATE TABLE IF NOT EXISTS `form` (
  `name` varchar(12) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `salary` int(6) UNSIGNED NOT NULL,
  `occupation` varchar(6) NOT NULL,
  `exp` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`name`, `gender`, `salary`, `occupation`, `exp`) VALUES
('babi', 'femel', 400000, 'bcom', 'experiance'),
('sooraj', 'male', 1234455, 'bsc', 'experiance'),
('varad', 'male', 0, 'bcom', 'experiance'),
('ansh', 'male', 10300, 'be', 'fresher'),
('ansh', 'male', 10300, 'be', 'fresher'),
('ksok', 'other', 222, 'be', 'fresher'),
('ksok', 'other', 222, 'be', 'fresher'),
('ram', 'male', 123, 'ba', 'experiance'),
('ram', 'male', 123, 'ba', 'experiance'),
('ram', 'male', 123, 'ba', 'experiance'),
('ram', 'male', 123, 'ba', 'experiance'),
('3ork4lk', 'femel', 123456, 'be', 'experiance'),
('sj', 'male', 99585, 'bsc', 'fresher'),
('sj', 'male', 99585, 'bsc', 'fresher'),
('sj', 'male', 99585, 'bsc', 'fresher'),
('sj', 'male', 99585, 'bsc', 'fresher'),
('sj', 'male', 99585, 'bsc', 'fresher'),
('sj', 'male', 99585, 'bsc', 'fresher'),
('ansh', 'male', 10300, 'be', 'fresher'),
('ansh', 'male', 10300, 'be', 'fresher'),
('ansh', 'male', 10300, 'be', 'fresher'),
('ansh', 'male', 10300, 'be', 'fresher');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
