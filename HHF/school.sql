-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2015 at 09:48 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hhf`
--

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
`s_id` int(11) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `ss_id` int(11) NOT NULL,
  `location` varchar(75) NOT NULL,
  `calamity` varchar(75) NOT NULL,
  `c_year` year(4) NOT NULL,
  `d_amount` int(11) NOT NULL,
  `m_required` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`s_id`, `s_name`, `ss_id`, `location`, `calamity`, `c_year`, `d_amount`, `m_required`) VALUES
(1, 'Gregoria School', 2, 'Kathmandu', 'Earthquake', 2015, 35000, 15000),
(2, 'PBS High School', 1, 'Kathmandu', 'Earthquake', 2015, 32500, 27500),
(3, 'St Mary''s Primary School', 4, 'Kathmandu', 'Earthquake', 2015, 25000, 4000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school`
--
ALTER TABLE `school`
 ADD PRIMARY KEY (`s_id`), ADD KEY `ss_id` (`ss_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `school`
--
ALTER TABLE `school`
ADD CONSTRAINT `school_ibfk_1` FOREIGN KEY (`ss_id`) REFERENCES `school_stage` (`ss_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
