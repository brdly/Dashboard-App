# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.38)
# Database: spat_project
# Generation Time: 2018-01-12 12:20:09 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table FormData
# ------------------------------------------------------------

DROP TABLE IF EXISTS `FormData`;

CREATE TABLE `FormData` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idFormField` int(10) unsigned NOT NULL,
  `idPlatform` int(10) unsigned NOT NULL,
  `idReview` int(10) unsigned DEFAULT NULL,
  `formData` varchar(450) NOT NULL DEFAULT '',
  `deleted` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `FK_form_field_id_idx` (`idFormField`),
  KEY `FK_platform_id_idx` (`idPlatform`),
  KEY `FK_review_id_idx` (`idReview`),
  CONSTRAINT `FK_form_field_id` FOREIGN KEY (`idFormField`) REFERENCES `FormFields` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_platform_id` FOREIGN KEY (`idPlatform`) REFERENCES `Platforms` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_review_id` FOREIGN KEY (`idReview`) REFERENCES `FormData` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table FormFields
# ------------------------------------------------------------

DROP TABLE IF EXISTS `FormFields`;

CREATE TABLE `FormFields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fieldName` varchar(45) DEFAULT NULL,
  `deleted` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table Platforms
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Platforms`;

CREATE TABLE `Platforms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `deleted` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
