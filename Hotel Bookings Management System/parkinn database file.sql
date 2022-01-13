-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 10:18 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkinn`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `adminid` int(10) NOT NULL,
  `adminusername` varchar(20) DEFAULT NULL,
  `adminpassword` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`adminid`, `adminusername`, `adminpassword`) VALUES
(1, 'Yadav', '1234@'),
(2, 'Nagendra', 'xyz@');

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE `customerinfo` (
  `customerid` int(10) UNSIGNED NOT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` text DEFAULT NULL,
  `lname` text DEFAULT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  `nationality` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `phonenumber` text DEFAULT NULL,
  `roomtype` varchar(20) DEFAULT NULL,
  `bedtype` varchar(20) DEFAULT NULL,
  `roomnos` varchar(5) DEFAULT NULL,
  `mealtype` varchar(20) DEFAULT NULL,
  `checkindate` date DEFAULT NULL,
  `checkoutdate` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `days` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`customerid`, `title`, `fname`, `lname`, `emailid`, `nationality`, `country`, `phonenumber`, `roomtype`, `bedtype`, `roomnos`, `mealtype`, `checkindate`, `checkoutdate`, `status`, `days`) VALUES
(1, 'Mr', 'Mahesh', 'Yadav G', 'maheshyadav0170@gmail.com', 'Indian', 'India', '9620030315', 'Standard Rooms', 'Single', '1', 'Breakfast Only', '2022-01-10', '2022-01-12', 'Confirm', 2),
(2, 'Mr', 'Mahesh', 'Yadav G', 'maheshyadav0170@gmail.com', 'Indian', 'India', '9620030315', 'Standard Rooms', 'Single', '1', 'Breakfast Only', '2022-01-10', '2022-01-12', 'Confirm', 2),
(4, 'Mr', 'Nagendra', 'G P', 'nagendra@gmail.com', 'Indian', 'India', '9876544567', 'Standard Rooms', 'Single', '2', 'Breakfast Only', '2022-01-09', '2022-01-10', 'Confirm', 1),
(5, 'Mr', 'Vybhav', 'Yadav', 'vybhav@gmail.com', 'Indian', 'India', '9876543217', 'Standard Rooms', 'Single', '2', 'Breakfast Only', '2022-01-11', '2022-01-12', 'Confirm', 1),
(6, 'Mr', 'Gokul', 'Yadav G', 'gokulyadav@gmail.com', 'Indian', 'India', '9620030315', 'Standard Rooms', 'Single', '1', 'Breakfast Only', '2022-01-10', '2022-01-11', 'Confirm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customerpayment`
--

CREATE TABLE `customerpayment` (
  `customerid` int(10) NOT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` text DEFAULT NULL,
  `lname` text DEFAULT NULL,
  `roomtype` varchar(20) DEFAULT NULL,
  `bedtype` varchar(20) DEFAULT NULL,
  `noroom` int(10) DEFAULT NULL,
  `checkin` date DEFAULT NULL,
  `checkout` date DEFAULT NULL,
  `mealtype` varchar(30) DEFAULT NULL,
  `roomprice` int(10) NOT NULL,
  `bedprice` int(10) NOT NULL,
  `mealprice` int(10) NOT NULL,
  `grandtotal` int(10) NOT NULL,
  `noofdays` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerpayment`
--

INSERT INTO `customerpayment` (`customerid`, `title`, `fname`, `lname`, `roomtype`, `bedtype`, `noroom`, `checkin`, `checkout`, `mealtype`, `roomprice`, `bedprice`, `mealprice`, `grandtotal`, `noofdays`) VALUES
(3, 'Mr', 'kaushik', 'Yadav', 'Standard Rooms', 'Single', 0, '2022-01-09', '2022-01-10', 'Breakfast Only', 0, 10, 0, 10, 1),
(4, 'Mr', 'Nagendra', 'G P', 'Standard Rooms', 'Single', 0, '2022-01-09', '2022-01-10', 'Breakfast Only', 0, 10, 0, 10, 1),
(5, 'Mr', 'Vybhav', 'Yadav', 'Standard Rooms', 'Single', 0, '2022-01-11', '2022-01-12', 'Breakfast Only', 0, 10, 0, 10, 1),
(6, 'Mr', 'Gokul', 'Yadav G', 'Standard Rooms', 'Single', 1, '2022-01-10', '2022-01-11', 'Breakfast Only', 1000, 10, 50, 1060, 1),
(7, 'Mrs', 'Rani', 'M', 'Deluxe Rooms', 'Triple', 2, '2022-01-11', '2022-01-20', 'Breakfast and lunch', 36000, 540, 5400, 41940, 9),
(8, 'Mr', 'Srinivas', 'M', 'Deluxe Rooms', 'Double', 2, '2022-01-10', '2022-01-11', 'Half Board', 4000, 200, 1500, 5700, 1),
(9, 'Mrs', 'Shamika', 'Srinivas', 'Deluxe Rooms', 'Double', 1, '2022-01-15', '2022-01-16', 'Full Board', 2000, 200, 2000, 4200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotelrooms`
--

CREATE TABLE `hotelrooms` (
  `roomid` int(10) NOT NULL,
  `roomtype` varchar(30) DEFAULT NULL,
  `beddingtype` varchar(30) DEFAULT NULL,
  `place` varchar(20) DEFAULT NULL,
  `cusid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotelrooms`
--

INSERT INTO `hotelrooms` (`roomid`, `roomtype`, `beddingtype`, `place`, `cusid`) VALUES
(1, 'Standard Rooms', 'Single', 'Not Free', 6),
(2, 'Standard Rooms', 'Double', 'Free', NULL),
(3, 'Standard Rooms', 'Triple', 'Free', NULL),
(4, 'Standard Rooms', 'Quad', 'Free', NULL),
(5, 'Deluxe Rooms', 'Single', 'Free', NULL),
(6, 'Deluxe Rooms', 'Double', 'Free', 0),
(7, 'Deluxe Rooms', 'Triple', 'Free', 0),
(8, 'Deluxe Rooms', 'Quad', 'Free', NULL),
(9, 'Joint Rooms', 'Single', 'Free', NULL),
(10, 'Joint Rooms', 'Double', 'Free', NULL),
(11, 'Joint Rooms', 'Triple', 'Free', NULL),
(12, 'Joint Rooms', 'Quad', 'Free', NULL),
(13, 'Apartment style', 'Single', 'Free', NULL),
(14, 'Apartment style', 'Double', 'Free', NULL),
(15, 'Apartment style', 'Triple', 'Free', NULL),
(16, 'Apartment style', 'Quad', 'Free', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `subscribersid` int(10) NOT NULL,
  `fullname` varchar(30) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `subscribeddate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`subscribersid`, `fullname`, `phoneno`, `email`, `subscribeddate`) VALUES
(1, 'Mahesh Yadav G', 2147483647, 'maheshyadav0170@gmail.com', '2022-01-09'),
(2, 'Bhuvan P S', 2147483647, 'bhuvan1703@gmail.com', '2022-01-09'),
(3, 'Mahesh Yadav Yadav', 2147483647, 'maheshyadav0170@gmail.com', '2022-01-10'),
(4, 'Shamika Srinivas', 2147483647, 'shamika@gmail.com', '2022-01-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `customerinfo`
--
ALTER TABLE `customerinfo`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `customerpayment`
--
ALTER TABLE `customerpayment`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `hotelrooms`
--
ALTER TABLE `hotelrooms`
  ADD PRIMARY KEY (`roomid`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`subscribersid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `adminid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customerinfo`
--
ALTER TABLE `customerinfo`
  MODIFY `customerid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customerpayment`
--
ALTER TABLE `customerpayment`
  MODIFY `customerid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hotelrooms`
--
ALTER TABLE `hotelrooms`
  MODIFY `roomid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `subscribersid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
