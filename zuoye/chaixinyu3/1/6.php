<?php
/*
	变量的作用域：
		分类依据：变量的作用范围
		分类：
			1、局部变量：作用范围在函数体内可以使用
			2、全局变量：作用范围在函数体外可以使用
			3、超全局变量：在任何地方（函数体内外）都可以使用
*/
$a=1;//全局变量
function demo()
{
	$b=2;//局部变量
	var_dump($b);
	var_dump($a);//报错，找不到变量a 原因：$a是一个全局变量不能在局部使用
}

demo();
var_dump($b);//报错，找不到变量b 原因：$b是一个局部变量不能在全局使用
?>