-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2025 at 05:08 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4115_db`
--
CREATE DATABASE IF NOT EXISTS `4115_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `4115_db`;

-- --------------------------------------------------------

--
-- Table structure for table `applications_db`
--

DROP TABLE IF EXISTS `applications_db`;
CREATE TABLE `applications_db` (
  `a_id` int(11) NOT NULL,
  `position_applied` varchar(100) NOT NULL COMMENT 'ตำแหน่งที่ต้องการสมัคร',
  `prefix` enum('นาย','นาง','นางสาว') NOT NULL COMMENT 'คำนำหน้า',
  `full_name` varchar(150) NOT NULL COMMENT 'ชื่อ-นามสกุล',
  `dob` date NOT NULL COMMENT 'วันเดือนปีเกิด',
  `education_level` varchar(50) NOT NULL COMMENT 'ระดับการศึกษา',
  `special_skills` text DEFAULT NULL COMMENT 'ความสามารถพิเศษ',
  `work_experience` text DEFAULT NULL COMMENT 'ประสบการณ์ทำงาน',
  `applied_date` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'วันที่ส่งใบสมัคร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications_db`
--

INSERT INTO `applications_db` (`a_id`, `position_applied`, `prefix`, `full_name`, `dob`, `education_level`, `special_skills`, `work_experience`, `applied_date`) VALUES
(1, 'Digital Marketing Manager', 'นาย', 'วิชาฤทธิ์ ร้อยคำลือ', '2018-02-07', 'ปริญญาตรี', 'อิอิ', 'อิแิ', '2025-12-16 03:55:55'),
(2, 'Digital Marketing Manager', 'นาย', 'วิชาฤทธิ์ ร้อยคำลือ', '2018-02-07', 'ปริญญาตรี', 'อิอิ', 'อิแิ', '2025-12-16 03:58:39'),
(3, 'Digital Marketing Manager', 'นาย', 'วิชาฤทธิ์ ร้อยคำลือ', '2018-02-07', 'ปริญญาตรี', 'อิอิ', 'อิแิ', '2025-12-16 04:02:32'),
(4, 'Digital Marketing Manager', 'นาย', 'วิชาฤทธิ์ ร้อยคำลือ', '2018-02-07', 'ปริญญาตรี', 'อิอิ', 'อิแิ', '2025-12-16 04:04:01'),
(5, 'Digital Marketing Manager', 'นาย', 'วิชาฤทธิ์ ร้อยคำลือ', '2018-02-07', 'ปริญญาตรี', 'อิอิ', 'อิแิ', '2025-12-16 04:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
CREATE TABLE `positions` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`position_id`, `position_name`) VALUES
(3, 'AI & Machine Learning Engineer'),
(5, 'Data Analyst'),
(4, 'Digital Marketing Manager'),
(2, 'Full Stack Developer (PHP/React)'),
(1, 'Senior UX/UI Designer');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `r_id` int(11) UNSIGNED NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_phone` varchar(20) NOT NULL,
  `r_height` int(3) NOT NULL,
  `r_major` varchar(100) NOT NULL,
  `r_color` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_name`, `r_phone`, `r_height`, `r_major`, `r_color`) VALUES
(1, 'วิชาฤทธิ์ ร้อยคำลือ', '0986899247', 171, 'การจัดการ', '#007aff'),
(2, 'วิชาฤทธิ์ ร้อยคำลือ', '0986899247', 171, 'การจัดการ', '#007aff'),
(3, 'วิชาฤทธิ์ สามสี่ห้า', '0986899249', 170, 'คอมพิวเตอร์ธุรกิจ', '#4600eb'),
(4, 'วิชาฤทธิ์ สวัสดี', '0985236485', 150, 'คอมพิวเตอร์ธุรกิจ', '#0079fa'),
(5, 'สวัสดี', '111111111', 180, 'การจัดการ', '#007aff'),
(6, 'สวัสดี', '111111111', 180, 'การจัดการ', '#007aff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications_db`
--
ALTER TABLE `applications_db`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `idx_position_applied` (`position_applied`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`position_id`),
  ADD UNIQUE KEY `position_name` (`position_name`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications_db`
--
ALTER TABLE `applications_db`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
