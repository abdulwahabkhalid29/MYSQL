-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 10:03 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corephp`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_class`
--

CREATE TABLE `table_class` (
  `id` int(11) NOT NULL,
  `classname` varchar(255) NOT NULL,
  `roomnumber` int(30) NOT NULL,
  `email` varchar(156) NOT NULL,
  `buildingnumber` int(30) NOT NULL,
  `classid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_class`
--

INSERT INTO `table_class` (`id`, `classname`, `roomnumber`, `email`, `buildingnumber`, `classid`) VALUES
(1, 'Abdul Wahab', 123, 'abdulwahabklhalid29@gmail.com', 61, 0),
(7, 'jfghjfgjf', 567, 'fghfgjhfgjn', 6457676, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_class`
--
ALTER TABLE `table_class`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_class`
--
ALTER TABLE `table_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
