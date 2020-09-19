-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 07:14 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssbcollege`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `BOOKS` (
  `BK_ID` int(11) NOT NULL,
  `BK_TITLE` varchar(200) NOT NULL,
  `BK_AUTHOR` varchar(200) NOT NULL,
  `BK_GENRE` int(11) NOT NULL,
  `BK_SERIES` varchar(200) DEFAULT NULL,
  `BK_PUBLISH` varchar(200) NOT NULL,
  `BK_LANG` int(11) NOT NULL,
  `BK_PAGES` int(11) NOT NULL,
  `BK_SYN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `BOOKS` (`BK_ID`, `BK_TITLE`, `BK_AUTHOR`, `BK_GENRE`, `BK_SERIES`, `BK_PUBLISH`, `BK_LANG`, `BK_PAGES`, `BK_SYN`) VALUES
(3, 'C Programming', 'Bala Gurusamy', 1, NULL, 'CS', 1, 150, 'C program'),
(4, 'Java', 'Bala Gurusamy', 1, NULL, 'CS', 1, 150, 'Java program'),
(5, 'C++', 'Gurusamy', 1, NULL, 'CS Department', 1, 200, 'Soft Copy Available, You can Read that book from E-Books tab..'),
(6, 'Computer Network', 'Sidhu', 1, NULL, 'CS Department', 1, 150, 'Soft Copy Available, You can Read that book from E-Books tab..'),
(7, 'Data Structures', 'GAV Pai', 1, NULL, 'CS Department', 1, 250, 'Soft Copy Available, You can Read that book from E-Books tab..'),
(8, 'Software Engineering', 'A.Ahmad', 1, '', 'CS Department', 1, 250, ' Soft Copy Available, You can Read that book from E-Books tab..\r\n				'),
(9, 'E-Commerce', 'John and Tonder', 1, NULL, 'CS Department', 1, 300, 'Soft Copy Available, You can Read that book from E-Books tab..'),
(10, 'Microprocessors', 'Sunil Mathur', 1, NULL, 'CS Department', 1, 300, 'Soft Copy Available, You can Read that book from E-Books tab..'),
(11, 'Operations Research', 'Kanti, Gupta and Mohan', 2, '', 'Maths Department', 1, 450, '				   Soft Copy Available, You can Read that book from E-Books tab..\r\n				'),
(12, 'Resource Management Techniques', 'Vittal and Malini', 2, NULL, 'Maths Department', 1, 280, 'Soft Copy Available, You can Read that book from E-Books tab..'),
(13, 'Mathematical Statistics', 'Keith knight', 2, NULL, 'Maths Department', 1, 480, 'Soft Copy Available, You can Read that book from E-Books tab..'),
(14, 'Numerical Analysis', 'Walter', 2, NULL, 'Maths Department', 1, 500, 'Soft Copy Available, You can Read that book from E-Books tab..');

-- --------------------------------------------------------

--
-- Table structure for table `ebooks`
--

CREATE TABLE `EBOOKS` (
  `EBK_ID` int(11) NOT NULL,
  `EBK_TITLE` varchar(200) NOT NULL,
  `EBK_AUTHOR` varchar(200) NOT NULL,
  `EBK_GEN` int(11) NOT NULL,
  `EBK_SYN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ebooks`
--

INSERT INTO `EBOOKS` (`EBK_ID`, `EBK_TITLE`, `EBK_AUTHOR`, `EBK_GEN`, `EBK_SYN`) VALUES
(2, 'Digital Era', 'Gurusamy', 1, 'Awareness about Digital India'),
(3, 'Standard Deviation', 'Ram', 2, 'Deviation values'),
(4, 'Java', 'Bala Gurusamy', 1, 'This is java book');

-- --------------------------------------------------------

--
-- Table structure for table `epaper`
--

CREATE TABLE `EPAPER` (
  `EBK_ID` int(11) NOT NULL,
  `EBK_TITLE` varchar(200) NOT NULL,
  `EBK_AUTHOR` varchar(200) NOT NULL,
  `EBK_GEN` int(11) NOT NULL,
  `EBK_SYN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `GENRES` (
  `GEN_ID` int(11) NOT NULL,
  `GEN_NAME` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genres`
--

INSERT INTO `GENRES` (`GEN_ID`, `GEN_NAME`) VALUES
(1, 'Computer Science'),
(2, 'Maths'),
(3, 'English'),
(4, 'Commerce'),
(5, 'BBA');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `IMAGES` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `IMAGES` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(1, 'demo.pdf', '2019-02-22 22:12:41', '1'),
(2, 'standardnormaltable.pdf', '2019-02-22 22:15:21', '1'),
(3, 'standardnormaltable.pdf', '2019-02-22 22:16:22', '1');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `LANGUAGES` (
  `LANG_ID` int(11) NOT NULL,
  `LANG_NAME` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `LANGUAGES` (`LANG_ID`, `LANG_NAME`) VALUES
(1, 'English'),
(2, 'Tamil');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `MEMBERSHIP` (
  `M_ID` int(11) NOT NULL,
  `M_FNAME` varchar(200) NOT NULL,
  `M_DOB` date NOT NULL,
  `M_IC` varchar(14) NOT NULL,
  `M_EMAIL` varchar(30) NOT NULL,
  `M_PHONE` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `RATINGS` (
  `RAT_ID` int(11) NOT NULL,
  `RAT_STARS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upcomings`
--

CREATE TABLE `UPCOMINGS` (
  `UPC_ID` int(11) NOT NULL,
  `UPC_TITLE` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upcomings`
--

INSERT INTO `UPCOMINGS` (`UPC_ID`, `UPC_TITLE`) VALUES
(1, 'RMT'),
(2, 'Software Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `USERS` (
  `USR_ID` int(11) NOT NULL,
  `USR_USERN` varchar(200) NOT NULL,
  `USR_PASS` varchar(200) NOT NULL,
  `USR_FNAME` varchar(200) NOT NULL,
  `USR_EMAIL` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `USERS` (`USR_ID`, `USR_USERN`, `USR_PASS`, `USR_FNAME`, `USR_EMAIL`) VALUES
(1, 'vetri', 'vetri123', 'Vetri Pandi', 'jjvetri2@gmail.com'),
(2, 'admin', '123', 'administrator', 'admin@vetbossel.in');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `BOOKS`
  ADD PRIMARY KEY (`BK_ID`);

--
-- Indexes for table `ebooks`
--
ALTER TABLE `EBOOKS`
  ADD PRIMARY KEY (`EBK_ID`);

--
-- Indexes for table `epaper`
--
ALTER TABLE `EPAPER`
  ADD PRIMARY KEY (`EBK_ID`);

--
-- Indexes for table `genres`
--
ALTER TABLE `GENRES`
  ADD PRIMARY KEY (`GEN_ID`);

--
-- Indexes for table `images`
--
ALTER TABLE `IMAGES`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `LANGUAGES`
  ADD PRIMARY KEY (`LANG_ID`);

--
-- Indexes for table `membership`
--
ALTER TABLE `MEMBERSHIP`
  ADD PRIMARY KEY (`M_ID`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `RATINGS`
  ADD PRIMARY KEY (`RAT_ID`);

--
-- Indexes for table `upcomings`
--
ALTER TABLE `UPCOMINGS`
  ADD PRIMARY KEY (`UPC_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`USR_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `BOOKS`
  MODIFY `BK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `ebooks`
--
ALTER TABLE `EBOOKS`
  MODIFY `EBK_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `epaper`
--
ALTER TABLE `EPAPER`
  MODIFY `EBK_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `GENRES`
  MODIFY `GEN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `IMAGES`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `LANGUAGES`
  MODIFY `LANG_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `MEMBERSHIP`
  MODIFY `M_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `RATINGS`
  MODIFY `RAT_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `upcomings`
--
ALTER TABLE `UPCOMINGS`
  MODIFY `UPC_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `USERS`
  MODIFY `USR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
