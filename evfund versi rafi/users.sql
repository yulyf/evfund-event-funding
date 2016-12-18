-- Adminer 4.2.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `exploreid`;
CREATE DATABASE `exploreid` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `exploreid`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
	`id_user` int(11) NOT NULL AUTO_INCREMENT,
	`username` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

TRUNCATE `users`;
INSERT INTO `users` (`id_user`, `username`, `email`, `password`) VALUES
(1,	'Nolan', 'nolanfirdaus@gmail.com',	'5f4dcc3b5aa765d61d8327deb882cf99');

-- 2016-03-01 17:17:01
