-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 09:35 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `problemsolversbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(30) NOT NULL,
  `recievedAccount` int(11) NOT NULL,
  `paiedAccount` int(20) NOT NULL,
  `createdAt` datetime NOT NULL,
  `transReason` varchar(50) NOT NULL,
  `money` decimal(11,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `recievedAccount`, `paiedAccount`, `createdAt`, `transReason`, `money`) VALUES
(1, 12121212, 0, '0000-00-00 00:00:00', 'ME', '40000.00'),
(2, 12121212, 0, '0000-00-00 00:00:00', 'ME', '3000.00'),
(3, 21212121, 12121212, '0000-00-00 00:00:00', 'BUY FROM AMAZON', '200.00'),
(4, 21212121, 12121212, '0000-00-00 00:00:00', 'BUY FROM AMAZON', '5000.00'),
(7, 21212121, 12121212, '0000-00-00 00:00:00', 'sdasdas', '3323.00'),
(9, 21212121, 12121212, '0000-00-00 00:00:00', 'buying from log store', '2047.44'),
(10, 21212121, 12121212, '0000-00-00 00:00:00', 'buying from log store', '2047.44'),
(11, 21212121, 12121212, '0000-00-00 00:00:00', 'buying from log store', '2047.44'),
(12, 21212121, 12121212, '0000-00-00 00:00:00', 'buying from log store', '2047.44'),
(13, 21212121, 12121212, '0000-00-00 00:00:00', 'buying from log store', '490.09'),
(14, 21212121, 12121212, '0000-00-00 00:00:00', 'buying from log store', '490.09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recievedAccount` (`recievedAccount`),
  ADD KEY `paiedAccount` (`paiedAccount`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
