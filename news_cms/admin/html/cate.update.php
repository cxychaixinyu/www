<?php 
//判断用户是否登录
//开启session
session_start();
//引用函数文件
include './function.php';
//判断用户是否已经登录
if (empty($_SESSION['islogin'])) {
  abort('请登录','./login.php');
}
//链接数据库
$link=mysqli_connect('localhost','root','root','cms');
//设置通信字符集
mysqli_set_charset($link,'utf8');
//查询数据库
$sql="select * from category where c_id={$_GET['c_id']}";
//执行sql语句
$result=mysqli_query($link,$sql);
//处理结果
if ($result && $row=mysqli_fetch_assoc($result)) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>修改分类</title>
<link rel="stylesheet" type="text/css" href="../css/public.css">
</head>

<body>
<div  id="main">
<h2>修改分类</h2>
<form name="login"  action="cate.action.php?action=add" method="post">
	<table border="0"    cellspacing="10" cellpadding="0">
		  <tr>
			<td>分类名称：</td>
			<td><input   type="text" value='<?php echo $row["c_name"]?>' name="c_name" class="txt"/></td>
		  </tr>
			<tr>
			<td>添加人：</td>
			<td><input   type="text" value='<?php echo $row["c_man"]?>'  name="c_man"  class="txt"/></td>
		  </tr>
		  <input type="hidden" name="c_id" value='<?php echo $row["c_id"]?>'>
		  <tr>
			<td>&nbsp;</td>
			<td><input  type="submit" value="修 改"  class="sub"/><input  type="reset" value="重 置"  class="res"/></td>
		  </tr>
	</table>
</form>
</div>
</body>
</html>
<?php
}else{
	abort('该用户信息已被删除','./cate_list.php');
}
?>