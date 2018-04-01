<?php
session_start();
    $total=$_POST["total"];
    $username=$_SESSION['username'];
    $connect=oci_connect("liteng", "Li86459451","SSID");
	
	$sql="select * from order_info where username='{$username}'";
	$stm=oci_parse($connect, $sql);
    oci_execute($stm);
	$i=1;

	
	while(oci_fetch_array($stm)){
		
      $i++;
	 
	  
	
	
	}  
 
 
	  if($i>1){
	  
	  $sql="insert into order_info (total,username,order_id,dd) values ('{$total}','{$username}','{$i}',sysdate)";
      $stml=oci_parse($connect, $sql);
      oci_execute($stml);
      oci_commit($connect);
	  $sql="update product_detail set order_id = '{$i}' where username='{$username}' and order_id=''";
      $stml=oci_parse($connect, $sql);
      oci_execute($stml);
      oci_commit($connect);
	  
	  
	  echo $i;
	  }
	  
	  
	if($i==1){
		$sql="insert into order_info (total,username,order_id,dd) values ('{$total}','{$username}','1',sysdate)";
    $stmt=oci_parse($connect, $sql);
    oci_execute($stmt);
    oci_commit($connect);
	$sql="update product_detail set order_id = '{$i}' where username='{$username}'";
      $stml=oci_parse($connect, $sql);
      oci_execute($stml);
      oci_commit($connect);
	echo $i;
		
		
		
	}
	
	
	
    /*$sql="update order_info set order_id = 0  where username = '{$username}'";
    $stm=oci_parse($connect, $sqt);
    oci_execute($stm);
    oci_commit($connect);
	
    $sqt="update order_info set order_id = order_id+ 1 where username = '{$username}'";
    $stm=oci_parse($connect, $sqt);
    oci_execute($stm);
    oci_commit($connect);
	*/
	