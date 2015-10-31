<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `order_weixin`;");
E_C("CREATE TABLE `order_weixin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderID` varchar(30) NOT NULL,
  `user` varchar(50) NOT NULL,
  `cpID` varchar(100) NOT NULL,
  `dantuwen` varchar(20) NOT NULL,
  `duotuwen` varchar(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `liuyan` text NOT NULL,
  `leixing` varchar(30) NOT NULL,
  `type` varchar(50) NOT NULL,
  `liyou` text NOT NULL,
  `baobiao` text NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `order_weixin` values('1','20150818090923','123456','27,','18','','我的单图文标题','我的单图文内容<br />','我的单图文留言','单图文','未收单','','','2015-08-18 09:10:05');");
E_D("replace into `order_weixin` values('2','20150818091023','123456','25,24,','','54','我的多图文标题','我的多图文内容','我的多图文留言','多图文','收单','','<a class=\"ke-insertfile\" href=\"/kindeditor/attached/file/20150821/20150821163511_15166.doc\" target=\"_blank\">/kindeditor/attached/file/20150821/20150821163511_15166.doc<img src=\"http://api.map.baidu.com/staticimage?center=121.473704%2C31.230393&zoom=11&width=558&height=360&markers=121.473704%2C31.230393&markerStyles=l%2CA\" alt=\"\" /></a>','2015-08-18 09:10:54');");
E_D("replace into `order_weixin` values('3','20150824062609','123aaa','28,27,','40','','afweeeeee','eeeeeeeeeeeeeeeeeeeeeeeeeeeew','','单图文','交易成功','','','2015-08-24 06:26:18');");
E_D("replace into `order_weixin` values('4','20150904232433','123456','25515,','680','','saaaaaaaaa','aaaaaaaaaaaaaaaa','','单图文','退单','','','2015-09-04 23:25:01');");
E_D("replace into `order_weixin` values('5','20150905003228','123456','25515,','680','','eeeeeeeee','eeeeeeeeeeeeeeeee','','单图文','未收单','','','2015-09-05 00:32:42');");
E_D("replace into `order_weixin` values('6','20150911235557','123456','25515,','680','','000000000000000','00000000000','','单图文','未收单','','','2015-09-11 23:56:06');");

require("../../inc/footer.php");
?>