<?php  
/*
	php操作mysql数据库 ----- 六脉神剑
	1、链接mysql数据库
	2、选择数据库
	3、准备sql语句
	4、执行sql语句
	5、处理结果
	6、退出数据库

*/
/*

	1、链接mysql数据库
	mysqli_connect(数据库地址,用户名,密码);
*/
$link=mysqli_connect('localhost','root','root');
// var_dump($link);

/*
	2、选择数据库
	mysqli_select_db(链接对象，所要选择的数据库)
*/
mysqli_select_db($link,'xxoo');

//设置通信字符集
mysqli_set_charset($link,'utf8');//注意不是utf-8

/*
	3、准备sql语句
*/
$sql="select * from t11";

/*
	4、执行sql语句

	如果是查询语句，执行成功返回对象。执行失败返回false
*/
$result=mysqli_query($link,$sql);
var_dump($result);

/*
	5、处理结果
*/
if($result){
	//处理结果的代码
}

/*
	6、关闭数据库
*/
mysqli_close($link);
?>


