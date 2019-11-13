<?php
var_dump($_GET);
$link=mysqli_connect('localhost','root','root','xxoo');
mysqli_set_charset($link,'utf8');
$id=$_GET['id'];
$sql="delete from student where id={$id}";
$result=mysqli_query($link,$sql);
if($result && mysqli_affected_rows($link)>0){
	echo "<h1>删除成功</h1><a href='./index.php'>回到首页</a>";
}else{
	echo "<h1>删除失败</h1><a href='./index.php'>回到首页</a>";
}
mysqli_close($link);
?>