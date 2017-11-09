<?php
include('sessionwithlogout.php');
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
		<link rel="stylesheet" href="assets/phantom/css/main.css" />
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
              <h1><a href="shop.php">Shop Now</a></h1>
              <h1><a href="about.php">About Us</a></h1>
              <h1><a href="contact.php">Contact Us</a></h1>
                <?php
                if ($_SESSION['loggedin'] == true) {
                ?>
                <h1 style="color: silver"><a href="loggedin.php">My Account</a></h1>
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

				<!-- Wrapper -->
					<section id="wrapper">
						<!-- Content -->

							<div class="wrapper">
								<div class="inner">
									<div><image class="logo" src="img/logo.png"></div>
									<br>
									<h1 style="font-size: 2em">Welcome, <i><?php echo $login_session_name; ?></i></h1>
									<br>
									<blockquote>
										There are two types of people in this world - someone with fidget spinners & someone who gets new fidget spinners every month.
									</blockquote>
									<br><br>


								</div>
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
