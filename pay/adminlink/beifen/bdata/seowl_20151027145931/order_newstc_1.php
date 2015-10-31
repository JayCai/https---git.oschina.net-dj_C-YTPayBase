<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `order_newstc`;");
E_C("CREATE TABLE `order_newstc` (
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `order_newstc` values('1','20150818092941','123456','21,20,','90','新闻套餐标题','新闻套餐内容','新闻套餐留言','收单','','','2015-08-18 09:30:04',NULL);");
E_D("replace into `order_newstc` values('2','20150902091333','a123456','44,','225','123','123','','退单','','','2015-09-02 09:15:03',NULL);");
E_D("replace into `order_newstc` values('3','20150904045326','123456','44,','250','wwwwwwwwwwwwwww','wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww','','退单','','','2015-09-04 04:53:37',NULL);");
E_D("replace into `order_newstc` values('4','20150904051634','123456','44,','250','wwwwwwww','wwwwwwwwwwwwwwwwwww','wwwwwwwww','退单','','','2015-09-04 17:16:45',NULL);");
E_D("replace into `order_newstc` values('5','20150904235938','123456','44,43,','600','aaaaaaaaaaaa','aaaaaaaaaaaaaa','','未收单','','','2015-09-04 23:59:43',NULL);");

require("../../inc/footer.php");
?>