-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 06:18 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wp project`
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
('1BM15CS020', 7, 'A', 'math123', 8, 4, 40, 18, NULL, NULL, NULL),
('1BM17CS019', 3, 'A', '123456', 10, NULL, 11, 17, NULL, NULL, NULL),
('1BM17CS020', 3, 'A', '123456', 5, NULL, 18, 19, NULL, NULL, 4),
('1bm17cs015', 3, 'a', '15BM73DCOA', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1bm17cs016', 3, 'a', '15BM73DCOA', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS019', 3, 'A', '15BM73DCOA', 10, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS020', 3, 'A', '15BM73DCOA', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM15CS020', 7, 'A', '1234ADA', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM15CS022', 7, 'A', '1234ADA', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM15CS035', 7, 'B', '1234ADA', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM15CS020', 7, 'A', '1234ADA', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM15CS022', 7, 'A', '1234ADA', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM15CS035', 7, 'B', '1234ADA', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM16CS018', 5, 'A', 'CPP123', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM16CS021', 5, 'A', 'CPP123', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM16CS018', 5, 'A', 'CPP123', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM16CS021', 5, 'A', 'CPP123', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM16CS018', 5, 'A', 'CPP123', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM16CS021', 5, 'A', 'CPP123', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1bm17cs015', 3, 'a', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1bm17cs016', 3, 'a', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS019', 3, 'A', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS020', 3, 'A', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1bm17cs015', 3, 'a', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1bm17cs016', 3, 'a', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS019', 3, 'A', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS020', 3, 'A', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1bm17cs015', 3, 'a', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1bm17cs016', 3, 'a', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS019', 3, 'A', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS020', 3, 'A', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1bm17cs015', 3, 'a', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1bm17cs016', 3, 'a', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS019', 3, 'A', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS020', 3, 'A', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1bm17cs015', 3, 'a', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1bm17cs016', 3, 'a', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS019', 3, 'A', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS020', 3, 'A', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1bm17cs015', 3, 'a', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1bm17cs016', 3, 'a', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS019', 3, 'A', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS020', 3, 'A', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM15CS000', 5, 'C', 'ADA123', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM15CS000', 5, 'C', 'CPP123', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('', 0, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM15CS000', 5, 'C', 'ADA123', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM15CS000', 5, 'C', 'CPP123', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS100', 3, 'C', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS100', 3, 'C', '15BM73DCOA', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS100', 3, 'C', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS100', 3, 'C', 'math1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS100', 3, 'C', 'PCP123', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS100', 3, 'C', 'WP123', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1bm17cs015', 3, 'a', '67ADTY', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1bm17cs016', 3, 'a', '67ADTY', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS019', 3, 'A', '67ADTY', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1BM17CS020', 3, 'A', '67ADTY', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
('1234ADA', 'ADA', 7, 5, 1, 1, 1, 1, 0, 0, 0, 'Kriti', 'Rekha', 'Vaishnavi'),
('15BM73DCOA', 'COA', 3, 3, 1, 1, 1, 1, 0, 0, 0, 'Arvinda', 'Arvinda', 'Arvinda'),
('789', 'something', 3, 3, 1, 1, 1, 1, 1, 1, 1, 'Arvinda', 'Arvinda', 'Arvinda'),
('ADA123', 'Algorithms', 5, 5, 1, 0, 1, 1, 0, 0, 1, 'Bhoomika ', 'Kusuma', 'Aishwarya'),
('CPP123', 'CPP', 5, 3, 1, 1, 1, 1, 0, 0, 0, 'Vaishnavi', 'Rekha', 'Kusuma'),
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
  `Course1_ID` varchar(10) DEFAULT NULL,
  `Course1_Sec` varchar(1) DEFAULT NULL,
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
('', '', '67ADTY', 'C', '', '', '', '', ''),
('A123', 'Arvinda', 'ADA1234', 'A', '789', 'C', '67ADTY', 'A', 'A123'),
('admin123', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, 'admin'),
('AY123', 'Aishwarya', 'ADA123', 'C', NULL, NULL, NULL, NULL, 'AY123'),
('BM123', 'Bhoomika', 'ADA123', 'A', NULL, NULL, NULL, NULL, 'BM123'),
('KA123', 'Karuna', 'math123', 'B', 'math1234', 'B', NULL, NULL, 'KA123'),
('KAV123', 'Kriti', 'math123', 'C', 'math1234', 'C', NULL, NULL, 'KAV123'),
('KM123', 'Kusuma', 'ADA123', 'B', NULL, NULL, NULL, NULL, 'KM123'),
('KR123', 'Kriti', 'math123', 'A', 'math1234', 'A', NULL, NULL, 'KR123'),
('R123', 'Rekha', 'PCP123', 'A', NULL, NULL, NULL, NULL, 'R123'),
('V123', 'Vaishnavi', 'PCP123', 'B', '67ADTY', 'B', NULL, NULL, 'p123');

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
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CODE`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`USN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
