<?php 
//判断用户是否登录
//开启session
session_start();
//引用函数文件
include './function.php';
//判断用户是否已经登录
if (empty($_SESSION['islogin'])) {
  abort('请登录','./login.php');
}

//链接数据库
$link=mysqli_connect('localhost','root','root','cms');
//设置通信字符集
mysqli_set_charset($link,'utf8');
//确定每页显示的条数
$tiao=2;
//获得总页数 = 进一取整（总条数/每页显示的条数）
//获得总条数
$sqlCount="select count(*) as count from category";
$res=mysqli_query($link,$sqlCount);
$countRow=mysqli_fetch_assoc($res);
$total=$countRow['count'];
var_dump($countRow);
var_dump($total);
//获得总页数
$maxPage=ceil($total/$tiao);
var_dump($maxPage);
//确定当前的页数----url上边的p代表当前的页数
$page=empty($_GET['p'])?1:$_GET['p'];
//当前页做一个合法性的判断 最小为1 最大为$maxPage
$page=$page<1?1:$page;//限制最小
$page=$page>$maxPage?$maxPage:$page;//限制最大页

//上一页
$prev=$page-1<1?1:$page-1;
//下一页
$next=$page+1>$maxPage?$maxPage:$page+1;

//确定起始的位置 $start=(当前的页数-1)x每页显示的条数
$start=($page-1)*$tiao;


//查询数据库
$sql="select * from category limit {$start},{$tiao}";
//执行sql语句
$result=mysqli_query($link,$sql);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新闻分类列表</title>
<link rel="stylesheet" type="text/css" href="../css/public.css">
</head>

<body>
<div  id="main">
<table width="80%"  border="0" cellspacing="0" cellpadding="0" class="news_table">
  <caption>
    新闻分类列表
  </caption>
  <tr>
    <th scope="col">编号</th>
    <th scope="col" width="100">分类名称</th>
    <th scope="col">添加人</th>
    <th scope="col">时间</th>
    <th scope="col">操作</th>
  </tr>
<?php 
//处理结果
if ($result) {
  //声明编号的变量
  $num=$start+1;
  while ($row=mysqli_fetch_assoc($result)) {
    //格式化时间戳
    $time=date('Y-m-d H:i:s',$row['c_time']);
    echo "<tr>
            <td>{$num}</td>
            <td>{$row['c_name']}</td>
            <td>{$row['c_man']}</td>
            <td>{$time}</td>
            <td><a href='./cate.action.php?action=del&c_id={$row["c_id"]}'>删除</a>/<a href='./cate.update.php?c_id={$row["c_id"]}'></a></td>
          </tr>";
    $num++;
  }
}

  ?>
</table>



</div>
</body>
</html>
