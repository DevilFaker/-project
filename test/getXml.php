<script type="text/javascript" src="jquery.js"></script>
<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("c.xml");

$x=$xmlDoc->getElementsByTagName('clothes');


$q=$_GET["q"];


if (strlen($q) > 0)
{
$hint="";
$hint2="";

for($i=0; $i<($x->length); $i++)
 {
 $y=$x->item($i)->getElementsByTagName('product');
 $z=$x->item($i)->getElementsByTagName('sex');
 $sex=$z->item(0)->childNodes->item(0)->nodeValue;
 $productname=$y->item(0)->childNodes->item(0)->nodeValue;
 $productname=$productname." ".$sex."";
  if (stristr($productname,$q))
   {
   if ($hint=="")
    {
    
    $hint=$productname ;
	$hint='<li onClick="fill(\''.$productname.'\');"><b>'.$productname.'</b></li>';
    }
   else
    {
    $hint2=$productname;
    $hint=$hint .'<li onClick="fill(\''.$productname.'\');"><b>'.$productname.'</b></li>';
    }
   }
  
 }
}

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint == "")
 {
 $response="no suggestion";
 }
else
 {
 $response=$hint;
 }
 
//output the response
echo $response;

?>