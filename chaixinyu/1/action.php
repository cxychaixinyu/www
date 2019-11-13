<?php
$link=mysqli_connect('localhost','root','root','zhoushi');
mysqli_set_charset($link,'utf8');
switch($_GET['action']){
	case 'login':
	if (empty($_POST['username'])||empty($_POST['pwd'])){
			echo "<script>alert('请填写完整登录信息');location.href='./login.php';</script>";die;
		}
		$username=$_POST['username'];
		$pwd=md5($_POST['pwd']);
		var_dump($_POST);
		
		$sql="select * from user where username='{$username}' and pwd='{$pwd}'";
		$result=mysqli_query($link,$sql);
		if ($result && $row=mysqli_fetch_assoc($result)){
			echo "<script>alert('登录成功');location.href='list.php';</script>";die;
		}else{
			echo "<script>alert('用户名密码不匹配');location.href='login.php';</script>";die;
		}
	break;
		
	default:
		
	break;
}

?>