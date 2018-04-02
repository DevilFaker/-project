<?php while (oci_fetch_array($stmt)){
    $name=trim($_POST["name"]);
    $password=trim($_POST["password"]);
    $sql="select password from user where username='$name'";
    $result=oci_fetch_array($stmt);
    //注释
         if($password==$result{
            $check=1
         }

         else{
            $msg="password is wrong ,please enter again "；
         }

        

if($check==1){
    $user_ip=$_SERVER['REMOTE_ADDR'];
        $user_session=$user_ip.$name."hfk";
        $user_session=md5($user_session);
        //session_register("user_session");
        //session_register("name");
        $_SESSION['passport']=$user_session;
        $_SESSION['username']=$name;
        echo "<script language=\"javascript\">";
        echo "window.location.href=\"customer-orders.html\";";
        echo "</script>";
    }
    else{
        echo "<div align=\"center\">";
        echo $msg;
        echo "</div>";
    }
}



oci_close($connect);
?>


$user_ip=$_SERVER['REMOTE_ADDR'];
        $user_session=$user_ip.$name."hfk";
        $user_session=md5($user_session);
        //session_register("user_session");
        //session_register("name");


        <ul class="nav nav-pills nav-stacked category-menu" ><!-- link relevant html -->
                                <li class="active">
                                    <a href="category-man.html" >Men <span class="badge pull-right">13</span></a>
                                    <ul>
                                        <li ><a href="category-man-tshirt.html" >T-shirts<span class="badge pull-right">5</span></a>
                                        </li>
                                        <li><a href="category-man-shirt.html">Shirts<span class="badge pull-right">3</span></a>
                                        </li>
                                        <li><a href="category-man-pants.html">Pants<span class="badge pull-right">2</span></a>
                                        </li>
                                        <li><a href="category-man-Accessories.html">Accessories<span class="badge pull-right">3</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="category-lady.html">Ladies  <span class="badge pull-right">15</span></a>
                                    <ul>
                                        <li><a href="category-lady-tshirt.html">T-shirts<span class="badge pull-right">4</span></a>
                                        </li>
                                        <li><a href="category-lady-shirt.html">Shirts<span class="badge pull-right">5</span></a>
                                        </li>
                                        <li><a href="category-lady-pant.html">Pants<span class="badge pull-right">3</span></a>
                                        </li>
                                        <li><a href="category-lady-Accessories.html">Accessories<span class="badge pull-right">3</span></a>
                                        </li>
                                    </ul>
                                </li>
                                

                            </ul>

                        </div>


                        function select_city(){
    alert(1);
var city=[["BeiJing","SiChuan","HeLan","HeBei","HuLan","HuBei"],["Victoria","New South Wales","Queensland","South Australia","Perth","Tasmania"],["Alaska","California","Colorado","Connecticut","Florida","Hawaii","Michigan","Mississippi"]];

   document.getElementById("c").innerHTML="<label for="country">Country *</label><select class="form-control" id="country"required>";
    var s=document.getElementById("c").innerHTML;
    for(j=0;j<city[0].length;j++){
        s=s+'<option>';
        s=s+city[0][j];
        s=s+'</option>';   
       }
       s=s+'</select><p id="citysuggestion"></p>';

    document.getElementById("c").innerHTML=s;   
 } 


 function checkLogined(){
    if($_SESSION['adminId']==""&&$_COOKIE['adminId']==""){
        alertMes("请先登陆","login.php");
    }
}
