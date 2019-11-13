<?php
//开启session
session_start();
//引用函数文件
include './functions.php';
//判断用户是否已经登录
if(empty($_SSESSION['islogin'])){
	abort('请登录','./login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>添加分类</title>
<link rel="stylesheet" type="text/css" href="../css/public.css">
</head>

<body>
<div  id="main">
<h2>添加分类</h2>
<form name="login"  action="cate.action.php?action=add" method="post">
	<table border="0"    cellspacing="10" cellpadding="0">
		  <tr>
			<td>分类名称：</td>
			<td><input   type="text" name="c_name" class="txt"/></td>
		  </tr>
			<tr>
			<td>添加人：</td>
			<td><input   type="text"  name="c_man"  class="txt"/></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td><input  type="submit" value="添 加"  class="sub"/><input  type="reset" value="重 置"  class="res"/></td>
		  </tr>
	</table>
</form>
</div>
</body>
</html>
