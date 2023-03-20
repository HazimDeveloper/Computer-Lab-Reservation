-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2023 at 05:26 AM
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
-- Database: `dbcomputerlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id_adminlogin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id_adminlogin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `user_id` int(11) NOT NULL,
  `no_pejabat` varchar(255) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `emel` varchar(100) DEFAULT NULL,
  `bahagian` varchar(100) DEFAULT NULL,
  `unit` varchar(100) DEFAULT NULL,
  `phoneNum` varchar(100) DEFAULT NULL,
  `kataLaluan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`user_id`, `no_pejabat`, `nama`, `emel`, `bahagian`, `unit`, `phoneNum`, `kataLaluan`) VALUES
(1, '', 'hazim', 'hazim4128@gmail.com', 'IT', 'Tech lead', '0139604899', '0cc175b9c0f1b6a831c399e269772661'),
(2, '', 'Halim', 'hazim4128@gmail.com', 'Editing', 'Front End Development', '0139604899', '202cb962ac59075b964b07152d234b70'),
(3, '123', 'Muhammad Hazim', 'hakas@gmail.com', 'IT', 'Back end Development', '0139604899', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `login user`
--

CREATE TABLE `login user` (
  `nama pengguna` varchar(100) DEFAULT NULL,
  `sahKataLaluan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tempahan`
--

CREATE TABLE `tempahan` (
  `tempahanId` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `emel` varchar(100) DEFAULT NULL,
  `phoneNum` varchar(100) DEFAULT NULL,
  `bahagian` varchar(100) DEFAULT NULL,
  `unit` varchar(100) DEFAULT NULL,
  `dateStart` varchar(100) DEFAULT NULL,
  `dateStop` varchar(100) DEFAULT NULL,
  `sebab` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempahan`
--

INSERT INTO `tempahan` (`tempahanId`, `user_id`, `nama`, `emel`, `phoneNum`, `bahagian`, `unit`, `dateStart`, `dateStop`, `sebab`, `status`) VALUES
(1, '2', 'Muhammad Hazim', 'hazim4128@gmail.com', '0139604899', 'IT', 'Back end Development', '2002-12-31', '2023-02-28', 'Kentut', 'Reject');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id_adminlogin`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tempahan`
--
ALTER TABLE `tempahan`
  ADD PRIMARY KEY (`tempahanId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id_adminlogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tempahan`
--
ALTER TABLE `tempahan`
  MODIFY `tempahanId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
