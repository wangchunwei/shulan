
</div>
<div class="row">
<div class="col-md-10 col-sm-offset-1">
<div class="thumbnail" style="background-color:rgb(89, 82, 82)">
    <div class="bg">
        
    <div style="margin:7% auto;">
        <style>
            label2{
            	float: left;
				margin-right: 10px;
                letter-spacing:2em;
            }
            .form-group{
                margin:0 auto 20px auto;

            }
        </style>
    <div class="col-md-10 col-md-offset-1" >  
        <form id="myForm" name="myForm" onmouseover="stepIn(this.id)" onmouseout="stepOut(this.id)">
      <div class="form-group">
        <label2 for="exampleInputText" style="color:white">昵称</label2>
        <input type="text" class="form-control" id="name" name="name" placeholder="必填" color="white">
      </div>
      <div class="form-group">
        <label2 for="exampleInputEmail1" style="color:white">邮箱</label2>
        <input type="email" class="form-control" id="email" name="mail" placeholder="必填">
      </div>
      <div class="form-group">
        <label2 for="exampleInputText" style="color:white">城市</label2>
        <input type="text" class="form-control" id="city" name="city" placeholder="必填">
      </div>
      <div class="form-group">
        <label2 for="exampleInputPhone1" style="color:white;">手机</label2>
        <input type="number" class="form-control" id="phone" name="phone">
      </div>
      <div class="form-group">
          <label2 for="exampleInputText" style="color:white;letter-spacing:0;">建议内容</label2>
          <textarea class="form-control" rows="3" id="content" name="content" placeholder="必填" style="margin-left: 90px;width: 70.5%;color:black"></textarea>
      </div>
     
    	</form>
            </br>
    		</br>
            </br>
    		</br>
                <input class="btn btn-primary" style="background-color:black;margin-left: 40%;" type="button" id="formButton" value="提交资料"/>

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
            var code=data['code'];
            alert(msg);
            if(code==1) {
            	window.location.href="/shulan/site/index/";
            }
        },
        
        error: function(x, e) {
            alert("提交成功！！感谢您的宝贵意见");
            window.location.href="/shulan/site/index/";
        }
    });
}); 
</script>