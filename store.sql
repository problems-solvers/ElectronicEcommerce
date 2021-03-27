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
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` varchar(40) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `zip_id` varchar(20) DEFAULT NULL,
  `street` varchar(20) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_id` varchar(30) NOT NULL,
  `is_active` binary(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `address`, `country`, `city`, `zip_id`, `street`, `user_name`, `user_id`, `is_active`) VALUES
('5061a6ab-b7f1-4de0-8155-b27d8e', 'alsteen', 'yemen', 'sanaa', '00967', 'alsteen', 'ikbal', '1ba6cd95-568e-4b47-b2f2-e327f2', 0x31),
('5061a6ab-b7f1-4de0-8155-bhsj8', 'alsteen', 'yemen', 'sanaa', '00967', 'alsteen', 'ikbal', '1ba6cd95-568e-4b47-b2f2-e327f2', 0x31),
('5061a6ab-b7f1-4de0-88765-bhsj8', 'alsteen', 'yemen', 'sanaa', '00967', 'alsteen', 'ikbal', '1ba6cd95-568e-4b47-b2f2-e327f2', 0x31),
('96d03381-a3a6-4a62-99a8-9cda1f8db66b', NULL, 'United', 'California', '00967', 'alsteen', 'ikbal', '6c5c8cc1-1e47-4073-83bb-77ed15', 0x31);

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
('2e9539a2-7108-44e1-8eb9-5e14e8', '678.00', 2, 1, '1ba6cd95-568e-4b47-b2f2-e327f2', 'f7cb5275-0701-44e1-874d-63deab'),
('3eabc603-58cf-4878-b1ea-dacd0e', '1236.00', 2, 1, '1ba6cd95-568e-4b47-b2f2-e327f2', '449e0950-0b66-4bc9-8c00-be87e3'),
('885513e2-1404-4539-bdfb-3a6f17', '1598.00', 2, 1, '1ba6cd95-568e-4b47-b2f2-e327f2', 'd28c82b7-c966-4361-bb78-954ff2');

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
('07c3e3cd-0cb5-411f-bd16-81118d', 'Apple', 'd3b964b8-9f7d-4a49-919a-d72b81', '2020-11-20 22:56:11', 0x31),
('1274073b-a4a6-46e3-bd77-69f678', 'Toshiba', '08754be0-9d8f-4d91-8513-f708da', '2020-11-21 08:32:51', 0x31),
('790d3b9d-fe0b-4167-bc49-39770c', 'Galaxcy', '0', '2020-11-21 09:19:11', 0x31),
('7aef58c8-0b71-45c8-acdb-e37be8', 'Accessories', '0', '2020-11-20 22:53:30', 0x31),
('a24aa167-d88b-40a5-8694-69538c', 'Kensington', '7aef58c8-0b71-45c8-acdb-e37be8', '2020-11-20 22:57:15', 0x31),
('d3b964b8-9f7d-4a49-919a-d72b81', 'Phones', '0', '2020-11-20 22:52:47', 0x31),
('ec3a7bfe-ec32-4fd4-ad94-31176e', 'Hp', '08754be0-9d8f-4d91-8513-f708da', '2020-11-20 22:53:45', 0x31),
('fe3ca632-ae97-4320-b920-ad57b4', 'Software', '0', '2020-11-21 08:37:42', 0x31);

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
  `type_id` varchar(30) DEFAULT NULL,
  `offer_name` varchar(50) NOT NULL
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
  `address_id` varchar(40) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'In progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `total_price`, `start_date`, `deliver_date`, `end_date`, `order_status`, `payment_id`, `address_id`, `status`) VALUES
('2625751e-5478-496b-8270-f99559bcf291', '1756.00', '2020-11-23 10:38:26', NULL, NULL, 0x31, '', '96d03381-a3a6-4a62-99a8-9cda1f8db66b', 'In progress'),
('675d8957-8063-4497-8738-78b00fb87a42', '2337.00', '2020-11-21 06:20:55', '2020-11-02 00:00:00', '2020-11-18 00:00:00', 0x31, '04333639-3388-4898-add8-cd6799', '6c5c8cc1-1e47-4073-83bb-77ed15', 'In progress'),
('94085bc9-7600-4941-ad29-6c20e3c10fb7', '1346.00', '2020-11-21 09:09:20', NULL, NULL, 0x31, 'af7e00ec-6b7a-4a44-be89-6cf28332c1bc', '96d03381-a3a6-4a62-99a8-9cda1f8db66b', 'In progress'),
('c70343cd-7c43-41a3-be84-5fdb9b76cca5', '5250.88', '2020-11-21 06:32:25', '2020-11-02 00:00:00', '2020-11-02 00:00:00', 0x31, '04333639-3388-4898-add8-cd6799', '6c5c8cc1-1e47-4073-83bb-77ed15', 'Deleverd');

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
('0bc6bf6c-6f88-4d8d-8988-34650c9c7f35', '33dbdde0-3028-4288-a95c-2a979f', 2, '1238.00', '675d8957-8063-4497-8738-78b00fb87a42'),
('17d99e17-3ffd-4c72-8570-40375e3deed3', '0f4ed0a9-fa7a-4067-ad27-6edfb5', 3, '2500.00', '675d8957-8063-4497-8738-78b00fb87a42'),
('18e7823a-edf5-4163-b401-2bb1f912c7a1', '33dbdde0-3028-4288-a95c-2a979f', 4, '5320.00', '675d8957-8063-4497-8738-78b00fb87a42'),
('225213ab-8958-40f7-9d46-b2c59e67fa8e', 'cde383b9-17b2-4cba-a24f-3f8316', 1, '349.00', 'c70343cd-7c43-41a3-be84-5fdb9b76cca5'),
('593bf61f-7b77-48c1-a23d-45b01d3c5273', '449e0950-0b66-4bc9-8c00-be87e3', 1, '618.00', '2625751e-5478-496b-8270-f99559bcf291'),
('663e390d-09fa-4f7e-bc0b-8f13ee6dcc4d', 'uuid(6)', 4, '3149.88', 'c70343cd-7c43-41a3-be84-5fdb9b76cca5'),
('8093d0fc-8c01-445b-847a-315ee0368c47', 'f7cb5275-0701-44e1-874d-63deab', 1, '339.00', '2625751e-5478-496b-8270-f99559bcf291'),
('89ad1244-ac73-436d-ad30-8c1f930ddb9c', '33dbdde0-3028-4288-a95c-2a979f', 1, '619.00', 'c70343cd-7c43-41a3-be84-5fdb9b76cca5'),
('9817f370-9c39-43ba-877d-5f104a125d14', 'f7cb5275-0701-44e1-874d-63deab', 1, '339.00', '94085bc9-7600-4941-ad29-6c20e3c10fb7'),
('a403bea6-21a7-4842-bd04-1eca677c66ed', '86125a79-d530-43bf-9092-c8e3d5', 1, '1099.00', '675d8957-8063-4497-8738-78b00fb87a42'),
('bdc2a567-a7b5-46e2-bda3-0356ac46cc1c', 'd28c82b7-c966-4361-bb78-954ff2', 1, '799.00', '2625751e-5478-496b-8270-f99559bcf291'),
('cd9e8e1e-7b3e-4d43-82ae-ad9ceaeb8364', 'd756a0e6-4031-455f-a68a-821b0f', 1, '34.00', 'c70343cd-7c43-41a3-be84-5fdb9b76cca5'),
('d8017876-c5ec-48a5-a384-af3408f15b0a', '86125a79-d530-43bf-9092-c8e3d5', 1, '1099.00', 'c70343cd-7c43-41a3-be84-5fdb9b76cca5'),
('e1e99d43-06b7-4df6-aa0c-efff7bb64021', 'bf22ac01-715b-47df-84c5-607a2e', 1, '1007.00', '94085bc9-7600-4941-ad29-6c20e3c10fb7');

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
('04333639-3388-4898-add8-cd6799', 'Dunia Muhammed', '12121212', '83445de3-1168-11eb-9632-f81654', '2021-06-01 00:00:00', '6c5c8cc1-1e47-4073-83bb-77ed15', 0x31),
('24470777-1169-11eb-9632-f81654', 'Dunia Muhammed', '12121212', '83445de3-1168-11eb-9632-f81654', '2020-11-25 08:45:39', '6c5c8cc1-1e47-4073-83bb-77ed15', 0x31),
('af7e00ec-6b7a-4a44-be89-6cf28332c1bc', 'Dunia Muhammed', '12121212', '', '2021-06-01 00:00:00', '6c5c8cc1-1e47-4073-83bb-77ed15', 0x30),
('eb392276-d3ea-4c07-82d1-e763a4', 'Dunia Muhammed', '12121212', '83445de3-1168-11eb-9632-f81654', '2020-11-25 08:45:39', '6c5c8cc1-1e47-4073-83bb-77ed15', 0x31);

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
('33dbdde0-3028-4288-a95c-2a979f', 'Refurbished Hp Pavilion x360', '619.00', 6, 'Screen Size- 14 Inch full HD screen\r\nProcessor- intel core i5\r\nRAM- 8GB\r\nSSD- 256GB\r\noperating system- windows 10\r\nWarranty- 3 month year warranty', 'app/assets/images/6fe813e9438cb180fb6d45e1f90a369100296464277107762A11E0Q4EA_2_LargeProductImage.jpg', 'app/assets/images/6fe813e9438cb180fb6d45e1f90a3691002964641690152080A11E0Q4EA_1_LargeProductImage.jpg,app/assets/images/6fe813e9438cb180fb6d45e1f90a369100296464277107762A11E0Q4EA_2_LargeProductImage.jpg,app/assets/images/6fe813e9438cb180fb6d45e1f90a3691002964641509865284A11E0Q4EA_3_Supersize.jpg,', '2020-11-21 02:02:49', 0x31, 'ec3a7bfe-ec32-4fd4-ad94-31176e', 'Hp', NULL, NULL),
('449e0950-0b66-4bc9-8c00-be87e3', 'Apple iphone XR', '618.00', 10, 'Unlocked SIM free\r\n4G ready for ultra fast network speed\r\nultra-sharp 12 Megapixel selfie camera\r\n6.1 liquid retina HD display\r\n A12 Bionic Chip\r\nIOS 12\r\n64GB Storage', 'app/assets/images/4d061b0262f848b3cf6b2d1ac22977aaa6e38f1c1455989536MRY42BA_2_LargeProductImage.png', 'app/assets/images/4d061b0262f848b3cf6b2d1ac22977aaa6e38f1c2075340362MRY42BA_1_LargeProductImage.png,app/assets/images/4d061b0262f848b3cf6b2d1ac22977aaa6e38f1c1455989536MRY42BA_2_LargeProductImage.png,app/assets/images/4d061b0262f848b3cf6b2d1ac22977aaa6e38f1c1368560237MRY42BA_3_LargeProductImage.png,', '2020-11-21 01:08:40', 0x31, '07c3e3cd-0cb5-411f-bd16-81118d', 'Apple', NULL, NULL),
('801d1793-bff1-4a90-86b5-853254', 'Hp Omen 15-DH1018NA', '1349.00', 2, 'Screen Size- 15.6 Inch full HD 144hz screen\r\nProcessor- intel core i7\r\nGraphics card- Geforce RTX 2070 8GB\r\nRAM- 16GB\r\nSSD- 512GB\r\noperating system- windows 10\r\nWarranty- 1 year year warranty', 'app/assets/images/72bbc85d2ea4d00a37ba220faf60e94e0784b37c17113090041L6E7EA_4_LargeProductImage.jpg', 'app/assets/images/72bbc85d2ea4d00a37ba220faf60e94e0784b37c631219921L6E7EA_3_LargeProductImage.jpg,app/assets/images/72bbc85d2ea4d00a37ba220faf60e94e0784b37c17113090041L6E7EA_4_LargeProductImage.jpg,app/assets/images/72bbc85d2ea4d00a37ba220faf60e94e0784b37c15851117831L6E7EA_6_LargeProductImage.jpg,', '2020-11-21 02:13:44', 0x31, 'ec3a7bfe-ec32-4fd4-ad94-31176e', 'Hp', NULL, NULL),
('86125a79-d530-43bf-9092-c8e3d5', 'Hp EliteBook 840 G6', '1099.00', 3, 'Balance designed, power and mobility with this ultra slim distinctively designed aluminum laptop with narrow border display. this light and compact  PC is built for the professional who requires top performance while on the go .\r\nCalls sound clear and crisp with advance collaboration feature like HP noise cancellation. loud top firing speakers produce rich sound.', 'app/assets/images/72de72bfa9c6f24562125a879e5e96d6d9ad001310176429476XE69ET_4_LargeProductImage.jpg', 'app/assets/images/72de72bfa9c6f24562125a879e5e96d6d9ad00131106159666XE69ET_3_LargeProductImage.jpg,app/assets/images/72de72bfa9c6f24562125a879e5e96d6d9ad001310176429476XE69ET_4_LargeProductImage.jpg,app/assets/images/72de72bfa9c6f24562125a879e5e96d6d9ad001312593128326XE69ET_5_LargeProductImage.jpg,', '2020-11-21 01:55:10', 0x31, 'ec3a7bfe-ec32-4fd4-ad94-31176e', 'Hp', NULL, NULL),
('8bbaf1e7-511f-4e6e-91ef-983587', 'Kensington Hi-Fi On-Ear Headphones', '20.00', 3, '\r\nBrand	Kensington\r\nConnections	Wired\r\nModel Name	K33137\r\nColor	Black\r\nHeadphones Form Factor	On Ear', 'app/assets/images/4add0785b4d65a80934766170366080acd94f01f473650425k2.jpg', 'app/assets/images/4add0785b4d65a80934766170366080acd94f01f509709054k1.jpg,app/assets/images/4add0785b4d65a80934766170366080acd94f01f473650425k2.jpg,app/assets/images/4add0785b4d65a80934766170366080acd94f01f2039667528k3.jpg,', '2020-11-21 00:15:24', 0x31, 'a24aa167-d88b-40a5-8694-69538c', 'Kensington', NULL, NULL),
('95b3501a-7b15-4bbd-8f72-b0bb12', 'laptop dell E27', '1500.00', 10, 'Labtop for grafics people', 'app/assets/images/9aa516670e93afacbdb1c0cb1ed1478985cea2dd1811005492', 'app/assets/images/9aa516670e93afacbdb1c0cb1ed1478985cea2dd665228170d1eee4f043a762a5d2d0d9134e74ee9b94bafbd5489789686359222_sd.jpg;maxHeight=640;maxWidth=550.jpg@app/assets/images/9aa516670e93afacbdb1c0cb1ed1478985cea2dd6086594090d1eee4f043a762a5d2d0d9134e74ee9b94bafbd18746616326359222_rd.jpg;maxHeight=640;maxWidth=550.jpg@', '2020-11-21 08:40:29', 0x31, 'ec3a7bfe-ec32-4fd4-ad94-31176e', 'hp', NULL, NULL),
('bf22ac01-715b-47df-84c5-607a2e', 'Apple iphone 11 Pro max Midnight ', '1007.00', 7, 'Unlocked SIM free\r\n4G ready for ultra fast network speed\r\nMegapixel selfie camera\r\n6.5 FHD + display\r\nSuper fast Apple A13 Bionic Chip\r\nIOS 13\r\n64GB Storage', 'app/assets/images/f03fdd821604939ac64c1944fe696fecee7aeebc224005846341551_sd.jpg', 'app/assets/images/f03fdd821604939ac64c1944fe696fecee7aeebc224005846341551_sd.jpg,app/assets/images/f03fdd821604939ac64c1944fe696fecee7aeebc1148824351https___hypebeast.com_image_2019_09_apple-iphone-11-pro-and-pro-max-model-01.jpg,app/assets/images/f03fdd821604939ac64c1944fe696fecee7aeebc1416368150MWHH2BA_1_LargeProductImage.png,', '2020-11-21 01:00:32', 0x31, '07c3e3cd-0cb5-411f-bd16-81118d', 'Apple', NULL, NULL),
('cde383b9-17b2-4cba-a24f-3f8316', 'HP 250 G7', '349.00', 7, 'AMD Dual-Core A4-9120e, 4GB Memory, 64GB eMMC, Webcam, Windows 10 Home in S Mode ( 1 Year Office 365 Personal Included ), Bundled with TSBEAU 16GB Micro SD Card\r\n', 'app/assets/images/7cf52cd1b0744f53fd11cd082f09dce52322a1b044622560hppp.jpg', 'app/assets/images/7cf52cd1b0744f53fd11cd082f09dce52322a1b01593116547hpp.jpg,app/assets/images/7cf52cd1b0744f53fd11cd082f09dce52322a1b044622560hppp.jpg,app/assets/images/7cf52cd1b0744f53fd11cd082f09dce52322a1b085538055hpppp.jpg,', '2020-11-21 00:12:03', 0x31, 'ec3a7bfe-ec32-4fd4-ad94-31176e', 'Hp', NULL, NULL),
('d28c82b7-c966-4361-bb78-954ff2', 'Hp probook 440 G6', '799.00', 4, '14 Inch screen\r\nProcessor- intel core i5 8265U\r\nRAM- 8GB\r\noperating system- Windows 10 Pro\r\nOptical drive - none\r\n1920 x 1080 HD resolution\r\nWarranty- 1 year warranty', 'app/assets/images/b2fc7e3b47c1143e31a2fe25a1c5f6f0467fd9b74430469388VT38EA_4_LargeProductImage.jpg', 'app/assets/images/b2fc7e3b47c1143e31a2fe25a1c5f6f0467fd9b73777709098VT38EA_3_LargeProductImage.jpg,app/assets/images/b2fc7e3b47c1143e31a2fe25a1c5f6f0467fd9b74430469388VT38EA_4_LargeProductImage.jpg,app/assets/images/b2fc7e3b47c1143e31a2fe25a1c5f6f0467fd9b720928490958VT38EA_5_LargeProductImage.jpg,', '2020-11-21 00:30:17', 0x31, 'ec3a7bfe-ec32-4fd4-ad94-31176e', 'Hp', NULL, NULL),
('d756a0e6-4031-455f-a68a-821b0f', 'Kensington Ergonomic Mouse Pad', '34.00', 4, 'Ultra soft wrist feature a premium ultra soft exterior supported by gel-cushioned padding.\r\nHigh-performance mouse pad surface provides best-in-class tracking control for both optical and laser mice.\r\nNon-toxic Material independently certified for safety and compliance. ', 'app/assets/images/b2fc7e3b47c1143e31a2fe25a1c5f6f0467fd9b74430469388VT38EA_4_LargeProductImage.jpg', 'app/assets/images/a138f74b00ab5c74bac85008ba40522ba33e6c2c1516507992f5e6f583-1ed4-45b3-9f54-f44d2826cefe.jpg,', '2020-11-21 01:31:25', 0x31, 'a24aa167-d88b-40a5-8694-69538c', 'Kensington', NULL, NULL),
('d9005f10-15a6-45ca-961f-0c39ec', 'laptop dell E27', '3000.00', 5, 'hggllglkkl', 'app/assets/images/f806f20ed6502d8e5e8c1fd19a79992bd4eed763924926325', 'app/assets/images/f806f20ed6502d8e5e8c1fd19a79992bd4eed7633944982100aacd888a3c60522d3a97741ffa988f3d1af846e1856000346407699_sd.jpg;maxHeight=640;maxWidth=550.jpg@app/assets/images/f806f20ed6502d8e5e8c1fd19a79992bd4eed76313207086200aacd888a3c60522d3a97741ffa988f3d1af846e12632888626359222_sd.jpg;maxHeight=640;maxWidth=550.jpg@app/assets/images/f806f20ed6502d8e5e8c1fd19a79992bd4eed76317192622540d1eee4f043a762a5d2d0d9134e74ee9b94bafbd5489789686359222_sd.jpg;maxHeight=640;maxWidth=550.jpg@', '2020-11-21 09:22:37', 0x31, 'a24aa167-d88b-40a5-8694-69538c', 'dell', NULL, NULL),
('dfb536cb-2026-4e5b-bbc8-14b067', 'Apple - iPhone 12 Pro Max', '999.00', 5, ' 5G 128GB', 'app/assets/images/209f0e0804653ec9941ce9f64b9426954b2cb8eb146447073i2.jpg', 'app/assets/images/209f0e0804653ec9941ce9f64b9426954b2cb8eb294798050i1.jpg,app/assets/images/209f0e0804653ec9941ce9f64b9426954b2cb8eb146447073i2.jpg,app/assets/images/209f0e0804653ec9941ce9f64b9426954b2cb8eb1687568643i3.jpg,', '2020-11-20 23:57:43', 0x31, '07c3e3cd-0cb5-411f-bd16-81118d', 'Apple', NULL, NULL),
('f7cb5275-0701-44e1-874d-63deab', 'Refurbished Hp x360', '339.00', 5, 'Screen Size- 14 Inch screen\r\nProcessor- intel celeron N4000\r\nRAM- 4GB\r\nSSD- 64GB\r\noperating system- google chrome OS\r\nWarranty- 3 month year warranty', 'app/assets/images/7007bd6965839068fcb3423056e06db045c15d8d897865332A18RS78EA_4_LargeProductImage.jpg', 'app/assets/images/7007bd6965839068fcb3423056e06db045c15d8d837358794A18RS78EA_3_LargeProductImage.jpg,app/assets/images/7007bd6965839068fcb3423056e06db045c15d8d897865332A18RS78EA_4_LargeProductImage.jpg,app/assets/images/7007bd6965839068fcb3423056e06db045c15d8d1228652029A18RS78EA_8_LargeProductImage.jpg,', '2020-11-21 00:44:09', 0x31, 'ec3a7bfe-ec32-4fd4-ad94-31176e', 'Hp', NULL, NULL);

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
('27fa1d8c-329e-49d6-ae62-70d5a7', 'core', 1, 'i7@ Dual@'),
('38df5059-2b90-4632-bec5-bf635e', 'core', 1, ''),
('427b66fb-fb59-4368-a3ed-55f873', 'color', 1, 'black@'),
('46494ab0-8465-42c7-b875-83d065', 'color', 1, 'red@black@'),
('48b8f1d6-189a-40d9-9e90-a2931b', 'core', 1, ''),
('63ffbc49-9ee4-400b-b36c-e677ce', 'core', 1, ''),
('6428336f-7482-416e-9383-b888ac', 'core', 1, ''),
('64a87ef2-7c60-4648-885e-3e6b3d', 'color', 1, ''),
('7009dfbf-0cbb-43fc-9b25-2b18cd', 'Ram', 1, ''),
('7b4f9856-4c56-4969-9a0e-e12236', 'color', 1, ''),
('9e5d7e32-8a92-4b6b-808b-fe5d1a', 'color', 1, ''),
('abd201fb-cd66-40a7-ab31-c594f5', 'color', 1, 'black@blue@'),
('ad80b6c0-9262-4a44-b64e-8ed7a1', 'core', 1, ''),
('bed78532-6a85-480d-8fc2-18eba4', 'core', 1, ''),
('d0c2847f-5021-482a-9534-eee5d9', 'color', 1, ''),
('d603585f-c391-4df8-ae6c-38f218', 'color', 1, ''),
('d622e5dc-dadf-4ceb-ac92-e87a2c', '', 1, ''),
('dc900744-3696-4c68-aa87-efe10c', '', 1, ''),
('e84656dd-597f-499e-9718-d66700', 'core', 1, ''),
('ebb770d7-a1c6-4799-b14f-4947a8', '', 1, ''),
('ef4a703d-cccf-488a-be77-271a60', 'color', 1, '');

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
('03478839-6e13-4512-a3a4-0d606a', NULL, '801d1793-bff1-4a90-86b5-853254', 1, 'i7', 'eeaddb3b-32a6-4bbf-b8e2-ced559'),
('0b831e7d-bbd3-4e6c-af7d-7630f9', NULL, '95b3501a-7b15-4bbd-8f72-b0bb12', 1, '16,32', '6a42918b-7b73-455b-af3d-44bccc'),
('0dd0af49-42e2-4372-a9c3-b514eb', NULL, '801d1793-bff1-4a90-86b5-853254', 1, 'i7', '38df5059-2b90-4632-bec5-bf635e'),
('2335be2a-1364-4537-b412-1fe79e', NULL, '0f4ed0a9-fa7a-4067-ad27-6edfb5', 1, 'black', 'acc8f6b3-9261-4000-9df3-f8401b'),
('5584ffb0-c6a7-4785-ad8b-617ec8', NULL, '8bbaf1e7-511f-4e6e-91ef-983587', 1, 'black', 'ef4a703d-cccf-488a-be77-271a60'),
('6f39aef9-c840-4f9d-b612-a314f1', NULL, 'd9005f10-15a6-45ca-961f-0c39ec', 1, 'i7', 'bed78532-6a85-480d-8fc2-18eba4'),
('6fa7fd47-f77b-4404-819d-712c35', NULL, '0f4ed0a9-fa7a-4067-ad27-6edfb5', 1, 'black', '64a87ef2-7c60-4648-885e-3e6b3d'),
('75034beb-e119-4e50-aac4-7bde5c', NULL, '33dbdde0-3028-4288-a95c-2a979f', 1, 'i5', '48b8f1d6-189a-40d9-9e90-a2931b'),
('77fcd612-5e43-43a6-a16d-5c0d39', NULL, 'dfb536cb-2026-4e5b-bbc8-14b067', 1, 'green', '7b4f9856-4c56-4969-9a0e-e12236'),
('84259b07-f52e-48ff-b148-fea4c7', NULL, '449e0950-0b66-4bc9-8c00-be87e3', 1, 'black', '1fd8300a-8343-4585-9241-8d2047'),
('85611f27-8c22-47a9-b5c2-cba6f9', NULL, 'cde383b9-17b2-4cba-a24f-3f8316', 1, 'Dual', 'ea961f44-021f-4e72-8a92-fc3bd4'),
('93a111d6-aa5a-4af4-b956-6ef9d3', NULL, 'bf22ac01-715b-47df-84c5-607a2e', 1, 'green', 'd0c2847f-5021-482a-9534-eee5d9'),
('9475913d-b156-423a-a841-b47b52', NULL, 'd28c82b7-c966-4361-bb78-954ff2', 1, 'i5', '63ffbc49-9ee4-400b-b36c-e677ce'),
('96c82f02-7adf-4d2d-b578-9666f9', NULL, '86125a79-d530-43bf-9092-c8e3d5', 1, 'i7', 'dd3e29e0-c585-4014-a9d9-ad6767'),
('992fbec1-85c4-4e2b-aca3-b9eadc', NULL, 'd9005f10-15a6-45ca-961f-0c39ec', 1, 'i7', 'd622e5dc-dadf-4ceb-ac92-e87a2c'),
('a58164a5-43cf-45b6-858e-225961', NULL, 'cde383b9-17b2-4cba-a24f-3f8316', 1, 'Dual', '6428336f-7482-416e-9383-b888ac'),
('a6f5a9a9-af4d-400b-9197-8e19c3', NULL, '8bbaf1e7-511f-4e6e-91ef-983587', 1, 'black', '27634ee0-a66b-4cf1-8264-241483'),
('aabcd453-f34a-4e61-bd2b-71a074', NULL, '33dbdde0-3028-4288-a95c-2a979f', 1, 'i5', '17a61185-ca4d-4a0e-973c-b57315'),
('ae68d1cf-8cc4-488d-a07d-bda201', NULL, 'f7cb5275-0701-44e1-874d-63deab', 1, 'intel', 'e84656dd-597f-499e-9718-d66700'),
('b837ccd8-1b6f-44e8-922e-3e6327', NULL, '86125a79-d530-43bf-9092-c8e3d5', 1, 'i7', 'ad80b6c0-9262-4a44-b64e-8ed7a1'),
('b97ea78c-c6ff-41f5-9429-327ea8', NULL, 'f7cb5275-0701-44e1-874d-63deab', 1, 'intel', '939271c5-b5ee-411a-ac79-c6b618'),
('c7f4bb67-ebcb-4d01-8aa9-62d9cf', NULL, 'dfb536cb-2026-4e5b-bbc8-14b067', 1, 'green', 'ebb770d7-a1c6-4799-b14f-4947a8'),
('d0440697-7305-4449-a6ea-a26a1b', NULL, '449e0950-0b66-4bc9-8c00-be87e3', 1, 'black', '9e5d7e32-8a92-4b6b-808b-fe5d1a'),
('dedff0be-1387-4823-9eb7-e9c4a6', NULL, 'd756a0e6-4031-455f-a68a-821b0f', 1, 'black', '64c04b4d-501a-4234-b9e0-0c71a6'),
('e17c8538-1e98-46df-ad46-1dd495', NULL, 'd756a0e6-4031-455f-a68a-821b0f', 1, 'black', 'd603585f-c391-4df8-ae6c-38f218'),
('ea6ade7d-3555-4f27-9852-201b41', NULL, 'bf22ac01-715b-47df-84c5-607a2e', 1, 'green', 'b8baa5d1-38e3-4644-83b9-a70dc3'),
('fccb5e09-2314-4345-a961-e6ddf5', NULL, 'd28c82b7-c966-4361-bb78-954ff2', 1, 'i5', '370a0fb7-3d8d-4fe3-aad9-597f15'),
('fe0249b4-c334-44b4-a854-2358cc', NULL, '95b3501a-7b15-4bbd-8f72-b0bb12', 1, '16,32', '7009dfbf-0cbb-43fc-9b25-2b18cd');

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
('1ba6cd95-568e-4b47-b2f2-e327f2', 'ahmed', 'Ahmed', '227b177aefcc53b09a12b768930e5eaf', 'ahmed.ali@gmail.com', 1, '2020-11-20 23:08:48', 0x31, NULL, 'Murad'),
('6c5c8cc1-1e47-4073-83bb-77ed15', 'Ikbal', 'Ikbal', '227b177aefcc53b09a12b768930e5eaf', 'ikbal.alahdel90@gmail.com', 2, '2020-11-21 06:31:27', 0x30, NULL, 'Said');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`),
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
