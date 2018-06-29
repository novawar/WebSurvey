-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2017 at 05:21 PM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentdata`
--

CREATE TABLE `commentdata` (
  `idCD` int(10) NOT NULL,
  `idGD` int(10) NOT NULL DEFAULT '0',
  `CD11` text NOT NULL,
  `CD12` text NOT NULL,
  `CD21` text NOT NULL,
  `CD22` text NOT NULL,
  `CD31` text NOT NULL,
  `CD32` text NOT NULL,
  `CD33` text NOT NULL,
  `CD41` text NOT NULL,
  `CD42` text NOT NULL,
  `CD51` text NOT NULL,
  `CD52` text NOT NULL,
  `CD53` text NOT NULL,
  `CD54` text NOT NULL,
  `CD55` text NOT NULL,
  `CD56` text NOT NULL,
  `CD61` text NOT NULL,
  `CD62` text NOT NULL,
  `CD63` text NOT NULL,
  `CD64` text NOT NULL,
  `CD65` text NOT NULL,
  `CD66` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commentdata`
--

INSERT INTO `commentdata` (`idCD`, `idGD`, `CD11`, `CD12`, `CD21`, `CD22`, `CD31`, `CD32`, `CD33`, `CD41`, `CD42`, `CD51`, `CD52`, `CD53`, `CD54`, `CD55`, `CD56`, `CD61`, `CD62`, `CD63`, `CD64`, `CD65`, `CD66`) VALUES
(4, 10, 'comment1_1-1', 'comment1_2-2', 'comment2_1-1', 'comment2_2-2', 'comment3_1-2', 'comment3_2-2', 'comment3_3-2', 'comment4_1-2', 'comment4_2-2', 'comment5_1-3', 'comment5_2-2', 'comment5_3-2', 'comment5_4-2', 'comment5_5-2', 'comment5_6-1', 'comment6_1-2', 'comment6_2-2', 'comment6_3-1', 'comment6_4-2', 'comment6_5-2', 'comment6_6-2');

-- --------------------------------------------------------

--
-- Table structure for table `generaldata`
--

CREATE TABLE `generaldata` (
  `idGD` int(10) NOT NULL,
  `sexGD` text NOT NULL,
  `argeGD` text NOT NULL,
  `facGD` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `generaldata`
--

INSERT INTO `generaldata` (`idGD`, `sexGD`, `argeGD`, `facGD`) VALUES
(10, 'male', 'old-3', 'fac-1');

-- --------------------------------------------------------

--
-- Table structure for table `socaildata`
--

CREATE TABLE `socaildata` (
  `idSC` int(10) NOT NULL,
  `idGD` int(10) NOT NULL DEFAULT '0',
  `survey4` text NOT NULL,
  `survey5` text NOT NULL,
  `survey6` text NOT NULL,
  `survey7` text NOT NULL,
  `survey8` text NOT NULL,
  `survey9` text NOT NULL,
  `survey10` text NOT NULL,
  `survey11` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `socaildata`
--

INSERT INTO `socaildata` (`idSC`, `idGD`, `survey4`, `survey5`, `survey6`, `survey7`, `survey8`, `survey9`, `survey10`, `survey11`) VALUES
(4, 10, 'year-6', 'app-1_app-2_', 'app-same2', 'platfrom-1_', 'play3', 'timeplay6', 'time-social3', 'want-1_want-2_');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentdata`
--
ALTER TABLE `commentdata`
  ADD PRIMARY KEY (`idCD`);

--
-- Indexes for table `generaldata`
--
ALTER TABLE `generaldata`
  ADD PRIMARY KEY (`idGD`);

--
-- Indexes for table `socaildata`
--
ALTER TABLE `socaildata`
  ADD PRIMARY KEY (`idSC`),
  ADD UNIQUE KEY `idGD` (`idGD`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentdata`
--
ALTER TABLE `commentdata`
  MODIFY `idCD` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `generaldata`
--
ALTER TABLE `generaldata`
  MODIFY `idGD` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `socaildata`
--
ALTER TABLE `socaildata`
  MODIFY `idSC` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
