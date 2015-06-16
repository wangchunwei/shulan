<style>
    #link_address{
        width:400px;
        height:500px;
        margin:0 auto;
    }
</style>
<script src="http://api.map.baidu.com/api?v=1.4"></script>
<div id="link_adress"></div>   
    <script language="javascript" type="text/javascript">
//功能：拖拽、放大缩小（鼠标、键盘、屏幕）、路线、周边
   var link_map = new BMap.Map("limk_adress");
   link_map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);//实例化地图
  var link_control = new BMap.MapTypeControl();
  link_map.addControl(link_control);
</script>



