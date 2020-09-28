-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: kyu_db
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `professional_experiences_tb`
--

DROP TABLE IF EXISTS `professional_experiences_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `professional_experiences_tb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content` text,
  `professorid` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `professional_experiences_test_ibfk_1` (`professorid`),
  CONSTRAINT `professional_experiences_tb_ibfk_1` FOREIGN KEY (`professorid`) REFERENCES `people_tb` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professional_experiences_tb`
--

LOCK TABLES `professional_experiences_tb` WRITE;
/*!40000 ALTER TABLE `professional_experiences_tb` DISABLE KEYS */;
INSERT INTO `professional_experiences_tb` VALUES (2,'130 papers published and presented and 90 patents filed',2),(3,'5 technologies transferred',2),(4,'Adjunct Professor, Yeungnam Univ., Daegu, Korea (2007.3. – 20011.12)',2),(6,'Present Senior Research Engineer, Division of Automotive Technology, DGIST, Daegu, Korea $$ Developed super-resolution algorithm for vehicle and human $$ Implemented FMCW radar DSP system for vehicle and human',3),(7,'Visiting Scholar, University of Florida, Florida, U.S.A $$ Developed vital Doppler frequency estimation algorithm',3),(8,'Research Engineer, Robotics Research Division, DGIST, Daegu, Korea $$ Developed frequency estimator for pulse radar $$ Implemented UWB radar prototype board composed of FPGA and DSP',3),(9,'Research Assistant, Hanyang Univ., Seoul, Korea $$ Implemented IEEE 802.15.3a MB-OFDM - UWB system $$ Implemented IEEE 802.15.4a DBO-CSS system',3);
/*!40000 ALTER TABLE `professional_experiences_tb` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-28 19:02:46
