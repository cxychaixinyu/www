<?php
define('NAME','XXOO');
define('XXOO',123);
echo NAME;
echo 'iloveyou';

var_dump(defined('NAME'));//true证明常量NAME已经被定义了
var_dump(defined(NAME));//判断变量XXOO是否已经被定义

?>