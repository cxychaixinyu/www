<?php 
var_dump($_GET);
$link=mysqli_connect('localhost','root','root','zhoushi');
mysqli_set_charset($link,'utf8');
switch ($_GET['action']) {
	case 'add':
		var_dump($_POST);
		foreach ($_POST as $k=>$v) {
			if (empty($v)){
				echo "<script>alert('请填写完整信息');location.href='./add.php';</script>";die;
			}else{
				$$k=$v;
			}
		}
		if ($_POST["pwd"] != $_POST["repwd"]){
		echo "<script>alert('两次密码不一致，请重新输入'); 	location.href='./add.php';</script>";die;
		}
		$pwd=md5($pwd);
		$sql="insert into user(username,pwd,sex,age,status) values('{$username}','{$pwd}','{$sex}','{$age}','{$status}')";
		$res=mysqli_query($link,$sql);
		if($res && mysqli_affected_rows($link)>0){
			echo "<script>alert('注册成功'); 	location.href='./login.php';</script>";die;
		}else{
			echo "<script>alert('用户名已被占用'); 	location.href='./login.php';</script>";die;
		}
		break;
	default:
	
		break;
}

?>