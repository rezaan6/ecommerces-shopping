-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 30, 2020 at 10:57 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`c_id`, `c_name`) VALUES
(1, 'men'),
(2, 'women');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_details`
--

DROP TABLE IF EXISTS `tbl_product_details`;
CREATE TABLE IF NOT EXISTS `tbl_product_details` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `p_price_dollar` float NOT NULL,
  `p_colour` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `p_image_src` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `p_category` int(2) NOT NULL,
  `p_sub_category` int(11) NOT NULL,
  `p_likes` int(11) NOT NULL,
  `p_new_arrivals` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`p_id`),
  KEY `test_ibfk_1` (`p_sub_category`),
  KEY `p_category` (`p_category`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_product_details`
--

INSERT INTO `tbl_product_details` (`p_id`, `p_name`, `p_price_dollar`, `p_colour`, `p_image_src`, `p_category`, `p_sub_category`, `p_likes`, `p_new_arrivals`) VALUES
(1, '	Mens Sandles Outdoor', 15.6, 'black', 'images/me-----n/men--sandal-black.png', 1, 19, 143, 0),
(2, '	Mens Sandles Outdoor', 15.6, 'grey', 'images/me-----n/men---sandal-grey.png', 1, 19, 22133, 0),
(3, '10Pairs Men Summer Socks', 4.59, 'black', 'images/me-----n/men----sock-black.png', 1, 20, 423, 0),
(4, '10Pairs Men Summer Socks', 4.59, 'darkblue', 'images/me-----n/men-----sock-blue.png', 1, 20, 234, 0),
(5, '10Pairs Men Summer Socks', 4.59, 'grey', 'images/me-----n/men----sock--grey.png', 1, 20, 245, 0),
(6, 'Men Sneakers Fashion Lightweight Lac-up', 14.36, 'black', 'images/me-----n/men-sneaker-black.png', 1, 18, 235, 0),
(7, 'Formal Shirt SlimFit', 25.99, 'white', 'images/me-----n/formal-shirt-qv-1.png', 1, 4, 456, 0),
(8, 'Formal Shirt SlimFit', 25.99, 'darkblue', 'images/me-----n/formal-shirt-qv-2.png', 1, 4, 345, 0),
(9, 'Formal Shirt SlimFit', 25.99, 'red', 'images/me-----n/formal-shirt-qv-3.png', 1, 4, 345, 0),
(10, 'Formal Shirt SlimFit', 25.99, 'blue', 'images/me-----n/formal-shirt-qv-4.png', 1, 4, 234, 0),
(11, 'Casual Shirt SlimFit', 15.99, 'darkblue', 'images/me-----n/casual-shirt-qv-1.png', 1, 5, 2345, 0),
(12, 'Casual Shirt SlimFit', 15.99, 'grey', 'images/me-----n/casual-shirt-qv-2.png', 1, 5, 2345, 0),
(13, 'T-Shirt SlimFit Cotton', 29.99, 'black', 'images/me-----n/men-t-shirt-black.png', 1, 3, 345, 0),
(14, 'T-Shirt SlimFit Cotton', 29.99, 'blue', 'images/me-----n/men-t-shirt--blue.png', 1, 3, 345, 0),
(15, 'T-Shirt SlimFit Cotton', 29.99, 'green', 'images/me-----n/men-t-shirt-green.png', 1, 3, 235, 0),
(16, 'T-Shirt SlimFit Cotton', 29.99, 'white', 'images/me-----n/men-t-shirt-white.png', 1, 3, 235, 0),
(17, '	Panther Creek Jacket, Water & Wind Resistant', 49.99, 'red', 'images/me-----n/men----jacket-red.png', 1, 6, 2333, 0),
(18, '	Panther Creek Jacket, Water & Wind Resistant', 49.99, 'grey', 'images/me-----n/men--jacket--grey.png', 1, 6, 235, 0),
(19, '	Panther Creek Jacket, Water & Wind Resistant', 49.99, 'pink', 'images/me-----n/men---jacket-pink.png', 1, 6, 2352, 0),
(20, '	Wool Coat Men Thick Overcoats', 49.99, 'red', 'images/me-----n/men------coat-red.png', 1, 7, 1234, 0),
(21, '	Wool Coat Men Thick Overcoats', 49.99, 'black', 'images/me-----n/men----coat-black.png', 1, 7, 543, 0),
(22, '	Wool Coat Men Thick Overcoats', 49.99, 'grey', 'images/me-----n/men-----coat-grey.png', 1, 7, 3333, 0),
(23, '	Wool Coat Men Thick Overcoats', 49.99, 'brown', 'images/me-----n/men----coat-brown.png', 1, 7, 3456, 0),
(24, 'Casual Light Blue Elastic Force Fashion Denim Jean', 15.7, 'darkblue', 'images/me-----n/men--jeans-dbblue.png', 1, 8, 2356, 0),
(25, 'Casual Light Blue Elastic Force Fashion Denim Jean', 15.7, 'blue', 'images/me-----n/men----jeans-blue.png', 1, 8, 765, 0),
(26, 'Casual Light Blue Elastic Force Fashion Denim Jean', 15.7, 'lightblue', 'images/me-----n/men--jeans-lbblue.png', 1, 8, 765, 0),
(27, 'Active Elastic Hip Hop Slim Joggers', 11.33, 'black', 'images/me-----n/men--sweatp-black.png', 1, 9, 764, 0),
(28, 'Active Elastic Hip Hop Slim Joggers', 11.33, 'white', 'images/me-----n/men--sweatp-white.png', 1, 9, 34567, 0),
(29, 'Active Elastic Hip Hop Slim Joggers', 11.33, 'grey', 'images/me-----n/men---sweatp-grey.png', 1, 9, 2345, 0),
(38, '	Business Men\'s Fall Spring Fashion Long Pants', 12.99, 'darkblue', 'images/me-----n/men-trouser-dblue.png', 1, 10, 3468, 0),
(39, '	Business Men\'s Fall Spring Fashion Long Pants', 12.99, 'lightblue', 'images/me-----n/men-trouser-lblue.png', 1, 10, 4567, 0),
(40, '	Business Men\'s Fall Spring Fashion Long Pants', 12.99, 'beige', 'images/me-----n/men-trouser-beige.png', 1, 10, 7636, 0),
(41, '	Business Men\'s Fall Spring Fashion Long Pants', 12.99, 'brown', 'images/me-----n/men-trouser-brown.png', 1, 10, 12345, 0),
(42, 'Fitness Casual Short Pants', 8.84, 'black', 'images/me-----n/men---short-black.png', 1, 11, 2342, 0),
(43, 'Fitness Casual Short Pants', 8.84, 'grey', 'images/me-----n/men----short-grey.png', 1, 11, 543, 0),
(44, 'Fitness Casual Short Pants', 8.84, 'green', 'images/me-----n/men--short--green.png', 1, 11, 324, 0),
(45, 'Fitness Casual Short Pants', 8.84, 'beige', 'images/me-----n/men---short-beige.png', 1, 11, 22, 0),
(46, 'Classic Pilot Polarized Photochromic Sunglasses', 4.3, 'yellow', 'images/me-----n/men-sunglass-glow.png', 1, 13, 123, 0),
(47, 'Classic Pilot Polarized Photochromic Sunglasses', 4.3, 'green', 'images/me-----n/men-sunglass-leaf.png', 1, 13, 234, 0),
(48, 'Classic Pilot Polarized Photochromic Sunglasses', 4.3, 'white', 'images/me-----n/men-sunglass-snow.png', 1, 13, 2132, 0),
(49, 'Classic Pilot Polarized Photochromic Sunglasses', 4.3, 'black', 'images/me-----n/men-sunglass-void.png', 1, 13, 2343, 0),
(50, 'Smart Wallet Business Card Holder Rfid Wallet ', 4.78, 'lightbrown', 'images/me-----n/men----wallet-lbr.png', 1, 14, 123, 0),
(51, 'Smart Wallet Business Card Holder Rfid Wallet ', 4.78, 'brown', 'images/me-----n/men----wallet-dbr.png', 1, 14, 234, 0),
(52, 'Smart Wallet Business Card Holder Rfid Wallet ', 4.78, 'blue', 'images/me-----n/men---wallet-blue.png', 1, 14, 3421, 0),
(53, 'Smart Wallet Business Card Holder Rfid Wallet ', 4.78, 'black', 'images/me-----n/men--wallet-black.png', 1, 14, 234, 0),
(54, 'OLEVS Full Steel Men Watch', 49.99, 'black', 'images/me-----n/men---watch-black.png', 1, 15, 345, 0),
(55, 'OLEVS Full Steel Men Watch', 49.99, 'blue', 'images/me-----n/men----watch-blue.png', 1, 15, 1234, 0),
(56, 'Tactical Belt New Nylon Army Belt', 11.96, 'green', 'images/me-----n/men----belt-green.png', 1, 16, 234, 0),
(57, 'Tactical Belt New Nylon Army Belt', 11.96, 'blue', 'images/me-----n/men-----belt-blue.png', 1, 16, 2345, 0),
(58, 'Tactical Belt New Nylon Army Belt', 11.96, 'brown', 'images/me-----n/men---belt--brown.png', 1, 16, 435, 0),
(59, 'Tactical Belt New Nylon Army Belt', 11.96, 'black', 'images/me-----n/men----belt-black.png', 1, 16, 1122, 0),
(60, 'Men Genuine Leather Dress Shoes Business Formal Shoes', 38.16, 'black', 'images/me-----n/men--formal-black.png', 1, 17, 23, 0),
(61, 'Men Genuine Leather Dress Shoes Business Formal Shoes', 38.16, 'brown', 'images/me-----n/men--formal-brown.png', 1, 17, 234, 0),
(62, 'Men Genuine Leather Dress Shoes Business Formal Shoes', 38.16, 'lightbrown', 'images/me-----n/men-formal-lbrown.png', 1, 17, 2345, 0),
(63, 'Men Sneakers Fashion Lightweight Lac-up', 14.36, 'yellow', 'images/me-----n/men-sneaker-sunny.png', 1, 18, 234, 0),
(64, 'Men Sneakers Fashion Lightweight Lac-up', 14.36, 'white', 'images/me-----n/men-sneaker-white.png', 1, 18, 2342, 0),
(65, 'Leisure Denim Shirt', 12.79, 'blue', 'images/wome---n/women--shirt-blue.png', 2, 21, 2345, 0),
(66, 'Leisure Denim Shirt', 12.79, 'lightblue', 'images/wome---n/women-shirt-lblue.png', 2, 21, 234, 0),
(67, 'America Summer Tops', 2.99, 'blue', 'images/wome---n/women-tshirt-blue.png', 2, 22, 2345, 0),
(68, 'America Summer Tops', 2.99, 'grey', 'images/wome---n/women-tshirt-grey.png', 2, 22, 9874, 0),
(69, 'New Short Faux Soft Leather Jacket', 20.51, 'red', 'images/wome---n/women--jacket-red.png', 2, 23, 2345, 0),
(70, 'New Short Faux Soft Leather Jacket', 20.51, 'yellow', 'images/wome---n/women-jacket-glow.png', 2, 23, 22222, 0),
(71, 'New Short Faux Soft Leather Jacket', 20.51, 'pink', 'images/wome---n/women-jacket-pink.png', 2, 23, 2345, 0),
(72, 'Casual Solid Color Outwear', 37.6, 'brown', 'images/wome---n/women--coat-brown.png', 2, 24, 7777, 0),
(73, 'Casual Light Blue Elastic Force Fashion Denim Jean', 15.7, 'darkblue', 'images/wome---n/men--jeans-dbblue.png', 2, 25, 67676, 0),
(74, 'Casual Light Blue Elastic Force Fashion Denim Jean', 15.7, 'blue', 'images/wome---n/men----jeans-blue.png', 2, 25, 2345, 0),
(75, 'Casual Light Blue Elastic Force Fashion Denim Jean', 15.7, 'lightblue', 'images/wome---n/men--jeans-lbblue.png', 2, 25, 2345, 0),
(76, 'Stretch Sports Pants', 4.32, 'pink', 'images/wome---n/women---pant-pink.png', 2, 26, 444, 0),
(77, 'Stretch Sports Pants', 4.32, 'grey', 'images/wome---n/women---pant-grey.png', 2, 26, 4545, 0),
(78, 'Casual Ladies Trousers', 19.98, 'brown', 'images/wome---n/women-trouser-brw.png', 2, 27, 8898, 0),
(79, 'Casual Ladies Trousers', 19.98, 'grey', 'images/wome---n/women-trouser-gre.png', 2, 27, 5656, 0),
(80, 'Casual Ladies Trousers', 19.98, 'black', 'images/wome---n/women-trouser-blc.png', 2, 27, 3453, 0),
(81, 'Spring and Autumn Women\'s High Waist Skirt', 7.74, 'red', 'images/wome---n/women---skirt-red.png', 2, 28, 1234, 0),
(82, 'Spring and Autumn Women\'s High Waist Skirt', 7.74, 'blue', 'images/wome---n/women--skirt-blue.png', 2, 28, 8765, 0),
(83, 'GDBaseball Cap with Rings Snapback Cap', 2.7, 'black', 'images/wome---n/women---cap-black.png', 2, 29, 66666, 0),
(84, 'GDBaseball Cap with Rings Snapback Cap', 2.7, 'white', 'images/wome---n/women---cap-white.png', 2, 29, 7777, 0),
(85, 'Vintage Metal Eyeglasses', 1.85, 'red', 'images/wome---n/women---specs-red.png', 2, 30, 3434, 0),
(86, 'Vintage Metal Eyeglasses', 1.85, 'black', 'images/wome---n/women-specs-black.png', 2, 30, 2332, 0),
(87, 'Vintage Metal Eyeglasses', 1.85, 'blue', 'images/wome---n/women--specs-blue.png', 2, 30, 4567, 0),
(88, 'Vintage Women Hand Bag', 9.91, 'red', 'images/wome---n/women-handbag-red.png', 2, 31, 5655, 0),
(89, 'Vintage Women Hand Bag', 9.91, 'brown', 'images/wome---n/women-handbag-brw.png', 2, 31, 3456, 0),
(90, 'Vintage Women Hand Bag', 9.91, 'black', 'images/wome---n/women-handbag-blc.png', 2, 31, 1212, 0),
(91, 'Stainless Steel Watch', 2.97, 'gold', 'images/wome---n/women--watch-gold.png', 2, 32, 1211, 0),
(92, 'Stainless Steel Watch', 2.97, 'black', 'images/wome---n/women-watch-black.png', 2, 32, 2312, 0),
(93, 'Stainless Steel Watch', 2.97, 'grey', 'images/wome---n/women--watch-grey.png', 2, 32, 121, 0),
(94, 'Leather Alloy Pin Buckle Belt', 2.49, 'red', 'images/wome---n/women----belt-red.png', 2, 33, 123, 0),
(95, 'Leather Alloy Pin Buckle Belt', 2.49, 'brown', 'images/wome---n/women--belt-brown.png', 2, 33, 121, 0),
(96, 'Leather Alloy Pin Buckle Belt', 2.49, 'black', 'images/wome---n/women--belt-black.png', 2, 33, 654, 0),
(97, 'Ladies Pumps Spring Pointed Toe Party Slip', 23.02, 'beige', 'images/wome---n/women--heel-beige.png', 2, 34, 1222, 0),
(98, 'Ladies Pumps Spring Pointed Toe Party Slip', 23.02, 'red', 'images/wome---n/women----heel-red.png', 2, 34, 1112, 0),
(99, 'Ladies Pumps Spring Pointed Toe Party Slip', 23.02, 'black', 'images/wome---n/women--heel-black.png', 2, 34, 1231, 0),
(100, 'Casual Shoes Breathable Wedge Sneakers', 10.24, 'white', 'images/wome---n/women-sneaker-wht.png', 2, 35, 238, 0),
(101, 'Casual Shoes Breathable Wedge Sneakers', 10.24, 'gey', 'images/wome---n/women-sneaker-gry.png', 2, 35, 23689, 0),
(102, 'Casual Shoes Breathable Wedge Sneakers', 10.24, 'purple', 'images/wome---n/women-sneaker-prp.png', 2, 35, 13489, 0),
(103, 'Casual Shoes Breathable Wedge Sneakers', 10.24, 'yellow', 'images/wome---n/women-sneaker-ylw.png', 2, 35, 5493, 0),
(104, 'Women Platform Sandals Heels', 29.99, 'blue', 'images/wome---n/women-sandal-blue.png', 2, 36, 2111, 0),
(105, 'Women Platform Sandals Heels', 29.99, 'beige', 'images/wome---n/women-sandalbeige.png', 2, 36, 2122, 0),
(106, 'Women Platform Sandals Heels', 29.99, 'red', 'images/wome---n/women--sandal-red.png', 2, 36, 3467, 0),
(107, 'Women Platform Sandals Heels', 29.99, 'grey', 'images/wome---n/women-sandal-grey.png', 2, 36, 3333, 0),
(108, '10Pairs Women Summer Socks', 4.59, 'black', 'images/wome---n/women--sock-black.png', 2, 37, 22222, 0),
(109, '10Pairs Women Summer Socks', 4.59, 'blue', 'images/wome---n/women---sock-blue.png', 2, 37, 1121, 0),
(110, '10Pairs Women Summer Socks', 4.59, 'grey', 'images/wome---n/women--sock--grey.png', 2, 37, 1111, 0),
(111, 'Men Knitted Sweater Cardigan', 29.99, 'grey', 'images/me-----n/sweater.png', 1, 2, 4454, 0),
(112, 'Richard Nguyen Slim Strech Denim Pants', 29.9, 'darkblue', 'images/ta-----b/tab----jeans-blue.png', 1, 8, 5677, 1),
(113, 'Zoilmxmen Cargo Pant', 9.99, 'black', 'images/ta-----b/tab---cargo-black.png', 1, 9, 4444, 1),
(114, 'Denim Shirt Casual', 38.16, 'blue', 'images/ta-----b/tab----denim-blue.PNG', 1, 5, 2212, 1),
(115, 'OLEVS Full Steel Men Watch', 24.99, 'black', 'images/ta-----b/tab---watch-black.png', 1, 15, 3333, 1),
(116, 'YFFUSHI Mens Vest', 18.16, 'black', 'images/ta-----b/tab----vest-black.png', 1, 1, 2311, 1),
(117, 'QingFan Camouflage Hoodie', 15.99, 'grey', 'images/ta-----b/tab---hoddie-grey.png', 1, 6, 3222, 1),
(118, 'ZEREF SlimFit Blouse', 9.99, 'white', 'images/ta-----b/tab--blouse-white.png', 2, 22, 66766, 1),
(119, 'QingFan Camouflage Hoodie', 15.99, 'grey', 'images/ta-----b/tab---hoddie-grey.png', 1, 6, 3222, 0),
(120, 'Denim Shirt Casual', 38.16, 'blue', 'images/ta-----b/tab----denim-blue.PNG', 1, 5, 2212, 0),
(121, 'Richard Nguyen Slim Strech Denim Pants', 29.9, 'darkblue', 'images/ta-----b/tab----jeans-blue.png', 1, 8, 5677, 0),
(122, 'Zoilmxmen Cargo Pant', 9.99, 'black', 'images/ta-----b/tab---cargo-black.png', 1, 9, 4444, 0),
(123, 'Casual Men Cap', 19.99, 'orange', 'images/me-----n/men----cap-orange.png', 1, 12, 887, 0),
(124, 'Casual Men Cap', 19.99, 'red', 'images/me-----n/men-------cap-red.png', 1, 12, 887, 0),
(125, 'Casual Men Cap', 19.99, 'green', 'images/me-----n/men-----cap-green.png', 1, 12, 887, 0),
(126, 'Casual Men Cap', 19.99, 'white', 'images/me-----n/men-----cap-white.png', 1, 12, 1200, 0),
(127, 'ZEREF SlimFit Blouse', 9.99, 'white', 'images/ta-----b/tab--blouse-white.png', 2, 22, 66766, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_side_cart`
--

DROP TABLE IF EXISTS `tbl_side_cart`;
CREATE TABLE IF NOT EXISTS `tbl_side_cart` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `p_price_dollar` float NOT NULL,
  `p_colour` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `p_image_src` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `p_category` int(2) NOT NULL,
  `p_sub_category` int(11) NOT NULL,
  `p_likes` int(11) NOT NULL,
  `p_new_arrivals` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`p_id`),
  KEY `test_ibfk_1` (`p_sub_category`),
  KEY `p_category` (`p_category`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_side_cart`
--

INSERT INTO `tbl_side_cart` (`p_id`, `p_name`, `p_price_dollar`, `p_colour`, `p_image_src`, `p_category`, `p_sub_category`, `p_likes`, `p_new_arrivals`) VALUES
(71, 'New Short Faux Soft Leather Jacket', 20.51, 'pink', './././images/wome---n/women-jacket-pink.png', 2, 23, 2345, 0),
(77, 'Stretch Sports Pants', 4.32, 'grey', './././././././././././././././././././././././././././././././images/wome---n/women---pant-grey.png', 2, 26, 4545, 0),
(113, 'Zoilmxmen Cargo Pant', 9.99, 'black', './././././././././././././././././././././././././././././././images/ta-----b/tab---cargo-black.png', 1, 9, 4444, 1),
(114, 'Denim Shirt Casual', 38.16, 'blue', './././././././././././././././././././././././././././././././images/ta-----b/tab----denim-blue.PNG', 1, 5, 2212, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_category`
--

DROP TABLE IF EXISTS `tbl_sub_category`;
CREATE TABLE IF NOT EXISTS `tbl_sub_category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_sub_category`
--

INSERT INTO `tbl_sub_category` (`c_id`, `c_name`) VALUES
(1, 'men-vest'),
(2, 'men-sweater'),
(3, 'men-t-shirt'),
(4, 'men-formal-shirt'),
(5, 'men-casual-shirt'),
(6, 'men-jacket'),
(7, 'men-coat'),
(8, 'men-jean'),
(9, 'men-sweatpant'),
(10, 'men-trouser'),
(11, 'men-short'),
(12, 'men-cap'),
(13, 'men-sunglass'),
(14, 'men-wallet'),
(15, 'men-watch'),
(16, 'men-belt'),
(17, 'men-formal-shoe'),
(18, 'men-sneaker'),
(19, 'men-sandal'),
(20, 'men-sock'),
(21, 'women-shirt'),
(22, 'women-t-shirt'),
(23, 'women-jacket'),
(24, 'women-coat'),
(25, 'women-jean'),
(26, 'women-sweatpant'),
(27, 'women-trouser'),
(28, 'women-skirt'),
(29, 'women-cap'),
(30, 'women-sunglass'),
(31, 'women-handbag'),
(32, 'women-watch'),
(33, 'women-belt'),
(34, 'women-high-heel'),
(35, 'women-sneaker'),
(36, 'women-sandal'),
(37, 'women-sock');

-- --------------------------------------------------------

--
-- Table structure for table `users_profile`
--

DROP TABLE IF EXISTS `users_profile`;
CREATE TABLE IF NOT EXISTS `users_profile` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `u_username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `u_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `u_account_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `u_age` int(11) NOT NULL,
  `u_address` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `u_gender` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`u_id`),
  UNIQUE KEY `u_username` (`u_username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_profile`
--

INSERT INTO `users_profile` (`u_id`, `u_name`, `u_username`, `u_password`, `u_account_type`, `u_age`, `u_address`, `u_gender`) VALUES
(1, 'mohammed rezaan riyaz', 'rezaan6', '1111', 'Admin', 25, '55a, stuart street, dehiwala', 'male'),
(2, 'john jackson', 'john23', '2222', 'User', 35, '88a, anderson road, kalubowila', 'male');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_product_details`
--
ALTER TABLE `tbl_product_details`
  ADD CONSTRAINT `tbl_product_details_ibfk_1` FOREIGN KEY (`p_sub_category`) REFERENCES `tbl_sub_category` (`c_id`),
  ADD CONSTRAINT `tbl_product_details_ibfk_2` FOREIGN KEY (`p_category`) REFERENCES `tbl_category` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
