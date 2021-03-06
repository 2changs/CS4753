<?php
include('session.php');
?>
<!DOCTYPE HTML>
<!--
    Solid State by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>FPM</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/solidstate/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/solidstate/css/main.css" />
        <link rel="stylesheet" href="assets/header.css" />
        <link rel="stylesheet" href="assets/style.css" />
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/solidstate/css/ie9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/solidstate/css/ie8.css" /><![endif]-->
    </head>
    <body>

        <!-- Page Wrapper -->
        <div id="page-wrapper">

            <!-- Header -->
            <div id="header" class="">
                <h1><a href="index.php">Home</a></h1>
                <h1 style="color: silver"><a href="shop.php">Shop Now</a></h1>
                <h1><a href="about.php">About Us</a></h1>
    						<h1><a href="contact.php">Contact Us</a></h1>
    							<?php
    							if ($_SESSION['loggedin'] == true) {
    							?>
    							<h1><a href="loggedin.php">My Account</a></h1>
    	            <div id="rightbutton">
                      <h1><a href="logout.php">Log Out</a></h1>
    							</div>
    							<?php
    							} else {
    							?>
    	            <div id="rightbutton">
    	                <h1><a href="register.php">Sign Up/Login</a></h1>
    							</div>
    							<?php
    							}
    							?>
            </div>

            <!-- Banner -->
            <section id="banner">
                <div class="inner" style="text-align: center;">
                    <div><image class="logo" src="img/logo.png"></div>
                    <?php
                    if ($_SESSION['loggedin'] == true) {
                    ?>
                    <p>You are about to purchase the Standard plan. Click the button below to proceed!</p>
                    <form class="logo" action="https://test.bitpay.com/checkout" method="post" >
                        <input type="hidden" name="action" value="checkout" />
                        <input type="hidden" name="posData" value="" />
                        <input type="hidden" name="data" value="eKH0j0sYXbTiSddl+h3PM5bAcb49nb+HWkkAPGXP5k1GY065wZ2prBo5uL2LwTHf5V67c1hx6ilIFEQ1XPfO2LIv5NLcCxdBncEmEU8eJVeJzMHnIFmcoBaxH5G7+qnkDEEtUpTucp38Wl92ziXuMiO/8Fa7yk+9ttmdEefL+xcTLKHfmznZCuNftvx9gIkQ" />
                        <input type="image" src="https://test.bitpay.com/img/button-large.png" border="0" name="submit" alt="BitPay, the easy way to pay with bitcoins." >
                    </form>
                    <?php
                      } else {
                    ?>
                    <p>Interested in purchasing the Standard plan? <a href="login.php"> Sign in</a> or <a href="register.php"> create an account</a> today!</p>
                    <?php
                    }
                    ?>
                </div>

            </section>

        </div>

        <!-- Scripts -->
        <script src="assets/solidstate/js/skel.min.js"></script>
        <script src="assets/solidstate/js/jquery.min.js"></script>
        <script src="assets/solidstate/js/jquery.scrollex.min.js"></script>
        <script src="assets/solidstate/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/solidstate/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/solidstate/js/main.js"></script>

    </body>
</html>
