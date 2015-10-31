<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `seo`;");
E_C("CREATE TABLE `seo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sitename` varchar(200) NOT NULL,
  `keywords` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `link` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `seo` values('1','易推网络-在线下单','论坛发帖，新闻软文，微博红人，微信公众号推广，综合营销。自助下单系统','论坛发帖，新闻软文，微博红人，微信公众号推广，综合营销。自助下单系统','../upload/20150827/20150827102021.png','COPYRIGHT @2015 易推网络所有  粤ICP备15072104号-1','http://531gw.com/');");

require("../../inc/footer.php");
?>