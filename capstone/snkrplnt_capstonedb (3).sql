-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 02:13 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snkrplnt_capstonedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

CREATE TABLE `admintb` (
  `id` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `userpass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`id`, `username`, `userpass`) VALUES
(1, 'snkrplnt', 'snkrplnt');

-- --------------------------------------------------------

--
-- Table structure for table `offertb`
--

CREATE TABLE `offertb` (
  `offer_id` int(5) NOT NULL,
  `offer_name` varchar(50) NOT NULL,
  `offer_brand` varchar(10) NOT NULL,
  `offer_size` varchar(10) NOT NULL,
  `offer_price` int(10) NOT NULL,
  `offer-image-left` varchar(100) NOT NULL,
  `offer-image-right` varchar(100) NOT NULL,
  `offer-image-back` varchar(100) NOT NULL,
  `offer-image-top` varchar(100) NOT NULL,
  `offer-image-outsole` varchar(100) NOT NULL,
  `offer-image-sizetag` varchar(100) NOT NULL,
  `offer-image-boxlabel` varchar(100) NOT NULL,
  `offerer_name` varchar(40) NOT NULL,
  `offerer_gcashno` varchar(13) NOT NULL,
  `offerer_email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shoestb`
--

CREATE TABLE `shoestb` (
  `shoes_id` int(11) NOT NULL,
  `shoes_name` varchar(50) NOT NULL,
  `brand_id` int(2) NOT NULL,
  `brand_name` varchar(20) NOT NULL,
  `shoes_price` decimal(10,2) NOT NULL,
  `date_listed` datetime(2) NOT NULL,
  `image_url1` varchar(100) NOT NULL,
  `image_url2` varchar(100) NOT NULL,
  `image_url3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoestb`
--

INSERT INTO `shoestb` (`shoes_id`, `shoes_name`, `brand_id`, `brand_name`, `shoes_price`, `date_listed`, `image_url1`, `image_url2`, `image_url3`) VALUES
(1, 'Dunks Court Purple', 1, 'Nike', '6500.00', '2024-05-18 17:02:41.00', 'inventory/Nike/1/1_img1.jpg', '', ''),
(5, 'Air Jordan 4 Court Green', 2, 'Adidas', '12000.00', '2024-05-18 19:38:41.00', 'images/newbalance.jpg', '', ''),
(40, 'Try lang', 3, 'Converse', '9999.00', '2024-05-18 22:57:16.00', 'images/vomero.jpg', '', ''),
(50, 'Matry ', 4, 'New Balance', '1.00', '0000-00-00 00:00:00.00', 'images/samba-white.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sizestb`
--

CREATE TABLE `sizestb` (
  `size_id` int(3) NOT NULL,
  `shoes_price` decimal(10,2) NOT NULL,
  `size` varchar(30) NOT NULL,
  `shoes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offertb`
--
ALTER TABLE `offertb`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `shoestb`
--
ALTER TABLE `shoestb`
  ADD PRIMARY KEY (`shoes_id`),
  ADD UNIQUE KEY `shoes_id` (`shoes_id`);

--
-- Indexes for table `sizestb`
--
ALTER TABLE `sizestb`
  ADD PRIMARY KEY (`size_id`),
  ADD KEY `shoes_id` (`shoes_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offertb`
--
ALTER TABLE `offertb`
  MODIFY `offer_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shoestb`
--
ALTER TABLE `shoestb`
  MODIFY `shoes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `sizestb`
--
ALTER TABLE `sizestb`
  MODIFY `size_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sizestb`
--
ALTER TABLE `sizestb`
  ADD CONSTRAINT `sizestb_ibfk_1` FOREIGN KEY (`shoes_id`) REFERENCES `shoestb` (`shoes_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
