-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2020 at 07:53 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `id` int(6) UNSIGNED NOT NULL,
  `Fullname` varchar(30) DEFAULT NULL,
  `Age` varchar(50) DEFAULT NULL,
  `Location` varchar(50) DEFAULT NULL,
  `Contact_no` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `AdminCode` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `Fullname`, `Age`, `Location`, `Contact_no`, `Email`, `AdminCode`, `Password`, `reg_date`) VALUES
(2, '', '', '', '', 'rasel@gmail.com', '2020', '7409cf9cb18e15fd9827b11e9fb17ba7', '2019-11-17 07:37:40'),
(3, '', '', '', '', 'rasel@gmail.com', '2020', '7409cf9cb18e15fd9827b11e9fb17ba7', '2019-11-17 07:38:26'),
(4, 'Rasel', '101', 'Uganda', '01', 'rasel@gmail.com', '2020', '005f47cddf568dacb8d03e20ba682cf9', '2019-11-17 07:39:07'),
(6, 'Rasel', '21', 'ctg', '123', 'rasel@gmail.com', '2020', '982a72def6aa24e36fd61ac36760f0f7', '2019-11-17 09:01:13'),
(7, 'Rasel', '21', 'ctg', '01859197599', 'rasel@gmail.com', '2020', '005f47cddf568dacb8d03e20ba682cf9', '2019-12-03 04:43:19'),
(8, 'Effat', '25', 'ctg', '01859197599', 'a@gmail.com', '2020', '005f47cddf568dacb8d03e20ba682cf9', '2019-12-22 05:16:12'),
(9, 'Rasel', '21', 'ctg', '01859197599', 'rasel@gmail.com', '2020', '62f42cc615fe270ee64fbc8d3ee1e935', '2020-09-26 14:11:16'),
(10, 'Rasel', '21', 'ctg', '01859197599', 'rasel@gmail.com', '2020', 'c2500963cedc9724bbd6da228be8e5bf', '2020-09-26 14:11:58'),
(11, 'Rasel', '21', 'ctg', '01859197599', 'rasel@gmail.com', '2020', 'c2500963cedc9724bbd6da228be8e5bf', '2020-10-15 10:57:45'),
(12, 'Rasel', '21', 'ctg', '01859197599', 'rasel@gmail.com', '2020', 'c2500963cedc9724bbd6da228be8e5bf', '2020-10-15 11:02:36'),
(13, 'Rasel', '21', 'ctg', '01859197599', 'rasel@gmail.com', '2020', '888ab8c6562624989905019103c1b9c1', '2020-10-15 11:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `applicanttable`
--

CREATE TABLE `applicanttable` (
  `name` varchar(250) NOT NULL,
  `birth` varchar(250) NOT NULL,
  `fathername` varchar(250) NOT NULL,
  `mothername` varchar(250) NOT NULL,
  `contact` int(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sscgpa` varchar(250) NOT NULL,
  `hscgpa` varchar(250) NOT NULL,
  `dept` varchar(250) NOT NULL,
  `session` varchar(250) NOT NULL,
  `payment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `csefacuilties`
--

CREATE TABLE `csefacuilties` (
  `teacher` varchar(250) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `description` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `csefacuilties`
--

INSERT INTO `csefacuilties` (`teacher`, `picture`, `description`) VALUES
('DR. TAUFIQUE SAYEED', 'taufiq.JPG', ' Professor Department of Computer Science & Engineering'),
('N.U.M AKRAMUL KABIR KHAN ', 'akramul.PNG', 'Associate Professor Department of Computer Science & Engineering'),
('MR. SHAHID MD. ASIF IQBAL', 'asif.JPG', 'Associate Professor,\r\nDepartment of Computer Science & Engineering.'),
('MS. FARHANA SHIRIN CHOWDHURY', 'farhana.JPG', 'Assistant Professor,\r\nDepartment of Computer Science & Engineering'),
('SK. MD. RUKUN UDDIN OSMANI', 'sukon.JPG', 'Assistant Professor,\r\nDepartment of Computer Science & Engineering'),
('KINGSHUK DHAR', 'kingsuk.JPG', 'Assistant Professor,\r\nDepartment of Computer Science & Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `Username` varchar(30) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `Username`, `Password`) VALUES
(1, 'Rasel', 'asd@gmail', 'abc', 'd16fb36f0911f878998c136191af705e'),
(2, 'munem', 'asdf@gmail.com', 'acdf', '3e44107170a520582ade522fa73c1d15'),
(3, 'xgndnh', 'gndhndhn', 'gdhnd', '7b851a673f1df937d860ec01e78c647f'),
(4, 'Abid', 'Rahman', 'asd', '5fa72358f0b4fb4f2c5d7de8c9a41846'),
(6, 'ab', 'bc@gmail.com', 'ab', '187ef4436122d1cc2f40dc2b92f0eba0'),
(7, 'ab', 'bc@gmail.com', 'ab', '187ef4436122d1cc2f40dc2b92f0eba0'),
(8, 'aaaa', '', 'aaa', '74b87337454200d4d33f80c4663dc5e5'),
(9, 'aaaa', '', 'cccc', '11ddbaf3386aea1f2974eee984542152'),
(10, 'aaaa', '', 'cccc', '11ddbaf3386aea1f2974eee984542152'),
(11, 'www', 'xxxx@gmail.com', 'yyyy', '02c425157ecd32f259548b33402ff6d3'),
(12, 'as', 'asxdd@gmail.com', 'as', 'd41d8cd98f00b204e9800998ecf8427e'),
(13, 'as', 'asxdd@gmail.com', 'as', 'd41d8cd98f00b204e9800998ecf8427e'),
(14, 'asd', 'bsd@gmail.com', 'xxx', 'babd4a84418fb04015ac773f7459727c'),
(15, 'aa', 'aa@gmail.com', 'xx', 'afdd0b4ad2ec172c586e2150770fbf9e'),
(16, 'zzzzzzzzzzzzzzzzzzzzzz', 'tyhbhugyuiji@gmail.com', 'aded', 'c2500963cedc9724bbd6da228be8e5bf');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(6) UNSIGNED NOT NULL,
  `Headline` varchar(30) DEFAULT NULL,
  `Picture` varchar(5000) DEFAULT NULL,
  `Desription` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `Headline`, `Picture`, `Desription`) VALUES
(49, 'A Webinar on Impact of Covid-1', 'news.JPG', '');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(6) UNSIGNED NOT NULL,
  `Fullname` varchar(30) DEFAULT NULL,
  `Age` varchar(50) DEFAULT NULL,
  `Location` varchar(50) DEFAULT NULL,
  `Contact_no` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `Fullname`, `Age`, `Location`, `Contact_no`, `Email`, `Password`, `reg_date`) VALUES
(1, 'veagegw', 'ewffew', 'eefw', 'eeef', 'xxxx@gmail.com', '997de7eed1098f1d94e16f24cc4d3d92', '2019-11-17 07:28:47'),
(2, 'Rasel', '101', 'Uganda', '01', 'xxxx@gmail.com', '005f47cddf568dacb8d03e20ba682cf9', '2019-11-17 07:29:41'),
(3, 'Rasel', '12', 'ctg', '123', 'a@gmail.com', '3e6c7d141e32189c917761138b026b74', '2019-11-17 07:42:36'),
(4, 'Rasel', '102', 'dd', '1234', 'rasel@gmail.com', '982a72def6aa24e36fd61ac36760f0f7', '2019-11-17 08:43:33'),
(5, 'Rasel', '21', 'ctg', '018', 'rasel@gmail.com', '982a72def6aa24e36fd61ac36760f0f7', '2019-11-17 09:00:11'),
(6, 'Rasel', '21', 'ctg', '01859197599', 'rasel@gmail.com', 'fdc21bd30bdb88bb01eeeb55d29cbe33', '2019-12-10 05:50:43'),
(7, 'Rasel', '101', 'ctg', '01859197599', 'aaa@gmail.com', 'cb66ed5403bd2bb9eba1d11a150751fc', '2019-12-14 16:23:55'),
(8, 'Effat', '25', 'ctg', '01859197599', 'a@gmail.com', '005f47cddf568dacb8d03e20ba682cf9', '2019-12-22 05:15:39'),
(9, 'Rasel', '21', 'ctg', '01859197599', 'rasel@gmail.com', '9cb60ce0c047b019f82236dad19a82a3', '2020-09-13 07:15:43'),
(10, 'Rasel', '101', 'ctg', '01859197599', 'rasel@gmail.com', '9cb60ce0c047b019f82236dad19a82a3', '2020-09-14 08:52:01'),
(11, 'Rasel', '21', 'ctg', '01859197599', 'rasel@gmail.com', 'c2500963cedc9724bbd6da228be8e5bf', '2020-09-25 17:38:18'),
(12, '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '2020-10-11 16:54:27'),
(13, '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '2020-10-11 17:17:46'),
(14, 'Rasel', '21', 'ctg', '01859197599', 'rasel@gmail.com', 'c2500963cedc9724bbd6da228be8e5bf', '2020-10-15 11:18:40'),
(15, 'Rasel', '21', 'ctg', '01859197599', 'rasel@gmail.com', 'c2500963cedc9724bbd6da228be8e5bf', '2020-10-15 11:20:39'),
(16, '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '2020-10-16 12:29:47');

-- --------------------------------------------------------

--
-- Table structure for table `usertable1`
--

CREATE TABLE `usertable1` (
  `identification` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `street` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `age` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable1`
--

INSERT INTO `usertable1` (`identification`, `name`, `address`, `street`, `city`, `contact`, `age`, `email`) VALUES
('', 'Rasel', 'Chawkbazar', 'Chittagong', 'Chittagong', '', '21', 'mdraseljr1@gmail.com'),
('', 'Rasel', 'Chawkbazar', 'Chittagong', 'Chittagong', '', '21', 'mdraseljr1@gmail.com'),
('', 'Rasel', 'Chawkbazar', 'Chittagong', 'Chittagong', '', '21', 'mdraseljr1@gmail.com'),
('', 'Rasel', 'Chawkbazar', 'Chittagong', 'Chittagong', '', '21', 'mdraseljr1@gmail.com'),
('', 'Rasel', 'Chawkbazar', 'Chittagong', 'Chittagong', '', '21', 'mdraseljr1@gmail.com'),
('', 'Rasel', 'Chawkbazar', 'Chittagong', 'Chittagong', '', '21', 'mdraseljr1@gmail.com'),
('1508', 'Rasel', 'Chawkbazar', 'Chittagong', 'Chittagong', '01859197599', '21', 'mdraseljr1@gmail.com'),
('1508', 'Rasel', 'Chawkbazar', 'Chittagong', 'Chittagong', '01859197599', '21', 'mdraseljr1@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
