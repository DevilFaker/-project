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

    <script src="showProduct.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
    <link rel="shortcut icon" href="favicon.png">
	<script type="text/javascript" src="js/searchFunc.js"></script>
	<link href="css/suggestbox.css" rel="stylesheet">
    



	
</head>

<body  onload='begin()'>
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
                                <div id="alert_info"></div> 
                                <input type="text" class="form-control" name="username" id="email-modal" placeholder="username" required>
                                
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password-modal" placeholder="password" required=>
                                
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
                        <i class="fa fa-shopping-cart"></i> <?php echo $i ?> <span id='cartnum' class="hidden-xs">items in cart</span>
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
                                            <h5>Clothing</h5><!-- link relevant html -->
                                            <ul>
                                                <li><a href="category-man.php?type=T-shirt">T-shirts</a>
                                                </li>
                                                <li><a href="category-man.php?type=Shirt">Shirts</a>
                                                </li>                                               
                                                <li><a href="category-man.php?type=Pants">Pants</a>
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
                                                <li><a href="category-man.php?type=Accessories">Bags</a>
                                                </li>
                                                <li><a href="category-man.php?type=Accessories">Belts</a>
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
                                                <li><a href="category-lady.php?type=T-shirt">T-shirts</a>
                                                </li>
                                                <li><a href="category-lady.php?type=Shirts">Shirts</a>
                                                </li>
                                                <li><a href="category-lady.php?type=Pants">Pants</a>
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
                                                <li><a href="category-lady.php?type=Accessories">Bags</a>
                                                </li>
                                                <li><a href="category-lady.php?type=Accessories">Belts</a>
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
                    <a href="basket.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm" id='pr'><?php echo $e ?></span> items in cart</a>
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
                        <li>Men</li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu" ><!-- link relevant html -->
                                <li class="active">
                                    <a href="category-man.php" >Men <span class="badge pull-right">13</span></a>
                                    <ul>
                                        <li ><a href="category-man.php?type=T-shirt" >T-shirts<span class="badge pull-right">5</span></a>
                                        </li>
                                        <li><a href="category-man.php?type=Shirt">Shirts<span class="badge pull-right">3</span></a>
                                        </li>
                                        <li><a href="category-man.php?type=Pants">Pants<span class="badge pull-right">2</span></a>

                                        </li>
                                        <li><a href="category-man.php?type=Accessories">Accessories<span class="badge pull-right">3</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="category-lady.php">Ladies  <span class="badge pull-right">15</span></a>
                                    <ul>
                                        <li><a href="category-lady.php?type=T-shirt">T-shirts<span class="badge pull-right">4</span></a>
                                        </li>
                                        <li><a href="category-lady.php?type=Shirt">Shirts<span class="badge pull-right">5</span></a>
                                        </li>
                                        <li><a href="category-lady.php?type=Pants">Pants<span class="badge pull-right">3</span></a>
                                        </li>
                                        <li><a href="category-lady.php?type=Accessories">Accessories<span class="badge pull-right">3</span></a>
                                        </li>
                                    </ul>
                                </li>
								<!--
                                <li>
                                    <a href="category.php">Kids  <span class="badge pull-right">11</span></a>
                                    <ul>
                                        <li><a href="category.php">T-shirts</a>
                                        </li>
                                        <li><a href="category.php">Shirts</a>
                                        </li>
                                        <li><a href="category.php">Pants</a>
                                        </li>
                                        <li><a href="category.php">Accessories</a>
                                        </li>
                                    </ul>
                                </li>
								commented by Shang 03/07/2017 -->

                            </ul>

                        </div>
                    </div>

                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Brands <a class="btn btn-xs btn-danger pull-right" href="category-man.php"><i class="fa fa-times-circle"></i> Clear</a></h3>
                        </div>

                        <div class="panel-body">

                            
                                <div class="form-group">
                                    <div class="checkbox"><!-- give brands id -->
                                        <label id="armani">
                                            <input type="checkbox" name="brand" value="Armani" >Armani 
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label id="versae">
                                            <input type="checkbox" name="brand" value="Versace" >Versace 
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label id="carlo">
                                            <input type="checkbox" name="brand" value="Carlo Bruni" >Carlo Bruni 
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label id="jack">
                                            <input type="checkbox" name="brand" value="Jack Honey" >Jack Honey 
                                        </label>
                                    </div>
                                </div>

                                <button onclick='check()' class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>

                            

                        </div>
                    </div>

                    

                    <!-- *** MENUS AND FILTERS END *** -->

                    <div class="banner">
                        <a href="#">
                            <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="box">
                        <h1>Men</h1>
                        <p>In our Men department we offer wide selection of the best products we have found and carefully selected worldwide.</p>
                    </div>

                    <div class="box info-bar">
                        <div class="row">
                            <div id="showIng" class="col-sm-12 col-md-4 products-showing">
                                Showing <strong>total</strong> of <strong>12</strong> products
                            </div>

							
                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-number">
                                                <strong>Show</strong>  <a href="#" class="btn btn-default btn-sm btn-primary">6</a>  <a href="#" class="btn btn-default btn-sm">12</a>  <a href="#" class="btn btn-default btn-sm">All</a> products
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Sort by</strong>
                                                <select id="so" name="sort-by" class="form-control" onchange="sortChange()"><!--add function named sortChange   -->
                                                    <option   selected >Price: low-high</option><!-- low-high selected -->
													<option  >Price: high-low</option>
                                                    <!--<option>Sales first</option>-->
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row products" id="z" >

                        

                    </div>    

                    <div class="pages">

						<!-- commented by shang 04/07/2017 
                        <p class="loadMore">
                            <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                        </p>
						 end of comment -->

                        <ul class="pagination">
                            <li><a href="#">&laquo;</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
 

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

                        <h5>Men</h5> <!-- link relevant html -->

                        <ul>
                            <li><a href="category-man.php?type=T-shirts">T-shirts</a>
                            </li>
                            <li><a href="category-man.php?type=Shirt">Shirts</a>
                            </li>
							<li><a href="category-man.php?type=Pants">Pants</a>
                            </li>
                            <li><a href="category-man.php?type=Accessories">Accessories</a>
                            </li>
                        </ul>

                        <h5>Ladies</h5>
                        <ul>
                            <li><a href="category-lady.php?type=T-shirt">T-shirts</a>
                            </li>
                            <li><a href="category-lady.php?type=Shirt">Shirts</a>
                            </li>
                            <li><a href="category-lady.php?type=Pants">Pants</a>
                            </li>
                            <li><a href="category-lady.php?type=Accessories">Accessories</a>
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
	<script>
   
	var productDetail=new Array();
	var c=new Array();
	var display_sort='increase';
    var number = new Array();
    var order='increase';
    var total=0;
    var s = document.getElementById("z").innerHTML;
    var select_type;

    




function check(){
	c.splice(0,c.length);//clear var c
var checkbox=document.getElementsByName("brand");//get brands


for(i in checkbox) //check brands
{
if (checkbox[i].checked)
c.push(checkbox[i].value)
}

begin();

}

function is_type(type)
{    
    if (select_type==null){
        return true;
    }  
    
    if(type==select_type)
	 return true;
	 
return false;
	 }




function is_sex(sex)
{
     
	 if(sex=='men')
	 {return true;
	 }
return false;
	 }


function is_brand(brand)
{
	if(c.length==0)
	return true;
	for(var i=0;i<c.length;i++)
	{
		if(c[i]==brand)
		return true;
	}
	return false;
}


function getxml()
{
    try 
    {
        xmlDoc=new ActiveXObject("Microsoft.XMLDOM");//IE
        xmlDoc.async=false;
        xmlDoc.load('c.xml');
		
    }
    catch(e)
    {
        try
        {
            xmlDoc=document.implementation.createDocument("","",null); //Firefox
            xmlDoc.async=false;
            xmlDoc.load('c.xml');
			
        }
        catch(e)
        {
            try 
            {
               var xmlhttp = new window.XMLHttpRequest();//Google Chrome
               xmlhttp.open("GET",'c.xml',false);
               xmlhttp.send(null);
               xmlDoc = xmlhttp.responseXML.documentElement;
			  
            }
            catch(e)
            {
                error=e.message;
            }
        }
    }
	
    return xmlDoc;
	
}
/*
function p(name,price,brand,photo,picture)
{
  this.name=name;
  this.price=price;
  this.brand=brand;
  this.photo=photo;
  this.picture=picture;
}
*/


	
	
	
	
	

function begin(){//disaplay 
xmlDoc=getxml();//read xml
var location=window.location.href;
    location=decodeURI(location);
    var str_arr=location.split('=');
     select_type=str_arr[1];

productDetail.splice(0,productDetail.length);//clear 
total=0;
var x=xmlDoc.getElementsByTagName("product");
var price=xmlDoc.getElementsByTagName("price");
var brand=xmlDoc.getElementsByTagName("brand");
var photo=xmlDoc.getElementsByTagName("photo");
var picture=xmlDoc.getElementsByTagName("picture");
var type=xmlDoc.getElementsByTagName("type");
var sex=xmlDoc.getElementsByTagName("sex");
var id=xmlDoc.getElementsByTagName("productID");

for (var i=0;i<x.length;i++)//get the property of products 
{
brand_temp=brand[i].childNodes[0].nodeValue;
type_temp=type[i].childNodes[0].nodeValue;
sex_temp=sex[i].childNodes[0].nodeValue;
if(is_sex(sex_temp)==false){//judge limited conditions
continue;}
if(is_type(type_temp)==false){
continue;}
if(is_brand(brand_temp)==false){
continue;}
temp=new Object;//store in a array
temp.sex=sex[i].childNodes[0].nodeValue;
temp.type=type[i].childNodes[0].nodeValue;
temp.name=x[i].childNodes[0].nodeValue;
temp.id=id[i].childNodes[0].nodeValue;
var d=price[i].childNodes[0].nodeValue;
temp.price=d.substr(3);
temp.brand=brand[i].childNodes[0].nodeValue;
temp.photo=photo[i].childNodes[0].nodeValue;
temp.picture=picture[i].childNodes[0].nodeValue;
productDetail[total++]=temp;
}
var r=0;//account brand
	var q=0;
	var w=0;
	var e=0;
	
for(var i=0;i<productDetail.length;i++){
if (productDetail[i].brand=="Armani"){
q++;
}
if (productDetail[i].brand=="Versace"){
w++;
}
if (productDetail[i].brand=="Carlo Bruni"){
e++;
}
if (productDetail[i].brand=="Jack Honey"){
r++;
}
}
document.getElementById('armani').innerHTML='<input type="checkbox" name="brand" value="Armani" id="Armani">Armani('+ q+ ')';
document.getElementById('versae').innerHTML='<input type="checkbox" name="brand" value="Versace" id="Versace">versae('+w+ ')';
document.getElementById('carlo').innerHTML='<input type="checkbox" name="brand" value="Carlo Bruni" id="Carlo">Carlo Bruni('+e+')';
document.getElementById('jack').innerHTML='<input type="checkbox" name="brand" value="Jack Honey" id="Jack">Jack Honey('+r+')';
document.getElementById("showIng").innerHTML="Showing <strong>"+total+"</strong> of <strong>"+total+"</strong> products";

if(c.length!=0){
if(is_brand('Armani')==true)
document.getElementById('Armani').checked=true;
if(is_brand('Versace')==true)
document.getElementById('Versace').checked=true;
if(is_brand('Carlo Bruni')==true)
document.getElementById('Carlo').checked=true;
if(is_brand('Jack Honey')==true)
document.getElementById('Jack').checked=true;}

   if (order=='increase')//judge the requirment of sort 
{ productDetail.sort(function(x, y){
    return x.price - y.price ;});  
	 }
else if 
	(order=='decrease')
	{ productDetail.sort(function(x, y){
    return y.price - x.price ;});
	  ;}
	
document.getElementById("z").innerHTML='';//print
for (var i=0;i<total;i++){
var s = document.getElementById("z").innerHTML;
//alert('2');
                s = s + "<div class='col-md-4 col-sm-6'><div class='product'><div class='flip-container'><div class='flipper'><div class='front'><a href='detail.php'><img src='";
                s = s + "img/";
				//alert('3');
                s = s + productDetail[i].photo;
				//alert('4');
                s = s + "' alt='"
				s= s+ productDetail[i].photo;
				s= s+  "' class='img-responsive'></a></div><div class='back'><a href='detail.php?name=";
				 s = s + productDetail[i].name;
				 s = s +"'><img src='";
                s = s + "img/";
				//alert('5');
                s = s + productDetail[i].picture;
				//alert('6');
                s = s + "' alt='";
				s=s+ productDetail[i].picture;
				s=s+ "' class='img-responsive'></a></div></div></div><a href='detail.php?name=";
				s = s + productDetail[i].name;
				 s = s +"' class='invisible'><img src='";
                s = s + "img/";
				//alert('7');
                s = s + productDetail[i].photo;
				//alert('8');
                s = s + "' alt='"
				s = s+ productDetail[i].photo;
				s = s+"' class='img-responsive'></a><div class='text'><h3><a href='detail.php?name="
				 s = s + productDetail[i].name;
				 s = s +"'>";
                s = s + productDetail[i].name;
                s = s + "</a></h3><p class='price'>AU$";
                s = s + productDetail[i].price;
                s = s + "</p><p class='buttons'><a href='detail.php' class='btn btn-default'>View detail</a><a href='javascript:addCart(";
				s = s + productDetail[i].id;
				s = s +",";
				s=s+'"';
				s = s +productDetail[i].photo;
				s=s+'"';
				s = s +",";
				s=s+'"';
				s = s +productDetail[i].name;
				s=s+'"';
				s = s +",";
				s = s +productDetail[i].price;

				s = s + ")' class='btn btn-primary'><i class='fa fa-shopping-cart'></i>Add to cart</a></p></div></div></div>";
                document.getElementById("z").innerHTML=s;
				
				
}
}


function sortChange(){ //sort selected
	if(display_sort=='increase'){
	order='decrease';display_sort='decrease';
	begin();
	
	
	
	
	}
    else if(display_sort=='decrease')
    {
	order='increase';display_sort='increase';
	begin();
	
	}
	
}	                           
				                               
       
                             
function addCart(productid,src,productname,price){
	
	
	 
	 var url="addCart.php";
	 var data={"id":productid,"src":src,"name":productname,"price":price};
	 var num=document.getElementById('pr').innerHTML;
	 num=parseInt(num);
	 
	 num++;
	 var success=function(respond){
		 if(respond==2){
			 
			 window.location.href='register.php';
		 }
	
	    
	 }
	 $.post(url,data,success,"json");
	 document.getElementById('pr').innerHTML=num;
	 alert('add successfully!');
 

   

 }
         
                      

                    
					




</script>





</body>

</html>