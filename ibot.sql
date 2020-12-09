-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 08:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibot`
--

-- --------------------------------------------------------

--
-- Table structure for table `our course`
--

CREATE TABLE `our course` (
  `Course_Expension` varchar(100) NOT NULL,
  `Age_For_class` varchar(100) NOT NULL,
  `Total_course` varchar(100) NOT NULL,
  `Lesson` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `our course`
--

INSERT INTO `our course` (`Course_Expension`, `Age_For_class`, `Total_course`, `Lesson`, `Price`, `category`, `ID`) VALUES
('imagination course', '3 years old and older', '3 Course', '24 Lesson 36 Hours', '฿ 3,100 per course', 'DUPLO', 2),
('imagination course', '3 years old and older', '3 Course', '24 Lesson 36 Hours', '฿ 3,100 per course', 'DUPLO', 5),
('imagination course', '3 years old and older', '3 Course', '24 Lesson 36 Hours', '฿ 3,100 per course', 'DUPLO', 6),
('imagination course', '3 years old and older', '3 Course', '24 Lesson 36 Hours', '฿ 3,100 per course', 'DUPLO', 7),
('imagination course', '3 years old and older', '3 Course', '24 Lesson 36 Hours', '฿ 3,100 per course', 'DUPLO', 8),
('imagination course', '3 years old and older', '3 Course', '24 Lesson 36 Hours', '฿ 3,100 per course', 'DUPLO', 9);

-- --------------------------------------------------------

--
-- Table structure for table `student_assessment`
--

CREATE TABLE `student_assessment` (
  `Total` float NOT NULL,
  `id_student` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Science` int(11) NOT NULL,
  `Technology` int(11) NOT NULL,
  `Engineering` int(11) NOT NULL,
  `Teamwork` int(11) NOT NULL,
  `EQ` int(11) NOT NULL,
  `Meditation` int(11) NOT NULL,
  `Synthesis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_assessment`
--

INSERT INTO `student_assessment` (`Total`, `id_student`, `Mathematics`, `Science`, `Technology`, `Engineering`, `Teamwork`, `EQ`, `Meditation`, `Synthesis`) VALUES
(2.625, 1, 4, 1, 3, 1, 4, 1, 2, 5),
(0, 2, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 3, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 4, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 5, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 6, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 7, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 8, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 9, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 10, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 11, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 12, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 13, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 14, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 15, 1, 1, 1, 1, 1, 1, 1, 1),
(0, 16, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 17, 1, 1, 1, 1, 1, 1, 1, 1),
(0, 18, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 19, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 20, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 21, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 22, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `user` varchar(45) NOT NULL,
  `passwort` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `user`, `passwort`) VALUES
(1, 'ss', 'super', '12347'),
(2, '111', '111', '111'),
(3, '222', '222', '222'),
(7, '333', '33', '33'),
(8, '444', '44', '44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `our course`
--
ALTER TABLE `our course`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student_assessment`
--
ALTER TABLE `student_assessment`
  ADD PRIMARY KEY (`id_student`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `our course`
--
ALTER TABLE `our course`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_assessment`
--
ALTER TABLE `student_assessment`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
