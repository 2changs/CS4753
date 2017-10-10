<html>
	<head>
		<title>FPM</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/solidstate/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/solidstate/css/main.css" />
		<link rel="stylesheet" href="assets/header.css" />
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
							<div><image class="logo" src="img/logo.png"></div>
								<h2>Sign Up</h2>
                    <p>
                        Signing up allows you to subscribe to our fidget spinner service, as well as receive up-to-date information on the latest fidget spinner news and trends.
                    </p>
										<?php
										include('db.php');
										if(isset($_POST['action']))
										{
										    if($_POST['action']=="login")
										    {
										        $email = mysqli_real_escape_string($connection,$_POST['email']);
										        $password = mysqli_real_escape_string($connection,$_POST['password']);
										        $strSQL = mysqli_query($connection,"select name from users where email='".$email."' and password='".md5($password)."'");
										        $Results = mysqli_fetch_array($strSQL);
										        if(count($Results)>=1)
										        {
										            $message = $Results['name']." Login Sucessfully!!";
										        }
										        else
										        {
										            $message = "Invalid email or password!!";
										        }
										    }
										    elseif($_POST['action']=="register")
										    {
										        $email      = mysqli_real_escape_string($connection,$_POST['email']);
										        $password   = mysqli_real_escape_string($connection,$_POST['pass']);
										        $query = "SELECT email FROM customers where email='".$email."'";
										        $result = mysqli_query($connection,$query);
										        $numResults = mysqli_num_rows($result);
										        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
										        {
										            $message =  "Invalid email, address please type a valid email!!";
										        }
										        elseif($numResults>=1)
										        {
										            $message = $email."Email already registered.";
										        }
										        else
										        {
										        	$first_name = mysqli_real_escape_string($connection,$_POST['first_name']);
										        	$last_name = mysqli_real_escape_string($connection,$_POST['last_name']);
										        	$address = mysqli_real_escape_string($connection,$_POST['address']);
										        	$city = mysqli_real_escape_string($connection,$_POST['city']);
										        	$state = mysqli_real_escape_string($connection,$_POST['state']);
										        	$zip = mysqli_real_escape_string($connection,$_POST['zip']);
										        	$phone_number = mysqli_real_escape_string($connection,$_POST['phone_number']);

										            mysqli_query($connection, "insert into customers(email, password, first_name, last_name, address, city, state, zip, phone_number) values('".$email."','".md5($password)."','".$first_name."','".$last_name."','".$address."','".$city."','".$state."','".$zip."','".$phone_number."')");
										            $message = "Signup Sucessfully!!";
										        }
										    }
										}
										?>
                    <form method="post" action="">
                        <div class="field">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required />
                        </div>
                        <div class="field">
                            <label for="password">Password</label>
                            <input name="pass" id="pass" type="password" required ></input>
                        </div>
                        <div class="field">
                            <label for="password2">Confirm Password</label>
                            <input name="pass2" id="pass2" type="password" required ></input>
                        </div>
                        <div class="field">
                            <label for="first_name">First Name</label>
                            <input name="first_name" id="first_name" type="text" required ></input>
                        </div>
                        <div class="field">
                            <label for="last_name">Last Name</label>
                            <input name="last_name" id="last_name" type="text" required ></input>
                        </div>
                        <div class="field">
                            <label for="address">Address</label>
                            <input name="address" id="address" type="text" required ></input>
                        </div>
                        <div class="field">
                            <label for="city">City</label>
                            <input name="city" id="city" type="text" required ></input>
                        </div>
                        <div class="field">
                            <label for="state">State</label>
                            <input name="state" id="state" type="text" required ></input>
                        </div>
                        <div class="field">
                            <label for="zip">Zip Code</label>
                            <input name="zip" id="zip" type="text" required ></input>
                        </div>
                        <div class="field">
                            <label for="phone_number">Phone Number</label>
                            <input name="phone_number" id="phone_number" type="text"></input>
                        </div>
                        <ul class="actions">
							<input name="action" type="hidden" value="register" /></p>
                            <li><input type="submit" value="Register" action="Register"/></li>
                            <li>Already have an account? <a href="login.php">Log in</a> instead.</li>
                        </ul>
                    </form>
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
