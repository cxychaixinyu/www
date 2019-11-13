<?php
function sum()
{
	$arr=func_get_args();
	var_dump($arr);
	
	$sum=0;
	foreach($arr as $v){
		$sum+=$v;
	}
	echo $sum;
}
sum(8,6,54,78,152,78,44);
?>