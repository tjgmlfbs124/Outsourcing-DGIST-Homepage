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
-- Table structure for table `people_tb`
--

DROP TABLE IF EXISTS `people_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `people_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kr_name` varchar(45) DEFAULT NULL,
  `en_name` varchar(45) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `image` text,
  `category` varchar(100) NOT NULL DEFAULT 'student',
  `cv` longtext,
  `cv_file` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `people_tb`
--

LOCK TABLES `people_tb` WRITE;
/*!40000 ALTER TABLE `people_tb` DISABLE KEYS */;
INSERT INTO `people_tb` VALUES (2,'이종훈','Jonghun Lee ','Professor','R4 205, DGIST','82-53-785-4580','82-53-785-4589','jhlee@dgist.ac.kr','null','7a22b579d5918406cde6affc30b34e8','professor','Professor, Department of Interdisciplinary Engineering, Graduate School, DGIST<br>Professor, Technical Venture Academay, Graduate School, DGIST<br>Chief Researhcer & Director, Department of Automotive Research, DGIST Convergence Research Institute<br>IEEE senior member<br>KSS(The Korea Society for Simulation) VP 한국시뮬레이션학회 부회장)<br>IEMEK(Institute of Embedded Engineering of Korea), Board member (대한임베디드공학회 집행위원장)','1601285792_1002_2019_CV_jhlee_2018.docx'),(3,'김상동 ','Sangdong Kim','Assistant Professor','R4 206, DGIST','82-53-785-4561','','kimsd728@dgist.ac.kr','null','c750940b2195bed02366fd7faa44ec91','professor','Ph.D., Department of Electrical, Electronics and Computer Engineering, Sungkyunkwan University, 2002.<br>M.S., Department of Electronic Engineering, Sungkyunkwan University, 1998.<br>B.S., Department of Electronic Engineering, Sungkyunkwan University, 1996.<br>Samsung Electronics Co., Ltd., (March 2002  June 2005)Principal Researcher, Telecom R&D Center, Telecommunication Systems Division<br>DGIST (July 2005  present)<br>Principal researcher, Research Division of Future Automotive Research<br>Georgia Institute of Technology (Oct. 2016  Oct. 2017)<br>Visiting scholar, Department of Electrical and computer Engineering','1601286651_CV_SangdongKim_03_02_2020.doc'),(23,'김봉석','Bongseok Kim Ph.D.','Senior Researcher','null','-','null','remnant@dgist.ac.kr','null','235d1bbe6a62af49c8dc103450fe797','researcher',NULL,NULL),(24,'송승언','Seungeon Song M.A','Researcher','null','82-53-785-4565','null','sesong@dgist.ac.kr','null','cf07801e163f459aa7c9b8d25d243e6','researcher',NULL,NULL),(25,'손은강','Mr. Eungang Son','M.A Student','null','82-10-9661-7466','null','silv93@dgist.ac.kr','null','70f6dea47d68e581b431f0a959c23bc','student',NULL,NULL),(26,'이철희 박사','Cherlhee Lee Ph. D.','alumni','null','-','null','cherlhee@jcradar.com','null','empty','alumni',NULL,NULL),(27,'자수르 박사','Prof. Jasurbek Khodjaev','alumni','null','-','null','219729@inha.ac.kr','null','empty','alumni',NULL,NULL);
/*!40000 ALTER TABLE `people_tb` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-07 16:46:19
