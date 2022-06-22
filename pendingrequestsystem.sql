-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 03:10 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendingrequestsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `flat` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `contact_num` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `type` text NOT NULL,
  `password` text NOT NULL,
  `paid_money` int(4) NOT NULL,
  `unpaid_money` int(5) NOT NULL,
  `total_money` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`flat`, `id`, `firstname`, `lastname`, `contact_num`, `email`, `type`, `password`, `paid_money`, `unpaid_money`, `total_money`) VALUES
(101, 98, 'im', 'new', '9930727626', 'im@gmail.com', 'user', '12345', 0, 0, 0),
(102, 23, 'sana', 'shaikh', '9930727626', 'shikhsana@gmail.com', 'user', '12345', 0, 0, 2000),
(103, 96, 'jayant', 'kumar', '8369950724', 'jayant29@gmail.com', 'user', '1234', 0, 0, 0),
(104, 25, 'baravkar', 'gohil', '9967631533', 'barvakargohil89@gmail.com', 'user', '9819014756', 0, 0, 2000),
(201, 26, 'jagdale', 'navale', '8779687022', 'jagdale.navale9@gmail.com', 'user', '83699', 0, 0, 2000),
(202, 22, 'amit', 'mandaliya', '8692896797', 'amit.mandaliya29@gmail.com', 'user', '9833151808', 500, 1500, 2000),
(203, 27, 'more', 'parmar', '9819014756', 'moreparmar@gmail.com', 'user', '9819', 0, 0, 2000),
(204, 28, 'harsh', 'bhor', '8779718619', 'harsh.bhor9@gmail.com', 'user', '9930', 0, 0, 2000),
(301, 48, 'vedang', 'jadhav', '9819780028', 'vedang.j29@gmail.com', 'user', '123', 0, 0, 2000),
(302, 30, 'bhosle', 'paddikal', '9987417200', 'bhosle.paddikal21@gmail.com', 'user', '77290', 0, 0, 2000),
(303, 31, 'ubale', 'tank', '8692046088', 'tankubale34@gmail.com', 'user', '876549', 0, 0, 2000),
(304, 32, 'palve', 'savilain', '8828744891', 'savilain99@gmail.com', 'user', 'saviaik', 0, 0, 2000),
(401, 33, 'dantawate', 'punewala', '9664288568', 'punewalad46@gmail.com', 'user', 'punewalad', 0, 0, 2000),
(402, 34, 'pardeshi', 'kannan', '8108503483', 'kanna.pardeshi2@gmail.com', 'user', 'pardeshikanan', 0, 0, 2000),
(403, 35, 'gawali', 'kumar', '9082695050', 'kumar.gawali56@gmail.com', 'user', 'kumargawali', 0, 0, 2000),
(404, 36, 'belote', 'deole', '7039915353', 'beole.d60@gmail.com', 'user', 'beo;e.d', 0, 0, 2000),
(501, 37, 'dhole', 'sethia', '7698092311', 'sethia.dhole30@gmail.com', 'user', 'dhole30', 0, 0, 2000),
(502, 38, 'aniket', 'singh', '9920196002', 'singhaniket56@gmail.com', 'user', 'aniketsingh', 0, 0, 2000),
(503, 39, 'aditya', 'pratap', '9987440729', 'pratapaditya@gmail.com', 'user', 'adityap', 0, 0, 2000),
(504, 40, 'mayuresh', 'nivatkar', '9167117817', 'nivatkarmayuresh@gmail.com', 'user', 'mayuresh', 0, 0, 2000),
(505, 41, 'sachin', 'sakariya', '7506438666', 'sakariya.sachin34@gmail.com', 'user', '345213', 0, 0, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('amit.mandaliya29@gmail.com', '9833151808');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `flat` int(100) NOT NULL,
  `water_charge` int(100) NOT NULL,
  `maintanance_charge` int(100) NOT NULL,
  `extra_charges` int(100) NOT NULL,
  `details` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`flat`, `water_charge`, `maintanance_charge`, `extra_charges`, `details`) VALUES
(104, 0, 0, 100, 'no ');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `Id` int(11) NOT NULL,
  `Login_Email` varchar(50) NOT NULL,
  `Message1` varchar(300) NOT NULL,
  `Date1` date NOT NULL,
  `Time1` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`Id`, `Login_Email`, `Message1`, `Date1`, `Time1`) VALUES
(53, 'Admin', 'important', '2021-09-29', '15:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` text NOT NULL,
  `amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`name`, `email`, `mobile`, `amount`) VALUES
(' AMIT NARESH MANDALIYA', 'amit.mandaliya29@gmail.com', '8369950724', 500);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `flat` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `contact_num` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request_complains`
--

CREATE TABLE `request_complains` (
  `flat` varchar(100) NOT NULL,
  `Full_name` text NOT NULL,
  `Login_email` text NOT NULL,
  `Contact_no` varchar(15) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_complains`
--

INSERT INTO `request_complains` (`flat`, `Full_name`, `Login_email`, `Contact_no`, `Message`) VALUES
('202', 'Amit mandaliya', 'amit.mandaliya29@gmail.com', '8369950428', 'iiii'),
('', 'Amit', 'parth23@gmail.com', '83699507241', 'nmnmn');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `contact_num` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`id`, `firstname`, `lastname`, `contact_num`, `email`, `password`, `date`) VALUES
(5, 'a', 'a', '8369950724', 'a.a29@gmail.com', '1234', '2021-09-21 21:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_family`
--

CREATE TABLE `tbl_family` (
  `flat` varchar(100) NOT NULL,
  `first` varchar(11) NOT NULL,
  `last` varchar(11) NOT NULL,
  `age` int(11) NOT NULL,
  `relation` varchar(50) NOT NULL,
  `mobile_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_family`
--

INSERT INTO `tbl_family` (`flat`, `first`, `last`, `age`, `relation`, `mobile_no`) VALUES
('204', 'pooja', 'mandaliya', 19, 'brother of ubale tank', '9960546780'),
('102', 'kuran', 'mandaliya', 19, 'sister of jayant kumar', '993045798'),
('103', 'sushant', 'kumar', 19, 'brother', '9960546879'),
('101', 'anand', 'shaikh', 19, 'sister of amit mandaliya', '9960546780');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`flat`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`flat`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_complains`
--
ALTER TABLE `request_complains`
  ADD PRIMARY KEY (`Contact_no`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `security`
--
ALTER TABLE `security`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
