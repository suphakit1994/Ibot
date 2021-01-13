-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 09:46 AM
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
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `cr_date` datetime NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `topic`, `message`, `cr_date`, `status`, `name`, `bank`, `img`) VALUES
(3, 'student payment of course', 'Course: IBOT Advance Piece 8500 Bath', '2021-01-07 10:47:12', 0, 'Ratchanat Luksana', 'Kbank', 'bank3'),
(8, 'student payment of camp', 'Camp: IBOT Advance Piece 8500 Bath', '2021-01-07 10:54:53', 0, 'Jedsada Tipsang', 'SCB', 'bank2'),
(9, 'student payment of camp', 'Course: IBOT Advance Piece 8500 Bath', '2021-01-11 11:29:19', 0, 'FAII', 'SCB', ''),
(10, 'student payment of course', 'Course: IBOT Advance Piece 8500 Bath', '2021-01-11 11:31:12', 0, 'LNW', 'SCB', ''),
(11, 'student payment of compeitition', 'Compeitition: IBOT Advance Piece 8500 Bath', '2021-01-11 11:32:34', 0, 'View', 'SCB', ''),
(12, 'asdasd', 'asdasd', '2021-01-12 11:59:06', 0, 'asdas', 'asdasd', ''),
(13, 'asdasdas', 'dasdasdasd', '2021-01-12 12:42:40', 0, 'asdasdasdasd', 'asdasdsa', ''),
(14, 'asdasdasdas', 'asdasdsadasd', '2021-01-20 12:42:54', 0, 'asdasdasdasd', 'asdasdasd', ''),
(15, 'asdasdas', 'dasdasdasdasd', '2021-01-12 12:43:29', 0, 'sdasdas', 'asdasdas', ''),
(16, 'asdasdasd', 'asdasdasdas', '2021-01-12 12:43:42', 0, 'asasdasdasd', 'asdasdasdasda', ''),
(17, 'sdfsdsdsdf', 'sdfsdfsdfsd', '2021-01-12 12:43:53', 0, 'sdfsdfsdfds', 'fsdfsdfsdfsdfsdfsd', ''),
(18, 'sdfsdsdfsd', 'sdffsdfsdfsdfsd', '2021-01-12 12:45:10', 0, 'sdfsdfsdfsdfsd', 'fsdfsdfsdfsdfsd', ''),
(19, 'sdfsdfsdfsd', 'sdfsdfsdfsd', '2021-01-06 12:45:22', 0, 'fsdfsdfsdfsdfsd', 'asdasdas', ''),
(20, 'asdfasdasdasd', 'qweqweqweqw', '2021-01-13 12:45:43', 0, 'eqqweqweqweqw', 'qweqweqweqw', ''),
(21, 'asdasdasdqwd', 'dqwdqwdqwdqwdqw', '2021-01-13 12:46:10', 0, 'qwdqwdqwdqwdqwdqwqwd', 'qweqweqweeqqe', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
