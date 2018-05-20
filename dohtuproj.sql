-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20.05.2018 klo 17:11
-- Palvelimen versio: 10.1.28-MariaDB
-- PHP Version: 7.1.10

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
-- Rakenne taululle `arvio`
--

CREATE TABLE `arvio` (
  `arviointi_ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `kuva` varchar(255) NOT NULL,
  `arvio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `arvio`
--

INSERT INTO `arvio` (`arviointi_ID`, `userID`, `kuva`, `arvio`) VALUES
(1, 51, 'Avaruus', '8'),
(2, 51, 'Avaruus', '1'),
(3, 51, 'Tiikeri', '8'),
(4, 51, 'Tiikeri', '8'),
(5, 51, 'Tiikeri', '1'),
(6, 51, 'Orava', '8'),
(7, 51, 'Orava', '1'),
(8, 51, 'Koira', '8'),
(9, 51, 'Koira', '1'),
(10, 51, 'Anime', '8'),
(11, 51, 'Anime', '1'),
(12, 51, 'Avaruus', '2'),
(13, 51, 'Anime', '1'),
(14, 52, 'Avaruus', '8'),
(15, 52, 'Avaruus', '8'),
(16, 52, 'Avaruus', '8'),
(17, 52, 'Avaruus', '8'),
(18, 52, 'Avaruus', '8'),
(19, 52, 'Avaruus', '8'),
(20, 52, 'Avaruus', '2'),
(21, 52, 'Avaruus', '1'),
(22, 52, 'Avaruus', '1'),
(23, 52, 'Avaruus', '3'),
(24, 52, 'Avaruus', '4'),
(25, 52, 'Avaruus', '8'),
(26, 52, 'Avaruus', '5');

-- --------------------------------------------------------

--
-- Rakenne taululle `kayttajat`
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
-- Vedos taulusta `kayttajat`
--

INSERT INTO `kayttajat` (`userID`, `name`, `surname`, `username`, `password`, `email`, `rooli`) VALUES
(51, 'Vertti', 'Parviainen', 'VertZu', '$2y$10$x4OB4xVXTwztRqHYXV3nCeYVawrrCSiLZseXO0MRSi3yGeVjFoLtm', 'vertzu@windowslive.com', 'admin'),
(52, 'Testi', 'Testi', 'Testi123', '$2y$10$JSyvnIgkP5gbxfFf4YY1xeuIq54b2Sm4ChgnPdXFma5/qHq3LZmmC', 'Testi123@gmail.com', '');

-- --------------------------------------------------------

--
-- Rakenne taululle `kommentti`
--

CREATE TABLE `kommentti` (
  `kommentti_ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `kuva` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `kommentti`
--

INSERT INTO `kommentti` (`kommentti_ID`, `userID`, `kuva`, `date`, `text`) VALUES
(1, 51, 'Avaruus', '9.04.2018 07:43:09 ', 'testi123'),
(2, 51, 'Tiikeri', '9.04.2018 07:48:19 ', 'testi123'),
(3, 51, 'Orava', '9.04.2018 07:48:57 ', 'testi123'),
(4, 51, 'Koira', '9.04.2018 07:49:12 ', 'testi123'),
(5, 51, 'Anime', '9.04.2018 07:49:26 ', 'testi123'),
(7, 51, 'Anime', '10.04.2018 06:07:08 ', 'kys\r\n'),
(8, 52, 'Avaruus', '18.05.2018 14:54:24 ', 'AWdwadwadwadwa'),
(13, 52, 'Avaruus', '18.05.2018 15:25:42 ', 'adwadawdwadwadwa'),
(14, 52, 'Avaruus', '20.05.2018 13:59:59 ', '.hjlkugkliyfgjyutdfklhÃ¶oikhjlikygujhtgfrhtyrsdrtweashgflhloiuhÃ¶oughkuyfjyurtdlgh');

-- --------------------------------------------------------

--
-- Rakenne taululle `kuva`
--

CREATE TABLE `kuva` (
  `kuva_ID` int(11) NOT NULL,
  `nimi` varchar(255) NOT NULL,
  `userID` int(11) NOT NULL,
  `arvio` int(11) NOT NULL,
  `kommentti` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `kuva`
--

INSERT INTO `kuva` (`kuva_ID`, `nimi`, `userID`, `arvio`, `kommentti`) VALUES
(1, 'Avaruus', 51, 8, 'testi123'),
(2, 'Avaruus', 51, 1, ''),
(3, 'Tiikeri', 51, 8, ''),
(4, 'Tiikeri', 51, 8, 'testi123'),
(5, 'Tiikeri', 51, 1, ''),
(6, 'Orava', 51, 8, 'testi123'),
(7, 'Orava', 51, 1, ''),
(8, 'Koira', 51, 8, 'testi123'),
(9, 'Koira', 51, 1, ''),
(10, 'Anime', 51, 8, 'testi123'),
(11, 'Anime', 51, 1, ''),
(12, 'Avaruus', 51, 2, '3\r\n'),
(13, 'Anime', 51, 1, 'kys\r\n'),
(15, 'Avaruus', 52, 8, 'dwadwadwadawdwadwa'),
(16, 'Avaruus', 52, 8, 'dwadwadwadawdwadwa'),
(17, 'Avaruus', 52, 8, 'AWdwadwadwadwa'),
(19, 'Avaruus', 52, 1, ''),
(20, 'Avaruus', 52, 1, ''),
(21, 'Avaruus', 52, 5, '.hjlkugkliyfgjyutdfklhÃ¶oikhjlikygujhtgfrhtyrsdrtweashgflhloiuhÃ¶oughkuyfjyurtdlgh');

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
  MODIFY `arviointi_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `kayttajat`
--
ALTER TABLE `kayttajat`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `kommentti`
--
ALTER TABLE `kommentti`
  MODIFY `kommentti_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kuva`
--
ALTER TABLE `kuva`
  MODIFY `kuva_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Rajoitteet vedostauluille
--

--
-- Rajoitteet taululle `arvio`
--
ALTER TABLE `arvio`
  ADD CONSTRAINT `arvio_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `kayttajat` (`userID`);

--
-- Rajoitteet taululle `kommentti`
--
ALTER TABLE `kommentti`
  ADD CONSTRAINT `kommentti_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `kayttajat` (`userID`);

--
-- Rajoitteet taululle `kuva`
--
ALTER TABLE `kuva`
  ADD CONSTRAINT `kuva_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `kayttajat` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
