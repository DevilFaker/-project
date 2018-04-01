<?php 
/**
 * 连接数据库
 * @return resource
 */
function connect(){
    $connect=oci_connect(DB_USER,DB_PWD,DB_DBNAME) 
    if (!$connect) {
    echo "error, couldn't connect to ".DB_DBNAME." database.";
    exit;
}
    
   
    return $connect;
}

/**
 * 完成记录插入的操作
 * @param string $username,$password,$email
 * @return number
 */
function insert($username,$password,$email){
    
    $sql="INSERT INTO".DB_TABLENAME."VALUES (".$username.",".$password.",".$email.");";
    $stmt=oci_parse($connect,$sql);
    ocit_execute($stmt);
}

//update imooc_admin set username='king' where id=1
/**
 * 记录的更新操作
 * @param string $username,$password
 * @return string
 */
function update($username,$password){
        
        $sql="update ".DB_TABLENAME." set Password= '".$password."'"."where username='".$username."';";
        $stmt=oci_parse($connect,$sql);
        $result=oci_execute($stmt);
       
        if($result){
            echo "Password has changed";
        }else{
            echo "Password has not changed  ";
        }
}

/**
 *得到指定一条记录
 * @param string $sql
 * @param string $result_type
 * @return multitype:
 */
function fetchOne($sql){
    
    $result=oci_parse($connect,$sql);
    $row=oci_fetch_array($result);
    return $row;
}

// /**
//  *得到指定一条记录
//  * @param string $username,$password
//  * @param string $result_type
//  * @return multitype:
//  */
// function check($username,$password){
//     $connect=oci_connect(DB_USER,DB_PWD,DB_DBNAME);
//     $sql="SELECT password FROM ".DB_TABLENAME."WHERE username='".$username."';";
//     $stmt=oci_parse($connect,$sql);
//     ocit_execute($stmt);
//     $result=oci_fetch_array($stmt) ;
// }


?>