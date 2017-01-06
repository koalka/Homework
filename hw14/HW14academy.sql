-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2016 at 02:04 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academy`
--
CREATE DATABASE IF NOT EXISTS `academy` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `academy`;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `grade_id` int(11) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`grade_id`, `grade`) VALUES
(1, 2),
(2, 3),
(3, 4),
(4, 5),
(5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `first_name`, `last_name`, `adress`, `faculty`) VALUES
(1, 'Ivan', 'Petrov', 'Sofia', 'FMI'),
(2, 'Chavdar', 'Borislavov', 'Plovdiv', 'FJMC'),
(3, 'Nadezhda', 'Yankova', 'Sofia', 'FMI'),
(4, 'Diana ', 'Yaneva', 'Varna', 'FMI');

-- --------------------------------------------------------

--
-- Table structure for table `students_subjects`
--

CREATE TABLE `students_subjects` (
  `student_subject_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students_subjects`
--

INSERT INTO `students_subjects` (`student_subject_id`, `student_id`, `subject_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 1, 2),
(6, 2, 2),
(7, 3, 2),
(8, 4, 2),
(9, 1, 3),
(10, 2, 3),
(11, 3, 3),
(12, 4, 3),
(13, 1, 4),
(14, 2, 4),
(15, 3, 4),
(16, 4, 4),
(17, 1, 5),
(18, 2, 5),
(19, 3, 5),
(20, 4, 5),
(21, 1, 6),
(22, 2, 6),
(23, 3, 6),
(24, 4, 6),
(25, 1, 7),
(26, 2, 7),
(27, 3, 7),
(28, 4, 7),
(29, 1, 8),
(30, 2, 8),
(31, 3, 8),
(32, 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `students_subjects_grades`
--

CREATE TABLE `students_subjects_grades` (
  `id` int(11) NOT NULL,
  `student_subject_id` int(11) NOT NULL,
  `grades_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students_subjects_grades`
--

INSERT INTO `students_subjects_grades` (`id`, `student_subject_id`, `grades_id`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 1, 3),
(4, 2, 3),
(5, 2, 2),
(6, 2, 4),
(7, 3, 3),
(8, 3, 2),
(9, 3, 3),
(10, 4, 4),
(11, 4, 5),
(12, 4, 5),
(13, 5, 2),
(14, 5, 1),
(15, 5, 3),
(16, 5, 2),
(17, 6, 2),
(18, 6, 3),
(19, 6, 3),
(20, 6, 1),
(21, 7, 5),
(22, 7, 4),
(23, 7, 3),
(24, 7, 5),
(25, 8, 1),
(26, 8, 2),
(27, 8, 1),
(28, 8, 3),
(29, 9, 2),
(30, 9, 3),
(31, 9, 4),
(32, 10, 1),
(33, 10, 3),
(34, 10, 3),
(35, 11, 5),
(36, 11, 4),
(37, 11, 5),
(38, 12, 1),
(39, 12, 2),
(40, 12, 2),
(41, 13, 1),
(42, 13, 2),
(43, 14, 3),
(44, 14, 4),
(45, 15, 5),
(46, 15, 5),
(47, 16, 1),
(48, 16, 2),
(49, 17, 1),
(50, 17, 2),
(51, 18, 2),
(52, 18, 4),
(53, 19, 4),
(54, 19, 5),
(55, 20, 1),
(56, 20, 2),
(57, 21, 3),
(58, 21, 2),
(59, 21, 3),
(60, 21, 4),
(61, 21, 4),
(62, 22, 3),
(63, 22, 2),
(64, 22, 3),
(65, 22, 3),
(66, 22, 4),
(67, 23, 1),
(68, 23, 1),
(69, 23, 3),
(70, 23, 2),
(71, 23, 2),
(72, 24, 4),
(73, 24, 5),
(74, 24, 3),
(75, 24, 4),
(76, 24, 5),
(77, 25, 5),
(78, 26, 4),
(79, 27, 5),
(80, 28, 4),
(81, 29, 1),
(82, 29, 3),
(83, 30, 4),
(84, 30, 5),
(85, 31, 1),
(86, 31, 2),
(87, 32, 4),
(88, 32, 5);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `classes_per_semester` int(4) NOT NULL,
  `lecturer` varchar(50) NOT NULL,
  `exams` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `name`, `classes_per_semester`, `lecturer`, `exams`) VALUES
(1, 'Mathematics', 25, 'Daniel Petkov', 3),
(2, 'Literature', 30, 'Tihomir Slavov', 4),
(3, 'Biology', 25, 'Konstantin Stoyanov', 3),
(4, 'Chemistry', 20, 'Margarita Nikolaeva', 2),
(5, 'Physics', 20, 'Dragan Dimov', 2),
(6, 'English', 30, 'Diana Zhivkova', 5),
(7, 'Computer Science', 12, 'Luben Bogdanov', 1),
(8, 'History', 20, 'Stanimir Buchvarov', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `students_subjects`
--
ALTER TABLE `students_subjects`
  ADD PRIMARY KEY (`student_subject_id`);

--
-- Indexes for table `students_subjects_grades`
--
ALTER TABLE `students_subjects_grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `students_subjects`
--
ALTER TABLE `students_subjects`
  MODIFY `student_subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `students_subjects_grades`
--
ALTER TABLE `students_subjects_grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
