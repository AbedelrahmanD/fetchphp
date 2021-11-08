-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 09:44 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `general`
--

-- --------------------------------------------------------

--
-- Table structure for table `general_user`
--

CREATE TABLE `general_user` (
  `general_user_id` int(11) NOT NULL,
  `general_user_type` varchar(255) NOT NULL DEFAULT '',
  `general_user_username` varchar(255) NOT NULL,
  `general_user_email` varchar(255) NOT NULL,
  `general_user_name` varchar(255) NOT NULL,
  `general_user_phone` varchar(255) NOT NULL,
  `general_user_password` varchar(255) NOT NULL,
  `general_user_country` int(11) NOT NULL,
  `general_user_city` int(11) NOT NULL,
  `general_user_address` varchar(255) NOT NULL,
  `general_user_account_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_user`
--

INSERT INTO `general_user` (`general_user_id`, `general_user_type`, `general_user_username`, `general_user_email`, `general_user_name`, `general_user_phone`, `general_user_password`, `general_user_country`, `general_user_city`, `general_user_address`, `general_user_account_date`) VALUES
(2, '', '', 'email@gmail.com', 'testname', '8456168485', 'Aa1qweqw', 0, 0, '', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `general_user`
--
ALTER TABLE `general_user`
  ADD PRIMARY KEY (`general_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `general_user`
--
ALTER TABLE `general_user`
  MODIFY `general_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
