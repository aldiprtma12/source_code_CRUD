-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 09:33 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `NIP` varchar(20) NOT NULL,
  `Nama_Lengkap` varchar(50) DEFAULT NULL,
  `Telepon` varchar(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`NIP`, `Nama_Lengkap`, `Telepon`, `Email`) VALUES
('0317823001', 'Mathew Ryan', '085730462810', 'mr@gmail.com'),
('0317823002', 'Shkodran Mustafi', '085730462809', 'sm@gmail.com'),
('0317823003', 'Gulherme Squeira', '085730462808', 'gs@gmail.com'),
('0317823004', 'Antonio Barragan', '085730462807', 'ab@gmail.com'),
('0317823005', 'Danilo Barbosa', '085730462806', 'db@gmail.com'),
('0317823006', 'Enzo Peres', '085730462805', 'ep@gmail.com'),
('0317823007', 'Javi Fuego', '085730462804', 'jf@gmail.com'),
('0317823008', 'Pablo Piatti', '085730462803', 'pp@gmail.com'),
('0317823009', 'Zakaria Bakkali', '085730462802', 'zb@gmail.com'),
('0317823010', 'Rodrigo', '085730462801', 'r@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`NIP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
