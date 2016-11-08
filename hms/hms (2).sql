-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2016 at 08:49 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` varchar(500) NOT NULL,
  `admin_name` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_name`, `password`) VALUES
('rajesh@gmail.com', 'Rajesh', '12345678'),
('rakesh@gmail.com', 'Rakesh', '12345678'),
('shubham@gmail.com', 'Shubham', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`c_id`, `c_name`, `c_password`) VALUES
(20001, 'cashier', 123);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` int(11) NOT NULL,
  `doc_name` varchar(500) NOT NULL,
  `doc_age` int(11) NOT NULL,
  `doc_contact` int(11) NOT NULL,
  `doc_password` varchar(500) NOT NULL,
  `doc_gender` varchar(50) NOT NULL,
  `doc_dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `doc_name`, `doc_age`, `doc_contact`, `doc_password`, `doc_gender`, `doc_dept`) VALUES
(1, 'Pk', 26, 88965423, '123', 'M', 'Physician'),
(2, 'rj', 54, 87569213, '123', 'Male', 'Physician'),
(3, 'sk', 44, 785469123, '123', 'Male', 'Surgeon'),
(4, 'Payal', 29, 885544776, '123', 'Female', 'Surgeon'),
(6, 'asg', 5, 65, '123', 'Male', 'Physician'),
(7, 'Archana', 26, 854679321, '123', 'Female', 'Physician');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(55) NOT NULL,
  `m_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`m_id`, `m_name`, `m_rate`) VALUES
(30001, 'Calphol', 40),
(30002, 'Calvix 720', 60),
(30004, 'Dichorate 500', 150),
(30005, 'Sumo 650', 125),
(30006, 'Allegra 120', 110),
(30007, 'Oflaxacin 300', 45),
(30008, 'Paracetamol 500', 20),
(30009, 'Metronidazole 200', 63),
(30010, 'Mentho plus ', 40),
(30011, 'Benadryl', 55),
(30012, 'Zincovit 200', 40),
(30013, 'Soframycin CT', 53);

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `contact` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `reg_date` date NOT NULL,
  `doc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`id`, `name`, `age`, `address`, `contact`, `gender`, `reg_date`, `doc_id`) VALUES
(4, 'rgergerg', 23, 'egeg', 2424234, 'Male', '2016-10-14', 4),
(5, 'rgergerg', 23, 'egeg', 2424234, 'Male', '2016-10-14', 4),
(6, 'jaiojfo', 85, 'sfcs', 54664, 'Male', '2016-10-14', 4),
(7, 'a', 1, 'wedfbn', 5335, 'Male', '2016-10-15', 4),
(9, 'aaaa', 2, 'aaa', 156, 'Male', '2016-10-14', 7),
(10, 'kkjklg', 46, 'asdfghjk', 784213, 'Male', '2016-10-27', 4),
(11, 'fghjkkhg', 123, 'asdfghj', 78945123, 'Male', '2016-10-27', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cashier`
--
ALTER TABLE `cashier`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20002;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30014;
--
-- AUTO_INCREMENT for table `patient_details`
--
ALTER TABLE `patient_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
