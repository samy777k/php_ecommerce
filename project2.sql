-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 01:52 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `name`, `phone`, `status`, `address`, `discription`, `id`) VALUES
('samy@gmail.com', '000', 'samy', '0592122878', 1, 'alremal', 'admin', 5),
('ahmed@gmail.com', '222', 'ahmed', '0598789', 0, 'al_wehda', 'admin', 6);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `discription`, `status`, `date`) VALUES
(100, 'tea', 'PUBLIC_SITE/images/1651851146.jpg', 1, '2022-05-06 01:01:21'),
(101, 'latih', 'PUBLIC_SITE/images/1651852570.jpg', 1, '2022-05-06 01:01:33'),
(102, 'jeans', 'PUBLIC_SITE/images/1651911506.png', 1, '2022-05-07 05:51:01'),
(103, 'treng', 'PUBLIC_SITE/images/1651943812.png', 1, '2022-05-07 02:34:34'),
(104, 'tea2', 'PUBLIC_SITE/images/1651946369.jpg', 1, '2022-05-07 02:34:49'),
(105, 'samy', 'PUBLIC_SITE/images/1651945849.jpg', 1, '2022-05-07 02:57:35');

-- --------------------------------------------------------

--
-- Table structure for table `is_rate`
--

CREATE TABLE `is_rate` (
  `id` int(11) NOT NULL,
  `storeID` int(11) NOT NULL,
  `macAddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `is_rate`
--

INSERT INTO `is_rate` (`id`, `storeID`, `macAddress`) VALUES
(22, 75, '48E7DA6D4DF5'),
(25, 76, '48E7DA6D4DF5'),
(33, 79, '');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `rate_id` int(11) NOT NULL,
  `overallRate` double NOT NULL,
  `numberRating` int(11) NOT NULL,
  `store_id2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`rate_id`, `overallRate`, `numberRating`, `store_id2`) VALUES
(45, 80, 4, 75),
(46, 40, 2, 76),
(47, 100, 5, 79),
(48, 100, 5, 75);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `store_id` int(11) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `store_phone` varchar(10) NOT NULL,
  `store_image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `store_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `store_name`, `store_phone`, `store_image`, `category_id`, `store_address`) VALUES
(75, 'tea', '0599489903', 'PUBLIC_SITE/images/1651847386.jpg', 100, 'elnaser_Street'),
(76, 'neskafih', '0599054987', 'PUBLIC_SITE/images/1651855372.jpg', 101, 'elRemail_Street'),
(79, 'clothes', '7777777', 'PUBLIC_SITE/images/1651909599.jpg', 102, 'elnaser_Street'),
(81, 'drink', '11111', 'PUBLIC_SITE/images/1651939769.jpg', 104, 'elRemail_Street');

-- --------------------------------------------------------

--
-- Table structure for table `this_login`
--

CREATE TABLE `this_login` (
  `id` int(11) NOT NULL,
  `id_Admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `this_login`
--

INSERT INTO `this_login` (`id`, `id_Admin`) VALUES
(13, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `is_rate`
--
ALTER TABLE `is_rate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `storeID` (`storeID`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`),
  ADD UNIQUE KEY `store_phone` (`store_phone`),
  ADD KEY `store_ibfk_1` (`category_id`);

--
-- Indexes for table `this_login`
--
ALTER TABLE `this_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `is_rate`
--
ALTER TABLE `is_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `this_login`
--
ALTER TABLE `this_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `store`
--
ALTER TABLE `store`
  ADD CONSTRAINT `store_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
