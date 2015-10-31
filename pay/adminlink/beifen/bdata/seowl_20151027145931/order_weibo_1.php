<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `order_weibo`;");
E_C("CREATE TABLE `order_weibo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderID` varchar(30) NOT NULL,
  `user` varchar(50) NOT NULL,
  `cpID` varchar(100) NOT NULL,
  `zhifaprice` varchar(20) NOT NULL,
  `zhuanfaprice` varchar(20) NOT NULL,
  `zhuanfalink` varchar(200) NOT NULL,
  `zhuanfayu` text NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `liuyan` text NOT NULL,
  `leixing` varchar(30) NOT NULL,
  `type` varchar(50) NOT NULL,
  `liyou` text NOT NULL,
  `baobiao` text NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8");
E_D("replace into `order_weibo` values('19','20150904080104','123456','46457,','170','','','','','dddddddddddddddddddddd','dddddddddddddddddddddddd','微博直发','退单','','','2015-09-04 08:01:15');");
E_D("replace into `order_weibo` values('20','20150904043235','123456','46466,','200','','','','','eeeeeeeeeeeee','eeeeeeeeeee','微博直发','退单','','','2015-09-04 04:32:45');");
E_D("replace into `order_weibo` values('21','20150904225321','123456','46452,46464,46453,46458,46461,46467,','2002','','','','','ddddddddddddddddddd','dddddddddddddd','微博直发','未收单','','','2015-09-04 22:53:28');");
E_D("replace into `order_weibo` values('22','20150907110308','a123456','46463,','170','','','','','121212','','微博直发','未收单','','','2015-09-07 11:03:24');");
E_D("replace into `order_weibo` values('23','20150907110520','facai123','46467,46462,','340','','','','','的深v个是地方','','微博直发','未收单','','','2015-09-07 11:05:36');");
E_D("replace into `order_weibo` values('24','20150912010031','123456','46466,46429,46430,46428,46449,','4824','','','','','cccccccccccc','','微博直发','未收单','','','2015-09-12 01:00:35');");

require("../../inc/footer.php");
?>