-- phpMyAdmin SQL Dump
-- version 5.0.0-alpha1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 12:52 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `axcoraspectre`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `pic` varchar(111) NOT NULL,
  `details` varchar(333) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `pic`, `details`, `date`) VALUES
(9, 'Burger', 'burg - Copy.jpg', '', '2021-05-12 09:34:53'),
(10, 'Coffee', 'espreso - Copy.jpg', '', '2021-05-12 09:35:02'),
(12, 'Food', 'ma.jpg', '', '2021-05-12 09:35:26'),
(13, 'Softdrink', 'ices.jpg', '', '2021-05-12 09:36:01'),
(14, 'Noodles', 'mie3.jpg', '', '2021-05-12 09:38:23'),
(15, 'Combo', 'paket2.jpg', '', '2021-05-12 09:38:53');

-- --------------------------------------------------------

--
-- Table structure for table `inventeries`
--

CREATE TABLE `inventeries` (
  `id` int(11) NOT NULL,
  `catId` int(11) NOT NULL,
  `supplier` varchar(222) NOT NULL,
  `name` text NOT NULL,
  `unit` text NOT NULL,
  `price` text NOT NULL,
  `pic` text NOT NULL,
  `description` text NOT NULL,
  `company` varchar(111) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventeries`
--

INSERT INTO `inventeries` (`id`, `catId`, `supplier`, `name`, `unit`, `price`, `pic`, `description`, `company`, `date`) VALUES
(22, 9, '', 'Burger Killer', 'pcs', '25000', '', 'Burger killer is muler muller', '', '2021-05-12 09:42:43'),
(23, 9, '', 'Burger Monster', 'pcs', '35000', '', 'Burger monster weleh weleh\r\n', '', '2021-05-12 09:45:42'),
(24, 9, '', 'Burger Metal', 'pcs', '30000', '', 'Burger metal bro', '', '2021-05-12 09:46:35'),
(25, 10, '', 'Espreso', 'pcs', '25000', '', 'espreso is black', '', '2021-05-12 09:47:42'),
(26, 10, '', 'Capucino', 'pcs', '35000', '', 'Capucino', '', '2021-05-12 09:47:57'),
(27, 10, '', 'Black Coffee', 'pcs', '20000', '', 'Black Coffee', '', '2021-05-12 09:48:09'),
(28, 10, '', 'Jos Coffee', 'pcs', '15000', '', 'Jos Coffee', '', '2021-05-12 09:48:26'),
(29, 12, '', 'Nasi Goreng', 'pcs', '25000', '', 'Nasi Goreng', '', '2021-05-12 09:51:59'),
(30, 12, '', 'Mie Goreng', 'pcs', '25000', '', 'Mie Goreng', '', '2021-05-12 09:52:10'),
(31, 13, '', 'Bakso Show', 'pcs', '15000', '', 'Bakso Show', '', '2021-05-12 09:52:25'),
(32, 12, '', 'Iga Penyet', 'pcs', '35000', '', 'Iga Penyet', '', '2021-05-12 09:52:39'),
(33, 12, '', 'Ayam Penyet', 'pcs', '25000', '', 'Ayam Penyet', '', '2021-05-12 09:52:50'),
(34, 12, '', 'Bebek Penyet', 'pcs', '25000', '', 'Bebek Penyet', '', '2021-05-12 09:53:00'),
(35, 13, '', 'Coca Cola', 'bottle', '15000', '', 'Coca Cola', '', '2021-05-12 09:53:34'),
(36, 13, '', 'Sprite', 'bottle', '15000', '', 'sptie', '', '2021-05-12 09:53:48'),
(37, 13, '', 'Fanta', 'bottle', '15000', '', 'Fanta', '', '2021-05-12 09:54:02'),
(38, 13, '', 'A & W Rootbeer', 'bottle', '20000', '', 'A & W Rootbeer', '', '2021-05-12 09:54:21'),
(39, 14, '', 'Mie Mawut', 'pcs', '20000', '', 'Mie Mawut', '', '2021-05-12 09:54:36'),
(40, 14, '', 'Mie Metal', 'pcs', '20000', '', 'Mie metal\r\n', '', '2021-05-12 09:54:51'),
(41, 14, '', 'Mie Ramen', 'pcs', '25000', '', 'ramen', '', '2021-05-12 09:55:06'),
(42, 14, '', 'Mie Kuah', 'pcs', '25000', '', 'Mie Kuah', '', '2021-05-12 09:55:18'),
(43, 15, '', 'Combo 1', 'portion', '85000', '', 'Combo 1', '', '2021-05-12 09:55:53'),
(44, 15, '', 'Combo 2', 'portion', '95000', '', 'Combo 2', '', '2021-05-12 09:56:07'),
(45, 15, '', 'Combo 3', 'portion', '105000', '', 'Combo 3', '', '2021-05-12 09:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `title` varchar(222) NOT NULL,
  `name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `title`, `name`) VALUES
(1, 'Axcora Spectre Apps', 'Axcora Spectre Apps');

-- --------------------------------------------------------

--
-- Table structure for table `sold`
--

CREATE TABLE `sold` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `contact` varchar(222) NOT NULL,
  `discount` varchar(222) NOT NULL,
  `item` varchar(222) NOT NULL,
  `amount` varchar(222) NOT NULL,
  `userId` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sold`
--

INSERT INTO `sold` (`id`, `name`, `contact`, `discount`, `item`, `amount`, `userId`, `date`) VALUES
(27, 'Jones', '+6285646104747', '0', '1', '25000', 1, '2021-05-12 09:57:41'),
(28, 'John bones', '+6285646104747', '0', '2', '45000', 1, '2021-05-12 11:49:37'),
(29, 'Bono', '+6285646104747', '0', '2', '45000', 1, '2021-05-12 12:05:44'),
(30, 'sakura', 'sakura', '0', '1', '25000', 1, '2021-05-12 16:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `pic` text NOT NULL,
  `number` text NOT NULL,
  `address` text NOT NULL,
  `cnic` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `pic` varchar(222) NOT NULL,
  `number` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `pic`, `number`, `date`) VALUES
(1, 'admin@admin.com', '12345678', 'Axcora Spectre Resto Web Apps', 'ax.jpg', '', '2017-11-02 12:34:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventeries`
--
ALTER TABLE `inventeries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sold`
--
ALTER TABLE `sold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `inventeries`
--
ALTER TABLE `inventeries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sold`
--
ALTER TABLE `sold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

