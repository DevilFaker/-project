<?php 
require_once 'include.php';
?>

<?php
//connect to database
$userid="scott";
$passwd="123";
$db="hy";
$check=0;
$name=trim($_POST["name"]);
$sql="select PASSWORD from SHOP where USERNAME='$name'";

$connect=oci_connect($userid, $passwd,$db);



if (!$connect) {
  echo "error, couldn't connect to hy database.";
  exit;
}
//parse sql statement

$stmt=oci_parse($connect,$sql);
if(!$stmt){
	echo "error,couldn't parse the sql statement.";
    
}

ocit_execute($symt);
if(oci_fetch_array($stmt)){
	
	$password=trim($_POST["password"]);
	$result=oci_fetch_array($stmt);
	
        if($password==$result){
        $_SESSION['username']=$name;
        echo "<script language=\"javascript\">";
        echo "window.location.href=\"customer-orders.html\";";
        echo "</script>";
        }
   }     
 else{
            
            
            exit;
         }

oci_close($connect);
?>

