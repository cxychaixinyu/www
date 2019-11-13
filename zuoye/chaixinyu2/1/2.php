<?php
var_dump($_POST);
//接受值
// $username=$_POST['username'];

foreach ($_POST as $k => $v){
	$$k=$v;
}

$sql="insert into user(username,email,age) values('{$username}','{$email}',{$age})";

echo $sql;
?>