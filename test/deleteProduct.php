<?php
      session_start();
      $username=$_SESSION['username'];
	  $id=$_POST["id"];
      $connect=oci_connect("liteng","Li86459451","SSID");
	  if(!$connect){
		  echo "false";
		  exit;
		  
	  }
	  $sql="delete from product_detail where ID ='{$id}'";
      $stmt=oci_parse($connect,$sql);
	  oci_execute($stmt);

      echo 1;
?>