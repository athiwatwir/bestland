/*
SQLyog Community v12.4.2 (64 bit)
MySQL - 10.1.21-MariaDB : Database - lovethaihome
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lovethaihome` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `lovethaihome`;

/*Data for the table `users` */

insert  into `users`(`id`,`usercode`,`title`,`firstname`,`lastname`,`username`,`password`,`email`,`phone`,`lineid`,`fax`,`isactive`,`isverify`,`islocked`,`iscustomer`,`isseller`,`gender`,`created`,`updated`,`verifycode`,`position`) values 
('0','0',NULL,'Admin','Admin','admin','$2y$10$1w1gvgRghFnk7TuW/1xX3O8hWqZqlxy55o3A59EtYygqELXtlXkLK','admin@lovethaihome.com',NULL,NULL,NULL,'Y','Y','N','N','N',NULL,NULL,NULL,NULL,NULL),
('02eb4f4f-0ed8-4412-8947-e8afcd1eb2b6',NULL,NULL,'นพพร','ช่วยโต',NULL,NULL,'kodshirt75.ut@gmail.com','061-615-0922','kodshirt',NULL,'N','N','N','N','Y',NULL,'2017-05-11 14:02:49',NULL,NULL,'Real Estate Associate'),
('04c2d341-e8eb-4dc8-9859-c0414241cbac',NULL,NULL,'สุรัสวดี','จงศรีวัฒนพร',NULL,NULL,'mouymouy.1979@gmail.com','089-818-6342','0898186342',NULL,'N','N','N','N','Y',NULL,'2017-02-02 18:14:20',NULL,NULL,'Real Estate Associate'),
('0bd1a391-f77e-406d-be1c-7cb25d887b72',NULL,NULL,'ณิฐชมนต์','ปิติพิริยธรณ์',NULL,NULL,'nitchamon@hotmail.com','097-048-2983','issaree55',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:29:28',NULL,NULL,'Real Estate Associate'),
('0d300d26-2ba2-4e13-9e9e-e1f046381c7b',NULL,NULL,'ศิราณี','อุ่นมะดี',NULL,NULL,'gerry_too@hotmail.com','089-695-7957','16301782',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:21:04',NULL,NULL,'Associate Manager'),
('1f606d5f-42fc-474b-a7ba-dfc81175635d',NULL,NULL,'วิจิตรศักดิ์','สุวรรณรัตน์',NULL,NULL,'wichitsak@hotmail.com','086-788-7757','chit-era',NULL,'N','N','N','N','Y',NULL,'2016-12-18 21:52:13',NULL,NULL,'Real Estate Associate'),
('20dbc4b3-fbfd-4df6-b381-0a5779cb1e23',NULL,NULL,'เทพประธาน','แสงกาญจนวานิช',NULL,NULL,'benz_thepprathan@hotmail.com','081-432-9747','benzloj',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:35:23',NULL,NULL,'Real Estate Associate'),
('2dd99e14-b843-4816-9802-ac71b5b2a7a1',NULL,NULL,'เกศธัช','มยุระสาคร',NULL,NULL,'kesatut@hotmail.com','081-618-8887','0816188887',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:23:24',NULL,NULL,'Real Estate Specialist'),
('366205de-65f8-4d83-9624-e490ee852465',NULL,NULL,'อเนก','พุ่มฉัตร',NULL,NULL,'nek_kp@hotmail.com','085-293-7565','0852937565',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:24:50',NULL,NULL,'Real Estate Specialist'),
('4315fa11-c98f-4ded-99f3-44187c80faa4',NULL,NULL,'ชาญวิทย์','ศรีสุวรรณ',NULL,NULL,'lovethaihome@gmail.com','081-565-2025','0815652025',NULL,'N','N','N','N','Y',NULL,'2016-12-17 17:23:06',NULL,NULL,'Associate Director'),
('589d5271-9a14-4491-8dc2-b2034d04999b',NULL,NULL,'ชัญญาพัชญ์','วชิรพันธ์ประดับ',NULL,NULL,'mychanyapat@gmail.com','099-425-9962','unun0492',NULL,'N','N','N','N','Y',NULL,'2017-05-11 13:45:30',NULL,NULL,'Real Estate Associate'),
('620bd24a-13fa-451f-91cf-3b8c05420109',NULL,NULL,'ภรินทร์พัชร','งามปกรณ์ทิพย์',NULL,NULL,'rin08y@gmail.com','099-165-8578','0959230555',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:28:24',NULL,NULL,'Real Estate Associate'),
('6438c9d7-d07e-4e9a-8ac2-f01c7285f5e8',NULL,NULL,'ยศพนธิ์','ชุมภูชิต',NULL,NULL,'numnn@hotmail.com','087-047-2829','0870472829',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:37:03',NULL,NULL,'Real Estate Associate'),
('654c2b2f-4a15-4b17-99bd-e45c31df429c',NULL,NULL,'สิรสา','ศรีหะรัญ',NULL,NULL,'sirasa5sriharun@gmail.com','083-051-4969 , 094-485-4189','0830514969',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:34:45',NULL,NULL,'Real Estate Associate'),
('6fb0e189-3eab-441f-b2b6-883ac5e130db',NULL,NULL,'มงคล','ลุนสำโรง',NULL,NULL,'youceeit@gmail.com','087-412-9337','',NULL,'N','N','N','N','Y',NULL,'2017-02-24 16:15:42',NULL,NULL,'Real Estate Associate'),
('71ace9cb-2f6f-4528-9e04-90fc2d833c58',NULL,NULL,'อัญชลีพร','ศิริ',NULL,NULL,'unchalee62784@windowslive.com','085-355-5641','0853555641',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:36:28',NULL,NULL,'Real Estate Associate'),
('72c3e486-9907-4245-9a7c-7a52c8fff8c4',NULL,NULL,'ศรุดา','โชติยานนท์',NULL,NULL,'sludah69@yahoo.com','087-089-6957','0870896957',NULL,'N','N','N','N','Y',NULL,'2017-02-02 18:22:50',NULL,NULL,'Real Estate Associate'),
('75e1c346-785a-43b3-b458-248af4d8fda5',NULL,NULL,'อจรี','เมลเคอร์สัน',NULL,NULL,'lajaree@hotmail.com','089-445-7944','AJMELKER',NULL,'N','N','N','N','Y',NULL,'2016-12-18 21:51:08',NULL,NULL,'Real Estate Associate'),
('7bac93e0-ce51-4af1-b5ec-53d60a20dccd',NULL,NULL,'ไชยยศ','มหาวรมากร',NULL,NULL,'golf_era101@hotmail.com','062-163-9951','golfera101',NULL,'N','N','N','N','Y',NULL,'2017-02-24 16:08:55',NULL,NULL,'Associate  Manager'),
('7d809ea1-c355-4d2f-8e8e-cdf334b9862a',NULL,NULL,'นิรุตต์','ศรัณฑ์ศิริ',NULL,NULL,'blackbrownblue@hotmail.com','089-494-2323','artnirut',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:30:30',NULL,NULL,'Real Estate Associate'),
('7eda7fef-9c64-40c7-b634-b967b12aeaa7',NULL,NULL,'ชัชวิสส์','ขาวปลอด',NULL,NULL,'chatchawatch@gmail.com','095-332-5299','jaws18119',NULL,'N','N','N','N','Y',NULL,'2017-07-01 12:50:21',NULL,NULL,'Real Estate Associate'),
('8cf36407-a951-4933-90ed-62a379cfb1e3',NULL,NULL,'จำนง','วงศ์อาษา',NULL,NULL,'telefly99@hotmail.com','089-897-4748 , 094-249-3393','boybest99',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:21:40',NULL,NULL,'Real Estate Specialist'),
('8dd81ca6-0d55-48e7-8ebe-39849477bdbf',NULL,NULL,'สิทธิชัย','กิตติสัทโธ',NULL,NULL,'sittichai.era@gmail.com','089-631-5494','sittichai2511',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:26:13',NULL,NULL,'Real Estate Specialist'),
('91fde80b-faf3-4dff-b30b-f19957e78e46',NULL,NULL,'กิตติพงษ์','ศิริเจริญรัตน์',NULL,NULL,'kittipong629@gmail.com','064-419-3695','0879889212',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:36:00',NULL,NULL,'Real Estate Associate'),
('aed14d2e-34a7-4961-b0e3-6bb46067fda5',NULL,NULL,'นรินทร์ทิพย์','นาคายาม่า',NULL,NULL,'kim2787era@gmail.com','085-195-2787','0851952787',NULL,'N','N','N','N','Y',NULL,'2017-02-24 16:11:18',NULL,NULL,'Real Estate Associate'),
('b6698ce9-5e28-423a-a725-4f5e51266efe',NULL,NULL,'สุรัช','ทิพย์เกิด',NULL,NULL,'surat_q@hotmail.com','081-914-3384','0819143384',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:29:59',NULL,NULL,'Real Estate Associate'),
('b69c4f51-26b1-43ee-8575-d027d2396f74',NULL,NULL,'ธนัญญา','ธรรมถาวร',NULL,NULL,'thananya656@gmail.com','094-659-6632','tikky615',NULL,'N','N','N','N','Y',NULL,'2017-05-18 10:55:32',NULL,NULL,'Real Estate Associate'),
('b8250a50-29d1-4e7c-9101-5191b673bdd8',NULL,NULL,'นิพนธ์','บุ้นเฮียง',NULL,NULL,'topeau984@hotmail.com','092-889-7992','toffebaba',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:26:49',NULL,NULL,'Real Estate Specialist'),
('ba0e572f-87e0-4d27-b7f6-040e8b78c076',NULL,NULL,'พิราตรี','อ้นพงษ์',NULL,NULL,'piratree.era@gmail.com','091-010-8495','nuutree88',NULL,'N','N','N','N','Y',NULL,'2016-12-18 21:54:30',NULL,NULL,'Real Estate Associate'),
('bb0c4993-0a85-4e89-9228-163607c4e110',NULL,NULL,'ศิริพร','จรูญรักษ์',NULL,NULL,'bogieooi@yahoo.com','081-743-1871','bogieooi',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:31:50',NULL,NULL,'Real Estate Associate'),
('d137afd7-7e0c-4cbb-baad-6d6202d32bd2',NULL,NULL,'ลัลนา','เจริญจิตร์',NULL,NULL,'lanlana.theera@gmail.com','094-539-2824','inging_era',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:37:42',NULL,NULL,'Real Estate Associate'),
('d30447a9-c09f-41f9-a9b7-1bd05de66f25',NULL,NULL,'ภารดี','มหาธนากุล',NULL,NULL,'paradee9951@gmail.com','061-614-5959','0616145959',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:28:54',NULL,NULL,'Real Estate Specialist'),
('dadfcf8b-c4e6-4e6b-aaec-f084f8a7e4f0',NULL,NULL,'อุษา','แก้วประถม',NULL,NULL,'kaeosar44@hotmail.com','061-159-6526','USA9412',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:22:25',NULL,NULL,'Real Estate Specialist'),
('dc929bfa-2149-4805-9024-f683b966cf5f',NULL,NULL,'วิไลย์วรรณ์','เชื้อทอง',NULL,NULL,'jum_era@hotmail.com','081-442-1251','JUMUNPAO',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:20:20',NULL,NULL,'Associate Manager'),
('e4fe73b3-8678-4cc3-8fde-ee954aafe952',NULL,NULL,'ธีรพงศ์','กังกานศุภพันธ์',NULL,NULL,'Summonvetarn1@hotmail.com','083-069-2284','0830692284',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:25:39',NULL,NULL,'Real Estate Specialist'),
('e9a2d029-1a57-48b9-a90e-b5724dcd8eeb',NULL,NULL,'ธนกร','วิชิตทรัพยากร',NULL,NULL,'rahome.tot@gmail.com','065-006-0057','Tot2tot',NULL,'N','N','N','N','Y',NULL,'2017-02-02 18:23:31',NULL,NULL,'Real Estate Associate'),
('f46a985f-bc5b-4fc2-b85a-e400f2b45183',NULL,NULL,'ธนิดา','กวางแก้ว',NULL,NULL,'aor.8900@gmail.com','098-7419963','aor6356',NULL,'N','N','N','N','Y',NULL,'2017-02-24 16:09:56',NULL,NULL,'Real Estate Associate'),
('fdb04b30-4b4f-46c1-8373-192c33592d27',NULL,NULL,'กุลวิณ','ศรีไกรศร',NULL,NULL,'era.kullawin@gmail.com','098-657-8688','0986578688',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:38:15',NULL,NULL,'Real Estate Associate'),
('ff7af2ac-be8b-4d63-ba1c-54186b69066b',NULL,NULL,'กรดล','ประเวระไภ',NULL,NULL,'korradol@outlook.co.th','086-805-5971','korradol2526',NULL,'N','N','N','N','Y',NULL,'2016-12-17 21:31:05',NULL,NULL,'Real Estate Associate');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
