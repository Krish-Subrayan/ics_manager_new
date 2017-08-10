-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2017 at 05:05 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ics-manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-users`
--

CREATE TABLE IF NOT EXISTS `admin-users` (
`id` int(11) NOT NULL,
  `username` varchar(90) NOT NULL,
  `password` varchar(30) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin-users`
--

INSERT INTO `admin-users` (`id`, `username`, `password`, `file`, `created`, `modified`) VALUES
(1, 'admin', 'password', '', '2017-08-09 03:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `file` varchar(90) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `file`, `created`, `modified`) VALUES
(1, 'admin', 'password', 'http://localhost/ics/test.ics', '2017-08-09 07:17:54', '0000-00-00 00:00:00'),
(3, 'admin1', 'password', 'http://localhost/ics/test.ics', '2017-08-09 07:19:50', '0000-00-00 00:00:00'),
(4, 'admin2', 'password', 'http://localhost/ics/test.ics', '2017-08-09 07:21:02', '0000-00-00 00:00:00'),
(5, 'admin3', 'password', 'http://localhost/ics/test.ics', '2017-08-09 07:21:35', '0000-00-00 00:00:00'),
(6, 'admin4', 'password', 'http://localhost/ics/test.ics', '2017-08-09 07:27:22', '0000-00-00 00:00:00'),
(7, 'admin5', 'password', 'http://localhost/ics/test.ics', '2017-08-09 08:01:50', '0000-00-00 00:00:00'),
(8, 'admin', 'password', 'http://localhost/ics/new.ics', '2017-08-09 10:13:33', '0000-00-00 00:00:00'),
(9, 'admin12', 'password', 'http://localhost/ics/new.ics', '2017-08-09 10:13:54', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin-users`
--
ALTER TABLE `admin-users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin-users`
--
ALTER TABLE `admin-users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
