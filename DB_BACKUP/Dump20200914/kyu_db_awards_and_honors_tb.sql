-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: kyu_db
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
-- Table structure for table `awards_and_honors_tb`
--

DROP TABLE IF EXISTS `awards_and_honors_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `awards_and_honors_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `professorid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `awards_and_honors_test_ibfk_1` (`professorid`),
  CONSTRAINT `awards_and_honors_tb_ibfk_1` FOREIGN KEY (`professorid`) REFERENCES `people_tb` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `awards_and_honors_tb`
--

LOCK TABLES `awards_and_honors_tb` WRITE;
/*!40000 ALTER TABLE `awards_and_honors_tb` DISABLE KEYS */;
INSERT INTO `awards_and_honors_tb` VALUES (2,'Award of minister of Trade, Industry & Energy in Korea (2015), Tech-Biz. Top 3',2),(3,'Award of minister of Science, ICT and Planning in Korea (2013), Outstanding performance',2),(4,'Man of DGIST of the year(2012)',2),(5,'Great minds of the 21st Century (ABI, 2012, 2013)',2),(6,'2000 outstanding intellectuals of the 21st Century (IBC, 2011)',2),(7,'Honor of Best researcher in DGIST(2007)',2),(8,'Best paper award in COOC(1999)',2),(9,'Nov./19, 임베디드공학회 우수논문상',3),(10,'Mar./14, 교육과학기술부 장관상',3),(11,'Sep./10, 대구경북과학기술원 공로상',3);
/*!40000 ALTER TABLE `awards_and_honors_tb` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-14 16:08:56
