-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 10:29 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `prod`
--

CREATE TABLE `prod` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod`
--

INSERT INTO `prod` (`id`, `name`, `img`, `img1`, `img2`, `img3`, `img4`, `details`) VALUES
(34, 'Apartament 2 camere', 'uploads/one-cotroceni-park-122112_1296xauto.jpg', 'uploads/one-cotroceni-park-122113_1296xauto.jpg', 'uploads/one-cotroceni-park-122114_1296xauto.jpg', 'uploads/one-cotroceni-park-122115_1296xauto.jpg', 'uploads/one-cotroceni-park-122130_1296xauto.jpg', 'apartament 2 camere apartament 2 camere apartament 2 camere apartament 2 camere apartament 2 camere apartament 2 camere apartament 2 camere '),
(37, 'Apartament 3 camere', 'uploads/one-cotroceni-park-122112_1296xauto.jpg', 'uploads/one-cotroceni-park-122113_1296xauto.jpg', 'uploads/one-cotroceni-park-122114_1296xauto.jpg', 'uploads/one-cotroceni-park-122115_1296xauto.jpg', 'uploads/one-cotroceni-park-122130_1296xauto.jpg', 'apartament 2 camere apartament 2 camere apartament 2 camere apartament 2 camere apartament 2 camere apartament 2 camere apartament 2 camere ');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `username`, `email`, `phone`, `date`) VALUES
(84, 'edi', '', '', '2022-05-09 13-34-11'),
(85, 'edi', '', '', '2022-05-09 13-35-05'),
(86, 'edi', 'a', 'a', '2022-05-09 13-36-20'),
(87, 'edi', 'dfgdf', '0987', '2022-05-09 13-43-53'),
(88, 'edi', 'ede', 'ede', '2022-05-09 20-14-01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'edi', 'edi'),
(3, 'paul', 'paul'),
(4, 'ionut', 'ionut'),
(5, 'ediii', 'ediii'),
(6, 'iedu', 'iedu'),
(7, 'ediiii', 'edi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prod`
--
ALTER TABLE `prod`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
