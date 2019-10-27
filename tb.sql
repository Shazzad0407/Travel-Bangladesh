-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 07:35 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutblogplace`
--

CREATE TABLE `aboutblogplace` (
  `blogId` int(11) NOT NULL,
  `placeId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aboutblogplace`
--

INSERT INTO `aboutblogplace` (`blogId`, `placeId`) VALUES
(1, '2'),
(2, '1');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `fname`, `lname`, `email`, `pass`) VALUES
(11152018, 'Shazzad', 'Hossain', 'prex.line01@gmail.com', 'bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `amenityName` varchar(255) DEFAULT NULL,
  `amenityId` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `aminityColor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`amenityName`, `amenityId`, `icon`, `aminityColor`) VALUES
('free wifi', 1, 'fas fa-wifi', 'color:#e17114'),
('free parking', 2, 'fas fa-car', 'color:#6e15fe'),
('swimming pool', 3, 'fas fa-swimmer', 'color:#12a3f2'),
('fitness Center', 4, 'fas fa-walking', 'color:#f02759'),
('Airport shuttle', 5, 'fas fa-taxi', 'color:#fec007'),
('restaurant', 6, 'fas fa-utensils', 'color:#1cc593'),
('Air Condition', 7, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `Title` varchar(255) DEFAULT NULL,
  `blogId` int(11) NOT NULL,
  `description` text,
  `email` varchar(255) DEFAULT NULL,
  `blogDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`Title`, `blogId`, `description`, `email`, `blogDate`) VALUES
('Sundorban Tour', 1, 'It was an awesome tour with travel in Bangladesh website.', 'asuhed2@gmail.com', '2018-09-11'),
('Visit Saat Gomboz Masque', 2, 'Bangladesh has three world heritage sites. The Shat Gombuj Mosque in Bagerhat is one of them. It is a 15th century Islamic edifice situated in the suburbs of Bagerhat (a district in Khulna Division), on the edge of the Sundarbans, some 175 km south west of Dhaka, the capital of Bangladesh.\r\n', 'lfk@gmail.com', '2018-09-02'),
('Cox\'s Bazar tour', 3, 'I visited there last month with TB website packages.It was the best trip of my life.', 'tarek12@gmail.com', '2018-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `blogcomment`
--

CREATE TABLE `blogcomment` (
  `commentId` int(11) NOT NULL,
  `dated` date DEFAULT NULL,
  `commentBody` text,
  `email` varchar(255) DEFAULT NULL,
  `blogId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogcomment`
--

INSERT INTO `blogcomment` (`commentId`, `dated`, `commentBody`, `email`, `blogId`) VALUES
(1, '2018-09-01', 'What is the cost?', 'asuhed2@gmail.com', 3),
(2, '2018-09-01', 'Please share more experience.', 'lfk@gmail.com', 1),
(3, '2018-09-01', 'wow.', 'asuhed2@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `bloggellary`
--

CREATE TABLE `bloggellary` (
  `path` varchar(255) NOT NULL,
  `blogId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `catName` varchar(255) DEFAULT NULL,
  `catId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`catName`, `catId`) VALUES
('Historical Places', 1),
('Forest', 2),
('Hill Tract', 3),
('Beaches', 4),
('River Sides', 5),
('park', 6),
('Picnic Spots', 7),
('Museum', 8),
('Lakes', 9),
('Garden', 10);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `districtName` varchar(255) NOT NULL,
  `divisionName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`districtName`, `divisionName`) VALUES
('Dhaka', 'Dhaka'),
('Bagerhat', 'Khulna'),
('Chuadanga', 'Khulna'),
('Jessore', 'Khulna'),
('Jhenaidah', 'Khulna'),
('khulna', 'Khulna'),
('Kushtia', 'Khulna'),
('Magura', 'Khulna'),
('Meherpur', 'Khulna'),
('Narail', 'Khulna'),
('Satkhira', 'Khulna');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `divisionName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`divisionName`) VALUES
('Barisal'),
('Chittagong'),
('Dhaka'),
('Khulna'),
('Mymensingh'),
('Rajshahi'),
('Rangpur'),
('Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodname` varchar(255) DEFAULT NULL,
  `foodDesc` text,
  `foodImg` varchar(255) DEFAULT NULL,
  `foodPrice` float DEFAULT NULL,
  `foodId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodname`, `foodDesc`, `foodImg`, `foodPrice`, `foodId`) VALUES
('rice', 'plane rice boil', NULL, 40, 1);

-- --------------------------------------------------------

--
-- Table structure for table `foodreview`
--

CREATE TABLE `foodreview` (
  `comments` text,
  `dated` date DEFAULT NULL,
  `foodRating` float DEFAULT NULL,
  `serviceRating` float DEFAULT NULL,
  `resReviewId` int(11) NOT NULL,
  `valueRating` float DEFAULT NULL,
  `atmosphereRating` float DEFAULT NULL,
  `foodId` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `givehotelreview`
--

CREATE TABLE `givehotelreview` (
  `id` int(11) NOT NULL,
  `hotelId` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `Rating` float DEFAULT NULL,
  `commentOnHotel` text,
  `dateOfComment` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `giveplacereview`
--

CREATE TABLE `giveplacereview` (
  `placeId` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Rating` float DEFAULT NULL,
  `commentOnPlace` text,
  `dateOfComment` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giveplacereview`
--

INSERT INTO `giveplacereview` (`placeId`, `email`, `Rating`, `commentOnPlace`, `dateOfComment`) VALUES
('1', 'asuhed2@gmail.com', 4, 'sei', '2018-09-03'),
('1', 'saki@', 4, 'good', '2018-09-03'),
('2', 'as@gmail.com', 4.5, 'wao', '2018-09-12'),
('2', 'asuhed2@gmail.com', 4.5, 'good', '2018-09-12'),
('2', 'prex.online003@gmail.com', 5, 'love the place', '2018-09-04'),
('2', 'shamima0626@gmail.com', 5, 'gr8', '2018-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `fName` varchar(255) DEFAULT NULL,
  `lName` varchar(255) DEFAULT NULL,
  `proPic` varchar(255) DEFAULT NULL,
  `biography` text,
  `pass` varchar(255) DEFAULT NULL,
  `guideEmail` varchar(255) NOT NULL,
  `CREDENTIALS` text,
  `phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`fName`, `lName`, `proPic`, `biography`, `pass`, `guideEmail`, `CREDENTIALS`, `phone`) VALUES
('Anamul', 'Haque', NULL, 'LIVES IN\r\nDhaka, Bangladesh\r\n\r\nLANGUAGE(S)\r\nexplanation\r\n\r\nBENGALI fluent\r\nENGLISH advanced\r\nHINDI basic\r\nTOURS GIVEN\r\n89\r\nFirst tour on\r\nJun 17, 2011\r\n\r\n', '12345', 'aq@gmail.com', '\r\n- Member Tour Operator Association of Bangladesh (TOAB).\r\n\r\n- Industry Member of PATA (Pacific Asia Travel Association);\r\n\r\n- Member ISC (Industry Skills Council) for Tourism & Hospitality Industry of Bangladesh.\r\n\r\n- Member Tour Guide Association of Bangladesh.\r\n\r\n- Assessor of BTEB (Bangladesh Technical Education Board) for Tour Guiding training program.', '01678121314'),
('Iffat', 'Ahmed', NULL, 'LIVES IN\r\nDhaka, Bangladesh\r\n\r\nLANGUAGE(S)\r\nexplanation\r\n\r\nBENGALI fluent\r\nENGLISH advanced\r\nHINDI basic\r\nTOURS GIVEN\r\n1000\r\nFirst tour on\r\nJun 17, 2011', '12345', 'eff@gmail.com', '- Member Tour Operator Association of Bangladesh (TOAB).\r\n\r\n- Industry Member of PATA (Pacific Asia Travel Association);\r\n\r\n- Member ISC (Industry Skills Council) for Tourism & Hospitality Industry of Bangladesh.\r\n\r\n- Member Tour Guide Association of Bangladesh.\r\n\r\n- Assessor of BTEB (Bangladesh Technical Education Board) for Tour Guiding training program.', '01789454647'),
('Israt ', 'Jahan', NULL, 'Hello there! Greetings from Bangladesh, a land full of enthusiasm and varieties of life.\r\nLIVES IN\r\nDhaka, Bangladesh\r\n\r\nLANGUAGE(S)\r\nexplanation\r\n\r\nBENGALI fluent\r\nENGLISH fluent\r\nHINDI advanced\r\nTOURS GIVEN', '12345', 'Israt@gmail.com', 'Higher Educated', '01768232425'),
('shakil ', 'Ahmed Shahan', NULL, 'LIVES IN\r\nDhaka, Bangladesh\r\n\r\nLANGUAGE(S)\r\nexplanation\r\n\r\nBENGALI fluent\r\nENGLISH fluent\r\nHINDI advanced\r\nTOURS GIVEN\r\n8\r\nFirst tour on\r\nSep 9, 2015', '12345', 'skl@gmail.com', '- Member Tour Operator Association of Bangladesh (TOAB).\r\n\r\n- Industry Member of PATA (Pacific Asia Travel Association);\r\n', '01768232429');

-- --------------------------------------------------------

--
-- Table structure for table `guidelanguage`
--

CREATE TABLE `guidelanguage` (
  `guideEmail` varchar(255) NOT NULL,
  `languageName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guidelanguage`
--

INSERT INTO `guidelanguage` (`guideEmail`, `languageName`) VALUES
('aq@gmail.com', 'English'),
('eff@gmail.com', 'Spanish'),
('Israt@gmail.com', 'Bangla'),
('skl@gmail.com', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `guideofferplace`
--

CREATE TABLE `guideofferplace` (
  `guideEmail` varchar(255) NOT NULL,
  `placeId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guideofferplace`
--

INSERT INTO `guideofferplace` (`guideEmail`, `placeId`) VALUES
('aq@gmail.com', '2'),
('eff@gmail.com', '1'),
('eff@gmail.com', '2');

-- --------------------------------------------------------

--
-- Table structure for table `guidereview`
--

CREATE TABLE `guidereview` (
  `Rating` float DEFAULT NULL,
  `id` int(11) NOT NULL,
  `guideEmail` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `commentOnGuide` text,
  `dateOfComment` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guidereview`
--

INSERT INTO `guidereview` (`Rating`, `id`, `guideEmail`, `email`, `commentOnGuide`, `dateOfComment`) VALUES
(8.5, 1, 'aq@gmail.com', 'asuhed2@gmail.com', 'Thanks.', '2018-09-01'),
(10.5, 2, 'eff@gmail.com', 'lfk@gmail.com', 'What a great day was had! Very knowledgeable man with great English skills and excellent way of explaining Dhaka and Bandladesh life. Took me to some excellent places. Highly recommended. ', '2018-09-16'),
(5, 3, 'skl@gmail.com', 'tarek12@gmail.com', 'Took me to some excellent places. Highly recommended. ', '2018-09-07'),
(7, 4, 'Israt@gmail.com', 'saki@', 'Highly skilled', '2018-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotelId` int(11) NOT NULL,
  `hotelName` varchar(300) DEFAULT NULL,
  `hotelDescription` text,
  `website` varchar(50) DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `hotelClass` float DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `hotelEmail` varchar(50) DEFAULT NULL,
  `numOfRoom` int(11) DEFAULT NULL,
  `startingPrice` float DEFAULT NULL,
  `heighestPrice` float DEFAULT NULL,
  `addingDate` date DEFAULT NULL,
  `verified` int(11) DEFAULT NULL,
  `districtName` varchar(255) DEFAULT NULL,
  `emailAddress` varchar(255) DEFAULT NULL,
  `hotelCoverPic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotelId`, `hotelName`, `hotelDescription`, `website`, `latitude`, `longitude`, `hotelClass`, `address`, `hotelEmail`, `numOfRoom`, `startingPrice`, `heighestPrice`, `addingDate`, `verified`, `districtName`, `emailAddress`, `hotelCoverPic`) VALUES
(1, 'Hotel Castle Salam', NULL, 'hotelcastlesalam.com', 22.8105, 89.5625, 5, 'G-8 Taltola Lane, K>D>A Avenue, Khulna 9000', 'hotelcastlesalam@gmail.com', 2, 1200, 20000, '2018-09-11', 1, 'Bagerhat', 'foysal@ymail.com', 'img/places/5ba090e68bdc0.jpg'),
(2, 'City Inn', '*Provides free breakfast', 'cityinn.com', 22.893, 89.5458, 4, 'B, 1 Majid Sarani, Khulna 9100', 'cityinn@gmail.com', 2, 1000, 22000, '2018-09-11', 1, 'Bagerhat', 'hasan@gmail.com', 'img/places/5ba090e68bdc0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hotelamenity`
--

CREATE TABLE `hotelamenity` (
  `hotelId` int(11) NOT NULL,
  `amenityId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotelamenity`
--

INSERT INTO `hotelamenity` (`hotelId`, `amenityId`) VALUES
(1, 1),
(2, 1),
(1, 2),
(2, 2),
(1, 3),
(2, 3),
(1, 4),
(2, 4),
(2, 5),
(1, 6),
(2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `hotelgellary`
--

CREATE TABLE `hotelgellary` (
  `path` varchar(255) NOT NULL,
  `hotelId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hotelowner`
--

CREATE TABLE `hotelowner` (
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `proPic` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotelowner`
--

INSERT INTO `hotelowner` (`firstName`, `lastName`, `emailAddress`, `proPic`, `pass`) VALUES
('Syed', 'Foysal', 'foysal@ymail.com', NULL, '123456'),
('Mahmudul', 'Hasan', 'hasan@gmail.com', NULL, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `hotelowner_phoneno`
--

CREATE TABLE `hotelowner_phoneno` (
  `phoneNo` varchar(15) NOT NULL,
  `emailAddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_phoneno`
--

CREATE TABLE `hotel_phoneno` (
  `phoneNo` varchar(15) NOT NULL,
  `hotelId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `just`
--

CREATE TABLE `just` (
  `id` int(11) NOT NULL,
  `ccc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `languageName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`languageName`) VALUES
('Arabic'),
('Bangla'),
('English'),
('French'),
('Hindi'),
('Spanish');

-- --------------------------------------------------------

--
-- Table structure for table `launchdates`
--

CREATE TABLE `launchdates` (
  `packageId` int(11) NOT NULL,
  `lDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `likedislike`
--

CREATE TABLE `likedislike` (
  `liked` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `blogId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `likedislike`
--

INSERT INTO `likedislike` (`liked`, `dislike`, `email`, `blogId`) VALUES
(3, NULL, 'as@gmail.com', 2),
(1, 1, 'asuhed2@gmail.com', 3),
(5, NULL, 'lfk@gmail.com', 1),
(2, NULL, 'saki@', 3);

-- --------------------------------------------------------

--
-- Table structure for table `messageguide`
--

CREATE TABLE `messageguide` (
  `dated` date DEFAULT NULL,
  `msg` text,
  `guideEmail` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messageguide`
--

INSERT INTO `messageguide` (`dated`, `msg`, `guideEmail`, `email`) VALUES
('2018-09-01', 'Are you free in next week?', 'aq@gmail.com', 'asuhed2@gmail.com'),
('2018-09-05', 'Hello. I need a help.', 'eff@gmail.com', 'tarek12@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `packageId` int(11) NOT NULL,
  `packageName` varchar(300) DEFAULT NULL,
  `durationNight` int(11) DEFAULT NULL,
  `durationDay` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `description` text,
  `emailAddress` varchar(255) NOT NULL,
  `packCoverPic` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`packageId`, `packageName`, `durationNight`, `durationDay`, `price`, `description`, `emailAddress`, `packCoverPic`, `type`) VALUES
(1, 'Shatgombuj Student Package 2N3D', 2, 3, 3500, '>2 night/3 days\r\n>3500 taka per person\r\n\r\n*Room type: non AC (each room can hold 3 people)\r\n*Transportation: Non AC Bus\r\n*Breakfast, dinner & afternoon snack', 'abdullah@gmail.com', '', 'Adventure'),
(2, 'Shundarbans Package 3D/3N', 3, 3, 8000, '>3 night/3 days\r\n>5000 taka per person\r\n\r\n*Room type: AC (each room can hold 3 people)\r\n*Transportation: Direct AC Bus to hotel\r\n*Breakfast, afternoon snack & dinner', 'ratul@hotmail.com', '', 'Family');

-- --------------------------------------------------------

--
-- Table structure for table `packageofferplaces`
--

CREATE TABLE `packageofferplaces` (
  `packageId` int(11) NOT NULL,
  `placeId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `packageofferplaces`
--

INSERT INTO `packageofferplaces` (`packageId`, `placeId`) VALUES
(1, '1'),
(2, '1'),
(2, '2');

-- --------------------------------------------------------

--
-- Table structure for table `packageowner`
--

CREATE TABLE `packageowner` (
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `proPic` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `companyName` varchar(255) DEFAULT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `packageowner`
--

INSERT INTO `packageowner` (`firstName`, `lastName`, `emailAddress`, `proPic`, `pass`, `companyName`, `rating`) VALUES
('Mohammad', 'Abdullah', 'abdullah@gmail.com', NULL, '123456', 'Abdullah Travels', 4.5),
('Mohammad', 'Ratul', 'ratul@hotmail.com', NULL, '123456', 'Ratul Travels', 4);

-- --------------------------------------------------------

--
-- Table structure for table `packagereview`
--

CREATE TABLE `packagereview` (
  `id` int(11) NOT NULL,
  `packageId` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Rating` float DEFAULT NULL,
  `commentOnPackage` text,
  `dateOfComment` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `placeId` varchar(255) NOT NULL,
  `placeName` varchar(300) DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `districtName` varchar(255) DEFAULT NULL,
  `description` text,
  `address` varchar(500) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `offDay` varchar(20) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `adminId` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `addingDate` date DEFAULT NULL,
  `verified` int(11) DEFAULT NULL,
  `placeCoverPic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`placeId`, `placeName`, `latitude`, `longitude`, `districtName`, `description`, `address`, `zip`, `offDay`, `website`, `adminId`, `email`, `addingDate`, `verified`, `placeCoverPic`) VALUES
('1', 'shat gambuj Masjid', 22.6745, 89.7418, 'Bagerhat', 'The Sixty Dome Mosque (Shaá¹­ Gombuj Moshjid) more commonly known as Shait Gambuj Mosque or Saith Gunbad Masjid), a UNESCO World Heritage Site, is a mosque in Bangladesh, the largest in that country from the Sultanate period. It has been described as \"the most impressive Muslim monuments in the whole of the Indian subcontinent.', 'Bagerhat, Bangladesh', 9400, '', 'en.wikipedia.org/wiki/Sixty_Dome_Mosque', 11152018, NULL, '2018-09-11', 1, 'img/pd4.jpg'),
('2', 'SHUNDARBANS MANGROVE FOREST', 22.2308, 89.7602, 'Dhaka', 'The Sundarbans, World\'s largest Mangrove Forest is an UNESCO World Heritage Site and an Unique Bangladesh Eco-Tourism Destination. It is located at the feet of the Ganges and spread across Bangladesh and West Bengal in India. The name Sundarban translates to \"beautiful forest\", however, often it is suggested that the name may have derived from the ‘Sundari’ trees, which are abundant there. The Sundarbans is globally famous for the Royal Bengal Tiger, Misty Mangrove forests, breath taking Sundarbans scenery, Over 500 Sundarbans Animal Species including: birds, fishing cats, spotted deer, monkeys, crocodiles and snakes.\r\n\r\nThis magnificent forest spanning over 10,000km2 land area is composed of two basic eco-regions: The Mangrove Forest and the Freshwater Swamp Forest. It is intersected by a complex network of tidal waterways, mudflats and small islands of salt-tolerant thick mangrove vegetation. This unique ecosystem is home to approximately 350 tigers, the largest single population of tigers on earth. Bangladesh Sundarbans support diverse biological resources including at least 42 species of mammals, 270 species of birds, 35 reptile species, 8 amphibian species and 120 species of commercially important fishes. This is a significant proportion of the species present in Bangladesh. Visit The Sundarbans for a unique experience in world\'s largest and mysterious Mangrove forest', NULL, 9400, '', NULL, 11152018, NULL, '2018-09-11', 1, 'img/pd3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `placecat`
--

CREATE TABLE `placecat` (
  `placeId` varchar(255) NOT NULL,
  `catId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `placecat`
--

INSERT INTO `placecat` (`placeId`, `catId`) VALUES
('1', 1),
('1', 2),
('1', 4),
('1', 5),
('2', 2),
('2', 6);

-- --------------------------------------------------------

--
-- Table structure for table `placegellary`
--

CREATE TABLE `placegellary` (
  `path` varchar(255) NOT NULL,
  `placeId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `placegellary`
--

INSERT INTO `placegellary` (`path`, `placeId`) VALUES
('img/places/5ba090e693b02.jpg', '1'),
('img/places/5ba090e69a7ec.jpg', '1'),
('img/places/5ba090e6a20c4.jpg', '1'),
('img/places/5ba090e6b2590.jpg', '1'),
('img/places/5b9dd68ad0190.jpg', '2'),
('img/places/5b9dd68ae1fdc.jpg', '2'),
('img/places/5b9dd68b0e2c6.jpg', '2'),
('img/places/5b9dd68b15000.jpg', '2');

-- --------------------------------------------------------

--
-- Table structure for table `resggellary`
--

CREATE TABLE `resggellary` (
  `path` varchar(255) NOT NULL,
  `resId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resggellary`
--

INSERT INTO `resggellary` (`path`, `resId`) VALUES
('', 1),
('abc', 2);

-- --------------------------------------------------------

--
-- Table structure for table `resmeal`
--

CREATE TABLE `resmeal` (
  `mealName` varchar(255) DEFAULT NULL,
  `mealId` int(11) NOT NULL,
  `resId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `resmealfood`
--

CREATE TABLE `resmealfood` (
  `foodId` int(11) NOT NULL,
  `mealId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `resmenu`
--

CREATE TABLE `resmenu` (
  `menuName` varchar(255) DEFAULT NULL,
  `menuId` int(11) NOT NULL,
  `resId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resmenu`
--

INSERT INTO `resmenu` (`menuName`, `menuId`, `resId`) VALUES
('Rice', 2, 1),
('Soup', 3, 1),
('Chinese', 4, 1),
('Desert', 5, 1),
('Pasta', 6, 1),
('Burger', 7, 1),
('Pizza', 8, 1),
('Rice', 9, 2),
('Biryani', 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `resmenufood`
--

CREATE TABLE `resmenufood` (
  `foodId` int(11) NOT NULL,
  `menuId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `resowner`
--

CREATE TABLE `resowner` (
  `emailAddress` varchar(255) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `proPic` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resowner`
--

INSERT INTO `resowner` (`emailAddress`, `firstName`, `lastName`, `proPic`, `pass`) VALUES
('chilox@gmail.com', 'Shusmita', 'Chowdhury', NULL, '1234'),
('sultanDine@gmail.com', 'Md.Sultan', 'Mahmud', NULL, 'mahmud');

-- --------------------------------------------------------

--
-- Table structure for table `resowner_phoneno`
--

CREATE TABLE `resowner_phoneno` (
  `phoneNo` varchar(15) NOT NULL,
  `emailAddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resowner_phoneno`
--

INSERT INTO `resowner_phoneno` (`phoneNo`, `emailAddress`) VALUES
('01611611014', 'sultanDine@gmail.com'),
('01622672090', 'chilox@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `resId` int(11) NOT NULL,
  `resName` varchar(300) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `resEmail` varchar(50) DEFAULT NULL,
  `resDescription` text,
  `addingDate` date DEFAULT NULL,
  `verified` int(11) DEFAULT NULL,
  `districtName` varchar(255) DEFAULT NULL,
  `emailAddress` varchar(255) DEFAULT NULL,
  `resCoverPic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`resId`, `resName`, `website`, `latitude`, `longitude`, `address`, `resEmail`, `resDescription`, `addingDate`, `verified`, `districtName`, `emailAddress`, `resCoverPic`) VALUES
(1, 'Chilox', 'www.chilox.com', -22.9856, 33.4042, 'jigatola,Dhanmondi,Dhaka.', 'chilox.res@gmail.com', 'Burger and junk based restaurant.', '2015-06-01', 1, 'Dhaka', 'chilox@gmail.com', 'img/pd4.jpg'),
(2, 'Sultan Dine', 'www.sultandine.com', 23.7383, 90.3757, 'jigatola,dhanmondi,dhaka.', 'sultanDine.res@gmail.com', 'Rich food based restaurant.', '2014-01-01', 1, 'Dhaka', 'sultanDine@gmail.com', 'img/pd3.jpg'),
(3, 'Dhansiri Restaurant', NULL, 22.5706, 89.7491, ' Bagerhat - Khulna Rd', NULL, 'Dhansiri Restaurant is a Restaurant located at Bagerhat - Khulna Road, Bagerhat, Bagerhat S., Bagerhat, Khulna, Bangladesh.', '2018-09-12', 1, 'Bagerhat', 'chilox@gmail.com', 'img/places/5ba04d1a24e50.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `restaurent_phoneno`
--

CREATE TABLE `restaurent_phoneno` (
  `phoneNo` varchar(15) NOT NULL,
  `resId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurent_phoneno`
--

INSERT INTO `restaurent_phoneno` (`phoneNo`, `resId`) VALUES
('01611152014', 2),
('01611152090', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fName` varchar(255) DEFAULT NULL,
  `lName` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `proPic` varchar(255) DEFAULT NULL,
  `birthDate` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fName`, `lName`, `email`, `pass`, `proPic`, `birthDate`, `gender`) VALUES
('Ayesha ', 'Akter', 'as@gmail.com', '1234', NULL, '0000-00-00', 'female'),
('Ayesha ', 'Akter', 'ashraf@gmail.com', '1234', NULL, '0000-00-00', 'female'),
('Ashraf Uddin', 'ahmed', 'asuhed2@gmail.com', '98564', NULL, '0000-00-00', 'male'),
('luthfa', 'khatun', 'lfk@gmail.com', '5678', NULL, '0000-00-00', 'female'),
('sazzad', 'hossain', 'prex.online003@gmail.com', '12345678', NULL, '1994-09-11', 'male'),
('santo', 'saki', 'saki@', '123', '', '0000-00-00', 'female'),
('Shamima Akter', 'Ritu', 'shamima0626@gmail.com', 'shamima', NULL, '1997-07-04', 'Female'),
('Tarek', 'Ahmed', 'tarek112@gmail.com', '34567', NULL, '0000-00-00', 'male'),
('Tarek', 'Ahmed', 'tarek12@gmail.com', '34567', NULL, '0000-00-00', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `user_phonenumber`
--

CREATE TABLE `user_phonenumber` (
  `phoneNumber` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_phonenumber`
--

INSERT INTO `user_phonenumber` (`phoneNumber`, `email`) VALUES
('01522565834', 'saki@'),
('01671246464', 'as@gmail.com'),
('01782678787', 'asuhed2@gmail.com'),
('01783533339', 'tarek12@gmail.com'),
('01980454647', 'lfk@gmail.com'),
('01983533390', 'as@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `whattodo`
--

CREATE TABLE `whattodo` (
  `wtdId` int(11) NOT NULL,
  `description` text,
  `placeId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `whattodo`
--

INSERT INTO `whattodo` (`wtdId`, `description`, `placeId`) VALUES
(531, 'natural view site', '1'),
(532, 'history knowledge', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutblogplace`
--
ALTER TABLE `aboutblogplace`
  ADD PRIMARY KEY (`blogId`,`placeId`),
  ADD KEY `placeId` (`placeId`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`amenityId`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blogId`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `blogcomment`
--
ALTER TABLE `blogcomment`
  ADD PRIMARY KEY (`commentId`),
  ADD KEY `email` (`email`),
  ADD KEY `blogId` (`blogId`);

--
-- Indexes for table `bloggellary`
--
ALTER TABLE `bloggellary`
  ADD PRIMARY KEY (`path`),
  ADD KEY `blogId` (`blogId`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`districtName`),
  ADD KEY `divisionName` (`divisionName`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`divisionName`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodId`);

--
-- Indexes for table `foodreview`
--
ALTER TABLE `foodreview`
  ADD PRIMARY KEY (`resReviewId`),
  ADD KEY `foodId` (`foodId`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `givehotelreview`
--
ALTER TABLE `givehotelreview`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotelId` (`hotelId`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `giveplacereview`
--
ALTER TABLE `giveplacereview`
  ADD PRIMARY KEY (`placeId`,`email`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`guideEmail`);

--
-- Indexes for table `guidelanguage`
--
ALTER TABLE `guidelanguage`
  ADD PRIMARY KEY (`guideEmail`,`languageName`),
  ADD KEY `languageName` (`languageName`);

--
-- Indexes for table `guideofferplace`
--
ALTER TABLE `guideofferplace`
  ADD PRIMARY KEY (`guideEmail`,`placeId`),
  ADD KEY `placeId` (`placeId`);

--
-- Indexes for table `guidereview`
--
ALTER TABLE `guidereview`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guideEmail` (`guideEmail`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotelId`),
  ADD KEY `districtName` (`districtName`),
  ADD KEY `emailAddress` (`emailAddress`);

--
-- Indexes for table `hotelamenity`
--
ALTER TABLE `hotelamenity`
  ADD PRIMARY KEY (`amenityId`,`hotelId`),
  ADD KEY `hotelId` (`hotelId`);

--
-- Indexes for table `hotelgellary`
--
ALTER TABLE `hotelgellary`
  ADD PRIMARY KEY (`path`),
  ADD KEY `hotelId` (`hotelId`);

--
-- Indexes for table `hotelowner`
--
ALTER TABLE `hotelowner`
  ADD PRIMARY KEY (`emailAddress`);

--
-- Indexes for table `hotelowner_phoneno`
--
ALTER TABLE `hotelowner_phoneno`
  ADD PRIMARY KEY (`phoneNo`,`emailAddress`),
  ADD KEY `emailAddress` (`emailAddress`);

--
-- Indexes for table `hotel_phoneno`
--
ALTER TABLE `hotel_phoneno`
  ADD PRIMARY KEY (`phoneNo`,`hotelId`),
  ADD KEY `hotelId` (`hotelId`);

--
-- Indexes for table `just`
--
ALTER TABLE `just`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`languageName`);

--
-- Indexes for table `launchdates`
--
ALTER TABLE `launchdates`
  ADD PRIMARY KEY (`packageId`,`lDate`);

--
-- Indexes for table `likedislike`
--
ALTER TABLE `likedislike`
  ADD PRIMARY KEY (`email`,`blogId`),
  ADD KEY `blogId` (`blogId`);

--
-- Indexes for table `messageguide`
--
ALTER TABLE `messageguide`
  ADD PRIMARY KEY (`email`,`guideEmail`),
  ADD KEY `guideEmail` (`guideEmail`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`packageId`),
  ADD KEY `emailAddress` (`emailAddress`);

--
-- Indexes for table `packageofferplaces`
--
ALTER TABLE `packageofferplaces`
  ADD PRIMARY KEY (`packageId`,`placeId`),
  ADD KEY `placeId` (`placeId`);

--
-- Indexes for table `packageowner`
--
ALTER TABLE `packageowner`
  ADD PRIMARY KEY (`emailAddress`);

--
-- Indexes for table `packagereview`
--
ALTER TABLE `packagereview`
  ADD PRIMARY KEY (`id`),
  ADD KEY `packageId` (`packageId`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`placeId`),
  ADD KEY `email` (`email`),
  ADD KEY `districtName` (`districtName`),
  ADD KEY `adminId` (`adminId`);

--
-- Indexes for table `placecat`
--
ALTER TABLE `placecat`
  ADD PRIMARY KEY (`placeId`,`catId`),
  ADD KEY `catId` (`catId`);

--
-- Indexes for table `placegellary`
--
ALTER TABLE `placegellary`
  ADD PRIMARY KEY (`path`),
  ADD KEY `placeId` (`placeId`);

--
-- Indexes for table `resggellary`
--
ALTER TABLE `resggellary`
  ADD PRIMARY KEY (`path`),
  ADD KEY `resId` (`resId`);

--
-- Indexes for table `resmeal`
--
ALTER TABLE `resmeal`
  ADD PRIMARY KEY (`mealId`),
  ADD KEY `resId` (`resId`);

--
-- Indexes for table `resmealfood`
--
ALTER TABLE `resmealfood`
  ADD PRIMARY KEY (`foodId`,`mealId`),
  ADD KEY `mealId` (`mealId`);

--
-- Indexes for table `resmenu`
--
ALTER TABLE `resmenu`
  ADD PRIMARY KEY (`menuId`),
  ADD KEY `resId` (`resId`);

--
-- Indexes for table `resmenufood`
--
ALTER TABLE `resmenufood`
  ADD PRIMARY KEY (`foodId`,`menuId`),
  ADD KEY `menuId` (`menuId`);

--
-- Indexes for table `resowner`
--
ALTER TABLE `resowner`
  ADD PRIMARY KEY (`emailAddress`);

--
-- Indexes for table `resowner_phoneno`
--
ALTER TABLE `resowner_phoneno`
  ADD PRIMARY KEY (`phoneNo`,`emailAddress`),
  ADD KEY `emailAddress` (`emailAddress`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`resId`),
  ADD KEY `districtName` (`districtName`),
  ADD KEY `emailAddress` (`emailAddress`);

--
-- Indexes for table `restaurent_phoneno`
--
ALTER TABLE `restaurent_phoneno`
  ADD PRIMARY KEY (`phoneNo`,`resId`),
  ADD KEY `resId` (`resId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user_phonenumber`
--
ALTER TABLE `user_phonenumber`
  ADD PRIMARY KEY (`phoneNumber`,`email`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `whattodo`
--
ALTER TABLE `whattodo`
  ADD PRIMARY KEY (`wtdId`),
  ADD KEY `placeId` (`placeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `amenityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `foodId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `just`
--
ALTER TABLE `just`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resmeal`
--
ALTER TABLE `resmeal`
  MODIFY `mealId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resmenu`
--
ALTER TABLE `resmenu`
  MODIFY `menuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `whattodo`
--
ALTER TABLE `whattodo`
  MODIFY `wtdId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=533;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aboutblogplace`
--
ALTER TABLE `aboutblogplace`
  ADD CONSTRAINT `aboutblogplace_ibfk_1` FOREIGN KEY (`placeId`) REFERENCES `place` (`placeId`),
  ADD CONSTRAINT `aboutblogplace_ibfk_2` FOREIGN KEY (`blogId`) REFERENCES `blog` (`blogId`);

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `blogcomment`
--
ALTER TABLE `blogcomment`
  ADD CONSTRAINT `blogcomment_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`),
  ADD CONSTRAINT `blogcomment_ibfk_2` FOREIGN KEY (`blogId`) REFERENCES `blog` (`blogId`);

--
-- Constraints for table `bloggellary`
--
ALTER TABLE `bloggellary`
  ADD CONSTRAINT `bloggellary_ibfk_1` FOREIGN KEY (`blogId`) REFERENCES `blog` (`blogId`);

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_ibfk_1` FOREIGN KEY (`divisionName`) REFERENCES `division` (`divisionName`);

--
-- Constraints for table `foodreview`
--
ALTER TABLE `foodreview`
  ADD CONSTRAINT `foodreview_ibfk_2` FOREIGN KEY (`email`) REFERENCES `users` (`email`),
  ADD CONSTRAINT `foodreview_ibfk_3` FOREIGN KEY (`foodId`) REFERENCES `food` (`foodId`);

--
-- Constraints for table `givehotelreview`
--
ALTER TABLE `givehotelreview`
  ADD CONSTRAINT `givehotelreview_ibfk_1` FOREIGN KEY (`hotelId`) REFERENCES `hotel` (`hotelId`),
  ADD CONSTRAINT `givehotelreview_ibfk_2` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `giveplacereview`
--
ALTER TABLE `giveplacereview`
  ADD CONSTRAINT `giveplacereview_ibfk_2` FOREIGN KEY (`email`) REFERENCES `users` (`email`),
  ADD CONSTRAINT `giveplacereview_ibfk_3` FOREIGN KEY (`placeId`) REFERENCES `place` (`placeId`);

--
-- Constraints for table `guidelanguage`
--
ALTER TABLE `guidelanguage`
  ADD CONSTRAINT `guidelanguage_ibfk_1` FOREIGN KEY (`guideEmail`) REFERENCES `guide` (`guideEmail`),
  ADD CONSTRAINT `guidelanguage_ibfk_2` FOREIGN KEY (`languageName`) REFERENCES `languages` (`languageName`);

--
-- Constraints for table `guideofferplace`
--
ALTER TABLE `guideofferplace`
  ADD CONSTRAINT `guideofferplace_ibfk_1` FOREIGN KEY (`guideEmail`) REFERENCES `guide` (`guideEmail`),
  ADD CONSTRAINT `guideofferplace_ibfk_2` FOREIGN KEY (`placeId`) REFERENCES `place` (`placeId`);

--
-- Constraints for table `guidereview`
--
ALTER TABLE `guidereview`
  ADD CONSTRAINT `guidereview_ibfk_1` FOREIGN KEY (`guideEmail`) REFERENCES `guide` (`guideEmail`),
  ADD CONSTRAINT `guidereview_ibfk_2` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`districtName`) REFERENCES `district` (`districtName`),
  ADD CONSTRAINT `hotel_ibfk_2` FOREIGN KEY (`emailAddress`) REFERENCES `hotelowner` (`emailAddress`);

--
-- Constraints for table `hotelamenity`
--
ALTER TABLE `hotelamenity`
  ADD CONSTRAINT `hotelamenity_ibfk_1` FOREIGN KEY (`hotelId`) REFERENCES `hotel` (`hotelId`),
  ADD CONSTRAINT `hotelamenity_ibfk_2` FOREIGN KEY (`amenityId`) REFERENCES `amenities` (`amenityId`);

--
-- Constraints for table `hotelgellary`
--
ALTER TABLE `hotelgellary`
  ADD CONSTRAINT `hotelgellary_ibfk_1` FOREIGN KEY (`hotelId`) REFERENCES `hotel` (`hotelId`);

--
-- Constraints for table `hotelowner_phoneno`
--
ALTER TABLE `hotelowner_phoneno`
  ADD CONSTRAINT `hotelowner_phoneno_ibfk_1` FOREIGN KEY (`emailAddress`) REFERENCES `hotelowner` (`emailAddress`);

--
-- Constraints for table `hotel_phoneno`
--
ALTER TABLE `hotel_phoneno`
  ADD CONSTRAINT `hotel_phoneno_ibfk_1` FOREIGN KEY (`hotelId`) REFERENCES `hotel` (`hotelId`);

--
-- Constraints for table `launchdates`
--
ALTER TABLE `launchdates`
  ADD CONSTRAINT `launchdates_ibfk_1` FOREIGN KEY (`packageId`) REFERENCES `package` (`packageId`);

--
-- Constraints for table `likedislike`
--
ALTER TABLE `likedislike`
  ADD CONSTRAINT `likedislike_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`),
  ADD CONSTRAINT `likedislike_ibfk_2` FOREIGN KEY (`blogId`) REFERENCES `blog` (`blogId`);

--
-- Constraints for table `messageguide`
--
ALTER TABLE `messageguide`
  ADD CONSTRAINT `messageguide_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`),
  ADD CONSTRAINT `messageguide_ibfk_2` FOREIGN KEY (`guideEmail`) REFERENCES `guide` (`guideEmail`);

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `package_ibfk_1` FOREIGN KEY (`emailAddress`) REFERENCES `packageowner` (`emailAddress`);

--
-- Constraints for table `packageofferplaces`
--
ALTER TABLE `packageofferplaces`
  ADD CONSTRAINT `packageofferplaces_ibfk_2` FOREIGN KEY (`packageId`) REFERENCES `package` (`packageId`),
  ADD CONSTRAINT `packageofferplaces_ibfk_3` FOREIGN KEY (`placeId`) REFERENCES `place` (`placeId`);

--
-- Constraints for table `packagereview`
--
ALTER TABLE `packagereview`
  ADD CONSTRAINT `packagereview_ibfk_1` FOREIGN KEY (`packageId`) REFERENCES `package` (`packageId`),
  ADD CONSTRAINT `packagereview_ibfk_2` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `place`
--
ALTER TABLE `place`
  ADD CONSTRAINT `place_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`),
  ADD CONSTRAINT `place_ibfk_2` FOREIGN KEY (`districtName`) REFERENCES `district` (`districtName`),
  ADD CONSTRAINT `place_ibfk_3` FOREIGN KEY (`adminId`) REFERENCES `admin` (`adminId`);

--
-- Constraints for table `placecat`
--
ALTER TABLE `placecat`
  ADD CONSTRAINT `placecat_ibfk_3` FOREIGN KEY (`placeId`) REFERENCES `place` (`placeId`),
  ADD CONSTRAINT `placecat_ibfk_4` FOREIGN KEY (`catId`) REFERENCES `catagory` (`catId`);

--
-- Constraints for table `placegellary`
--
ALTER TABLE `placegellary`
  ADD CONSTRAINT `placegellary_ibfk_1` FOREIGN KEY (`placeId`) REFERENCES `place` (`placeId`);

--
-- Constraints for table `resggellary`
--
ALTER TABLE `resggellary`
  ADD CONSTRAINT `resggellary_ibfk_1` FOREIGN KEY (`resId`) REFERENCES `restaurant` (`resId`);

--
-- Constraints for table `resmeal`
--
ALTER TABLE `resmeal`
  ADD CONSTRAINT `resmeal_ibfk_1` FOREIGN KEY (`resId`) REFERENCES `restaurant` (`resId`);

--
-- Constraints for table `resmealfood`
--
ALTER TABLE `resmealfood`
  ADD CONSTRAINT `resmealfood_ibfk_1` FOREIGN KEY (`foodId`) REFERENCES `food` (`foodId`),
  ADD CONSTRAINT `resmealfood_ibfk_2` FOREIGN KEY (`mealId`) REFERENCES `resmeal` (`mealId`);

--
-- Constraints for table `resmenu`
--
ALTER TABLE `resmenu`
  ADD CONSTRAINT `resmenu_ibfk_1` FOREIGN KEY (`resId`) REFERENCES `restaurant` (`resId`);

--
-- Constraints for table `resmenufood`
--
ALTER TABLE `resmenufood`
  ADD CONSTRAINT `resmenufood_ibfk_1` FOREIGN KEY (`foodId`) REFERENCES `food` (`foodId`),
  ADD CONSTRAINT `resmenufood_ibfk_2` FOREIGN KEY (`menuId`) REFERENCES `resmenu` (`menuId`);

--
-- Constraints for table `resowner_phoneno`
--
ALTER TABLE `resowner_phoneno`
  ADD CONSTRAINT `resowner_phoneno_ibfk_1` FOREIGN KEY (`emailAddress`) REFERENCES `resowner` (`emailAddress`);

--
-- Constraints for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `restaurant_ibfk_1` FOREIGN KEY (`emailAddress`) REFERENCES `resowner` (`emailAddress`),
  ADD CONSTRAINT `restaurant_ibfk_2` FOREIGN KEY (`districtName`) REFERENCES `district` (`districtName`);

--
-- Constraints for table `restaurent_phoneno`
--
ALTER TABLE `restaurent_phoneno`
  ADD CONSTRAINT `restaurent_phoneno_ibfk_1` FOREIGN KEY (`resId`) REFERENCES `restaurant` (`resId`);

--
-- Constraints for table `user_phonenumber`
--
ALTER TABLE `user_phonenumber`
  ADD CONSTRAINT `user_phonenumber_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `whattodo`
--
ALTER TABLE `whattodo`
  ADD CONSTRAINT `whattodo_ibfk_1` FOREIGN KEY (`placeId`) REFERENCES `place` (`placeId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
