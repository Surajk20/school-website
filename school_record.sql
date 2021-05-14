-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 01:58 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `school_record`
--

CREATE TABLE `school_record` (
  `UserName` varchar(100) NOT NULL,
  `Pass_Word` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_record`
--

INSERT INTO `school_record` (`UserName`, `Pass_Word`, `email`, `gender`, `mobile_number`, `address`) VALUES
('admin', 'admin', 'hdy@gmail.com', 'Female', '76734137646135', 'kjjbshjbdhbashd'),
('admin', 'admin', 'hdy@gmail.com', 'Female', '76734137646135', 'kjjbshjbdhbashd'),
('admin1', 'admin', 'hdy@gmail.com', 'Male', '76734137646135', 'kjjbshjbdhbashd'),
('admin2', '1234', 'abc@gmail.com', 'Male', '9038247343', 'mumbra'),
('kiran', '1234', 'xyz@gmail.com', 'Female', '6756877969', 'thane'),
('kiran', '1234', 'abc@gmail.com', 'Female', '3245678910', 'ulhasnagar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
