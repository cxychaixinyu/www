<?php
$arr=['name'=>'zhangsan','sex'=>'nan','age'=>23,'aa','ss'];
$brr=['name'=>'lisi','nv','24','bk','kr'];
$mm=['a','b','c','d',45];
$crr=array_merge($arr,$brr,$mm);
var_dump($crr);

function my_array_merge($array)
{
	$xxoo=[];
	$demo=func_get_args();
	foreach ($array as $value){
		foreach ($demo as $k=>$v){
			if(is_string($k)){
				$xxoo[$k]=$v;
			}else{
				$xxoo[]=$v;
			}
		}
	}
	return $xxoo;
}
$mycrr=my_array_merge($arr,$brr,$mm);
var_dump($mycrr);
?>