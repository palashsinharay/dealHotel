-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2013 at 12:06 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eanprod`
--

-- --------------------------------------------------------

--
-- Table structure for table `activepropertylist`
--

CREATE TABLE IF NOT EXISTS `activepropertylist` (
  `HotelID` bigint(20) NOT NULL AUTO_INCREMENT,
  `EANHotelID` int(11) NOT NULL,
  `SequenceNumber` int(11) DEFAULT NULL,
  `Name` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `City` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `StateProvince` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PostalCode` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Country` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Latitude` decimal(8,5) DEFAULT NULL,
  `Longitude` decimal(8,5) DEFAULT NULL,
  `AirportCode` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PropertyCategory` int(11) DEFAULT NULL,
  `PropertyCurrency` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `StarRating` decimal(2,1) DEFAULT NULL,
  `Confidence` int(11) DEFAULT NULL,
  `SupplierType` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Location` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ChainCodeID` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RegionID` int(11) DEFAULT NULL,
  `HighRate` decimal(19,4) DEFAULT NULL,
  `LowRate` decimal(19,4) DEFAULT NULL,
  `CheckInTime` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CheckOutTime` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `HotelOwnerID` int(11) NOT NULL DEFAULT '0',
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`HotelID`),
  KEY `EANHotelID` (`EANHotelID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=163052 ;

--
-- Dumping data for table `activepropertylist`
--


-- --------------------------------------------------------

--
-- Table structure for table `airportcoordinateslist`
--

CREATE TABLE IF NOT EXISTS `airportcoordinateslist` (
  `AirportID` int(11) NOT NULL,
  `AirportCode` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `AirportName` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Latitude` decimal(9,6) DEFAULT NULL,
  `Longitude` decimal(9,6) DEFAULT NULL,
  `MainCityID` int(11) DEFAULT NULL,
  `CountryCode` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`AirportCode`),
  KEY `idx_airportcoordinatelist_airportname` (`AirportName`),
  KEY `idx_airportcoordinatelist_maincityid` (`MainCityID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `airportcoordinateslist`
--


-- --------------------------------------------------------

--
-- Table structure for table `aliasregionlist`
--

CREATE TABLE IF NOT EXISTS `aliasregionlist` (
  `RegionID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AliasString` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `idx_aliasregionid_regionid` (`RegionID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aliasregionlist`
--


-- --------------------------------------------------------

--
-- Table structure for table `areaattractionslist`
--

CREATE TABLE IF NOT EXISTS `areaattractionslist` (
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AreaAttractions` text COLLATE utf8_unicode_ci,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`HotelID`),
  KEY `EANHotelID` (`EANHotelID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `areaattractionslist`
--


-- --------------------------------------------------------

--
-- Table structure for table `attributelist`
--

CREATE TABLE IF NOT EXISTS `attributelist` (
  `AttributeID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AttributeDesc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Type` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SubType` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`AttributeID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attributelist`
--


-- --------------------------------------------------------

--
-- Table structure for table `chainlist`
--

CREATE TABLE IF NOT EXISTS `chainlist` (
  `ChainCodeID` int(11) NOT NULL,
  `ChainName` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ChainCodeID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chainlist`
--


-- --------------------------------------------------------

--
-- Table structure for table `citycoordinateslist`
--

CREATE TABLE IF NOT EXISTS `citycoordinateslist` (
  `RegionID` int(11) NOT NULL,
  `RegionName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Coordinates` text COLLATE utf8_unicode_ci,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`RegionID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `citycoordinateslist`
--


-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(255) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('9fe5ae8756890046f7338e2d2d480ce7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/20100101 Firefox/22.0', 1373728390, 'a:3:{s:8:"username";s:15:"admin@admin.com";s:5:"email";s:15:"admin@admin.com";s:9:"logged_in";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `cmspage`
--

CREATE TABLE IF NOT EXISTS `cmspage` (
  `cid` int(100) NOT NULL AUTO_INCREMENT,
  `menutitle` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `type` enum('content','product','contact','enquiry') NOT NULL,
  `metatitle` varchar(100) NOT NULL,
  `metadesc` text NOT NULL,
  `metakey` text NOT NULL,
  `status` enum('1','0') NOT NULL,
  `date` date NOT NULL,
  `pid` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `categories_id` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `cmspage`
--

INSERT INTO `cmspage` (`cid`, `menutitle`, `content`, `type`, `metatitle`, `metadesc`, `metakey`, `status`, `date`, `pid`, `filename`, `categories_id`) VALUES
(16, 'h', '<p>\r\n	h</p>\r\n', 'content', 'h', '<p>\r\n	h</p>\r\n', '<p>\r\n	h</p>\r\n', '1', '2013-07-13', 0, '', 0),
(17, 'b', '<p>\r\n	b</p>\r\n', 'content', 'b', '<p>\r\n	b</p>\r\n', '<p>\r\n	b</p>\r\n', '1', '2013-07-13', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `countrylist`
--

CREATE TABLE IF NOT EXISTS `countrylist` (
  `CountryID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CountryName` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CountryCode` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `Transliteration` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ContinentID` int(11) DEFAULT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`CountryID`),
  KEY `idx_countrylist_countrycode` (`CountryCode`),
  KEY `idx_countrylist_countryname` (`CountryName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countrylist`
--


-- --------------------------------------------------------

--
-- Table structure for table `dealbookingdetails`
--

CREATE TABLE IF NOT EXISTS `dealbookingdetails` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  `checkIn` varchar(200) DEFAULT NULL,
  `checkOut` varchar(200) DEFAULT NULL,
  `maxPerson` int(11) NOT NULL,
  `noOfRooms` int(11) NOT NULL,
  `rate` double NOT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `itineraryID` varchar(255) NOT NULL,
  `confirmation_number` varchar(150) NOT NULL,
  `city` varchar(200) DEFAULT NULL,
  `countryCode` varchar(10) DEFAULT NULL,
  `status` enum('Approve','Processing','Cancled') NOT NULL DEFAULT 'Processing',
  `BTime` datetime NOT NULL,
  `BapproveTime` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `HotelID` (`HotelID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `dealbookingdetails`
--


-- --------------------------------------------------------

--
-- Table structure for table `dealbookmark`
--

CREATE TABLE IF NOT EXISTS `dealbookmark` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `HotelID` (`HotelID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `dealbookmark`
--


-- --------------------------------------------------------

--
-- Table structure for table `dealcmspage`
--

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
(4, 0, 'En', 'FAQ', '<div class="rc">\r\n	<p>\r\n		It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).ccccssssssssssssspalashhhhhhhhhhhhhhhhhhhhhh</p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 'About Us', 'About Us', 'About Us', '1', '2013-07-13 20:38:14', 'content', 'bd5ff-693x283.gif'),
(5, 0, 'En', 'Payment options', '<div class="rc">\r\n <p>\r\n  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n<p>\r\n &nbsp;</p>\r\n', 'ccc', 'ccc', 'ccc', '1', '2013-07-13 20:38:35', 'content', '5f96a-693x283(2).gif'),
(8, 0, 'en', 'Contact Us', '<p>\r\n Contact Us</p>\r\n', '', '', '', '1', '2013-07-13 23:22:13', 'contact', 'c09c5-128x102.gif'),
(9, 0, 'En', 'Privacy & Policy', '<div class="rc">\r\n <p>\r\n  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).ccccsssssssssssss</p>\r\n</div>\r\n<p>\r\n &nbsp;</p>\r\n', '', '', '', '1', '2013-07-13 23:42:50', 'content', 'b4530-693x283.gif');

-- --------------------------------------------------------

--
-- Table structure for table `dealcountries`
--

CREATE TABLE IF NOT EXISTS `dealcountries` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `countryID` varchar(5) NOT NULL,
  `country` varchar(255) NOT NULL,
  `isActive` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `countryID` (`countryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=249 ;

--
-- Dumping data for table `dealcountries`
--


-- --------------------------------------------------------

--
-- Table structure for table `dealcountryip`
--

CREATE TABLE IF NOT EXISTS `dealcountryip` (
  `IPFrom` int(10) unsigned zerofill NOT NULL DEFAULT '0000000000',
  `IPTo` int(10) unsigned zerofill NOT NULL DEFAULT '0000000000',
  `countryCode` varchar(10) CHARACTER SET latin1 NOT NULL,
  `countryCame` varchar(255) CHARACTER SET latin1 NOT NULL,
  `continentCode` varchar(10) CHARACTER SET latin1 NOT NULL,
  `continentName` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`IPFrom`,`IPTo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dealcountryip`
--


-- --------------------------------------------------------

--
-- Table structure for table `dealcurrencies`
--

CREATE TABLE IF NOT EXISTS `dealcurrencies` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `currencyID` varchar(5) NOT NULL,
  `currencyDetails` varchar(255) NOT NULL,
  `currencySymbol` varchar(20) CHARACTER SET utf8 NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `currencyID` (`currencyID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `dealcurrencies`
--


-- --------------------------------------------------------

--
-- Table structure for table `deallanguages`
--

CREATE TABLE IF NOT EXISTS `deallanguages` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `lngID` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `fontFile` varchar(255) NOT NULL,
  `LCTimeNames` varchar(10) NOT NULL,
  `isActive` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `lngID` (`lngID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `deallanguages`
--


-- --------------------------------------------------------

--
-- Table structure for table `dealsitesettings`
--

CREATE TABLE IF NOT EXISTS `dealsitesettings` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `SName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SSlogan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `STitle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SMetaDesc` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `SMetaKey` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `SEmail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SContactEmail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `dealsitesettings`
--


-- --------------------------------------------------------

--
-- Table structure for table `dealstates`
--

CREATE TABLE IF NOT EXISTS `dealstates` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `stateCode` varchar(5) NOT NULL,
  `stateName` varchar(255) NOT NULL,
  `countryCode` varchar(5) NOT NULL,
  `countryName` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `dealstates`
--


-- --------------------------------------------------------

--
-- Table structure for table `diningdescriptionlist`
--

CREATE TABLE IF NOT EXISTS `diningdescriptionlist` (
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiningDescription` text COLLATE utf8_unicode_ci,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `EANHotelID` (`EANHotelID`),
  KEY `HotelID` (`HotelID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `diningdescriptionlist`
--


-- --------------------------------------------------------

--
-- Table structure for table `gdsattributelist`
--

CREATE TABLE IF NOT EXISTS `gdsattributelist` (
  `AttributeID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AttributeDesc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Type` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SubType` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`AttributeID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gdsattributelist`
--


-- --------------------------------------------------------

--
-- Table structure for table `gdspropertyattributelink`
--

CREATE TABLE IF NOT EXISTS `gdspropertyattributelink` (
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  `AttributeID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AppendTxt` varchar(191) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `EANHotelID` (`EANHotelID`,`AttributeID`,`AppendTxt`),
  KEY `HotelID` (`HotelID`,`AttributeID`,`AppendTxt`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gdspropertyattributelink`
--


-- --------------------------------------------------------

--
-- Table structure for table `hotelimagelist`
--

CREATE TABLE IF NOT EXISTS `hotelimagelist` (
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  `Caption` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `URL` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Width` int(11) DEFAULT NULL,
  `Height` int(11) DEFAULT NULL,
  `ByteSize` int(11) DEFAULT NULL,
  `ThumbnailURL` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DefaultImage` bit(1) DEFAULT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`URL`),
  KEY `idx_hotelimagelist_eanhotelid` (`EANHotelID`),
  KEY `HotelID` (`HotelID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hotelimagelist`
--


-- --------------------------------------------------------

--
-- Table structure for table `neighborhoodcoordinateslist`
--

CREATE TABLE IF NOT EXISTS `neighborhoodcoordinateslist` (
  `RegionID` int(11) NOT NULL,
  `RegionName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Coordinates` text COLLATE utf8_unicode_ci,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`RegionID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `neighborhoodcoordinateslist`
--


-- --------------------------------------------------------

--
-- Table structure for table `parentregionlist`
--

CREATE TABLE IF NOT EXISTS `parentregionlist` (
  `RegionID` int(11) NOT NULL,
  `RegionType` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RelativeSignificance` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SubClass` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RegionName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RegionNameLong` varchar(510) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ParentRegionID` int(11) DEFAULT NULL,
  `ParentRegionType` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ParentRegionName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ParentRegionNameLong` varchar(510) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`RegionID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `parentregionlist`
--


-- --------------------------------------------------------

--
-- Table structure for table `pointsofinterestcoordinateslist`
--

CREATE TABLE IF NOT EXISTS `pointsofinterestcoordinateslist` (
  `RegionID` int(11) NOT NULL,
  `RegionName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RegionNameLong` varchar(191) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `Latitude` decimal(9,6) DEFAULT NULL,
  `Longitude` decimal(9,6) DEFAULT NULL,
  `SubClassification` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`RegionNameLong`),
  KEY `idx_pointsofinterestcoordinateslist_regionid` (`RegionID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pointsofinterestcoordinateslist`
--


-- --------------------------------------------------------

--
-- Table structure for table `policydescriptionlist`
--

CREATE TABLE IF NOT EXISTS `policydescriptionlist` (
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PolicyDescription` text COLLATE utf8_unicode_ci,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `EANHotelID` (`EANHotelID`),
  KEY `HotelID` (`HotelID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `policydescriptionlist`
--


-- --------------------------------------------------------

--
-- Table structure for table `propertyamenitieslist`
--

CREATE TABLE IF NOT EXISTS `propertyamenitieslist` (
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AmenitiesDescription` text COLLATE utf8_unicode_ci,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `EANHotelID` (`EANHotelID`),
  KEY `HotelID` (`HotelID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `propertyamenitieslist`
--


-- --------------------------------------------------------

--
-- Table structure for table `propertyattributelink`
--

CREATE TABLE IF NOT EXISTS `propertyattributelink` (
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  `AttributeID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AppendTxt` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `EANHotelID` (`EANHotelID`,`AttributeID`),
  KEY `HotelID` (`HotelID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `propertyattributelink`
--


-- --------------------------------------------------------

--
-- Table structure for table `propertybusinessamenitieslist`
--

CREATE TABLE IF NOT EXISTS `propertybusinessamenitieslist` (
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BusinessAmenitiesDesciption` text COLLATE utf8_unicode_ci,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `EANHotelID` (`EANHotelID`),
  KEY `HotelID` (`HotelID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `propertybusinessamenitieslist`
--


-- --------------------------------------------------------

--
-- Table structure for table `propertydescriptionlist`
--

CREATE TABLE IF NOT EXISTS `propertydescriptionlist` (
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PropertyDescription` text COLLATE utf8_unicode_ci,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `EANHotelID` (`EANHotelID`),
  KEY `HotelID` (`HotelID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `propertydescriptionlist`
--


-- --------------------------------------------------------

--
-- Table structure for table `propertyfeeslist`
--

CREATE TABLE IF NOT EXISTS `propertyfeeslist` (
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FeesDescription` text COLLATE utf8_unicode_ci,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `EANHotelID` (`EANHotelID`),
  KEY `HotelID` (`HotelID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `propertyfeeslist`
--


-- --------------------------------------------------------

--
-- Table structure for table `propertylocationlist`
--

CREATE TABLE IF NOT EXISTS `propertylocationlist` (
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LocationDescription` text COLLATE utf8_unicode_ci,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `EANHotelID` (`EANHotelID`),
  KEY `HotelID` (`HotelID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `propertylocationlist`
--


-- --------------------------------------------------------

--
-- Table structure for table `propertymandatoryfeeslist`
--

CREATE TABLE IF NOT EXISTS `propertymandatoryfeeslist` (
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MandatoryFeesDescription` text COLLATE utf8_unicode_ci,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `EANHotelID` (`EANHotelID`),
  KEY `HotelID` (`HotelID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `propertymandatoryfeeslist`
--


-- --------------------------------------------------------

--
-- Table structure for table `propertynationalratingslist`
--

CREATE TABLE IF NOT EXISTS `propertynationalratingslist` (
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NationalRatingsDescription` text COLLATE utf8_unicode_ci,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `EANHotelID` (`EANHotelID`),
  KEY `HotelID` (`HotelID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `propertynationalratingslist`
--


-- --------------------------------------------------------

--
-- Table structure for table `propertyrenovationslist`
--

CREATE TABLE IF NOT EXISTS `propertyrenovationslist` (
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RenovationsDescription` text COLLATE utf8_unicode_ci,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `EANHotelID` (`EANHotelID`),
  KEY `HotelID` (`HotelID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `propertyrenovationslist`
--


-- --------------------------------------------------------

--
-- Table structure for table `propertyroomslist`
--

CREATE TABLE IF NOT EXISTS `propertyroomslist` (
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RoomsDescription` text COLLATE utf8_unicode_ci,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `EANHotelID` (`EANHotelID`),
  KEY `HotelID` (`HotelID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `propertyroomslist`
--


-- --------------------------------------------------------

--
-- Table structure for table `propertytypelist`
--

CREATE TABLE IF NOT EXISTS `propertytypelist` (
  `PropertyCategory` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PropertyCategoryDesc` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`PropertyCategory`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `propertytypelist`
--


-- --------------------------------------------------------

--
-- Table structure for table `recreationdescriptionlist`
--

CREATE TABLE IF NOT EXISTS `recreationdescriptionlist` (
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RecreationDescription` text COLLATE utf8_unicode_ci,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `EANHotelID` (`EANHotelID`),
  KEY `HotelID` (`HotelID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `recreationdescriptionlist`
--


-- --------------------------------------------------------

--
-- Table structure for table `regioncentercoordinateslist`
--

CREATE TABLE IF NOT EXISTS `regioncentercoordinateslist` (
  `RegionID` int(11) NOT NULL,
  `RegionName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CenterLatitude` decimal(9,6) DEFAULT NULL,
  `CenterLongitude` decimal(9,6) DEFAULT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`RegionID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `regioncentercoordinateslist`
--


-- --------------------------------------------------------

--
-- Table structure for table `regioneanhotelidmapping`
--

CREATE TABLE IF NOT EXISTS `regioneanhotelidmapping` (
  `RegionID` int(11) NOT NULL,
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `RegionID` (`RegionID`,`EANHotelID`),
  KEY `RegionID_2` (`RegionID`,`HotelID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `regioneanhotelidmapping`
--


-- --------------------------------------------------------

--
-- Table structure for table `roomtypelist`
--

CREATE TABLE IF NOT EXISTS `roomtypelist` (
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  `RoomTypeID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RoomTypeImage` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RoomTypeName` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RoomTypeDescription` text COLLATE utf8_unicode_ci,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dealRate` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  KEY `EANHotelID` (`EANHotelID`,`RoomTypeID`),
  KEY `HotelID` (`HotelID`,`RoomTypeID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roomtypelist`
--


-- --------------------------------------------------------

--
-- Table structure for table `spadescriptionlist`
--

CREATE TABLE IF NOT EXISTS `spadescriptionlist` (
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SpaDescription` text COLLATE utf8_unicode_ci,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `EANHotelID` (`EANHotelID`),
  KEY `HotelID` (`HotelID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `spadescriptionlist`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UID` int(11) NOT NULL AUTO_INCREMENT,
  `UType` enum('user','hotelowner') COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `FName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LanguageCode` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Active` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`UID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '100',
  `token` varchar(255) NOT NULL,
  `identifier` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `group_id`, `token`, `identifier`) VALUES
(2, 'admin@admin.com', 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `whattoexpectlist`
--

CREATE TABLE IF NOT EXISTS `whattoexpectlist` (
  `HotelID` bigint(20) NOT NULL,
  `EANHotelID` int(11) NOT NULL,
  `LanguageCode` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `WhatToExpect` text COLLATE utf8_unicode_ci,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `EANHotelID` (`EANHotelID`),
  KEY `HotelID` (`HotelID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `whattoexpectlist`
--

