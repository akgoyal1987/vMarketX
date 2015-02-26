-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2015 at 10:31 PM
-- Server version: 5.5.36-cll-lve
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vcartx_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(0, 'admin@vmarektx.com', 'vmarketx'),
(1, 'admin@vmarketx.com', '9106cf317b8755d5adf20e3f2b1a67d7');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(2, 'Home & Kitchenware'),
(5, 'Men'),
(6, 'Women'),
(7, 'Kids'),
(8, 'Books'),
(11, 'Services'),
(13, 'Electronics'),
(15, 'Provision'),
(16, 'General Goods'),
(17, 'Other Categories');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `state` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `state`) VALUES
(10, 'Indore', 'Madhya Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `create_shop`
--

CREATE TABLE IF NOT EXISTS `create_shop` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_name` varchar(255) NOT NULL,
  `shop_category` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `postal_code` int(100) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `min_ammount` int(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `create_shop`
--

INSERT INTO `create_shop` (`s_id`, `shop_name`, `shop_category`, `address`, `location`, `city`, `state`, `postal_code`, `phone_no`, `email`, `min_ammount`, `description`, `user_id`, `image1`, `image2`, `image3`, `image4`, `date_time`) VALUES
(59, 'kirana bhandaar', 'kirana', 'jannat', 'Rajendra Nagar', 'Indore', 'Madhya Pradesh', 452012, '8109399275', 'varunjeesukh@live.com', 500, 'order lao, ghar pe paao', 'user', '54b24c0381680.png', '54b24c603a753.jpg', '54b24c4c99bd3.png', '54b24c8d76dff.jpg', '2014-12-22 23:36:24'),
(61, 'sorav', 'cloth', '148, sukh sagar avenue ,vishnupuri main,bhavakua,', 'Shikshak Nagar', 'Indore', 'Madhya Pradesh', 452002, '9074939905', 'soravgarg123@gmail.com', 1000, 'sasasasasasa', 'user', 'Chrysanthemum3.jpg', 'Desert3.jpg', 'Hydrangeas2.jpg', 'Jellyfish2.jpg', '2015-01-06 00:42:31'),
(62, 'sorav', 'kirana', 'bhavarkuan', 'Shikshak Nagar', 'Indore', 'Madhya Pradesh', 453331, '9074739352', 'anayrahulhot@gmail.com', 300, 'efedfd', 'user', '', '54ab02ff6c64c.jpg', '54ab02ff6f7d4.jpg', '', '2015-01-06 03:02:47'),
(63, 'raju skies', 'kirana', '222 a/4', 'Vijay Nagar (Main )', 'Indore', 'Madhya Pradesh', 452012, '8109399275', 'varunjeesukh@live.com', 400, 'Largest variety of clothes available here ', 'user', '54cdaa3b2b034.jpg', '', '', '', '2015-02-01 09:53:23'),
(64, '0', '0', '0', '0', '0', '0', 0, '0', '0', 0, '0', 'user', '', '', '', '', '2015-02-01 09:53:23'),
(65, '0', '0', '0', '0', '0', '0', 0, '0', '0', 0, '0', 'user', '', '', '', '', '2015-02-01 09:55:51'),
(66, '0', '0', '0', '0', '0', '0', 0, '0', '0', 0, '0', 'user', '', '', '', '', '2015-02-01 09:57:10'),
(67, 'raju skies', 'kirana', '222 a/4', 'Vijay Nagar (Main )', 'Indore', 'Madhya Pradesh', 452012, '8109399275', 'varunjeesukh@live.com', 400, 'Largest variety of clothes available here ', 'user', '54cdabfbb079e.jpg', '', '', '', '2015-02-01 10:00:51'),
(68, '0', '0', '0', '0', '0', '0', 0, '0', '0', 0, '0', 'user', '', '', '', '', '2015-02-01 10:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=409 ;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `city`, `state`) VALUES
(1, 'Bhawarkua', 'Indore', 'Madhya Pradesh'),
(2, 'Rajendra Nagar', 'Indore', 'Madhya Pradesh'),
(3, 'Dhanvantri Nagar', 'Indore', 'Madhya Pradesh'),
(4, 'Vigyan Nagar', 'Indore', 'Madhya Pradesh'),
(5, 'Dutt Nagar', 'Indore', 'Madhya Pradesh'),
(8, 'VIP Paraspar Nagar', 'Indore', 'Madhya Pradesh'),
(9, 'Sudama Nagar', 'Indore', 'Madhya Pradesh'),
(10, 'Reti Mandi', 'Indore', 'Madhya Pradesh'),
(11, 'Jawahar Nagar', 'Indore', 'Madhya Pradesh'),
(12, 'Harijan Colony', 'Indore', 'Madhya Pradesh'),
(13, 'Anjani Nagar', 'Indore', 'Madhya Pradesh'),
(15, 'Shyam Nagar (Anex)', 'Indore', 'Madhya Pradesh'),
(16, 'Shikshak Nagar', 'Indore', 'Madhya Pradesh'),
(17, 'Ratan Bag', 'Indore', 'Madhya Pradesh'),
(18, 'Vyanktesh Nagar', 'Indore', 'Madhya Pradesh'),
(19, 'Kanyakubj Nagar', 'Indore', 'Madhya Pradesh'),
(20, 'Kalani Nagar', 'Indore', 'Madhya Pradesh'),
(21, 'Pallav Nagar', 'Indore', 'Madhya Pradesh'),
(22, 'Abhinandan Nagar', 'Indore', 'Madhya Pradesh'),
(23, 'Sheshadri Colony', 'Indore', 'Madhya Pradesh'),
(24, 'Raghuvanshi Colony', 'Indore', 'Madhya Pradesh'),
(25, 'Scheme No. 51', 'Indore', 'Madhya Pradesh'),
(26, 'Shyam Nagar ', 'Indore', 'Madhya Pradesh'),
(27, 'Hemu Kalani Nagar', 'Indore', 'Madhya Pradesh'),
(28, 'Kamla Nehru Nagar', 'Indore', 'Madhya Pradesh'),
(29, 'Maharajna Pratap Nagar', 'Indore', 'Madhya Pradesh'),
(30, 'Valmiki Nagar', 'Indore', 'Madhya Pradesh'),
(31, 'Vrindavan Colony', 'Indore', 'Madhya Pradesh'),
(32, 'JaiHind Nagar', 'Indore', 'Madhya Pradesh'),
(33, 'Shanti Niketan', 'Indore', 'Madhya Pradesh'),
(34, 'Scheme No. 54', 'Indore', 'Madhya Pradesh'),
(35, 'Babaji Nagar', 'Indore', 'Madhya Pradesh'),
(36, 'Veena Nagar', 'Indore', 'Madhya Pradesh'),
(37, 'Veena Nagar Extension', 'Indore', 'Madhya Pradesh'),
(38, 'Sundar Nagar', 'Indore', 'Madhya Pradesh'),
(39, 'Sundar Nagar Extension', 'Indore', 'Madhya Pradesh'),
(40, 'Clerk Colony (Ext.)', 'Indore', 'Madhya Pradesh'),
(41, 'Shyam Nagar (Main)', 'Indore', 'Madhya Pradesh'),
(42, 'Mangal Nagar', 'Indore', 'Madhya Pradesh'),
(43, 'Scheme No. 114', 'Indore', 'Madhya Pradesh'),
(44, 'Swasthya Nagar', 'Indore', 'Madhya Pradesh'),
(45, 'Classic Purnima', 'Indore', 'Madhya Pradesh'),
(46, 'Gauri Nagar( Priyadarshini)', 'Indore', 'Madhya Pradesh'),
(47, 'Goyal Vihar', 'Indore', 'Madhya Pradesh'),
(48, 'Pushp Nagar', 'Indore', 'Madhya Pradesh'),
(49, 'Majestic Nagar', 'Indore', 'Madhya Pradesh'),
(50, 'Ganesh Puri', 'Indore', 'Madhya Pradesh'),
(51, 'Gauri Nagar', 'Indore', 'Madhya Pradesh'),
(52, 'Menan Colony', 'Indore', 'Madhya Pradesh'),
(53, 'Sai Kripa Colony', 'Indore', 'Madhya Pradesh'),
(54, 'Anurag Nagar', 'Indore', 'Madhya Pradesh'),
(55, 'Scheme No. 74', 'Indore', 'Madhya Pradesh'),
(56, 'Scheme No. 78', 'Indore', 'Madhya Pradesh'),
(57, 'Scheme No. 94', 'Indore', 'Madhya Pradesh'),
(58, 'Vijay Nagar (Main )', 'Indore', 'Madhya Pradesh'),
(59, 'Vijay Nagar (Ext.)', 'Indore', 'Madhya Pradesh'),
(60, 'Shalimar Township', 'Indore', 'Madhya Pradesh'),
(61, 'Deendayal Upadhyay Nagar (ALL Sectors)', 'Indore', 'Madhya Pradesh'),
(62, 'Doctor’s Quarters', 'Indore', 'Madhya Pradesh'),
(63, 'Anudeshak Nagar', 'Indore', 'Madhya Pradesh'),
(64, 'Bajrang Nagar', 'Indore', 'Madhya Pradesh'),
(65, 'Mechanic Nagar', 'Indore', 'Madhya Pradesh'),
(66, 'Scheme No. 54 (P.U.-3)', 'Indore', 'Madhya Pradesh'),
(67, 'Meghdoot Nagar', 'Indore', 'Madhya Pradesh'),
(68, 'Subhash Nagar', 'Indore', 'Madhya Pradesh'),
(69, 'Clerk Colony', 'Indore', 'Madhya Pradesh'),
(70, 'Ready Made Complex', 'Indore', 'Madhya Pradesh'),
(71, 'Shanker Baug Colony', 'Indore', 'Madhya Pradesh'),
(72, 'Dilip Singh Colony', 'Indore', 'Madhya Pradesh'),
(73, 'Bakshi Bagh Colony (Prakash Nagar)', 'Indore', 'Madhya Pradesh'),
(74, 'Radha Ngar (Complete.)', 'Indore', 'Madhya Pradesh'),
(75, 'Shastri Colony', 'Indore', 'Madhya Pradesh'),
(76, ' Juna Risala', 'Indore', 'Madhya Pradesh'),
(77, 'Neelkanth Colony', 'Indore', 'Madhya Pradesh'),
(78, 'Dwarkadhish Nagar', 'Indore', 'Madhya Pradesh'),
(80, 'Sitaram Park', 'Indore', 'Madhya Pradesh'),
(81, 'Mishra Bandhu Nagar', 'Indore', 'Madhya Pradesh'),
(82, 'Ramchandra Nagar', 'Indore', 'Madhya Pradesh'),
(83, '	  Ramchandra Nagar (Anex)', 'Indore', 'Madhya Pradesh'),
(84, '	  Telephone Nagar (Extension)', 'Indore', 'Madhya Pradesh'),
(85, 'Swami Vivekanand Nagar', 'Indore', 'Madhya Pradesh'),
(86, 'Man Bhavan Nagar', 'Indore', 'Madhya Pradesh'),
(87, 'Scheme No. 94 (Khajarana to Piplyahana)', 'Indore', 'Madhya Pradesh'),
(88, 'Harsh Nagar', 'Indore', 'Madhya Pradesh'),
(89, 'Ashish Nagar.', 'Indore', 'Madhya Pradesh'),
(90, 'Mahadev Totla Nagar', 'Indore', 'Madhya Pradesh'),
(91, 'Sanchar Nagar (Main)', 'Indore', 'Madhya Pradesh'),
(92, 'Sanchar Nagar (Extension)', 'Indore', 'Madhya Pradesh'),
(93, 'Bijlee Nagar', 'Indore', 'Madhya Pradesh'),
(94, 'Brijeshwari (Anex)', 'Indore', 'Madhya Pradesh'),
(95, 'Palash Palace', 'Indore', 'Madhya Pradesh'),
(96, 'Doorsanchar Colony', 'Indore', 'Madhya Pradesh'),
(98, 'Uday Nagar', 'Indore', 'Madhya Pradesh'),
(99, 'New Siyaganj', 'Indore', 'Madhya Pradesh'),
(100, 'Golden Palace', 'Indore', 'Madhya Pradesh'),
(101, 'Gulmohar (Extension)', 'Indore', 'Madhya Pradesh'),
(102, '	  Utkarsh Vihar (Group Housing)', 'Indore', 'Madhya Pradesh'),
(103, 'Kalnidhi Park', 'Indore', 'Madhya Pradesh'),
(104, 'Ganesh Dham', 'Indore', 'Madhya Pradesh'),
(105, 'Mahaveer Dham', 'Indore', 'Madhya Pradesh'),
(106, 'Kalpana Lok', 'Indore', 'Madhya Pradesh'),
(107, 'Ashish Vihar', 'Indore', 'Madhya Pradesh'),
(108, 'Virat Nagar', 'Indore', 'Madhya Pradesh'),
(109, 'Revenue Nagar', 'Indore', 'Madhya Pradesh'),
(110, 'Goyal Nagar (Extension)', 'Indore', 'Madhya Pradesh'),
(111, 'Anoop Nagar', 'Indore', 'Madhya Pradesh'),
(112, 'Sanghi Colony', 'Indore', 'Madhya Pradesh'),
(113, 'Ranade Compound', 'Indore', 'Madhya Pradesh'),
(114, 'R. K.Puram', 'Indore', 'Madhya Pradesh'),
(115, 'Beema Nagar', 'Indore', 'Madhya Pradesh'),
(116, 'Baikunth Dham', 'Indore', 'Madhya Pradesh'),
(117, 'Kailash Park', 'Indore', 'Madhya Pradesh'),
(118, 'Navratan Baug', 'Indore', 'Madhya Pradesh'),
(119, 'Diamond Colony', 'Indore', 'Madhya Pradesh'),
(120, 'Rajgarh Kothi Colony', 'Indore', 'Madhya Pradesh'),
(121, 'Sonia Gandhi Nagar', 'Indore', 'Madhya Pradesh'),
(122, 'MIG. Sector ‘A’', 'Indore', 'Madhya Pradesh'),
(123, 'Shreenagar (Main)', 'Indore', 'Madhya Pradesh'),
(124, 'Shukla Nagar', 'Indore', 'Madhya Pradesh'),
(125, 'Tirupati Nagar', 'Indore', 'Madhya Pradesh'),
(126, 'Tiriputi Nagar (Anex)', 'Indore', 'Madhya Pradesh'),
(127, 'Sankhala Colony', 'Indore', 'Madhya Pradesh'),
(128, 'Sadhana Nagar', 'Indore', 'Madhya Pradesh'),
(129, 'Patel Nagar', 'Indore', 'Madhya Pradesh'),
(130, 'Agresan Nagar', 'Indore', 'Madhya Pradesh'),
(131, 'Gurukripa Nagar', 'Indore', 'Madhya Pradesh'),
(132, 'Vidhyanchal Colony', 'Indore', 'Madhya Pradesh'),
(133, 'Mahaveer Nagar', 'Indore', 'Madhya Pradesh'),
(134, 'Samajwadi Indira Nagar', 'Indore', 'Madhya Pradesh'),
(135, 'Vardhman Nagar', 'Indore', 'Madhya Pradesh'),
(136, 'Mahesh Nagar', 'Indore', 'Madhya Pradesh'),
(137, 'Girdhar Nagar', 'Indore', 'Madhya Pradesh'),
(138, 'Shanti Nagar Iain Colony', 'Indore', 'Madhya Pradesh'),
(139, 'Narayan Bagh', 'Indore', 'Madhya Pradesh'),
(140, 'Pant Vaidhya Colony', 'Indore', 'Madhya Pradesh'),
(141, 'Jati Colony', 'Indore', 'Madhya Pradesh'),
(142, 'Ganesh Colony', 'Indore', 'Madhya Pradesh'),
(143, 'Scheme No. 97 (Part 4)', 'Indore', 'Madhya Pradesh'),
(144, 'Vikas Nagar', 'Indore', 'Madhya Pradesh'),
(145, 'Ansar Colony', 'Indore', 'Madhya Pradesh'),
(146, 'LIG', 'Indore', 'Madhya Pradesh'),
(147, 'MIG', 'Indore', 'Madhya Pradesh'),
(148, 'Sanjay Nagar', 'Indore', 'Madhya Pradesh'),
(149, 'HIG (Duplex)', 'Indore', 'Madhya Pradesh'),
(150, 'Chandra Nagar', 'Indore', 'Madhya Pradesh'),
(151, 'Shri Nagar Extension', 'Indore', 'Madhya Pradesh'),
(152, 'Chandralok Colony', 'Indore', 'Madhya Pradesh'),
(153, 'Kalpanalok Colony', 'Indore', 'Madhya Pradesh'),
(154, 'Jhad Colony', 'Indore', 'Madhya Pradesh'),
(155, 'Ravi Nagar', 'Indore', 'Madhya Pradesh'),
(156, 'Ravindra Nagar', 'Indore', 'Madhya Pradesh'),
(157, 'Joy Builder Colony', 'Indore', 'Madhya Pradesh'),
(158, 'Patrakar Colony', 'Indore', 'Madhya Pradesh'),
(159, 'Saket Nagar', 'Indore', 'Madhya Pradesh'),
(160, 'Shankar Nagar', 'Indore', 'Madhya Pradesh'),
(161, 'Manish Puri', 'Indore', 'Madhya Pradesh'),
(162, 'Gul Mohar Colony', 'Indore', 'Madhya Pradesh'),
(163, 'Paliwal Nagar', 'Indore', 'Madhya Pradesh'),
(164, 'Telephone Nagar', 'Indore', 'Madhya Pradesh'),
(165, 'Palasia Harijan Colony', 'Indore', 'Madhya Pradesh'),
(166, 'State Bank Office Colony', 'Indore', 'Madhya Pradesh'),
(167, 'Ambedkar Nagar', 'Indore', 'Madhya Pradesh'),
(168, 'Ahilyamata Colony', 'Indore', 'Madhya Pradesh'),
(169, 'Yashwant Colony', 'Indore', 'Madhya Pradesh'),
(170, 'Ranisati Colony', 'Indore', 'Madhya Pradesh'),
(171, 'Vishram Colony', 'Indore', 'Madhya Pradesh'),
(172, 'Regal Colony', 'Indore', 'Madhya Pradesh'),
(173, 'Vrindavan Dham', 'Indore', 'Madhya Pradesh'),
(174, 'Laad Colony', 'Indore', 'Madhya Pradesh'),
(175, 'Sita Colony', 'Indore', 'Madhya Pradesh'),
(176, 'Meera path Colony', 'Indore', 'Madhya Pradesh'),
(177, 'Vallabh Nagar', 'Indore', 'Madhya Pradesh'),
(178, 'Shree Builders Colony', 'Indore', 'Madhya Pradesh'),
(179, 'Park Road', 'Indore', 'Madhya Pradesh'),
(180, 'Kanchan Bahg', 'Indore', 'Madhya Pradesh'),
(181, 'White Church Colony', 'Indore', 'Madhya Pradesh'),
(182, 'Green Park Colony', 'Indore', 'Madhya Pradesh'),
(183, 'Jaora Compound', 'Indore', 'Madhya Pradesh'),
(184, 'Ratlam Kothi', 'Indore', 'Madhya Pradesh'),
(185, 'Dhar Kothi', 'Indore', 'Madhya Pradesh'),
(186, 'Film Colony', 'Indore', 'Madhya Pradesh'),
(187, 'Rajesh Nagar', 'Indore', 'Madhya Pradesh'),
(188, 'Bhakt Prahlad Nagar', 'Indore', 'Madhya Pradesh'),
(189, 'Chouthmal Colony', 'Indore', 'Madhya Pradesh'),
(190, 'Katjoo Nagar', 'Indore', 'Madhya Pradesh'),
(191, 'Rajasvgram', 'Indore', 'Madhya Pradesh'),
(192, 'Bank Colony', 'Indore', 'Madhya Pradesh'),
(193, 'Mahavar Nagar', 'Indore', 'Madhya Pradesh'),
(194, 'Swastik Nagar', 'Indore', 'Madhya Pradesh'),
(195, 'Dravid Nagar', 'Indore', 'Madhya Pradesh'),
(196, 'Scheme No. 71', 'Indore', 'Madhya Pradesh'),
(197, 'Gumashta Nagar', 'Indore', 'Madhya Pradesh'),
(198, 'Ushanagar (Main)', 'Indore', 'Madhya Pradesh'),
(199, 'Ushanagar (Extension)', 'Indore', 'Madhya Pradesh'),
(200, 'Vijaynagar Syndicate', 'Indore', 'Madhya Pradesh'),
(202, 'Eleven Banglos Near Naiduniya', 'Indore', 'Madhya Pradesh'),
(203, 'Basant Vihar', 'Indore', 'Madhya Pradesh'),
(204, 'Jauhari Palace', 'Indore', 'Madhya Pradesh'),
(205, 'Madhuban Colony', 'Indore', 'Madhya Pradesh'),
(206, 'Moon palace Colony', 'Indore', 'Madhya Pradesh'),
(207, 'Indira Ghandi Nagar', 'Indore', 'Madhya Pradesh'),
(208, 'Shreeram Nagar', 'Indore', 'Madhya Pradesh'),
(209, 'Indralok Colony', 'Indore', 'Madhya Pradesh'),
(210, 'Neminagar Jain Colony', 'Indore', 'Madhya Pradesh'),
(211, 'Vinaynagar', 'Indore', 'Madhya Pradesh'),
(212, 'Revenue Nagar Class Four colony', 'Indore', 'Madhya Pradesh'),
(213, 'Model Town', 'Indore', 'Madhya Pradesh'),
(214, 'Parashvnath Nagar', 'Indore', 'Madhya Pradesh'),
(215, 'Nidhi Vihar', 'Indore', 'Madhya Pradesh'),
(216, 'Kunjvan Colony', 'Indore', 'Madhya Pradesh'),
(217, 'Ashoka Nagar', 'Indore', 'Madhya Pradesh'),
(218, 'Vijay Nagar', 'Indore', 'Madhya Pradesh'),
(219, 'Palace Colony', 'Indore', 'Madhya Pradesh'),
(220, 'Lokmanya Nagar', 'Indore', 'Madhya Pradesh'),
(221, 'Rajmahal Colony', 'Indore', 'Madhya Pradesh'),
(222, 'Triveni Nagar', 'Indore', 'Madhya Pradesh'),
(223, 'Triveni Nagar (Extension)', 'Indore', 'Madhya Pradesh'),
(224, 'Roopram Nagar', 'Indore', 'Madhya Pradesh'),
(225, 'Brooke Bond Colony', 'Indore', 'Madhya Pradesh'),
(226, 'Nandanvan Colony', 'Indore', 'Madhya Pradesh'),
(227, 'Veer Savarkar Nagar', 'Indore', 'Madhya Pradesh'),
(228, 'Saifi Nagar', 'Indore', 'Madhya Pradesh'),
(229, 'New Saifi Nagar', 'Indore', 'Madhya Pradesh'),
(230, 'Scheme No. 101', 'Indore', 'Madhya Pradesh'),
(231, 'Scheme No. 102', 'Indore', 'Madhya Pradesh'),
(232, 'Gopal Bagh', 'Indore', 'Madhya Pradesh'),
(233, 'Pratap Nagar', 'Indore', 'Madhya Pradesh'),
(234, 'Vasudev Nagar', 'Indore', 'Madhya Pradesh'),
(235, 'Ladkana Nagar', 'Indore', 'Madhya Pradesh'),
(236, 'Prem Nagar', 'Indore', 'Madhya Pradesh'),
(237, 'Jagriti Nagar', 'Indore', 'Madhya Pradesh'),
(238, 'Sindhu Nagar', 'Indore', 'Madhya Pradesh'),
(239, 'Vyanktesh Market', 'Indore', 'Madhya Pradesh'),
(240, 'Bargal Colony', 'Indore', 'Madhya Pradesh'),
(241, 'Palsikar Colony', 'Indore', 'Madhya Pradesh'),
(242, 'Dubey Colony', 'Indore', 'Madhya Pradesh'),
(243, 'Jaishree Syndicate', 'Indore', 'Madhya Pradesh'),
(244, 'Adarsh Nagar', 'Indore', 'Madhya Pradesh'),
(245, 'Jairampur Colony', 'Indore', 'Madhya Pradesh'),
(246, 'Bairathi Colony', 'Indore', 'Madhya Pradesh'),
(247, 'Joshi Colony', 'Indore', 'Madhya Pradesh'),
(248, 'Sadhu Nagar', 'Indore', 'Madhya Pradesh'),
(249, 'Bairathi Colony No. 1', 'Indore', 'Madhya Pradesh'),
(250, 'Godha Colony', 'Indore', 'Madhya Pradesh'),
(251, 'Sneh Nagar', 'Indore', 'Madhya Pradesh'),
(252, 'Sarvoday Nagar', 'Indore', 'Madhya Pradesh'),
(253, 'Green Land Colony', 'Indore', 'Madhya Pradesh'),
(255, 'Panchsheel Nagar', 'Indore', 'Madhya Pradesh'),
(256, 'Bhagwandeen Nagar', 'Indore', 'Madhya Pradesh'),
(257, 'Mangal Murty Nagar', 'Indore', 'Madhya Pradesh'),
(258, 'Sajan Nagar', 'Indore', 'Madhya Pradesh'),
(259, 'Prakash Nagar', 'Indore', 'Madhya Pradesh'),
(260, 'Sanvad Nagar', 'Indore', 'Madhya Pradesh'),
(261, 'Anand Nagar', 'Indore', 'Madhya Pradesh'),
(262, 'Shiv Moti Nagar', 'Indore', 'Madhya Pradesh'),
(263, 'Janki Nagar (Main)', 'Indore', 'Madhya Pradesh'),
(264, 'Janki Nagar (Anex)', 'Indore', 'Madhya Pradesh'),
(265, 'Janki Nagar (Extension)', 'Indore', 'Madhya Pradesh'),
(266, 'New Agarwal Nagar', 'Indore', 'Madhya Pradesh'),
(267, 'Old Agrawal Nagar', 'Indore', 'Madhya Pradesh'),
(268, 'Scheme No. 47', 'Indore', 'Madhya Pradesh'),
(269, 'Mohan Nagar', 'Indore', 'Madhya Pradesh'),
(270, 'Manish Bagh', 'Indore', 'Madhya Pradesh'),
(271, 'Panchvati Janki Nagar', 'Indore', 'Madhya Pradesh'),
(272, 'Udhyog Nagar', 'Indore', 'Madhya Pradesh'),
(273, 'Khatiwala Tank', 'Indore', 'Madhya Pradesh'),
(274, 'Tilak Nagar (Main)', 'Indore', 'Madhya Pradesh'),
(275, 'Tilak Nagar (Extension)', 'Indore', 'Madhya Pradesh'),
(276, 'Bakhtavar Ram Nagar', 'Indore', 'Madhya Pradesh'),
(277, 'Paricharika Nagar', 'Indore', 'Madhya Pradesh'),
(278, 'Krishi Vihar Colony', 'Indore', 'Madhya Pradesh'),
(280, 'Vandana Nagar', 'Indore', 'Madhya Pradesh'),
(281, 'Sainath Colony', 'Indore', 'Madhya Pradesh'),
(282, 'Shakti Nagar', 'Indore', 'Madhya Pradesh'),
(283, 'Goyal Nagar', 'Indore', 'Madhya Pradesh'),
(284, '	  Sharma Anex (Group Housing)', 'Indore', 'Madhya Pradesh'),
(285, 'Chamelibagh Utkarsh vihar (Group Housing)', 'Indore', 'Madhya Pradesh'),
(286, 'Swadesh Nagar', 'Indore', 'Madhya Pradesh'),
(287, 'Jai Nagar', 'Indore', 'Madhya Pradesh'),
(288, 'Swami Dayanand Nagar', 'Indore', 'Madhya Pradesh'),
(289, 'Nema Nagar', 'Indore', 'Madhya Pradesh'),
(290, 'Nalanda Parisar', 'Indore', 'Madhya Pradesh'),
(291, 'Sarnath Colony', 'Indore', 'Madhya Pradesh'),
(292, 'Maa Vihar', 'Indore', 'Madhya Pradesh'),
(293, 'Indrajeet Nagar', 'Indore', 'Madhya Pradesh'),
(294, 'Sheme No. 59', 'Indore', 'Madhya Pradesh'),
(295, 'Lake Park Colony', 'Indore', 'Madhya Pradesh'),
(296, 'Godbole Colony', 'Indore', 'Madhya Pradesh'),
(297, 'Bhawanipur Colony', 'Indore', 'Madhya Pradesh'),
(298, 'Annapurna Nagar', 'Indore', 'Madhya Pradesh'),
(299, 'Mishra Nagar', 'Indore', 'Madhya Pradesh'),
(300, 'Swarn Vihar', 'Indore', 'Madhya Pradesh'),
(301, 'Swarn Vatika', 'Indore', 'Madhya Pradesh'),
(302, 'Pushap Vatika', 'Indore', 'Madhya Pradesh'),
(303, 'Sai Vihar', 'Indore', 'Madhya Pradesh'),
(304, 'Radha Vatika', 'Indore', 'Madhya Pradesh'),
(305, 'Tirupati Colony', 'Indore', 'Madhya Pradesh'),
(306, 'Lalaram Nagar', 'Indore', 'Madhya Pradesh'),
(307, 'Padmavati Colony (Badi Gwaltoli)', 'Indore', 'Madhya Pradesh'),
(308, 'Geeta Nagar', 'Indore', 'Madhya Pradesh'),
(309, 'Seva Sardar Nagar', 'Indore', 'Madhya Pradesh'),
(310, 'Greater Brijeshwari', 'Indore', 'Madhya Pradesh'),
(311, 'Brijeshwari ( Extension)', 'Indore', 'Madhya Pradesh'),
(312, 'Rajgrah Colony', 'Indore', 'Madhya Pradesh'),
(313, 'Shiv Mangal Nagar', 'Indore', 'Madhya Pradesh'),
(314, 'Shree Gee Vatika (Group Housing)', 'Indore', 'Madhya Pradesh'),
(315, 'Royal Residency (Group Housing)', 'Indore', 'Madhya Pradesh'),
(316, 'Madhidham (Group Housing)', 'Indore', 'Madhya Pradesh'),
(317, 'Ashish Regency', 'Indore', 'Madhya Pradesh'),
(318, 'Gandhipark Colony (Radio Colony)', 'Indore', 'Madhya Pradesh'),
(319, 'Ahilyapuri Colony', 'Indore', 'Madhya Pradesh'),
(320, 'B.K. Sindhi colony', 'Indore', 'Madhya Pradesh'),
(321, 'Jeevan deep Colony', 'Indore', 'Madhya Pradesh'),
(322, 'Sadhu Vaswani Nagar', 'Indore', 'Madhya Pradesh'),
(323, 'Joshi Colony', 'Indore', 'Madhya Pradesh'),
(324, 'Vidhya Nagar', 'Indore', 'Madhya Pradesh'),
(325, 'Professor Colony', 'Indore', 'Madhya Pradesh'),
(326, 'Basant Shah Nagar', 'Indore', 'Madhya Pradesh'),
(327, 'Vishnupuri Colony', 'Indore', 'Madhya Pradesh'),
(328, 'Vishnupuri Colony (Extension)', 'Indore', 'Madhya Pradesh'),
(329, 'Indrapuri Colony', 'Indore', 'Madhya Pradesh'),
(330, 'Aditya Nagar', 'Indore', 'Madhya Pradesh'),
(331, 'Nanak Nagar', 'Indore', 'Madhya Pradesh'),
(332, 'Shivam Nagar', 'Indore', 'Madhya Pradesh'),
(333, 'Sheetal Nagar', 'Indore', 'Madhya Pradesh'),
(334, 'Alok Nagar', 'Indore', 'Madhya Pradesh'),
(335, 'Siddarth Nagar', 'Indore', 'Madhya Pradesh'),
(336, 'Scheme No. 91', 'Indore', 'Madhya Pradesh'),
(337, 'Scheme No. 103', 'Indore', 'Madhya Pradesh'),
(338, 'Scheme No. 53', 'Indore', 'Madhya Pradesh'),
(339, 'Scheme No. 78 (Part 1)', 'Indore', 'Madhya Pradesh'),
(340, 'Scheme No. 78 (Part 2)', 'Indore', 'Madhya Pradesh'),
(341, 'Scheme No. 114 (Part 1)', 'Indore', 'Madhya Pradesh'),
(342, 'Scheme No. 114 (Part 2)', 'Indore', 'Madhya Pradesh'),
(343, 'Scheme No 59 (Part 2)', 'Indore', 'Madhya Pradesh'),
(344, 'Parag Nagar', 'Indore', 'Madhya Pradesh'),
(345, 'Devideen Dayal Mishra Nagar', 'Indore', 'Madhya Pradesh'),
(346, 'Lakshya Vihar', 'Indore', 'Madhya Pradesh'),
(347, 'Shivmurty Group Housing', 'Indore', 'Madhya Pradesh'),
(348, 'Kranti Kriplani Nagar (Jai Jagat)', 'Indore', 'Madhya Pradesh'),
(349, 'Silver Palace', 'Indore', 'Madhya Pradesh'),
(350, 'Paraspar Nagar', 'Indore', 'Madhya Pradesh'),
(351, 'Ahilya Nagar', 'Indore', 'Madhya Pradesh'),
(352, 'Bhoj Nagar', 'Indore', 'Madhya Pradesh'),
(353, 'Narmada Nagar', 'Indore', 'Madhya Pradesh'),
(354, 'Chankyapuri', 'Indore', 'Madhya Pradesh'),
(355, 'Umesh Nagar', 'Indore', 'Madhya Pradesh'),
(356, 'Silver Ox', 'Indore', 'Madhya Pradesh'),
(357, 'Sarswati Nagar', 'Indore', 'Madhya Pradesh'),
(358, 'Prabhu Nagar', 'Indore', 'Madhya Pradesh'),
(359, 'Vaishali Nagar', 'Indore', 'Madhya Pradesh'),
(360, 'Gopur Nagar', 'Indore', 'Madhya Pradesh'),
(361, 'Suryadev Nagar', 'Indore', 'Madhya Pradesh'),
(362, 'Siddhipuram', 'Indore', 'Madhya Pradesh'),
(363, 'Parashar Nagar', 'Indore', 'Madhya Pradesh'),
(364, 'Sandipani Parisar', 'Indore', 'Madhya Pradesh'),
(365, 'Takshshila (Residential Campus)', 'Indore', 'Madhya Pradesh'),
(366, 'Mahila Polytechnic Colony Campus', 'Indore', 'Madhya Pradesh'),
(367, 'Shreekant Palace', 'Indore', 'Madhya Pradesh'),
(368, 'Om Vihar', 'Indore', 'Madhya Pradesh'),
(369, 'Alok Nagar Extension', 'Indore', 'Madhya Pradesh'),
(370, 'SukhSampada Group housing', 'Indore', 'Madhya Pradesh'),
(371, 'Guru Nanak Colony', 'Indore', 'Madhya Pradesh'),
(372, 'Group Housing', 'Indore', 'Madhya Pradesh'),
(373, 'Vishal Nagar', 'Indore', 'Madhya Pradesh'),
(374, 'Rahi Nagar Extension', 'Indore', 'Madhya Pradesh'),
(375, 'Sarv Suvidha Nagar', 'Indore', 'Madhya Pradesh'),
(376, 'Sukh Shanti Nagar', 'Indore', 'Madhya Pradesh'),
(377, 'VishwaKarma Nagar', 'Indore', 'Madhya Pradesh'),
(378, 'Kandhari Nagar', 'Indore', 'Madhya Pradesh'),
(379, 'Vaibhav Nagar Extension', 'Indore', 'Madhya Pradesh'),
(380, 'Radhika Palace', 'Indore', 'Madhya Pradesh'),
(381, 'IDA scheme No. 38', 'Indore', 'Madhya Pradesh'),
(382, 'Brij Vihar Colony', 'Indore', 'Madhya Pradesh'),
(383, 'Aanand Colony', 'Indore', 'Madhya Pradesh'),
(384, 'Radhe Krishna Vihar', 'Indore', 'Madhya Pradesh'),
(385, 'Kalindikunj Group Housing', 'Indore', 'Madhya Pradesh'),
(386, 'Sukhdev Nagar', 'Indore', 'Madhya Pradesh'),
(387, 'Shahnai Regency', 'Indore', 'Madhya Pradesh'),
(388, 'Suryasukham Block', 'Indore', 'Madhya Pradesh'),
(390, 'Sachhidanand Nagar', 'Indore', 'Madhya Pradesh'),
(391, 'Anurag Ngar Extension', 'Indore', 'Madhya Pradesh'),
(392, 'Scheme No. 94 (Sector H)', 'Indore', 'Madhya Pradesh'),
(393, 'Ganeshdham', 'Indore', 'Madhya Pradesh'),
(394, 'Suyash (Anex)', 'Indore', 'Madhya Pradesh'),
(395, 'Empire Regency', 'Indore', 'Madhya Pradesh'),
(396, 'Raoraja Park ’A’', 'Indore', 'Madhya Pradesh'),
(397, 'Shubhlabh Nagar A', 'Indore', 'Madhya Pradesh'),
(398, 'Shubhlabh Nagar B', 'Indore', 'Madhya Pradesh'),
(399, 'Shivshakti Nagar (Extension)', 'Indore', 'Madhya Pradesh'),
(400, 'Sainath Colony Sector A', 'Indore', 'Madhya Pradesh'),
(401, 'Greater Vaishali', 'Indore', 'Madhya Pradesh'),
(402, 'Collectorate', 'Indore', 'Madhya Pradesh'),
(403, 'Mahu Naka', 'Indore', 'Madhya Pradesh'),
(404, 'Choithram', 'Indore', 'Madhya Pradesh'),
(405, 'Rau', 'Indore', 'Madhya Pradesh'),
(406, 'Silicon City', 'Indore', 'Madhya Pradesh'),
(407, 'Hawa Bangla', 'Indore', 'Madhya Pradesh'),
(408, 'CAT (RRCAT)', 'Indore', 'Madhya Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `s_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_subcategory` varchar(255) NOT NULL,
  `min_quantity` int(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `mrp_price` float NOT NULL,
  `selling_price` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `user_id`, `s_id`, `product_name`, `product_category`, `product_subcategory`, `min_quantity`, `unit`, `mrp_price`, `selling_price`, `description`, `image1`, `image2`, `image3`, `image4`, `date_time`) VALUES
(61, 'user', 59, '0', '0', '0', 0, '0', 0, 0, '0', '54cdae8443858.jpg', '54b24cc29e480.png', '54b24ce468777.png', NULL, '2014-12-24 14:58:52'),
(62, 'user', 59, 'Turmeric Powder', 'Provision', 'Miscellaneous', 1, 'kg', 250, 240, 'Turmeric powder is a bright yellow powder made by dry grinding of mature turmeric rhizomes. The use of turmeric for coloring and flavoring food, for cosmetic purposes and for medicinal properties dates back to the ancient Vedic culture of India. Used in a', 'Turmeric_Powder-300x2131.jpg', 'haldi1_1_11.jpg', 'turmeric_powder1.gif', 'Turmeric-Powder.-Rdy-Sz_1.jpg', '2014-12-24 20:38:22'),
(63, 'user', 59, 'Digital Camera', 'Electronics', 'Cameras and Camcorders', 1, 'piece', 12000, 10000, 'Developed with Digic 4+ processor, this camera can process pictures faster so that you experience no lag while capturing multiple images. The device can capture up to 0.8 shots per second.', '51V1XRYAYSL2.jpg', 'download.jpg', 'images_(2)2.jpg', 'images_(3)2.jpg', '2014-12-24 20:46:27'),
(68, 'user', 59, 'mirchi', 'Home & Kitchenware', 'Home Decor and Festive Goods', 23, 'kg', 344, 340, 'dljskd', 'Desert2.jpg', NULL, NULL, NULL, '2015-01-05 17:09:10');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(11, 'Madhya Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE IF NOT EXISTS `sub_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `category` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `category`) VALUES
(2, 'Shoes', 'Men'),
(3, 'Clothing', 'Men'),
(4, 'Accessories', 'Men'),
(5, 'Bags', 'Men'),
(6, 'Eyewear (Sunglasses)', 'Men'),
(7, 'Watches', 'Men'),
(8, 'Sporting Goods', 'Men'),
(9, 'Beauty', 'Men'),
(10, 'Jewelry', 'Men'),
(11, 'Miscellaneous', 'Men'),
(12, 'Shoes', 'Women'),
(13, 'Clothing', 'Women'),
(14, 'Accessories', 'Women'),
(15, 'Bags', 'Women'),
(16, 'Eyewear (Sunglasses)', 'Women'),
(17, 'Watches', 'Women'),
(18, 'Sporting Goods', 'Women'),
(19, 'Beauty', 'Women'),
(20, 'Jewelry', 'Women'),
(21, 'Miscellaneous', 'Women'),
(22, 'Cameras and Camcorders', 'Electronics'),
(23, 'Gaming', 'Electronics'),
(24, 'TV, Audio and Video', 'Electronics'),
(25, 'Home Furnishing', 'Home & Kitchenware'),
(26, 'Home Decor and Festive Goods', 'Home & Kitchenware'),
(27, 'Bathroom Goods', 'Home & Kitchenware'),
(28, 'Home Appliances', 'Home & Kitchenware'),
(29, 'Kitchen Appliances', 'Home & Kitchenware'),
(30, 'Utensils and Kitchen Goods', 'Home & Kitchenware'),
(32, 'Mobiles and Tablets', 'Electronics'),
(33, 'Laptops and PC', 'Electronics'),
(34, 'All Accessories', 'Electronics'),
(35, 'Other Appliances', 'Electronics'),
(36, 'Softwares and Antivirus', 'Electronics'),
(37, 'Architecture and Design', 'Services'),
(38, 'Astrology', 'Services'),
(39, 'Domestic Help', 'Services'),
(40, 'Food', 'Services'),
(41, 'Health and Beauty', 'Services'),
(42, 'Household repairs', 'Services'),
(43, 'Legal and Financial', 'Services'),
(44, 'Transport and Shipping', 'Services'),
(45, 'Travel and Tourism', 'Services'),
(46, 'Entrance Exam', 'Books'),
(47, 'School and College', 'Books'),
(48, 'Literature and Fiction', 'Books'),
(49, 'Children', 'Books'),
(50, 'Teens', 'Books'),
(51, 'Miscellaneous', 'Services'),
(52, 'Indian Writers', 'Books'),
(53, 'Biographies and Autobiographies', 'Books'),
(54, 'Regional Books', 'Books'),
(55, 'Devotional and Spritual', 'Books'),
(56, 'Magazines', 'Books'),
(57, 'Other Books', 'Books'),
(58, 'Boys Clothing', 'Kids'),
(59, 'Girls Clothing', 'Kids'),
(60, 'Boys Footwear', 'Kids'),
(61, 'Girls Footwear', 'Kids'),
(62, 'Baby Diapers', 'Kids'),
(63, 'Baby Goods', 'Kids'),
(64, 'Accessories', 'Kids'),
(65, 'Toys And School Goods', 'Kids'),
(66, 'Bakery', 'Provision'),
(67, 'Pulses and Grains', 'Provision'),
(68, 'Spices, Sauces and Condiment', 'Provision'),
(69, 'Breakfast and Cereal', 'Provision'),
(70, 'Snacks, Cookies and Chips', 'Provision'),
(71, 'Coffee and Tea', 'Provision'),
(72, 'Meal Solutions and Pasta', 'Provision'),
(73, 'Fresh Food', 'Provision'),
(74, 'Canned Goods and Soups', 'Provision'),
(75, 'Candy and Toffee', 'Provision'),
(76, 'Dairy Products and Sweets', 'Provision'),
(77, 'Pickles', 'Provision'),
(78, 'Soap', 'General Goods'),
(79, 'Washing Powder', 'General Goods'),
(80, 'Medical', 'General Goods'),
(81, 'Toothpaste', 'General Goods'),
(82, 'Hair Oil and Gel', 'General Goods'),
(83, 'Face Wash and Creams', 'General Goods'),
(84, 'Shampoo', 'General Goods'),
(85, 'Body Moisturizer', 'General Goods'),
(86, 'Washing Goods', 'General Goods'),
(87, 'Plastic Goods', 'General Goods'),
(88, 'Hardware and Sanitary', 'Other Categories'),
(89, 'Stationary and Gifts', 'Other Categories'),
(90, 'Glass and Frame Work', 'Other Categories'),
(91, 'Metal Goods', 'General Goods'),
(92, 'Miscellaneous', 'Provision'),
(93, 'Body Care Items', 'General Goods'),
(94, 'Property ', 'Services'),
(95, 'miscellaneous', 'Home ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, 'Ankit', 'Goyal', 'ak.goyal1987@gmail.com', 'user', '9106cf317b8755d5adf20e3f2b1a67d7');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
