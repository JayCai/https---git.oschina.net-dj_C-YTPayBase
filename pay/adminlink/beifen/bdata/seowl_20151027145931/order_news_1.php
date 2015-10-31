<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `order_news`;");
E_C("CREATE TABLE `order_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderID` varchar(30) NOT NULL,
  `user` varchar(50) NOT NULL,
  `cpID` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `liuyan` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `liyou` text NOT NULL,
  `baobiao` text NOT NULL,
  `time` varchar(30) NOT NULL,
  `use_type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8");
E_D("replace into `order_news` values('34','20150904081109','123456','63,','20','wwwwwwwwwwwwwwww','wwwwwwwwwwwwwwwwwwww','','退单','','','2015-09-04 08:11:18',NULL);");
E_D("replace into `order_news` values('35','20150904041924','123456','63,','20','hhhhhhhhhhh','hhhhhhhhhh','ffffffff','退单','','','2015-09-04 04:19:35',NULL);");
E_D("replace into `order_news` values('36','20150904053504','123456','63,','20','feeeeeeeeeeee','eeeeeeeeeeeeeee','fsdfsdfsdfsdfsdfsdfsd','未收单','','','2015-09-04 17:35:12',NULL);");
E_D("replace into `order_news` values('37','20150904053607','123456','63,','20','dfsfsfsfsfsfsfsfsfs','fsfsfsfsfsfsfsfsfsfsfsfsfsfs','dfsss','未收单','','','2015-09-04 17:36:17',NULL);");
E_D("replace into `order_news` values('38','20150904054253','123456','63,','20','aaaaaaaaa','aaaaaaaaaaaaaaaaaa','aaaaaaaaaaaaaaa','未收单','','','2015-09-04 17:43:06',NULL);");
E_D("replace into `order_news` values('39','20150904230842','123456','63,','20','wwwwwwwww','wwwwwwwwwww','','未收单','','','2015-09-04 23:08:50',NULL);");
E_D("replace into `order_news` values('40','20150904231324','123456','63,','20','aaaaaaaaaaaaaaaaa','aaaaaaaaaaa','','未收单','','','2015-09-04 23:13:37',NULL);");
E_D("replace into `order_news` values('41','20150904235632','123456','63,','20','eeeeeeeee','eeeeeeeeeeeee','','未收单','','','2015-09-04 23:56:38',NULL);");
E_D("replace into `order_news` values('42','20150905000158','123456','63,','20','fsdsdsdsdsdsdsdsdsdsdsdsdsd','sdsdsdsdsdsdsdsdsdsdsd','','未收单','','','2015-09-05 00:02:14',NULL);");
E_D("replace into `order_news` values('43','20150905000348','123456','63,','20','aaaaaaaaaaaaa','aaaaaaaaaaaaa','','未收单','','','2015-09-05 00:03:53',NULL);");
E_D("replace into `order_news` values('44','20150905003126','123456','63,','20','aaaaaaaaaaaa','aaaaaaaaaaaaaaaaaaaaa','','未收单','','','2015-09-05 00:31:36',NULL);");
E_D("replace into `order_news` values('45','20150912004434','123456','63,','20','000000000','0000000000000','','未收单','','','2015-09-12 00:44:40',NULL);");
E_D("replace into `order_news` values('46','20150912010150','123456','63,','20','00000000','000000000000000000','','未收单','','','2015-09-12 01:01:55',NULL);");
E_D("replace into `order_news` values('47','20150912010343','123456','63,','20','eeeeee','eeeeeeeeeeeeeeeeeeee','','未收单','','','2015-09-12 01:03:48',NULL);");
E_D("replace into `order_news` values('48','20151027142851','a123456','63,','20',' d','d','','未收单','','','2015-10-27 14:29:00',' 第一个');");

require("../../inc/footer.php");
?>