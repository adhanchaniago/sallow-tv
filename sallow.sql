-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2017 at 05:16 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sallow`
--

-- --------------------------------------------------------

--
-- Table structure for table `channel`
--

CREATE TABLE `channel` (
  `channel_id` int(2) NOT NULL,
  `c_category_id` int(2) NOT NULL,
  `c_name` varchar(15) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `discripition` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `channel_category`
--

CREATE TABLE `channel_category` (
  `c_category_id` int(2) NOT NULL,
  `category` varchar(15) NOT NULL,
  `channel_type_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `channel_category`
--

INSERT INTO `channel_category` (`c_category_id`, `category`, `channel_type_id`) VALUES
(1, 'General', 1),
(2, 'News', 1),
(3, 'Movies', 2),
(4, 'General', 3),
(5, 'Movies', 1),
(6, 'General', 2),
(7, 'News', 2),
(8, 'News', 3),
(9, 'Movies', 3);

-- --------------------------------------------------------

--
-- Table structure for table `channel_type`
--

CREATE TABLE `channel_type` (
  `channel_type_id` int(2) NOT NULL,
  `channel_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `channel_type`
--

INSERT INTO `channel_type` (`channel_type_id`, `channel_type`) VALUES
(1, 'Malayalam'),
(2, 'English'),
(3, 'Hindi');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `complaint_id` int(2) NOT NULL,
  `reg_id` int(2) NOT NULL,
  `head` varchar(15) NOT NULL,
  `body` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `dist_id` int(2) NOT NULL,
  `dist_name` varchar(15) NOT NULL,
  `state_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(2) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `reg_id` int(2) NOT NULL,
  `log_stat` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pack_id` int(2) NOT NULL,
  `scheme_id` int(2) NOT NULL,
  `channel_id` int(2) NOT NULL,
  `status` varchar(15) NOT NULL,
  `package_name` varchar(20) NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package_scheme`
--

CREATE TABLE `package_scheme` (
  `scheme_id` int(2) NOT NULL,
  `no_day` int(2) NOT NULL,
  `amount` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_scheme`
--

INSERT INTO `package_scheme` (`scheme_id`, `no_day`, `amount`) VALUES
(4, 30, 120),
(5, 60, 200),
(6, 90, 320);

-- --------------------------------------------------------

--
-- Table structure for table `programe`
--

CREATE TABLE `programe` (
  `pgm_id` int(2) NOT NULL,
  `pgm_caption` varchar(20) NOT NULL,
  `added_date` datetime NOT NULL,
  `pgm_path` varchar(50) NOT NULL,
  `channel_id` int(2) NOT NULL,
  `status` varchar(20) NOT NULL,
  `icon_path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `reg_id` int(2) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL,
  `dist_id` int(2) NOT NULL,
  `pincode` int(6) NOT NULL,
  `mob_no` int(10) NOT NULL,
  `email` varchar(15) NOT NULL,
  `reg_date` datetime NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `status` varchar(23) NOT NULL,
  `d_status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subcripition`
--

CREATE TABLE `subcripition` (
  `subcri_id` int(2) NOT NULL,
  `reg_id` int(2) NOT NULL,
  `pack_id` int(2) NOT NULL,
  `trans_id` int(2) NOT NULL,
  `trans_date` datetime NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `trans_id` int(2) NOT NULL,
  `mode` varchar(15) NOT NULL,
  `amount` int(3) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `channel`
--
ALTER TABLE `channel`
  ADD PRIMARY KEY (`channel_id`);

--
-- Indexes for table `channel_category`
--
ALTER TABLE `channel_category`
  ADD PRIMARY KEY (`c_category_id`);

--
-- Indexes for table `channel_type`
--
ALTER TABLE `channel_type`
  ADD PRIMARY KEY (`channel_type_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`dist_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `package_scheme`
--
ALTER TABLE `package_scheme`
  ADD PRIMARY KEY (`scheme_id`);

--
-- Indexes for table `programe`
--
ALTER TABLE `programe`
  ADD PRIMARY KEY (`pgm_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `subcripition`
--
ALTER TABLE `subcripition`
  ADD PRIMARY KEY (`subcri_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`trans_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `channel`
--
ALTER TABLE `channel`
  MODIFY `channel_id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `channel_category`
--
ALTER TABLE `channel_category`
  MODIFY `c_category_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `channel_type`
--
ALTER TABLE `channel_type`
  MODIFY `channel_type_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `complaint_id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `dist_id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pack_id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `package_scheme`
--
ALTER TABLE `package_scheme`
  MODIFY `scheme_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `programe`
--
ALTER TABLE `programe`
  MODIFY `pgm_id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `reg_id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subcripition`
--
ALTER TABLE `subcripition`
  MODIFY `subcri_id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `trans_id` int(2) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
