-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 05:47 PM
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
-- Database: `currinces_ex_rate`
--

-- --------------------------------------------------------

--
-- Table structure for table `currinces`
--

CREATE TABLE `currinces` (
  `cur_id` int(11) NOT NULL,
  `cur_name` varchar(200) NOT NULL,
  `cur_shortname` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `currinces`
--

INSERT INTO `currinces` (`cur_id`, `cur_name`, `cur_shortname`) VALUES
(1, 'Dollar', 'USD'),
(2, 'EURO', 'EUR'),
(3, 'Saudi Ryal', 'SAR');

-- --------------------------------------------------------

--
-- Table structure for table `cur_exchange_rate`
--

CREATE TABLE `cur_exchange_rate` (
  `ex_id` int(11) NOT NULL,
  `cur_id` int(11) NOT NULL,
  `cur_buy` float NOT NULL,
  `cur_sell` float NOT NULL,
  `ex_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cur_exchange_rate`
--

INSERT INTO `cur_exchange_rate` (`ex_id`, `cur_id`, `cur_buy`, `cur_sell`, `ex_date`) VALUES
(1, 1, 600, 610, '2020-09-09'),
(2, 2, 720, 730, '2020-09-09'),
(3, 1, 750, 770, '2020-09-08'),
(4, 2, 800, 860, '2020-09-05'),
(5, 2, 200, 122, '0000-00-00'),
(6, 1, 11, 12, '2020-09-26'),
(7, 1, 11, 12, '2020-09-26'),
(8, 1, 132, 1232, '2020-09-26'),
(10, 1, 213, 22, '2020-09-19'),
(11, 1, 213, 22, '2020-09-19'),
(12, 1, 213, 22, '2020-09-19'),
(13, 1, 213, 2442, '2020-09-19'),
(14, 1, 213, 2442, '2020-09-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currinces`
--
ALTER TABLE `currinces`
  ADD PRIMARY KEY (`cur_id`);

--
-- Indexes for table `cur_exchange_rate`
--
ALTER TABLE `cur_exchange_rate`
  ADD PRIMARY KEY (`ex_id`),
  ADD KEY `cur_id` (`cur_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `currinces`
--
ALTER TABLE `currinces`
  MODIFY `cur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cur_exchange_rate`
--
ALTER TABLE `cur_exchange_rate`
  MODIFY `ex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cur_exchange_rate`
--
ALTER TABLE `cur_exchange_rate`
  ADD CONSTRAINT `cur_exchange_rate_ibfk_1` FOREIGN KEY (`cur_id`) REFERENCES `currinces` (`cur_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
