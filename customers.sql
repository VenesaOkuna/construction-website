-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 11, 2021 at 03:50 PM
-- Server version: 8.0.26-0ubuntu0.20.04.3
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `First`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` int NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`username`, `email`, `telephone`, `password`) VALUES
('fhggs', 'hjh@gmail.com', 738345345, 'kdhjfjhf4874635'),
('Alphine', 'alphine@gmail.com', 726386367, 'Alphine3900@'),
('kibet', 'kibet@gmail.com', 73527453, 'Kibet1234'),
('Albert', 'albert@gmaiol.com', 726352428, 'asdfg12345'),
('David', 'david@gmail.com', 736256346, 'david1234'),
('Marcos', 'marcos@gmail.com', 725275385, 'marcos456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
