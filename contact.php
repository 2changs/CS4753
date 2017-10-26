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
        <script>
        	var thingToChangeRed;
            function validateInputs() {
            	var name = document.getElementById("name");
                var email = document.getElementById("email");
                var subject = document.getElementById("subject");
                var message = document.getElementById("message");
                var phpError = document.getElementById("php_error");
                var form = document.getElementById("contact_form");

                error_message.innerHTML = "";
                if(phpError) {
                	phpError.innerHTML = "";
                }

                if (thingToChangeRed) {
                	thingToChangeRed.style = "";
                	thingToChangeRed = null;
                }
                if (!isAllAlpha(name.value) && !thingToChangeRed) {
                    error_message.innerHTML = "Name must contain only letters.";
                    thingToChangeRed = name;
                }
                if (name.value.length > 250 && !thingToChangeRed) {
                	error_message.innerHTML = "Your name can only be up to 250 characters long.";
                	thingToChangeRed = name;
                }
               	if (subject.value.length > 250 && !thingToChangeRed) {
                	error_message.innerHTML = "Your subject can only be up to 250 characters long.";
                	thingToChangeRed = subject;
                }
                if (message.value.length > 500 && !thingToChangeRed) {
                	error_message.innerHTML = "Your message can only be 500 characters long.";
                	thingToChangeRed = message;
                }
            	if(thingToChangeRed) {
            		thingToChangeRed.style = "border-color: red";
            		return false;
            	}
            	form.submit();
            }

            function isAllAlpha(str) {
                return /^[a-zA-Z ]+$/.test(str);
            }
        </script>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<div id="header" class="">
						<h1><a href="index.html">Home</a></h1>
						<h1><a href="shop.html">Shop Now</a></h1>
						<h1><a href="about.html">About Us</a></h1>
						<h1><a href="contact.php">Contact Us</a></h1>
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
                        Have any questions about our business or just want to say hi? Shoot us a message and we'll get back to you as soon as possible!
                    </p>
                    <form id="contact_form" method="post" action="" onsubmit="event.preventDefault(); validateInputs();">
                        <div class="field">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" required />
                        </div>
                        <div class="field">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required />
                        </div>
                        <div class="field">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" required />
                        </div>
                        <div class="field">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="40" rows="5"></textarea>
                        </div>

                        <ul class="actions">
							<input name="action" type="hidden" value="contact" /></p>
                            <li><input type="submit" value="Send" action="Contact"/></li>
                        </ul>
                    </form>
                    <p id="error_message" class="submission_message_error"> </p>
										<?php
										include('db.php');
										if(isset($_POST['action']) && $_POST['action'] == "contact")
										{
										    $name = mysqli_real_escape_string($connection,$_POST['name']);
									        $email = mysqli_real_escape_string($connection,$_POST['email']);
									        $subject = mysqli_real_escape_string($connection,$_POST['subject']);
									        $message = mysqli_real_escape_string($connection,$_POST['message']);	

									        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
									        {
									            $message =  "Invalid email, address please type a valid email!!";
									            echo("<p id='php_error' class='submission_message_error'>".$message."</p>");
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


									            mysqli_query($connection, "insert into contact(name, email, subject, message) values('".$name."','".$email."','".$subject."','".$message."')");

									            $message = "Message has been sent! We will try to get back to you as soon as possible!s";
									            echo("<p class='submission_message_success'>".$message."</p>");
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
