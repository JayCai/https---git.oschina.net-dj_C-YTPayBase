<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `order_dxwenzhang`;");
E_C("CREATE TABLE `order_dxwenzhang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderID` varchar(30) NOT NULL,
  `user` varchar(50) NOT NULL,
  `cpID` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `pianshu` varchar(20) NOT NULL,
  `liuyan` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `liyou` text NOT NULL,
  `baobiao` text NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `order_dxwenzhang` values('1','20150818093007','123456','31,30,','72','我要代写文章','2','我要代写文章','未收单','','','2015-08-18 09:30:22');");
E_D("replace into `order_dxwenzhang` values('2','20150818064052','jklfsdklalkj','33,','20','aaaaaaaaaaaaa','1','aaaaaaaaaaa','未收单','','','2015-08-18 06:41:47');");
E_D("replace into `order_dxwenzhang` values('3','20150824054310','123456','34,','33','aaaaaaaaaaaaaaaaaaaa','2','dfsaaaaaaaaaaaaa','收单','','','2015-08-24 05:43:28');");
E_D("replace into `order_dxwenzhang` values('4','20150825045356','facai888','35,','200','4','1','','未收单','','','2015-08-25 04:57:01');");

require("../../inc/footer.php");
?>