<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `link`;");
E_C("CREATE TABLE `link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `paixu` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `link` values('1','百度','http://www.baidu.com','','1');");
E_D("replace into `link` values('2','搜狐','http://www.sohu.com','','2');");
E_D("replace into `link` values('3','腾讯新闻','http://news.qq.com','','3');");
E_D("replace into `link` values('4','新浪','http://www.sina.com.cn','','4');");

require("../../inc/footer.php");
?>