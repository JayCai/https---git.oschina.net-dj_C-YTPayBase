<?php
$tbc=$_GET['tb'];
switch($tbc){
  case 'tb_news':
  $name="新闻资源"; 
  break;
  case 'tb_weibo':
  $name="微博资源"; 
  break;
  case 'tb_weixin':
  $name="微信资源"; 
  break;
  case 'tb_bbs':
  $name="论坛套餐"; 
  break;
  case 'tb_bbszhiding':
  $name="论坛置顶加精"; 
  break;
  case 'tb_bbsdingtie':
  $name="论坛水军顶贴"; 
  break;
  case 'tb_zonghe':
  $name="综合套餐"; 
  break;
  case 'tb_newstc':
  $name="新闻套餐"; 
  break;
  case 'tb_dxwenzhang':
  $name="代写文章"; 
  break;
}

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename='.$name.'.xls');
header('Pragma: no-cache');
header('Expires: 0');

require_once 'config.php';
function daochu($tb){

         $sql="select * from $tb order by id asc";
         $query=mysql_query($sql);
	     while($row=mysql_fetch_row($query)){
         $list[]=$row;
		 }

		foreach ($list as $v) {
		echo iconv('utf-8', 'gbk', implode("\t", $v)), "\n";		
		}

}


$tb=$_GET['tb'];

switch($tb){
  case 'tb_news':
  $nav = array('ID','媒体','媒体名称','入口','分类','地区','链接','会员价','可否带链接','是否收录','备注','时间');
  echo iconv('utf-8', 'gbk', implode("\t", $nav)), "\n";
  daochu($tb);
  break;
  case 'tb_weibo':
  $nav = array('ID','微博','分类','地区','微博名称','链接','粉丝数','直发报价','转发报价','时间');
  echo iconv('utf-8', 'gbk', implode("\t", $nav)), "\n";
  daochu($tb);
  break;
  case 'tb_weixin':
  $nav = array('ID','分类','地区','微信名称','微信号','粉丝数','单图文报价','多图文报价','备注','时间');
  echo iconv('utf-8', 'gbk', implode("\t", $nav)), "\n";
  daochu($tb);
  break;
  case 'tb_bbs':
  $nav = array('ID','论坛套餐','论坛类型','发布条数','周期','会员价','是否收录','备注','时间');
  echo iconv('utf-8', 'gbk', implode("\t", $nav)), "\n";
  daochu($tb);
  break;
  case 'tb_bbszhiding':
  $nav = array('ID','论坛','版块','地区','版块地址','效果','置顶价格','加精价格','备注','时间');
  echo iconv('utf-8', 'gbk', implode("\t", $nav)), "\n";
  daochu($tb);
  break;
  case 'tb_bbsdingtie':
  $nav = array('ID','论坛','论坛地址','条数','周期','会员价','备注','时间');
  echo iconv('utf-8', 'gbk', implode("\t", $nav)), "\n";
  daochu($tb);
  break;
  case 'tb_zonghe':
  $nav = array('ID','类型','套餐资源','周期','会员价','市场价','备注','时间');
  echo iconv('utf-8', 'gbk', implode("\t", $nav)), "\n";
  daochu($tb);
  break;
  case 'tb_newstc':
  $nav = array('ID','类型','套餐资源','周期','会员价','市场价','备注','时间');
  echo iconv('utf-8', 'gbk', implode("\t", $nav)), "\n";
  daochu($tb);
  break;
  case 'tb_dxwenzhang':
  $nav = array('ID','字数','周期','会员价','市场价','备注','时间');
  echo iconv('utf-8', 'gbk', implode("\t", $nav)), "\n";
  daochu($tb);
  break;

}

?>

