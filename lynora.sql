-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2025 at 12:19 PM
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
-- Database: `lynora`
--

-- --------------------------------------------------------

--
-- Table structure for table `bike`
--

CREATE TABLE `bike` (
  `p_id` int(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` float NOT NULL,
  `images` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bike`
--

INSERT INTO `bike` (`p_id`, `title`, `category`, `description`, `price`, `images`) VALUES
(2, 'Bike', 'Bike', 'Kids Jeep – KP906 2 Seater 4 Wheel Drive ISAKAA Ultra Jumbo Jeep – 1-9 Years. 12v battery with Bluetooth, Music system, Real LED', 1300, '5.webp'),
(3, 'Bike', 'Bike', 'Kids Jeep – KP906 2 Seater 4 Wheel Drive ISAKAA Ultra Jumbo Jeep – 1-9 Years. 12v battery with Bluetooth, Music system, Real LED', 1000, '2.webp'),
(4, 'Bike', 'Bike', 'Kids Jeep – KP906 2 Seater 4 Wheel Drive ISAKAA Ultra Jumbo Jeep – 1-9 Years. 12v battery with Bluetooth, Music system, Real LED', 1000, '2.webp');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `p_id` int(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  `category` varchar(10) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` float NOT NULL,
  `images` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`p_id`, `title`, `category`, `description`, `price`, `images`) VALUES
(2, 'Car child', 'male', 'Kids Jeep – KP906 2 Seater 4 Wheel Drive ISAKAA Ultra Jumbo Jeep – 1-9 Years. 12v battery with Bluetooth, Music system, Real LED', 1212, '6.jpg'),
(3, 'Car child', 'Car', 'Kids Jeep – KP906 2 Seater 4 Wheel Drive ISAKAA Ultra Jumbo Jeep – 1-9 Years. 12v battery with Bluetooth, Music system, Real LED', 2450, '3.jpg'),
(4, 'Car sport', 'Car', 'Kids Jeep – KP906 2 Seater 4 Wheel Drive ISAKAA Ultra Jumbo Jeep – 1-9 Years. 12v battery with Bluetooth, Music system, Real LED', 2700, '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(30) NOT NULL,
  `images` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `qty` int(10) NOT NULL,
  `total` float NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `images`, `title`, `price`, `qty`, `total`, `Name`) VALUES
(7, '5.webp', 'Bike', 1300, 1, 1300, 'Dhruvit Kathiriya'),
(8, '6.jpg', 'Car', 1212, 1, 1212, ''),
(9, '8.jpg', 'jeep ', 2500, 2, 5000, 'Dhruvit Kathiriya');

-- --------------------------------------------------------

--
-- Table structure for table `check_out`
--

CREATE TABLE `check_out` (
  `p_id` int(30) NOT NULL,
  `images` varchar(30) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `qty` float NOT NULL,
  `address` varchar(30) NOT NULL,
  `total` float NOT NULL,
  `payment_method` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `check_out`
--

INSERT INTO `check_out` (`p_id`, `images`, `p_name`, `price`, `qty`, `address`, `total`, `payment_method`, `status`) VALUES
(1, '1.webp', '0', 1300, 1, 'Kalwa Choak Junagadh', 1300, 'Cash on Delivery', 'done'),
(2, '1.webp', '0', 1300, 1, 'Plot Vishtar', 1300, 'Cash on Delivery', 'done'),
(3, '5.webp', 'Bike', 1300, 1, 'Plot Vishtar', 1300, 'Cash on Delivery', 'done'),
(4, '6.jpg', 'Car', 1212, 1, 'Shobhavadala lashkar', 1212, 'Cash on Delivery', ''),
(5, '6.jpg', 'Car', 1212, 1, 'dhu', 1212, 'Cash on Delivery', ''),
(6, '6.jpg', 'Car', 1212, 1, 'ddaaf', 1212, 'Cash on Delivery', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `p_id` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Message` varchar(30) NOT NULL,
  `Mobile_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`p_id`, `Name`, `Email`, `Message`, `Mobile_no`) VALUES
(1, 'Dhruvit Kathiriya', 'f1@gmail.com', 'good', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `jeep`
--

CREATE TABLE `jeep` (
  `p_id` int(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` float NOT NULL,
  `images` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jeep`
--

INSERT INTO `jeep` (`p_id`, `title`, `category`, `description`, `price`, `images`) VALUES
(2, 'mini', 'male', 'Kids Jeep – KP906 2 Seater 4 Wheel Drive ISAKAA Ultra Jumbo Jeep – 1-9 Years. 12v battery with Bluetooth, Music system, Real LED', 2100, '7.webp'),
(3, 'jeep ', 'male', 'Kids Jeep – KP906 2 Seater 4 Wheel Drive ISAKAA Ultra Jumbo Jeep – 1-9 Years. 12v battery with Bluetooth, Music system, Real LED', 2500, '8.jpg'),
(4, 'Jeep', 'Jeep', 'Kids Jeep – KP906 2 Seater 4 Wheel Drive ISAKAA Ultra Jumbo Jeep – 1-9 Years. 12v battery with Bluetooth, Music system, Real LED', 1500, '2.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Name` varchar(30) NOT NULL,
  `Password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Name`, `Password`) VALUES
('Dhruvit Kathiriya', 123456),
('Dhruvit Kathiriya', 111111),
('Dhruvit Kathiriya', 0),
('Dhruvit Kathiriya', 11111111);

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `Name` varchar(30) NOT NULL,
  `Mnumber` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`Name`, `Mnumber`, `Email`, `Password`) VALUES
('Dhruvit Kathiriya', '9265344835', 'd1@gmail.com', 123456),
('Dhruvit Kathiriya', '0926534483', 'd1@gmail.com', 111111),
('Dhruvit Kathiriya', '0926534483', 'd1@gmail.com', 0),
('Dhruvit Kathiriya', '0926534483', 'd1@gmail.com', 11111111);

-- --------------------------------------------------------

--
-- Table structure for table `treading_product`
--

CREATE TABLE `treading_product` (
  `p_id` int(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `category` varchar(10) NOT NULL,
  `description` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `images` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bike`
--
ALTER TABLE `bike`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `check_out`
--
ALTER TABLE `check_out`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `jeep`
--
ALTER TABLE `jeep`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `treading_product`
--
ALTER TABLE `treading_product`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bike`
--
ALTER TABLE `bike`
  MODIFY `p_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `p_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `p_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `check_out`
--
ALTER TABLE `check_out`
  MODIFY `p_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `p_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jeep`
--
ALTER TABLE `jeep`
  MODIFY `p_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `treading_product`
--
ALTER TABLE `treading_product`
  MODIFY `p_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
