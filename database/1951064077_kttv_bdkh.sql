-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_duan`
--

-- --------------------------------------------------------

--
-- Table structure for table `duan`
--

CREATE TABLE `duan` (
  `maduan` int(11) NOT NULL,
  `tenduan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namthuchien` int(11) DEFAULT NULL,
  `linhvuc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nhiemvu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coquanthuchien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `duan`
--

INSERT INTO `duan` (`maduan`, `tenduan`, `namthuchien`, `linhvuc`, `nhiemvu`, `coquanthuchien`) VALUES
(1, 'Vấn đề ô nhiễm môi trường', 2015, 'Môi trường', 'Xử lý vấn đề ô nhiễm môi trường', 'Trung tâm xử lý rác thải'),
(2, 'Vấn đề ô nhiễm nguồn nước', 2015, 'Môi trường', 'Xử lý vấn đề ô nhiễm nguồn nước', 'Trung tâm xử lý nguồn nước'),
(3, 'Vấn đề vệ sinh an toàn thực phẩm', 2015, 'Thực phẩm', 'Xử lý vấn đề vệ sinh an toàn thực phẩm', 'Trung tâm vệ sinh an toàn thực phẩm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `duan`
--
ALTER TABLE `duan`
  ADD PRIMARY KEY (`maduan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `duan`
--
ALTER TABLE `duan`
  MODIFY `maduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
