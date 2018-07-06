-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2018 at 03:23 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `affordableartfest`
--

-- --------------------------------------------------------

--
-- Table structure for table `mog_admin`
--

DROP TABLE IF EXISTS `mog_admin`;
CREATE TABLE IF NOT EXISTS `mog_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `admin_id` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mog_admin`
--

INSERT INTO `mog_admin` (`id`, `Name`, `admin_id`, `password`) VALUES
(1, 'Sanket gaonkar', 'sanket9227@gmail.com', '71f29ad85c3f0c7068e9904908cb2470');

-- --------------------------------------------------------

--
-- Table structure for table `mog_artist`
--

DROP TABLE IF EXISTS `mog_artist`;
CREATE TABLE IF NOT EXISTS `mog_artist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `sort_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mog_artist`
--

INSERT INTO `mog_artist` (`id`, `Name`, `Description`, `image`, `sort_order`) VALUES
(2, 'Siddharth Kerkar', 'Siddharth is an Indian artist creating art since the young age of nine. A majority of his work has been abstract paintings which are in response to landscapes seen from a birds-eye view, whereas the sculptures he creates are often made with found materials he uses to make conceptual works. His ideas find expression in the form of painting, video, installation and sculpture. His work has been featured in several galleries in India as well as in galleries internationally. He has also been a part of art fairs like Art Bengaluru, India and Algarve Artist Network art fair , Portugal.', 'kerkar.jpg', 2),
(1, 'Sanket gaonkar', '\r\nA text message as it appears on the display screen of an iPhone before iOS 7.\r\nText messaging, or texting, is the act of composing and sending electronic messages, typically consisting of alphabetic and numeric characters, between two or more users of mobile phones, tablets, desktops/laptops, or other devices. Text messages may be sent over a cellular network, or may also be sent via an Internet connection.\r\n\r\nThe term originally referred to messages sent using the Short Message Service (SMS). It has grown beyond alphanumeric text to include multimedia messages (known as MMS) containing digital images, videos, and sound content, as well as ideograms known as emoji (happy faces, sad faces, and other icons).', 'sanket.jpeg', 1),
(3, 'Lalit likhare', 'As of 2017, text messages are used by youth and adults for personal, family and social purposes and in business. Governmental and non-governmental organizations use text messaging for communication between colleagues. As with emailing, in the 2010s, the sending of short informal messages has become an accepted part of many cultures.[1] This makes texting a quick and easy way to communicate with friends and colleagues, including in contexts where a call would be impolite or inappropriate (e.g., calling very late at night or when one knows the other person is busy with family or work activities). Like e-mail and voice mail, and unlike calls (in which the caller hopes to speak directly with the recipient), texting does not require the caller and recipient to both be free at the same moment; this permits communication even between busy individuals. Text messages can also be used to interact with automated systems, for example, to order products or services from e-commerce websites, or to participate in online contests. Advertisers and service providers use direct text marketing to send messages to mobile users about promotions, payment due dates, and other notifications instead of using postal mail, email, or voicemail.', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mog_artist_images`
--

DROP TABLE IF EXISTS `mog_artist_images`;
CREATE TABLE IF NOT EXISTS `mog_artist_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Medium` varchar(50) NOT NULL DEFAULT '-',
  `Size` decimal(10,2) NOT NULL DEFAULT '0.00',
  `Year` int(11) NOT NULL DEFAULT '0',
  `Weight` varchar(20) NOT NULL,
  `sort_order` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `artist_id` (`artist_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mog_artist_images`
--

INSERT INTO `mog_artist_images` (`id`, `artist_id`, `category_id`, `Name`, `Description`, `image`, `Price`, `Medium`, `Size`, `Year`, `Weight`, `sort_order`) VALUES
(1, 1, 1, 'Bullock', 'The sky has no borders. Skies of all the countries are continuous. The wind requires no VISA''s to flow from one country to another. Everyone irrespective of nationality, caste, creed, colour or race breathes the same air. Air binds and connects the world. My many mouthed balloon is a symbol of human connectivity through air. It''s also a symbol of unity and connectedness which contribute to making of human civilisation. Human civilisation is a many mouthed balloon, many have contributed to it. ', 'img1.jpg', '0.00', '', '0.00', 0, '0.00', 3),
(2, 1, 2, 'Catapiller', 'Goa is known for its churches. Every bend in the road in the smallest villages, even the busiest city thorough fares are dotted with churches, ranging from the tiny chapel to the ornate and impressively overwhelming cathedrals. Bells are an integral of our church architecture.  Everyone in Goa grows up with their near or distant chimes: to announce birth, deaths or christening or to issue a call to mass. Bells are not just the prerogative of churches though for Hindu devotees in temples also use the ringing of bells as part of their prayer ritual. Yet the style peal of a bell ringing at a church service are distinctively different from those we hear at a temple. I have created a bell using recycled material (rubber tyres, saw dust). Every time you hit the dong a new tune is heard. Twenty five different tunes are fed into the bell and play at random. The unpredictable ringing of the bell represents all the unexpected events in history.', 'img2.jpg', '0.00', '', '0.00', 0, '0.00', 2),
(3, 1, 1, 'Rhinisorous', 'The sky has no borders. Skies of all the countries are continuous. The wind requires no VISA''s to flow from one country to another. Everyone irrespective of nationality, caste, creed, colour or race breathes the same air. Air binds and connects the world. My many mouthed balloon is a symbol of human connectivity through air. It''s also a symbol of unity and connectedness which contribute to making of human civilisation. Human civilisation is a many mouthed balloon, many have contributed to it. The colour indigo has charmed the world for centuries. The dye is extracted from a plant called Indigofera Tinctoria and related species. India has grown indigo ever since the Indus valley civilization (2,000 BC). The pigment was exported to Europe already during the Greco-Roman period. In Europe, a similar pigment, but not as intense, was extracted from the woad plant. Woad farmers in Europe even agitated to force their Governments to ban the import of Indian indigo.  Indigo was an important cargo on the caravels that sailed to the West through the blue waters of the Indian Ocean. The ocean brought many fruits and vegetables to Indian shores - chillies, cashew, capsicum, potatoes and pineapple amongst others.  The father of our nation, Gandhiji returned to India in 1915 from South Africa. The first Satyagraha he offered was in support of the indigo workers in Champaran in Bihar.', 'img3.jpg', '0.00', '', '0.00', 0, '0.00', 5),
(4, 1, 2, 'Cat', 'In 1560, a Portuguese caravel was passing by the island of Madagascar. Here is a noting from the log-book of the ship.  ‘We saw a sunset on the wrong side of the sky and at the wrong time of the day. We disembarked and stood in awe in front of this flame red tree’. This was the first time that a European saw the Gulmohar tree. The Portuguese carried the seeds to new shores. Today, Gulmohar is seen in all tropical and sub-tropical countries.  In Goa, the locals call it ‘Kombyache Zhad’ (the tree of the rooster).', 'img4.jpg', '0.00', '', '0.00', 0, '0.00', 1),
(5, 1, 2, 'Scottish', '‘Torrom’ is a log of wood which is used to push the boat into the ocean. The fishermen apply cashew sap to the logs as a lubricant to facilitate easy movement of the boats. Over years, the logs develop wonderful grooves with the movement of the boats. The story of hundreds of launches of fishing boats into the ocean is embedded in torroms.  I have created my work using old Chinese soup spoons and an old bamboo which had drifted on the beach. The ceramic Chinese spoons are in memory of Chinese treasure ships which visited the Indian coast in the first half of the 15th century, much before Vasco-da-Gama.', 'img5.jpg', '0.00', '', '0.00', 0, '0.00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `mog_category`
--

DROP TABLE IF EXISTS `mog_category`;
CREATE TABLE IF NOT EXISTS `mog_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `sort_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mog_category`
--

INSERT INTO `mog_category` (`id`, `Name`, `sort_order`) VALUES
(2, 'Landscape', 2),
(1, 'Potrait', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mog_files`
--

DROP TABLE IF EXISTS `mog_files`;
CREATE TABLE IF NOT EXISTS `mog_files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mog_gaaf`
--

DROP TABLE IF EXISTS `mog_gaaf`;
CREATE TABLE IF NOT EXISTS `mog_gaaf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `sort_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mog_gaaf`
--

INSERT INTO `mog_gaaf` (`id`, `Name`, `image`, `sort_order`) VALUES
(1, 'Sanket Gaonkar', 'Penguins1.jpg', 1),
(3, 'lalit', 'Tulips.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mog_partners_sponsors`
--

DROP TABLE IF EXISTS `mog_partners_sponsors`;
CREATE TABLE IF NOT EXISTS `mog_partners_sponsors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Level` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mog_partners_sponsors`
--

INSERT INTO `mog_partners_sponsors` (`id`, `Title`, `Name`, `image`, `Description`, `Level`, `sort_order`) VALUES
(1, 'I dnno', 'Sanket Gaonkar', 'Koala1.jpg', 'Hardworking man with real steel', 1, 1),
(2, 'I dnno', 'lalit likhare', 'sanket.jpeg', 'the words of something (such as a poem) set to music', 2, 2),
(3, 'I dnno', 'sayeesh simepude', 'Penguins.jpg', 'b : matter chiefly in the form of words or symbols that is treated as data for processing by computerized equipment text-editing software', 2, 1),
(4, 'I dnno', 'sanesh gaonkar', 'sanket.jpeg', 'b : matter chiefly in the form of words or symbols that is treated as data for processing by computerized equipment text-editing software', 2, 3),
(5, 'abc xyz', 'abc xyz', 'sanket.jpeg', '', 3, 1),
(6, 'abc xyz', 'abc xyz', 'sanket.jpeg', '', 3, 3),
(7, 'abc xyz', 'abc xyz', 'sanket.jpeg', '', 3, 2),
(8, 'I dnno', 'sanesh gaonkar', 'sanket.jpeg', '', 4, 2),
(9, 'I dnno', 'sanket gaonkar', 'sanket.jpeg', '', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mog_publications`
--

DROP TABLE IF EXISTS `mog_publications`;
CREATE TABLE IF NOT EXISTS `mog_publications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Link` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `sort_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mog_publications`
--

INSERT INTO `mog_publications` (`id`, `Link`, `Description`, `image`, `Date`, `sort_order`) VALUES
(1, 'http://localhost/affordableartfest/home/publications', 'Had fun at red carpet', 'Chrysanthemum.jpg', '2018-07-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mog_team`
--

DROP TABLE IF EXISTS `mog_team`;
CREATE TABLE IF NOT EXISTS `mog_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `sort_order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mog_team`
--

INSERT INTO `mog_team` (`id`, `Name`, `Designation`, `Description`, `image`, `sort_order`) VALUES
(1, 'Dr. Subodh Kerkar', 'Co Founder GAAF', 'Subodh Kerkar was born in a small picturesque village of Keri on the Northern border of Goa in 1959. A qualified medical professional who gave up medicine to pursue arts 27 years ago, he has carved a niche for himself, especially in the field of conceptual art and land art. He is the founding director of Museum of Goa which is one of the largest privately owned contemporary art spaces in India. He has exhibited in India and in other parts of the world, in galleries and museums; apart from which he has also participated in a number of other shows, and has also lectured on art worldwide, including at UCL, and Van Gogh Museum, Amsterdam.', 'team.jpg', 1),
(2, 'Siddharth Kerkar ', 'Co Founder GAAF', 'Currently studying Fine Art & Design at Central Saint Martins, London; Siddharth grew up in Porvorim, Goa. He has been a part of Art Bengaluru, India and Algarve Artist Network Art Fair, South Portugal. He manages several projects at MOG and also creates various abstract artworks. He likes to travel and also explore new art materials and textures.', 'team.jpg', 2),
(3, 'Aditi B. Rakhe', 'Project Manager', 'Studied Commerce in DMC College, Goa; Carmine grew up in Candolim, Goa. Carmine has been associated for more than 20 years with Kerkar Art Complex, an art gallery started prior to MOG. At MOG, she works as a General Administrator. She loves listening to music and feasting on Goan cuisine. You can write to her at carmineformog@gmail.com', 'team.jpg', 3),
(4, 'Joaquim Mendes', 'Graphic Designer', '<p>Studied Computer Science &amp; Networking in Polytechnic University of Odessa; </p><p>Dmytrov grew up in Ukraine. He is the co-founder of Pixelated Realities, a public non-profit organization that is engaged in Virtual Reality and Architecture. </p><p>At <b>MOG</b>, he works as the Digital Artist for various projects of the Museum. He has an interest in 3D scanning, 3D printing, Virtual Reality, Film Making and Photography.</p>', 'Koala1.jpg', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
