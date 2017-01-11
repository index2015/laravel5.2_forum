/*
Navicat MySQL Data Transfer

Source Server         : Mysql
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : shequ

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-01-06 08:53:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `la_admins`
-- ----------------------------
DROP TABLE IF EXISTS `la_admins`;
CREATE TABLE `la_admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of la_admins
-- ----------------------------
INSERT INTO `la_admins` VALUES ('1', '超级管理员', 'admin@qq.com', '$2y$10$L0znAA8JtGYs4LD9BBFE2er.GbnGIAZ0ecwywlO97HvTycGJiRTrO', '', null, '2016-11-22 08:53:48', '2016-11-22 08:53:48');

-- ----------------------------
-- Table structure for `la_ip_log`
-- ----------------------------
DROP TABLE IF EXISTS `la_ip_log`;
CREATE TABLE `la_ip_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip_log_ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ip_log_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip_log_visits` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `ip_log_page` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ip_log_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of la_ip_log
-- ----------------------------
INSERT INTO `la_ip_log` VALUES ('17', '127.0.0.1', '2016-11-26', '16', '腕上精彩 不止一面 | HUAWEI WATCH经典系列体验', 'post');
INSERT INTO `la_ip_log` VALUES ('18', '127.0.0.1', '2016-11-26', '15', 'Tesla Model S 地球上最酷的量产纯电动轿车', 'post');
INSERT INTO `la_ip_log` VALUES ('19', '127.0.0.1', '2016-11-26', '14', 'Tesla Model S 地球上最酷的量产纯电动轿车', 'post');
INSERT INTO `la_ip_log` VALUES ('20', '127.0.0.1', '2017-01-03', '18', '内容标题', 'post');
INSERT INTO `la_ip_log` VALUES ('21', '127.0.0.1', '2017-01-03', '15', 'Tesla Model S 地球上最酷的量产纯电动轿车', 'post');
INSERT INTO `la_ip_log` VALUES ('22', '127.0.0.1', '2017-01-03', '14', 'Tesla Model S 地球上最酷的量产纯电动轿车', 'post');
INSERT INTO `la_ip_log` VALUES ('23', '127.0.0.1', '2017-01-03', '13', '高清旗舰，大有看投', 'post');
INSERT INTO `la_ip_log` VALUES ('24', '127.0.0.1', '2017-01-05', '18', '内容标题', 'post');
INSERT INTO `la_ip_log` VALUES ('25', '127.0.0.1', '2017-01-05', '13', '高清旗舰，大有看投', 'post');
INSERT INTO `la_ip_log` VALUES ('26', '127.0.0.1', '2017-01-05', '16', '腕上精彩 不止一面 | HUAWEI WATCH经典系列体验', 'post');
INSERT INTO `la_ip_log` VALUES ('27', '127.0.0.1', '2017-01-05', '19', '555', 'post');

-- ----------------------------
-- Table structure for `la_jurisdiction`
-- ----------------------------
DROP TABLE IF EXISTS `la_jurisdiction`;
CREATE TABLE `la_jurisdiction` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Route` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `URL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `RouteName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Icon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `describe` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `addTime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of la_jurisdiction
-- ----------------------------

-- ----------------------------
-- Table structure for `la_migrations`
-- ----------------------------
DROP TABLE IF EXISTS `la_migrations`;
CREATE TABLE `la_migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of la_migrations
-- ----------------------------
INSERT INTO `la_migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `la_migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `la_migrations` VALUES ('2016_11_19_012738_create_admin_navigation_table', '2');
INSERT INTO `la_migrations` VALUES ('2016_11_18_024844_create_admins_table', '3');
INSERT INTO `la_migrations` VALUES ('2016_11_21_012540_create_admin_post_table', '4');
INSERT INTO `la_migrations` VALUES ('2016_11_21_020319_create_admin_postbar_table', '4');
INSERT INTO `la_migrations` VALUES ('2016_11_25_070330_create_index_ip_log_table', '5');
INSERT INTO `la_migrations` VALUES ('2016_11_29_035407_create_admin_privilege_grouping_table', '6');
INSERT INTO `la_migrations` VALUES ('2016_11_29_040313_create_admin_jurisdiction_table', '7');

-- ----------------------------
-- Table structure for `la_navigation`
-- ----------------------------
DROP TABLE IF EXISTS `la_navigation`;
CREATE TABLE `la_navigation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `The_newpage` varchar(50) COLLATE utf8_unicode_ci DEFAULT '0',
  `colour` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of la_navigation
-- ----------------------------
INSERT INTO `la_navigation` VALUES ('2', '版块', 'http://120.25.120.167/demo/zuk/data/attachment/common/c8/common_2_icon.png', '/forum/postForum?&id=12', '1 ', '1479981233', '0', null);
INSERT INTO `la_navigation` VALUES ('3', '积分充值', 'http://120.25.120.167/demo/zuk/data/attachment/common/c8/common_2_icon.png', 'alipay/index', '1 ', '1479981296', '0', null);

-- ----------------------------
-- Table structure for `la_password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `la_password_resets`;
CREATE TABLE `la_password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of la_password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `la_post_bar`
-- ----------------------------
DROP TABLE IF EXISTS `la_post_bar`;
CREATE TABLE `la_post_bar` (
  `PId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bar_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `describe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_time` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `the_new_page` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `The` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '父级ID',
  `top` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '顶级',
  `today` varchar(20) COLLATE utf8_unicode_ci DEFAULT '0',
  `theme` varchar(20) COLLATE utf8_unicode_ci DEFAULT '0',
  `recommend` varchar(10) COLLATE utf8_unicode_ci DEFAULT '0' COMMENT '是否推荐',
  `position` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '贴吧存放于位置',
  `creator_id` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '创建者ID',
  PRIMARY KEY (`PId`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of la_post_bar
-- ----------------------------
INSERT INTO `la_post_bar` VALUES ('2', '粉丝广场', '顶', '1479973949', 'http://127.0.0.1/data/upload/images/common_41_icon.png', '1 ', '', '0', '1', '0', '0', '0', null, '1');
INSERT INTO `la_post_bar` VALUES ('3', '大杂烩', '在这里谈天说地，广交好友', '1479805886', 'http://127.0.0.1/static/images/common_39_icon.png', '1 ', '', '2', null, '0', '0', '0', null, '1');
INSERT INTO `la_post_bar` VALUES ('4', '随手拍', '美女、生活、风景、花卉', '1479805891', 'http://127.0.0.1/static/images/common_40_icon.png', '1 ', '', '2', null, '0', '0', '0', null, '1');
INSERT INTO `la_post_bar` VALUES ('5', '资源中心', '应用、游戏、壁纸、铃', '1479805911', 'http://127.0.0.1/data/upload/images/common_2_icon.png', '1 ', '', '2', null, '0', '0', '0', null, '1');
INSERT INTO `la_post_bar` VALUES ('6', '公社中心', '顶', '1479973955', 'http://127.0.0.1/data/upload/images/common_41_icon.png', '1 ', '', '0', '1', '0', '0', '0', null, '1');
INSERT INTO `la_post_bar` VALUES ('7', '活动中心', '社区最新最快活动信息', '1479806086', 'http://127.0.0.1/static/images/common_44_icon.png', '1 ', '', '6', null, '0', '0', '0', null, '1');
INSERT INTO `la_post_bar` VALUES ('8', '社区公告', '社区最新信息的集散地', '1479806093', 'http://127.0.0.1/static/images/common_45_icon.png', '1 ', '', '6', null, '0', '0', '0', null, '1');
INSERT INTO `la_post_bar` VALUES ('9', '社区站务', '主要负责解封、投诉等事务', '1479806099', 'http://127.0.0.1/static/images/common_46_icon.png', '1 ', '', '6', null, '0', '0', '0', null, '1');
INSERT INTO `la_post_bar` VALUES ('10', '休闲社区', '顶', '1479973959', 'http://127.0.0.1/data/upload/images/common_41_icon.png', '1 ', '', '0', '1', '0', '0', '0', null, '1');
INSERT INTO `la_post_bar` VALUES ('12', '设计欣赏', '社区最新最快版块简介', '1479973387', 'http://127.0.0.1/data/upload/images/common_2_icon.png', '1', '', '10', null, '0', '0', '1', null, '1');
INSERT INTO `la_post_bar` VALUES ('13', '生活评测', '社区最新信息的集散地', '1479973418', 'http://127.0.0.1/data/upload/images/common_2_icon.png', '1', '', '10', null, '0', '0', '1', null, '1');
INSERT INTO `la_post_bar` VALUES ('14', '数码摄影', '拍出美丽生活，记录精彩瞬间', '1479973436', 'http://127.0.0.1/static/images/common_37_icon.png', '1', '', '10', null, '0', '0', '1', null, '1');
INSERT INTO `la_post_bar` VALUES ('15', 'BUG中心', 'BUG问题讨论', '1480124751', 'http://127.0.0.1/static/images/common_42_icon.png', '1', '', '6', null, '0', '0', '0', null, '1');
INSERT INTO `la_post_bar` VALUES ('16', '社区讨论HOME', '推荐首页阅读', '1480128483', 'http://127.0.0.1/data/upload/images/common_41_icon.png', '1 ', '', '6', '', '0', '0', '0', '', '1');

-- ----------------------------
-- Table structure for `la_post_data`
-- ----------------------------
DROP TABLE IF EXISTS `la_post_data`;
CREATE TABLE `la_post_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `postName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postContent` text COLLATE utf8_unicode_ci NOT NULL,
  `postUid` int(11) NOT NULL,
  `postBar` int(11) NOT NULL,
  `postAddTime` int(11) NOT NULL,
  `postJurisdiction` int(11) NOT NULL COMMENT '权限',
  `postCollectionTimes` int(11) NOT NULL DEFAULT '0' COMMENT '收藏次数',
  `postAccessTimes` int(11) NOT NULL DEFAULT '0' COMMENT '访问次数',
  `postStatePost` int(11) NOT NULL DEFAULT '0' COMMENT '帖子状态是否显示....1=禁止显示|2=社区主打讨论对象',
  `postEssence` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否精华...',
  `postTop` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否置顶...',
  `numberOfReviews` int(11) DEFAULT '0' COMMENT '评论次数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of la_post_data
-- ----------------------------
INSERT INTO `la_post_data` VALUES ('2', 'Tesla Model S 地球上最酷的量产纯电动轿车', '<p>123123</p>', '1', '7', '1479979915', '1', '0', '0', '0', '0', '0', '0');
INSERT INTO `la_post_data` VALUES ('3', '腕上精彩 不止一面 | HUAWEI WATCH经典系列体验 ', '<p>123123</p>', '1', '7', '1479980065', '3', '0', '0', '0', '0', '0', '0');
INSERT INTO `la_post_data` VALUES ('4', '腕上精彩 不止一面 | HUAWEI WATCH经典系列体验 ', '<p>123123</p>', '1', '7', '1479980070', '3', '0', '0', '0', '0', '0', '0');
INSERT INTO `la_post_data` VALUES ('5', 'Tesla Model S 地球上最酷的量产纯电动轿车', '<p>123123</p>', '1', '7', '1479980101', '1', '0', '0', '0', '0', '0', '0');
INSERT INTO `la_post_data` VALUES ('6', '腕上精彩 不止一面 | HUAWEI WATCH经典系列体验 ', '<p>123123</p>', '1', '7', '1479980132', '1', '0', '0', '0', '0', '0', '0');
INSERT INTO `la_post_data` VALUES ('7', '腕上精彩 不止一面 | HUAWEI WATCH经典系列体验 ', '<p>123123</p>', '1', '7', '1479980322', '1', '0', '0', '0', '0', '0', '0');
INSERT INTO `la_post_data` VALUES ('8', 'Tesla Model S 地球上最酷的量产纯电动轿车', '<p>123123123</p>', '1', '7', '1479980353', '1', '0', '0', '0', '0', '0', '0');
INSERT INTO `la_post_data` VALUES ('9', '腕上精彩 不止一面 | HUAWEI WATCH经典系列体验 ', '<p>123123123</p>', '1', '7', '1479980378', '1', '0', '0', '0', '0', '0', '0');
INSERT INTO `la_post_data` VALUES ('10', '腕上精彩 不止一面 | HUAWEI WATCH经典系列体验 ', '<p>内容++++++++++++++++++<img src=\"http://img.baidu.com/hi/jx2/j_0014.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0048.gif\"/></p>', '1', '7', '1479980425', '1', '0', '0', '0', '0', '0', '0');
INSERT INTO `la_post_data` VALUES ('11', '高清旗舰，大有看投', '<p>123123123<img src=\"http://img.baidu.com/hi/jx2/j_0035.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0059.gif\"/></p>', '1', '7', '1479980439', '1', '0', '0', '0', '0', '0', '0');
INSERT INTO `la_post_data` VALUES ('12', '腕上精彩 不止一面 | HUAWEI WATCH经典系列体验 ', '<p>42342342342342342<br/></p>', '1', '7', '1479980469', '1', '0', '1', '2', '0', '0', '0');
INSERT INTO `la_post_data` VALUES ('13', '高清旗舰，大有看投', '<p>按时按时按时按时按时</p>', '1', '7', '1480036341', '1', '0', '3', '2', '1', '0', '0');
INSERT INTO `la_post_data` VALUES ('14', 'Tesla Model S 地球上最酷的量产纯电动轿车', '<p>按时阿萨德阿萨德阿达大</p>', '1', '7', '1480039689', '1', '0', '2', '2', '1', '1', '0');
INSERT INTO `la_post_data` VALUES ('15', 'Tesla Model S 地球上最酷的量产纯电动轿车', '<p>2222222222222222222222222222<img src=\"/ueditor/php/upload/image/20161125/1480039741496844.jpg\" title=\"1480039741496844.jpg\" alt=\"02.jpg\"/></p>', '1', '16', '1480039743', '1', '0', '2', '2', '1', '1', '0');
INSERT INTO `la_post_data` VALUES ('16', '腕上精彩 不止一面 | HUAWEI WATCH经典系列体验', '<p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Helvetica Neue&quot;, Arial, &quot;Hiragino Sans GB&quot;, STHeiti, &quot;Microsoft Yahei&quot;, SimSun, &quot;WenQuanYi Micro Hei&quot;, sans-serif; background-color: rgb(255, 255, 255);\">人在不同时期会有不同的爱好，过了而立之年的我开始对手表产生浓厚兴趣，手表不仅是一个记录时间的工具，更是提升个人魅力最好的装饰品。不过与以往偏爱的摄影、音频的爱好相比起来，玩表的门槛又高出了不少。然而苦于囊中羞涩，即便入手一块心爱的机械表，生活水平也能立刻被拉回解放前。所以更多的时候只是去手表专柜品鉴一番过过手瘾，不可能经常购买不同款式进行着装和场合的搭配。那么有什么办法可以满足我对不同款式手表的追求呢？华为所推出的高颜值智能手表——HUAWEI WATCH绝对是一个理想的选择，它不仅可以随意更换不同风格的表盘，所拥有了强大硬件配置也可以支撑起良好的用户体验。当然还会带来很多不同的惊喜，下面就让我们一起来寻找答案。</span></p><p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Helvetica Neue&quot;, Arial, &quot;Hiragino Sans GB&quot;, STHeiti, &quot;Microsoft Yahei&quot;, SimSun, &quot;WenQuanYi Micro Hei&quot;, sans-serif; background-color: rgb(255, 255, 255);\"><img src=\"/ueditor/php/upload/image/20161125/1480055439640657.jpg\" title=\"1480055439640657.jpg\" alt=\"88888888888888888888888.jpg\"/></span></p><p><img src=\"/ueditor/php/upload/image/20161125/1480055557709723.jpg\" title=\"1480055557709723.jpg\"/></p><p><img src=\"/ueditor/php/upload/image/20161125/1480055557789159.jpg\" title=\"1480055557789159.jpg\"/></p><p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Helvetica Neue&quot;, Arial, &quot;Hiragino Sans GB&quot;, STHeiti, &quot;Microsoft Yahei&quot;, SimSun, &quot;WenQuanYi Micro Hei&quot;, sans-serif; background-color: rgb(255, 255, 255);\"></span><br/></p>', '1', '16', '1480055563', '1', '0', '2', '2', '0', '0', '0');
INSERT INTO `la_post_data` VALUES ('17', '123123', '<p>21312</p>', '1', '12', '1483413540', '1', '0', '0', '0', '0', '0', '0');
INSERT INTO `la_post_data` VALUES ('18', '内容标题', '<p style=\"text-align: center;\">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>', '1', '12', '1483413566', '1', '0', '2', '0', '0', '0', '0');
INSERT INTO `la_post_data` VALUES ('19', '555', '<p>444444444444444444</p>', '1', '12', '1483601322', '1', '0', '1', '0', '0', '0', '0');

-- ----------------------------
-- Table structure for `la_privilege_grouping`
-- ----------------------------
DROP TABLE IF EXISTS `la_privilege_grouping`;
CREATE TABLE `la_privilege_grouping` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `groupName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Icon` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `describe` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `addTime` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of la_privilege_grouping
-- ----------------------------
INSERT INTO `la_privilege_grouping` VALUES ('2', '会员', 'glyphicon glyphicon-star-empty', '123', '1480400238');
INSERT INTO `la_privilege_grouping` VALUES ('3', '游客', 'glyphicon glyphicon-star-empty', '123', '1480400244');
INSERT INTO `la_privilege_grouping` VALUES ('4', '版主', 'glyphicon glyphicon-star-empty', '', '1480400548');

-- ----------------------------
-- Table structure for `la_users`
-- ----------------------------
DROP TABLE IF EXISTS `la_users`;
CREATE TABLE `la_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `group` int(11) DEFAULT '0',
  `head_portrait` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` int(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of la_users
-- ----------------------------
INSERT INTO `la_users` VALUES ('1', '小白', '123@qq.com', '$2y$10$/m9hdRc/6fUZpyFmYAxITefq7Af5nBL/EdE4x2LjbnMP3t90SOdhy', 'qDL79ypbLffOh0WyWLmft3Re0A3Vu2LheDVSNzk6WOePHtmm08GScw6xiWKZ', '2016-11-22 08:51:53', '2016-11-28 08:35:31', '0', 'http://120.25.120.167/demo/zuk/uc_server/avatar.php?uid=12&size=middle', '0');
INSERT INTO `la_users` VALUES ('2', '小明', '465@qq.com', '$2y$10$/m9hdRc/6fUZpyFmYAxITefq7Af5nBL/EdE4x2LjbnMP3t90SOdhy', 'Ayk2YcBtCCPnmUpDNFwqinn2kTNQSD2ZObb2cAKVUPEIrkx13Goj20l6L62S', '2016-11-29 16:24:45', '2016-12-07 16:24:51', '0', 'http://120.25.120.167/demo/zuk/uc_server/avatar.php?uid=12&size=middle', '0');
INSERT INTO `la_users` VALUES ('7', '小不点', '789@qq.com', '$2y$10$/m9hdRc/6fUZpyFmYAxITefq7Af5nBL/EdE4x2LjbnMP3t90SOdhy', 'Ayk2YcBtCCPnmUpDNFwqinn2kTNQSD2ZObb2cAKVUPEIrkx13Goj20l6L62S', null, null, '0', 'http://120.25.120.167/demo/zuk/uc_server/avatar.php?uid=12&size=middle', '0');
INSERT INTO `la_users` VALUES ('8', 'admin2016', '123456@qq.com', '$2y$10$uqbRmkR2v7sa/ouGryRU1OLxFMKS.EIdEIBAMJgNmnvNHOotEvQGu', 'zJhEFh5i92qS7WK6ONPsGkXfJX6braKRb0iyv5UCX3ObhSIJTjiN2bcPXFg4', '2017-01-03 03:17:18', '2017-01-03 03:17:36', '0', null, '0');
