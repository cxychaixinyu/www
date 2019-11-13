<?php
var_dump($_POST);
$link=mysqli_connect('localhost','root','root','xxoo');
mysqli_set_charset($link,'utf8');
$name=$_POST['name'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$id=$_POST['id'];
$sql="update student set name='{$name}',sex='{$sex}',age='{$age}',phone='{$phone}' where id={$id} ";
echo $sql;die;

$result=mysqli_query($link,$sql);
if($result && mysqli_affected_rows($link)>0){
	echo "<h1>修改成功<a href='./index.php'>回到首页</a></h1>";
}else{
	echo "<h1>修改失败<a href='./6.php'>回到首页</a></h1>";
}
mysqli_close($link);
?>