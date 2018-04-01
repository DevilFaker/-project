<?php
     session_start();
     $username=$_SESSION['username'];
     $a=$_POST["subtotal"];
	 $b=$_POST["tax"];
	 $c=$_POST["total"];
	 
     $connect=oci_connect("liteng", "Li86459451","SSID");
	 
	 
	  $i=1;
	  $sql="select * from order_info where username='{$username}'";
	  $stmt=oci_parse($connect,$sql);
	  oci_execute($stmt);
	  while(oci_fetch_array($stmt)){ $i++;  }
   

  
 
	$sql="insert into ordersummay (ORDERSUBTOTAL,SHIPPING,TOTAL,EMAIL,ORDER_ID) VALUES ('{$a}','{$b}','{$c}','{$username}','{$i}')" ;
	 

     
     $stmt=oci_parse($connect, $sql);
     oci_execute($stmt);
	 

     oci_commit($connect);
     echo 1;
	 
	 
	 
	 
	 

    