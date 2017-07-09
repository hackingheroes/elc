-- MySQL dump 10.13  Distrib 5.5.55, for Linux (x86_64)
--
-- Host: localhost    Database: admin_elc
-- ------------------------------------------------------
-- Server version	5.5.55

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
-- Current Database: `admin_elc`
--


--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'adam','rysiu'),(2,'abv','abv'),(3,'asd','asd'),(4,'abv','abv'),(5,'modtest','scp'),(35,'Test','test'),(7,'masoudhidsg','fhagfakf'),(8,'lolek','pineapple'),(36,'dominik','testtest'),(10,'byku','stasiek'),(11,'asdsad','asdsad'),(12,'adam2','adam'),(13,'blipguest','12345678'),(14,'test2','test2'),(15,'michal','michal'),(16,'szymonmaziec','szymonmaziec2000'),(17,'polska','ppppp'),(18,'Twojamama','twojamama2000'),(19,'szani palkiewicz','qwertyuiop'),(20,'Rafael','lagarta7'),(21,'test','test'),(22,'Michal','michal'),(23,'GrubY','kubam003'),(24,'qwert','qwert'),(28,'elc','elc'),(27,'qwerty','qwerty'),(30,'GriZZ','gumeczka123'),(32,'szymontest','test'),(37,'Suiko','Infinity'),(38,'Ricardo','ricardo'),(39,'Afonso','afonso'),(40,'a','a'),(41,',',','),(42,'Karaś','Słodki');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `words`
--

DROP TABLE IF EXISTS `words`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `words` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `word` text COLLATE utf8_polish_ci NOT NULL,
  `wdesc` text COLLATE utf8_polish_ci NOT NULL,
  `phonetic` varchar(22) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `example1` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `example2` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `example3` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `synonym` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `style` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `words`
--

LOCK TABLES `words` WRITE;
/*!40000 ALTER TABLE `words` DISABLE KEYS */;
INSERT INTO `words` VALUES (53,'Pencil','An instrument for writing or drawing, consisting of a thin stick of graphite','ˈpɛnsɪl','She took her pencil and starter drawing','Each pencil is different, there are many types of them!','I always wanted to have a pencil but mu mum never bought me one :(','brush','formal'),(52,'Lamp','A device for giving light','','This lamp does not work.','This lamp is broken.','','lantern','informal'),(51,'Mouse','A small rodent that typically has a pointed snout, relatively large ears and eyes, and a long tail.','maʊs','Cats eat mice.','','','','formal'),(50,'Scissors','A metal object used to cut stuff in half',NULL,NULL,NULL,NULL,NULL,NULL),(45,'Sei lá','Word in portuguese for \"I dont Know\"','','Eu sei lá se vou.\"I dont know if i go\"','','','não sei','informal'),(48,'programming','The process of writing computer programs','ˈprəʊɡramɪŋ','programming languages','the programming of shows','','','formal'),(47,'man','An adult human male','man','the men\'s semi-finals','Inspector Bull was sure they would find their man','','adult','formal'),(46,'translate','Be expressed or be capable of being expressed in another language.','tranzˈleɪt','several of his books were translated into English','few of Shakespeare\'s other works have been translated into ballets','twenty years of critical success which rarely translated into public acclaim','convert','formal'),(49,'coder','person who writes computer programms','ko-der','I','','','programmer',''),(54,'Cool','Cold or fine','Kul','I','You','Szymon is [cool]','fine','informal'),(55,'Book','a written or printed work consisting of pages glued or sewn together along one side and bound in covers.','bʊk','This book is big','My book is blue','I will read this book','','informal');
/*!40000 ALTER TABLE `words` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-09  4:36:35

