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
-- Table structure for table `notice_tb`
--

DROP TABLE IF EXISTS `notice_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notice_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `content` text,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `writer` text,
  `images` text,
  `files` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notice_tb`
--

LOCK TABLES `notice_tb` WRITE;
/*!40000 ALTER TABLE `notice_tb` DISABLE KEYS */;
INSERT INTO `notice_tb` VALUES (70,'첫번째 공지사항입니다1','안녕하세요','2020-04-10 17:39:57','운영자','',''),(71,'두번째 공지사항입니다2','안녕하세요','2020-08-27 15:33:33','운영자',NULL,NULL),(72,'두번째 공지사항입니다13',NULL,'2020-08-27 14:57:42',NULL,NULL,NULL),(73,'두번째 공지사항입니다23',NULL,'2020-08-27 14:57:42',NULL,NULL,NULL),(74,'두번째 공지사항입니다4',NULL,'2020-08-27 14:57:42',NULL,NULL,NULL),(75,'두번째 공지사항입니다5',NULL,'2020-08-27 14:57:42',NULL,NULL,NULL),(76,'두번째 공지사항입니다6',NULL,'2020-08-27 14:57:42',NULL,NULL,NULL),(77,'두번째 공지사항입니다7',NULL,'2020-08-27 14:57:42',NULL,NULL,NULL),(78,'두번째 공지사항입니다8',NULL,'2020-08-27 14:57:42',NULL,NULL,NULL),(79,'두번째 공지사항입니다9',NULL,'2020-08-27 14:57:42',NULL,NULL,NULL),(80,'두번째 공지사항입니다10',NULL,'2020-08-27 14:57:42',NULL,NULL,NULL),(81,'두번째 공지사항입니다두번째 공지사항입니11다',NULL,'2020-08-27 14:57:42',NULL,NULL,NULL);
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

-- Dump completed on 2020-08-27 16:43:43
