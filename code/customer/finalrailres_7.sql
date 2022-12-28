-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2022 at 06:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalrailres_6`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`f_name`, `l_name`, `email`, `password`, `code`, `status`) VALUES
('mizbaul', 'haque', 'mizbaulhaque@rail.com', 'eb62f6b9306db575c2d596b1279627a4', 0, ''),
('Samin', 'Sadaf', 'saminsadaf7@gmail.com', '$2y$10$/u3X83/2LGIg42vgStoc2OX/9.XAVv/xDyAUzpWtKikShVWT7uPSe', 0, 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `class` varchar(10) NOT NULL,
  `no` int(11) NOT NULL,
  `seat` varchar(30) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`id`, `schedule_id`, `user_email`, `user_id`, `code`, `class`, `no`, `seat`, `date`) VALUES
(1, 2, 'saminsadaf7@gmail.com', 1, '2022-12-2863AC0F', 'AC', 1, 'AC', '2022-12-28'),
(2, 16, 'saminsadaf7@gmail.com', 1, '2022-12-2863AC3B', 'SHOVON', 1, 'SHOVON', '2022-12-28'),
(3, 16, 'saminsadaf7@gmail.com', 1, '2022-12-2863AC3B', 'SHOVON', 1, 'SHOVON', '2022-12-28'),
(4, 16, 'saminsadaf7@gmail.com', 1, '2022-12-2863AC46', 'SHOVON', 1, 'SHOVON', '2022-12-28'),
(5, 16, 'saminsadaf7@gmail.com', 1, '2022-12-2863AC47', 'SHOVON', 1, 'SHOVON', '2022-12-28'),
(6, 16, 'saminsadaf7@gmail.com', 1, '2022-12-2863AC49', 'SHULOV', 1, 'SHULOV', '2022-12-28'),
(7, 16, 'saminsadaf7@gmail.com', 1, '2022-12-2863AC49', 'SHOVON', 1, 'SHOVON', '2022-12-28'),
(8, 16, 'saminsadaf7@gmail.com', 1, '2022-12-2863AC4B', 'BERTH', 1, 'BERTH', '2022-12-28'),
(9, 16, 'saminsadaf7@gmail.com', 1, '2022-12-2863AC4C', 'BERTH', 1, 'BERTH', '2022-12-28'),
(10, 16, 'saminsadaf7@gmail.com', 1, '2022-12-2863AC4D', 'SHOVON', 1, 'SHOVON', '2022-12-28'),
(11, 16, 'saminsadaf7@gmail.com', 1, '2022-12-2863AC4F', 'AC', 1, 'AC', '2022-12-28'),
(12, 16, 'saminsadaf7@gmail.com', 1, '2022-12-2863AC4F', 'SHOVON', 1, 'SHOVON', '2022-12-28'),
(13, 16, 'saminsadaf7@gmail.com', 1, '2022-12-2863AC51', 'SHOVON', 1, 'SHOVON', '2022-12-28'),
(14, 16, 'saminsadaf7@gmail.com', 1, '2022-12-2863AC66', 'SHOVON', 1, 'SHOVON', '2022-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `ref` varchar(100) NOT NULL,
  `date` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `start` varchar(100) NOT NULL,
  `stop` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `start`, `stop`) VALUES
(1, 'Dhaka', 'Sylhet'),
(2, 'Rajshahi', 'Khulna');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `train_id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(10) NOT NULL,
  `SHOVON` float NOT NULL,
  `SHULOV` float NOT NULL,
  `BERTH` float NOT NULL,
  `AC` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `train_id`, `route_id`, `date`, `time`, `SHOVON`, `SHULOV`, `BERTH`, `AC`) VALUES
(1, 1, 1, '2022-12-28', '14:50', 100, 88, 28, 85),
(2, 2, 1, '2022-12-28', '11:30', 82, 99, 4, 89),
(3, 1, 1, '2022-12-29', '22:22', 200, 200, 200, 200),
(4, 1, 1, '2022-12-29', '23:00', 250, 250, 300, 350),
(7, 1, 1, '2022-12-29', '22:20', 100, 100, 110, 110),
(9, 1, 1, '2022-12-29', '21:45', 20, 18, 60, 69),
(10, 1, 1, '2022-12-29', '21:45', 20, 18, 60, 69),
(16, 1, 1, '2022-12-29', '23:45', 25, 27, 30, 28);

-- --------------------------------------------------------

--
-- Table structure for table `seats_availability`
--

CREATE TABLE `seats_availability` (
  `date` varchar(50) NOT NULL,
  `class` varchar(11) NOT NULL,
  `1A` tinyint(1) NOT NULL,
  `1B` tinyint(1) NOT NULL,
  `1C` tinyint(1) NOT NULL,
  `1D` tinyint(1) NOT NULL,
  `2A` tinyint(1) NOT NULL,
  `2B` tinyint(1) NOT NULL,
  `2C` tinyint(1) NOT NULL,
  `2D` tinyint(1) NOT NULL,
  `3A` tinyint(1) NOT NULL,
  `3B` tinyint(1) NOT NULL,
  `3C` tinyint(1) NOT NULL,
  `3D` tinyint(1) NOT NULL,
  `4A` tinyint(1) NOT NULL,
  `4B` tinyint(1) NOT NULL,
  `4C` tinyint(1) NOT NULL,
  `4D` tinyint(1) NOT NULL,
  `5A` tinyint(1) NOT NULL,
  `5B` tinyint(1) NOT NULL,
  `5C` tinyint(1) NOT NULL,
  `5D` tinyint(1) NOT NULL,
  `6A` tinyint(1) NOT NULL,
  `6B` tinyint(1) NOT NULL,
  `6C` tinyint(1) NOT NULL,
  `6D` tinyint(1) NOT NULL,
  `7A` tinyint(1) NOT NULL,
  `7B` tinyint(1) NOT NULL,
  `7C` tinyint(1) NOT NULL,
  `7D` tinyint(1) NOT NULL,
  `train_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seats_availability`
--

INSERT INTO `seats_availability` (`date`, `class`, `1A`, `1B`, `1C`, `1D`, `2A`, `2B`, `2C`, `2D`, `3A`, `3B`, `3C`, `3D`, `4A`, `4B`, `4C`, `4D`, `5A`, `5B`, `5C`, `5D`, `6A`, `6B`, `6C`, `6D`, `7A`, `7B`, `7C`, `7D`, `train_id`, `schedule_id`) VALUES
('2022-12-28', 'SHOVON', 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seats_info`
--

CREATE TABLE `seats_info` (
  `id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `train_number` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `SHOVON` int(11) NOT NULL,
  `SHULOV` int(11) NOT NULL,
  `BERTH` int(11) NOT NULL,
  `AC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seats_info`
--

INSERT INTO `seats_info` (`id`, `schedule_id`, `train_number`, `route_id`, `date`, `SHOVON`, `SHULOV`, `BERTH`, `AC`) VALUES
(1, 1, 1, 1, '2022-12-29', 300, 100, 30, 90),
(2, 1, 1, 1, '2022-12-29', 300, 100, 30, 90),
(3, 1, 1, 1, '2022-12-29', 300, 100, 30, 90),
(4, 14, 1, 1, '2022-12-29', 300, 100, 30, 90),
(5, 16, 1, 1, '2022-12-29', 300, 100, 30, 90);

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `Number` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `SHOVON` int(11) NOT NULL,
  `SHULOV` int(11) NOT NULL,
  `BERTH` int(11) NOT NULL,
  `AC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`Number`, `name`, `SHOVON`, `SHULOV`, `BERTH`, `AC`) VALUES
(1, 'Suborno Express', 300, 100, 30, 90),
(2, 'Barma Express', 100, 100, 30, 90);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `Identification_no` bigint(18) NOT NULL,
  `status` varchar(11) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`f_name`, `l_name`, `email`, `password`, `gender`, `dob`, `mobile`, `Identification_no`, `status`, `code`) VALUES
('Samin', 'Sadaf', 'saminsadaf7@gmail.com', '$2y$10$KEdb1nXcpQ8gIDMhfYuwt.CrnueXpENkV7IHsyA/gnZYNwpzFroBe', 'male', '2004-12-30', 0, 0, 'verified', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `train_id` (`train_id`),
  ADD KEY `route_id` (`route_id`);

--
-- Indexes for table `seats_info`
--
ALTER TABLE `seats_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`Number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `seats_info`
--
ALTER TABLE `seats_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
