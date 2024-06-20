-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2024 at 02:22 AM
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
(7, '2024-06-07', '22:28:00', 1, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `query` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `title`, `description`, `query`) VALUES
(1, 'ccrt', 'asdas', 'asdsadfgvdvd');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `rating` tinyint DEFAULT NULL,
  `comment` text COLLATE utf8mb4_general_ci
) ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `id_user`, `rating`, `comment`) VALUES
(1, 4, 0, 'asd asdas '),
(2, 7, 5, 'Excelente Barbero'),
(3, 7, 3, 'Bien');

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
(1, 'afeitado', 8000),
(5, 'sdfdf', 111),
(7, 'sfsdf cuatro :)', 3434444);

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
(7, 'Cristian', 'Pedraza', 'cp@gmail.com', '$2y$10$ZzQAs4sm3etaU463jkrR9O1elUWSFAwZa3ZpYDnVt1KVqlnBoW0DS', 'barber'),
(8, 'Nicole', 'Pedraza', 'nicolepgodoy29@gmail.com', '$2y$10$aXvkMkZN6.wOJ.npyimRLeH2.Fsp5zK5lC9oA2FcsmBMmih8NeYGG', 'barber'),
(11, 'Cristian', '', 'cp@gmail.com', '145236', 'usuario'),
(12, 'Dayana', 'Godoy', 'nicolepgodoy29@gmail.com', '$2y$10$iG6YfoH3DW/2r69fWPUhceKY/bBmiLHm/ea/2RukDee2Scfo9jwXO', 'admin'),
(13, 'camilo', 'torres', 'ct@gmail.com', '$2y$10$qkC5vV/R8ijy7BJY.vtrvOovcPkgcVuZAgs5OgWKGrtGRBMSiZQj2', 'admin');

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
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
