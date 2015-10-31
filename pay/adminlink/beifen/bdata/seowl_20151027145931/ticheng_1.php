<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ticheng`;");
E_C("CREATE TABLE `ticheng` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticheng` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ticheng` values('1','5');");

require("../../inc/footer.php");
?>