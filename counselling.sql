-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2019 at 10:33 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `counselling`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` text NOT NULL,
  `passcode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `passcode`) VALUES
(1, 'amrita', 'amrita'),
(2, 'kshitija', 'kshitija'),
(3, 'father', 'father'),
(4, 'kuntal', 'kuntal');

-- --------------------------------------------------------

--
-- Table structure for table `coun1_msg`
--

CREATE TABLE `coun1_msg` (
  `id` int(5) NOT NULL,
  `coun1msg11` varchar(500) NOT NULL,
  `coun1msg12` varchar(500) NOT NULL,
  `coun1msg13` varchar(500) NOT NULL,
  `coun1msg14` varchar(500) NOT NULL,
  `coun1msg15` varchar(500) NOT NULL,
  `coun1msg2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coun1_msg`
--

INSERT INTO `coun1_msg` (`id`, `coun1msg11`, `coun1msg12`, `coun1msg13`, `coun1msg14`, `coun1msg15`, `coun1msg2`) VALUES
(1, '			\r\nnormal student', 'mild depression', 'moderate depression', 'severe depression', 'extremely severe depression', 'special occassions'),
(2, 'normal student', 'mild depression', 'moderate depression', 'severe depression', 'extremely severe depression', 'special occassions');

-- --------------------------------------------------------

--
-- Table structure for table `coun2_msg`
--

CREATE TABLE `coun2_msg` (
  `id` int(10) NOT NULL,
  `coun2msg11` varchar(500) NOT NULL,
  `coun2msg12` varchar(500) NOT NULL,
  `coun2msg13` varchar(500) NOT NULL,
  `coun2msg14` varchar(500) NOT NULL,
  `coun2msg15` varchar(500) NOT NULL,
  `coun2msg2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coun2_msg`
--

INSERT INTO `coun2_msg` (`id`, `coun2msg11`, `coun2msg12`, `coun2msg13`, `coun2msg14`, `coun2msg15`, `coun2msg2`) VALUES
(1, '1', '2', '3', '4', '5', '6');

-- --------------------------------------------------------

--
-- Table structure for table `coun3_msg`
--

CREATE TABLE `coun3_msg` (
  `id` int(11) NOT NULL,
  `coun3msg11` varchar(500) NOT NULL,
  `coun3msg12` varchar(500) NOT NULL,
  `coun3msg13` varchar(500) NOT NULL,
  `coun3msg14` varchar(500) NOT NULL,
  `coun3msg15` varchar(500) NOT NULL,
  `coun3msg2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `coun_1`
--

CREATE TABLE `coun_1` (
  `id` int(5) NOT NULL,
  `day_1` text NOT NULL,
  `day_2` text NOT NULL,
  `day_3` text NOT NULL,
  `time_11` text NOT NULL,
  `ampm1` varchar(5) NOT NULL,
  `time_12` text NOT NULL,
  `ampm2` varchar(5) NOT NULL,
  `time_13` text NOT NULL,
  `ampm3` varchar(5) NOT NULL,
  `time_21` text NOT NULL,
  `pmam1` varchar(5) NOT NULL,
  `time_22` text NOT NULL,
  `pmam2` varchar(5) NOT NULL,
  `time_23` text NOT NULL,
  `pmam3` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coun_1`
--

INSERT INTO `coun_1` (`id`, `day_1`, `day_2`, `day_3`, `time_11`, `ampm1`, `time_12`, `ampm2`, `time_13`, `ampm3`, `time_21`, `pmam1`, `time_22`, `pmam2`, `time_23`, `pmam3`) VALUES
(1, 'MON', 'TUES', 'WED', '11', 'AM', '11', 'AM', '11', 'AM', '3', 'PM', '3', 'PM', '3', 'PM');

-- --------------------------------------------------------

--
-- Table structure for table `coun_2`
--

CREATE TABLE `coun_2` (
  `id` int(5) NOT NULL,
  `day_1` text NOT NULL,
  `day_2` text NOT NULL,
  `day_3` text NOT NULL,
  `time_11` text NOT NULL,
  `ampm1` varchar(5) NOT NULL,
  `time_12` text NOT NULL,
  `ampm2` varchar(5) NOT NULL,
  `time_13` text NOT NULL,
  `ampm3` varchar(5) NOT NULL,
  `time_21` text NOT NULL,
  `pmam1` varchar(5) NOT NULL,
  `time_22` text NOT NULL,
  `pmam2` varchar(5) NOT NULL,
  `time_23` text NOT NULL,
  `pmam3` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coun_3`
--

CREATE TABLE `coun_3` (
  `id` int(5) NOT NULL,
  `day_1` text NOT NULL,
  `day_2` text NOT NULL,
  `day_3` text NOT NULL,
  `time_11` text NOT NULL,
  `ampm1` varchar(5) NOT NULL,
  `time_12` text NOT NULL,
  `ampm2` varchar(5) NOT NULL,
  `time_13` text NOT NULL,
  `ampm3` varchar(5) NOT NULL,
  `time_21` text NOT NULL,
  `pmam1` varchar(5) NOT NULL,
  `time_22` text NOT NULL,
  `pmam2` varchar(5) NOT NULL,
  `time_23` text NOT NULL,
  `pmam3` varchar(5) NOT NULL,
  `coun3msg1` varchar(500) NOT NULL,
  `coun3msg2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `filename`
--

CREATE TABLE `filename` (
  `fn` varchar(500) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `filename`
--

INSERT INTO `filename` (`fn`, `id`) VALUES
('Age_Declaration_Form.pdf', 1),
('Paper_Towns.pdf', 2);

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `data_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `stdId` varchar(10) NOT NULL,
  `testdate` date NOT NULL,
  `class` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `rollno` int(3) NOT NULL,
  `one` int(11) DEFAULT NULL,
  `two` int(11) DEFAULT NULL,
  `three` int(11) DEFAULT NULL,
  `four` int(11) DEFAULT NULL,
  `five` int(11) DEFAULT NULL,
  `six` int(11) DEFAULT NULL,
  `seven` int(11) DEFAULT NULL,
  `eight` int(11) DEFAULT NULL,
  `nine` int(11) DEFAULT NULL,
  `ten` int(11) DEFAULT NULL,
  `eleven` int(11) DEFAULT NULL,
  `twelve` int(11) DEFAULT NULL,
  `thirteen` int(11) DEFAULT NULL,
  `fourteen` int(11) DEFAULT NULL,
  `fifteen` int(11) DEFAULT NULL,
  `sixteen` int(11) DEFAULT NULL,
  `seventeen` int(11) DEFAULT NULL,
  `eighteen` int(11) DEFAULT NULL,
  `nineteen` int(11) DEFAULT NULL,
  `twenty` int(11) DEFAULT NULL,
  `twentyone` int(11) DEFAULT NULL,
  `stotal` int(3) NOT NULL,
  `atotal` int(3) NOT NULL,
  `dtotal` int(3) NOT NULL,
  `total` int(5) NOT NULL,
  `std_records` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`data_id`, `fname`, `stdId`, `testdate`, `class`, `dept`, `email`, `phone`, `rollno`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `thirteen`, `fourteen`, `fifteen`, `sixteen`, `seventeen`, `eighteen`, `nineteen`, `twenty`, `twentyone`, `stotal`, `atotal`, `dtotal`, `total`, `std_records`) VALUES
(222, 'rahul shah', '2018330011', '2019-09-18', 'SE', 'IT', 'rahul@gmail.com', '9999999988', 51, 2, 3, 3, 3, 3, 3, 3, 3, 2, 3, 2, 3, 0, 3, 3, 3, 3, 1, 3, 1, 1, 17, 18, 16, 51, ''),
(221, 'ayush jain', '2018330012', '2019-09-18', 'TE', 'IT', 'jainayush587@gmail.com', '9998887774', 23, 0, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 2, 1, 7, 9, 7, 23, 'qq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coun1_msg`
--
ALTER TABLE `coun1_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coun2_msg`
--
ALTER TABLE `coun2_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coun3_msg`
--
ALTER TABLE `coun3_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coun_1`
--
ALTER TABLE `coun_1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `coun_2`
--
ALTER TABLE `coun_2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `coun_3`
--
ALTER TABLE `coun_3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `filename`
--
ALTER TABLE `filename`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`data_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coun1_msg`
--
ALTER TABLE `coun1_msg`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coun2_msg`
--
ALTER TABLE `coun2_msg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coun3_msg`
--
ALTER TABLE `coun3_msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coun_1`
--
ALTER TABLE `coun_1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coun_2`
--
ALTER TABLE `coun_2`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coun_3`
--
ALTER TABLE `coun_3`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filename`
--
ALTER TABLE `filename`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
