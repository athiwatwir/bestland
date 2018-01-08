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

/*Data for the table `articles` */

insert  into `articles`(`id`,`name`,`text`,`created`,`updated`,`createdby`,`isactive`,`category_id`,`seq`) values 
('55135218-efe8-490b-ac7f-d68243ff2ca0','ควรจะตั้งราคาขายเท่าไหร่ดี','<p>เนื่องจากเราเปิดบริษัทฯเป็นตัวแทนขายอสังหาริมทรัพย์แห่งแรกของประเทศไทย มีประสบการณ์ในการขายมากกว่า 20 ปี เราจึงสามารถให้คำปรึกษาในการเรื่องของการตั้งราคาขายที่เหมาะสม เพื่อที่จะขายได้ไวและได้ราคาสูงที่สุด</p>','2017-10-20 15:20:06',NULL,NULL,'Y','7506c8f2-3b2b-43ad-9d5e-727c41155a22',1);

/*Data for the table `categories` */

insert  into `categories`(`id`,`name`,`decription`,`isactive`,`seq`,`created`,`createdby`) values 
('488926ca-3157-4554-8673-8f5b04a81b15','ปัญหาของคนซื้อบ้าน',NULL,'Y',2,'2017-10-20 15:08:56',NULL),
('7506c8f2-3b2b-43ad-9d5e-727c41155a22','ปัญหาของคนขายบ้าน',NULL,'Y',1,'2017-10-20 15:08:34',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
