-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 03:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tvms`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Bid` varchar(8) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `Language` varchar(150) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Bid`, `Name`, `Price`, `Language`, `Type`, `Image`) VALUES
('BG0', 'Bhagwat Geeta As It Is', 700, 'Chinese', 'Medium', 'Bg.jpg'),
('CCAL', 'Sri Caitanya-caritamrta, Adi-lila', 3200, 'Spanish', 'Large', 'CCAL.jpg'),
('KB8', 'Krishna Book', 700, 'French', 'Medium', 'krishnabook.jpg'),
('PL1', 'Prabhupada Lilamrita', 600, 'English', 'Large', 'lilamrita.webp'),
('SB1C1', 'Srimad Bhagwatam Canto: 1', 1500, 'English', 'Large', 'canto1.jpg'),
('SB1C10', 'Srimad Bhagwatam Canto: 10', 1500, 'English', 'Large', 'canto10.jpg'),
('SB1C11', 'Srimad Bhagwatam Canto: 11', 1500, 'English', 'Large', 'canto11.jpg'),
('SB1C12', 'Srimad Bhagwatam Canto: 12', 1500, 'English', 'Large', 'canto12.jpg'),
('SB1C2', 'Srimad Bhagwatam Canto: 2', 1500, 'English', 'Large', 'canto2.jpg'),
('SB1C3', 'Srimad Bhagwatam Canto: 3', 1500, 'English', 'Large', 'canto3.jpg'),
('SB1C4', 'Srimad Bhagwatam Canto: 4', 1500, 'English', 'Large', 'canto4.jpg'),
('SB1C5', 'Srimad Bhagwatam Canto: 5', 1500, 'English', 'Large', 'canto5.jpg'),
('SB1C6', 'Srimad Bhagwatam Canto: 6', 1500, 'English', 'Large', 'canto6.jpg'),
('SB1C7', 'Srimad Bhagwatam Canto: 7', 1500, 'English', 'Large', 'canto7.jpg'),
('SB1C8', 'Srimad Bhagwatam Canto: 8', 1500, 'English', 'Large', 'canto8.jpg'),
('SB1C9', 'Srimad Bhagwatam Canto: 9', 1500, 'English', 'Large', 'canto9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Contact_ID` int(5) NOT NULL,
  `Uid` int(11) NOT NULL,
  `Center` varchar(150) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Contact_ID`, `Uid`, `Center`, `Phone`, `Address`) VALUES
(54, 48, 'Kathmandu', 9825267287, 'Nepal'),
(56, 50, 'Chitwan', 9984245615, 'Pokhara'),
(57, 51, 'Chitwan', 9859267287, 'Pokhara'),
(58, 52, 'Nepalgunj', 9851542314, 'Kathmandu');

-- --------------------------------------------------------

--
-- Table structure for table `creds`
--

CREATE TABLE `creds` (
  `Uid` int(11) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Role` varchar(5) NOT NULL DEFAULT 'User',
  `Pass` varchar(250) NOT NULL,
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `creds`
--

INSERT INTO `creds` (`Uid`, `Email`, `Role`, `Pass`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(48, 'therockprajjwol@gmail.com', 'Admin', '1', 'a974ba60a5c665549487b3a476f34350a87ca6f7acc221bfc02c0b70d464f06b', '2023-09-18 15:36:06'),
(50, 'Amanpaudel@gmail.com', 'User', '1', NULL, NULL),
(51, 'Gauravdulal@gmail.com', 'User', '123', NULL, NULL),
(52, 'rozal123@gmail.com', 'User', '123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eid` int(11) NOT NULL,
  `Event_Name` varchar(250) NOT NULL,
  `Event_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eid`, `Event_Name`, `Event_Date`) VALUES
(5, 'Janmastami', '2023-09-07'),
(6, 'Radhastami', '2022-09-20'),
(7, 'GaurPurnima', '2022-09-06'),
(8, 'RathYatra', '2022-09-05'),
(9, 'Mayapur Yatra', '2023-09-17'),
(10, 'RadhaAstami', '2023-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Users_ID` int(5) NOT NULL,
  `Uid` int(11) NOT NULL,
  `FName` varchar(250) NOT NULL,
  `SName` varchar(250) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Users_ID`, `Uid`, `FName`, `SName`, `DOB`, `Gender`) VALUES
(37, 48, 'Prajjwal', 'Adk', '2002-10-03', 'Male'),
(39, 50, 'Aman', 'Gupta', '2002-10-03', 'Male'),
(40, 51, 'Gaurav', 'Dulal', '1998-07-05', 'Male'),
(41, 52, 'Rozal', 'Dahal', '1999-10-09', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `Vid` int(11) NOT NULL,
  `Male` int(11) NOT NULL,
  `Female` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`Vid`, `Male`, `Female`, `Date`) VALUES
(1, 2500, 3600, '2021-09-08'),
(2, 250, 360, '2023-09-07'),
(3, 600, 1254, '2022-09-05'),
(4, 6311, 1254, '2023-09-17'),
(5, 8000, 3256, '2023-09-09'),
(6, 25633, 5214, '2023-09-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Bid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Contact_ID`),
  ADD KEY `Contact_Fk` (`Uid`);

--
-- Indexes for table `creds`
--
ALTER TABLE `creds`
  ADD PRIMARY KEY (`Uid`,`Email`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eid`),
  ADD UNIQUE KEY `Event_Date` (`Event_Date`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Users_ID`),
  ADD KEY `User_Fk` (`Uid`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`Vid`),
  ADD UNIQUE KEY `Date` (`Date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Contact_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `creds`
--
ALTER TABLE `creds`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Users_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `Vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `Contact_Fk` FOREIGN KEY (`Uid`) REFERENCES `creds` (`Uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `User_Fk` FOREIGN KEY (`Uid`) REFERENCES `creds` (`Uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
