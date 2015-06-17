

<div class="row">
<div class="col-md-10 col-sm-offset-1">
<div class="thumbnail" style="background-color:rgb(89, 82, 82)">
    <div class="bg">
        
    <div class="row"  style="margin:200px auto auto auto;">
        
    <div class="col-md-10 col-md-offset-1" >  
        <form id="myForm" name="myForm" onmouseover="stepIn(this.id)" onmouseout="stepOut(this.id)">
      <div class="form-group">
        <label for="exampleInputText" style="color:white">昵称</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="必填">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" style="color:white">邮箱</label>
        <input type="email" class="form-control" id="email" name="mail" placeholder="必填">
      </div>
      <div class="form-group">
        <label for="exampleInputText" style="color:white">城市</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="必填">
      </div>
      <div class="form-group">
        <label for="exampleInputPhone1" style="color:white">手机</label>
        <input type="number" class="form-control" id="phone" name="phone">
      </div>
      <div class="form-group">
          <label for="exampleInputText" style="color:white">建议内容</label>
        <textarea class="form-control" rows="3" id="content" name="content" placeholder="必填"></textarea>
      </div>
     
    	</form>
            <div class="col-md-2 ">
                <input class="btn btn-primary" style="background-color:black" type="button" id="formButton" value="提交"/>
        	</div>
        </div>
        </div>
        
        
        
    </div>
    <div class="clearfix"></div>
	<div style="background-color:rgb(89, 82, 82)">
	</div>	
</div>
</div>
</div>

<script>
    
       
$('#formButton').click(function() {
    $.ajax({
        url: '/shulan/site/setSuggest/',
        type: "POST",
        dataType: "json",
        
        data: $('#myForm').serialize(),
        success: function (data) {
            var msg=data['msg'];
            sAlert(msg);
        },
        
        error: function(x, e) {
            sAlert("提交成功！！感谢您的宝贵意见");
        }
    });
}); 
</script>

<script type="text/javascript" language="javascript">
//弹出框效果图，暂时不用
//more javascript from http://www.smallrain.net
function sAlert(str){
var msgw,msgh,bordercolor;
msgw=300;//提示窗口的宽度
msgh=200;//提示窗口的高度
titleheight=25 //提示窗口标题高度
bordercolor="black";//提示窗口的边框颜色
titlecolor="#c51100";//提示窗口的标题颜色

var sWidth,sHeight;
sWidth=screen.width;
sHeight=screen.height;

var bgObj=document.createElement("div");
bgObj.setAttribute('id','bgDiv');
bgObj.style.position="absolute";
bgObj.style.top="0";
bgObj.style.background="#cccccc";
bgObj.style.filter="progid:DXImageTransform.Microsoft.Alpha(style=3,opacity=25,finishOpacity=75";
bgObj.style.opacity="0.6";
bgObj.style.left="0";
bgObj.style.width=sWidth + "px";
bgObj.style.height=sHeight + "px";
bgObj.style.zIndex = "10000";
document.body.appendChild(bgObj);

var msgObj=document.createElement("div")
msgObj.setAttribute("id","msgDiv");
msgObj.setAttribute("align","center");
msgObj.style.background="white";
msgObj.style.border="1px solid " + bordercolor;
msgObj.style.position = "absolute";
msgObj.style.left = "50%";
msgObj.style.top = "50%";
msgObj.style.font="12px/1.6em Verdana, Geneva, Arial, Helvetica, sans-serif";
msgObj.style.marginLeft = "-225px" ;
msgObj.style.marginTop = -75+document.documentElement.scrollTop+"px";
msgObj.style.width = msgw + "px";
msgObj.style.height =msgh + "px";
msgObj.style.textAlign = "center";
msgObj.style.lineHeight ="25px";
msgObj.style.zIndex = "10001";

   var title=document.createElement("h4");
   title.setAttribute("id","msgTitle");
   title.setAttribute("align","right");
   title.style.margin="0";
   title.style.padding="3px";
   title.style.background=bordercolor;
   title.style.filter="progid:DXImageTransform.Microsoft.Alpha(startX=20, startY=20, finishX=100, finishY=100,style=1,opacity=75,finishOpacity=100);";
   title.style.opacity="0.75";
   title.style.border="1px solid " + bordercolor;
   title.style.height="18px";
   title.style.font="12px Verdana, Geneva, Arial, Helvetica, sans-serif";
   title.style.color="white";
   title.style.cursor="pointer";
   title.innerHTML="关闭";
   title.onclick=function(){
document.body.removeChild(bgObj);
document.getElementById("msgDiv").removeChild(title);
document.body.removeChild(msgObj);
}
   document.body.appendChild(msgObj);
   document.getElementById("msgDiv").appendChild(title);
   var txt=document.createElement("p");
   txt.style.margin="5em 0"
   txt.setAttribute("id","msgTxt");
   txt.innerHTML=str;
   document.getElementById("msgDiv").appendChild(txt);
}
</script>
