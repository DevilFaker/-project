<?php
     session_start();//apply  htmlentities function
     $cardname=htmlentities($_POST["cardname"]);
     $cardnumber=htmlentities($_POST["cardnumber"]);
     $expirymonth=htmlentities($_POST["expirymonth"]);
     $expiryyear=htmlentities($_POST["expiryyear"]);
     $cvv=htmlentities($_POST['cvv']);
     $payment=htmlentities($_POST['payment']);
     $username=$_SESSION["username"];
     $connect=oci_connect("liteng", "Li86459451","SSID");
     $sql="update user_detail set CARDNAME='{$cardname}',CARDNUMBER='{$cardnumber}',EXPIRYMONTH='{$expirymonth}',EXPIRYYEAR='{$expiryyear}',CVV='{$cvv}' where username = '{$username}'";
     $stmt=oci_parse($connect, $sql);
     oci_execute($stmt);
	 oci_commit($connect);
	 
     echo "<script>window.location.href='checkout4.php'</script>";




