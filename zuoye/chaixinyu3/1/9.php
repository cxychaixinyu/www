<?php
/*
	如何在全局作用域使用局部变量
*/
$sex=444;
function demo()
{
	//声明了一个超全局变量
	global $num,$sex;//可以声明变量，但不能赋值
	$num=2;
	var_dump($sex);
}
demo();

var_dump($num);
var_dump($GLOBALS);
?>