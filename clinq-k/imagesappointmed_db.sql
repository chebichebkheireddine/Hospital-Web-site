-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 01, 2023 at 03:09 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointmed_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `Field` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL,
  `photo` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `Field`, `Email`, `Pass`, `photo`) VALUES
(1, 'admin', 'admin', 'Rihab@test.com', '123', NULL),
(102, 'Dr. Bnlonis', 'Dentistry', 'lebronjohn@test.com', 'doctor', 'avtar_women_-removebg-preview.png'),
(103, 'Dr. Kyrie Brown', 'Nutrition', 'kyriebrown@test.com', 'doctor', 'avtar_women_-removebg-preview.png'),
(104, 'Dr. Peter Red', 'Dermatology', 'peterred@test.com', 'doctor', 'avtar_women_-removebg-preview.png'),
(105, 'chebicheb', 'test', 'khiro@gmail.com', '1234', 'State_Pattern.png');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `FName` varchar(30) NOT NULL,
  `LName` varchar(30) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Bday` date DEFAULT NULL,
  `Pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1002 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `FName`, `LName`, `Email`, `Bday`, `Pass`) VALUES
(1001, 'Bnlonis', 'Nardjs', 'nardjs@gmail.com', '2023-03-25', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patientID` int(11) DEFAULT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `scheduledDate` date NOT NULL,
  `bookAvail` varchar(3) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `field` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `patientFN` varchar(2000) DEFAULT NULL,
  `patientLN` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `patientID`, `startTime`, `endTime`, `scheduledDate`, `bookAvail`, `doctor`, `field`, `day`, `patientFN`, `patientLN`) VALUES
(4, 1002, '15:47:00', '13:48:00', '2023-03-28', 'No', 'Dr. Kyrie Brown', 'Nutrition', 'Tuesday', 'chebicheb', 'khiro'),
(6, 1001, '08:13:00', '02:13:00', '2023-03-08', 'No', 'Dr. Peter Red', 'Dermatology', 'Tuesday', 'Bnlonis', 'Nardjs'),
(7, NULL, '19:33:00', '19:37:00', '2023-03-25', 'Yes', 'Dr. Lebron John', 'Dentistry', 'Sunday', NULL, NULL),
(8, NULL, '19:33:00', '19:37:00', '2023-03-25', 'Yes', 'Dr. Lebron John', 'Dentistry', 'Sunday', NULL, NULL),
(9, NULL, '08:56:00', '05:02:00', '2023-03-15', 'Yes', 'Dr. Kyrie Brown', 'Nutrition', 'Tuesday', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
