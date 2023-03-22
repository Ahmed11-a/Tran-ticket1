-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 01:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_train`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `StartStation` varchar(100) NOT NULL,
  `endStation` varchar(100) NOT NULL,
  `direction` varchar(100) NOT NULL,
  `TripNumber` int(11) NOT NULL,
  `degree` int(11) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`id`, `name`, `StartStation`, `endStation`, `direction`, `TripNumber`, `degree`, `Date`, `Time`) VALUES
(17, 'ahmed', 'Aswan', 'Sohag', 'one way', 9, 60, '13/5/2022', '5.00 PM'),
(19, 'Ahmed', 'Aswan', 'Sohag', 'one way', 9, 50, '13/5/2022', '5.00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `trip` varchar(100) NOT NULL,
  `source` int(11) NOT NULL,
  `destination` int(11) NOT NULL,
  `startDate` varchar(100) NOT NULL,
  `endDate` varchar(100) NOT NULL,
  `firstTime` int(11) NOT NULL,
  `endTime` int(11) NOT NULL,
  `kids` int(11) NOT NULL DEFAULT 0,
  `adults` int(11) NOT NULL DEFAULT 0,
  `seniors` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `trip`, `source`, `destination`, `startDate`, `endDate`, `firstTime`, `endTime`, `kids`, `adults`, `seniors`) VALUES
(13, 'Runod', 2, 2, '20', '20', 2, 2, 2, 3, 1),
(19, 'Round Trip', 0, 0, '', '', 0, 0, 1, 1, 1),
(20, 'Round Trip', 0, 0, '', '', 0, 0, 1, 1, 1),
(21, '', 0, 0, '', '', 0, 0, 3, 0, 3),
(22, '', 2, 0, '', '', 0, 0, 1, 1, 1),
(23, '', 2, 0, '', '', 0, 0, 1, 1, 1),
(24, '', 2, 0, '', '', 0, 0, 1, 1, 1),
(25, '', 2, 0, '', '', 0, 0, 1, 1, 1),
(26, '', 2, 0, '', '', 0, 0, 1, 1, 1),
(27, '', 2, 0, '', '', 0, 0, 1, 1, 1),
(28, '', 2, 0, '', '', 0, 0, 1, 1, 1),
(29, '', 2, 0, '', '', 0, 0, 1, 1, 1),
(30, '', 0, 0, '', '', 0, 0, 0, 0, 0),
(31, '', 0, 0, '', '', 0, 0, 0, 0, 0),
(32, '', 0, 0, '', '', 0, 0, 0, 0, 0),
(33, '', 0, 0, '', '', 0, 0, 0, 0, 0),
(34, '', 0, 0, '', '', 0, 0, 0, 0, 0),
(35, '', 0, 0, '', '', 0, 0, 0, 0, 0),
(36, '', 0, 0, '', '', 0, 0, 0, 0, 0),
(37, '', 0, 0, '', '', 0, 0, 0, 0, 0),
(38, '', 0, 0, '', '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `pay` varchar(255) NOT NULL,
  `cardN` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `tripN` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `ExD` varchar(255) DEFAULT NULL,
  `CVV` int(11) NOT NULL,
  `email` varchar(255) DEFAULT 'not require'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `pay`, `cardN`, `Name`, `tripN`, `price`, `ExD`, `CVV`, `email`) VALUES
(1, 'PayPal', 0, '', 82, 85, '', 0, 'admin@admin.com'),
(2, 'PayPal', 0, '', 852, 55, '', 0, 'admin@admin.com'),
(3, 'PayPal', 0, '', 52, 66, '', 0, 'admin@admin.com'),
(4, 'Credit Card', 555, '555', 0, 0, 'kk', 0, ''),
(5, 'Credit Card', 88, 'ahmed', 0, 0, 'mm', 88, ''),
(6, 'Credit Card', 55, 'lll', 0, 0, 'lll', 985, ''),
(7, 'Credit Card', 855, '99', 0, 0, 'pp', 985, ''),
(8, 'Credit Card', 855, '99', 0, 0, 'pp', 985, ''),
(9, 'Credit Card', 855, '99', 0, 0, 'pp', 985, ''),
(10, 'Credit Card', 855, '99', 0, 0, 'pp', 985, ''),
(11, 'Credit Card', 0, '', 0, 0, '', 0, ''),
(12, 'PayPal', 8552, 'Ahmed', 80, 80, 'ppp', 5154, 'admin@admin.com'),
(13, 'PayPal', 8552, 'Ahmed', 80, 80, 'ppp', 5154, 'admin@admin.com'),
(14, 'PayPal', 8552, 'Ahmed', 80, 80, 'ppp', 5154, 'admin@admin.com'),
(15, 'PayPal', 8552, 'Ahmed', 80, 80, 'ppp', 5154, 'admin@admin.com'),
(16, 'PayPal', 8552, 'Ahmed', 80, 80, 'ppp', 5154, 'admin@admin.com'),
(17, 'PayPal', 8552, 'Ahmed', 80, 80, 'ppp', 5154, 'admin@admin.com'),
(18, 'PayPal', 8552, 'Ahmed', 80, 80, 'ppp', 5154, 'admin@admin.com'),
(19, 'PayPal', 8552, 'Ahmed', 80, 80, 'ppp', 5154, 'admin@admin.com'),
(20, 'PayPal', 8552, 'Ahmed', 80, 80, 'ppp', 5154, 'admin@admin.com'),
(21, 'PayPal', 8552, 'Ahmed', 80, 80, 'ppp', 5154, 'admin@admin.com'),
(22, 'PayPal', 8552, 'Ahmed', 80, 80, 'ppp', 5154, 'admin@admin.com'),
(23, 'PayPal', 0, '85', 985, 52, 'po', 98510, 'admin@admin.com'),
(24, 'Credit Card', 85, '966', 88, 85, 'popk', 955, 'admin@admin.com'),
(25, 'PayPal', 888, '454', 52, 61, 'ppp', 65456, 'admin@admin.com'),
(26, '', 0, '', 0, 0, '', 0, ''),
(27, '', 0, '', 0, 0, '', 0, ''),
(28, 'PayPal', 0, '', 0, 0, '', 0, ''),
(29, 'PayPal', 55, 'Ahmed', 10, 50, 'dfd', 95214, 'Mona@gmail.com'),
(30, 'Credit Card', 0, '', 0, 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `stationdb`
--

CREATE TABLE `stationdb` (
  `id` int(11) NOT NULL,
  `station` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `firstC` float NOT NULL,
  `secondC` float NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stationdb`
--

INSERT INTO `stationdb` (`id`, `station`, `address`, `firstC`, `secondC`, `Date`, `Time`) VALUES
(10, 'Aswan', 'Asuit', 50, 20, '22/5/2022', '3.00PM'),
(11, 'Sohag', 'Ismaili', 40, 20, '22/6/2022', '1.30PM'),
(12, 'Luxor', 'Sharqia', 50, 30, '23/5/2022', '2.00PM'),
(13, 'Suez', 'Cairo', 60, 35, '11/5/2022', '6.00AM'),
(14, 'Cairo', 'Aswan', 45, 25, '15/5/2022', '8.00AM'),
(15, 'Ismailia', 'Cairo', 40, 25, '15/6/2022', '7.00AM'),
(16, 'Zagazig', 'Cairo', 35, 20, '18/5/2022', '5.30PM'),
(17, 'El mahalla el kubra', 'cairo', 40, 30, '10/5/2022', '3.00AM'),
(18, 'Bani Swaif', 'port Said', 55, 40, '20/6/2022', '2.00PM'),
(19, 'Damanhour', 'Luxior', 40, 25, '15/4/2022', '1.30PM'),
(20, 'Cairo', 'Damietta', 55, 40, '15/7/2022', '7.00AM'),
(21, 'Bani Sweif', 'Minya', 40, 25, '15/3/2022', '5.30AM'),
(22, 'Mansoura', 'Cairo', 30, 20, '25/6/2022', '9.30pm'),
(23, 'Qalyubia', 'Banha', 35, 20, '15/5/2022', '1.15PM'),
(24, 'Cairo', 'Minya', 50, 35, '18/4/2022', '8.00PM'),
(25, 'Beheira', 'Suez', 60, 45, '15/8/2022', '7.15AM'),
(26, 'cairo', 'Matroh', 65, 50, '1/6/2022', '8.10PM'),
(29, 'Sharqia', 'El mahalla el kubra', 50, 40, '15/6/2022', '4.30PM'),
(30, 'Qalyubia', 'Zagazig', 40, 30, '24/4/2022', '3.30AM');

-- --------------------------------------------------------

--
-- Table structure for table `userd`
--

CREATE TABLE `userd` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userd`
--

INSERT INTO `userd` (`id`, `fname`, `lname`, `Email`, `password`) VALUES
(1, 'Ahmed', 'Mahmoud', 'Ahmed@gmail.com', '7895123'),
(2, 'Ali', 'Ahmed', 'Ali@gmail.com', '9632581'),
(3, 'Mona', 'Sayed', 'Mona@gmail.com', 'am8521'),
(4, 'Leila', 'Ahmed', 'Leila@gmail.com', 'lai951'),
(5, 'Osama', 'Sayed', 'osama@gmail.com', '96358'),
(6, 'admin', 'admin', 'admin@admin.com', 'admin#123'),
(7, 'mohamed', 'Kamal', 'Kamal@gmail.com', '985182'),
(71, 'Ramy', 'amr', 'Ramy@gmail.com', 'R874123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stationdb`
--
ALTER TABLE `stationdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userd`
--
ALTER TABLE `userd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `stationdb`
--
ALTER TABLE `stationdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `userd`
--
ALTER TABLE `userd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
