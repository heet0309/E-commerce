-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 01:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_cart`
--

CREATE TABLE `tb_cart` (
  `Cart_id` int(30) NOT NULL,
  `Product_name` varchar(30) NOT NULL,
  `Price` int(10) NOT NULL,
  `Image1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_cart`
--

INSERT INTO `tb_cart` (`Cart_id`, `Product_name`, `Price`, `Image1`) VALUES
(112, 'LAPTOP1', 53000, 'laptop2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(30) NOT NULL,
  `Category_name` varchar(30) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `Category_name`, `image`) VALUES
(33, 'LAPTOP', 'laptop1.jpg'),
(34, 'SMARTPHONE', 'smartphone1.jpeg'),
(35, 'SMARTWATCH', 'smartwatch1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_feedback`
--

CREATE TABLE `tb_feedback` (
  `Feedback_id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `Feedback_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_feedback`
--

INSERT INTO `tb_feedback` (`Feedback_id`, `username`, `subject`, `message`, `Feedback_date`) VALUES
(6, 'ABC', 'ABOUT PRODUCT', 'IT WAS NICE PRODUT', '2021-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `User_id` int(30) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`User_id`, `Password`) VALUES
(7080, '1234'),
(7085, '5678'),
(7088, '9123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_master`
--

CREATE TABLE `tb_order_master` (
  `Order_id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `price` int(30) NOT NULL,
  `Product_name` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order_master`
--

INSERT INTO `tb_order_master` (`Order_id`, `username`, `Address`, `quantity`, `price`, `Product_name`, `amount`) VALUES
(46, 'ABC', 'rajkot', 1, 53000, 'LAPTOP1', 53000),
(47, 'ABC', 'rajkot', 1, 10000, 'SMARTPHONE1', 10000),
(48, '', 'rajkot', 1, 53000, 'LAPTOP1', 53000),
(49, '', 'rajkot', 1, 53000, 'LAPTOP1', 53000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `Product_id` int(30) NOT NULL,
  `Product_name` varchar(30) NOT NULL,
  `Category_id` int(30) NOT NULL,
  `Image1` text NOT NULL,
  `Image2` text NOT NULL,
  `Image3` text NOT NULL,
  `Price` int(10) NOT NULL,
  `stock` int(10) NOT NULL,
  `warranty` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`Product_id`, `Product_name`, `Category_id`, `Image1`, `Image2`, `Image3`, `Price`, `stock`, `warranty`) VALUES
(30, 'LAPTOP1', 33, 'laptop2.jpg', 'laptop3.png', 'laptop4.png', 53000, 50, '1 YEAR'),
(31, 'SMARTPHONE1', 34, 'smartphone2.jpg', 'smartphone3.jpg', 'smartphone4.jpg', 10000, 50, '1 YEAR'),
(32, 'SMARTWATCH1', 36, 'smartwatch2.jpg', 'smartwatch3.jpg', 'smartwatch4.jpg', 5000, 50, '1 YEAR');

-- --------------------------------------------------------

--
-- Table structure for table `tb_registration`
--

CREATE TABLE `tb_registration` (
  `Registration_id` int(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `E-mail` varchar(30) NOT NULL,
  `Password` text NOT NULL,
  `contact` int(50) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_registration`
--

INSERT INTO `tb_registration` (`Registration_id`, `username`, `E-mail`, `Password`, `contact`, `Address`) VALUES
(20, 'abc', 'abc@gmail.com', '1234', 1234567890, 'rajkot'),
(21, 'abc', 'abc@gmail.com', '1234', 1234567890, 'rajkot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD PRIMARY KEY (`Cart_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  ADD PRIMARY KEY (`Feedback_id`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `tb_order_master`
--
ALTER TABLE `tb_order_master`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `tb_registration`
--
ALTER TABLE `tb_registration`
  ADD PRIMARY KEY (`Registration_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cart`
--
ALTER TABLE `tb_cart`
  MODIFY `Cart_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  MODIFY `Feedback_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_order_master`
--
ALTER TABLE `tb_order_master`
  MODIFY `Order_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `Product_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_registration`
--
ALTER TABLE `tb_registration`
  MODIFY `Registration_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
