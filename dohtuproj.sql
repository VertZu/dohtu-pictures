-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 08:09 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dohtuproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `arvio`
--

CREATE TABLE `arvio` (
  `arviointi_ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `kuva` varchar(255) NOT NULL,
  `arvio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kayttajat`
--

CREATE TABLE `kayttajat` (
  `userID` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(400) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `rooli` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kayttajat`
--

INSERT INTO `kayttajat` (`userID`, `name`, `surname`, `username`, `password`, `email`, `rooli`) VALUES
(52, 'Testi', 'Testi', 'Testi123', '$2y$10$JSyvnIgkP5gbxfFf4YY1xeuIq54b2Sm4ChgnPdXFma5/qHq3LZmmC', 'Testi123@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `kommentti`
--

CREATE TABLE `kommentti` (
  `kommentti_ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `kuva` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kuva`
--

CREATE TABLE `kuva` (
  `kuva_ID` int(11) NOT NULL,
  `nimi` varchar(255) NOT NULL,
  `userID` int(11) NOT NULL,
  `arvio` int(11) NOT NULL,
  `kommentti` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arvio`
--
ALTER TABLE `arvio`
  ADD PRIMARY KEY (`arviointi_ID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `kayttajat`
--
ALTER TABLE `kayttajat`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `kommentti`
--
ALTER TABLE `kommentti`
  ADD PRIMARY KEY (`kommentti_ID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `kuva`
--
ALTER TABLE `kuva`
  ADD PRIMARY KEY (`kuva_ID`),
  ADD KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arvio`
--
ALTER TABLE `arvio`
  MODIFY `arviointi_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `kayttajat`
--
ALTER TABLE `kayttajat`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `kommentti`
--
ALTER TABLE `kommentti`
  MODIFY `kommentti_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kuva`
--
ALTER TABLE `kuva`
  MODIFY `kuva_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `arvio`
--
ALTER TABLE `arvio`
  ADD CONSTRAINT `arvio_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `kayttajat` (`userID`);

--
-- Constraints for table `kommentti`
--
ALTER TABLE `kommentti`
  ADD CONSTRAINT `kommentti_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `kayttajat` (`userID`);

--
-- Constraints for table `kuva`
--
ALTER TABLE `kuva`
  ADD CONSTRAINT `kuva_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `kayttajat` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
