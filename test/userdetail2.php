<?php
    session_start();
    $ship=$_POST["ship"];
	$username=$_SESSION["username"];
	

    $connect=oci_connect("liteng", "Li86459451","SSID");
	  $i=1;
	  $sql="select * from order_info where username='{$username}'";
	  $stmt=oci_parse($connect,$sql);
	  oci_execute($stmt);
	  while(oci_fetch_array($stmt)){ $i++;  }
    //$username=$_SESSION["username"];

    $sqt="update ORDERSUMMAY set SHIP = '{$ship}', TOTAL = TOTAL+{$ship} where email = '{$username}' and order_id='{$i}'";
    $stm=oci_parse($connect, $sqt);
    oci_execute($stm);
    oci_commit($connect);
    echo 1;
/*	
	$s="select * from ordersummay where email='{$username}'";
	$st=oci_parse($connect, $s);
	oci_execute($st);
    
	$total=array();
		     
			 $i=0;
	 while(oci_fetch_array($st)){
		     
             
	             
	$total[$i]=oci_result($st,'TOTAL');
				 
				 $i++;
				 
				 }
				 
   echo $total[0];	 
*/	 
 