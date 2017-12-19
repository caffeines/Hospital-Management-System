-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2017 at 02:34 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_msdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_n_report`
--

CREATE TABLE `bill_n_report` (
  `pid` int(11) NOT NULL,
  `report` varchar(50000) DEFAULT 'N/A',
  `all_test` varchar(5000) DEFAULT 'N/A',
  `due` int(11) NOT NULL DEFAULT '0',
  `status` varchar(500) NOT NULL DEFAULT 'Paid'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_n_report`
--

INSERT INTO `bill_n_report` (`pid`, `report`, `all_test`, `due`, `status`) VALUES
(1, 'N/A', '1,2,3', 0, 'Unpaid'),
(3, 'N/A', '1,2,3', 0, 'Paid'),
(4, 'N/A', '1,2,3', 1290, 'Unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `book_app`
--

CREATE TABLE `book_app` (
  `pid` int(11) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `age` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `phno` varchar(500) NOT NULL,
  `disease` varchar(500) NOT NULL,
  `docid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_app`
--

INSERT INTO `book_app` (`pid`, `fname`, `lname`, `age`, `weight`, `gender`, `address`, `phno`, `disease`, `docid`) VALUES
(1, 'Abu Sadat', 'Md Sayem', 22, 84, 'Male', 'Jamalpur, Dhaka', '01710027639', 'Headache', 1),
(3, 'Asif', 'Khan', 23, 85, 'Male', 'Barisal', '01611162593', 'fever', 1),
(4, 'Anik', 'Ahsan', 9, 4, 'Male', 'Uttara, Dhaka-1229', '018798654231', 'Pneumonia', 3),
(5, 'Tasnia', 'Nishat', 21, 56, 'Female', 'Motijhil, Dhaka.', '7418529630', 'Back Pain', 3),
(6, 'Dibya Prokash', 'Sarkar Jeet', 29, 60, 'Male', 'Badda, Banasree, Dhaka,', '875412054120', 'High Blood Preassure(HBP)', 1),
(7, 'MD. Atiqul', 'Islam', 23, 64, 'Male', 'Nikunjo, khilkhet Model Thana, Dhaka.', '798645312798465', 'Obesity ', 2),
(8, 'Qader', 'Bin Jafar', 21, 72, 'Male', 'Banani, Dhaka', '894615321214', 'Cancer', 2);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `docid` int(11) NOT NULL,
  `doc_name` varchar(500) NOT NULL,
  `dept` varchar(500) NOT NULL,
  `fee` int(11) NOT NULL,
  `start` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`docid`, `doc_name`, `dept`, `fee`, `start`) VALUES
(1, 'Dr Fardin Ahmed Fahim', 'Medicin', 15000, '6 pm'),
(2, 'Dr. Iftekhar Al Mahadi', 'Neurology', 1000, '9pm'),
(3, 'Dr. Humayra Hamid', 'Medicine', 800, '3pm');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `status`) VALUES
('adnan', '@adnan', 'admin'),
('asif', '@asif', 'admin'),
('sadat', '@sadat', 'chair');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `tid` int(11) NOT NULL,
  `test_name` varchar(500) NOT NULL,
  `conductor` int(11) NOT NULL,
  `tfee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`tid`, `test_name`, `conductor`, `tfee`) VALUES
(1, 'ECG', 1, 530),
(2, 'Blood Test', 2, 60),
(3, 'Ultrasonography', 3, 700);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_n_report`
--
ALTER TABLE `bill_n_report`
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `book_app`
--
ALTER TABLE `book_app`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `docid` (`docid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`docid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `conductor` (`conductor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_app`
--
ALTER TABLE `book_app`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `docid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill_n_report`
--
ALTER TABLE `bill_n_report`
  ADD CONSTRAINT `bill_n_report_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `book_app` (`pid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `book_app`
--
ALTER TABLE `book_app`
  ADD CONSTRAINT `book_app_ibfk_1` FOREIGN KEY (`docid`) REFERENCES `doctor` (`docid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`conductor`) REFERENCES `doctor` (`docid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
