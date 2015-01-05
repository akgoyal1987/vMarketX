-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2015 at 12:32 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vmarketx`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(2, 'clothes'),
(4, 'kirana'),
(5, 'mobile'),
(6, 'electronic');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `state` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `state`) VALUES
(10, 'Indore', 'Chennai'),
(12, 'bhopal', 'Madhya Pradesh'),
(13, 'indore', 'Uttar Pradesh'),
(15, 'indore', 'maharastra'),
(16, 'gwalior', 'maharastra'),
(17, 'mumbai', 'maharastra'),
(18, 'hello', 'Uttar Pradesh');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `create_shop`
--

INSERT INTO `create_shop` (`s_id`, `shop_name`, `shop_category`, `address`, `location`, `city`, `state`, `postal_code`, `phone_no`, `email`, `min_ammount`, `description`, `user_id`, `image1`, `image2`, `image3`, `image4`, `date_time`) VALUES
(56, 'gaurav11', 'cloth', '148, sukh sagar avenue ,vishnupuri main,bhavakua,', 'bhawarkua', 'bhopal', 'Bihar', 452001, '9074739352', 'gargrocks786@gmail.com', 300, 'sasassa', 'user', 'Capture3.PNG', 'chili-powder-13.jpg', 'Chilli-powder-0043.jpg', '97893509479442.jpg', '2014-12-25 00:33:54'),
(57, 'sorav', 'cloth', 'bhavarkuan', 'bhawarkua1', 'bhopal', 'Bihar', 453331, '9074739352', 'soravgarg123@gmail.com', 1000, 'fedfddf', 'user', 'Chrysanthemum.jpg', 'Desert.jpg', 'Hydrangeas.jpg', 'Jellyfish.jpg', '2014-12-27 01:43:05'),
(58, 'gaurav', 'kirana', 'bhavarkuan', 'bhawarkua1', 'indore', 'Chennai', 453331, '9074739352', 'soravgarg123@gmail.com', 4343, 'fefdefes', 'user', 'Lighthouse.jpg', NULL, NULL, NULL, '2014-12-27 01:43:29'),
(59, 'gaurav11', 'cloth', 'bhavarkuan', 'bhawarkua1', 'indore', 'Bihar', 453331, '9074739352', 'anayrahulhot@gmail.com', 1000, 'dfdfdfdfd', 'user', 'Penguins.jpg', NULL, NULL, NULL, '2014-12-27 01:43:55'),
(60, 'gaurav1', 'kirana', '148, sukh sagar avenue ,vishnupuri main,bhavakua,', 'bhawarkua', 'gwalior', 'chattishgarh', 999999, '6767666666', 'anayrahulhot@gmail.com', 1000, 'fdffdfdf', 'user', 'Tulips.jpg', NULL, NULL, NULL, '2014-12-27 01:44:21'),
(61, 'ddsd', 'cloth', 'bhavarkuan', 'bhawarkua', 'bhopal', 'Bihar', 676756, '6767666666', 'dongre123dongre@gmail.com', 300, 'dfdfdfd', 'user', 'Koala.jpg', NULL, NULL, NULL, '2014-12-27 01:44:49'),
(62, 'gaurav11', 'cloth', '148, sukh sagar avenue ,vishnupuri main,bhavakua,', 'bhawarkua1', 'mumbai', 'Bihar', 453331, '6767666666', 'gauravgargcs1991@gmail.com', 1000, 'dfdfdfd', 'user', 'Hydrangeas1.jpg', NULL, NULL, NULL, '2014-12-27 01:45:10');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `city`, `state`) VALUES
(1, 'bhawarkua', 'bhopal', 'Madhya Pradesh'),
(2, 'bhawarkua1', 'bhopal', 'Madhya Pradesh'),
(3, 'vishnupuri', 'Indore', 'Uttar Pradesh'),
(4, 'vishnupuri', 'Indore', 'Uttar Pradesh');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `user_id`, `s_id`, `product_name`, `product_category`, `product_subcategory`, `min_quantity`, `unit`, `mrp_price`, `selling_price`, `description`, `image1`, `image2`, `image3`, `image4`, `date_time`) VALUES
(65, 'user', 56, 'salt', 'kirana', 'sugar', 1, 'piece', 333, 200, 'xaxassxas', '97893509479444.jpg', 'Capture4.PNG', 'chili-powder-14.jpg', 'Chilli-powder-0044.jpg', '2014-12-25 00:34:51'),
(66, 'user', 56, 'Masala Papad', 'clothes', 'jackets', 1, 'piece', 120, 40.2, 'dsddsddsds', 'Chrysanthemum.jpg', 'Desert1.jpg', 'Hydrangeas.jpg', 'Jellyfish1.jpg', '2015-01-05 00:19:09');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(2, 'Uttar Pradesh'),
(3, 'Chennai'),
(4, 'Bihar'),
(5, 'maharastra'),
(6, 'chattishgarh'),
(7, 'chattishgarh');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE IF NOT EXISTS `sub_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `category` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `category`) VALUES
(2, 'jackets', 'clothes'),
(3, 'oil', 'kirana'),
(4, 'nokia', 'mobile'),
(5, 'laptop', 'electronic'),
(6, 'shirts', 'clothes'),
(7, 'sugar', 'kirana'),
(8, 'mouse', 'electronic'),
(9, 'samsung', 'mobile');

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
