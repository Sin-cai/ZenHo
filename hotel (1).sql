-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 05:51 PM
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
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE `bed` (
  `id_bed` int(20) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `harga` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`id_bed`, `type`, `harga`) VALUES
(1, 'single', 1000000),
(2, 'double', 1000000),
(3, 'superior', 2500000);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id_check` int(100) NOT NULL,
  `id_rs` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id_check`, `id_rs`) VALUES
(2, 2),
(3, 6),
(4, 43);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_his` int(100) NOT NULL,
  `id_check` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_his`, `id_check`) VALUES
(1, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `roomID` int(20) NOT NULL,
  `nomor_kamar` varchar(50) DEFAULT NULL,
  `id_bed` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`roomID`, `nomor_kamar`, `id_bed`) VALUES
(1, '20', 2),
(2, '3', 1),
(5, '23', 1),
(7, '5', 3),
(8, '7', 3);

-- --------------------------------------------------------

--
-- Table structure for table `reserfasi`
--

CREATE TABLE `reserfasi` (
  `id_rs` int(50) NOT NULL,
  `id_user` int(100) DEFAULT NULL,
  `j_orang` int(11) DEFAULT NULL,
  `j_ruang` int(11) DEFAULT NULL,
  `stay` int(11) DEFAULT NULL,
  `chek_out` date DEFAULT NULL,
  `roomID` int(20) DEFAULT NULL,
  `id_bed` int(20) DEFAULT NULL,
  `harga` int(200) DEFAULT NULL,
  `checkin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reserfasi`
--

INSERT INTO `reserfasi` (`id_rs`, `id_user`, `j_orang`, `j_ruang`, `stay`, `chek_out`, `roomID`, `id_bed`, `harga`, `checkin`) VALUES
(2, 1, 20, 2, 20, '2024-01-25', 2, 1, 20000000, '2024-01-05'),
(3, 1, 20, 2, 20, '2024-01-25', 2, 1, 20000000, '2024-01-05'),
(4, 2, 23, 23, 23, '2024-01-20', 2, 1, 23000000, '2023-12-28'),
(5, 2, 23, 23, 23, '2024-01-20', 2, 1, 23000000, '2023-12-28'),
(6, 1, 2, 2, 2, '2023-12-23', 2, 1, 2000000, '2023-12-21'),
(43, 2, 2, 2, 4, '2023-12-18', 7, 3, 10000000, '2023-12-14'),
(44, 1, 1, 1, 5, '2023-12-19', 8, 3, 12500000, '2023-12-14'),
(45, 1, 3, 2, 3, '2023-12-17', 2, 1, 3000000, '2023-12-14'),
(46, 1, 3, 2, 3, '0000-00-00', 2, 1, 3000000, '0000-00-00'),
(47, 1, 3, 2, 3, '2023-12-24', 2, 1, 3000000, '2023-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `id_T` int(50) NOT NULL,
  `tipe` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`id_T`, `tipe`) VALUES
(1, 'guest'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `userr`
--

CREATE TABLE `userr` (
  `id_user` int(100) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id_T` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userr`
--

INSERT INTO `userr` (`id_user`, `username`, `password`, `email`, `id_T`) VALUES
(1, 'kok', '$2y$10$Iwnl8FaMf.mYftItFDEaF.tEX2RJZBO9Mc3IAPZGrIZsHtij3EikG', 'dok@gmail.com', 1),
(2, 'lo', '$2y$10$M2zkj9wwkXdqQhkNAZ2C.OVxpv/AoNVeqVxa5PhAq/QPzF9nIMGNa', 'ok@gmail.com', 1),
(69, 'zen', '0', 'zee@gmail.com', 2),
(77, 'ryu', '11111111', 'r@gmail.com', 2),
(78, 'admin', '$2y$10$aq39emWRXKAu0VODXUqJcuPgjkCcuCIwuqKEmIw9f/9KaITA4/ozi', 'admin1@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bed`
--
ALTER TABLE `bed`
  ADD PRIMARY KEY (`id_bed`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_check`),
  ADD KEY `id_rs` (`id_rs`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_his`),
  ADD KEY `id_check` (`id_check`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`roomID`),
  ADD KEY `id_bed` (`id_bed`);

--
-- Indexes for table `reserfasi`
--
ALTER TABLE `reserfasi`
  ADD PRIMARY KEY (`id_rs`),
  ADD KEY `id_bed` (`id_bed`),
  ADD KEY `roomID` (`roomID`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`id_T`);

--
-- Indexes for table `userr`
--
ALTER TABLE `userr`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_T` (`id_T`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_check` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_his` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `roomID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reserfasi`
--
ALTER TABLE `reserfasi`
  MODIFY `id_rs` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `userr`
--
ALTER TABLE `userr`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`id_rs`) REFERENCES `reserfasi` (`id_rs`);

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`id_check`) REFERENCES `checkout` (`id_check`);

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`id_bed`) REFERENCES `bed` (`id_bed`),
  ADD CONSTRAINT `kamar_ibfk_2` FOREIGN KEY (`id_bed`) REFERENCES `bed` (`id_bed`);

--
-- Constraints for table `reserfasi`
--
ALTER TABLE `reserfasi`
  ADD CONSTRAINT `reserfasi_ibfk_1` FOREIGN KEY (`id_bed`) REFERENCES `bed` (`id_bed`),
  ADD CONSTRAINT `reserfasi_ibfk_3` FOREIGN KEY (`roomID`) REFERENCES `kamar` (`roomID`),
  ADD CONSTRAINT `reserfasi_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `userr` (`id_user`);

--
-- Constraints for table `userr`
--
ALTER TABLE `userr`
  ADD CONSTRAINT `userr_ibfk_1` FOREIGN KEY (`id_T`) REFERENCES `tipe` (`id_T`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
