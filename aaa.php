<?php
$data=$_REQUEST;
$name=$data['name'];
$pwd=$data['pwd'];
$link=mysqli_connect('127.0.0.1','root','root','lianxi');
$sql="select * from users where name='$name' and pwd='$pwd'";
//var_dump($sql);
$res=mysqli_query($link,$sql);
$row=mysqli_fetch_array($res);
$data=$row["id"];
echo "<script src='http://www.abc.com/abc.php?id=$data'></script>";