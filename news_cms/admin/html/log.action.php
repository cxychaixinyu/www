<?php
$link=mysqli_connect('localhost','root','root','cms');
mysqli_set_charset($link,'utf8');
switch($_GET['action']){
	case 'login':
		/*
			验证用户名密码是否为空
		*/
	if (empty($_POST['username'])||empty($_POST['pwd'])){
			echo "<script>alert('请填写完整登录信息');location.href='./admin_add.php';</script>";die;
		}
		$username=$_POST['username'];
		$pwd=md5($_POST['pwd']);
		var_dump($_POST);

		//查询该条数据是否存在数据库
		$sql="select * from admin where username='{$username}' and pwd='{$pwd}'";
		//执行sql语句
		$result=mysqli_query($link,$sql);
		//处理结果
		if ($result && $row=mysqli_fetch_assoc($result)) {
			echo "<script>alert('登录成功');location.href='./admin.php';</script>";die;
		}else{
			echo "<script>alert('用户名密码不匹配');location.href='./login.php';</script>";die;
		}
	break;
	case 'logout';
		echo "注销";
	break;
	default:

	break;
}

?>