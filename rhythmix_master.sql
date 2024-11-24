-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2024 at 09:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rhythmix_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `stage1_level1`
--

CREATE TABLE `stage1_level1` (
  `ID` int(60) NOT NULL,
  `LRN` varchar(255) NOT NULL,
  `PART1` int(60) NOT NULL,
  `PART2` int(60) NOT NULL,
  `PART3` int(60) NOT NULL,
  `PART4` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stage1_level1`
--

INSERT INTO `stage1_level1` (`ID`, `LRN`, `PART1`, `PART2`, `PART3`, `PART4`) VALUES
(3, '105133180024', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stage1_level2`
--

CREATE TABLE `stage1_level2` (
  `ID` int(60) NOT NULL,
  `LRN` varchar(255) NOT NULL,
  `PART1` int(60) NOT NULL,
  `PART2` int(60) NOT NULL,
  `PART3` int(60) NOT NULL,
  `PART4` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stage1_level2`
--

INSERT INTO `stage1_level2` (`ID`, `LRN`, `PART1`, `PART2`, `PART3`, `PART4`) VALUES
(4, '105133180024', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stage1_level3`
--

CREATE TABLE `stage1_level3` (
  `ID` int(60) NOT NULL,
  `LRN` varchar(255) NOT NULL,
  `PART1` int(60) NOT NULL,
  `PART2` int(60) NOT NULL,
  `PART3` int(60) NOT NULL,
  `PART4` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stage1_level3`
--

INSERT INTO `stage1_level3` (`ID`, `LRN`, `PART1`, `PART2`, `PART3`, `PART4`) VALUES
(4, '105133180024', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stage1_level4`
--

CREATE TABLE `stage1_level4` (
  `ID` int(60) NOT NULL,
  `LRN` varchar(255) NOT NULL,
  `PART1` int(60) NOT NULL,
  `PART2` int(60) NOT NULL,
  `PART3` int(60) NOT NULL,
  `PART4` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stage1_level4`
--

INSERT INTO `stage1_level4` (`ID`, `LRN`, `PART1`, `PART2`, `PART3`, `PART4`) VALUES
(4, '105133180024', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `LRN` bigint(12) DEFAULT NULL,
  `FULL_NAME` varchar(35) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `GENDER` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `LRN`, `FULL_NAME`, `PASSWORD`, `GENDER`) VALUES
(1, 105133180024, 'ALEXANDER JAMES GERALDE ALCANTARA', 'a22bfb78ffdacedc95737aec103525fb', 'M'),
(2, 104737180270, ' MOHAMMAD FAIZ PANGALIAN ALICAN', '104737180270', 'M'),
(3, 104737180090, 'BATAC,XAIP JOHN, GARCIA', '104737180090', 'M'),
(4, 123681170010, 'BAUTISTA,JAY-M, EVAL', '', 'M'),
(5, 113142180053, 'BERMEJO,ANDREI, RAMIL', '', 'M'),
(6, 102079170028, 'CADAVIS,EMAN, LONTOC', '', 'M'),
(7, 418642180052, 'CALUAG,ELCARIM ROBSON, PENUS', '', 'M'),
(8, 104737180070, 'CASTILLO,JAMES DANIEL, LONTOC', '', 'M'),
(9, 104737180076, 'CORPUZ,SHOZIROJ KHIRO, DEMETRIO', '', 'M'),
(10, 109315180164, 'CRUZ,JOHN CHRISTIAN PAUL, LOPEZ', '', 'M'),
(11, 104737180238, 'DE VERA,DAREN, PLACIDO', '', 'M'),
(12, 104737170207, 'DELA CRUZ,KYLE, SAN JOSE', '', 'M'),
(13, 105062180048, 'DIONISIO,JAY M, ARCEO', '', 'M'),
(14, 113768180011, 'FERANDO,JOHN RONALD, DAHOYA', '', 'M'),
(15, 104737180024, 'ILIGAN,JAY FRANCIS, -', '', 'M'),
(16, 104737180212, 'JUANES,JOHN DAVE, PARADERO', '', 'M'),
(17, 136687180043, 'LAJERA,ALEXANDER, LAO', '', 'M'),
(18, 105947180040, 'MENDOZA,MARINO REY, DEL CARMEN', '', 'M'),
(19, 104737180214, 'NAVOA,MHIGZ CEKIEL, -', '', 'M'),
(20, 104737180269, 'SERVIÑO,SAMUEL, RAFANAN', '', 'M'),
(21, 104737180025, 'STA JUANA,LANCE ANDREI, VILLAFANE', '', 'M'),
(22, 104737180220, 'VILLAR,RAYMART, -', '', 'M'),
(24, 104737130351, 'ALBUERA,JEREMY, CAÑETE', '', 'F'),
(25, 104741180019, 'APORTO,ALTHEA, FUROG', '', 'F'),
(26, 104758180114, 'BALBAS,ANGELA JANE, VILLAMOR', '', 'F'),
(27, 104737180221, 'BENIZA,SHAIRA JANE, CARAIG', '', 'F'),
(28, 104737180248, 'BUBILIS,ROCHELLE, PARAYAO', '', 'F'),
(29, 408689180007, 'CAO,JM-MAE RAIN, ARGULLO', '', 'F'),
(30, 400677180006, 'CLUTARIO,ASHLENE JHAM, MULLOT', '', 'F'),
(31, 104746180040, 'DE GUZMAN,JULLIANA BLAIRE, -', '', 'F'),
(32, 104737180224, 'DE GUZMAN,PRINCESS JOY, GONZAGA', '', 'F'),
(33, 104737180054, 'DELOTABO,ANGEL FAYE, VALDERAMA', '', 'F'),
(34, 104737180251, 'ESTRELLA,KYLIE, YACIAL', '', 'F'),
(35, 104748180023, 'LORENZO,RHIAN KATE, PACQUING', '', 'F'),
(36, 104737180063, 'MARTIN,PRINCESS KAYE, GALVAN', '', 'F'),
(37, 104737180163, 'MARTIN,RACHEL ANNE, SANTOS', '', 'F'),
(38, 104760170056, 'RAMOS,JENNY ROSE, MIRANDILLA', '', 'F'),
(39, 104737180112, 'SABADO,JHAIDA, IGNACIO', '', 'F'),
(40, 104737180234, 'VALENZUELA,AYESHA WYNAH, ALCANTARA', '', 'F'),
(41, 104737180151, 'VALLES,RHIYANNA FRANCESKA, GONZALES', '', 'F'),
(42, 104737180159, 'VILLAMOR,JENNIELYN, MISLOS', '', 'F'),
(43, 104737180157, 'ZAFRA,KEERA ALLANDIA, CONSTANTINO', '', 'F');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stage1_level1`
--
ALTER TABLE `stage1_level1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `stage1_level2`
--
ALTER TABLE `stage1_level2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `stage1_level3`
--
ALTER TABLE `stage1_level3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `stage1_level4`
--
ALTER TABLE `stage1_level4`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stage1_level1`
--
ALTER TABLE `stage1_level1`
  MODIFY `ID` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stage1_level2`
--
ALTER TABLE `stage1_level2`
  MODIFY `ID` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stage1_level3`
--
ALTER TABLE `stage1_level3`
  MODIFY `ID` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stage1_level4`
--
ALTER TABLE `stage1_level4`
  MODIFY `ID` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
