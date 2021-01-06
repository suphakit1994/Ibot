-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2021 at 09:46 AM
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
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `t_username` varchar(45) NOT NULL,
  `t_password` varchar(45) NOT NULL,
  `teacher_fname` varchar(45) NOT NULL,
  `teacher_lname` varchar(45) NOT NULL,
  `teacher_email` varchar(45) NOT NULL,
  `teacher_phone` varchar(45) NOT NULL,
  `teacher_worktime` varchar(45) NOT NULL,
  `teacher_img` varchar(45) NOT NULL,
  `t_level` varchar(20) NOT NULL,
  `t_nlevel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `t_username`, `t_password`, `teacher_fname`, `teacher_lname`, `teacher_email`, `teacher_phone`, `teacher_worktime`, `teacher_img`, `t_level`, `t_nlevel`) VALUES
(1, 'T_123456', '123456', 'Jedsada', 'Tipsang', 'jedsada.ti@rmuti.acth', '0985275429', '15.00-17.00', '', 'teacher', 'Teacher Assistance');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
