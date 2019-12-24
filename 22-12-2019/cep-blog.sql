-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 01:16 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cep-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `editors`
--

CREATE TABLE IF NOT EXISTS `editors` (
  `editor_id` int(10) NOT NULL AUTO_INCREMENT,
  `editor_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `editor_email` varchar(100) COLLATE utf8_bin NOT NULL,
  `editor_password` varchar(100) COLLATE utf8_bin NOT NULL,
  `join_date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`editor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `editors`
--

INSERT INTO `editors` (`editor_id`, `editor_name`, `editor_email`, `editor_password`, `join_date`, `status`) VALUES
(1, 'Waseem', 'waseem@domain.com', '123456', '0000-00-00', 1),
(2, 'Waseem', 'waseem@domain.com', '123456', '2019-12-01', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
