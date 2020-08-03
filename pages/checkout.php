<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){
  header("location:index.php");
}
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
                            <a href="./index.php" class="site-logo">
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
                        <li><a href="womenproduct.php">Women</a>
                            <ul class="sub-menu">
                                <li><a href="womenclothes.php">Clothes</a></li>
                                <li><a href="womenshoes.php">Shoes</a></li>
                                <li><a href="womenbag.php">Bags</a></li>
                            </ul>
                        </li>
                        <li><a href="menproduct.php">Men</a>
                            <ul class="sub-menu">
                                <li><a href="menclothes.php">Clothes</a></li>
                                <li><a href="menshoes.php">Shoes</a></li>
                                <li><a href="menbag.php">Bags</a></li>

                            </ul>
                        </li>
                        <li><a href="kidproduct.php">Kid
					</a>
                            <ul class="sub-menu">
                                <li><a href="kidclothes.php">Clothes</a></li>
                                <li><a href="kidshoes.php">Shoes</a></li>
                                <li><a href="kidbag.php">Bags</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="mt-5 pt-4">
            <div class="container wow fadeIn">

                <!-- Heading -->
                <h2 class="h2 text-center">Checkout</h2>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-8 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card content-->
                            <form method="post" action="insert.php" class="card-body">

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6 mb-2">

                                        <!--firstName-->
                                        <div class="md-form ">
                                            <input name="fname" type="text" id="firstName" class="form-control">
                                            <label for="firstName" class="" name="fname">First name</label>
                                        </div>

                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6 mb-2">

                                        <!--lastName-->
                                        <div class="md-form">
                                            <input name="lname" type="text" id="lastName" class="form-control">
                                            <label for="lastName" class="">Last name</label>
                                        </div>

                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Username-->
                                <div class="md-form input-group pl-0 mb-5">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control py-0" placeholder="Username" aria-describedby="basic-addon1">
                                </div>

                                <!--email-->
                                <div class="md-form mb-5">
                                    <input name="email" type="text" id="email" class="form-control" placeholder="youremail@example.com">
                                    <label for="email" class="">Email (optional)</label>
                                </div>

                                <!--address-->
                                <div class="md-form mb-5">
                                    <input name="address" type="text" id="address" class="form-control" placeholder="1234 Main St">
                                    <label for="address" class="">Address</label>
                                </div>

                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-lg-4 col-md-12 mb-4">

                                        <label for="country">Country</label>
                                        <select class="custom-select d-block w-100" id="country" required>
                    <option value="">Choose...</option>
                    <option>United States</option>
                    <option>Malaysia</option>
                  </select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>

                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-lg-4 col-md-6 mb-4">

                                        <label for="state">State</label>
                                        <select class="custom-select d-block w-100" id="state" required>
                    <option value="">Choose...</option>
                    <option>California</option>
                    <option>Johor</option>
                  </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>

                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-lg-4 col-md-6 mb-4">

                                        <label for="zip">Zip</label>
                                        <input name="pin"type="text" class="form-control" id="zip" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Zip code required.
                                        </div>

                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <hr>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="same-address">
                                    <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="save-info">
                                    <label class="custom-control-label" for="save-info">Save this information for next time</label>
                                </div>


                                
                                <br>
                               
                                <hr class="mb-4">
                                <button class="btn btn-primary btn-lg btn-block" type="submit"><a class="text-white" href="payment.php">Proceed to Payment</a></button>

                            </form>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-4">

                        <!-- Heading -->
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="">Your cart</span>
                        </h4>

                        <!-- Cart -->
                        <ul class="list-group mb-3 z-depth-1">
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Order Summary</h6>
                                    <div class="row" style="margin-top:10px;">
                                        <div class="">
                                            <hr>

                                            <?php
          $user = $_SESSION["username"];
          $result = $mysqli->query("SELECT * from orders where email='".$user."'");
          if($result) {
            while($obj = $result->fetch_object()) {
                $totalall = $obj->total;
                $totalall = $totalall + $obj->total;
              //echo '<div class="large-6">';
              echo '<h6 class="my-0">Product Name:'.$obj->product_name.'</h6>';
              echo '<h6 class="">Price Per Unit: '.$currency.$obj->price.'</h6>';
              echo '<h6 class="my-0">Units Bought: '.$obj->units.'</h6>';
              echo '<h6 class="my-0">Total Cost: '.$currency.$obj->total.'</h6>';
                echo '<br>';
              //echo '</div>';
              //echo '<div class="large-6">';
              //echo '<img src="images/products/sports_band.jpg">';
              //echo '</div>';
//              echo '<p><hr></p>';
                

            }
          }
               $totalall = $totalall + 10;           
              echo '<h6 class="my-0">Total Cost: '.$currency.$totalall.'</h6>';

        ?>
                                        </div>
                                    </div>
                                </div>
                            </li>








                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Shipping Charge</h6>
                                </div>
                                <span class="">RM10</span>
                            </li>
                            
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total </span>
                                <strong>RM 560.00</strong>
                            </li>
                        </ul>
                        <!-- Cart -->

                        <!-- Promo code -->

                        <!-- Promo code -->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>
        </main>
        <!--Main layout-->






        <script src="js/vendor/jquery.js"></script>
        <script src="js/foundation.min.js"></script>
        <script>
            $(document).foundation();

        </script>
    </body>
    <?php
    include 'footer.php';
?>

    </html>
