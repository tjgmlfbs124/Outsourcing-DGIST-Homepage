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
-- Table structure for table `notice_tb`
--

DROP TABLE IF EXISTS `notice_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notice_tb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text,
  `content` text,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `writer` text,
  `images` text,
  `files` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notice_tb`
--

LOCK TABLES `notice_tb` WRITE;
/*!40000 ALTER TABLE `notice_tb` DISABLE KEYS */;
INSERT INTO `notice_tb` VALUES (89,'Graduate Student Assistantship Opening','The Department of Interdisplinary Engineering of DGIST has an opening for the 2021 spring semester graduate student assistantship <br>with the following research focus area (Advisor: Prof. Jonghun Leen, Email: jhlee@dgist.ac.kr):<br><br>1) radar processing (Deep/Mahcine Learning), 2) Automotive radar, 3) Vital Radar, 4) Sensor Fusion <br><br>To qualify for this highly competitive scholarship, applicants must meet the following requirements:<br><br>1. Hold a bachelor’s or master’s degree as of March 1st, 2021<br>2. For master’s program (or Integrated Master’s & Doctoral program): students should hold a bachelor’s degree or a diploma that is equivalent to or higher than bachelor’s degree<br>3. For doctoral program: students should hold a master’s degree or a diploma that is equivalent to or higher than master’s degree<br>4. Important requirements: Official english score should be over 80 in TOEFL or 6.0 in IELTS<br><br>Listed below are some features of this research assistantship and the expected benefits of the program for successful applicants:<br><br>1. Monthly allowance of at least 1,200,000 won(KRW) for PHD student and 800,000 won for master student<br>2. Tuition fees for study period<br>3. Extra allowances based on research performance<br><br>Application procedure:<br>Interested applicants should send the following things to the above advisor email address:<br><br>1) Study plan (clearly stating the research topics you are interested in)<br>2) Academic transcripts<br>3) Brief summary of most recent thesis and the status (eg accepted, in progress, submitted, etc)<br>4) CV (to include names, education, work experience, publications)<br>5) Copy of official English score (TOEFL or IELTS score should be submitted)','2020-09-14 07:00:11','운영자',NULL,NULL);
/*!40000 ALTER TABLE `notice_tb` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-28 19:02:45
