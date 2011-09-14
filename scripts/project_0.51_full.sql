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
) ENGINE=MyISAM AUTO_INCREMENT=261 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (1,NULL,NULL,NULL,'controllers',1,520),(2,1,NULL,NULL,'Pages',2,15),(3,2,NULL,NULL,'display',3,4),(4,2,NULL,NULL,'add',5,6),(5,2,NULL,NULL,'edit',7,8),(6,2,NULL,NULL,'index',9,10),(7,2,NULL,NULL,'view',11,12),(8,2,NULL,NULL,'delete',13,14),(9,1,NULL,NULL,'Owners',16,75),(10,9,NULL,NULL,'index',17,18),(11,9,NULL,NULL,'restaurants',19,20),(12,9,NULL,NULL,'history',21,22),(13,9,NULL,NULL,'statistics',23,24),(14,9,NULL,NULL,'info',25,26),(15,9,NULL,NULL,'edit_pass',27,28),(16,9,NULL,NULL,'edit_info',29,30),(17,9,NULL,NULL,'preferences',31,32),(18,9,NULL,NULL,'settings',33,34),(19,9,NULL,NULL,'add',35,36),(20,9,NULL,NULL,'edit',37,38),(21,9,NULL,NULL,'view',39,40),(22,9,NULL,NULL,'delete',41,42),(23,1,NULL,NULL,'CuisineTypes',76,97),(24,23,NULL,NULL,'index',77,78),(25,23,NULL,NULL,'view',79,80),(26,23,NULL,NULL,'add',81,82),(27,23,NULL,NULL,'edit',83,84),(28,23,NULL,NULL,'delete',85,86),(29,23,NULL,NULL,'admin_index',87,88),(30,23,NULL,NULL,'admin_view',89,90),(31,23,NULL,NULL,'admin_add',91,92),(32,23,NULL,NULL,'admin_edit',93,94),(33,23,NULL,NULL,'admin_delete',95,96),(34,1,NULL,NULL,'Customers',98,175),(35,34,NULL,NULL,'index',99,100),(36,34,NULL,NULL,'suggestions',101,102),(37,34,NULL,NULL,'orders',103,104),(38,34,NULL,NULL,'history',105,106),(39,34,NULL,NULL,'statistics',107,108),(40,34,NULL,NULL,'achievements',109,110),(41,34,NULL,NULL,'edit_pass',111,112),(42,34,NULL,NULL,'edit_info',113,114),(43,34,NULL,NULL,'preferences',115,116),(44,34,NULL,NULL,'food_reviews',117,118),(45,34,NULL,NULL,'addresses',119,120),(46,34,NULL,NULL,'addresses_add',121,122),(47,34,NULL,NULL,'addresses_edit',123,124),(48,34,NULL,NULL,'addresses_delete',125,126),(49,34,NULL,NULL,'payment_methods',127,128),(50,34,NULL,NULL,'payment_add',129,130),(51,34,NULL,NULL,'payment_edit',131,132),(52,34,NULL,NULL,'payment_delete',133,134),(53,34,NULL,NULL,'settings',135,136),(54,34,NULL,NULL,'add',137,138),(55,34,NULL,NULL,'edit',139,140),(56,34,NULL,NULL,'view',141,142),(57,34,NULL,NULL,'delete',143,144),(58,1,NULL,NULL,'Groups',176,199),(59,58,NULL,NULL,'index',177,178),(60,58,NULL,NULL,'view',179,180),(61,58,NULL,NULL,'add',181,182),(62,58,NULL,NULL,'edit',183,184),(63,58,NULL,NULL,'delete',185,186),(64,58,NULL,NULL,'admin_index',187,188),(65,58,NULL,NULL,'admin_view',189,190),(66,58,NULL,NULL,'admin_add',191,192),(67,58,NULL,NULL,'admin_edit',193,194),(68,58,NULL,NULL,'admin_delete',195,196),(69,58,NULL,NULL,'build_acl',197,198),(70,1,NULL,NULL,'FoodTypes',200,221),(71,70,NULL,NULL,'index',201,202),(72,70,NULL,NULL,'view',203,204),(73,70,NULL,NULL,'add',205,206),(74,70,NULL,NULL,'edit',207,208),(75,70,NULL,NULL,'delete',209,210),(76,70,NULL,NULL,'admin_index',211,212),(77,70,NULL,NULL,'admin_view',213,214),(78,70,NULL,NULL,'admin_add',215,216),(79,70,NULL,NULL,'admin_edit',217,218),(80,70,NULL,NULL,'admin_delete',219,220),(81,1,NULL,NULL,'Admins',222,233),(82,81,NULL,NULL,'index',223,224),(83,81,NULL,NULL,'add',225,226),(84,81,NULL,NULL,'edit',227,228),(85,81,NULL,NULL,'view',229,230),(86,81,NULL,NULL,'delete',231,232),(87,1,NULL,NULL,'Addresses',234,255),(88,87,NULL,NULL,'index',235,236),(89,87,NULL,NULL,'view',237,238),(90,87,NULL,NULL,'add',239,240),(91,87,NULL,NULL,'edit',241,242),(92,87,NULL,NULL,'delete',243,244),(93,87,NULL,NULL,'admin_index',245,246),(94,87,NULL,NULL,'admin_view',247,248),(95,87,NULL,NULL,'admin_add',249,250),(96,87,NULL,NULL,'admin_edit',251,252),(97,87,NULL,NULL,'admin_delete',253,254),(98,1,NULL,NULL,'Foods',256,277),(99,98,NULL,NULL,'index',257,258),(100,98,NULL,NULL,'view',259,260),(101,98,NULL,NULL,'add',261,262),(102,98,NULL,NULL,'edit',263,264),(103,98,NULL,NULL,'delete',265,266),(104,98,NULL,NULL,'admin_index',267,268),(105,98,NULL,NULL,'admin_view',269,270),(106,98,NULL,NULL,'admin_add',271,272),(107,98,NULL,NULL,'admin_edit',273,274),(108,98,NULL,NULL,'admin_delete',275,276),(109,1,NULL,NULL,'Stores',278,299),(110,109,NULL,NULL,'index',279,280),(111,109,NULL,NULL,'view',281,282),(112,109,NULL,NULL,'add',283,284),(113,109,NULL,NULL,'edit',285,286),(114,109,NULL,NULL,'delete',287,288),(115,109,NULL,NULL,'admin_index',289,290),(116,109,NULL,NULL,'admin_view',291,292),(117,109,NULL,NULL,'admin_add',293,294),(118,109,NULL,NULL,'admin_edit',295,296),(119,109,NULL,NULL,'admin_delete',297,298),(120,1,NULL,NULL,'Home',300,325),(121,120,NULL,NULL,'index',301,302),(122,120,NULL,NULL,'contact',303,304),(123,120,NULL,NULL,'about',305,306),(124,120,NULL,NULL,'privacy',307,308),(125,120,NULL,NULL,'terms',309,310),(126,120,NULL,NULL,'partners',311,312),(127,120,NULL,NULL,'testimonials',313,314),(128,120,NULL,NULL,'add',315,316),(129,120,NULL,NULL,'edit',317,318),(130,120,NULL,NULL,'view',319,320),(131,120,NULL,NULL,'delete',321,322),(132,1,NULL,NULL,'CustomerPrefs',326,347),(133,132,NULL,NULL,'index',327,328),(134,132,NULL,NULL,'view',329,330),(135,132,NULL,NULL,'add',331,332),(136,132,NULL,NULL,'edit',333,334),(137,132,NULL,NULL,'delete',335,336),(138,132,NULL,NULL,'admin_index',337,338),(139,132,NULL,NULL,'admin_view',339,340),(140,132,NULL,NULL,'admin_add',341,342),(141,132,NULL,NULL,'admin_edit',343,344),(142,132,NULL,NULL,'admin_delete',345,346),(143,1,NULL,NULL,'PaymentMethods',348,369),(144,143,NULL,NULL,'index',349,350),(145,143,NULL,NULL,'view',351,352),(146,143,NULL,NULL,'add',353,354),(147,143,NULL,NULL,'edit',355,356),(148,143,NULL,NULL,'delete',357,358),(149,143,NULL,NULL,'admin_index',359,360),(150,143,NULL,NULL,'admin_view',361,362),(151,143,NULL,NULL,'admin_add',363,364),(152,143,NULL,NULL,'admin_edit',365,366),(153,143,NULL,NULL,'admin_delete',367,368),(154,1,NULL,NULL,'Users',370,409),(155,154,NULL,NULL,'index',371,372),(156,154,NULL,NULL,'view',373,374),(157,154,NULL,NULL,'register',375,376),(158,154,NULL,NULL,'edit',377,378),(159,154,NULL,NULL,'delete',379,380),(160,154,NULL,NULL,'admin_index',381,382),(161,154,NULL,NULL,'admin_view',383,384),(162,154,NULL,NULL,'admin_add',385,386),(163,154,NULL,NULL,'admin_edit',387,388),(164,154,NULL,NULL,'admin_delete',389,390),(165,154,NULL,NULL,'thanks',391,392),(166,154,NULL,NULL,'login',393,394),(167,154,NULL,NULL,'verify',395,396),(168,154,NULL,NULL,'logout',397,398),(169,154,NULL,NULL,'recover',399,400),(170,154,NULL,NULL,'activate',401,402),(171,154,NULL,NULL,'initDB',403,404),(172,154,NULL,NULL,'add',405,406),(173,1,NULL,NULL,'Orders',410,431),(174,173,NULL,NULL,'index',411,412),(175,173,NULL,NULL,'view',413,414),(176,173,NULL,NULL,'add',415,416),(177,173,NULL,NULL,'edit',417,418),(178,173,NULL,NULL,'delete',419,420),(179,173,NULL,NULL,'admin_index',421,422),(180,173,NULL,NULL,'admin_view',423,424),(181,173,NULL,NULL,'admin_add',425,426),(182,173,NULL,NULL,'admin_edit',427,428),(183,173,NULL,NULL,'admin_delete',429,430),(184,1,NULL,NULL,'PaymentTypes',432,453),(185,184,NULL,NULL,'index',433,434),(186,184,NULL,NULL,'view',435,436),(187,184,NULL,NULL,'add',437,438),(188,184,NULL,NULL,'edit',439,440),(189,184,NULL,NULL,'delete',441,442),(190,184,NULL,NULL,'admin_index',443,444),(191,184,NULL,NULL,'admin_view',445,446),(192,184,NULL,NULL,'admin_add',447,448),(193,184,NULL,NULL,'admin_edit',449,450),(194,184,NULL,NULL,'admin_delete',451,452),(195,1,NULL,NULL,'SetMenus',454,475),(196,195,NULL,NULL,'index',455,456),(197,195,NULL,NULL,'view',457,458),(198,195,NULL,NULL,'add',459,460),(199,195,NULL,NULL,'edit',461,462),(200,195,NULL,NULL,'delete',463,464),(201,195,NULL,NULL,'admin_index',465,466),(202,195,NULL,NULL,'admin_view',467,468),(203,195,NULL,NULL,'admin_add',469,470),(204,195,NULL,NULL,'admin_edit',471,472),(205,195,NULL,NULL,'admin_delete',473,474),(206,1,NULL,NULL,'FoodReviews',476,497),(207,206,NULL,NULL,'index',477,478),(208,206,NULL,NULL,'view',479,480),(209,206,NULL,NULL,'add',481,482),(210,206,NULL,NULL,'edit',483,484),(211,206,NULL,NULL,'delete',485,486),(212,206,NULL,NULL,'admin_index',487,488),(213,206,NULL,NULL,'admin_view',489,490),(214,206,NULL,NULL,'admin_add',491,492),(215,206,NULL,NULL,'admin_edit',493,494),(216,206,NULL,NULL,'admin_delete',495,496),(217,1,NULL,NULL,'Awards',498,519),(218,217,NULL,NULL,'index',499,500),(219,217,NULL,NULL,'view',501,502),(220,217,NULL,NULL,'admin_index',503,504),(221,217,NULL,NULL,'admin_view',505,506),(222,217,NULL,NULL,'admin_add',507,508),(223,217,NULL,NULL,'admin_edit',509,510),(224,217,NULL,NULL,'admin_delete',511,512),(225,217,NULL,NULL,'add',513,514),(226,217,NULL,NULL,'edit',515,516),(227,217,NULL,NULL,'delete',517,518),(228,9,NULL,NULL,'stores',43,44),(229,9,NULL,NULL,'store_view',45,46),(230,9,NULL,NULL,'store_add',47,48),(231,9,NULL,NULL,'store_edit',49,50),(232,9,NULL,NULL,'store_delete',51,52),(233,9,NULL,NULL,'foods',53,54),(234,9,NULL,NULL,'food_add',55,56),(235,9,NULL,NULL,'food_edit',57,58),(236,9,NULL,NULL,'set_menus',59,60),(237,9,NULL,NULL,'set_menu_view',61,62),(238,9,NULL,NULL,'set_menu_add',63,64),(239,9,NULL,NULL,'set_menu_edit',65,66),(240,9,NULL,NULL,'set_menu_delete',67,68),(241,34,NULL,NULL,'view_comment',145,146),(242,34,NULL,NULL,'suggest_breakfast',147,148),(243,34,NULL,NULL,'suggest_lunch',149,150),(244,34,NULL,NULL,'suggest_dinner',151,152),(245,34,NULL,NULL,'suggest_favorite',153,154),(246,34,NULL,NULL,'current_pref',155,156),(247,34,NULL,NULL,'browseAllSetMenus',157,158),(248,34,NULL,NULL,'order_directions',159,160),(249,34,NULL,NULL,'food_reviews_new',161,162),(250,34,NULL,NULL,'orders_details',163,164),(251,34,NULL,NULL,'checkout',165,166),(252,34,NULL,NULL,'checkout_confirm',167,168),(253,34,NULL,NULL,'confirmed',169,170),(254,34,NULL,NULL,'contact',171,172),(255,120,NULL,NULL,'sitemap',323,324),(256,154,NULL,NULL,'reactivate',407,408),(257,34,NULL,NULL,'personal',173,174),(258,9,NULL,NULL,'personal',69,70),(259,9,NULL,NULL,'contact',71,72),(260,9,NULL,NULL,'view_comment',73,74);
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
  `customer_pref_id` int(11) DEFAULT NULL,
  `type` varchar(64) NOT NULL DEFAULT 'Home',
  `address` varchar(64) NOT NULL,
  `city` varchar(32) NOT NULL,
  `province` varchar(32) NOT NULL DEFAULT 'BC',
  `country` varchar(32) NOT NULL DEFAULT 'Canada',
  `postal` varchar(16) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
INSERT INTO `addresses` VALUES (23,4,'Work','7535 Alderbridge Way','Richmond','BC','Canada','V6X 4L2','2011-07-26 18:47:36','2011-08-06 20:24:55'),(24,6,'Work','Work Address for 6','Langley','BC','Canada',NULL,'2011-07-26 18:47:36','2011-07-26 18:47:36'),(25,9,'Work','Work Address for 9','Burnaby','BC','Canada',NULL,'2011-07-26 18:47:36','2011-07-26 18:47:36'),(26,4,'Home','1068 West Broadway','Vancouver','BC','Canada','V6H 0A7','2011-07-26 18:51:59','2011-08-06 20:25:17'),(27,6,'Home','Home Address for 6','Surrey','BC','Canada',NULL,'2011-07-26 18:51:59','2011-07-26 18:51:59'),(28,9,'Home','Home Address for 9','Coquitlam','BC','Canada',NULL,'2011-07-26 18:51:59','2011-07-26 18:51:59'),(29,4,'Other','8200 Park Road','Richmond','BC','Canada','V6Y 2Y8','2011-07-26 18:52:31','2011-08-06 20:25:29'),(30,6,'Other','Other Address for 6','Burnaby','BC','Canada',NULL,'2011-07-26 18:52:31','2011-07-26 18:52:31'),(31,9,'Other','Other Address for 9','Burnaby','BC','Canada',NULL,'2011-07-26 18:52:31','2011-07-26 18:52:31'),(32,11,'Home','Home Address for 11','Langley','BC','Canada',NULL,'2011-07-26 22:42:45','2011-07-26 22:42:45'),(33,13,'Home','Home Address for 13','Richmond','BC','Canada',NULL,'2011-07-26 22:42:45','2011-07-26 22:42:45'),(34,14,'Home','Home Address for 14','Burnaby','BC','Canada',NULL,'2011-07-26 22:42:45','2011-07-26 22:42:45'),(35,15,'Home','Home Address for 15','Surrey','BC','Canada',NULL,'2011-07-26 22:42:45','2011-07-26 22:42:45'),(36,16,'Home','Home Address for 16','Vancouver','BC','Canada',NULL,'2011-07-26 22:42:45','2011-07-26 22:42:45'),(37,17,'Home','Home Address for 17','Langley','BC','Canada',NULL,'2011-07-26 22:42:45','2011-07-26 22:42:45'),(38,18,'Home','Home Address for 18','North Van','BC','Canada',NULL,'2011-07-26 22:42:45','2011-07-26 22:42:45'),(39,19,'Home','Home Address for 19','North Van','BC','Canada',NULL,'2011-07-26 22:42:45','2011-07-26 22:42:45'),(40,11,'Work','Work Address for 11','Burnaby','BC','Canada',NULL,'2011-07-26 22:42:52','2011-07-26 22:42:52'),(41,13,'Work','Work Address for 13','Surrey','BC','Canada',NULL,'2011-07-26 22:42:52','2011-07-26 22:42:52'),(42,14,'Work','Work Address for 14','Surrey','BC','Canada',NULL,'2011-07-26 22:42:52','2011-07-26 22:42:52'),(43,15,'Work','Work Address for 15','Coquitlam','BC','Canada',NULL,'2011-07-26 22:42:52','2011-07-26 22:42:52'),(44,16,'Work','Work Address for 16','Vancouver','BC','Canada',NULL,'2011-07-26 22:42:52','2011-07-26 22:42:52'),(45,17,'Work','Work Address for 17','Vancouver','BC','Canada',NULL,'2011-07-26 22:42:52','2011-07-26 22:42:52'),(46,18,'Work','Work Address for 18','Coquitlam','BC','Canada',NULL,'2011-07-26 22:42:52','2011-07-26 22:42:52'),(47,19,'Work','Work Address for 19','Surrey','BC','Canada',NULL,'2011-07-26 22:42:52','2011-07-26 22:42:52'),(48,11,'Other','Other Address for 11','Vancouver','BC','Canada',NULL,'2011-07-26 22:43:00','2011-07-26 22:43:00'),(49,13,'Other','Other Address for 13','Vancouver','BC','Canada',NULL,'2011-07-26 22:43:00','2011-07-26 22:43:00'),(50,14,'Other','Other Address for 14','Richmond','BC','Canada',NULL,'2011-07-26 22:43:00','2011-07-26 22:43:00'),(51,15,'Other','Other Address for 15','Burnaby','BC','Canada',NULL,'2011-07-26 22:43:00','2011-07-26 22:43:00'),(52,16,'Other','Other Address for 16','Burnaby','BC','Canada',NULL,'2011-07-26 22:43:00','2011-07-26 22:43:00'),(53,17,'Other','Other Address for 17','Coquitlam','BC','Canada',NULL,'2011-07-26 22:43:00','2011-07-26 22:43:00'),(54,18,'Other','Other Address for 18','Langley','BC','Canada',NULL,'2011-07-26 22:43:00','2011-07-26 22:43:00'),(55,19,'Other','Other Address for 19','Coquitlam','BC','Canada',NULL,'2011-07-26 22:43:00','2011-07-26 22:43:00');
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
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` VALUES (14,NULL,'Group',10,NULL,35,40),(13,NULL,'Group',9,NULL,27,34),(12,NULL,'Group',8,NULL,1,26),(30,12,'User',25,NULL,4,5),(29,12,'User',24,NULL,2,3),(26,14,'User',21,NULL,36,37),(27,13,'User',22,NULL,28,29),(28,13,'User',23,NULL,30,31),(31,12,'User',26,NULL,6,7),(32,13,'User',27,NULL,32,33),(33,14,'User',28,NULL,38,39),(34,12,'User',29,NULL,8,9),(35,12,'User',30,NULL,10,11),(36,12,'User',31,NULL,12,13),(37,12,'User',32,NULL,14,15),(38,12,'User',33,NULL,16,17),(39,12,'User',34,NULL,18,19),(40,12,'User',35,NULL,20,21),(41,12,'User',36,NULL,22,23),(42,13,'User',37,NULL,34,35),(43,13,'User',38,NULL,36,37),(44,13,'User',39,NULL,38,39),(45,13,'User',40,NULL,40,41),(46,13,'User',41,NULL,42,43),(47,13,'User',42,NULL,44,45),(48,13,'User',43,NULL,48,49),(49,13,'User',44,NULL,46,47),(50,13,'User',45,NULL,50,51),(51,13,'User',46,NULL,52,53),(52,13,'User',47,NULL,54,55),(53,13,'User',48,NULL,56,57),(54,13,'User',49,NULL,58,59),(55,13,'User',50,NULL,60,61),(56,13,'User',51,NULL,62,63),(57,13,'User',52,NULL,64,65),(58,13,'User',53,NULL,66,67),(59,13,'User',54,NULL,68,69),(60,12,'User',55,NULL,24,25);
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
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` VALUES (1,14,1,'-1','-1','-1','-1'),(2,14,81,'1','1','1','1'),(3,14,29,'1','1','1','1'),(4,14,30,'1','1','1','1'),(5,14,31,'1','1','1','1'),(6,14,32,'1','1','1','1'),(7,14,33,'1','1','1','1'),(8,14,64,'1','1','1','1'),(9,14,65,'1','1','1','1'),(10,14,66,'1','1','1','1'),(11,14,67,'1','1','1','1'),(12,14,68,'1','1','1','1'),(13,14,76,'1','1','1','1'),(14,14,77,'1','1','1','1'),(15,14,78,'1','1','1','1'),(16,14,79,'1','1','1','1'),(17,14,80,'1','1','1','1'),(18,14,93,'1','1','1','1'),(19,14,94,'1','1','1','1'),(20,14,95,'1','1','1','1'),(21,14,96,'1','1','1','1'),(22,14,97,'1','1','1','1'),(23,14,104,'1','1','1','1'),(24,14,105,'1','1','1','1'),(25,14,106,'1','1','1','1'),(26,14,107,'1','1','1','1'),(27,14,108,'1','1','1','1'),(28,14,115,'1','1','1','1'),(29,14,116,'1','1','1','1'),(30,14,117,'1','1','1','1'),(31,14,118,'1','1','1','1'),(32,14,119,'1','1','1','1'),(33,14,138,'1','1','1','1'),(34,14,139,'1','1','1','1'),(35,14,140,'1','1','1','1'),(36,14,141,'1','1','1','1'),(37,14,142,'1','1','1','1'),(38,14,149,'1','1','1','1'),(39,14,150,'1','1','1','1'),(40,14,151,'1','1','1','1'),(41,14,152,'1','1','1','1'),(42,14,153,'1','1','1','1'),(43,14,160,'1','1','1','1'),(44,14,161,'1','1','1','1'),(45,14,162,'1','1','1','1'),(46,14,163,'1','1','1','1'),(47,14,164,'1','1','1','1'),(48,14,179,'1','1','1','1'),(49,14,180,'1','1','1','1'),(50,14,181,'1','1','1','1'),(51,14,182,'1','1','1','1'),(52,14,183,'1','1','1','1'),(53,14,190,'1','1','1','1'),(54,14,191,'1','1','1','1'),(55,14,192,'1','1','1','1'),(56,14,193,'1','1','1','1'),(57,14,194,'1','1','1','1'),(58,14,201,'1','1','1','1'),(59,14,202,'1','1','1','1'),(60,14,203,'1','1','1','1'),(61,14,204,'1','1','1','1'),(62,14,205,'1','1','1','1'),(63,14,212,'1','1','1','1'),(64,14,213,'1','1','1','1'),(65,14,214,'1','1','1','1'),(66,14,215,'1','1','1','1'),(67,14,216,'1','1','1','1'),(68,14,220,'1','1','1','1'),(69,14,221,'1','1','1','1'),(70,14,222,'1','1','1','1'),(71,14,223,'1','1','1','1'),(72,14,224,'1','1','1','1'),(73,13,1,'-1','-1','-1','-1'),(74,13,9,'1','1','1','1'),(75,12,1,'-1','-1','-1','-1'),(76,12,34,'1','1','1','1'),(77,13,103,'1','1','1','1'),(78,13,200,'1','1','1','1');
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
  `effect` varchar(250) NOT NULL DEFAULT 'None',
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `awards`
--

LOCK TABLES `awards` WRITE;
/*!40000 ALTER TABLE `awards` DISABLE KEYS */;
INSERT INTO `awards` VALUES (1,'Orders of Ten!','10% discount on next order','Customer has reached 10 orders and will receive 10% on the next order.'),(2,'Following Orders 10','Free sides on next order.','Following our first suggestion for 10 times will allow the user to get free sides for next the 11th order.');
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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuisine_types`
--

LOCK TABLES `cuisine_types` WRITE;
/*!40000 ALTER TABLE `cuisine_types` DISABLE KEYS */;
INSERT INTO `cuisine_types` VALUES (1,'Japanese'),(2,'Korean'),(3,'Chinese'),(4,'Fast Food'),(5,'Indian'),(6,'Western'),(7,'Mexican'),(8,'Greek'),(9,'Italian'),(10,'Lebanese'),(11,'American'),(12,'Vietnamese');
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
INSERT INTO `cuisine_types_customer_prefs` VALUES (1,6),(1,11),(1,20),(2,20),(3,11),(4,8),(4,20),(5,19),(6,9),(6,20),(7,11),(7,19),(10,19);
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
  `user_id` int(11) NOT NULL,
  `max_suggestion` int(11) DEFAULT '25',
  `budget` float(10,2) DEFAULT '30.00',
  `calorie` int(11) DEFAULT '1800',
  `dine_in` tinyint(1) NOT NULL DEFAULT '1',
  `take_out` tinyint(1) NOT NULL DEFAULT '1',
  `delivery` tinyint(1) NOT NULL DEFAULT '1',
  `notes` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_prefs`
--

LOCK TABLES `customer_prefs` WRITE;
/*!40000 ALTER TABLE `customer_prefs` DISABLE KEYS */;
INSERT INTO `customer_prefs` VALUES (4,24,10,70.00,3000,0,0,0,'','2011-07-23 21:48:32','2011-08-06 20:15:54'),(6,26,NULL,500.00,1400,0,1,1,'Rawr. @ SFU!!','2011-07-25 14:07:17','2011-07-26 18:34:18'),(9,25,NULL,750.00,2500,1,1,0,'Cheeeeese','2011-07-25 14:52:31','2011-07-25 14:52:31'),(11,29,25,30.00,1800,1,1,1,'','2011-07-26 22:10:18','2011-07-26 22:15:01'),(13,31,25,116.00,2663,1,1,1,'Notes for customer 31','2011-07-26 22:33:25','2011-07-26 22:33:25'),(14,32,25,119.00,1336,1,1,1,'Notes for customer 32','2011-07-26 22:33:25','2011-07-26 22:33:25'),(15,33,25,87.00,1284,1,1,1,'Notes for customer 33','2011-07-26 22:33:25','2011-07-26 22:33:25'),(16,34,25,108.00,1489,1,1,1,'Notes for customer 34','2011-07-26 22:33:25','2011-07-26 22:33:25'),(17,35,25,99.00,2900,1,1,1,'Notes for customer 35','2011-07-26 22:33:25','2011-07-26 22:33:25'),(18,36,25,115.00,2582,1,1,1,'Notes for customer 36','2011-07-26 22:33:25','2011-07-26 22:33:25'),(19,30,25,60.00,1500,0,1,1,'','2011-07-26 22:35:39','2011-07-26 22:39:08'),(20,55,NULL,60.00,2100,0,0,1,'I am Muu Customer. ','2011-07-30 12:24:19','2011-07-30 12:24:19');
/*!40000 ALTER TABLE `customer_prefs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `food_reviews`
--

DROP TABLE IF EXISTS `food_reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `food_reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `set_menu_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `comment` text,
  `rating` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `food_reviews`
--

LOCK TABLES `food_reviews` WRITE;
/*!40000 ALTER TABLE `food_reviews` DISABLE KEYS */;
INSERT INTO `food_reviews` VALUES (2,36,24,10,'Yum!',4,'2011-08-06 20:32:35','2011-08-06 20:32:35'),(3,20,24,8,'Way too cold when I ate it.',2,'2011-08-06 20:39:33','2011-08-06 20:39:33'),(4,21,24,8,'Love the location',5,'2011-08-06 20:39:47','2011-08-06 20:39:47'),(5,36,24,10,'',3,'2011-08-06 21:05:35','2011-08-06 21:05:35'),(6,21,24,8,'',5,'2011-08-06 21:05:43','2011-08-06 21:05:43');
/*!40000 ALTER TABLE `food_reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `food_types`
--

DROP TABLE IF EXISTS `food_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `food_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `food_types`
--

LOCK TABLES `food_types` WRITE;
/*!40000 ALTER TABLE `food_types` DISABLE KEYS */;
INSERT INTO `food_types` VALUES (4,'Snack'),(1,'Breakfast'),(3,'Dinner'),(2,'Lunch'),(12,'Anytime');
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
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foods`
--

LOCK TABLES `foods` WRITE;
/*!40000 ALTER TABLE `foods` DISABLE KEYS */;
INSERT INTO `foods` VALUES (1,2,'Shrimp Tempura',200,5.00,500,'2011-07-25 12:50:09','2011-07-25 15:47:42',''),(2,4,'Assorted Sashimi',150,8.00,300,'2011-07-25 16:09:28','2011-07-25 16:09:28',''),(3,2,'Gyoza',100,6.00,200,'2011-07-25 16:25:07','2011-07-25 16:25:07',''),(4,3,'Cheese Ramen',500,9.00,677,'2011-07-25 16:29:45','2011-07-25 16:29:45',''),(5,2,'Tempura Domburi',250,7.50,400,'2011-07-25 16:30:56','2011-07-25 16:30:56',''),(6,2,'Yakisoba',150,5.99,300,'2011-07-25 16:32:18','2011-07-25 16:32:18',''),(7,3,'Katsudon',275,7.49,450,'2011-07-25 16:34:01','2011-07-25 16:34:01',''),(8,4,'Yakitori',150,4.99,199,'2011-07-25 16:38:38','2011-07-25 16:38:38',''),(11,4,'Root Beer Float',750,3.99,455,'2011-07-27 11:49:16','2011-07-27 11:49:16',''),(12,4,'Plain Noodle',14,5.49,425,'2011-07-27 11:49:50','2011-07-27 11:49:50',''),(13,3,'Beef Pho Noodle',NULL,7.00,777,'2011-07-27 11:50:28','2011-07-27 11:50:28',''),(14,2,'Banana Split',NULL,4.30,525,'2011-07-27 11:51:40','2011-07-27 11:51:40',''),(15,3,'Mini Seafood platter',NULL,9.99,450,'2011-07-27 11:52:52','2011-07-27 11:52:52',''),(16,4,'Rice Roll',NULL,4.22,350,'2011-07-27 11:55:04','2011-07-27 11:55:04',''),(17,4,'Veggie Stir Fry',4,7.50,500,'2011-07-27 11:56:00','2011-07-27 11:56:00',''),(18,4,'Rice ',250,1.11,250,'2011-07-27 11:57:44','2011-07-27 11:57:44',''),(19,3,'Fresh Lobster 1/2',NULL,8.88,588,'2011-07-27 11:58:25','2011-07-27 11:58:25',''),(20,12,'Chicken Supreme',NULL,4.99,380,'2011-07-27 12:03:51','2011-07-27 12:03:51',''),(21,12,'Poutine (M)',12,4.66,400,'2011-07-27 12:05:05','2011-07-27 12:05:05',''),(22,12,'Poutine (L)',NULL,5.66,600,'2011-07-27 12:05:40','2011-07-27 12:05:40',''),(23,12,'Meat ball Spaghetti',NULL,6.99,540,'2011-07-27 12:07:15','2011-07-27 12:07:15',''),(24,4,'Plain Rice ball',NULL,1.99,260,'2011-07-27 12:07:47','2011-07-27 12:07:47',''),(25,4,'Teriyaki Chicken',NULL,4.99,299,'2011-07-27 12:08:27','2011-07-27 12:08:27',''),(26,12,'Teriyaki Beef',NULL,9.50,599,'2011-07-27 12:11:10','2011-07-27 12:11:10',''),(27,12,'Rice',250,1.50,280,'2011-07-27 12:12:18','2011-07-27 12:12:18',''),(28,1,'Beef Soup',NULL,3.88,300,'2011-07-27 12:13:11','2011-07-27 12:13:11',''),(29,2,'Chicken Noodle Soup ',300,2.50,300,'2011-07-27 12:16:52','2011-07-27 12:16:52',''),(30,4,'Chopped carrots',150,1.99,150,'2011-07-27 12:17:46','2011-07-27 12:17:46',''),(31,12,'Spinach Quiche',450,4.50,500,'2011-07-27 12:18:37','2011-07-27 12:18:37',''),(32,12,'Garlic Bread',NULL,3.99,350,'2011-07-27 12:20:48','2011-07-27 12:20:48',''),(33,4,'Steamed Fillet',NULL,4.00,288,'2011-07-27 12:21:34','2011-07-27 12:21:34',''),(34,12,'Cheese Sandwich',NULL,2.99,400,'2011-07-27 12:22:20','2011-07-27 12:22:20',''),(35,3,'California Rolls',NULL,2.50,350,'2011-07-27 12:23:10','2011-07-27 12:23:10',''),(36,4,'Beef Soup',300,1.99,190,'2011-07-27 12:23:37','2011-07-27 12:23:37',''),(37,12,'Wings(12)',NULL,6.99,590,'2011-07-27 12:24:44','2011-07-27 12:24:44',''),(38,3,'Shrimp Salad',NULL,4.50,350,'2011-07-27 12:26:03','2011-07-27 12:26:03',''),(39,12,'Ribs',NULL,4.99,400,'2011-07-27 12:26:53','2011-07-27 12:26:53',''),(40,1,'Spicy Wonton',NULL,4.50,350,'2011-07-27 12:28:24','2011-07-27 12:28:24',''),(41,12,'Steamed Brocolli',NULL,2.88,250,'2011-07-27 12:30:56','2011-07-27 12:30:56',''),(42,12,'Lemonade',450,2.50,200,'2011-07-27 12:31:54','2011-07-27 12:31:54',''),(44,12,'Wonton Soup',NULL,4.00,610,'2011-07-27 12:34:00','2011-07-27 12:34:00',''),(45,12,'Special Pancake',300,2.88,250,'2011-07-27 12:36:00','2011-07-27 12:36:00',''),(46,12,'Mushroom Soup',400,2.99,400,'2011-07-27 12:36:40','2011-07-27 12:36:40',''),(47,12,'Wings (6)',NULL,2.99,350,'2011-07-27 12:39:04','2011-07-27 12:39:04',''),(48,12,'Grilled Corn',NULL,2.50,250,'2011-07-27 12:42:18','2011-07-27 12:42:18',''),(49,12,'Chicken Strips',5,3.99,333,'2011-08-06 17:35:47','2011-08-06 18:09:36',NULL),(50,12,'Softdrink - Coka Cola',500,1.99,144,'2011-08-06 17:36:10','2011-08-06 18:09:42',NULL),(51,12,'Fries (L)',NULL,4.88,222,'2011-08-06 17:37:52','2011-08-06 18:09:46',NULL),(52,2,'Beef Burger',NULL,4.79,350,'2011-08-06 18:37:51','2011-08-06 18:37:51',NULL),(53,3,'Steak - 10oz',NULL,21.99,450,'2011-08-06 18:41:31','2011-08-06 18:41:31',NULL),(54,12,'Lobster Tail',NULL,11.99,350,'2011-08-06 18:41:47','2011-08-06 18:41:47',NULL),(55,12,'Beer - Glass',500,11.99,35,'2011-08-06 18:48:21','2011-08-06 18:48:21',NULL),(56,4,'Calamari',300,8.99,250,'2011-08-06 18:52:01','2011-08-06 18:52:01',NULL),(57,4,'Shrimp Cocktail',NULL,9.99,250,'2011-08-06 18:52:26','2011-08-06 18:52:26',NULL),(58,12,'StreetDog',NULL,3.99,540,'2011-08-06 18:57:37','2011-08-06 18:57:37',NULL),(59,12,'Softdrink - Pepsi',350,0.99,120,'2011-08-06 18:58:02','2011-08-06 18:58:02',NULL),(60,12,'Softdrink - Sprite',350,0.99,250,'2011-08-06 18:58:40','2011-08-06 18:58:40',NULL),(61,12,'Bottle - Water',500,1.99,20,'2011-08-06 18:59:10','2011-08-06 18:59:10',NULL),(62,12,'Bottle - Apple Juice',350,2.50,160,'2011-08-06 18:59:36','2011-08-06 18:59:36',NULL),(63,12,'Jumbo StreetDog',NULL,5.99,600,'2011-08-06 19:00:16','2011-08-06 19:00:16',NULL),(64,12,'Cheesy StreetDog',NULL,4.99,560,'2011-08-06 19:00:42','2011-08-06 19:00:42',NULL),(65,12,'Bottle - Orange Juice',NULL,2.50,180,'2011-08-06 19:01:02','2011-08-06 19:01:02',NULL),(66,3,'Grilled Chicken',NULL,5.99,350,'2011-08-06 19:03:51','2011-08-06 19:03:51',NULL),(67,3,'Side - Fries',NULL,2.55,250,'2011-08-06 19:04:05','2011-08-06 19:04:05',NULL),(68,3,'Side - Ceasar Salad',NULL,3.99,299,'2011-08-06 19:04:20','2011-08-06 19:04:25',NULL),(69,3,'Side - Baked Potato',NULL,3.00,233,'2011-08-06 19:04:54','2011-08-06 19:04:59',NULL),(70,3,'Soup - Chilli',NULL,5.99,350,'2011-08-06 19:05:25','2011-08-06 19:05:25',NULL),(71,12,'Drink - Water',NULL,0.00,0,'2011-08-06 19:05:41','2011-08-06 19:05:41',NULL),(72,3,'Red Wine 1990 France',250,6.99,90,'2011-08-06 19:06:07','2011-08-06 19:06:07',NULL),(73,12,'Whisky',250,11.99,60,'2011-08-06 19:06:24','2011-08-06 19:06:24',NULL),(74,2,'Chicken Alfredo',350,6.99,500,'2011-08-06 19:07:01','2011-08-06 19:07:01',NULL),(80,1,'Juice',NULL,3.50,350,'2011-08-06 19:12:56','2011-08-06 19:14:36',NULL),(76,12,'Coffee',250,1.00,90,'2011-08-06 19:07:56','2011-08-06 19:07:56',NULL),(77,12,'Drink - Pepsi',NULL,1.22,120,'2011-08-06 19:08:39','2011-08-06 19:08:39',NULL),(78,12,'Drink - Seasonal Juice',NULL,1.66,160,'2011-08-06 19:09:00','2011-08-06 19:09:00',NULL),(79,1,'Bagel w/ creamcheese',NULL,2.66,190,'2011-08-06 19:12:17','2011-08-06 19:12:17',NULL),(81,4,'Fries(M)',NULL,2.49,260,'2011-08-06 19:16:00','2011-08-06 19:16:00',NULL);
/*!40000 ALTER TABLE `foods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foods_set_menus`
--

DROP TABLE IF EXISTS `foods_set_menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foods_set_menus` (
  `food_id` int(11) NOT NULL,
  `set_menu_id` int(11) NOT NULL,
  PRIMARY KEY (`food_id`,`set_menu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foods_set_menus`
--

LOCK TABLES `foods_set_menus` WRITE;
/*!40000 ALTER TABLE `foods_set_menus` DISABLE KEYS */;
INSERT INTO `foods_set_menus` VALUES (2,5),(3,2),(3,4),(4,2),(5,1),(7,3),(7,4),(7,5),(8,3),(11,7),(12,6),(12,7),(12,9),(13,7),(13,8),(13,9),(14,6),(14,8),(15,8),(15,9),(22,12),(23,10),(25,10),(26,10),(27,11),(27,13),(27,14),(28,11),(28,13),(28,14),(30,12),(31,12),(31,14),(32,15),(33,15),(36,17),(37,17),(38,16),(38,17),(39,16),(42,18),(46,18),(49,19),(49,23),(50,19),(50,20),(50,21),(51,19),(51,20),(52,20),(53,21),(53,22),(55,22),(55,23),(57,23),(58,24),(58,25),(58,26),(59,25),(60,26),(60,28),(60,31),(61,24),(61,29),(62,32),(63,27),(63,28),(63,29),(64,30),(64,31),(64,32),(65,27),(65,30),(66,35),(66,38),(71,33),(74,33),(74,34),(76,35),(76,36),(78,34),(78,37),(79,36),(79,37),(80,38);
/*!40000 ALTER TABLE `foods_set_menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foods_stores`
--

DROP TABLE IF EXISTS `foods_stores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foods_stores` (
  `food_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  PRIMARY KEY (`food_id`,`store_id`),
  UNIQUE KEY `food_id` (`food_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foods_stores`
--

LOCK TABLES `foods_stores` WRITE;
/*!40000 ALTER TABLE `foods_stores` DISABLE KEYS */;
INSERT INTO `foods_stores` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(11,2),(12,2),(13,2),(14,2),(15,2),(16,3),(17,3),(18,3),(19,2),(20,3),(21,3),(22,4),(23,4),(24,4),(25,4),(26,4),(27,4),(28,4),(29,4),(30,4),(31,4),(32,5),(33,5),(34,5),(35,5),(36,5),(37,5),(38,5),(39,5),(40,5),(41,6),(42,6),(44,6),(45,6),(46,6),(47,6),(48,6),(49,8),(50,8),(51,8),(52,8),(53,8),(54,8),(55,8),(56,8),(57,8),(58,9),(59,9),(60,9),(61,9),(62,9),(63,9),(64,9),(65,9),(66,10),(67,10),(68,10),(69,10),(70,10),(71,10),(72,10),(73,10),(74,10),(76,10),(77,10),(78,10),(79,10),(80,10),(81,10);
/*!40000 ALTER TABLE `foods_stores` ENABLE KEYS */;
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
INSERT INTO `groups` VALUES (10,'admin'),(9,'owner'),(8,'customer');
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
  `address_id` int(11) NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `delivery_type` tinyint(2) DEFAULT '0',
  `set_menu_id` int(11) NOT NULL DEFAULT '1',
  `confirm_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `complete_datetime` datetime DEFAULT NULL,
  `total_amount` float(10,2) NOT NULL DEFAULT '0.00',
  `total_calorie` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `complete` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (4,24,10,23,28,1,36,'2011-08-08 00:27:33',NULL,3.66,280,'2011-08-06 20:27:57','2011-08-06 20:27:57',1),(5,24,8,23,27,2,20,'2011-08-08 00:32:37',NULL,11.66,716,'2011-08-06 20:33:01','2011-08-06 20:33:01',1),(6,24,8,23,27,1,21,'2011-08-08 00:38:11',NULL,23.98,594,'2011-08-06 20:38:35','2011-08-06 20:38:35',1),(7,24,5,23,27,1,16,'2011-08-08 01:03:14',NULL,4.99,500,'2011-08-06 21:03:38','2011-08-06 21:03:38',1);
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
  `customer_pref_id` int(11) NOT NULL,
  `payment_type_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `cc_number` varchar(64) NOT NULL,
  `verification_number` int(11) NOT NULL,
  `expiry` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cc_number` (`cc_number`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_methods`
--

LOCK TABLES `payment_methods` WRITE;
/*!40000 ALTER TABLE `payment_methods` DISABLE KEYS */;
INSERT INTO `payment_methods` VALUES (27,4,3,'Talim Chu','378282246310005',4932,'2012-08-06','2011-08-06 18:28:03','2011-08-06 20:26:01'),(28,4,1,'Talim Chu','4012888888881881',568,'2013-08-06','2011-08-06 18:28:29','2011-08-06 20:26:04'),(29,4,2,'Talim Chu','5105105105105100',984,'2011-11-14','2011-08-06 18:28:59','2011-08-06 20:26:08');
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_types`
--

LOCK TABLES `payment_types` WRITE;
/*!40000 ALTER TABLE `payment_types` DISABLE KEYS */;
INSERT INTO `payment_types` VALUES (1,'VISA'),(2,'Mastercard'),(3,'American');
/*!40000 ALTER TABLE `payment_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `set_menus`
--

DROP TABLE IF EXISTS `set_menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `set_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `total_calorie` int(11) NOT NULL,
  `total_cost` float(10,2) NOT NULL,
  `prepare_time` time DEFAULT '00:00:00',
  `rating` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `set_menus`
--

LOCK TABLES `set_menus` WRITE;
/*!40000 ALTER TABLE `set_menus` DISABLE KEYS */;
INSERT INTO `set_menus` VALUES (1,'Adventure A','jap',500,5.99,'00:30:00',NULL,'2011-07-27 11:18:55','2011-07-27 11:18:55'),(2,'Adventure B','set2 ',1300,13.99,'00:30:00',NULL,'2011-07-27 14:07:20','2011-07-27 14:07:20'),(3,'Adventure C','stuff',1200,14.99,'00:30:00',NULL,'2011-07-27 14:08:22','2011-07-27 14:08:22'),(4,'Adventure D','stuff',1129,12.99,'00:30:00',NULL,'2011-07-27 14:10:00','2011-07-27 14:10:00'),(5,'Adventure E','set5',1500,19.99,'00:30:00',NULL,'2011-07-27 14:28:25','2011-07-27 14:28:25'),(6,'Simple A','set2',1400,17.99,'00:30:00',NULL,'2011-07-27 14:37:44','2011-07-27 14:37:44'),(7,'Simple B','korean food',1600,18.99,'00:30:00',NULL,'2011-07-27 14:41:31','2011-07-27 14:41:31'),(8,'Simple C','stuff',1999,19.99,'00:30:00',NULL,'2011-07-27 14:44:02','2011-07-27 14:44:02'),(9,'Simple D','set5',1409,13.50,'00:30:00',NULL,'2011-07-27 14:45:01','2011-07-27 14:45:01'),(10,'Chillin A','c1',2100,12.99,'00:30:00',NULL,'2011-07-27 15:22:24','2011-07-27 15:22:24'),(11,'Chillin B','c2',1220,6.99,'00:30:00',NULL,'2011-07-27 15:23:49','2011-07-27 15:23:49'),(12,'Chillin C','c3',1234,9.99,'00:30:00',NULL,'2011-07-27 15:24:45','2011-07-27 15:24:45'),(13,'Chillin D','c4',1800,8.99,'00:30:00',NULL,'2011-07-27 15:26:40','2011-07-27 15:26:40'),(14,'Chillin E','c5',1599,8.50,'00:30:00',NULL,'2011-07-27 15:27:26','2011-07-27 15:27:26'),(15,'Deluxe A','1312',1256,5.99,'00:30:00',NULL,'2011-07-27 15:28:36','2011-07-27 15:28:36'),(16,'Combo A','stuff',500,4.99,'00:30:00',NULL,'2011-07-27 15:31:06','2011-07-27 15:31:06'),(17,'Deluxe B','sdf',700,8.99,'00:30:00',NULL,'2011-07-27 15:34:16','2011-07-27 15:34:16'),(18,'Deluxe C','p12',700,7.69,'00:30:00',NULL,'2011-07-27 15:39:51','2011-07-27 15:39:51'),(19,'Chicken Combie A','',699,10.86,'00:00:00',NULL,'2011-08-06 17:43:55','2011-08-06 18:09:46'),(20,'Beef Combie A','',716,11.66,'00:00:00',2,'2011-08-06 18:38:07','2011-08-06 20:39:33'),(21,'Steak and Drink','',594,23.98,'00:00:00',5,'2011-08-06 18:46:06','2011-08-06 21:05:43'),(22,'Steak Combo - Adult','',485,33.98,'00:00:00',NULL,'2011-08-06 18:53:04','2011-08-06 18:53:04'),(23,'High Class Combo A','',618,25.97,'00:00:00',NULL,'2011-08-06 18:53:31','2011-08-06 18:53:31'),(24,'Basic A','',560,5.98,'00:00:00',NULL,'2011-08-06 19:01:21','2011-08-06 19:01:21'),(25,'Basic B','',660,4.98,'00:00:00',NULL,'2011-08-06 19:01:34','2011-08-06 19:01:34'),(26,'Basic C','',790,4.98,'00:00:00',NULL,'2011-08-06 19:01:44','2011-08-06 19:01:44'),(27,'Jumbo A','',780,8.49,'00:00:00',NULL,'2011-08-06 19:01:52','2011-08-06 19:01:52'),(28,'Jumbo B','',850,6.98,'00:00:00',NULL,'2011-08-06 19:02:00','2011-08-06 19:02:00'),(29,'Jumbo C','',620,7.98,'00:00:00',NULL,'2011-08-06 19:02:10','2011-08-06 19:02:10'),(30,'Cheesy A','',740,7.49,'00:00:00',NULL,'2011-08-06 19:02:17','2011-08-06 19:02:17'),(31,'Cheesy B','',810,5.98,'00:00:00',NULL,'2011-08-06 19:02:23','2011-08-06 19:02:23'),(32,'Cheesy C','',720,7.49,'00:00:00',NULL,'2011-08-06 19:02:37','2011-08-06 19:02:37'),(33,'Lunch Special A','',500,6.99,'00:00:00',NULL,'2011-08-06 19:08:14','2011-08-06 19:08:14'),(34,'Lunch Special B','',660,8.65,'00:00:00',NULL,'2011-08-06 19:09:11','2011-08-06 19:09:11'),(35,'Breakfast A','',440,6.99,'00:00:00',NULL,'2011-08-06 19:09:57','2011-08-06 19:10:24'),(36,'Breakfast C','',280,3.66,'00:00:00',4,'2011-08-06 19:12:31','2011-08-06 21:05:35'),(37,'Breakfast B','',350,4.32,'00:00:00',NULL,'2011-08-06 19:14:03','2011-08-06 19:14:03'),(38,'Breakfast D','',700,9.49,'00:00:00',NULL,'2011-08-06 19:14:51','2011-08-06 19:14:51');
/*!40000 ALTER TABLE `set_menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `set_menus_stores`
--

DROP TABLE IF EXISTS `set_menus_stores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `set_menus_stores` (
  `store_id` int(11) NOT NULL,
  `set_menu_id` int(11) NOT NULL,
  PRIMARY KEY (`store_id`,`set_menu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `set_menus_stores`
--

LOCK TABLES `set_menus_stores` WRITE;
/*!40000 ALTER TABLE `set_menus_stores` DISABLE KEYS */;
INSERT INTO `set_menus_stores` VALUES (1,1),(1,2),(1,3),(1,5),(2,6),(2,7),(2,8),(2,9),(4,10),(4,11),(4,12),(4,13),(4,14),(5,15),(5,16),(5,17),(6,18),(8,19),(8,20),(8,21),(8,22),(8,23),(9,24),(9,25),(9,26),(9,27),(9,28),(9,29),(9,30),(9,31),(9,32),(10,33),(10,34),(10,35),(10,36),(10,37),(10,38);
/*!40000 ALTER TABLE `set_menus_stores` ENABLE KEYS */;
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
  `phone` varchar(16) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(40) NOT NULL,
  `province` varchar(40) NOT NULL,
  `postal` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `avg_rating` int(11) DEFAULT NULL,
  `dine_in` tinyint(1) NOT NULL DEFAULT '0',
  `takeout` tinyint(1) NOT NULL DEFAULT '1',
  `delivery` tinyint(1) NOT NULL DEFAULT '0',
  `open_hrs` time NOT NULL,
  `close_hrs` time NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stores`
--

LOCK TABLES `stores` WRITE;
/*!40000 ALTER TABLE `stores` DISABLE KEYS */;
INSERT INTO `stores` VALUES (1,23,1,'Sushi Village','','7789018274','987234 China','Vancouver','BC','v2b 9u1','Canada',0,1,1,1,'09:09:00','21:09:00','2011-07-25 14:11:17','2011-07-25 14:11:17'),(2,23,2,'Insadong','Traditional Korean Food.','6042911811','403 North Road','Coquitlam','BC','V3K 3V9','Canada',4,1,0,0,'11:30:00','22:30:00','2011-07-25 17:03:13','2011-07-25 17:03:13'),(3,37,3,'Golden Dragon','','6042998888','4453 Hastings St','Burnaby','BC','V4K 3D5','Canada',4,1,1,1,'10:30:00','23:00:00','2011-07-25 17:05:45','2011-07-25 17:05:45'),(4,23,4,'Church\'s Chicken','We serve the best fried chicken of all lower mainland.','6042998188','2504 Kingsway','Vancouver','BC','V5R 5G9','Canada',4,1,1,0,'11:00:00','21:30:00','2011-07-25 17:17:34','2011-07-25 17:17:34'),(5,27,4,'McDonalds','We serve quick, we dont care about quality.','6044332829','2909 Grandview Highway','Vancouver','BC','V5M 2E4','Canada',2,1,1,0,'06:00:00','23:30:00','2011-07-25 17:20:10','2011-07-25 17:20:10'),(6,27,12,'Pho Saigon','We serve the best pho in town!','6042998854','510 Nelson Ave','Vancouver','BC','V5E 3Q2','Canada',4,1,1,0,'17:22:00','17:22:00','2011-07-25 17:25:12','2011-07-25 17:25:12'),(8,22,6,'Owner\'s Cafe - On the Mountain','Up the mountain, view the view. ','6049417946','Store 22/6 University Dr.','Vancouver','BC','V2k8U1','Canada',NULL,1,1,0,'09:00:00','22:00:00','2011-07-26 23:41:10','2011-08-06 18:54:24'),(9,22,4,'Owner\'s Cafe - On the streets','Owner\'s Cafe - On the streets','6042998888','Store 22/12 University Dr.','Burnaby','BC','V3K 3V9','Canada',NULL,0,1,1,'09:00:00','22:00:00','2011-07-26 23:52:37','2011-08-06 18:36:15'),(10,22,11,'Owner\'s Cafe - On the Hill','We serve cuisine 10','6042998888','Store 22/10 University Dr.','Vancouver','BC','V3K 3V9','Canada',NULL,1,0,1,'09:00:00','22:00:00','2011-07-26 23:52:37','2011-08-06 18:55:30'),(12,23,12,'Bull & Finch Pub','We serve cuisine 12','6042998888','Store 23/12 University Dr.','Burnaby','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-26 23:52:37','2011-07-26 23:52:37'),(13,22,3,'Vij\'s Restaurant Inc','We serve cuisine 3','6042998888','1480 W 11th Ave','Vancouver','BC','V6H 1L1','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-26 23:52:37','2011-07-26 23:52:37'),(14,22,3,'Bridges Restaurant','We serve cuisine 3','6042998888','1696 Duranleau Street','Vancouver','BC','V6H 3S4','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-26 23:52:37','2011-07-26 23:52:37'),(15,23,9,'Banana Leaf On Broadway','We serve cuisine 9','6042998888','820 West Broadway','Vancouver','BC','V5Z 1J8','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-26 23:52:37','2011-07-26 23:52:37'),(7,27,10,'Shawarma Palace','Gyros, Donairs, shawarmas, you name it we make it.',' ','6723 Oak St','Vancouver','BC','V2K 9C4','Canada',3,1,1,0,'21:00:00','17:38:00','2011-07-26 23:42:19','2011-07-26 23:42:19'),(17,27,11,'Store of User 27 Cusine 11','We serve cuisine 11','6042998888','Store 27/11 University Dr.','Langley','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-26 23:52:37','2011-07-26 23:52:37'),(18,37,11,'Store of User 37 Cusine 11','We serve cuisine 11','6042998888','Store 37/11 University Dr.','North Van','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(19,38,12,'Store of User 38 Cusine 12','We serve cuisine 12','6042998888','Store 38/12 University Dr.','Coquitlam','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(20,38,2,'Store of User 38 Cusine 2','We serve cuisine 2','6042998888','Store 38/2 University Dr.','Richmond','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(21,39,9,'Store of User 39 Cusine 9','We serve cuisine 9','6042998888','Store 39/9 University Dr.','Vancouver','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(22,39,8,'Store of User 39 Cusine 8','We serve cuisine 8','6042998888','Store 39/8 University Dr.','Langley','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(23,39,12,'Store of User 39 Cusine 12','We serve cuisine 12','6042998888','Store 39/12 University Dr.','Langley','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(24,39,10,'Store of User 39 Cusine 10','We serve cuisine 10','6042998888','Store 39/10 University Dr.','North Van','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(25,40,4,'Store of User 40 Cusine 4','We serve cuisine 4','6042998888','Store 40/4 University Dr.','Surrey','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(26,40,9,'Store of User 40 Cusine 9','We serve cuisine 9','6042998888','Store 40/9 University Dr.','Coquitlam','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(27,40,7,'Store of User 40 Cusine 7','We serve cuisine 7','6042998888','Store 40/7 University Dr.','North Van','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(28,40,11,'Store of User 40 Cusine 11','We serve cuisine 11','6042998888','Store 40/11 University Dr.','Coquitlam','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(29,41,5,'Store of User 41 Cusine 5','We serve cuisine 5','6042998888','Store 41/5 University Dr.','Coquitlam','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(30,41,11,'Store of User 41 Cusine 11','We serve cuisine 11','6042998888','Store 41/11 University Dr.','Surrey','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(31,41,11,'Store of User 41 Cusine 11','We serve cuisine 11','6042998888','Store 41/11 University Dr.','Richmond','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(32,41,3,'Store of User 41 Cusine 3','We serve cuisine 3','6042998888','Store 41/3 University Dr.','Burnaby','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(33,42,10,'Store of User 42 Cusine 10','We serve cuisine 10','6042998888','Store 42/10 University Dr.','Richmond','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(34,43,1,'Store of User 43 Cusine 1','We serve cuisine 1','6042998888','Store 43/1 University Dr.','Richmond','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(35,43,11,'Store of User 43 Cusine 11','We serve cuisine 11','6042998888','Store 43/11 University Dr.','North Van','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(36,43,12,'Store of User 43 Cusine 12','We serve cuisine 12','6042998888','Store 43/12 University Dr.','Surrey','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(37,43,4,'Store of User 43 Cusine 4','We serve cuisine 4','6042998888','Store 43/4 University Dr.','Richmond','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(38,44,3,'Store of User 44 Cusine 3','We serve cuisine 3','6042998888','Store 44/3 University Dr.','Langley','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(39,44,10,'Store of User 44 Cusine 10','We serve cuisine 10','6042998888','Store 44/10 University Dr.','Coquitlam','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(40,45,10,'Store of User 45 Cusine 10','We serve cuisine 10','6042998888','Store 45/10 University Dr.','Richmond','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(41,45,11,'Store of User 45 Cusine 11','We serve cuisine 11','6042998888','Store 45/11 University Dr.','Burnaby','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(42,45,4,'Store of User 45 Cusine 4','We serve cuisine 4','6042998888','Store 45/4 University Dr.','Richmond','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(43,45,6,'Store of User 45 Cusine 6','We serve cuisine 6','6042998888','Store 45/6 University Dr.','Langley','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(44,45,1,'Store of User 45 Cusine 1','We serve cuisine 1','6042998888','Store 45/1 University Dr.','Vancouver','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(45,46,1,'Store of User 46 Cusine 1','We serve cuisine 1','6042998888','Store 46/1 University Dr.','Vancouver','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(46,46,8,'Store of User 46 Cusine 8','We serve cuisine 8','6042998888','Store 46/8 University Dr.','North Van','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(47,46,6,'Store of User 46 Cusine 6','We serve cuisine 6','6042998888','Store 46/6 University Dr.','Surrey','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(48,47,12,'Store of User 47 Cusine 12','We serve cuisine 12','6042998888','Store 47/12 University Dr.','Vancouver','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(49,47,12,'Store of User 47 Cusine 12','We serve cuisine 12','6042998888','Store 47/12 University Dr.','Surrey','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(50,47,9,'Store of User 47 Cusine 9','We serve cuisine 9','6042998888','Store 47/9 University Dr.','Langley','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(51,48,4,'Store of User 48 Cusine 4','We serve cuisine 4','6042998888','Store 48/4 University Dr.','Surrey','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(52,48,1,'Store of User 48 Cusine 1','We serve cuisine 1','6042998888','Store 48/1 University Dr.','North Van','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(53,48,4,'Store of User 48 Cusine 4','We serve cuisine 4','6042998888','Store 48/4 University Dr.','Coquitlam','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(54,48,8,'Store of User 48 Cusine 8','We serve cuisine 8','6042998888','Store 48/8 University Dr.','Langley','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(55,48,3,'Store of User 48 Cusine 3','We serve cuisine 3','6042998888','Store 48/3 University Dr.','Langley','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(56,49,3,'Store of User 49 Cusine 3','We serve cuisine 3','6042998888','Store 49/3 University Dr.','Surrey','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(57,49,8,'Store of User 49 Cusine 8','We serve cuisine 8','6042998888','Store 49/8 University Dr.','Coquitlam','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(58,49,1,'Store of User 49 Cusine 1','We serve cuisine 1','6042998888','Store 49/1 University Dr.','Surrey','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(59,49,6,'Store of User 49 Cusine 6','We serve cuisine 6','6042998888','Store 49/6 University Dr.','Richmond','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(60,50,11,'Store of User 50 Cusine 11','We serve cuisine 11','6042998888','Store 50/11 University Dr.','Vancouver','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(61,50,12,'Store of User 50 Cusine 12','We serve cuisine 12','6042998888','Store 50/12 University Dr.','North Van','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(62,50,12,'Store of User 50 Cusine 12','We serve cuisine 12','6042998888','Store 50/12 University Dr.','Langley','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11'),(63,50,11,'Store of User 50 Cusine 11','We serve cuisine 11','6042998888','Store 50/11 University Dr.','Coquitlam','BC','V3K 3V9','Canada',NULL,0,1,0,'09:00:00','22:00:00','2011-07-27 00:16:11','2011-07-27 00:16:11');
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
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (25,8,'customer1','customer1','customer1customer1@sfu.ca','','customer1','9b34412ccee8deb15e59deb85893c65cd8670972',1,'2011-07-23 21:47:09','2011-07-23 21:47:09'),(21,10,'admin','admin','adminadmin@sfu.ca','','admin','48aec8d11d1aaa36acccc28eb4c8f6e12a5b4407',1,'2011-07-23 21:45:21','2011-07-23 21:45:21'),(22,9,'Serene','Su','sereneSu@sfu.ca','','owner','eab88bf3ae2291f598887abf9cbe18a13f0a36a1',1,'2011-07-23 21:45:54','2011-08-06 23:50:12'),(23,9,'owner1','owner1','owner1owner1@sfu.ca','','owner1','eedf6a3c2322788e2cd8464a556b56a8e410c175',1,'2011-07-23 21:46:19','2011-07-23 21:46:19'),(24,8,'Talim','Chu','customercustomer@sfu.ca','','customer','94f095892621bcedab4b84fc59ce56a434538e3c',1,'2011-07-23 21:46:45','2011-08-06 20:58:26'),(26,8,'cust2','customer','cust2@gmail.com','','cust2','1a1ca7064d3be3b8f38aa077deae24bb7ca0360a',1,'2011-07-25 13:58:55','2011-07-25 13:58:55'),(27,9,'owner2','owner','owner2@gmail.com','','owner2','17983e53af784a3b4df5e4ea8019f36aad49bc5e',1,'2011-07-25 14:05:31','2011-07-25 14:05:31'),(28,10,'Sarah','Wong','sarah@gmail.com','','sarah','13730516f24c2ed1a6af9605105d4f87f9902d59',1,'2011-07-25 14:06:24','2011-07-25 14:06:24'),(29,8,'c3','c3','c3@gmail.com','','cust3','94f095892621bcedab4b84fc59ce56a434538e3c',1,'2011-07-26 21:53:30','2011-07-26 21:53:30'),(30,8,'c4','c4','c4@gmail.com','','cust4','94f095892621bcedab4b84fc59ce56a434538e3c',1,'2011-07-26 21:54:04','2011-07-26 21:54:04'),(31,8,'c5','c5','c5@gmail.com','','cust5','94f095892621bcedab4b84fc59ce56a434538e3c',1,'2011-07-26 21:54:27','2011-07-26 21:54:27'),(32,8,'c6','c6','c6@gmail.com','','cust6','94f095892621bcedab4b84fc59ce56a434538e3c',1,'2011-07-26 21:56:31','2011-07-26 21:56:31'),(33,8,'c7','c7','c7@gmail.com','','cust7','94f095892621bcedab4b84fc59ce56a434538e3c',1,'2011-07-26 21:56:52','2011-07-26 21:57:18'),(34,8,'c8','c8','c8@gmail.com','','cust8','94f095892621bcedab4b84fc59ce56a434538e3c',1,'2011-07-26 21:58:21','2011-07-26 21:58:21'),(35,8,'c9','c9','c9@gmail.com','','cust9','94f095892621bcedab4b84fc59ce56a434538e3c',1,'2011-07-26 21:58:37','2011-07-26 21:58:37'),(36,8,'c10','c10','c10@gmail.com','','cust10','94f095892621bcedab4b84fc59ce56a434538e3c',1,'2011-07-26 21:59:20','2011-07-26 21:59:20'),(37,9,'owner3','owner3','owner3@sfu.ca','','owner3','6323bb49f422841005c9f39da2a667390f7588df',1,'2011-07-26 23:39:00','2011-07-26 23:39:00'),(38,9,'owner4','owner4','owner4@sfu.ca','','owner4','02d41adf500705ed6cba72ddd45d08e1aa6c2c86',1,'2011-07-26 23:40:22','2011-07-26 23:40:22'),(39,9,'owner5','owner5','owner5@sfu.ca','','owner5','82fd2602ef71816a5e8c70679b18895d6f383f6a',1,'2011-07-26 23:41:26','2011-07-26 23:41:54'),(40,9,'owner6','owner6','owner6@sfu.ca','','owner6','29c6a69f1f61e99f17d834039c3f6ae4a3a6cd0a',1,'2011-07-26 23:50:41','2011-07-26 23:50:41'),(41,9,'owner7','owner7','owner7@sfu.ca','','owner7','94f086083293e0b19c7d72f949f96a301b055169',1,'2011-07-26 23:51:14','2011-07-26 23:51:14'),(42,9,'owner8','owner8','owner8@sfu.ca','','owner8','d1d52593fd7d3ce5baf420ad84621950007a43cd',1,'2011-07-26 23:51:40','2011-07-26 23:59:11'),(43,9,'owner9','owner9','owner9@sfu.ca','','owner9','86ef3e86f3d68be7e3845be5f758a34b82d328eb',1,'2011-07-26 23:52:30','2011-07-27 00:00:23'),(44,9,'owner10','owner10','owner10@sfu.ca','','owner10','587eaacd6c3820066de3910cb31aa75eafc0ddec',1,'2011-07-26 23:53:18','2011-07-27 00:00:38'),(45,9,'owner11','owner11','owner11@sfu.ca','','owner11','51d8a4050f15571bd07f815f8fb2d39c9aecdf8d',1,'2011-07-26 23:54:05','2011-07-27 00:00:50'),(46,9,'owner12','owner12','owner12@sfu.ca','','owner12','a16bd4b25cdc1242ab1f58793aeb0e5367642f53',1,'2011-07-26 23:54:20','2011-07-27 00:01:15'),(47,9,'owner13','owner13','owner13@sfu.ca','','owner13','8bd7b7cb0dfbe2473f44376fd90b2f8be8475be3',1,'2011-07-26 23:54:37','2011-07-27 00:01:47'),(48,9,'owner14','owner14','owner14@sfu.ca','','owner14','45fbdc81334f305bd17e12619a53e781bfb64fa2',1,'2011-07-26 23:55:26','2011-07-27 00:02:09'),(49,9,'owner15','owner15','owner15@sfu.ca','','owner15','aacb4027169bbf0e3143dcfb0ce862210f673888',1,'2011-07-26 23:55:45','2011-07-27 00:02:55'),(50,9,'owner16','owner16','owner16@sfu.ca','','owner16','742e1f2058f9e2873a62d215241475f68d9116ee',1,'2011-07-26 23:56:22','2011-07-27 00:03:10'),(51,9,'owner17','owner17','owner17@sfu.ca','','owner17','82c21d5c1342d4294c9981876534fa89a22ccf2e',1,'2011-07-26 23:56:37','2011-07-27 00:03:44'),(52,9,'owner18','owner18','owner18@sfu.ca','','owner18','0c8494d78e7d91d4cdc341e14f26b06f534fbdc4',1,'2011-07-26 23:56:55','2011-07-27 00:04:03'),(53,9,'owner19','owner19','owner19@sfu.ca','','owner19','22ba4c574df9f649305cc748afb4f6f7c02b5925',1,'2011-07-26 23:57:11','2011-07-27 00:04:48'),(54,9,'owner20','owner20','owner20@sfu.ca','','owner20','0d7ca78d16936aa8f8d49cdfce1b1cd4746a0a57',1,'2011-07-26 23:57:26','2011-07-27 00:05:03'),(55,8,'Muu','Customer','mc@gmail.com','','muu','94f095892621bcedab4b84fc59ce56a434538e3c',1,'2011-07-30 11:53:16','2011-07-30 11:53:16');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_awards`
--

DROP TABLE IF EXISTS `users_awards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_awards` (
  `user_id` int(11) NOT NULL,
  `award_id` int(11) NOT NULL,
  KEY `user_id` (`user_id`,`award_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_awards`
--

LOCK TABLES `users_awards` WRITE;
/*!40000 ALTER TABLE `users_awards` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_awards` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-08-08 13:57:57
