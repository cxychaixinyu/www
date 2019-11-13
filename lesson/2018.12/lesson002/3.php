<?php  
$a=1;
$b=$a;
$b=2;
echo $a;
echo '<hr/>';
$c=1;
$d=&$c;
$d=2;
echo $c;
$c=111;
var_dump($d);
unset($c);
var_dump($d);
?>



