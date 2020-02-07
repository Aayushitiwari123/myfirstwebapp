-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2019 at 05:47 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taken`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `Name`, `Email`, `Phone`, `Subject`, `Message`) VALUES
(1, 'divya', 'divya123@gmail.com', '3482374345', 'issue', 'i cannot access my account'),
(2, 'saksham', 'tiwari@gmail.com', '3745633458', 'hello', 'i need new products'),
(3, 'ankita', 'ankita@gmail.com', '7543763934', 'issue', 'issue'),
(4, 'yusuf', 'guidfth@yahoo.com', '8735868335', 'dshfnysdf', 'fghdhggh'),
(5, 'aayushi', 'tiwari123@gmail.com', '9137150429', 'issue', 'how can i get product return policy page?'),
(6, 'anju', 'mishra@gmail.com', '6576727334', 'issue', 'issue');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(120) DEFAULT NULL,
  `LastName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(100) NOT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `mobno` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FirstName`, `LastName`, `EmailId`, `Password`, `dob`, `mobno`, `address`) VALUES
(1, 'saksham', 'tiwari', 'tiwari@gmail.com', '33b59140f8a5c85b50a76d66756c2ec7', '2004-12-15', '9137150429', 'Uran'),
(5, 'Aayushi', 'Tiwari', 'tiwari123@gmail.com', '70b76d3944ac5147d620b9bd6dcee148', '1999-02-04', '9137150422', 'Raigad'),
(8, 'Ankita', 'Singh', 'ankita@gmail.com', '3762bf5c1c086f76a850ec2d56b09d8a', '1999-10-26', '8276354893', 'Mansarovar'),
(10, 'Divya', 'Verma', 'Verma@yahoo.com', '6a6add88f5b2768089ea5deecf1789f1', '1999-02-19', '9876543298', 'Jaipur'),
(12, 'Supriya', 'Tiwari', 'Supriya@gmail.com', '636bfa5f0cffad1bd1a66c877dfe67a0', '1997-09-20', '8234578969', 'Uran'),
(15, 'Shyam', 'Dhole', 'Shyamdhole@gmail.com', 'c6afc2f954fc0b39f1f497a5328b6373', '1996-04-12', '2345678923', 'Gujarat'),
(31, 'Anju', 'Tiwari', 'tiwari456@gmail.com', '47956842fcbd59160972a18a41cc2fec', '1992-04-26', '9234567892', 'Uran'),
(32, 'deepak', 'sharma', 'sharma123@gmail.com', '8a6786424a9d314a46a20f61f7169699', '1999-02-27', '9876545768', 'Mumbai'),
(33, 'Winayak', 'Geklla', 'winayak@gmail.com', '3c7edc4c58b26dbdc108a478fe7c5bab', '1999-05-12', '9123485768', 'Panvel'),
(34, 'tushar', 'kapoor', 'tushar@gmail.com', 'e270f2e5773443297748c58d163364be', '2000-04-05', '9876567898', 'uran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Phone` (`Phone`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `EmailId` (`EmailId`),
  ADD UNIQUE KEY `mobno` (`mobno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
