-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2016 at 04:00 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern_review_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `a_id` int(3) NOT NULL,
  `user_admin` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `all_product`
--

CREATE TABLE `all_product` (
  `p_id` int(3) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productType` varchar(255) NOT NULL,
  `brandType` varchar(255) NOT NULL,
  `productImage` varchar(255) NOT NULL,
  `productDescribtion` varchar(255) NOT NULL,
  `productCost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_product`
--

INSERT INTO `all_product` (`p_id`, `productName`, `productType`, `brandType`, `productImage`, `productDescribtion`, `productCost`) VALUES
(1, 'iphone 6s(64gb)', 'phone', 'iphone', 'iphone1.jpg', 'A9 processor,2gb ram', '60000');

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `u_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`u_id`, `username`, `password`) VALUES
(1, 'abhilash', 'rawat'),
(2, 'ramu', 'ramu123');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `p_r` int(3) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `product_review` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`p_r`, `product_id`, `username`, `product_review`, `time`) VALUES
(1, '1', 'abhilash', ' abc', '2016-05-05 23:40:36'),
(2, '', 'abhilash', '', '2016-05-05 23:46:28'),
(3, '', 'abhilash', '', '2016-05-05 23:46:43'),
(4, '', 'abhilash', '', '2016-05-05 23:47:13'),
(5, '1', 'abhilash', ' ', '2016-05-05 23:47:24'),
(6, '', 'abhilash', '', '2016-05-05 23:50:18'),
(7, '1', 'abhilash', ' abcdef', '2016-05-05 23:50:36'),
(8, '', 'abhilash', '', '2016-05-05 23:52:46'),
(9, '1', 'abhilash', ' good', '2016-05-05 23:53:04'),
(10, '1', 'abhilash', ' nice', '2016-05-05 23:54:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `all_product`
--
ALTER TABLE `all_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`p_r`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `a_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `all_product`
--
ALTER TABLE `all_product`
  MODIFY `p_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `u_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `p_r` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
