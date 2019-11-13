<?php 
//检测用户是否登录
if (empty($_COOKIE['islogin'])){
	echo "<script>alert('请登录');location.href='./login.html';</script>";
	die;
}
echo "<h1>这是用户管理</h1><h2>欢迎{$_COOKIE['username']}归来</h2>";

?>
<a href="./userList.php">用户列表页</a>
<a href="./logout.php">退出登录</a>