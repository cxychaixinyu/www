<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>登录</title>
</head>
<body>
	<div id="main" align="center">
		<form name="login" action="./action.php?action=login" method="post">
			<table border='0' width='250' cellspacing="0" cellpadding="0">
				<tr>
					<td>用户名：</td>
					<td><input name="username" type="text"></td>
				</tr>
				<tr>
					<td>密&nbsp;&nbsp;&nbsp;码：</td>
					<td><input name="pwd" type="password"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" value="登录"><input type="submit" value="注册"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>