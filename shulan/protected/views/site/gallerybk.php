</div> 

<link href="http://1.circlegame.sinaapp.com/shulan/protected/jquery.booklet.latest.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />
<link rel="stylesheet" type="text/css" href="../../../../bootstrap/css/demo.css" />
<link rel="stylesheet" type="text/css" href="../../../../bootstrap/css/style.css" />
<script type="text/javascript" src="../../../../bootstrap/js/modernizr.custom.53451.js"></script>
 
<script> window.jQuery || document.write('<script src="http://1.circlegame.sinaapp.com/shulan/protected/jquery-2.1.0.min.js"><\/script>') </script>
<script> window.jQuery.ui || document.write('<script src="http://1.circlegame.sinaapp.com/shulan/protected/jquery-ui-1.10.4.min.js"><\/script>') </script>
 
<!-- Booklet -->
<script src="http://1.circlegame.sinaapp.com/shulan/protected/jquery.easing.1.3.js"></script>
<script src="http://1.circlegame.sinaapp.com/shulan/protected/jquery.booklet.latest.min.js"></script>
<style>
    .navbar{
        margin-bottom:0;
    }
</style>
<div id="mybook">
    <div> 
      <a href="#"><img src="http://circlegame.sinaapp.com/images/gallery/01.jpg" alt="image01" width="100%" height="70%"><div>精品皮草1</div></a>
    </div>
    <div> 
      <a href="#"><img src="http://circlegame.sinaapp.com/images/gallery/02.jpg" alt="image02" width="100%" height="60%"><div>精品皮草2</div></a>
    </div>
    <div> 
     <a href="#"><img src="http://circlegame.sinaapp.com/images/gallery/03.jpg" alt="image03" width="100%" height="70%"><div>精品皮草1</div></a>
    </div>
  
    <div> 
     <a href="#"><img src="http://circlegame.sinaapp.com/images/gallery/04.jpg" alt="image04" width="100%" height="70%"><div>精品皮草1</div></a>
    </div>
    <div> 
    <a href="#"><img src="http://circlegame.sinaapp.com/images/gallery/05.jpg" alt="image05" width="100%" height="70%"><div>精品皮草1</div></a>
    </div>
     <div> 
    <a href="#"><img src="http://circlegame.sinaapp.com/images/gallery/06.jpg" alt="image06" width="100%" height="70%"><div>精品皮草1</div></a>
    </div>
     <div> 
    <a href="#"><img src="http://circlegame.sinaapp.com/images/gallery/07.jpg" alt="image07" width="100%" height="70%"><div>精品皮草1</div></a>
    </div>
     <div> 
    <a href="#"><img src="http://circlegame.sinaapp.com/images/gallery/08.jpg" alt="image08" width="100%" height="70%"><div>精品皮草1</div></a>
    </div>
     <div> 
    <a href="#"><img src="http://circlegame.sinaapp.com/images/gallery/09.jpg" alt="image09" width="100%" height="70%"><div>精品皮草1</div></a>
    </div>
     <div> 
    <a href="#"><img src="http://circlegame.sinaapp.com/images/gallery/10.jpg" alt="image10" width="100%" height="70%"><div>精品皮草1</div></a>
    </div>
     <div> 
    <a href="#"><img src="http://circlegame.sinaapp.com/images/gallery/11.jpg" alt="image11" width="100%" height="70%"><div>精品皮草1</div></a>
    </div>
      <div> 
    <a href="#"><img src="http://circlegame.sinaapp.com/images/gallery/12.jpg" alt="image12" width="100%" height="70%"><div>精品皮草1</div></a>
    </div>
</div>
<script type="text/javascript">
var widths= document.documentElement.clientWidth;
var heights= document.documentElement.clientHeight*0.85;
    $(function() {
        $('#mybook').booklet({ width: widths,height:heights,hovers: true,hoverWidth: 150, hoverTreshold: 0.10, auto:true,speed: 1000,easing: "easeInOutExpo" ,pagePadding:0});
});

    $(document).ready(function(){
		var lens=$("#mybook a img").length;
		for(var i=0;i<lens;i++){
			$("#mybook a img")[i].height= heights;
			$("#mybook a img")[i].width= widths;
		}
	 
});
</script>



                


<script type="text/javascript" src="../../../../bootstrap/js/jquery.gallery.js"></script>
<script type="text/javascript">
    $(function() {
        $('#dg-container').gallery();
    });
</script>
