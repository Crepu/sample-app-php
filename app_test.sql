-- MySQL dump 10.11
--
-- Host: localhost    Database: app_test
-- ------------------------------------------------------
-- Server version       5.0.45-log


-- CREATE DATABASE /*!32312 IF NOT EXISTS*/ `pocdb` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pocdb`;

--
-- Table structure for table `app_test`
--

DROP TABLE IF EXISTS `app_test`;
CREATE TABLE `app_test` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_test`
--

-- LOCK TABLES `app_test` WRITE;
INSERT INTO `app_test` VALUES (1,'app_test1','Entrada 1'),(2,'app_test2','Entrada 2'),(3,'app_test3','Entrada 33');
-- UNLOCK TABLES;

-- Dump completed on 2010-01-17  4:16:47
