-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 01:33 PM
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
