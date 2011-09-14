-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 13, 2011 at 06:05 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE IF NOT EXISTS `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_pref_id` int(11) NOT NULL,
  `address` varchar(64) NOT NULL,
  `city` varchar(32) NOT NULL,
  `province` varchar(32) DEFAULT NULL,
  `country` varchar(32) DEFAULT NULL,
  `postal` varchar(16) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `addresses`
--


-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE IF NOT EXISTS `awards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `title` text,
  `effect` text,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `awards`
--


-- --------------------------------------------------------

--
-- Table structure for table `cuisine_types`
--

CREATE TABLE IF NOT EXISTS `cuisine_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cuisine_types`
--


-- --------------------------------------------------------

--
-- Table structure for table `cuisine_types_customer_prefs`
--

CREATE TABLE IF NOT EXISTS `cuisine_types_customer_prefs` (
  `cuisine_type_id` int(11) NOT NULL,
  `customer_pref_id` int(11) NOT NULL,
  PRIMARY KEY (`cuisine_type_id`,`customer_pref_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuisine_types_customer_prefs`
--

-- --------------------------------------------------------

--
-- Table structure for table `dine_types`
--

CREATE TABLE IF NOT EXISTS `dine_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dine_types`
--

INSERT INTO `dine_types` (`id`, `name`, `description`) VALUES
(1, 'Dine-In', 'Go to restaurant and eat there.'),
(2, 'Take-Out', 'Go to restaurant and pick up the goods.'),
(3, 'Delivery', 'Goods will be delivered to the specified location');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Admin, Owner, Customer' AUTO_INCREMENT=4;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'owner'),
(3, 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `confirm_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `complete_time` datetime DEFAULT NULL,
  `total_amont` decimal(10,0) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `orders`
--


-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE IF NOT EXISTS `payment_methods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_type_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `cc_number` varchar(64) NOT NULL,
  `verification_number` int(11) NOT NULL,
  `expiry` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cc_number` (`cc_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `payment_methods`
--


-- --------------------------------------------------------

--
-- Table structure for table `payment_types`
--

CREATE TABLE IF NOT EXISTS `payment_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `payment_types`
--

INSERT INTO `payment_types` (`id`, `name`) VALUES
(1, 'VISA'),
(2, 'Mastercard');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT '3',
  `email` varchar(64) NOT NULL,  
  `username` varchar(24) NOT NULL,
  `password` char(40) NOT NULL,
  `active` tinyint(1) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  FOREIGN KEY (group_id) REFERENCES groups(id) ON DELETE CASCADE  
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `group_id`, `email`,  `user_name`, `password`, `active`, `created`, `modified`) VALUES
(1, 3, 'cmpt470-toopink@googlegroups.com', 'muu', 'muu', 0, '2011-07-13 18:00:54', '2011-07-13 18:00:57');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `user_id` int(11),
  `dine_type_id` int(11) DEFAULT NULL,
  `first_name` varchar(32) DEFAULT NULL,
  `last_name` varchar(32) DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `payment_method_id` int(11) DEFAULT NULL,
  `max_suggestion` int(11) DEFAULT NULL,
  `budget` decimal(10,2) DEFAULT NULL,
  `calorie` int(11) DEFAULT NULL,
  `notes` text,
   FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_prefs`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_awards`
--

CREATE TABLE IF NOT EXISTS `users_awards` (
  `user_id` int(11) NOT NULL,
  `award_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`award_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_awards`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
