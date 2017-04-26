-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2017 at 05:02 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db3`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `surname` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `mother_name` varchar(20) NOT NULL,
  `dob` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `domicile` varchar(20) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `number` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `last_exam_passed` varchar(30) NOT NULL,
  `textarea` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` int(20) NOT NULL,
  `mobno` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`surname`, `first_name`, `father_name`, `mother_name`, `dob`, `gender`, `nationality`, `domicile`, `religion`, `category`, `number`, `email`, `last_exam_passed`, `textarea`, `city`, `state`, `pincode`, `mobno`) VALUES
('', '', '', '', 0, '', '', ' ', '', '', 0, '', '', '', '', '', 0, 0),
('', '', '', '', 0, '', '', ' ', '', '', 0, '', '', '', '', '', 0, 0),
('', '', '', '', 0, '', '', ' ', '', '', 0, '', '', '', '', '', 0, 0),
('', '', '', '', 0, '', '', ' ', '', '', 0, '', '', '', '', '', 0, 0),
('gupta', 'raunak', 'ramji', 'geeta', 1997, 'on', 'indian', 'mah', 'hindu', 'open', 2147483647, 'rgupta_66@yahoo.in', 'SE-IT SEM 3', 'afas', 'MUMBAI', 'mah', 400078, 2147483647),
('gupta', 'raunak', 'ramji', 'geeta', 1997, 'on', 'indian', 'mah', 'hindu', 'open', 2147483647, 'rgupta_66@yahoo.in', 'SE-IT SEM 3', 'ascfacca', 'MUMBAI', 'mah', 400078, 2147483647),
('patel', 'harsh ', 'ramesh', 'suman', 1997, 'on', 'indian', 'mah', 'hindu', 'open', 2147483647, 'harshpatel@gmail.com', 'SE-IT SEM 3', '5/12 patel niwas, jogeshwari (w)', 'MUMBAI', 'mah', 400078, 456123987),
('patel', 'harsh ', 'ramesh', 'suman', 1997, 'on', 'indian', 'mah', 'hindu', 'open', 2147483647, 'harshpatel@gmail.com', 'SE-IT SEM 3', '5/12 patel niwas, jogeshwari (w)', 'MUMBAI', 'mah', 400078, 456123987);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
