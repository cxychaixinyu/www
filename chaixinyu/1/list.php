<?php
$link=mysqli_connect('localhost','root','root','cms');
mysqli_set_charset($link,'utf8');
$sql="select * from admin";
$result=mysqli_query($link,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>用户管理</title>
</head>
<body>
	<div  id="main">
	<table  width="80%" border="0" cellspacing="0" cellpadding="0">
	<caption>
		管理员列表&nbsp;&nbsp;&nbsp;&nbsp;<a href="./admin_add.php">添加管理员</a>
	</caption>
	<tr>
		<th>编号</th>
		<th width="100">姓名</th>
		<th>性别</th>
		<th>年龄</th>
		<th>状态</th>
		<th>操作</th>
	</tr>
<?php
echo"<tr>
		<td>{$num}</td>
		<td>{$row['username']}</td>
		<td>{$sex}</td>
		<td>{$age}</td>
		<td>{$status}</td>
		<td>
		<a href='./del.php?action=del&id={$row["id"]}'>删除</a>/<a href='./update.php?id={$row["id"]}'>修改</a>
		</td>
	</tr>"

?> 
	</table>
	</div>
</body>
</html>