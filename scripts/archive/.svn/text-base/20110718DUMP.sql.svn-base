-- MySQL dump 10.13  Distrib 5.1.54, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	5.1.54-1ubuntu4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (1,NULL,NULL,NULL,'controllers',1,2);
/*!40000 ALTER TABLE `acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `address` varchar(64) NOT NULL,
  `city` varchar(32) NOT NULL,
  `province` varchar(32) DEFAULT NULL,
  `country` varchar(32) DEFAULT NULL,
  `postal` varchar(16) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `province` (`province`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` VALUES (16,NULL,'User',11,NULL,13,14),(14,NULL,'Group',10,NULL,9,10),(13,NULL,'Group',9,NULL,5,8),(12,NULL,'Group',8,NULL,1,4),(15,NULL,'User',10,NULL,11,12),(17,NULL,'User',12,NULL,15,16),(19,NULL,'User',14,NULL,17,18),(20,NULL,'User',15,NULL,19,20),(21,NULL,'User',16,NULL,21,22),(22,13,'User',17,NULL,6,7),(23,12,'User',18,NULL,2,3);
/*!40000 ALTER TABLE `aros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `awards`
--

DROP TABLE IF EXISTS `awards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `awards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(75) NOT NULL,
  `effect` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `awards`
--

LOCK TABLES `awards` WRITE;
/*!40000 ALTER TABLE `awards` DISABLE KEYS */;
/*!40000 ALTER TABLE `awards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuisine_types`
--

DROP TABLE IF EXISTS `cuisine_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuisine_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuisine_types`
--

LOCK TABLES `cuisine_types` WRITE;
/*!40000 ALTER TABLE `cuisine_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `cuisine_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuisine_types_customer_prefs`
--

DROP TABLE IF EXISTS `cuisine_types_customer_prefs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuisine_types_customer_prefs` (
  `cuisine_type_id` int(11) NOT NULL,
  `customer_pref_id` int(11) NOT NULL,
  PRIMARY KEY (`cuisine_type_id`,`customer_pref_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuisine_types_customer_prefs`
--

LOCK TABLES `cuisine_types_customer_prefs` WRITE;
/*!40000 ALTER TABLE `cuisine_types_customer_prefs` DISABLE KEYS */;
/*!40000 ALTER TABLE `cuisine_types_customer_prefs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_prefs`
--

DROP TABLE IF EXISTS `customer_prefs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_prefs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `dine_type_id` int(11) DEFAULT NULL,
  `payment_method_id` int(11) DEFAULT NULL,
  `max_suggestion` int(11) DEFAULT NULL,
  `budget` float(10,2) DEFAULT NULL,
  `calorie` int(11) DEFAULT NULL,
  `notes` text,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_prefs`
--

LOCK TABLES `customer_prefs` WRITE;
/*!40000 ALTER TABLE `customer_prefs` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer_prefs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `user_id` int(11) DEFAULT NULL,
  `dine_type_id` int(11) DEFAULT NULL,
  `first_name` varchar(32) DEFAULT NULL,
  `last_name` varchar(32) DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `payment_method_id` int(11) DEFAULT NULL,
  `max_suggestion` int(11) DEFAULT NULL,
  `budget` decimal(10,2) DEFAULT NULL,
  `calorie` int(11) DEFAULT NULL,
  `notes` text,
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dine_types`
--

DROP TABLE IF EXISTS `dine_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dine_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dine_types`
--

LOCK TABLES `dine_types` WRITE;
/*!40000 ALTER TABLE `dine_types` DISABLE KEYS */;
INSERT INTO `dine_types` VALUES (1,'Dine-In','Go to restaurant and eat there.'),(2,'Take-Out','Go to restaurant and pick up the goods.'),(3,'Delivery','Goods will be delivered to the specified location');
/*!40000 ALTER TABLE `dine_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `food_orders`
--

DROP TABLE IF EXISTS `food_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `food_orders` (
  `order_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`order_id`,`food_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `food_orders`
--

LOCK TABLES `food_orders` WRITE;
/*!40000 ALTER TABLE `food_orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `food_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `food_reviews`
--

DROP TABLE IF EXISTS `food_reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `food_reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text,
  `rating` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `food_reviews`
--

LOCK TABLES `food_reviews` WRITE;
/*!40000 ALTER TABLE `food_reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `food_reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `food_set_menu`
--

DROP TABLE IF EXISTS `food_set_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `food_set_menu` (
  `food_id` int(11) NOT NULL,
  `set_menu_id` int(11) NOT NULL,
  PRIMARY KEY (`food_id`,`set_menu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `food_set_menu`
--

LOCK TABLES `food_set_menu` WRITE;
/*!40000 ALTER TABLE `food_set_menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `food_set_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `food_stores`
--

DROP TABLE IF EXISTS `food_stores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `food_stores` (
  `food_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  PRIMARY KEY (`food_id`,`store_id`),
  UNIQUE KEY `food_id` (`food_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `food_stores`
--

LOCK TABLES `food_stores` WRITE;
/*!40000 ALTER TABLE `food_stores` DISABLE KEYS */;
/*!40000 ALTER TABLE `food_stores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `food_types`
--

DROP TABLE IF EXISTS `food_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `food_types` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `food_types`
--

LOCK TABLES `food_types` WRITE;
/*!40000 ALTER TABLE `food_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `food_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foods`
--

DROP TABLE IF EXISTS `foods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food_type_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `serve_size` int(11) DEFAULT NULL,
  `cost` float(10,2) NOT NULL,
  `calorie` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `img` blob,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foods`
--

LOCK TABLES `foods` WRITE;
/*!40000 ALTER TABLE `foods` DISABLE KEYS */;
/*!40000 ALTER TABLE `foods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COMMENT='Owner, Customer, Admin';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (10,'Administrator'),(9,'RestaurantOwner'),(8,'Customer');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `confirm_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `complete_time` datetime DEFAULT NULL,
  `total_amount` float(10,2) NOT NULL DEFAULT '0.00',
  `total_calorie` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_methods`
--

DROP TABLE IF EXISTS `payment_methods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_methods` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_methods`
--

LOCK TABLES `payment_methods` WRITE;
/*!40000 ALTER TABLE `payment_methods` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment_methods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_types`
--

DROP TABLE IF EXISTS `payment_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_types`
--

LOCK TABLES `payment_types` WRITE;
/*!40000 ALTER TABLE `payment_types` DISABLE KEYS */;
INSERT INTO `payment_types` VALUES (1,'VISA'),(2,'Mastercard');
/*!40000 ALTER TABLE `payment_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `set_menu`
--

DROP TABLE IF EXISTS `set_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `set_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `total_calorie` int(11) NOT NULL,
  `total_cost` float(10,2) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `set_menu`
--

LOCK TABLES `set_menu` WRITE;
/*!40000 ALTER TABLE `set_menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `set_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `set_menu_stores`
--

DROP TABLE IF EXISTS `set_menu_stores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `set_menu_stores` (
  `store_id` int(11) NOT NULL,
  `set_menu_id` int(11) NOT NULL,
  PRIMARY KEY (`store_id`,`set_menu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `set_menu_stores`
--

LOCK TABLES `set_menu_stores` WRITE;
/*!40000 ALTER TABLE `set_menu_stores` DISABLE KEYS */;
/*!40000 ALTER TABLE `set_menu_stores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stores`
--

DROP TABLE IF EXISTS `stores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cuisine_type_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` text,
  `phone` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(40) NOT NULL,
  `province` varchar(40) NOT NULL,
  `postal` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `avg_rating` int(11) DEFAULT NULL,
  `dine_in` tinyint(1) NOT NULL,
  `takeout` tinyint(1) NOT NULL,
  `delivery` tinyint(1) NOT NULL,
  `open_hrs` time NOT NULL,
  `close_hrs` time NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stores`
--

LOCK TABLES `stores` WRITE;
/*!40000 ALTER TABLE `stores` DISABLE KEYS */;
/*!40000 ALTER TABLE `stores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `first_name` varchar(32) DEFAULT NULL,
  `last_name` varchar(32) DEFAULT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `username` varchar(24) NOT NULL,
  `password` char(40) NOT NULL,
  `active` tinyint(1) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (16,8,'eggy','eggy','hoboman313@hotmail.com','','eggy','c7266b581af46d9839f0891bfee66a2711c23e1e',1,'2011-07-17 13:17:57','2011-07-17 13:18:32'),(11,10,'Masur','Ho','mhh3@sfu.ca','6048362293','mush','1f3d4ff2168a1afa4f165d14b72e95045b19a682',1,'2011-07-15 17:16:43','2011-07-15 17:17:13'),(10,10,'admin','admin','gal3@sfu.ca','5555555555','admin','48aec8d11d1aaa36acccc28eb4c8f6e12a5b4407',1,'2011-07-15 15:41:45','2011-07-15 15:53:56'),(17,9,'owner','owner','ownerowner@sfu.ca','','owner','eab88bf3ae2291f598887abf9cbe18a13f0a36a1',1,'2011-07-17 19:31:00','2011-07-17 19:31:00'),(18,8,'customer','customer','customercustomer@sfu.ca','','customer','94f095892621bcedab4b84fc59ce56a434538e3c',1,'2011-07-17 19:31:20','2011-07-17 19:31:20');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-07-18 12:52:04
