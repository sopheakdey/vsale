/*
Navicat MySQL Data Transfer

Source Server         : server
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : vsale

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2013-10-23 19:35:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_category
-- ----------------------------
DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE `tbl_category` (
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `cat_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_category
-- ----------------------------
INSERT INTO `tbl_category` VALUES ('1', 'Accer');
INSERT INTO `tbl_category` VALUES ('2', 'apple');
INSERT INTO `tbl_category` VALUES ('3', 'assus');
INSERT INTO `tbl_category` VALUES ('4', 'compaq');
INSERT INTO `tbl_category` VALUES ('5', 'dell');
INSERT INTO `tbl_category` VALUES ('6', 'fujisu');
INSERT INTO `tbl_category` VALUES ('7', 'hp');
INSERT INTO `tbl_category` VALUES ('8', 'lenovo');
INSERT INTO `tbl_category` VALUES ('9', 'sumsung');
INSERT INTO `tbl_category` VALUES ('10', 'toshiba');

-- ----------------------------
-- Table structure for tbl_content
-- ----------------------------
DROP TABLE IF EXISTS `tbl_content`;
CREATE TABLE `tbl_content` (
  `content_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `menu_text` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_content
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_customer
-- ----------------------------
DROP TABLE IF EXISTS `tbl_customer`;
CREATE TABLE `tbl_customer` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(20) NOT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_customer
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_order
-- ----------------------------
DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE `tbl_order` (
  `ord_id` int(11) NOT NULL DEFAULT '0',
  `cus_id` int(11) NOT NULL,
  `order_date` datetime DEFAULT NULL,
  PRIMARY KEY (`ord_id`),
  KEY `fk_pro` (`cus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_order
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_order_details
-- ----------------------------
DROP TABLE IF EXISTS `tbl_order_details`;
CREATE TABLE `tbl_order_details` (
  `ord_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `Unit_price` double DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ord_id`,`pro_id`),
  KEY `fk_order_details` (`pro_id`),
  CONSTRAINT `fk_oder` FOREIGN KEY (`ord_id`) REFERENCES `tbl_order` (`ord_id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_order_details` FOREIGN KEY (`pro_id`) REFERENCES `tbl_product` (`pro_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_order_details
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_product
-- ----------------------------
DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE `tbl_product` (
  `pro_id` int(11) NOT NULL DEFAULT '0',
  `cat_id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `qty` double(100,0) NOT NULL,
  `unit_price` double NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`pro_id`),
  KEY `fk_sto` (`item`),
  KEY `fk_cat` (`cat_id`),
  CONSTRAINT `fk_cat` FOREIGN KEY (`cat_id`) REFERENCES `tbl_category` (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_product
-- ----------------------------
INSERT INTO `tbl_product` VALUES ('1', '1', 'iphone', '5', '400', 'http://localhost/vsale/images/img-1.jpg', null);
INSERT INTO `tbl_product` VALUES ('2', '2', 'ipad', '4', '500', 'http://localhost/vsale/images/img-2.jpg', null);
INSERT INTO `tbl_product` VALUES ('5', '1', 'sumsung galaxy s4', '3', '600', 'http://localhost/vsale/images/img-3.jpg', null);
INSERT INTO `tbl_product` VALUES ('6', '3', 'sumsung galazy note', '2', '350', 'http://localhost/vsale/images/img-4.jpg', null);
