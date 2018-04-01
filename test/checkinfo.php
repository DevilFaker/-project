<?php
    $text=$_POST['text'];
	$type=$_POST['type'];
	checkType($type,$text);

	
	function checkType($type,$text){
		
		if ($type==1){
			
			checkName($text);
			
			
			
			
		}
		if ($type==2){
			
			checklName($text);
			
			
			
			
		}
		if ($type==3){
			
			checkAddress($text);
			
			
			
			
		}
		if ($type==4){
			
			checkCity($text);
			
			
			
			
		}
		if ($type==5){
			
			checkPostcode($text);
			
			
			
			
		}
		if ($type==6){
			
			checkTelephone($text);
			
			
			
			
		}
		if ($type==7){
			
			checkEmail($text);
			
			
			
			
		}
		if ($type==8){
			
			checkcardName($text);
			
			
			
			
		}
		if ($type==9){
			
			checkcardnumber($text);
			
			
			
			
		}
		if ($type==10){
			
			checkexpirymonth($text);
			
			
			
			
		}
		if ($type==11){
			
			checkexpiryyear($text);
			
			
			
			
		}
		if ($type==12){
			
			checkcvv($text);
			
			
			
			
		}
		
		
		
		
		
		
	}
	
	 
  function checkName($text){

      

       $regex = '/^[a-zA-Z]+$/';

      if (preg_match($regex,$text)) 
       {   

      
        
        if (strlen($text)>2&&strlen($text)<11)
        {
        echo 11;
		
		}
        else{
			
	    echo 10;		
			
		}
	   
	   
     }  
      	 
   else
       { 
       echo  12; 
        
       } 

}

function checklName($text){
 
     
       $regex = '/^[a-zA-Z]+$/';

      if (preg_match($regex,$text)) 
       {   

        
       
        if (strlen($text)>2&&strlen($text)<11)
        {
        echo 21;
		}
		
		
		else{
       echo 20;
       }
	   
	   
	   }   
	   
	   
	   
	   
	   
      else
       { 
        echo 22; 
        
       } 

}

function checkAddress($text){ 
 
       $regex = '/^[^0-9A-Za-z]+$/'; 
      if (preg_match($regex,$text)) { 
       echo 30; 
      } else { 
       echo 31; 
      } }

function checkCity($text){

	 
      $regex = '/^[0-9a-zA-Z]|[.]+$/';

      if (preg_match($regex,$text)) 
       {   

       echo  40;
       
        
       
         }   
      else
       { 
      echo  41; 
        
       } 

}

function  checkPostcode($text) {
 
	   $regex = '/^\d{4}$/'; 
      if (preg_match($regex,$text)) { 
     echo  50; 
        
      } else { 
    echo   51;  
       
      } 
	
}


function checkTelephone($text){
 
       $regex = '/^((\+)?86|((\+)?86)?)0?1[3458]\d{9}$|^(((0\d2|0\d{2})[- ]?)?\d{8}|((0\d3|0\d{3})[- ]?)?\d{7})(-\d{3})?$/'; 
      if (preg_match($regex,$text)) { 
      echo  60; 
      } else { 
      echo  61; 
        
      } 
}


function checkEmail($text){ 
$regex = '/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/'; 
   
   if (preg_match($regex,$text)) { 
      echo  70; 
      
      } else { 
     echo  71;
       
      } 
  }
function checkcardName($text){
 
$regex = '/^[a-zA-Z]+$/';

      if (preg_match($regex,$text)) 
       {   

        
       
        if ($text.length>2&&$text.length<11)
        {
        echo 81;
		}
		
		else{
			
			echo 80;
			
		}
		
		
       
       }   
      else
       { 
        echo 82; 
        
       } 
}	

function checkcardnumber($text){
 
   $regex = '/^[0-9]{4,14}$/';
  if (preg_match($regex,$text)) 
       {   

       echo  90;
       
        
       
         }   
      else
       { 
      echo  91; 
        
       } 

}

  
function checkexpirymonth($text){
 
   $regex = '/^[0-9]{2}$/';
  if (preg_match($regex,$text)) 
       {   

       echo  100;
       
        
       
         }   
      else
       { 
      echo  101; 
        
       } 

}

function checkexpiryyear($text){
 
   $regex = '/^[0-9]{4}$/';
  if (preg_match($regex,$text)) 
       {   

       echo  110;
       
        
       
         }   
      else
       { 
      echo  111; 
        
       } 

}




function checkcvv($text){
 
   $regex = '/^[0-9]{3}$/';
  if (preg_match($regex,$text)) 
       {   

       echo  120;
       
        
       
         }   
      else
       { 
      echo  121; 
        
       } 

}




















