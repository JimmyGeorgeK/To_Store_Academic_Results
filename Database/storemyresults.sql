-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 12:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storemyresults`
--

-- --------------------------------------------------------

--
-- Table structure for table `sem1`
--

CREATE TABLE `sem1` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sem` int(255) NOT NULL,
  `sub_id` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `marks` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem2`
--

CREATE TABLE `sem2` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sem` int(11) NOT NULL,
  `sub_id` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `marks` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem3`
--

CREATE TABLE `sem3` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sem` int(11) NOT NULL,
  `sub_id` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `marks` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem4`
--

CREATE TABLE `sem4` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sem` int(11) NOT NULL,
  `sub_id` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `marks` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem5`
--

CREATE TABLE `sem5` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sem` int(11) NOT NULL,
  `sub_id` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `marks` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem6`
--

CREATE TABLE `sem6` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sem` int(11) NOT NULL,
  `sub_id` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `marks` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem7`
--

CREATE TABLE `sem7` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sem` int(11) NOT NULL,
  `sub_id` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `marks` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sem8`
--

CREATE TABLE `sem8` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sem` int(11) NOT NULL,
  `sub_id` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `marks` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usn` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sem1`
--
ALTER TABLE `sem1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem2`
--
ALTER TABLE `sem2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem3`
--
ALTER TABLE `sem3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem4`
--
ALTER TABLE `sem4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem5`
--
ALTER TABLE `sem5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem6`
--
ALTER TABLE `sem6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem7`
--
ALTER TABLE `sem7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem8`
--
ALTER TABLE `sem8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `usn` (`usn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sem1`
--
ALTER TABLE `sem1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `sem2`
--
ALTER TABLE `sem2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sem3`
--
ALTER TABLE `sem3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sem4`
--
ALTER TABLE `sem4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sem5`
--
ALTER TABLE `sem5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sem6`
--
ALTER TABLE `sem6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sem7`
--
ALTER TABLE `sem7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sem8`
--
ALTER TABLE `sem8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
