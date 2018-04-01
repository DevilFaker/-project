<?php
      session_start();//apply  htmlentities function
     $username=$_SESSION['username'];//User password
     $user_password=htmlentities($_POST["password"]);
	 # Generate dynamic salt
	 
	
	//Random String of salt used for everyone
	 $salt = 'salt1024';
	
	# Hash password
	 $password = md5($salt.$user_password);
     $connect=oci_connect("liteng", "Li86459451","SSID");
     $sql="select * from user_detail where password = '{$password}' and username = '{$username}'";
     $stmt=oci_parse($connect, $sql);
     oci_execute($stmt);
     $a=0;
	 while(oci_fetch_array($stmt)){
		 
		 $a=1;
	 }
     
     echo $a;

