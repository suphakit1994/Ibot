-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 10:57 AM
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
CREATE TABLE `user` (
  `user_code` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `branch` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `layer` varchar(50) NOT NULL DEFAULT 'user',
  `local` varchar(50) NOT NULL,
  `lasname` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `dateadd` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `del` int(11) NOT NULL DEFAULT '1',
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_code`, `name`, `branch`, `email`, `password`, `layer`, `local`, `lasname`, `code`, `dateadd`, `phone`, `del`, `img`) VALUES
(1, 'admin', 'เดอะมอล', 'suphakit108@gmail.com', '1234', 'SuperAdmin', 'a', 'a', 'suadmin', 'a', '', 1, ''),
(7, 'feasibility_study', 'เซบวัน', 'suphakit108@gmail.com', '123', 'user', '123', '123', 'aaaa', '2020-08-01 12:24:54', '', 0, ''),
(8, 'su', 'เซบวัน', 'suphakit108@gmail.com', '1234', 'user', '239/2', 'sri', 'admin', '2020-08-01 12:35:24', '', 1, ''),
(9, 'feasibility_study', 'เซบวัน', 'suphakit108@gmail.com', '1234', 'user', '123', '123', 'emp', '2020-08-01 12:58:29', '0624642213', 0, ''),
(10, 'feasibility_study', 'เซบวัน', 'suphakit108@gmail.com', '123', 'user', '123', '123', '1234', '2020-08-01 14:55:57', '0624642213', 0, ''),
(11, 'โยว', 'เซบวัน', 'suphakit108@gmail.com', 'st1234', 'user', '239/2', 'ซ่า', '1234ss', '2020-08-01 15:27:56', '12334', 1, ''),
(29, '123', '7', 'suphakit108@gmail.com', 'st1234', 'Admin', '123', '123', '1234444', '2020-08-06 14:27:14', '0624642213', 1, ''),
(30, 'feasibility_study', '7', 'suphakit108@gmail.com', '1234', 'user', '123', '123', '1999999', '2020-08-06 16:59:18', '0624642213', 0, ''),
(31, '123', '7', 'suphakit108@gmail.com', '678', 'Admin', '4', '123', 'asd', '2020-08-07 00:52:15', '0624642213', 1, ''),
(32, '444', '7', 'suphakit108@gmail.com', '1150', 'Employees', '123', '44', '32', '2020-08-07 09:53:29', '0624642213', 1, 'Kirito_Dual_Blades.png'),
(33, 'qweqwe', '22', 'qwe', 'qwe', 'user', 'qwe', 'qqwe', 'qweq', '2020-08-07 10:39:05', 'qweqwe', 1, ''),
(34, 'aasd', '', 'asd', '123', 'user', 'asd', 'aasd', 'aasd', '2020-08-09 23:22:51', 'asd', 0, 'images/Kirito_Dual_Blades.png'),
(35, 'dfg', '7', 'sdfg', 'sdfg', 'user', 'sdfgsdfg', 'dsfgsdf', 'fasjflaks', '2020-08-11 17:50:52', 'sdfgsdfg', 1, 'images/Capture.JPG'),
(36, 'suphakit', '', 'suphakit108@gmail.com', '1234', 'user', '214', 'sriwarothai', '11234566', '2020-08-20 17:11:33', '0624642213', 1, 'Kirito_Dual_Blades.png');


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
(0, 22, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 23, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 24, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 25, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 26, 0, 0, 0, 0, 0, 0, 0, 0),
(0, 27, 0, 0, 0, 0, 0, 0, 0, 0);

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
MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
