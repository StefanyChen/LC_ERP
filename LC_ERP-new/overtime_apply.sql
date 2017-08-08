/*
 Navicat Premium Data Transfer

 Source Server         : david
 Source Server Type    : MySQL
 Source Server Version : 50635
 Source Host           : localhost
 Source Database       : erp

 Target Server Type    : MySQL
 Target Server Version : 50635
 File Encoding         : utf-8

 Date: 08/01/2017 12:08:09 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `overtime_apply`
-- ----------------------------
DROP TABLE IF EXISTS `overtime_apply`;
CREATE TABLE `overtime_apply` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `o_month` date DEFAULT NULL,
  `o_name` varchar(15) DEFAULT NULL,
  `o_date` date NOT NULL,
  `o_start` time NOT NULL,
  `o_end` time NOT NULL,
  `o_hrs` int(11) NOT NULL,
  `o_phrs` int(11) NOT NULL,
  `o_state` varchar(255) NOT NULL,
  `o_comment` varchar(255) NOT NULL,
  `o_total` int(11) NOT NULL,
  `o_ptotal` int(11) NOT NULL,
  `o_hrCheck` varchar(255) NOT NULL,
  `o_bossCheck` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `overtime_apply`
-- ----------------------------
BEGIN;
INSERT INTO `overtime_apply` VALUES ('65', null, null, '2017-07-03', '00:00:00', '00:00:00', '0', '0', '', '', '0', '0', '', ''), ('66', null, null, '0000-00-00', '00:00:00', '00:00:00', '0', '0', '', '', '0', '0', '', '');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
