-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2020 at 05:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Peddie_Hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `Additional_Information`
--

CREATE TABLE `Additional_Information` (
  `SchoolName` text NOT NULL,
  `TeamName` text NOT NULL,
  `Member1Allergy` text NOT NULL,
  `Member2Allergy` text NOT NULL,
  `Member3Allergy` text NOT NULL,
  `Member4Allergy` text NOT NULL,
  `Member1TShirtSize` text NOT NULL,
  `Member2TShirtSize` text NOT NULL,
  `Member3TShirtSize` text NOT NULL,
  `Member4TShirtSize` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
