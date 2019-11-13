<?php
/*
	count 计算数组元素的个数
*/
$arr=['name'=>'songrui',12,65213,'fdsfs','xxoo',[1,2,3]];
$num=count($arr);
var_dump($num);

function myCount($array)
{
	//设置一个计数的变量
	$num=0;
	foreach ($array as $v){
		$num++;
	}
	//返回数组的个数
	return $num;
}
$myNum=myCount($arr);
var_dump($myNum);

?>