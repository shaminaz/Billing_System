-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2019 at 08:45 PM
-- Server version: 5.5.23
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`f_name`, `l_name`, `username`, `password`) VALUES
('', '', 'shami', 'shami');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `jon` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `e-mail` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `dealer` varchar(30) NOT NULL,
  `d-date` date NOT NULL,
  `veh-no` varchar(12) NOT NULL,
  `model` varchar(20) NOT NULL,
  `chasis-no` varchar(30) NOT NULL,
  `eng-no` varchar(30) NOT NULL,
  `km` varchar(8) NOT NULL,
  `dam-repair` text NOT NULL,
  `body-dam` text NOT NULL,
  `bill-no` bigint(8) NOT NULL,
  `b-date` date NOT NULL,
  `work-done` text NOT NULL,
  `man-power` varchar(8) NOT NULL,
  `labour` text NOT NULL,
  `test-report` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`jon`, `date`, `time`, `Name`, `Phone`, `e-mail`, `mobile`, `dealer`, `d-date`, `veh-no`, `model`, `chasis-no`, `eng-no`, `km`, `dam-repair`, `body-dam`, `bill-no`, `b-date`, `work-done`, `man-power`, `labour`, `test-report`) VALUES
('j001', '1997-12-12', '12:10:00', 'vghevghwe', '2542542545', 'r@e.com', '5252525252', 'reete', '1973-12-12', '1254', 'dvsh', 'chbsdbj', 'cjhbdcsj', '33', 'evdwhevdhwedvh', 'bwejbhwhcwhevchwevhcvew', 254, '1935-12-11', ' ewhvcwvcwhyevcwevchwh', '125', '', ''),
('j002', '1997-12-12', '12:10:00', 'jkenjw', '2542542545', 'r@e.com', '5252525252', 'reete', '1973-12-12', '1254', 'dvsh', 'chbsdbj', 'cjhbdcsj', '33', 'evdwhevdhwedvh', 'bwejbhwhcwhevchwevhcvew', 254, '1935-12-11', ' ewhvcwvcwhyevcwevchwh', '125', '1222', 'djcbjshdbjs'),
('j003', '1997-12-12', '12:10:00', 'king', '2542542545', 'r@e.com', '5252525252', 'reete', '1973-12-12', '1254', 'dvsh', 'chbsdbj', 'cjhbdcsj', '33', 'evdwhevdhwedvh', 'bwejbhwhcwhevchwevhcvew', 254, '1935-12-11', ' ewhvcwvcwhyevcwevchwh', '125', '1222', 'djcbjshdbjs'),
('j004', '1997-12-12', '12:10:00', 'khing', '2542542545', 'r@e.com', '5252525252', 'reete', '1973-12-12', '1254', 'dvsh', 'chbsdbj', 'cjhbdcsj', '33', 'evdwhevdhwedvh', 'bwejbhwhcwhevchwevhcvew', 254, '1935-12-11', ' ewhvcwvcwhyevcwevchwh', '125', '1222', 'djcbjshdbjs'),
('j005', '1997-12-12', '12:10:00', 'kjnjdchjds', '2542542545', 'r@e.com', '5252525252', 'reete', '1973-12-12', '1254', 'dvsh', 'chbsdbj', 'cjhbdcsj', '33', 'evdwhevdhwedvh', 'bwejbhwhcwhevchwevhcvew', 254, '1935-12-11', ' ewhvcwvcwhyevcwevchwh', '125', '1222', 'djcbjshdbjs'),
('j006', '1997-12-12', '12:10:00', 'jcsjbhdj', '2542542545', 'r@e.com', '5252525252', 'reete', '1973-12-12', '1254', 'dvsh', 'chbsdbj', 'cjhbdcsj', '33', 'evdwhevdhwedvh', 'bwejbhwhcwhevchwevhcvew', 254, '1935-12-11', ' ewhvcwvcwhyevcwevchwh', '125', '1222', 'djcbjshdbjs'),
('j007', '1997-12-12', '12:10:00', 'dkjfjd', '2542542545', 'r@e.com', '5252525252', 'reete', '1973-12-12', '1254', 'dvsh', 'chbsdbj', 'cjhbdcsj', '33', 'evdwhevdhwedvh', 'bwejbhwhcwhevchwevhcvew', 254, '1235-12-11', ' ewhvcwvcwhyevcwevchwh', '120', '1222', 'djcbjshdbjs');

-- --------------------------------------------------------

--
-- Table structure for table `partdetails`
--

CREATE TABLE `partdetails` (
  `jon` varchar(20) NOT NULL,
  `partid` varchar(20) NOT NULL,
  `part` varchar(30) NOT NULL,
  `quantity` int(6) NOT NULL,
  `price` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partdetails`
--

INSERT INTO `partdetails` (`jon`, `partid`, `part`, `quantity`, `price`) VALUES
('j007', 'part1', 'a', 5, 5),
('j007', 'part2', 'a', 4, 5),
('j007', 'part3', 'c', 6, 5),
('j007', 'part4', 'd', 7, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`jon`);

--
-- Indexes for table `partdetails`
--
ALTER TABLE `partdetails`
  ADD PRIMARY KEY (`partid`),
  ADD KEY `jon` (`jon`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `partdetails`
--
ALTER TABLE `partdetails`
  ADD CONSTRAINT `partdetails_ibfk_1` FOREIGN KEY (`jon`) REFERENCES `bill` (`jon`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
