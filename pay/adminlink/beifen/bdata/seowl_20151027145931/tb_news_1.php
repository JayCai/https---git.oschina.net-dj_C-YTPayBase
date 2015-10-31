<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tb_news`;");
E_C("CREATE TABLE `tb_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meiti` varchar(50) NOT NULL,
  `mtname` varchar(50) NOT NULL,
  `rukou` varchar(30) NOT NULL,
  `fenlei` varchar(50) NOT NULL,
  `area` varchar(30) NOT NULL,
  `link` varchar(200) NOT NULL,
  `price` varchar(10) NOT NULL,
  `kedai` varchar(50) NOT NULL,
  `shoulu` varchar(50) NOT NULL,
  `beizhu` varchar(200) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8");
E_D("replace into `tb_news` values('63','大型门户','123123','有','新闻','北京','http://1231231','20','231231','1212','最长20个汉子','2015-09-04');");

require("../../inc/footer.php");
?>