<?php
session_start();
var_dump($_POST);
//验证是否为空
//链接数据库
$link=mysqli_connect('localhost','root','root','shi');
//设置通信字符集
mysqli_set_charset($link,'utf8');
$username=$_POST["username"];
$pwd=md5($_POST['pwd']);

$sql="select * from user where username='{$username}' and pwd='{$pwd}'";
$result=mysqli_query($link,$sql);
if($result && $row=mysqli_fetch_assoc($result)){
	if($row['status']==2){
		die("账号已被冻结，联系管理员");
	}
	//账号正常登陆
	$_SESSION['userinfo']=$row;
	$_SESSION['userinfo']['islogin']=1;
	var_dump($_SESSION);
}else{
	die("账号密码不匹配");
}
?>
