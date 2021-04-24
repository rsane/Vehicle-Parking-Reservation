-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 12:51 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sswt`
--

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `date` date NOT NULL,
  `amt` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`date`, `amt`) VALUES
('2021-04-01', 10),
('2021-04-02', 15),
('2021-04-03', 50),
('2021-04-04', 0),
('2021-04-05', 0),
('2021-04-06', 0),
('2021-04-07', 50),
('2021-04-08', 200),
('2021-04-09', 150),
('2021-04-10', 60),
('2021-04-11', 40),
('2021-04-12', 10),
('2021-04-13', 0),
('2021-04-14', 45),
('2021-04-15', 45),
('2021-04-16', 60),
('2021-04-17', 0),
('2021-04-18', 0),
('2021-04-19', 100),
('2021-04-20', 100),
('2021-04-21', 50),
('2021-04-22', 0),
('2021-04-23', 233),
('2021-04-24', 67),
('2021-04-25', 112),
('2021-04-26', 0),
('2021-04-27', 167),
('2021-04-28', 125),
('2021-04-29', 200),
('2021-04-30', 180);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `username` text NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`username`, `name`, `email`, `password`) VALUES
('first_123', 'Admin', 'first01@gmail.com', 'First@123'),
('second987', 'sim', 'second02@gmail.com', 'Second@987'),
('test_user01', 'Prashant', 'test_user@gmail.com', 'Testuser@01');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `username` text NOT NULL,
  `date` date NOT NULL,
  `slot` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`username`, `date`, `slot`) VALUES
('boi555', '2021-04-11', 's1'),
('boi555', '2021-04-12', 's1'),
('first_123', '2021-04-19', 's1'),
('first_123', '2021-04-23', 's1'),
('first_123', '2021-04-11', 's2'),
('first132', '2021-04-12', 's2'),
('first_123', '2021-04-15', 's2'),
('second987', '2021-04-19', 's2'),
('second987', '2021-04-23', 's2'),
('second_123', '2021-04-11', 's3'),
('first132', '2021-04-12', 's3'),
('first_123', '2021-04-13', 's3'),
('first_123', '2021-04-14', 's3'),
('first_123', '2021-04-19', 's3'),
('random_567', '2021-04-23', 's3'),
('second987', '2021-04-24', 's3'),
('boi555', '2021-04-11', 's4'),
('boi555', '2021-04-12', 's4'),
('first_123', '2021-04-14', 's4'),
('second987', '2021-04-19', 's4'),
('first_123', '2021-04-25', 's4'),
('first_123', '2021-04-23', 's4'),
('first_123', '2021-04-11', 's5'),
('boi555', '2021-04-12', 's5'),
('second987', '2021-04-23', 's5'),
('first_123', '2021-04-11', 's6'),
('new987', '2021-04-12', 's6'),
('random_567', '2021-04-23', 's6'),
('second_123', '2021-04-11', 's7'),
('boi555', '2021-04-12', 's7'),
('first132', '2021-04-12', 's8'),
('random_567', '2021-04-23', 's8'),
('boi555', '2021-04-11', 's9'),
('boi555', '2021-04-12', 's9'),
('first_123', '2021-04-23', 's9'),
('new987', '2021-04-12', 's10'),
('first_123', '2021-04-19', 's10'),
('boi555', '2021-04-11', 's11'),
('boi555', '2021-04-12', 's11'),
('second987', '2021-04-19', 's11'),
('second987', '2021-04-23', 's11');

-- --------------------------------------------------------

--
-- Table structure for table `occupancy`
--

CREATE TABLE `occupancy` (
  `date` date NOT NULL,
  `s1` text NOT NULL,
  `s2` text NOT NULL,
  `s3` text NOT NULL,
  `s4` text NOT NULL,
  `s5` text NOT NULL,
  `s6` text NOT NULL,
  `s7` text NOT NULL,
  `s8` text NOT NULL,
  `s9` text NOT NULL,
  `s10` text NOT NULL,
  `s11` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `occupancy`
--

INSERT INTO `occupancy` (`date`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `s9`, `s10`, `s11`) VALUES
('2021-04-11', 'boi555', 'first_123', 'second_123', 'boi555', 'first_123', 'first_123', 'second_123', 'empty', 'boi555', 'empty', 'boi555'),
('2021-04-12', 'boi555', 'first132', 'first132', 'boi555', 'boi555', 'new987', 'boi555', 'first132', 'boi555', 'new987', 'boi555'),
('2021-04-13', 'empty', 'empty', 'first_123', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'),
('2021-04-14', 'empty', 'empty', 'first_123', 'first_123', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'),
('2021-04-15', 'empty', 'first_123', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'),
('2021-04-16', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'),
('2021-04-17', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'),
('2021-04-17', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'),
('2021-04-18', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'),
('2021-04-19', 'first_123', 'second987', 'first_123', 'second987', 'empty', 'empty', 'empty', 'empty', 'empty', 'first_123', 'second987'),
('2021-04-20', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'),
('2021-04-22', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'),
('2021-04-25', 'empty', 'empty', 'empty', 'first_123', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'),
('2021-04-26', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'),
('2021-04-28', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'),
('2021-04-29', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'),
('2021-04-30', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'),
('2021-04-21', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'),
('2021-04-27', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty'),
('2021-04-23', 'first_123', 'second987', 'random_567', 'first_123', 'second987', 'random_567', 'empty', 'random_567', 'first_123', 'empty', 'second987'),
('2021-04-24', 'empty', 'empty', 'second987', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty', 'empty');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
