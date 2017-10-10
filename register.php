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
							<div><image class="logo" src="img/logo.png"></div>
								<h2>Sign Up</h2>
                    <p>
                        Signing up allows you to subscribe to our fidget spinner service, as well as receive up-to-date information on the latest fidget spinner news and trends.
                    </p>
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
                            <select>
								<option value="AL">Alabama</option>
								<option value="AK">Alaska</option>
								<option value="AZ">Arizona</option>
								<option value="AR">Arkansas</option>
								<option value="CA">California</option>
								<option value="CO">Colorado</option>
								<option value="CT">Connecticut</option>
								<option value="DE">Delaware</option>
								<option value="DC">District Of Columbia</option>
								<option value="FL">Florida</option>
								<option value="GA">Georgia</option>
								<option value="HI">Hawaii</option>
								<option value="ID">Idaho</option>
								<option value="IL">Illinois</option>
								<option value="IN">Indiana</option>
								<option value="IA">Iowa</option>
								<option value="KS">Kansas</option>
								<option value="KY">Kentucky</option>
								<option value="LA">Louisiana</option>
								<option value="ME">Maine</option>
								<option value="MD">Maryland</option>
								<option value="MA">Massachusetts</option>
								<option value="MI">Michigan</option>
								<option value="MN">Minnesota</option>
								<option value="MS">Mississippi</option>
								<option value="MO">Missouri</option>
								<option value="MT">Montana</option>
								<option value="NE">Nebraska</option>
								<option value="NV">Nevada</option>
								<option value="NH">New Hampshire</option>
								<option value="NJ">New Jersey</option>
								<option value="NM">New Mexico</option>
								<option value="NY">New York</option>
								<option value="NC">North Carolina</option>
								<option value="ND">North Dakota</option>
								<option value="OH">Ohio</option>
								<option value="OK">Oklahoma</option>
								<option value="OR">Oregon</option>
								<option value="PA">Pennsylvania</option>
								<option value="RI">Rhode Island</option>
								<option value="SC">South Carolina</option>
								<option value="SD">South Dakota</option>
								<option value="TN">Tennessee</option>
								<option value="TX">Texas</option>
								<option value="UT">Utah</option>
								<option value="VT">Vermont</option>
								<option value="VA">Virginia</option>
								<option value="WA">Washington</option>
								<option value="WV">West Virginia</option>
								<option value="WI">Wisconsin</option>
								<option value="WY">Wyoming</option>
							</select>
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
										            echo("<p class='submission_message_error'>".$message."</p>");
										        }
										        elseif($numResults>=1)
										        {
										            $message = "Email is already registered.";
										            echo("<p class='submission_message_error'>".$message."</p>");
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
										            $message = "Signed up sucessfully!!";
										            echo("<p class='submission_message_success'>".$message."</p>");
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
