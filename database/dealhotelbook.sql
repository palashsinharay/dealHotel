-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2013 at 02:20 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dealhotelbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `dealcmspage`
--

DROP TABLE IF EXISTS `dealcmspage`;
CREATE TABLE IF NOT EXISTS `dealcmspage` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PID` int(11) NOT NULL,
  `languageCode` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PTitle` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `PContent` longtext COLLATE utf8_unicode_ci NOT NULL,
  `metaTitle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `metaDesc` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `metaKey` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` enum('content','contact') COLLATE utf8_unicode_ci NOT NULL,
  `file_url` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `dealcmspage`
--

INSERT INTO `dealcmspage` (`ID`, `PID`, `languageCode`, `PTitle`, `PContent`, `metaTitle`, `metaDesc`, `metaKey`, `status`, `timeStamp`, `type`, `file_url`) VALUES
(4, 0, 'En', 'FAQ', '<div class="rc">\r\n <p>\r\n  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).ccccsssssssssssss</p>\r\n</div>\r\n<p>\r\n &nbsp;</p>\r\n', 'About Us', 'About Us', 'About Us', '1', '2013-07-13 09:38:14', 'content', 'bd5ff-693x283.gif'),
(5, 0, 'En', 'Payment options', '<div class="rc">\r\n <p>\r\n  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n<p>\r\n &nbsp;</p>\r\n', 'ccc', 'ccc', 'ccc', '1', '2013-07-13 09:38:35', 'content', '5f96a-693x283(2).gif'),
(8, 0, 'en', 'Contact Us', '<p>\r\n Contact Us</p>\r\n', '', '', '', '1', '2013-07-13 12:22:13', 'contact', 'c09c5-128x102.gif'),
(9, 0, 'En', 'Privacy & Policy', '<div class="rc">\r\n <p>\r\n  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).ccccsssssssssssss</p>\r\n</div>\r\n<p>\r\n &nbsp;</p>\r\n', '', '', '', '1', '2013-07-13 12:42:50', 'content', 'b4530-693x283.gif');

-- --------------------------------------------------------

--
-- Table structure for table `dealnewsletter`
--

DROP TABLE IF EXISTS `dealnewsletter`;
CREATE TABLE IF NOT EXISTS `dealnewsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dealnewsletter`
--

INSERT INTO `dealnewsletter` (`id`, `email`, `status`) VALUES
(1, 'sahani.bunty9@gmail.com', '1'),
(2, 'sahani.bunty91@gmail.com', '1'),
(3, 'sahani.bunty449@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '100',
  `token` varchar(255) NOT NULL,
  `identifier` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `usertype` enum('User','Hotel-Owner','admin') NOT NULL,
  `verified` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `group_id`, `token`, `identifier`, `fname`, `lname`, `mobile`, `address`, `usertype`, `verified`) VALUES
(2, 'admin@admin.com', 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '', '', '', '', '', '', 'admin', 0),
(9, 'sahani.bunty9@gmail.com', 'sahani.bunty9@gmail.com', '', 100, '', '', 'bunty', 'sahani', '3434343', 'fff', 'Hotel-Owner', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
