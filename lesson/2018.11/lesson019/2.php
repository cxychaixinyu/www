<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>表单</title>
</head>
<body>
	<form action="./3.php" method='post'>
		<table align='center' border='1' width='300'>
			<tbody align='center'>
				<tr>
					<td>姓名</td>
					<td>
						<input type="text" name="username" id="">
					</td>
				</tr>
				<tr>
					<td>密码</td>
					<td>
						<input type="password" name="pwd" id="">
					</td>
				</tr>
				<tr>
					<td>
						确认密码
					</td>
					<td>
						<input type="password" name="repwd" id="">
					</td>
				</tr>
				<tr>
					<td>年龄</td>
					<td>
						<select name="age" id="">
						<?php
							for ($i=18; $i <=35 ; $i++) { 
								echo "<option value='{$i}'>{$i}</option>";
							}

						?>		
						</select>
					</td>
				</tr>
				<tr>
					<td>
						性别
					</td>
					<td>
						<input type="radio" name="sex" value='nan' id="">男
						<input type="radio" checked name="sex" value='nv' id="">女
					</td>
				</tr>
				<tr>
					<td>
						邮箱
					</td>
					<td>
						<input type="email" name="email" id="">
					</td>
				</tr>
				<tr>
					<td>电话号码</td>
					<td>
						<input type="text" name="phone" id="">
					</td>
				</tr>
				<tr>
					<td colspan='2'>
						<button>提交</button>
					</td>
					
				</tr>
			</tbody>
		</table>	
	</form>
</body>
</html>

