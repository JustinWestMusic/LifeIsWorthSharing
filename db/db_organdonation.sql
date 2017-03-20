-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2017 at 12:51 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_organdonation`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_index`
--

CREATE TABLE `tbl_index` (
  `index_id` smallint(5) UNSIGNED NOT NULL,
  `index_headerCaption` varchar(300) NOT NULL,
  `index_sec1Title` varchar(300) NOT NULL,
  `index_sec1Text` text NOT NULL,
  `index_sec2Title` varchar(300) NOT NULL,
  `index_sec2Video` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_index`
--

INSERT INTO `tbl_index` (`index_id`, `index_headerCaption`, `index_sec1Title`, `index_sec1Text`, `index_sec2Title`, `index_sec2Video`) VALUES
(1, 'LIFE IS WORTH SHARING', 'OUR MISSION', 'As of September 2016 over 1,500 individuals in Ontario are in need of an organ donation. However due to the low number of registered citizens many individuals must wait too long to recieve one. Only 30% of Ontarians are registered Organ Donors but this can all change with the help of you. Together, we can increase the number of organ donors in Ontario!', 'HEAR THEIR STORIES', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `user_fname` varchar(60) NOT NULL,
  `user_lname` varchar(60) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `user_pass` varchar(60) NOT NULL,
  `user_level` varchar(30) NOT NULL,
  `user_ip` int(120) NOT NULL,
  `user_lldate` timestamp NOT NULL,
  `user_attempts` int(11) NOT NULL,
  `user_firstLogin` smallint(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_lname`, `user_email`, `user_name`, `user_pass`, `user_level`, `user_ip`, `user_lldate`, `user_attempts`, `user_firstLogin`) VALUES
(1, 'Justin', 'West', '', 'jwest', '1234', '1', 0, '2017-03-16 22:24:13', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_index`
--
ALTER TABLE `tbl_index`
  ADD PRIMARY KEY (`index_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_index`
--
ALTER TABLE `tbl_index`
  MODIFY `index_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
