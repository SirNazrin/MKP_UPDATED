-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 09:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0
-- Gune Database ni

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mkp`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `UserIC` varchar(12) NOT NULL,
  `User_Name` varchar(255) NOT NULL,
  `User_Password` varchar(30) NOT NULL,
  `User_PhoneNo` varchar(12) NOT NULL,
  `User_Gender` varchar(10) NOT NULL,
  `User_Email` varchar(255) NOT NULL,
  `User_BirthDate` date NOT NULL,
  `User_Citizenship` varchar(50) DEFAULT NULL,
  `User_Career` varchar(255) DEFAULT NULL,
  `User_Address` varchar(255) DEFAULT NULL,
  `User_Status` varchar(50) DEFAULT NULL,
  `User_Role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`UserIC`, `User_Name`, `User_Password`, `User_PhoneNo`, `User_Gender`, `User_Email`, `User_BirthDate`, `User_Citizenship`, `User_Career`, `User_Address`, `User_Status`, `User_Role`) VALUES
('020728060451', 'NAZRIN NAIM BIN AHMAD MAHARI', 'nazrinnaim', '0105728660', 'MALE', 'nazrinnaim.nn2800@gmail.com', '2002-07-28', 'WARGANEGARA', NULL, NULL, NULL, 'USER'),
('ADMIN123', 'SUPREME LEADER', 'adminhensem', '-', '-', '-', '0000-00-00', NULL, NULL, NULL, NULL, 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`UserIC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
