/*
Navicat MySQL Data Transfer

Source Server         : yyy
Source Server Version : 50724
Source Host           : localhost:3306
Source Database       : post

Target Server Type    : MYSQL
Target Server Version : 50724
File Encoding         : 65001

Date: 2020-01-15 16:14:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `category_id` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `markdown_html_code` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', null, '2020-01-09 02:33:46', '123', '21', '1', '0', '0', '1', '/storage/images/2oqCWbXI7DirDKIQfJAXgXdvagN5zaDyfHPdOiWl.jpeg', '222', '<p>21</p>');
INSERT INTO `articles` VALUES ('4', '2020-01-08 07:00:48', '2020-01-08 07:00:48', '你好世界', null, '1', null, null, null, '/storage/images/2oqCWbXI7DirDKIQfJAXgXdvagN5zaDyfHPdOiWl.jpeg', null, null);
INSERT INTO `articles` VALUES ('5', '2020-01-08 08:32:29', '2020-01-08 08:32:29', '测试的标题', '# 测试标题\r\n你好世界\r\n![](/uploads/20200108163211_855820.jpg)', '1', null, null, null, '/storage/images/cw2VGtM471WPc49Lw8dyJao3mwx9jErt2W6rO7lC.jpeg', '测试文章', '<h1 id=\"h1-u6D4Bu8BD5u6807u9898\"><a name=\"测试标题\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>测试标题</h1><p>你好世界<br><img src=\"/uploads/20200108163211_855820.jpg\" alt=\"\">');
INSERT INTO `articles` VALUES ('6', '2020-01-09 15:44:10', '2020-01-09 15:44:10', '打发大水', '大大范德萨发生的覆盖啥的给对方鬼地方个地方大萨达', '1', null, null, null, '/storage/images/GaAePW4XzGQN2gcy6GlvvxchxJIMTjmTGW6h6CUc.jpeg', '颠三倒四', '<p>大大范德萨发生的覆盖啥的给对方鬼地方个地方大萨达</p>');
INSERT INTO `articles` VALUES ('7', '2020-01-09 15:44:34', '2020-01-09 15:44:34', '鬼地方个放大官方', '工位风格AW范围为二位AFE水电费所发生的广东省大事发生', '1', null, null, null, '/storage/images/UspEPrLhIxoqMA4g6URSfXULq2CCGc8mBmpaTZHs.jpeg', '打法胜多负少的', '<p>工位风格AW范围为二位AFE水电费所发生的广东省大事发生</p>');
INSERT INTO `articles` VALUES ('8', '2020-01-09 15:44:57', '2020-01-09 15:44:57', '发生大幅度更让人', '发送到发发送到发送到', '2', null, null, null, '/storage/images/a3AUvKakljAXi6APorWD62vzS7wwv80T6CS5l4vl.jpeg', '发士大夫撒阿萨德发', '<p>发送到发发送到发送到</p>');
INSERT INTO `articles` VALUES ('9', '2020-01-09 15:45:19', '2020-01-09 15:45:19', '大使馆我', '大东方4然他 人头啊', '3', null, null, null, '/storage/images/TX16NMPcZMlEVnCVZEEsHRXpdYVe9jxHsGjPCRl9.jpeg', '大沙发上', '<p>大东方4然他 人头啊</p>');
INSERT INTO `articles` VALUES ('10', '2020-01-09 15:45:53', '2020-01-09 15:45:53', '发顺丰森', '服务分未发二天 广东人广东人果然跟', '2', null, null, null, '/storage/images/lMDdG9KjuLsT7hucvmPuAspDoQaK1nDTew2015SY.jpeg', 'fQW3供热费为', '<p>服务分未发二天 广东人广东人果然跟</p>');
INSERT INTO `articles` VALUES ('11', '2020-01-09 15:47:43', '2020-01-09 15:49:54', '宜家抽屉柜砸死两岁男童，赔3.2亿！', '近日，宜家与美国加州一名被马尔姆（MALM）系列抽屉柜压死的两岁男童的家人达成了和解，同意赔偿4600万美元（约合人民币3.2亿）。2020年1月8日，南方都市报记者查询宜家中国官网发现，该系列抽屉柜仍在售。\r\n![](/uploads/20200109154723_326565.jpg)\r\n2017年5月，该名男童在家中被翻倒的宜家马尔姆系列三斗抽屉柜压住，窒息死亡。国家市场监管总局2016年7月发布的召回信息显示，宜家全球总共收到122份家具倾倒报告，有57起造成人员受伤，其中6起造成人员死亡的事故均发生在美国。\r\n\r\n　　受事件影响，2017年11月，美国消费品安全委员（CPSC）与宜家重新向消费者强调一年前发布后未引起足够关注的召回计划，涉及共计1730万件抽屉柜和梳妆柜。宜家被质疑未对产品风险作充分警示，未对消费者尽召回计划的告知义务。\r\n\r\n　　南都记者查询发现，2016年7月，经国家质检总局约谈后，宜家（中国）投资有限公司决定自即日在中国市场上召回1999年至2016年期间销售的马尔姆等系列抽屉柜。中国大陆地区受影响的产品（包括进口产品）数量共计166万件。\r\n\r\n　　缺陷产品管理中心的公告提醒称，召回的橱柜和抽屉柜不稳固，如果没有正确固定到墙上，可造成严重的倾翻和扣压危险，可能会造成儿童受伤或死亡。\r\n\r\n　　“夺命抽屉柜”事件持续发酵后，2017年11月30日，上海市质量技监局官方网站发出通告称，针对社会关注的宜家“马尔姆”橱柜系列产品召回情况，市质监局已约谈宜家（中国）投资有限公司，要求企业切实履行召回义务，立即组织开展缺陷调查分析。\r\n\r\n　　2020年1月8日，南都记者查询发现，宜家官网上马尔姆系列抽屉柜仍在售。宜家中国相关负责人对“召回但不停售”曾解释称，宜家提供的措施都能够保证产品在使用过程中的安全性。宜家官网公告称，该公司免费提供上墙连接件，并为用户提供免费上门安装支持；消费者也可将家具退回宜家商场，获全额退款。', '1', null, null, null, '/storage/images/1w4sbbFdIirBWZnqGNmIDpbQRQvyxgATS582JfGX.jpeg', '近日，宜家与美国加州一名被马尔姆（MALM）系列抽屉柜压死的两岁男童的家人达成了和解，同意赔偿4600万美元（约合人民币3.2亿）。2020年1月8日，南方都市报记者查询宜家中国官网发现，该系列抽屉柜仍在售。', '<p>近日，宜家与美国加州一名被马尔姆（MALM）系列抽屉柜压死的两岁男童的家人达成了和解，同意赔偿4600万美元（约合人民币3.2亿）。2020年1月8日，南方都市报记者查询宜家中国官网发现，该系列抽屉柜仍在售。<br><img src=\"/uploads/20200109154723_326565.jpg\" alt=\"\"><br>2017年5月，该名男童在家中被翻倒的宜家马尔姆系列三斗抽屉柜压住，窒息死亡。国家市场监管总局2016年7月发布的召回信息显示，宜家全球总共收到122份家具倾倒报告，有57起造成人员受伤，其中6起造成人员死亡的事故均发生在美国。\r\n<p>　　受事件影响，2017年11月，美国消费品安全委员（CPSC）与宜家重新向消费者强调一年前发布后未引起足够关注的召回计划，涉及共计1730万件抽屉柜和梳妆柜。宜家被质疑未对产品风险作充分警示，未对消费者尽召回计划的告知义务。</p>\r\n<p>　　南都记者查询发现，2016年7月，经国家质检总局约谈后，宜家（中国）投资有限公司决定自即日在中国市场上召回1999年至2016年期间销售的马尔姆等系列抽屉柜。中国大陆地区受影响的产品（包括进口产品）数量共计166万件。</p>\r\n<p>　　缺陷产品管理中心的公告提醒称，召回的橱柜和抽屉柜不稳固，如果没有正确固定到墙上，可造成严重的倾翻和扣压危险，可能会造成儿童受伤或死亡。</p>\r\n<p>　　“夺命抽屉柜”事件持续发酵后，2017年11月30日，上海市质量技监局官方网站发出通告称，针对社会关注的宜家“马尔姆”橱柜系列产品召回情况，市质监局已约谈宜家（中国）投资有限公司，要求企业切实履行召回义务，立即组织开展缺陷调查分析。</p>\r\n<p>　　2020年1月8日，南都记者查询发现，宜家官网上马尔姆系列抽屉柜仍在售。宜家中国相关负责人对“召回但不停售”曾解释称，宜家提供的措施都能够保证产品在使用过程中的安全性。宜家官网公告称，该公司免费提供上墙连接件，并为用户提供免费上门安装支持；消费者也可将家具退回宜家商场，获全额退款。</p>');

-- ----------------------------
-- Table structure for article_tags
-- ----------------------------
DROP TABLE IF EXISTS `article_tags`;
CREATE TABLE `article_tags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of article_tags
-- ----------------------------
INSERT INTO `article_tags` VALUES ('10', '4', '10');
INSERT INTO `article_tags` VALUES ('11', '4', '11');
INSERT INTO `article_tags` VALUES ('12', '4', '12');
INSERT INTO `article_tags` VALUES ('13', '4', '13');
INSERT INTO `article_tags` VALUES ('14', '5', '14');
INSERT INTO `article_tags` VALUES ('15', '1', '15');
INSERT INTO `article_tags` VALUES ('16', '1', '16');
INSERT INTO `article_tags` VALUES ('17', '6', '17');
INSERT INTO `article_tags` VALUES ('18', '6', '18');
INSERT INTO `article_tags` VALUES ('19', '7', '19');
INSERT INTO `article_tags` VALUES ('20', '7', '20');
INSERT INTO `article_tags` VALUES ('21', '7', '21');
INSERT INTO `article_tags` VALUES ('22', '8', '22');
INSERT INTO `article_tags` VALUES ('23', '8', '23');
INSERT INTO `article_tags` VALUES ('24', '9', '23');
INSERT INTO `article_tags` VALUES ('25', '9', '24');
INSERT INTO `article_tags` VALUES ('26', '10', '25');
INSERT INTO `article_tags` VALUES ('27', '10', '26');
INSERT INTO `article_tags` VALUES ('28', '10', '27');
INSERT INTO `article_tags` VALUES ('29', '11', '28');
INSERT INTO `article_tags` VALUES ('30', '11', '29');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', '测试', '0000-00-00 00:00:00', null);
INSERT INTO `categories` VALUES ('2', '测试3', '2020-01-07 08:51:26', '2020-01-07 09:05:52');
INSERT INTO `categories` VALUES ('3', '阿士大夫撒范德萨发撒', '2020-01-09 02:45:46', '2020-01-09 02:45:46');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2020_01_07_074613_create_categories_table', '1');
INSERT INTO `migrations` VALUES ('2', '2020_01_07_094932_create_articles_table', '2');
INSERT INTO `migrations` VALUES ('3', '2020_01_08_010740_create_tags_table', '3');
INSERT INTO `migrations` VALUES ('4', '2020_01_08_011051_create_article_tags_table', '4');

-- ----------------------------
-- Table structure for sites
-- ----------------------------
DROP TABLE IF EXISTS `sites`;
CREATE TABLE `sites` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `keywords` varchar(255) DEFAULT NULL COMMENT '网站关键词',
  `desc` varchar(255) DEFAULT NULL COMMENT '网站描述',
  `site` varchar(255) DEFAULT NULL COMMENT '备案信息',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of sites
-- ----------------------------
INSERT INTO `sites` VALUES ('1', '测试后台', '你好，世界', '这是一个测试网站', '备案信息');

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tags
-- ----------------------------
INSERT INTO `tags` VALUES ('10', '2020-01-08 07:00:48', '2020-01-08 07:00:48', '世界');
INSERT INTO `tags` VALUES ('11', '2020-01-08 07:00:48', '2020-01-08 07:00:48', '你好');
INSERT INTO `tags` VALUES ('12', '2020-01-08 07:00:48', '2020-01-08 07:00:48', '你好');
INSERT INTO `tags` VALUES ('13', '2020-01-08 07:00:48', '2020-01-08 07:00:48', '世界');
INSERT INTO `tags` VALUES ('14', '2020-01-08 08:32:29', '2020-01-08 08:32:29', '测试');
INSERT INTO `tags` VALUES ('15', '2020-01-09 02:33:46', '2020-01-09 02:33:46', '哈哈');
INSERT INTO `tags` VALUES ('16', '2020-01-09 02:33:46', '2020-01-09 02:33:46', '你好啊');
INSERT INTO `tags` VALUES ('17', '2020-01-09 15:44:10', '2020-01-09 15:44:10', '颠三倒四');
INSERT INTO `tags` VALUES ('18', '2020-01-09 15:44:10', '2020-01-09 15:44:10', '辅导辅导');
INSERT INTO `tags` VALUES ('19', '2020-01-09 15:44:34', '2020-01-09 15:44:34', '热热');
INSERT INTO `tags` VALUES ('20', '2020-01-09 15:44:34', '2020-01-09 15:44:34', '大萨达');
INSERT INTO `tags` VALUES ('21', '2020-01-09 15:44:34', '2020-01-09 15:44:34', '范德萨发的');
INSERT INTO `tags` VALUES ('22', '2020-01-09 15:44:57', '2020-01-09 15:44:57', '发生大幅度是');
INSERT INTO `tags` VALUES ('23', '2020-01-09 15:44:57', '2020-01-09 15:44:57', '官方');
INSERT INTO `tags` VALUES ('24', '2020-01-09 15:45:19', '2020-01-09 15:45:19', '给对方');
INSERT INTO `tags` VALUES ('25', '2020-01-09 15:45:53', '2020-01-09 15:45:53', '发的');
INSERT INTO `tags` VALUES ('26', '2020-01-09 15:45:53', '2020-01-09 15:45:53', '古典风格');
INSERT INTO `tags` VALUES ('27', '2020-01-09 15:45:53', '2020-01-09 15:45:53', '地方');
INSERT INTO `tags` VALUES ('28', '2020-01-09 15:47:43', '2020-01-09 15:47:43', '宜家');
INSERT INTO `tags` VALUES ('29', '2020-01-09 15:47:43', '2020-01-09 15:47:43', '抽屉柜');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', '123@qq.com', null, '$2y$10$4.G0rXvOYEnzL0Phkc3U..xq.cosQv6LcpeSEVyScCOWGz1iLjoje', null, '2020-01-06 08:38:02', '2020-01-06 08:38:02');
