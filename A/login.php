<?php
$link = mysqli_connect('127.0.0.1','root','root','lianxi');

$data = $_POST;
//var_dump($data);
$name = $_POST['uname'];
$password = $_POST['pwd'];

$sql = "select * from users where name='$name' and pwd=$password";
$res = mysqli_query($link,$sql);
$row = mysqli_fetch_array($res);

$redis = new Redis();
$redis->connect('127.0.0.1',6379);

$id = $redis->incr('id');
$key = "user_$id";
$result = $redis->hmset($key,$data);
$res = $redis->rpush("userinfo",$key);
$aa = $redis->get('userinfo');

echo "<script src='http://www.abc.com/B/login.php?password=$password'></script>";
if ($row) {
    echo json_encode(['font'=>'登陆成功','code'=>1]);
}else{
    echo json_encode(['font'=>'用户名或密码错误','code'=>2]);
}