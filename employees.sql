/*
 Navicat Premium Data Transfer

 Source Server         : david
 Source Server Type    : MySQL
 Source Server Version : 50635
 Source Host           : localhost
 Source Database       : peopleresource

 Target Server Type    : MySQL
 Target Server Version : 50635
 File Encoding         : utf-8

 Date: 08/02/2017 14:35:43 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `employees`
-- ----------------------------
DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `e_sn` varchar(30) DEFAULT NULL,
  `e_password` varchar(30) NOT NULL,
  `e_date` date DEFAULT NULL,
  `e_name_cn` varchar(20) DEFAULT NULL,
  `e_name_en` varchar(15) DEFAULT NULL,
  `e_sex` varchar(6) DEFAULT NULL,
  `e_birth` date DEFAULT NULL,
  `e_personalID` varchar(10) NOT NULL,
  `e_marriage` varchar(6) DEFAULT NULL,
  `e_blood` varchar(2) DEFAULT NULL,
  `e_address` varchar(150) DEFAULT NULL,
  `e_mobile` varchar(20) DEFAULT NULL,
  `e_email` varchar(100) DEFAULT NULL,
  `e_emergency` varchar(15) DEFAULT NULL,
  `e_em_mobile` varchar(20) DEFAULT NULL,
  `e_edu` varchar(30) DEFAULT NULL,
  `e_edu_high` varchar(30) DEFAULT NULL,
  `e_edu_dep` varchar(30) DEFAULT NULL,
  `e_edu_start` date DEFAULT NULL,
  `e_edu_end` date DEFAULT NULL,
  `e_edu_gra` varchar(10) DEFAULT NULL,
  `e_exp_com1` varchar(30) DEFAULT NULL,
  `e_exp_posi1` varchar(30) DEFAULT NULL,
  `e_exp_start1` date DEFAULT NULL,
  `e_exp_reason1` varchar(100) DEFAULT NULL,
  `e_license` varchar(60) DEFAULT NULL,
  `e_exp_end1` date DEFAULT NULL,
  `e_exp_com2` varchar(30) DEFAULT NULL,
  `e_exp_posi2` varchar(30) DEFAULT NULL,
  `e_exp_start2` date DEFAULT NULL,
  `e_exp_end2` date DEFAULT NULL,
  `e_exp_reason2` varchar(100) DEFAULT NULL,
  `e_exp_com3` varchar(30) DEFAULT NULL,
  `e_exp_posi3` varchar(30) DEFAULT NULL,
  `e_exp_start3` date DEFAULT NULL,
  `e_exp_end3` date DEFAULT NULL,
  `e_exp_reason3` varchar(100) DEFAULT NULL,
  `e_exp_com4` varchar(30) DEFAULT NULL,
  `e_exp_posi4` varchar(30) DEFAULT NULL,
  `e_exp_start4` date DEFAULT NULL,
  `e_exp_end4` date DEFAULT NULL,
  `e_exp_reason4` varchar(100) DEFAULT NULL,
  `e_exp_com5` varchar(30) DEFAULT NULL,
  `e_exp_posi5` varchar(30) DEFAULT NULL,
  `e_exp_start5` date DEFAULT NULL,
  `e_exp_end5` date DEFAULT NULL,
  `e_exp_reason5` varchar(100) DEFAULT NULL,
  `e_type` varchar(10) DEFAULT NULL,
  `e_status` varchar(10) DEFAULT NULL,
  `e_location` varchar(10) DEFAULT NULL,
  `e_extension` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `employees`
-- ----------------------------
BEGIN;
INSERT INTO `employees` VALUES ('1', 'A01', '1234', '2017-08-02', '王小名', 'wang', '男', '2017-08-31', 'A113456789', '未婚', 'A', '桃園市中壢區XX路XX段XX號', '0937465748', 'wang@gmail.com', '王大明', '0912345678', '大學', '台灣大學', '資工系', '2017-08-01', '2017-08-31', '畢業', '無', null, null, '因為心累了', '無', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
