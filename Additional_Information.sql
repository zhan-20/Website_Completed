-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 01, 2020 at 05:46 PM
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
  `Member4TShirtSize` text NOT NULL,
  `Member1Mac` text NOT NULL,
  `Member2Mac` text NOT NULL,
  `Member3Mac` text NOT NULL,
  `Member4Mac` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Additional_Information`
--

INSERT INTO `Additional_Information` (`SchoolName`, `TeamName`, `Member1Allergy`, `Member2Allergy`, `Member3Allergy`, `Member4Allergy`, `Member1TShirtSize`, `Member2TShirtSize`, `Member3TShirtSize`, `Member4TShirtSize`, `Member1Mac`, `Member2Mac`, `Member3Mac`, `Member4Mac`) VALUES
('Peddie School', 'Team Peddie', 'N/A', 'N/A', 'N/A', '', 'M', 'X', 'XL', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
