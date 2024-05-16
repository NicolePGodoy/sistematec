-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 16, 2024 at 05:01 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistematec`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id` int NOT NULL,
  `date` date DEFAULT NULL,
  `hour` time DEFAULT NULL,
  `customer_id` int DEFAULT NULL,
  `barber_id` int DEFAULT NULL,
  `service_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `date`, `hour`, `customer_id`, `barber_id`, `service_id`) VALUES
(1, '2024-05-24', '03:00:00', 1, 2, 1),
(2, '2024-05-31', '04:45:00', 1, 7, 2),
(3, '2024-05-18', '05:15:00', 1, 4, 2),
(4, '2024-05-10', '12:00:00', 1, 5, 3),
(5, '2024-05-10', '05:21:00', 1, 4, 2),
(6, '2024-05-17', '03:46:00', 7, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `description`, `price`) VALUES
(1, 'Corte sencillo', 16000),
(2, 'Corte + barba', 24000),
(3, 'Corte + lavado', 20000),
(4, 'Corte + cejas', 22000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `rol` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `correo`, `password`, `rol`) VALUES
(1, 'Cristian', 'Ramirez', 'cr@gmail.com', '$2y$10$VxeYyQ5jiY2Kf19q1N8GjO/Mj4qDAx4j9rYi2RjlQ7hI56MBOudYO', 'admin'),
(2, 'Nicole', 'Pedraza', 'nico@gmail.com', '$2y$10$aRPYOZW/zrYgdL4a0zotaeFqm0IUKyRA3VnDDk/70mrX8xXJfyIB6', 'admin'),
(3, 'Dayana', 'Godoy', 'nicoe3ee@gmail.com', '$2y$10$.4YWFTyDMh3xmKdkrBzNTOspqYQC.cmgORUHcAGrmGfQcf5D1uFaS', 'user'),
(4, 'Camill', 'ddd', 'dd@gmail.com', '$2y$10$k7PkFJAPgdOxzuEFUS2kXet4UOEDudy5QUH.caJpnAMzaikmbhEAq', 'barber'),
(5, 'aaa', 'ccc', 'dd@mail.com', '$2y$10$.8a1Zha.jxdWvSkFbUYHdeiksNBlxr6hVGd3PgDoApuZEReErBaSm', 'barber'),
(6, 'wew', 'werewd', 'crss@gmail.com', '$2y$10$VNRZi6UMs/mVgSLzvPaofeBpLK4WJGHz7MqlSG8RG8U.1gXPxPEx6', 'barber'),
(7, 'Cristian', 'Pedraza', 'cp@gmail.com', '$2y$10$ZzQAs4sm3etaU463jkrR9O1elUWSFAwZa3ZpYDnVt1KVqlnBoW0DS', 'barber');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `barber_id` (`barber_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calendar`
--
ALTER TABLE `calendar`
  ADD CONSTRAINT `calendar_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `calendar_ibfk_2` FOREIGN KEY (`barber_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `calendar_ibfk_3` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
