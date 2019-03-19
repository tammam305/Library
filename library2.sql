-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2017 at 08:33 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--
DROP DATABASE IF EXISTS  `library`;
CREATE DATABASE `library` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `library`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `isbn` varchar(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `pubYear` year(4) NOT NULL,
  `edition` varchar(6) NOT NULL,
  `quntity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `available` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` ( `isbn`, `title`, `author`, `publisher`, `pubYear`, `edition`, `quntity`, `image`, `available`) VALUES
('9781491918661', 'Learning PHP, MySQL and JavaScript', 'Robin Nixon', 'OReilly Media', 2014, '4th', 4, 'img\\book_covers\\9781491918661.jpg', 5),
('9781449370190', 'Learning Web App Development', 'Semmy Purewal', 'O''Reilly Media', 2014, '1st', 4, 'img\\book_covers\\9781118531648.jpg', 3),
('9781137530196', 'The Middleman Economy', 'Marina Krakovsky', 'Palgrave Macmillan', 2015, '1st ', 5, 'img\\book_covers\\978-1137530196.jpg', 6),
('9780314189578', 'Broker-Dealer Regulation in a Nutshell ', 'Thomas Hazen ', 'West Academic Publishing', 2016, '2nd', 4, 'img\\book_covers\\978-0314189578.jpg', 1),
('9780446584142', 'Personal Injuries', 'Vincent L. Scarsella', 'Grand Central', 2011, '3th', 4, 'img\\book_covers\\978-0446584142.jpg', 3),
('9780060155476', 'The Intelligent Investor', 'Benjamin Graham', 'Harper & Row Publishers', 2006, '3th', 4, 'img\\book_covers\\978-0060155476.jpg', 5),
('9780393330335', 'A Random Walk down Wall Street', 'Burton G. Malkiel', 'W. W. Norton & Company', 2016, '9th', 5, 'img\\book_covers\\978-0393330335.jpg', 14),
('9780140127928', 'One Up On Wall Street', 'Peter Lynch  (Author),? John Rothchild', 'Simon & Schuster', 2000, '6th', 4, 'img\\book_covers\\978-0140127928.jpg', 0),
('9781517318086', 'Fix and Flip Your Way To Financial Freedom', 'Mark Ferguson & Gregory Helmerick ', 'West Academic Publishing', 2017, '1st', 4, 'img\\book_covers\\9781517318086.jpg', 0),
('9781533661609', 'How to Make it Big as a Real Estate Agent', 'Mark Ferguson', ' McGraw-Hill Education', 2004, '2nd', 5, 'img\\book_covers\\97815173180.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `id` int(11) NOT NULL,
  `bookISBN` varchar(20) NOT NULL,
  `studentID` varchar(20) NOT NULL,
  `studentName` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `returnDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`id`, `bookISBN`, `studentID` , `studentName` , `date`, `returnDate`) VALUES
(1, '9781491918661', '200504', 'Ahmed' , '2017-12-01 04:16:19', '2017-12-02 04:13:22'),
(2, '9780393330335', '200505' , 'Ali' , '2017-12-19 12:00:20', '2017-12-21 17:31:31'),
(3, '9780314189578', '200504' , 'Omar' , '2017-12-04 10:54:31', '2017-12-05 20:00:19'),
(4, '9781491918661', '213772512' , 'Haussain' , '2017-12-13 00:00:00', '2017-12-13 04:19:52'),
(5, '9781517318086', '213477096' , 'Khaled' , '2017-12-10 08:00:30', '2017-12-13 00:30:00'),
(6, '9781137530196', '213772556' , 'Tammam' , '2017-12-12 22:47:48', NULL),
(7, '9781533661609', '213772586' , 'Salah' , '2016-10-10 00:12:00', NULL),
(8, '9780314189578', '213772532' , 'Mohammed' , '2017-12-19 19:43:00', NULL),
(9, '9781449370190', '214778579' , 'Hassain' , '2017-11-05 08:22:24', NULL),
(10, '9780140127928', '213772586' , 'Majed' , '2017-10-03 18:31:22', NULL),
(11, '9780446584142', '213772586' , 'Fahed' , '2017-08-09 04:30:45', NULL);

-- --------------------------------------------------------

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookISBN` (`bookISBN`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `loan`
--
ALTER TABLE `loan`
  ADD CONSTRAINT `loan_ibfk_1` FOREIGN KEY (`bookISBN`) REFERENCES `book` (`isbn`) ON UPDATE CASCADE;

  
  --
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;