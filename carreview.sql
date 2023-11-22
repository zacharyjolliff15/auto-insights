-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 01:47 AM
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
-- Database: `carreview`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `CarID` int(11) NOT NULL,
  `Make` text NOT NULL,
  `Model` text NOT NULL,
  `Year` int(11) NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `Description` text NOT NULL,
  `PicturesPath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carlikes`
--

CREATE TABLE `carlikes` (
  `CarLikesID` int(11) NOT NULL,
  `CarID` int(11) NOT NULL,
  `LikeCount` int(11) NOT NULL,
  `DislikeCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ReviewID` int(11) NOT NULL,
  `CarID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ReviewText` mediumtext NOT NULL,
  `ReviewPicturesPath` text NOT NULL,
  `Rating` float NOT NULL,
  `ReviewDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CommentText` longtext NOT NULL,
  `ReportCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviewlikes`
--

CREATE TABLE `reviewlikes` (
  `ReviewLikesID` int(11) NOT NULL,
  `ReviewID` int(11) NOT NULL,
  `LikeCount` int(11) NOT NULL,
  `DislikeCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Email` text NOT NULL,
  `Fname` text NOT NULL,
  `Lname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`CarID`);

--
-- Indexes for table `carlikes`
--
ALTER TABLE `carlikes`
  ADD PRIMARY KEY (`CarLikesID`),
  ADD KEY `CarID` (`CarID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ReviewID`),
  ADD KEY `Car` (`CarID`),
  ADD KEY `User` (`UserID`);

--
-- Indexes for table `reviewlikes`
--
ALTER TABLE `reviewlikes`
  ADD PRIMARY KEY (`ReviewLikesID`),
  ADD KEY `ReviewID` (`ReviewID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `CarID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carlikes`
--
ALTER TABLE `carlikes`
  MODIFY `CarLikesID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ReviewID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviewlikes`
--
ALTER TABLE `reviewlikes`
  MODIFY `ReviewLikesID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carlikes`
--
ALTER TABLE `carlikes`
  ADD CONSTRAINT `CarID` FOREIGN KEY (`CarID`) REFERENCES `car` (`CarID`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `Car` FOREIGN KEY (`CarID`) REFERENCES `car` (`CarID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `User` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON UPDATE CASCADE;

--
-- Constraints for table `reviewlikes`
--
ALTER TABLE `reviewlikes`
  ADD CONSTRAINT `ReviewID` FOREIGN KEY (`ReviewID`) REFERENCES `review` (`ReviewID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
