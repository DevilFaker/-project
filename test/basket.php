<?php require_once 'include.php'?>
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
    <script src="showProduct.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
    <link rel="shortcut icon" href="favicon.png">
	<script type="text/javascript" src="js/searchFunc.js"></script>
	<link href="css/suggestbox.css" rel="stylesheet">


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
		  echo '<li><a href="customer-account.php">';
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
                               <input type="text" class="form-control" id="email-modal" placeholder="username" name='username' required >
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password" name='password'required>
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
                    <a href="basket.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm" id='pr'><?php echo $e; ?> </span>items in cart</a>
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

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
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
                        <li>Shopping cart</li>
                    </ul>
                </div>

                <div class="col-md-9" id="basket">

                    <div class="box">

                        

                            <h1>Shopping cart</h1>
                            <p class="text-muted">You currently have<span id='cu'><?php echo $e;?></span>item(s) in your cart.</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Quantity</th>
                                            <th>Unit price</th>
                                            <th>Discount</th>
                                            <th colspan="2">Total</th>
                                        </tr>
                                    </thead>
<?php   

      $connect=oci_connect("liteng","Li86459451","SSID");
	  if(!$connect){
		  echo "false";
		  exit;
		  
	  }
	  
	  
	  $username=$_SESSION['username'];
	  $i=1;
	  $sql="select * from order_info where username='{$username}'";
	  $stmt=oci_parse($connect,$sql);
	  oci_execute($stmt);
	  while(oci_fetch_array($stmt)){ $i++;  }
	  
	  $sql="select * from product_detail where username='{$username}' and ORDER_ID='{$i}' ";
	  $stmt=oci_parse($connect,$sql);
	  oci_execute($stmt);
	         $name=array();
             $src=array();			 
		     $price=array();
		     $num=array();
			 $i=0;
		     
			 
			 while(oci_fetch_array($stmt)){
		     
             
	             $name[$i]=oci_result($stmt,'PRODUCTNAME');
				 $id[$i]=oci_result($stmt,'ID');
				 $src[$i]=oci_result($stmt,'SRC');
				 $price[$i]=oci_result($stmt,'PRICE');
				 $num[$i]=oci_result($stmt,'NUM');
				 $i++;
				 
				 }
				 

?>


	
                                   <tbody>
                                        
										
										
		<?php 
					$total=0;					
					for($c=0;$c<$i;$c++){					
                                 echo      '<tr id=tr-';
								 echo      $id[$c];
								 echo      '><td><a href="detail.php?name=';
								 echo      $name[$c];
								 echo      '"><img src="img/';
								 echo      $src[$c];
								 echo      '" alt="';
								 echo      $name[$c];
								 echo      '"></a></td><td><a href="detail.php?name=' ;
								 echo      $name[$c];
								 echo      '">';
								 echo      $name[$c];
								 echo      '</a></td><td><input min="1" max="5" id="o" type="number" value="';
								 echo      $num[$c];
								 echo      '" class="form-control" onchange=changNum(';
								 echo      $id[$c];
								 echo      ',';
                                 echo       $price[$c];								 
								 echo      ',this.value) ></td><td>$ ';
								 echo      '<span id=price-';
								 echo      $id[$c];
								 echo       '>';
								 echo      $price[$c];
								 echo      '</span></td><td>$0.00</td><td>$<span id=';
								 echo      $id[$c];
								 echo      '>';
                                 echo      $num[$c]*$price[$c];
								 echo      '</span></td><td><a href="javascript:deleteProduct(';
								 echo      $id[$c];
								 echo      ',';
								 echo      $num[$c];
								 echo      ');"><i class="fa fa-trash-o"></i></a></td> </tr></tr>';
								 $total+=$num[$c]*$price[$c];
								
					}                             
                                            
                                       
         ?>                                   
                                               
										
                                            
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2" >$<span id="zz"><?php echo $total;?></span></th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <!-- /.table-responsive -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="category.php" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                </div>
                                <div class="pull-right" id="orderSummary">
                                    
                                </div>
                            </div>

                        

                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col-md-9 -->

                <div class="col-md-3">
                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3>Order summary</h3>
                        </div>
                        <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Order subtotal</td>
                                        <th >$<span id="ordersubtotal"><?php echo $total;?></span></th>
                                    </tr>
                                    <tr>
                                        <td>Shipping and handling</td>
                                        <th>-</th>
                                    </tr>
                                    <tr>
                                        <td>GST 10%</td>
                                        <th >$<span id="GST"><?php echo $total*0.1;?></span></th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th >$<span id="totalMoney"><?php echo $total*1.1?></span></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

					<!-- commented by Shang 04/07/2017
                    <div class="box">
                        <div class="box-header">
                            <h4>Coupon code</h4>
                        </div>
                        <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

									<button class="btn btn-primary" type="button"><i class="fa fa-gift"></i></button>

								</span>
                            </div>
                            <!-- /input-group --> <!--
                        </form>
                    </div>
					-->

                </div>
                <!-- /.col-md-3 -->

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
    <script >

	 
	function changNum(productid,price,num){
		if (num==0){
			
			document.getElementById("tr-"+productid).innerHTML="";
			
			
		}
		
		
		 var url="changNum.php";
		 var data={"id":productid,"num":num,"price":price};
		 var success=function(respond){
			 if(respond>0)
			 {
			 	
			 var totalprice=price*num;
			 
			 var a=document.getElementById(productid).innerHTML;
			 var a=parseInt(a);
			 var b=parseInt(totalprice-a);
			 
			 document.getElementById(productid).innerHTML=totalprice;
			 
			 var total=document.getElementById('zz').innerHTML;
			 c=parseInt(total);
			 c=c+b;
			 document.getElementById('zz').innerHTML=c;
			 document.getElementById('ordersubtotal').innerHTML=c;
			 d=c*0.1
			 e=d+c;
			 document.getElementById('GST').innerHTML=d;
			 document.getElementById('totalMoney').innerHTML=e;
			/* var p=parseInt(num);
			 
			 var k=document.getElementById('pr').innerHTML;
		
		     k=parseInt(k);
              
			 
			 document.getElementById('pr').innerHTML=t;
			 document.getElementById('cu').innerHTML=t;*/
			 
			 }
		 };
		 
		 $.post(url,data,success,'json');
	 }
	 
	var s=document.getElementById("orderSummary").innerHTML;
	var x=document.getElementById('ordersubtotal').innerHTML;
	var y=document.getElementById('GST').innerHTML;
	var z=document.getElementById('totalMoney').innerHTML;
	 x=parseInt(x);
	 y=parseInt(y);
     z=parseInt(z);
	 document.getElementById("orderSummary").innerHTML="";
	s=s+'<button class="btn btn-default" onclick="window.location.reload();" ><i class="fa fa-refresh"></i> Update basket</button> <button  class="btn btn-primary" onclick="storeInfo( ';

	s=s+')">Proceed to checkout <i class="fa fa-chevron-right"></i></button>';
	document.getElementById("orderSummary").innerHTML=s;
	
	var sn =document.getElementById('sn').innerHTML;
	sn =parseInt(sn);
	alert(sn);
	 
	 function deleteProduct(productid,value){
		 var url="deleteProduct.php"
		 var data={"id":productid};
		 var num=value;
		 var  p=parseInt(num);
		 var k=document.getElementById('pr').innerHTML;
		
		k=parseInt(k);
		var t =k-p;


		 var success=function(respond){
			 if(respond>0){
				  var total=document.getElementById('zz').innerHTML;
			      c=parseInt(total);
				  
				var a=document.getElementById(productid).innerHTML;
			       a=parseInt(a);
				  c=c-a;
				 document.getElementById("tr-"+productid).innerHTML="";
				 document.getElementById('zz').innerHTML=c;
				 document.getElementById('ordersubtotal').innerHTML=c;
			 d=c*0.1
			 e=d+c;
			 document.getElementById('GST').innerHTML=d;
			 document.getElementById('totalMoney').innerHTML=e;
			 
			document.getElementById('pr').innerHTML=t;
			 document.getElementById('cu').innerHTML=t;
			 }
			 
		 }
		 $.post(url,data,success,'json')
	 }
	 
	 
	
	  function storeInfo(){
		 //window.location.reload();
		  var a=document.getElementById('ordersubtotal').innerHTML;
		  
		  var b=document.getElementById('GST').innerHTML;
		  var c=document.getElementById('totalMoney').innerHTML;
		  a=parseInt(a);
		  b=parseInt(b);
		  c=parseInt(c);
		  
		  var url='storeInfo.php';
		  
		  var data={'subtotal':a,'tax':b,'total':c};
		  var success=function(respond){
			  if(respond>0){
				  
				 window.location.href='checkout1.php';
				  
			  }
			  
			  
		  }
		  
		  $.post(url,data,success,'json');
	  
	  }

    </script>
</body>

</html>


























