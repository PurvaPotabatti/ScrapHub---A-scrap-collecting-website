-- MySQL dump 10.13  Distrib 5.6.12, for Win32 (x86)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	5.6.12-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `item_exchange`
--

DROP TABLE IF EXISTS `item_exchange`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_exchange` (
  `item_id` int(255) NOT NULL,
  `item_name` text NOT NULL,
  `item_price` int(255) NOT NULL,
  `item_quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_exchange`
--

LOCK TABLES `item_exchange` WRITE;
/*!40000 ALTER TABLE `item_exchange` DISABLE KEYS */;
INSERT INTO `item_exchange` VALUES (113,'dustbin',233,1),(114,'large size baslet',179,1),(115,'mug',59,1),(116,'notebook',253,1),(117,'bucket',127,2),(118,'large size baslet',179,1),(123,'large size baslet',179,1),(124,'dustbin',233,1),(125,'large size baslet',179,2),(126,'glass_jar',200,1),(129,'best from west',299,1),(130,'dustbin',134,1),(131,'white_paper_plates',150,1),(132,'bucket',127,1),(138,'glass_jar',200,1),(138,'glass_jar',200,1),(139,'flooring',250,1),(140,'sturdy mug',89,1),(142,'glass_jar',200,1);
/*!40000 ALTER TABLE `item_exchange` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_manager`
--

DROP TABLE IF EXISTS `order_manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_manager` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `mobile_no` bigint(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_manager`
--

LOCK TABLES `order_manager` WRITE;
/*!40000 ALTER TABLE `order_manager` DISABLE KEYS */;
INSERT INTO `order_manager` VALUES (57,'sasha',8686868796,'jhhkhlj@gmail.com'),(58,'sasha',8686868796,'jhhkhlj@gmail.com'),(59,'sasha',8686868796,'jhhkhlj@gmail.com'),(60,'sasha',8686868796,'jhhkhlj@gmail.com'),(61,'khushi',9022302137,'jhhkhlj@gmail.com'),(62,'khushi',9022302137,'jhhkhlj@gmail.com'),(63,'khushi',9022302137,'jhhkhlj@gmail.com'),(64,'khushi',9022302137,'jhhkhlj@gmail.com'),(65,'khushi',9022302137,'jhhkhlj@gmail.com'),(66,'khushi',9022302137,'jhhkhlj@gmail.com'),(67,'khushi',9022302137,'jhhkhlj@gmail.com'),(68,'khushi',9022302137,'jhhkhlj@gmail.com'),(69,'purva',9022302137,'jhhkhlj@gmail.com'),(70,'soham',8686868791,'jhhkhlj@gmail.com'),(71,'soham',8686868791,'jhhkhlj@gmail.com'),(72,'soham',8686868791,'jhhkhlj@gmail.com'),(73,'soham',8686868791,'jhhkhlj@gmail.com'),(74,'',0,''),(75,'',0,''),(76,'',0,''),(77,'',0,''),(78,'',0,''),(79,'',0,''),(80,'sammy',8686868796,'jhhkhlj@gmail.com'),(81,'sammy',8686868796,'jhhkhlj@gmail.com'),(82,'sammy',8686868796,'jhhkhlj@gmail.com'),(83,'sammy',8686868796,'jhhkhlj@gmail.com'),(84,'sammy',8686868796,'jhhkhlj@gmail.com'),(85,'sammy',8686868796,'jhhkhlj@gmail.com'),(86,'sammy',8686868796,'jhhkhlj@gmail.com'),(87,'sammy',8686868796,'jhhkhlj@gmail.com'),(88,'sammy',8686868796,'jhhkhlj@gmail.com'),(89,'sammy',8686868796,'jhhkhlj@gmail.com'),(90,'mikasa',9022302137,'potabattipurva21@gmail.com'),(91,'mikasa',9022302137,'potabattipurva21@gmail.com'),(92,'max',9022302137,'jhhkhlj@gmail.com'),(93,'max',9022302137,'jhhkhlj@gmail.com'),(94,'max',9022302137,'jhhkhlj@gmail.com'),(95,'max',9022302137,'jhhkhlj@gmail.com'),(96,'raman',8686868791,'jhhkhlj@gmail.com'),(97,'GON',8686868796,'jhhkhlj@gmail.com'),(98,'viraj',8686868791,'jhhkhlj@gmail.com'),(99,'anokh',9022302137,'jhhkhlj@gmail.com'),(100,'anokh',9022302137,'jhhkhlj@gmail.com'),(101,'shreeyash',8686868791,'jhhkhlj@gmail.com'),(102,'sampada',9022302137,'jhhkhlj@gmail.com'),(103,'SOHAM',8686868791,'jhhkhlj@gmail.com'),(104,'vaishali',8686868796,'jhhkhlj@gmail.com'),(105,'ABCDE',9022302137,'monikadussa14@gmail.com'),(106,'GIKHJHGJ',9022302137,'potabattipurva21@gmail.com'),(107,'khkh',9022302137,'potabattipurva21@gmail.com'),(108,'aojojfeoj',9022302137,'jhhkhlj@gmail.com'),(109,'pooja',9022302137,'jhhkhlj@gmail.com'),(110,'potabatti',9022302137,'jhhkhlj@gmail.com'),(111,'potabatti',9022302137,'jhhkhlj@gmail.com'),(112,'vaishanavi',9022302137,'potabattipurva21@gmail.com'),(113,'VISHUPRIYA',9022302137,'potabattipurva21@gmail.com'),(114,'krishna',9022302137,'potabattipurva21@gmail.com'),(115,'FKUYGLIUK',9022302137,'potabattipurva21@gmail.com'),(116,'rishita',9022302137,'potabattipurva21@gmail.com'),(117,'Soham Potabatti',9022302137,'potabattipurva21@gmail.com'),(118,'Purva Potabatti',9022302137,'potabattipurva21@gmail.com'),(119,'Sampada Potabatti',9022302137,'potabattipurva21@gmail.com'),(120,'sonu',9022302137,'potabattipurva21@gmail.com'),(121,'sonu',9022302137,'potabattipurva21@gmail.com'),(122,'Raman Potabatti',9022302137,'potabattipurva21@gmail.com'),(123,'Raman Potabatti',9022302137,'potabattipurva21@gmail.com'),(124,'Vaishali Potabatti',9022302137,'potabattipurva21@gmail.com'),(125,'Shrutin Yemul',9022302137,'potabattipurva21@gmail.com'),(126,'srushti',1234567890,'jhhkhlj@gmail.com'),(127,'mayuri',7499042708,'mayuridorale8@gmail.com'),(128,'mayuri',7499042708,'mayuridorale8@gmail.com'),(129,'mayuri',7499042708,'mayuridorale8@gmail.com'),(130,'mayuri',7499042708,'mayuridorale8@gmail.com'),(131,'mayuri',7499042708,'mayuridorale8@gmail.com'),(132,'srushti',1234567890,'jhhkhlj@gmail.com'),(133,'srushti',1234567890,'jhhkhlj@gmail.com'),(134,'srushti',1234567890,'jhhkhlj@gmail.com'),(135,'srushti',1234567890,'jhhkhlj@gmail.com'),(136,'srushti',1234567890,'jhhkhlj@gmail.com'),(137,'srushti',1234567890,'jhhkhlj@gmail.com'),(138,'srushti',1234567890,'jhhkhlj@gmail.com'),(139,'srushti',1234567890,'jhhkhlj@gmail.com'),(140,'srushti',1234567890,'jhhkhlj@gmail.com'),(141,'srushti',1234567890,'jhhkhlj@gmail.com'),(142,'mayuri',7499042708,'mayuridorale8@gmail.com'),(143,'Navnath Mane',8796970692,'navmane111@gmail.com');
/*!40000 ALTER TABLE `order_manager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sample`
--

DROP TABLE IF EXISTS `sample`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sample` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sample`
--

LOCK TABLES `sample` WRITE;
/*!40000 ALTER TABLE `sample` DISABLE KEYS */;
INSERT INTO `sample` VALUES (1,'bob',18,''),(2,'bob',18,''),(3,'',0,'about_new.jpeg'),(4,'',0,'about_new.jpeg'),(5,'Shrutin',15,'e-waste.webp'),(6,'Shrutin',15,''),(7,'Shrutin',15,'e-waste.webp'),(8,'anokh',17,'item1.jpg'),(9,'anokh',17,'e-waste_computer.jpg');
/*!40000 ALTER TABLE `sample` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schedule` (
  `schedule_id` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedule`
--

LOCK TABLES `schedule` WRITE;
/*!40000 ALTER TABLE `schedule` DISABLE KEYS */;
INSERT INTO `schedule` VALUES (115,'datta nagar','2024-04-17'),(116,'mitra nagar','2024-04-09'),(116,'datta nagar','2024-04-11'),(116,'datta nagar','2024-04-11'),(117,'ekta nagar, solapur','2024-04-09'),(118,'ekta nagar, solapur','2024-04-09'),(119,'ekta nagar, solapur','2024-04-08'),(123,'ekta nagar, solapur','2024-04-10'),(124,'geeta nagar','2024-04-07'),(125,'ekta nagar, solapur','2024-04-08'),(126,'ekta nagar, solapur','2024-04-25'),(127,'solapur','2024-04-13'),(128,'solapur','2024-04-19'),(129,'solapur','2024-04-13'),(130,'Mitra nager solapur','2024-04-19'),(131,'Mitra nager solapur','2024-04-20'),(132,'ekta nagar, solapur','2024-04-13'),(134,'mitra nagar','2024-04-20'),(136,'ekta nagar, solapur','2024-04-20'),(136,'datta nagar','2024-04-20'),(138,'datta nagar','2024-04-23'),(138,'ekta nagar, solapur','2024-04-27'),(139,'ekta nagar, solapur','2024-04-27'),(142,'Mitra nager solapur','2024-04-18'),(143,'mitra nagar','2024-04-20');
/*!40000 ALTER TABLE `schedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_orders`
--

DROP TABLE IF EXISTS `user_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_orders` (
  `order_id` int(10) NOT NULL,
  `scrap_name` text CHARACTER SET utf8mb4 NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_orders`
--

LOCK TABLES `user_orders` WRITE;
/*!40000 ALTER TABLE `user_orders` DISABLE KEYS */;
INSERT INTO `user_orders` VALUES (19,'Beverage Carton',5,1,'testimonial-4.jpg'),(19,'Books',10,1,'tissue.webp'),(20,'Carton',9,5,''),(20,'Books',10,5,'tissue.webp'),(21,'Beverage Carton',5,1,'testimonial-4.jpg'),(21,'Carton',9,1,''),(22,'Beverage Carton',5,1,'testimonial-4.jpg'),(22,'Books',10,1,'tissue.webp'),(23,'Beverage Carton',5,1,'testimonial-4.jpg'),(23,'Books',10,1,'tissue.webp'),(24,'Beverage Carton',5,1,'testimonial-4.jpg'),(24,'Books',10,1,'tissue.webp'),(25,'Carton',9,1,''),(25,'Books',10,1,'tissue.webp'),(25,'Grey Board',2,1,''),(25,'Magazines',7,1,''),(25,'Newspaper',10,1,''),(25,'White Paper',7,1,''),(25,'Plastic Bags',1,1,''),(26,'Beverage Carton',5,1,'testimonial-4.jpg'),(26,'Magazines',7,1,''),(27,'Books',10,1,'tissue.webp'),(27,'Beverage Carton',5,1,'testimonial-4.jpg'),(28,'Soft plastic',6,1,''),(28,'Polythene',5,1,''),(29,'Computer',230,1,''),(29,'Plastic Jar',3,1,''),(30,'Beverage Carton',5,1,'testimonial-4.jpg'),(31,'Plastic Jar',3,1,''),(31,'Books',10,1,'tissue.webp'),(32,'Milk covers',2,1,''),(33,'Books',10,1,'tissue.webp'),(34,'Plastic Bags',1,1,''),(34,'Iron',25,1,''),(35,'Brass',250,1,''),(35,'Newspaper',10,1,''),(36,'Books',10,4,'tissue.webp'),(37,'White Paper',7,1,''),(37,'Mix plastic',4,1,''),(38,'Magazines',7,1,''),(38,'Beverage Carton',5,1,'testimonial-4.jpg'),(39,'Magazines',7,1,''),(40,'Aluminium',70,1,''),(41,'Beverage Carton',5,1,'testimonial-4.jpg'),(41,'Magazines',7,1,''),(42,'Beverage Carton',5,1,'testimonial-4.jpg'),(43,'Beverage Carton',5,1,'testimonial-4.jpg'),(44,'White Paper',7,1,''),(45,'Tin',12,1,''),(46,'Tyre',3,4,''),(47,'Magazines',7,3,''),(47,'Milk covers',2,3,''),(48,'Books',10,3,'tissue.webp'),(48,'Newspaper',10,3,''),(49,'Water bottle',5,6,''),(50,'Magazines',7,2,''),(51,'Magazines',7,5,''),(52,'Soft plastic',6,1,''),(52,'Aluminium',70,2,''),(53,'Grey Board',2,4,''),(53,'Milk covers',2,3,''),(54,'Books',10,1,'tissue.webp'),(54,'Plastic Jar',3,2,''),(55,'Newspaper',10,2,''),(56,'Beer Bottle',0,1,''),(56,'Beverage Carton',5,3,'testimonial-4.jpg'),(56,'Grey Board',2,1,''),(57,'Books',10,1,'tissue.webp'),(58,'Beverage Carton',5,1,'testimonial-4.jpg'),(59,'Books',10,1,'tissue.webp'),(60,'White Paper',7,1,''),(60,'Glass',55,2,''),(61,'Battery',70,1,''),(61,'Fridge',300,1,''),(62,'Mix Waste',3,1,''),(63,'Brass',250,1,''),(64,'Glass',55,1,''),(64,'Newspaper',10,1,'No file uploaded'),(66,'Carton',9,3,''),(67,'White Paper',7,1,''),(68,'Plastic Bags',1,3,''),(69,'Mix plastic',4,1,''),(70,'Books',10,3,'item9.jpg'),(70,'Magazines',7,1,'paper_magazines.jpg'),(71,'Milk covers',2,2,''),(71,'Iron',25,3,''),(72,'Grey Board',2,1,''),(72,'Books',10,1,'tissue.webp'),(73,'Magazines',7,1,''),(73,'Newspaper',10,2,''),(74,'Grey Board',2,2,'carousel-2_new.jpg'),(75,'Grey Board',2,3,'confused.png'),(75,'Plastic Jar',3,1,'confused.png'),(76,'Beverage Carton',5,1,'testimonial-4.jpg'),(76,'Record file',7,3,''),(77,'Magazines',7,1,'item1.jpg'),(77,'Newspaper',10,1,'item1.jpg'),(78,'Plastic Bags',1,1,'testimonial-3.jpg'),(78,'Plastic Jar',3,2,'testimonial-3.jpg'),(79,'Record file',7,1,'item5.webp'),(79,'Aluminium',70,1,'item5.webp'),(80,'Books',10,1,''),(80,'Beverage Carton',5,3,''),(0,'Beverage Carton',0,0,'about_new.jpeg'),(0,'Milk covers',0,0,'card1.png'),(81,'Beverage Carton',5,1,''),(81,'Milk covers',2,1,''),(0,'Beer Bottle',0,1,'wastebags.jpeg'),(0,'Mix Waste',0,1,'carousel-3_new.jpeg'),(82,'Beer Bottle',0,1,''),(82,'Mix Waste',3,2,''),(0,'Hard plastic',0,1,'card1.png'),(0,'Aluminium',0,1,'card2.png'),(83,'Hard plastic',1,1,''),(83,'Aluminium',70,2,''),(84,'Magazines',7,2,''),(85,'Magazines',7,2,''),(86,'Magazines',7,2,''),(87,'Books',10,2,''),(88,'Books',10,1,''),(89,'Tyre',3,1,''),(90,'Magazines',7,2,'confused.png'),(91,'Soft plastic',6,1,''),(92,'White Paper',7,1,''),(92,'Plastic Jar',3,2,''),(93,'Books',10,3,''),(94,'Grey Board',2,1,''),(95,'Iron',25,1,''),(96,'Beverage Carton',5,1,''),(97,'Newspaper',10,1,'group.jpeg'),(98,'Polythene',5,1,'tissue.webp'),(99,'Magazines',7,1,'carpenter-website-template.jpg'),(99,'Soft plastic',6,3,''),(100,'Beverage Cans',80,2,''),(100,'Tyre',3,3,''),(101,'Computer',230,1,'about_new.jpeg'),(101,'Steel',22,1,'confused.png'),(102,'Glass',55,2,'glass.webp'),(103,'Water bottle',5,1,''),(103,'Tin',12,2,''),(104,'Plastic Jar',3,1,''),(105,'Magazines',7,1,'about_new.jpeg'),(106,'Mix plastic',4,1,''),(106,'Books',10,2,'card1.png'),(106,'Carton',9,1,'card2.png'),(107,'Brass',250,1,'carousel-2_new.jpg'),(108,'Books',10,2,'about_new.jpeg'),(109,'Beverage Carton',5,1,''),(110,'Beverage Carton',5,2,''),(111,'Soft plastic',6,1,''),(112,'Milk covers',2,1,''),(113,'Magazines',7,1,'itachi uchiha 4.jpg'),(114,'Books',10,1,'itachi uchiha 3.jpg'),(115,'Carton',9,1,'Itachi uchiha2.jpg'),(116,'Plastic Bags',1,1,''),(117,'Tin',12,1,'grocery_bags.jpg'),(117,'Water bottle',5,2,''),(118,'Magazines',7,1,'item1.jpg'),(119,'Beverage Carton',5,1,''),(120,'Beverage Carton',5,1,''),(120,'Books',10,1,'carousel-1_new.jpg'),(121,'Beverage Carton',5,1,''),(121,'Books',10,1,''),(122,'Computer',230,1,'item12.webp'),(122,'Glass',55,2,'service-6_new.jpg'),(124,'Books',10,1,'item12.webp'),(124,'Carton',9,1,'item9.jpg'),(125,'Polythene',5,1,'carpenter-website-template.jpg'),(125,'Brass',250,2,'group.jpeg'),(126,'Beverage Carton',5,1,''),(126,'Books',10,1,'carousel-3_new.jpeg'),(127,'Beverage Carton',5,1,''),(128,'Carton',9,1,''),(129,'Record file',7,1,''),(129,'Newspaper',10,1,''),(129,'Brass',250,1,''),(130,'Aluminium',70,1,''),(130,'Carton',9,1,''),(131,'Brass',250,1,''),(131,'Carton',9,1,''),(132,'Books',10,1,''),(132,'Newspaper',10,1,''),(133,'Books',10,1,''),(134,'Books',10,1,''),(135,'Brass',250,1,''),(136,'Beverage Carton',5,1,''),(137,'Beverage Carton',5,1,''),(137,'Books',10,1,''),(138,'Books',10,1,''),(138,'Carton',9,1,''),(139,'Books',10,1,''),(140,'Books',10,1,''),(141,'Books',10,1,''),(141,'Newspaper',10,1,''),(142,'Beverage Carton',5,1,''),(143,'Mix plastic',4,1234,''),(143,'Books',10,5,'card1.png'),(143,'Grey Board',2,13,'');
/*!40000 ALTER TABLE `user_orders` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-09-08 10:44:05
