-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 04:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_price` varchar(50) NOT NULL,
  `pro_description` text NOT NULL,
  `thumbinal_image` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_price`, `pro_description`, `thumbinal_image`, `createdAt`, `updatedAt`) VALUES
(8, 'MI TV', '11000', 'This is Product Detail This is Product Detail This is Product Detail This is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product Detail', 'tv3.jpg', '2022-11-10 15:10:09', '0000-00-00 00:00:00'),
(9, 'Dell Laptop', '8000', 'This is Product Detail This is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product DetailThis is Product Detail', 'Laptop-Transparent-PNG.png', '2022-11-10 15:15:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `pro_image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `pro_images` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`pro_image_id`, `product_id`, `pro_images`, `createdAt`, `updatedAt`) VALUES
(36, 8, 'tv1.jpg', '2022-11-10 15:10:09', '0000-00-00 00:00:00'),
(37, 8, 'tv2.jpg', '2022-11-10 15:10:09', '0000-00-00 00:00:00'),
(38, 8, 'tv3.jpg', '2022-11-10 15:10:09', '0000-00-00 00:00:00'),
(39, 8, 'tv4.jpg', '2022-11-10 15:10:09', '0000-00-00 00:00:00'),
(40, 8, 'tv5.jpg', '2022-11-10 15:10:09', '0000-00-00 00:00:00'),
(41, 9, 'image1.jpg', '2022-11-10 15:15:46', '0000-00-00 00:00:00'),
(42, 9, 'image2.jpg', '2022-11-10 15:15:46', '0000-00-00 00:00:00'),
(43, 9, 'image3.jpg', '2022-11-10 15:15:46', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`pro_image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `pro_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
