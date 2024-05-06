-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2024 at 11:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photoshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `uname` varchar(55) DEFAULT NULL,
  `pname` varchar(55) DEFAULT NULL,
  `odate` varchar(55) DEFAULT NULL,
  `ucell` varchar(55) DEFAULT NULL,
  `uaddress` varchar(55) DEFAULT NULL,
  `ustatus` varchar(55) DEFAULT NULL,
  `pstatus` varchar(55) DEFAULT NULL,
  `Accno` varchar(55) DEFAULT NULL,
  `aamount` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `uname`, `pname`, `odate`, `ucell`, `uaddress`, `ustatus`, `pstatus`, `Accno`, `aamount`) VALUES
(1, 'admin', 'ppp', '2024-03-26', '9090909090', 'hyderabad', 'pending', 'complete', '1234567890', '1000rs'),
(2, 'admin', 'ppp', '2024-03-26', '9090909090', 'hyderabad', 'pending', NULL, NULL, NULL),
(3, 'admin', 'ppp', '2024-03-26', '9090909090', 'hyderabad', 'pending', 'pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `imgs`
--

CREATE TABLE `imgs` (
  `pname` varchar(55) DEFAULT NULL,
  `imgn` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imgs`
--

INSERT INTO `imgs` (`pname`, `imgn`) VALUES
('ppp', 'arr.png'),
('ppp', 'arr.png'),
('ppp', 'arrow.png'),
('ppp', 'A2.png'),
('ppp', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `preg`
--

CREATE TABLE `preg` (
  `pname` varchar(55) NOT NULL,
  `ppass` varchar(55) NOT NULL,
  `pmail` varchar(55) NOT NULL,
  `pcell` varchar(55) NOT NULL,
  `paddress` varchar(55) NOT NULL,
  `pimage` varchar(55) NOT NULL,
  `pstatus` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `preg`
--

INSERT INTO `preg` (`pname`, `ppass`, `pmail`, `pcell`, `paddress`, `pimage`, `pstatus`) VALUES
('ppp', 'admin', 'ramya@gmail.com', '9090909090', 'hyderabad', 'A2.png', 'Accept');

-- --------------------------------------------------------

--
-- Table structure for table `ureg`
--

CREATE TABLE `ureg` (
  `uname` varchar(55) DEFAULT NULL,
  `upass` varchar(55) DEFAULT NULL,
  `uemail` varchar(55) DEFAULT NULL,
  `ucell` varchar(55) DEFAULT NULL,
  `uaddress` varchar(55) DEFAULT NULL,
  `uimage` varchar(55) NOT NULL,
  `status` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ureg`
--

INSERT INTO `ureg` (`uname`, `upass`, `uemail`, `ucell`, `uaddress`, `uimage`, `status`) VALUES
('admin', 'admin', 'ramya@gmail.com', '9090909090', 'hyderabad', 'apples.jpg', 'Accept'),
('ss', 'dd', 'ramya@gmail.com', '9090909090', 'hyderabad', 'apples.jpg', 'pending'),
('fff', 'admin', 'ramya@gmail.com', '9090909090', 'hyderabad', '1.jpg', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
