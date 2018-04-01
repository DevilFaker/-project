<?php  
           //建立连接  
           $conn=oci_connect("sys","toor as sysdba","hy");  
           //检查连接是否成功  
           if($conn){  
               echo "connect success";  
           }  
           else{  
               echo "connect error";  
           }  
           ?> 