-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 31, 2019 at 10:41 AM
-- Server version: 10.2.30-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hbegrbbx_ideahunt`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `pid` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `idea` text NOT NULL,
  `vote` int(11) NOT NULL DEFAULT 1,
  `uid` int(11) NOT NULL
) ENGINE=Aria DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pid`, `time`, `idea`, `vote`, `uid`) VALUES
(1, '2015-12-17 06:19:43', 'Generating idea for the web design and development projects.', 27, 1),
(2, '2015-12-17 05:06:13', 'Do my laundry.', 15, 1),
(3, '2015-12-17 04:25:24', 'Track & organize my inventory (stop accidentally buying doubles/similar items)', 4, 2),
(4, '2015-12-17 04:58:37', 'Find as many lolis as possible. ', 17, 3),
(5, '2015-12-17 05:01:14', 'Help me making $$$', 16, 4),
(8, '2015-12-17 04:47:57', 'Generating comments for making your assignments pass', 3, 5),
(26, '2015-12-17 22:05:25', 'cook for me.', 5, 1),
(12, '2015-12-17 05:00:24', 'Read my mind and write the code for me.', 7, 1),
(11, '2015-12-17 04:59:17', 'Three meals and sleeping on time.', 4, 1),
(13, '2015-12-17 05:03:25', 'Becoming better than every yesterday.', 5, 1),
(14, '2015-12-17 06:56:10', 'force me to go to sleep everyday before midnight.', 9, 1),
(28, '2015-12-18 02:34:17', 'Find a reliable dog walker/sitter near my neighbourhood', 1, 6),
(27, '2015-12-17 23:21:27', 'tell me what to do', 16, 5),
(29, '2015-12-20 00:00:21', 'make easy money', 2, 7),
(30, '2015-12-20 00:06:19', 'make learning code more fun, so i doesn\'t feel like work', 2, 7),
(31, '2015-12-23 21:43:11', '????', 2, 5),
(32, '2016-01-13 16:14:32', 'Make a presentation.', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `twitter` varchar(15) NOT NULL
) ENGINE=Aria DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `twitter`) VALUES
(1, 'neolwc'),
(2, 'azhangx'),
(3, 'iloli'),
(4, 'showmethemoney'),
(5, ''),
(6, 'lauren_suh'),
(7, 'lmao'),
(8, 'neo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
