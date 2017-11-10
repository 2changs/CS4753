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
						<h1><a href="index.html">Home</a></h1>
						<h1><a href="shop.html">Shop Now</a></h1>
						<h1><a href="about.html">About Us</a></h1>
                        <div id="rightbutton">
                            <h1 style="color: silver"><a href="register.php">Sign Up/Login</a></h1>
                        </div>
					</div>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="index.html">Home</a></li>
								<li><a href="generic.html">Generic</a></li>
								<li><a href="elements.html">Elements</a></li>
								<li><a href="#">Log In</a></li>
								<li><a href="#">Sign Up</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

				<!-- Wrapper -->
					<section id="wrapper">
						<header>
                            <div class="inner">
							<div class="logo_container"><image class="logo" src="img/logo.png"></div>
								<h2>Log In</h2>
                                <form method="post" action="#">
                                    <div class="field">
                                        <label for="name">Email</label>
                                        <input type="email" name="email" id="email" />
                                    </div>
                                    <div class="field">
                                        <label for="message">Password</label>
                                        <input name="password" id="password" type="password"></input>
                                    </div>
																		<input name="action" type="hidden" value="login" /></p>
                                    <ul class="actions">
                                        <li><input type="submit" value="Log In" /></li>
                                        <li>Don't have an account? <a href="register.php">Sign up</a> to subscribe to our service and to stay updated on fidget spinner news.</li>
                                    </ul>
                                </form>
																<?php
																session_start(); // Starting Session
																require 'vendor/autoload.php';
																include('db.php');
																if(isset($_POST['action']))
																{
																    if($_POST['action']=="login")
																    {
																        $email = mysqli_real_escape_string($connection,$_POST['email']);
																        $password = mysqli_real_escape_string($connection,$_POST['password']);
																        $strSQL = mysqli_query($connection,"select first_name, last_name, email from customers where email='".$email."' and password='".md5($password)."'");
																        $Results = mysqli_fetch_array($strSQL);
																        if(count($Results)>=1)
																        {
																						$_SESSION['email']=$Results['email'];
																						$_SESSION['first_name']=$Results['first_name'];
																						$_SESSION['last_name']=$Results['last_name'];
																						// echo $_SESSION['email']";
																						echo "<script type='text/javascript'> document.location = 'loggedin.php'; </script>";// Redirecting To Other Page
																        }
																        else
																        {
																            $message = "Invalid email or password!!";
																            echo("<p class='login-error-message' stype='color: red;'>".$message."</p>");
																        }
																    }
																}
																?>
							</div>
						</header>
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
