/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : beihua

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2019-01-20 10:40:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for bh
-- ----------------------------
DROP TABLE IF EXISTS `bh`;
CREATE TABLE `bh` (
  `id` int(10) NOT NULL COMMENT '学院id',
  `bh_name` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT '学院名称',
  `bh_number` int(10) NOT NULL COMMENT '学院区分标识码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of bh
-- ----------------------------
INSERT INTO `bh` VALUES ('1', '10', '10');

-- ----------------------------
-- Table structure for bn_jsjkxjs
-- ----------------------------
DROP TABLE IF EXISTS `bn_jsjkxjs`;
CREATE TABLE `bn_jsjkxjs` (
  `id` int(11) NOT NULL COMMENT '人物id',
  `username` varchar(11) CHARACTER SET utf8 NOT NULL COMMENT '用户名（工号）',
  `password` varchar(11) CHARACTER SET utf8 NOT NULL COMMENT '密码',
  `oppenid` varchar(255) NOT NULL COMMENT 'oppenid(连接微信验证)',
  PRIMARY KEY (`id`,`oppenid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of bn_jsjkxjs
-- ----------------------------
INSERT INTO `bn_jsjkxjs` VALUES ('1', 'admin', '123456', '');
