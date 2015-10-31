<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `city`;");
E_C("CREATE TABLE `city` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cityname` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8");
E_D("replace into `city` values('1','北京');");
E_D("replace into `city` values('2','天津');");
E_D("replace into `city` values('3','上海');");
E_D("replace into `city` values('4','重庆');");
E_D("replace into `city` values('5','河北');");
E_D("replace into `city` values('6','山西');");
E_D("replace into `city` values('7','台湾');");
E_D("replace into `city` values('8','辽宁');");
E_D("replace into `city` values('9','吉林');");
E_D("replace into `city` values('10','黑龙江');");
E_D("replace into `city` values('11','江苏');");
E_D("replace into `city` values('12','浙江');");
E_D("replace into `city` values('13','安徽');");
E_D("replace into `city` values('14','福建');");
E_D("replace into `city` values('15','江西');");
E_D("replace into `city` values('16','山东');");
E_D("replace into `city` values('17','河南');");
E_D("replace into `city` values('18','湖北');");
E_D("replace into `city` values('19','湖南');");
E_D("replace into `city` values('20','广东');");
E_D("replace into `city` values('21','甘肃');");
E_D("replace into `city` values('22','四川');");
E_D("replace into `city` values('23','贵州');");
E_D("replace into `city` values('24','海南');");
E_D("replace into `city` values('25','云南');");
E_D("replace into `city` values('26','青海');");
E_D("replace into `city` values('27','陕西');");
E_D("replace into `city` values('28','广西');");
E_D("replace into `city` values('29','西藏');");
E_D("replace into `city` values('30','宁夏');");
E_D("replace into `city` values('31','新疆');");
E_D("replace into `city` values('32','内蒙古');");
E_D("replace into `city` values('33','澳门');");
E_D("replace into `city` values('34','香港');");
E_D("replace into `city` values('35','全国');");

require("../../inc/footer.php");
?>