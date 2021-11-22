-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 02:21 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jumbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(8) NOT NULL,
  `total` int(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `pname`, `price`, `quantity`, `total`) VALUES
(1, 'lenovo', 18000, 1, 18000),
(2, 'Js', 200, 100, 20000),
(3, 'Lamborgini', 100000, 1, 100000),
(4, 'samsung', 18000, 30, 540000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `category`, `price`, `image`, `date`) VALUES
(2, 'Jack Daniels', 'drinks', 2500, 'products/giancarlo-duarte-w2C731GlwKk-unsplash.jpg', '2021-10-27 23:49:01'),
(3, 'samsung', 'electronics', 2500, 'products/phone2.jpg', '2021-10-28 06:48:04'),
(4, 'Toshiba', 'electronics', 18000, 'products/lapi2.jpg', '2021-10-28 06:50:01'),
(5, 'Techno', 'electronics', 2000, 'products/phone1.jpg', '2021-10-28 06:50:51'),
(6, 'Vans', 'Motors', 150, 'products/kristian-egelund-vJgJLzWmXDA-unsplash.jpg', '2021-10-28 06:51:36'),
(7, 'Cobra', 'clothes', 100, 'products/heather-ford-5gkYsrH_ebY-unsplash.jpg', '2021-10-28 06:52:15'),
(9, 'Conical chair', 'furnitures', 180, 'products/daniil-silantev-1P6AnKDw6S8-unsplash.jpg', '2021-10-28 06:57:06'),
(10, 'Cougch', 'furnitures', 220, 'products/nathan-fertig-FBXuXp57eM0-unsplash.jpg', '2021-10-28 06:57:34'),
(11, 'Kitenge', 'textiles', 180, 'products/analuisa-gamboa-0ohjyDUIUq0-unsplash.jpg', '2021-10-28 06:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `a_password` varchar(20) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `a_password`, `date`) VALUES
(1, 'solomon', 'mwaura', 'phenom@gmail.com', 'jdfhjwfdfjshd404559f', '2021-10-23 09:01:31'),
(2, 'stones', 'stones', 'stones@gmail.com', 'jdfhjwfdfjsh3d70bda8', '2021-10-23 09:08:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pname` (`pname`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image` (`image`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
