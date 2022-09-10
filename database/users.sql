-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 10, 2022 at 01:49 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_php8_mvc_userlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ext` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shortcut` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(50) COLLATE utf8_unicode_ci DEFAULT 'images/users/user.png',
  `role` varchar(8) COLLATE utf8_unicode_ci DEFAULT 'guest',
  `create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--
-- user: admin@gmail.com
-- pass: admin
INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `level`, `password`, `phone`, `ext`, `shortcut`, `photo`, `role`, `create_at`, `update_at`) VALUES
('20021221', 'admin', 'admin', 'admin@gmail.com', 'admin', '$2y$10$2HJ7cFJYPfss59yYJlAxHuNBmAFLJug8Av.3uH/dP9ZE3hbxmHRHq', '0999999999', '2411', '#80509', 'images/users/5.jpg', 'admin', '2022-08-04 01:27:48', '2022-08-04 01:27:48'),
('20021222', 'user1', 'user1', 'user1@gmail.com', 'Technician', '$2y$10$TKyyi1Bp5PPz.39TDYQEVuQPYbYc3g0oRpkc9OlXOy4bHFzaKfXDa', '0999999999', '2411', '#80509', 'images/users/8.jpg', 'guest', '2022-08-04 01:27:48', '2022-08-04 01:27:48'),
('20021223', 'user2', 'user2', 'user2@gmail.com', 'Sr.Technician', '$2y$10$TKyyi1Bp5PPz.39TDYQEVuQPYbYc3g0oRpkc9OlXOy4bHFzaKfXDa', '0999999999', '2411', '#80509', 'images/users/7.jpg', 'off', '2022-08-04 01:27:48', '2022-08-04 01:27:48'),
('20021224', 'user3', 'user3', 'user3@gmail.com', 'engineer', '$2y$10$TKyyi1Bp5PPz.39TDYQEVuQPYbYc3g0oRpkc9OlXOy4bHFzaKfXDa', '0999999999', '2411', '#80509', 'images/users/2.jpg', 'guest', '2022-08-04 01:27:48', '2022-08-04 01:27:48'),
('20021225', 'user4', 'user4', 'user4@gmail.com', 'engineer', '$2y$10$TKyyi1Bp5PPz.39TDYQEVuQPYbYc3g0oRpkc9OlXOy4bHFzaKfXDa', '0999999999', '2411', '#80509', 'images/users/3.jpg', 'guest', '2022-08-04 01:27:48', '2022-08-04 01:27:48'),
('20021226', 'user5', 'user5', 'user5@gmail.com', 'Sr.Technician', '$2y$10$TKyyi1Bp5PPz.39TDYQEVuQPYbYc3g0oRpkc9OlXOy4bHFzaKfXDa', '0999999999', '2411', '#80509', 'images/users/4.jpg', 'guest', '2022-08-04 01:27:48', '2022-08-04 01:27:48'),
('20021227', 'user6', 'user6', 'user6@gmail.com', 'Technician', '$2y$10$TKyyi1Bp5PPz.39TDYQEVuQPYbYc3g0oRpkc9OlXOy4bHFzaKfXDa', '0999999999', '2411', '#80509', 'images/users/5.jpg', 'guest', '2022-08-04 01:27:48', '2022-08-04 01:27:48'),
('20021228', 'user7', 'user7', 'user7@gmail.com', 'Sr.engineer', '$2y$10$TKyyi1Bp5PPz.39TDYQEVuQPYbYc3g0oRpkc9OlXOy4bHFzaKfXDa', '0999999999', '2411', '#80509', 'images/users/6.jpg', 'guest', '2022-08-04 01:27:48', '2022-08-04 01:27:48'),
('20021229', 'user8', 'user8', 'user8@gmail.com', 'Technician', '$2y$10$TKyyi1Bp5PPz.39TDYQEVuQPYbYc3g0oRpkc9OlXOy4bHFzaKfXDa', '0999999999', '2411', '#80509', 'images/users/7.jpg', 'guest', '2022-08-04 01:27:48', '2022-08-04 01:27:48'),
('20021231', 'user9', 'user9', 'user9@gmail.com', 'Sr.engineer', '$2y$10$TKyyi1Bp5PPz.39TDYQEVuQPYbYc3g0oRpkc9OlXOy4bHFzaKfXDa', '0999999999', '2411', '#80509', 'images/users/8.jpg', 'guest', '2022-08-04 01:27:48', '2022-08-04 01:27:48'),
('20021232', 'user20', 'user20', 'user20@gmail.com', 'Sr.engineer', '$2y$10$TKyyi1Bp5PPz.39TDYQEVuQPYbYc3g0oRpkc9OlXOy4bHFzaKfXDa', '0999999999', '2411', '#80509', 'images/users/9.jpg', 'guest', '2022-08-04 01:27:48', '2022-08-04 01:27:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
