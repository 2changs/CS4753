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
                    <form method="post" action="">
                        <div class="field">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" />
                        </div>
                        <div class="field">
                            <label for="message">Password</label>
                            <input name="pass" id="pass" type="password"></input>
                        </div>
                        <div class="field">
                            <label for="message">Confirm Password</label>
                            <input name="pass2" id="pass2" type="password"></input>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Register" action="register"/></li>
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
			    elseif($_POST['action']=="signup")
			    {
			        $name       = mysqli_real_escape_string($connection,$_POST['name']);
			        $email      = mysqli_real_escape_string($connection,$_POST['email']);
			        $password   = mysqli_real_escape_string($connection,$_POST['password']);
			        $query = "SELECT email FROM users where email='".$email."'";
			        $result = mysqli_query($connection,$query);
			        $numResults = mysqli_num_rows($result);
			        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
			        {
			            $message =  "Invalid email address please type a valid email!!";
			        }
			        elseif($numResults>=1)
			        {
			            $message = $email." Email already exist!!";
			        }
			        else
			        {
			            mysql_query("insert into users(name,email,password) values('".$name."','".$email."','".md5($password)."')");
			            $message = "Signup Sucessfully!!";
			        }
			    }
			}

			?>


	</body>
</html>
