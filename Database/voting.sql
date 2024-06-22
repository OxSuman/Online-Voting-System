-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 07:52 AM
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
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `role` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `votes` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `mobile`, `password`, `address`, `photo`, `role`, `status`, `votes`) VALUES
(5, 'Suman ', 7063772217, '', 'Natna', '', 0, 0, 0),
(6, 'suman', 1212121212, '123', 'Karimpur', '', 0, 0, 0),
(7, 'adam', 1234567890, '111', 'Karimpur', '', 0, 0, 0),
(8, 'aaa', 7063772217, 'aaa', 'Natna', '', 0, 0, 0),
(10, 'andy', 1231231231, '1111', 'Natna', '1338362.png', 1, 1, 0),
(11, 'Suman Biswas', 7063772217, '111', 'Natna', 'Picsart_23-10-17_15-44-22-920.jpg', 2, 1, 12),
(12, 'aaa', 9999999999, '1111', 'Natna', 'your-name-shooting-7680x4320-14938.jpg', 2, 0, 3),
(13, 'qqqq', 2222222222, '111', 'Natna', '7149702.webp', 2, 1, 2),
(14, 'andy', 5555555555, '5555', '5555', 'skeletongrey_by_friekdesign_dgikl24.png', 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
