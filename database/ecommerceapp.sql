-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 10:52 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerceapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `is_active`) VALUES
(5, 'Bruno', 'brunoadmin@gmail.com', '$2y$10$qZ0OoyX8bhAVxDFM/fx8leZSZwlyq15c1C/KTnaqDLSx6eCDJ0VpC', '0'),
(8, 'Harry Den', 'harryden@gmail.com', '$2y$10$YKSDtra7v2wH6ORYfry8Ue9t49pk1AvQvdJGuq4lDvFLEcx.kP6Mq', '0'),
(9, 'eliot', 'eliot.alderson20@gmail.com', '$2y$10$qZ0OoyX8bhAVxDFM/fx8leZSZwlyq15c1C/KTnaqDLSx6eCDJ0VpC', '1'),
(26, 'Pukuta', 'pukutam@live.com', '$2y$10$7OYrjlUfvPC3S2Uy.E/q0ui.JCutPi4NRG8Tiafhu.lCIk5B1vdgS', '0'),
(27, 'John', 'john@gmail.com', '$2y$10$6CNQnVcLgNwi6PHUpx.qIeEVE1WamfXnFI3ZgXsrswq41Ec5vMoMO', '0');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(33, 11, '::1', 9, 1),
(42, 0, '127.0.0.1', 10, 1),
(44, 0, '127.0.0.1', -1, 1),
(74, 1, '127.0.0.1', 10, 1),
(75, 2, '127.0.0.1', 10, 1),
(76, 3, '127.0.0.1', 10, 1),
(77, 4, '127.0.0.1', 10, 1),
(78, 7, '127.0.0.1', 10, 1),
(79, 6, '127.0.0.1', 10, 1),
(80, 1, '127.0.0.1', 21, 1),
(81, 2, '127.0.0.1', 21, 1),
(82, 3, '127.0.0.1', 21, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(2, 'Tillages'),
(3, 'Harvesting'),
(4, 'Irrigation'),
(5, 'Food Processing'),
(6, 'Transport'),
(12, 'Energy'),
(14, 'micro equipment'),
(16, 'Fertilizers');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL,
  `day-num` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`, `day-num`) VALUES
(1, 1, 1, 1, '9L434522M7706801A', 'Completed', NULL),
(2, 1, 2, 1, '9L434522M7706801A', 'Completed', NULL),
(3, 1, 3, 1, '9L434522M7706801A', 'Completed', NULL),
(4, 1, 1, 1, '8AT7125245323433N', 'Completed', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_title`, `product_price`, `product_qty`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 16, 'Fertilizer 50kg', 250, 70, 'Crop fertilizer ', '170117_tractor_road_broom.jpg', 'Fertilizer'),
(2, 3, 'Fertilizer 50kg', 250, 70, 'Crop fertilizer ', '800112_tractor_-_31hp_-_deep_etch.jpg', 'Fertilizer'),
(3, 16, 'Fertilizer 50kg', 250, 70, 'Crop fertilizer ', '170039_tractor---l35-_35hp_-no-attach_in-situ_1.png', 'Fertilizer'),
(4, 5, 'Tractor', 5000, 30, 'Tractor for farming and tilling', '800113_kubota_l4600hd_tractor_-_45hp-deep_etched.png', 'Tractor'),
(5, 4, 'Tractor', 5000, 30, 'Tractor for farming and tilling', '170100-tractor-rear-grader-blade.png', 'Tractor'),
(6, 4, 'Tractor', 5000, 30, 'Tractor for farming and tilling', '800115-tractor-loader.png', 'Tractor'),
(32, 3, 'Test 5', 200, 4, 'just a test', '1658474985_800115-tractor-loader.png', 'Tillage'),
(33, 3, 'test 3', 300000, 60, 'just a test', '1658476175_1658474985_800115-tractor-loader.png', 'Tillage');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'Christine', 'Randolph', 'randolphc@gmail.com', '25f9e794323b453885f5181f1b624d0b', '8389080183', '2133  Hill Haven Drive', 'Terra Stree'),
(2, 'Will', 'Willams', 'willainswill@gmail.com', '25f9e794323b453885f5181f1b624d0b', '8389080183', '4567  Orphan Road', 'WI'),
(3, 'Demo', 'Name', 'demo@gmail.com', 'password', '9876543210', 'demo ad1', 'ademo ad2'),
(5, 'Steeve', 'Rogers', 'steeve1@gmail.com', '305e4f55ce823e111a46a9d500bcb86c', '9876547770', '573  Pinewood Avenue', 'MN'),
(6, 'Melissa', 'Gilbert', 'gilbert@gmail.com', '305e4f55ce823e111a46a9d500bcb86c', '7845554582', '1711  McKinley Avenue', 'MA'),
(7, 'sandra', 'Masiwa', 'sandymasiwa@gmail.com', '6cf658c63b53caa0014414ecd3ab2ea4', '0977337742', '123 wower', 'chelstone'),
(8, 'sandra', 'Masiwa', 'sandymasiwa1@gmail.com', 'd9ab8b17dc580ff51457b8a15668e793', '0977337742', '123 wower', 'chelstone'),
(9, 'sandra', 'Masiwa', 'sandy@gmail.com', '37cb1b04df3cb0955cba5075139b1e07', '0977337742', '123 wower', 'chelstone'),
(10, 'Pukuta', 'Mwanza', 'eliot.alderson20@gmail.com', 'abe848cf294fca404985a860993d57ca', '0974755027', 'Zambia Ndola, Northrise', 'Kalewa rd'),
(17, 'John', 'phiri', 'johnphiri@gmail.com', 'abe848cf294fca404985a860993d57ca', '0978345656', 'Luska, Zambia', 'Kalewa'),
(18, 'asdddads', 'diadads', 'johnmphiri@gmail.com', '9e10104c5c406b200017d576d27ce456', '0978345656', 'Luska, Zambia', 'Kalewa'),
(19, 'Pukuta', 'diadads', 'johnmphirri@gmail.com', 'c95ca687ba5b106fe2ad3673561efa0a', '0978345656', 'Luska, Zambia', 'in the worl'),
(20, 'Pukuta', 'Mwanza', 'eliot.alderson80@gmail.com', 'c95ca687ba5b106fe2ad3673561efa0a', '0978345656', 'Luska, Zambia', 'Class'),
(21, 'John', 'Banda', 'eliot.alderson60@gmail.com', 'c95ca687ba5b106fe2ad3673561efa0a', '0978345656', 'Luska, Zambia', 'Class'),
(22, 'name', 'name', 'eliot.alderson51@gmail.com', 'c95ca687ba5b106fe2ad3673561efa0a', '0974755027', 'Luska, Zambia', 'Kalewa, Not'),
(23, 'Pukuta', 'Banda', 'eliot.alderson52@gmail.com', 'c95ca687ba5b106fe2ad3673561efa0a', '0974755027', 'Luska, Zambia', 'Kalewa'),
(24, 'Pukuta', 'Mwanza', 'eliot.alderson24@gmail.com', 'c95ca687ba5b106fe2ad3673561efa0a', '0974755027', 'someplace', 'Kalewa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_product_cat` (`product_cat`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_cat` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
