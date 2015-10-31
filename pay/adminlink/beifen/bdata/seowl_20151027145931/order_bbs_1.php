<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `order_bbs`;");
E_C("CREATE TABLE `order_bbs` (
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `order_bbs` values('1','20150818091731','123456','15,12,11,','810','我的论坛套餐文章标题','我的论坛套餐文章内容','我的论坛套餐文章留言','未收单','','','2015-08-18 09:18:27');");
E_D("replace into `order_bbs` values('2','20150818062322','jklfsdklalkj','17,16,','600','aaaaaaaaaaaaaa','aaaaaaaaaaaaaaaaaaaaa','','收单','','<a class=\"ke-insertfile\" href=\"/kindeditor/attached/file/20150821/20150821164228_59397.txt\" target=\"_blank\">/kindeditor/attached/file/20150821/20150821164228_59397.txt</a>','2015-08-18 06:24:49');");
E_D("replace into `order_bbs` values('3','20150824070406','123456','20,','270','aaaaaaaaaaaa','aaaaaaaaaaaa','aaaaaaaaaa','未收单','','','2015-08-24 07:04:17');");
E_D("replace into `order_bbs` values('4','20150824070406','123456','20,','270','aaaaaaaaaaaa','aaaaaaaaaaaa','aaaaaaaaaa','未收单','','','2015-08-24 07:04:49');");
E_D("replace into `order_bbs` values('5','20150824070702','123456','19,','270','aaaaaaaaaa','aaaaaaaaaaaa','','未收单','','','2015-08-24 07:07:11');");
E_D("replace into `order_bbs` values('6','20150824070813','123456','11,','270','aaaaaa','aaaaaaaaaaaaaa','aaaaaaaaaaa','未收单','','','2015-08-24 07:08:21');");
E_D("replace into `order_bbs` values('7','20150824070942','123456','15,','270','aaaaa','aaaaaaaaaaaaaaaaaaaa','aaaaaaaaaaaa','未收单','','','2015-08-24 07:09:53');");
E_D("replace into `order_bbs` values('8','20150824071149','123456','20,','270','aaaaaaaaaaaaaa','aaaaaaaaaaaaaaa','','未收单','','','2015-08-24 07:12:00');");
E_D("replace into `order_bbs` values('9','20150824071440','123456','19,','270','dfsa','fafsdsfa','','未收单','','','2015-08-24 07:14:47');");
E_D("replace into `order_bbs` values('10','20150824081856','facai888','20,','300','1','1','','收单','','','2015-08-24 08:19:04');");
E_D("replace into `order_bbs` values('11','20150904233112','123456','35,','100','标题控制在40字内','内容控制在2000字内','','未收单','','','2015-09-04 23:31:27');");
E_D("replace into `order_bbs` values('12','20150905000017','123456','28,','298','标题控制在40字内','内容控制在2000字内','','未收单','','','2015-09-05 00:00:19');");
E_D("replace into `order_bbs` values('13','20150905001916','123456','28,','298','标题控制在40字内','内容控制在2000字内','','未收单','','','2015-09-05 00:19:20');");

require("../../inc/footer.php");
?>