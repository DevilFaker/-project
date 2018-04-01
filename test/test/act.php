function insert($table,$array){
$sql=insert into {$table}($keys) ("username","password","email")values("","");
return 
}

function update($table,$arry,$where=null){
foreach($array as $key=>$val){
 if($str==null){
    $sep="";

 }else{
 $sep=",";

 }

$str.=$sep.$key."='".$val."'";
$sql='update{$table}set{$str}'.($where==null?null:"where".$where);
    return 
}

}

function logout(){
  $_SESSION=array();
  if(isset($_COOKIE[seesion_name()])){
    setcookie(seesion_name(),"",time()-1);
  }
 session_destroy()；
 header("location:loggin.php");
}
