-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 05:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srinithdineshkarthikdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

create Database srinithDineshKarthikdatabase;

CREATE USER 'srinithDineshKarthik'@'localhost' IDENTIFIED BY 'srinithDineshKarthikPass';
GRANT ALL PRIVILEGES ON srinithDineshKarthikDatabase.* TO 'srinithDineshKarthik'@'localhost';
FLUSH PRIVILEGES;

CREATE TABLE `manager` (
  `uid` int(20) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `upass` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `uemail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`uid`, `uname`, `upass`, `fullname`, `uemail`) VALUES
(1, 'admin', '1234', 'admin', 'admin@admin.com'),
(12, 'srinith', '1234', 'srinith', 'srinith@gmail.com'),
(13, 'dinesh', '1234', 'dinesh', 'dinesh@gmail.com'),
(14, 'karthik', '1234', 'karthik', 'karthik@gmail.com'),
(15, 'srinith2', '1234', 'srinith2', 'srinith2@gmail.com'),
(16, 'dinesh22', '1234', 'dinesh 2', 'd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) UNSIGNED NOT NULL,
  `review_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `review_text`) VALUES
(1, 'This hotel exceeded my expectations!'),
(2, 'Great service and amenities.'),
(3, 'The room was clean and comfortable.'),
(4, 'I would definitely stay here again.'),
(5, 'The staff was friendly and accommodating.'),
(25, 'Great service'),
(28, 'The room was clean and comfortable.'),
(30, 'Great service, large pool');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(200) NOT NULL,
  `room_cat` text NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `name` text NOT NULL,
  `phone` int(100) NOT NULL,
  `roomcount` int(11) NOT NULL DEFAULT 0,
  `adults` int(11) NOT NULL DEFAULT 0,
  `children` int(11) NOT NULL DEFAULT 0,
  `totalprice` int(11) NOT NULL DEFAULT 0,
  `book` text NOT NULL,
  `conf_id` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_cat`, `checkin`, `checkout`, `name`, `phone`, `roomcount`, `adults`, `children`, `totalprice`, `book`, `conf_id`, `email`, `address`, `city`, `state`) VALUES
(45, 'Duplex', '2023-03-22', '2023-03-31', 'srinith', 1234567898, 1, 1, 1, 1500, 'true', 7388, 'srinith@gmail.com', 'Apt Duplex', 'union', 'New jersey'),
(46, 'Duplex', '2023-03-26', '2023-03-31', 'srinith2', 1234567898, 1, 1, 1, 1400, 'true', 6161, 'srinith111@gmail.com', 'Apt Duplex', 'union', 'New jersey'),
(47, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL),
(48, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL),
(49, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL),
(50, 'Family', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL),
(51, 'Family', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL),
(52, 'Family', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL),
(53, 'Family', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL),
(54, 'Family', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL),
(55, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL),
(56, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL),
(57, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL),
(58, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL),
(59, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL),
(60, 'suit', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL),
(61, 'suit', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL),
(62, 'super 5', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL),
(63, 'super 5', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL),
(64, 'super 5', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL),
(65, 'super 5', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL),
(66, 'super 5', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL),
(67, 'Duplex 2', '2023-03-22', '2023-03-30', 'srinith2', 1234567898, 1, 1, 1, 1000, 'true', 4857, 'srinith111@gmail.com', 'Apt Duplex', 'union', 'New jersey'),
(69, 'Dulex 5', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL),
(70, 'Dulex 5', '0000-00-00', '0000-00-00', '', 0, 0, 0, 0, 0, 'false', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room_category`
--

CREATE TABLE `room_category` (
  `roomname` text NOT NULL,
  `room_qnty` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `booked` int(11) NOT NULL,
  `no_bed` int(11) NOT NULL,
  `bedtype` text NOT NULL,
  `facility` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_category`
--

INSERT INTO `room_category` (`roomname`, `room_qnty`, `available`, `booked`, `no_bed`, `bedtype`, `facility`, `price`) VALUES
('Dulex 5', 2, 2, 0, 1, 'single', 'All', 1000),
('Duplex', 5, 5, 0, 2, 'single', 'AC, TV, Wifii', 1500),
('Duplex 2', 1, 1, 0, 1, 'single', 'All ', 1000),
('Family', 5, 5, 0, 2, 'double', 'Sofa, TV, WIFI, Balcony, AC..', 3500),
('suit', 2, 2, 0, 2, 'double', 'trgghgh ghf', 3455),
('super 5', 5, 5, 0, 1, 'double', 'all', 1000),
('Super Comfort', 5, 5, 0, 1, 'double', 'AC, TV, WIFIi', 2200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_category`
--
ALTER TABLE `room_category`
  ADD PRIMARY KEY (`roomname`(100));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `uid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
