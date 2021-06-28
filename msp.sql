-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 11, 2018 at 05:32 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `msp`
--
CREATE DATABASE IF NOT EXISTS `msp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `msp`;

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE IF NOT EXISTS `actor` (
  `pics` varchar(100) NOT NULL,
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `movies` int(50) NOT NULL,
  `hit_movies` int(50) NOT NULL,
  `flop_movies` int(50) NOT NULL,
  `rating` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`pics`, `id`, `name`, `movies`, `hit_movies`, `flop_movies`, `rating`) VALUES
('uploads/mentor.jpg', '1', 'shubham', 450, 225, 225, 50),
('uploads/course02.jpg', '10', 'sushant', 120, 84, 36, 70);

-- --------------------------------------------------------

--
-- Table structure for table `actress`
--

CREATE TABLE IF NOT EXISTS `actress` (
  `pics` varchar(100) NOT NULL,
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `movies` int(50) NOT NULL,
  `hit_movies` int(50) NOT NULL,
  `flop_movies` int(50) NOT NULL,
  `rating` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actress`
--

INSERT INTO `actress` (`pics`, `id`, `name`, `movies`, `hit_movies`, `flop_movies`, `rating`) VALUES
('uploads/course06.jpg', '1', 'akhataa', 300, 150, 150, 50),
('uploads/mentor.jpg', '10', 'priya udoshi', 46, 46, 0, 100),
('uploads/bg-banner.jpg', '11', 'namrata', 10, 10, 0, 100);

-- --------------------------------------------------------

--
-- Table structure for table `admin_registration`
--

CREATE TABLE IF NOT EXISTS `admin_registration` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_registration`
--

INSERT INTO `admin_registration` (`id`, `name`, `address`, `email`, `password`, `mobile`) VALUES
('1', 'sushant', 'khanapur', 'ss@gmail.com', '007', '9886022013');

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE IF NOT EXISTS `director` (
  `pics` varchar(100) NOT NULL,
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `movies` int(50) NOT NULL,
  `hit_movies` int(50) NOT NULL,
  `flop_movies` int(50) NOT NULL,
  `rating` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`pics`, `id`, `name`, `movies`, `hit_movies`, `flop_movies`, `rating`) VALUES
('uploads/course02.jpg', '1', 'shushant', 450, 225, 225, 50),
('uploads/course03.png', '10', 'mahesh', 20, 20, 0, 100);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `year` year(4) NOT NULL,
  `actor` varchar(50) NOT NULL,
  `actress` varchar(50) NOT NULL,
  `director` varchar(50) NOT NULL,
  `music_director` varchar(50) NOT NULL,
  `writer` varchar(50) NOT NULL,
  `prediction` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `year`, `actor`, `actress`, `director`, `music_director`, `writer`, `prediction`) VALUES
('1', '3 idiots', 2014, 'salman khan', 'priyanka Chopra', 'sachin pilagonkar', 'ajay atul', 'sachin pilagonkar', '80'),
('2', 'golmal', 2010, 'sushant sing rajput', 'priya udoshi', 'sayya khan', 'shreya ghoshal', 'dada phalke', '76'),
('45', 'dfd', 0000, 'prem chopra', 'priyanka chopra', 'sachin', 'shreya ghoshal', 'nana patekar', '45'),
('50', 'dfd', 0000, 'df', 'priyanka chopra', 'sachin', 'shreya ghoshal', 'nana patekar', '50'),
('77', 'fdf', 0000, 'prem chopra', 'priyanka chopra', 'sachin', 'shreya ghoshal', 'nana patekar', '45');

-- --------------------------------------------------------

--
-- Table structure for table `music_director`
--

CREATE TABLE IF NOT EXISTS `music_director` (
  `pics` varchar(100) NOT NULL,
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `movies` int(50) NOT NULL,
  `hit_movies` int(50) NOT NULL,
  `flop_movies` int(50) NOT NULL,
  `rating` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music_director`
--

INSERT INTO `music_director` (`pics`, `id`, `name`, `movies`, `hit_movies`, `flop_movies`, `rating`) VALUES
('uploads/course06.jpg', '1', 'shreya Ghoshal', 20, 15, 5, 75),
('uploads/course03.png', '10', 'swapnali', 50, 50, 0, 100),
('uploads/course05.jpg', '2', 'priyya Ghoshal', 500, 300, 200, 60);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE IF NOT EXISTS `user_registration` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `name`, `address`, `email`, `password`, `mobile`) VALUES
('1', 'sushantg', 'khanapur', 'ss@gmail.com', '123', '9886022013'),
('2', 'sushant', 'khanapur', 'sushantgunjikar@gmail.com', '123', '9886022013');

-- --------------------------------------------------------

--
-- Table structure for table `writer`
--

CREATE TABLE IF NOT EXISTS `writer` (
  `pics` varchar(100) NOT NULL,
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `movies` int(50) NOT NULL,
  `hit_movies` int(50) NOT NULL,
  `flop_movies` int(50) NOT NULL,
  `rating` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `writer`
--

INSERT INTO `writer` (`pics`, `id`, `name`, `movies`, `hit_movies`, `flop_movies`, `rating`) VALUES
('', '1', 'nana patekar', 150, 75, 75, 50),
('uploads/course05.jpg', '10', 'santosh', 10, 10, 0, 100);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
