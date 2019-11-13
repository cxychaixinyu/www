<?php
/*
	形参是一个全局变量还是局部变量？ 局部变量
*/

function demo($a=2)
{
	var_dump($a);//$a 是一个局部变量
}
demo();

var_dump($a);
?>