<?php 
setcookie('islogin','',time()-1);
header("refresh:1;./login.html");
?>
