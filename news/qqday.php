<?php
header('Content-type:text/html;charset=utf-8');
header('Access-Control-Allow-Origin:*');
require './phpQuery/phpQuery.php';

//$callback = $_GET['callback'];
$html = phpQuery::newDocumentFile('https://www.toutiao.com/api/pc/feed/?category=news_hot&utm_source=toutiao&widen=1&max_behot_time=1529565397&max_behot_time_tmp=1529565397&tadrequire=true&as=A1855B129BE5121&cp=5B2B759142811E1&_signature=886AngAAqO-k-cjF5KlVWvPOgI');
		
		
		echo $html;

//class beiJingQl {
// function __construct($china) {
// 		/*新浪 国内新闻*/
//		$html = phpQuery::newDocumentFile("http://news.sina.com.cn/china/");
//		$list = pq("#subShowContent1_static .news-item");
//		foreach($list as $k=>$v){
//		   	$this->china[$k]['title'] = pq($v)->find('h2 a')->text();
//		 	$this->china[$k]['url'] = pq($v)->find('h2 a')->attr('href');
//		    $this->china[$k]['time'] = pq($v)->find('.time')->text();
//		}
//	}
//}
//class chinaQl{
// function __construct($world) {
// 		/*新浪 国际新闻*/
//		$html = phpQuery::newDocumentFile("http://news.sina.com.cn/world/");
//		$list = pq("#subShowContent1_static .news-item");
//		foreach($list as $k=>$v){
//		   	$this->world[$k]['title'] = pq($v)->find('h2 a')->text();
//		 	$this->world[$k]['url'] = pq($v)->find('h2 a')->attr('href');
//		    $this->world[$k]['time'] = pq($v)->find('.time')->text();
//		}
//	}
//}
//
//class worldNews{
// function __construct($world) {
// 		/*千龙网 国家新闻*/
//		$html = phpQuery::newDocumentFile("http://www.qianlong.com/jrsj/");
//		$list = pq(".list6:eq(0) li");
//		foreach($list as $k=>$v){
//		   	$this->world[$k]['title'] = pq($v)->find('a')->attr('title');
//		 	$this->world[$k]['url'] = pq($v)->find('a')->attr('href');
//		    $this->world[$k]['time'] = pq($v)->find('.date')->text();
//		}
//	}
//}



/*新浪热闻*/
//$day = new dayNew(array());
////echo '[';
//
//echo json_encode($day);
//echo ',';
//var_dump($day);
//
/////*千龙网 北京今日新闻*/
//$bjQl = new beiJingQl(array());
////var_dump($bjQl);
//echo json_encode($bjQl);
//echo ',';
////
/////*千龙国内新闻*/
//$cnQl = new chinaQl(array());
////var_dump($cnQl);
//echo json_encode($cnQl);
//echo ']';
//
//
///*千龙世界新闻*/
//$wd = new worldNews(array());
//echo json_encode($wd);
//echo ']';
////echo $callback.'('.json_encode($day).')';