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

<h1 align='center' style="color:white">建议列表</h1>
<table border="0" cellspacing="1" id="dd" align="center">
<tr bgcolor="#6CADD9">
<th>id</th>             
<th>姓名</th>
<th>邮箱</th>
<th>城市</th>
<th>联系方式</th>
<th>建议内容</th>
<th>时间</th>  
</tr>
<tbody class="tb1" align="center">
<?php 
foreach((array)$list as $tmp) {
    
    echo  "<tr><td>".$tmp['suggest_id']."</td>
          <td>".$tmp['name']."</td>
          <td>".$tmp['email']."</td>
          <td>".$tmp['city']."</td>
          <td>".$tmp['mobile']."</td>
          <td>".$tmp['content']."</td>
          <td>".$tmp['ctime']."<td></tr>";
           
}
?>
    <tr><td><a href="/shulan/cms/list/">返回</a></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    </tr>


    </div>