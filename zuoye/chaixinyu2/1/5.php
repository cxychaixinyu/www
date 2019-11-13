<?php
/*断路问题:*/
if($a=1 || $b=2){
	var_dump($b);
}
if($a=0 && $c=12){
	
}
var_dump($c);
?>