<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `type_pt`;");
E_C("CREATE TABLE `type_pt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(30) NOT NULL,
  `paixu` int(11) NOT NULL DEFAULT '0',
  `tb` varchar(30) NOT NULL,
  `url` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");
E_D("replace into `type_pt` values('1','新闻资源','1','tb_news','list_news.php');");
E_D("replace into `type_pt` values('3','代写文章','9','tb_dxwenzhang','list_dxwenzhang.php');");
E_D("replace into `type_pt` values('4','新闻套餐','8','tb_newstc','list_newstc.php');");
E_D("replace into `type_pt` values('5','综合套餐','7','tb_zonghe','list_zonghe.php');");
E_D("replace into `type_pt` values('6','论坛水军顶贴','6','tb_bbsdingtie','list_bbsdingtie.php');");
E_D("replace into `type_pt` values('7','论坛置顶加精','5','tb_bbszhiding','list_bbszhiding.php');");
E_D("replace into `type_pt` values('8','论坛套餐','4','tb_bbs','list_bbs.php');");
E_D("replace into `type_pt` values('9','微信资源','3','tb_weixin','list_weixin.php');");
E_D("replace into `type_pt` values('16','微博资源','2','tb_weibo','list_weibo.php');");

require("../../inc/footer.php");
?>