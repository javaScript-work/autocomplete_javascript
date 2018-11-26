-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 12:10 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_practices`
--
CREATE DATABASE IF NOT EXISTS `db_practices` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_practices`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_name`
--

CREATE TABLE `tbl_name` (
  `sn` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `address` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_name`
--

INSERT INTO `tbl_name` (`sn`, `name`, `caste`, `address`) VALUES
(1, 'jivan', 'gautam', 'bkt'),
(2, 'jibina', 'karki', 'ktm'),
(3, 'sanju', 'katwal', 'ktm'),
(4, 'sujata', 'pokhrel', 'bkt'),
(5, 'samir', 'katwal', 'ktm'),
(6, 'susan', 'pokhrel', 'bkt'),
(7, 'isha', 'katwal', 'ktm'),
(8, 'isara', 'pokhrel', 'bkt'),
(9, 'ima', 'katwal', 'ktm'),
(10, 'jibesh', 'pokhrel', 'bkt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_name`
--
ALTER TABLE `tbl_name`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_name`
--
ALTER TABLE `tbl_name`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
