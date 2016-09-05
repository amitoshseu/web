-- MySQL dump 10.13  Distrib 5.7.13, for Linux (x86_64)
--
-- Host: localhost    Database: webLab
-- ------------------------------------------------------
-- Server version	5.7.13-0ubuntu0.16.04.2

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
-- Table structure for table `addressBook`
--

DROP TABLE IF EXISTS `addressBook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addressBook` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addressBook`
--

LOCK TABLES `addressBook` WRITE;
/*!40000 ALTER TABLE `addressBook` DISABLE KEYS */;
INSERT INTO `addressBook` VALUES (1,'Amitosh Gain','01763356347','235,Kunjobon, East Rampura, Dhaka'),(2,'Arif Rabbani','017XXXXXXXX','Gazipur, Dhaka'),(3,'Mr. Abul ','01XXXXXXXXXX','Savar. '),(4,'Mr. Babul','01XXXXXXXXX','Mirpur, Dhaka.'),(6,'Mustafizur Rahman','015454','Unknown'),(7,'Mr. Perfect','015454','');
/*!40000 ALTER TABLE `addressBook` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `playerdb`
--

DROP TABLE IF EXISTS `playerdb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `playerdb` (
  `name` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `gametype` varchar(15) NOT NULL,
  `team` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `country` varchar(20) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  PRIMARY KEY (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playerdb`
--

LOCK TABLES `playerdb` WRITE;
/*!40000 ALTER TABLE `playerdb` DISABLE KEYS */;
INSERT INTO `playerdb` VALUES ('Leonel Messi',29,'Male','Football','Argentina National Team','Spain',6454,1763356350,'Argentina','1.7 m','67'),('Mr. Perfect',22,'','Cricket','Bangladesh National Team','Madaripur',15454,1763356347,'Bangladesh','1.83m','65'),('Mustafizur Rahman',22,'Male','Cricket','Bangladesh National Team','Unknown',24887,1763356348,'Bangladesh','1.83m','60');
/*!40000 ALTER TABLE `playerdb` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-26  2:33:19
