<?php 
var_dump($_GET);
//链接数据库
$link=mysqli_connect('localhost','root','root','cms');
//设置通信字符集
mysqli_set_charset($link,'utf8');
switch ($_GET['action']) {
	case 'add':
		//var_dump($_POST);
		//用户填写内容完整
		foreach ($_POST as $k=>$v) {
			
			//所有内容不能为空
			if (empty($v)) {
				/*
					<script>alert('提示信息');location.href='跳转的地址';</script>
				*/
				echo "<script>alert('请填写完整内容');location.href='./admin_add.php';</script>";die;
			}else{
				$$k=$v;
			}
		}

		//两次密码是否一致 
		if ($_POST["pwd"] != $_POST["repwd"]){
		echo "<script>alert('两次密码不一致，请重新输入'); 	location.href='./admin_add.php';</script>";die;
		}
		//密码---加密
		$pwd=md5($pwd);
		//爱好---由数组变成字符串
		$hobby=implode('☆',$hobby);
		//写入数据库
		//准备sql语句
		$sql="insert into admin(username,pwd,sex,hobby,city) values('{$username}','{$pwd}','{$sex}','{$hobby}','{$city}')";
		//执行sql语句
		$res=mysqli_query($link,$sql);
		//处理结果
		if($res && mysqli_affected_rows($link)>0){
			echo "<script>alert('添加成功'); 	location.href='./admin_list.php';</script>";die;
		}else{
			echo "<script>alert('用户名已被占用'); 	location.href='./admin_list.php';</script>";die;
		}
		//成功之后跳转回用户列表页
		break;
	case 'del':
		//准备sql语句
		$sql="delete from admin where id={$_GET['id']}";
		//执行sql语句
		$result=mysqli_query($link,$sql);
		//处理结果
		if($result && mysqli_affected_rows($link)>0){
			echo "<script>alert('删除用户成功'); 	location.href='./admin_list.php';</script>";die;
		}else{
			echo "<script>alert('数据已经被其他人删除'); 	location.href='./admin_list.php';</script>";die;
		}
		break;
	case 'update':
		var_dump($_POST);
		//用户填写内容完整
		foreach ($_POST as $k=>$v) {
			
			//所有内容不能为空
			if (empty($v)) {
				/*
					<script>alert('提示信息');location.href='跳转的地址';</script>
				*/
				echo "<script>alert('请填写完整内容');location.href='./user.update.php?id={$_POST["id"]}';</script>";die;
			}else{
				$$k=$v;
			}
		}
		//爱好---由数组变成字符串
		$hobby=implode('☆',$hobby);
		//准备sql语句
		$sql="update admin set username='{$username}',sex='{$sex}',hobby='{$hobby}',city='{$city}' where id={$id}";
		echo $sql;
		$result=mysqli_query($link,$sql);
		//处理结果
		if($result && mysqli_affected_rows($link)>0){
			echo "<script>alert('数据修改成功');location.href='./admin_list.php';</script>";die;
		}else{
			echo "<script>alert('数据没有变化');location.href='./user.update.php?id={$_POST["id"]}';</script>";die;
		}
		break;
	
	default:
		# code...
		break;
}

?>