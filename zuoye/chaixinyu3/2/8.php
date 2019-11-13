<?php
$a=2;
function demo()
{
	var_dump($GLOBALS['a']);
	$GLOBALS['a']=3;
}
demo();
var_dump($a);

?>