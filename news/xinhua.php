<?php
header('Content-type:text/html;charset=utf-8');
header('Access-Control-Allow-Origin:*');
require './phpQuery/phpQuery.php';

//$callback = $_GET['callback'];
class dayNew {
   function __construct($news) {
   		/*新华网*/
		$html = phpQuery::newDocumentFile("http://www.bj.xinhuanet.com/pages/subpage/kbj/");
		$list = pq(".xpage-content li");
//		$list1 =  pq(".news-1 li");
		echo $list;
		foreach($list as $k=>$v){
		   	$this->news[$k]['title'] = pq($v)->find('.is-size-6-mobile')->text();
		 	$this->news[$k]['url'] = pq($v)->find('.is-size-6-mobile')->attr('href');
		 	$this->news[$k]['time'] = pq($v)->find('span')->text();
		  
		}
		
	}
}





/*新浪热闻*/
$day = new dayNew(array());
//echo '[';
echo json_encode($day);
//echo ',';
//var_dump($day);

