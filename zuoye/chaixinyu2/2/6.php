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
sum(54,45848,4584,854,12,54,44);
?>