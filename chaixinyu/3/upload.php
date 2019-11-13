<?php
/*
	上传图片
	1、错误号
	2、文件类型
	3、文件的大小
*/
//接受上传信息
var_dump($_FILES);
$fileInfo=$_FILES['pic'];
//1、错误号处理
switch ($fileInfo['error']){
	case 1:
		die("上传的文件超过了php.ini中upload_max_filesize 选项限制的值。");
	case 2:
		die("上传的文件的大小超过了HTML表单中MAX_FILE_SIZE 选项指定的值。");
	case 3:
		die("文件只有部分被上传。");
	case 4:
		die("没有文件被上传。");
	case 6:
		die("找不到临时文件夹。");
	case 7:
		die("文件写入失败。");
}
//2、文件类型
//2-1、设置允许上传的类型、
$arr=['image/jpeg','image/png','image/gif'];
//2-2、判断上传文件的类型是否为允许类型
if(!in_array($_FILES['pic']['type'],$arr)){
	die("请上传合法类型的文件");
}

//3、限制大小
$maxSize=1024*1024;//1M
//判断大小是否符合
if($_FILES['pic']['size']>$maxSize){
	die("上传文件最大为1M");
}

//4、判断文件是否为表单上传
if(!is_uploaded_file($_FILES['pic']['tmp_name'])){
	die("请通过合法路径上传文件");
}

//5、移动文件
//生成指定日期的文件夹
//获得日期
$date=date('Y-m-d');
//判断该文件是否存在
$dirPath='./uploads/'.$date;
echo $dirPath;die;
if(!file_exists($dirPath)){
	//文件不存在，创建文件夹
	mkdir($dirPath);
}
//生成不重复的名字----文件名 分为 名字和后缀
do{
	$name=date('YmdHis').rand(1000,9999);
	//后缀
	$brr=explode('.',$_FILES['pic']['name']);
	$type=array_pop($brr);
	var_dump($type);
	var_dump($brr);
	//组装新路径
	$newPath=$dirPath.'/'.$name.'.'.$type;
	echo $newPath;
	die;
}while(file_exists($newPath));//file_exists() 检查文件或目录是否存在
if(move_uploaded_file($_FILES['pic']['tmp_name'],$newPath)){
	echo "上传文件成功";
}else{
	echo "上传文件失败";
}

?>