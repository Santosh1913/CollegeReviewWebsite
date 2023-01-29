-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2021 at 05:58 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lic2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(26) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `branch_details`
--

CREATE TABLE `branch_details` (
  `bname` varchar(30) NOT NULL,
  `fy` int(11) NOT NULL,
  `sy` int(11) NOT NULL,
  `ty` int(11) NOT NULL,
  `teaching` int(11) NOT NULL,
  `non-teach` int(11) NOT NULL,
  `classrooms` int(11) NOT NULL,
  `labs` int(11) NOT NULL,
  `coll_code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch_details`
--

INSERT INTO `branch_details` (`bname`, `fy`, `sy`, `ty`, `teaching`, `non-teach`, `classrooms`, `labs`, `coll_code`) VALUES
('Civil', 60, 60, 60, 11, 2, 5, 8, '2mm'),
('Computer Science', 23, 30, 35, 8, 2, 3, 5, '2mm'),
('IT', 120, 80, 60, 20, 8, 15, 5, '2Gi'),
('Mechanical', 120, 80, 60, 20, 10, 18, 5, '2Gi'),
('Mechanical', 10, 30, 60, 17, 4, 6, 6, '2mm');

-- --------------------------------------------------------

--
-- Table structure for table `colldetails`
--

CREATE TABLE `colldetails` (
  `id` varchar(5) NOT NULL,
  `colltype` varchar(56) NOT NULL,
  `branches` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colldetails`
--

INSERT INTO `colldetails` (`id`, `colltype`, `branches`) VALUES
('2Gi', 'govt', 4),
('2kl', 'private', 2),
('2mm', 'private', 3);

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `collcode` varchar(11) NOT NULL,
  `collname` varchar(65) NOT NULL,
  `colladdr` varchar(69) NOT NULL,
  `collcontact` bigint(20) NOT NULL,
  `collemail` varchar(78) NOT NULL,
  `collweb` varchar(78) NOT NULL,
  `collpass` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`collcode`, `collname`, `colladdr`, `collcontact`, `collemail`, `collweb`, `collpass`) VALUES
('', 'Gss', 'Tilakwadi', 8902369587, 'gss@gmail.com', 'www.gss.com', '2222'),
('2Gi', 'Gogte', 'Udyabagh', 8745693214, 'git@edu.in', 'https://www.git.edu/', 'git@123'),
('2kl', 'Gss', 'Tilakwadi', 8902369587, 'gss@gmail.com', 'www.gss.com', '12345'),
('2mm', 'Martatha Mandal', 'Belgaum', 9898775512, 'mmec@edu.in', 'mmec.edu.in', 'mmec@123');

-- --------------------------------------------------------

--
-- Table structure for table `commitee`
--

CREATE TABLE `commitee` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` varchar(44) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(58) NOT NULL,
  `website` varchar(62) NOT NULL,
  `password` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commitee`
--

INSERT INTO `commitee` (`id`, `name`, `address`, `contact`, `email`, `website`, `password`) VALUES
(1, 'LIC', 'Bangalore', 9874563288, 'lic@edu.in', 'lic.edu.in', 'lic@123'),
(3, 'LIC', 'Belgaum', 9876543213, 'licbgm@gmail.com', 'www.licbgm.com', '12345'),
(4, 'LIC', 'Belgaum', 9876543212, 'licbgm@gmail.com', 'lic.edu.in', '123456'),
(5, 'LIC', 'Belgaum', 9876543213, 'licbgm@gmail.com', 'lic.edu.in', '123456'),
(6, 'NAAC', 'Banglore', 7658943567, 'naac@gmail.com', 'www.naac@gmail.com', '2345');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `feed` varchar(255) NOT NULL,
  `suggest` varchar(255) NOT NULL,
  `collcode` varchar(10) NOT NULL,
  `comm_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `feed`, `suggest`, `collcode`, `comm_id`) VALUES
(1, '', '', '', ''),
(2, 'a safe profession and friendly learning environment', 'stay organized', '2Gi', '');

-- --------------------------------------------------------

--
-- Table structure for table `inspection`
--

CREATE TABLE `inspection` (
  `id` int(11) NOT NULL,
  `m1` varchar(20) NOT NULL,
  `m2` varchar(20) NOT NULL,
  `m3` varchar(20) NOT NULL,
  `m4` varchar(20) NOT NULL,
  `inspdate` date NOT NULL,
  `coll1` varchar(20) NOT NULL,
  `coll2` varchar(20) NOT NULL,
  `coll3` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection`
--

INSERT INTO `inspection` (`id`, `m1`, `m2`, `m3`, `m4`, `inspdate`, `coll1`, `coll2`, `coll3`) VALUES
(333, 'smita', 'ankita', 'mayuri', 'pranali', '2021-08-04', '2Gi', '2mm', '2Gi'),
(666, 'swati', 'shweta', 'jeevan', 'smita', '2021-08-18', '2Gi', '2mm', '2mm');

-- --------------------------------------------------------

--
-- Table structure for table `pubfeedback`
--

CREATE TABLE `pubfeedback` (
  `fid` int(11) NOT NULL,
  `p_email` varchar(20) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `suggestion` varchar(255) NOT NULL,
  `coll_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pubfeedback`
--

INSERT INTO `pubfeedback` (`fid`, `p_email`, `p_name`, `feedback`, `suggestion`, `coll_code`) VALUES
(1, 'pkirti10@gmail.com', 'Kirti Patil', 'asdfdsag', 'sdgsdh', ''),
(2, 'pkirti10@gmail.com', 'Kirti Patil', 'shows enthusiam for classroom activities', 'college can develop community resources', '2Gi');

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE `public` (
  `name` varchar(45) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `public`
--

INSERT INTO `public` (`name`, `address`, `contact`, `email`, `password`) VALUES
('Kirti Patil', 'F.NO 103', 9874563214, 'pkirti10@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `publicfeed`
--

CREATE TABLE `publicfeed` (
  `id` int(11) NOT NULL,
  `collcode` varchar(10) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `pubemail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publicfeed`
--

INSERT INTO `publicfeed` (`id`, `collcode`, `feedback`, `pubemail`) VALUES
(1, '2JN', 'good', 'pkirti10@gmail.com'),
(2, '2mm', 'Great atmosphere', 'mmec@edu.in');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_name` varchar(30) NOT NULL,
  `stud_addr` varchar(40) NOT NULL,
  `stud_contact` bigint(20) NOT NULL,
  `stud_email` varchar(50) NOT NULL,
  `stud_pass` varchar(24) NOT NULL,
  `reg_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_name`, `stud_addr`, `stud_contact`, `stud_email`, `stud_pass`, `reg_no`) VALUES
('abc', 'Belgaum', 879687452, 'may@gmail.com', '12345', ''),
('ankita', 'REGISTER', 0, '8956746359', 'maay@gmail.com', '12345'),
('Sejal', 'Belgaum', 8956746376, 'gsej@gmail.com', '111', 'M1810211'),
('Pranali', 'Belgaum', 8956746376, 'aak@gmail.com', '1234', 'M1810225'),
('Pranali', 'Belgaum', 8956746358, 'ra@gmail.com', '123', 'REGISTER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_details`
--
ALTER TABLE `branch_details`
  ADD PRIMARY KEY (`bname`,`coll_code`),
  ADD KEY `coll_code` (`coll_code`);

--
-- Indexes for table `colldetails`
--
ALTER TABLE `colldetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`collcode`);

--
-- Indexes for table `commitee`
--
ALTER TABLE `commitee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `inspection`
--
ALTER TABLE `inspection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pubfeedback`
--
ALTER TABLE `pubfeedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `public`
--
ALTER TABLE `public`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `publicfeed`
--
ALTER TABLE `publicfeed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`reg_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `commitee`
--
ALTER TABLE `commitee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `inspection`
--
ALTER TABLE `inspection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=667;
--
-- AUTO_INCREMENT for table `pubfeedback`
--
ALTER TABLE `pubfeedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `publicfeed`
--
ALTER TABLE `publicfeed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
