-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2024 at 01:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_texi`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `btn_1` varchar(100) NOT NULL,
  `btn_2` varchar(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `text` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `img`, `btn_1`, `btn_2`, `heading`, `text`, `date`) VALUES
(5, 'b1.jpg', 'Travel', 'Life Style', 'Portable latest Fashion for young women', '   Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab', '31st January, 2018'),
(6, 'b2.jpg', 'Travels', 'Life Styles', 'Portable latest Fashion for young womens', '       Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut', '31st January, 2010');

-- --------------------------------------------------------

--
-- Table structure for table `card_data`
--

CREATE TABLE `card_data` (
  `id` int(20) NOT NULL,
  `c_icon` varchar(50) NOT NULL,
  `c_head` varchar(100) NOT NULL,
  `c_text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card_data`
--

INSERT INTO `card_data` (`id`, `c_icon`, `c_head`, `c_text`) VALUES
(1, 'fa-solid fa-taxi', 'Taxi Service', 'Usage of the Internet is becoming more common due to rapid advancement of technology and power.'),
(2, 'fa-solid fa-bus', 'Event Transportation', 'Usage of the Internet is becoming more common due to rapid advancement of technology and power.'),
(3, 'fa-solid fa-briefcase', 'Office Pick-ups', 'Usage of the Internet is becoming more common due to rapid advancement of technology and power.');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `ID` int(50) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`ID`, `email`) VALUES
(20, 'WFR@GMAIL.COM');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `ID` int(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `text_1` varchar(100) NOT NULL,
  `text_2` varchar(100) NOT NULL,
  `text_3` varchar(100) NOT NULL,
  `text_4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`ID`, `heading`, `text_1`, `text_2`, `text_3`, `text_4`) VALUES
(5, 'Quick links', 'Jobs', 'Brand Assets', 'Investor Relations', 'Terms of Service'),
(6, 'Features', 'Jobs', 'Brand Assets', 'Investor Relations', 'Terms of Service'),
(7, 'Resources', 'Guides', 'Research', 'Experts', 'Agencies'),
(12, 'Follow Us', 'Let Us Be Social', '.', '.', '..');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_img`
--

CREATE TABLE `gallery_img` (
  `img_id` int(11) NOT NULL,
  `img_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery_img`
--

INSERT INTO `gallery_img` (`img_id`, `img_name`) VALUES
(32, 'g1.jpg'),
(33, 'g2.jpg'),
(35, 'g4.jpg'),
(36, 'g5.jpg'),
(37, 'g6.jpg'),
(39, 'g3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nav_bar`
--

CREATE TABLE `nav_bar` (
  `id` int(11) NOT NULL,
  `nav_name` varchar(10) NOT NULL,
  `nav_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nav_bar`
--

INSERT INTO `nav_bar` (`id`, `nav_name`, `nav_link`) VALUES
(14, 'HOME', ' #'),
(15, 'ABOUT', ' #'),
(16, 'SERVICES', ' #'),
(17, 'GALLARY', ' #'),
(18, 'BLOG', ' #'),
(19, 'ELEMENTS', ' #'),
(22, 'CONTACT', ' #');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `r_name` varchar(50) NOT NULL,
  `r_email` varchar(100) NOT NULL,
  `r_phone` bigint(100) NOT NULL,
  `r_fd` varchar(500) NOT NULL,
  `r_td` varchar(500) NOT NULL,
  `r_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `r_name`, `r_email`, `r_phone`, `r_fd`, `r_td`, `r_date`) VALUES
(27, 'sami', 'sami@gmai.com', 7240779233, '1', '1', '0200-02-10'),
(28, 'fef', 'ffrwfrfr@gmi.com', 0, '1', '2', '2024-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `u_id` int(20) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_pw` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`u_id`, `u_name`, `u_pw`) VALUES
(1, 'newtexi@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_data`
--
ALTER TABLE `card_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gallery_img`
--
ALTER TABLE `gallery_img`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `nav_bar`
--
ALTER TABLE `nav_bar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `card_data`
--
ALTER TABLE `card_data`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `gallery_img`
--
ALTER TABLE `gallery_img`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `nav_bar`
--
ALTER TABLE `nav_bar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `u_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
