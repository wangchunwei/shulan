
<style type="text/css">
#allmap {width: 60%;height: 65%;overflow: hidden;margin:10px 50px ;font-family:"微软雅黑";}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=GPYTEfGSmhCcrYmNEgAzX7UQ">
</script>


<div class="row">
<div class="col-md-10 col-sm-offset-1">
    <div class="address-bg">
<br>
<br>
        <div id="allmap"></div>

<script type="text/javascript">
  // 百度地图API功能

    
    var map = new BMap.Map("allmap");
  var point = new BMap.Point(125.335962,43.901434);
    map.addControl(new BMap.MapTypeControl()); 
  map.centerAndZoom(point, 15);
  var marker = new BMap.Marker(point);  // 创建标注
  map.addOverlay(marker);               // 将标注添加到地图中
  marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    map.enableScrollWheelZoom(true);  
</script>

        </div>
    </div>
    </div>

