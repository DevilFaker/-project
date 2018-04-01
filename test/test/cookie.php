<?php 
extract($_POST);
setcookie("name",$name,time()+60*60);
setcookie("password",$password,time()+60*60);
?>

