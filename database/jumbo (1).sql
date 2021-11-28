-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2021 at 09:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` int(11) NOT NULL,
  `a_subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `complain` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `total` int(20) NOT NULL,
  `a_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `latest`
--

CREATE TABLE `latest` (
  `id` int(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `a_image` varchar(255) NOT NULL,
  `merchant` varchar(255) NOT NULL,
  `a_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latest`
--

INSERT INTO `latest` (`id`, `pname`, `category_id`, `price`, `a_image`, `merchant`, `a_description`) VALUES
(3, 'Jameson', '3', 20, 'new/jameson.jpg', 'phenom@gmail.com', 'whisky'),
(4, 'Smart Bed', '4', 120, 'new/6by6.jpg', 'phenom@gmail.com', 'smart bed'),
(5, 'Air Force', '2', 20, 'new/airforce.jpg', 'phenom@gmail.com', 'air force2'),
(6, 'PS4 Gaming', '1', 10, 'new/pads.jpg', 'phenom@gmail.com', 'better gaming experience'),
(7, 'Apple  i12', '1', 230, 'new/apple2.jpg', 'phenom@gmail.com', 'apple new tech'),
(8, 'Nike ', '2', 18, 'new/nike.jpg', 'phenom@gmail.com', 'nike dark'),
(9, 'Jean Trouser', '2', 15, 'new/trouser.jpg', 'phenom@gmail.com', 'men trouser'),
(10, 'Pants', '2', 6, 'new/pants.jpg', 'phenom@gmail.com', 'girls pants'),
(11, 'Wireless Mouse', '1', 10, 'new/mouse.jpg', 'phenom@gmail.com', 'mouse'),
(12, 'Tesla Pods', '1', 30, 'new/teslapods.jpg', 'phenom@gmail.com', 'new tech'),
(13, 'Suit', '2', 80, 'new/anonymous.jpg', 'messi@gmail.com', 'men suit'),
(14, 'Cougch', '4', 150, 'new/broadcouch.jpg', 'messi@gmail.com', 'denser cougch'),
(15, 'Stylish', '2', 30, 'new/girldress.jpg', 'messi@gmail.com', 'girl full fit'),
(16, 'Pepsi', '3', 3, 'new/pepsi.jpg', 'messi@gmail.com', 'legend drink'),
(17, 'Xiaomi i 10', '1', 300, 'new/xiaomi.jpg', 'messi@gmail.com', 'Xiaomi 10'),
(18, 'Schweepers', '3', 2, 'new/schweepers.jpg', 'messi@gmail.com', 'fresh drink'),
(19, 'Air Max', '2', 25, 'new/airmax.jpg', 'neymar@gmail.com', 'Air max 11'),
(20, 'Apple 8GB RAM 500 ROM', '1', 400, 'new/apple.jpg', 'neymar@gmail.com', 'mac apple'),
(21, 'Cougch', '4', 200, 'new/broadcouch.jpg', 'neymar@gmail.com', 'flatten cougch'),
(22, 'Cougch', '4', 90, 'new/couch1.jpg', 'neymar@gmail.com', '90 degree'),
(23, 'Matress', '4', 60, 'new/denser.jpg', 'neymar@gmail.com', 'high denser foam'),
(24, 'Jack Daniels', '3', 25, 'new/jack.jpg', 'neymar@gmail.com', 'finest whisky'),
(25, 'Jordan', '2', 25, 'new/jordan.jpg', 'neymar@gmail.com', 'jordan snicker'),
(26, 'Apple Laptop', '1', 400, 'new/mac.jpg', 'neymar@gmail.com', 'apple laptop'),
(27, 'Samsung Galaxy', '1', 350, 'new/samsung galaxy.jpg', 'neymar@gmail.com', 'newest galaxy'),
(28, 'Old Monk', '3', 500, 'new/scotch.jpg', 'neymar@gmail.com', 'chinesse whisky'),
(29, 'Cougch', '4', 500, 'new/tripplecushion.jpg', 'neymar@gmail.com', 'tripple couch'),
(30, 'Kitchen Utensils', '4', 200, 'new/utensils.jpg', 'neymar@gmail.com', 'dozen'),
(31, 'Coca Zero sugar', '3', 2, 'new/coca.jpg', 'phenom@gmail.com', 'zero sugar'),
(32, 'Jack Daniels', '3', 25, 'new/jack.jpg', 'phenom@gmail.com', '45% alcohol');

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE `merchants` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`id`, `fname`, `lname`, `email`, `a_password`) VALUES
(1, 'solo', 'mwaura', 'phenom@gmail.com', 'jdfhjwfdfjshc3f35c7fe513383a95e393c5d056cc430e4eadf5f21b024e98b0092301a0c7fd9ada89d04b3a64c14fccec3e02a4a41bfeec13880a1efb8688108417edca6073hdhjdkjddsk'),
(2, 'leonel', 'Messi', 'messi@gmail.com', 'jdfhjwfdfjshc60ddc553ceb403014f3de00eb59a6d7a0420c08fccd4885603b99a528ef2be6e40bfc251694556927ded76556cb607663d54ae0ee722c5e1a3e4d2b2347cebehdhjdkjddsk'),
(3, 'Neymar', 'jr', 'neymar@gmail.com', 'jdfhjwfdfjsha543e8fcda2f0b318826667effe4e4b3ac22705112f9470d7e3d07c71ca1025d235e6d361160b5b2b0b61f7121b84234dd0ddbd00d206f8f4805fef04f595193hdhjdkjddsk');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `a_image` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `a_password`) VALUES
(1, 'grace', 'kagendo', 'grace@gmail.com', 'jdfhjwfdfjshd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81dbhdhjdkjddsk'),
(2, 'solo', 'prime', 'phenom@gmail.com', 'jdfhjwfdfjshc3f35c7fe513383a95e393c5d056cc430e4eadf5f21b024e98b0092301a0c7fd9ada89d04b3a64c14fccec3e02a4a41bfeec13880a1efb8688108417edca6073hdhjdkjddsk'),
(3, 'Roman', 'Reigns', 'roman@gmail.com', 'jdfhjwfdfjsh3d70bda816d7093084c07ad3f5b786347c4358fb73c3891b56e3afc41e39ee6a3e653b78e4e4c4af119c2d10fbbe0c79b25b17319383f77d179b6e33bdfde6e7hdhjdkjddsk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest`
--
ALTER TABLE `latest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `a_password` (`a_password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `latest`
--
ALTER TABLE `latest`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
