-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2020 at 03:46 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bazapodataka`
--

-- --------------------------------------------------------

--
-- Table structure for table `podaci`
--

CREATE TABLE `podaci` (
  `id` int(3) NOT NULL,
  `ime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `datum` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `podaci`
--

INSERT INTO `podaci` (`id`, `ime`, `prezime`, `email`, `datum`) VALUES
(2, 'Ted', 'Smith', 'ted@me.com', '2016-01-29 18:07:49'),
(4, 'Bill', 'Stevens', 'bill@me.com', '2016-01-29 23:38:33'),
(7, 'Will', 'Scott', 'will@me.com', '2016-01-30 00:02:46'),
(8, 'Jane', 'Mill', 'jane@me.com', '0000-00-00 00:00:00'),
(9, 'Adam', 'Brown', 'adam@me.com', '2016-01-30 09:10:10'),
(10, 'Ana', 'Williams', 'ana@me.com', '2016-01-30 09:10:10'),
(11, 'Avril', 'Moore', 'avril@me.com', '2016-01-30 09:10:10'),
(12, 'Bob', 'White', 'bob@me.com', '2016-01-30 09:10:10'),
(13, 'Martin', 'Harris', 'martin@me.com', '2016-01-30 09:10:10'),
(14, 'Garcia', 'Jones', 'garcia@me.com', '2016-01-30 09:10:10'),
(15, 'Clark', 'Robinson', 'clark@me.com', '2016-01-30 09:10:10'),
(16, 'Taylor', 'Clark', 'taylor@gmail.com', '2016-01-30 09:10:10'),
(17, 'Scott', 'Hill', 'scott@me.com', '2016-01-30 09:10:10'),
(18, 'Allen', 'King', 'allen@me.com', '2016-01-30 09:10:10'),
(21, 'nikola', 'aleksic', 'nikola@aleksic.com', '2020-08-22 13:19:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `podaci`
--
ALTER TABLE `podaci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `podaci`
--
ALTER TABLE `podaci`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
