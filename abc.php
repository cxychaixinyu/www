<?php
$res=$_REQUEST;
$id=$res['id'];
setcookie('id',$id,time()+3600*24);