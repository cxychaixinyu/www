<?php
//开启session
session_start();
//引用函数文件
include './functions.php';
//判断用户是否已经登录
if(empty($_SSESSION['islogin'])){
	abort('请登录','./login.php');
}
//链接数据库
$link=mysqli_connect('localhost','root','root','cms');
//设置通信字符集
mysqli_set_charset($link,'utf8');
var_dump($_GET);
var_dump($_POST);
/*
	根据$_GET['action']值的不同执行不同的操作
	del:删除
	add:添加
	update:修改
*/
switch ($_GET['action']){
	case 'add':
		var_dump($_POST);
		foreach ($_POST as $k=>$v){
			//判断是否为空
			if(empty($v)){
				abort('请填写完整信息','./cate_add.php');
			}else{
				$$k=$v;
			}
		}
		//接收数据
		$c_time=time();
		//准备sql语句
		$sql="insert into category(c_name,a_man,c_time) values('{c_name}','{c_man}','{c_time}')"
	break;
	case 'del':
		//执行删除的操作
		$sql="delete from category where c_id={$_GET['c_id']}";
		//执行sql语句
		$result=mysqli_query($link,$sql);
		//处理结果
		if($result && mysqli_affected_rows($link)>0){
			abort('删除成功','./cate_list.php');
		}else{
			abort('该数据已被其他用户删除','./cate_list.php');
		}
	break;
	case 'update':
		var_dump($_POST);
		//不为空的判断
		foreach ($_POST as $k=>$v){
			//判断是否为空
			if(empty($v)){
				abort('请填写完整信息','./cate_update.php?c_id={$_POST["c_id"]}');
			}else{
				$$k=$v;
			}
		}
		//准备sql语句
		$sql="update category set c_name='{$c_name}','{$c_man}' where c_id={$c_id}";
		echo $sql;
		//执行sql语句
		$result=mysqli_query($link,$sql);
		//处理结果
		if ($result && mysqli_affected_rows($link)>0) {
			abort('修改成功','./cate_list.php');
		}else{
			abort('修改失败',"./cate.update.php?c_id={$c_id}")
		}
	break;
	default:
		
	break;

}

?>