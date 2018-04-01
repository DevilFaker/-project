<?php 
require_once 'include.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju Your Fashion Shop">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Obaju : Your Fashion Shop
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">
<script type="text/javascript" src="js/searchFunc.js"></script>
	<link href="css/suggestbox.css" rel="stylesheet">
	<script src="showProduct.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
   <script src="checkinfo.js"></script>

</head>

<body>
    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a>  <a href="#">Get flat 35% off on orders over $500!</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <?php  
	  if (isset($_SESSION["username"])){
		  echo '<li><a href="cutomer-account.php">';
		  echo $_SESSION["username"];
		  echo '</a></li><li><a href="doAction.php?act=userOut">log out</a></li>';
		  }
	  else{
		  echo	'<li ><a href="#" data-toggle="modal" data-target="#login-modal">Login</a> </li>';
}	  
 
?>
                    <li><a href="register.php">Register</a>
                    </li>
                    <li><a href="contact.php">Contact</a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="doAction.php?act=login" method="post">
                            <div class="form-group">
                               <input type="text" class="form-control" id="email-modal" placeholder="username" name='username' required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password" name='password' required>
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.php"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    
	<?php   

      $connect=oci_connect("liteng","Li86459451","SSID");
	  if(!$connect){
		  echo "false";
		  exit;
		  
	  }
	  if (isset($_SESSION)){
	  $username=$_SESSION['username'];
	  
	  $sql="select * from product_detail where username='{$username}'";
	  $stmt=oci_parse($connect,$sql);
	  oci_execute($stmt);
	         $id=array();
            
			 $i=0;
		     
			 
			 while(oci_fetch_array($stmt)){

				 $id[$i]=oci_result($stmt,'ID');
				 $i++;
				 
				 }
    }		 
 
?>





 
 
 
    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.php" data-animate-hover="bounce">
                    <img src="img/logo.png" alt="Obaju logo" class="hidden-xs">
                    <img src="img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="basket.php">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs"><?php echo $i; ?> items in cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="index.php">Home</a>
                    </li>
														
					<li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Men <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-6"> <!-- col-sm-3 is changed to col-sm-6 by Shang-->
                                            <h5>Clothing</h5>
                                            <ul>
                                                <li><a href="category-man.php">T-shirts</a>
                                                </li>
                                                <li><a href="category-man.php">Shirts</a>
                                                </li>												
                                                <li><a href="category-man.php">Pants</a>
                                                </li>												
                                                <!--
												<li><a href="category-man.php">Accessories</a>
                                                </li>
												-->
                                            </ul>
                                        </div>
                                        <!--<div class="col-sm-3">
                                            <h5>Shoes</h5>
                                            <ul>
                                                <li><a href="category.php">Trainers</a>
                                                </li>
                                                <li><a href="category.php">Sandals</a>
                                                </li>
                                                <li><a href="category.php">Hiking shoes</a>
                                                </li>
                                                <li><a href="category.php">Casual</a>
                                                </li>
                                            </ul>
                                        </div> commented by Shang 03/07/2017-->
                                        <div class="col-sm-6"> <!-- col-sm-3 is changed to col-sm-6 by Shang-->
                                            <h5>Accessories</h5>
                                            <ul>
                                                <li><a href="category-man.php">Bags</a>
                                                </li>
                                                <li><a href="category-man.php">Belts</a>
                                                </li>
												<!--
                                                <li><a href="category.php">Hiking shoes</a>
                                                </li>
                                                <li><a href="category.php">Casual</a>
                                                </li>
                                                <li><a href="category.php">Hiking shoes</a>
                                                </li>
                                                <li><a href="category.php">Casual</a>
                                                </li>
												-->
                                            </ul>
                                        </div>
                                        <!--<div class="col-sm-3">
                                            <h5>Featured</h5>
                                            <ul>
                                                <li><a href="category.php">Trainers</a>
                                                </li>
                                                <li><a href="category.php">Sandals</a>
                                                </li>
                                                <li><a href="category.php">Hiking shoes</a>
                                                </li>
                                            </ul>
                                            <h5>Looks and trends</h5>
                                            <ul>
                                                <li><a href="category.php">Trainers</a>
                                                </li>
                                                <li><a href="category.php">Sandals</a>
                                                </li>
                                                <li><a href="category.php">Hiking shoes</a>
                                                </li>
                                            </ul>
                                        </div> commented by shang 03/07/2017-->
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Ladies <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-6"> <!-- col-sm-3 is changed to col-sm-6 by Shang-->
                                            <h5>Clothing</h5>
                                            <ul>
                                                <li><a href="category-lady.php">T-shirts</a>
                                                </li>
                                                <li><a href="category-lady.php">Shirts</a>
                                                </li>
                                                <li><a href="category-lady.php">Pants</a>
                                                </li>
												<!--
                                                <li><a href="category-lady.php">Accessories</a>
                                                </li>
												-->
                                            </ul>
                                        </div>
                                        <!-- <div class="col-sm-3">
                                            <h5>Shoes</h5>
                                            <ul>
                                                <li><a href="category.php">Trainers</a>
                                                </li>
                                                <li><a href="category.php">Sandals</a>
                                                </li>
                                                <li><a href="category.php">Hiking shoes</a>
                                                </li>
                                                <li><a href="category.php">Casual</a>
                                                </li>
                                            </ul>
                                        </div>  commented by Shang 03/07/2017-->
                                        <div class="col-sm-6"> <!-- col-sm-3 is changed to col-sm-6 by Shang-->
                                            <h5>Accessories</h5>
                                            <ul>
                                                <li><a href="category-lady.php">Bags</a>
                                                </li>
                                                <li><a href="category-lady.php">Belts</a>
                                                </li>
												<!--
                                                <li><a href="category.php">Hiking shoes</a>
                                                </li>
                                                <li><a href="category.php">Casual</a>
                                                </li>
                                                <li><a href="category.php">Hiking shoes</a>
                                                </li>
                                                <li><a href="category.php">Casual</a>
                                                </li>
												-->
                                            </ul>
                                            <!--<h5>Looks and trends</h5>
                                            <ul>
                                                <li><a href="category.php">Trainers</a>
                                                </li>
                                                <li><a href="category.php">Sandals</a>
                                                </li>
                                                <li><a href="category.php">Hiking shoes</a>
                                                </li>
                                            </ul> commented by Shang 03/07/2017-->
                                        </div>
                                        <!--<div class="col-sm-3">
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="img/banner.jpg" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="img/banner2.jpg" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                        </div> commented by Shang 03/07/2017-->
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Site <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Shop</h5>
                                            <ul>
                                                <li><a href="index.php">Homepage</a>
                                                </li>
                                                <li><a href="category-man.php">Category - men</a>
                                                </li>
												<li><a href="category-lady.php">Category - ladies</a>
                                                </li>                                                 
                                                <!--
												<li><a href="category.php">Category - sidebar left</a>
                                                </li>
												<li><a href="category-full.php">Category - full width</a>
                                                </li> 
                                                <li><a href="detail.php">Product detail</a>
                                                </li> 
												-->
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>User</h5>
                                            <ul>
                                                <li><a href="register.php">Register / login</a>
                                                </li>
                                                <li><a href="customer-orders.php">Orders history</a>
                                                </li>
                                                <li><a href="customer-order.php">Order history detail</a>
                                                </li>
                                                <li><a href="customer-account.php">Customer account / change password</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Order process</h5>
                                            <ul>
                                                <li><a href="basket.php">Shopping cart</a>
                                                </li>
												<!--
                                                <li><a href="checkout1.php">Checkout - step 1</a>
                                                </li>
                                                <li><a href="checkout2.php">Checkout - step 2</a>
                                                </li>
                                                <li><a href="checkout3.php">Checkout - step 3</a>
                                                </li>
                                                <li><a href="checkout4.php">Checkout - step 4</a>
                                                </li>
												commented by Shang 03/07/2017-->
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Information</h5>
                                            <ul>                                                
                                                <li><a href="aboutus.php">About us</a>
                                                </li>
												<li><a href="terms.php">Terms and conditions</a>
                                                </li>
												<li><a href="faq.php">FAQ</a>
                                                </li>                                                                                                
                                                <li><a href="contact.php">Contact</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->
			<?php
     $username=$_SESSION['username'];

     $connect=oci_connect("liteng", "Li86459451","SSID");
	  $i=1;
	  $sql="select * from order_info where username='{$username}'";
	  $stmt=oci_parse($connect,$sql);
	  oci_execute($stmt);
	  while(oci_fetch_array($stmt)){ $i++;  }
	  
	  $e=0;
	  $sql="select sum(num) from product_detail where username='{$username}' and ORDER_ID='{$i}'";
	  $stmt=oci_parse($connect,$sql);
	  oci_execute($stmt);
	  while(oci_fetch_array($stmt)){ $e=oci_result($stmt,'SUM(NUM)');  }
			?>
            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="basket.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm"><?php echo $e; ?> items in cart</span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" action="search_product.php" method="post" role="search">
                    <div class="input-group">
                        <input type="text" id="txt1" name="name" onkeyup="showHint(this.value)" onkeydown ="showAgain()" class="form-control" placeholder="Search">
						<div class="suggestionsBox" id="suggestions" >
						<div class="suggestionList" id="txtHint"></div>
						</div>
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li>My account</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Customer section</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li >
                                    <a href="customer-orders.php"><i class="fa fa-list"></i> My orders</a>
                                </li>
								<!--
                                <li>
                                    <a href="customer-wishlist.php"><i class="fa fa-heart"></i> My wishlist</a>
                                </li>
								-->
                                <li class="active">
                                    <a href="customer-account.php"><i class="fa fa-user"></i> My account</a>
                                </li>
                                <li>
                                    <a href="doAction.php?act=userOut"><i class="fa fa-sign-out"></i> Logout</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>

                <div class="col-md-9">
                    <div class="box">
                        <h1>My account</h1>
                        <p class="lead">Change your personal details or your password here.</p>
                        <p class="text-muted">* field is compulsory.</p>
<!-- change password -->
                        <h3>Change password</h3>

                        
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_old">Old password *</label>
                                        <input type="password" class="form-control" id="password_old" onblur="checkOldPassword(this.value)" required>
										<p id="oldAlert"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_1">New password *</label>
                                        <input type="password" class="form-control" id="password_1" required>
										
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_2">Retype new password *</label>
                                        <input type="password" class="form-control" id="password_2" required onblur="checkNewPassword(this.value)" >
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                            <div class="col-sm-12 text-center">
                                <button  class="btn btn-primary" id="changePassword" onclick="changePassword()"><i class="fa fa-save"></i> Save new password</button>
                            </div>
                        

                        <hr>
<!-- change user imformation -->
                        <h3>Personal details</h3>
                        <form action="userdetail1-1.php" method="post">
                            

                           <?php
     if (isset($_SESSION)){
     $username=$_SESSION['username'];
    
     $connect=oci_connect("liteng", "Li86459451","SSID");
     $sql="select * from user_detail where username='{$username}'" ;
     $stmt=oci_parse($connect, $sql);
     oci_execute($stmt);
     $firstname=array();
     $lastname=array();
     $address=array();
     $company=array();
     $city=array();
     $postcode=array();
     $state=array();
     $country=array();
     $phone=array();
     
     $i=0;
     while (oci_fetch_array($stmt)){
		         $address[$i]=oci_result($stmt,'ADDRESS');
				 if($address[0]==''){
					 
					 break;
				 } 
				 if($address[0]!==''){
                 $firstname[$i]=oci_result($stmt,'FIRSTNAME');
                 $lastname[$i]=oci_result($stmt,'LASTNAME');
                 
                 $company[$i]=oci_result($stmt,'COMPANY');
                 $city[$i]=oci_result($stmt,'CITY');
                 $postcode[$i]=oci_result($stmt,'POSTCODE');
                 $state[$i]=oci_result($stmt,'STATE');
                 $country[$i]=oci_result($stmt,'COUNTRY');
                 $phone[$i]=oci_result($stmt,'TELEPHONE');
                 
                 $i++;
            }


     }


 }
?>	
						
                            <div class="content">
								<p class="from-group text-muted">* field is compulsory.</p> <!-- added by Shang -->
								
                                <div class="row">									
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Firstname *</label>
                                            <input type="text" class="form-control" id="firstname" onkeyup ="checkinfo(this.value,1)" value='<?php echo $firstname[0]; ?>' name="firstname" required>
                                            <p id="firstnamesuggestion"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Lastname *</label>
                                            <input type="text" class="form-control" id="lastname" name="lastname" value='<?php echo $lastname[0]; ?>' onkeyup="checkinfo(this.value,2)" required>
                                            <p id="lastnamesuggestion"></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="address">Address *</label>
                                            <input type="text" class="form-control" id="address" name="address" value='<?php echo $address[0]; ?>' onkeyup="checkinfo(this.value,3)" required> 
                                            <p id="addresssuggestion"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="company">Company</label>
                                            <input type="text" class="form-control" id="company" value='<?php echo $company[0] ;?>' name="company"  >
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="city">City *</label>
                                            <input type="text" class="form-control" id="city" name="city" value='<?php echo $city[0]; ?>' onkeyup ="checkinfo(this.value,4)" required>
                                            <p id="citysuggestion" class="post"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="postcode">Postcode *</label>
                                            <input type="text" class="form-control" id="postcode" name="postcode" value='<?php echo $postcode[0]; ?>' onkeyup="checkinfo(this.value,5)" required>
                                            <p id="postcodesuggestion" class="post"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="country">Country *</label>
                                            <select class="form-control" name="country" id="country"  required onchange="a()">
											<option value='<?php echo $country[0]; ?>'><?php echo $country[0]; ?></option>
                                            
                                            <option value='China' >China</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Amerian">Amerian</option>
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3" id="d">
                                        <div class="form-group"><label for="state">State *</label><select class="form-control" name="country"   id="country" required  >
										<option value='<?php echo $state[0]; ?>' ><?php echo $state[0]; ?></option>
										</select></div>
                                    </div> 

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">Telephone *</label>
                                            <input type="text" class="form-control" id="phone" name="telephone" value='<?php echo $phone[0]; ?>'  onkeyup="checkinfo(this.value,6)" required>
                                            <p id="telephonesuggestion"></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email *</label>
                                            <input type="text" class="form-control" id="email" name="email" value='<?php echo  $_SESSION['email']; ?>' onkeyup ="checkinfo(this.value,7)" required>
                                            <p id="emailsuggestion"></p>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.row -->
                            </div>

                            <div class="box-footer">
                                
                                <div class="pull-right">
                                    <button type="submit" id="checkoutfirst"  class="btn btn-primary" " >Save changes<i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** FOOTER ***
 _________________________________________________________ -->
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Information</h4>

                        <ul>
                            <li><a href="aboutus.php">About us</a>
                            </li>
                            <li><a href="terms.php">Terms and conditions</a>
                            </li>
                            <li><a href="faq.php">FAQ</a>
                            </li>
                            <li><a href="contact.php">Contact us</a>
                            </li>
                        </ul>

                        <hr>

                        <h4>User section</h4>

                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                            </li>
                            <li><a href="register.php">Regiter</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Top categories</h4>

                        <h5>Men</h5>

                        <ul>
                            <li><a href="category-man.php">T-shirts</a>
                            </li>
                            <li><a href="category-man.php">Shirts</a>
                            </li>
							<li><a href="category-man.php">Pants</a>
                            </li>
                            <li><a href="category-man.php">Accessories</a>
                            </li>
                        </ul>

                        <h5>Ladies</h5>
                        <ul>
                            <li><a href="category-lady.php">T-shirts</a>
                            </li>
                            <li><a href="category-lady.php">Skirts</a>
                            </li>
                            <li><a href="category-lady.php">Pants</a>
                            </li>
                            <li><a href="category-lady.php">Accessories</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Where to find us</h4>

                        <p><strong>Obaju Ltd.</strong>
                            <br>500 Main Street
                            <br>Geelong
                            <br>Victoria 3200
                            <br>
                            <strong>Australia</strong>
                        </p>

                        <a href="contact.php">Go to contact page</a>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        
                        <h4>Stay in touch</h4>

                        <p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                        </p>


                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2017 Obaju Ltd.</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Template by <a href="https://bootstrapious.com/e-commerce-templates">Bootstrapious.com</a>
                        <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>
<script type="text/javascript">
<!-- get data  -->
 function checkinfo(text,type){
		  
		var  url="checkinfo.php";
		var  data={"text":text,"type":type};
		var  success=function(respond) {
			if (respond==10){document.getElementById("firstnamesuggestion").innerHTML="length should be limited 3 between 10";}
			if (respond==11){document.getElementById("firstnamesuggestion").innerHTML="";}
			if (respond==12){document.getElementById("firstnamesuggestion").innerHTML="letter only";}
			if (respond==20){document.getElementById("lastnamesuggestion").innerHTML="length should be limited 3 between 10";}
			if (respond==21){document.getElementById("lastnamesuggestion").innerHTML="";}
			if (respond==22){document.getElementById("lastnamesuggestion").innerHTML="letter only";}
			if (respond==30){document.getElementById("addresssuggestion").innerHTML="please enter valid address ";}
			if (respond==31){document.getElementById("addresssuggestion").innerHTML="";}
			if (respond==40){document.getElementById("citysuggestion").innerHTML="";}
			if (respond==41){document.getElementById("citysuggestion").innerHTML="letter and '.' only";}
			if (respond==50){document.getElementById("postcodesuggestion").innerHTML="";}
			if (respond==51){document.getElementById("postcodesuggestion").innerHTML="4 number only";}
			if (respond==60){document.getElementById("telephonesuggestion").innerHTML="";}
			if (respond==61){document.getElementById("telephonesuggestion").innerHTML="number only and please enter vaild telephone";}
			if (respond==70){document.getElementById("emailsuggestion").innerHTML="";}
			if (respond==71){document.getElementById("emailsuggestion").innerHTML="example@example.com";}
			if (respond==80){document.getElementById("q").innerHTML="length should be limited 3 between 10";}
			if (respond==81){document.getElementById("q").innerHTML="";}
			if (respond==82){document.getElementById("q").innerHTML="letter only";}
			if (respond==90){document.getElementById("w").innerHTML="";}
			if (respond==91){document.getElementById("w").innerHTML="4~14 number need";}
			if (respond==100){document.getElementById("e").innerHTML="";}
			if (respond==101){document.getElementById("e").innerHTML="2 number need ";}
			if (respond==110){document.getElementById("r").innerHTML="";}
			if (respond==111){document.getElementById("r").innerHTML="4 numbers need " ;}
			if (respond==120){document.getElementById("t").innerHTML="";}
			if (respond==121){document.getElementById("t").innerHTML="3 numbers need";}
	
		} 

		  $.post(url,data,success,'json');
	  }
 
 
 
var city=[["BeiJing","SiChuan","HeLan","HeBei","HuLan","HuBei"],["Victoria","New South Wales","Queensland","South Australia","Perth","Tasmania"],["Alaska","California","Colorado","Connecticut","Florida","Hawaii","Michigan","Mississippi"]];
function a(){
    var b;
    b=$('#country option:selected').val();
	
	if (b=='China'){b=0;}
	if (b=='Australia'){b=1;}
	if (b=='Amerian'){b=2;}
 
    
    document.getElementById("d").innerHTML='';
    var s=document.getElementById("d").innerHTML;
         s=s+'<div class="form-group"><label for="state">State *</label><select class="form-control" name="state" id="state" ';
       
		 
		 s=s+ '  required >';
      for(j=0;j<city[b].length;j++){
        

        s=s+'<option value="';
		s=s+city[b][j];
		s=s+'">';
        s=s+city[b][j];
        s=s+'</option>';   
    }
    s=s+' </select></div>';
  document.getElementById("d").innerHTML=s; 
  } 
/*function  setUserDetail(){
	var url = "userdetail1.php";
	var data={"firstname":,"lastname","city","country":,"email":,"address":,"company","postcode","state",}
	
	
	$.post(url,data,success,'json');
} 
 */ 
 function checkOldPassword(password){
	 var url="checkOldPassword.php";
	 var data={'password':password};
	 var success=function(respond){
		 if(respond==0){
			 
			 alert("password is incorrect");
			 document.getElementById("changePassword").disabled=true;
		 }
		 if(respond==1){
			 
			 document.getElementById("changePassword").disabled=false;
		 }
		 
	 }
	 
	 $.post(url,data,success,'json');
 }
 
 function checkNewPassword(password){
	 var a=$('#password_1').val();
    if(a==password){
		
		document.getElementById("changePassword").disabled=false;
	}	 
	else{
		alert("New password is different from rerype new password!");
		document.getElementById("changePassword").disabled=true;
		
	} 
	 
 }
 
 function changePassword(){
	 var newPassword=$('#password_1').val();
	 var url='changePassword.php';
	 var data={'password':newPassword};
	 var success=function(respond){
		 if(respond>0){
			 
			 alert("change successfully!");
		 }
		 
	 }
	 $.post(url,data,success,'json');
 }
 
</script>


</body>

</html>
