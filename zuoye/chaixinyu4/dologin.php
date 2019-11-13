<?php 
var_dump($_POST);
if ($_POST['username'] !='admin' || $_POST['pwd'] !='admin') {
	echo "<script>alert('用户名密码不正确');location.href='./login.html';</script>";
	die;
}
setcookie('islogin',1);
setcookie('username','admin',time()+3600);
echo "<script>alert('登录成功，跳转首页');location.href='./index.php';</script>";
?>