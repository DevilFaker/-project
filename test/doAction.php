<?php 
require_once 'include.php';
$act=$_REQUEST['act'];
if($act==="reg"){
    reg();
}elseif($act==="login"){
    login();
}elseif($act==="userOut"){
    userOut();
}
?>
