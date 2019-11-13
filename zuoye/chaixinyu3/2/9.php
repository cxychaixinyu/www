<?php
$sex=555;
function demo()
{
	global $num,$sex;
	$num=2;
	var_dump($sex);
}
demo();

var_dump($num);
var_dump($GLOBALS);
?>