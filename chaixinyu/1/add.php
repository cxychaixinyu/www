<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>注册页面</title>
</head>
<body>
<div id="main" align="center" >
<h2>注册</h2>
<form name="add" action="./user.php?action=add" method="post">
	<table border="0" width="400" cellspacing="0" cellpadding="0">
		<tr>
			<td>用户名：</td>
			<td><input name="username" type="text"></td>
		</tr>
		<tr>
			<td>密码：</td>
			<td>
				<input name="pwd" type="password">
			</td>
		</tr>
		<tr>
			<td>确认密码：</td>
			<td>
				<input name="repwd" type="password">
			</td>
		</tr>
		<tr>
			<td>性别：</td>
			<td>
				<input type="radio" name="sex" value='nan'>男
				<input type="radio" name="sex" value='nv'>女
			</td>
		</tr>
		<tr>
			<td>年龄:</td>
			<td>
				<input name="age" type="text">
			</td>
		</tr>
		<tr>
			<td>状态：</td>
			<td>
				<input type="radio" name="status" value='1'>正常
				<input type="radio" name="status" value='2'>冻结
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="注册"><input type="reset" value="重置"></td>
		</tr>
	</table>
</form>
</div>
</body>
</html>