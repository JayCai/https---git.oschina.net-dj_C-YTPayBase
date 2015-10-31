<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tb_dxwenzhang`;");
E_C("CREATE TABLE `tb_dxwenzhang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zishu` varchar(30) NOT NULL,
  `zhouqi` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `scprice` varchar(50) NOT NULL,
  `beizhu` varchar(200) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8");
E_D("replace into `tb_dxwenzhang` values('36','2000','1~2天完成','200','400','提供文字需求与，基本信息','2015-09-02');");
E_D("replace into `tb_dxwenzhang` values('37','1000','1~2天完成','150','300','提供文字需求与，基本信息','2015-09-02');");

require("../../inc/footer.php");
?>