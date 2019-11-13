<?php
$arr=['name'=>'zhangsan','sex'=>'nan','age'=>18];
$res=array_values($arr);
var_dump($res);

function my_array_values($array)
{
	$xxoo=[];
	foreach ($array as $v){
		$xxoo[]=$v;
	}
	return $xxoo;
}
$myRes=my_array_values($arr);
var_dump($myRes);
?>