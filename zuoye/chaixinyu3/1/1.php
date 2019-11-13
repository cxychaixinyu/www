<?php 
/*
	return 返回值
	注意：return 后面的代码不执行
*/
function demo($num1,$num2)
{
	return $num1+$num2;
	echo "i love you";//不执行
}

$res=demo(1,2);
$result=var_dump($res);
var_dump($result);
?>