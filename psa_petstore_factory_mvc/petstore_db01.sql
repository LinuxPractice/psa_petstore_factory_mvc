-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2018 at 07:58 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petstore_db01`
--
CREATE DATABASE IF NOT EXISTS `petstore_db01` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `petstore_db01`;

-- --------------------------------------------------------

--
-- Table structure for table `psa_attributes`
--

DROP TABLE IF EXISTS `psa_attributes`;
CREATE TABLE `psa_attributes` (
  `attributes_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `attribute_name` varchar(45) DEFAULT NULL,
  `attribute_value` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `psa_attributes`
--

INSERT INTO `psa_attributes` (`attributes_id`, `product_id`, `attribute_name`, `attribute_value`) VALUES
(1, 1, 'breed', 'persian'),
(2, 1, 'age', '5'),
(3, 1, 'lifespan', '8'),
(4, 1, 'color', 'brown'),
(5, 1, 'salePrice', '100'),
(6, 2, 'breed', 'siamese'),
(7, 2, 'age', '3'),
(8, 2, 'lifespan', '8'),
(9, 2, 'color', 'black'),
(10, 3, 'breed', 'persian'),
(11, 3, 'age', '2'),
(12, 3, 'lifespan', '8'),
(13, 3, 'color', 'brown'),
(14, 4, 'breed', 'sphynx'),
(15, 4, 'age', '7'),
(16, 4, 'lifespan', '8'),
(17, 4, 'color', 'orange'),
(18, 4, 'salePrice', '100'),
(19, 5, 'breed', 'munchkin'),
(20, 5, 'age', '1'),
(21, 5, 'lifespan', '8'),
(22, 5, 'color', 'white'),
(23, 6, 'breed', 'pekingese'),
(24, 6, 'age', '4'),
(25, 6, 'lifespan', '14'),
(26, 6, 'color', 'brown'),
(27, 7, 'breed', 'bulldog'),
(28, 7, 'age', '7'),
(29, 7, 'lifespan', '12'),
(30, 7, 'color', 'brindle'),
(31, 7, 'salePrice', '100'),
(32, 8, 'breed', 'pitbull'),
(33, 8, 'age', '8'),
(34, 8, 'lifespan', '10'),
(35, 8, 'color', 'brindle'),
(36, 8, 'salePrice', '100'),
(37, 9, 'breed', 'terrier'),
(38, 9, 'age', '5'),
(39, 9, 'lifespan', '14'),
(40, 9, 'color', 'orange'),
(41, 10, 'breed', 'irish setter'),
(42, 10, 'age', '2'),
(43, 10, 'lifespan', '8'),
(44, 10, 'color', 'red'),
(45, 11, 'species', 'tortoise'),
(46, 11, 'age', '65'),
(47, 11, 'lifespan', '99'),
(48, 11, 'color', 'brown'),
(49, 11, 'salePrice', '100'),
(50, 12, 'species', 'python'),
(51, 12, 'age', '1'),
(52, 12, 'lifespan', '10'),
(53, 12, 'color', 'brindle'),
(54, 13, 'species', 'frog'),
(55, 13, 'age', '1'),
(56, 13, 'lifespan', '2'),
(57, 13, 'color', 'brindle'),
(58, 14, 'species', 'gecko'),
(59, 14, 'age', '1'),
(60, 14, 'lifespan', '5'),
(61, 14, 'color', 'orange'),
(62, 15, 'species', 'alligator'),
(63, 15, 'age', '1'),
(64, 15, 'lifespan', '50'),
(65, 15, 'color', 'red'),
(66, 16, 'age', ''),
(67, 16, 'lifespan', ''),
(68, 16, 'color', 'green'),
(69, 16, 'material', 'plastic'),
(70, 16, 'size', '3'),
(71, 16, 'weight', '1'),
(72, 17, 'age', ''),
(73, 17, 'lifespan', ''),
(74, 17, 'color', 'yellow'),
(75, 17, 'material', 'plastic'),
(76, 17, 'size', '4'),
(77, 17, 'weight', '2'),
(78, 18, 'age', ''),
(79, 18, 'lifespan', ''),
(80, 18, 'color', 'white'),
(81, 18, 'material', 'hemp'),
(82, 18, 'size', '6'),
(83, 18, 'weight', '5'),
(84, 19, 'age', ''),
(85, 19, 'lifespan', ''),
(86, 19, 'color', 'green'),
(87, 19, 'material', 'rubber'),
(88, 19, 'size', '4'),
(89, 19, 'weight', '2'),
(90, 20, 'age', ''),
(91, 20, 'lifespan', ''),
(92, 20, 'color', 'red'),
(93, 20, 'material', 'rubber'),
(94, 20, 'size', '10'),
(95, 20, 'weight', '1'),
(96, 21, 'age', ''),
(97, 21, 'lifespan', ''),
(98, 21, 'color', 'green'),
(99, 21, 'material', 'plastic'),
(100, 21, 'width', '36'),
(101, 21, 'height', '36'),
(102, 22, 'age', ''),
(103, 22, 'lifespan', ''),
(104, 22, 'color', 'yellow'),
(105, 22, 'material', 'plastic'),
(106, 22, 'width', '12'),
(107, 22, 'height', '12'),
(108, 23, 'age', ''),
(109, 23, 'lifespan', ''),
(110, 23, 'color', 'white'),
(111, 23, 'material', 'metal'),
(112, 23, 'width', '24'),
(113, 23, 'height', '34'),
(114, 24, 'age', ''),
(115, 24, 'lifespan', ''),
(116, 24, 'color', 'green'),
(117, 24, 'material', 'metal'),
(118, 24, 'width', '6'),
(119, 24, 'height', '6'),
(120, 25, 'age', ''),
(121, 25, 'lifespan', ''),
(122, 25, 'color', 'red'),
(123, 25, 'material', 'metal'),
(124, 25, 'width', '10'),
(125, 25, 'height', '10');

-- --------------------------------------------------------

--
-- Table structure for table `psa_products`
--

DROP TABLE IF EXISTS `psa_products`;
CREATE TABLE `psa_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(45) NOT NULL,
  `product_type` varchar(45) NOT NULL DEFAULT '0',
  `product_price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `psa_products`
--

INSERT INTO `psa_products` (`product_id`, `product_name`, `product_type`, `product_price`) VALUES
(1, 'Bella', 'cat', '200.00'),
(2, 'Shadow', 'cat', '200.00'),
(3, 'Tigger', 'cat', '200.00'),
(4, 'Molly', 'cat', '200.00'),
(5, 'Luna', 'cat', '200.00'),
(6, 'Bailey', 'dog', '200.00'),
(7, 'Max', 'dog', '200.00'),
(8, 'Rocky', 'dog', '200.00'),
(9, 'Buster', 'dog', '200.00'),
(10, 'Lucky', 'dog', '200.00'),
(11, 'Raphael', 'reptile', '200.00'),
(12, 'Slither', 'reptile', '200.00'),
(13, 'Croaker', 'reptile', '200.00'),
(14, 'Chimera', 'reptile', '200.00'),
(15, 'Ally', 'reptile', '200.00'),
(16, 'Chew Toy', 'toy', '10.00'),
(17, 'Squeaky Toy', 'toy', '12.50'),
(18, 'Rope Pull', 'toy', '4.99'),
(19, 'Ball', 'toy', '1.99'),
(20, 'Large Ball', 'toy', '3.99'),
(21, 'Large Carrier', 'carrier', '49.99'),
(22, 'Small Carrier', 'carrier', '19.99'),
(23, 'Medium Carrier', 'carrier', '29.99'),
(24, 'Reptile Transport', 'carrier', '5.99'),
(25, 'Cat Transport', 'carrier', '19.99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `psa_attributes`
--
ALTER TABLE `psa_attributes`
  ADD PRIMARY KEY (`attributes_id`);

--
-- Indexes for table `psa_products`
--
ALTER TABLE `psa_products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `psa_attributes`
--
ALTER TABLE `psa_attributes`
  MODIFY `attributes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `psa_products`
--
ALTER TABLE `psa_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
