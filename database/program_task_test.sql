/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.6-MariaDB : Database - program_task_test
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`program_task_test` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `program_task_test`;

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `id` char(128) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `employee` */

LOCK TABLES `employee` WRITE;

insert  into `employee`(`id`,`login`,`name`) values ('ba4c390a-c90e-11ea-8e53-00266c83cf56','acde01','Employee1'),('ba5563d9-c90e-11ea-8e53-00266c83cf56','acde02','Employee2'),('ba5c2b1d-c90e-11ea-8e53-00266c83cf56','acde03','Employee3'),('ba697305-c90e-11ea-8e53-00266c83cf56','acde04','Employee4'),('ba73ad03-c90e-11ea-8e53-00266c83cf56','acde05','Employee5'),('ba7a6b6b-c90e-11ea-8e53-00266c83cf56','acde06','Employee6'),('ba892da9-c90e-11ea-8e53-00266c83cf56','acde07','Employee7'),('ba9f4dac-c90e-11ea-8e53-00266c83cf56','acde08','Employee8');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
