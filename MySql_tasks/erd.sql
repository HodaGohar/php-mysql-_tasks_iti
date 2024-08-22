-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 22, 2024 at 01:57 AM
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
-- Database: `erd`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `number` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `ssn` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department_location`
--

CREATE TABLE `department_location` (
  `id` int NOT NULL,
  `location` varchar(255) NOT NULL,
  `number` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ssn` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `dep_num` int NOT NULL,
  `address` varchar(100) NOT NULL,
  `bd` date NOT NULL,
  `gender` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp_dependant`
--

CREATE TABLE `emp_dependant` (
  `id` int NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `gender` tinyint NOT NULL,
  `relationship` varchar(100) NOT NULL,
  `bd` date NOT NULL,
  `emp_ssn` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp_project`
--

CREATE TABLE `emp_project` (
  `id` int NOT NULL,
  `ssn` int NOT NULL,
  `number` int NOT NULL,
  `work_hours` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp_supervisor`
--

CREATE TABLE `emp_supervisor` (
  `ssn` int NOT NULL,
  `supervisor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `number` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`number`),
  ADD KEY `ssn` (`ssn`);

--
-- Indexes for table `department_location`
--
ALTER TABLE `department_location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `number` (`number`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ssn`),
  ADD UNIQUE KEY `dep_num` (`dep_num`);

--
-- Indexes for table `emp_dependant`
--
ALTER TABLE `emp_dependant`
  ADD UNIQUE KEY `emp_ssn` (`id`),
  ADD UNIQUE KEY `emp_ssn_2` (`emp_ssn`);

--
-- Indexes for table `emp_project`
--
ALTER TABLE `emp_project`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ssn` (`ssn`),
  ADD UNIQUE KEY `number` (`number`);

--
-- Indexes for table `emp_supervisor`
--
ALTER TABLE `emp_supervisor`
  ADD UNIQUE KEY `ssn` (`ssn`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `number` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department_location`
--
ALTER TABLE `department_location`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ssn` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_dependant`
--
ALTER TABLE `emp_dependant`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_project`
--
ALTER TABLE `emp_project`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `number` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`ssn`) REFERENCES `employee` (`ssn`) ON DELETE CASCADE;

--
-- Constraints for table `department_location`
--
ALTER TABLE `department_location`
  ADD CONSTRAINT `department_location_ibfk_1` FOREIGN KEY (`number`) REFERENCES `department` (`number`) ON DELETE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`dep_num`) REFERENCES `department` (`number`) ON DELETE CASCADE;

--
-- Constraints for table `emp_dependant`
--
ALTER TABLE `emp_dependant`
  ADD CONSTRAINT `emp_dependant_ibfk_1` FOREIGN KEY (`emp_ssn`) REFERENCES `employee` (`ssn`) ON DELETE CASCADE;

--
-- Constraints for table `emp_project`
--
ALTER TABLE `emp_project`
  ADD CONSTRAINT `emp_project_ibfk_1` FOREIGN KEY (`ssn`) REFERENCES `employee` (`ssn`) ON DELETE CASCADE,
  ADD CONSTRAINT `emp_project_ibfk_2` FOREIGN KEY (`number`) REFERENCES `project` (`number`) ON DELETE CASCADE;

--
-- Constraints for table `emp_supervisor`
--
ALTER TABLE `emp_supervisor`
  ADD CONSTRAINT `emp_supervisor_ibfk_1` FOREIGN KEY (`ssn`) REFERENCES `employee` (`ssn`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
