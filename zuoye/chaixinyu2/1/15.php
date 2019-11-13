<?php
function sum()
{
	//获得所有的实参
	var_dump(func_get_args());
	//获得实参的个数
	var_dump(func_num_args());
	//获得指定位置的实参
	var_dump(func_get_arg(3));
}
sum(1,2,3,11);
?>