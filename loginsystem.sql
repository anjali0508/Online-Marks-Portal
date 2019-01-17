-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 26, 2018 at 05:50 AM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `USN` varchar(10) NOT NULL,
  `SEM` int(1) NOT NULL,
  `SEC` varchar(1) NOT NULL,
  `COURSE_ID` varchar(10) NOT NULL,
  `QUIZ1` int(3) DEFAULT NULL,
  `QUIZ2` int(3) DEFAULT NULL,
  `TEST1` int(3) DEFAULT NULL,
  `TEST2` int(3) DEFAULT NULL,
  `LAB1` int(3) DEFAULT NULL,
  `LAB2` int(3) DEFAULT NULL,
  `PROJECT` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`USN`, `SEM`, `SEC`, `COURSE_ID`, `QUIZ1`, `QUIZ2`, `TEST1`, `TEST2`, `LAB1`, `LAB2`, `PROJECT`) VALUES
('1bm17cs015', 3, 'a', '123456', 10, 10, 40, NULL, NULL, NULL, NULL),
('1bm17cs015', 3, 'a', '123456', 10, 10, 40, NULL, NULL, NULL, NULL),
('1BM15CS020', 7, 'A', 'math123', 5, 4, 19, 18, NULL, NULL, NULL),
('1BM17CS019', 3, 'A', '123456', 3, NULL, 11, 17, NULL, NULL, NULL),
('1BM17CS020', 3, 'A', '123456', 5, NULL, 18, 19, NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CODE` varchar(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `SEM` int(1) NOT NULL,
  `CREDITS` int(1) NOT NULL,
  `QUIZ1` tinyint(1) NOT NULL,
  `QUIZ2` tinyint(1) NOT NULL,
  `TEST1` tinyint(1) NOT NULL,
  `TEST2` tinyint(1) NOT NULL,
  `LAB1` tinyint(1) NOT NULL,
  `LAB2` tinyint(1) NOT NULL,
  `PROJECT` tinyint(1) NOT NULL,
  `SEC_A_FAC` varchar(10) NOT NULL,
  `SEC_B_FAC` varchar(10) NOT NULL,
  `SEC_C_FAC` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CODE`, `NAME`, `SEM`, `CREDITS`, `QUIZ1`, `QUIZ2`, `TEST1`, `TEST2`, `LAB1`, `LAB2`, `PROJECT`, `SEC_A_FAC`, `SEC_B_FAC`, `SEC_C_FAC`) VALUES
('123456', 'DS', 3, 5, 1, 0, 1, 1, 0, 0, 1, '', '', ''),
('ADA123', 'Algorithms', 5, 5, 1, 0, 1, 1, 0, 0, 1, 'Bhoomika ', 'Kusuma', 'Aishwarya'),
('math123', 'Discrete Mathematics3', 7, 5, 1, 1, 1, 1, 0, 0, 0, 'Kriti ', 'Karuna', 'Kavya'),
('math1234', 'Discrete Mathematics', 3, 5, 1, 1, 1, 1, 0, 0, 0, 'Kriti ', 'Karuna', 'Kavya'),
('PCP123', 'Programming with CPP', 3, 5, 1, 0, 1, 1, 1, 0, 1, 'Rekha ', 'Vaishnavi', 'Arvinda'),
('WP123', 'Web Programming', 3, 5, 1, 0, 1, 1, 1, 0, 1, 'Nandini ', 'Anita', 'Ambali');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `ID` varchar(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `Course1_ID` varchar(10) NOT NULL,
  `Course1_Sec` varchar(1) NOT NULL,
  `Course2_ID` varchar(10) DEFAULT NULL,
  `Course2_Sec` varchar(1) DEFAULT NULL,
  `Course3_ID` varchar(10) DEFAULT NULL,
  `Course3_Sec` varchar(1) DEFAULT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`ID`, `NAME`, `Course1_ID`, `Course1_Sec`, `Course2_ID`, `Course2_Sec`, `Course3_ID`, `Course3_Sec`, `Password`) VALUES
('A123', 'Arvinda', 'PCP123', 'C', NULL, NULL, NULL, NULL, 'A123'),
('AY123', 'Aishwarya', 'ADA123', 'C', NULL, NULL, NULL, NULL, 'AY123'),
('BM123', 'Bhoomika', 'ADA123', 'A', NULL, NULL, NULL, NULL, 'BM123'),
('KA123', 'Karuna', 'math123', 'B', 'math1234', 'B', NULL, NULL, 'KA123'),
('KAV123', 'Kriti', 'math123', 'C', 'math1234', 'C', NULL, NULL, 'KAV123'),
('KM123', 'Kusuma', 'ADA123', 'B', NULL, NULL, NULL, NULL, 'KM123'),
('KR123', 'Kriti', 'math123', 'A', 'math1234', 'A', NULL, NULL, 'KR123'),
('R123', 'Rekha', 'PCP123', 'A', NULL, NULL, NULL, NULL, 'R123'),
('V123', 'Vaishnavi', 'PCP123', 'B', NULL, NULL, NULL, NULL, 'p123');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `USN` varchar(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `SEM` int(1) NOT NULL,
  `SEC` varchar(1) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`USN`, `NAME`, `SEM`, `SEC`, `PASSWORD`) VALUES
('1BM15CS020', 'Bhavya', 7, 'A', 'bhavya12345'),
('1BM15CS022', 'Kirti', 7, 'A', 'kirtia123'),
('1BM15CS035', 'Zain', 7, 'B', 'zain123'),
('1BM16CS018', 'Amin', 5, 'A', 'amin123'),
('1BM16CS021', 'Amin', 5, 'A', 'amin123'),
('1bm17cs015', 'ananya', 3, 'a', 'bnmkll'),
('1bm17cs016', 'aniali', 3, 'a', 'vyhgi'),
('1BM17CS019', 'Arya', 3, 'A', 'arya123'),
('1BM17CS020', 'Bhavya', 3, 'A', 'bhavya123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD KEY `COURSE_ID` (`COURSE_ID`),
  ADD KEY `USN` (`USN`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CODE`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Course1_ID` (`Course1_ID`),
  ADD KEY `Course2_ID` (`Course2_ID`),
  ADD KEY `Course3_ID` (`Course3_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`USN`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic`
--
ALTER TABLE `academic`
  ADD CONSTRAINT `academic_ibfk_1` FOREIGN KEY (`COURSE_ID`) REFERENCES `course` (`CODE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `academic_ibfk_2` FOREIGN KEY (`USN`) REFERENCES `student` (`USN`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`Course1_ID`) REFERENCES `course` (`CODE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `faculty_ibfk_2` FOREIGN KEY (`Course2_ID`) REFERENCES `course` (`CODE`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `faculty_ibfk_3` FOREIGN KEY (`Course3_ID`) REFERENCES `course` (`CODE`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
