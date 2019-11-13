<?php
/*
	通过$_GET['id']获得用户的信息，并展示在表单中
	1、查询
	2、展示
*/
//1、链接数据库
$link=mysqli_connect('localhost','root','root','cms');
//2、设置通信字符集
mysqli_set_charset($link,'utf8');
//3、准备查询sql语句
$sql="select * from admin where id={$_GET['id']}";
//4、执行sql语句
$result=mysqli_query($link,$sql);
//处理结果
if($result && $row=mysqli_fetch_assoc($result)){
	$hobby=explode('☆',$row['hobby']);
	//var_dump($hobby);
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>用户信息</title>
	<link rel="stylesheet" type="text/css" href="../css/public.css">
</head>

<body>
	<div  id="main">
	<h2>修改信息</h2>
		<form name="login"  action="./user.action.php?action=update" method="post">
			<table border="0"    cellspacing="20" cellpadding="0">
				<tr>
					<td>用户名：</td>
					<td><input  value="<?php echo $row['username']?>" type="text" name="username" class="txt"/></td>
				</tr>
					<td>性别：</td>
					<td>
					<input   type="radio" <?php echo $row['sex']=='nan'?'checked':'';?> name="sex" value='nan'/>男
					<input   type="radio" <?php echo $row['sex']=='nv'?'checked':'';?> name="sex" value='nv'/>女</td>
				</tr>
				<tr>
					<td>爱好：</td>
					<td>
					<input   type="checkbox" <?php echo in_array('web',$hobby)?'checked':'';?>name='hobby[]' value="web"/>上网
					<input   type="checkbox" <?php echo in_array('sport',$hobby)?'checked':'';?>name='hobby[]' value="sport"/>体育
					<input   type="checkbox" <?php echo in_array('study',$hobby)?'checked':'';?>name='hobby[]' value="study"/>学习
					</td>
				</tr>
				<tr>
					<td>城市：</td>
					<td>
					<select name="city"  class="s1">
						<option value="1" <?php echo $row['city']=='1'?'selected':'';?>>北京</option>
						<option value="2" <?php echo $row['city']=='2'?'selected':'';?>>上海</option>
						<option value="3" <?php echo $row['city']=='3'?'selected':'';?>>南京</option>
					</select>
					<input type="hidden" name="id" value="<?php echo $row['id']?>">
					</td>
				</tr>
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
	echo "<script>alert('数据已经被其他人删除');location.href='./admin_list.php';</script>";
}






?>