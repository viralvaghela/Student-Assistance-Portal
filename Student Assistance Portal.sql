-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 08:49 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sasp`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `like` int(11) DEFAULT NULL,
  `timestamp` timestamp(5) NULL DEFAULT NULL,
  `questions_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `authentications`
--

CREATE TABLE `authentications` (
  `id` int(11) NOT NULL,
  `key` varchar(11) DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authentications`
--

INSERT INTO `authentications` (`id`, `key`, `users_id`) VALUES
(39, '123123', 39),
(38, '123', 38),
(37, 'viral', 37),
(41, 'pay', 41);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'viral', 'harshalbhagat9918@gmail.com', 'da'),
(2, 'viral', 'viral@gmail.com', 'nice website'),
(3, 'viral', 'viral@gmail.com', 'nice website');

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` int(11) NOT NULL,
  `follow_id` int(11) DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question` varchar(50) DEFAULT NULL,
  `timestamp` timestamp(5) NULL DEFAULT NULL,
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question`, `timestamp`, `id`, `users_id`) VALUES
('what is java?', '2019-04-03 05:49:19.00000', 1, 28),
('what is variable?', '2019-04-03 05:51:57.00000', 2, 28),
('what is asdasd', '2019-04-03 05:52:42.00000', 3, 28),
('what is java ?', '2019-04-12 06:44:38.00000', 42, 37),
('harshal', '2019-04-12 06:44:18.00000', 41, 37),
('what is programming language ????', '2019-04-12 04:16:11.00000', 40, 37),
('What is android studio?', '2019-04-12 03:35:26.00000', 39, 41),
('What is .net?', '2019-04-12 03:29:02.00000', 38, 38),
('what is size of integer in C?', '2019-04-12 03:28:22.00000', 37, 37),
('What is java????', '2019-04-16 03:14:48.00000', 43, 37),
('What is java????', '2019-04-11 04:18:49.00000', 35, 38),
('What is C?', '2019-04-11 04:08:15.00000', 34, 37),
('what is computer?', '2019-04-10 05:38:51.00000', 26, 36),
('what is computer?', '2019-04-10 05:38:57.00000', 27, 36),
('hello', '2019-04-10 08:10:29.00000', 28, 28),
('hello', '2019-04-10 08:11:43.00000', 29, 28),
('what is use of compiler in programming?', '2019-04-10 08:20:02.00000', 30, 28),
('what is use of lexical analyser?', '2019-04-10 08:20:46.00000', 31, 28),
('which is best ?java or python?', '2019-04-10 08:30:03.00000', 32, 37),
('what is difference between Compiler and interprete', '2019-04-10 08:35:43.00000', 33, 38);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(1, '0'),
(2, '0'),
(3, '0'),
(4, 'viral@gmail.com'),
(5, 'harshal@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `intrest` varchar(45) DEFAULT NULL,
  `timestamp` timestamp(5) NULL DEFAULT NULL,
  `fb` varchar(45) DEFAULT NULL,
  `insta` varchar(45) DEFAULT NULL,
  `twitter` varchar(45) DEFAULT NULL,
  `linkedin` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `about` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `dob`, `email`, `phone`, `image`, `intrest`, `timestamp`, `fb`, `insta`, `twitter`, `linkedin`, `country`, `about`) VALUES
(41, 'pay', 0, '1999-12-19', 'pay@gmail.com', '123456780', 'upload/profilepics/41.jpg', 'JAVA', '2019-04-15 06:38:55.00000', '', '', '', '', 'india', ''),
(38, 'harshal B', 0, '2001-04-10', 'harshalbhagat9918@gmail.com', '8153936140', 'upload/profilepics/38.jpg', 'iOS', '2019-04-12 03:31:33.00000', 'https://www.facebook.com', 'https://www.instagram.com', 'https://www.twitter.com', 'https://www.linkedin.com', 'india', ''),
(39, 'Dinesh ', 0, '1999-07-06', 'garvadinesh345@gmail.com', '9712584766', 'upload/profilepics/39.jpg', 'php,html,css,js', '2019-04-11 04:24:19.00000', '', '', '', '', 'India', ''),
(37, 'viral ', 0, '2001-03-30', 'vaghelaviral4@gmail.com', '7485994073', 'upload/profilepics/37.jpg', 'java', '2019-04-16 02:16:47.00000', 'https://www.facebook.com/viral.vaghela.1291', 'https://www.facebook.com/viral.vaghela.1291', 'https://www.facebook.com/viral.vaghela.1291', 'https://www.facebook.com/viral.vaghela.1291', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authentications`
--
ALTER TABLE `authentications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
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
-- AUTO_INCREMENT for table `authentications`
--
ALTER TABLE `authentications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
