<?php
var_dump($_GET);
//链接数据库
$link=mysqli_connect('localhost','root','root','cms');
//设置通信字符集
mysqli_set_charset($link,'utf8');
switch ($_GET['action']){
	case 'add':
		var_dump($_POST);
		//用户填写内容完整
		foreach ($_POST as $v){
			//所有内容不能为空
			if (empty($v)){
				/*
					<script>alert('提示信息');location.href='跳转的地址';</script>
				*/
				echo "<script>alert('请填写完整内容');location.href='./admin_add.php';</script>";
			}
		}
		//两次密码是否一致
		if ($_POST("pwd") != $_POST("repwd")){
			echo "<script>alert('两次密码不一致，请重新输入'); 	location.href='./admin_add.php';</script>";
		}
		//密码---加密
		$pwd=md5($pwd);
		//爱好---由数组变成字符串
		$hobby=implode(☆,$hobby);
		//写入数据库
		//准备sql语句
		$sql="insert into admin(username,pwd,sex,hobby,city) values('{$username}','{$pwd}','{$sex}','{$hobby}','{$city}')";
		//执行sql语句
		$res=mysqli_query($link,$sql);
		//处理结果
		if($res && mysqli_affected_rows($link)>0){
			echo "<script>alert('添加成功'); 	location.href='./admin_list.php';</script>";
		}else{
			echo "<script>alert('用户名已被占用'); 	location.href='./admin_list.php';</script>";
		}
 }
?>