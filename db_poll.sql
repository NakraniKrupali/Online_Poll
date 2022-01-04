-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 09:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_poll`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `AdminId` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`AdminId`, `Name`, `Password`) VALUES
(1, 'krupali', '12345'),
(2, 'Falguni', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tblpollanswer`
--

CREATE TABLE `tblpollanswer` (
  `PollAnsId` int(11) NOT NULL,
  `PollId` int(11) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Votes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpollanswer`
--

INSERT INTO `tblpollanswer` (`PollAnsId`, `PollId`, `Title`, `Votes`) VALUES
(1, 1, 'Ludo', 0),
(2, 1, 'Sudoku', 0),
(3, 1, 'Candy Crush', 0),
(4, 1, 'PUBG', 0),
(5, 4, 'Pizza', 2),
(6, 4, 'Burger', 1),
(7, 4, 'Sandwich', 1),
(8, 4, 'Dosa', 0),
(9, 11, 'PHP', 2),
(10, 11, 'Java', 2),
(11, 11, 'C++', 2),
(12, 11, 'JavaScript', 3),
(13, 12, 'PHP', 0),
(14, 12, 'Java', 0),
(15, 12, 'C++', 0),
(16, 12, 'JavaScript', 0),
(17, 13, 'Surat', 0),
(18, 13, 'Porbandar', 0),
(19, 13, 'Mahesana', 0),
(20, 13, 'Bhavnagar', 0),
(22, 22, 'Cricket', 0),
(23, 22, 'FootBall', 0),
(24, 22, 'Table Tenis', 0),
(25, 22, 'Ludo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblpolll`
--

CREATE TABLE `tblpolll` (
  `PollId` int(11) NOT NULL,
  `PollTitle` varchar(50) NOT NULL,
  `IsActive` varchar(1) NOT NULL DEFAULT 'N',
  `AdminId` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpolll`
--

INSERT INTO `tblpolll` (`PollId`, `PollTitle`, `IsActive`, `AdminId`) VALUES
(1, 'What\'s Your Favorite Game ?', 'N', 1),
(4, 'What\'s Your Favorite Food?', 'Y', 1),
(11, 'what is Your Favorite Language?', 'N', 1),
(12, 'what is Your Favorite Language?', 'N', 1),
(13, 'The Cleanest City is', 'N', 1),
(22, 'What\'s your fav Sport', 'N', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `tblpollanswer`
--
ALTER TABLE `tblpollanswer`
  ADD PRIMARY KEY (`PollAnsId`),
  ADD KEY `PollId` (`PollId`);

--
-- Indexes for table `tblpolll`
--
ALTER TABLE `tblpolll`
  ADD PRIMARY KEY (`PollId`),
  ADD KEY `AdminId` (`AdminId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpollanswer`
--
ALTER TABLE `tblpollanswer`
  MODIFY `PollAnsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tblpolll`
--
ALTER TABLE `tblpolll`
  MODIFY `PollId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblpollanswer`
--
ALTER TABLE `tblpollanswer`
  ADD CONSTRAINT `tblpollanswer_ibfk_1` FOREIGN KEY (`PollId`) REFERENCES `tblpolll` (`PollId`);

--
-- Constraints for table `tblpolll`
--
ALTER TABLE `tblpolll`
  ADD CONSTRAINT `tblpolll_ibfk_1` FOREIGN KEY (`AdminId`) REFERENCES `tbladmin` (`AdminId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
