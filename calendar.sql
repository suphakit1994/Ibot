-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2020 at 04:50 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `title`, `start_time`, `end_time`, `color`) VALUES
(39, 'Siam', '2020-12-09', '2020-12-10', 'black'),
(40, 'Meta', '2020-12-14', '2020-12-17', 'pink'),
(41, 'jedsada', '2020-12-15', '2020-12-18', 'blue'),
(42, 'Dara', '2020-12-24', '2020-12-26', 'black'),
(43, 'พพพพ', '2020-12-14', '2020-12-16', 'black'),
(44, 'Blue', '2020-12-30', '2020-12-31', 'blue'),
(45, 'pink', '2020-12-27', '2020-12-28', 'pink'),
(46, 'Black', '2020-12-27', '2020-12-30', 'black'),
(47, 'Schedule', '2020-12-01', '2020-12-04', 'black'),
(48, 'Yanongtita', '2020-12-27', '2020-12-31', 'pink'),
(49, 'jedsada', '2020-12-27', '2020-12-31', 'black'),
(50, 'JEDI', '2020-12-21', '2020-12-22', 'black'),
(51, '', '', '', 'blue'),
(52, 'hff', '2020-12-18', '2020-12-19', 'blue');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
