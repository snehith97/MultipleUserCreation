-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2019 at 03:04 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `Id` int(32) NOT NULL,
  `EmailAddress` varchar(128) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Title` text NOT NULL,
  `PasswordHash` varchar(256) NOT NULL,
  `PasswordSalt` varchar(256) NOT NULL,
  `PhoneNumber` bigint(15) NOT NULL,
  `AssistRole` int(1) NOT NULL,
  `JobseekerRole` int(1) NOT NULL,
  `EmployerRole` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`Id`, `EmailAddress`, `FirstName`, `LastName`, `Title`, `PasswordHash`, `PasswordSalt`, `PhoneNumber`, `AssistRole`, `JobseekerRole`, `EmployerRole`) VALUES
(17, 'sakshikishore1998@gmail.com', 'snehit', 'Johnson', 'Mr.', 'NTQ4YzM0NTQ5ZDVlOWQ2ZTYwMThjMzA0MTZmNGU5M2ZhOTg5ZWVhYjc1Mzg2YjlmYjdiZGQ1YmMxODQyOGZkYWI', '353bf637', 4782441807, 1, 1, 0),
(18, 'b150033cs@nitsikkim.ac.in', 'sakshi', 'kishore', 'Miss', 'ZjExNTA0ZTBjZmQ2NGU1ZWNkNGEzZWIxMGFjMzBiYTBlODYxYmUzYzlhMDFjN2I5MTI5ZmZkNTZkNmY2OThhM2I', '14caea7c', 9933040113, 0, 1, 0),
(19, 'b150001@nitsikkim.ac.in', 'sakshi', 'xx', 'Miss', 'MDEwYzExMmNmZjQ2MGJlMDcxOTU2NjUyODFlYWVjMjgzYmFkMjY5NGZiN2Y2NDI0YTZmYjFlNjlmYTRiYmViMjk', 'd1dca29b', 9933040315, 1, 0, 0),
(20, 'b150117cs@nitsikkim.ac.in', 'ashish', 'Dey', 'Mr.', 'ODdiYzViZDAzMDMxNmVmYzY5NzBkOTcxNjAxNTk4MGNhMDlhMWE5ODcyMWM4MzAzZDVmN2JiNTJhMWYxZmUwODE', 'f3b20330', 9494949494, 0, 0, 1),
(21, 'b160033cs@nitsikkim.ac.in', 'ashmita', 'chauhan', 'Miss', 'N2YzYjZlMWQzYzFhYWFhNDE4Y2FhMzk0NThiMzE2ZDc5MTA2Y2JiOGY2MDZjOWM0ZmViZmFmOWUzZTQyY2JmYTg', 'bf7ee62c', 9933040315, 0, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `Id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
