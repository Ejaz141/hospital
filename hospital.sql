/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 10.4.24-MariaDB : Database - hms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hms` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `hms`;

/*Table structure for table `appointment` */

DROP TABLE IF EXISTS `appointment`;

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appointment_date` varchar(100) DEFAULT NULL,
  `appointment_time` varchar(100) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `patient_id` int(11) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

/*Data for the table `appointment` */

insert  into `appointment`(`id`,`appointment_date`,`appointment_time`,`doctor_id`,`status`,`patient_id`,`created_at`) values (19,'14-01-2023','18:09',6,0,7,'13-01-2023');

/*Table structure for table `notification` */

DROP TABLE IF EXISTS `notification`;

CREATE TABLE `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `sender_message` varchar(255) DEFAULT NULL,
  `receiver_message` varchar(255) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

/*Data for the table `notification` */

insert  into `notification`(`id`,`sender_id`,`receiver_id`,`sender_message`,`receiver_message`,`created_at`) values (15,6,7,'sadsadasdsadasds','zxcxczxasdfasda','13-01-2023');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(25) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `gender` varchar(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `prescription` varchar(255) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `phonenumber` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`role`,`status`,`gender`,`image`,`prescription`,`created_at`,`phonenumber`) values (6,'shaheryar','shaheryar_b@yahoo.com','c20ad4d76fe97759aa27a0c99bff6710','Doctor',1,NULL,NULL,NULL,NULL,NULL),(7,'ali waqas','ali.waqas@riphah.edu.pk','12','Patient',1,'','images (1).jpg','',NULL,'123457'),(8,'admin','admin@admin.com','c20ad4d76fe97759aa27a0c99bff6710','admin',1,NULL,NULL,NULL,NULL,NULL),(9,'name last','doctor@gmail.com','202cb962ac59075b964b07152d234b70','Patient',1,'option1','images (1).jpg',NULL,NULL,'2345678');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
