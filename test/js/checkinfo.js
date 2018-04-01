function checkName(input){


     
      var regex = /^[a-zA-Z]+$/;

      if (input.match(regex)) 
       {   

        document.getElementById("firstnamesuggestion").innerHTML="length should be limited 3 between 10";
        
        if (input.length>2&&input.length<11)
        {
        document.getElementById("firstnamesuggestion").innerHTML="";}
       
         }   
      else
       { 
        document.getElementById("firstnamesuggestion").innerHTML="letter only"; 
        
       } 

}
function checklName(input){

     
      var regex = /^[a-zA-Z]+$/;

      if (input.match(regex)) 
       {   

        document.getElementById("lastnamesuggestion").innerHTML="length should be limited 3 between 10";
       
        if (input.length>2&&input.length<11)
        {
        document.getElementById("lastnamesuggestion").innerHTML="";}
       
       }   
      else
       { 
        document.getElementById("lastnamesuggestion").innerHTML="letter only"; 
        
       } 

}

function checkCity(input){

	 
     var regex = /^[a-zA-Z]|[.]+$/;

      if (input.match(regex)) 
       {   

        document.getElementById("citysuggestion").innerHTML="";
       
        
       
         }   
      else
       { 
        document.getElementById("citysuggestion").innerHTML="letter and '.' only"; 
        
       } 

}

function checkAddress(input){ 
      var regex = /^[^0-9A-Za-z]+$/; 
      if (input.match(regex)) { 
        document.getElementById("addresssuggestion").innerHTML="please enter valid address "; 
      } else { 
        document.getElementById("addresssuggestion").innerHTML=""; 
      } }


function checkTelephone(input){

      var regex = /^((\+)?86|((\+)?86)?)0?1[3458]\d{9}$|^(((0\d2|0\d{2})[- ]?)?\d{8}|((0\d3|0\d{3})[- ]?)?\d{7})(-\d{3})?$/; 
      if (input.match(regex)) { 
        document.getElementById("telephonesuggestion").innerHTML=""; 
      } else { 
        document.getElementById("telephonesuggestion").innerHTML="number only and please enter vaild telephone"; 
        
      } 
}


function checkEmail(input){var regex = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/; 
      if (input.match(regex)) { 
        document.getElementById("emailsuggestion").innerHTML=""; 
        document.getElementById("reg").disabled=false;
      } else { 
       document.getElementById("emailsuggestion").innerHTML="example@example.com";
       
      } 
  }



function checkState(){}



function  checkPostcode(input) {
      var regex = /^\d{6}$/; 
      if (input.match(regex)) { 
        document.getElementById("postcodesuggestion").innerHTML=""; 
        
      } else { 
       document.getElementById("postcodesuggestion").innerHTML="6 number only";  
       
      } 
	
}
