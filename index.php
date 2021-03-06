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
						<h1 style="color: silver"><a href="index.php">Home</a></h1>
						<h1><a href="shop.php">Shop Now</a></h1>
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
						<div class="inner">
							<div><image class="logo" src="img/logo.png"></div>
                            <p>Lost your fidget spinner? Ball bearing break? Do not fret! Our services will save your fidget spinning career!</p>
						</div>
					</section>

				<!-- Wrapper -->
					<section id="wrapper">

						<!-- One -->
							<section id="one" class="wrapper spotlight style1">
								<div class="inner">
									<a href="shop.php" class="image"><img src="img/blackfidget.png" alt="" /></a>
									<div class="content">
										<h2 class="major">Black Fidget Spinner</h2>
										<p>This is a standard black fidget spinner with the perfect capability of spinning.
											<br/> You can find a black fidget spinner in a Standard plan!
											<br /> Click "Learn More" to learn more about these plans.
										</p>
										<a href="shop.php" class="special">Learn more</a>
									</div>
								</div>
							</section>

						<!-- Two -->
							<section id="two" class="wrapper alt spotlight style2">
								<div class="inner">
									<a href="shop.php" class="image"><img src="img/redfidget.png" alt="" /></a>
									<div class="content">
										<h2 class="major">Red Fidget Spinner</h2>
										<p>This is a plus red fidget spinner with the ability to have decal and other decorations.
											<br/> You can find a red fidget spinner in a Plus plan!
											<br /> Click "Learn More" to learn more about these plans.
										</p>
										<a href="shop.php" class="special">Learn more</a>
									</div>
								</div>
							</section>

						<!-- Three -->
							<section id="three" class="wrapper spotlight style3">
								<div class="inner">
									<a href="shop.php" class="image"><img src="img/greenfidget.png" alt="" /></a>
									<div class="content">
                      <h2 class="major">Green Fidget Spinner</h2>
											<p>This is a pro green fidget spinner that you can customize any way you want!
												<br/> You can find a green fidget spinner in a Pro plan!
												<br /> Click "Learn More" to learn more about these plans.
											</p>
										<a href="shop.php" class="special">Learn more</a>
									</div>
								</div>
							</section>

						<!-- Four -->
							<section id="four" class="wrapper alt style1">
								<div class="inner">
									<h2 class="major">Guaranteed Customer Satifaction</h2>
                                    <p>Here are a few reviews by our valued customers.</p>
									<section class="features">
										<article>
											<img src="img/customer1.jpg" alt="" style="display:block; margin-left:auto; margin-right:auto; padding-bottom: 10px;"/>
											<h3 class="major">Dayshawn Marshall</h3>
											<p>Yo yo yo I love fidget spinners!!!!!!!!!! I lose one every month, so this really replenishes my supply!</p>
											<!-- <a href="#" class="special">Learn more</a> -->
										</article>
										<article>
											<img src="img/customer2.jpg" alt="" style="display:block; margin-left:auto; margin-right:auto; padding-bottom: 10px;"/>
											<h3 class="major">Surprised Boi</h3>
                                            <p>Fidget spinners are my life, and I battle with them in my free time. This service replaces my damaged spinners!</p>
											<!-- <a href="#" class="special">Learn more</a> -->
										</article>
										<!-- <article> -->
										<!--     <a href="#" class="image"><img src="images/solidstate/pic06.jpg" alt="" /></a> -->
										<!--     <h3 class="major">Ante fermentum</h3> -->
										<!--     <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p> -->
										<!--     <a href="#" class="special">Learn more</a> -->
										<!-- </article> -->
										<!-- <article> -->
										<!--     <a href="#" class="image"><img src="images/solidstate/pic07.jpg" alt="" /></a> -->
										<!--     <h3 class="major">Fusce consequat</h3> -->
										<!--     <p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p> -->
										<!--     <a href="#" class="special">Learn more</a> -->
										<!-- </article> -->
									</section>
									<!-- <ul class="actions"> -->
									<!--     <li><a href="shop.html" class="button">Browse All</a></li> -->
									<!-- </ul> -->
								</div>
							</section>

							<section id="video" class="wrapper alt style1">
								<div class="inner">
									<h2 class="major">Cool tricks with a fidget spinner!</h2>
									<iframe width="100%" height="650"
									src="https://www.youtube.com/embed/cl73DZaIh4Q?autoplay=1" frameborder=0>
									</iframe>
								</div>
							</section>
					</section>

				<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<h2 class="major">Get in touch</h2>
                            <p>Your satisfaction is our priority, and we will work day and night to make sure you get your fidget spinners both on time and in quality condition! In case you would like to contact us about our product, or if you have any questions at call, you can reach us through the form below.</p>
							<form method="post" action="#">
								<div class="field">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" />
								</div>
								<div class="field">
									<label for="email">Email</label>
									<input type="email" name="email" id="email" />
								</div>
								<div class="field">
									<label for="message">Message</label>
									<textarea name="message" id="message" rows="4"></textarea>
								</div>
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</form>
							<ul class="contact">
								<li class="fa-home">
									Fidget Spinner Professionals, Inc.com<br />
									Rice Hall, 120<br />
                                    Charlottesville, Virginia 22903
								</li>
								<li class="fa-phone">(911) 123-4567</li>
								<li class="fa-envelope"><a href="#">customerservice@fidgetspinnerprofessionals.com</a></li>
								<li class="fa-twitter"><a href="#">twitter.com/fidgetspinnerprofessionals</a></li>
								<li class="fa-facebook"><a href="#">facebook.com/fidgetspinnerprofessionals</a></li>
								<li class="fa-instagram"><a href="#">instagram.com/fidgetspinnerprofessionals</a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Fidget Spinner Professionals Inc.com All rights reserved.</li>
							</ul>
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
