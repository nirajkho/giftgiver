-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 29, 2021 at 11:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gift`
--

-- --------------------------------------------------------

--
-- Table structure for table `GroupNum`
--

CREATE TABLE `GroupNum` (
  `ID` int(4) NOT NULL,
  `UserID` int(4) NOT NULL,
  `ListID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE `ideas` (
  `ID` int(4) NOT NULL,
  `gift_idea` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `link` varchar(800) NOT NULL,
  `collab` text NOT NULL,
  `description` varchar(80) NOT NULL,
  `ListID` int(4) NOT NULL,
  `UserID` int(4) NOT NULL,
  `USERNAME` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`ID`, `gift_idea`, `price`, `link`, `collab`, `description`, `ListID`, `UserID`, `USERNAME`) VALUES
(1, 'toy', 20, 'amazon.co.uk', 'Group Gift', 'toy', 1, 1, 'Niraj, Niraj'),
(2, 'toy', 30, 'amazon.co.uk', 'Group Gift', 'toy', 2, 1, 'Niraj'),
(3, 'plane', 75, 'amazon.co.uk', 'Group Gift', 'toy', 2, 1, 'Niraj'),
(4, 'Toy Airplane', 30, 'amazon.co.uk', 'Group Gift', 'Red Airplane', 3, 2, 'Simon, Niraj'),
(5, 'Toy Subamrine', 30, 'amazon.co.uk', 'Group Gift', 'Toy submarine', 3, 2, 'Simon'),
(6, 'toy boat', 45, 'amazon.co.uk/boat', 'Group Gift', 'toy yacht, size 30cm', 3, 1, 'Niraj');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `listID` int(4) NOT NULL,
  `userI` varchar(4) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `gifttype` varchar(20) NOT NULL,
  `age` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`listID`, `userI`, `Name`, `type`, `gifttype`, `age`) VALUES
(1, '1', ' Greg', 'Birthday', 'Group Gift', '21'),
(2, '1', ' Charlie', 'Birthday', 'Group Gift', '22'),
(3, '2', ' sam', 'Birthday', 'Individual', '20'),
(4, '1', ' sam', 'Birthday', 'Either', '20'),
(5, '1', ' sam', 'Birthday', 'Either', '20');

-- --------------------------------------------------------

--
-- Table structure for table `ListCreator`
--

CREATE TABLE `ListCreator` (
  `listID` int(4) NOT NULL,
  `userI` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `gifttype` varchar(20) NOT NULL,
  `age` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ListCreator`
--

INSERT INTO `ListCreator` (`listID`, `userI`, `name`, `type`, `gifttype`, `age`) VALUES
(1, 1, ' charlie', 'birthday', 'Group Gift', 20);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(4) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Niraj', 'Khosla', 'nirajkho@gmail.com', 'hello'),
(2, 'Simon', 'Smith', 'ssmith@gmail.com', 'hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `GroupNum`
--
ALTER TABLE `GroupNum`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`listID`);

--
-- Indexes for table `ListCreator`
--
ALTER TABLE `ListCreator`
  ADD PRIMARY KEY (`listID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `GroupNum`
--
ALTER TABLE `GroupNum`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ideas`
--
ALTER TABLE `ideas`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `listID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ListCreator`
--
ALTER TABLE `ListCreator`
  MODIFY `listID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
