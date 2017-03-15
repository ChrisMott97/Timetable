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
-- Table structure for table `buildings`
--

DROP TABLE IF EXISTS `buildings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buildings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buildings`
--

LOCK TABLES `buildings` WRITE;
/*!40000 ALTER TABLE `buildings` DISABLE KEYS */;
INSERT INTO `buildings` VALUES (1,'Aristotle','Main'),(2,'Comenius','Humanities'),(3,'Montessori','Technology'),(4,'Piaget','Science');
/*!40000 ALTER TABLE `buildings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `destinations`
--

DROP TABLE IF EXISTS `destinations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `destinations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nodeid` int(11) NOT NULL,
  `room` varchar(45) NOT NULL,
  `building` varchar(45) NOT NULL,
  `level` int(11) NOT NULL,
  `forLessons` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `room_UNIQUE` (`room`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destinations`
--

LOCK TABLES `destinations` WRITE;
/*!40000 ALTER TABLE `destinations` DISABLE KEYS */;
INSERT INTO `destinations` VALUES (1,61,'A101','Aristotle',0,1),(2,61,'A102','Aristotle',0,1),(3,60,'A103','Aristotle',0,1),(4,58,'A104','Aristotle',0,1),(5,58,'A105','Aristotle',0,1),(6,59,'A106','Aristotle',0,1),(7,55,'A107','Aristotle',0,1),(8,56,'A108','Aristotle',0,1),(9,20,'C101','Comenius',0,1),(10,20,'C102','Comenius',0,1),(11,17,'C103','Comenius',0,1),(12,16,'C104','Comenius',0,1),(13,16,'C105','Comenius',0,1),(14,15,'C106','Comenius',0,1),(15,28,'M101','Montessori',0,1),(16,27,'M102','Montessori',0,1),(17,26,'M103','Montessori',0,1),(18,26,'M104','Montessori',0,1),(19,27,'M105','Montessori',0,1),(20,27,'M106','Montessori',0,1),(21,26,'M107','Montessori',0,1),(22,33,'M108','Montessori',0,1),(23,33,'M109','Montessori',0,1),(24,34,'M110','Montessori',0,1),(25,43,'M111','Montessori',0,1),(26,43,'M112','Montessori',0,1),(27,43,'M113','Montessori',0,1),(28,36,'M114','Montessori',0,1),(29,38,'M115','Montessori',0,1),(30,40,'M116','Montessori',0,1),(31,40,'M117','Montessori',0,1),(32,40,'M118','Montessori',0,1),(33,45,'M119','Montessori',0,1),(34,45,'M120','Montessori',0,1),(35,39,'P101','Piaget',0,1),(36,39,'P102','Piaget',0,1),(37,38,'P103','Piaget',0,1),(38,30,'P104','Piaget',0,1),(39,25,'P105','Piaget',0,1),(40,44,'SFCR','Montessori',0,0),(41,45,'SFWR','Montessori',0,0),(42,44,'SFO','Montessori',0,0),(43,49,'CR','Montessori',0,0);
/*!40000 ALTER TABLE `destinations` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lessons`
--

LOCK TABLES `lessons` WRITE;
/*!40000 ALTER TABLE `lessons` DISABLE KEYS */;
INSERT INTO `lessons` VALUES (6,'D2','A105','DGN',13),(7,'FP2','A105','DGN',13),(11,'Computing','M119','RYA',10),(13,'ICT','M119','RYA',13);
/*!40000 ALTER TABLE `lessons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nodes`
--

DROP TABLE IF EXISTS `nodes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nodes` (
  `nodeid` int(11) NOT NULL AUTO_INCREMENT,
  `identifier` varchar(45) NOT NULL,
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  PRIMARY KEY (`nodeid`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nodes`
--

LOCK TABLES `nodes` WRITE;
/*!40000 ALTER TABLE `nodes` DISABLE KEYS */;
INSERT INTO `nodes` VALUES (1,'Reception',644,531),(2,'ReceptionE',644,600),(3,'CanteenE1',548,580),(4,'Canteen1',548,630),(5,'Canteen2',367,630),(6,'Canteen3',367,670),(7,'Canteen4',214,670),(8,'Canteen5',214,518),(9,'CanteenE2',373,518),(10,'Halls',373,353),(11,'Pe',465,353),(12,'PeE',465,275),(13,'Hum1',578,275),(14,'HumE1',578,190),(15,'Hum2',634,190),(16,'Hum3',684,190),(17,'Hum4',725,190),(18,'HumE2',725,273),(19,'SReception',740,290),(20,'Hum5',800,190),(21,'Library',873,190),(22,'TechE',873,273),(23,'Y11CR',966,115),(24,'SciE1',1261,178),(25,'Sci1',1287,274),(26,'Tech3',1150,274),(27,'Tech2',1010,274),(28,'Tech1',978,274),(29,'SciS1',1261,332),(30,'DV1',1306,358),(31,'DV2',1220,358),(32,'DV3',1220,400),(33,'Drama1',1150,400),(34,'Art1',1048,400),(35,'DV5',1315,400),(36,'DV4',1220,486),(37,'DV6',1333,486),(38,'Drama2',1337,516),(39,'Sci2',1358,615),(40,'Music1',1225,615),(41,'Music2',1088,615),(42,'Arts',1031,615),(43,'Art3',1031,552),(44,'SFCRE2',1031,674),(45,'IT',1075,674),(46,'MusicE',916,636),(47,'SFCR1',916,758),(48,'SFCRE1',1004,758),(49,'CR',1238,758),(50,'SciE2',1375,702),(51,'SciS2',1334,672),(52,'Outside1',916,600),(53,'MathE',916,515),(54,'Art2',940,407),(55,'Math5',900,407),(56,'MathS3',865,376),(57,'MathS1',865,515),(58,'Math1',800,515),(59,'Math2',800,467),(60,'Math3',763,515),(61,'Math4',715,515),(62,'MathS2',683,515);
/*!40000 ALTER TABLE `nodes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `toid` int(11) NOT NULL,
  `fromid` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `request` tinyint(1) DEFAULT '0',
  `completed` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
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
INSERT INTO `permissions` VALUES (1,'student','default user - has access to end-user features'),(3,'teacher','middle level - can add lessons'),(5,'admin','top level - can create, edit, update all users and website');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `lessonid` int(11) DEFAULT NULL,
  `period` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES (46,1,6,'MonA1'),(47,1,7,'MonA2'),(48,1,6,'FriA1');
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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'cmott97','Chris','Mott','$2y$10$UOyq3jv.u1B0LF.pSpJHPO8YJdVeicdvpZKuq0oNux6YeD87SuEVK',13,5),(21,'hjones02','Haydn','Jones','$2y$10$1bMHgHeptg918kPaPq/RDOHWb4T/S4vyTHPP0XsMSo4wjS/cwHziy',10,1),(23,'drenahmeti22','Dren','Ahmeti','qwertyuiop',11,1),(25,'RYA','R','Yates','$2y$10$7mkdBAfTfGnuWIawKpR6le0gBcuNj12DRcyJgAamxgRvvxlVyjo2y',0,3),(29,'DGN','D','Gibson','$2y$10$XCHJggkaPhUUgINyArEe4OHlwSRIAEvd34/EqoL3uqSsO28vNS9GW',0,3),(30,'jsmith03','Joe','Smith','$2y$10$WZb2tLehMMf1fZhLPoKObOWM0Hdy2ECfZgqMgHr9ooL4x3BvfZcK6',7,1);
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

-- Dump completed on 2017-03-14 15:00:57
