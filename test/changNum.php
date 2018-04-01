<?php 
      session_start();
      $num=$_POST["num"];
	  $id=$_POST["id"];
      $connect=oci_connect("liteng","Li86459451","SSID");
	  if(!$connect){
		  echo "false";
		  exit;
		  
	  }
	  $username=$_SESSION['username'];
	  
	  
	  $i=1;
	  $sql="select * from order_info where username='{$username}'";
	  $stmt=oci_parse($connect,$sql);
	  oci_execute($stmt);
	  while(oci_fetch_array($stmt)){ $i++;  }
	  
	  $sql="update product_detail set NUM='{$num}' where username='{$username}' and id='{$id}' and order_id='{$i}' ";
	  $stmt=oci_parse($connect,$sql);
	  oci_execute($stmt);
      echo $id;

?>