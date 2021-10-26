-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 16 أكتوبر 2021 الساعة 18:17
-- إصدار الخادم: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ABET`
--

-- --------------------------------------------------------

--
-- بنية الجدول `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `collage_type` varchar(200) NOT NULL,
  `collage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `course`
--

INSERT INTO `course` (`id`, `name`, `collage_type`, `collage`) VALUES
(1, 'هاب ٤٥٥', '', ''),
(2, 'هاب ٤٥٥', '', ''),
(3, 'عال ٢١٤', '', ''),
(4, 'ff 4', '', ''),
(5, 'عال ٤٤٤', '1', ''),
(6, 'نال ٢٢٢', '1', '1'),
(7, 'كيم ١٠١', '1', '1'),
(8, 'ت ٧٧', '1', '1'),
(9, 'نال ٣٣٣', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
