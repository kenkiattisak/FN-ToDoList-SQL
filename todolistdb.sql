-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2019 at 08:49 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todolistdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_suc`
--

CREATE TABLE `tb_suc` (
  `id` int(11) NOT NULL,
  `suc` varchar(500) COLLATE utf8mb4_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `tb_suc`
--

INSERT INTO `tb_suc` (`id`, `suc`) VALUES
(29, 'Meet Prayuth Jun-O-cha'),
(37, 'Meet Vladimir Putin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_todo`
--

CREATE TABLE `tb_todo` (
  `td_id` int(11) NOT NULL,
  `td_todo` varchar(500) COLLATE utf8mb4_thai_520_w2 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `tb_todo`
--

INSERT INTO `tb_todo` (`td_id`, `td_todo`) VALUES
(17, 'Meet tuksin Chinawatara'),
(18, 'Meet Kim Jongun');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_suc`
--
ALTER TABLE `tb_suc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_todo`
--
ALTER TABLE `tb_todo`
  ADD PRIMARY KEY (`td_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_suc`
--
ALTER TABLE `tb_suc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_todo`
--
ALTER TABLE `tb_todo`
  MODIFY `td_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
