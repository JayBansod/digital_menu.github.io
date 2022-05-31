-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 12:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `prise` int(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(4) NOT NULL,
  `table_number` int(3) NOT NULL,
  `is_confirmed` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `prise`, `image`, `quantity`, `table_number`, `is_confirmed`) VALUES
(140, 'Samosa', 20, 'samosa.webp', 2, 4, 1),
(141, 'Tomato Soup', 100, 'Tomato-Soup.jpg', 1, 5, 0),
(142, 'Masala Papad', 40, 'Masala-Papad-1-3.jpg', 1, 5, 0),
(143, 'Samosa', 20, 'samosa.webp', 1, 3, 1),
(144, 'Masala Papad', 40, 'Masala-Papad-1-3.jpg', 1, 3, 0),
(145, 'Tomato Soup', 100, 'Tomato-Soup.jpg', 1, 3, 0),
(146, 'Masala Papad', 40, 'Masala-Papad-1-3.jpg', 1, 8, 1),
(147, 'Poori', 25, 'poori.jpg', 1, 8, 1),
(148, 'Tomato Soup', 100, 'Tomato-Soup.jpg', 1, 7, 1),
(149, 'Saag Paneer', 150, 'saag-paneer-4893170.jpg', 1, 1, 1),
(150, 'Dal Makhani', 200, 'dal makhani.gif', 1, 1, 1),
(151, 'Samosa', 20, 'samosa.webp', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `conform`
--

CREATE TABLE `conform` (
  `id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `prise` int(5) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(4) NOT NULL,
  `table_number` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `main_course`
--

CREATE TABLE `main_course` (
  `id` int(3) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `prise` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_course`
--

INSERT INTO `main_course` (`id`, `image`, `name`, `prise`) VALUES
(11, 'chana masala.jpg', 'Chana Masala', 100),
(12, 'saag-paneer-4893170.jpg', 'Saag Paneer', 150),
(13, 'dal makhani.gif', 'Dal Makhani', 200),
(14, 'Nan.jpg', 'Nan', 20),
(17, 'poori.jpg', 'Poori', 25);

-- --------------------------------------------------------

--
-- Table structure for table `starters`
--

CREATE TABLE `starters` (
  `id` int(3) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `prise` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `starters`
--

INSERT INTO `starters` (`id`, `image`, `name`, `prise`) VALUES
(45, 'samosa.webp', 'Samosa', '20'),
(46, 'Masala-Papad-1-3.jpg', 'Masala Papad', '40'),
(47, 'Tomato-Soup.jpg', 'Tomato Soup', '100'),
(48, 'aloo-bonda-simplytadka1.jpg', 'Aloo Bonda', '30');

-- --------------------------------------------------------

--
-- Table structure for table `table_no`
--

CREATE TABLE `table_no` (
  `table_number` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_no`
--

INSERT INTO `table_no` (`table_number`) VALUES
(2),
(3),
(0),
(1),
(4),
(1),
(1),
(1),
(4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conform`
--
ALTER TABLE `conform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_course`
--
ALTER TABLE `main_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `starters`
--
ALTER TABLE `starters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `conform`
--
ALTER TABLE `conform`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_course`
--
ALTER TABLE `main_course`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `starters`
--
ALTER TABLE `starters`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
