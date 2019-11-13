<?php
/*
	六脉神剑

	1、链接数据库
	2、选择数据库
	3、准备sql语句
	4、执行sql语句
	5、处理结果集
	6、关闭数据库
*/
/*
	1、链接数据库
	mysqli_connect('地址','用户名','密码')

*/
$link = mysqli_connect('localhost','root','root');
// var_dump($link);

/*
	2、选择数据库、设置通信字符集
	mysqli_select_db(链接的对象，数据库名称);
	mysqli_set_charset(链接的对象,'utf8');
*/
mysqli_select_db($link,'1810a');
mysqli_set_charset($link,'utf8');

//3、准备sql语句
$sql="select * from user";

//4、执行sql语句
$result = mysqli_query($link,$sql);
var_dump($result);
//5、处理结果集
/*
	有结果集：select
		成功：对象
		失败：false

	处理函数：
		mysqli_fetch_assoc($result)---如果有数据得到一行数据（关联数组），如果没有则返回null
		mysqli_fetch_row($result)---如果有数据得到一行数据（索引数组），如果没有则返回null
		mysqli_num_rows($result)---获得一共有多少条数据
			

	无结果集：insert、delete、update
		成功：true
		失败：false
*/
//5-1、判断sql语句是否执行成功
if($result){
	//处理结果集的操作
	// $row=mysqli_fetch_assoc($result);
	// var_dump($row);
	// while($row=mysqli_fetch_assoc($result)){
	// 	var_dump($row);
	// }

	// while($row=mysqli_fetch_row($result)){
	// 	var_dump($row);
	// }

	// var_dump(mysqli_num_rows($result));
}

//6、关闭数据库
mysqli_close($link);


?>