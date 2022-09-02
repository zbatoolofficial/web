-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2022 at 05:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `front`
--

CREATE TABLE `front` (
  `id` int(123) NOT NULL,
  `f_name` varchar(123) NOT NULL,
  `l_name` varchar(123) NOT NULL,
  `u_email` varchar(123) NOT NULL,
  `u_password` varchar(123) NOT NULL,
  `status` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `front`
--

INSERT INTO `front` (`id`, `f_name`, `l_name`, `u_email`, `u_password`, `status`) VALUES
(1, 'iqra', 'ashraf', 'iqra@gmail.com', '123', ''),
(2, 'Ayesha', 'Maqsood', 'a@gmail.com', '456', ''),
(3, 'maryam', 'batool', 'maryam@gmail.com', '12345', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `frontend`
--

CREATE TABLE `frontend` (
  `id` int(123) NOT NULL,
  `u_name` varchar(123) NOT NULL,
  `u_email` varchar(123) NOT NULL,
  `u_phone` varchar(123) NOT NULL,
  `u_msg` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `frontend`
--

INSERT INTO `frontend` (`id`, `u_name`, `u_email`, `u_phone`, `u_msg`) VALUES
(1, 'iqra', 'iqra@gmail.com', '000000300', 'nice'),
(2, 'Zara', 'a@gmail.com', '03001234567', 'great'),
(3, 'Zara', 'a@gmail.com', '03000000000', 'nice'),
(4, 'test', 't@gmail.com', '123456789', 'Good!');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(123) NOT NULL,
  `product_name` varchar(123) NOT NULL,
  `product_image` varchar(123) NOT NULL,
  `product_price` int(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image`, `product_price`) VALUES
(1, 'jacket', '03.jpg', 500),
(2, 'shoes', '25.jpg', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_id` int(123) NOT NULL,
  `name` varchar(123) NOT NULL,
  `email` varchar(123) NOT NULL,
  `gender` varchar(123) NOT NULL,
  `city` varchar(123) NOT NULL,
  `address` varchar(123) NOT NULL,
  `number` int(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `name`, `email`, `gender`, `city`, `address`, `number`) VALUES
(1, 'zara', 'z@gmail.com', 'Female', 'MLT', 'D-Type', 920004567),
(2, '', '', '', 'FSD', '<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>D:phphtdocsPHPPHP2frontprofile.php</b> o', 0),
(3, '', '', '', 'FSD', '<br />\r\n<b>Warning</b>:  Trying to access array offset on value of type null in <b>D:phphtdocsPHPPHP2frontprofile.php</b> o', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `front`
--
ALTER TABLE `front`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontend`
--
ALTER TABLE `frontend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `front`
--
ALTER TABLE `front`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `frontend`
--
ALTER TABLE `frontend`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `user_id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
