<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `admin`;");
E_C("CREATE TABLE `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `admin` values('2','lin77','facai123456','1');");

require("../../inc/footer.php");
?>