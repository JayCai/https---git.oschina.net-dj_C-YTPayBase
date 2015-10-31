<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tb_bbs`;");
E_C("CREATE TABLE `tb_bbs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bbstaocan` varchar(50) NOT NULL,
  `bbsleixing` varchar(50) NOT NULL,
  `fabutiao` varchar(50) NOT NULL,
  `zhouqi` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `shoulu` varchar(100) NOT NULL,
  `beizhu` varchar(200) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8");
E_D("replace into `tb_bbs` values('34','中小型论坛套餐二','中小论坛','15000条/单次','一次','200','不确定','当天发完，提供详细报表，保证数量。','2015-08-30');");
E_D("replace into `tb_bbs` values('35','中小型论坛套餐一','中小论坛','7000条/单次','一次','100','不确定','当天发完，提供详细报表，保证数量。','2015-08-30');");
E_D("replace into `tb_bbs` values('25','全国100强大型论坛套餐四','大型论坛','5000条','一次','3999','是','内容带图超过1张,多出图片每张加0.2元','2015-08-30');");
E_D("replace into `tb_bbs` values('26','全国100强大型论坛套餐三','大型论坛','1000条','一次','998','是','内容带图超过1张,多出图片每张加0.2元','2015-08-30');");
E_D("replace into `tb_bbs` values('27','全国100强大型论坛套餐二','大型论坛','500条','一次','650','是','内容带图超过1张,多出图片每张加0.2元','2015-08-30');");
E_D("replace into `tb_bbs` values('28','全国100强大型论坛套餐一','大型论坛','200条','一次','298','是','内容带图超过1张,多出图片每张加0.2元','2015-08-30');");
E_D("replace into `tb_bbs` values('29','中小型论坛包月套餐四','中小论坛','每天5000条/共150000条','一个月','1200','不确定','每天发完，提供详细报表。','2015-08-30');");
E_D("replace into `tb_bbs` values('30','中小型论坛包月套餐三','中小论坛','每天3000条/共90000条','一个月','800','不确定','每天发完，提供详细报表。','2015-08-30');");
E_D("replace into `tb_bbs` values('31','中小型论坛包月套餐二','中小论坛','每天1500条/共45000条','一个月','480','不确定','每天发完，提供详细报表。','2015-08-30');");
E_D("replace into `tb_bbs` values('32','中小型论坛包月套餐一','中小论坛','每天1000条/共30000条','一个月','350','不确定','每天发完，提供详细报表。','2015-08-30');");

require("../../inc/footer.php");
?>