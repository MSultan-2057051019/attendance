-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2023 at 08:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ats`
--
CREATE DATABASE IF NOT EXISTS `ats` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ats`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id_user` int(5) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `password`) VALUES
(4, 'asd'),
(3, 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

DROP TABLE IF EXISTS `tamu`;
CREATE TABLE `tamu` (
  `id_tamu` int(5) NOT NULL,
  `pict` varchar(255) NOT NULL,
  `nama_tamu` varchar(128) NOT NULL,
  `noktp_tamu` varchar(32) NOT NULL,
  `nohp_tamu` varchar(32) NOT NULL,
  `asal_tamu` varchar(128) NOT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `pict`, `nama_tamu`, `noktp_tamu`, `nohp_tamu`, `asal_tamu`, `tgl_masuk`, `tgl_keluar`) VALUES
(2, 'felix.png', 'Felix Nmecha', '1234456', '', '', NULL, '2023-07-10'),
(3, 'qwerty.jfif', 'qwerty', '342234234', '234243234', 'Mirage Jakarta Depok Bandung Tanggerang Bekasi', '2023-07-05', '2023-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `pict` varchar(255) NOT NULL,
  `nama_user` varchar(128) DEFAULT NULL,
  `nip_user` varchar(64) DEFAULT NULL,
  `jabatan_user` varchar(128) NOT NULL,
  `tgl_kerja` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `pict`, `nama_user`, `nip_user`, `jabatan_user`, `tgl_kerja`) VALUES
(3, 'karim.jpg', 'Karim Adem', '345', 'Security', '2023-08-31'),
(4, 'donyel.jpg', 'Donyell Malen', '123', 'Admin', '2023-08-18'),
(5, '1.jpeg', 'Name 378', '51034', 'HR', '2023-03-14'),
(6, '2.jpeg', 'Name 207', '84213', 'IT', '2023-05-17'),
(7, '3.jpeg', 'Name 621', '14824', 'HR', '2023-06-29'),
(8, '4.jpeg', 'Name 393', '98788', 'Finance', '2023-08-07'),
(9, '5.jpeg', 'Name 638', '15195', 'Marketing', '2023-03-11'),
(10, '6.jpeg', 'Name 280', '17239', 'HR', '2023-06-16'),
(11, '7.jpeg', 'Name 259', '34331', 'Finance', '2023-08-18'),
(12, '8.jpeg', 'Name 143', '17490', 'Sales', '2023-03-03'),
(13, '9.jpeg', 'Name 985', '70417', 'Marketing', '2023-08-15'),
(14, '10.jpeg', 'Name 216', '19981', 'Sales', '2023-01-03'),
(15, '11.jpeg', 'Name 652', '40344', 'Marketing', '2023-04-25'),
(16, '12.jpeg', 'Name 761', '96186', 'Sales', '2023-08-04'),
(17, '13.jpeg', 'Name 100', '39557', 'Finance', '2023-02-22'),
(18, '14.jpeg', 'Name 154', '93649', 'Marketing', '2023-07-31'),
(19, '15.jpeg', 'Name 674', '22050', 'HR', '2023-04-09'),
(20, '16.jpeg', 'Name 557', '73949', 'IT', '2023-05-28'),
(21, '17.jpeg', 'Name 114', '26185', 'Finance', '2023-06-08'),
(22, '18.jpeg', 'Name 574', '38570', 'Sales', '2023-06-20'),
(23, '19.jpeg', 'Name 695', '18796', 'HR', '2023-02-02'),
(24, '20.jpeg', 'Name 335', '29471', 'Sales', '2023-03-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD KEY `login` (`id_user`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
