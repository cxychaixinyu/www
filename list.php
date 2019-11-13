<?php
$link=mysqli_connect('127.0.0.1','root','root','lianxi');
$sql="select * from name";
$res=mysqli_query($link,$sql);

$redis=new Redis();
$redis->connect('127.0.0.1',6379);

ob_start();
$filename="list.html";
if (file_exists($filename)){
$content=file_get_contents($filename);
echo $content;
exit;
}

$data=[];
while ($row=mysqli_fetch_array($res)){
array_push($data,$row);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table align="center" border="1">
    <tr align="center">
        <td>ID</td>
        <td>姓名</td>
        <td>地址</td>
        <td>描述</td>
    </tr>
    <?php
    foreach ($data as $v){
        ?>
        <tr align="center">
            <td><?=$v['id']?></td>
            <td><?=$v['name']?></td>
            <td><?=$v['address']?></td>
            <td><?=$v['dnc']?></td>
        </tr>
        <?php
    }
    ?>
</table>
<?php

$contents=ob_get_contents();

$time=3600*24;
$res=$redis->set("list",$contents,$time);
file_put_contents("list.html",$contents);
?>
</body>
</html>