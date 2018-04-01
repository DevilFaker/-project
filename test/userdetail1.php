<?php 
   session_start();//apply  htmlentities function
  $firstname=htmlentities($_POST["firstname"]);
   
   $lastname=htmlentities($_POST["lastname"]);
   $address=htmlentities($_POST["address"]);
   $company=htmlentities($_POST["company"]);
   $city=htmlentities($_POST["city"]);
   $postcode=htmlentities($_POST["postcode"]);
   $telephone=htmlentities($_POST['telephone']);
   $state=htmlentities($_POST["state"]);
   $country=htmlentities($_POST["country"]);
   $email=htmlentities($_POST["email"]);
   $connect=oci_connect("liteng", "Li86459451","SSID");
   if(!$connect){
       echo "false";
       exit;
   }


 
   $username=$_SESSION["username"];
	  
   $sql="update user_detail set FIRSTNAME='{$firstname}',LASTNAME='{$lastname}',ADDRESS='{$address}',CITY='{$city}',COMPANY='{$company}',TELEPHONE='{$telephone}',STATE='{$state}',COUNTRY='{$country}',EMAIL='{$email}',POSTCODE='{$postcode}' where username='{$username}' ";
   $stmt=oci_parse($connect, $sql);
   oci_execute($stmt);
   oci_commit($connect);
 

   
   /*
   else{
     $sql="insert into user_detail (FIRSTNAME,LASTNAME,ADDRESS,CITY,COMPANY,TELEPHONE,STATE,COUNTRY,EMAIL,POSTCODE) values('{$firstname}','{$lastname}','{$address}','{$city}','{$company}','{$telephone}',
      '{$state}','{$country}','{$email}','{$postcode}')";
    }
	*/

   echo "<script>window.location.href='checkout2.php'</script>"; 
