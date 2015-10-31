<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `user`;");
E_C("CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `rmb` varchar(30) NOT NULL DEFAULT '0',
  `name` varchar(30) NOT NULL,
  `qq` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `level` varchar(30) NOT NULL,
  `tuijie` varchar(30) NOT NULL,
  `regtime` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `user` values('7','123456','e10adc3949ba59abbe56e057f20f883e','256630483','','','','564465654@qq.com','普通用户','','2015-08-28');");
E_D("replace into `user` values('6','a123456','dc483e80a7a0bd9ef71d8cf973673924','290.56','','','','505084@qq.com','普通用户','','2015-08-28');");
E_D("replace into `user` values('8','facai123','01f3674e329b81f17b52f1651e4d9cf4','6912.1','','','','1712186813@qq.com','普通用户','','2015-09-02');");
E_D("replace into `user` values('9','fsdklajl','e10adc3949ba59abbe56e057f20f883e','0','','','','4546554@qq.com','普通用户','','2015-09-03');");

require("../../inc/footer.php");
?>