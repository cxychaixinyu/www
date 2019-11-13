<?php
/*
	cookie的验证信息
	后台首页：用户没有登录则不能访问
*/
if (empty($_COOKIE['islogin'])) {
	//检测用户是否登录---跳转登录页
	echo "<script>alert('请登录');location,href='./login.html';</script>";
	//终止程序后代码不执行
	die;
}
	echo "<h1>这是网站首页</h1><h2>欢迎{$_COOKIE['username']}归来</h2>";
?>
<a href="./userList.php">用户列表页</a>