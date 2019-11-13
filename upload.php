<?php
    $arr=$_FILES;

    $info=$_REQUEST;

    $ext=explode(".",$info['filename']);
    $fileName=$info['filename'];
//var_dump($info);
//    echo $fileName;die;
    $baseDir="./".date("Y/m/d",time());
//    echo $baseDir;die;
    if (!is_dir($baseDir)){
        mkdir($baseDir,0,777);
    }
    $filePath=$baseDir."/".$fileName;
//    echo $filePath;
    $tmpName=$arr['data']['tmp_name'];
    move_uploaded_file($tmpName,$filePath);
    $filePath=ltrim($filePath,".");
//    var_dump($filePath);
    $arrRrturn=array(
        "error"=>0,
        "data"=>array(
            'path'=>$filePath
        ),
    );
    echo json_encode($arrRrturn);