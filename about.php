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
						<h1 style="color: silver"><a href="about.php">About Us</a></h1>
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

				<!-- Wrapper -->
					<section id="wrapper">
						<!-- Content -->

							<div class="wrapper">
								<div class="inner">
									<div><image class="logo" src="img/logo.png"></div>
									<br>
									<h1 style="font-size: 2em">ABOUT US</h1>
									<br>
									<blockquote>
										There are two types of people in this world - someone with fidget spinners & someone who gets new fidget spinners every month.
									</blockquote>
									<br><br>

									<h3 class="major">What We Do</h3>
									<div>
									<p style="float:right;">
										<img src="./img/about_2.jpg" style="float:left; width: 50%; display: inline; margin-right: 12px;" />
										Ever since the fidget spinner existed, new fidget spinners, varying in shapes and sizes, are created every single day. As a result, keeping track of these fidget spinners has become increasingly difficult. Our service hopes to seize this minor struggle for you by bringing new, cutting-edge fidget spinners to your doorstep every single month. For only a minimum low monthly price of $3, excluding shipping and handling, you could enjoy a new fidget spinner that will bring you constant sensation of fidgeting and spinning.
									</p>
									<p style="float:right;">
										Not only will you be up-to-date on these new technologies, our service will eliminate your social anxiety of feeling left out by bringing new fidget spinners to you. Bring these fidget spinners with you into work, class, family dinners, or even friend hangouts, and these will instantly become fantastic conversation starters. Everyone will be ogling over what you have and what they want.
									</p>
									</div>




									<h3 class="major">What We Believe</h3>
									<p style="float:left;">
										<img src="./img/about_1.jpg" style="float:right; width: 30%; margin: 12px; display: inline;" />
										No child should be left behind...without a fidget spinner. <br> <br>

										As the blossoming market of fidget spinners exploded in the past year, we believed that it was our duty to bring our customers a source of happiness in the form of fidget spinners. This idea began when we noticed that there were many sizes and shapes of fidget spinner, and, while all looked fun to spin, it was not possible to spin all of them.
									</p>

									<h3 class="major">How It Works</h3>
									<p>
										It's as easy as 1, 2, 3. <br>
										<ol>
											<li> Subscribe to one of the plans provided. </li>
											<li> Recieve the fidget spinner!!! </li>
											<li> Make all everyone jealous!!! </li>
										</ol>

										On our products page, join a plan that is suitable for you. The first fidget spinner is free! Every month, you will recieve a random fidget spinner and quite soon you will be able to build an empire of fidget spinners that you are able to call yours. There is really no other business that provides such a service for you.
									</p>
									<br>
									<section class="tiles">
										<h2> Ready to get started? Subscribe to a plan today! </h2>
										<article class="style7">
											<span class="image">
												<img style="width:200px; margin: 0 auto;" src="img/shoppingCart.png" alt="" />
											</span>
											<a href="shop.html">
												<h2>Plans</h2>
												<div class="content">
													<p>Check out our plans here!</p>
												</div>
											</a>
										</article>
										<article class="style7">
											<span class="image">
												<img style="width:200px; margin: 0 auto;" src="img/login.png" alt="" />
											</span>
											<a href="shop.html">
												<h2>Sign In</h2>
												<div class="content">
													<p>Already subscribed? Sign in here!</p>
												</div>
											</a>
										</article>
									</section>

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
