<?php  
           //建立连接  
           $conn=oci_connect("scott","123","hy");  
           
           //检查连接是否成功  
           if($conn){  
               echo "connect success";  
           }  
           else{  
               echo "connect error";  
           }  
           ?> 