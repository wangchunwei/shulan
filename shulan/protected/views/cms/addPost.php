
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
        <label2 for="exampleInputText" style="color:white">文字标题</label2>
        <input type="text" class="form-control" id="title" name="title" placeholder="必填" color="white">
      </div>

      <div class="form-group">
        <label2 for="exampleInputText" style="color:white">摘    要</label2>
        <input type="text" class="form-control" id="abstract" name="abstract" placeholder="必填" color="white">
      </div>

      <div class="form-group">
        <label2 for="exampleInputText" style="color:white">图    片</label2>
        <input type="text" class="form-control" id="pic" name="pic" placeholder="必填" color="white">
      </div>

            
      <div class="form-group">
        <label2 for="exampleInputText" style="color:white">文章地址</label2>
        <input type="text" class="form-control" id="url" name="url" placeholder="必填" color="white">
      </div>
     
    	</form>
            </br>
    		</br>
            </br>
    		</br>
                <input class="btn btn-primary" style="background-color:black;margin-left: 40%;" type="button" id="formButton" value="提交"/>

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
        url: '/shulan/cms/post/',
        type: "POST",
        dataType: "json",
        
        data: $('#myForm').serialize(),
        success: function (data) {
            var msg=data['msg'];
            if(msg == "success") {
                window.location.href="/shulan/cms/list/";
            }else{               
               alert(msg);
            }
        },
        
        error: function(x, e) {
            alert("提交失败");
        }
    });
}); 
</script>
