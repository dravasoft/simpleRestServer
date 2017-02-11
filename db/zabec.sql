/*
Navicat MySQL Data Transfer

Source Server         : Razvoj
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : zabec

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-02-11 23:07:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `country_code` varchar(255) COLLATE utf8_slovenian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'Maček', 'Muri', 'muri@gmail.com', 'Slovenia', 'SI');
INSERT INTO `user` VALUES ('2', 'Muca', 'Maca', 'maca@gmail.com', 'Germany', 'DE');
INSERT INTO `user` VALUES ('3', 'Pink', 'Panter', 'panter@gmail.com', 'Indija', 'IN');
