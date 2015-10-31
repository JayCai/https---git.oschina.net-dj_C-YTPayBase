<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `order_bbszhiding`;");
E_C("CREATE TABLE `order_bbszhiding` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderID` varchar(30) NOT NULL,
  `user` varchar(50) NOT NULL,
  `cpID` varchar(100) NOT NULL,
  `zdprice` varchar(20) NOT NULL,
  `jjprice` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `liuyan` text NOT NULL,
  `leixing` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `liyou` text NOT NULL,
  `baobiao` text NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `order_bbszhiding` values('1','20150818092151','123456','27,26,','36','','www.baidu.com','置顶链接','置顶','未收单','','','2015-08-18 09:22:33');");
E_D("replace into `order_bbszhiding` values('2','20150818092237','123456','15,12,','','54','www.baidu.com','加精','加精','未收单','','<a class=\"ke-insertfile\" href=\"/kindeditor/attached/file/20150821/20150821164646_83053.txt\" target=\"_blank\">/kindeditor/attached/file/20150821/20150821164646_83053.txt</a>','2015-08-18 09:22:54');");
E_D("replace into `order_bbszhiding` values('3','20150824070647','123456','27,','18','','efawaaaaaaaaaaaa','aaaaaaaaaaa','置顶','未收单','','','2015-08-24 07:06:57');");
E_D("replace into `order_bbszhiding` values('4','20150902081719','a123456','7477,','0','','222','','置顶','未收单','','','2015-09-02 08:17:28');");
E_D("replace into `order_bbszhiding` values('5','20150904235739','123456','8448,8447,','400','','sssssssssssssssssssss','','置顶','未收单','','','2015-09-04 23:57:43');");
E_D("replace into `order_bbszhiding` values('6','20150905000819','123456','8448,8447,','400','','aaaaaaaaaaaaaaaaaaaaa','','置顶','未收单','','','2015-09-05 00:08:31');");
E_D("replace into `order_bbszhiding` values('7','20150905001159','123456','8448,8447,','400','','aaaaaaaaaaaaaaaaaaaaaaaaaaaa','','置顶','未收单','','','2015-09-05 00:12:10');");
E_D("replace into `order_bbszhiding` values('8','20150905001311','123456','8448,8447,','400','','aaaaaaaaaaaaaaaaaaaaaaaaaaddddddddddddddddddddddd','dddddddddddddddddddddd','置顶','未收单','','','2015-09-05 00:13:24');");
E_D("replace into `order_bbszhiding` values('9','20150905001341','123456','8448,8447,','400','','dsssssssssssss','','置顶','未收单','','','2015-09-05 00:13:46');");
E_D("replace into `order_bbszhiding` values('10','20150905001341','123456','8448,8447,','400','','dsssssssssssss','','置顶','未收单','','','2015-09-05 00:13:52');");
E_D("replace into `order_bbszhiding` values('11','20150905001341','123456','8448,8447,','400','','dsssssssssssss','','置顶','未收单','','','2015-09-05 00:13:57');");
E_D("replace into `order_bbszhiding` values('12','20150905001341','123456','8448,8447,','400','','dsssssssssssss','','置顶','未收单','','','2015-09-05 00:14:02');");

require("../../inc/footer.php");
?>