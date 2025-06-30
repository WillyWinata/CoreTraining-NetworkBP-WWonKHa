-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2025 at 07:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wonka`
--

-- --------------------------------------------------------

--
-- Table structure for table `MsProduct`
--

CREATE TABLE `MsProduct` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductCategoryID` int(11) NOT NULL,
  `ProductDescription` varchar(255) NOT NULL,
  `ProductPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `MsProduct`
--

INSERT INTO `MsProduct` (`ProductID`, `ProductName`, `ProductCategoryID`, `ProductDescription`, `ProductPrice`) VALUES
(1, 'Golden Ticket Bar', 1, 'Milk chocolate with a chance to win prizes', 4.99),
(2, 'Dark Chocolate Supreme', 1, '70% dark chocolate with sea salt', 5.49),
(3, 'White Chocolate Dream', 1, 'Creamy white chocolate with vanilla', 4.79),
(4, 'Nutty Crunch Bar', 1, 'Milk chocolate with roasted almonds', 5.29),
(5, 'Caramel Delight', 1, 'Chocolate bar filled with golden caramel', 5.99),
(6, 'Everlasting Gobstoppers', 2, 'Color-changing jawbreakers', 3.49),
(7, 'Rainbow Drops', 2, 'Colorful fruit-flavored hard candies', 2.99),
(8, 'Chocolate Coins', 2, 'Gold-wrapped chocolate coins', 4.29),
(9, 'Lemon Drops', 2, 'Tangy lemon-flavored hard candy', 2.79),
(10, 'Gummy Bears', 3, 'Soft, chewy fruit-flavored bears', 3.99),
(11, 'Chocolate Gummies', 3, 'Unique chocolate-flavored gummy candy', 4.49),
(12, 'Sour Worms', 3, 'Tangy sour gummy worms', 3.79),
(13, 'Marshmallow Clouds', 3, 'Fluffy vanilla marshmallows', 3.29),
(14, 'Artisan Truffle Box', 4, '12 hand-rolled chocolate truffles', 12.99),
(15, 'Chocolate Fountain Mix', 4, 'Perfect chocolate for fountains', 8.99),
(16, 'Gift Assortment', 4, 'Luxury box with variety of chocolates', 24.99),
(17, 'Custom Chocolate Molds', 4, 'Personalized chocolate shapes', 15.99),
(18, 'Fizzy Lifting Drinks', 5, 'Carbonated chocolate beverage', 2.99),
(19, 'Hot Chocolate Mix', 5, 'Premium hot chocolate powder', 6.49),
(20, 'Chocolate Milk', 5, 'Rich and creamy chocolate milk', 1.99),
(21, 'Iced Chocolate Coffee', 5, 'Cold chocolate coffee blend', 3.49);

-- --------------------------------------------------------

--
-- Table structure for table `MsProductCategory`
--

CREATE TABLE `MsProductCategory` (
  `ProductCategoryID` int(11) NOT NULL,
  `ProductCategoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `MsProductCategory`
--

INSERT INTO `MsProductCategory` (`ProductCategoryID`, `ProductCategoryName`) VALUES
(1, 'Chocolate Bars'),
(2, 'Hard Candies'),
(3, 'Gummy & Soft Candies'),
(4, 'Premium Collection'),
(5, 'Beverages');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `MsProduct`
--
ALTER TABLE `MsProduct`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `ProductCategoryID` (`ProductCategoryID`);

--
-- Indexes for table `MsProductCategory`
--
ALTER TABLE `MsProductCategory`
  ADD PRIMARY KEY (`ProductCategoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `MsProduct`
--
ALTER TABLE `MsProduct`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `MsProductCategory`
--
ALTER TABLE `MsProductCategory`
  MODIFY `ProductCategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `MsProduct`
--
ALTER TABLE `MsProduct`
  ADD CONSTRAINT `msproduct_ibfk_1` FOREIGN KEY (`ProductCategoryID`) REFERENCES `MsProductCategory` (`ProductCategoryID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
