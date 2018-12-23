-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 11, 2018 at 10:59 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donate`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertblog` (IN `t` VARCHAR(255), IN `c` VARCHAR(255), IN `p` VARCHAR(255), IN `n` VARCHAR(255), IN `d` DATE, IN `e` VARCHAR(255))  NO SQL
INSERT INTO blog (title,content,b_img,name,date,b_email)
VALUES (t,c,p,n,d,e)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `b_id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `b_img` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `b_email` varchar(50) NOT NULL,
  `status` int(5) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`b_id`, `title`, `content`, `b_img`, `name`, `date`, `b_email`, `status`) VALUES
(40, ';ofha;.kb', 'shsdh l lflasgf;wiflasgf; a; a gfkgfkgf ksdhflljgfl', '5bdf25b7b63527.18053127.jpg', 'asds', '2018-11-02', 'asd@sd.com', 1),
(35, 'THE REAL WONDER WOMAN: SELINA JUUL', 'The beginning :  Selina Juul was born on March 7th 1980 in Moscow, Russia and moved to Denmark when she was 13 years old. She has a BA in Graphic Design from Denmark\'s School of Media and Journalism (former Graphic Arts Institute of Denmark). Selina has owned and operated her own business as an independent Illustrator and Graphic Designer since 2002. \nThe Stop Wasting Food movement\nEnvironmental sustainability and global responsibility have always been matters close to her heart, so in 2008 Selina Juul founded the Stop Wasting Food movement Denmark (Stop Spild Af Mad). At the present, Selina weekly puts about 40 hours of voluntary work into the movement, but the fight to minimize food waste is spreading, and new exciting challenges arise all the time.\n\nStop Wasting Food is Denmark\'s largest non-profit consumer movement against food waste. Set up by consumers for consumers, Stop Wasting Food is an NGO that has constructively shaped public opinion in its drive to prevent food waste. It seeks to increase public awareness of the throwaway society by organizing campaigns, mobilizing the press and media, and encouraging discussion, debate and events of all kinds, all with the aim of decreasing the current mountains of food waste. Stop Wasting Food is empowering the consumers to take action and urges them to launch individual initiatives such as reducing their own food waste, cooking leftovers, shopping more wisely and distributing surplus food to shelters for the homeless. See more results and achievements of Stop Wasting Food is Denmark\'s work here.   Strong support by leading politicians and food personalities\nSeveral thousands of Danish consumers, politicians, MP\'s and MEP\'s as well as leading Danish food personalities support Stop Wasting Food movement - as well as Denmark\'s former Prime Minister Mr. Poul Nyrup Rasmussen.  UN, EU and the Government\nStop Wasting Food is mentioned in the Food and Agriculture Organization of the United Nations (FAO)\'s international report on food waste \"Global Food Losses and Food Waste\", is a co-developer of the Joint Declaration Against Food Waste, which inspired the EU resolution against food waste and is among the signatories to the Danish Minister for the Environment\'s Charter Against Food Waste. Stop Wasting Food is appointed a seat in the Initiative Group Against Food Waste under the Danish Minister for the Environment.  Food waste on the agenda\nStop Wasting Food continues to put food waste on the agenda. The organisation has established itself as Denmark\'s leading expert on food waste and has appeared in numerous articles, radio and TV shows: 18.000+ articles in newspapers and magazines, as well as more than 100+ radio and 157 TV appearances. Among them BBC News and German TV channel ARTE. In the short time the movement has existed, the discourse regarding food waste in Denmark has changed from a rather uninformed indifference to one of heightened awareness. Among the many results, Stop Wasting Food inspired the retail chain Rema 1000 to drop quantity discounts in the chain\'s more than 200 Danish stores and  introduced doggybags in Danish restaurants in collaboration with Unilever Food Solutions.  The book\nSelina Juul published an international award-winning Leftovers Cookbook \'Stop spild af mad - en kogebog med mere\' with recipes from top celebrity chefs. The Leftovers Cookbook \'Stop spild af mad - en kogebog med mere\' is a national Danish winner of Gourmand World Cookbook Awards 2011 in the category of Best Sustainable Food Book and Recipient of shared second place in Gourmand in Gourmand World Cookbook Awards 2012 in the category of Best Sustainable Food Book in the World.  Dane have reduced food waste\nAll the hard work is paying off: TNS Gallup survey for Stop Wasting food movement and Danish Agriculture & Food Council, 2013, shows that within the last year, every 2nd Dane has reduced his/hers food waste.  Declarations against food waste\nStop Wasting Food is one of the co-developers of the Joint Declaration Against Food Waste - an international document which is handed over to the European Parliament and the United Nations. The document lists proposals for sustainable food production and consumption, and encourages the world leaders to a commitment to a global reduction of food waste by at least 50% by 2025. It also proposes that a global reduction of food waste should be elevated to a UN Millennium Development Goal. Stop Wasting Food is extremely pleased to see, that the European Parliament has implemented numerous suggestions from the Joint Declaration Against Food Waste in the EU resolution against food waste. Stop Wasting Food is a co-signer of the following declarations against food waste:Joint Declaration Against Food Waste\nDanish Minister for the Environment\'s Charter Against Food Waste\nFAO\'s SAVE FOOD Declaration\nFoodDrinkEurope\'s  Food Wastage Declaration \"Every Crumb Counts\"  International partnerships and collaborations\nStop Wasting Food movement Denmark is also a Partner of FAO initiative SAVE FOOD, Partner of EU project FUSIONS and Partner of FAO/UNEP campaign Think.Eat.Save, where the UN Secretary-General Ban Ki-moon took part in a Danish press effort due to the launch of Think.Eat.Save Nordic-Baltic Ad Competition.  Partner of European Alliance against Food Waste - FUSIONSStop Wasting Food movement Denmark participates in a 4 year long European collaboration against food waste, FUSIONS. Among the 21 Partners involved in FUSIONS are Partners from 13 European countries: universities, institutions, NGOs, companies and Food and Agriculture Organization of the United Nations FAO. The collaboration is the first joint and transnational action against food waste in these gigantic dimensions. The aim of FUSIONS is to create a European platform of governmental and non-governmental organizations and companies from the food chain, i.e. industry, retailers and consumer organizations. The platform aims at providing simplified data that can identify and evaluate new initiatives to reduce food waste. Furthermore, the results will be disseminated to the public, and the development of technical and policy recommendations to the entire value chain and the EU. The platform will then activate, engage and support the main stakeholders in the European food value chain in order to deliver a reduction of 50% of food waste by 2020. Earlier, Stop Wasting Food movement Denmark signed Joint Declaration Against Food Waste along with several European organizations; The Joint Declaration Against Food Waste encourages the world leaders to a commitment to a global reduction of food waste by at least 50% before 2025. The Declaration served as inspiration for the European Parliament\'s  EU resolution against food waste - and the FUSIONS collaboration is now putting words into action.', '5b89fcfe604ba4.86583687.jpg', 'SELINA JUUL', '2018-08-18', 'selina@outlook.com', 0),
(38, 'title', 'something', '5b8a15b6b5b394.96150505.jpg', 'abc', '2018-09-01', 'abc@xyz.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cloth`
--

CREATE TABLE `cloth` (
  `c_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `date` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `p_dec` text NOT NULL,
  `p_img` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cloth`
--

INSERT INTO `cloth` (`c_id`, `name`, `address`, `date`, `email`, `p_dec`, `p_img`, `status`) VALUES
(2, 'khan', 'sgdslgd', '2018-11-03', 'khan@gmail.com', 'dgqwydgw', '5bdf24bc45df54.90604427.jpg', 0),
(3, 'kd', 'alsdhasj', '2018-11-04', 'ads@hj.com', 'asdadas', '5bdf274ee5cc00.47538777.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` longtext NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `name`, `date`, `email`, `subject`, `message`, `status`) VALUES
(11, 'khan', '2018-09-21', 'khan@gmail.com', 'suggestions', 'good wucgdlch', 0),
(12, 'khan', '2018-09-13', 'khan@gamil.com', 'suggestions', 'hello', 0),
(10, 'abu', '2018-08-31', 'abu@gmail.com', 'product', 'you guys are doing great work', 0),
(9, 'gibran', '2018-09-01', 'gib@gmail.com', 'product', 'good idea', 0),
(13, 'hsgh', '2018-09-06', 'zbzj@hhgh.com', 'service', 'kkugqukgq', 0),
(14, 'khbn', '2018-12-18', 'k@g.com', 'service', 'hfiyfhvtdifvmn', 0),
(15, 'asad', '2018-02-25', 'asd@s.fgc', 'service', 'cacscdc', 0),
(16, 'kk', '2018-10-11', 'dds@e.com', 'suggestions', 'afdsfsdfsdfxc', 0),
(17, 'sesccx', '2018-10-11', 'dfd@d.d', 'service', 'dfdsvc cxvdsv', 0),
(18, 'akjd', '2018-07-04', 'kj@kj.com', 'product', 'da.jdbglifgk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `d_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `p_dec` longtext NOT NULL,
  `p_img` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`d_id`, `name`, `address`, `date`, `email`, `type`, `p_dec`, `p_img`, `status`) VALUES
(26, 'summ', 'kavery', '2018-09-13', 'sum@xyz.com', 'clothes', 'shirt', '5ba1fa41d94db5.33156967.jpg', 0),
(22, 'khan', '#20/1', '2018-09-20', 'khan@XYZ.COM', 'furniture', 'DINING TABLE', '5b8acb44e4b690.42716148.jpg', 0),
(23, 'khan', '#20/1', '2018-09-07', 'kahn@xyz.com', 'clothes', 'cloths', '5b8b887e12e1c8.77474276.jpg', 0),
(24, 'khan', '#20/1', '2018-09-20', 'kha@lj.com', 'food', 'gsgs', '5b8b89a0c65291.07168266.jpg', 0),
(21, 'abc', '#@0/1', '2018-09-01', 'abc@xyz.com', 'clothes', 'give', '5b8a14f9415a07.43103409.jpg', 0),
(20, 'khan', '#20/1', '2018-08-24', 'khan@gmail.com', 'furniture', 'chairs', '5b8a0cec67a3b9.52466576.jpg', 0),
(19, 'farhan', '#20/1bangalore-560051', '2018-08-31', 'far@gmail.com', 'furniture', 'dining tablr for 4', '5b8a0ca92e7f71.13023773.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `egadgets`
--

CREATE TABLE `egadgets` (
  `eg_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `date` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `p_dec` text NOT NULL,
  `p_img` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `egadgets`
--

INSERT INTO `egadgets` (`eg_id`, `name`, `address`, `date`, `email`, `p_dec`, `p_img`, `status`) VALUES
(2, 'dkfghk', '.wa.efvls ', '2018-11-01', 'dkadg@kj.com', 'adluvtdlewgd', '5bdf251c3d0fa8.08658283.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `f_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `date` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `p_dec` text NOT NULL,
  `p_img` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`f_id`, `name`, `address`, `date`, `email`, `p_dec`, `p_img`, `status`) VALUES
(3, 'djsajk', 'slhfglf', '2018-11-03', 'kfdk@jahdv.com', 'akgfwlg', '5bdf24d78da5f8.54084167.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `fur_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `date` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `p_dec` text NOT NULL,
  `p_img` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`fur_id`, `name`, `address`, `date`, `email`, `p_dec`, `p_img`, `status`) VALUES
(2, 'kalhg', 'ksdglyd', '2018-11-03', 'jdvjsh@kjn.com', 'ayd', '5bdf24fdb0f114.33822928.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `homeappliance`
--

CREATE TABLE `homeappliance` (
  `ha_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `date` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `p_dec` text NOT NULL,
  `p_img` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homeappliance`
--

INSERT INTO `homeappliance` (`ha_id`, `name`, `address`, `date`, `email`, `p_dec`, `p_img`, `status`) VALUES
(2, 'akdgc', 'a cweiugwel', '2018-11-03', 'msadb@kj.com', 'laiilbsd', '5bdf253a03f4f1.67364172.jpg', 0),
(3, 'a.j,mnc', '/claicg', '2018-11-09', '.asjd@lsdn.com', 'liDOBLGDLDGD', '5bdf2558da93b8.82398838.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phno` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `name`, `address`, `phno`, `email`, `password`) VALUES
(2, 'khan', 'khan', '1234567654', 'khan@ybd.com', 'khan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cloth`
--
ALTER TABLE `cloth`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `egadgets`
--
ALTER TABLE `egadgets`
  ADD PRIMARY KEY (`eg_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`fur_id`);

--
-- Indexes for table `homeappliance`
--
ALTER TABLE `homeappliance`
  ADD PRIMARY KEY (`ha_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `b_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `cloth`
--
ALTER TABLE `cloth`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `d_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `egadgets`
--
ALTER TABLE `egadgets`
  MODIFY `eg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `furniture`
--
ALTER TABLE `furniture`
  MODIFY `fur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `homeappliance`
--
ALTER TABLE `homeappliance`
  MODIFY `ha_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
