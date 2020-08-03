<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';


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
        <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping Cart || BOLT Sports Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
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
            echo '<button type="button" class="btn btn-dark"><a class="text-white" href="account.php">My Account</a></button>', '<button type="button" 
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


    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <?php

          echo '<p><h3>Your Shopping Cart</h3></p>';

          if(isset($_SESSION['cart'])) {

            $total = 0;
            $rm = "RM";
            echo '<table>';
            echo '<tr>';
            echo '<th>Code</th>';
            echo '<th>Name</th>';
            echo '<th>Quantity</th>';
            echo '<th>Cost</th>';
            echo '</tr>';
              
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = $mysqli->query("SELECT product_code, product_name, product_desc, qty, price FROM products WHERE id = ".$product_id);


            if($result){

              while($obj = $result->fetch_object()) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost

                echo '<tr>';
                echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$obj->product_name.'</td>';
                echo '<td>&nbsp;<a class="btn btn-outline-success waves-effect" style="padding:5px;" href="update-cartkidshoes.php?action=add&id='.$product_id.'">+</a>'.$quantity.'&nbsp;<a class="btn btn-outline-danger waves-effect" style="padding:5px;" href="update-cartkidshoes.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>'.$rm.$cost.'</td>';
                echo '</tr>';
              }
            }

          }



          echo '<tr>';
          echo '<td colspan="3" align="right">Total</td>';
          echo '<td>'.$rm.$total.'</td>';
          echo '</tr>';

          echo '<tr>';
          echo '<td colspan="4" align="right"><a href="update-cartkidshoes.php?action=empty" class="btn btn-dark">Empty Cart</a>&nbsp;<a href="index.php" class="btn btn-dark">Continue Shopping</a>';
          if(isset($_SESSION['username'])) {
            echo '<a href="orders-updatekidshoes.php"><button class="btn btn-success btn-rounded" style="float:right;">Checkout</button></a>';
          }

          else {
            echo '<a href="login.php"><button style="float:right;">Login</button></a>';
          }

          echo '</td>';

          echo '</tr>';
          echo '</table>';
        }

        else {
          echo "You have no items in your shopping cart.";
        }





          echo '</div>';
          echo '</div>';
          ?>
        </div>
      </div>









    <?php
    include 'footer.php';
?>