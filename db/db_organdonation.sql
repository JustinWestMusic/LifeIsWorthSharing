-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2017 at 02:17 AM
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
  `index_sec3Title` varchar(300) NOT NULL,
  `index_sec3Fact1` text NOT NULL,
  `index_promoVidSecTitle` varchar(300) NOT NULL,
  `index_sec4Title` varchar(300) NOT NULL,
  `index_sec4Title2` varchar(300) NOT NULL,
  `index_sec4Text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_index`
--

INSERT INTO `tbl_index` (`index_id`, `index_headerCaption`, `index_sec1Title`, `index_sec1Text`, `index_sec2Title`, `index_sec3Title`, `index_sec3Fact1`, `index_promoVidSecTitle`, `index_sec4Title`, `index_sec4Title2`, `index_sec4Text`) VALUES
(1, '<span>LIFE</span> IS WORTH SHARING', 'OUR MISSION', 'As of September 2016 over 1,500 individuals in Ontario are in need of an organ donation. However due to the low number of registered citizens many individuals must wait too long to recieve one. Only 30% of Ontarians are registered Organ Donors but this can all change with the help of you. Together, we can increase the number of organ donors in Ontario!', 'HEAR <span>THEIR</span> STORIES', 'DID <span>YOU</span> KNOW?', '90% of Canadians support organ and tissue donation but            less than 20% have made plans to donate.', '<span>#LIFE</span>IS<span>WORTH</span>SHARING', 'BECOME A <span>DONOR</span> TODAY', 'BECAUSE <span>LIFE IS WORTH SHARING</span>', 'Click the button below to become an organ donor today.');

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
(1, 'Justin', 'West', '', 'jwest', '1234', '1', 0, '2017-03-25 01:47:59', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_videos`
--

CREATE TABLE `tbl_videos` (
  `videos_id` smallint(5) UNSIGNED NOT NULL,
  `video` varchar(100) NOT NULL,
  `videos_title` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_videos`
--

INSERT INTO `tbl_videos` (`videos_id`, `video`, `videos_title`) VALUES
(1, 'test.mp4', 'boat'),
(2, 'test2.mp4', 'Fl Studio Test'),
(3, '1908212_10153324530795844_7615550569492932725_n.jpg', 'dasdsa'),
(4, '20140921_121230.jpg', 'dfds'),
(5, 'test3.mp4', 'test3'),
(6, 'test3 - Copy.mp4', 'SFDFDS'),
(7, 'clinwest-desktop.png', 'fdssdf'),
(9, 'small.mp4', 'meredith '),
(10, '2016-08-26-1958-26.mp4', 'sad');

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
-- Indexes for table `tbl_videos`
--
ALTER TABLE `tbl_videos`
  ADD PRIMARY KEY (`videos_id`);

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
--
-- AUTO_INCREMENT for table `tbl_videos`
--
ALTER TABLE `tbl_videos`
  MODIFY `videos_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
