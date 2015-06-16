

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
            alert(msg);
        },
        
        error: function(x, e) {
            alert("提交成功！！感谢您的宝贵意见");
        }
    });
}); 
</script>