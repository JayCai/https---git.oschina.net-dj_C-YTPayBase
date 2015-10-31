<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ordertop`;");
E_C("CREATE TABLE `ordertop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tb` varchar(50) NOT NULL,
  `cpID` varchar(100) NOT NULL,
  `user` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8");
E_D("replace into `ordertop` values('58','tb_news','63','123456');");
E_D("replace into `ordertop` values('12','tb_weibo','46466','123456');");
E_D("replace into `ordertop` values('13','tb_weixin','25515','123456');");
E_D("replace into `ordertop` values('16','tb_bbs','28','123456');");
E_D("replace into `ordertop` values('59','tb_weibo','46452','123456');");
E_D("replace into `ordertop` values('18','tb_weibo','46430','123456');");
E_D("replace into `ordertop` values('19','tb_bbszhiding','8448','123456');");
E_D("replace into `ordertop` values('20','tb_bbszhiding','8447','123456');");
E_D("replace into `ordertop` values('21','tb_bbsdingtie','33','123456');");
E_D("replace into `ordertop` values('22','tb_bbsdingtie','32','123456');");
E_D("replace into `ordertop` values('23','tb_zonghe','21','123456');");
E_D("replace into `ordertop` values('24','tb_zonghe','20','123456');");
E_D("replace into `ordertop` values('25','tb_newstc','44','123456');");
E_D("replace into `ordertop` values('26','tb_newstc','43','123456');");
E_D("replace into `ordertop` values('37','tb_weibo','46428','123456');");
E_D("replace into `ordertop` values('38','tb_newstc','39','123456');");
E_D("replace into `ordertop` values('39','tb_weibo','46449','123456');");
E_D("replace into `ordertop` values('73','tb_weibo','46464','a123456');");
E_D("replace into `ordertop` values('44','tb_weibo','46467','facai123');");
E_D("replace into `ordertop` values('66','tb_bbszhiding','8448','a123456');");
E_D("replace into `ordertop` values('45','tb_weibo','46462','facai123');");
E_D("replace into `ordertop` values('47','tb_weibo','46466','');");
E_D("replace into `ordertop` values('48','tb_weibo','46463','');");
E_D("replace into `ordertop` values('67','tb_zonghe','21','a123456');");
E_D("replace into `ordertop` values('68','tb_newstc','44','a123456');");
E_D("replace into `ordertop` values('69','tb_bbsdingtie','33','a123456');");
E_D("replace into `ordertop` values('54','tb_weibo','46433','');");
E_D("replace into `ordertop` values('55','tb_weibo','46467','');");
E_D("replace into `ordertop` values('56','tb_weibo','46464','');");
E_D("replace into `ordertop` values('70','tb_bbs','35','a123456');");
E_D("replace into `ordertop` values('71','tb_weixin','25515','a123456');");
E_D("replace into `ordertop` values('72','tb_weibo','46467','a123456');");
E_D("replace into `ordertop` values('65','tb_weixin','25507','123456');");
E_D("replace into `ordertop` values('74','tb_news','63','a123456');");
E_D("replace into `ordertop` values('75','tb_newstc','44','');");

require("../../inc/footer.php");
?>