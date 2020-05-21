-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 12:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `databarang`
--

CREATE TABLE `databarang` (
  `ID` int(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Kuantitas` int(255) NOT NULL,
  `Satuan` varchar(255) DEFAULT NULL,
  `Keterangan` varchar(255) DEFAULT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `Modified_Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `User` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `databarang`
--

INSERT INTO `databarang` (`ID`, `Nama`, `Kuantitas`, `Satuan`, `Keterangan`, `Timestamp`, `Modified_Timestamp`, `User`) VALUES
(17, 'Apel', 1, 'buah', 'busuk', '2020-05-21 10:27:40', '2020-05-21 10:27:40', 'coba'),
(18, 'Anggur', 2, 'buah', 'segar', '2020-05-21 10:27:47', '2020-05-21 10:27:47', 'coba'),
(19, 'strawbeerry', 10, 'buah', 'segar', '2020-05-21 10:27:54', '2020-05-21 10:27:54', 'coba'),
(20, 'Jeruk', 5, 'gram', 'segar', '2020-05-21 10:28:08', '2020-05-21 10:28:08', 'coba'),
(21, 'pisang', 1, 'kg', 'pisang', '2020-05-21 10:28:28', '2020-05-21 10:28:28', 'coba'),
(22, 'jambu', 1, 'buah', 'biji', '2020-05-21 10:29:39', '2020-05-21 10:29:39', 'coba'),
(23, 'belimbing', 5, 'kg', 'belimbing', '2020-05-21 10:30:06', '2020-05-21 10:30:06', 'coba'),
(24, 'apel', 2, 'kg', 'fuji', '2020-05-21 10:30:59', '2020-05-21 10:30:59', 'coba'),
(25, 'apel', 1, 'kg', 'malang', '2020-05-21 10:31:07', '2020-05-21 10:31:07', 'coba'),
(26, 'jeruk', 10, 'buah', 'peras', '2020-05-21 10:31:27', '2020-05-21 10:31:27', 'coba'),
(27, 'jeruk', 1, 'gram', 'mandarin', '2020-05-21 10:31:49', '2020-05-21 10:31:49', 'coba');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Namalengkap` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Notelepon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Namalengkap`, `Username`, `Password`, `Email`, `Notelepon`) VALUES
(3, 'asdas', 'coba', 'coba', 'asdsad@gmail.com', 0),
(4, 'asdas', 'user', 'coba', 'asdsad@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `databarang`
--
ALTER TABLE `databarang`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `databarang`
--
ALTER TABLE `databarang`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
