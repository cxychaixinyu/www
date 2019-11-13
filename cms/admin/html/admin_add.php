<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<title>空</title>
	<link rel="stylesheet" type="text/css" href="../css/public.css">
</head>
<body>
	<div id="main">
	<h2>管理员添加</h2>
		<!--cellspacing 单元格间距 cellpadding 单元格边距-->
		<form name="login" action="./user.action.php?action=add" method="post">
			<table border="0" cellspacing="20" cellpadding="0">
				<tr>
					<td>用户名：</td>
					<td><input type="text" name="username" class="txt"/></td>
				</tr>
				<tr>
					<td>密码：</td>
					<td><input type="password" name="pwd" class="txt"/></td>
				</tr>
				<tr>
					<td>确认密码：</td>
					<td><input type="password" name="repwd" class="txt"/></td>
				</tr>
				<tr>
					<td>性别：</td>
					<td>
					<input type="radio" name="sex" value='nan' checked />男
					<input type="radio" name="sex" value='nv' checked />女
					</td>
				</tr>
				<tr>
					<td>爱好：</td>
					<td>
					<input type="checkbox" name='hobby[]' value="web"/>上网
					<input type="checkbox" name='hobby[]' value="sport"/>体育
					<input type="checkbox" name='hobby[]' value="studey"/>学习
					</td>
				</tr>
				<tr>
					<td>城市</td>
					<td>
					<select name="city" class="s1">
						<option value="1">北京</option>
						<option value="2">上海</option>
						<option value="3">南京</option>
					</select>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" value="添 加" class="sub"/><input type="reset" value="重 置" class="res"/></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>