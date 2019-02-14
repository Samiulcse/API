-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2019 at 05:17 AM
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
-- Database: `dbbookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_books`
--

CREATE TABLE `tbl_books` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `price` float(8,2) NOT NULL,
  `author` varchar(300) NOT NULL,
  `category` varchar(250) NOT NULL,
  `language` varchar(100) NOT NULL,
  `ISBN` varchar(40) NOT NULL,
  `publish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_books`
--

INSERT INTO `tbl_books` (`id`, `name`, `price`, `author`, `category`, `language`, `ISBN`, `publish_date`) VALUES
(2, 'Red Hat Enterprise Linux 6 Administration Updated', 50.00, 'New', 'Value Added', 'Bn', '12345', '2013-12-05'),
(3, 'Red Hat Enterprise Linux 6 Administration Updated', 5.00, 'New', 'Value Added', 'Bn', '12345', '2013-12-05'),
(4, 'Red Hat Enterprise Linux 6 Administration Updated', 5.00, 'New', 'Value Added', 'Bn', '12345', '2013-12-05'),
(5, 'Red Hat Enterprise Linux 6 Administration Updated', 5.00, 'New', 'Value Added', 'Bn', '12345', '2013-12-05'),
(6, 'Red Hat Enterprise Linux 6 Administration Updated', 5.00, 'New', 'Value Added', 'Bn', '12345', '2013-12-05'),
(7, 'Red Hat Enterprise Linux 6 Administration Updated', 5.00, 'New', 'Value Added', 'Bn', '12345', '2013-12-05'),
(8, 'Red Hat Enterprise Linux 6 Administration Updated', 5.00, 'New', 'Value Added', 'Bn', '12345', '2013-12-05'),
(9, 'Red Hat Enterprise Linux 6 Administration Updated', 5.00, 'New', 'Value Added', 'Bn', '12345', '2013-12-05'),
(10, 'Red Hat Enterprise Linux 6 Administration Updated', 5.00, 'New', 'Value Added', 'Bn', '12345', '2013-12-05'),
(13, 'Red Hat Enterprise Linux 6 Administration Updated', 5.00, 'New', 'Value Added', 'Bn', '12345', '2013-12-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_books`
--
ALTER TABLE `tbl_books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_books`
--
ALTER TABLE `tbl_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
