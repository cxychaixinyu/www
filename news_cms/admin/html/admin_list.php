<?php
/*
	查询admin表
*/
//1、链接数据库
$link=mysqli_connect('localhost','root','root','cms');
//2、设置通信字符集
mysqli_set_charset($link,'utf8');
//3、准备查询sql语句
$sql="select * from admin";
//4、执行sql语句
$result=mysqli_query($link,$sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="../css/public.css">
</head>

<body>
<div  id="main">
<table  width="80%" border="0" cellspacing="0" cellpadding="0" class="news_table">
  <caption>
    管理员列表&nbsp;&nbsp;&nbsp;&nbsp;<a href="./admin_add.php">添加管理员</a>
  </caption>
  <tr>
    <th scope="col">编号</th>
    <th scope="col" width="100">名称</th>
    <th scope="col">性别</th>
    <th scope="col">爱好</th>
    <th scope="col">城市</th>
    <th scope="col">操作</th>
  </tr>
<?php
//5、处理结果集
if($result){
	//声明技术的变量
	$num=1;
	//获得数据
	while($row=mysqli_fetch_assoc($result)){
		var_dump($row);
		//性别
		//城市
		$cityArr=[1=>'北京',2=>'上海',3=>'南京'];
		$city=$cityArr[$row['city']];
		//爱好
		$hobbyArr=['web'=>'上网','sport'=>'体育','study'=>'学习'];
		//将得到的数据---字符串转为数组
		$keysArr=explode('☆',$row['hobby']);
		$hobby='';
		foreach ($keysArr as $v){
			var_dump($v);
			$hobby.=$hobbyArr[$v].'&nbsp;';
		}
		var_dump($keysArr);
		echo "<tr>
				<td>{$num}</td>
				<td>{$row['username']}</td>
				<td>{$row['sex']}</td>
				<td>{$hobby}</td>
				<td>{$city}</td>
				<td>
				<a href='./user.action.php?action=del&id={$row["id"]}'>删除</a>
				/
				<a href='./user.update.php?id={$row["id"]}'>修改</a>
				</td>
			</tr>";
		$num++;
	}
}

?>
</table>



</div>
</body>
</html>
