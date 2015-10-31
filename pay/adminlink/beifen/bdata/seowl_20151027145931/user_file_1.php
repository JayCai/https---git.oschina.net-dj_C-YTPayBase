<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `user_file`;");
E_C("CREATE TABLE `user_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `orderID` varchar(30) NOT NULL,
  `fileadress` varchar(200) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `user_file` values('1','123456','20150813044958','../user_file/281252001439484636.doc','2015-08-13 04:50:36');");
E_D("replace into `user_file` values('2','123456','20150813051717','../user_file/125002001439486253.doc','2015-08-13 05:17:33');");
E_D("replace into `user_file` values('3','123456','20150813051822','../user_file/421876001439486322.doc','2015-08-13 05:18:42');");
E_D("replace into `user_file` values('4','123456','20150813053533','../user_file/984376001439487382.doc','2015-08-13 05:36:22');");
E_D("replace into `user_file` values('5','123456','20150813053634','../user_file/218751001439487414.doc','2015-08-13 05:36:54');");
E_D("replace into `user_file` values('6','123456','20150813054938','../user_file/734377001439488196.doc','2015-08-13 05:49:56');");
E_D("replace into `user_file` values('7','123456','20150813061747','../user_file/453126001439489889.doc','2015-08-13 06:18:09');");
E_D("replace into `user_file` values('8','123456','20150818074908','../user_file/750001001439884175.doc','2015-08-18 07:49:35');");
E_D("replace into `user_file` values('9','123456','20150818085557','../user_file/187502001439888178.doc','2015-08-18 08:56:18');");
E_D("replace into `user_file` values('10','123456','20150818085717','../user_file/984377001439888264.doc','2015-08-18 08:57:44');");
E_D("replace into `user_file` values('11','123456','20150818090923','../user_file/781251001439888994.doc','2015-08-18 09:09:54');");
E_D("replace into `user_file` values('12','123456','20150818091023','../user_file/906251001439889047.doc','2015-08-18 09:10:47');");
E_D("replace into `user_file` values('13','123456','20150818091731','../user_file/765627001439889497.doc','2015-08-18 09:18:17');");
E_D("replace into `user_file` values('14','123456','20150818092941','../user_file/953127001439890199.doc','2015-08-18 09:29:59');");

require("../../inc/footer.php");
?>