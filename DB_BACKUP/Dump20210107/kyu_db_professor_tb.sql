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
-- Table structure for table `professor_tb`
--

DROP TABLE IF EXISTS `professor_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `professor_tb` (
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
  `biography` text,
  `research_interests` text,
  `professional_experiences` text,
  `awards_and_honors` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professor_tb`
--

LOCK TABLES `professor_tb` WRITE;
/*!40000 ALTER TABLE `professor_tb` DISABLE KEYS */;
INSERT INTO `professor_tb` VALUES (2,'이종훈',' Jong Hun Lee ','Principal Researcher, Division of Future Automotive Research','DGIST (Daegu Gyeongbuk Institute of Science & Technology)  50-1, Sang-Ri, Hyeongpung-Myeon, Dalseong-Gun, Daegu, 711-873, Korea','82-53-785-4580','82-53-785-4589','jhlee@dgist.ac.kr','null','ef42e44fad01bb61023c55aefcfd26d7','professor',' Ph.D., Department of Electrical, Electronics and Computer Engineering, Sungkyunkwan University, 2002.<br> M.S., Department of Electronic Engineering, Sungkyunkwan University, 1998.<br> B.S., Department of Electronic Engineering, Sungkyunkwan University, 1996.<br> Samsung Electronics Co., Ltd., (March 2002 ~ June 2005)Principal Researcher, Telecom R&D Center, Telecommunication Systems Division<br> DGIST (July 2005 ~ present)<br> Principal researcher, Research Division of Future Automotive Research<br> Georgia Institute of Technology (Oct. 2016 ~ Oct. 2017)<br> Visiting scholar, Department of Electrical and computer Engineering<br>','Radar System Design<br>MIMO/Multi-channel Radar<br>Multifunctional Radar(MFR)<br>Multi-dimensional Imaging Radar<br>Super-resolution radar algorithm<br>See-thru-the obstacle Radar<br>Automotive Radar<br>Meta-material based RF Cloaking & absorber<br>','Radar System Design&&MIMO/Multi-channel Radar&&Multifunctional Radar(MFR)&&Multi-dimensional Imaging Radar&&Super-resolution radar algorithm&&See-thru-the obstacle Radar&&Automotive Radar&&Meta-material based RF Cloaking & absorber&&','Award of minister of Trade, Industry & Energy in Korea (2015), Tech-Biz. Top 3<br>Award of minister of Science, ICT and Planning in Korea (2013), Outstanding performance<br>Man of DGIST of the year(2012)<br>Great minds of the 21st Century (ABI, 2012, 2013)<br>2000 outstanding intellectuals of the 21st Century (IBC, 2011)<br>Honor of Best researcher in DGIST(2007)<br>Best paper award in COOC(1999)<br>'),(7,'김상동 ','Sang dong Kim','Division of Automotive Technology/Senior Research Engineer','DGIST (Daegu Gyeongbuk Institute of Science & Technology) 50-1, Sang-Ri, Hyeongpung-Myeon, Dalseong-Gun, Daegu, 711-873, Korea','82-53-785-4561','','jhlee@dgist.ac.kr','null','c750940b2195bed02366fd7faa44ec91','professor','Ph.D. in Electrical Engineering, Kyungpook National Univ., Daegu, Korea&&Thesis: Low complexity joint extrapolation-MUSIC based 2D parameter estimator for vital FMCW radar&&','Super-resolution radar&&Vital sign radar&&Automotive radar&&MIMO imaging radar&&','Present Senior Research Engineer, Division of Automotive Technology, DGIST, Daegu, Korea&&  - Developed super-resolution algorithm for vehicle and human&&  - Implemented FMCW radar DSP system for vehicle and human&&Visiting Scholar, University of Florida, Florida, U.S.A&&  - Developed vital Doppler frequency estimation algorithm&&Research Engineer, Robotics Research Division, DGIST, Daegu, Korea&&  - Developed frequency estimator for pulse radar&&  - Implemented UWB radar prototype board composed of FPGA and DSP&&Research Assistant, Hanyang Univ., Seoul, Korea&&  - Implemented IEEE 802.15.3a MB-OFDM - UWB system&&  - Implemented IEEE 802.15.4a DBO-CSS system&&&&','Ph.D., Department of Electrical, Electronics and Computer Engineering, Sungkyunkwan University, 2002.&&M.S., Department of Electronic Engineering, Sungkyunkwan University, 1998.&&B.S., Department of Electronic Engineering, Sungkyunkwan University, 1996.&&Samsung Electronics Co., Ltd., (March 2002  June 2005)Principal Researcher, Telecom R&D Center, Telecommunication Systems Division&&DGIST (July 2005  present)&&Principal researcher, Research Division of Future Automotive Research&&Georgia Institute of Technology (Oct. 2016  Oct. 2017)&&Visiting scholar, Department of Electrical and computer Engineering&&&&&&');
/*!40000 ALTER TABLE `professor_tb` ENABLE KEYS */;
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
