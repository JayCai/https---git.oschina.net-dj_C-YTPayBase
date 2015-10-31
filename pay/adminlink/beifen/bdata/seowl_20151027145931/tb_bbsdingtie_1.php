<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tb_bbsdingtie`;");
E_C("CREATE TABLE `tb_bbsdingtie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bbs` varchar(50) NOT NULL,
  `bbsadress` varchar(100) NOT NULL,
  `num` varchar(50) NOT NULL,
  `zhouqi` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `beizhu` varchar(200) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8");
E_D("replace into `tb_bbsdingtie` values('26','大众','http://bbs.dzwww.com/','10000','5天内完成','5000','','2015-09-01');");
E_D("replace into `tb_bbsdingtie` values('27','大众','http://bbs.dzwww.com/','5000','3天内完成','3000','','2015-09-01');");
E_D("replace into `tb_bbsdingtie` values('28','大众','http://bbs.dzwww.com/','1000','2天内完成','700','','2015-09-01');");
E_D("replace into `tb_bbsdingtie` values('29','大众','http://bbs.dzwww.com/','500','1天内完成','400','','2015-09-01');");
E_D("replace into `tb_bbsdingtie` values('30','天涯','http://bbs.tianya.cn/','10000','5天内完成','5000','','2015-09-01');");
E_D("replace into `tb_bbsdingtie` values('31','天涯','http://bbs.tianya.cn/','5000','3天内完成','3000','','2015-09-01');");
E_D("replace into `tb_bbsdingtie` values('32','天涯','http://bbs.tianya.cn/','1000','2天内完成','700','','2015-09-01');");
E_D("replace into `tb_bbsdingtie` values('33','天涯','http://bbs.tianya.cn/','500','1天内完成','400','','2015-09-01');");

require("../../inc/footer.php");
?>