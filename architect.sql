-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 07:36 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `architect`
--
CREATE DATABASE IF NOT EXISTS `architect` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `architect`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`login_id`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name_tbl` varchar(100) NOT NULL,
  `email_tbl` varchar(100) NOT NULL,
  `subject_tbl` varchar(100) NOT NULL,
  `comment_tbl` varchar(300) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=342 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name_tbl`, `email_tbl`, `subject_tbl`, `comment_tbl`) VALUES
(2, 'jaafar', 'jaafar@gmail.com', 'hi', 'Hi There'),
(336, 'Farah abdul', 'farah@gmail.com', 'Jom Chatting', 'Ini test sahaja'),
(338, 'Laila', 'Laila@gmail.com', 'Improvement', 'Add more staff'),
(339, 'Nadia ahmad amin', 'nad@gmail.com', 'Suggestions', 'Add more pages'),
(340, 'Tajul hakim', 'Tajul@gmail.com', 'Suggestion', 'Please put live map'),
(341, 'Haziq Danny', 'Danny@gmail.com', 'Suggestion', 'Please provide backup contact number');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
