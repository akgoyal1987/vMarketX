-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 19, 2014 at 05:14 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coaching`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'soravgarg123@gmail.com', '827CCB0EEA8A706C4C34A16891F84E7B');

-- --------------------------------------------------------

--
-- Table structure for table `graduation`
--

CREATE TABLE IF NOT EXISTS `graduation` (
  `email` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `marks` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graduation`
--

INSERT INTO `graduation` (`email`, `degree`, `college`, `branch`, `marks`, `course`) VALUES
('soravgarg123@gmail.com', 'BE/B Tech.', 'Medicaps', 'IT', '64.4%', 'PHP'),
('pankaj@gmail.com', 'MBA', 'SGSITS', 'CSE', '64.4%', 'JAVA');

-- --------------------------------------------------------

--
-- Table structure for table `reg_user`
--

CREATE TABLE IF NOT EXISTS `reg_user` (
  `date` date NOT NULL,
  `name` int(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_user`
--

INSERT INTO `reg_user` (`date`, `name`, `mobile`, `email`) VALUES
('2014-09-02', 0, '9074939905', 'soravgarg123@gmail.com'),
('2014-09-06', 0, '9826424535', 'pankaj@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
