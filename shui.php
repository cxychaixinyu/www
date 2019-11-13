<?php
//for ($x=1;$x<=9;$x++){
//    for ($y=0;$y<=9;$y++){
//        for ($z=0;$z<=9;$z++){
//            $num=$x*$x*$x+$y*$y*$y+$z*$z*$z;
//            $sum=$x*100+$y*10+$z;
//            $arr=[];
//            if ($num==$sum){
//                $arr[]=$num;
//                var_dump($arr);
//            }
//        }
//    }
//}

$n=100;
while ($n<1000){
    $x=intval($n/100);
    $y=intval(($n-$x*100)/10);
    $z=$n-$x*100-$y*10;
    $a=$x*$x*$x+$y*$y*$y+$z*$z*$z;
    if ($n==$a){
        echo $n;
        echo "<br>";
    }
    $n++;
}