# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.8-MariaDB)
# Database: thecao
# Generation Time: 2019-03-19 07:08:30 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table admins
# ------------------------------------------------------------

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_nickname_unique` (`nickname`),
  KEY `admins_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;

INSERT INTO `admins` (`id`, `email`, `password`, `nickname`, `display_name`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'chidungplus@gmail.com','','chidungplus','Nguyễn Chí Dũng',1,NULL,NULL),
	(2,'','','inxizel','Phạm Ngọc Nam',0,NULL,NULL);

/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2019_03_12_094031_create_admins_table',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `gender`, `email_verified_at`, `password`, `remember_token`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'Nguyễn Chí Dũng','chidungplus@gmail.com','0965346910',1,NULL,'$2y$10$LOeNTFM2gDW70haWpdLNBeQx2lumasLu1Kg/qUlijfBHUPs6jQ6yK','IERu0NhOGq482ZN9D6rOUGP1Ghu8nBCxzXwbCaBq3CGdv2my3p5Bt5vTbHsW','on','2019-03-16 00:26:39','2019-03-16 00:26:39'),
	(2,'Phạm Ngọc Long','inxizel@gmail.com','0987467382',1,NULL,'$2y$10$y0Zs9w6NWmgp2oHmJ8NumeMl7WnaJw1QzKv9uHmI7MZfKiyzmGyTe',NULL,'on','2019-03-16 01:51:03','2019-03-16 01:51:03'),
	(3,'Lương Thu Hiền','cuongnguyen@gmail.com','0967364716',0,NULL,'$2y$10$IyCMWJy0jAKRMyN6pDhygerv476Uo94TrsZKAJ6zLWhQrYtJ1X.wO',NULL,'on','2019-03-16 06:20:37','2019-03-16 06:20:37'),
	(4,'Vũ Bắc Long','longvu@gmail.com','0964573764',1,NULL,'$2y$10$6/T/xa3DZd3ccV36cRCLPOW1xuSNo6AteUkGj1XgxLRzM6ykrpD9G',NULL,'on','2019-03-16 06:21:27','2019-03-16 06:21:27'),
	(5,'Vũ Thị Phương','longnhi@gmail.com','0936243273',0,NULL,'$2y$10$Ze2tf9FvBkroK/7gRFPOiu6BWOn2MX64w31wDj/K4.IFVFtxjBaDW',NULL,'off','2019-03-16 06:35:59','2019-03-16 06:35:59'),
	(21,'Phạm Vũ Phong','vuphonglee@gmail.com','098574875',1,NULL,'$2y$10$HVYKjNPBAo.WVZyLMpwLNea2l7iykOIrax7OQAZBbaZ5DmUlZQxOa',NULL,'on','2019-03-16 16:18:30','2019-03-16 16:18:30');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
