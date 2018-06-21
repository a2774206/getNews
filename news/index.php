<?php
header('Content-type:text/html;charset=utf-8');
header('Access-Control-Allow-Origin:*');
require './phpQuery/phpQuery.php';

//$callback = $_GET['callback'];
class dayNew {
   function __construct($news) {
   		/*千龙网头条*/
		$html = phpQuery::newDocumentFile("http://www.qianlong.com/tt/");
		$list = pq(".list6:eq(0) li");
		foreach($list as $k=>$v){
		   	$this->news[$k]['title'] = pq($v)->find('a')->attr('title');
		 	$this->news[$k]['url'] = pq($v)->find('a')->attr('href');
		    $this->news[$k]['time'] = pq($v)->find('.date')->text();
		}
	}
}

class beiJingQl {
   function __construct($todaynews) {
   		/*千龙网 北京今日新闻*/
		$html = phpQuery::newDocumentFile("http://www.qianlong.com/jrbj/");
		$list = pq(".list6:eq(0) li");
		foreach($list as $k=>$v){
		   	$this->todaynews[$k]['title'] = pq($v)->find('a')->attr('title');
		 	$this->todaynews[$k]['url'] = pq($v)->find('a')->attr('href');
		    $this->todaynews[$k]['time'] = pq($v)->find('.date')->text();
		}
	}
}

class chinaQl{
   function __construct($china) {
   		/*千龙网 国家新闻*/
		$html = phpQuery::newDocumentFile("http://www.qianlong.com/jrzg/");
		$list = pq(".list6:eq(0) li");
		foreach($list as $k=>$v){
		   	$this->china[$k]['title'] = pq($v)->find('a')->attr('title');
		 	$this->china[$k]['url'] = pq($v)->find('a')->attr('href');
		    $this->china[$k]['time'] = pq($v)->find('.date')->text();
		}
	}
}

class worldNews{
   function __construct($world) {
   		/*千龙网 国家新闻*/
		$html = phpQuery::newDocumentFile("http://www.qianlong.com/jrsj/");
		$list = pq(".list6:eq(0) li");
		foreach($list as $k=>$v){
		   	$this->world[$k]['title'] = pq($v)->find('a')->attr('title');
		 	$this->world[$k]['url'] = pq($v)->find('a')->attr('href');
		    $this->world[$k]['time'] = pq($v)->find('.date')->text();
		}
	}
}



/*千龙网头条*/
$day = new dayNew(array());
echo '[';
echo json_encode($day);
echo ',';
//var_dump($day);

/*千龙网 北京今日新闻*/
$bjQl = new beiJingQl(array());
echo json_encode($bjQl);
echo ',';

/*千龙国内新闻*/
$cnQl = new chinaQl(array());
echo json_encode($cnQl);
echo ',';


/*千龙世界新闻*/
$wd = new worldNews(array());
echo json_encode($wd);
echo ']';
//echo $callback.'('.json_encode($day).')';