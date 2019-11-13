<?php
session_start();
$password=$_GET['password'];
var_dump($password);
header('P3P: CP="CURa ADMa DEVa PSAo PSDo OUR BUS UNI PUR INT DEM STA PRE COM NAV OTC NOI DSP COR"');
setcookie("zx", $_GET['password'], time()+3600*24, "/");
//var_dump($_COOKIE);