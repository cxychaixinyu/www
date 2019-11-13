<?php
$arr=array(
    array(
        'id'=>1,
        'name'=>"柴昕宇",
        'age'=>21
    ),
    array(
        'id'=>2,
        'name'=>"张佳玉",
        'age'=>20
    ),
);
$json=json_encode($arr);
$back=$_REQUEST['callBack'];
echo "$back($json)";

