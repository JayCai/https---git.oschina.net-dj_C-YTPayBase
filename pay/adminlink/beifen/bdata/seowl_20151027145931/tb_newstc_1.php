<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tb_newstc`;");
E_C("CREATE TABLE `tb_newstc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `leixing` varchar(50) NOT NULL,
  `taocanzy` text NOT NULL,
  `zhouqi` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `scprice` varchar(50) NOT NULL,
  `beizhu` varchar(200) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8");
E_D("replace into `tb_newstc` values('23','游戏套餐','凤凰游戏、人民游戏、多玩游戏、网易游戏，新浪游戏，腾讯游戏，中华网游戏，电玩巴士，百灵游戏，铁血游戏，太平洋游戏，速途网游戏，52pk，易游网，多游网，萤火虫游戏网，一起乐，盒子游戏，山东游戏，爱酷游，杰瑞网，热游网，叶子猪，123新手卡，一起玩，515游戏网，游鱼网，40407，云雀宅游戏网，西北游戏网，公会网，免费网游中心，pm173，博游游戏网，游戏米米， 随机出9个','永久','1500','1800','','2015-09-02');");
E_D("replace into `tb_newstc` values('24','旅游套餐','腾讯旅游，艺龙旅游，网易旅游，凤凰旅游，新华旅游，乐途，驴妈妈，中国航空旅游网，中国经济网旅游，慧聪旅游，百灵旅游，51766旅游网,河南网旅游，中国景点网，大众网旅游，中华网旅游，中国旅游新闻，江门旅游， 旅游博览 汉网旅游 &nbsp;随机出10个。','永久','1600','1900','','2015-09-02');");
E_D("replace into `tb_newstc` values('25','母婴育儿套餐','凤凰亲子，腾讯育儿，网易亲子，新华亲子，纬度女性育儿，太平洋亲子，西安爱贝网，宝宝树，妈妈网，摇篮网，中国亲子网，东方网女性，中国育儿网，宝宝妈妈网，妈妈谷育儿网，中国育婴童，父母网，产后女性网，中国婴童网，中国女性网，爱美网育儿，中国伊人网，妈咪爱婴网，乐贝育儿网，妈咪宝贝育儿网 早教网 妈咪网 随机出10个站点。','永久','1800','2200','','2015-09-02');");
E_D("replace into `tb_newstc` values('26','娱乐类套餐','新浪娱乐，新华网娱乐，中新网娱乐，腾讯娱乐，千龙娱乐，中国经济娱乐，tom娱乐，中华网娱乐，雅虎娱乐，网易娱乐，凤凰娱乐，搜狐娱乐，北青网娱乐，msn娱乐，环球网娱乐，人民娱乐，淘宝娱乐，中国网娱乐，大众网娱乐，中国日报娱乐，东方网娱乐，随机12家','永久','2000','2500','','2015-09-02');");
E_D("replace into `tb_newstc` values('27','汽车类套餐','人民网汽车 雅虎汽车 &nbsp;新浪汽车 &nbsp;网易汽车 &nbsp;凤凰汽车 和讯汽车 新华汽车 汽车之家 &nbsp;TOM汽车 &nbsp;易车网 &nbsp;太平洋汽车 21cn汽车 车神榜 爱卡汽车 深圳车城网 玩车网 汽车点评网 中国汽车消费网（改名U客网）随机11家','永久','2000','2500','','2015-09-02');");
E_D("replace into `tb_newstc` values('28',' 女性时尚类套餐	','搜狐女人 网易女人 中国经济网品牌 中国网时尚美好女性网 秀美网 东方网时尚 太平洋女性 MSN时尚 YOKA时尚 瑞丽女性 女人志 腾讯女性 凤凰时尚 她生活 雅虎时尚 时尚网 ELLE中文 时尚中国 爱美网 米娜时尚网 妆点网 千龙风尚 tom她风尚 &nbsp;裴贝女性网 女人街 女人邦 品牌世家 &nbsp;薄荷女性 产后女性网 &nbsp;随机出10家','永久','1800','2300','','2015-09-02');");
E_D("replace into `tb_newstc` values('29','教育类套餐','新华教育，中华教育，中青在线教育，腾讯教育，新浪教育，网易读书/教育，凤凰教育，搜狐教育，上海热线教育，凤凰出国，和讯出国，慧聪教育，北青教育 随机出8个。','永久','2000','2500','','2015-09-02');");
E_D("replace into `tb_newstc` values('30','家居房产类套餐','网易家居，搜狐焦点，新浪家居，慧聪网家居，凤凰家居，瑞丽家居，家天下，msn家居，搜狐家居，安居啦，腾讯亚太家居，搜房网，蓝房网，新浪地产，中国家装家居网，太平洋家居，中华网家居，猎房网 随机出8个','永久','1200','1600','','2015-09-02');");
E_D("replace into `tb_newstc` values('31','医疗健康大套餐','腾讯健康 凤凰健康，新华健康，瑞丽，时尚网，太平洋女性，39健康，中华网健康，中国网健康，中广播网健康，21cn，央视网，云南网健康，99健康，中国健康网，携手健康，寻医问药，中国健康网，腾讯湘潭 新浪湖南 .大众健康网 .湘潭在线.雅虎健康.网易河北健康.求医网 &nbsp;随机出12个','永久','2000','2500','','2015-09-02');");
E_D("replace into `tb_newstc` values('32','新闻类大套餐','新浪资讯，搜狐，新华网，人民网，中国网，中华网，中国经济网，中国日报，华龙网，新民网，中国经济新闻，中国经营网，21cn，msn中国，北方网，南方网，光明网，东方网，中金在线，赛迪网，慧聪网，中国广播网，大洋网，慧聪网，中青网，全景网，和讯网， 随机出12个。','永久','2000','2500','','2015-09-02');");
E_D("replace into `tb_newstc` values('33','财经类套餐','网易+华股财经+齐鲁网+西江网+白鹿网+河南100度+深圳热线+赤峰广播电视网+北国网+中国贸易新闻+中国企业新闻网+中国发展网+重庆财经+京华网+鲁中网+消费日报网+中国经济网+浙江财经+湖北财经（一共19个）','永久','1000','1500','','2015-09-02');");
E_D("replace into `tb_newstc` values('34','科技低价打包','硅谷网+it世界+电脑之家+飞象网+小熊在线+比特网+赛迪网+it168+计世网+it专家+中关村商情+IDC服务网+科易网+国华新闻网科技（一共14个）','永久','1000','1500','','2015-09-02');");
E_D("replace into `tb_newstc` values('35','医疗套餐','39健康网+北青健康网+大河网+豫青网+汉网+商都网+中原网+中华网+兰州新闻网+商界网（一共10个）','永久','560','1000','','2015-09-02');");
E_D("replace into `tb_newstc` values('36','顶级豪华套餐','新浪网+凤凰网+搜狐+网易+腾讯+新华网+大公网+中国经济网+中国广播网+中新网+中青网+消费日报网+华股财经+慧聪网+东南网+中国新闻采编网+第一新闻网+今视网+IT168+新快报+东北新闻网+宜宾新闻网+中国质量新闻网+爱丽婚嫁网+中国网江苏+西江网+南充人网+浙江在线+红网+千华网+新疆日报+黑龙江电视台+九江传媒网+赤峰广播电视网+大河网+tom网+北国网+中国企业信息网+中国贸易新闻+齐鲁热线+今晚报+新浪家居+黄河新闻网+漳州新闻网+北京热线010+企业雅虎 +中国企业新闻网+中国发展网+京华网+鲁中网+中国吉安网+中华网+豫青网+汉网+商都网+中原网+硅谷网+北京视窗+中国日报网+长江网+商界网+国华新闻网+华夏生活+现代生活+新中网+中国网+中国前沿资讯网+39健康网+北青网焦点新闻+人民经济网（70个）+发布150家高权重地方新闻站点大首页或者首页频道','永久','7000','12000','','2015-09-02');");
E_D("replace into `tb_newstc` values('37','强势至尊套餐','新浪网+网易+腾讯+搜狐+凤凰网+新华网+中国日报网+中国经济网+大公网+和讯+中国广播网+中新网+中青网+华股财经+慧聪网+东南网+今视网+新快报+中国新闻采编网+第一新闻网+东北新闻网+宜宾新闻网+中国贸易新闻网+中国网-江苏+西江网+南充人网+浙江在线+大河网+千华网+新疆日报+黑龙江电视台+九江传媒网+赤峰广播电视网+齐鲁热线+今晚报+新浪家居+黄河新闻网+新中网+中国企业新闻网+中国发展网+京华网+鲁中网+中华网+豫青网+汉网+商都网+中原网+消费日报网+商界网+华夏生活+北青网焦点新闻+中国企业信息网+人民经济网+北京视窗+国华新闻网+中国前沿资讯网（56个）+发布150家高权重地方新闻站点大首页或者首页频道','永久','6000','11000','','2015-09-02');");
E_D("replace into `tb_newstc` values('38','地方门户首页套餐','发布150家高权重地方新闻站点大首页或者首页频道（详细站点名单请联系客服索取查看）','永久','5000','8000','','2015-09-02');");
E_D("replace into `tb_newstc` values('39','巨实惠新闻套餐','新浪网+央广网+搜狐网+腾讯+新华网+凤凰网+中新网+中青网+中国网+中国日报网+中国经济网+中国企业新闻网+齐鲁网+江苏都市网+21CN财经+消费日报网+京华网+今晚报+今视网+黄河新闻网+西江网+九江新闻网+中国电力电子产业网+社区中国网+新中网+国华新闻网+兰州新闻网+汉网+商都网+中原网+东北新闻网+河北广电+大公网+TOM新闻+慧聪+商界+长江网+鲁中网+中国吉安网+中华网（一共40个）','永久','2000','5000','','2015-09-02');");
E_D("replace into `tb_newstc` values('40','巨优惠大BOSS站','新浪网+网易网+凤凰网+搜狐网+新华网+中新网+中国网+中国经济网+中国日报网+中国创新网+今晚报+京华网+消费日报网+21CN财经+宁夏电视台+中华网+中国商报网+社区中国网+新中网+国华新闻网（一共20个）','永久','1000','3000','','2015-09-02');");
E_D("replace into `tb_newstc` values('41','优惠套餐四','新浪网+腾讯+搜狐+中国广播网+凤凰网+大公网+中新网+中国网+中国经济网+中国日报网+蜀南新闻网+今晚报+消费日报网+中国企业新闻网网+东北新闻网+21CN财经+西江网+苏州都市网+浙江在线+九江新闻网+宜宾新闻网（一共21个）（11个新闻源站、10个网页站）','永久','1200','2800','','2015-09-02');");
E_D("replace into `tb_newstc` values('42','优惠套餐三','新浪网+网易网+新华网+凤凰网+中新网（中国新闻网）+中国网+中国日报网+中国经济网+中国企业新闻网+今晚网+21CN财经+京华网+商界网+社区中国网+国华新闻网+新中网（一共16个）','永久','800','1800','','2015-09-02');");
E_D("replace into `tb_newstc` values('43','优惠套餐二','腾讯+搜狐+新浪+中国日报网+中国经济网+消费日报网+商界网+新中网+国华新闻网（一共9个）','永久','350','980','','2015-09-02');");
E_D("replace into `tb_newstc` values('44','优惠套餐一','搜狐+中国经济网+中国日报网+消费日报+第一新闻网+北京视窗+中国商机信息网（一共7个）','永久','250','880','','2015-09-02');");

require("../../inc/footer.php");
?>