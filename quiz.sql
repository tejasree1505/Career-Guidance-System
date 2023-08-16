-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 12:35 PM
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
-- Database: `careerguidance`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `question` int(11) NOT NULL,
  `yes` varchar(20) NOT NULL,
  `no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`question`, `yes`, `no`) VALUES

(2, 'Location: q8.php', 'Location: q9.php'),
(3, 'Location: q6.php', 'Location: q4.php'),
(4, 'Location: final.php', 'Location: q5.php'),
(5, 'Location: final.php', 'Location: final.php'),
(6, 'Location: final.php', 'Location: q7.php'),
(7, 'Location: final.php', 'Location: final.php'),
(8, 'Location: final.php', 'Location: q9.php'),
(9, 'Location: q10.php', 'Location: q11.php'),
(10, 'Location: q13.php', 'Location: q12.php'),
(11, 'Location: final.php', 'Location: final.php'),
(12, 'Location: final.php', 'Location: final.php'),
(13, 'Location: final.php', 'Location: q14.php'),
(14, 'Location: final.php', 'Location: q15.php'),
(15, 'Location: final.php', 'Location: final.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`question`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
