-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 12:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrismart`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `pname` varchar(255) CHARACTER SET latin1 NOT NULL,
  `price` varchar(255) CHARACTER SET latin1 NOT NULL,
  `ptype` varchar(255) CHARACTER SET latin1 NOT NULL,
  `p_img` varchar(255) CHARACTER SET latin1 NOT NULL,
  `quantity` varchar(255) CHARACTER SET latin1 NOT NULL,
  `details` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `price`, `ptype`, `p_img`, `quantity`, `details`) VALUES
(2, 'Organic onion', '880', 'Vegetables', 'onions.jpg', '1kg', 'export quality onion'),
(3, 'Potato From Agra', '1200', 'Vegetables', 'potato.jpg', '1kg', 'Fresh potato for sale in bulk quantity.'),
(4, 'Broccoli', '400', 'Vegetables', 'brocolli.jpg', '1kg', 'Farm fresh Zero residue Broccoli harvest around 5th March.Zero residue product.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
