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
    '/shulan/site/index' => '首页',
    '/shulan/site/law/'     => '法律声明',
    '/shulan/site/safe/'    => '保养常识',
    '/shulan/site/history/' => '品牌传奇',
    '/shulan/site/culture/' => '品牌文化',
    '/shulan/site/show/'    => '精品秀场',
    '/shulan/site/status/'    => '品牌动态',
    '/shulan/site/gallery/'   => '品牌展示',
    '/shulan/site/address/'   => '地址',
    '/shulan/site/suggest/'   => '建议',
    );
?>



<body>
    <div class="navbar-wrapper" >
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a href="/"> <img src="../../../../images/shulan/logo.png" width="80px" height="50px"/></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                  <?php
                    foreach($meau as $k => $v) {
                        if(strpos($k, $url) === false){
                            echo "<li><a href='{$k}'>{$v}</a></li>";       
                        }else{
                            echo "<li class='active'><a href='{$k}'>{$v}</a></li>";  
                        }   
                    }
                    ?>
              </ul>
            </div>
          
        </nav>

<?php echo $content; ?>
        
<footer>
    <div class="thumbnail" style="background-color: rgb(142, 52, 52); color:white">
        <p align = 'center' style="color:white">
        <a href="/about/" rel="nofollow"><font color=white>法律声明</font></a>&nbsp&nbsp&nbsp&nbsp
        <a href="/about/" rel="nofollow"><font color=white>关于束兰</font></a>&nbsp&nbsp&nbsp&nbsp
        <a href="/about/" rel="nofollow"><font color=white>人力资源</font></a>&nbsp&nbsp&nbsp&nbsp
        <a href="/about/" rel="nofollow"><font color=white>建议信箱</font></a>&nbsp&nbsp&nbsp&nbsp
        <a href="/about/" rel="nofollow"><font color=white>精品店</font></a>&nbsp&nbsp&nbsp&nbsp
        <a href="/about/" rel="nofollow"><font color=white>官方微博</font></a>&nbsp&nbsp&nbsp&nbsp
        </p>
        <font size=4><p align = 'center'>&copy; 2015 www.shulancc.com;</p></font>
    </div>
</footer>      
        
        
        
        