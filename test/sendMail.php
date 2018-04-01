<?php
   session_start();//apply  htmlentities function
   
if(isset($_POST['captcha'])) {
	
	//If the codes match
	if($_SESSION['captcha'] == $_POST['captcha']) {
		
	} else {
		
		session_destroy();
		die('captcha is wrong!');
	}
}
   
   
  // $firstname=htmlentities($_POST["firstname"]);
  // $lastname=htmlentities($_POST["lastname"]);
   $subject=htmlentities($_POST["subject"]);
   $message=htmlentities($_POST["message"]);

   $to = "info@obaju.com";


$from =htmlentities($_POST["email"]);
$headers = "From: $from";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";

?>