-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 16, 2017 at 05:59 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relic`
--

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE IF NOT EXISTS `characters` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `player` varchar(50) COLLATE utf8_bin NOT NULL,
  `level` varchar(50) COLLATE utf8_bin NOT NULL,
  `race` varchar(50) COLLATE utf8_bin NOT NULL,
  `stats` text COLLATE utf8_bin NOT NULL,
  `inventory` text COLLATE utf8_bin NOT NULL,
  `backstory` text COLLATE utf8_bin NOT NULL,
  `pic` varchar(50) COLLATE utf8_bin NOT NULL,
  `adventure` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`id`, `name`, `player`, `level`, `race`, `stats`, `inventory`, `backstory`, `pic`, `adventure`) VALUES
(1, 'Gatak', 'StevieG123', 'Level 30', 'Corian', 'strength 40 <br>\r\ndexterity 35 <br>\r\nposture 9 <br>', '1 beating stick <br>\r\n2 eggplants <br>\r\n45 bottles of mead <br>', 'Gatak lorem ipsum dolor sit amet. Consectetur avit', 'images/corian.png', 'Gatak was escaping from the Blood plains where he was raised when he came across a new ally, Arenoodle. Together they are searching for the great Holy sword so that Gatak can afford law school'),
(2, 'AreNoogette', '1337', '107', 'Fen', 'Sharp Teeth <br>\r\nAlways Drunk <br>\r\nPunches Hard <br>\r\nTrips <br>\r\nEmpath <br>\r\nShrill Screaming <br>', '2 battleaxes <br>\r\n3 short daggers <br>\r\n1 uxpin users guide <br>', 'He started as a small bearcub wandering the wilds of Coriath. His tribe was wiped out by a band of ravagers and he is the sole survivor. He was later adopted by another fen by the name of Bean.', 'images/fen.png', 'Arenoodle is venturing across the blood plains of Squalash to reclaim the holy sword Dux'),
(3, 'pippin', 'StevieG 123', 'Level 5', 'ded', 'all the stats', 'Yes', 'hes ded', 'images/vamp.png', 'goin on some adventures bois'),
(4, 'Benhamine', 'StevieG 123', 'Level 5', 'eld', 'charisma 20 <br> Health 2<br> Death 42', 'Two Bananas<br> A small sour <br> french fried', 'Benhamine was born in the southern province of italy in the year of our lored 19999. He quickly realized that he had a proficiency for magic. Thus he set off on his quest to become the greatest magician he could be.', 'images/eld.png', 'Currently Benhamine is in a campaign where the group must fight off hordes of goblins. They had just defeated the goblin king before he announced the heir to his throne');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
