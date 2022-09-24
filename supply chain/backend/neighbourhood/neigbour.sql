-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 07:16 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neigbour`
--

-- --------------------------------------------------------

--
-- Table structure for table `neigbourbook`
--

CREATE TABLE `neigbourbook` (
  `user` varchar(20) NOT NULL,
  `contactnumber` varchar(12) NOT NULL,
  `facility` varchar(25) NOT NULL,
  `supply` varchar(20) NOT NULL,
  `address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `neigbourbook`
--

INSERT INTO `neigbourbook` (`user`, `contactnumber`, `facility`, `supply`, `address`) VALUES
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `neighbourhoodknowshop`
--

CREATE TABLE `neighbourhoodknowshop` (
  `id` int(10) NOT NULL,
  `shopname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `shopcontact` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `shopplace` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `shopaddress` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `shoprating` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `usersphone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `usersname` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `neighbourhoodknowshop`
--

INSERT INTO `neighbourhoodknowshop` (`id`, `shopname`, `shopcontact`, `shopplace`, `shopaddress`, `shoprating`, `usersphone`, `usersname`) VALUES
(4, 'noble', '9633101192', 'alamkodw', 'A.M motors,panthavoor,kerala', '3.5', '9633101192', 'gopi');

-- --------------------------------------------------------

--
-- Table structure for table `neighbourshopreg`
--

CREATE TABLE `neighbourshopreg` (
  `id` int(10) NOT NULL,
  `shop_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `shop_address` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `pincode` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `working_time` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `gpay` varchar(35) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `neighbourshopreg`
--

INSERT INTO `neighbourshopreg` (`id`, `shop_name`, `shop_address`, `pincode`, `working_time`, `phone`, `password`, `gpay`) VALUES
(5, 'djsj', 'sjsjsj', '976464', '', '4646464', 'jsjsj', 'ejzjzjz'),
(6, 'noble', 'noble charity organisation', '123456', '', '9633101192', 'nobles', 'gopikrishnanalamkode@okicici'),
(7, 'aka', 'enne', '9994', '', '9999', '123456', '9633535790'),
(8, 'aaa', 'nsnsn', '958489', '', '9633535790', '123456', '123'),
(9, 'ada', 'nnwnw', '999', '', '9633535790', '123456', '122');

-- --------------------------------------------------------

--
-- Table structure for table `neighboursupplies`
--

CREATE TABLE `neighboursupplies` (
  `id` int(10) NOT NULL,
  `place` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `supply` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `supply1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `supply2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `supply3` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `supply4` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `facility1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `facility2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `contactnumber` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `shopname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `gpay` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `neighboursupplies`
--

INSERT INTO `neighboursupplies` (`id`, `place`, `address`, `supply`, `supply1`, `supply2`, `supply3`, `supply4`, `facility1`, `facility2`, `contactnumber`, `shopname`, `gpay`, `latitude`, `longitude`) VALUES
(19, 'Alamkode', 'Grapes Technologies,Patturaikal', 'Sanitizer', 'Mask', 'Food Provisions', 'Medical Aids', 'garments', 'Door delivery', 'Booking', '9633101192', 'noble', 'varun.venad@okicici', '10.54063', '76.1283185');

-- --------------------------------------------------------

--
-- Table structure for table `neighbouruserreg`
--

CREATE TABLE `neighbouruserreg` (
  `id` int(10) NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `emailid` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `gpay` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `neighbouruserreg`
--

INSERT INTO `neighbouruserreg` (`id`, `username`, `phone`, `password`, `emailid`, `gpay`) VALUES
(4, 'gopi', '9633101192', 'gopi2489', 'gopi@gmail.com', 'gopikrishsnanalamkode@okicici'),
(6, 'joe', '963357590', '123456', '123456', ''),
(7, 'h', '5', 'g', 'g', ''),
(8, 'user', '90', 'pp', 'pp', ''),
(10, 'asa', '9633535790', '123456', '123456', ''),
(11, 'Antony', '6282555987', 'asdfghjkl', 'asdfghjkl', ''),
(12, 'Antony', '6282555987', 'asdfghjkl', 'asdfghjkl', ''),
(13, 'antony lonappan', '6282555987', 'asdfghjkl', 'asdfghjkl', ''),
(14, 'antony lonappan', '6282555987', 'asdfghjkl', 'asdfghjkl', ''),
(15, 'Akhila', '9656118929', 'Myheromine', 'Myheromine', ''),
(16, 'Akash', '9656147905', 'Kannanammus', 'Kannanammus', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `neighbourhoodknowshop`
--
ALTER TABLE `neighbourhoodknowshop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neighbourshopreg`
--
ALTER TABLE `neighbourshopreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neighboursupplies`
--
ALTER TABLE `neighboursupplies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neighbouruserreg`
--
ALTER TABLE `neighbouruserreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `neighbourhoodknowshop`
--
ALTER TABLE `neighbourhoodknowshop`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `neighbourshopreg`
--
ALTER TABLE `neighbourshopreg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `neighboursupplies`
--
ALTER TABLE `neighboursupplies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `neighbouruserreg`
--
ALTER TABLE `neighbouruserreg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
