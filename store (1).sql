-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 03:19 PM
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
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` varchar(30) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `zip_id` varchar(20) DEFAULT NULL,
  `street` varchar(20) DEFAULT NULL,
  `order_id` varchar(30) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_id` varchar(30) NOT NULL,
  `is_active` binary(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `address`, `country`, `city`, `zip_id`, `street`, `order_id`, `user_name`, `user_id`, `is_active`) VALUES
('39a93ec2-6ba4-4a28-a367-acdf39', NULL, 'United', 'California', 'dasdsad', 'sdsad', '', 'name', '2f0a6093-e60d-44a7-9b5b-72976f', 0x31),
('3be0cd0c-6ab7-4acd-a9f5-a765cb', NULL, '0', '', '', '', '', 'name', '2f0a6093-e60d-44a7-9b5b-72976f', 0x31),
('407d2748-a263-4d00-8f3c-fca3e1', NULL, 'United', 'California', 'dasdsad', 'sdsad', '', 'name', '2f0a6093-e60d-44a7-9b5b-72976f', 0x31),
('7b44d92d-1166-11eb-9632-f81654', '22may', 'yemen', 'sanaa', '00967', 'alasbahy', '', 'noof', '4e8f4455-1163-11eb-9632-f81654', 0x31),
('8e587ab7-76a1-4bc4-8ed7-c08e99', NULL, '0', '', '', '', '', 'name', '2f0a6093-e60d-44a7-9b5b-72976f', 0x31),
('b0355ec3-3b7a-43d8-9de5-d9f7cd', NULL, '0', '', '', '', '', 'name', '2f0a6093-e60d-44a7-9b5b-72976f', 0x31),
('b2b92054-88da-45dd-bd20-c7b506', NULL, '0', '', '', '', '', 'name', '2f0a6093-e60d-44a7-9b5b-72976f', 0x31),
('d835cd3e-35b7-4d5b-bf7f-232063', NULL, '0', '', '', '', '', 'name', '2f0a6093-e60d-44a7-9b5b-72976f', 0x31),
('eb4509dc-ad69-429f-9185-b0c954', NULL, '0', '', '', '', '', 'name', '2f0a6093-e60d-44a7-9b5b-72976f', 0x31),
('f8c247fc-85a3-4b0d-9141-24b6be', NULL, '0', '', '', '', '', 'name', '2f0a6093-e60d-44a7-9b5b-72976f', 0x31),
('faefd9fe-c708-4a0e-94b7-96b1fb', NULL, '0', '', '', '', '', 'name', '2f0a6093-e60d-44a7-9b5b-72976f', 0x31);

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `adver_id` varchar(30) NOT NULL,
  `adver_name` varchar(50) DEFAULT NULL,
  `offer_id` varchar(30) NOT NULL,
  `adver_img` varchar(255) DEFAULT NULL,
  `adver_details` text DEFAULT NULL,
  `adver_namber` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` varchar(30) NOT NULL,
  `bank_name` varchar(50) DEFAULT NULL,
  `bank_imgs` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `bank_name`, `bank_imgs`) VALUES
('83445de3-1168-11eb-9632-f81654', 'ALkuraimi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `bank_detail_id` varchar(30) NOT NULL,
  `bank_acount` varchar(255) DEFAULT NULL,
  `bank_moeny` decimal(20,0) DEFAULT NULL,
  `status` binary(1) DEFAULT '1',
  `Exp_date` datetime DEFAULT NULL,
  `full_name` varchar(50) NOT NULL,
  `user_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`bank_detail_id`, `bank_acount`, `bank_moeny`, `status`, `Exp_date`, `full_name`, `user_id`) VALUES
('eqweqw-wqewq-2121we', '123123123', NULL, 0x01, '2020-11-10 00:00:00', 'ewqe eqweqwe', '4e8f4455-1163-11eb-9632-f81654'),
('rwrwehgh-gdgfgd', '54353454543', NULL, 0x01, '2021-01-20 00:00:00', 'utyuty uytu', '4e8f4455-1163-11eb-9632-f81654');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` varchar(30) NOT NULL,
  `total_price` decimal(10,2) DEFAULT NULL COMMENT 'السعر الكلي لكل المنتجات بالسله',
  `quentity` int(12) DEFAULT NULL COMMENT 'الكمية',
  `type` int(1) DEFAULT 1,
  `user_id` varchar(30) NOT NULL,
  `pro_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `total_price`, `quentity`, `type`, `user_id`, `pro_id`) VALUES
('106ec8a5-08cd-4f03-9847-d72876', '1299.62', 1, 2, '2f0a6093-e60d-44a7-9b5b-72976f', 'uuid(1)'),
('1d3eaf1e-eccd-4042-9f5a-70fed4', '2599.24', 2, 1, '2f0a6093-e60d-44a7-9b5b-72976f', 'uuid(1)'),
('241ca5c8-9929-41bb-9208-8c7af4', '1574.94', 2, 3, '2f0a6093-e60d-44a7-9b5b-72976f', 'uuid(6)'),
('29f18d7c-127c-4de7-bd54-11f7bd', '1630.00', 2, 3, '2f0a6093-e60d-44a7-9b5b-72976f', 'uuid(2)'),
('358f1ff6-60d1-414a-b77a-06d901', '787.47', 1, 2, '2f0a6093-e60d-44a7-9b5b-72976f', 'uuid(6)'),
('8b30f4be-7e3c-41bc-85c0-68e59d', '3898.86', 3, 3, '2f0a6093-e60d-44a7-9b5b-72976f', 'uuid(1)'),
('9b74c5ff-80a3-4969-b507-995c1a', '1648.80', 3, 1, '2f0a6093-e60d-44a7-9b5b-72976f', 'eqweq23123dasdad'),
('ab78e5b7-1952-475c-b8d3-9fff01', '787.47', 1, 1, '2f0a6093-e60d-44a7-9b5b-72976f', 'uuid(6)'),
('b3079538-63fe-4d29-9232-98254f', '1596.98', 2, 3, '2f0a6093-e60d-44a7-9b5b-72976f', 'uuid(3)'),
('bef8de64-795f-422b-8cfc-22b429', '815.00', 1, 2, '2f0a6093-e60d-44a7-9b5b-72976f', 'uuid(2)'),
('fca8fcaa-f320-48fb-874f-74912c', '4757.82', 6, 1, '2f0a6093-e60d-44a7-9b5b-72976f', 'uuid(4)');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `cart_details_id` varchar(30) NOT NULL,
  `total_price` decimal(10,2) DEFAULT NULL COMMENT 'السعر الكلي لكل منتج بالسله',
  `Quantity` int(11) DEFAULT NULL COMMENT 'الكمية',
  `pro_id` varchar(30) DEFAULT NULL COMMENT 'رقم المنتج',
  `cart_id` varchar(30) NOT NULL COMMENT 'رقم السلة'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` varchar(30) NOT NULL,
  `cat_name` varchar(40) DEFAULT NULL,
  `parent` varchar(30) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `is_active` binary(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `parent`, `create_date`, `is_active`) VALUES
('0ad3e0fb-5711-4a47-8562-6b4da2', 'this is for test2', '2', '2020-10-21 23:56:54', 0x6f),
('1', 'Labtops', '0', '2020-10-04 00:17:21', 0x31),
('1396aa41-b3aa-4c64-8e9e-29227f', 'this is for test', '3', '2020-10-22 08:26:28', 0x6f),
('17f640b0-3626-437c-85ab-a6e851', 'this is for test', '0', '2020-10-22 09:06:04', 0x6f),
('1de0176f-b84e-4d8e-8731-fa0909', 'this is for test', '0', '2020-10-22 09:31:53', 0x6f),
('2', 'Mobiles', '0', '2020-10-19 00:17:21', 0x31),
('20d0a57b-3ff4-49d6-bc92-233f9f', 'this is for test5', '0', '2020-10-22 08:45:21', 0x6f),
('3', 'Accessories', '0', '2020-10-18 00:00:00', 0x31),
('42ae0a78-72c6-47df-840c-09de67', 'this is for test', '0', '2020-10-22 09:04:02', 0x6f),
('56f44f64-94c5-4384-9e6e-e0dd59', 'this is for test2', '2', '2020-10-21 23:58:24', 0x6f),
('97498ca5-cd2f-4e54-9b8d-ee016c', 'this is for test', '1', '2020-10-21 23:55:23', 0x6f),
('acfa5c9c-d9a2-4e49-b9bb-29d2e2', 'this is for test3', '0', '2020-10-22 09:06:24', 0x6f),
('bd108cf7-c8c2-426a-9b2b-1e3fed', 'this is for test', '1', '2020-10-21 23:52:13', 0x6f),
('c6ee98cc-1e6b-47e2-ac32-7a1718', 'this is for test2', '0', '2020-10-22 08:41:24', 0x6f),
('ea9578fb-f9a0-43a6-a0f1-285688', 'this is for test5', '0', '2020-10-22 09:02:32', 0x6f);

-- --------------------------------------------------------

--
-- Table structure for table `dicount`
--

CREATE TABLE `dicount` (
  `discount_id` varchar(30) NOT NULL,
  `dicount_amont` decimal(11,0) DEFAULT NULL,
  `offer_id` varchar(30) NOT NULL,
  `pro_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `extra_item`
--

CREATE TABLE `extra_item` (
  `id` varchar(30) NOT NULL,
  `extra_item_id` int(11) DEFAULT NULL,
  `qunetity` int(11) DEFAULT NULL,
  `offer_id` varchar(30) NOT NULL,
  `pro_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `offer_id` varchar(30) NOT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `is_active` varchar(255) DEFAULT NULL,
  `type_id` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `offer_item_out`
--

CREATE TABLE `offer_item_out` (
  `id` varchar(30) NOT NULL,
  `description` int(11) DEFAULT NULL,
  `offer_id` varchar(30) NOT NULL,
  `pro_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `offer_type`
--

CREATE TABLE `offer_type` (
  `type_id` varchar(30) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `is_active` binary(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` varchar(40) NOT NULL,
  `total_price` decimal(10,2) DEFAULT NULL COMMENT 'السعر الكلي للفاتورة ',
  `start_date` datetime DEFAULT NULL COMMENT 'تاريخ بدء  الطلب ',
  `deliver_date` datetime DEFAULT NULL COMMENT 'متى تم توصيل الطلب ',
  `end_date` datetime DEFAULT NULL COMMENT 'التاريخ النهائي لتسليم الطلب ',
  `order_status` binary(1) DEFAULT '1' COMMENT 'حاله الطلب هل تم الاستلام او لا',
  `payment_id` varchar(40) NOT NULL,
  `address_id` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `total_price`, `start_date`, `deliver_date`, `end_date`, `order_status`, `payment_id`, `address_id`) VALUES
('0a89e9a2-a1c2-44c6-a58f-acc7647fd218', '490.09', '2020-11-05 13:06:51', NULL, NULL, 0x32, '7c46f28d-f41d-42fb-b691-9f2c56', '407d2748-a263-4d00-8f3c-fca3e1'),
('132aae82-f8b0-45f7-b337-24e809315432', '1556.25', '2020-11-05 12:59:54', NULL, NULL, 0x31, '', ''),
('2aa29a04-371c-437d-9915-3b80a18b0646', NULL, '2020-11-05 04:05:58', NULL, NULL, 0x31, '', ''),
('2cf6ce38-7673-4953-93a6-cd9b916922ad', '1039.69', '2020-11-05 13:31:30', NULL, NULL, 0x31, '', ''),
('2f0317f7-f135-46e5-97a9-f19aaeee9d5d', '55654.00', '2020-11-05 02:49:31', NULL, NULL, 0x31, '10ace36d-90a0-4b71-b141-e47f12', '407d2748-a263-4d00-8f3c-fca3e1'),
('4a68c838-b4de-4606-b002-0cb57629e0d2', NULL, '2020-11-05 03:59:21', NULL, NULL, 0x31, '', ''),
('515db61e-482e-4b79-8343-d2b007d7a4de', NULL, '2020-11-05 03:56:53', NULL, NULL, 0x31, '', ''),
('61a01597-3c19-4816-a6af-193e31e30bda', '1039.69', '2020-11-05 20:57:01', NULL, NULL, 0x31, '5272fa9b-51b3-40ab-a356-0a1b28', '39a93ec2-6ba4-4a28-a367-acdf39'),
('66ff230e-5f9f-4ed9-98b3-7f2aaf759e9c', '55654.00', '2020-11-05 01:50:18', NULL, NULL, 0x31, '10ace36d-90a0-4b71-b141-e47f1224ff09', '507721b0-adf7-4c0b-bd96-2134683ed163'),
('75aeea8b-3ad6-48f8-8b46-57f116580511', '490.09', '2020-11-05 13:38:46', NULL, NULL, 0x32, '477c9dd2-b9a5-4325-90d1-8ff7586f40e6', '407d2748-a263-4d00-8f3c-fca3e1'),
('7b5b3b2c-6266-46ee-ab02-c3bf1fa319a3', NULL, '2020-11-05 04:04:59', NULL, NULL, 0x31, '', ''),
('7e54f2fd-385c-4493-b0fc-9026aee852bf', NULL, '2020-11-05 03:53:40', NULL, NULL, 0x31, '', ''),
('871c696b-c81f-4d53-a6a9-271befd86f36', '3310.71', '2020-11-05 12:58:30', NULL, NULL, 0x31, '', ''),
('95140764-6491-497f-8d8c-3b8ae98ba603', '490.09', '2020-11-05 04:07:20', NULL, NULL, 0x31, '', ''),
('a628ed14-cb46-42db-bab9-8c4f2b15bf6a', '980.18', '2020-11-05 13:22:23', NULL, NULL, 0x31, '', ''),
('caf7b0ed-0f2f-42bc-9f26-3a805a6de1a8', NULL, '2020-11-05 03:52:59', NULL, NULL, 0x31, '', ''),
('d8b2c1be-2f2e-4655-9d7f-a6192cee9789', '490.09', '2020-11-05 04:10:48', NULL, NULL, 0x31, '19eca6e1-25dd-44e0-89b6-8528c4', '39a93ec2-6ba4-4a28-a367-acdf39'),
('df0ee678-46f2-4de7-83fa-2fb6d9b523d3', NULL, '2020-11-05 03:55:28', NULL, NULL, 0x31, '', ''),
('e0a106ec-f07b-4d5c-f3e8-e89ce0', '55654.00', '2020-11-05 01:44:05', NULL, NULL, 0x31, '', ''),
('ff6759a2-5d74-40db-bf56-6eeb4530b416', '2047.44', '2020-11-05 08:34:51', NULL, NULL, 0x32, '3d757b37-d18b-408c-80c3-6be2c7', '39a93ec2-6ba4-4a28-a367-acdf39');

-- --------------------------------------------------------

--
-- Table structure for table `oreder_details`
--

CREATE TABLE `oreder_details` (
  `details_id` varchar(40) NOT NULL,
  `pro_id` varchar(30) NOT NULL COMMENT 'رقم المنتج',
  `quentity` int(11) DEFAULT NULL COMMENT 'الكمية من المنتج',
  `total_price` decimal(10,2) DEFAULT NULL COMMENT 'السعر الكلي للمنتج الواحد ',
  `order_id` varchar(40) NOT NULL COMMENT 'رقم الطلب '
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oreder_details`
--

INSERT INTO `oreder_details` (`details_id`, `pro_id`, `quentity`, `total_price`, `order_id`) VALUES
('071f20eb-717a-4307-af6d-a9f22ad508e4', 'uuid(18)', 1, '490.09', '7b5b3b2c-6266-46ee-ab02-c3bf1fa319a3'),
('17d99e17-3ffd-4c72-8570-40375e3deed3', 'uuid(18)', 1, '490.09', 'ff6759a2-5d74-40db-bf56-6eeb4530b416'),
('25b18a2f-25f2-4872-a580-53fa12cb1abd', 'eqweq23123dasdad', 1, '549.60', '132aae82-f8b0-45f7-b337-24e809315432'),
('26c65681-148d-481b-b5b9-84b84d5fc098', 'eqweq23123dasdad', 1, '549.60', '2aa29a04-371c-437d-9915-3b80a18b0646'),
('2ac25a00-f1ac-4303-bbbf-75aab0753b52', 'uuid(18)', 1, '490.09', '75aeea8b-3ad6-48f8-8b46-57f116580511'),
('2b8f8373-1180-4f56-cffb-2ab254', 'eqweq23123dasdad', 1, '549.60', 'e0a106ec-f07b-4d5c-f3e8-e89ce0'),
('30f3ab49-bfb2-45c6-8c59-3834862c4734', 'uuid(18)', 1, '490.09', '2cf6ce38-7673-4953-93a6-cd9b916922ad'),
('364f9271-72be-4172-af7b-fccf5e36a99e', 'uuid(18)', 1, '490.09', '2f0317f7-f135-46e5-97a9-f19aaeee9d5d'),
('3e9eb0ec-b368-46c3-43b5-e3f6d3', 'uuid(15)', 1, '351.35', 'e0a106ec-f07b-4d5c-f3e8-e89ce0'),
('3f16b158-9e7e-4793-851d-595681b251c3', 'uuid(17)', 1, '516.56', 'ff6759a2-5d74-40db-bf56-6eeb4530b416'),
('442ff222-5266-4a36-a18e-74981066fe89', 'uuid(18)', 1, '490.09', 'd8b2c1be-2f2e-4655-9d7f-a6192cee9789'),
('4e7f8672-5846-4b69-8174-3488437de559', 'uuid(17)', 1, '516.56', '2f0317f7-f135-46e5-97a9-f19aaeee9d5d'),
('5815fe96-9b57-44c4-9c8a-db91f903100b', 'eqweq23123dasdad', 1, '549.60', '871c696b-c81f-4d53-a6a9-271befd86f36'),
('5afbfde2-f62d-4667-974f-a314fcaece3f', 'uuid(18)', 2, '980.18', 'a628ed14-cb46-42db-bab9-8c4f2b15bf6a'),
('5e669701-d5c8-47ee-b17d-e021d107957a', 'uuid(18)', 1, '490.09', '66ff230e-5f9f-4ed9-98b3-7f2aaf759e9c'),
('67cc92b2-c2aa-4046-b8ce-26a43b7c34c4', 'uuid(18)', 1, '490.09', '61a01597-3c19-4816-a6af-193e31e30bda'),
('6b4834d1-7942-4daa-98c6-8d4d69967d3f', 'eqweq23123dasdad', 1, '549.60', '2cf6ce38-7673-4953-93a6-cd9b916922ad'),
('6faa8732-314a-491d-9da6-6ec0923c9cfe', 'eqweq23123dasdad', 1, '549.60', 'df0ee678-46f2-4de7-83fa-2fb6d9b523d3'),
('723c47e9-c164-47a2-86da-989273f87591', 'uuid(16)', 1, '491.19', 'ff6759a2-5d74-40db-bf56-6eeb4530b416'),
('7dc01646-2d2f-4707-916f-bef34ca43c62', 'eqweq23123dasdad', 1, '549.60', '66ff230e-5f9f-4ed9-98b3-7f2aaf759e9c'),
('86449668-5fff-47cf-85dc-022161894aa2', 'eqweq23123dasdad', 1, '549.60', 'caf7b0ed-0f2f-42bc-9f26-3a805a6de1a8'),
('924456c7-b034-4084-cadd-9f01f8', 'uuid(18)', 1, '490.09', 'e0a106ec-f07b-4d5c-f3e8-e89ce0'),
('9a504e68-cae1-4137-9d63-68e797cada66', 'uuid(17)', 1, '516.56', '132aae82-f8b0-45f7-b337-24e809315432'),
('9d0b49d4-c2b1-4dc9-817d-065f4f08c318', 'uuid(18)', 1, '490.09', '132aae82-f8b0-45f7-b337-24e809315432'),
('a33e5f8a-a89f-4957-955a-a72b9cf06ef0', 'eqweq23123dasdad', 2, '1099.20', '4a68c838-b4de-4606-b002-0cb57629e0d2'),
('a4c62012-cb75-41b1-bc42-bab142910626', 'eqweq23123dasdad', 3, '1648.80', '515db61e-482e-4b79-8343-d2b007d7a4de'),
('ad4d4880-5b63-4483-ab5d-5aff0d4351e7', 'eqweq23123dasdad', 1, '549.60', '7b5b3b2c-6266-46ee-ab02-c3bf1fa319a3'),
('c166d7c0-ac82-4344-a24d-3e2e9fc5aca6', 'uuid(16)', 1, '491.19', '871c696b-c81f-4d53-a6a9-271befd86f36'),
('c2c78c6a-66d4-4827-ac9a-dd6a4cb742d6', 'uuid(15)', 1, '351.35', '66ff230e-5f9f-4ed9-98b3-7f2aaf759e9c'),
('cc857dd1-8e84-4f50-b1ce-c541ae4b9b0e', 'uuid(18)', 1, '490.09', '95140764-6491-497f-8d8c-3b8ae98ba603'),
('d5f4a260-fa8b-428b-8462-f4408e9ab7e3', 'uuid(19)', 1, '1263.27', '871c696b-c81f-4d53-a6a9-271befd86f36'),
('d85908de-eff9-4e0a-8bd3-17be676984f6', 'eqweq23123dasdad', 1, '549.60', 'ff6759a2-5d74-40db-bf56-6eeb4530b416'),
('db18b0bc-9766-49e7-a166-b3ff22f8b2cb', 'uuid(18)', 1, '490.09', '0a89e9a2-a1c2-44c6-a58f-acc7647fd218'),
('dccc6977-b011-4f9e-b206-818cc558a760', 'uuid(17)', 1, '516.56', '871c696b-c81f-4d53-a6a9-271befd86f36'),
('e1dc6c0d-6ea2-480b-8357-07024ccf8de9', 'uuid(18)', 1, '490.09', '871c696b-c81f-4d53-a6a9-271befd86f36'),
('e5305c1d-653d-4671-8e9b-b7ec2cc02896', 'eqweq23123dasdad', 1, '549.60', '7e54f2fd-385c-4493-b0fc-9026aee852bf'),
('ee7d0abd-5756-4fda-8611-dd7299cf513d', 'eqweq23123dasdad', 1, '549.60', '2f0317f7-f135-46e5-97a9-f19aaeee9d5d'),
('f518a02e-7b6b-4abe-849a-5b2e7e112e9f', 'uuid(18)', 1, '490.09', 'df0ee678-46f2-4de7-83fa-2fb6d9b523d3'),
('ff613377-d995-471b-bb77-8e9288b0019a', 'eqweq23123dasdad', 1, '549.60', '61a01597-3c19-4816-a6af-193e31e30bda');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` varchar(40) NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `userbank_id` varchar(30) NOT NULL,
  `bank_id` varchar(30) NOT NULL,
  `ex_date` datetime DEFAULT NULL,
  `user_id` varchar(30) NOT NULL,
  `is_admin` binary(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `full_name`, `userbank_id`, `bank_id`, `ex_date`, `user_id`, `is_admin`) VALUES
('04333639-3388-4898-add8-cd6799', 'Dunia Muhammed', '12121212', '', '2021-06-01 00:00:00', '2f0a6093-e60d-44a7-9b5b-72976f', 0x30),
('24470777-1169-11eb-9632-f81654', 'noof senan', '21212121', '83445de3-1168-11eb-9632-f81654', '2022-10-01 21:04:38', '', 0x31),
('2593579b-b320-43bf-b42a-2e0e2b', 'Dunia Muhammed', '12121212', '', '2021-06-01 00:00:00', '2f0a6093-e60d-44a7-9b5b-72976f', 0x30),
('28e08bcb-2143-4d5d-b593-ccaaa8', 'Dunia Muhammed', '12121212', '', '2021-06-01 00:00:00', '2f0a6093-e60d-44a7-9b5b-72976f', 0x30),
('296d73d2-b8b1-4725-a9d2-1ceca4', 'Dunia Muhammed', '12121212', '', '2021-06-01 00:00:00', '2f0a6093-e60d-44a7-9b5b-72976f', 0x30),
('39bcf79a-2c4a-428f-ae45-9ae756a96ea6', 'Dunia Muhammed', '12121212', '', '2021-06-01 00:00:00', '2f0a6093-e60d-44a7-9b5b-72976f', 0x30),
('3d757b37-d18b-408c-80c3-6be2c7', 'Dunia Muhammed', '12121212', '', '2021-06-01 00:00:00', '2f0a6093-e60d-44a7-9b5b-72976f', 0x30),
('477c9dd2-b9a5-4325-90d1-8ff7586f40e6', 'Dunia Muhammed', '12121212', '', '2021-06-01 00:00:00', '2f0a6093-e60d-44a7-9b5b-72976f', 0x30),
('5272fa9b-51b3-40ab-a356-0a1b28', 'Dunia Muhammed', '12121212', '', '2021-06-01 00:00:00', '2f0a6093-e60d-44a7-9b5b-72976f', 0x30),
('6171be53-3576-4650-b475-d4e677', 'Dunia Muhammed', '12121212', '', '2021-06-01 00:00:00', '2f0a6093-e60d-44a7-9b5b-72976f', 0x30),
('7c46f28d-f41d-42fb-b691-9f2c56', 'Dunia Muhammed', '12121212', '', '2021-06-01 00:00:00', '2f0a6093-e60d-44a7-9b5b-72976f', 0x30),
('7d039c31-47ef-4296-a335-f44033', 'Dunia Muhammed', '12121212', '', '2021-06-01 00:00:00', '2f0a6093-e60d-44a7-9b5b-72976f', 0x30),
('9ace1063-6cf6-485f-969d-6ffa99', 'Dunia Muhammed', '12121212', '', '2021-06-01 00:00:00', '2f0a6093-e60d-44a7-9b5b-72976f', 0x30),
('c6764189-7826-4a5b-a644-f01cbe', 'Dunia Muhammed', '12121212', '', '2021-06-01 00:00:00', '2f0a6093-e60d-44a7-9b5b-72976f', 0x30),
('d79428aa-c58a-44d8-b744-06b3d9', 'Dunia Muhammed', '12121212', '', '2021-06-01 00:00:00', '2f0a6093-e60d-44a7-9b5b-72976f', 0x30),
('db876e26-930e-45c0-be67-197530', 'Dunia Muhammed', '12121212', '', '2021-06-01 00:00:00', '2f0a6093-e60d-44a7-9b5b-72976f', 0x30),
('df83226f-10aa-4661-bb6c-e47fbe', 'Dunia Muhammed', '12121212', '', '2021-06-01 00:00:00', '2f0a6093-e60d-44a7-9b5b-72976f', 0x30),
('eb392276-d3ea-4c07-82d1-e763a4', 'Dunia Muhammed', '12121212', '', '2021-06-01 00:00:00', '2f0a6093-e60d-44a7-9b5b-72976f', 0x30),
('ecea7ba8-9b19-45b6-b52e-97d934', 'Dunia Muhammed', '12121212', '', '2021-06-01 00:00:00', '2f0a6093-e60d-44a7-9b5b-72976f', 0x30);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` varchar(30) NOT NULL,
  `pro_name` varchar(255) DEFAULT NULL,
  `pro_price` decimal(10,2) DEFAULT 0.00,
  `pro_quentity` int(11) DEFAULT 0,
  `pro_details` text DEFAULT NULL,
  `main_img` varchar(255) DEFAULT NULL,
  `pro_imgs` text DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `is_active` binary(1) DEFAULT '1',
  `cat_id` varchar(30) NOT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `Sku` varchar(50) DEFAULT NULL,
  `defualt` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_price`, `pro_quentity`, `pro_details`, `main_img`, `pro_imgs`, `create_date`, `is_active`, `cat_id`, `brand`, `Sku`, `defualt`) VALUES
('', 'HP 250 G7', '826.02', 10, 'ntel Core i7 8565U Processor\r\n15.6 Inch 1366 x 768 Screen\r\n8GB RAM\r\n256GB SSD\r\n1 year warranty', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x01, '1', 'hp', '', 0),
('5f38a084-1ed1-4031-a9d2-2cd7c0', '', '0.00', 0, '', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-21 23:44:21', 0x31, '', '', NULL, NULL),
('eqweq23123dasdad', 'Samsung Galaxy S10e Prism Black', '549.60', 10, 'Android 9.0 Pie Operating System\r\n5.8 Inch Screen size\r\n128GB Storage\r\nDual 12 and 16 Megapixel Rear camera\r\nNew', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x31, '2', 'Samsung', '', 0),
('uuid()', 'Refurbished HP 840 G4 ', '704.86', 10, 'Intel Core i7 7600U Processor\r\n14 Inch Full HD Screen\r\n8GB RAM\r\n512GB SSD\r\n1 year warranty', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x01, '1', 'hp', '', 0),
('uuid(0)', 'HP EliteBook 840 G6', '1232.44', 10, 'Intel Core i7 8565U Processor\r\n14 Inch Full HD Screen\r\n8GB RAM\r\n256GB SSD\r\n3 year warranty', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x01, '1', 'hp', '', 0),
('uuid(1)', 'HP Pavilion', '1299.62', 10, 'Intel Core i7 10750H Processor\r\n17.3 Inch Full HD 144Hz Screen\r\nGeForce GTX 1660 Ti 6GB Graphics card\r\n8GB RAM\r\n1TB Hard Drive + 512GB SSDy', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x31, '1', 'hp', '', 0),
('uuid(10)', 'Lenovo ThinkPad L13 Yoga ', '1154.23', 10, 'Intel Core i7 10510U Processor\r\n13.3 Inch Full HD Screen\r\n16GB RAM\r\n512GB SSD\r\n1 year warranty', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x31, '1', 'Lenovo', '', 0),
('uuid(11)', 'Lenovo Legion 5 15IMH05H', '1443.90', 10, 'Intel Core i7 10750H Processor\r\n15.6 Inch Full HD 144Hz Screen\r\nGeForce RTX 2060 6GB Graphics card\r\n16GB RAM\r\n512GB SSDy', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x31, '1', 'Lenovo', '', 0),
('uuid(15)', '\r\nSamsung Galaxy S8 Orchid Grey', '351.35', 10, 'Android 7.0 Nougat Operating System\r\n5.8 Inch Screen size\r\n64GB Storage\r\n12 Megapixel Rear camera\r\nNew', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x31, '2', 'Samsung', '', 0),
('uuid(16)', 'Apple iPhone SE 2020 Black', '491.19', 10, 'iOS 13 Operating System\r\n4.7 Inch Screen size\r\n128GB Storage\r\n12 Megapixel Rear camera\r\nNew', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x31, '2', 'Apple', '', 0),
('uuid(17)', 'Apple iPhone SE 2020 Red', '516.56', 10, 'iOS 13 Operating System\r\n4.7 Inch Screen size\r\n128GB Storage\r\n12 Megapixel Rear camera\r\nNew', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x31, '2', 'Apple', '', 0),
('uuid(18)', 'Apple iPhone SE 2020 White ', '490.09', 10, 'iOS 13 Operating System\r\n4.7 Inch Screen size\r\n128GB Storage\r\n12 Megapixel Rear camera\r\nNewy', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x31, '2', 'Apple', '', 0),
('uuid(19)', 'Apple iPhone 11 Pro Max Space Grey ', '1263.27', 10, 'iOS 13 Operating System\r\n6.5 Inch Screen size\r\n256GB Storage\r\nTriple 12 Megapixel Rear camera\r\nNew', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x31, '2', 'Apple', '', 0),
('uuid(2)', 'Refurbished HP Pavilion', '815.00', 10, 'Intel Core i7 1065G7 Processor\r\n14 Inch Full HD Screen\r\nINTEL IRIS PLUS G7 GRAPHICS Graphics card\r\n8GB RAM\r\n512GB SSD', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x31, '1', 'hp', '', 0),
('uuid(20)', 'Apple iPhone 11 Pro Max Midnight Green', '1266.13', 10, 'iOS 13 Operating System\r\n6.5 Inch Screen size\r\n256GB Storage\r\nTriple 12 Megapixel Rear camera\r\nNew', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x31, '2', 'Apple', '', 0),
('uuid(21)', 'Samsung Bar Plus 256GB USB', '36.31', 10, 'nterface - USB 3.1\r\nBrand - Samsung\r\nCapacity - 256GB', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x31, '3', 'Samsung', '', 0),
('uuid(22)', 'Kensington Foam Mouse Pad - Black ', '14.29', 10, 'Kensington\r\nSize - Small', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x31, '3', 'Kensington', '', 0),
('uuid(23)', 'Toshiba Canvio Basics 500GB Ext HDD Blk', '44.02', 10, 'Form Factor - 2.5in\r\n2 year warranty', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x31, '3', 'Toshiba', '', 0),
('uuid(3)', 'HP 250 G7', '798.49', 10, 'Intel Core i5 1035G1 Processor\r\n15.6 Inch 1366 x 768 Screen\r\n8GB RAM\r\n256GB SSD\r\n1 year warranty', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x31, '1', 'hp', '', 0),
('uuid(4)', 'HP ProBook 430 G7', '792.97', 10, 'Intel Core i5 10210U Processor\r\n13.3 Inch Full HD Screen\r\n8GB RAM\r\n256GB SSD\r\n1 year warranty', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x31, '1', 'hp', '', 0),
('uuid(6)', 'HP 250 G7', '787.47', 10, 'Intel Core i5 8265U Processor\r\n15.6 Inch 1366 x 768 Screen\r\n8GB RAM\r\n256GB SSD\r\n1 year warranty', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x31, '1', 'hp', '', 0),
('uuid(7)', 'Lenovo ThinkBook 15', '1024.27', 10, 'Intel Core i7 1065G7 Processor\r\n15.6 Inch Full HD Screen\r\n16GB RAM\r\n512GB SSD\r\n1 year warranty', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x31, '1', 'Lenovo', '', 0),
('uuid(8)', '\r\nLenovo V15 ', '791.98', 10, 'Intel Core i7 1065G7 Processor\r\n15.6 Inch Full HD Screen\r\n8GB RAM\r\n256GB SSD\r\n1 year warranty', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x31, '1', 'Lenovo', '', 0),
('uuid(9)', '\r\nLenovo ThinkPad E15', '1013.25', 10, 'Intel Core i7 10510U Processor\r\n14 Inch Full HD Screen\r\n16GB RAM\r\n512GB SSD\r\n1 year warranty', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '/ElectronicEcommerce/app/assets/images/3782994ce1439acd80b753ade7e7df57e64019e9753901218VT38EA_1_Classic.jpg', '2020-10-18 00:00:00', 0x31, '1', 'Lenovo', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `store_info`
--

CREATE TABLE `store_info` (
  `store_name` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `tweeter` varchar(255) DEFAULT NULL,
  `insatgram` varchar(255) DEFAULT NULL,
  `who_we_are` text DEFAULT NULL,
  `privacy_and_policy` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tag_id` varchar(30) NOT NULL,
  `tag_name` varchar(50) DEFAULT NULL,
  `tag_type` int(1) DEFAULT 1,
  `tag_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tag_id`, `tag_name`, `tag_type`, `tag_data`) VALUES
('123', 'color', 1, 'blue,yellow,red');

-- --------------------------------------------------------

--
-- Table structure for table `tag_details`
--

CREATE TABLE `tag_details` (
  `tag_details_id` varchar(30) NOT NULL,
  `tag_name` varchar(50) DEFAULT NULL,
  `pro_id` varchar(30) NOT NULL,
  `is_active` int(2) DEFAULT 1,
  `tag_data` varchar(255) DEFAULT NULL,
  `tag_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tag_details`
--

INSERT INTO `tag_details` (`tag_details_id`, `tag_name`, `pro_id`, `is_active`, `tag_data`, `tag_id`) VALUES
('1212', 'color', 'eqweq23123dasdad', 1, 'blue', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(30) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_role` int(2) DEFAULT 1,
  `create_date` datetime DEFAULT NULL,
  `is_active` binary(1) DEFAULT '1',
  `user_img` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `first_name`, `user_password`, `user_email`, `user_role`, `create_date`, `is_active`, `user_img`, `last_name`) VALUES
('23d23f6d-ac1a-45e9-aaa9-69e5c3', 'thenme', 'Then', 'e4d8518c6a2b43ba2976942d19b064b4', 'thenme96@gmail.com', 3, '2020-10-23 04:23:15', 0x31, NULL, 'Me'),
('2f0a6093-e60d-44a7-9b5b-72976f', 'thenme', 'dd', '83fc0f4334038af1117c8379a63610b1', 'aa@sdf.dfds', 3, '2020-10-23 04:13:46', 0x31, NULL, 'sda'),
('4e8f4455-1163-11eb-9632-f81654', 'nofa', 'noof', '440n330a', 'alahoed0@gmail.com', 1, '0000-00-00 00:00:00', 0x31, NULL, 'senan'),
('776bc130-d6f1-4cbb-a812-4802f5', 'thenme', 'Then', '0211ef5da46eeaf713c1b5123623987c', 'thenme96@gmail.com', 2, '2020-11-06 15:08:09', 0x31, NULL, 'Me'),
('9cbcb63a-703e-4d9e-ab42-b8d53a', 'thenme', 'ss', '83fc0f4334038af1117c8379a63610b1', 'sas@dasd.sad', 3, '2020-10-23 04:15:46', 0x31, NULL, 'ss'),
('dd538206-6a16-4f3d-9730-ee358f', 'thenme', 'dfds', '83fc0f4334038af1117c8379a63610b1', 'sdfd@ffdg.ffgfd', 0, '2020-10-23 04:11:40', 0x31, NULL, 'dsfdsf'),
('eba58a30-9d4a-4be5-a459-c5fe55', 'thenme', 'dfds', '83fc0f4334038af1117c8379a63610b1', 'sdfd@ffdg.ffgfd', 0, '2020-10-23 04:13:23', 0x31, NULL, 'dsfdsf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`adver_id`),
  ADD KEY `offer_id` (`offer_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`) USING BTREE;

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`bank_detail_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `proid` (`pro_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`cart_details_id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `dicount`
--
ALTER TABLE `dicount`
  ADD PRIMARY KEY (`discount_id`),
  ADD KEY `offer_id` (`offer_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `extra_item`
--
ALTER TABLE `extra_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `offer_id` (`offer_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`offer_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `offer_item_out`
--
ALTER TABLE `offer_item_out`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `offer_id` (`offer_id`);

--
-- Indexes for table `offer_type`
--
ALTER TABLE `offer_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `address_id` (`address_id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indexes for table `oreder_details`
--
ALTER TABLE `oreder_details`
  ADD PRIMARY KEY (`details_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `payment_ibfk_1` (`bank_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `tag_details`
--
ALTER TABLE `tag_details`
  ADD PRIMARY KEY (`tag_details_id`) USING BTREE,
  ADD KEY `tag_id` (`tag_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD CONSTRAINT `advertisement_ibfk_1` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`offer_id`);

--
-- Constraints for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD CONSTRAINT `cart_details_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`);

--
-- Constraints for table `dicount`
--
ALTER TABLE `dicount`
  ADD CONSTRAINT `dicount_ibfk_1` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`offer_id`),
  ADD CONSTRAINT `dicount_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`);

--
-- Constraints for table `extra_item`
--
ALTER TABLE `extra_item`
  ADD CONSTRAINT `extra_item_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`),
  ADD CONSTRAINT `extra_item_ibfk_2` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`offer_id`);

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `offer_type` (`type_id`);

--
-- Constraints for table `offer_item_out`
--
ALTER TABLE `offer_item_out`
  ADD CONSTRAINT `offer_item_out_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `product` (`pro_id`),
  ADD CONSTRAINT `offer_item_out_ibfk_2` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`offer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
