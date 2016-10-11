-- MySQL dump 10.16  Distrib 10.1.17-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: soundman_sound
-- ------------------------------------------------------
-- Server version	10.1.17-MariaDB

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
-- Table structure for table `button_status`
--

--
-- Dumping data for table `button_status`
--

LOCK TABLES `button_status` WRITE;
/*!40000 ALTER TABLE `button_status` DISABLE KEYS */;
INSERT INTO `button_status` VALUES (1,'drum_vol_dn',0,'',''),(2,'piano_vol_dn',0,'',''),(3,'guitar_vol_dn',0,'',''),(4,'bass_vol_dn',0,'',''),(5,'leader_vol_dn',0,'',''),(6,'soprano_vol_dn',0,'',''),(7,'alto_vol_dn',0,'',''),(8,'tenor_vol_dn',0,'',''),(9,'drum_vol_up',0,'',''),(10,'piano_vol_up',0,'',''),(11,'guitar_vol_up',0,'',''),(12,'bass_vol_up',0,'',''),(13,'leader_vol_up',0,'',''),(14,'soprano_vol_up',0,'',''),(15,'alto_vol_up',0,'',''),(16,'tenor_vol_up',0,'',''),(17,'message',0,'','');
/*!40000 ALTER TABLE `button_status` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-22 11:56:46
