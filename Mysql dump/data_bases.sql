-- MySQL dump 10.13  Distrib 5.5.50, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: suprabhatam
-- ------------------------------------------------------
-- Server version	5.5.50-0ubuntu0.14.04.1

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
-- Current Database: `suprabhatam`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `suprabhatam` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `suprabhatam`;

--
-- Table structure for table `op_curiours`
--

DROP TABLE IF EXISTS `op_curiours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `op_curiours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `op_user_id` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `shipping_cities_list` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `op_curiours`
--

LOCK TABLES `op_curiours` WRITE;
/*!40000 ALTER TABLE `op_curiours` DISABLE KEYS */;
/*!40000 ALTER TABLE `op_curiours` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `op_user_login_tracks`
--

DROP TABLE IF EXISTS `op_user_login_tracks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `op_user_login_tracks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `op_user_id` int(11) DEFAULT NULL,
  `start_session` datetime DEFAULT NULL,
  `end_session` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `source` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `op_user_login_tracks`
--

LOCK TABLES `op_user_login_tracks` WRITE;
/*!40000 ALTER TABLE `op_user_login_tracks` DISABLE KEYS */;
/*!40000 ALTER TABLE `op_user_login_tracks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `op_users`
--

DROP TABLE IF EXISTS `op_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `op_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `authcode` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  `is_admin` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `op_users`
--

LOCK TABLES `op_users` WRITE;
/*!40000 ALTER TABLE `op_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `op_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `is_accept` int(11) DEFAULT NULL,
  `is_denied` int(11) DEFAULT NULL,
  `reject_resion` varchar(45) DEFAULT NULL,
  `master_category_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `discription` varchar(45) DEFAULT NULL,
  `master_category_id` int(11) DEFAULT NULL,
  `product_url` varchar(45) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `net_amount` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `save_searches`
--

DROP TABLE IF EXISTS `save_searches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `save_searches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(45) NOT NULL,
  `search_id` int(11) DEFAULT NULL,
  `save_search_name` varchar(45) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  `validity` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `save_searches`
--

LOCK TABLES `save_searches` WRITE;
/*!40000 ALTER TABLE `save_searches` DISABLE KEYS */;
/*!40000 ALTER TABLE `save_searches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `searches`
--

DROP TABLE IF EXISTS `searches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `searches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `search` varchar(90) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `searches`
--

LOCK TABLES `searches` WRITE;
/*!40000 ALTER TABLE `searches` DISABLE KEYS */;
/*!40000 ALTER TABLE `searches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shoping_cart`
--

DROP TABLE IF EXISTS `shoping_cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shoping_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `descount` int(11) DEFAULT NULL,
  `net_amount` int(11) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  `is_drop_out` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shoping_cart`
--

LOCK TABLES `shoping_cart` WRITE;
/*!40000 ALTER TABLE `shoping_cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `shoping_cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stocks`
--

DROP TABLE IF EXISTS `stocks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `saled` int(11) DEFAULT NULL,
  `in_stock` int(11) DEFAULT NULL,
  `source` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stocks`
--

LOCK TABLES `stocks` WRITE;
/*!40000 ALTER TABLE `stocks` DISABLE KEYS */;
/*!40000 ALTER TABLE `stocks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `email_status` int(11) NOT NULL DEFAULT '0',
  `mobile_status` int(11) NOT NULL DEFAULT '0',
  `is_active` int(11) DEFAULT '1',
  `source` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_login_tracks`
--

DROP TABLE IF EXISTS `user_login_tracks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_login_tracks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `source` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_login_tracks`
--

LOCK TABLES `user_login_tracks` WRITE;
/*!40000 ALTER TABLE `user_login_tracks` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_login_tracks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_profile`
--

DROP TABLE IF EXISTS `user_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `address` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_profile`
--

LOCK TABLES `user_profile` WRITE;
/*!40000 ALTER TABLE `user_profile` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_tranjection`
--

DROP TABLE IF EXISTS `user_tranjection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_tranjection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `delevery_mode` varchar(45) DEFAULT NULL,
  `op_user_id` int(11) DEFAULT NULL,
  `curior_id` int(11) DEFAULT NULL,
  `payment_mode` varchar(45) DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `is_success` int(11) DEFAULT NULL,
  `estimeted_delevery` int(11) DEFAULT NULL,
  `is_failed` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_tranjection`
--

LOCK TABLES `user_tranjection` WRITE;
/*!40000 ALTER TABLE `user_tranjection` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_tranjection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `practic`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `practic` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `practic`;

--
-- Table structure for table `amounts`
--

DROP TABLE IF EXISTS `amounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `amounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  `is_deleted` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `amounts`
--

LOCK TABLES `amounts` WRITE;
/*!40000 ALTER TABLE `amounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `amounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `get_helps`
--

DROP TABLE IF EXISTS `get_helps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `get_helps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` int(11) DEFAULT NULL,
  `email` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  `is_accepted` int(11) DEFAULT '0',
  `is_rejected` int(11) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `get_helps`
--

LOCK TABLES `get_helps` WRITE;
/*!40000 ALTER TABLE `get_helps` DISABLE KEYS */;
INSERT INTO `get_helps` VALUES (1,2000,NULL,3,'2016-08-07 10:56:54','2016-08-09 10:56:54',1,0,0,'2016-08-07 22:56:54','2016-08-07 22:56:54'),(2,3000,NULL,4,'2016-08-07 10:56:59','2016-08-09 10:56:59',0,1,0,'2016-08-07 22:56:59','2016-08-07 22:56:59'),(3,2000,NULL,4,'2016-08-08 12:18:24','2016-08-10 12:18:24',0,1,0,'2016-08-08 00:18:24','2016-08-08 00:18:24'),(4,2000,NULL,2,'2016-08-08 12:18:27','2016-08-10 12:18:27',1,0,0,'2016-08-08 00:18:27','2016-08-08 00:18:27'),(5,2000,NULL,4,'2016-08-08 12:18:31','2016-08-10 12:18:31',0,1,0,'2016-08-08 00:18:31','2016-08-08 00:18:31'),(6,2000,NULL,1,'2016-08-08 12:18:35','2016-08-10 12:18:35',1,0,0,'2016-08-08 00:18:35','2016-08-08 00:18:35'),(7,1000,NULL,4,'2016-08-19 09:50:54','2016-08-21 09:50:54',1,0,0,'2016-08-19 21:50:54','2016-08-19 21:50:54'),(8,1000,NULL,4,'2016-08-19 09:51:17','2016-08-21 09:51:17',1,0,0,'2016-08-19 21:51:17','2016-08-19 21:51:17');
/*!40000 ALTER TABLE `get_helps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `give_helps`
--

DROP TABLE IF EXISTS `give_helps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `give_helps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `start_time` datetime NOT NULL,
  `is_active` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `give_helps`
--

LOCK TABLES `give_helps` WRITE;
/*!40000 ALTER TABLE `give_helps` DISABLE KEYS */;
INSERT INTO `give_helps` VALUES (1,0,45000,'2016-08-07 10:08:08',1,'2016-08-07 22:08:08','2016-08-07 22:08:08',NULL),(2,4,5000,'2016-08-07 10:10:55',0,'2016-08-07 22:10:55','2016-08-07 22:10:55',1),(3,4,25000,'2016-08-07 10:11:00',0,'2016-08-07 22:11:00','2016-08-07 22:11:00',1),(4,4,10000,'2016-08-08 12:18:49',0,'2016-08-08 00:18:49','2016-08-08 00:18:49',1),(5,4,10000,'2016-08-08 12:18:54',1,'2016-08-08 00:18:54','2016-08-08 00:18:54',NULL),(6,4,10000,'2016-08-08 12:18:56',1,'2016-08-08 00:18:56','2016-08-08 00:18:56',NULL),(7,4,10000,'2016-08-08 12:18:59',1,'2016-08-08 00:18:59','2016-08-08 00:18:59',NULL),(8,4,10000,'2016-08-08 12:19:03',1,'2016-08-08 00:19:03','2016-08-08 00:19:03',NULL),(9,4,10000,'2016-08-08 12:19:07',1,'2016-08-08 00:19:07','2016-08-08 00:19:07',NULL),(10,4,10000,'2016-08-08 12:19:10',1,'2016-08-08 00:19:10','2016-08-08 00:19:10',NULL),(11,4,25000,'2016-08-08 12:19:33',1,'2016-08-08 00:19:33','2016-08-08 00:19:33',NULL),(12,4,35000,'2016-08-19 09:51:30',1,'2016-08-19 21:51:30','2016-08-19 21:51:30',NULL);
/*!40000 ALTER TABLE `give_helps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotel_details`
--

DROP TABLE IF EXISTS `hotel_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hotel_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `add` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `created` varchar(45) DEFAULT NULL,
  `modified` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel_details`
--

LOCK TABLES `hotel_details` WRITE;
/*!40000 ALTER TABLE `hotel_details` DISABLE KEYS */;
INSERT INTO `hotel_details` VALUES (1,'vikrany','jhansi','afc9cacc56bacd015e64353134139d51','1470474565','1470474565'),(2,'vikrany','jdoidjoidj','jhansi','1470474968','1470474968'),(3,'vikrany','vikrant@3333.dddd','jhansi','1470475310','1470475310'),(4,'vikrany','vikrant@3333.dddd','jhansi','1470475390','1470475390');
/*!40000 ALTER TABLE `hotel_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `op_users`
--

DROP TABLE IF EXISTS `op_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `op_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `authcode` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT NULL,
  `is_admin` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `op_users`
--

LOCK TABLES `op_users` WRITE;
/*!40000 ALTER TABLE `op_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `op_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_banks`
--

DROP TABLE IF EXISTS `user_banks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_banks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(45) DEFAULT NULL,
  `account_number` int(11) DEFAULT NULL,
  `ifsc_code` varchar(45) DEFAULT NULL,
  `branch` varchar(45) DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_banks`
--

LOCK TABLES `user_banks` WRITE;
/*!40000 ALTER TABLE `user_banks` DISABLE KEYS */;
INSERT INTO `user_banks` VALUES (1,'ININ',0,'niio','ijoij',0,'2016-08-05 02:36:42','2016-08-05 02:36:42','4'),(2,'ININ',1122112211,'niio','ijoij',0,'2016-08-05 02:37:02','2016-08-05 02:37:02','4'),(3,'ICICI',2147483647,'niio','ijoij',0,'2016-08-07 21:09:18','2016-08-07 21:09:18','4'),(4,'ININ',2147483647,'jhansi','SBIN0003234',0,'2016-08-08 02:17:34','2016-08-08 02:17:34','4'),(5,'ININ',2147483647,'jhansi','SBIN0003234',0,'2016-08-08 02:19:12','2016-08-08 02:19:12','4'),(6,'',NULL,'','',0,'2016-08-08 02:19:21','2016-08-08 02:19:21','4'),(7,'ICICI',2147483647,'SBIN0003234','jhansi',0,'2016-08-08 02:28:32','2016-08-08 02:28:32','4'),(8,'ININ',1122112211,'N0003234','jhansi',0,'2016-08-08 02:29:26','2016-08-08 02:29:26','4'),(9,'ICICI',2147483647,'jhansi','SBIN0003234',1,'2016-08-19 21:53:20','2016-08-19 21:53:20','4');
/*!40000 ALTER TABLE `user_banks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `is_admin` int(11) DEFAULT '0',
  `mobile` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'vikrany','8d37a7d27d3862b72c3041c8b32c8219','jdoidjoidj','0000-00-00 00:00:00','0000-00-00 00:00:00','1',1,NULL),(2,'vikrany','afc9cacc56bacd015e64353134139d51','jhansi','0000-00-00 00:00:00','0000-00-00 00:00:00','1',NULL,NULL),(3,'','fcea920f7412b5da7be0cf42b8c93759','vikrant@3333.dddd','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,NULL),(4,'Vikrant','fcea920f7412b5da7be0cf42b8c93759','vissss@3353.ddd','0000-00-00 00:00:00','0000-00-00 00:00:00','1',0,'2147483647'),(5,'','d41d8cd98f00b204e9800998ecf8427e','','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,NULL),(6,'','fcea920f7412b5da7be0cf42b8c93759','vnt@3333.dddd','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,NULL),(7,'vikrany','fcea920f7412b5da7be0cf42b8c93759','vikrant@3.ddd','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,'99'),(8,'vikrany','fcea920f7412b5da7be0cf42b8c93759','vissss@353.ddd','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,'99'),(9,'vikrany','fcea920f7412b5da7be0cf42b8c93759','vissss@3353.dd','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,'99999999'),(10,'vikrany','fcea920f7412b5da7be0cf42b8c93759','vikrant@333.ddd','2016-08-08 02:12:22','2016-08-08 02:12:22',NULL,0,'99999999');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `test`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `test` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `test`;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `organization` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `tin` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'abc','jhansi','2147483647','devr@hmmj.cjnd',NULL,NULL,NULL),(2,'Head','jd','0','smclksa',NULL,NULL,NULL),(3,'Anoj','',NULL,'',NULL,NULL,NULL),(4,'Anshu','',NULL,'',NULL,NULL,NULL),(5,'Persut.pvt.ltd','144 -new road jhansi','07102173431','care@persut.com',NULL,NULL,NULL);
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `master_brands`
--

DROP TABLE IF EXISTS `master_brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `master_brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '	',
  `name` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `master_brands`
--

LOCK TABLES `master_brands` WRITE;
/*!40000 ALTER TABLE `master_brands` DISABLE KEYS */;
INSERT INTO `master_brands` VALUES (1,'parle',4,'2016-09-14 19:53:43','2016-09-14 19:53:43'),(2,'muneco',4,'2016-09-14 19:54:44','2016-09-14 19:54:44'),(3,'wsdwq',0,'2016-09-16 00:35:48','2016-09-16 00:35:48'),(4,'wsdwq',0,'2016-09-16 00:35:52','2016-09-16 00:35:52'),(5,'sdcas',0,'2016-09-16 00:41:34','2016-09-16 00:41:34'),(6,'www',0,'2016-09-16 00:44:30','2016-09-16 00:44:30'),(7,'322',0,'2016-09-16 00:46:35','2016-09-16 00:46:35'),(8,'wsdwq',0,'2016-09-16 00:47:51','2016-09-16 00:47:51'),(9,'wsdwq',0,'2016-09-16 00:50:44','2016-09-16 00:50:44'),(10,'www',0,'2016-09-16 00:53:21','2016-09-16 00:53:21'),(11,'sdcas',0,'2016-09-16 00:55:43','2016-09-16 00:55:43'),(12,'www',0,'2016-09-16 01:04:52','2016-09-16 01:04:52'),(13,'www',0,'2016-09-16 01:05:49','2016-09-16 01:05:49'),(14,'wsdwq',0,'2016-09-16 01:07:01','2016-09-16 01:07:01'),(15,'wsdwq',0,'2016-09-16 01:08:14','2016-09-16 01:08:14'),(16,'Persut',0,'2016-09-16 01:16:30','2016-09-16 01:16:30'),(17,'wsdwqqqq',0,'2016-09-16 01:33:38','2016-09-16 01:33:38'),(18,'Persut New',4,'2016-09-16 09:46:43','2016-09-16 09:46:43'),(19,'Persut33',4,'2016-09-17 01:48:46','2016-09-17 01:48:46'),(20,'wsdwqqq',4,'2016-09-17 01:50:09','2016-09-17 01:50:09');
/*!40000 ALTER TABLE `master_brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `master_categories`
--

DROP TABLE IF EXISTS `master_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `master_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `master_categories`
--

LOCK TABLES `master_categories` WRITE;
/*!40000 ALTER TABLE `master_categories` DISABLE KEYS */;
INSERT INTO `master_categories` VALUES (1,'madiclam',3,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'ayurved',3,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'khad',3,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'dawai',3,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(8,'gehu',0,'2016-09-14 19:29:43','2016-09-14 19:29:43'),(9,'gehu',0,'2016-09-14 19:32:27','2016-09-14 19:32:27'),(10,'Fartune',0,'2016-09-16 00:06:30','2016-09-16 00:06:30'),(11,'camicals',0,'2016-09-16 00:38:55','2016-09-16 00:38:55'),(12,'papsi',0,'2016-09-16 00:40:38','2016-09-16 00:40:38'),(13,'camicals',0,'2016-09-16 00:52:44','2016-09-16 00:52:44'),(14,'camicals',0,'2016-09-16 00:52:49','2016-09-16 00:52:49'),(15,'papsi',0,'2016-09-16 00:55:04','2016-09-16 00:55:04'),(16,'kava',0,'2016-09-16 00:57:14','2016-09-16 00:57:14'),(17,'papsi',0,'2016-09-16 01:08:36','2016-09-16 01:08:36'),(18,'papsi',0,'2016-09-16 01:10:11','2016-09-16 01:10:11'),(19,'papsi',0,'2016-09-16 01:10:49','2016-09-16 01:10:49'),(20,'LocalCost',0,'2016-09-16 01:14:49','2016-09-16 01:14:49'),(21,'papsi',4,'2016-09-16 09:53:12','2016-09-16 09:53:12'),(22,'papsi',4,'2016-09-16 09:53:19','2016-09-16 09:53:19');
/*!40000 ALTER TABLE `master_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `master_products`
--

DROP TABLE IF EXISTS `master_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `master_products` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `brand` varchar(45) DEFAULT NULL,
  `master_category_id` varchar(45) DEFAULT NULL,
  `product_group_id` varchar(45) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `user_id` varchar(45) NOT NULL,
  `price` varchar(45) DEFAULT NULL,
  `expairy_date` datetime DEFAULT NULL,
  `max_discount` varchar(45) DEFAULT NULL,
  `perchese_date` datetime DEFAULT NULL,
  `bill_number` varchar(45) DEFAULT NULL COMMENT '				',
  `transporter` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `is_saled` tinyint(4) DEFAULT '0',
  `is_expaire` tinyint(4) DEFAULT '0',
  `is_return` tinyint(4) DEFAULT '0',
  `return_date` datetime DEFAULT NULL,
  `unit` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `master_products`
--

LOCK TABLES `master_products` WRITE;
/*!40000 ALTER TABLE `master_products` DISABLE KEYS */;
INSERT INTO `master_products` VALUES (1,'asc','wsdqw','1','madiclam','3',NULL,'3','24','2010-09-02 00:00:00','17','2010-09-02 00:00:00','15',NULL,'2016-08-31 00:42:23','2016-08-31 00:42:23',1,0,0,0,NULL,'kilogram'),(2,'asp','112','2','1','3',2,'99','99','2010-09-02 00:00:00','17','2010-09-02 00:00:00','15',NULL,'2016-08-31 00:43:47','2016-08-31 00:43:47',1,0,0,0,NULL,'kilogram'),(3,'asccc','445','2','madiclam','887',99,'99','444444','2010-09-02 00:00:00',NULL,'2010-09-02 00:00:00',NULL,NULL,'2010-09-02 00:00:00','2010-09-02 00:00:00',1,0,0,0,NULL,'gram'),(4,'asc','12','1','1','1',NULL,'4','40','1970-01-01 05:30:00','50','1970-01-01 05:30:00','223123',NULL,'2016-09-13 19:17:53','2016-09-13 19:17:53',NULL,0,0,0,NULL,'kilogram'),(0,'dhan','12','2','2','2',NULL,'','200','0000-00-00 00:00:00','45','0000-00-00 00:00:00','223123',NULL,'2016-09-16 01:43:30','2016-09-16 01:43:30',NULL,0,0,0,NULL,'gram'),(0,'asds','12','0','0','0',NULL,'','200','0000-00-00 00:00:00','45','0000-00-00 00:00:00','223123',NULL,'2016-09-16 10:24:16','2016-09-16 10:24:16',NULL,0,0,0,NULL,'0'),(0,'asp','22','2','1','3',NULL,'','99','0000-00-00 00:00:00','45','0000-00-00 00:00:00','223123',NULL,'2016-09-16 10:53:27','2016-09-16 10:53:27',NULL,0,0,0,NULL,'gram'),(0,'asp','22','2','1','3',NULL,'','99','0000-00-00 00:00:00','45','0000-00-00 00:00:00','223123',NULL,'2016-09-16 12:13:39','2016-09-16 12:13:39',NULL,0,0,0,NULL,'gram');
/*!40000 ALTER TABLE `master_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_groups`
--

DROP TABLE IF EXISTS `product_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_groups`
--

LOCK TABLES `product_groups` WRITE;
/*!40000 ALTER TABLE `product_groups` DISABLE KEYS */;
INSERT INTO `product_groups` VALUES (1,'dawaye',3,'0000-00-00 00:00:00',''),(2,'khad',3,'0000-00-00 00:00:00',''),(3,'daal',3,'0000-00-00 00:00:00',''),(4,'chawal',3,'0000-00-00 00:00:00',''),(5,'confectionary',4,'2016-09-14 20:01:13','1473863473'),(6,'maharaja',0,'2016-09-16 00:39:56','1473966596');
/*!40000 ALTER TABLE `product_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `brand` varchar(45) DEFAULT NULL,
  `master_category_id` varchar(45) DEFAULT NULL,
  `product_group_id` varchar(45) DEFAULT NULL,
  `master_product_id` varchar(45) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `user_id` varchar(45) NOT NULL,
  `price` varchar(45) DEFAULT NULL,
  `expairy_date` datetime DEFAULT NULL,
  `max_discount` varchar(45) DEFAULT NULL,
  `perchese_date` datetime DEFAULT NULL,
  `bill_number` varchar(45) DEFAULT NULL COMMENT '				',
  `transporter` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `is_saled` tinyint(4) DEFAULT '0',
  `is_expaire` tinyint(4) DEFAULT '0',
  `is_return` tinyint(4) DEFAULT '0',
  `return_date` datetime DEFAULT NULL,
  `packing` varchar(45) DEFAULT NULL,
  `unit` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'nova','24','16','1','1',NULL,3,'3','99','2018-06-17 00:00:00','45','2016-09-16 00:00:00','223123',NULL,'2016-09-16 14:05:13','2016-09-16 14:05:13',1,0,0,0,NULL,'10','gram'),(2,'nova','22','16','1','1',NULL,3,'3','99','2010-02-09 00:00:00','45','2016-09-16 00:00:00','223123',NULL,'2016-09-16 14:10:09','2016-09-16 14:10:09',NULL,0,0,0,NULL,'20','gram'),(3,'nova','12','16','1','1',NULL,4,'3','99','2011-03-09 00:00:00','45','2016-09-16 00:00:00','223123',NULL,'2016-09-16 14:17:49','2016-09-16 14:17:49',NULL,0,0,0,NULL,'10','gram');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salses`
--

DROP TABLE IF EXISTS `salses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salses` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '		',
  `master_product_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `actual_price` int(11) DEFAULT NULL,
  `to_shoper` tinyint(4) DEFAULT '0',
  `shoper_id` int(11) DEFAULT NULL,
  `transection_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salses`
--

LOCK TABLES `salses` WRITE;
/*!40000 ALTER TABLE `salses` DISABLE KEYS */;
INSERT INTO `salses` VALUES (1,NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL),(2,2,2,NULL,NULL,0,0,NULL,NULL,'2016-09-15 16:59:13','2016-09-15 16:59:13'),(3,2,2,NULL,NULL,0,0,NULL,NULL,'2016-09-15 17:09:36','2016-09-15 17:09:36'),(4,1,3,NULL,NULL,0,1,1,NULL,'2016-09-15 17:10:43','2016-09-15 17:10:43'),(5,1,3,NULL,NULL,0,1,1,NULL,'2016-09-15 17:11:54','2016-09-15 17:11:54'),(6,1,3,NULL,NULL,0,1,1,NULL,'2016-09-15 17:13:55','2016-09-15 17:13:55'),(7,1,3,NULL,NULL,0,1,1,NULL,'2016-09-15 17:14:24','2016-09-15 17:14:24'),(8,1,3,NULL,NULL,0,1,1,NULL,'2016-09-15 17:14:53','2016-09-15 17:14:53'),(9,1,3,NULL,NULL,0,1,1,NULL,'2016-09-15 17:18:17','2016-09-15 17:18:17'),(10,2,2,NULL,NULL,0,1,1,NULL,'2016-09-15 17:24:37','2016-09-15 17:24:37'),(11,2,2,NULL,NULL,0,0,NULL,NULL,'2016-09-16 10:52:12','2016-09-16 10:52:12'),(12,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-16 18:15:16','2016-09-16 18:15:16'),(13,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-16 18:20:51','2016-09-16 18:20:51'),(14,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-16 18:21:34','2016-09-16 18:21:34'),(15,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-16 18:21:46','2016-09-16 18:21:46'),(16,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-16 19:31:54','2016-09-16 19:31:54'),(17,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-16 19:38:06','2016-09-16 19:38:06'),(18,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-16 19:40:40','2016-09-16 19:40:40'),(19,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-16 19:42:01','2016-09-16 19:42:01'),(20,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-16 19:42:33','2016-09-16 19:42:33'),(21,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-16 19:43:49','2016-09-16 19:43:49'),(22,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-16 19:45:08','2016-09-16 19:45:08'),(23,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-16 19:45:19','2016-09-16 19:45:19'),(24,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-16 19:46:01','2016-09-16 19:46:01'),(25,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-16 20:02:20','2016-09-16 20:02:20'),(26,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-17 00:52:07','2016-09-17 00:52:07'),(27,NULL,1,12,NULL,0,0,NULL,NULL,'2016-09-17 00:59:26','2016-09-17 00:59:26'),(28,NULL,1,13,NULL,0,0,NULL,NULL,'2016-09-17 00:59:26','2016-09-17 00:59:26'),(29,NULL,1,23,NULL,0,0,NULL,NULL,'2016-09-17 01:01:17','2016-09-17 01:01:17'),(30,NULL,1,11,NULL,0,0,NULL,NULL,'2016-09-17 01:03:31','2016-09-17 01:03:31'),(31,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-17 01:03:31','2016-09-17 01:03:31'),(32,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-17 01:03:31','2016-09-17 01:03:31'),(33,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-17 01:14:08','2016-09-17 01:14:08'),(34,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-17 01:15:31','2016-09-17 01:15:31'),(35,NULL,0,1,NULL,0,0,NULL,NULL,'2016-09-17 01:15:31','2016-09-17 01:15:31'),(36,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-17 01:16:53','2016-09-17 01:16:53'),(37,NULL,0,1,NULL,0,0,NULL,NULL,'2016-09-17 01:16:53','2016-09-17 01:16:53'),(38,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-17 01:17:33','2016-09-17 01:17:33'),(39,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-17 01:19:51','2016-09-17 01:19:51'),(40,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-17 01:21:23','2016-09-17 01:21:23'),(41,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-17 01:23:29','2016-09-17 01:23:29'),(42,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-17 01:26:17','2016-09-17 01:26:17'),(43,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-17 01:27:32','2016-09-17 01:27:32'),(44,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-17 01:30:09','2016-09-17 01:30:09'),(45,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-17 01:32:07','2016-09-17 01:32:07'),(46,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-17 01:34:03','2016-09-17 01:34:03'),(47,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-17 01:36:26','2016-09-17 01:36:26'),(48,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-17 01:36:26','2016-09-17 01:36:26'),(49,NULL,1,2,NULL,0,0,NULL,NULL,'2016-09-17 01:38:38','2016-09-17 01:38:38'),(50,NULL,1,1,NULL,0,0,NULL,NULL,'2016-09-17 01:43:26','2016-09-17 01:43:26'),(51,NULL,1,12,NULL,0,0,NULL,NULL,'2016-09-17 01:44:52','2016-09-17 01:44:52'),(52,NULL,1,11,NULL,0,0,NULL,NULL,'2016-09-17 01:46:12','2016-09-17 01:46:12'),(53,NULL,1,23,NULL,0,0,NULL,NULL,'2016-09-17 01:48:03','2016-09-17 01:48:03');
/*!40000 ALTER TABLE `salses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shopers`
--

DROP TABLE IF EXISTS `shopers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shopers` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '	',
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `user` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shopers`
--

LOCK TABLES `shopers` WRITE;
/*!40000 ALTER TABLE `shopers` DISABLE KEYS */;
INSERT INTO `shopers` VALUES (1,'anmol',NULL,'anoj','ghans mandi','2147483647','0',0,NULL,NULL),(2,'akash',NULL,'jndkd','ndkljnd','0','0',0,NULL,NULL),(3,'rajesh',NULL,NULL,'khatibaba',NULL,'2147483647',0,'2016-09-15 19:51:37','2016-09-15 19:51:37');
/*!40000 ALTER TABLE `shopers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stoks`
--

DROP TABLE IF EXISTS `stoks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stoks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `quantity_added` varchar(45) NOT NULL,
  `perchese_date` datetime DEFAULT NULL,
  `expairy_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stoks`
--

LOCK TABLES `stoks` WRITE;
/*!40000 ALTER TABLE `stoks` DISABLE KEYS */;
INSERT INTO `stoks` VALUES (1,1,'12','2016-09-16 00:00:00','2018-06-17 00:00:00','2016-09-16 14:05:13','2016-09-16 14:05:13'),(2,2,'22','2016-09-16 00:00:00','2010-02-09 00:00:00','2016-09-16 14:10:09','2016-09-16 14:10:09'),(3,1,'12','2016-09-16 00:00:00','2010-02-09 00:00:00','2016-09-16 14:15:01','2016-09-16 14:15:01'),(4,3,'12','2016-09-16 00:00:00','2011-03-09 00:00:00','2016-09-16 14:17:49','2016-09-16 14:17:49');
/*!40000 ALTER TABLE `stoks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_salse` tinyint(4) DEFAULT NULL,
  `is_parchage` tinyint(4) DEFAULT NULL,
  `salse_ids` varchar(45) DEFAULT NULL,
  `parchage_ids` varchar(45) DEFAULT NULL,
  `product_ids` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` varchar(45) DEFAULT NULL,
  `invoice_number` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES (1,1,NULL,'4',NULL,'3','2016-09-15 17:10:43','1473939643','TxS-416-09-15'),(2,1,NULL,'5',NULL,'3','2016-09-15 17:11:54','1473939714','TxS-5-0.92640900 1473939714'),(3,1,NULL,'6',NULL,'3','2016-09-15 17:13:55','1473939835','TxS-6-389.134'),(4,1,NULL,'7',NULL,'3','2016-09-15 17:14:24','1473939864','TxS-7-134.226'),(5,1,NULL,'8',NULL,'3','2016-09-15 17:14:53','1473939893','TxS-8-134'),(6,1,NULL,'9',NULL,'3','2016-09-15 17:18:17','1473940097','TxS-9-650'),(7,1,NULL,'10',NULL,'2','2016-09-15 17:24:37','1473940477','TxS-10-728'),(8,1,NULL,NULL,NULL,NULL,'2016-09-15 17:27:06','1473940626','TxS--263'),(9,1,NULL,NULL,NULL,NULL,'2016-09-15 17:30:20','1473940820','TxS--196'),(10,1,NULL,NULL,NULL,NULL,'2016-09-15 17:34:05','1473941045','TxS--777'),(11,1,NULL,NULL,NULL,NULL,'2016-09-15 17:36:06','1473941165','TxS--3'),(12,1,NULL,'11',NULL,'2','2016-09-16 10:52:13','1474003333','TxS-11-102'),(13,1,NULL,'12',NULL,'1','2016-09-16 18:15:16','1474029916','TxS-12-156'),(14,1,NULL,'13',NULL,'1','2016-09-16 18:20:51','1474030251','TxS-13-648'),(15,1,NULL,'14',NULL,'1','2016-09-16 18:21:34','1474030294','TxS-14-660'),(16,1,NULL,'15',NULL,'1','2016-09-16 18:21:46','1474030306','TxS-15-993'),(17,1,NULL,NULL,NULL,NULL,'2016-09-16 18:22:58','1474030378','TxS--846'),(18,1,NULL,'16',NULL,'1','2016-09-16 19:31:54','1474034514','TxS-16-716'),(19,1,NULL,'17',NULL,'1','2016-09-16 19:38:06','1474034886','TxS-17-578'),(20,1,NULL,'18',NULL,'1','2016-09-16 19:40:40','1474035040','TxS-18-842'),(21,1,NULL,'19',NULL,'1','2016-09-16 19:42:01','1474035121','TxS-19-915'),(22,1,NULL,'20',NULL,'1','2016-09-16 19:42:33','1474035153','TxS-20-518'),(23,1,NULL,'21',NULL,'1','2016-09-16 19:43:49','1474035229','TxS-21-822'),(24,1,NULL,'22',NULL,'1','2016-09-16 19:45:08','1474035308','TxS-22-901'),(25,1,NULL,'23',NULL,'1','2016-09-16 19:45:20','1474035320','TxS-23-22'),(26,1,NULL,'24',NULL,'1','2016-09-16 19:46:01','1474035361','TxS-24-793'),(27,1,NULL,'25',NULL,'1','2016-09-16 20:02:20','1474036340','TxS-25-420'),(28,1,NULL,'26',NULL,'1','2016-09-17 00:52:07','1474053727','TxS-26-394'),(29,1,NULL,'27,28',NULL,'1,1','2016-09-17 00:59:26','1474054166','TxS-27,28-296'),(30,1,NULL,'29',NULL,'1','2016-09-17 01:01:17','1474054277','TxS-29-985'),(31,1,NULL,'30,31,32',NULL,'1,1,1','2016-09-17 01:03:31','1474054411','TxS-30,31,32-355'),(32,1,NULL,'33',NULL,'1','2016-09-17 01:14:08','1474055048','TxS-33-866'),(33,1,NULL,'34,35',NULL,'1,','2016-09-17 01:15:31','1474055131','TxS-34,35-851'),(34,1,NULL,'36,37',NULL,'1,','2016-09-17 01:16:54','1474055214','TxS-36,37-59'),(35,1,NULL,'38',NULL,'1','2016-09-17 01:17:33','1474055253','TxS-38-542'),(36,1,NULL,'39',NULL,'1','2016-09-17 01:19:51','1474055391','TxS-39-720'),(37,1,NULL,'40',NULL,'1','2016-09-17 01:21:23','1474055483','TxS-40-239'),(38,1,NULL,'41',NULL,'1','2016-09-17 01:23:29','1474055609','TxS-41-347'),(39,1,NULL,'42',NULL,'1','2016-09-17 01:26:17','1474055777','TxS-42-513'),(40,1,NULL,'43',NULL,'1','2016-09-17 01:27:32','1474055852','TxS-43-781'),(41,1,NULL,'44',NULL,'1','2016-09-17 01:30:10','1474056010','TxS-44-17'),(42,1,NULL,'45',NULL,'1','2016-09-17 01:32:07','1474056127','TxS-45-611'),(43,1,NULL,'46',NULL,'1','2016-09-17 01:34:03','1474056243','TxS-46-790'),(44,1,NULL,'47,48',NULL,'1,1','2016-09-17 01:36:26','1474056386','TxS-47,48-475'),(45,1,NULL,'49',NULL,'1','2016-09-17 01:38:38','1474056518','TxS-49-336'),(46,1,NULL,'50',NULL,'1','2016-09-17 01:43:26','1474056806','TxS-50-979'),(47,1,NULL,'51',NULL,'1','2016-09-17 01:44:52','1474056892','TxS-51-156'),(48,1,NULL,'52',NULL,'1','2016-09-17 01:46:12','1474056972','TxS-52-685'),(49,1,NULL,'53',NULL,'1','2016-09-17 01:48:03','1474057083','TxS-53-226');
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `is_admin` int(11) DEFAULT '0',
  `mobile` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'vikrany','8d37a7d27d3862b72c3041c8b32c8219','jdoidjoidj','0000-00-00 00:00:00','0000-00-00 00:00:00','1',1,NULL),(2,'vikrany','afc9cacc56bacd015e64353134139d51','jhansi','0000-00-00 00:00:00','0000-00-00 00:00:00','1',NULL,NULL),(3,'','fcea920f7412b5da7be0cf42b8c93759','vikrant@3333.dddd','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,NULL),(4,'Vikrant','fcea920f7412b5da7be0cf42b8c93759','vissss@3353.ddd','0000-00-00 00:00:00','0000-00-00 00:00:00','1',0,'2147483647'),(5,'','d41d8cd98f00b204e9800998ecf8427e','','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,NULL),(6,'','fcea920f7412b5da7be0cf42b8c93759','vnt@3333.dddd','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,NULL),(7,'vikrany','fcea920f7412b5da7be0cf42b8c93759','vikrant@3.ddd','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,'99'),(8,'vikrany','fcea920f7412b5da7be0cf42b8c93759','vissss@353.ddd','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,'99'),(9,'vikrany','fcea920f7412b5da7be0cf42b8c93759','vissss@3353.dd','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,0,'99999999'),(10,'vikrany','fcea920f7412b5da7be0cf42b8c93759','vikrant@333.ddd','2016-08-08 02:12:22','2016-08-08 02:12:22',NULL,0,'99999999');
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

-- Dump completed on 2016-09-17  3:06:10
