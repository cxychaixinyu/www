<?php
$arr=['name'=>'zhangsan','sex'=>'nan','age'=>20];
$res=array_keys($arr);
var_dump($res);

function my_array_keys($array)
{
	$xxoo=[];
	foreach ($array as $k=>$v){
		$xxoo[]=$k;
	}
	return $xxoo;
}
$myRes=my_array_keys($arr);
var_dump($myRes);
?>