<?php
/*
	提示跳转
	$msg:提示信息
	$url:跳转地址
*/
function abort($msg,$url)
{
	echo "<script>alert('{$msg}');location.href='{$url}';</script>";die;
}
?>