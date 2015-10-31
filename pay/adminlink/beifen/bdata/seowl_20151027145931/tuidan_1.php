<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tuidan`;");
E_C("CREATE TABLE `tuidan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderID` varchar(30) NOT NULL,
  `user` varchar(50) NOT NULL,
  `cpname` varchar(50) NOT NULL,
  `price` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `tuidan` values('1','20150904081109','123456','新闻资源','20','2015-09-04 08:11:36');");
E_D("replace into `tuidan` values('2','20150904043235','123456','微博资源','200','2015-09-04 04:33:10');");
E_D("replace into `tuidan` values('3','20150904045326','123456','新闻套餐','250','2015-09-04 16:53:53');");
E_D("replace into `tuidan` values('4','20150904051634','123456','新闻套餐','250','2015-09-04 17:17:35');");
E_D("replace into `tuidan` values('5','20150902091333','a123456','新闻套餐','225','2015-09-04 17:18:08');");
E_D("replace into `tuidan` values('6','20150904041924','123456','新闻资源','20','2015-09-04 17:31:08');");
E_D("replace into `tuidan` values('7','20150904232433','123456','微信资源','680','2015-09-04 23:25:35');");

require("../../inc/footer.php");
?>