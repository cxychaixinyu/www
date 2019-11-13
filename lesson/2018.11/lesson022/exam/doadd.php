<?php 
var_dump($_POST);

//数据库操作
$link=mysqli_connect('localhost','root','root','xxoo');
mysqli_set_charset($link,'utf8');
//接收值
$name=$_POST['name'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$phone=$_POST['phone'];
/*
	rand(m,n)  随机得到m~n之间的一个随机数，包括边界
*/
do{
	//随机生成学号
	$studentnum=date('YmdHis').rand(1000,9999);
	$sqlNum="select * from student where studentnum={$studentnum}";
	$resultNum=mysqli_query($link,$sqlNum);	
}while($resultNum && mysqli_fetch_assoc($resultNum));


//组装sql语句
$sql="insert into student(name,sex,age,phone,studentnum) values('{$name}','{$sex}',{$age},{$phone},{$studentnum})";
echo $sql;
$result=mysqli_query($link,$sql);

//处理结果
if($result && mysqli_affected_rows($link)>0){
	echo "<h1>添加成功<a href='./index.php'>回到首页</a></h1>";
}else{
	echo "<h1><a href='./add.html'>重新添加</a><a href='./index.php'>回到首页</a></h1>";
}

//关闭数据库
mysqli_close($link);

?>