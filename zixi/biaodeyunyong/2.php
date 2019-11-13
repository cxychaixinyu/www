<?php
//var_dump($_POST);
$link=mysqli_connect('localhost','root','root','xxoo');
mysqli_set_charset($link,'utf8');
$name=$_POST['name'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$sql="insert into student(name,sex,age,phone) values('{$name}','{$sex}','{$age}',{$phone})";
//echo $sql;die;
$result=mysqli_query($link,$sql);
if($result && mysqli_affected_rows($link)>0){
	echo "<h1>添加成功<a href='./index.php'>回到首页</a></h1>";
}else{
	echo "<h1><a href='./1.html'>重新添加</a><a href='./index.php'>回到首页</a></h1>";
}
mysqli_close($link);
?>