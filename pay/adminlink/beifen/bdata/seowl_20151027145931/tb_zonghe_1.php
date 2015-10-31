<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tb_zonghe`;");
E_C("CREATE TABLE `tb_zonghe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `leixing` varchar(50) NOT NULL,
  `taocanzy` text NOT NULL,
  `zhouqi` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `scprice` varchar(50) NOT NULL,
  `beizhu` varchar(200) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");
E_D("replace into `tb_zonghe` values('19','综合营销套餐三','<p>\r\n	<span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:25px;background-color:#FFFFFF;\"><span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:25px;background-color:#FFFFFF;\">1、围绕企业品牌和产品（专业软文代写：6篇）<br />\r\n2、创建企业名称百科一个，（涉及百度百科、SOSO百科、互动百科，共三个百科候选）<br />\r\n3、通过网络新闻门户媒体(20篇次)+地方优质媒体(20篇次)+(150个地方新闻站点门户首页)<br />\r\n4、发布知名门户网站论坛，知名论坛600篇。<br />\r\n5、BBS论坛，30天，每天发布5000条信息（注：论坛可能被删除，存活量不保证）<br />\r\n6、论坛加精或置顶：三个热门论坛（加精一个月+置顶4天）<br />\r\n7：安排天涯大众团队打造热贴.总数顶贴2000次！点击量10000！<br />\r\n8、分类信息投放400篇，如赶集网、58网、易登等各大分类信息网站。<br />\r\n9、利用(3个)微博红人直推送，每个红人粉丝量数300-1000万<br />\r\n10、微博转发：安排1000达人转发，1300普通转发，带高比例的评论回复。<br />\r\n11、利用(3个)微信红人直推送，每个红人粉丝量数10万人以上</span></span>\r\n</p>\r\n<span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:25px;background-color:#FFFFFF;\"> <span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:25px;background-color:#FFFFFF;\"></span></span><span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:25px;background-color:#FFFFFF;\"></span>','30天','12000','15000','','2015-09-02');");
E_D("replace into `tb_zonghe` values('20','综合营销套餐二','<p>\r\n	<span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:25px;background-color:#FFFFFF;\"><span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:25px;background-color:#FFFFFF;\">1、围绕企业品牌和产品，（专业软文代写：3篇）<br />\r\n2、创建企业名称百科一个，（涉及百度百科、soso百科，共2个百科候选）<br />\r\n3、通过网络新闻门户媒体（21篇次）<br />\r\n4、论坛加精或置顶：三个热门论坛（加精两周或置顶2天）<br />\r\n5、发布知名门户网站论坛，知名论坛400篇。<br />\r\n6、BBS论坛，30天，每天发布3000条信息（注：论坛可能被删除，存活量不保证）<br />\r\n7、分类信息投放100篇，如赶集网、58网、易登等各大分类信息网站。<br />\r\n8、利用（3个）微博红人直推送，每个红人粉丝量数100-500万<br />\r\n9、微博转发：安排1000达人转发，1300普通转发，带高比例的评论回复。<br />\r\n</span></span> \r\n</p>\r\n<span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:25px;background-color:#FFFFFF;\"> <span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:25px;background-color:#FFFFFF;\"></span></span><span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:25px;background-color:#FFFFFF;\"></span>','30天','7000','12000','','2015-09-02');");
E_D("replace into `tb_zonghe` values('21','综合营销套餐一','<p>\r\n	<span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:25px;background-color:#FFFFFF;\"><span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:25px;background-color:#FFFFFF;\">1、围绕企业品牌和产品，（专业软文代写：2篇）<br />\r\n2、通过网络新闻门户媒体（16篇次）<br />\r\n3、发布知名门户网站论坛，知名论坛200篇。<br />\r\n4、BBS论坛，30天，每天发布3000条信息（注：论坛可能被删除，存活量不保证）<br />\r\n5、论坛加精或置顶：三个热门论坛（加精一周+置顶一天）帖子回复50，刷点击量1万。<br />\r\n6、利用（1个）微信红人直推送，每个红人粉丝量数3万人以上<br />\r\n7、微博转发：安排1000达人转发，1200普通转发，带高比例的评论回复。<br />\r\n</span></span> \r\n</p>\r\n<span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:25px;background-color:#FFFFFF;\"> <span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:25px;background-color:#FFFFFF;\"></span></span><span style=\"color:#333333;font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:25px;background-color:#FFFFFF;\"></span>','30天','4000','8000','','2015-09-02');");

require("../../inc/footer.php");
?>