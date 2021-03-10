<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>


<!doctype html>
<html class="no-js" lang="en">
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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <!-- Header section -->
    <header class="header-section">
                <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 text-center text-lg-left">
                        <!-- logo -->
                        <a href="./index.php" class="site-logo">
							<img src="img/newfdlogo.jpg" alt="">
						</a>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        
                    </div>
                     <div class="col-xl-4 col-lg-5">
                        <div class="user-panel" align="right">
                        <?php

          if(isset($_SESSION['username'])){
            echo '<button type="button" class="btn btn-dark"><a class="text-white" href="cart.php">Cart</a></button>', '<button type="button" class="btn btn-dark"><a class="text-white" href="account.php">My Account</a></button>', '<button type="button" 
            class="btn btn-dark"><a class="text-white" href="logout.php">Log Out</a></button>';
           
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li class="active"><a href="register.php">Register</a></li>';
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
                    <li><a href="index.php">Home</a>
                    </li>
                    <li><a href="womenproduct.php">Women</a>
                        <ul class="sub-menu">
                            <li><a href="womenclothes.php">Clothes</a></li>
                            <li><a href="womenshoes.php">Shoes</a></li>
                            <li><a href="womenbags.php">Bags</a></li>
                        </ul>
                    </li>
                    <li><a href="menproduct.php">Men</a>
                        <ul class="sub-menu">
                            <li><a href="menclothes.php">Clothes</a></li>
                            <li><a href="menshoes.php">Shoes</a></li>
                            <li><a href="menbags.php">Bags</a></li>

                        </ul>
                    </li>
                    <li><a href="kidproduct.php">Kid
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
    
        <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <?php
          $i=0;
          $product_id = array();
          $product_quantity = array();

          $result = $mysqli->query('SELECT * FROM kidbags');
          if($result === FALSE){
            die(mysql_error());
          }

          if($result){

            while($obj = $result->fetch_object()) {
                
                
                

              echo '<div class="large-4 columns">';
              echo '<img src="images/products/'.$obj->product_img_name.'"/>';
                echo '<p><h4>'.$obj->product_name.'</h4></p>';
              echo '<h6><strong>Product Code</strong>: '.$obj->product_code.'</h6>';
              echo '<h6><strong>Description</strong>: '.$obj->product_desc.'</h6>';
              echo '<h6><strong>Units Available</strong>: '.$obj->qty.'</h6>';
              echo '<h6><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</h6>';

              if($obj->qty > 0){
                echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
                echo '<br>';
                  
              }
              else {
                echo 'Out Of Stock!';
              }
              echo '</div>';

              $i++;
            }

          }

          $_SESSION['product_id'] = $product_id;


          echo '</div>';
          echo '</div>';
          ?>

        <div class="row" style="margin-top:10px;">
          <div class="small-12">




        

      </div>
    </div>
        </div>
      </div>









    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
        <?php
    include 'footer.php';
?>
  </body>
</html>
