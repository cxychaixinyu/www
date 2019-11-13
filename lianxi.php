<?php
$arr=[1,3,5,7,100];
$i=0;
foreach ($arr as $v){
    $i++;
}
for ($z=$i;$z>=3;$z--){
    $arr[$z]=$arr[$z-1];
}
$arr[3]=90;
var_dump($arr);