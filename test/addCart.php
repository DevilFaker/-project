
<?php
   
   session_start();
   
   
   
   $id=$_POST["id"];
   $num=1;
   $name=$_POST["name"];
   $price=$_POST["price"];
   $src=$_POST['src'];
   $i=1;
   $username=$_SESSION["username"];
   $connect=oci_connect('liteng','Li86459451','SSID');
   
      $sql="select * from order_info where username='{$username}'";
	  $stmt=oci_parse($connect,$sql);
	  oci_execute($stmt);
	  while(oci_fetch_array($stmt)){ $i++;  }
   
   
   
   
   
   $sql="select * from product_detail where id='{$id}' and username='{$username}' and order_id='{$i}'";
   $stmt=oci_parse($connect,$sql);
   $a=0;
   oci_execute($stmt);
   $find=false;
   
    while(oci_fetch_array($stmt)){
	$sq="select num from product_detail where id='{$id}' and username='{$username}' and order_id='{$i}'"; 
	$stm=oci_parse($connect,$sq);
    oci_execute($stm);
	$result=oci_fetch_row($stm);
    $result++;
    $sqt="update product_detail set num=num+1 where username='{$username}'and id='{$id}' and order_id='{$i}'";
	$find=true;
	
	break;
 }
 
 
 
 
 if($find==false){
	$sqt="insert into product_detail values('{$id}','{$num}','{$username}','{$src}','{$name}','{$price}','{$i}')";
	 
 }
  $stml=oci_parse($connect,$sqt);
   oci_execute($stml);
   
   oci_commit($connect);
   echo 1;
   

   
/*   
   $sql="select * from product_detail where username='{$username}'";
   $stmt=oci_parse($connect,$sql);
   oci_execute($stmt);
   
   
   echo 1;
   //get id
   //add product
   //finished

*/