/*
SQLyog Ultimate v9.01 
MySQL - 5.6.12-log : Database - ws_clima_inta
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ws_clima_inta` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;

USE `ws_clima_inta`;

/*Table structure for table `emas` */

CREATE TABLE `emas` (
  `idEmas` int(11) NOT NULL AUTO_INCREMENT,
  `nombreEma` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `latitudEma` float DEFAULT NULL,
  `longitudEma` float DEFAULT NULL,
  `altitudEma` int(11) DEFAULT NULL,
  `urlEma` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dateEma` int(11) NOT NULL,
  `timeEma` int(11) NOT NULL,
  `temperaturaEma` int(11) NOT NULL,
  `humedadEma` int(11) NOT NULL,
  `dewPointEma` int(11) NOT NULL,
  `vientoEma` int(11) NOT NULL,
  `dirVientoEma` int(11) NOT NULL,
  `vientoRafagasEma` int(11) NOT NULL,
  `presionEma` int(11) NOT NULL,
  `lluviaEma` int(11) NOT NULL,
  `codigoEma` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idEmas`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*Data for the table `emas` */

insert  into `emas`(`idEmas`,`nombreEma`,`latitudEma`,`longitudEma`,`altitudEma`,`urlEma`,`dateEma`,`timeEma`,`temperaturaEma`,`humedadEma`,`dewPointEma`,`vientoEma`,`dirVientoEma`,`vientoRafagasEma`,`presionEma`,`lluviaEma`,`codigoEma`) values (1,'Picún Leufú',-39.536,-69.298,393,'http://anterior.inta.gov.ar/altovalle/picunleufu/downld02.txt',1,2,3,6,7,8,9,11,17,18,'INTAPICUN'),(2,'Cinco Saltos',-38.845,-68.069,282,'http://anterior.inta.gov.ar/altovalle/cincosaltos/downld02.txt',1,2,3,6,7,8,9,11,17,18,'INTACINCO'),(3,'Contralmirante Guerrico',-39.017,-67.667,242,'http://anterior.inta.gov.ar/altovalle/met/downld02.txt',1,2,3,6,7,8,9,11,17,18,'INTAGUERR'),(4,'Coronel Belisle',-39.197,-65.894,128,'http://anterior.inta.gov.ar/altovalle/belisle/downld02.txt',1,2,3,6,7,8,9,11,17,18,'INTABELIS'),(5,'Luís Beltrán',-39.317,-65.75,128,'http://anterior.inta.gov.ar/altovalle/lube/downld02.txt',1,2,3,6,7,8,9,11,17,18,'INTALBELT'),(6,'Pomona',-39.478,-39.478,127,'http://anterior.inta.gov.ar/altovalle/pomona/downld08.txt',1,2,3,6,7,8,9,11,17,18,'INTAPOMON'),(7,'Villa Regina',-39.126,-67.106,158,'http://anterior.inta.gov.ar/altovalle/regina/downld02.txt',1,2,3,6,7,8,9,11,17,18,'INTAREGIN'),(8,'San Patricio del Chañar',-38.57,-68.36,334,'http://anterior.inta.gov.ar/altovalle/sanpatricio/downld02.txt',1,2,3,6,7,8,9,11,17,18,'INTACHANA'),(9,'Fernandez Oro',NULL,NULL,NULL,'http://www.aic.gob.ar/aic/estacion/FdezOro/downld08.txt',1,2,3,6,7,8,9,11,16,17,'AICFDZORO');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
