-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 04:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blasian`
--

-- --------------------------------------------------------

--
-- Table structure for table `blasianadmins`
--

CREATE TABLE `blasianadmins` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `blasianadmins`
--

INSERT INTO `blasianadmins` (`id`, `name`, `adminname`, `pass`) VALUES
(1, 'Pranav', 'panya', 'pk');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `descrip` varchar(500) NOT NULL,
  `mrp` varchar(20) NOT NULL,
  `sp` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `descrip`, `mrp`, `sp`, `image`) VALUES
(22, 'LED Shed', 'this is party ware product', '2000', '1899', '3dglass.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_second`
--

CREATE TABLE `product_second` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `descrip` varchar(100) NOT NULL,
  `mrp` double NOT NULL,
  `sp` double NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product_second`
--

INSERT INTO `product_second` (`id`, `name`, `descrip`, `mrp`, `sp`, `image`, `quantity`) VALUES
(42, 'funky', 'this is party ware product', 2100, 1999, 'funky4.png', 1),
(43, 'funky', 'this is party ware product', 2200, 1999, 'funky1.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'Pranav Kaduskar', 'panyakaduskar@gmail.com', 'pk', 'pk'),
(2, 'sp', 'sujal@gmail.com', 'sp', 'sp'),
(3, 'om', 'om@gmail.com', 'om', 'om'),
(4, 'Ak', 'ak@gmail.com', 'ak', 'ak');

-- --------------------------------------------------------

--
-- Table structure for table `usersquery`
--

CREATE TABLE `usersquery` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL,
  `replay` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `usersquery`
--

INSERT INTO `usersquery` (`id`, `name`, `email`, `username`, `message`, `replay`) VALUES
(3, 'Pranav Kaduskar', 'panyakaduskar@gmail.com\r\n', 'Panya', 'hie what about next event ? i want to the see your collection personally!', '11to 13 dec'),
(7, 'ppp1', 'dk@gmail.comm', 'pkk', 'pppppp\r\n', 'ans'),
(8, 'Spider-Man', 'panyakaduskar@gmail.com', 'spide', 'i am spide\r\n', 'i am admin'),
(9, 'Pranav Kaduskar', 'pranavkaduskar8@gmail.com', 'Panya', 'hie', 'hello'),
(10, 'Pranav Kaduskar', 'panyakaduskar@gmail.com', 'pk', 'hie i am your new user', 'welcome to blasian'),
(12, '', '', '', '', NULL),
(13, '', '', '', '', NULL),
(14, '', '', '', '', NULL),
(15, 'omkar', 'om@gmail.com', 'om', 'hie i am checking you functions', NULL),
(16, 'Spider-Man', 'panyakaduskar@gmail.com', 'pk', 'nkb', NULL),
(18, '', '', '', '', NULL),
(19, '', '', '', '', NULL),
(20, '', '', '', '', NULL),
(21, '', '', '', '', NULL),
(22, '', '', '', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blasianadmins`
--
ALTER TABLE `blasianadmins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_second`
--
ALTER TABLE `product_second`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersquery`
--
ALTER TABLE `usersquery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blasianadmins`
--
ALTER TABLE `blasianadmins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_second`
--
ALTER TABLE `product_second`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usersquery`
--
ALTER TABLE `usersquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
