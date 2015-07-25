<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>束兰官网</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

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
            echo "<a href='/'> <img src='../../../../images/shulan/logo.png' width='100px' height='70px'/></a>";            
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
if(strpos($url, "index") == true) {
    Yii::app()->end();   
    
}
?>
<footer>
    <div class="thumbnail" style="background-color: #3f454d; color:white;margin-bottom: 0;">
        <p align = 'center' style="color:white">
        <a href="/shulan/site/law/" rel="nofollow"><font color=white>法律声明</font></a>&nbsp&nbsp&nbsp&nbsp
        <a href="/shulan/site/about/" rel="nofollow"><font color=white>关于束兰</font></a>&nbsp&nbsp&nbsp&nbsp
        <a href="/shulan/site/address/" rel="nofollow"><font color=white>联系我们</font></a>&nbsp&nbsp&nbsp&nbsp
        <a href="/shulan/site/suggest/" rel="nofollow"><font color=white>建议信箱</font></a>&nbsp&nbsp&nbsp&nbsp
        <a href="#" rel="nofollow"><font color=white>精品店</font></a>&nbsp&nbsp&nbsp&nbsp
        <a href="#" rel="nofollow"><font color=white>官方微博</font></a>&nbsp&nbsp&nbsp&nbsp
        &copy; 2015 www.shulancc.com;
    </div>
</footer>      
        
        
        
        