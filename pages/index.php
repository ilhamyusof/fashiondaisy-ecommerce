<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Little Closet template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Divisima | eCommerce Template">
    <meta name="keywords" content="divisima, eCommerce, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Little Closet template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/23c0dd82f1.js" crossorigin="anonymous"></script>

    <!-- Favicon -->

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/cart.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/slicknav.min.css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/category.css">
    <link rel="stylesheet" type="text/css" href="styles/category_responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <title>FasionDaisy</title>
</head>
<body>
   
    <!-- Header section -->
    <header class="header-section">
                <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 text-center text-lg-left">
                        <!-- logo -->
                        <a href="./index.html" class="site-logo">
							<img src="img/newfdlogo.jpg" alt="">
						</a>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <form class="header-search-form">
                            
                        </form>
                    </div>
                     <div class="col-xl-4 col-lg-5">
                        <div class="user-panel" align="right">
                        <?php

          if(isset($_SESSION['username'])){
            echo '<button type="button" class="btn btn-dark"><a class="text-white" href="cart.php">Cart</a></button>', '<button type="button" class="btn btn-dark"><a class="text-white" href="account.php">My Account</a></button>', '<button type="button" 
            class="btn btn-dark"><a class="text-white" href="logout.php">Log Out</a></button>';
           
          }
          else{
              echo '<button type="button" class="btn btn-dark text-white"><a href="login.php">Log In</a></button>';
                 echo '<button type="button" class="btn btn-dark text-white"><a href="register.php">Register</a></button>';
           
          }
          ?>
<!--
                            <div class="up-item">
                                <i class="flaticon-profile"></i>
                                <a href="../fdproject/login/login.php">Sign</a> In or <a href="../fdproject/login/register.php">Create Account</a>
                            </div>
-->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-navbar">
            <div class="container">
                <!-- menu -->
                <ul class="main-menu">
                    <li><a href="../newfd/index.php">Home</a>
                    </li>
                    <li><a href="#">Women</a>
                        <ul class="sub-menu">
                            <li><a href="womenclothes.php">Clothes</a></li>
                            <li><a href="womenshoes.php">Shoes</a></li>
                            <li><a href="womenbags.php">Bags</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Men</a>
                        <ul class="sub-menu">
                            <li><a href="menclothes.php">Clothes</a></li>
                            <li><a href="menshoes.php">Shoes</a></li>
                            <li><a href="menbags.php">Bags</a></li>

                        </ul>
                    </li>
                    <li><a href="#">Kid
					</a>
                        <ul class="sub-menu">
                            <li><a href="kidclothes.php">Clothes</a></li>
                            <li><a href="kidshoes.php">Shoes</a></li>
                            <li><a href="kidbags.php">Bags</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/bg.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>denim jackets</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<a href="womenproduct.php" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<h4>from RM</h4>
						<h2>119</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/bg-2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>denim jackets</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<h4>from RM</h4>
						<h2>119</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
    <!-- Hero section end -->
    <!-- Products -->

    
    
    
    
    
    
    <?php
    include 'footer.php';
?>
