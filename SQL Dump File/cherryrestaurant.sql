-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: cherryrestaurant
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `Admin_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Admin_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Admin','admin@cherry.com','0192023a7bbd73250516f069df18b500');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `User_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Date-Registered` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`User_ID`),
  UNIQUE KEY `Email_Unique` (`Email`) USING BTREE,
  UNIQUE KEY `Username_Unique` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (9,'Endi','enditrico@gmail.com','072d42d2c2dcd0598de23ed344aad387','2022-06-01 20:50:14'),(10,'Dajna','dajnanako@gmail.com','9d54134ea5774a444892be6126ceaac2','2022-06-01 20:49:03'),(11,'Juxhin','juxhinkamberi@gmail.com','7fd7ed4e484d68470d8c64d0ab2152a6','2022-06-11 21:06:58');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation` (
  `Reservation_ID` int(255) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL,
  `Number_of_Guests` int(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Telephone_Number` int(20) NOT NULL,
  `Comments` varchar(255) NOT NULL,
  `User_ID` int(11) NOT NULL,
  PRIMARY KEY (`Reservation_ID`),
  KEY `User Key` (`User_ID`),
  CONSTRAINT `User Key` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` VALUES (69,'Dajna','Nako','2022-06-15','03:00:00.000000',3,'Cherry Restaurant Villa',695758565,'I would prefer to have a table near the balcony.',10),(70,'Dajna','Nako','2022-06-24','10:00:00.000000',7,'Cherry Restaurant Bllok',695758565,'',10),(71,'Enola','Nako','2022-06-29','05:00:00.000000',5,'Cherry Restaurant Villa',685858598,'',10),(72,'Aleksa','Drenova','2022-06-20','02:00:00.000000',20,'Cherry Restaurant Villa',695847145,'I will have a birthday party.',10),(73,'Violeta','Kristafi','2022-06-28','09:00:00.000000',5,'Cherry Restaurant Bllok',695847478,'',10),(79,'Indira','Astriti','2022-06-25','04:00:00.000000',1,'Cherry Restaurant Villa',695847589,'',11),(80,'Juxhin ','Kamberi','2022-06-24','10:00:00.000000',6,'Cherry Restaurant Bllok',678585855,'',11),(81,'Juxhin','Kamberi','2022-06-19','02:00:00.000000',9,'Cherry Restaurant Villa',698754456,'',11),(82,'Dejona','Kaxhio','2022-06-28','02:00:00.000000',6,'Cherry Restaurant Villa',693213213,'',11),(83,'Deina','Poli','2022-06-23','03:00:00.000000',4,'Cherry Restaurant Villa',695847589,'',11),(84,'Edona','Hoxha','2022-06-25','01:00:00.000000',8,'Cherry Restaurant Villa',695758565,'See you there',11),(85,'Endi','Trico','2022-06-18','06:00:00.000000',5,'Cherry Restaurant Bllok',695721673,'',9),(86,'Enisa','Trico','2022-06-25','01:00:00.000000',9,'Cherry Restaurant Bllok',671231255,'',9),(87,'Dajana','Rama','2022-06-16','04:00:00.000000',1,'Cherry Restaurant Villa',695847874,'',9),(88,'Juri','Lamcaj','2022-06-27','08:00:00.000000',4,'Cherry Restaurant Bllok',695847854,'',9);
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-12 13:57:34
