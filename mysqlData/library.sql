-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2018 at 05:52 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookid` varchar(50) NOT NULL,
  `isbn` varchar(50) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `pubyr` varchar(30) DEFAULT NULL,
  `publisher` varchar(200) DEFAULT NULL,
  `rating` float(2,1) DEFAULT NULL,
  `ratingcount` int(11) DEFAULT NULL,
  `language` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookid`, `isbn`, `title`, `img`, `pubyr`, `publisher`, `rating`, `ratingcount`, `language`) VALUES
('-qU8ygAACAAJ', '1118063333', 'Operating System Concepts', 'http://books.google.com/books/content?id=-qU8ygAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', '2012-12-17', 'Wiley', 4.0, 1, 'en'),
('2xWHAQAACAAJ', '0132126958', 'Computer Networks', 'http://books.google.com/books/content?id=2xWHAQAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', '2011', 'Prentice Hall', 4.0, 3, 'en'),
('8jZBksh-bUMC', '9780136042594', 'Artificial Intelligence', 'http://books.google.com/books/content?id=8jZBksh-bUMC&printsec=frontcover&img=1&zoom=1&source=gbs_api', '2010', 'Prentice Hall', 4.5, 10, 'en'),
('dH6us3u6d2QC', '9780237534592', 'The Grumpy Queen', 'http://books.google.com/books/content?id=dH6us3u6d2QC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '2008-02-01', 'Evans Brothers', 0.0, 0, 'en'),
('GZAoAQAAIAAJ', 'UCSC:32106019703807', 'Harry Potter and the Deathly Hallows', 'http://books.google.com/books/content?id=GZAoAQAAIAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', '2007', 'Arthur a Levine', 4.5, 3486, 'en'),
('hmY5mAEACAAJ', '1891830988', 'Too Cool to be Forgotten', 'http://books.google.com/books/content?id=hmY5mAEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', '2008', '', 4.0, 1, 'en'),
('i-bUBQAAQBAJ', '9780262033848', 'Introduction to Algorithms', 'http://books.google.com/books/content?id=i-bUBQAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '2009-07-31', 'MIT Press', 4.5, 3, 'en'),
('idKWU-tWJpgC', '9780237533434', 'The Flamingo Who Forgot', 'http://books.google.com/books/content?id=idKWU-tWJpgC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '2007', 'Evans Brothers', 0.0, 0, 'en'),
('lbpQAAAAMAAJ', '0780311191', 'Distributed Operating Systems', 'http://books.google.com/books/content?id=lbpQAAAAMAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', '1997', 'Wiley-IEEE Press', 4.0, 3, 'en'),
('re4YQAAACAAJ', '0073523321', 'Database System Concepts', 'http://books.google.com/books/content?id=re4YQAAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', '2010-01-27', 'McGraw-Hill Education', 4.5, 6, 'en'),
('tuxQAAAAMAAJ', 'UOM:39015059589278', 'Applying UML and Patterns', 'http://books.google.com/books/content?id=tuxQAAAAMAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', '2005', 'Prentice Hall', 4.5, 4, 'en'),
('tW4VngEACAAJ', '0133943038', 'Software Engineering', 'http://books.google.com/books/content?id=tW4VngEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', '2015-03-24', 'Addison-Wesley', 5.0, 1, 'en'),
('V26Kv0-rInAC', '9783642235825', 'Sensor Systems and Software', 'http://books.google.com/books/content?id=V26Kv0-rInAC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '2011-09-06', 'Springer Science & Business Media', 0.0, 0, 'en'),
('VSAtjgEACAAJ', '0133594149', 'Computer Networking', 'http://books.google.com/books/content?id=VSAtjgEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', '2016-04-19', 'Pearson', 4.5, 2, 'en'),
('wRYXFHqwW98C', '0142437204', 'Jane Eyre', 'http://books.google.com/books/content?id=wRYXFHqwW98C&printsec=frontcover&img=1&zoom=1&source=gbs_api', '1996', 'Penguin', 4.0, 2226, 'en'),
('xC7rQwAACAAJ', '0241950422', 'The Catcher in the Rye', 'http://books.google.com/books/content?id=xC7rQwAACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_api', '2010', '', 3.5, 3118, 'en'),
('xyv-7LzdSsAC', '9780237534615', 'Glub!', 'http://books.google.com/books/content?id=xyv-7LzdSsAC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '2008-02-01', 'Evans Brothers', 0.0, 0, 'en');

-- --------------------------------------------------------

--
-- Table structure for table `owns`
--

CREATE TABLE `owns` (
  `email` varchar(50) NOT NULL,
  `bookid` varchar(50) NOT NULL,
  `bcount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `owns`
--

INSERT INTO `owns` (`email`, `bookid`, `bcount`) VALUES
('umang.tsk@gmail.com', '2xWHAQAACAAJ', 1),
('umang.tsk@gmail.com', 'i-bUBQAAQBAJ', 1),
('umang.tsk@gmail.com', 're4YQAAACAAJ', 1),
('umang.tsk@gmail.com', 'tW4VngEACAAJ', 1),
('umang.tsk@gmail.com', 'VSAtjgEACAAJ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `hostel` varchar(15) NOT NULL,
  `roomno` int(3) UNSIGNED DEFAULT NULL,
  `phone` bigint(10) NOT NULL,
  `hash` varchar(32) NOT NULL DEFAULT '0',
  `activated` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `email`, `password`, `hostel`, `roomno`, `phone`, `hash`, `activated`) VALUES
('Paper', 'Wallet', 'paperwallet@b.co', '$2y$10$dbhRqCtVkeR0R7By8BvTNOMpohm2TYjVLehcFTIzgAVmCnmnWROPO', 'Amber', 166, 9526935656, '854d9fca60b4bd07f9bb215d59ef5561', 0),
('Ravi', 'Kumar', 'rk@b.com', '$2y$10$DAr7VHm6Mu6vWJ4g1npST.1qDWfutuGi3i3EUNiYDvyBXwUGHxBES', 'Diamond', 34, 9874563210, '15d4e891d784977cacbfcbb00c48f133', 0),
('Surabhi', 'Suman', 'surabhi@book.com', '$2y$10$yA0e7CPy2VT4TdyNXb/XUOX4gij8DrXkbQ/8d5v3aMCHBIGvQ2XbW', 'Rosaline', 110, 9876543210, '82cec96096d4281b7c95cd7e74623496', 0),
('Sura', 'Suman', 'surabhisuman@fme.ism.ac.in', '$2y$10$.RBsHvWuNXFOaEfQi3MmSukn.Vu9X3o6.ZLtasw.EFZILxMzrlzo.', 'Rosaline', 11, 7488515675, '851ddf5058cf22df63d3344ad89919cf', 0),
('Umang', 'Mathran', 'umang.mathran@gmail.com', '$2y$10$FXK2HlqKmWCoikcTLtp7qer4wVPXvPmONdsP.ksfWhSXjwl.8tvU6', 'Diamond', 159, 9504413007, '9b698eb3105bd82528f23d0c92dedfc0', 0),
('User', 'Umang', 'umang.tsk@gmail.com', '$2y$10$mMgw4bKxJg.1spYJVOu7Ze8EjBr7W00HTq1tulcHtLHxE2XaYG8uy', 'Diamond', 1, 9785385243, '1bb91f73e9d31ea2830a5e73ce3ed328', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `owns`
--
ALTER TABLE `owns`
  ADD PRIMARY KEY (`email`,`bookid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
