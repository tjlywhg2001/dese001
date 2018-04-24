/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : tested

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-04-24 23:21:27
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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_category
-- ----------------------------
INSERT INTO `tp_category` VALUES ('1', '1nav', '1', '', '', '1', '20', '0');
INSERT INTO `tp_category` VALUES ('2', '2nav', '1', 'aaaa', 'aaaaaa', '1', '20', '1');
INSERT INTO `tp_category` VALUES ('3', '1nav222', '2', 'bbbb', 'bbbbbbb', '1', '20', '0');
INSERT INTO `tp_category` VALUES ('4', '2nav阿斯短发散发', '5', '啊啊啊啊', '啊啊啊啊', '1', '20', '3');
INSERT INTO `tp_category` VALUES ('5', '3nav拜拜拜拜拜拜', '5', '草草草草', '草草草草草', '1', '20', '2');
INSERT INTO `tp_category` VALUES ('6', '3nav男男女女奶奶', '3', '男男女女年', '难难难', '1', '20', '2');
INSERT INTO `tp_category` VALUES ('7', 'safasf', '5', 'adfaf', 'asdfasdfasf', '1', '20', '1');
INSERT INTO `tp_category` VALUES ('8', 'asdfadfasdf', '5', 'asdfasdfasf', 'asdfasdfasdf', '1', '20', '0');
INSERT INTO `tp_category` VALUES ('9', 'asdfasfaf', '1', 'asdfasfasdf', 'asdfasdfasdf', '1', '20', '0');
INSERT INTO `tp_category` VALUES ('10', 'asdfasdfasf', '5', 'asdfasfasf', 'adfasdfasdf', '1', '20', '0');
INSERT INTO `tp_category` VALUES ('11', 'asdfasdfa', '5', 'asdfasdfasdf', 'asdfasdfas', '1', '20', '1');
INSERT INTO `tp_category` VALUES ('12', 'asdfasdfasdfasdfas', '5', '', 'asdfasdfasfasdf', '1', '20', '1');
INSERT INTO `tp_category` VALUES ('13', 'asdqwerqwwerqwer', '5', 'qwerqwer', 'qwerqwerqwr', '1', '20', '1');
INSERT INTO `tp_category` VALUES ('14', 'sdfqw4t f', '5', 'fgj fg ', 'asd fasf ', '1', '20', '3');
INSERT INTO `tp_category` VALUES ('15', 'adrg fdg 57u', '5', 'sf ghfggh', ' dsf gsdfg', '1', '20', '3');
INSERT INTO `tp_category` VALUES ('16', 'sdvhdbj', '1', 'sdfhgf', 'yruihjl', '1', '20', '6');
INSERT INTO `tp_category` VALUES ('17', 'dg rth f', '5', 'hkghk m', 'hvhjk gu', '1', '20', '3');
INSERT INTO `tp_category` VALUES ('18', 'dtrhveub', '1', 'nfujik', 'kgmhijolm', '1', '20', '5');
INSERT INTO `tp_category` VALUES ('19', 'dtrhveub33', '1', '3', '354ywr5y', '1', '20', '6');
INSERT INTO `tp_category` VALUES ('20', 'ertv5e6yuny', '5', 'uip,uop[.f', 'gyunil ,ui', '1', '20', '6');
INSERT INTO `tp_category` VALUES ('21', 'asdf asdf ', '5', '', 'asdf asd ', '1', '20', '16');
INSERT INTO `tp_category` VALUES ('22', 'asdfasdfasfasdf', '5', 'asdfgasdf', 'asdfasdfasf', '1', '20', '3');
INSERT INTO `tp_category` VALUES ('23', 'asdfasfadf', '5', 'sdfasdfasdf', 'asdfasdfasf', '1', '20', '1');
INSERT INTO `tp_category` VALUES ('24', 'dtrhveubsa', '5', 'asdfasdf', 'asdfasdfasf', '1', '20', '18');
INSERT INTO `tp_category` VALUES ('25', 'dtrhveub33eee', '5', 'adfaf', 'sdfvbeyt', '1', '20', '5');
INSERT INTO `tp_category` VALUES ('26', '拜拜拜拜444', '5', 'as打发打发', '阿萨德发射点发烧饭', '1', '20', '5');
INSERT INTO `tp_category` VALUES ('27', '阿萨德发射点发烧豆腐', '5', '阿萨德发射点发', '啊但是发射点发', '1', '20', '5');
INSERT INTO `tp_category` VALUES ('28', '阿士东维拉人气旺旺而且', '5', '犬瘟热', '弃我而去韦尔奇', '1', '20', '5');
INSERT INTO `tp_category` VALUES ('29', '同样如若天羽人体与人图n', '5', '儿童因而也', '儿童因而他也认同与', '1', '20', '5');
