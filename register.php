<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if (isset($_SESSION["username"])) {header ("location:index.php");}


?>
   

   
<?php
    include 'header.php';
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Login V7</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->
    </head>

    <body>

        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-t-90 p-b-30">
                    <form method="POST" action="insert.php" class="">
                        <span class="login100-form-title p-b-40">
						Register
					</span>

                        <div class="small-4 columns">
                            <label for="right-label" class="right inline">First Name</label>
                        </div>
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Firstname">
                            <input class="input100" type="text" id="right-label" name="fname" placeholder="Ilham">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="small-4 columns">
                            <label for="right-label" class="right inline">Last Name</label>
                        </div>
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Firstname">
                            <input class="input100" type="text" name="lname" placeholder="Yusof">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="small-4 columns">
                            <label for="right-label" class="right inline">Address</label>
                        </div>
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Firstname">
                            <input class="input100" type="text" name="address" placeholder="Parit Raja">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="small-4 columns">
                            <label for="right-label" class="right inline">City</label>
                        </div>
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Firstname">
                            <input class="input100" type="text" name="city" placeholder="Batu Pahat">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="small-4 columns">
                            <label for="right-label" class="right inline">Pin Code</label>
                        </div>
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Firstname">
                            <input class="input100" type="text" name="pin" placeholder="45000">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="small-4 columns">
                            <label for="right-label" class="right inline">E-mail</label>
                        </div>
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Firstname">
                            <input class="input100" type="text" name="email" placeholder="ilham@gmail.com">
                            <span class="focus-input100"></span>
                        </div>

<div class="small-4 columns">
                            <label for="right-label" class="right inline">Password</label>
                        </div>
                        <div class="wrap-input100 validate-input m-b-20" data-validate="Please enter password">
                            <span class="btn-show-pass">
							<i class="fa fa fa-eye"></i>
						</span>
                            <input class="input100" type="password" name="pwd" placeholder="Password">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-login100-form-btn">
                           
                            <button type="submit" id="right-label" value="Register" class="login100-form-btn">
							Register
						</button>
                        </div>

                        <div class="flex-col-c p-t-224">
                            <span class="txt2 p-b-10">
							Already have account?
						</span>

                            <a href="login.php" class="txt3 bo1 hov1">
							Login now
						</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>


        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>
        <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

    </body>

    </html>
