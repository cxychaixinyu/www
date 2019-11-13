<?php
$link = mysqli_connect('127.0.0.1','root','root','lianxi');
$sql = "select * from user";
$res = mysqli_query($link,$sql);
$row = mysqli_fetch_array($res);
$datas = json_encode($row);
header("Location:http://www.abc.com/list.php?data=$datas");

?>

