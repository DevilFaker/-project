<?php 
function reg(){
    $arr=$_POST;
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    
    if(insert($username,$password,$email)){
        $mes="register successfully!<br/><meta http-equiv='refresh' content='3;url=customer-order.php'/>";
    }
    return $mes;
}

function login(){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from ".DB_TABLENAME." where username='{$username}' and password='{$password}'";
    
    $row=fetchOne($sql);
    
    if($row){
        
        $_SESSION['username']=$row['username'];
        $mes="successful!<br/><meta http-equiv='refresh';url=customer-order.php'/>";
    }else{
        $mes="false！<a href='login.php'>log again</a>";
    }
    return $mes;
}

function userOut(){
    
    setcookie(session_name(),"",time()-1);
    session_destroy();
    header("location:index.php");
}


