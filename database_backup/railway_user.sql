-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: railway
-- ------------------------------------------------------
-- Server version	8.2.0

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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `born_date` date DEFAULT NULL,
  `document_type` enum('CPF','CNPJ') NOT NULL,
  `document_number` varchar(50) NOT NULL,
  `user_type` enum('STUDENT','TEACHER','SUPPLIER','ADMIN') NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`,`email`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Guilherme de Lima','Irgang','991142416','484gui@gmail.com',NULL,'CPF','11072147939','ADMIN','12345'),(12,'Guilherme','','','tainaracs200sc@gmail.com','2023-11-28','CPF','241414151512','ADMIN','3465366346'),(13,'Guilherme','','','tainaracs200sc@mail.com','2023-11-07','CPF','241414151512','ADMIN','3465366346'),(14,'Guilherme','','','tainaracsssa200sc@gmail.com','2023-11-21','CPF','241414151512','ADMIN','3465366346'),(15,'Guilherme','','','tainaracasass200sc@gmail.com','2023-11-05','CPF','241414151512','ADMIN','3465366346'),(16,'Guilherme','','','tainaawracs200sc@gmail.com','2023-10-30','CPF','241414151512','ADMIN','3465366346'),(17,'Guilherme','','','tainaracs2asd00sc@gmail.com','2023-11-07','CPF','241414151512','ADMIN','3465366346'),(18,'Guilherme','','','tainaasaracs200sc@gmail.com','2023-11-07','CPF','241414151512','ADMIN','3465366346'),(19,'Guilherme','','','tainaracs@mail.com','2023-11-13','CPF','241414151512','TEACHER',NULL),(20,'Guilherme','','','tsc@gmail.com','1999-05-14','CPF','241414151512','TEACHER',NULL),(21,'Guilherme','','','0sc@gmail.com','1999-05-14','CPF','241414151512','TEACHER',NULL),(22,'Guilherme','','','tain@mail.com','1999-05-14','CPF','241414151512','TEACHER',NULL),(23,'Guilherme','','','tainaraasdcs200sc@gmail.com','1999-05-14','CPF','241414151512','TEACHER',NULL),(24,'Guilherme','','','acs200sc@gmail.com','1999-05-14','CPF','241414151512','TEACHER',NULL),(25,'Guilherme','','','tainara0sc@gmail.com','1999-05-14','CPF','241414151512','TEACHER',NULL),(26,'Guilherme','','','tain200sc@gmail.com','1999-05-14','CPF','241414151512','TEACHER',NULL),(27,'Guilherme','','','s200sc@gmail.com','1999-05-14','CPF','241414151512','TEACHER',NULL),(28,'Guilherme','','','dadas200sc@gmail.com','1999-05-14','CPF','241414151512','STUDENT',NULL),(29,'Guilherme','','','gui.gdli@gmail.com','1999-05-14','CPF','241414151512','SUPPLIER',NULL),(30,'Guilherme ','Irgang ','4236534563456435','jhondoe@gmail.com','2023-11-13','CNPJ','000.001.123.12','SUPPLIER',NULL),(31,'Tainara','Irgang','4236534563456435','34teste3@gmail.com','2023-11-07','CPF','11072147939','STUDENT',NULL),(32,'Guilherme de Lima','','','fret@gmail.com','2023-11-13','CNPJ','123.1244.00001/123','TEACHER',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-15 18:30:17
