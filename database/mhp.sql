-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 02:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'isAdmin',
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `fullName`, `username`, `role`, `password`) VALUES
(1, 'alice samile', 'alice', 'isAdmin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `productName` text NOT NULL,
  `soldBy` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT '''available''',
  `productCategory` int(11) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productName`, `soldBy`, `status`, `productCategory`, `productPrice`, `productImage`) VALUES
(1, 't-shirt', 1, 'on stock', 1, 12000, 'a137a885bc6bfa50ba496e9203606d79.jpg'),
(3, 'Mac laptop', 1, 'on stock', 2, 2000000, 'best laptops1679305053832.jpg'),
(4, 'shoes', 1, 'on stock', 3, 25000, '7pyu4_512.jpg'),
(5, 'shoes', 1, 'on stock', 3, 35000, 'images.jpg'),
(6, 'shoes', 1, 'on stock', 3, 40000, '13364970_15364214_1000.jpg'),
(7, 'furniture', 1, 'on stock', 4, 230000, 'furniture.jpg'),
(8, 'furniture', 1, 'on stock', 4, 400000, '61tV07vXkIL.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `pCategoryId` int(11) NOT NULL,
  `categoryName` text NOT NULL,
  `dateAdded` date NOT NULL,
  `addedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`pCategoryId`, `categoryName`, `dateAdded`, `addedBy`) VALUES
(1, 'Clothes', '2023-05-25', 1),
(2, 'cumputer', '2023-05-25', 1),
(3, 'shoes', '2023-05-26', 1),
(4, 'furniture', '2023-05-26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `sellerId` int(11) NOT NULL,
  `sellerFullName` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phoneNumber` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'isSeller',
  `location` text NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`sellerId`, `sellerFullName`, `username`, `phoneNumber`, `email`, `role`, `location`, `password`) VALUES
(1, 'yohana samile', 'samile', 745668527, 'samileking9@gmail.com', 'isSeller', 'mbeya', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`pCategoryId`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`sellerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `pCategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `sellerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
