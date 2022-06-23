-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql207.epizy.com
-- Generation Time: Nov 08, 2021 at 03:42 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_27664234_parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `parkingdata`
--

CREATE TABLE `parkingdata` (
  `id` int(11) NOT NULL,
  `inches` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parkingdata`
--

INSERT INTO `parkingdata` (`id`, `inches`) VALUES
(1, 19),
(2, 22),
(3, 50),
(4, 10),
(5, 10),
(6, 25),
(7, 5),
(8, 5),
(9, 20),
(10, 19),
(11, 0),
(12, 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parkingdata`
--
ALTER TABLE `parkingdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parkingdata`
--
ALTER TABLE `parkingdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
