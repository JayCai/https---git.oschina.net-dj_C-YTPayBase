<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `level`;");
E_C("CREATE TABLE `level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `zhekou` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `level` values('1','普通用户','0','0');");
E_D("replace into `level` values('2','vip1','1799','9.8');");
E_D("replace into `level` values('3','vip2','4499','9.5');");
E_D("replace into `level` values('4','vip3','7999','9');");
E_D("replace into `level` values('5','vip4','14900','8.5');");
E_D("replace into `level` values('6','代理商','19900','8');");

require("../../inc/footer.php");
?>