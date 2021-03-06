<?php
include('session.php');
?>
<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>FPM</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/phantom/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/phantom/css/main.css" />
		<link rel="stylesheet" href="assets/solidstate/css/main.css" />
		<link rel="stylesheet" href="assets/header.css" />
		<link rel="stylesheet" href="assets/style.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/phantom/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/phantom/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

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

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header class="shopheader">
							<div><image class="logo" src="img/logo.png"></div>
                                <br><br>
								<h1>Our Plans</h1>
                                <p>Get fidget spinners every month by picking a plan below!</p>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/phantom/pic01.jpg" alt="" />
									</span>
									<a href="buyplan1.php">
										<h2>Standard</h2>
										<div class="content">
											<p>Pick a fidget spinner from a set of standard spinners, and get one every month!</p> <br/>
											<p id="standardPrice"> $5 </p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/phantom/pic02.jpg" alt="" />
									</span>
									<a href="buyplan2.php">
										<h2>Plus</h2>
										<div class="content">
											<p>Gain access to a set of specialty fidget spinners, including spinners with LEDs.</p> <br/>
											<p id="plusPrice"> $200 </p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/phantom/pic03.jpg" alt="" />
									</span>
									<a href="buyplan3.php">
										<h2>Pro</h2>
										<div class="content">
											<p>Customize your own fidget spinner! Add accessories such as Bluetooth music playing, LED lights, and cool shapes</p> <br/>
											<p id="proPrice"> $1000000 </p>
										</div>
									</a>
								</article>
								<!-- <article class="style4"> -->
								<!--     <span class="image"> -->
								<!--         <img src="images/phantom/pic04.jpg" alt="" /> -->
								<!--     </span> -->
								<!--     <a href="generic.html"> -->
								<!--         <h2>Tempus</h2> -->
								<!--         <div class="content"> -->
								<!--             <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p> -->
								<!--         </div> -->
								<!--     </a> -->
								<!-- </article> -->
								<!-- <article class="style5"> -->
								<!--     <span class="image"> -->
								<!--         <img src="images/phantom/pic05.jpg" alt="" /> -->
								<!--     </span> -->
								<!--     <a href="generic.html"> -->
								<!--         <h2>Aliquam</h2> -->
								<!--         <div class="content"> -->
								<!--             <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p> -->
								<!--         </div> -->
								<!--     </a> -->
								<!-- </article> -->
								<!-- <article class="style6"> -->
								<!--     <span class="image"> -->
								<!--         <img src="images/phantom/pic06.jpg" alt="" /> -->
								<!--     </span> -->
								<!--     <a href="generic.html"> -->
								<!--         <h2>Veroeros</h2> -->
								<!--         <div class="content"> -->
								<!--             <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p> -->
								<!--         </div> -->
								<!--     </a> -->
								<!-- </article> -->
								<!-- <article class="style2"> -->
								<!--     <span class="image"> -->
								<!--         <img src="images/phantom/pic07.jpg" alt="" /> -->
								<!--     </span> -->
								<!--     <a href="generic.html"> -->
								<!--         <h2>Ipsum</h2> -->
								<!--         <div class="content"> -->
								<!--             <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p> -->
								<!--         </div> -->
								<!--     </a> -->
								<!-- </article> -->
								<!-- <article class="style3"> -->
								<!--     <span class="image"> -->
								<!--         <img src="images/phantom/pic08.jpg" alt="" /> -->
								<!--     </span> -->
								<!--     <a href="generic.html"> -->
								<!--         <h2>Dolor</h2> -->
								<!--         <div class="content"> -->
								<!--             <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p> -->
								<!--         </div> -->
								<!--     </a> -->
								<!-- </article> -->
								<!-- <article class="style1"> -->
								<!--     <span class="image"> -->
								<!--         <img src="images/phantom/pic09.jpg" alt="" /> -->
								<!--     </span> -->
								<!--     <a href="generic.html"> -->
								<!--         <h2>Nullam</h2> -->
								<!--         <div class="content"> -->
								<!--             <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p> -->
								<!--         </div> -->
								<!--     </a> -->
								<!-- </article> -->
								<!-- <article class="style5"> -->
								<!--     <span class="image"> -->
								<!--         <img src="images/phantom/pic10.jpg" alt="" /> -->
								<!--     </span> -->
								<!--     <a href="generic.html"> -->
								<!--         <h2>Ultricies</h2> -->
								<!--         <div class="content"> -->
								<!--             <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p> -->
								<!--         </div> -->
								<!--     </a> -->
								<!-- </article> -->
								<!-- <article class="style6"> -->
								<!--     <span class="image"> -->
								<!--         <img src="images/phantom/pic11.jpg" alt="" /> -->
								<!--     </span> -->
								<!--     <a href="generic.html"> -->
								<!--         <h2>Dictum</h2> -->
								<!--         <div class="content"> -->
								<!--             <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p> -->
								<!--         </div> -->
								<!--     </a> -->
								<!-- </article> -->
								<!-- <article class="style4"> -->
								<!--     <span class="image"> -->
								<!--         <img src="images/phantom/pic12.jpg" alt="" /> -->
								<!--     </span> -->
								<!--     <a href="generic.html"> -->
								<!--         <h2>Pretium</h2> -->
								<!--         <div class="content"> -->
								<!--             <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p> -->
								<!--         </div> -->
								<!--     </a> -->
								<!-- </article> -->
							</section>
							<br><br>
							<div id="promoSection">
								<h2>Enter a promo code below:</<h2></h2>
								<input id="promoCode" type="text"/>
								<button id="promoButton" onclick="submitPromo()">Apply</button>
								<br><br>
								<p id="promoMessage"></p>
							</div>
						</div>
					</div>
			</div>

		<!-- Scripts -->
			<script src="assets/phantom/js/jquery.min.js"></script>
			<script src="assets/phantom/js/skel.min.js"></script>
			<script src="assets/phantom/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/phantom/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/phantom/js/main.js"></script>

			<script>
				function submitPromo() {
					var promoCode = document.getElementById("promoCode").value;
					var message = document.getElementById("promoMessage");
					var text = "";
					if (promoCode == "FIDGET") {
						document.getElementById("standardPrice").innerHTML = " $2.50 ";
						document.getElementById("standardPrice").style = "color: #f74747;";
						document.getElementById("plusPrice").innerHTML = " $100 ";
						document.getElementById("plusPrice").style = "color: #f74747;";
						document.getElementById("proPrice").innerHTML = " $500000 ";
						document.getElementById("proPrice").style = "color: #f74747;";
						
						text = "50% discount applied to all plans!";
					}
					else {
						text = "Invalid code."
					}
					message.innerHTML = text;
				}
			</script>
	</body>
</html>
