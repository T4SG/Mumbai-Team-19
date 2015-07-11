-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2015 at 09:25 PM
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
-- Table structure for table `past_events`
--

CREATE TABLE IF NOT EXISTS `past_events` (
`e_id` int(11) NOT NULL,
  `e_name` varchar(30) NOT NULL,
  `about` varchar(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `e_image` varchar(50) NOT NULL,
  `p_attendance` int(11) NOT NULL,
  `m_collected` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `past_events`
--

INSERT INTO `past_events` (`e_id`, `e_name`, `about`, `location`, `date`, `time`, `e_image`, `p_attendance`, `m_collected`) VALUES
(1, 'Classical Dance Performance', 'A mesmerizing dance performance by our legends', 'NCPA', '2015-05-20', '19:30:00', 'img/events/4.jpg', 85, 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `past_events`
--
ALTER TABLE `past_events`
 ADD PRIMARY KEY (`e_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `past_events`
--
ALTER TABLE `past_events`
MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
