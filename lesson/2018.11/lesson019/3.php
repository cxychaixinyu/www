<?php 
/*
后台php页面验证
所有选项非空
验证员工姓名4-8位之间 不能是数字开头
验证密码6-8位之间
验证确认密码和密码必须一致
验证邮箱类型（只需要判断邮箱中是否有@即可）
验证手机号必须为11位 数字         手机号必须为159 185 187 开头
*/

var_dump($_POST);
//1、所有选项非空
foreach ($_POST as $v) {
	if(empty($v)){
		abort('请完整填写表单信息');
	}
}

//2、验证员工姓名4-8位之间 不能是数字开头
$name=$_POST['username'];
//2-1、不能以数字开头
$start=$name[0];
// var_dump($start);
if(is_numeric($start)){
	abort('用户名不能以数字开头');
}

//2-2、姓名4-8位
//获取长度
$len=strlen($name);
if($len<4 || $len>8){
	abort('用户名长度应为4-8位');
}

//3、验证确认密码和密码必须一致
if($_POST['pwd'] != $_POST['repwd']){
	abort('两次密码不一致');
}

//4、验证密码6-8位之间
$len=strlen($_POST['pwd']);
if($len<6 || $len>8){
	abort("密码长度应为6~8位");
}

//5、验证邮箱类型（只需要判断邮箱中是否有@即可）
if(substr_count($_POST['email'],'@')==0){
	abort('邮箱格式不正确');
}
//6、验证手机号必须为11位 数字         手机号必须为159 185 187 开头
//6-1、验证手机号必须为11位 数字
if(strlen($_POST['phone']) !=11){
	abort('手机号格式不正确');
}

if(!is_numeric($_POST['phone'])){
	abort('手机号格式不正确');
}

//6-2、 手机号必须为159 185 187 开头
$start=substr($_POST['phone'],0,3);
var_dump($start);

//允许手机号以什么值开始的
$array=[159,185,187,182];

if(!in_array($start,$array)){
	abort('手机号必须为159 185 187 开头');
}

//错误函数
function abort($msg)
{
	die("<h1 style='color:red;font-size:40px;'>{$msg}</h1><a href='./2.php'>重新填写</a>");
}


?>