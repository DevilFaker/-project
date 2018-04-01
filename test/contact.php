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
                        <form action="customer-orders.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password">
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
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs"><?php echo $i ?> items in cart</span>
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

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="basket.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm"><?php echo $i ?> items in cart</span></a>
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
                        <li>Contact</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** PAGES MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Pages</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="aboutus.php">About us</a>
                                </li>
                                <li>
                                    <a href="terms.php">Terms and conditions</a>
                                </li>
                                <li>
                                    <a href="contact.php">Contact page</a>
                                </li>
                                <li>
                                    <a href="faq.php">FAQ</a>
                                </li>

                            </ul>

                        </div>
                    </div>

                    <!-- *** PAGES MENU END *** -->


                    <div class="banner">
                        <a href="#">
                            <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">


                    <div class="box" id="contact">
                        <h1>Contact</h1>

                        <p class="lead">Are you curious about something? Do you have some kind of problem with our products?</p>
                        <p>Please feel free to contact us, our customer service center is working for you 24/7.</p>

                        <hr>

                        <div class="row">
                            <div class="col-sm-4">
                                <h3><i class="fa fa-map-marker"></i> Address</h3>
                                <p><strong>Obaju Ltd.</strong>
                                    <br>500 Main Street
									<br>Geelong
									<br>Victoria 3200
									<br>
									<strong>Australia</strong>
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3><i class="fa fa-phone"></i> Call center</h3>
                                <p class="text-muted">This number is toll free if calling from Australia otherwise we advise you to use the electronic form of communication.</p>
                                <p><strong>+61 800 5244 0000</strong>
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                                <p class="text-muted">Please feel free to write an email to us.</p>
                                <ul>
                                    <li><strong><a href="mailto:">info@obaju.com</a></strong>
                                    </li>                                    
                                </ul>
                            </div>
                            <!-- /.col-sm-4 -->
                        </div>
                        <!-- /.row -->

                        <hr>

                        <div id="map">

                        </div>
<?php




class captcha {
	
	/**
	 * Create
	 *
	 * Create a captcha PNG image
	 *
	 * @param	string	the text for the captcha
	 * @param	string	the file name
	 * @param	array	params to pass to the model constructor
	 * @return	void
	 */	
	
	function create($text=null, $file=null, $size=null) {
	    
		//Default to {site_root}/captcha.png
		$file = ($file ? $file : 'captcha'). '.png';
	    
	    
	    //IF no text for the captcha image was set
	    if(!$text) {
	        trigger_error('No text for the CAPTCHA was given', E_USER_NOTICE);
	        return;
	    }
	    
	    //IF no size is set = defualt to "3"
	    if(!$size) {$size=3;}
	
	    $font = 4;
	    $cosrate = rand(10,19);
	    $sinrate = rand(10,18);
	    
	    
	    $charwidth = @imagefontwidth($font);
	    $charheight = @imagefontheight($font);
	    $width=(strlen($text)+2)*$charwidth;
	    $height=2*$charheight;
	
	    $im = @imagecreatetruecolor($width, $height) 
	    	or trigger_error('Cannot Initialize new GD image stream! (Is GD installed?)');
	    $im2 = imagecreatetruecolor($width*$size, $height*$size);
	    
	    //Here we make the background and text alternate between light and dark
	    $bcol = imagecolorallocate($im, rand(80,100), rand(80,100), rand(80,100));
	    $fcol = imagecolorallocate($im, rand(150,200), rand(150,200), rand(150,200));
	    
	    
	    imagefill($im, 0, 0, $bcol);
	    imagefill($im2, 0, 0, $bcol);
	    
	    $dotcol = imagecolorallocate($im, (abs($this->rbg_red($fcol)-$this->rbg_red($bcol)))/4,
	                                        (abs($this->rbg_green($fcol)-$this->rbg_green($bcol)))/4,
	                                        (abs($this->rbg_blue($fcol)-$this->rbg_blue($bcol)))/4);
	    
	    $dotcol2 = imagecolorallocate($im, (abs($this->rbg_red($fcol)-$this->rbg_red($bcol)))/2,
	                                        (abs($this->rbg_green($fcol)-$this->rbg_green($bcol)))/2,
	                                        (abs($this->rbg_blue($fcol)-$this->rbg_blue($bcol)))/2);
	    
	    $linecol = imagecolorallocate($im, (abs($this->rbg_red($fcol)-$this->rbg_red($bcol)))/2,
	                                        (abs($this->rbg_green($fcol)-$this->rbg_green($bcol)))/2,
	                                        (abs($this->rbg_blue($fcol)-$this->rbg_blue($bcol)))/2);
	    
	    
	    //Groups and warps Pixels
	    for($i=0; $i<$width; $i=$i+rand(0,2)) {
	        for($j=0; $j<$height; $j=$j+rand(0,2)) {
	            imagesetpixel($im, $i, $j, $dotcol);
	        }
	    }
	    
	    //Adds Text
	    imagestring($im, $font, $charwidth, $charheight/2, $text, $fcol);
	    
	    /*
	    //Adds Horizontal lines
	    for($j=0; $j<$height*$size; $j=$j+rand(2,6)) {
	        imageline($im2, 0, $j, $width*$size, $j, $linecol);
	    }
	    */
	    
	    /*
	    //Adds Vertical lines
	    for($i=0; $i<$width*$size; $i=$i+rand(1,19)) {
	        imageline($im2, $i, 0, $i, $height*$size, $linecol);
	    }
	    */
	    
	    //Adds horizontal dots
	    for($i=0; $i<$width*$size; $i++) {
	        for($j=0; $j<$height*$size; $j++) {
	        $x = abs(((cos($i/$cosrate)*5+sin($j/$sinrate*2)*2+$i)/$size))%$width;
	            $y = abs(((sin($j/$sinrate)*5+cos($i/$cosrate*2)*2+$j)/$size))%$height;
	            $col = imagecolorat($im, $x, $y);
	            if ($col!=$bcol) imagesetpixel($im2, $i, $j, $col);
	        }
	    }
	    
	    //Adds more horizontal dots
	    for($j=0; $j<$height*$size; $j=$j+rand(2,5)) {
	        for($i=0; $i<$width*$size; $i=$i+rand(2,5)) {
	            imagesetpixel($im2, $i, $j, $dotcol2);
	        }
	    }
	    
	    //Adds the same number of vertical lines as chars
	    $start = rand(0, 10);
	    for($a = 1; $a < strlen($text); $a++) {
	        imageline($im2, $start+$a*30, 0, $start+$a*30, $height*$size, imagecolorallocate($im2, rand(90,120), rand(90,120), rand(90,120)));
	    }
	    
	    //Adds three polygons to radom places
	    for($a = 1; $a < 4; $a++) {
	        imagepolygon(
	            $im2, 
	            array(
	                rand(0, $width*$size), 
	                rand(0, $height*$size),
	                rand(0, $width*$size),
	                rand(0, $height*$size),
	                rand(0, $width*$size),
	                rand(0, $height*$size),
	                rand(0, $width*$size),
	                rand(0, $height*$size)
	            ), 
	            4, 
	            ImageColorAllocate($im2, rand(60, 120),rand(60, 120),rand(60, 120))
	        );
	    };
	    
	    //Create final png file
	    imagepng($im2, $file) 
	    	or trigger_error('Couldn\'t create CAPTCHA PNG: '. $file, E_USER_WARNING);
	    
	    //Destroy the copies
	    imagedestroy($im);
	    imagedestroy($im2);
	}
	
	
	//functions to extract RGB values from combined 24bit color value
	function rbg_red($col) {return (($col >> 8) >> 8) % 256;}
	function rbg_green($col) {return ($col >> 8) % 256;}
	function rbg_blue($col) {return $col % 256;}
	
}
//check captcha set 
if (isset($_POST['captcha'])){
	
	if($_SESSION['captcha'] == $_POST['captcha']) {

$subject=htmlentities($_POST["subject"]);
$message=htmlentities($_POST["message"]);

$to = "info@obaju.com";


$from =htmlentities($_POST["email"]);
$headers = "From: $from";
mail($to,$subject,$message,$headers);
echo "<script>alert('Mail Sent')</script>";
	}
	
	
	else {
		
		unset($_SESSION['captcha']);
		echo "<script>alert('captcha is wrong');</script>";
		//window.location.reload();
		
	}



}


if(isset($_SESSION['captcha'])){
	
unset($_SESSION['captcha']);
	
$_SESSION['captcha'] = rand(100, 10000);

//Create a new captcha
$captcha = new captcha();
$captcha->create($_SESSION['captcha']);
	
}


else{
//IF the form was submited - then check the captcha!




//Create radom text
$_SESSION['captcha'] = rand(100, 10000);

//Create a new captcha
$captcha = new captcha();
$captcha->create($_SESSION['captcha']);

}

						
						
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
                        <hr>
                        <h2>Contact form</h2>

                           <form   method='POST'>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Firstname *</label>
                                            <input type="text" class="form-control" id="firstname" onkeyup ="checkinfo(this.value,1)" value='<?php echo $firstname[0]; ?>' name="firstname" required>
                                            <p id="firstnamesuggestion" color="red"></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Lastname *</label>
                                            <input type="text" class="form-control" id="lastname" name="lastname" value='<?php echo $lastname[0]; ?>' onkeyup="checkinfo(this.value,2)" required>
                                            <p id="lastnamesuggestion" color="red"></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                            <input type="text" class="form-control" id="email" name="email" value='<?php echo $_SESSION['email']; ?>' onkeyup ="checkinfo(this.value,7)" required>
                                            <p id="emailsuggestion"></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" id="subject" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea id="message" class="form-control" required></textarea>
                                    </div>
                                </div>
								
                                <div class="col-sm-6">
                                    <div class="form-group" >
                                        captcha: <input type="text" name="captcha" required  />
										  </br></br><img src="captcha.png" />
                                    </div>
                                </div>
                                <div class="col-sm-12 text-center">
                                    <button type='submit' class="btn btn-primary" id='o'><i class="fa fa-envelope-o"></i> Send message</button>

                                </div>
                            </div>
                            <!-- /.row -->
                         </form>


                    </div>


                </div>
                <!-- /.col-md-9 -->
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




    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

    <script>
        function initialize() {
            var mapOptions = {
                zoom: 15,
                center: new google.maps.LatLng(-38.050915, 144.378159),
                mapTypeId: google.maps.MapTypeId.ROAD,
                scrollwheel: false
            }
            var map = new google.maps.Map(document.getElementById('map'),
                mapOptions);

            var myLatLng = new google.maps.LatLng(-38.050915, 144.378159);
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
		
		 function checkinfo(text,type){
		  
		var  url="checkinfo.php";
		var  data={"text":text,"type":type};
		var  success=function(respond) {
			if (respond==10){document.getElementById("firstnamesuggestion").innerHTML="length should be limited 3 between 10";document.getElementById("o").disabled=true;}
			if (respond==11){document.getElementById("firstnamesuggestion").innerHTML="";document.getElementById("o").disabled=false;}
			if (respond==12){document.getElementById("firstnamesuggestion").innerHTML="letter only";document.getElementById("o").disabled=true;}
			if (respond==20){document.getElementById("lastnamesuggestion").innerHTML="length should be limited 3 between 10";document.getElementById("o").disabled=true}
			if (respond==21){document.getElementById("lastnamesuggestion").innerHTML="";document.getElementById("o").disabled=false;}
			if (respond==22){document.getElementById("lastnamesuggestion").innerHTML="letter only";document.getElementById("o").disabled=false;}
			if (respond==30){document.getElementById("addresssuggestion").innerHTML="please enter valid address ";document.getElementById("o").disabled=true}
			if (respond==31){document.getElementById("addresssuggestion").innerHTML="";document.getElementById("o").disabled=false;}
			if (respond==40){document.getElementById("citysuggestion").innerHTML="";document.getElementById("o").disabled=false;}
			if (respond==41){document.getElementById("citysuggestion").innerHTML="letter and '.' only";document.getElementById("o").disabled=true;}
			if (respond==50){document.getElementById("postcodesuggestion").innerHTML="";document.getElementById("o").disabled=false}
			if (respond==51){document.getElementById("postcodesuggestion").innerHTML="4 number only";document.getElementById("o").disabled=true;}
			if (respond==60){document.getElementById("telephonesuggestion").innerHTML="";document.getElementById("o").disabled=false;}
			if (respond==61){document.getElementById("telephonesuggestion").innerHTML="number only and please enter vaild telephone";document.getElementById("o").disabled=true;}
			if (respond==70){document.getElementById("emailsuggestion").innerHTML="";document.getElementById("o").disabled=false;}
			if (respond==71){document.getElementById("emailsuggestion").innerHTML="example@example.com";document.getElementById("o").disabled=true;}
			if (respond==80){document.getElementById("q").innerHTML="length should be limited 3 between 10";document.getElementById("o").disabled=true;}
			if (respond==81){document.getElementById("q").innerHTML="";document.getElementById("o").disabled=false;}
			if (respond==82){document.getElementById("q").innerHTML="letter only";document.getElementById("o").disabled=true;}
			if (respond==90){document.getElementById("w").innerHTML="";document.getElementById("o").disabled=false;}
			if (respond==91){document.getElementById("w").innerHTML="4~14 number need";document.getElementById("o").disabled=true;}
			if (respond==100){document.getElementById("e").innerHTML="";document.getElementById("o").disabled=false;}
			if (respond==101){document.getElementById("e").innerHTML="2 number need ";document.getElementById("o").disabled=true;}
			if (respond==110){document.getElementById("r").innerHTML="";document.getElementById("o").disabled=false;}
			if (respond==111){document.getElementById("r").innerHTML="4 numbers need " ;document.getElementById("o").disabled=true;}
			if (respond==120){document.getElementById("t").innerHTML="";document.getElementById("o").disabled=false;}
			if (respond==121){document.getElementById("t").innerHTML="3 numbers need"; document.getElementById("o").disabled=true;}
	
		} 

		  $.post(url,data,success,'json');
	  }
		
	/*	
		function sendMail(){
			var url='sendMail.php';
			FirstName=document.getElementById('firstname').innerHTML;
			LastName=document.getElementById('lastname').innerHTML;
			email=document.getElementById('email').innerHTML;
			subject=document.getElementById('subject').innerHTML;
			message=document.getElementById('message').innerHTML;
			
			var data={'FirstName':FirstName,'LastName':LastName,'email':email,'subject':subject,'message':message};
			var success=function(respond){
				
				
				
			}
			
			
			$.post(url,data,success,'json');
		 
		  var a=document.getElementById('firstname');
		  alert(a.innerHTML);
		}
		
	 */	
    </script>


</body>

</html>
