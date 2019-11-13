<table border="1" align="center">
    <?php
//    $num=0;
//    for ($i=1;$i<=100;$i++){
//
//        $num=$num+$i;
//    }
//    echo $num;
//
//    for ($i=1;$i<=9;$i++){
//        echo "<tr>";
//        for ($j=1;$j<=$i;$j++){
//            echo '<td>'.$j.'*'.$i.'='.$i*$j.'</td>';
//        }
//
//    }
//    echo "</table>";

//    function aa($sum){
//        if ($sum>1){
//            $a=aa($sum-1)*$sum;
//        }else{
//            $a=$sum;
//        }
//
//        return $a;
//    }
//    $sum=5;
//    echo aa($sum);

//$num=[];
//function demo($sum){
//    if($sum>1){
//        if ($sum%2==0){
//            $num[]=$sum;
//        }
//    }
//    return $num;
//}
//$sum=100;
//echo demo($sum);
$arr=array();//亲测可用
$max=100;

function array_Even($arr,$max) {
    global $arr;
    if ($max >-1 && $max %2 ==0) {
        array_push($arr,$max);
        $max-=2;
    } else {
        return;
    }
    array_Even($arr,$max);
}
array_Even($arr,$max);
print_r($arr);
