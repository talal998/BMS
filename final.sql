-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 05, 2020 at 04:56 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `nickinuse`
--

CREATE TABLE `nickinuse` (
  `id` int(11) NOT NULL,
  `nick` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `nickinuse`
--

INSERT INTO `nickinuse` (`id`, `nick`) VALUES
(4, 'lal'),
(5, 'eee'),
(6, 'er'),
(7, 'eeew'),
(34, 'dd'),
(36, 'hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nickinuse`
--
ALTER TABLE `nickinuse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nickinuse`
--
ALTER TABLE `nickinuse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
