<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ticheng_b`;");
E_C("CREATE TABLE `ticheng_b` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderID` varchar(30) NOT NULL,
  `user` varchar(50) NOT NULL,
  `cpname` varchar(50) NOT NULL,
  `cpID` varchar(100) NOT NULL,
  `tb` varchar(50) NOT NULL,
  `price` varchar(30) NOT NULL,
  `tuijie` varchar(50) NOT NULL,
  `ticheng` varchar(20) NOT NULL,
  `type` int(4) NOT NULL DEFAULT '0',
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `ticheng_b` values('1','20150824052238','123456','新闻资源','52,51,','tb_news','48','123456w','0.96','1','2015-08-24 05:22:46');");
E_D("replace into `ticheng_b` values('2','20150824052743','123456','新闻资源','42,41,','tb_news','48','123456w','0.96','1','2015-08-25 01:27:52');");
E_D("replace into `ticheng_b` values('3','20150824054310','123456','代写文章','34,','tb_dxwenzhang','33','123456w','0.66','1','2015-08-24 05:43:28');");
E_D("replace into `ticheng_b` values('4','20150824062522','123aaa','新闻资源','38,37,','tb_news','60','123456','1.2','1','2015-08-24 06:25:30');");
E_D("replace into `ticheng_b` values('5','20150824062544','123aaa','微博直发','28,27,','tb_weibo','50','123456','1','1','2015-08-24 06:25:56');");
E_D("replace into `ticheng_b` values('6','20150824062609','123aaa','微信单图文','28,27,','tb_weixin','40','123456','0.8','1','2015-08-24 06:26:18');");
E_D("replace into `ticheng_b` values('7','20150825040335','a123456','新闻资源','55,54,53,52,51,','tb_news','150','facai888','3','1','2015-08-25 04:03:46');");
E_D("replace into `ticheng_b` values('8','20150825041319','a123456','新闻资源','55,53,46,44,','tb_news','120','facai888','2.4','1','2015-08-25 04:13:32');");
E_D("replace into `ticheng_b` values('9','20150825045148','123456','新闻资源','46,','tb_news','24','123456w','0.48','0','2015-08-25 04:51:55');");

require("../../inc/footer.php");
?>