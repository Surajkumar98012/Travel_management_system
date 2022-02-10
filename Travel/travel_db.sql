-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 09:21 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'darsh123', '123', 'priya');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  `dst` varchar(255) NOT NULL,
  `dates` date NOT NULL,
  `feature` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `atime` time NOT NULL,
  `duration` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `name`, `src`, `dst`, `dates`, `feature`, `time`, `atime`, `duration`, `price`) VALUES
(1, 'Laxmi Holiday', 'New Delhi', 'Amritsar', '2021-10-15', 'A/C-sleeper', '23:43:00', '00:00:00', '10h 40m', 120);

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  `dst` varchar(255) NOT NULL,
  `dates` date NOT NULL,
  `feature` varchar(255) NOT NULL,
  `seats` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `name`, `src`, `dst`, `dates`, `feature`, `seats`, `price`) VALUES
(1, 'BMW', 'New Delhi', 'Punjab', '2021-10-29', 'Non-A/C', 3, 122);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cnumber` text NOT NULL,
  `exp` text NOT NULL,
  `cvv` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `name`, `location`, `date`, `email`, `price`, `cname`, `cnumber`, `exp`, `cvv`, `id`) VALUES
(3, 'Ashoka Palace', 'Patna', '2021-10-25', 'srjrnw9@gmail.com', '5000', 'saaaa', '123456789', '2021-10-31', '202cb962ac59075b964b07152d234b70', 2),
(7, 'Indigo', 'Jammu', '2021-10-26', 'srjrnw8@gmail.com', '4500', 'Suraj', '12345678757', '2021-10-29', '202cb962ac59075b964b07152d234b70', 2);

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  `dst` varchar(255) NOT NULL,
  `dates` date NOT NULL,
  `trip` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `atime` time NOT NULL,
  `duration` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`id`, `name`, `src`, `dst`, `dates`, `trip`, `time`, `atime`, `duration`, `price`) VALUES
(1, 'Indigo', 'Jammu', 'Amritsar', '2021-10-27', 'One-way', '23:35:00', '00:00:00', '6h 20min', 4500),
(2, 'Boing-12', 'New Delhi', 'Mumbai', '2021-10-28', 'One-way', '00:13:00', '04:10:00', '6h 20min', 200);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `beds` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `hotel_name`, `beds`, `location`, `type`, `price`, `image`) VALUES
(13, 'Starway', 'single-bed', 'New York', 'not-couple-friendly', 8000, 'IMG-616403710c93d8.79786907.jpg'),
(15, ' Taj Palace', ' double-bed', 'New York', 'family', 2000, 'IMG-616a8abad9df85.00129425.jpg'),
(16, ' Marvel House', ' double-bed', 'Patna', 'couple-friendly', 50, 'IMG-616a8afc383250.00497982.jpg'),
(17, ' Lasaria', ' single-bed', 'New York', 'couple-friendly', 210, 'IMG-616a8b2da8acb5.41671638.jpg'),
(18, ' Ashoka Palace', ' double-bed', 'Patna', 'couple-friendly', 5000, 'IMG-617546727d9da7.90581001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `mobile`) VALUES
(2, 'dish123', '202cb962ac59075b964b07152d234b70', 'Dishant', '9507887679'),
(3, 'love@gmail.com', '40fbe32a8a5789ea8f62f978c81d2ba7', 'Lovepreet', '123456789'),
(4, 'srjrnw9@gmail.com', '202cb962ac59075b964b07152d234b70', 'Suraj kumar', '9854667215');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `test` (`id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `test` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
