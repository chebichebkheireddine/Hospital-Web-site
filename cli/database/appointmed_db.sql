-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 11:52 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

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
CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Field` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `Field`, `Email`, `Pass`) VALUES
(1, 'admin', 'admin', 'admin@test.com', 'admin'),
(101, 'Dr. Steph James', 'Cardiology', 'stephjames@test.com', 'doctor'),
(102, 'Dr. Lebron John', 'Dentistry', 'lebronjohn@test.com', 'doctor'),
(103, 'Dr. Kyrie Brown', 'Nutrition', 'kyriebrown@test.com', 'doctor'),
(104, 'Dr. Peter Red', 'Dermatology', 'peterred@test.com', 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE `patient` (
  `id` int(10) UNSIGNED NOT NULL,
  `FName` varchar(30) NOT NULL,
  `LName` varchar(30) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Bday` date NOT NULL DEFAULT current_timestamp(),
  `Pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `FName`, `LName`, `Email`, `Bday`, `Pass`) VALUES
(1001, 'John', 'Doe', 'user@test.com', '1999-10-09', 'user'),
(1002, 'Jane', 'Doe', 'user1@test.com', '2001-03-12', 'user1');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `scheduledDate` date NOT NULL,
  `bookAvail` varchar(10) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `field` varchar(255) NOT NULL,
  `day` varchar(15) NOT NULL,
  `patientID` int(255) NOT NULL,
  `patientFN` varchar(255) NOT NULL,
  `patientLN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `startTime`, `endTime`, `scheduledDate`, `bookAvail`, `doctor`, `field`, `day`, `patientID`, `patientFN`, `patientLN`) VALUES
(1, '10:30:00', '11:00:00', '2021-06-11', 'No', 'Dr. Steph James', 'Cardiology', 'Friday', 1001, 'John', 'Doe'),
(2, '10:00:00', '10:30:00', '2021-06-11', 'No', 'Dr. Lebron John', 'Dentistry', 'Friday', 1001, 'John', 'Doe'),
(3, '11:28:00', '11:30:00', '2021-06-04', 'No', 'Dr. Kyrie Brown', 'Dentistry', 'Friday', 1002, 'Jane', 'Doe'),
(4, '13:00:00', '13:30:00', '2021-06-08', 'No', 'Dr. Peter Red', 'Dermatology', 'Tuesday', 1002, 'Jane', 'Doe'),
(5, '12:00:00', '12:30:00', '2021-06-05', 'Yes', 'Dr. Lebron John', 'Dentistry', 'Saturday', 0, '', ''),
(6, '15:00:00', '15:20:00', '2021-06-13', 'Yes', 'Dr. Steph James', 'Cardiology', 'Sunday', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patientEmail` (`Email`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
