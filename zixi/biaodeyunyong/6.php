<?php
var_dump($_GET);
$link=mysqli_connect('localhost','root','root','xxoo');
mysqli_set_charset($link,$sql);
$sql="select * from student where id={$_GET['id']}";
$result=mysqli_query($link,$sql);
if($result && $row=mysqli_fetch_assoc($result)){
?>
<form action="./5.php" method="post">
	<table border='1' width='280' align='center'>
		<tr>
			<td>名字</td>
			<td>
				<input type="text" value="<?php
				echo $row['name'];?>">
			</td>
		</tr>
		<tr>
			<td>性别</td>
			<td>
				<input type="radio" <?= $row['sex']=='nan'?'checked':'';?> name="sex" value="nan">男
				<input type="radio" <?= $row['sex']=='nv'?'checked':'';?> name="sex" value="nv">女
			</td>
		</tr>
		<tr>
			<td>年龄</td>
			<td>
				<input type="text" name="age" value="<?=$row['age']?>">
			</td>
		</tr>
		<tr>
			<td>手机号</td>
			<td>
				<input type="text" value="<?=$row['phone']?>" name="phone">
			</td>
		</tr>
		<input type="hidden" name="id" value='<?=$row['id']?>'>
		<tr>
			<td>
				<button>确认修改</button>
			</td>
			<td>
				<button type="reset">重置</button>
			</td>
		</tr>
	</table>
</form>
<?php
}
mysqli_close($link);
?>