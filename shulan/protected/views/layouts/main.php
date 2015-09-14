<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>束兰皮草官网主页_束兰皮草-长春束兰皮草官网</title>
<meta name="description" content="束兰皮草，中国皮草驰名商标，长春束兰皮草分公司">
<meta name="keywords" content="束兰皮草官网，长春束兰皮草，束兰国际,中国著名品牌,中国裘皮衣王,中国真皮标志品牌产品,中国皮革协会毛皮专业委员会副会长单位,裘皮,皮草,皮衣,貂皮大衣,尼克服,羊绒大衣,狐狸皮,毛领,时装,衣服,服饰,时尚服装">

<!-- Le styles -->
    <link rel="shortcut icon" href="../../../../favicon.ico"/>
    <link rel="bookmark" href="../../../../favicon.ico"/>

<link href="../../../../bootstrap/css/bootstrap.css" rel="stylesheet">
<link href=".../../../../../body.css" rel="stylesheet">
<link href="../../../fe/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='../../../fe/css/lob.css' rel='stylesheet' type='text/css'>
<link href='../../../fe/css/open.css' rel='stylesheet' type='text/css'>
<link href='../../../fe/css/jose.css' rel='stylesheet' type='text/css'>


<link href="../../../../bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<script src="../../../../bootstrap/js/jquery.js"></script>
<script src="../../../../bootstrap/js/bootstrap.min.js"></script>
    
    
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72"
	href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114"
	href="images/apple-touch-icon-114x114.png">
</head>
<?php
//菜单高亮相关
$url = Yii::app()->request->getUrl();
$meau = array(
    '/shulan/site/index/'    => '首页',
    '/shulan/site/meau/'    => '精品赏析',
    '/shulan/site/culture/' => '品牌文化',  
    '/shulan/site/history/' => '品牌传奇',
    '/shulan/site/safe/'    => '保养常识',
    '/shulan/site/work/'    => '精工细作',
    '/shulan/site/show/'    => '精品秀场',
    // '/shulan/site/status/'  => '品牌动态',
    '/shulan/site/gallery/' => '品牌展示',
    );
?>

<body>
  <div class="header" id="home">
		<div class="container">
    
		<div class="header-top">
		<div class="top-menu">
	
		<ul align="center">
        <font face="微软雅黑" size="3">
            
<?php
//logo in the middle
	$num = count($meau);
    $order = 0;
    foreach($meau as $k => $v) {
        $order ++;
        if($order == intval($num/2) + 1) {
            echo "<a href='/'> <img src='../../../../images/shulan/logo.png' width='100px' height='70px' title='回到首页'/></a>";            
        }
        if(strpos($k, $url) === false){
            echo "<li><a href='{$k}' >{$v}</a></li><label>/</label>";	   
        }else{
            echo "<li><a href='{$k}' class='active'>{$v}</a></li><label>/</label>";
        }
    }
?>
            </font>
    </ul>

     <!-- script for menu -->
				
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>
	<!-- //script for menu -->
     </div>
            </div>
      </div>  

<?php echo $content; ?>
        
<?php 
if(strpos($url, "index") == true || strpos($url, "cms") == true) {
    Yii::app()->end();   
    
}
?>
<style>
footer{
    position:static!important;
    }
</style>
<footer style="color:white;position: absolute;bottom: 0;width: 1280px;margin: 0 auto;" align="center">
	<div class="thumbnail" style="background-color:transparent; color:white;margin-bottom: 0;">
        <p align = 'center' style="color:white">
        <a href="/shulan/site/law/" rel="nofollow"><font color=white>法律声明</font></a>&nbsp&nbsp&nbsp&nbsp
        <!--<a href="/shulan/site/about/" rel="nofollow"><font color=white>关于束兰</font></a>&nbsp&nbsp&nbsp&nbsp-->
        <a href="/shulan/site/address/" rel="nofollow"><font color=white>联系我们</font></a>&nbsp&nbsp&nbsp&nbsp
        <a href="/shulan/site/suggest/" rel="nofollow"><font color=white>建议信箱</font></a>&nbsp&nbsp&nbsp&nbsp        
        <a href="#"  data-toggle="modal" data-target="#feel"><font color=white>微信公众平台</font></a>&nbsp&nbsp&nbsp&nbsp
        <a href="/shulan/cms/index/" rel="nofollow"><font color=white>登录</font></a>&nbsp&nbsp&nbsp&nbsp
        &copy; 2015 www.shulancc.com;
    </div>
</footer>      
        
<!-- Modal -->
<div class="modal fade" id="feel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" align="center">扫一扫，获得微信公众号</h4>
      </div>
      <div class="modal-body" align="center">
        
        <img  src="./../../../images/shulan/erweima.JPG" title="欢迎扫一扫微信二维码" width="320px" height="320px">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>        
        