-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 02, 2024 at 03:18 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `id`) VALUES
('amjath', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

DROP TABLE IF EXISTS `exam`;
CREATE TABLE IF NOT EXISTS `exam` (
  `Name` varchar(300) NOT NULL,
  `name_wi` varchar(200) NOT NULL,
  `Phone_Num` varchar(20) NOT NULL,
  `emill` varchar(250) NOT NULL,
  `Genter` varchar(100) NOT NULL,
  `nic` varchar(50) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`Name`, `name_wi`, `Phone_Num`, `emill`, `Genter`, `nic`, `student_id`, `Department`, `semester`, `subject`) VALUES
('amjath', 'akthar', '0776569856', 'aashiq12@gmail.com', 'full_time', '200131505455', '852', 'HNDA', '1st', '        jhbjnk                               \r\n                                    '),
('amjath', 'jahith', '0776569856', 'aashiq12@gmail.com', 'full_time', '200131505455', '24964', 'HNDA', '1st', '                                       \r\n         2154\r\n751                           '),
('ajis', 'akthar', '0776569856', 'aashiq12@gmail.com', 'full_time', '200131505455', '852', 'HNDIT', '1st', '                                       \r\n          622okijjuhygvbhu                          ');

-- --------------------------------------------------------

--
-- Table structure for table `lacture`
--

DROP TABLE IF EXISTS `lacture`;
CREATE TABLE IF NOT EXISTS `lacture` (
  `Staff_id` varchar(25) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Nic` varchar(20) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Email_id` varchar(150) NOT NULL,
  `Contact_no` int(20) NOT NULL,
  `Course` varchar(30) NOT NULL,
  `Duration` varchar(20) NOT NULL,
  `Gender` varchar(25) NOT NULL,
  PRIMARY KEY (`Staff_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lacture`
--

INSERT INTO `lacture` (`Staff_id`, `Name`, `Nic`, `Address`, `Email_id`, `Contact_no`, `Course`, `Duration`, `Gender`) VALUES
('15', 'akthar', ' 20143245', 'vdszgerz', 'aashiq12@gmail.com', 776569856, 'HNDIT', 'full_time', '');

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

DROP TABLE IF EXISTS `receipts`;
CREATE TABLE IF NOT EXISTS `receipts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `fee_receipt` varchar(255) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `attempt` varchar(10) NOT NULL,
  `subjects` text NOT NULL,
  `picture` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`id`, `fname`, `name`, `contact_no`, `email`, `gender`, `nic`, `student_id`, `department`, `fee_receipt`, `semester`, `attempt`, `subjects`, `picture`) VALUES
(1, 'muhammad Hanees', 'RM.Hanees', '0774152145', 'muhammad@gmail.com', 'Male', '200179603320', 's1100', 'HNDIT', '0114259996wd', '2024', '3rd', 'goog', '4p.png'),
(2, 'amjath', 'akthar', '0776569856', 'aashiq12@gmail.com', 'Male', '200131505455', '852', 'HNDE', '100', '2014', '3rd', 'Enter Your Message here.\r\n                                    ', 'young-indian-college-student-india_75648-286.webp');

-- --------------------------------------------------------

--
-- Table structure for table `student add`
--

DROP TABLE IF EXISTS `student add`;
CREATE TABLE IF NOT EXISTS `student add` (
  `Student_id` varchar(25) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Nic` varchar(25) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `Contact_no` int(50) NOT NULL,
  `Deoartment` varchar(100) NOT NULL,
  PRIMARY KEY (`Student_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_add`
--

DROP TABLE IF EXISTS `student_add`;
CREATE TABLE IF NOT EXISTS `student_add` (
  `student_id` int(25) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `Year` varchar(50) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Email_Id` varchar(50) NOT NULL,
  `Contect_No` int(30) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM AUTO_INCREMENT=245457 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_add`
--

INSERT INTO `student_add` (`student_id`, `Name`, `nic`, `Year`, `Address`, `Email_Id`, `Contect_No`, `Department`, `Gender`) VALUES
(5, 'akthar', '2001315054551', '222516', 'dfghjkhgf', 'aashiq12@gmail.com', 776569856, 'HNDIT', 'full_time'),
(6, 'akthar', '2001315054551', '2014', 'dfghjkhgf', 'aashiq12@gmail.com', 776569856, 'HNDIT', ''),
(69, 'mifthaJ', '2001315054551', '1996', 'dfghjkhgf', 'abc@gmail.com', 760780005, 'HNDA', 'full_time'),
(23, 'samha', '2001315054551', '32514534123', 'dfghjkhgf', 'abc@gmail.com', 760780005, 'HNDIT', 'Part_time'),
(9, 'akthar', '2001315054551', '2014', 'dfghjkhgf', 'aashiq12@gmail.com', 776569856, 'HNDIT', 'full_time'),
(50, 'mifthaJ', '2001315054551', '1452', 'hytredtfyguhj', 'aashiq12@gmail.com', 776569856, 'HNDA', 'full_time'),
(24, 'akthar', '2001315054551', '2014', 'dfghjkhgf', 'aashiq12@gmail.com', 776569856, 'HNDIT', 'full_time'),
(11, 'jahith', '111', '122', 'dfdsf', 'aashiq12@gmail.com', 1223, 'HNDIT', 'full_time'),
(253, 'akthar', '2001315054551', '2014', 'hytredtfyguhj', 'aashiq12@gmail.com', 776569856, 'HNDA', 'full_time'),
(852, 'akthar', '2001315054551', '2014', 'dfghjkhgf', 'jahith418@gmail.com', 776569856, 'HNDIT', 'full_time'),
(155, 'zainab', '2001315054551', '1452', 'hytredtfyguhj', 'aashiq12@gmail.com', 776569856, 'HNDIT', 'full_time'),
(2455, 'mifthaJ', '2001315054551', '2014', 'dfghjkhgf', 'aashiq12@gmail.com', 776569856, 'HNDIT', 'full_time'),
(245456, 'jahith', '0760780005', '2014', 'vdszgerz', 'jahith418@gmail.com', 776569856, 'HNDE', 'Part_time');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
