/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : tested

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-04-23 23:55:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tp_article`
-- ----------------------------
DROP TABLE IF EXISTS `tp_article`;
CREATE TABLE `tp_article` (
  `ar_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `ar_title` varchar(30) NOT NULL COMMENT '标题',
  `ar_keywords` varchar(100) NOT NULL COMMENT '关键词',
  `ar_description` varchar(150) NOT NULL COMMENT '描述',
  `ar_autor` varchar(10) NOT NULL COMMENT '作者',
  `ar_email` varchar(20) NOT NULL COMMENT '电子邮箱',
  `ar_linkurl` varchar(50) NOT NULL COMMENT '友情链接',
  `ar_thumbnail` varchar(150) NOT NULL COMMENT '缩略图',
  `ar_content` longtext NOT NULL COMMENT '内容',
  `ar_top` tinyint(1) NOT NULL DEFAULT '0' COMMENT '置顶1是0否',
  `ar_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '显示1是0否',
  `ar_cateid` smallint(6) NOT NULL COMMENT '所属栏目',
  `ar_addtime` int(10) NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`ar_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_article
-- ----------------------------

-- ----------------------------
-- Table structure for `tp_brand`
-- ----------------------------
DROP TABLE IF EXISTS `tp_brand`;
CREATE TABLE `tp_brand` (
  `brand_id` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(60) NOT NULL,
  `brand_url` varchar(60) NOT NULL,
  `brand_img` varchar(100) NOT NULL,
  `brand_description` varchar(255) NOT NULL,
  `brand_sort` smallint(6) NOT NULL DEFAULT '50',
  `brand_status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_brand
-- ----------------------------
INSERT INTO `tp_brand` VALUES ('4', '', '5', '', '6', '50', '1');
INSERT INTO `tp_brand` VALUES ('102', '', 'b', '', 'c', '50', '1');
INSERT INTO `tp_brand` VALUES ('103', '', 'b', '20180417\\05a39ef3098da5b731027742dcafc427.png', 'c', '50', '0');
INSERT INTO `tp_brand` VALUES ('104', 'qwer', 'http://wer', '20180421\\15fee8d244eaf7546ba97bc31422a7ed.jpg', 'eee', '50', '1');
INSERT INTO `tp_brand` VALUES ('105', 'qweraaa', '', '20180421\\eb9f321e14b5377dff0263efe277aa71.jpg', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('106', 'sdf', '', '', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('107', 'asdf', '', '', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('108', 'qweraa', '', '', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('109', 'asdfas', '', '', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('110', 'adfasdf', 'http://zcg', '', '', '50', '1');
INSERT INTO `tp_brand` VALUES ('111', 'qwetrqewrq', 'http://adsfasadfadf', '20180421\\a4c875cbdfb1bd5ce6f2d9a666c2e05c.jpg', 'asdfadfasdf', '50', '1');

-- ----------------------------
-- Table structure for `tp_category`
-- ----------------------------
DROP TABLE IF EXISTS `tp_category`;
CREATE TABLE `tp_category` (
  `cate_id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '栏目id',
  `cate_name` varchar(20) NOT NULL COMMENT '栏目名称',
  `cate_type` tinyint(1) NOT NULL DEFAULT '5' COMMENT '栏目分类1:系统分类2:帮助分类3:网店帮助4:网店信息5:普通分类',
  `cate_keywords` varchar(100) NOT NULL COMMENT '关键词',
  `cate_description` varchar(150) NOT NULL COMMENT '描述',
  `cate_shownav` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否显示导航栏',
  `cate_sort` smallint(6) NOT NULL DEFAULT '20' COMMENT '排序',
  `cate_pid` smallint(6) NOT NULL DEFAULT '0' COMMENT '上级栏目id',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_category
-- ----------------------------
INSERT INTO `tp_category` VALUES ('1', 'tyui', '5', '', '', '0', '20', '0');
INSERT INTO `tp_category` VALUES ('2', 'tyui', '5', 'rty', '', '0', '20', '0');
INSERT INTO `tp_category` VALUES ('3', 'tyuisss', '5', 'rty', '', '0', '20', '0');
INSERT INTO `tp_category` VALUES ('4', 'aewrtwertwe', '5', 'wertwertwet', 'wertwetrwet', '0', '20', '0');
INSERT INTO `tp_category` VALUES ('5', 'asdfasdfgg', '5', 'asdf', '4tewrt', '1', '20', '0');
INSERT INTO `tp_category` VALUES ('6', 'asdfasdfgg++++++++', '2', 'asdf', '', '1', '20', '0');
INSERT INTO `tp_category` VALUES ('7', 'asdf', '2', 'asdfsss', '', '1', '20', '0');
INSERT INTO `tp_category` VALUES ('8', 'f', '5', 'wertwert', '', '1', '20', '0');
INSERT INTO `tp_category` VALUES ('9', 'asdfasdfas', '5', 'asdfasdfasdfasdfas', 'asdfadfasf', '1', '20', '0');
INSERT INTO `tp_category` VALUES ('10', 'arasdfasdfasdfa', '1', 'asdfasdfasdfasdfasfa', 'asdfasdfasdfasdfasfasfasfsadf', '1', '20', '0');
INSERT INTO `tp_category` VALUES ('11', '4123635566', '2', '551523112', 'q234123414565', '1', '20', '6');
