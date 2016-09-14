-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2016 at 06:16 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internalmarks`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
('13331A1223', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `regdfaculty`
--

DROP TABLE IF EXISTS `regdfaculty`;
CREATE TABLE IF NOT EXISTS `regdfaculty` (
  `id` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regdfaculty`
--

INSERT INTO `regdfaculty` (`id`, `name`, `dept`, `password`) VALUES
('1234567', 'rwretwet', 'ECE', 'abc'),
('13331A1223', 'kfjlsd', 'IT', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `regdusers`
--

DROP TABLE IF EXISTS `regdusers`;
CREATE TABLE IF NOT EXISTS `regdusers` (
  `id` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `year` int(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regdusers`
--

INSERT INTO `regdusers` (`id`, `name`, `dept`, `year`, `password`) VALUES
('133ksdlkfa', 'dfkajsdf', 'CSE', 1, 'abc'),
('13331A1223', 'Murali Krishna', 'CSE', 1, 'abc'),
('13331A1214', 'laila', 'IT', 4, 'laila');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
