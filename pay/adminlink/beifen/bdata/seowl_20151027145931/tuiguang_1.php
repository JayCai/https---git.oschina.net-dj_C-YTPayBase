<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tuiguang`;");
E_C("CREATE TABLE `tuiguang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tuijie` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `tuiguang` values('1','123456','192.168.0.100','2015-08-18 12:55:08');");
E_D("replace into `tuiguang` values('2','facai888','221.5.49.192','2015-08-24 02:50:23');");
E_D("replace into `tuiguang` values('3','123456','182.246.3.159','2015-08-24 06:21:25');");
E_D("replace into `tuiguang` values('4','facai888','112.90.236.10','2015-08-25 03:54:23');");

require("../../inc/footer.php");
?>