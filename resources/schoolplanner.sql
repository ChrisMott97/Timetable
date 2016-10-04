-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: schoolplanner
-- ------------------------------------------------------
-- Server version	5.7.9-log

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
-- Table structure for table `lessons`
--

DROP TABLE IF EXISTS `lessons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lessons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(45) NOT NULL,
  `room` varchar(45) NOT NULL,
  `teacher` varchar(45) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lessons`
--

LOCK TABLES `lessons` WRITE;
/*!40000 ALTER TABLE `lessons` DISABLE KEYS */;
INSERT INTO `lessons` VALUES (1,'ICT ','M120','RYA',13),(2,'F Maths','A105','DGN',13);
/*!40000 ALTER TABLE `lessons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periods`
--

DROP TABLE IF EXISTS `periods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `periods` (
  `order` int(11) DEFAULT NULL,
  `code` varchar(45) NOT NULL DEFAULT 'CODE',
  `day` varchar(45) DEFAULT NULL,
  `week` varchar(45) DEFAULT NULL,
  `time_start` int(11) DEFAULT NULL,
  `time_end` int(11) DEFAULT NULL,
  `length` int(11) DEFAULT NULL,
  `period` int(11) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periods`
--

LOCK TABLES `periods` WRITE;
/*!40000 ALTER TABLE `periods` DISABLE KEYS */;
INSERT INTO `periods` VALUES (21,'FriA1','Friday','A',840,940,60,1),(22,'FriA2','Friday','A',940,1040,60,2),(23,'FriA3','Friday','A',1100,1200,60,3),(24,'FriA4','Friday','A',1200,1300,60,4),(25,'FriA5','Friday','A',1400,1500,60,5),(50,'FriA6','Friday','A',1500,1600,60,6),(51,'FriB1','Friday','B',840,940,60,1),(53,'FriB2','Friday','B',940,1040,60,2),(55,'FriB3','Friday','B',1100,1200,60,3),(57,'FriB4','Friday','B',1200,1300,60,4),(59,'FriB5','Friday','B',1400,1500,60,5),(60,'FriB6','Friday','B',1500,1600,60,6),(1,'MonA1','Monday','A',840,940,60,1),(2,'MonA2','Monday','A',940,1040,60,2),(3,'MonA3','Monday','A',1100,1200,60,3),(4,'MonA4','Monday','A',1200,1300,60,4),(5,'MonA5','Monday','A',1400,1500,60,5),(42,'MonA6','Monday','A',1500,1600,60,6),(26,'MonB1','Monday','B',840,940,60,1),(27,'MonB2','Monday','B',940,1040,60,2),(28,'MonB3','Monday','B',1100,1200,60,3),(29,'MonB4','Monday','B',1200,1300,60,4),(30,'MonB5','Monday','B',1400,1500,60,5),(52,'MonB6','Monday','B',1500,1600,60,6),(16,'ThuA1','Thursday','A',840,940,60,1),(17,'ThuA2','Thursday','A',940,1040,60,2),(18,'ThuA3','Thursday','A',1100,1200,60,3),(19,'ThuA4','Thursday','A',1200,1300,60,4),(20,'ThuA5','Thursday','A',1400,1500,60,5),(48,'ThuA6','Thursday','A',1500,1600,60,6),(41,'ThuB1','Thursday','B',840,940,60,1),(43,'ThuB2','Thursday','B',940,1040,60,2),(45,'ThuB3','Thursday','B',1100,1200,60,3),(47,'ThuB4','Thursday','B',1200,1300,60,4),(49,'ThuB5','Thursday','B',1400,1500,60,5),(58,'ThuB6','Thursday','B',1500,1600,60,6),(6,'TueA1','Tuesday','A',840,940,60,1),(7,'TueA2','Tuesday','A',940,1040,60,2),(8,'TueA3','Tuesday','A',1100,1200,60,3),(9,'TueA4','Tuesday','A',1200,1300,60,4),(10,'TueA5','Tuesday','A',1400,1500,60,5),(44,'TueA6','Tuesday','A',1500,1600,60,6),(31,'TueB1','Tuesday','B',840,940,60,1),(32,'TueB2','Tuesday','B',940,1040,60,2),(33,'TueB3','Tuesday','B',1100,1200,60,3),(34,'TueB4','Tuesday','B',1200,1300,60,4),(35,'TueB5','Tuesday','B',1400,1500,60,5),(54,'TueB6','Tuesday','B',1500,1600,60,6),(11,'WedA1','Wednesday','A',840,940,60,1),(12,'WedA2','Wednesday','A',940,1040,60,2),(13,'WedA3','Wednesday','A',1100,1200,60,3),(14,'WedA4','Wednesday','A',1200,1300,60,4),(15,'WedA5','Wednesday','A',1400,1500,60,5),(46,'WedA6','Wednesday','A',1500,1600,60,6),(36,'WedB1','Wednesday','B',840,940,60,1),(37,'WedB2','Wednesday','B',940,1040,60,2),(38,'WedB3','Wednesday','B',1100,1200,60,3),(39,'WedB4','Wednesday','B',1200,1300,60,4),(40,'WedB5','Wednesday','B',1400,1500,60,5),(56,'WedB6','Wednesday','B',1500,1600,60,6);
/*!40000 ALTER TABLE `periods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'student','default user - has access to end-user features'),(5,'admin','top level - can create, edit, update all users and website');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `userid` int(11) NOT NULL,
  `lessonid` int(11) DEFAULT NULL,
  `period` varchar(45) NOT NULL,
  PRIMARY KEY (`userid`,`period`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `permission` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'cmott97','Chris','Mott','$2y$10$rq4yYITEhZfYjEXS3tSxeeFRU5gqP4U1JrdLxKOOc19g5tzC5Zs8y',13,5),(21,'hjones02','Haydn','Jones','$2y$10$1bMHgHeptg918kPaPq/RDOHWb4T/S4vyTHPP0XsMSo4wjS/cwHziy',10,1),(22,'jsmith03','John','Smith','$2y$10$Dl.nsgZgqcY4oW9ESa/TBe6RvCvsk/qTbBVTTDONOTdEuO/B4ExHG',9,1);
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

-- Dump completed on 2016-10-03 13:28:39
