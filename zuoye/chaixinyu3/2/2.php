<?php
$arr=['name'=>'songrui',15,556,'fsdf','dsff',[454,456,513,84]];
$num=count($arr);
var_dump($num);

function myCount($array)
{
	$num=0;
	foreach ($array as $v){
		$num++;
	}
	return $num;
}
$myNum=myCount($arr);
var_dump($myNum);
?>