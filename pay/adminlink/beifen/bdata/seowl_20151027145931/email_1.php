<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `email`;");
E_C("CREATE TABLE `email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adress` varchar(100) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `shou` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `email` values('1','pay@531gw.com','pay@531gw.com','facai1234','121483982@qq.com|1119796989@qq.com|597029106@qq.com|1187093519@qq.com');");

require("../../inc/footer.php");
?>