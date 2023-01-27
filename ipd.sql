-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 19, 2022 at 03:16 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipd`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `catid` int(11) NOT NULL AUTO_INCREMENT,
  `catname` varchar(50) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`) VALUES
(1, 'Comedy'),
(2, 'Horror'),
(3, 'Science Fiction'),
(4, 'Documentary'),
(5, 'Fantasy');

-- --------------------------------------------------------

--
-- Table structure for table `favouritelist`
--

DROP TABLE IF EXISTS `favouritelist`;
CREATE TABLE IF NOT EXISTS `favouritelist` (
  `favid` int(11) NOT NULL AUTO_INCREMENT,
  `contentid` int(11) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `listname` varchar(50) NOT NULL DEFAULT 'Main',
  PRIMARY KEY (`favid`)
) ENGINE=MyISAM AUTO_INCREMENT=153 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favouritelist`
--

INSERT INTO `favouritelist` (`favid`, `contentid`, `userid`, `listname`) VALUES
(117, 13, 'Tiger', 'Main'),
(129, 5, 'Mary', 'other'),
(130, 7, 'Mary', 'other'),
(148, 3, 'John', 'Main'),
(132, 15, 'Mary', 'Main'),
(124, 10, 'Mary', 'Main'),
(133, 23, 'Mary', 'Main'),
(134, 9, 'Mary', 'other'),
(137, 5, 'Tiger', 'Main'),
(138, 7, 'Tiger', 'Main'),
(152, 7, 'kai', 'other'),
(140, 14, 'Tiger', 'other'),
(142, 5, 'James', 'other'),
(143, 10, 'James', 'Main'),
(146, 1, 'John', 'other'),
(145, 23, 'James', 'Main'),
(150, 3, 'kai', 'Main'),
(151, 5, 'kai', 'Main');

-- --------------------------------------------------------

--
-- Table structure for table `masterlist`
--

DROP TABLE IF EXISTS `masterlist`;
CREATE TABLE IF NOT EXISTS `masterlist` (
  `contentid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `video` text NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`contentid`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masterlist`
--

INSERT INTO `masterlist` (`contentid`, `title`, `video`, `description`, `category`) VALUES
(1, 'Sonic the Hedgehog', '<iframe width=\"100%\" src=\"https://www.youtube.com/embed/G5kzUpWAusI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'A small-town sheriff helps an alien hedgehog with supersonic speed outrun a mad doctor who wants the creature\'s special powers to dominate the world.\r\n\r\nDirected By: Jeff Fowler\r\n\r\nproduced By: Toby Ascher \r\n\r\nCast: James Marsden', 'Comedy'),
(2, 'The Angry Birds Movie 2', '<iframe width=\"100%\"  src=\"https://www.youtube.com/embed/RSKQ-lVsMdg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Enemies turn into frenemies when the Pigs call for a truce with the Birds to unite against a formidable new foe that\'s threatening all of their homes.\r\nStarring: Jason Sudeikis\r\n\r\nDirected By: Thurop Van Orman \r\n\r\nproduced By: John Cohen\r\n', 'Comedy'),
(3, 'Baymax!', '<iframe width=\"100%\" src=\"https://www.youtube.com/embed/lcYPrMk12zw\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Walt Disney Animation Studios\' \"Baymax!\"  returns to the fantastical city of San Fransokyo where the affable, inflatable, inimitable healthcare companion, Baymax  sets out to do what he was programmed to do: help others.\r\n\r\n', 'Comedy'),
(4, 'Madagascar', '<iframe width=\"100%\"  src=\"https://www.youtube.com/embed/fq5zU9T_Hl4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'When the ship they\'re on capsizes, a lion, zebra, giraffe and hippo from a zoo become stranded on Madagascar, an island populated by oddballs.\r\n\r\nDirected By:  Tom McGrath, Eric Darnell\r\n\r\nProduced By: Mireille Soria\r\n\r\nCast: Ben Stiller\r\n', 'Comedy'),
(5, 'Long Long Time Ago 3: The Diam Diam Era', '<iframe width=\"100%\"  src=\"https://www.youtube.com/embed/f_vMu_aG0js\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'In the \'70s and \'80s, the second generation of the Lim family reckons with a generational gap amid social change and education reforms in Singapore.\r\n\r\ndirected By: Jack Neo\r\n\r\nproduced By: MM2 Entertainment\r\n\r\ncast: Mark Lee', 'Comedy'),
(6, 'Incantation', '<iframe width=\"100%\" src=\"https://www.youtube.com/embed/HnyNZdcL_GY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Six years ago, Li Ronan was cursed after breaking a religious taboo. Now, she must protect her daughter from the consequences of her actions.\r\n\r\nproduced By: Kevin Ko, Hsu-fen Yang, Jacys Cheng-Yu Lin\r\n\r\ndirected By: Kevin Ko\r\n\r\ncast: Tsai Hsuan-yen', 'Horror'),
(7, 'Sinister', '<iframe width=\"100%\"src=\"https://www.youtube.com/embed/fKewkAww5Ko\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'A true-crime writer discovers a cache of videotapes depicting several brutal murders that took place in the very house he just bought.\r\n\r\nproduced By: Jason Blum\r\nBrian Kavanaugh-Jones\r\n\r\nDirected  By: Scott Derrickson\r\n\r\ncast: Ethan Hawke', 'Horror'),
(8, 'The Unholy', '<iframe width=\"100%\" src=\"https://www.youtube.com/embed/d1jT4yYad5U\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'A teen develops an ability to heal and attributes it to the Virgin Mary. But it becomes clear that the entity behind the miracle is far from divine.\r\n\r\nProduced By: Sam Raimi,Rob Tapert,Evan Spiliotopoulos\r\n\r\nDirected By: Evan Spiliotopoulos\r\n\r\nCast: Jeffrey Dean Morgan', 'Horror'),
(9, 'No One Gets Out Alive', '<iframe width=\"100%\" src=\"https://www.youtube.com/embed/sY2TLiK27g4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Desperate and without documentation, a woman from Mexico moves into a rundown Cleveland boardinghouse. Then the unsettling cries and eerie visions begin.\r\n\r\nProduced By: Jonathan Cavendish\r\n\r\nDirected By: Santiago Menghini\r\n', 'Horror'),
(10, 'Doctor Sleep', '<iframe width=\"100%\" src=\"https://www.youtube.com/embed/CDf_EnIhojk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'In this sequel to \"The Shining,\" Danny, now a traumatized adult, is sought out by a young psychic as evil beings that feed on their powers close in.\r\n\r\nproduced By: Stephen King, Jon Berg, Trevor Macy\r\n\r\nDirected By: Mike Flanagan', 'Horror'),
(11, 'Spider-Man: No Way Home', '<iframe width=\"100%\" src=\"https://www.youtube.com/embed/rt-2cxAiPJk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'When his loved ones are put at risk, Peter Parker asks Doctor Strange to restore his secret - and accidentally sets off a disaster of epic proportions.\r\n\r\nDirected By: Jon Watts\r\n\r\nProduced By: Kevin Feige, Amy Pascal', 'Science Fiction'),
(12, 'Jumanji: The Next Level', '<iframe width=\"100%\" src=\"https://www.youtube.com/embed/rBxcF-r9Ibs\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'When Spencer goes missing, Martha, Bethany and Fridge realize they must go back into Jumanji to find him - but something goes wrong.\r\nProduced By: Dwayne Johnson\r\n\r\nDirected by Jake Kasdan\r\n\r\nCast: Dwayne Johnson', 'Science Fiction'),
(13, 'Transformers', '<iframe width=\"100%\" src=\"https://www.youtube.com/embed/dxQxgAfNzyE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'As the Autobots and the Decepticons struggle for control of Earth\'s resources, young Sam Witwicky is unaware he is mankind\'s only hope for survival.\r\n\r\nproduced By: Lorenzo di Bonaventura\r\n\r\nDirected By: Steven Caple Jr.\r\n\r\n\r\n\r\n', 'Science Fiction'),
(14, 'In Time', '<iframe width=\"100%\" src=\"https://www.youtube.com/embed/YRSBiTF3wNw\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'In a near future where no one ages and time is the new currency, a man becomes a suspect when he inherits decades from a wealthy murder victim.\r\n\r\nProduced By: Andrew Niccol\r\n\r\ndirected by : Andrew Niccol\r\n\r\nCast: Justin Timberlake', 'Science Fiction'),
(15, 'Nightbooks', '<iframe width=\"100%\" src=\"https://www.youtube.com/embed/aQO16k5Vdow\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Scary story fan Alex must tell a spine-tingling tale every night - or stay trapped with his new friend in a wicked witch\'s magical apartment forever.\r\n\r\nDirected By : David Yarovesky\r\n\r\nProduced By: Sam Raimi\r\n\r\nCast: Winslow Fegley', 'Science Fiction'),
(16, 'Street Food: Asia producers', '<iframe width=\"100%\" src=\"https://www.youtube.com/embed/eI_LjETc_Ak\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Embark on a global cultural journey into street food and discover the stories of the people who create the flavorful dishes.\r\n\r\nProduced By: Tamara Rosenfeld\r\n\r\nDirected By: David Gelb\r\n\r\n', 'Documentary'),
(17, 'The Last Dance', '<iframe width=\"100%\" src=\"https://www.youtube.com/embed/JQk2hJs2ToA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'This docuseries chronicles the rise of superstar Michael Jordan and the 1990s Chicago Bulls, with unaired footage from an unforgettable 1997-98 season.\r\n\r\nDirected By: Jason Hehir', 'Documentary'),
(18, 'Somebody Feed Phil', '<iframe width=\"100%\" src=\"https://www.youtube.com/embed/6pqKsA6FQVc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '\"Everybody Loves Raymond\" creator Phil Rosenthal travels the globe to take in the local cuisine and culture of Bangkok, Lisbon, Mexico City and more.\r\nDirected By: John Bedolis', 'Documentary'),
(19, 'The Speed Cubers', '<iframe width=\"100%\" src=\"https://www.youtube.com/embed/-wrTIWx_Z6k\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'This documentary captures the extraordinary twists and turns in the journeys of Rubik\'s Cube-solving champions Max Park and Feliks Zemdegs.\r\n\r\nDirected By: Sue Kim\r\n', 'Documentary'),
(20, 'BLACKPINK: Light Up the Sky', '<iframe width=\"100%\" src=\"https://www.youtube.com/embed/7jx_vdvxWu0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Record-shattering Korean girl band BLACKPINK tell their story - and detail the hard-fought journey of the dreams and trials behind their meteoric rise.\r\n', 'Documentary'),
(22, 'Goosebumps', '<iframe width=\"100%\" src=\"https://www.youtube.com/embed/7Cn716jv61s\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n', 'A teen is glum about moving to a small town until he falls for his new neighbor. But her dad is a horror writer whose scary world soon turns real.\r\n\r\nProduced By: Neal H. Moritz,Bill Bannerman, Deborah Forte\r\n', 'Fantasy'),
(23, 'The Mermaid', '<iframe width=\"100%\" src=\"https://www.youtube.com/embed/85Qfwwlo4bw\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'When egocentric tycoon Xuan\'s plans for a pristine ocean reserve threaten the merpeople living there, comely mermaid Shan is sent to ice him.\r\n\r\nProduced By:  John Musker\r\n\r\nDirected By: Stephen Chow\r\n\r\nCast: Deng Chao', 'Fantasy'),
(24, 'The Sea Beast', '<iframe width=\"100%\"  src=\"https://www.youtube.com/embed/P-E-IGQCsPo\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'When a young girl stows away on the ship of a legendary sea monster hunter, they launch an epic journey into uncharted waters - and make history to boot.\r\n\r\nProduced By: Chris Williams\r\n\r\nDirected By: Chris Williams\r\n\r\ncast: Karl Urban', 'Fantasy'),
(25, 'Night Teeth', '<iframe width=\"100%\"  src=\"https://www.youtube.com/embed/ZNu-G-rd4H4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'A young driver picks up two mysterious women for a night of party hopping. But when his passengers reveal their true nature, he must fight to stay alive.\r\n\r\nDirected By: Adam Randall\r\n\r\n\r\nProduced By: Ben Pugh', 'Fantasy'),
(26, 'Thor: Love and Thunder', '<iframe width=\"100%\" src=\"https://www.youtube.com/embed/Go8nTmfrQd8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Thor enlists the help of Valkyrie, Korg and ex-girlfriend Jane Foster to fight Gorr the God Butcher, who intends to make the gods extinct.\r\nDirector: Taika Waititi\r\nWriters: Taika Waititi(story by)\r\n\r\nCast:\r\nChris Hemsworth', 'Fantasy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `email`, `password`) VALUES
('fluer', 'T@gmail.com ', '12345678!'),
('Tiger', 'tiger@gmail.com', 'P@55w0rd123'),
('Mary', 'mary@yahoo.com                    ', 'P@55w0rd'),
('Si Yun', '1123@gmail.com', '12345678'),
('Kai', '12@456.com ', 'P@55w0rd'),
('James', 'James@gmail.com', 'P@55w0rd'),
('John', 'joh2n@gmail.com  ', 'P@55w0rd'),
('Joan', 'joa5n@gmail.com ', 'P@55w0rd123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
