-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 01:04 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvcdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `noticeadmin`
--

CREATE TABLE `noticeadmin` (
  `id` int(5) NOT NULL,
  `title` varchar(20) NOT NULL,
  `noticeid` varchar(20) NOT NULL,
  `beginningdate` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `endingdate` varchar(10) NOT NULL,
  `description` varchar(20) NOT NULL,
  `adminid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticeadmin`
--

INSERT INTO `noticeadmin` (`id`, `title`, `noticeid`, `beginningdate`, `author`, `endingdate`, `description`, `adminid`) VALUES
(1, 'dsdcw', '1', '2020-01-04', 'dcsdc', '2020-01-05', 'dsdc', '2'),
(2, 'dsdcw', '1', '2020-01-04', 'dcsdc', '2020-01-05', 'dsdc', '2');

-- --------------------------------------------------------

--
-- Table structure for table `registrationadmin`
--

CREATE TABLE `registrationadmin` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `qualification` varchar(10) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrationadmin`
--

INSERT INTO `registrationadmin` (`id`, `name`, `phoneno`, `qualification`, `batch`, `username`, `password`) VALUES
(1, 'admin', '9635821471', 'b.tech', 'jsd', 'admin', 'admin123'),
(3, 'sureshgopi', '665528856', 'm.tech', 'jsd', 'suresh', '12324');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `qualification` varchar(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `semno` varchar(5) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `name`, `dob`, `email`, `gender`, `phoneno`, `qualification`, `batch`, `username`, `password`, `semno`, `year`) VALUES
(1, 'anisha', '1997-05-05', 'anishaammu@gamil.com', 'female', 2147483647, 'b.tech', 'electronic', 'anisha', 'amma', '201', '2015'),
(3, 'mathews', '2020-01-05', 'mathews@gmail.com', 'male', 3258855, 'b.tech', 'electronic', 'math', 'math', '3rd s', '2020-01-25'),
(4, 'vidhya', '1995-10-09', 'a@gmail.com', 'female', 2147483647, 'b.tech', 'cs', 'parvathy', 'yyy', '3', '2020-01-17'),
(5, 'kavya', '2020-01-02', 'kavya@gmail.com', 'female', 99999666, '+2', 'mechanical', 'kavya', '753', '1', '2020-01-22'),
(6, 'lokh', '2020-01-02', 'loka123@gamil.com', 'male', 369856522, '+2', 'mechanical', 'lokathipathyam', '123636', '1', '2020-01-24'),
(7, 'anu', '2020-01-01', 'a@gmail.com', 'female', 1212345678, 'b.tech', 'jsd', 'parvathy', '1231234', '2', '2020-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `resultstudent`
--

CREATE TABLE `resultstudent` (
  `id` int(5) NOT NULL,
  `regno` varchar(10) NOT NULL,
  `indexno` varchar(10) NOT NULL,
  `coursecode` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `subname` varchar(11) NOT NULL,
  `result` varchar(20) NOT NULL,
  `credit` varchar(20) NOT NULL,
  `totalcgpa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resultstudent`
--

INSERT INTO `resultstudent` (`id`, `regno`, `indexno`, `coursecode`, `name`, `subname`, `result`, `credit`, `totalcgpa`) VALUES
(1, 'PRP!%EC#$', '7', '201', 'anisha p pushpan', 'circuits', 'A+', '7', ''),
(2, 'PRP15EC029', '8754', '202', 'anisha', 'lcd', 'A', '8', '8');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(5) NOT NULL,
  `code` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `creadit` varchar(10) NOT NULL,
  `subjectname` varchar(10) NOT NULL,
  `adminid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `code`, `semester`, `year`, `creadit`, `subjectname`, `adminid`) VALUES
(1, '202', '1', '2015', '7.99', 'circuits', '77');

-- --------------------------------------------------------

--
-- Table structure for table `subjectlist`
--

CREATE TABLE `subjectlist` (
  `id` int(5) NOT NULL,
  `subname` varchar(20) NOT NULL,
  `coursecode` varchar(10) NOT NULL,
  `adminid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectlist`
--

INSERT INTO `subjectlist` (`id`, `subname`, `coursecode`, `adminid`) VALUES
(1, 'circuits', '202', '77'),
(2, 'circuits', '202', '1'),
(3, 'lcd', '203', '2');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(20) NOT NULL,
  `day` varchar(10) NOT NULL,
  `subname` varchar(10) NOT NULL,
  `coursename` varchar(10) NOT NULL,
  `code` varchar(20) NOT NULL,
  `time` varchar(11) NOT NULL,
  `adminid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `day`, `subname`, `coursename`, `code`, `time`, `adminid`) VALUES
(1, 'monday', 'circuits', 'ece', '201', '10', '2'),
(2, 'tuesday', 'lcd', 'ece', '202', '10', '2'),
(3, 'wednesday', 'microwave', 'ece', '203', '12', '3'),
(4, 'thursday', 'digital ci', 'ece', '204', '1pm', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noticeadmin`
--
ALTER TABLE `noticeadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrationadmin`
--
ALTER TABLE `registrationadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resultstudent`
--
ALTER TABLE `resultstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjectlist`
--
ALTER TABLE `subjectlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticeadmin`
--
ALTER TABLE `noticeadmin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registrationadmin`
--
ALTER TABLE `registrationadmin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `resultstudent`
--
ALTER TABLE `resultstudent`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjectlist`
--
ALTER TABLE `subjectlist`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
