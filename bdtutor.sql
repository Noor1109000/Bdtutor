-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 03:42 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdtutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_tutor`
--

CREATE TABLE `add_tutor` (
  `id` int(6) NOT NULL,
  `name` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `teaching_sub` varchar(200) NOT NULL,
  `are` varchar(200) NOT NULL,
  `img` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_tutor`
--

INSERT INTO `add_tutor` (`id`, `name`, `qualification`, `teaching_sub`, `are`, `img`, `mobile`, `email`) VALUES
(1, 'Ryhan Bijoy', 'M.Sc in Genetic Engg and Biotechnology, DU ', ' Math, General Math, ICT, Biology, Chemistry, Computer Science, ', ' ADABAR , BADDA , BANGSHAL , CANTONMENT , CHAKBAZAR , DHANMONDI ', 'img1.jpg', '01711111111', 'xyz@gmail.com'),
(2, 'Sazzad Hossain Sahed', 'M.Sc in Electrical and Electronics Engineering  ', ' Math, General Math, Chemistry, Higher Math, Physics ', '  DOUBLEMOORING , HALISHAHAR , KHULSHI , KOTWALI , PAHARTALI , PANCHLAISH ', 'img1.jpg', '01711111111', 'xyz@gmail.com'),
(3, 'Nazmushh Shakib ', ' LLB ', 'Eassy Writing, Bangla, English, General Math, Religion/ Islamiat, Social Science,', ' BIMANBANDAR , CANTONMENT , GULSHAN , KALABAGAN , KHILKHET , MIRPUR ', 'img2.jpg', '12345', 'xyz@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(6) NOT NULL,
  `name` varchar(200) NOT NULL,
  `number` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `qualification` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `number`, `password`, `email`, `qualification`) VALUES
(1, '$name', '$number', '$password', '$email', '$qualification'),
(2, 'Kazi Ashraf', '01711111111', 'xyz', 'xyz@example.com', 'M.Sc in Electrical and Electronics Engineering');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_tutor`
--
ALTER TABLE `add_tutor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_tutor`
--
ALTER TABLE `add_tutor`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
