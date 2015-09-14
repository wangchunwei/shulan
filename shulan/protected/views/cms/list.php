</div>
<div align="center">
<style type="text/css">
body {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
table#dd {background-color: #6CADD9;}
table#dd thead th {background-color: #6CADD9;color: #FFFFFF;font-size: 120px;}
table#dd td {padding: 6px;width: 120px;}
table#dd tbody.tb1 td {background-color: #FFFFFF;}
table#dd tbody.tb2 td {background-color: #F7F7F7;}
table#dd tbody td:hover {background-color: #BFEDF9;}
table#dd colgroup col.name {background-color: #E6E6E6;width: 100px;font-weight: normal;}
</style>

    <h1 align='center' style="color:white">活动列表</h1>
<table border="0" cellspacing="1" id="dd" align="center">
<tr bgcolor="#6CADD9">
<th>id</th>             
<th>标题</th>
<th>摘要</th>
<th>图片</th>
<th>文章地址</th>
<th>是否有效(1有效，0无效）</th>
<th>修改时间</th>  
<th>创建时间</th>    
<th>设置</th>  
<th>修改</th>
</tr>
<tbody class="tb1" align="center">
<?php 
foreach((array)$list as $tmp) {
    $url = "<a href='".$tmp['url']."' target='_blank'>文章地址</a>";
    $picurl = "<a href='".$tmp['pic_url']."' target='_blank'>图片</a>";
    if($tmp["valid"] == 1) {
        $set =  "<a href='/shulan/cms/unsetValid/".$tmp['post_id']."/'>设置为无效</a>";        
    }else{
        $set =  "<a href='/shulan/cms/setValid/".$tmp['post_id']."/'>设置为有效</a>";
        
    }
    
    $fix = "<a href='/shulan/cms/add/".$tmp['post_id']."'>修改</a>";
    
    echo  "<tr><td>".$tmp['post_id']."</td>
          <td>".$tmp['title']."</td>
          <td>".$tmp['abstract']."</td>
          <td>".$picurl."</td>
          <td>".$url."</td>
          <td>".$tmp['valid']."</td>
          <td>".$tmp['mtime']."</td>
          <td>".$tmp['ctime']."</td>
          <td>".$set."</td>
          <td>".$fix."<td></tr>";
           
}
?>
    <tr><td><a href="/shulan/cms/add/">添加动态</a></td>
    <td><a href="/shulan/cms/suggest/">建议列表</a></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    </tr>
    
    
    </div>