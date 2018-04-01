	<?php   

      $connect=oci_connect("liteng","Li86459451","SSID");
	  if(!$connect){
		  echo "false";
		  exit;
		  
	  }
	  if (isset($_SESSION)){
	  $username=$_SESSION['username'];
	  
	  $sql="select * from product_detail where username='{$username}'";
	  $stmt=oci_parse($connect,$sql);
	  oci_execute($stmt);
	         $id=array();
            
			 $i=0;
		     
			 
			 while(oci_fetch_array($stmt)){

				 $id[$i]=oci_result($stmt,'ID');
				 $i++;
				 
				 }
    }		 
 
?>
