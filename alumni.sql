-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 02, 2020 at 06:04 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `p_id` int(4) UNSIGNED ZEROFILL NOT NULL,
  `hphone` char(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`p_id`, `hphone`, `email`, `facebook`) VALUES
(0001, '01354684', 'a@a.com', '-');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `p_id` int(4) UNSIGNED ZEROFILL NOT NULL,
  `years` char(4) DEFAULT NULL,
  `fname` varchar(6) DEFAULT NULL,
  `cname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `nname` varchar(20) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `caddress` varchar(500) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `cardid` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`p_id`, `years`, `fname`, `cname`, `lname`, `nname`, `dates`, `caddress`, `img`, `province`, `cardid`) VALUES
(0001, '2555', 'นาย', 'ธันวา', 'กุนทะมุณี ่', 'เจมส์่', '2020-07-17', '177/1 73180', '', 'เชียงราย', '0123456788');

-- --------------------------------------------------------

--
-- Table structure for table `workplace`
--

CREATE TABLE `workplace` (
  `p_id` int(4) UNSIGNED ZEROFILL NOT NULL,
  `joblv` varchar(50) NOT NULL,
  `jobname` varchar(100) NOT NULL,
  `jobaddress` varchar(500) NOT NULL,
  `jobprov` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workplace`
--

INSERT INTO `workplace` (`p_id`, `joblv`, `jobname`, `jobaddress`, `jobprov`) VALUES
(0001, 'พนักงาน ่', 'advice ่', '178/1 ่', 'ตาก');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `workplace`
--
ALTER TABLE `workplace`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `p_id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `p_id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `workplace`
--
ALTER TABLE `workplace`
  MODIFY `p_id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `customer` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `workplace`
--
ALTER TABLE `workplace`
  ADD CONSTRAINT `workplace_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `customer` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
