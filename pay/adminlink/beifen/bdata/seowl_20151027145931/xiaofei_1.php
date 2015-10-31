<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `xiaofei`;");
E_C("CREATE TABLE `xiaofei` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderID` varchar(30) NOT NULL,
  `user` varchar(50) NOT NULL,
  `cpname` varchar(50) NOT NULL,
  `cpID` varchar(100) NOT NULL,
  `tb` varchar(50) NOT NULL,
  `price` varchar(30) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8");
E_D("replace into `xiaofei` values('1','20150904051634','123456','新闻套餐','44,','tb_newstc','250','2015-09-04 17:16:45');");
E_D("replace into `xiaofei` values('2','20150904053504','123456','新闻资源','63,','tb_news','20','2015-09-04 17:35:12');");
E_D("replace into `xiaofei` values('3','20150904053607','123456','新闻资源','63,','tb_news','20','2015-09-04 17:36:17');");
E_D("replace into `xiaofei` values('4','20150904054253','123456','新闻资源','63,','tb_news','20','2015-09-04 17:43:06');");
E_D("replace into `xiaofei` values('5','20150904225321','123456','微博直发','46452,46464,46453,46458,46461,46467,','tb_weibo','2002','2015-09-04 22:53:28');");
E_D("replace into `xiaofei` values('6','20150904230842','123456','新闻资源','63,','tb_news','20','2015-09-04 23:08:50');");
E_D("replace into `xiaofei` values('7','20150904231324','123456','新闻资源','63,','tb_news','20','2015-09-04 23:13:37');");
E_D("replace into `xiaofei` values('8','20150904232433','123456','微信单图文','25515,','tb_weixin','680','2015-09-04 23:25:01');");
E_D("replace into `xiaofei` values('9','20150904233112','123456','论坛套餐','35,','tb_bbs','100','2015-09-04 23:31:27');");
E_D("replace into `xiaofei` values('10','20150904234154','123456','论坛水军顶贴','33,32,','tb_bbsdingtie','0','2015-09-04 23:42:00');");
E_D("replace into `xiaofei` values('11','20150904234723','123456','综合套餐','21,20,','tb_zonghe','11000','2015-09-04 23:47:26');");
E_D("replace into `xiaofei` values('12','20150904235632','123456','新闻资源','63,','tb_news','20','2015-09-04 23:56:38');");
E_D("replace into `xiaofei` values('13','20150904235723','123456','论坛水军顶贴','33,32,','tb_bbsdingtie','0','2015-09-04 23:57:29');");
E_D("replace into `xiaofei` values('14','20150904235739','123456','论坛置顶','8448,8447,','tb_bbszhiding','400','2015-09-04 23:57:43');");
E_D("replace into `xiaofei` values('15','20150904235755','123456','论坛水军顶贴','33,32,','tb_bbsdingtie','0','2015-09-04 23:58:05');");
E_D("replace into `xiaofei` values('16','20150904235938','123456','新闻套餐','44,43,','tb_newstc','600','2015-09-04 23:59:43');");
E_D("replace into `xiaofei` values('17','20150905000017','123456','论坛套餐','28,','tb_bbs','298','2015-09-05 00:00:19');");
E_D("replace into `xiaofei` values('18','20150905000029','123456','综合套餐','21,20,','tb_zonghe','11000','2015-09-05 00:00:32');");
E_D("replace into `xiaofei` values('19','20150905000140','123456','综合套餐','21,20,','tb_zonghe','11000','2015-09-05 00:01:46');");
E_D("replace into `xiaofei` values('20','20150905000158','123456','新闻资源','63,','tb_news','20','2015-09-05 00:02:14');");
E_D("replace into `xiaofei` values('21','20150905000348','123456','新闻资源','63,','tb_news','20','2015-09-05 00:03:53');");
E_D("replace into `xiaofei` values('22','20150905000406','123456','综合套餐','21,20,','tb_zonghe','11000','2015-09-05 00:04:11');");
E_D("replace into `xiaofei` values('23','20150905000819','123456','论坛置顶','8448,8447,','tb_bbszhiding','400','2015-09-05 00:08:31');");
E_D("replace into `xiaofei` values('24','20150905001159','123456','论坛置顶','8448,8447,','tb_bbszhiding','400','2015-09-05 00:12:10');");
E_D("replace into `xiaofei` values('25','20150905001311','123456','论坛置顶','8448,8447,','tb_bbszhiding','400','2015-09-05 00:13:24');");
E_D("replace into `xiaofei` values('26','20150905001341','123456','论坛置顶','8448,8447,','tb_bbszhiding','400','2015-09-05 00:13:46');");
E_D("replace into `xiaofei` values('27','20150905001341','123456','论坛置顶','8448,8447,','tb_bbszhiding','400','2015-09-05 00:13:52');");
E_D("replace into `xiaofei` values('28','20150905001341','123456','论坛置顶','8448,8447,','tb_bbszhiding','400','2015-09-05 00:13:57');");
E_D("replace into `xiaofei` values('29','20150905001341','123456','论坛置顶','8448,8447,','tb_bbszhiding','400','2015-09-05 00:14:02');");
E_D("replace into `xiaofei` values('30','20150905001916','123456','论坛套餐','28,','tb_bbs','298','2015-09-05 00:19:20');");
E_D("replace into `xiaofei` values('31','20150905003126','123456','新闻资源','63,','tb_news','20','2015-09-05 00:31:36');");
E_D("replace into `xiaofei` values('32','20150905003228','123456','微信单图文','25515,','tb_weixin','680','2015-09-05 00:32:42');");
E_D("replace into `xiaofei` values('33','20150907110308','a123456','微博直发','46463,','tb_weibo','170','2015-09-07 11:03:24');");
E_D("replace into `xiaofei` values('34','20150907110520','facai123','微博直发','46467,46462,','tb_weibo','340','2015-09-07 11:05:36');");
E_D("replace into `xiaofei` values('35','20150911235557','123456','微信单图文','25515,','tb_weixin','680','2015-09-11 23:56:06');");
E_D("replace into `xiaofei` values('36','20150912004434','123456','新闻资源','63,','tb_news','20','2015-09-12 00:44:40');");
E_D("replace into `xiaofei` values('37','20150912010031','123456','微博直发','46466,46429,46430,46428,46449,','tb_weibo','4824','2015-09-12 01:00:35');");
E_D("replace into `xiaofei` values('38','20150912010150','123456','新闻资源','63,','tb_news','20','2015-09-12 01:01:55');");
E_D("replace into `xiaofei` values('39','20150912010343','123456','新闻资源','63,','tb_news','20','2015-09-12 01:03:48');");
E_D("replace into `xiaofei` values('40','20151027142851','a123456','新闻资源','63,','tb_news','20','2015-10-27 14:29:00');");

require("../../inc/footer.php");
?>