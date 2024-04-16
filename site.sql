-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 04:24 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `position` varchar(255) NOT NULL,
  `inputs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`position`, `inputs`) VALUES
('div1', 'CMRICTHS an ICT integrated high school that was founded last 2008 located at Barangay Claro M. Recto in Angeles City. Our School offers you the knowledge you need and must have to integrate your skills. ');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `position` varchar(25) NOT NULL,
  `inputs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`position`, `inputs`) VALUES
('div1', 'CMRICTHS is the best'),
('div2', 'Sir Hermes'),
('div3', 'CMRICTHS an ICT integrated high school that was founded last 2008 located at Barangay Claro M. Recto in Angeles City. Our School offers you the knowledge you need and must have to integrate your skills. ');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Comment` text NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `confirmcomment`
--

CREATE TABLE `confirmcomment` (
  `id` int(255) NOT NULL,
  `Username` text NOT NULL,
  `date` text NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `where` varchar(255) NOT NULL,
  `inputs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `position` varchar(11) NOT NULL,
  `inputs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`position`, `inputs`) VALUES
('div1', 'Learn ICT Now'),
('div2', 'The internet has become an integral partof every individuals life. So, it is no surprise that the use of the internet, even in school, it has increased at a rapid rate.  			  ICT, or Information Communication and Technology has given wings to scholars, ed'),
('div3', 'Expert Teachers!'),
('div4', 'Our teachers  have become experts at understanding the developmental characteristic and needs of children at the grade level they are teaching.  			  Teachers hone their assessment skills, working to deeply understands each student cognitively, socially an'),
('div5', 'Best Classrooms'),
('div6', 'The more we respect and honor childhood, the more we create a place where students are happy and have joyful experiences as they learn. The concept of engagement is integral to our philosophy. 			  Happy students that engaged in fun and stimulating activi');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `position` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`position`, `photo`) VALUES
('about', '15.JPG'),
('blog', '6.JPG'),
('front', '5.JPG'),
('policy', '6.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `position` varchar(255) NOT NULL,
  `inputs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`position`, `inputs`) VALUES
('div1', 'USER'),
('div2', 'Claro M. Recto ICT High School shall use the Personal Information and Sensitive Personal Information it collects in the site in strict compliance and accordance with the provisions of Republic Act No. 10173, otherwise known as the \"Data Privacy Act of 2012\" (\"DPA\") and its Implementing Rules and Regulations (\"IRR\"). This information includes, but is not limited to, transaction information and records of its students, employees, agents, and other authorized persons and entities (Stakeholder Information).'),
('div3', 'div3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`position`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirmcomment`
--
ALTER TABLE `confirmcomment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`position`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`position`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`position`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `confirmcomment`
--
ALTER TABLE `confirmcomment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
