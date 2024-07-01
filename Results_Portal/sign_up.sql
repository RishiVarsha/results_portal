-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 10, 2023 at 08:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sign_up`
--

-- --------------------------------------------------------

--
-- Table structure for table `passcode`
--

CREATE TABLE `passcode` (
  `code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passcode`
--

INSERT INTO `passcode` (`code`) VALUES
('4265'),
('abcd');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `full_name` varchar(50) NOT NULL,
  `roll_no` varchar(20) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `dotnet_mail` varchar(50) NOT NULL,
  `phn_no` varchar(13) NOT NULL,
  `parentphn_no` varchar(10) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `repeat_pwd` varchar(50) NOT NULL,
  `security_ques` varchar(100) NOT NULL,
  `security_ans` varchar(100) NOT NULL,
  `img` blob NOT NULL,
  `reg` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`full_name`, `roll_no`, `branch`, `dotnet_mail`, `phn_no`, `parentphn_no`, `pwd`, `repeat_pwd`, `security_ques`, `security_ans`, `img`, `reg`) VALUES
('admin', '', '', 'admin@vvit.net', '', '', 'admin@123', 'admin@123', '', '', '', 0),
('Brown', '20bq1', 'CIVILENGINEERING', '20bq1a14@vvit.net', '+916302833214', '8247501066', '147896325', '147896325', '1', 'uh', 0x6769726c2e706e67, 0),
('PORANKI RISHI VARSHA', '20BQ1A12', '', '20bq1a12d1@vvit.net', '+916302833214', '8247501066', '123456789', '123456789', '1', 'pandu', 0x64656c657465206166746572207573652e6a7067, 0),
('kiran', '20BQ1A1252', '6', '20bq1a12l5@vvit.net', '+916302833214', '8247501066', '12547896', '12547896', '1', 'fd', 0x6769726c2e706e67, 0),
('Brown', '20BQ1A12D4', '', '20bq1a12d4@vvit.net', '+916302833214', '8247501066', '123456789', '123456789', '1', 'pandu', 0x64656c657465206166746572207573652e6a7067, 0),
('uday', '20bq1a12h5', '', '20bq1a12h5@vvit.net', '09391190493', '9963022985', '12378963', '12378963', '1', 'pandu', 0x626f6f6b2e6a706567, 0),
('ukady', '20bq1a12m0', 'INFORMATION TECHNOLOGY', '20bq1a12m0@vvit.net', '+916302833214', '8247501066', '123456789', '123456789', '1', 'ff', 0x756461792e6a7067, 0),
('lachu', '20bq1a12n0', 'CYBER SECURITY INCLUDING BLOCKCHAIN TECHNOLOGY', '20bq1a12n0@vvit.net', '9965412585', '9585741524', '123456789', '123456789', '1', 'kaik', 0x756461792e6a7067, 20);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `staff_fullname` varchar(20) NOT NULL,
  `staff_branch` varchar(20) NOT NULL,
  `dotnet_mail` varchar(20) NOT NULL,
  `staff_phno` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `rpassword` varchar(20) NOT NULL,
  `security_questions` varchar(20) NOT NULL,
  `security_answer` varchar(20) NOT NULL,
  `staff_img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`staff_fullname`, `staff_branch`, `dotnet_mail`, `staff_phno`, `password`, `rpassword`, `security_questions`, `security_answer`, `staff_img`) VALUES
('Sudhakishore', 'CIVIL ENGINEERING', '18bq1a12h5@vvit.net', '09391190493', '123456789', '123456789', '1', 'ff', 0x756461792e6a7067),
('udaykiran', 'CIVIL ENGINEERING', '20bq1a12h5@vvit.net', '09391190493', '123456789', '123456789', '1', 'ff', 0x746561636865725f696d672f756461796b6972616e2e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passcode`
--
ALTER TABLE `passcode`
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD UNIQUE KEY `dotnet_mail` (`dotnet_mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
