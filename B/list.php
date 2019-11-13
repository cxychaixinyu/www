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
    <table align="center">
        <h1 align="center"><a href="javascript:0" id="get">获取数据</a></h1>
    </table>
    <script src="./jquery.js"></script>
    <script>
        $(function(){
            $('#get').click(function(){
                location.href='http://www.aaa.com/send.php';
                // header('location:http://wwwa.test.com/send.php');
            });
        });
    </script>
</body>
</html>

<?php
$get = $_GET;
if ($get) {
    $res = json_decode($get['data'],1);
    $datas = [];
    foreach($res as $v){
        $datas['data'] = $res;
    }
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
    <table align="center" width="500" border="1">
        <tr align="center">
            <td>ID</td>
            <td>姓名</td>
            <td>地址</td>
            <td>爱好</td>
        </tr>
        <?php
         if ($get) {
             foreach($datas as $v){
                 ?>
                 <tr align="center">
                     <td><?=$v['id']?></td>
                     <td><?=$v['name']?></td>
                     <td><?=$v['address']?></td>
                     <td><?=$v['hobby']?></td>
                 </tr>
                 <?php
             }
         }
        ?>
    </table>
</body>
</html>
