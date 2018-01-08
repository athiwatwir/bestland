/*
SQLyog Community v12.4.2 (64 bit)
MySQL - 10.1.21-MariaDB : Database - bestland
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bestland` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `bestland`;

/*Data for the table `c_emailsettings` */

insert  into `c_emailsettings`(`id`,`email_isenable`,`email_server`,`email_port`,`email_username`,`email_password`,`email_address`,`email_title`,`created`,`updated`) values 
(0,'Y','ssl://smtp.gmail.com',465,'clashpop@gmail.com','p@ss9996','bestland@bestland.com',NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
