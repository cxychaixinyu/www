<?php
var_dump($_POST);
//链接数据库
$link=mysqli_connect('localhost','root','root','shi');
//设置通信字符集
mysqli_set_charset($link,'utf8');

foreach ($_POST as $k=>$v){
	$$k=$v;
}

$pwd=md5($pwd);

$sql="insert into user(username,pwd,sex,age,status) values('{$username}','{$pwd}','{$sex}',{$age},1)";

mysqli_query($link,$sql);
?>