-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: c3
-- Generation Time: May 23, 2010 at 07:02 PM
-- Server version: 1
-- PHP Version: 4.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `corporate`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `group` int(2) NOT NULL,
  `username` varchar(18) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`group`, `username`, `password`) VALUES
(2, 'skater', '8bf70019f4ed0764a5ab9368218de657'),
(2, 'clownman44', '99ca2b3eb3447411c0d1438e9e2b0fe3'),
(2, 'IcE', '405b96886b9115ae1dca2c4d7f847288'),
(2, 'pavillionX', 'd17fed6ef094a10b8cddd97283177f62'),
(2, 'kanye', 'ee84b9e5e584cee9f2b2aeb6add77325'),
(1, 'Pocketz', '9139a90b1bd94dc57d8b57a5815a2353'),
(2, 'faiiry', '6006cd7b11193da30f24257bda8a2088'),
(2, 'Dillusive4', 'a1ba60103654a36bb53ed7e222dcf365'),
(2, 'Fat-Albert', 'c84fa6b830e38ee8a551df61172d53d7'),
(2, 'hangman', 'f7b57dffb27e76a928feb948cdb52bf8');
