<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `order_zonghe`;");
E_C("CREATE TABLE `order_zonghe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderID` varchar(30) NOT NULL,
  `user` varchar(50) NOT NULL,
  `cpID` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `liuyan` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `liyou` text NOT NULL,
  `baobiao` text NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `order_zonghe` values('1','20150818092925','123456','13,','27','综合套餐内容','综合套餐留言','收单','','','2015-08-18 09:29:38');");
E_D("replace into `order_zonghe` values('2','20150904234723','123456','21,20,','11000','1、推广对象：<br />\r\n2、文章体裁：<br />\r\n3、文章标题：<br />\r\n4、宣传要点：<br />\r\n5、其他要求：<br />\r\n5、软文案例：<br />\r\n若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。<br />','','未收单','','','2015-09-04 23:47:26');");
E_D("replace into `order_zonghe` values('3','20150905000029','123456','21,20,','11000','1、推广对象：<br />\r\n2、文章体裁：<br />\r\n3、文章标题：<br />\r\n4、宣传要点：<br />\r\n5、其他要求：<br />\r\n5、软文案例：<br />\r\n若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。<br />','','未收单','','','2015-09-05 00:00:32');");
E_D("replace into `order_zonghe` values('4','20150905000140','123456','21,20,','11000','1、推广对象：<br />\r\n2、文章体裁：<br />\r\n3、文章标题：<br />\r\n4、宣传要点：<br />\r\n5、其他要求：<br />\r\n5、软文案例：<br />\r\n若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。<br />','','未收单','','','2015-09-05 00:01:46');");
E_D("replace into `order_zonghe` values('5','20150905000406','123456','21,20,','11000','1、推广对象：<br />\r\n2、文章体裁：<br />\r\n3、文章标题：<br />\r\n4、宣传要点：<br />\r\n5、其他要求：<br />\r\n5、软文案例：<br />\r\n若能提供一篇您认为不错的软文链接给我们，对我们的写作方向很有参考作用，写出的文章也能比较达到您预期的要求。<br />','','未收单','','','2015-09-05 00:04:11');");

require("../../inc/footer.php");
?>