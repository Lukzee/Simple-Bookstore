-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2013 at 10:53 PM
-- Server version: 5.5.34
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `naf31`
--
CREATE DATABASE IF NOT EXISTS `naf31` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `naf31`;

-- --------------------------------------------------------

--
-- Table structure for table `Authors`
--

DROP TABLE IF EXISTS `Authors`;
CREATE TABLE IF NOT EXISTS `Authors` (
  `A_ID` int(11) NOT NULL AUTO_INCREMENT,
  `A_FNAME` varchar(60) NOT NULL,
  `A_LNAME` varchar(60) NOT NULL,
  PRIMARY KEY (`A_ID`),
  KEY `A_ID` (`A_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Authors`
--

INSERT INTO `Authors` (`A_ID`, `A_FNAME`, `A_LNAME`) VALUES
(1, 'Sherri ', 'Davidoff '),
(2, 'David', 'Walliams');

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

DROP TABLE IF EXISTS `Customers`;
CREATE TABLE IF NOT EXISTS `Customers` (
  `C_ID` int(11) NOT NULL AUTO_INCREMENT,
  `C_PWD` varchar(16) NOT NULL,
  `C_FNAME` varchar(60) NOT NULL,
  `C_LNAME` varchar(60) NOT NULL,
  `C_ADD` varchar(100) NOT NULL,
  PRIMARY KEY (`C_ID`),
  KEY `C_ID` (`C_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Customers`
--

INSERT INTO `Customers` (`C_ID`, `C_PWD`, `C_FNAME`, `C_LNAME`, `C_ADD`) VALUES
(1, 'f21sc_13', 'Sana', 'Khan', '2/3 Tranent High Street EH23 2TH'),
(2, '12ab', 'Nida', 'Farooqui', '15/2 Portobello EH15 3DF');

-- --------------------------------------------------------

--
-- Table structure for table `Items`
--

DROP TABLE IF EXISTS `Items`;
CREATE TABLE IF NOT EXISTS `Items` (
  `I_ID` int(20) NOT NULL AUTO_INCREMENT,
  `I_TITLE` varchar(100) NOT NULL,
  `I_A_ID` int(10) NOT NULL,
  `I_PUBLISHER` varchar(60) NOT NULL,
  `I_SUBJECT` varchar(60) NOT NULL,
  `I_COST` decimal(4,2) NOT NULL,
  `I_CURRENCY` varchar(20) NOT NULL,
  `I_STOCK` int(11) NOT NULL,
  PRIMARY KEY (`I_ID`),
  KEY `I_ID` (`I_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Items`
--

INSERT INTO `Items` (`I_ID`, `I_TITLE`, `I_A_ID`, `I_PUBLISHER`, `I_SUBJECT`, `I_COST`, `I_CURRENCY`, `I_STOCK`) VALUES
(1, 'Network Forensics: Tracking Hackers through Cyberspace', 1, 'Prentice-Hall', 'Computers & Technology', '69.99', 'Dollar $', 37),
(2, 'Demon Dentist', 2, 'Harper Collins ', 'Children''s Books', '5.00', 'GBP £', 34);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
