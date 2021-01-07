-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: 183.111.226.60    Database: kyu_db
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `biography_tb`
--

DROP TABLE IF EXISTS `biography_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `biography_tb` (
  `id` varchar(45) NOT NULL,
  `title` longtext NOT NULL,
  `professorid` int(11) NOT NULL,
  `year` longtext NOT NULL,
  `location` longtext NOT NULL,
  `order_idx` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `biography_test_ibfk_1` (`professorid`),
  CONSTRAINT `biography_tb_ibfk_1` FOREIGN KEY (`professorid`) REFERENCES `people_tb` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `biography_tb`
--

LOCK TABLES `biography_tb` WRITE;
/*!40000 ALTER TABLE `biography_tb` DISABLE KEYS */;
INSERT INTO `biography_tb` VALUES ('1','Ph.D., Department of Electrical, Electronics and Computer Engineering',2,'2002','Sungkyunkwan University',3),('10','Senior Research Engineer, Division of Automotive Technology',3,'Jan.2014 ~ Present ','DGIST',4),('2','M.S., Department of Electronic Engineering',2,'1998','Sungkyunkwan University',2),('3','B.S., Department of Electronic Engineering',2,'1996','Sungkyunkwan University',1),('4','Principal Researcher, Telecom R&D Center, Telecommunication Systems Division',2,'March. 2002 ~ June. 2005','Samsung Electronics Co., Ltd., ',4),('5','Visiting scholar, Department of Electrical and computer Engineering',2,'Oct. 2016 ~ Oct. 2017','Georgia Institute of Technology',5),('6','Professor, Department of Interdisciplinary Engineering',2,'July. 2005 ~  present','DGIST',6),('7','Research Assistant',3,'Mar. 2004 ~ Feb.2006 ','Hanyang Univ., Seoul, Korea',1),('8','Research Engineer, Robotics Research Division',3,'Jan.2006 ~ Dec.2013 ','DGIST',2),('9','Visiting Scholar',3,'Oct.2015 ~ Sep.2016 ','University of Florida',3);
/*!40000 ALTER TABLE `biography_tb` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-07 16:46:17
