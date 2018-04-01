<?php
     session_start();
     
     $pay=$_POST['pay'];
     $connect=oci_connect("liteng", "Li86459451","SSID");
     $sql="update user_detail set pay = '{$pay}' where eamil = '{$eamil}'";
     $stmt=oci_parse($connect, $sql);
     oci_execute($stmt);



