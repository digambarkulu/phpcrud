-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 07:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_tbl`
--

CREATE TABLE `emp_tbl` (
  `sqlid` int(255) NOT NULL,
  `Emp_nm` varchar(70) NOT NULL,
  `Emp_email` varchar(60) NOT NULL,
  `Emp_phno` varchar(20) NOT NULL,
  `salary` double NOT NULL,
  `designation` varchar(30) NOT NULL,
  `created_datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_datetime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_tbl`
--

INSERT INTO `emp_tbl` (`sqlid`, `Emp_nm`, `Emp_email`, `Emp_phno`, `salary`, `designation`, `created_datetime`, `updated_datetime`) VALUES
(9, 'Ram', 'ram@gmail.com', '7656985623', 10000, 'designation-1', '2024-03-01 19:08:12', ''),
(10, 'hari', 'hari@gmail.com', '7889455612', 20000, 'designation-2', '2024-03-01 19:08:44', ''),
(11, 'gopal', 'gopal@gmail.com', '9865325487', 30000, 'designation-3', '2024-03-01 19:10:40', ''),
(12, 'Sam', 'sam@gmail.com', '4556897889', 40000, 'designation-4', '2024-03-01 19:11:12', ''),
(13, 'employee-5', 'employee5@gmail.com', '5623897845', 500000, 'designation-5', '2024-03-01 19:11:55', ''),
(14, 'employee-6', 'employee6@gmail.com', '8763423611', 44000, 'designation-6', '2024-03-01 19:12:35', ''),
(15, 'employee-7', 'employee7@gmail.com', '7878787878', 60000, 'designation-7', '2024-03-01 19:13:14', ''),
(16, 'employee-8', 'employee8@gmail.com', '5645231289', 70000, 'designation-8', '2024-03-01 19:13:49', ''),
(17, 'employee-9', 'employee9@gmail.com', '8888999956', 50000, 'designation-9', '2024-03-01 19:14:24', ''),
(18, 'employee-10', 'employee10@gmail.com', '5689784556', 70000, 'designation-10', '2024-03-01 19:14:57', ''),
(19, 'emloyee-11', 'employee11@gmail.com', '5689895689', 60000, 'designation-11', '2024-03-01 19:15:34', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_tbl`
--
ALTER TABLE `emp_tbl`
  ADD PRIMARY KEY (`sqlid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_tbl`
--
ALTER TABLE `emp_tbl`
  MODIFY `sqlid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
