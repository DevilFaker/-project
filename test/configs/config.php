<?php
define('DB_HOST','localhost');
define('DE_USER','liteng');
define('DB_PWD','Li86459451');
define('DB_DBNAME','shop');
define('DB_CHARSET', 'utf8');
define('DB_TABLENAME', 'shop_user');
?>

header("location:index.php");

<?php 
function alertMes($mes,$url){
   echo "<script>alert('{$mes}');</script>";
   echo "<script>window.location='xxx.php';</script>";

}
?>