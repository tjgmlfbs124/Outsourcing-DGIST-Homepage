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
-- Table structure for table `biography_tb`
--

DROP TABLE IF EXISTS `biography_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `biography_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `professorid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `biography_test_ibfk_1` (`professorid`),
  CONSTRAINT `biography_tb_ibfk_1` FOREIGN KEY (`professorid`) REFERENCES `professor_tb` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `biography_tb`
--

LOCK TABLES `biography_tb` WRITE;
/*!40000 ALTER TABLE `biography_tb` DISABLE KEYS */;
INSERT INTO `biography_tb` VALUES (2,'Ph.D., Department of Electrical, Electronics and Computer Engineering, Sungkyunkwan University, 2002.',2),(3,'M.S., Department of Electronic Engineering, Sungkyunkwan University, 1998.',2),(4,'B.S., Department of Electronic Engineering, Sungkyunkwan University, 1996.',2),(5,'Samsung Electronics Co., Ltd., (March 2002  June 2005)',2),(6,'Principal Researcher, Telecom R&D Center, Telecommunication Systems Division',2),(7,'DGIST (July 2005  present)',2),(8,'Principal researcher, Research Division of Future Automotive Research',2),(9,'Georgia Institute of Technology (Oct. 2016  Oct. 2017)',2),(10,'Visiting scholar, Department of Electrical and computer Engineering',2),(13,'Ph.D. in Electrical Engineering, Kyungpook National Univ., Daegu, Korea',7),(14,'Thesis: Low complexity joint extrapolation-MUSIC based 2D parameter estimator for vital FMCW radar',7);
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

-- Dump completed on 2020-08-24 17:09:33
