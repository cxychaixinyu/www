<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>学生管理</title>
</head>
<body>
	<a href="./1.html"><button style='width:100%;height:50px'>添加学生信息</button></a>
	<?php
	$link=mysqli_connect('localhost','root','root','xxoo');
	mysqli_set_charset($link,'utf8');
	$sql="select * from student";
	$result=mysqli_query($link,$sql);
	if($result){
		echo "<table border='1' width='700' align='center'>";
		echo '<tr>
				<th>编号</th>
				<th>姓名</th>
				<th>性别</th>
				<th>年龄</th>
				<th>电话</th>
				<th>操作</th>
			</tr>';
		$num=1;
		while($row=mysqli_fetch_assoc($result)){
			var_dump($row);
			$sex=$row['sex']=='nan'?'男':'女';
			echo "<tr>
					<td>{$num}</td>
					<td>{$row['name']}</td>
					<td>{$sex}</td>
					<td>{$row['age']}</td>
					<td>{$row['phone']}</td>
					<td><a href='./4.php?id={$row["id"]}'>删除</a>&nbsp;&nbsp;<a href='./5.php?id={$row["id"]}'>修改</a></td>
				</tr>";
				$num++;
		}
		echo "</table>";
	}
	mysqli_close($link);
	?>
</body>
</html>