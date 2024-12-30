-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2024 at 01:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `name`) VALUES
(1, 'male'),
(2, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `students1`
--

CREATE TABLE `students1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `students1`
--

INSERT INTO `students1` (`id`, `name`, `phone`, `gender`) VALUES
(2, 'mahmoud mohamed', 1111111111, 1);

-- --------------------------------------------------------

--
-- Table structure for table `students2`
--

CREATE TABLE `students2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `students2`
--

INSERT INTO `students2` (`id`, `name`, `phone`, `gender`) VALUES
(1, 'nour ali', 1222582641, 1);

-- --------------------------------------------------------

--
-- Table structure for table `students3`
--

CREATE TABLE `students3` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `students3`
--

INSERT INTO `students3` (`id`, `name`, `phone`, `gender`) VALUES
(1, 'alaa ali', 1212121212, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students1`
--
ALTER TABLE `students1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gender` (`gender`);

--
-- Indexes for table `students2`
--
ALTER TABLE `students2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gender` (`gender`);

--
-- Indexes for table `students3`
--
ALTER TABLE `students3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gender` (`gender`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students1`
--
ALTER TABLE `students1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students2`
--
ALTER TABLE `students2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students3`
--
ALTER TABLE `students3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students1`
--
ALTER TABLE `students1`
  ADD CONSTRAINT `students1_ibfk_1` FOREIGN KEY (`gender`) REFERENCES `gender` (`id`);

--
-- Constraints for table `students2`
--
ALTER TABLE `students2`
  ADD CONSTRAINT `students2_ibfk_1` FOREIGN KEY (`gender`) REFERENCES `gender` (`id`);

--
-- Constraints for table `students3`
--
ALTER TABLE `students3`
  ADD CONSTRAINT `students3_ibfk_1` FOREIGN KEY (`gender`) REFERENCES `gender` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
