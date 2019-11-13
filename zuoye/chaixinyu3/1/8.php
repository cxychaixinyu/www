<?php
/*
	会声明全局变量和局部变量，如何声明一个超全局变量？
		内置的超全局变量：
			$_POST
			$_GET
			$_COOKIE
			$_REQUEST
			$_SERVER
			$_FILES
			$_SESSION
			$GLOBALS
		超全局变量可以自动声明
		
	说明：每声明一个全局变量，都会对应声明一个超全局变量
*/
$a=2;

/*
	在局部作用域使用全局变量---如何在函数体内使用全局变量
	$GLOBALS['变量的名字']
*/
function demo()
{
	var_dump($GLOBALS['a']);
	$GLOBALS['a']=3;
}
demo();
var_dump($a);
?>