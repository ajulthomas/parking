-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 12:17 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `pslots`
--

CREATE TABLE `pslots` (
  `SID` int(1) NOT NULL,
  `SLOT_1` int(1) NOT NULL DEFAULT '0',
  `SLOT_2` int(1) NOT NULL DEFAULT '0',
  `SLOT_3` int(1) NOT NULL DEFAULT '0',
  `SLOT_4` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pslots`
--

INSERT INTO `pslots` (`SID`, `SLOT_1`, `SLOT_2`, `SLOT_3`, `SLOT_4`) VALUES
(1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `RFID` varchar(20) NOT NULL,
  `VID` varchar(20) NOT NULL DEFAULT '0',
  `USERNAME` text NOT NULL,
  `CONTACT` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`RFID`, `VID`, `USERNAME`, `CONTACT`) VALUES
('123456', 'KL12 P 531', 'JOSSY FRANCIS', 2147483647),
('5454545', '123456', 'ajul thomas', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pslots`
--
ALTER TABLE `pslots`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`RFID`,`VID`),
  ADD UNIQUE KEY `RFID` (`RFID`),
  ADD UNIQUE KEY `VID` (`VID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
