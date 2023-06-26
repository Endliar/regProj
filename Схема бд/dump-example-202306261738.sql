-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: example
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `client` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `phone_1` varchar(20) DEFAULT NULL,
  `phone_2` varchar(20) DEFAULT NULL,
  `phone_3` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (1,'Dimon','gaga','gogo@mail.com','coco','middle','213123123',NULL,NULL),(2,'Павел','Волков','volk@mail.com','Студентусы','Студент','+122312312',NULL,NULL),(3,'Павел','Волков','volk@mail.com','Студентусы','Студент','+122312312',NULL,NULL),(4,'Павел','Волков','mihail@yandex.ru','','','',NULL,NULL),(5,'Павел','Волков','mihail@yandex.ru','Великие Михаилы','','+79112312312',NULL,NULL),(6,'Александр','Демидов','onidem@mail.com','Студентусы','Студент','+12312312',NULL,NULL),(7,'Алексей','Мучков','alexxxx@mail.com','Студентусы','Студент','+12342312',NULL,NULL),(8,'Михаил','Халяпин','mihahah@mail.com','Михаилы','Михаил','+2341234122',NULL,NULL),(9,'Даниил','Радибор','danya@mail.com','','','',NULL,NULL),(11,'Василий','Шереметьев','vasya@mail.com','Василии','','',NULL,NULL),(12,'Ванюков','Николаевич','endliar@yandex.ru','','','+7912312',NULL,NULL),(13,'Ванюков','Николаевич','endliar@yandex.ru','','','+79137458496',NULL,NULL),(14,'Михаил','Халяпин','mihahah@mail.com','Михаилы','','+2341234122',NULL,NULL),(15,'Василий','Шереметьев','vasya@mail.com','Василии','','',NULL,NULL),(16,'Павел','Волков','ewr@mail.com','','','',NULL,NULL),(17,'Василий','Шереметьев','vasya@mail.com','Василии','','',NULL,NULL),(18,'Александр','Демидов','onidem@mail.com','Студентусы','','+12312312',NULL,NULL),(19,'Ванюков','Николаевич','endliar@yandex.ru','','','+79137458496',NULL,NULL),(20,'Михаил','Халяпин','mihahah@mail.com','Михаилы','','+2341234122',NULL,NULL),(21,'Александр','Демидов','onidem@mail.com','Студентусы','','+12312312',NULL,NULL);
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'example'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-26 17:38:45
