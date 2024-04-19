-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 07:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpllogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`) VALUES
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Mobile_Number` bigint(10) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `Username`, `Email`, `Mobile_Number`, `Password`) VALUES
(1, 'wimukthi', 'wimukthiudana789@gmail.com', 710907927, 'Wimukthi@23'),
(2, 'shazna', 'Shazna@gmail.com', 796312852, '$2y$10$blsqoqJhfIi.gyqlZDlYiOf.TzEMrwNjOLdmnlnfoN.sX7SBOOs4y'),
(5, 'saveen', 'saveen@example.com', 555246584, '$2y$10$THRW/coUdGarmHFCQEyWx.E8UX6VlnyKTZbD8HPjO9.szy6J9C6ma'),
(6, 'Erandi', 'erandi@gmail.com', 221546958, '$2y$10$DhKi817CewFFZjP8j1d7JezKOuvTSLzZT8sBB0t6jbcm/6ug7Dj7i'),
(7, 'Thevuni', 'Thevuni123@gmail.com', 1254365897, '$2y$10$6S6ZcOg1OHFkTB4fz895LebqNprAhUi7EL.JdRYDDtPkOGtleYkqi');

-- --------------------------------------------------------

--
-- Table structure for table `my_cart`
--

CREATE TABLE `my_cart` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `my_cart`
--

INSERT INTO `my_cart` (`id`, `name`, `price`, `qty`) VALUES
(11, 'AMAMI', 750, 0),
(13, 'Febreze Air', 1400, 0),
(17, 'Ambi Pur ', 1750, 5),
(18, 'Ambi Pur ', 1750, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `name`, `price`) VALUES
('#A001', 'AMAMI', 'Rs 750.00'),
('#A002', 'Ambi Pur ', 'Rs 1750.00'),
('#A004', 'Febreze Air', 'Rs 1400.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Mobile_Number` int(10) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Mobile_Number`, `Password`) VALUES
(1, 'saveen', 'saveen@123', 45, 'passw@123'),
(2, 'shazna', 'shazna123@gmail.com', 24, 'Shazna12'),
(3, 'wimukthi', 'wimukthiudanamanchnayaka@gmail.com', 710907927, 'wimu@123'),
(4, 'wim', '', 71, 'cc'),
(5, 'wimu', '', 714444444, '111'),
(6, 'ygghjbhjbhjb', 'wimukthiudanamanchnayaka@gmail.com', 111111111, 'c'),
(7, 'saveen', 'wimukthiudanamanchnayaka@gmail.com', 700000000, 'savee'),
(8, 'saveen', '', 710907927, 'wim'),
(9, 'aa', 'wimukthiudana789@gmail.com', 710907927, 'aa'),
(10, 'aaaaaa', '', 2147483647, '55'),
(11, '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `my_cart`
--
ALTER TABLE `my_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `my_cart`
--
ALTER TABLE `my_cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
