<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `order_bbsdingtie`;");
E_C("CREATE TABLE `order_bbsdingtie` (
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `order_bbsdingtie` values('1','20150818092836','123456','24,23,','180','www.qq.com','顶贴','收单','','<a class=\"ke-insertfile\" href=\"/kindeditor/attached/file/20150821/20150821170714_88129.txt\" target=\"_blank\">/kindeditor/attached/file/20150821/20150821170714_88129.txt</a>','2015-08-18 09:28:50');");
E_D("replace into `order_bbsdingtie` values('2','20150904234154','123456','33,32,','0','sssssssss','ssssssss','未收单','','','2015-09-04 23:42:00');");
E_D("replace into `order_bbsdingtie` values('3','20150904235723','123456','33,32,','0','ssssssssssssssss','','未收单','','','2015-09-04 23:57:29');");
E_D("replace into `order_bbsdingtie` values('4','20150904235755','123456','33,32,','0','sssssssssssssssssssss','','未收单','','','2015-09-04 23:58:05');");

require("../../inc/footer.php");
?>