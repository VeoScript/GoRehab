-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2020 at 08:17 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gorehab`
--

-- --------------------------------------------------------

--
-- Table structure for table `bibleverse`
--

CREATE TABLE `bibleverse` (
  `id` int(11) NOT NULL,
  `verse` text NOT NULL,
  `book` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bibleverse`
--

INSERT INTO `bibleverse` (`id`, `verse`, `book`) VALUES
(3, 'EVEN WHEN I WALK\r\nTHROUGH THE DARKEST VALLEY\r\nI WILL NOT BE AFRAID,\r\nFOR YOU ARE CLOSE BESIDE ME.', 'PSALMS 23:4');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `idnumber` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `profile` blob NOT NULL,
  `idnumber` varchar(150) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `position` varchar(150) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profile`, `idnumber`, `fullname`, `position`, `username`, `password`) VALUES
(22, 0x3233343730363838302e494d475f31303336, '1510399-1', 'Jerome Joseph R. Villaruel', 'HR ADMIN', 'jeromevillaruel', 'jerome43'),
(24, 0x3136393536383837392e534c5355204f6666696369616c204c6f676f, 'GO_23624', 'Southern Leyte State University', 'Employee', 'slsu', 'slsu123'),
(25, 0x3239323438343834352e35383534333438385f3334303535313137363635303330325f333637303037363539313235313132383332305f6e, 'GO_64763', 'James Joshua Villaruel', 'Employee', 'james', 'james');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bibleverse`
--
ALTER TABLE `bibleverse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idnumber` (`idnumber`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fullname` (`fullname`),
  ADD UNIQUE KEY `idnumber` (`idnumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bibleverse`
--
ALTER TABLE `bibleverse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
