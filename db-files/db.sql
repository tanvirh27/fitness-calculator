-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 07, 2019 at 05:10 PM
-- Server version: 5.7.23
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `fitness_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_gender` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `user_phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_name`, `user_gender`, `user_phone`, `user_email`, `user_password`, `role`) VALUES
(1, 'admin', 'female', '', 'nahid@startupdhaka.com', 'e65572e3ff47d8b09a496c9616b48f2b', 'admin'),
(2, 'Nadim Haque', 'female', '01731001333', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(3, 'Sakib Haque', 'male', '01755948421', 'sakib@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(4, 'Tanvir', 'male', '01671146363', 'tanvir@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(5, 'jamal', 'male', '01731001333', 'jamal@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(6, 'Shadman', 'male', '12312312', 'shadman@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
